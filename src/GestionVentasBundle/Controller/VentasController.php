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
use \jamesiarmes\PhpEws\Enumeration\BodyTypeType;

use GestionFaenaBundle\Entity\gestionBD\EntidadComercial;
use GestionFaenaBundle\Form\gestionBD\EntidadComercialType;

use GestionFaenaBundle\Entity\faena\PrecioVentaArticulo;

use GestionVentasBundle\Entity\ListaPrecio;
use GestionVentasBundle\Form\ListaPrecioType;

use GestionVentasBundle\Entity\RemitoVenta;

use GestionVentasBundle\Entity\ItemLista;

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Type\MessageType;
use \jamesiarmes\PhpEws\Type\EmailAddressType;
use \jamesiarmes\PhpEws\Type\SingleRecipientType;
use \jamesiarmes\PhpEws\Type\BodyType;
use \jamesiarmes\PhpEws\Request\CreateItemType;
use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType;
use \jamesiarmes\PhpEws\Request\SendItemType;
use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAttachmentsType;
use \jamesiarmes\PhpEws\Type\FileAttachmentType;
use \jamesiarmes\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType;
use \jamesiarmes\PhpEws\Enumeration\MessageDispositionType;

use \jamesiarmes\PhpEws\ArrayType\ArrayOfRecipientsType;

use \jamesiarmes\PhpEws\Type\DistinguishedFolderIdType;
use \jamesiarmes\PhpEws\Type\ItemIdType;
use \jamesiarmes\PhpEws\Type\TargetFolderIdType;

use \jamesiarmes\PhpEws\Request\CreateAttachmentType;

