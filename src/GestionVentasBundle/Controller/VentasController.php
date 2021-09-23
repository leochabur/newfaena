<?php

namespace GestionVentasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use GestionFaenaBundle\Entity\gestionBD\EntidadExterna;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\NotNull;
use GestionFaenaBundle\Entity\faena\ComprobanteVenta;
use GestionFaenaBundle\Entity\gestionBD\Articulo;
use GestionFaenaBundle\Entity\faena\TipoVenta;
use GestionFaenaBundle\Entity\faena\ItemCarga;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use GestionFaenaBundle\Entity\gestionBD\RubroEntidad;
use GestionFaenaBundle\Form\gestionBD\RubroEntidadType;
use GestionFaenaBundle\Entity\FaenaDiaria;
use GestionFaenaBundle\Entity\ProcesoFaena;
use GestionFaenaBundle\Entity\faena\ProcesoFaenaDiaria;
use GestionVentasBundle\Entity\options\EntidadExternaConcepto;
use GestionFaenaBundle\Entity\faena\SalidaStock;
use GestionFaenaBundle\Controller\GestionFaenaController;
use GestionFaenaBundle\Entity\faena\ValorNumerico;
use GestionFaenaBundle\Entity\faena\OrdenCarga;
use GestionFaenaBundle\Entity\faena\ConceptoMovimiento;
use Psr\Log\LoggerInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use GestionVentasBundle\Entity\NumeracionRemito;
use GestionVentasBundle\Form\NumeracionRemitoType;

use GestionFaenaBundle\Entity\gestionBD\Reparto;
use GestionFaenaBundle\Form\gestionBD\RepartoType;

use GestionFaenaBundle\Entity\gestionBD\Sucursal;
use GestionFaenaBundle\Form\gestionBD\SucursalType;

use GestionFaenaBundle\Entity\gestionBD\Consignatario;
use GestionFaenaBundle\Form\gestionBD\ConsignatarioType;

use GestionFaenaBundle\Entity\gestionBD\Remito;
use GestionFaenaBundle\Form\gestionBD\RemitoType;

use GestionFaenaBundle\Entity\gestionBD\Destinatario;
use GestionFaenaBundle\Form\gestionBD\DestinatarioType;

use GestionFaenaBundle\Entity\gestionBD\EntidadComercial;

/**
 * @Route("/ventas")
 */

class VentasController extends Controller
{

    private $typesEntities = [
                                9 => RepartoType::class,
                                5 => SucursalType::class,
                                6 => ConsignatarioType::class,
                                7 => RemitoType::class,
                                12 => DestinatarioType::class
                            ];

    /**
     * @Route("/config/desactivar/{id}", name="bd_baja_entidad_venta")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function desactivarEntidad($id)
    {
        $em = $this->getDoctrine()->getManager();
        $ente = $em->getRepository(EntidadExterna::class)->find($id);
        if ($ente) 
        {
            try
            {
                $ente->setActiva(false);
                $em->flush();
                return new JsonResponse(['ok' => true]);

            }
            catch(\Exception $e){
                return new JsonResponse(['ok' => false, 'message' => $e->getMessage()]);
            }
        }
        else
        {
            return new JsonResponse(['ok' => false, 'message' => 'No se puede encontrar el destinatario']);
        }
    }


    /**
     * @Route("/config/altacliente/{id}", name="bd_alta_entidad", methods={"GET", "POST"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function altaDestinatarioVenta($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(EntidadExterna::class);
        $code = 0;
        $entes = [];
        $label = '';
        $ente = null;
        if ($id == 9) //alta de un cliente de reparto
        {
            $label = 'Nuevo Cliente Reparto';
            $ente = new Reparto();
            $form = $this->getFormAltaEntidad($ente, RepartoType::class);
            $entes = $repository->getClientesConInstancia(Reparto::class);
            $code = 9;
        }
        elseif ($id == 5) //alta de un cliente de reparto
        {
            $label = 'Nueva Sucursal';
            $ente = new Sucursal();
            $form = $this->getFormAltaEntidad($ente, SucursalType::class);
            $entes = $repository->getClientesConInstancia(Sucursal::class);
            $code = 5;
        }
        elseif ($id == 6) //alta de un cliente de reparto
        {
            $label = 'Nuevo Consignatario';
            $ente = new Consignatario();
            $form = $this->getFormAltaEntidad($ente, ConsignatarioType::class);
            $entes = $repository->getClientesConInstancia(Consignatario::class);
            $code = 6;
        }
        elseif ($id == 7) //alta de un cliente de reparto
        {
            $label = 'Nuevo Cliente';
            $ente = new Remito();
            $form = $this->getFormAltaEntidad($ente, RemitoType::class);
            $entes = $repository->getClientesConInstancia(Remito::class);
            $code = 7;
        }

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            if ($form->isValid())
            {
                $em->persist($ente);
                $em->flush();
                return $this->redirectToRoute('bd_alta_entidad', [ 'id' => $id ]);
            }
        }

        return $this->render('@GestionVentas/bd/nuevoDestinatario.html.twig', 
                             ['code' => $code, 'label' => $label, 'form' => $form->createView(), 'entes' => $entes]);
    }


    private function getFormAltaEntidad($entidad, $class, $depends = [])
    {
        return $this->createForm($class, $entidad, array_merge(['method' => 'POST'], $depends));
    }


    private function getFormAsociarConsignatario($id)
    {
        $form =$this->createFormBuilder()
                    ->add('consignatario', 
                          EntityType::class, [
                          'class' => 'GestionFaenaBundle:gestionBD\Consignatario',                    
                          'query_builder' => function (EntityRepository $er) {
                                                                                return $er->createQueryBuilder('t')
                                                                                          ->where('t.activa = :activa')
                                                                                          ->setParameter('activa', true)
                                                                                          ->orderBy('t.valor');
                                                                             },
                    ]) 
                    ->add('asociar', SubmitType::class)
                    ->setAction($this->generateUrl('vtas_agregar_como_consignatario', [ 'id' => $id ]))
                    ->setMethod('POST')               
                    ->getForm();
        return $form;
    }


    /**
     * @Route("/addconsig/{id}", name="vtas_agregar_como_consignatario")
     */
    public function agregarComoConsignatario($id, Request $request) //agrega a un cliente un destinatario como consignatario
    {
        $em = $this->getDoctrine()->getManager();

        $entidad = $em->find(EntidadComercial::class, $id);

        $formAsoc = $this->getFormAsociarConsignatario($id);

        $formAsoc->handleRequest($request);

        $data = $formAsoc->getData();

        $consignatario = $data['consignatario'];

        if ($consignatario)
        {
            $consignatario->setOriginal($entidad);
            $em->flush();
            return new JsonResponse(['ok' => true]);
        }

        return new JsonResponse(['ok' => false, 'message' => 'No se encuentra el consignatario!']);
    }


    /**
     * @Route("/editdest/{id}", name="vtas_editar_destinatario")
     */
    public function editarEntidadComercial($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entidad = $em->find(EntidadComercial::class, $id);

        $destinatario = new Destinatario();

        $form = $this->getFormAltaEntidad($destinatario, DestinatarioType::class, ['original' => $entidad]);

        $formAsoc = $this->getFormAsociarConsignatario($id);

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {
                $em->persist($destinatario);
                $em->flush();
                return $this->redirectToRoute('vtas_editar_destinatario', [ 'id' => $id ]);
            }
        }

