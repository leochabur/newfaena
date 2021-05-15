<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // main_server_root_site
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::defaultServerAction',  '_route' => 'main_server_root_site',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_main_server_root_site;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'main_server_root_site'));
            }

            return $ret;
        }
        not_main_server_root_site:

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/add')) {
                if (0 === strpos($pathinfo, '/adda')) {
                    if (0 === strpos($pathinfo, '/addartatcon')) {
                        // bd_add_articulo_atributo_concepto
                        if ('/addartatcon' === $pathinfo) {
                            return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addArticuloAtributoConcepto',  '_route' => 'bd_add_articulo_atributo_concepto',);
                        }

                        // bd_add_articulo_atributo_concepto_procesar
                        if ('/addartatconproc' === $pathinfo) {
                            $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormArtAtrConcepto',  '_route' => 'bd_add_articulo_atributo_concepto_procesar',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_add_articulo_atributo_concepto_procesar;
                            }

                            return $ret;
                        }
                        not_bd_add_articulo_atributo_concepto_procesar:

                    }

                    elseif (0 === strpos($pathinfo, '/addatrabs')) {
                        // bd_add_atributo_abstracto
                        if ('/addatrabs' === $pathinfo) {
                            return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addAtributoAbstracto',  '_route' => 'bd_add_atributo_abstracto',);
                        }

                        // bd_add_atributo_abstracto_procesar
                        if ('/addatrabsproc' === $pathinfo) {
                            $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoAbstracto',  '_route' => 'bd_add_atributo_abstracto_procesar',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_add_atributo_abstracto_procesar;
                            }

                            return $ret;
                        }
                        not_bd_add_atributo_abstracto_procesar:

                    }

                    // bd_add_atributo
                    if (0 === strpos($pathinfo, '/addatr') && preg_match('#^/addatr/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_atributo']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addAtributoMedibleManualAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/addcnmvpr')) {
                    // bd_add_concepto_movimiento_proceso
                    if ('/addcnmvpr' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addConceptoMovimientoProceso',  '_route' => 'bd_add_concepto_movimiento_proceso',);
                    }

                    // bd_add_concepto_movimiento_proceso_procesar
                    if ('/addcnmvprproc' === $pathinfo) {
                        $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioConceptoMovimientoProceso',  '_route' => 'bd_add_concepto_movimiento_proceso_procesar',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_add_concepto_movimiento_proceso_procesar;
                        }

                        return $ret;
                    }
                    not_bd_add_concepto_movimiento_proceso_procesar:

                }

                // bd_add_entity_ciudad
                if ('/addcty' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityCiudadAction',  '_route' => 'bd_add_entity_ciudad',);
                }

                if (0 === strpos($pathinfo, '/addUM')) {
                    // bd_add_unidad_medida
                    if ('/addUM' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addUnidadMedidaAction',  '_route' => 'bd_add_unidad_medida',);
                    }

                    // bd_add_um_procesar
                    if ('/addUMProc' === $pathinfo) {
                        $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioUnidadMedida',  '_route' => 'bd_add_um_procesar',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_add_um_procesar;
                        }

                        return $ret;
                    }
                    not_bd_add_um_procesar:

                }

                elseif (0 === strpos($pathinfo, '/addA')) {
                    if (0 === strpos($pathinfo, '/addArt')) {
                        // bd_add_articulo
                        if ('/addArt' === $pathinfo) {
                            return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addArticuloAction',  '_route' => 'bd_add_articulo',);
                        }

                        // bd_add_articulo_procesar
                        if ('/addArtProc' === $pathinfo) {
                            $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioArticulo',  '_route' => 'bd_add_articulo_procesar',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_add_articulo_procesar;
                            }

                            return $ret;
                        }
                        not_bd_add_articulo_procesar:

                        if (0 === strpos($pathinfo, '/addArtProcFan')) {
                            // bd_add_articulo_proceso_faena
                            if ('/addArtProcFan' === $pathinfo) {
                                return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addArticuloProcesoFaenaAction',  '_route' => 'bd_add_articulo_proceso_faena',);
                            }

                            // bd_add_articulo_proceso_faena_procesar
                            if ('/addArtProcFanProc' === $pathinfo) {
                                $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioArticuloProcesoFaena',  '_route' => 'bd_add_articulo_proceso_faena_procesar',);
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_bd_add_articulo_proceso_faena_procesar;
                                }

                                return $ret;
                            }
                            not_bd_add_articulo_proceso_faena_procesar:

                        }

                    }

                    // bd_add_tributo_informable_manual_procesar
                    if (0 === strpos($pathinfo, '/addAIMProc') && preg_match('#^/addAIMProc/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_tributo_informable_manual_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoInformableManual',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_add_tributo_informable_manual_procesar;
                        }

                        return $ret;
                    }
                    not_bd_add_tributo_informable_manual_procesar:

                    // bd_add_tributo_informable_procesar
                    if (0 === strpos($pathinfo, '/addAIProc') && preg_match('#^/addAIProc/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_tributo_informable_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoInformable',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_add_tributo_informable_procesar;
                        }

                        return $ret;
                    }
                    not_bd_add_tributo_informable_procesar:

                    // bd_add_tributo_medible_manual_procesar
                    if (0 === strpos($pathinfo, '/addAMMProc') && preg_match('#^/addAMMProc/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_tributo_medible_manual_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoMedibleManual',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_add_tributo_medible_manual_procesar;
                        }

                        return $ret;
                    }
                    not_bd_add_tributo_medible_manual_procesar:

                    // bd_add_tributo_medible_automatico_procesar
                    if (0 === strpos($pathinfo, '/addAMAProc') && preg_match('#^/addAMAProc/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_tributo_medible_automatico_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoMedibleAutomatico',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_add_tributo_medible_automatico_procesar;
                        }

                        return $ret;
                    }
                    not_bd_add_tributo_medible_automatico_procesar:

                    if (0 === strpos($pathinfo, '/addAtr')) {
                        // bd_add_art_proc_fan
                        if (0 === strpos($pathinfo, '/addAtrArtProcFan') && preg_match('#^/addAtrArtProcFan/(?P<articulo>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_art_proc_fan']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addAtrArtProcFanAction',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_add_art_proc_fan;
                            }

                            return $ret;
                        }
                        not_bd_add_art_proc_fan:

                        // bd_add_atributo_proceso_a_atributo_concepto
                        if (0 === strpos($pathinfo, '/addAtrPrAtrCn') && preg_match('#^/addAtrPrAtrCn/(?P<atrcon>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_atributo_proceso_a_atributo_concepto']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addAtrProcAtAtrConc',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_add_atributo_proceso_a_atributo_concepto;
                            }

                            return $ret;
                        }
                        not_bd_add_atributo_proceso_a_atributo_concepto:

                        // bd_add_atr_art_procesar
                        if (0 === strpos($pathinfo, '/addAtrProcP') && preg_match('#^/addAtrProcP/(?P<artic>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_atr_art_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::adAtrArtProcesar',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_add_atr_art_procesar;
                            }

                            return $ret;
                        }
                        not_bd_add_atr_art_procesar:

                    }

                }

                elseif (0 === strpos($pathinfo, '/addPr')) {
                    // bd_add_proceso
                    if (0 === strpos($pathinfo, '/addPrc') && preg_match('#^/addPrc/(?P<type>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addProcesoAction',));
                    }

                    // bd_add_proceso_procesar
                    if (0 === strpos($pathinfo, '/addProcProc') && preg_match('#^/addProcProc/(?P<type>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_proceso_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioProceso',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_add_proceso_procesar;
                        }

                        return $ret;
                    }
                    not_bd_add_proceso_procesar:

                    if (0 === strpos($pathinfo, '/addProcUsr')) {
                        // conf_add_proc_user
                        if ('/addProcUsr' === $pathinfo) {
                            return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::addProcedureUser',  '_route' => 'conf_add_proc_user',);
                        }

                        // conf_add_proc_user_procesar
                        if ('/addProcUsrProcesar' === $pathinfo) {
                            $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::addProcedureUserProcesar',  '_route' => 'conf_add_proc_user_procesar',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_conf_add_proc_user_procesar;
                            }

                            return $ret;
                        }
                        not_conf_add_proc_user_procesar:

                    }

                }

                // bd_edit_procesos_add_sender
                if (0 === strpos($pathinfo, '/addSender') && preg_match('#^/addSender/(?P<proccess>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_procesos_add_sender']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editProcesosProcesarAction',));
                }

                if (0 === strpos($pathinfo, '/addFanDay')) {
                    // bd_add_faena_diaria
                    if ('/addFanDay' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::addFaenaDiariaAction',  '_route' => 'bd_add_faena_diaria',);
                    }

                    // bd_add_faena_diaria_procesar
                    if ('/addFanDayProc' === $pathinfo) {
                        $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::addFaenaDiariaProcesarAction',  '_route' => 'bd_add_faena_diaria_procesar',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_add_faena_diaria_procesar;
                        }

                        return $ret;
                    }
                    not_bd_add_faena_diaria_procesar:

                }

                // bd_add_entity_granja
                if ('/addgja' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityGranjaAction',  '_route' => 'bd_add_entity_granja',);
                }

                // bd_add_entity_transportista
                if ('/addtrs' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityTransportistaAction',  '_route' => 'bd_add_entity_transportista',);
                }

            }

            // bd_asignar_articulo_origen_transformacion
            if (0 === strpos($pathinfo, '/assartor') && preg_match('#^/assartor/(?P<conc>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_asignar_articulo_origen_transformacion']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::asignarArticuloOrigenTransformacion',));
            }

            // bd_change_articulo_proceso
            if (0 === strpos($pathinfo, '/artProcChnage') && preg_match('#^/artProcChnage/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_change_articulo_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::changeStateArticuloProceso',));
                if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                    $allow = array_merge($allow, ['POST', 'GET']);
                    goto not_bd_change_articulo_proceso;
                }

                return $ret;
            }
            not_bd_change_articulo_proceso:

        }

        elseif (0 === strpos($pathinfo, '/vie')) {
            if (0 === strpos($pathinfo, '/view')) {
                // bd_view_concepto_movimiento_proceso
                if ('/viewcnmvpr' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::viewConceptoMovimientoProceso',  '_route' => 'bd_view_concepto_movimiento_proceso',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_bd_view_concepto_movimiento_proceso;
                    }

                    return $ret;
                }
                not_bd_view_concepto_movimiento_proceso:

                if (0 === strpos($pathinfo, '/viewProc')) {
                    // bd_view_procesos
                    if ('/viewProc' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::viewProcesosAction',  '_route' => 'bd_view_procesos',);
                    }

                    // bd_view_procesos_faena_diaria
                    if (0 === strpos($pathinfo, '/viewProcFanDay') && preg_match('#^/viewProcFanDay/(?P<fan>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_view_procesos_faena_diaria']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::viewProcesosFaenaDiariaAction',));
                    }

                }

                // bd_view_art_proc_fan
                if (0 === strpos($pathinfo, '/viewArtProcFan') && preg_match('#^/viewArtProcFan/(?P<articulo>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_view_art_proc_fan']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::viewArticuloProcesoFaena',));
                }

                // bd_view_faena
                if ('/viewFan' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::viewFaenaDiariaAction',  '_route' => 'bd_view_faena',);
                }

            }

            // bd_atributos_view_all
            if ('/vieAllAtributes' === $pathinfo) {
                return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::viewAllAtributes',  '_route' => 'bd_atributos_view_all',);
            }

            // bd_atributos_show
            if (0 === strpos($pathinfo, '/vieAtribute') && preg_match('#^/vieAtribute/(?P<atr>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_atributos_show']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::showAtribute',));
                if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                    $allow = array_merge($allow, ['POST', 'GET']);
                    goto not_bd_atributos_show;
                }

                return $ret;
            }
            not_bd_atributos_show:

        }

        elseif (0 === strpos($pathinfo, '/edit')) {
            if (0 === strpos($pathinfo, '/editcnmvpr')) {
                // bd_edit_concepto_movimiento_proceso
                if (preg_match('#^/editcnmvpr/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_concepto_movimiento_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editConceptoMovimientoProceso',));
                }

                // bd_edit_concepto_movimiento_proceso_procesar
                if (0 === strpos($pathinfo, '/editcnmvproc') && preg_match('#^/editcnmvproc/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_concepto_movimiento_proceso_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editConceptoMovimientoProcesoProcesar',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_edit_concepto_movimiento_proceso_procesar;
                    }

                    return $ret;
                }
                not_bd_edit_concepto_movimiento_proceso_procesar:

            }

            // bd_editar_articulo
            if ('/editart' === $pathinfo) {
                return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarArticuloAction',  '_route' => 'bd_editar_articulo',);
            }

            // bd_edit_procesos
            if (0 === strpos($pathinfo, '/editProc') && preg_match('#^/editProc/(?P<proccess>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_procesos']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editProcesosAction',));
            }

            if (0 === strpos($pathinfo, '/editAtr')) {
                // bd_editar_atributo_articulo
                if ('/editAtrArtProc' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarAtributoProceso',  '_route' => 'bd_editar_atributo_articulo',);
                    if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                        $allow = array_merge($allow, ['POST', 'GET']);
                        goto not_bd_editar_atributo_articulo;
                    }

                    return $ret;
                }
                not_bd_editar_atributo_articulo:

                // bd_editar_atributo_concepto
                if ('/editAtrConc' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarAtributoConcepto',  '_route' => 'bd_editar_atributo_concepto',);
                    if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                        $allow = array_merge($allow, ['POST', 'GET']);
                        goto not_bd_editar_atributo_concepto;
                    }

                    return $ret;
                }
                not_bd_editar_atributo_concepto:

                // bd_editar_atributo
                if (preg_match('#^/editAtr/(?P<atr>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_editar_atributo']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarAtributo',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_editar_atributo;
                    }

                    return $ret;
                }
                not_bd_editar_atributo:

            }

            // bd_editar_articulo_proceso
            if ('/editArtProc' === $pathinfo) {
                $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarArticuloProceso',  '_route' => 'bd_editar_articulo_proceso',);
                if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                    $allow = array_merge($allow, ['POST', 'GET']);
                    goto not_bd_editar_articulo_proceso;
                }

                return $ret;
            }
            not_bd_editar_articulo_proceso:

        }

        // bd_editar_atr_concepto
        if ('/edConAtr' === $pathinfo) {
            $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarAtributoConceptoProceso',  '_route' => 'bd_editar_atr_concepto',);
            if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                $allow = array_merge($allow, ['POST', 'GET']);
                goto not_bd_editar_atr_concepto;
            }

            return $ret;
        }
        not_bd_editar_atr_concepto:

        if (0 === strpos($pathinfo, '/del')) {
            // bd_delete_articulo
            if (0 === strpos($pathinfo, '/deleteArt') && preg_match('#^/deleteArt/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_delete_articulo']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteArticulo',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_delete_articulo;
                }

                return $ret;
            }
            not_bd_delete_articulo:

            // bd_delete_atributo
            if (0 === strpos($pathinfo, '/delatr') && preg_match('#^/delatr/(?P<atr>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_delete_atributo']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteAtributo',));
            }

            // bd_delete_atr_proc_atr_conc
            if (0 === strpos($pathinfo, '/delAtPrAtCn') && preg_match('#^/delAtPrAtCn/(?P<atco>[^/]++)/(?P<atpr>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_delete_atr_proc_atr_conc']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteAtributoProcesoOfAtributoConcepto',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_delete_atr_proc_atr_conc;
                }

                return $ret;
            }
            not_bd_delete_atr_proc_atr_conc:

        }

        // bd_update_atributo
        if (0 === strpos($pathinfo, '/updatr') && preg_match('#^/updatr/(?P<atr>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_update_atributo']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::updateAtributo',));
        }

        // bd_update_manejo_stock
        if (0 === strpos($pathinfo, '/updmnjst') && preg_match('#^/updmnjst/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_update_manejo_stock']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::updateManejoStockProceso',));
            if (!in_array($requestMethod, ['POST'])) {
                $allow = array_merge($allow, ['POST']);
                goto not_bd_update_manejo_stock;
            }

            return $ret;
        }
        not_bd_update_manejo_stock:

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/cnfAtrPrc')) {
                // bd_config_atr_proceso
                if ('/cnfAtrPrc' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editAtributoConceptoAction',  '_route' => 'bd_config_atr_proceso',);
                }

                // bd_config_atr_proceso_procesar
                if ('/cnfAtrPrcProcesar' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editAtributoConceptoProcesar',  '_route' => 'bd_config_atr_proceso_procesar',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_config_atr_proceso_procesar;
                    }

                    return $ret;
                }
                not_bd_config_atr_proceso_procesar:

            }

            // bd_change_tipo_movimiento
            if ('/chgtm' === $pathinfo) {
                $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::changeTipoMovimiento',  '_route' => 'bd_change_tipo_movimiento',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_change_tipo_movimiento;
                }

                return $ret;
            }
            not_bd_change_tipo_movimiento:

            // bd_change_concepto_movimiento
            if ('/chgcon' === $pathinfo) {
                $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::changeConceptoMovimiento',  '_route' => 'bd_change_concepto_movimiento',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_change_concepto_movimiento;
                }

                return $ret;
            }
            not_bd_change_concepto_movimiento:

        }

        elseif (0 === strpos($pathinfo, '/get')) {
            // bd_get_conceptos_proceso
            if (0 === strpos($pathinfo, '/getConcProc') && preg_match('#^/getConcProc/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_get_conceptos_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getConceptosProceso',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_get_conceptos_proceso;
                }

                return $ret;
            }
            not_bd_get_conceptos_proceso:

            if (0 === strpos($pathinfo, '/getAtr')) {
                // bd_get_atributos_concepto
                if (0 === strpos($pathinfo, '/getAtribCon') && preg_match('#^/getAtribCon/(?P<con>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_get_atributos_concepto']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getAtributosConceptosProceso',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_get_atributos_concepto;
                    }

                    return $ret;
                }
                not_bd_get_atributos_concepto:

                // bd_get_atributos_atributo_concepto
                if (0 === strpos($pathinfo, '/getAtribAtribCon') && preg_match('#^/getAtribAtribCon/(?P<ac>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_get_atributos_atributo_concepto']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getAtributosAtributoConcepto',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_get_atributos_atributo_concepto;
                    }

                    return $ret;
                }
                not_bd_get_atributos_atributo_concepto:

                // bd_get_atributes_for_articles
                if ('/getAtrArt' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getAtributosArticulos',  '_route' => 'bd_get_atributes_for_articles',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_bd_get_atributes_for_articles;
                    }

                    return $ret;
                }
                not_bd_get_atributes_for_articles:

                // bd_get_atribute
                if ('/getAtr' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getAtributo',  '_route' => 'bd_get_atribute',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_bd_get_atribute;
                    }

                    return $ret;
                }
                not_bd_get_atribute:

            }

            // bd_get_articles_for_proccess
            if ('/getArtProc' === $pathinfo) {
                $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getArticulosProceso',  '_route' => 'bd_get_articles_for_proccess',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_bd_get_articles_for_proccess;
                }

                return $ret;
            }
            not_bd_get_articles_for_proccess:

        }

        elseif (0 === strpos($pathinfo, '/gst')) {
            // bd_adm_proc_fan_day
            if (0 === strpos($pathinfo, '/gstProcFanDay') && preg_match('#^/gstProcFanDay/(?P<proc>[^/]++)/(?P<fd>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_proc_fan_day']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::administrarProcesoFaenaDiaria',));
                if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                    $allow = array_merge($allow, ['POST', 'GET']);
                    goto not_bd_adm_proc_fan_day;
                }

                return $ret;
            }
            not_bd_adm_proc_fan_day:

            // bd_adm_proc_mov_st
            if (0 === strpos($pathinfo, '/gstMovProc') && preg_match('#^/gstMovProc/(?P<proc>[^/]++)/(?P<art>[^/]++)/(?P<conc>[^/]++)/(?P<type>[^/]++)/(?P<fanday>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_proc_mov_st']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::procesarMovimientoStockAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_adm_proc_mov_st;
                }

                return $ret;
            }
            not_bd_adm_proc_mov_st:

            if (0 === strpos($pathinfo, '/gstMovEdit')) {
                // bd_adm_mov_st_edit
                if (preg_match('#^/gstMovEdit/(?P<mov>[^/]++)/(?P<proc>[^/]++)/(?P<art>[^/]++)/(?P<fanday>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_mov_st_edit']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::editarMovimientoStockAction',));
                }

                // bd_adm_edit_mov_stock_procesar
                if (0 === strpos($pathinfo, '/gstMovEditProc') && preg_match('#^/gstMovEditProc/(?P<mov>[^/]++)/(?P<proc>[^/]++)/(?P<art>[^/]++)/(?P<fanday>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_edit_mov_stock_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::procesarEditMovimientoStockAction',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_adm_edit_mov_stock_procesar;
                    }

                    return $ret;
                }
                not_bd_adm_edit_mov_stock_procesar:

            }

            // bd_fan_day_close
            if (0 === strpos($pathinfo, '/gstFanDayClose') && preg_match('#^/gstFanDayClose/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_fan_day_close']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::closeFanDayAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_fan_day_close;
                }

                return $ret;
            }
            not_bd_fan_day_close:

            // bd_fan_day_delete
            if (0 === strpos($pathinfo, '/gstFanDayDelete') && preg_match('#^/gstFanDayDelete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_fan_day_delete']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::deleteFanDayAction',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_fan_day_delete;
                }

                return $ret;
            }
            not_bd_fan_day_delete:

            // bd_adm_mov_st_delete
            if (preg_match('#^/gst/(?P<mov>[^/]++)/(?P<trx>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_mov_st_delete']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::eliminarMovimientoStockAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_bd_adm_mov_st_delete;
                }

                return $ret;
            }
            not_bd_adm_mov_st_delete:

            if (0 === strpos($pathinfo, '/gstaddconmov')) {
                // bd_add_concepto_movimiento
                if ('/gstaddconmov' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::generarNuevoConceptoMovimiento',  '_route' => 'bd_add_concepto_movimiento',);
                }

                // bd_add_concepto_movimiento_procesar
                if ('/gstaddconmovproc' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::procesarFormularioConceptoMovimiento',  '_route' => 'bd_add_concepto_movimiento_procesar',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_add_concepto_movimiento_procesar;
                    }

                    return $ret;
                }
                not_bd_add_concepto_movimiento_procesar:

            }

        }

        // main_page_site
        if ('/index' === $pathinfo) {
            return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::successAction',  '_route' => 'main_page_site',);
        }

        // planilla_control_antemorten
        if (0 === strpos($pathinfo, '/informes/ctrlam') && preg_match('#^/informes/ctrlam/(?P<fanday>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'planilla_control_antemorten']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::emitirCuponesAction',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_planilla_control_antemorten;
            }

            return $ret;
        }
        not_planilla_control_antemorten:

        // query_consulta_movimiento
        if (0 === strpos($pathinfo, '/qdelmov') && preg_match('#^/qdelmov/(?P<mov>[^/]++)/(?P<trx>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'query_consulta_movimiento']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::queryMovimiento',));
            if (!in_array($requestMethod, ['POST'])) {
                $allow = array_merge($allow, ['POST']);
                goto not_query_consulta_movimiento;
            }

            return $ret;
        }
        not_query_consulta_movimiento:

        // save_entidad_externa
        if (0 === strpos($pathinfo, '/saveEntExt') && preg_match('#^/saveEntExt/(?P<ee>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'save_entidad_externa']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::saveEntidadExterna',));
            if (!in_array($requestMethod, ['POST'])) {
                $allow = array_merge($allow, ['POST']);
                goto not_save_entidad_externa;
            }

            return $ret;
        }
        not_save_entidad_externa:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