use Doctrine\Common\Collections\ArrayCollection;



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
     * @Route("/editclvrs/{id}", name="vtas_editar_cliente_vario")
     */
    public function editarClienteVario($id)
    {
        $em = $this->getDoctrine()->getManager();

        $cliente = $em->find(Remito::class, $id);

        $form = $this->createForm(RemitoType::class, 
                                 $cliente, 
                                 [
                                    'method' => 'POST', 
                                    'action' => $this->generateUrl('vtas_editar_cliente_vario_procesar', ['id' => $id])
                                 ]);

        return $this->render('@GestionVentas/bd/formEditClienteVario.html.twig', 
                             ['form' => $form->createView()]);
    }

    /**
     * @Route("/editclvrsproc/{id}", name="vtas_editar_cliente_vario_procesar", methods={"POST"})
     */

    public function editarClienteVarioProcesar($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $cliente = $em->find(Remito::class, $id);

        $form = $this->createForm(RemitoType::class, 
                                 $cliente, 
                                 ['method' => 'POST', 'action' => $this->generateUrl('vtas_editar_cliente_vario_procesar', ['id' => $id])]);

        $form->handleRequest($request);

        if ($form->isValid())
        {
            $em->flush();
            return new JsonResponse(['ok' => true]);
        }
        return new JsonResponse(['ok' => false]);
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
                if ($asoc->getActiva())
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


    private function generateFormAddItem(ItemCarga $item = null, TipoVenta $tpo, Articulo $art, ComprobanteVenta $comprobante, $formVentas)
    {
        if (!array_key_exists($tpo->getId(), $formVentas[$comprobante->getId()][1]))
        {
            $formVentas[$comprobante->getId()][1][$tpo->getId()] = [0 => $tpo, 1 => []];
        }

        if (!array_key_exists($art->getId(), $formVentas[$comprobante->getId()][1][$tpo->getId()][1]))
        {
            $formVentas[$comprobante->getId()][1][$tpo->getId()][1][$art->getId()] = [];
        }

        $formVentas[$comprobante->getId()][1][$tpo->getId()][1][$art->getId()] =  $this->getFormAltaItem($comprobante, $art, $tpo, $item)->createView();

        return $formVentas;
    }

    /**
     * @Route("/chemit/{id}", name="vtas_cambiar_emision_sanitario")
    */
    public function cambiarEmisionSanitario($id, Request $request)
    {
        try 
        {
            $em = $this->getDoctrine()->getManager();

            $comprobante = $em->find(ComprobanteVenta::class, $id);

            $data = $request->request->get('status');

            $comprobante->setGeneraSanitario($data);

            $em->flush();

            return new JsonResponse(['ok' => false, 'message' => $data]);
        }
        catch (\Exception $e){
                                return new JsonResponse(['ok' => false, 'message' => $e->getMessage()]);
        }
    }


    /**
     * @Route("/price/{comp}/{type}", name="vtas_set_price_venta")
    */
    public function setPriceVenta($comp, $type)
    {
        try 
        {
            $em = $this->getDoctrine()->getManager();

            $comprobante = $em->find(ComprobanteVenta::class, $comp);

            $tipo = $em->find(TipoVenta::class, $type);

            $detalle = $comprobante->getDetailVenta($tipo);

            return $this->render('@GestionVentas/ventas/setPriceItem.html.twig', ['comprobante' => $comprobante, 'items' => $detalle]);
        }
        catch (\Exception $e){
                                return new Response($e->getMessage());
        }
    }


    /**
     * @Route("/pricegl/{comp}", name="vtas_set_price_venta_global")
    */
    public function setPriceVentaGlobal($comp)
    {
        try 
        {


            $em = $this->getDoctrine()->getManager();

            $comprobante = $em->find(ComprobanteVenta::class, $comp);

            $listaDefault = $comprobante->getEntidad()->getListaPrecio();

            $lista = $comprobante->getEntidad()->getListaPrecio();

            //throw new \Exception("LISTA   _".$lista->getCodigo());

            $listas = $em->getRepository(ListaPrecio::class)->getAllLista();

            $detalle = $comprobante->getAllArticulos();

            $precios = $comprobante->getPrecios();

            foreach ($precios as $p)
            {
                $art = $p->getArticulo();

                if (array_key_exists($art->getId(), $detalle))
                {
                    unset($detalle[$art->getId()]);
                }
            }

            foreach ($detalle as $art)
            {
                $precio = null;
                if ($lista)
                {
                    
                    $items = $lista->getItems();

                    //return new  Response($lista->getCodigo());
                    $item = $lista->existePrecioArticulo($art[1]);
                    $precio = ($item?$item->getValorKg():null);
                }
                $price = new PrecioVentaArticulo();
                $price->setArticulo($art[1]);
                $price->setComprobante($comprobante);
                $price->setPrecio($precio);
                $comprobante->addPrecio($price);
                $em->persist($price);
            }

            $em->flush();

            $precios = $comprobante->getArticulosPreciosSort();

            ksort($precios);

            return $this->render('@GestionVentas/ventas/setPriceGlobal.html.twig', ['default' => $listaDefault, 'listas' => $listas, 'precios' => $precios, 'comprobante' => $comprobante]);
        }
        catch (\Exception $e)
        {
                                return new Response($e->getMessage()." - LINES 789");
        }
    }


    /**
     * @Route("/priceit/{lta}/{art}", name="vtas_get_precio_articulo_lista")
    */
    public function getPriceLista($lta, $art)
    {
        $em = $this->getDoctrine()->getManager();

        $lista = $em->find(ListaPrecio::class, $lta);

        $articulo = $em->find(Articulo::class, $art);

        $item = $lista->existePrecioArticulo($articulo);

        if (!$item)
        {
            return new JsonResponse(['ok' => false, 'message' => 'No existe precio del articulo para la lista indicada!']);
        }

        return new JsonResponse(['ok' => true, 'message' => number_format($item->getValorKg(), 2, '.', '')]);
    }

    /**
     * @Route("/applyprice/{comp}", name="vtas_apply_price_comprobante")
    */
    public function applyPriceComprobante($comp, Request $request)
    {
        $data = $request->request->all();
        
        $em = $this->getDoctrine()->getEntityManager();

        $comprobante = $em->find(ComprobanteVenta::class, $comp);

        $status = ['ok' => true, 'detail' => [], 'message' => ''];

        foreach ($data as $k => $v)
        {
            $item = $em->find(PrecioVentaArticulo::class, $k);
            if (($item) && (is_numeric($v)))
            {
                $item->setPrecio($v);
                $status['detail'][$k] = 1;
            }
            else
            {
                $status['detail'][$k] = 0;
            }
        }

        try
        {
            $em->flush();
            $comprobante->updateAllItemsFromPrices();
            $em->flush();
        }
        catch (\Exception $e) {
                                $status['ok'] = false;
                                $status['message'] = $e->getMessage();
        }

        return new JsonResponse($status);
    }


    /**
     * @Route("/setpriceit/{comp}", name="vtas_set_price_item_venta")
    */
    public function setPriceItemVenta($comp, Request $request)
    {
        $data = $request->request->all();
        
        $em = $this->getDoctrine()->getEntityManager();

        $status = ['ok' => true, 'detail' => [], 'message' => ''];

        foreach ($data as $k => $v)
        {
            $item = $em->find(ItemCarga::class, $k);
            if (($item) && (is_numeric($v)))
            {
                $cant = $item->getCantidad();
                $item->setPrecioUnitario($v);
                $item->setPrecioTotal(($v*$cant));
                $status['detail'][$k] = 1;
            }
            else
            {
                $status['detail'][$k] = 0;
            }
        }
        try
        {
            $em->flush();
        }
        catch (\Exception $e) {
                                $status['ok'] = false;
                                $status['message'] = $e->getMessage();
        }

        return new JsonResponse($status);
    }








    private function getHeader(ComprobanteVenta $comp, EntidadExterna $entidad, $pdf, $text)
    {
        $pdf->cell(0, 8, 'Fecha: '.$comp->getFecha()->format('d/m/Y'), 0,1,'R');

        $pdf->cell(0, 8, $text.": ".$entidad, 0,1,'C');

        return $pdf;
    }

    private function getDetail(ComprobanteVenta $comp, $pdf, $detail)
    {
        $i = 5;

        $pdf->SetFillColor(150);
        $pdf->cell(50, $i, "Articulo", 1,0,'C',1);
        $pdf->cell(15, $i, "Cantidad", 1,0,'C',1);
        $pdf->cell(20, $i, "TOT Kgs.", 1,0,'C',1);
        $pdf->cell(25, $i, "$/KG", 1,0,'C',1);
        $pdf->cell(25, $i, "$ NETO", 1,0,'C',1);
        $pdf->cell(25, $i, "$ IVA", 1,0,'C',1);
        $pdf->cell(0, $i, "$ TOTAL", 1,1,'C',1);

        $result = ['cant' => 0, 'kg' => 0, 'neto' => 0, 'iva' => 0, 'tot' => 0];

/*'art' => $articulo->getNombre(), 
                                                                                     'cant' => 0, 
                                                                                     'unit' => $it->getPrecioUnitario(), 
                                                                                     'tot' => 0*/
        foreach ($detail as $it)
        {
            $art = $it['art'];

            $montoItem = ($it['unit'] * ($it['cant']*$art->getPresentacionKg()));
            $iva = $montoItem * ($art->getAlicuotaIVA()/100);

            $pdf->cell(50, $i, $art->getNombreVenta(), 1,0,'L');
            $pdf->cell(15, $i, $it['cant'], 1,0,'R');
            $pdf->cell(20, $i, ($it['cant']*$art->getPresentacionKg()), 1,0,'R');
            $pdf->cell(25, $i, "$".number_format($it['unit'],2,',','.'), 1,0,'R');
            $pdf->cell(25, $i, "$".number_format($montoItem,2,',','.'), 1,0,'R');
            $pdf->cell(25, $i, "$".number_format($iva,2,',','.'), 1,0,'R');
            $pdf->cell(0, $i, "$".number_format(($iva + $montoItem),2,',','.'), 1,1,'R');
            $result['cant']+= $it['cant'];
            $result['kg']+= ($it['cant']*$art->getPresentacionKg());
            $result['neto']+= $montoItem;
            $result['iva']+= $iva;
            $result['tot']+= ($iva + $montoItem);
        }

        $pdf->cell(50, $i, '', 1,0,'L',1);
        $pdf->cell(15, $i, $result['cant'], 1,0,'R',1);
        $pdf->cell(20, $i, $result['kg'], 1,0,'R',1);
        $pdf->cell(25, $i, '', 1,0,'R',1);
        $pdf->cell(25, $i, "$".number_format($result['neto'],2,',','.'), 1,0,'R',1);
        $pdf->cell(25, $i, "$".number_format($result['iva'],2,',','.'), 1,0,'R',1);
        $pdf->cell(0, $i, "$".number_format($result['tot'],2,',','.'), 1,1,'R',1);

        return $pdf;
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

        $entidad = $comprobante->getEntidad();

        $totales = [];

        $tiposVentas = $comprobante->getArrayOfTypeVentaUnitario();

        $categorias = [];

        foreach ($articulos as $art)
        {
            $cate = $art->getCategoriaVenta();
            if (!array_key_exists($cate->getId(), $categorias))
            {
                $categorias[$cate->getId()] = $cate;
            }

            $listaArticulos[$art->getId()] = $art;

            $totales[$art->getId()] = 0;

            if (!array_key_exists($comprobante->getId(), $formVentas))
            {
                $formVentas[$comprobante->getId()] = [0 => $comprobante, 1 => []];
            }

            foreach ($tiposItem as $tpo)
            {
                $item = $comprobante->getItemConTipoYArticulo($tpo, $art, false);

                if ((($item) && ($item->getCantidad())) || ($entidad->aceptaTipoVenta($tpo)) || (array_key_exists($tpo->getId(), $tiposVentas)) )
                {                    
                    $formVentas = $this->generateFormAddItem($item, $tpo, $art, $comprobante, $formVentas);
                    $totales[$art->getId()]+= ($item?$item->getCantidad():0);
                }
            }
        }

        $listaComprobantes = [$comprobante->getId() => $comprobante];

        foreach ($comprobante->getAsociados() as $comp)
        {
            $listaComprobantes[$comp->getId()] = $comp;

            $tiposVentas = $comp->getArrayOfTypeVentaUnitario();

            $entidad = $comp->getEntidad();

            foreach ($articulos as $art)
            {
                $listaArticulos[$art->getId()] = $art;

                if (!array_key_exists($comp->getId(), $formVentas))
                {
                    $formVentas[$comp->getId()] = [0 => $comp, 1 => []];
                }

                foreach ($tiposItem as $tpo)
                {
                    $item = $comp->getItemConTipoYArticulo($tpo, $art, false);

                    if ((($item) && ($item->getCantidad())) || ($entidad->aceptaTipoVenta($tpo)) || (array_key_exists($tpo->getId(), $tiposVentas)) )
                    {
                        $formVentas = $this->generateFormAddItem($item, $tpo, $art, $comp, $formVentas);
                        $totales[$art->getId()]+= ($item?$item->getCantidad():0);
                    }
                    else
                    {
                     /*   if (array_key_exists($tpo->getId(), $formVentas[$comprobante->getId()][1]))
                        {
                            $formVentas = $this->generateFormAddItem($item, $tpo, $art, $comp, $formVentas);
                        }       */                    
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

        return $this->render('@GestionVentas/ventas/agregarItemsApaisado20.html.twig', [
                                                                                      'comprobante' => $comprobante,
                                                                                      'ventas' => $formVentas,
                                                                                      'cates' => $categorias,
                                                                                      'articulos' => $listaArticulos,
                                                                                      'tipos' => $tiposItem,
                                                                                      'totales' => $totales,
                                                                                      'form' => $formUpd->createView(),
                                                                                      'back' => $form->createView()]);
    }


  /*  public function agregarArticulosAAAAAAAAAComprobanteVentaAction($id)
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

        $entidad = $comprobante->getEntidad();

        $totales = [];

    	foreach ($articulos as $art)
    	{
    		$listaArticulos[$art->getId()] = $art;

    		$formVentas[$comprobante->getId()][$art->getId()] = [];

            $totales[$art->getId()] = [];

    		foreach ($tiposItem as $tpo)
    		{
                $totales[$art->getId()][$tpo->getId()] = 0;

                if ($entidad->aceptaTipoVenta($tpo))
                {
    			     $item = $comprobante->getItemConTipoYArticulo($tpo, $art, true);

                     if ($item)
                     {
                        $totales[$art->getId()][$tpo->getId()]+= $item->getCantidad();
                     }

    			     $formVentas[$comprobante->getId()][$art->getId()][$tpo->getId()] = $this->getFormAltaItem($comprobante, $art, $tpo, $item)->createView();
                }
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
                             $item = $comp->getItemConTipoYArticulo($tpo, $art, true);

                             if ($item)
                             {
                                $totales[$art->getId()][$tpo->getId()]+= $item->getCantidad();
                             }

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
                                                                                      'totales' => $totales,
                                                                                      'form' => $formUpd->createView(),
            																		  'back' => $form->createView()]);
    }*/

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
	    	$itemCarga = $cmp->getItemConTipoYArticulo($tpo, $art, true);
	    	$persistir = false;
	    	$em = $this->getDoctrine()->getManager();
	    	if (!$itemCarga)
	    	{
	    		$itemCarga = new ItemCarga();
	    		$persistir = true;
	    	}


            $unitario = null;


          /*  $lista = $cmp->getEntidad()->getListaPrecio();
            $exists = true;
            if ($lista)
            {
                $item = $lista->existePrecioArticulo($art);
                if ($item)
                {
                    $unitario = $item->getValorKg();
                }
                else
                {
                    $exists = false;
                }
            }*/





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
                $cmp->addItem($itemCarga);
		    	$em->persist($itemCarga);
	    	}
	    	
	    	$em->flush();

            $total = 0;

            $original = ($cmp->getOriginal()?$cmp->getOriginal():$cmp);

         //   $total = $em->getRepository(ComprobanteVenta::class)->getTotalVentasPorArticuloPorFecha($original, $cmp->getFecha(), $art, $tpo);

            $totales = $original->getItemTotalConArticuloYAsociados($art);
            $unitario = $totales[$tpo->getId()];
            $total = 0;

            foreach ($totales as $t)
            {
                $total+= $t;
            }

	    	return new JsonResponse(['error' => false, 'a' => $art->getId(), 't' => $tpo->getId(), 'u' => $unitario, 'tot' => $total]);
	    }
	    catch (\Exception $e){ return new JsonResponse(['error' => true, 'message' => $e->getMessage()]); }

    }



    public function borrarEsteMetodo($comprobantes)
    {
        $articulos = $em->getRepository(Articulo::class)->getListaArticulosConCategoriaVenta();

        $body = [];

        $totalesXCategoria = [];

        $totalGralCategoria = [];

        $totalKg = [];

        $totalPorArticulo = [];

        foreach ($comprobantes as $comp)
        {
            $body[$comp->getId()] = [];

            $totalKg[$comp->getId()] = ['u' => 0, 'k' => 0];

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
                    $totalesXCategoria[$comp->getId()][$art->getCategoriaVenta()->getId()] = ['u' => 0, 'k' => 0];
                }

                if (!array_key_exists($art->getId(), $totalPorArticulo))
                {
                    $totalPorArticulo[$art->getId()] = [];
                    $totalPorArticulo[$art->getId()]['t'] = 0;
                }
            }

            foreach ($comp->getItems() as $it)
            {
                $body[$comp->getId()][$it->getArticulo()->getId()][$it->getTipoVenta()->getId()] = $it->getCantidad();

                $articulo = $it->getArticulo();

                $categoria = $articulo->getCategoriaVenta();

                $tipo = $it->getTipoVenta();

                if ($categoria)
                {
                    if (array_key_exists($categoria->getId(), $totalesXCategoria[$comp->getId()]))
                    {
                        $totalesXCategoria[$comp->getId()][$categoria->getId()]['u']+= $it->getCantidad();
                        $totalKg[$comp->getId()]['k']+= ($it->getCantidad() * $articulo->getPresentacionKg());
                        $totalKg[$comp->getId()]['u']+= $it->getCantidad();
                    }

                    if (!array_key_exists($tipo->getId(), $totalPorArticulo[$articulo->getId()]))
                    {
                        $totalPorArticulo[$articulo->getId()][$tipo->getId()] = 0;
                    }

                    $totalPorArticulo[$articulo->getId()][$tipo->getId()]+= $it->getCantidad();
                    $totalPorArticulo[$articulo->getId()]['t']+= $it->getCantidad();

                    if (!array_key_exists($categoria->getId(), $totalGralCategoria))
                    {
                        $totalGralCategoria[$categoria->getId()] = 0;
                    }
                    $totalGralCategoria[$categoria->getId()]+= $it->getCantidad();
                }
            }


            foreach ($comp->getAsociados() as $asoc)
            {

                    foreach ($asoc->getItems() as $it)
                    {
                        $body[$comp->getId()][$it->getArticulo()->getId()][$it->getTipoVenta()->getId()]+= $it->getCantidad();

                        $articulo = $it->getArticulo();

                        $categoria = $articulo->getCategoriaVenta();

                        $tipo = $it->getTipoVenta();

                        if ($categoria)
                        {
                            if (array_key_exists($categoria->getId(), $totalesXCategoria[$comp->getId()]))
                            {
                                $totalesXCategoria[$comp->getId()][$categoria->getId()]['u']+= $it->getCantidad();
                                $totalKg[$comp->getId()]['k']+= ($it->getCantidad() * $articulo->getPresentacionKg());
                                $totalKg[$comp->getId()]['u']+= $it->getCantidad();
                            }

                            if (!array_key_exists($tipo->getId(), $totalPorArticulo[$articulo->getId()]))
                            {
                                $totalPorArticulo[$articulo->getId()][$tipo->getId()] = 0;
                            }

                            $totalPorArticulo[$articulo->getId()][$tipo->getId()]+= $it->getCantidad();
                            $totalPorArticulo[$articulo->getId()]['t']+= $it->getCantidad();

                            if (!array_key_exists($categoria->getId(), $totalGralCategoria))
                            {
                                $totalGralCategoria[$categoria->getId()] = 0;
                            }
                            $totalGralCategoria[$categoria->getId()]+= $it->getCantidad();
                        }
                    }
            }
        }

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

        $totalGralCategoria = [];

        $totalKg = [];

        $totalPorArticulo = [];

        $cates = [];

    	foreach ($comprobantes as $comp)
    	{
    		$body[$comp->getId()] = [];

            $totalKg[$comp->getId()] = ['u' => 0, 'k' => 0];

            $totalesXCategoria[$comp->getId()] = [];    		


            foreach ($articulos as $art)
    		{

                $cates[$art->getCategoriaVenta()->getId()] = $art->getCategoriaVenta();

    			$body[$comp->getId()][$art->getId()] = [];

    			foreach ($tiposVenta as $tpo)
    			{
    				$body[$comp->getId()][$art->getId()][$tpo->getId()] = null;
    			}

                if (!array_key_exists($art->getCategoriaVenta()->getId(), $totalesXCategoria[$comp->getId()]))
                {
                    $totalesXCategoria[$comp->getId()][$art->getCategoriaVenta()->getId()] = ['u' => 0, 'k' => 0];
                }

                if (!array_key_exists($art->getId(), $totalPorArticulo))
                {
                    $totalPorArticulo[$art->getId()] = [];
                    $totalPorArticulo[$art->getId()]['t'] = 0;
                }
    		}

    		foreach ($comp->getItems() as $it)
    		{
    			$body[$comp->getId()][$it->getArticulo()->getId()][$it->getTipoVenta()->getId()] = $it->getCantidad();

                $articulo = $it->getArticulo();

                $categoria = $articulo->getCategoriaVenta();

                $tipo = $it->getTipoVenta();

                if ($categoria)
                {
                    if (array_key_exists($categoria->getId(), $totalesXCategoria[$comp->getId()]))
                    {
                        $totalesXCategoria[$comp->getId()][$categoria->getId()]['u']+= $it->getCantidad();
                        $totalKg[$comp->getId()]['k']+= ($it->getCantidad() * $articulo->getPresentacionKg());
                        $totalKg[$comp->getId()]['u']+= $it->getCantidad();
                    }

                    if (!array_key_exists($tipo->getId(), $totalPorArticulo[$articulo->getId()]))
                    {
                        $totalPorArticulo[$articulo->getId()][$tipo->getId()] = 0;
                    }

                    $totalPorArticulo[$articulo->getId()][$tipo->getId()]+= $it->getCantidad();
                    $totalPorArticulo[$articulo->getId()]['t']+= $it->getCantidad();

                    if (!array_key_exists($categoria->getId(), $totalGralCategoria))
                    {
                        $totalGralCategoria[$categoria->getId()] = 0;
                    }
                    $totalGralCategoria[$categoria->getId()]+= $it->getCantidad();
                }
    		}


            foreach ($comp->getAsociados() as $asoc)
            {

                    foreach ($asoc->getItems() as $it)
                    {
                        $body[$comp->getId()][$it->getArticulo()->getId()][$it->getTipoVenta()->getId()]+= $it->getCantidad();

                        $articulo = $it->getArticulo();

                        $categoria = $articulo->getCategoriaVenta();

                        $tipo = $it->getTipoVenta();

                        if ($categoria)
                        {
                            if (array_key_exists($categoria->getId(), $totalesXCategoria[$comp->getId()]))
                            {
                                $totalesXCategoria[$comp->getId()][$categoria->getId()]['u']+= $it->getCantidad();
                                $totalKg[$comp->getId()]['k']+= ($it->getCantidad() * $articulo->getPresentacionKg());
                                $totalKg[$comp->getId()]['u']+= $it->getCantidad();
                            }

                            if (!array_key_exists($tipo->getId(), $totalPorArticulo[$articulo->getId()]))
                            {
                                $totalPorArticulo[$articulo->getId()][$tipo->getId()] = 0;
                            }

                            $totalPorArticulo[$articulo->getId()][$tipo->getId()]+= $it->getCantidad();
                            $totalPorArticulo[$articulo->getId()]['t']+= $it->getCantidad();

                            if (!array_key_exists($categoria->getId(), $totalGralCategoria))
                            {
                                $totalGralCategoria[$categoria->getId()] = 0;
                            }
                            $totalGralCategoria[$categoria->getId()]+= $it->getCantidad();
                        }
                    }
            }
    	}
      //  return new Response(var_dump($totalGralCategoria));

    	return $this->render('@GestionVentas/ventas/listaVentasDiarias20.html.twig', 
    						 ['fecha' => $data['fechaComprobante'],
    						  'comprobantes' => $comprobantes,
    						  'articulos' => $articulos,
    						  'tipos' => $tiposVenta,
                              'totArticulo' => $totalPorArticulo,
                              'totales' => $totalesXCategoria,
                              'totalKG' => $totalKg,
                              'totalGral' => $totalGralCategoria,
                              'cates' => $cates,
    						  'data' => $body]);
    }