        return $this->render('@GestionVentas/bd/editarDestinatario.html.twig', 
                             ['asociar' => $formAsoc->createView(), 'form' => $form->createView(), 'ente' => $entidad]);
    }

    /**
     * @Route("/editdestvta/{id}", name="vtas_editar_destinatario_venta")
     */
    public function editarDestinatarioVenta($id)
    {
        $em = $this->getDoctrine()->getManager();

        $destinatario = $em->find(Destinatario::class, $id);

        $form = $this->createForm(DestinatarioType::class, $destinatario, ['method' => 'POST', 'action' => $this->generateUrl('vtas_editar_destinatario_venta_procesar', ['id' => $id])]);

        return $this->render('@GestionVentas/bd/formEditDestinatario.html.twig', 
                             ['form' => $form->createView()]);
    }


    /**
     * @Route("/editdestvtaproc/{id}", name="vtas_editar_destinatario_venta_procesar", methods={"POST"})
     */

    public function editarDestinatarioVentaProcesar($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $destinatario = $em->find(Destinatario::class, $id);

        $form = $this->createForm(DestinatarioType::class, $destinatario, ['method' => 'POST', 'action' => $this->generateUrl('vtas_editar_destinatario_venta_procesar', ['id' => $id])]);

        $form->handleRequest($request);

        if ($form->isValid())
        {
            $em->flush();
            return new JsonResponse(['ok' => true]);
        }
        return new JsonResponse(['ok' => false]);
    }


    /**
     * @Route("/delasoc/{id}", name="vtas_quitar_destinatario")
     */
    public function quitarAsociacionCliente($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entidad = $em->find(EntidadComercial::class, $id);

        if ($entidad)
        {
            $original = $entidad->getOriginal();
            if ($original)
            {
                $original->removeAsociado($entidad);
                $entidad->setOriginal(null);
                $entidad->setActiva(false);
                $em->flush();
                return new JsonResponse(['ok' => true]);
            }
            return new JsonResponse(['ok' => false, 'message' => 'Error inesperado!']);
        }

        return new JsonResponse(['ok' => false, 'message' => 'No se encuentra el consignatario!']);
    }


    ////////////////////////ALTA ARTICULO ATRIBUTO CONCEPTO
    /**
     * @Route("/config/setgpo", name="bd_set_grupo_entidad")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function setGrupoEntidad()
    {
        $em = $this->getDoctrine()->getManager();
        $entes = $em->getRepository(EntidadExterna::class)->getClientes();
        $forms = [];
        foreach ($entes as $e)
        {
            $forms[$e->getId()] = $this->getFormChangeRubro($e)->createView();
        }
        return $this->render('@GestionVentas/bd/asignarRubrosAEntes.html.twig', ['forms' => $forms, 'entes' => $entes]);
    }

    /**
     * @Route("/config/chgpo/{id}", name="bd_change_grupo_entidad", methods={"POST"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function cambiarGrupoEntidad($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->find(EntidadExterna::class, $id);
        $form = $this->getFormChangeRubro($entidad);
        $form->handleRequest($request);
        $data = $form->getData();
        $entidad->setRubro($data['grupo']);
        $em->flush();
        return new JsonResponse(['error' => false]);
    }

    private function getFormChangeRubro(EntidadExterna $e)
    {
        $form =$this->createFormBuilder()
                    ->add('grupo', 
                          EntityType::class, [
                          'class' => RubroEntidad::class,    
                          'data' => $e->getRubro(),
                          'required' => false,                      
                          'query_builder' => function (EntityRepository $er) {
                                                                                return $er->createQueryBuilder('e')
                                                                                          ->where('e.activo = :activo')
                                                                                          ->setParameter('activo', true)
                                                                                          ->orderBy('e.rubro');
                                                                             },
                    ])
                    ->setAction($this->generateUrl('bd_change_grupo_entidad', [ 'id' => $e->getId()]))  
                    ->setMethod('POST')               
                    ->getForm();
        return $form;
    }


    /**
     * @Route("/config/addgpo", name="bd_ventas_nuevo_grupo_ventas")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function addGrupoVenta()
    {
        $grupo = new RubroEntidad();
        $form = $this->getFormGrupoVenta($grupo);
        $rubros = $this->getDoctrine()->getManager()->getRepository(RubroEntidad::class)->findAll();
        return $this->render('@GestionVentas/bd/nuevoGrupo.html.twig', array('rubros' => $rubros, 'form' => $form->createView()));
    }

    private function getFormGrupoVenta($grupo)
    {
        return $this->createForm(RubroEntidadType::class, $grupo, ['action' => $this->generateUrl('bd_ventas_nuevo_grupo_ventas_procesar'),'method' => 'POST']);
    }

    /**
     * @Route("/config/addartatconproc", name="bd_ventas_nuevo_grupo_ventas_procesar", methods={"POST"})
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function procesarFormGrupoVenta(Request $request)
    {
        $grupo = new RubroEntidad();
        $form = $this->getFormGrupoVenta($grupo);
        $form->handleRequest($request);
        if ($form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($grupo);
            $entityManager->flush();
            return $this->redirectToRoute('bd_ventas_nuevo_grupo_ventas');
        }
        $rubros = $this->getDoctrine()->getManager()->getRepository(RubroEntidad::class)->findAll();
        return $this->render('@GestionVentas/bd/nuevoGrupo.html.twig', array('rubros' => $rubros, 'form' => $form->createView()));
    }
    /////////////////FIN///////////////////////////////////
    /**
 	 * @Route("/generar", name="vtas_generate")
     */
    public function generarVentaAction(Request $request)
    {
    	$parameters = [];
    	$data = $request->request->get('form');
    	$fecha = null;
    	if (($data) && ($data['fecha']))
    	{
    		$fecha = \DateTime::createFromFormat('Ymd', $data['fecha']);
    		$parameters['fecha'] = $fecha;
    	}
        $url = $this->generateUrl('vtas_generate_procesar');
    	$form = $this->getFormIngresarVenta($url, $fecha);
    	$parameters['form'] = $form->createView();
        return $this->render('@GestionVentas/ventas/nuevaVenta.html.twig', $parameters);
    }

    private function getFormIngresarVenta($url, $fecha = null, $comprobante = null)
    {
        $dataCom = ($comprobante?$comprobante->getComentario(): '');
        $cliente = ($comprobante?$comprobante->getEntidad(): null);
        $horario = ($comprobante?$comprobante->getHorarioCarga(): null);
    	$form = $this->createFormBuilder()
    				->add('fechaComprobante', 
    					  DateType::class, 
                          array_merge(
                					   [
                                            'widget' => 'single_text',
                    					   'required' => true,
                    					   'data' => $fecha,
                                           'constraints' => [
                                                                    new NotNull(['message' => 'Debe seleccionar una fecha!!!']),
                                                             ]
                                       ],
                                       ((!$comprobante) || (!$comprobante->getConfirmado())) ? [] : ['disabled' => true] )
                        )
    				->add('comentario', 
                          TextareaType::class, 
                          array_merge(['data' => $dataCom], ((!$comprobante) || (!$comprobante->getConfirmado())) ? [] : ['disabled' => true] )
                        );

        //if ((!$comprobante) || (!$comprobante->getConfirmado()))
        if (!$comprobante)
        {
                $form->add('cliente', 
                          EntityType::class, [
                          'data' => $cliente,
                          'class' => EntidadComercial::class,                          
                          'query_builder' => function (EntityRepository $er) {
																		        return $er->createQueryBuilder('e')
																		            	  ->where('e.activa = :activa')
																		            	  ->andWhere('e.cliente = :cliente')
																						  ->setParameter('activa', true)
																						  ->setParameter('cliente', true)
																						  ->orderBy('e.valor');
																		     },
                    ])
                    ->add('siguiente', SubmitType::class, ['label' => ($comprobante?'Modificar' : 'Siguiente >>')]);
        }
        else
        {

                
                $form->add('cliente', 
                          EntityType::class, 
                          array_merge(
                                        [
                                          'data' => $cliente,
                                          'class' => EntidadExterna::class,
                                          'choices' => [$cliente]
                                        ],
                                        ((!$comprobante) || (!$comprobante->getConfirmado())) ? [] : ['disabled' => true] )
                        );
        }

       return $form->add('fecha', HiddenType::class, ['data' => ($fecha?$fecha->format('Ymd'):null)])                    
                    ->setAction($url)  
                    ->setMethod('POST')               
                    ->getForm();
        
    }

    /**
 	 * @Route("/generarprc", name="vtas_generate_procesar", methods="POST")
     */
    public function procesarGenerarVentaAction(Request $request)
    {
        $url = $this->generateUrl('vtas_generate_procesar');
    	$form = $this->getFormIngresarVenta($url);
    	$form->handleRequest($request);
    	if ($form->isValid())
    	{
    		$data = $form->getData();
            //throw new \Exception(" ".get_class($data['fecha']));
    		$em = $this->getDoctrine()->getManager();

    		$repository = $em->getRepository(ComprobanteVenta::class);
    		$comprobante = $repository->getComprobanteConEntidadYFecha($data['fechaComprobante'], $data['cliente']);
    		if ($comprobante)
    		{
    			$this->addFlash(
                          'error',
                          'Existe un comprobante para '.$data['cliente'].' en la fecha seleccionada!'
                      );

    			return $this->render('@GestionVentas/ventas/nuevaVenta.html.twig', ['form' => $form->createView(), 'fecha' => $data['fecha']]); 
    		}

            $proxNumero = $repository->getProximoNumero();

            $cliente = $data['cliente'];

    		$compOriginal = new ComprobanteVenta();
    		$compOriginal->setUserAlta($this->getUser());
    		$compOriginal->setComentario($data['comentario']);

    		$compOriginal->setFecha($data['fechaComprobante']);
    		$compOriginal->setEntidad($cliente);
            $compOriginal->setNumero($proxNumero);
            $em->persist($compOriginal);

            foreach ($cliente->getAsociados() as $asoc)
            {
                $proxNumero++;
                $compVenta = new ComprobanteVenta();
                $compVenta->setUserAlta($this->getUser());
                $compVenta->setComentario($data['comentario']);

                $compVenta->setFecha($data['fechaComprobante']);
                $compVenta->setEntidad($asoc);
                $compVenta->setNumero($proxNumero);
                $compVenta->setOriginal($compOriginal);
                $compVenta->setAsociado(true);

                $em->persist($compVenta);
            }
    		
    		
    		$em->flush();
    		return $this->redirectToRoute('vtas_agregar_articulos',['id' => $compOriginal->getId(), 'request' => $request]);
    	}
        return $this->render('@GestionVentas/ventas/nuevaVenta.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/updformvta/{id}", name="vtas_update_form_ventas", methods={"POST"})
     */
    public function updateFormVentas($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $comprobante = $em->find(ComprobanteVenta::class, $id);

        if ($comprobante->getConfirmado())
        {
            $this->addFlash(
                      'error',
                      'El comprobante ya ha sido impreso!!'
                  );
            return $this->redirectToRoute('vtas_agregar_articulos', ['id' => $id]);
        }

        $url = $this->generateUrl('vtas_update_form_ventas', ['id' => $id]);
        $form = $this->getFormIngresarVenta($url, $comprobante->getFecha(), $comprobante);

        $form->handleRequest($request);

        if ($form->isValid())
        {
            $data = $form->getData();
            $comprobante->setComentario($data['comentario']);
            $comprobante->setFecha($data['fechaComprobante']);
            $comprobante->setEntidad($data['cliente']);
           // $comprobante->setHorarioCarga($data['horarioCarga']);
            $em->flush();
            return $this->redirectToRoute('vtas_generate', ['request' => $request], 307);
        }

        $this->addFlash(
                              'error',
                              'Todos los campos son obligatorios!'
                          );
        return $this->redirectToRoute('vtas_agregar_articulos', ['id' => $id]);
    }


    /**
 	 * @Route("/addart/{id}", name="vtas_agregar_articulos")
     */
    public function agregarArticulosAComprobanteVentaAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$comprobante = $em->find(ComprobanteVenta::class, $id);

        $url = $this->generateUrl('vtas_update_form_ventas', ['id' => $id]);
        $formUpd = $this->getFormIngresarVenta($url, $comprobante->getFecha(), $comprobante);

    	$repoArticulos = $em->getRepository(Articulo::class);

    	$articulos = $repoArticulos->getListaArticulosConCategoriaVenta();//getListaArticulosConCategoria(); //Recupera todos los articulos que se pueden comercializar

    	$repoTipos = $em->getRepository(TipoVenta::class);
    	$tiposItem = $repoTipos->findAll(); //Recupera todos los tipos de Item Rayado o No

    	$formVentas = [];

    	$listaArticulos = [];

    	foreach ($articulos as $art)
    	{
    		$listaArticulos[$art->getId()] = $art;

    		$formVentas[$comprobante->getId()][$art->getId()] = [];

    		foreach ($tiposItem as $tpo)
    		{
    			$item = $comprobante->getItemConTipoYArticulo($tpo, $art);

    			$formVentas[$comprobante->getId()][$art->getId()][$tpo->getId()] = $this->getFormAltaItem($comprobante, $art, $tpo, $item)->createView();
    		}
    	}

        $listaComprobantes = [$comprobante->getId() => $comprobante];

        foreach ($comprobante->getAsociados() as $comp)
        {
                $entidad = $comp->getEntidad();

                $listaComprobantes[$comp->getId()] = $comp;

                foreach ($articulos as $art)
                {
                    $listaArticulos[$art->getId()] = $art;

                    $formVentas[$comp->getId()][$art->getId()] = [];

                    foreach ($tiposItem as $tpo)
                    {
                        if ($entidad->aceptaTipoVenta($tpo))
                        {
                            $item = $comp->getItemConTipoYArticulo($tpo, $art);

                            $formVentas[$comp->getId()][$art->getId()][$tpo->getId()] = $this->getFormAltaItem($comp, $art, $tpo, $item)->createView();
                        }
                    }
                }
        }

    	$form = $this->createFormBuilder()
    				 ->add('back', SubmitType::class, array_merge([], $comprobante->getConfirmado()?['label' => 'Volver']:['label' => 'Guardar y Volver']))    
                     ->setAction($this->generateUrl('vtas_volver_add_items'))  
                     ->add('fecha', HiddenType::class, ['data' => $comprobante->getFecha()->format('Ymd')])
                     ->setMethod('POST')               
                     ->getForm();

        return $this->render('@GestionVentas/ventas/agregarItemsApaisado.html.twig', ['comprobantes' => $listaComprobantes,
                                                                                      'comprobante' => $comprobante,
            																		  'ventas' => $formVentas,
            																		  'articulos' => $listaArticulos,
            																		  'tipos' => $tiposItem,
                                                                                      'form' => $formUpd->createView(),
            																		  'back' => $form->createView()]);
    }

    /**
 	 * @Route("/back", name="vtas_volver_add_items", methods={"POST"})
     */
    public function backFromAddItems(Request $request)
    {
    	return $this->redirectToRoute('vtas_generate', ['request' => $request], 307);
    }

    private function getFormAltaItem(ComprobanteVenta $comp, Articulo $articulo, TipoVenta $tipo, ItemCarga $it = null)
    {
    	 $data = null;
    	 if ($it)
    	 {
    	 	$data = $it->getCantidad();
    	 }

    	 $disabled = false;
    	 if ($comp->getConfirmado())
    	 {
    	 	$disabled = true;
    	 }
    	 return $this->createFormBuilder()
					 ->add('cantidad', 
					 	   NumberType::class,
					 	   ['data' => $data,
					 	   	'disabled' => $disabled
					 		])
					 ->setAction($this->generateUrl('vtas_agregar_articulo_procesar', 
					 								[
					 									'cmp' => $comp->getId(),
					 									'tpo' => $tipo->getId(),
					 									'art' => $articulo->getId()
					 								 ]))
					 ->getForm();
    }

    /**
 	 * @Route("/addartproc/{cmp}/{tpo}/{art}", name="vtas_agregar_articulo_procesar")
     */
    public function procesarAgregarArticuloAComprobanteVentaAction(ComprobanteVenta $cmp,
    															   TipoVenta $tpo,
    															   Articulo $art,
    															   Request $request)
    {
    	if ($cmp->getConfirmado())
    	{
    		return new JsonResponse(['error' => true, 'message' => 'El comprobante ya ha sido impreso!!']);
    	}

    	try
    	{
	    	$itemCarga = $cmp->getItemConTipoYArticulo($tpo, $art);
	    	$persistir = false;
	    	$em = $this->getDoctrine()->getManager();
	    	if (!$itemCarga)
	    	{
	    		$itemCarga = new ItemCarga();
	    		$persistir = true;
	    	}

	    	$form = $this->getFormAltaItem($cmp, $art, $tpo, $itemCarga);
	    	$form->handleRequest($request);
	    	$data = $form->getData();  	    	

	    	if ((!$persistir) && (!$data['cantidad'])) //significa que el item tiene valor 0, por lo cual el mismo debe ser eliminado
	    	{
	    		$em->remove($itemCarga);
	    	}
	    	else
	    	{
	    		$itemCarga->setCantidad($data['cantidad']);
	    	}

	    	if ($persistir)
	    	{
		    	$itemCarga->setComprobante($cmp);
		    	$itemCarga->setArticulo($art);
		    	$itemCarga->setTipoVenta($tpo);
		    	$em->persist($itemCarga);
	    	}
	    	
	    	$em->flush();
	    	return new JsonResponse(['error' => false]);
	    }
	    catch (\Exception $e){ return new JsonResponse(['error' => true, 'message' => $e->getMessage()]); }

    }

    /**
 	 * @Route("/detvtaday", name="vtas_detalle_ventas_fecha")
     */
    public function detalleVentasEnFecha(Request $request)
    {
        $url = $this->generateUrl('vtas_generate_procesar');
    	$form = $this->getFormIngresarVenta($url);
    	$form->handleRequest($request);
    	$data = $form->getData();
    	$em = $this->getDoctrine()->getManager();
    	$repository = $em->getRepository(ComprobanteVenta::class);
    	
    	$tiposVenta = $em->getRepository(TipoVenta::class)->findAll();

    	$articulos = $em->getRepository(Articulo::class)->getListaArticulosConCategoriaVenta();//getListaArticulosConCategoria();

    	$comprobantes = $repository->getComprobantesVenta($data['fechaComprobante']);

    	$body = [];

        $totalesXCategoria = [];

    	foreach ($comprobantes as $comp)
    	{
    		$body[$comp->getId()] = [];

            $totalesXCategoria[$comp->getId()] = [];
    		
            foreach ($articulos as $art)
    		{
    			$body[$comp->getId()][$art->getId()] = [];

    			foreach ($tiposVenta as $tpo)
    			{
    				$body[$comp->getId()][$art->getId()][$tpo->getId()] = null;
    			}

                if (!array_key_exists($art->getCategoriaVenta()->getId(), $totalesXCategoria[$comp->getId()]))
                {
                    $totalesXCategoria[$comp->getId()][$art->getCategoriaVenta()->getId()] = 0;
                }
    		}

    		foreach ($comp->getItems() as $it)
    		{
    			$body[$comp->getId()][$it->getArticulo()->getId()][$it->getTipoVenta()->getId()] = $it->getCantidad();

                $categoria = $it->getArticulo()->getCategoriaVenta();

                if ($categoria)
                {
                    if (array_key_exists($categoria->getId(), $totalesXCategoria[$comp->getId()]))
                    {
                        $totalesXCategoria[$comp->getId()][$categoria->getId()]+= $it->getCantidad();
                    }
                }
    		}


            foreach ($comp->getAsociados() as $asoc)
            {

                    foreach ($asoc->getItems() as $it)
                    {
                        $body[$comp->getId()][$it->getArticulo()->getId()][$it->getTipoVenta()->getId()]+= $it->getCantidad();

                        $categoria = $it->getArticulo()->getCategoriaVenta();

                        if ($categoria)
                        {
                            if (array_key_exists($categoria->getId(), $totalesXCategoria[$comp->getId()]))
                            {
                                $totalesXCategoria[$comp->getId()][$categoria->getId()]+= $it->getCantidad();
                            }
                        }
                    }
            }
    	}
     //   return new Response(var_dump($totalesXCategoria));

    	return $this->render('@GestionVentas/ventas/listaVentasDiarias.html.twig', 
    						 ['fecha' => $data['fechaComprobante'],
    						  'comprobantes' => $comprobantes,
    						  'articulos' => $articulos,
    						  'tipos' => $tiposVenta,
                              'totales' => $totalesXCategoria,
    						  'data' => $body]);
    }

    /**
 	 * @Route("/delete/{id}", name="vtas_delete_comprobante_venta")
     */
    public function deleteComprobanteVenta($id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$comprobante = $em->find(ComprobanteVenta::class, $id);

    	if ((!$comprobante) || ($comprobante->getEliminado())) //no se encuentra el comprobante o e mismo ha sido eliminado
    	{
    		return new JsonResponse(['error' => true, 'message' => 'No se encuentra el comprobante']);
    	}

    	if ($comprobante->getConfirmado())
    	{
    		return new JsonResponse(['error' => true, 'message' => 'El comprobante ya se ha impreso, no se puede eliminar']);
    	}

    	try
    	{
	    	$comprobante->setEliminado(true);
	    	$comprobante->setUserBaja($this->getUser());

            foreach ($comprobante->getAsociados() as $asoc)
            {
                $asoc->setEliminado(true);
                $asoc->setUserBaja($this->getUser());
            }

	    	$em->flush();
	    	return new JsonResponse(['error' => false]);
    	}
    	catch (\Exception $e){ return new JsonResponse(['error' => true, 'message' => $e->getMessage()]); }
    }

    /**
 	 * @Route("/finalice/{id}", name="vtas_finalizar_comprobante_venta")
     */
    public function finalizarComprobanteVenta($id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$comprobante = $em->find(ComprobanteVenta::class, $id);

    	if ((!$comprobante) || ($comprobante->getEliminado())) //no se encuentra el comprobante o e mismo ha sido eliminado
    	{
    		return new JsonResponse(['error' => true, 'message' => 'No se encuentra el comprobante']);
    	}

    	if ($comprobante->getConfirmado())
    	{
    		return new JsonResponse(['error' => true, 'message' => 'El comprobante ya se encuentra confirmado!']);
    	}

    	try
    	{  

    		if (!$comprobante->getTotalItems())
    		{
    			return new JsonResponse(['error' => true, 'message' => 'El comprobante no tiene cargado ningun articulo!']);
    		}

	    	$comprobante->setFinalizado(true);
            $comprobante->setFechaFinalizacion(new \DateTime());
	    	$comprobante->setUserFinalizacion($this->getUser());

            foreach ($comprobante->getAsociados() as $asoc)
            {
                $asoc->setFinalizado(true);
                $asoc->setFechaFinalizacion(new \DateTime());
                $asoc->setUserFinalizacion($this->getUser());
            }

	    	$em->flush();
	    	return new JsonResponse(['error' => false]);
    	}
    	catch (\Exception $e){ return new JsonResponse(['error' => true, 'message' => $e->getMessage()]); }
    }

    /**
 	 * @Route("/lastvtas", name="vtas_ultimos_comprobantes_venta")
     */
    public function getUltimosComprobantesVenta()
    {
		$em = $this->getDoctrine()->getManager();
    	$repository = $em->getRepository(ComprobanteVenta::class);
    	$comprobantes = $repository->getUltimosComprobantesVenta();
    	$exists = (count($comprobantes)?true:false);
    	return new JsonResponse(['exists' => $exists, 'cant' => count($comprobantes)]);
    }

    /**
     * @Route("/incvtas", name="vtas_incorporar_ventas_a_faena", methods={"POST", "GET"})
     */
    public function incorporarVentasAFaena(Request $request)
    {        

        $du = $request->query->get('du');
        $fecha = null;
        if($du)
        {
            $fecha = new \DateTime();
            $fecha->setTimestamp($du);
        }


        $form = $this->createFormBuilder()
                     ->add('fecha', 
                          DateType::class, 
                          ['widget' => 'single_text',
                           'required' => true,
                           'data' => $fecha,
                           'constraints' => [
                                                    new NotNull(['message' => 'Debe seleccionar una fecha!!!']),
                                             ]
                           ])
                      ->add('cargar', SubmitType::class, ['label' => 'Cargar'])
                      ->getForm();
        if ($request->isMethod('POST') || ($fecha))
        {
            $em = $this->getDoctrine()->getManager();
            $form->handleRequest($request);
            if ($form->isValid() || $fecha)
            {
                $data = $form->getData();
                $fechaConsulta = ($fecha?$fecha:$data['fecha']);
                $repository = $em->getRepository(ComprobanteVenta::class);
                $comprobantes = $repository->getComprobantesVentaFinalizados($fechaConsulta);
                $options = ['form' => $form->createView(), 'comprobantes' => $comprobantes];
                return $this->render('@GestionVentas/ventas/incorporarVentas.html.twig', $options); 
            }
        }

        return $this->render('@GestionVentas/ventas/incorporarVentas.html.twig', ['form' => $form->createView()]); 
    }

    /**
     * @Route("/print/{cmp}", name="vtas_imprimir_comprobante")
     */
    public function imrpimirComprobante($cmp)
    {
        $em = $this->getDoctrine()->getManager();

        $comprobante = $em->find(ComprobanteVenta::class, $cmp);

        //obtiene la faena diaria de la fecha del comprobante
        $faenaDiaria = $em->getRepository(FaenaDiaria::class)->getFaenaConFecha($comprobante->getFecha());

     /*   if (!$comprobante->getItemOficial())
        {
            $this->addFlash(
                  'error',
                  'No es posible generar el remito para el comprobante '.str_pad($comprobante->getNumero(), 6, "0", STR_PAD_LEFT).'!!'
              );
            return $this->redirectToRoute('vtas_incorporar_ventas_a_faena', ['du' => $comprobante->getFecha()->getTimestamp()]);
        }*/

        if (!$faenaDiaria)
        {
            $this->addFlash(
                  'error',
                  'No existe una faena iniciada para el '.$comprobante->getFecha()->format('d/m/Y'.'!')
              );
            return $this->redirectToRoute('vtas_incorporar_ventas_a_faena', ['du' => $comprobante->getFecha()->getTimestamp()]);
        }



        //recupera el ProcesoFaena que admite se generen ventas (Gestion Camaras)
        $procesoFaena = $em->getRepository(ProcesoFaena::class)->getProcesoVenta();

        //Recupera el ProcesoFaenaDiaria correspondiente al ProcesoFaena recuperado anteriormente
        $procesoFaenaDiaria = $em->getRepository(ProcesoFaenaDiaria::class)->getProcesoFaenaDiariaWhitProcess($procesoFaena);

        $entidadConcepto = $em->getRepository(EntidadExternaConcepto::class)->getEntidadOfClass(get_class($comprobante->getEntidad()), $procesoFaena);

        $conceptoMovimientoVenta = $entidadConcepto->getConcepto();

        //Buscar si existe una orden de carga generada para la entidad del comprobante
        $ordenCarga = $em->getRepository(OrdenCarga::class)->findOrdenCargaEntidad($comprobante->getEntidad(), $faenaDiaria, $comprobante);

     /*   if (!$ordenCarga)
            return new Response('OK '.$comprobante->getEntidad()->getRubro()->getId());*/

        $ingresar = true;
        if (!$ordenCarga) 
        {
            //La orden de carga no existe, debe generar una
            $ordenCarga = new OrdenCarga();
            $ordenCarga->setFecha($comprobante->getFecha());
            //agrega el comprobante de venta a la orden
            $ordenCarga->addComprobante($comprobante);
            //agrega la entidad como destinatario
            $ordenCarga->addEntidade($comprobante->getEntidad());
            //de existir agrega el rubro, esto se utiliza cuando varias entidades se agrupan en una misma orden
            $ordenCarga->setRubro($comprobante->getEntidad()->getRubro());

            $ordenCarga->setFaenaDiaria($faenaDiaria);
            $comprobante->setConfirmado(true);
            $em->persist($ordenCarga);
        }
        else
        {
            if (!$ordenCarga->existeComprobanteCargado($comprobante))
            {
                $comprobante->setConfirmado(true);
                $comprobante->setUserConfirm($this->getUser());
                $ordenCarga->addComprobante($comprobante);
                $ordenCarga->addEntidade($comprobante->getEntidad());
            }
            else
            {
                $ingresar = false; //No debe generar ningun ingreso ya que la orden ya se ha procesado
            }
        }

        $artAtrCon = null;

        $conceptoMovimientoNO = null;

        $artAtrConGenerados = array();

        foreach ($comprobante->getItems() as $it)
        {
            if ($it->getTipoVenta()->getOficial())
            {
                $conceptoMovimiento = $conceptoMovimientoVenta;
            }
            else
            {
                if (!$conceptoMovimientoNO)
                {
                    $entidadConceptoNO = $em->getRepository(EntidadExternaConcepto::class)
                                               ->getEntidadOfClass($it->getTipoVenta()->getEntidadAsociada(), $procesoFaena);
                    $conceptoMovimientoNO = $entidadConceptoNO->getConcepto();
                }
                $conceptoMovimiento = $conceptoMovimientoNO;
            }

            if ($ingresar)
            {
                //como esta dentro de una transaccion intenta generar dos atributos concepto un por oficial y uno por rayado, ya que no encuentra el segundo por que todavia no se materializo en la BD, va a comparar si el que se creo es igual al ultimo
                
            //    throw new \Exception("Clase ".get_class($conceptoMovimiento));

                $artAtrCon = $this->existeArtAtrCon($artAtrConGenerados, 
                                                    SalidaStock::getInstance(), 
                                                    $it->getArticulo(), 
                                                    $conceptoMovimiento, 
                                                    $procesoFaena);
                if (!$artAtrCon)
                {
                    $artAtrCon = GestionFaenaController::getArticuloAtributoConceptoForMovimientoAction($it->getArticulo(),
                                                                                                        $conceptoMovimiento,
                                                                                                        SalidaStock::getInstance(),
                                                                                                        $procesoFaena,
                                                                                                        $em);
                    $artAtrConGenerados[] = $artAtrCon;
                }


                $salida = new SalidaStock();
                $salida->setFaenaDiaria($faenaDiaria);
                $salida->setProcesoFnDay($procesoFaenaDiaria);
                $salida->setArtProcFaena($artAtrCon);

                $valorAtr = new ValorNumerico();
                $valorAtr->setAtributoAbstracto($procesoFaena->getAtributoVenta());
                $valorAtr->setValor($it->getCantidad());
                $valorAtr->setUnidadMedida($procesoFaena->getUnidadMedidaventa());
                $valorAtr->setMostrar(true);
                $valorAtr->setDecimales(0);
                $valorAtr->setAcumula(true);
                $salida->addValore($valorAtr);
                $it->setItemMovimientoStock($valorAtr);
                $em->persist($salida);
            }
        }
        if ($ingresar)
        {
            $comprobante->setOrdenCarga($ordenCarga);
            $comprobante->setArtProcFaena($artAtrCon);
            $comprobante->setFaenaDiaria($faenaDiaria);
            $comprobante->setProcesoFnDay($procesoFaenaDiaria);
        }
        $em->flush();

        if ($comprobante->getItemOficial())
        {
            $items = $em->getRepository(ItemCarga::class)->itemsAImprimir($comprobante, 1); //recupera todos los items oficiales del comprobante

            $pdf = $this->get('app.pdf');
            $pdf->setLogo($this->get('kernel')->getRootDir() . '/../web/resources/img/logo2.jpg');
            $pdf->setData($comprobante->getEntidad(), $comprobante->getFecha(), str_pad($comprobante->getNumero(), 10, "0", STR_PAD_LEFT), 0, '');
            $pdf->AliasNbPages();

            
            $pdf->SetAutoPageBreak(true,33);  
            $pdf->AddPage('L', 'legal'); 
            $pdf = $this->paintData($pdf, $items);
            return new Response($pdf->Output(), 200, array('Content-Type' => 'application/pdf'));  
        }
        else
        {
             $this->addFlash(
                  'success',
                  'Comprobante ingresado exitosamente'
              );
            return $this->redirectToRoute('vtas_incorporar_ventas_a_faena', ['du' => $comprobante->getFecha()->getTimestamp()]);
        }
    }

    private function existeArtAtrCon($articulos, 
                                     $instance, 
                                     Articulo $articulo, 
                                     ConceptoMovimiento $conceptoMovimiento, 
                                     ProcesoFaena $procesoFaena)
    {
        foreach ($articulos as $artAtrCon)
        {
            if (($artAtrCon->getConcepto()->getConcepto() == $conceptoMovimiento) &&
                ($artAtrCon->getArticulo() == $articulo) &&
                ($artAtrCon->getConcepto()->getTipoMovimiento()->getInstancia() == $instance) &&
                ($artAtrCon->getConcepto()->getProcesoFaena() == $procesoFaena))
            {
                return $artAtrCon;
            }
        }
        return null;
    }

    private function paintData($pdf, $items, $oc = 0)
    {
        $last = 0;
        $unidades = $kilos = 0;
        $xdesp = 173;
        $x = $pdf->getX()-4;
        
        $y = $pdf->getY()+5;
        foreach ($items as $it)
        {
            $item = null;
            $cantAux = null;
            if (is_array($it))
            {
                $item = $it[0];
                $cantAux = $it['cantidad'];
            }
            else
            {
                $item = $it;
                $cantAux = $it->getCantidad();
            }

            $art = $item->getArticulo();
            $gpo = $art->getCategoria()->getGrupo();
            $pdf->setX($x);
            if (($last !== $gpo) && ($last))
            {
                $pdf->cell(40, 7, '', 0,0,'L');
                $pdf->cell(70, 7, 'TOTAL GRUPO: '.$last.' ->', 0,0,'L');
                $pdf->cell(30, 7, $unidades, 0,0,'L');
                
                
                if (!$oc)
                {
                    $pdf->cell(30, 7, $kilos.' KILOS', 0,0,'R');
                    $pdf->setX($x+$xdesp);
                    $pdf->cell(40, 7, '', 0,0,'L');
                    $pdf->cell(70, 7, 'TOTAL GRUPO: '.$last.' ->', 0,0,'L');
                    $pdf->cell(30, 7, $unidades, 0,0,'L');
                    $pdf->cell(30, 7, $kilos.' KILOS', 0,1,'R');
                }
                else
                {
                    $pdf->cell(30, 7, $kilos.' KILOS', 0,1,'R');
                }
                $pdf->setX($x);

                $unidades = $kilos = 0;
            }
            
            $pdf->cell(25, 7, $item->getArticulo()->getCodigoInterno(), 0,0,'L');
            $pdf->cell(115, 7, strtoupper($item->getArticulo()), 0,0,'L');            

            if (!$oc)
            {
                $pdf->cell(30, 7, $cantAux, 0, 0,'R');
                $pdf->setX($x+$xdesp);
                $pdf->cell(25, 7, $item->getArticulo()->getCodigoInterno(), 0,0,'L');
                $pdf->cell(115, 7, strtoupper($it->getArticulo()), 0,0,'L');
                $pdf->cell(30, 7, $cantAux, 0, 1,'R');
            }
            else
            {
                $pdf->cell(30, 7, $cantAux, 0, 1,'R');
            }
            $pdf->setX($x);

            $unidades+= $cantAux;
            $kilos+= ($cantAux * $item->getArticulo()->getPresentacionKg());
            $last = $gpo;
        }
        $pdf->setX($x);
        $pdf->cell(40, 7, '', 0,0,'L');
        $pdf->cell(70, 7, 'TOTAL GRUPO: '.$last.' ->', 0,0,'L');
        $pdf->cell(30, 7, $unidades, 0,0,'L');
        $pdf->cell(30, 7, $kilos.' KILOS', 0,0,'R');
        $pdf->setX($x+$xdesp);
        $pdf->cell(40, 7, '', 0,0,'L');
        $pdf->cell(70, 7, 'TOTAL GRUPO: '.$last.' ->', 0,0,'L');
        $pdf->cell(30, 7, $unidades, 0,0,'L');
        $pdf->cell(30, 7, $kilos.' KILOS', 0,0,'R');
        return $pdf;
    }

    /**
     * @Route("/printoc/{oc}", name="vtas_imprimir_orden_carga")
     */
    public function imrpimirOrdenCarga($oc)
    {
        $em = $this->getDoctrine()->getManager();

        $ordenCarga = $em->find(OrdenCarga::class, $oc);

        $items = $em->getRepository(ItemCarga::class)->getItemsOrdenCarga($ordenCarga); //recupera todos los items oficiales del comprobante


        if ($ordenCarga->getRubro()) //
        {
                //recupera la cantidad de comprobantes generados para las entidades con rubr igual al rubro de la Orden de Carga, sino coincide, quiere ecir que existen comprobantes que aun no han sido ingresados
                $comprobantes = $em->getRepository(ComprobanteVenta::class)
                                   ->getComprobantesVentaOfRubroEntidad($ordenCarga->getFecha(), $ordenCarga->getRubro());

                if (count($comprobantes) > $ordenCarga->getComprobantes()->count())
                {
                    $this->addFlash(
                          'error',
                          'Existen comprobantes de venta que aun no han sido incorporados'
                      );
                    return $this->redirectToRoute('vtas_incorporar_ventas_a_faena', ['du' => $ordenCarga->getFecha()->getTimestamp()]);
                }
        }

        $pdf = $this->get('app.pdf');

        $entidad = ($ordenCarga->getRubro()?$ordenCarga->getRubro():$ordenCarga->getComprobantes()->first()->getEntidad());

        $numero = "";
        foreach ($ordenCarga->getComprobantes() as $cmp)
        {
            if ($numero)
            {
                $numero.=" - ";
            }

            $numero.= str_pad($cmp->getNumero(), 10, "0", STR_PAD_LEFT);
        }

        $trx = $ordenCarga->getTitularTransporte();
        $pdf->setData($entidad, $ordenCarga->getFecha(), $numero, 1, $trx);



        $pdf->setLogo($this->get('kernel')->getRootDir() . '/../web/resources/img/logo2.jpg');

        $pdf->AliasNbPages();

        
        $pdf->SetAutoPageBreak(true,33);  
        $pdf->AddPage('P', 'legal'); 
        $pdf = $this->paintData($pdf, $items, 1);
      //  $pdf->AddPage('P', 'A4'); 
        return new Response($pdf->Output(), 200, array('Content-Type' => 'application/pdf'));  
    }

    /**
     * @Route("/viewdeta/{cmp}/{tpo}", name="vtas_view_detalle_cmbte")
     */
    public function viewDetalleComprobante($cmp, $tpo = 1)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(ComprobanteVenta::class);
        $comprobante = $repository->find($cmp);

        $next = $repository->proximoComprobante($comprobante);
        $back = $repository->anteriorComprobante($comprobante);

        $types = $em->getRepository(TipoVenta::class)->findAll();
        $tipos = [];
        foreach ($types as $t)
        {
            $tipos[$t->getId()] = $t->getCodigo();
        }


        $data = [];

        $articulos = [];

        $logger = $this->get('logger');
        foreach ($comprobante->getItems() as $it)
        {
            $art = $it->getArticulo();
            $articulos[$art->getId()] = $art;

            if (!array_key_exists($art->getId(), $data))
            {
                $data[$art->getId()] = [];
            }
            $data[$art->getId()][$it->getTipoVenta()->getId()] = $it->getCantidad();

            $logger->info('TIPO VENTA '.$it->getTipoVenta()->getId());
        }

        $logger->info(' '.json_encode($data));
        $logger->info(' '.json_encode($articulos));
        asort($articulos);
        $options = ['cht' => $tpo, 'comprobante' => $comprobante, 'tipos' => $tipos, 'data' => $data, 'articulos' => $articulos];
        if ($next)
        {
            $options['next'] = $next;
        }
        if ($back)
        {
            $options['back'] = $back;
        }
        if ($comprobante->getOrdenCarga())
        {
            $form = $this->getFormTransportista($comprobante->getOrdenCarga());
            $options['form'] = $form->createView();
        }        
        return $this->render('@GestionVentas/ventas/detalleComprobante.html.twig', $options);

    }

    private function getFormTransportista($ordenCarga)
    {
        $form =$this->createFormBuilder()
                    ->add('transporte', 
                          EntityType::class, [
                          'data' => $ordenCarga->getTransportista(),
                          'class' => 'GestionFaenaBundle:gestionBD\Transportista',    
                          'required' => false,  
                          'choice_label' => 'titular',                    
                          'query_builder' => function (EntityRepository $er) {
                                                                                return $er->createQueryBuilder('t')
                                                                                          ->where('t.activa = :activa')
                                                                                          ->setParameter('activa', true)
                                                                                          ->orderBy('t.valor');
                                                                             },
                    ]) 
                    ->setAction($this->generateUrl('vtas_cambiar_transportista_oc', ['oc' => $ordenCarga->getId()]))  
                    ->setMethod('POST')               
                    ->getForm();
        return $form;
    }


    /**
     * @Route("/chtransoc/{oc}", name="vtas_cambiar_transportista_oc")
     */
    public function cambiarTransportistas($oc, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(OrdenCarga::class);
        $ordenCarga = $repository->find($oc);

        $form = $this->getFormTransportista($ordenCarga);
        $form->handleRequest($request);
        $data = $form->getData();
        $transportista = $data['transporte'];
        $ordenCarga->setTransportista($transportista);
        $em->flush();

        return new JsonResponse(['status' => true, 'transp' => $transportista->getTitular()]);
    }

    /**
     * @Route("/historicovta", name="vtas_historico_ventas", methods={"POST", "GET"})
     */
    public function generateHistoricoVentas(Request $request)
    {
        $form = $this->getFormHistoricoVenta();

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            if ($form->isValid())
            {
                $data = $form->getData();
                $comprobantes = $this->getDoctrine()
                                     ->getManager()
                                     ->getRepository(ComprobanteVenta::class)
                                     ->getComprobantesVentaFinalizados($data['desde'], $data['hasta']);
                return $this->render('@GestionVentas/ventas/historicoVentas.html.twig', ['form' => $form->createView(),'comprobantes' => $comprobantes]);
            }
        }
        return $this->render('@GestionVentas/ventas/historicoVentas.html.twig', ['form' => $form->createView()]);
    }

    private function getFormHistoricoVenta()
    {
        $form =$this->createFormBuilder()
                    ->add('desde', 
                          DateType::class, 
                          ['widget' => 'single_text',
                           'required' => true,
                           'constraints' => [
                                                    new NotNull(['message' => 'Debe seleccionar una fecha!!!']),
                                             ]
                           ])
                    ->add('hasta', 
                          DateType::class, 
                          ['widget' => 'single_text',
                           'required' => true,
                           'constraints' => [
                                                    new NotNull(['message' => 'Debe seleccionar una fecha!!!']),
                                             ]
                           ])
                    ->add('cargar', SubmitType::class, ['label' => 'Cargar'])    
                    ->setAction($this->generateUrl('vtas_historico_ventas'))  
                    ->setMethod('POST')               
                    ->getForm();
        return $form;
    }

    /**
     * @Route("/vtapend", name="vtas_comprobantes_pendientes")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function verComprobantesPendientes(Request $request)
    {        
        $comprobantes = $this->getDoctrine()->getManager()->getRepository(ComprobanteVenta::class)->getUltimosComprobantesVenta();

        return $this->render('@GestionVentas/ventas/ventasPendientes.html.twig', ['comprobantes' => $comprobantes]); 
    }

    /**
     * @Route("/resart", name="vtas_resumen_ventas_por_articulo", methods={"POST", "GET"})
     */
    public function getFormResumenXArticulos(Request $request)
    {
        $form = $this->getFormResumenVentasPorArticulo();
        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $data = $form->getData();
                $repository = $em->getRepository(ItemCarga::class);
                $items = $repository->itemsEnFecha($data['fecha'], ($data['tipo']?$data['tipo']:null));

                $data = array();
                $cantEntidad = array();
                $last = null;
                $tipos = array();
                foreach ($items as $it)
                {
                    $comprobante = $it->getComprobante();
                    $tipos[$it->getTipoVenta()->getId()] = $it->getTipoVenta();
                    if (!array_key_exists($comprobante->getEntidad()->getId(), $data))
                    {
                        $data[$comprobante->getEntidad()->getId()] = array('entidad' => $comprobante->getEntidad(),
                                                                           'fecha' => $comprobante->getFecha()->format('d/m/Y'),
                                                                           'numero' => $comprobante->getNumero(),
                                                                           'items' => array(),
                                                                           'record' => 0);
                    }

                    if (!array_key_exists($it->getArticulo()->getId(), $data[$comprobante->getEntidad()->getId()]['items']))
                    {
                        $data[$comprobante->getEntidad()->getId()]['record']++;
                        $data[$comprobante->getEntidad()->getId()]['items'][$it->getArticulo()->getId()] = array('art' => $it->getArticulo());
                    }

                    $data[$comprobante->getEntidad()->getId()]['items'][$it->getArticulo()->getId()][$it->getTipoVenta()->getId()] = $it->getCantidad();

                }

                return $this->render('@GestionVentas/ventas/resumenXArticulo.html.twig', ['tipos' => $tipos,'items' => $data, 'form' => $form->createView()]); 

            }
        }

        return $this->render('@GestionVentas/ventas/resumenXArticulo.html.twig', ['form' => $form->createView()]); 
    }

    private function getFormResumenVentasPorArticulo()
    {
        $form =$this->createFormBuilder()
                    ->add('fecha', 
                          DateType::class, 
                          ['widget' => 'single_text',
                           'required' => true,
                           'constraints' => [
                                                    new NotNull(['message' => 'Debe seleccionar una fecha!!!']),
                                             ]
                           ])
                    ->add('tipo', 
                          EntityType::class, [
                          'class' => TipoVenta::class,
                          'placeholder' => 'Todos',    
                          'data' => null                     
                    ])
                    ->add('cargar', SubmitType::class, ['label' => 'Cargar'])    
                    ->setMethod('POST')               
                    ->getForm();
        return $form;
    }

    /**
     * @Route("/load", name="vtas_load_files", methods={"POST", "GET"})
     */
    public function cargarArchivoVentas(Request $request)
    {
        $form = $this->getFormCargarArchivoVentas();
        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            if ($form->isValid())
            {
                $data = $form->getData();
                $file = $form->get('archivo')->getData();;

                $folder = $this->get('kernel')->getRootDir() . '/../web/ventas/';

                $fileName = 'archivo_ventas.'.$file->guessExtension();
                $file->move(
                        $folder,
                        $fileName
                    );

                $fp = fopen($folder.$fileName, "r");
                $data = [];
                $articulos = [];
                while (!feof($fp))
                {
                    $line = fgets($fp);
                    if ($line)
                    {
                        $result  = explode("\t", $line);

                        if (!(count($result)== 7))
                        {
                            $this->addFlash(
                                      'error',
                                      'El contenido del archivo no respeta el formato indicado!!'
                                  );
                            return $this->redirectToRoute('vtas_load_files');
                        }

                        $key = "$result[1]-$result[0]";

                        if (!array_key_exists($key, $data))
                        {
                            $data[$key] = ['destinatario' => $result[2],
                                                 'fecha' => $result[4],
                                                 'zona' => $result[0],
                                                 'code' => $result[1], 
                                                 'cant' => 0,
                                                 'items' => []];
                        }

                        if (!array_key_exists($result[5], $data[$key]['items']))
                        {
                            $data[$key]['items'][$result[5]] = 0;
                        }

                        $articulos[$result[5]] = $result[5];

                        //throw new \Exception(''.$result[6]);

                        $data[$key]['items'][$result[5]]+=trim($result[6]);
                        $data[$key]['cant']++;
                    }                   
                }

                fclose($fp);

                $repository = $this->getDoctrine()->getManager()->getRepository(Articulo::class);

                $listaArticulos = [];

                foreach ($articulos as $a)
                {
                    $art = $repository->getArticuloConCodigo($a);
                    $listaArticulos[$a] = $art;
                }
                return $this->render('@GestionVentas/ventas/loadFileVentas.html.twig', 
                                     ['form' => $form->createView(),
                                      'data' => $data,
                                      'articulos' => $listaArticulos]);

            }
        }
        return $this->render('@GestionVentas/ventas/loadFileVentas.html.twig', ['form' => $form->createView()]);
    }

    private function getFormCargarArchivoVentas()
    {
        $form = $this->createFormBuilder()
                     ->add('archivo', 
                            FileType::class, [
                            'label' => 'Seleccione archivo...',
                            'required' => true,
                            'constraints' => [
                                new File([
                                    'maxSize' => '1024k',
                                    'mimeTypes' => [
                                        'text/plain',
                                    ],
                                    'mimeTypesMessage' => 'Solo se permiten archivos con extension TXT',
                                ])
                            ],
                        ])
                     ->add('cargar', SubmitType::class, ['label' => 'Cargar'])    
                     ->setMethod('POST')               
                     ->getForm();
        return $form;
    }

    /**
     * @Route("/impresion", name="vtas_configruacion_impresion", methods={"POST", "GET"})
     */
    public function impresionComprobantes(Request $request)
    {
        $numeracion = new NumeracionRemito();

        $form = $this->getFormAltaNumeracion($numeracion);

        $em = $this->getDoctrine()->getManager();

        $numeraciones = $em->getRepository(NumeracionRemito::class)->findAll();

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            if ($form->isValid())
            {

                $em->persist($numeracion);
                $em->flush();

                return $this->redirectToRoute('vtas_configruacion_impresion');
            }
        }

        return $this->render('@GestionVentas/ventas/numeracionRemito.html.twig', ['form' => $form->createView(), 'numeraciones' => $numeraciones]); 
    }

    private function getFormAltaNumeracion($numeracion)
    {
        return $this->createForm(NumeracionRemitoType::class, $numeracion, ['method' => 'POST']);
    }
}