/////////

    /**
     * @Route("/resumecbte/{id}", name="vtas_resumen_comprobante_venta")
     */
    public function resumenComprobanteVenta($id)
    {

        $em = $this->getDoctrine()->getManager();

        $comp = $em->find(ComprobanteVenta::class, $id);

        $body = [];

        $totalesXCategoria = [];

        $articulos = [];

        //$comp = $repository->find($id);

        foreach ($comp->getItems() as $it)
        {

            $articulo = $it->getArticulo();

            $categoria = $articulo->getCategoriaVenta();

              /*  if (!$it->getArticulo()->getCategoriaVenta())
                {
                    return new Response($comp->getId().'__    kakakakakaks adasdasdsad '.$articulo->getCodigoInterno());
                }*/

            $articulos[$articulo->getId()] = $articulo;

            if ($categoria)
            {
                if (!array_key_exists($categoria->getId(), $body))
                {
                    $body[$categoria->getId()] = [];
                }

                if (!array_key_exists($articulo->getId(), $body[$categoria->getId()]))
                {
                    $body[$categoria->getId()][$articulo->getId()] = 0;
                }


                $body[$categoria->getId()][$articulo->getId()]+= $it->getCantidad();
            }
            
        }
       // return new Response(var_dump($body));


        foreach ($comp->getAsociados() as $asoc)
        {

            foreach ($asoc->getItems() as $it)
            {
                $articulo = $it->getArticulo();

                $categoria = $articulo->getCategoriaVenta();

              /*  if (!$it->getArticulo()->getCategoriaVenta())
                {
                    return new Response('kakakakakaks '.$articulo->getCodigoInterno());
                }*/

                $articulos[$articulo->getId()] = $articulo;
                if ($categoria)
                {
                    if (!array_key_exists($categoria->getId(), $body))
                    {
                        $body[$categoria->getId()] = [];
                    }

                    if (!array_key_exists($articulo->getId(), $body[$categoria->getId()]))
                    {
                        $body[$categoria->getId()][$articulo->getId()] = 0;
                    }


                    $body[$categoria->getId()][$articulo->getId()]+= $it->getCantidad();
                }
            }
        }

      //  return new Response(var_dump($body));
        
        return $this->render('@GestionVentas/ventas/resumenVentaComprobante.html.twig', 
                             [
                                'comprobante' => $comp,
                                'data' => $body,
                                'arts' => $articulos
                             ]
                             );

    }
    //////////




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

    private function sendEmailAttach($file_path, $recpient_name, $recipient_email, $entidad, $fecha)
    {


        $server = 'smtp.office365.com';
        $username = 'sistema@sapucai.com.ar';
        $password = 'Leo181979';  
        $client = new \jamesiarmes\PhpEws\Client($server, $username, $password);
        $file = new \SplFileObject($file_path);
        $finfo = finfo_open();
        $filename = $file->getBasename();

        // Build the request.
        $request = new CreateItemType();
        $request->Items = new NonEmptyArrayOfAllItemsType();

        // Save the message, but do not send it.
        $request->MessageDisposition = MessageDispositionType::SEND_AND_SAVE_COPY;

        // Create the message.
        $message = new MessageType();
        $message->Subject = 'Ventas Correspondientes a '.strtoupper($entidad->getValor()).'  -  Fecha: '.$fecha->format('d/m/Y');
        $message->ToRecipients = new ArrayOfRecipientsType();
        $message->Attachments = new NonEmptyArrayOfAttachmentsType();

        // Set the sender.
        $message->From = new SingleRecipientType();
        $message->From->Mailbox = new EmailAddressType();
        $message->From->Mailbox->EmailAddress = $username;

        // Set the recipient.
        $recipient = new EmailAddressType();
        $recipient->Name = $recpient_name;
        $recipient->EmailAddress = $recipient_email;
        $message->ToRecipients->Mailbox[] = $recipient;

        // Set the message body.
        $message->Body = new BodyType();
        $message->Body->BodyType = BodyTypeType::HTML;
        $message->Body->_ = <<<BODY
        <html>
          <head></head>
          <body>
            <p>Archivo adjunto con detalle de venta</p>
          </body>
        </html>
        BODY;

        // Build the file attachment.
        $attachment = new FileAttachmentType();
        $attachment->IsInline = true;
        $attachment->Content = $file->openFile()->fread($file->getSize());
        $attachment->Name = $filename;
        $attachment->IsInline = true;
        $attachment->ContentType = finfo_file($finfo, $file_path);
        $attachment->ContentId = $filename;
        $message->Attachments->FileAttachment[] = $attachment;

        // Add the message to the request.
        $request->Items->Message[] = $message;

        $response = $client->CreateItem($request);

    }

    private function sendMail($entidad, $comprobante, $detalle, $titulo, $file_name)
    {
        $ews = new Client('', '', '', '');
        $server = 'smtp.office365.com';
        $username = 'sistema@sapucai.com.ar';
        $password = 'Leo181979';  
        $ews = new Client($server, $username, $password);

        $msg = new MessageType();

        $toAddresses = array();
        $toAddresses[0] = new EmailAddressType();
        $toAddresses[0]->EmailAddress = 'leochabur@gmail.com';
        $toAddresses[0]->Name = 'John Doe';   

        $msg->ToRecipients = $toAddresses;

        $fromAddress = new EmailAddressType();
        $fromAddress->EmailAddress = 'sistema@sapucai.com.ar';
        $fromAddress->Name = 'Sistema';

        $msg->From = new SingleRecipientType();
        $msg->From->Mailbox = $fromAddress;

        $msg->Subject = $titulo . "  -  " . $entidad;

        $msg->Body = new BodyType();
        $msg->Body->BodyType = 'HTML';

      /*  $table = "<style>
                    th, td {
                              padding: 10px;
                            }
                    .impar {
                                               background-color: #ccc;
                                            }
                  </style>
                  <table border='1'>
                    <thead>
                        <tr>
                            <th>Articulo</th>
                            <th>Cantidad</th>
                            <th>TOT. Kgs.</th>
                            <th>$ x Kgs.</th>
                            <th>Neto</th>
                            <th>IVA</th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>";
        $cant = $kg = $neto = $ivatot = $total = $i = 0;
        foreach ($detalle as $it)
        {
            $art = $it['art'];

            $montoItem = ($it['unit'] * ($it['cant']*$art->getPresentacionKg()));
            $iva = $montoItem * ($art->getAlicuotaIVA()/100);

            $class = ($i++%2)?'impar':'par';

            $table.="<tr class='$class'>
                        <td>".$art->getNombreVenta()."</td>
                        <td align='right'>".$it['cant']."</td>
                        <td align='right'>".($it['cant']*$art->getPresentacionKg())."</td>
                        <td align='right'>"."$".number_format($it['unit'],2,',','.')."</td>
                        <td align='right'>"."$".number_format($montoItem,2,',','.')."</td>
                        <td align='right'>"."$".number_format($iva,2,',','.')."</td>
                        <td align='right'>"."$".number_format(($iva + $montoItem),2,',','.')."</td>
                    </tr>";
            $cant+= $it['cant'];
            $kg+= ($it['cant']*$art->getPresentacionKg());
            $neto+= $montoItem;
            $ivatot+= $iva;
            $total+= ($iva + $montoItem);
        }
        $table.="</tbody>
                </table>";*/

        $msg->Body->_ = 'DETAIL';

        $msgRequest = new CreateItemType();
        $msgRequest->Items = new NonEmptyArrayOfAllItemsType();
        $msgRequest->Items->Message = $msg;
        $msgRequest->MessageDisposition = 'SendAndSaveCopy';
        $msgRequest->MessageDispositionSpecified = true;

        // Open file handlers.
        $file = new \SplFileObject($file_name);
        $finfo = finfo_open();

        // Build the request,
        $request = new CreateAttachmentType();
        $request->ParentItemId = new ItemIdType();

        $request->Attachments = new NonEmptyArrayOfAttachmentsType();

        // Build the file attachment.
        $attachment = new FileAttachmentType();
        $attachment->Content = $file->openFile()->fread($file->getSize());
        $attachment->Name = $file->getBasename();
        $attachment->ContentType = finfo_file($finfo, $file_name);
        $request->Attachments->FileAttachment[] = $attachment;

        $response = $ews->CreateAttachment($request);

$response_messages = $response->ResponseMessages
    ->CreateAttachmentResponseMessage;
        //$response = $ews->CreateItem($msgRequest);
    } 


    /**
     * @Route("/formvta/{comp}", name="vtas_generate_formulario_concignacion")
    */
    public function generatePDFVentaConsignacion($comp)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $comprobante = $em->find(ComprobanteVenta::class, $comp);

        $detalle = [0 => [], 1 => [], 2 => []];

        $detalle = $this->procesarCierreVenta($comprobante, $detalle);

        $detail = [];

        foreach ($comprobante->getAsociados() as $asoc)
        {
            $detalle = $this->procesarCierreVenta($asoc, $detalle);
        }

        $pdf = $this->get('app.fpdf');

        //imprime todos los comprobantes de venta en concepto de consignacion
        foreach ($detalle[0] as $vtas)
        {
            $detail = $vtas['detalle'];
            if (count($detail))
            {
                ksort($detail);
      
                $pdf->AddPage('P', 'A4'); 
                $pdf->SetFont('Arial','',9);

                $pdf = $this->getHeader($vtas['comp'], $vtas['entidad'], $pdf, 'Consignatario');

                $pdf = $this->getDetail($comprobante, $pdf, $detail);

                $pdf->cell(0, 10, "__________________________________________________________________________________________________________", 0,1,'C');

                $pdf = $this->getHeader($vtas['comp'], $vtas['entidad'], $pdf, 'Consignatario');

                $pdf = $this->getDetail($comprobante, $pdf, $detail);

               // $this->sendMail($vtas['entidad'], $comprobante, $detail, 'VENTAS CONSIGNACION');
            }
        }

        //imprime todos los comprobantes de venta en concepto de ventas oficiales
        foreach ($detalle[1] as $vtas)
        {   
            $detail = $vtas['detalle'];
            if (count($detail))
            {
                ksort($detail);
      
                $pdf->AddPage('P', 'A4'); 
                $pdf->SetFont('Arial','',9);

                $pdf = $this->getHeader($vtas['comp'], $vtas['entidad'], $pdf, 'Ventas Oficiales');

                $pdf = $this->getDetail($comprobante, $pdf, $detail);

                $pdf->cell(0, 10, "__________________________________________________________________________________________________________", 0,1,'C');

                $pdf = $this->getHeader($vtas['comp'], $vtas['entidad'], $pdf, 'Ventas Oficiales');

                $pdf = $this->getDetail($comprobante, $pdf, $detail);

               // $this->sendMail($vtas['entidad'], $comprobante, $detail, 'VENTAS OFICIALES');
            }
        }

        //imprime todos los comprobantes de venta en concepto de ventas rayadas
        foreach ($detalle[2] as $vtas)
        {   
            $detail = $vtas['detalle'];
            ksort($detail);
            
            if (count($detail))
            {
                $pdf->AddPage('P', 'A4'); 
                $pdf->SetFont('Arial','',9);

                $pdf = $this->getHeader($vtas['comp'], $vtas['entidad'], $pdf, 'Ventas Rayadas');

                $pdf = $this->getDetail($comprobante, $pdf, $detail);

                $pdf->cell(0, 10, "__________________________________________________________________________________________________________", 0,1,'C');

                $pdf = $this->getHeader($vtas['comp'], $vtas['entidad'], $pdf, 'Ventas Rayadas');

                $pdf = $this->getDetail($comprobante, $pdf, $detail);

                
            }
        }

        $nameFile = str_replace(' ', '_', $comprobante->getEntidad()->getValor()."_".$comprobante->getFecha()->format('d-m-Y').".pdf");

        $ventas = realpath($this->get('kernel')->getRootDir().'/../web/ventas/').DIRECTORY_SEPARATOR;

        $pdf->Output('F', $ventas.$nameFile, true);

        $mail = 'leochabur@gmail.com';
        $destinatario = 'Leonardo Chabur';

        $this->sendEmailAttach($ventas.$nameFile, $destinatario, $mail, $comprobante->getEntidad(), $comprobante->getFecha());

        return new Response($pdf->Output(), 200, array('Content-Type' => 'application/pdf'));  
    }





    private function getKey(Articulo $art)
    {
        $id_cv = ($art->getCategoriaVenta()?$art->getCategoriaVenta()->getId():10000);

        $id_c = ($art->getCategoria()?$art->getCategoria()->getOrden():10000);

        $key = $id_cv."-".$id_c."-".($art->getOrden()?$art->getOrden()."-".$art->getId():$art->getId());

        return $key;
    }


    private function procesarCierreVenta(ComprobanteVenta $comp, $detalle)
    {
        //$detalle[0] => consignacion   $detalle[1] = ventasOficiales    $detalle[2] = ventasRayadas

        $entidad = $comp->getEntidad();

        $consignacion = $detalle[0];

        $oficial = $detalle[1];

        $rayado = $detalle[2];

        if (!$entidad->getFacturaIndividual())
        {
            $entidad = $entidad->getOriginal();
        }
    
        if ($entidad->getEsConsignatario())
        {
            if (!array_key_exists($entidad->getId(), $consignacion))
            {   
                $consignacion[$entidad->getId()] = ['comp' => $comp, 'entidad' => $entidad, 'detalle' => []];
            }
            
            foreach ($comp->getItems() as $it)
            {
                $articulo = $it->getArticulo();

                $key = $this->getKey($articulo);                

                if (!array_key_exists($key, $consignacion[$entidad->getId()]['detalle']))
                {
                    $consignacion[$entidad->getId()]['detalle'][$key] = [
                                                                         'art' => $articulo, 
                                                                         'cant' => 0, 
                                                                         'unit' => $it->getPrecioUnitario(), 
                                                                         'tot' => 0
                                                                         ];
                }
                $consignacion[$entidad->getId()]['detalle'][$key]['cant']+= $it->getCantidad();
                $consignacion[$entidad->getId()]['detalle'][$key]['tot']+= $it->getPrecioTotal();
            }   
        }
        else
        {
            foreach ($comp->getItems() as $it)
            {
                $articulo = $it->getArticulo();

                $key = $this->getKey($articulo);                

                if ($it->getTipoVenta()->getOficial())
                {
                    if (!array_key_exists($entidad->getId(), $oficial))
                    {   
                        $oficial[$entidad->getId()] = ['comp' => $comp, 'entidad' => $entidad, 'detalle' => []];
                    }

                    if (!array_key_exists($key, $oficial[$entidad->getId()]['detalle']))
                    {
                        $oficial[$entidad->getId()]['detalle'][$key] = [
                                                                             'art' => $articulo, 
                                                                             'cant' => 0, 
                                                                             'unit' => $it->getPrecioUnitario(), 
                                                                             'tot' => 0
                                                                             ];
                    }
                    $oficial[$entidad->getId()]['detalle'][$key]['cant']+= $it->getCantidad();
                    $oficial[$entidad->getId()]['detalle'][$key]['tot']+= $it->getPrecioTotal();
                }
                else
                {
                    if (!array_key_exists($entidad->getId(), $rayado))
                    {   
                        $rayado[$entidad->getId()] = ['comp' => $comp, 'entidad' => $entidad, 'detalle' => []];
                    }
                    
                    if (!array_key_exists($key, $rayado[$entidad->getId()]['detalle']))
                    {
                        $rayado[$entidad->getId()]['detalle'][$key] = [
                                                                             'art' => $articulo, 
                                                                             'cant' => 0, 
                                                                             'unit' => $it->getPrecioUnitario(), 
                                                                             'tot' => 0
                                                                             ];
                    }
                    $rayado[$entidad->getId()]['detalle'][$key]['cant']+= $it->getCantidad();
                    $rayado[$entidad->getId()]['detalle'][$key]['tot']+= $it->getPrecioTotal();
                }
            }   

        }


        return [0 => $consignacion, 1 => $oficial, 2 => $rayado];
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

            //$detalle = $this->procesarCierreVenta($comprobante, $detalle);

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
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function incorporarVentasAFaena(Request $request)
    {        

        $du = $request->query->get('du');
        $fecha = null;
        if($du)
        {
          //  $fecha = new \DateTime();
           // $fecha->setTimestamp($du);
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
                $filtrar = $repository->getComprobantesVentaFinalizados($fechaConsulta);
                $comprobantes = [];

                foreach ($filtrar as $c)
                {
                    if (!$c->getEntidad()->getOriginal()) //al filtrar por las entidades que no tienen un original asociado quire decir que es la cabeza del grupo
                    {
                        $comprobantes[] = $c;
                    }
                }

                $options = ['form' => $form->createView(), 'comprobantes' => $comprobantes];
                return $this->render('@GestionVentas/ventas/incorporarVentas.html.twig', $options); 
            }
        }

        return $this->render('@GestionVentas/ventas/incorporarVentas.html.twig', ['form' => $form->createView()]); 
    }


    /**
     * @Route("/selcam/{cmp}", name="vtas_seleccionar_camion")
     */
    public function getFormSelectCamion($cmp)
    {
        $form = $this->getFormularioSelectCamion($cmp);
        return $this->render('@GestionVentas/ventas/setCamionComprobanteVenta.html.twig', ['form' => $form->createView()]);  
    }

    private function getFormularioSelectCamion($cmp)
    {
        return $this->createFormBuilder()
                        ->add('camion', 
                              EntityType::class, [
                              'class' => 'GestionFaenaBundle:gestionBD\CamionVenta',    
                              'required' => true,                 
                              'query_builder' => function (EntityRepository $er) {
                                                                                    return $er->createQueryBuilder('t')
                                                                                              ->where('t.activa = :activa')
                                                                                              ->setParameter('activa', true)
                                                                                              ->orderBy('t.valor');
                                                                                 },
                        ])
                        ->add('asignar', SubmitType::class)
                        ->setAction($this->generateUrl('vtas_set_camion_comprobante_venta', ['cmp' => $cmp]))  
                        ->setMethod('POST')               
                        ->getForm(); 
    }

    /**
     * @Route("/setcamcv/{cmp}", name="vtas_set_camion_comprobante_venta")
     */
    public function setCamionComprobanteVenta($cmp, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $comprobante = $em->find(ComprobanteVenta::class, $cmp);

        $form = $this->getFormularioSelectCamion($cmp);
        $form->handleRequest($request);

        $data = $form->getData();
        $comprobante->setCamion($data['camion']);
        $em->flush();
        return new JsonResponse(['oka' => 'okoaskdoaskdosakdosadka  '.$data['camion']]);
    }



    /**
     * @Route("/print/{cmp}", name="vtas_imprimir_comprobante")
     */
    public function imrpimirComprobante($cmp)
    {
        $em = $this->getDoctrine()->getManager();
        $comprobante = $em->find(ComprobanteVenta::class, $cmp);
        $faenaDiaria = $em->getRepository(FaenaDiaria::class)->getFaenaConFecha($comprobante->getFecha());
        if (!$faenaDiaria)
        {
            $this->addFlash(
                              'error',
                              'No existe una faena iniciada para el '.$comprobante->getFecha()->format('d/m/Y'.'!')
                           );
            return $this->redirectToRoute('vtas_incorporar_ventas_a_faena', ['du' => $comprobante->getFecha()->getTimestamp()]);
        }

        
        if (!$comprobante->getCamion())
        {
            $this->addFlash(
                              'error',
                              'El comprobante no tiene asignado un transporte!'
                           );
            return $this->redirectToRoute('vtas_incorporar_ventas_a_faena', ['du' => $comprobante->getFecha()->getTimestamp()]);
        }

        $detail = [];

        if ($comprobante->getTotalCantidadComprobante()) //existen cantidades cargadas al comprobante
        {
            $detail = $this->procesarComprobante($comprobante, $detail); //Procesa el comprobante principal
        }
        

        foreach ($comprobante->getAsociados() as $asoc) //recorre los comprobantes asociados al comprobante principal
        {
            if ($asoc->getTotalCantidadComprobante()) //existen cantidades cargadas al comprobante
            {
                $detail = $this->procesarComprobante($asoc, $detail);
            }
        }

       $sanitarios = [];

       $pdf = $this->get('remito.pdf');

       $numeracion = $em->getRepository(NumeracionRemito::class)->getNumeracion();

       foreach ($detail['titularOC']['sanitarios'] as $san)
       {
            $items = $san['items'];

            $comp = $san['comprobante'];
 
            if ($numeracion)
            {
                $remito = $comp->getRemito();

                if (!$remito)
                {
                    $numeracion->incNumero();
                    $remito = $this->generateRemitoVenta($comp, $san['titular'], $items, $numeracion->getUltimoUtilizado(), $numeracion);
                    $em->persist($remito);
                }

                $pdf->AddPage('P', 'A4');                 
                $pdf = $this->getHeaderRemitoOficial($pdf, 'Original', $remito);
                $pdf = $this->footerRemitoOficial($pdf, $remito);
                $pdf = $this->setDetalleRemitoOficial($pdf, $items);

                $pdf->AddPage('P', 'A4');
                $pdf = $this->getHeaderRemitoOficial($pdf, 'Duplicado', $remito);
                $pdf = $this->footerRemitoOficial($pdf, $remito);
                $pdf = $this->setDetalleRemitoOficial($pdf, $items);
            }
       }


       if ($comprobante->getTotalCantidadComprobante()) //Ingresa a
       {
            if (!$comprobante->getOrdenCarga()) //quiere decir que aun no se ha procesado el comprobante
            {
                $ordenCarga = $em->getRepository(OrdenCarga::class)->findOrdenCargaEntidad($comprobante->getEntidad(), $faenaDiaria, $comprobante);
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
                    $comprobante->setOrdenCarga($ordenCarga);
                    $comprobante->setUserConfirm($this->getUser());
                    $em->persist($ordenCarga);
                }
                else
                {
                    if (!$ordenCarga->existeComprobanteCargado($comprobante))
                    {
                        $comprobante->setConfirmado(true);
                        $comprobante->setUserConfirm($this->getUser());
                        $ordenCarga->addComprobante($comprobante);
                        $comprobante->setOrdenCarga($ordenCarga);
                        $ordenCarga->addEntidade($comprobante->getEntidad());
                    }
                    else
                    {
                        $ingresar = false;
                    }
                }
                $this->ingresarComprobantes($comprobante, $em, $ingresar);
            }
       }

        foreach ($comprobante->getAsociados() as $asoc) //recorre los comprobantes asociados al comprobante principal
        {
            if ($asoc->getTotalCantidadComprobante()) //existen cantidades cargadas al comprobante
            {
                if (!$asoc->getOrdenCarga())
                {
                   /* $ordenCarga = $em->getRepository(OrdenCarga::class)->findOrdenCargaEntidad($comprobante->getEntidad(), $faenaDiaria, $comprobante);
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
                    {*/
                        if (!$ordenCarga->existeComprobanteCargado($asoc))
                        {
                            $asoc->setConfirmado(true);
                            $asoc->setUserConfirm($this->getUser());
                            $ordenCarga->addComprobante($asoc);
                            $ordenCarga->addEntidade($asoc->getEntidad());
                            $asoc->setOrdenCarga($ordenCarga);
                            $asoc->setUserConfirm($this->getUser());
                        }
                        else
                        {
                            $ingresar = false;
                        }
                   // }

                    $this->ingresarComprobantes($asoc, $em, $ingresar);
                }
            }
        }

       $em->flush();
       return new Response($pdf->Output(), 200, array('Content-Type' => 'application/pdf')); 
    }

    private function generateSolicitudes($titular, $detalle)
    {
                $region = $em->find(Region::class, $rgn);
                $solicitudes = $em->getRepository(Solicitud::class)->findSolicitudes($grupo, $region);
                $tr = $grupo->getTropa();
                $zipName = 'solicitudesFecha'.$grupo->getFecha()->format('dmY').'Region'.$region->getRegion().'.zip';
                foreach ($solicitudes as $sol)
                {
                    $dom = new \DOMDocument('1.0', 'utf-8');
                    $dom->xmlStandalone = true;
                    $solicitud = $dom->createElement('se:solicitud');
                    $solicitud->setAttribute( "xmlns:se", "http://www.senasa.gov.ar/solicitud" );
                    $solicitud->setAttribute( "xmlns:xsi", "http://www.w3.org/2001/XMLSchema-instance" );
                    $solicitud->setAttribute( "xsi:schemaLocation", "http://www.senasa.gov.ar/solicitud solicitudCertCarnicos.xsd");
                    $version = $dom->createElement( "se:version", $grupo->getVersion());
                    $solicitud->appendChild($version);
                    $tpp = $dom->createElement( "se:tropasPorProducto", 'true');
                    $solicitud->appendChild($tpp);
                    $paisDestino = $dom->createElement( "se:paisDestino", $grupo->getPaisDestino()->getCodigo());
                    $solicitud->appendChild($paisDestino);
                    $establecimiento = $dom->createElement( "se:establecimiento", $grupo->getCodigoEstablecimiento());
                    $solicitud->appendChild($establecimiento);
                    $lugarDestino = $dom->createElement( "se:lugarDestino", $sol->getLugarDestino());
                    $solicitud->appendChild($lugarDestino);
                    
                    $detalles = $dom->createElement('se:detalles');
                    $ok = false;
                    foreach ($sol->getDetalles() as $deta)
                    {
                        if ($deta->getCantidad())
                        {
                            $detalle = $dom->createElement('se:detalle');
                                $producto = $dom->createElement('se:producto');
                                  $codigo = $dom->createElement('se:codigoProducto', $deta->getArticulo()->getCodigoCapa());
                                $producto->appendChild($codigo);
                            $detalle->appendChild($producto);
                           // $congelado = $tr->getFechaCongelado()->format('Y-m-d');
                            $tropa = $dom->createElement('se:tropa');
                            $tropa->setAttribute( "fechaDeCongelado", "" .$tr->getFechaElaboracion()->format('Y-m-d'));
                            $tropa->setAttribute( "fechaDeElaboracion", "".$tr->getFechaElaboracion()->format('Y-m-d'));
                            $tropa->setAttribute( "fechaDeFaena", "".$tr->getFechaFaena()->format('Y-m-d') );
                            $tropa->setAttribute( "fechaDeVencimiento", ''.$tr->getFechaVto()->format('Y-m-d'));
                            //$tropa->setAttribute( "numeroTropa", ''.$tr->getNumeroTropa() );
                            $tropa->setAttribute( "numeroTropa", ''.$tr->getLote() );
                            $tropa->setAttribute( "lote", ''.$tr->getLote());
                            $detalle->appendChild($tropa);
                            $detalle->appendChild($dom->createElement('se:pesoNeto', $deta->getPesoNeto()));
                            $detalle->appendChild($dom->createElement('se:pesoBruto', $deta->getPesoBruto()));
                            $detalle->appendChild($dom->createElement('se:cantidad', $deta->getCantidad()));
                            $detalle->appendChild($dom->createElement('se:envasePrimario', $deta->getEnvasePrimario()->getNombre()));
                            $detalle->appendChild($dom->createElement('se:envaseSecundario', $deta->getEnvaseSecundario()->getNombre()));
                            $detalle->appendChild($dom->createElement('se:codEnvasePrimarioSENASA', $deta->getEnvasePrimario()->getCodigo()));
                            $detalle->appendChild($dom->createElement('se:codEnvaseSecundarioSENASA', $deta->getEnvaseSecundario()->getCodigo()));
                            $detalle->appendChild($dom->createElement('se:marca', $deta->getArticulo()->getMarca()));
                            $detalles->appendChild($detalle);
                            $ok = true;
                        }
                    }
                    if ($ok)
                    {
                        $generateZip = true;
                        $solicitud->appendChild($detalles);
                        $solicitud->appendChild($dom->createElement('se:precintoSENASA', $sol->getPrecintoSenasa()));
                        $camion = $dom->createElement('se:camion');
                          $camion->appendChild($dom->createElement('se:tipoDeTransporte', $sol->getCamion()->getTipo()));
                          $camion->appendChild($dom->createElement('se:patenteCamion', $sol->getCamion()->getPatente()));
                          $camion->appendChild($dom->createElement('se:habilitacionTransporte', $sol->getCamion()->getSenasa()));
                        $solicitud->appendChild($camion);
                        $solicitud->appendChild($dom->createElement('se:temperatura', $sol->getTemperatura()));
                        $solicitud->appendChild($dom->createElement('se:territorio', 'AR-1'));
                        $solicitud->appendChild($dom->createElement('se:rolDelEstablecimiento', $grupo->getRoleEstablecimiento()));
                        $dom->appendChild($solicitud);
                        $name = $zip."sol_".$sol->getId().".xml";
                        $dom->save($name);
                        $files["sol_".$sol->getId().".xml"] = $name;
                    }
                }
    }

    private function generateRemitoVenta(ComprobanteVenta $comp, EntidadExterna $entidad, $items, $numero, NumeracionRemito $numeracion)
    {
        $remito = new RemitoVenta();
        $remito->setNumero($numero);
        $remito->setCae($numeracion->getCai());
        $remito->setVencimientoCAE($numeracion->getVencimiento());
        $remito->setEntidad($entidad);
        $remito->setComprobante($comp);
        $remito->setCuit($entidad->getCuit());
        $remito->setDireccion($entidad->getDireccion());
        $remito->setRazonSocial($entidad->getValor());
        $remito->setFecha($comp->getFecha());
        $remito->setPuntoVenta($numeracion->getPuntoVenta());
        foreach ($items as $it)
        {
            $itremito = new ItemCarga();
            $itremito->setCantidad($it->getCantidad());
            $itremito->setArticulo($it->getArticulo());
            $itremito->setRemito($remito);
        }

        return $remito;
    }
    
    private function getHeaderRemitoOficial($pdf, $original, RemitoVenta $remito)
    {
        $miralejos = $this->get('kernel')->getRootDir() . '/../web/resources/img/miralejos.jpg';
        $sapucai = $this->get('kernel')->getRootDir() . '/../web/resources/img/logo2.jpg';

        $x = $pdf->getX();

        $y = $pdf->getY();
        

        $pdf->Image($miralejos,$x+3,$y+2,40);
        $pdf->Image($sapucai,$x+60,$y+2,26);

        ///texto bajo los logos

        $pdf->SetFont('Arial','',8);
        $pdf->text($x+17, $y+18, 'Administracion, ventas, deposito:');
        $pdf->text($x+14, $y+22, 'Ruta 210 Km. 56 (CP 1984) Domselaar');
        $pdf->text($x+19, $y+26, 'Tel.: 02225-491-801 al 899');
        $pdf->text($x+18, $y+30, 'e-mail: info@sapucai.com.ar');

        //////

        $pdf->SetFont('Arial','',10);

        $pdf->RoundedRect($x, $y, 191, 60, 2);

        $pdf->RoundedRect($x, $y+61, 191, 190, 2);

        $x+=3;

        $pventa = str_pad($remito->getPuntoVenta(), 4, "0", STR_PAD_LEFT);

        $numero = str_pad($remito->getNumero(), 8, "0", STR_PAD_LEFT);

        $pdf->text($x+105, $y+9, 'REMITO '.iconv('UTF-8', 'windows-1252', 'Nº')."  $pventa - $numero");  

        $pdf->SetFont('Arial','',8);
        $pdf->text($x+105, $y+3, $original); 

        $pdf->SetFont('Arial','',9);

        $pdf->text($x+105, $y+13, 'FECHA: '.$remito->getFecha()->format('d/m/Y'));      

        $pdf->text($x+105, $y+19, 'I.V.A.: RESPONSABLE INSCRIPTO'); 
        $pdf->text($x+105, $y+22, 'C.U.I.T.: 30-57735081-3'); 
        $pdf->text($x+105, $y+25, 'Imp. Ing. Brutos Conv. Mult.: 30-57735081-3'); 
        $pdf->text($x+105, $y+28, 'Caja Prev. Com.: 1.042.708'); 
        $pdf->text($x+105, $y+31, 'Imp. Int.: No Responsable');
        $pdf->text($x+105, $y+34, 'Inicio Actividades: 01/01/1972');  

        ///RECTANGULO LETRA COMPROBANTE
        $x-=5;
        $pdf->Rect($x+90, $y, 10, 10);
        $pdf->SetFont('Arial','B',14);
        $pdf->text($x+93, $y+7, 'R'); 
        $pdf->Line($x+95, $y+10, $x+95, $y+47);

        $x+=5;
        ////////////////////////////////////

        $x-=3;
        $y+=30;

        $pdf->SetFont('Arial','',7);

        $pdf->Line($x, $y+6, $x+191, $y+6);
        $pdf->text($x+20, $y+9, 'NOMBRE O RAZON SOCIAL'); $pdf->text($x+105, $y+9, 'DOMICILIO COMERCIAL - LOCALIDAD'); 

        $pdf->SetFont('Arial','IB',8);
        $pdf->text($x+20, $y+16, strtoupper($remito->getRazonSocial())); $pdf->text($x+105, $y+16, strtoupper($remito->getDireccion())); 
        $pdf->Line($x, $y+10, $x+191, $y+10);
        $pdf->Line($x, $y+17, $x+191, $y+17);

        //SET IVA AND CUIT
        $pdf->text($x+12, $y+22, ''); 
        $pdf->text($x+105, $y+22, $remito->getCuit());
        ///////////

        $pdf->SetFont('Arial','',7);
        $pdf->text($x+2, $y+22, 'I.V.A.:'); 
        $pdf->text($x+95, $y+22, 'CUIT:');
        $pdf->Line($x, $y+23, $x+191, $y+23);

        $pdf->text($x+2, $y+29, 'TRANSPORTISTA:'); 
        $pdf->text($x+95, $y+29, 'DOMICILIO:'); 
        $pdf->text($x+160, $y+29, 'CUIT: 30-70986951-1'); 

        $y+=7;
        $pdf->SetFont('Arial','',9);
        $pdf->text($x+1, $y+29, 'CODIGO'); 
        $pdf->text($x+15, $y+29, 'DESCRIPCION'); 
        $pdf->text($x+130, $y+29, 'CANT.'); 
        $pdf->text($x+150, $y+29, 'KG. x CAJON'); 
        $y+=1;
        $pdf->Line($x, $y+30, $x+191, $y+30);
        $pdf->Ln(20);

        return $pdf;
    }

    private function footerRemitoOficial($pdf, RemitoVenta $remito)
    {
        $pdf->SetY(-40);

        $x = $pdf->getX();
        $y = $pdf->getY();

        $pdf->SetFont('Arial','',9);

        $pdf->RoundedRect($x, $y+6, 65, 20,2, '14');

        $pdf->Rect($x+65, $y+6, 44, 20);

        $pdf->text($x+1, $y+10, 'PEDIDOS: DE 7 A 14 HORAS');
        $pdf->text($x+1, $y+14, 'RECLAMOS DE MERCADERIA');

        $pdf->SetFont('Arial','',7);

        $y+=18;

        $pdf->text($x+1, $y, 'Deberan realizarse al fletero en el momento de la entrega');
        $pdf->text($x+1, $y+3, 'No se dara curso a ninguna otra forma de reclamo');

        $pdf->SetFont('Arial','',9);
        
        $x = $x + 110;
        $y-=19;
        $pdf->SetFont('Arial','',7);

        $pdf->text($x+3, $y+10, 'ENTREGUE CONFORME');
        $pdf->Rect($x-1, $y+7, 41, 5);
        $pdf->text($x, $y+20, '._._._._._._._._._._._._._._._._._');
        $pdf->text($x+4, $y+25, 'FIRMA CHOFER');
        $pdf->Rect($x-1, $y+12, 41, 15);

        $x = $x + 41;
        $pdf->text($x+3, $y+10, 'RECIBI CONFORME');
        $pdf->RoundedRect($x-1, $y+7, 41, 20,2,'23');
        $pdf->text($x, $y+20, '._._._._._._._._._._._._._._._._._');
        $pdf->text($x+4, $y+25, 'FIRMA CLIENTE');
        $y+=1;

        $pdf->RoundedRect($x-151, $y+27, 191, 7, 2);

        $pdf->SetFont('Arial','',9);
        $pdf->text($x-140, $y+32, 'C.A.I. '.$remito->getCae());
        $pdf->text($x-40, $y+32, 'VTO '.$remito->getVencimientoCAE()->format('d-m-Y'));

        return $pdf;    
    }

    private function setDetalleRemitoOficial($pdf, $detalle)
    {

        $x = $pdf->getX();
        $y = 83;

        $pdf->SetFont('Arial','',9);

        foreach ($detalle as $it)
        {
            $art = $it->getArticulo();

            $pdf->text($x+1, $y, strtoupper($art->getCodigoInterno()));
            $pdf->text($x+15, $y, strtoupper($art->getNombre()));
            $pdf->text($x+130, $y, $it->getCantidad());
            $pdf->text($x+150, $y, number_format($art->getPresentacionKg(),2,',','.'));
            $y+=5;
        }

        return $pdf;    
    }

    
    private function procesarComprobante(ComprobanteVenta $comp, $detalle, $ppal = false)
    {

        $titular = $comp->getEntidad();

        $oficial = $comp->getItemOficial();
        $comp->setConfirmado(true);

        if (!$titular->getOriginal()) /// Indica que es el titular de la cuenta, la orden de carga debe salir a su nombre
        {
            // Genera la entrada con el titular de la cuenta el cual sera el titular de la ordende camara
            $detalle['titularOC'] = [
                                     'entidad' => $titular, 
                                     'detalle' => [], 
                                     'sanitarios' => []
                                     ]; 
            foreach($comp->getItems() as $it)
            {
                $art = $it->getArticulo();
                if (!array_key_exists($art->getId(), $detalle['titularOC']['detalle']))
                {
                    $detalle['titularOC']['detalle'][$art->getId()] = ['art' => $art, 'cant' => 0, 'kg' => 0];
                }
                $detalle['titularOC']['detalle'][$art->getId()]['cant']+= $it->getCantidad(); 
                $detalle['titularOC']['detalle'][$art->getId()]['kg']+= ($it->getCantidad() * $art->getPresentacionKg());
            }
        }
        else // quiere decir que no es el titular de la cuenta
        {
            foreach($comp->getItems() as $it)
            {
                $art = $it->getArticulo();
                if (!array_key_exists($art->getId(), $detalle['titularOC']['detalle']))
                {
                    $detalle['titularOC']['detalle'][$art->getId()] = ['art' => $art, 'cant' => 0, 'kg' => 0];
                }
                $detalle['titularOC']['detalle'][$art->getId()]['cant']+= $it->getCantidad(); 
                $detalle['titularOC']['detalle'][$art->getId()]['kg']+= ($it->getCantidad() * $art->getPresentacionKg());
            }

            if ($comp->getGeneraSanitario()) //el comprobante debe generar el sanitario
            {
                if ($titular->getTitularSanitario()) // si tiene configurado un titular para el sanitario toma ese como titular del sanitario, sino el titular es el mismo
                {
                    $titular = $titular->getTitularSanitario();
                }
                else
                {
                    $titular = $comp->getEntidad(); //si genera sanitario pero no tiene quien es el titular se debe emitir a nombre de el mimso
                }
            }
            else //sino genera sanitario el mismo se debe emitir a nombre del titular de la cuenta
            {
                $titular = $titular->getOriginal();
            }
        }

        if ($oficial)
        {
            $itemsOficiales = $comp->getDetalleItemsOficial(true);

            if (!array_key_exists($titular->getId(), $detalle['titularOC']['sanitarios']))
            {
                $detalle['titularOC']['sanitarios'][$titular->getId()] = ['titular' => $titular, 'comprobante' => $comp, 'items' => $itemsOficiales];
            }
            else
            {
                $items = $detalle['titularOC']['sanitarios'][$titular->getId()]['items'];
                $detalle['titularOC']['detalle'] = array_merge($items, $itemsOficiales);
            }
        }

        return $detalle;        
    }


    //public function imrpimirComprobanteAction($cmp)
    public function ingresarComprobantes(ComprobanteVenta $comprobante, $em, $ingresar)
    {
      //  $em = $this->getDoctrine()->getManager();

        //$comprobante = $em->find(ComprobanteVenta::class, $cmp);

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

        $entidadConcepto = $em->getRepository(EntidadExternaConcepto::class)->getEntidadOfClass($comprobante->getEntidad()->getTypeOfVenta(), $procesoFaena);

        $conceptoMovimientoVenta = $entidadConcepto->getConcepto();

        //Buscar si existe una orden de carga generada para la entidad del comprobante
        //$ordenCarga = $em->getRepository(OrdenCarga::class)->findOrdenCargaEntidad($comprobante->getEntidad(), $faenaDiaria, $comprobante);
     /*   $ordenCarga = $em->getRepository(OrdenCarga::class)->findOrdenCargaEntidad($comprobanteOC->getEntidad(), $faenaDiaria, $comprobanteOC);

        $ingresar = true;
        if (!$ordenCarga)
        {
            //La orden de carga no existe, debe generar una
            $ordenCarga = new OrdenCarga();
            $ordenCarga->setFecha($comprobanteOC->getFecha());
            //agrega el comprobante de venta a la orden
            $ordenCarga->addComprobante($comprobanteOC);
            //agrega la entidad como destinatario
            $ordenCarga->addEntidade($comprobanteOC->getEntidad());
            //de existir agrega el rubro, esto se utiliza cuando varias entidades se agrupan en una misma orden
            $ordenCarga->setRubro($comprobanteOC->getEntidad()->getRubro());

            $ordenCarga->setFaenaDiaria($faenaDiaria);
            $comprobanteOC->setConfirmado(true);
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
        }*/

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
      /*  if ($ingresar)
        {
            $comprobante->setOrdenCarga($ordenCarga);
            $comprobante->setArtProcFaena($artAtrCon);
            $comprobante->setFaenaDiaria($faenaDiaria);
            $comprobante->setProcesoFnDay($procesoFaenaDiaria);
        }*/
     //   $em->flush();

     /*   if ($comprobante->getItemOficial())
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
        }*/
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


    private function getFormAltaLista($lista)
    {
        return $this->createForm(ListaPrecioType::class, $lista, ['method' => 'POST']);
    }


    /**
     * @Route("/gstlist", name="vtas_gestionar_lista_precios", methods={"POST", "GET"})
    */
    public function gestionarListaPrecios(Request $request)
    {
        $lista = new ListaPrecio();
        $form = $this->getFormAltaLista($lista);
        $em = $this->getDoctrine()->getManager();
        $listas = $em->getRepository(ListaPrecio::class)->findAll();

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            if ($form->isValid())
            {
                $repoArticulos = $em->getRepository(Articulo::class);

                $articulos = $repoArticulos->getListaArticulosConCategoriaVenta();

                foreach ($articulos as $art)
                {
                    $item = new ItemLista();
                    $item->setArticulo($art);
                    $item->setListaPrecio($lista);
                    $lista->addItem($item);
                }

                $lista->setUsuario($this->getUser());
                $lista->setUltimaActualizacion(new \DateTime());
                $em->persist($lista);
                $em->flush();
                return $this->redirectToRoute('vtas_gestionar_lista_precios');
            }
        }
        
        return $this->render('@GestionVentas/ventas/listaPrecio.html.twig', ['form' => $form->createView(), 'listas' => $listas]); 
    }



    /**
     * @Route("/setlista", name="vtas_cargar_lista_precio", methods={"POST", "GET"})
    */
    public function cargarListaPrecio(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $listas = $em->getRepository(ListaPrecio::class)->findAll();
        $repoArticulos = $em->getRepository(Articulo::class);
        $articulos = $repoArticulos->getListaArticulosConCategoriaVenta();

        $detalle = [];

        foreach ($articulos as $art)
        {
            $detalle[$art->getId()] = ['codigo' => $art->getCodigoInterno(), 'art' => ($art->getDescVenta()?$art->getDescVenta():$art->getNombre()), 'detail' => []];
            foreach ($listas as $list)
            {
                $item = $list->getItemWithArticle($art);
                $detalle[$art->getId()]['detail'][$list->getId()] = ($item?$item->getValorKg():'');
            }
        }

        
        return $this->render('@GestionVentas/ventas/setAlllistaPrecio.html.twig', ['detalle' => $detalle, 'listas' => $listas]); 
    }

    /**
     * @Route("/synclist/{id}", name="vtas_sicronizar_lista_precio", methods={"POST", "GET"})
    */
    public function sincronizarListaPrecio($id)
    {

        $em = $this->getDoctrine()->getManager();
        $lista = $em->find(ListaPrecio::class, $id);

        $repoArticulos = $em->getRepository(Articulo::class);
        $articulos = $repoArticulos->getListaArticulosConCategoriaVenta();

        foreach ($articulos as $art)
        {
            $item = $lista->existePrecioArticulo($art);
            if (!$item)
            {
                $item = new ItemLista();
                $item->setArticulo($art);
                $item->setListaPrecio($lista);
                $em->persist($item);
            }
        }
        $em->flush();
        return $this->redirectToRoute('vtas_gestionar_lista_precios');
    }


    /**
     * @Route("/artlista/{id}", name="vtas_set_precio_articulos_lista", methods={"POST", "GET"})
    */
    public function setPrecioArticuloLista($id)
    {

        $em = $this->getDoctrine()->getManager();
        $lista = $em->find(ListaPrecio::class, $id);

        $detalle = [];

        foreach ($lista->getItems() as $it)
        {
            $art = $it->getArticulo();
            $key = $this->getKey($art);
            $detalle[$key] = ['id' => $it->getId(), 'it' => $it];
        }
        
        ksort($detalle);

        return $this->render('@GestionVentas/listas/setPrecioArticulo.html.twig', ['detalle' => $detalle, 'lista' => $lista]); 
    }

    /**
     * @Route("/artalllista", name="vtas_set_precio_articulos_all_lista")
    */
    public function setAllPrecioArticuloLista()
    {
   //     var_dump($response);     

        $em = $this->getDoctrine()->getManager();

        $allListas = $em->getRepository(ListaPrecio::class)->getAllLista();

        $listas = [];
        $articulos = [];
        $body = [];

        foreach ($allListas as $li)
        {
            $listas[$li->getId()] = $li;

            foreach ($li->getItems() as $it)
            {
                $art = $it->getArticulo();
                $key = $this->getKey($art);
                if (!array_key_exists($key, $articulos))
                {
                    $articulos[$key] = $art;
                }
                $body[$li->getId()][$art->getId()] = ['id' => $it->getId(), 'it' => $it];
            }
        }
        
        ksort($articulos);

        return $this->render('@GestionVentas/listas/setPrecioArticulo.html.twig', ['all' => true, 'detalle' => $body, 'listas' => $listas, 'articulos' => $articulos]); 
    }


    /**
     * @Route("/setprit/{id}", name="vtas_set_price_item", methods={"POST"})
    */
    public function setPriceItem($id, Request $request)
    {
        $price = $request->get('price');
        if (!is_numeric($price))
        {
            return new JsonResponse(['ok' => false, 'message' => 'El valor ingresado debe ser numerico']);
        }
        $em = $this->getDoctrine()->getManager();
        $item = $em->find(ItemLista::class, $id);
        try
        {
            $item->getListaPrecio()
                 ->setUsuario($this->getUser())
                 ->setUltimaActualizacion(new \DateTime());
            $item->setValorKg($price);
            $em->flush();
            return new JsonResponse(['ok' => true]);

        }
        catch (\Exception $e) {
                                return new JsonResponse(['ok' => false, 'message' => $e->getMessage()]);
        }

        return new JsonResponse(['ok' => false, 'id' => $id]);
    }
}
