<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/c')) {
            // _assetic_c700e95
            if ('/css/c700e95.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c700e95',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c700e95',);
            }

            // _assetic_c700e95_0
            if ('/css/c700e95_my-style_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c700e95',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c700e95_0',);
            }

            if (0 === strpos($pathinfo, '/config')) {
                if (0 === strpos($pathinfo, '/config/a')) {
                    if (0 === strpos($pathinfo, '/config/add')) {
                        if (0 === strpos($pathinfo, '/config/addartatcon')) {
                            // bd_add_articulo_atributo_concepto
                            if ('/config/addartatcon' === $pathinfo) {
                                return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addArticuloAtributoConcepto',  '_route' => 'bd_add_articulo_atributo_concepto',);
                            }

                            // bd_add_articulo_atributo_concepto_procesar
                            if ('/config/addartatconproc' === $pathinfo) {
                                $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormArtAtrConcepto',  '_route' => 'bd_add_articulo_atributo_concepto_procesar',);
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_bd_add_articulo_atributo_concepto_procesar;
                                }

                                return $ret;
                            }
                            not_bd_add_articulo_atributo_concepto_procesar:

                        }

                        elseif (0 === strpos($pathinfo, '/config/addatr')) {
                            if (0 === strpos($pathinfo, '/config/addatrabs')) {
                                // bd_add_atributo_abstracto
                                if ('/config/addatrabs' === $pathinfo) {
                                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addAtributoAbstracto',  '_route' => 'bd_add_atributo_abstracto',);
                                }

                                // bd_add_atributo_abstracto_procesar
                                if ('/config/addatrabsproc' === $pathinfo) {
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
                            if (preg_match('#^/config/addatr/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_atributo']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addAtributoMedibleManualAction',));
                            }

                            // bd_add_atributo_venta
                            if (0 === strpos($pathinfo, '/config/addatrvta') && preg_match('#^/config/addatrvta/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_atributo_venta']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::setOpcionesVenta',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_bd_add_atributo_venta;
                                }

                                return $ret;
                            }
                            not_bd_add_atributo_venta:

                        }

                        elseif (0 === strpos($pathinfo, '/config/addc')) {
                            if (0 === strpos($pathinfo, '/config/addcat')) {
                                // bd_add_categoria_articulo
                                if ('/config/addcat' === $pathinfo) {
                                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addCategoriaArticulo',  '_route' => 'bd_add_categoria_articulo',);
                                }

                                // bd_add_categoria_articulo_procesar
                                if ('/config/addcatproc' === $pathinfo) {
                                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAltaCategoria',  '_route' => 'bd_add_categoria_articulo_procesar',);
                                    if (!in_array($requestMethod, ['POST'])) {
                                        $allow = array_merge($allow, ['POST']);
                                        goto not_bd_add_categoria_articulo_procesar;
                                    }

                                    return $ret;
                                }
                                not_bd_add_categoria_articulo_procesar:

                            }

                            elseif (0 === strpos($pathinfo, '/config/addcnmvpr')) {
                                // bd_add_concepto_movimiento_proceso
                                if ('/config/addcnmvpr' === $pathinfo) {
                                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addConceptoMovimientoProceso',  '_route' => 'bd_add_concepto_movimiento_proceso',);
                                }

                                // bd_add_concepto_movimiento_proceso_procesar
                                if ('/config/addcnmvprproc' === $pathinfo) {
                                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioConceptoMovimientoProceso',  '_route' => 'bd_add_concepto_movimiento_proceso_procesar',);
                                    if (!in_array($requestMethod, ['POST'])) {
                                        $allow = array_merge($allow, ['POST']);
                                        goto not_bd_add_concepto_movimiento_proceso_procesar;
                                    }

                                    return $ret;
                                }
                                not_bd_add_concepto_movimiento_proceso_procesar:

                            }

                            // bd_add_concepto_venta
                            if (0 === strpos($pathinfo, '/config/addconvta') && preg_match('#^/config/addconvta/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_concepto_venta']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addConceptoVentaProcesoFaena',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_bd_add_concepto_venta;
                                }

                                return $ret;
                            }
                            not_bd_add_concepto_venta:

                            // bd_editar_factor_calculo_procesar
                            if (0 === strpos($pathinfo, '/config/addconfc') && preg_match('#^/config/addconfc/(?P<fc>[^/]++)/(?P<atr>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_editar_factor_calculo_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addConceptoFactorCalculoProcesar',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_bd_editar_factor_calculo_procesar;
                                }

                                return $ret;
                            }
                            not_bd_editar_factor_calculo_procesar:

                        }

                        elseif (0 === strpos($pathinfo, '/config/addsub')) {
                            // bd_add_subcategoria_articulo
                            if ('/config/addsub' === $pathinfo) {
                                return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addSubategoriaArticulo',  '_route' => 'bd_add_subcategoria_articulo',);
                            }

                            // bd_add_subcategoria_articulo_procesar
                            if ('/config/addsubcatproc' === $pathinfo) {
                                $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAltaSubcategoria',  '_route' => 'bd_add_subcategoria_articulo_procesar',);
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_bd_add_subcategoria_articulo_procesar;
                                }

                                return $ret;
                            }
                            not_bd_add_subcategoria_articulo_procesar:

                        }

                        elseif (0 === strpos($pathinfo, '/config/addA')) {
                            if (0 === strpos($pathinfo, '/config/addArtProcFan')) {
                                // bd_add_articulo_proceso_faena
                                if ('/config/addArtProcFan' === $pathinfo) {
                                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addArticuloProcesoFaenaAction',  '_route' => 'bd_add_articulo_proceso_faena',);
                                }

                                // bd_add_articulo_proceso_faena_procesar
                                if ('/config/addArtProcFanProc' === $pathinfo) {
                                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioArticuloProcesoFaena',  '_route' => 'bd_add_articulo_proceso_faena_procesar',);
                                    if (!in_array($requestMethod, ['POST'])) {
                                        $allow = array_merge($allow, ['POST']);
                                        goto not_bd_add_articulo_proceso_faena_procesar;
                                    }

                                    return $ret;
                                }
                                not_bd_add_articulo_proceso_faena_procesar:

                            }

                            // bd_add_tributo_informable_manual_procesar
                            if (0 === strpos($pathinfo, '/config/addAIMProc') && preg_match('#^/config/addAIMProc/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_tributo_informable_manual_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoInformableManual',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_bd_add_tributo_informable_manual_procesar;
                                }

                                return $ret;
                            }
                            not_bd_add_tributo_informable_manual_procesar:

                            // bd_add_tributo_informable_procesar
                            if (0 === strpos($pathinfo, '/config/addAIProc') && preg_match('#^/config/addAIProc/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_tributo_informable_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoInformable',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_bd_add_tributo_informable_procesar;
                                }

                                return $ret;
                            }
                            not_bd_add_tributo_informable_procesar:

                            // bd_add_tributo_medible_manual_procesar
                            if (0 === strpos($pathinfo, '/config/addAMMProc') && preg_match('#^/config/addAMMProc/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_tributo_medible_manual_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoMedibleManual',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_bd_add_tributo_medible_manual_procesar;
                                }

                                return $ret;
                            }
                            not_bd_add_tributo_medible_manual_procesar:

                            // bd_add_tributo_medible_automatico_procesar
                            if (0 === strpos($pathinfo, '/config/addAMAProc') && preg_match('#^/config/addAMAProc/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_tributo_medible_automatico_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoMedibleAutomatico',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_bd_add_tributo_medible_automatico_procesar;
                                }

                                return $ret;
                            }
                            not_bd_add_tributo_medible_automatico_procesar:

                            if (0 === strpos($pathinfo, '/config/addAtr')) {
                                // bd_add_art_proc_fan
                                if (0 === strpos($pathinfo, '/config/addAtrArtProcFan') && preg_match('#^/config/addAtrArtProcFan/(?P<articulo>[^/]++)$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_art_proc_fan']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addAtrArtProcFanAction',));
                                    if (!in_array($requestMethod, ['POST'])) {
                                        $allow = array_merge($allow, ['POST']);
                                        goto not_bd_add_art_proc_fan;
                                    }

                                    return $ret;
                                }
                                not_bd_add_art_proc_fan:

                                // bd_add_atributo_proceso_a_atributo_concepto
                                if (0 === strpos($pathinfo, '/config/addAtrPrAtrCn') && preg_match('#^/config/addAtrPrAtrCn/(?P<atrcon>[^/]++)$#sD', $pathinfo, $matches)) {
                                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_atributo_proceso_a_atributo_concepto']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addAtrProcAtAtrConc',));
                                    if (!in_array($requestMethod, ['POST'])) {
                                        $allow = array_merge($allow, ['POST']);
                                        goto not_bd_add_atributo_proceso_a_atributo_concepto;
                                    }

                                    return $ret;
                                }
                                not_bd_add_atributo_proceso_a_atributo_concepto:

                                // bd_add_atr_art_procesar
                                if (0 === strpos($pathinfo, '/config/addAtrProcP') && preg_match('#^/config/addAtrProcP/(?P<artic>[^/]++)$#sD', $pathinfo, $matches)) {
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

                        // bd_add_listener
                        if (0 === strpos($pathinfo, '/config/addlist') && preg_match('#^/config/addlist/(?P<orig>[^/]++)/(?P<list>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_listener']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addListenerToArtAtrConc',));
                        }

                        // bd_add_proceso_destino_art_atr_con
                        if (0 === strpos($pathinfo, '/config/addprocdest') && preg_match('#^/config/addprocdest/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_proceso_destino_art_atr_con']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addProcesoDestinoArtAtrConc',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_add_proceso_destino_art_atr_con;
                            }

                            return $ret;
                        }
                        not_bd_add_proceso_destino_art_atr_con:

                        // bd_add_paso_proceso
                        if (0 === strpos($pathinfo, '/config/addpasoproc') && preg_match('#^/config/addpasoproc/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_paso_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addPasoProcesoFaena',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_add_paso_proceso;
                            }

                            return $ret;
                        }
                        not_bd_add_paso_proceso:

                        // bd_add_proceso
                        if (0 === strpos($pathinfo, '/config/addPrc') && preg_match('#^/config/addPrc/(?P<type>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addProcesoAction',));
                        }

                        // bd_add_proceso_procesar
                        if (0 === strpos($pathinfo, '/config/addProcProc') && preg_match('#^/config/addProcProc/(?P<type>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_proceso_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioProceso',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_add_proceso_procesar;
                            }

                            return $ret;
                        }
                        not_bd_add_proceso_procesar:

                        // bd_add_grupo_movimientos_automaticos
                        if (0 === strpos($pathinfo, '/config/addgpomvau') && preg_match('#^/config/addgpomvau/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_grupo_movimientos_automaticos']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addGrupoMovAutomaticoProcesoFaena',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_add_grupo_movimientos_automaticos;
                            }

                            return $ret;
                        }
                        not_bd_add_grupo_movimientos_automaticos:

                        // bd_edit_procesos_add_sender
                        if (0 === strpos($pathinfo, '/config/addSender') && preg_match('#^/config/addSender/(?P<proccess>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_procesos_add_sender']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editProcesosProcesarAction',));
                        }

                    }

                    // bd_get_all_articles
                    if ('/config/allart' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getAllArticulos',  '_route' => 'bd_get_all_articles',);
                    }

                    // bd_asignar_articulo_origen_transformacion
                    if (0 === strpos($pathinfo, '/config/assartor') && preg_match('#^/config/assartor/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_asignar_articulo_origen_transformacion']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::asignarArticuloOrigenTransformacion',));
                    }

                    // bd_change_articulo_proceso
                    if (0 === strpos($pathinfo, '/config/artProcChnage') && preg_match('#^/config/artProcChnage/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_change_articulo_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::changeStateArticuloProceso',));
                        if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                            $allow = array_merge($allow, ['POST', 'GET']);
                            goto not_bd_change_articulo_proceso;
                        }

                        return $ret;
                    }
                    not_bd_change_articulo_proceso:

                }

                elseif (0 === strpos($pathinfo, '/config/vie')) {
                    if (0 === strpos($pathinfo, '/config/view')) {
                        // bd_view_concepto_movimiento_proceso
                        if ('/config/viewcnmvpr' === $pathinfo) {
                            $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::viewConceptoMovimientoProceso',  '_route' => 'bd_view_concepto_movimiento_proceso',);
                            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                $allow = array_merge($allow, ['GET', 'POST']);
                                goto not_bd_view_concepto_movimiento_proceso;
                            }

                            return $ret;
                        }
                        not_bd_view_concepto_movimiento_proceso:

                        // bd_view_procesos
                        if ('/config/viewProc' === $pathinfo) {
                            return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::viewProcesosAction',  '_route' => 'bd_view_procesos',);
                        }

                        // bd_view_art_proc_fan
                        if (0 === strpos($pathinfo, '/config/viewArtProcFan') && preg_match('#^/config/viewArtProcFan/(?P<articulo>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_view_art_proc_fan']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::viewArticuloProcesoFaena',));
                        }

                    }

                    // bd_atributos_view_all
                    if ('/config/vieAllAtributes' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::viewAllAtributes',  '_route' => 'bd_atributos_view_all',);
                    }

                    // bd_atributos_show
                    if (0 === strpos($pathinfo, '/config/vieAtribute') && preg_match('#^/config/vieAtribute/(?P<atr>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_atributos_show']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::showAtribute',));
                        if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                            $allow = array_merge($allow, ['POST', 'GET']);
                            goto not_bd_atributos_show;
                        }

                        return $ret;
                    }
                    not_bd_atributos_show:

                }

                elseif (0 === strpos($pathinfo, '/config/edit')) {
                    if (0 === strpos($pathinfo, '/config/editcnmvpr')) {
                        // bd_edit_concepto_movimiento_proceso
                        if (preg_match('#^/config/editcnmvpr/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_concepto_movimiento_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editConceptoMovimientoProceso',));
                        }

                        // bd_edit_concepto_movimiento_proceso_procesar
                        if (0 === strpos($pathinfo, '/config/editcnmvproc') && preg_match('#^/config/editcnmvproc/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
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
                    if ('/config/editart' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarArticuloAction',  '_route' => 'bd_editar_articulo',);
                    }

                    // bd_edit_procesos
                    if (0 === strpos($pathinfo, '/config/editProc') && preg_match('#^/config/editProc/(?P<proccess>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_procesos']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editProcesosAction',));
                    }

                    if (0 === strpos($pathinfo, '/config/editpp')) {
                        // bd_edit_paso_proceso
                        if (preg_match('#^/config/editpp/(?P<pp>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_paso_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editPasoProducto',));
                        }

                        // bd_edit_paso_proceso_procesar
                        if (0 === strpos($pathinfo, '/config/editppproc') && preg_match('#^/config/editppproc/(?P<pp>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_paso_proceso_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editPasoProductoProcesar',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_edit_paso_proceso_procesar;
                            }

                            return $ret;
                        }
                        not_bd_edit_paso_proceso_procesar:

                    }

                    elseif (0 === strpos($pathinfo, '/config/editgpomvaut')) {
                        // bd_edit_grupo_movimientos_automaticos
                        if (preg_match('#^/config/editgpomvaut/(?P<gpo>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_grupo_movimientos_automaticos']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editGrupoMovimientoAutomatico',));
                        }

                        // bd_edit_grupo_movimientos_automaticos_procesar
                        if (0 === strpos($pathinfo, '/config/editgpomvautproc') && preg_match('#^/config/editgpomvautproc/(?P<gpo>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_grupo_movimientos_automaticos_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editGrupoMovimientoAutomaticoProcesar',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_edit_grupo_movimientos_automaticos_procesar;
                            }

                            return $ret;
                        }
                        not_bd_edit_grupo_movimientos_automaticos_procesar:

                    }

                    elseif (0 === strpos($pathinfo, '/config/editmvaut')) {
                        // bd_edit_movimiento_automatico
                        if (preg_match('#^/config/editmvaut/(?P<mov>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_movimiento_automatico']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editMovimientoAutomatico',));
                        }

                        // bd_edit_movimiento_automatico_procesar
                        if (0 === strpos($pathinfo, '/config/editmvautproc') && preg_match('#^/config/editmvautproc/(?P<mov>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_movimiento_automatico_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editMovimientoAutomaticoProcesar',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_edit_movimiento_automatico_procesar;
                            }

                            return $ret;
                        }
                        not_bd_edit_movimiento_automatico_procesar:

                    }

                    elseif (0 === strpos($pathinfo, '/config/editAtr')) {
                        // bd_editar_atributo_articulo
                        if ('/config/editAtrArtProc' === $pathinfo) {
                            $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarAtributoProceso',  '_route' => 'bd_editar_atributo_articulo',);
                            if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                                $allow = array_merge($allow, ['POST', 'GET']);
                                goto not_bd_editar_atributo_articulo;
                            }

                            return $ret;
                        }
                        not_bd_editar_atributo_articulo:

                        // bd_editar_atributo_concepto
                        if ('/config/editAtrConc' === $pathinfo) {
                            $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarAtributoConcepto',  '_route' => 'bd_editar_atributo_concepto',);
                            if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                                $allow = array_merge($allow, ['POST', 'GET']);
                                goto not_bd_editar_atributo_concepto;
                            }

                            return $ret;
                        }
                        not_bd_editar_atributo_concepto:

                        // bd_editar_atributo
                        if (preg_match('#^/config/editAtr/(?P<atr>[^/]++)$#sD', $pathinfo, $matches)) {
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
                    if ('/config/editArtProc' === $pathinfo) {
                        $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarArticuloProceso',  '_route' => 'bd_editar_articulo_proceso',);
                        if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                            $allow = array_merge($allow, ['POST', 'GET']);
                            goto not_bd_editar_articulo_proceso;
                        }

                        return $ret;
                    }
                    not_bd_editar_articulo_proceso:

                    // bd_editar_factor_calculo
                    if (0 === strpos($pathinfo, '/config/editFc') && preg_match('#^/config/editFc/(?P<atr>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_editar_factor_calculo']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarFactorCalculo',));
                        if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                            $allow = array_merge($allow, ['POST', 'GET']);
                            goto not_bd_editar_factor_calculo;
                        }

                        return $ret;
                    }
                    not_bd_editar_factor_calculo:

                }

                // bd_editar_atr_concepto
                if ('/config/edConAtr' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarAtributoConceptoProceso',  '_route' => 'bd_editar_atr_concepto',);
                    if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                        $allow = array_merge($allow, ['POST', 'GET']);
                        goto not_bd_editar_atr_concepto;
                    }

                    return $ret;
                }
                not_bd_editar_atr_concepto:

                if (0 === strpos($pathinfo, '/config/del')) {
                    // bd_delete_articulo
                    if (0 === strpos($pathinfo, '/config/deleteArt') && preg_match('#^/config/deleteArt/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_delete_articulo']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteArticulo',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_delete_articulo;
                        }

                        return $ret;
                    }
                    not_bd_delete_articulo:

                    // delete_destination
                    if (0 === strpos($pathinfo, '/config/deletDest') && preg_match('#^/config/deletDest/(?P<origen>[^/]++)/(?P<destino>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_destination']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteDestination',));
                    }

                    // bd_remove_proceso_default_art_atr_con
                    if (0 === strpos($pathinfo, '/config/deldestdef') && preg_match('#^/config/deldestdef/(?P<art>[^/]++)/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_remove_proceso_default_art_atr_con']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::removeProcesoDestinoDefaultArticulo',));
                    }

                    // bd_delete_listener
                    if (0 === strpos($pathinfo, '/config/dellist') && preg_match('#^/config/dellist/(?P<orig>[^/]++)/(?P<list>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_delete_listener']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteListenerToArtAtrConc',));
                    }

                    if (0 === strpos($pathinfo, '/config/dela')) {
                        // bd_delete_atributo
                        if (0 === strpos($pathinfo, '/config/delatr') && preg_match('#^/config/delatr/(?P<atr>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_delete_atributo']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteAtributo',));
                        }

                        // bd_edit_procesos_delete_automatic
                        if (0 === strpos($pathinfo, '/config/delauto') && preg_match('#^/config/delauto/(?P<proccess>[^/]++)/(?P<automatic>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_procesos_delete_automatic']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteAutomaticConcepto',));
                        }

                        // bd_edit_procesos_delete_ajuste
                        if (0 === strpos($pathinfo, '/config/delajuste') && preg_match('#^/config/delajuste/(?P<ajuste>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_procesos_delete_ajuste']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteAjusteProceso',));
                        }

                    }

                    // bd_edit_procesos_delete_paso_proceso
                    if (0 === strpos($pathinfo, '/config/delpp') && preg_match('#^/config/delpp/(?P<proc>[^/]++)/(?P<paso>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_procesos_delete_paso_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deletePasoProceso',));
                    }

                    // bd_edit_procesos_delete_grupo_movimientos_automatic
                    if (0 === strpos($pathinfo, '/config/delgpoauto') && preg_match('#^/config/delgpoauto/(?P<proc>[^/]++)/(?P<gpo>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_edit_procesos_delete_grupo_movimientos_automatic']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteGrupoMovimientosAutomatico',));
                    }

                    // bd_delete_manejo_stock_from_proccess
                    if (0 === strpos($pathinfo, '/config/delgstst') && preg_match('#^/config/delgstst/(?P<proccess>[^/]++)/(?P<manejo>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_delete_manejo_stock_from_proccess']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteManejoStockProccess',));
                    }

                    // bd_delete_proceso_default
                    if (0 === strpos($pathinfo, '/config/delfefault') && preg_match('#^/config/delfefault/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_delete_proceso_default']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteProcesoDefault',));
                    }

                    // bd_delete_atr_proc_atr_conc
                    if (0 === strpos($pathinfo, '/config/delAtPrAtCn') && preg_match('#^/config/delAtPrAtCn/(?P<atco>[^/]++)/(?P<atpr>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_delete_atr_proc_atr_conc']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteAtributoProcesoOfAtributoConcepto',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_delete_atr_proc_atr_conc;
                        }

                        return $ret;
                    }
                    not_bd_delete_atr_proc_atr_conc:

                }

                // bd_listeners
                if (0 === strpos($pathinfo, '/config/listn') && preg_match('#^/config/listn/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_listeners']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::listenerArtAtrConc',));
                }

                if (0 === strpos($pathinfo, '/config/upda')) {
                    // bd_actualizar_articulo_of_aac
                    if (0 === strpos($pathinfo, '/config/updart') && preg_match('#^/config/updart/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_actualizar_articulo_of_aac']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarArticuloOfAACAction',));
                    }

                    // bd_update_atributo
                    if (0 === strpos($pathinfo, '/config/updatr') && preg_match('#^/config/updatr/(?P<atr>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_update_atributo']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::updateAtributo',));
                    }

                    // bd_set_ajuste_proceso
                    if (0 === strpos($pathinfo, '/config/updajmv') && preg_match('#^/config/updajmv/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_set_ajuste_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::updateAjusteMovimientoProceso',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_set_ajuste_proceso;
                        }

                        return $ret;
                    }
                    not_bd_set_ajuste_proceso:

                }

                // bd_update_manejo_stock
                if (0 === strpos($pathinfo, '/config/updmnjst') && preg_match('#^/config/updmnjst/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_update_manejo_stock']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::updateManejoStockProceso',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_update_manejo_stock;
                    }

                    return $ret;
                }
                not_bd_update_manejo_stock:

                if (0 === strpos($pathinfo, '/config/seta')) {
                    // bd_set_atributo_base_proceso
                    if (0 === strpos($pathinfo, '/config/setatrbase') && preg_match('#^/config/setatrbase/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_set_atributo_base_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::setAtributoBaseProceso',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_set_atributo_base_proceso;
                        }

                        return $ret;
                    }
                    not_bd_set_atributo_base_proceso:

                    // bd_set_automatic_mov
                    if (0 === strpos($pathinfo, '/config/setauto') && preg_match('#^/config/setauto/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_set_automatic_mov']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::setAutomaticMovProcesar',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_set_automatic_mov;
                        }

                        return $ret;
                    }
                    not_bd_set_automatic_mov:

                    // bd_set_articulo_base_proceso
                    if (0 === strpos($pathinfo, '/config/setarbase') && preg_match('#^/config/setarbase/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_set_articulo_base_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::setArticuloBaseProceso',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_set_articulo_base_proceso;
                        }

                        return $ret;
                    }
                    not_bd_set_articulo_base_proceso:

                }

                // bd_set_proceso_default_procesar
                if (0 === strpos($pathinfo, '/config/setdefproc') && preg_match('#^/config/setdefproc/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_set_proceso_default_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::setDefaultProcesoDestinoProcesar',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_set_proceso_default_procesar;
                    }

                    return $ret;
                }
                not_bd_set_proceso_default_procesar:

                if (0 === strpos($pathinfo, '/config/cnfAtrPrc')) {
                    // bd_config_atr_proceso
                    if ('/config/cnfAtrPrc' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editAtributoConceptoAction',  '_route' => 'bd_config_atr_proceso',);
                    }

                    // bd_config_atr_proceso_procesar
                    if ('/config/cnfAtrPrcProcesar' === $pathinfo) {
                        $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editAtributoConceptoProcesar',  '_route' => 'bd_config_atr_proceso_procesar',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_config_atr_proceso_procesar;
                        }

                        return $ret;
                    }
                    not_bd_config_atr_proceso_procesar:

                }

                // bd_editar_factor_calculo_cambiar_solo_ingreso
                if (0 === strpos($pathinfo, '/config/chonling') && preg_match('#^/config/chonling/(?P<fc>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_editar_factor_calculo_cambiar_solo_ingreso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::changeOnlyIngresoFactorCalculo',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_editar_factor_calculo_cambiar_solo_ingreso;
                    }

                    return $ret;
                }
                not_bd_editar_factor_calculo_cambiar_solo_ingreso:

                if (0 === strpos($pathinfo, '/config/get')) {
                    // bd_get_conceptos_proceso
                    if (0 === strpos($pathinfo, '/config/getConcProc') && preg_match('#^/config/getConcProc/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_get_conceptos_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getConceptosProceso',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_bd_get_conceptos_proceso;
                        }

                        return $ret;
                    }
                    not_bd_get_conceptos_proceso:

                    if (0 === strpos($pathinfo, '/config/getAtr')) {
                        // bd_get_atributos_concepto
                        if (0 === strpos($pathinfo, '/config/getAtribCon') && preg_match('#^/config/getAtribCon/(?P<con>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_get_atributos_concepto']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getAtributosConceptosProceso',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_get_atributos_concepto;
                            }

                            return $ret;
                        }
                        not_bd_get_atributos_concepto:

                        // bd_get_atributos_atributo_concepto
                        if (0 === strpos($pathinfo, '/config/getAtribAtribCon') && preg_match('#^/config/getAtribAtribCon/(?P<ac>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_get_atributos_atributo_concepto']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getAtributosAtributoConcepto',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_bd_get_atributos_atributo_concepto;
                            }

                            return $ret;
                        }
                        not_bd_get_atributos_atributo_concepto:

                        // bd_get_atributes_for_articles
                        if ('/config/getAtrArt' === $pathinfo) {
                            $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getAtributosArticulos',  '_route' => 'bd_get_atributes_for_articles',);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_bd_get_atributes_for_articles;
                            }

                            return $ret;
                        }
                        not_bd_get_atributes_for_articles:

                        // bd_get_atribute
                        if ('/config/getAtr' === $pathinfo) {
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
                    if ('/config/getArtProc' === $pathinfo) {
                        $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getArticulosProceso',  '_route' => 'bd_get_articles_for_proccess',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_bd_get_articles_for_proccess;
                        }

                        return $ret;
                    }
                    not_bd_get_articles_for_proccess:

                }

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

            // clasifiar_articulo_base
            if (0 === strpos($pathinfo, '/clasartbse') && preg_match('#^/clasartbse/(?P<proc>[^/]++)/(?P<fd>[^/]++)/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'clasifiar_articulo_base']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::clasificarArticulosBase',));
            }

        }

        elseif (0 === strpos($pathinfo, '/ventas')) {
            if (0 === strpos($pathinfo, '/ventas/config')) {
                // bd_set_grupo_entidad
                if ('/ventas/config/setgpo' === $pathinfo) {
                    return array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::setGrupoEntidad',  '_route' => 'bd_set_grupo_entidad',);
                }

                // bd_change_grupo_entidad
                if (0 === strpos($pathinfo, '/ventas/config/chgpo') && preg_match('#^/ventas/config/chgpo/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_change_grupo_entidad']), array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::cambiarGrupoEntidad',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_change_grupo_entidad;
                    }

                    return $ret;
                }
                not_bd_change_grupo_entidad:

                // bd_ventas_nuevo_grupo_ventas
                if ('/ventas/config/addgpo' === $pathinfo) {
                    return array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::addGrupoVenta',  '_route' => 'bd_ventas_nuevo_grupo_ventas',);
                }

                // bd_ventas_nuevo_grupo_ventas_procesar
                if ('/ventas/config/addartatconproc' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::procesarFormGrupoVenta',  '_route' => 'bd_ventas_nuevo_grupo_ventas_procesar',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_ventas_nuevo_grupo_ventas_procesar;
                    }

                    return $ret;
                }
                not_bd_ventas_nuevo_grupo_ventas_procesar:

            }

            // vtas_cambiar_transportista_oc
            if (0 === strpos($pathinfo, '/ventas/chtransoc') && preg_match('#^/ventas/chtransoc/(?P<oc>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'vtas_cambiar_transportista_oc']), array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::cambiarTransportistas',));
            }

            if (0 === strpos($pathinfo, '/ventas/generar')) {
                // vtas_generate
                if ('/ventas/generar' === $pathinfo) {
                    return array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::generarVentaAction',  '_route' => 'vtas_generate',);
                }

                // vtas_generate_procesar
                if ('/ventas/generarprc' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::procesarGenerarVentaAction',  '_route' => 'vtas_generate_procesar',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_vtas_generate_procesar;
                    }

                    return $ret;
                }
                not_vtas_generate_procesar:

            }

            // vtas_update_form_ventas
            if (0 === strpos($pathinfo, '/ventas/updformvta') && preg_match('#^/ventas/updformvta/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'vtas_update_form_ventas']), array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::updateFormVentas',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_vtas_update_form_ventas;
                }

                return $ret;
            }
            not_vtas_update_form_ventas:

            if (0 === strpos($pathinfo, '/ventas/addart')) {
                // vtas_agregar_articulos
                if (preg_match('#^/ventas/addart/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'vtas_agregar_articulos']), array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::agregarArticulosAComprobanteVentaAction',));
                }

                // vtas_agregar_articulo_procesar
                if (0 === strpos($pathinfo, '/ventas/addartproc') && preg_match('#^/ventas/addartproc/(?P<cmp>[^/]++)/(?P<tpo>[^/]++)/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'vtas_agregar_articulo_procesar']), array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::procesarAgregarArticuloAComprobanteVentaAction',));
                }

            }

            // vtas_volver_add_items
            if ('/ventas/back' === $pathinfo) {
                $ret = array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::backFromAddItems',  '_route' => 'vtas_volver_add_items',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_vtas_volver_add_items;
                }

                return $ret;
            }
            not_vtas_volver_add_items:

            // vtas_detalle_ventas_fecha
            if ('/ventas/detvtaday' === $pathinfo) {
                return array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::detalleVentasEnFecha',  '_route' => 'vtas_detalle_ventas_fecha',);
            }

            // vtas_delete_comprobante_venta
            if (0 === strpos($pathinfo, '/ventas/delete') && preg_match('#^/ventas/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'vtas_delete_comprobante_venta']), array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::deleteComprobanteVenta',));
            }

            // vtas_finalizar_comprobante_venta
            if (0 === strpos($pathinfo, '/ventas/finalice') && preg_match('#^/ventas/finalice/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'vtas_finalizar_comprobante_venta']), array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::finalizarComprobanteVenta',));
            }

            // vtas_ultimos_comprobantes_venta
            if ('/ventas/lastvtas' === $pathinfo) {
                return array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::getUltimosComprobantesVenta',  '_route' => 'vtas_ultimos_comprobantes_venta',);
            }

            // vtas_load_files
            if ('/ventas/load' === $pathinfo) {
                $ret = array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::cargarArchivoVentas',  '_route' => 'vtas_load_files',);
                if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                    $allow = array_merge($allow, ['POST', 'GET']);
                    goto not_vtas_load_files;
                }

                return $ret;
            }
            not_vtas_load_files:

            // vtas_incorporar_ventas_a_faena
            if ('/ventas/incvtas' === $pathinfo) {
                $ret = array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::incorporarVentasAFaena',  '_route' => 'vtas_incorporar_ventas_a_faena',);
                if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                    $allow = array_merge($allow, ['POST', 'GET']);
                    goto not_vtas_incorporar_ventas_a_faena;
                }

                return $ret;
            }
            not_vtas_incorporar_ventas_a_faena:

            if (0 === strpos($pathinfo, '/ventas/print')) {
                // vtas_imprimir_comprobante
                if (preg_match('#^/ventas/print/(?P<cmp>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'vtas_imprimir_comprobante']), array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::imrpimirComprobante',));
                }

                // vtas_imprimir_orden_carga
                if (0 === strpos($pathinfo, '/ventas/printoc') && preg_match('#^/ventas/printoc/(?P<oc>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'vtas_imprimir_orden_carga']), array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::imrpimirOrdenCarga',));
                }

            }

            // vtas_view_detalle_cmbte
            if (0 === strpos($pathinfo, '/ventas/viewdeta') && preg_match('#^/ventas/viewdeta/(?P<cmp>[^/]++)(?:/(?P<tpo>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'vtas_view_detalle_cmbte']), array (  'tpo' => 1,  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::viewDetalleComprobante',));
            }

            // vtas_comprobantes_pendientes
            if ('/ventas/vtapend' === $pathinfo) {
                return array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::verComprobantesPendientes',  '_route' => 'vtas_comprobantes_pendientes',);
            }

            // vtas_historico_ventas
            if ('/ventas/historicovta' === $pathinfo) {
                $ret = array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::generateHistoricoVentas',  '_route' => 'vtas_historico_ventas',);
                if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                    $allow = array_merge($allow, ['POST', 'GET']);
                    goto not_vtas_historico_ventas;
                }

                return $ret;
            }
            not_vtas_historico_ventas:

            // vtas_resumen_ventas_por_articulo
            if ('/ventas/resart' === $pathinfo) {
                $ret = array (  '_controller' => 'GestionVentasBundle\\Controller\\VentasController::getFormResumenXArticulos',  '_route' => 'vtas_resumen_ventas_por_articulo',);
                if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                    $allow = array_merge($allow, ['POST', 'GET']);
                    goto not_vtas_resumen_ventas_por_articulo;
                }

                return $ret;
            }
            not_vtas_resumen_ventas_por_articulo:

        }

        elseif (0 === strpos($pathinfo, '/view')) {
            // bd_view_faena
            if ('/viewFan' === $pathinfo) {
                return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::viewFaenaDiariaAction',  '_route' => 'bd_view_faena',);
            }

            // bd_view_procesos_faena_diaria
            if (0 === strpos($pathinfo, '/viewProcFanDay') && preg_match('#^/viewProcFanDay/(?P<fan>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_view_procesos_faena_diaria']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::viewProcesosFaenaDiariaAction',));
            }

            // ver_detalle_pallet_faena
            if (0 === strpos($pathinfo, '/viewdet') && preg_match('#^/viewdet/(?P<pallet>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ver_detalle_pallet_faena']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::getDetallePalletFaena',));
            }

            // bd_view_all_pallet_faena
            if ('/viewpallets' === $pathinfo) {
                $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::getAllPalletsFaen',  '_route' => 'bd_view_all_pallet_faena',);
                if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                    $allow = array_merge($allow, ['POST', 'GET']);
                    goto not_bd_view_all_pallet_faena;
                }

                return $ret;
            }
            not_bd_view_all_pallet_faena:

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/sigcer')) {
                if (0 === strpos($pathinfo, '/sigcer/edit')) {
                    if (0 === strpos($pathinfo, '/sigcer/editzna')) {
                        // sigcer_editar_zona
                        if (preg_match('#^/sigcer/editzna/(?P<zna>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_editar_zona']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::editZona',));
                        }

                        // sigcer_editar_zona_procesar
                        if (0 === strpos($pathinfo, '/sigcer/editznaproc') && preg_match('#^/sigcer/editznaproc/(?P<zna>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_editar_zona_procesar']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::procesarEditZona',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_sigcer_editar_zona_procesar;
                            }

                            return $ret;
                        }
                        not_sigcer_editar_zona_procesar:

                    }

                    elseif (0 === strpos($pathinfo, '/sigcer/editprod')) {
                        // sigcer_editar_producto
                        if (preg_match('#^/sigcer/editprod/(?P<prod>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_editar_producto']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::editarProducto',));
                        }

                        // sigcer_editar_producto_procesar
                        if (0 === strpos($pathinfo, '/sigcer/editprodproc') && preg_match('#^/sigcer/editprodproc/(?P<prod>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_editar_producto_procesar']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::procesarEditarProducto',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_sigcer_editar_producto_procesar;
                            }

                            return $ret;
                        }
                        not_sigcer_editar_producto_procesar:

                    }

                    elseif (0 === strpos($pathinfo, '/sigcer/editcmo')) {
                        // sigcer_editar_camion
                        if (preg_match('#^/sigcer/editcmo/(?P<cmo>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_editar_camion']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::editarCamion',));
                        }

                        // sigcer_editar_camion_editar
                        if (0 === strpos($pathinfo, '/sigcer/editcmoproc') && preg_match('#^/sigcer/editcmoproc/(?P<cmo>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_editar_camion_editar']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::procesarEditarCamion',));
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_sigcer_editar_camion_editar;
                            }

                            return $ret;
                        }
                        not_sigcer_editar_camion_editar:

                    }

                }

                elseif (0 === strpos($pathinfo, '/sigcer/add')) {
                    if (0 === strpos($pathinfo, '/sigcer/addzna')) {
                        // sigcer_add_zona
                        if ('/sigcer/addzna' === $pathinfo) {
                            return array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::addZona',  '_route' => 'sigcer_add_zona',);
                        }

                        // sigcer_add_zona_procesar
                        if ('/sigcer/addznaproc' === $pathinfo) {
                            $ret = array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::procesarZona',  '_route' => 'sigcer_add_zona_procesar',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_sigcer_add_zona_procesar;
                            }

                            return $ret;
                        }
                        not_sigcer_add_zona_procesar:

                    }

                    elseif (0 === strpos($pathinfo, '/sigcer/addprd')) {
                        // sigcer_add_producto
                        if ('/sigcer/addprd' === $pathinfo) {
                            return array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::addProducto',  '_route' => 'sigcer_add_producto',);
                        }

                        // sigcer_add_producto_procesar
                        if ('/sigcer/addprdprc' === $pathinfo) {
                            $ret = array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::procesarProducto',  '_route' => 'sigcer_add_producto_procesar',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_sigcer_add_producto_procesar;
                            }

                            return $ret;
                        }
                        not_sigcer_add_producto_procesar:

                    }

                    elseif (0 === strpos($pathinfo, '/sigcer/addc')) {
                        if (0 === strpos($pathinfo, '/sigcer/addctr')) {
                            // sigcer_add_pais_origen
                            if ('/sigcer/addctr' === $pathinfo) {
                                return array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::addPaisOrigen',  '_route' => 'sigcer_add_pais_origen',);
                            }

                            // sigcer_add_pais_origen_procesar
                            if ('/sigcer/addctrpr' === $pathinfo) {
                                $ret = array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::procesarPaisOrigen',  '_route' => 'sigcer_add_pais_origen_procesar',);
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_sigcer_add_pais_origen_procesar;
                                }

                                return $ret;
                            }
                            not_sigcer_add_pais_origen_procesar:

                        }

                        elseif (0 === strpos($pathinfo, '/sigcer/addcli')) {
                            // sigcer_add_cliente
                            if ('/sigcer/addcli' === $pathinfo) {
                                return array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::addCliente',  '_route' => 'sigcer_add_cliente',);
                            }

                            // sigcer_add_cliente_procesar
                            if ('/sigcer/addclipr' === $pathinfo) {
                                $ret = array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::procesarCliente',  '_route' => 'sigcer_add_cliente_procesar',);
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_sigcer_add_cliente_procesar;
                                }

                                return $ret;
                            }
                            not_sigcer_add_cliente_procesar:

                        }

                        // sigcer_add_camion
                        if ('/sigcer/addcmo' === $pathinfo) {
                            return array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::addCamion',  '_route' => 'sigcer_add_camion',);
                        }

                        // sigcer_add_camion_procesar
                        if ('/sigcer/addcmprc' === $pathinfo) {
                            $ret = array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::procesarCamion',  '_route' => 'sigcer_add_camion_procesar',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_sigcer_add_camion_procesar;
                            }

                            return $ret;
                        }
                        not_sigcer_add_camion_procesar:

                    }

                    elseif (0 === strpos($pathinfo, '/sigcer/addenv')) {
                        // sigcer_add_envase
                        if ('/sigcer/addenv' === $pathinfo) {
                            return array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::addEnvase',  '_route' => 'sigcer_add_envase',);
                        }

                        // sigcer_add_envase_procesar
                        if ('/sigcer/addenvpr' === $pathinfo) {
                            $ret = array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionOpcionesController::procesarEnvase',  '_route' => 'sigcer_add_envase_procesar',);
                            if (!in_array($requestMethod, ['POST'])) {
                                $allow = array_merge($allow, ['POST']);
                                goto not_sigcer_add_envase_procesar;
                            }

                            return $ret;
                        }
                        not_sigcer_add_envase_procesar:

                    }

                }

                elseif (0 === strpos($pathinfo, '/sigcer/solic')) {
                    if (0 === strpos($pathinfo, '/sigcer/solic/add')) {
                        if (0 === strpos($pathinfo, '/sigcer/solic/addgs')) {
                            // sigcer_add_grupos_solicitudes
                            if ('/sigcer/solic/addgs' === $pathinfo) {
                                return array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::addGrupoSolicitudes',  '_route' => 'sigcer_add_grupos_solicitudes',);
                            }

                            // sigcer_add_grupos_solicitudes_procesar
                            if ('/sigcer/solic/addgspr' === $pathinfo) {
                                $ret = array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::grupoSolicitudesProcesar',  '_route' => 'sigcer_add_grupos_solicitudes_procesar',);
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_sigcer_add_grupos_solicitudes_procesar;
                                }

                                return $ret;
                            }
                            not_sigcer_add_grupos_solicitudes_procesar:

                        }

                        elseif (0 === strpos($pathinfo, '/sigcer/solic/addtrgs')) {
                            // sigcer_add_tropa_grupo_solicitud
                            if (preg_match('#^/sigcer/solic/addtrgs/(?P<gpo>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_add_tropa_grupo_solicitud']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::adTropaGrupoSolicitud',));
                            }

                            // sigcer_add_tropa_grupo_solicitud_procesar
                            if (0 === strpos($pathinfo, '/sigcer/solic/addtrgspr') && preg_match('#^/sigcer/solic/addtrgspr/(?P<gpo>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_add_tropa_grupo_solicitud_procesar']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::adTropaGrupoSolicitudProcesar',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_sigcer_add_tropa_grupo_solicitud_procesar;
                                }

                                return $ret;
                            }
                            not_sigcer_add_tropa_grupo_solicitud_procesar:

                        }

                        elseif (0 === strpos($pathinfo, '/sigcer/solic/addsol')) {
                            // sigcer_add_solictud_a_grupo
                            if (preg_match('#^/sigcer/solic/addsol/(?P<gpo>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_add_solictud_a_grupo']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::addSolicitud',));
                            }

                            // sigcer_add_solictud_a_grupo_procesar
                            if (0 === strpos($pathinfo, '/sigcer/solic/addsolproc') && preg_match('#^/sigcer/solic/addsolproc/(?P<gpo>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_add_solictud_a_grupo_procesar']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::addSolicitudProcesar',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_sigcer_add_solictud_a_grupo_procesar;
                                }

                                return $ret;
                            }
                            not_sigcer_add_solictud_a_grupo_procesar:

                        }

                        elseif (0 === strpos($pathinfo, '/sigcer/solic/addart')) {
                            // sigcer_add_articulos_a_solicitud_exportacion
                            if (0 === strpos($pathinfo, '/sigcer/solic/addartsolexp') && preg_match('#^/sigcer/solic/addartsolexp/(?P<sol>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_add_articulos_a_solicitud_exportacion']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::addArticuloSolicitudExportacion',));
                            }

                            // sigcer_add_articulos_a_solicitud
                            if (preg_match('#^/sigcer/solic/addart/(?P<sol>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_add_articulos_a_solicitud']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::addArticuloSolicitud',));
                            }

                            // sigcer_add_articulos_a_solicitud_procesar
                            if (0 === strpos($pathinfo, '/sigcer/solic/addartproc') && preg_match('#^/sigcer/solic/addartproc/(?P<sol>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_add_articulos_a_solicitud_procesar']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::articuloSolicitudProcesar',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_sigcer_add_articulos_a_solicitud_procesar;
                                }

                                return $ret;
                            }
                            not_sigcer_add_articulos_a_solicitud_procesar:

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/sigcer/solic/del')) {
                        // sigcer_delete_grupos_solicitudes
                        if (0 === strpos($pathinfo, '/sigcer/solic/delgs') && preg_match('#^/sigcer/solic/delgs/(?P<gpo>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_delete_grupos_solicitudes']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::deleteGrupoSolicitudes',));
                        }

                        // sigcer_delete_detalle
                        if (0 === strpos($pathinfo, '/sigcer/solic/delart') && preg_match('#^/sigcer/solic/delart/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_delete_detalle']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::deleteDetalleArticulo',));
                        }

                        // sigcer_delete_all_detalle
                        if (0 === strpos($pathinfo, '/sigcer/solic/delall') && preg_match('#^/sigcer/solic/delall/(?P<sol>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_delete_all_detalle']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::eliminarDetallesDeSolicitud',));
                        }

                        // sigcer_delete_solicitud
                        if (0 === strpos($pathinfo, '/sigcer/solic/delsol') && preg_match('#^/sigcer/solic/delsol/(?P<sol>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_delete_solicitud']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::deleteSolicitud',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/sigcer/solic/edit')) {
                        if (0 === strpos($pathinfo, '/sigcer/solic/edittrp')) {
                            // sigcer_editar_tropa
                            if (preg_match('#^/sigcer/solic/edittrp/(?P<tpa>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_editar_tropa']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::editarTropa',));
                            }

                            // sigcer_editar_tropa_procesar
                            if (0 === strpos($pathinfo, '/sigcer/solic/edittrproc') && preg_match('#^/sigcer/solic/edittrproc/(?P<tpa>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_editar_tropa_procesar']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::editarTropaProcesar',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_sigcer_editar_tropa_procesar;
                                }

                                return $ret;
                            }
                            not_sigcer_editar_tropa_procesar:

                        }

                        elseif (0 === strpos($pathinfo, '/sigcer/solic/editsol')) {
                            // sigcer_editar_solicitud
                            if (preg_match('#^/sigcer/solic/editsol/(?P<sol>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_editar_solicitud']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::editSolicitud',));
                            }

                            // sigcer_editar_solicitud_procesar
                            if (0 === strpos($pathinfo, '/sigcer/solic/editsolproc') && preg_match('#^/sigcer/solic/editsolproc/(?P<sol>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_editar_solicitud_procesar']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::editSolicitudProcesar',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_sigcer_editar_solicitud_procesar;
                                }

                                return $ret;
                            }
                            not_sigcer_editar_solicitud_procesar:

                        }

                        elseif (0 === strpos($pathinfo, '/sigcer/solic/editarsol')) {
                            // sigcer_add_articulos_editar
                            if (preg_match('#^/sigcer/solic/editarsol/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_add_articulos_editar']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::editarArticuloDetalle',));
                            }

                            // sigcer_add_articulos_editar_procesar
                            if (0 === strpos($pathinfo, '/sigcer/solic/editarsolproc') && preg_match('#^/sigcer/solic/editarsolproc/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_add_articulos_editar_procesar']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::editarArticuloDetalleProcesar',));
                                if (!in_array($requestMethod, ['POST'])) {
                                    $allow = array_merge($allow, ['POST']);
                                    goto not_sigcer_add_articulos_editar_procesar;
                                }

                                return $ret;
                            }
                            not_sigcer_add_articulos_editar_procesar:

                        }

                    }

                    // sigcer_modificacion_multiple
                    if (0 === strpos($pathinfo, '/sigcer/solic/mdfml') && preg_match('#^/sigcer/solic/mdfml/(?P<gpo>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_modificacion_multiple']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::modMultSol',));
                    }

                    // sigcer_find_solicitud
                    if ('/sigcer/solic/findsol' === $pathinfo) {
                        $ret = array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::findSolicitud',  '_route' => 'sigcer_find_solicitud',);
                        if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                            $allow = array_merge($allow, ['POST', 'GET']);
                            goto not_sigcer_find_solicitud;
                        }

                        return $ret;
                    }
                    not_sigcer_find_solicitud:

                    // sigcer_update_detalle
                    if (0 === strpos($pathinfo, '/sigcer/solic/updeta') && preg_match('#^/sigcer/solic/updeta/(?P<deta>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_update_detalle']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::updateDetalle',));
                    }

                    // sigcer_update_solicitud_multiple
                    if (0 === strpos($pathinfo, '/sigcer/solic/upslml') && preg_match('#^/sigcer/solic/upslml/(?P<sol>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_update_solicitud_multiple']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::updateSolicitudMultiple',));
                    }

                    // sigcer_generate_multiples
                    if (0 === strpos($pathinfo, '/sigcer/solic/grtmlt') && preg_match('#^/sigcer/solic/grtmlt/(?P<gpo>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_generate_multiples']), array (  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::generateMultiplesSolicitudes',));
                        if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                            $allow = array_merge($allow, ['POST', 'GET']);
                            goto not_sigcer_generate_multiples;
                        }

                        return $ret;
                    }
                    not_sigcer_generate_multiples:

                    // sigcer_generar_archivos
                    if (0 === strpos($pathinfo, '/sigcer/solic/genxml') && preg_match('#^/sigcer/solic/genxml/(?P<gpo>[^/]++)(?:/(?P<rgn>[^/]++))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'sigcer_generar_archivos']), array (  'rgn' => 0,  '_controller' => 'GestionSigcerBundle\\Controller\\GestionSolicitudesController::generateXML',));
                    }

                }

            }

            // bd_add_atributo_por_proceso_delete
            if (0 === strpos($pathinfo, '/setatrxdel') && preg_match('#^/setatrxdel/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_atributo_por_proceso_delete']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::deleteAtributoPorArticuloPorProceso',));
            }

            if (0 === strpos($pathinfo, '/setatrxproc')) {
                // bd_add_atributo_por_proceso
                if ('/setatrxproc' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::addAtributoPorArticuloPorProceso',  '_route' => 'bd_add_atributo_por_proceso',);
                }

                // bd_add_atributo_por_proceso_procesar
                if ('/setatrxprocesar' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::addAtributoPorArticuloPorProcesoProcesar',  '_route' => 'bd_add_atributo_por_proceso_procesar',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_add_atributo_por_proceso_procesar;
                    }

                    return $ret;
                }
                not_bd_add_atributo_por_proceso_procesar:

            }

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

        }

        // exportaciones_alta_tipo_pallet
        if ('/export/palletalta' === $pathinfo) {
            $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\ExportacionController::altaTipoPallet',  '_route' => 'exportaciones_alta_tipo_pallet',);
            if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                $allow = array_merge($allow, ['POST', 'GET']);
                goto not_exportaciones_alta_tipo_pallet;
            }

            return $ret;
        }
        not_exportaciones_alta_tipo_pallet:

        if (0 === strpos($pathinfo, '/export/edittp')) {
            // exportaciones_editar_tipo_pallet
            if (preg_match('#^/export/edittp/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'exportaciones_editar_tipo_pallet']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\ExportacionController::editarTipoPallet',));
                if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                    $allow = array_merge($allow, ['POST', 'GET']);
                    goto not_exportaciones_editar_tipo_pallet;
                }

                return $ret;
            }
            not_exportaciones_editar_tipo_pallet:

            // exportaciones_editar_tipo_pallet_procesar
            if (0 === strpos($pathinfo, '/export/edittproc') && preg_match('#^/export/edittproc/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'exportaciones_editar_tipo_pallet_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\ExportacionController::editarTipoPalletProcesar',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_exportaciones_editar_tipo_pallet_procesar;
                }

                return $ret;
            }
            not_exportaciones_editar_tipo_pallet_procesar:

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

        if (0 === strpos($pathinfo, '/bd/addUM')) {
            // bd_add_unidad_medida
            if ('/bd/addUM' === $pathinfo) {
                return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addUnidadMedidaAction',  '_route' => 'bd_add_unidad_medida',);
            }

            // bd_add_um_procesar
            if ('/bd/addUMProc' === $pathinfo) {
                $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioUnidadMedida',  '_route' => 'bd_add_um_procesar',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_add_um_procesar;
                }

                return $ret;
            }
            not_bd_add_um_procesar:

        }

        elseif (0 === strpos($pathinfo, '/update')) {
            // bd_editar_articulo_basico
            if (0 === strpos($pathinfo, '/update/editarticulo') && preg_match('#^/update/editarticulo/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_editar_articulo_basico']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarArticulo',));
                if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                    $allow = array_merge($allow, ['POST', 'GET']);
                    goto not_bd_editar_articulo_basico;
                }

                return $ret;
            }
            not_bd_editar_articulo_basico:

            // bd_editar_articulo_procesar
            if (0 === strpos($pathinfo, '/update/editartprocesar') && preg_match('#^/update/editartprocesar/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_editar_articulo_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioEditArticulo',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_editar_articulo_procesar;
                }

                return $ret;
            }
            not_bd_editar_articulo_procesar:

            if (0 === strpos($pathinfo, '/update/addArt')) {
                // bd_add_articulo
                if ('/update/addArt' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addArticuloAction',  '_route' => 'bd_add_articulo',);
                }

                // bd_add_articulo_procesar
                if ('/update/addArtProc' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioArticulo',  '_route' => 'bd_add_articulo_procesar',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_add_articulo_procesar;
                    }

                    return $ret;
                }
                not_bd_add_articulo_procesar:

            }

            // bd_adm_proc_romaneo_articulos
            if (0 === strpos($pathinfo, '/updaterom') && preg_match('#^/updaterom/(?P<proc>[^/]++)/(?P<art>[^/]++)/(?P<val>[^/]++)/(?P<fd>[^/]++)/(?P<base>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_proc_romaneo_articulos']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::romaneoArticulo',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_adm_proc_romaneo_articulos;
                }

                return $ret;
            }
            not_bd_adm_proc_romaneo_articulos:

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/add')) {
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

                // bd_add_prcessos_at_faena
                if (0 === strpos($pathinfo, '/addprocatfd') && preg_match('#^/addprocatfd/(?P<fd>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_add_prcessos_at_faena']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::adddProcessAtFaena',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_add_prcessos_at_faena;
                    }

                    return $ret;
                }
                not_bd_add_prcessos_at_faena:

                // bd_adm_add_pallet_faena
                if ('/addpallet' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::savePalletFaena',  '_route' => 'bd_adm_add_pallet_faena',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_adm_add_pallet_faena;
                    }

                    return $ret;
                }
                not_bd_adm_add_pallet_faena:

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

                // bd_add_informe_proceso
                if ('/addinfproc' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addInformeProceso',  '_route' => 'bd_add_informe_proceso',);
                }

                // bd_add_entity_granja
                if ('/addgja' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityGranjaAction',  '_route' => 'bd_add_entity_granja',);
                }

                // bd_add_entity_transportista
                if ('/addtrs' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityTransportistaAction',  '_route' => 'bd_add_entity_transportista',);
                }

                if (0 === strpos($pathinfo, '/addc')) {
                    // bd_add_entity_ciudad
                    if ('/addcty' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityCiudadAction',  '_route' => 'bd_add_entity_ciudad',);
                    }

                    // bd_add_entity_cargador
                    if ('/addcrg' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityCargadorAction',  '_route' => 'bd_add_entity_cargador',);
                    }

                    // bd_add_entity_consignatario
                    if ('/addcons' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityConsignatarioAction',  '_route' => 'bd_add_entity_consignatario',);
                    }

                }

                // bd_add_entity_sucursal
                if ('/addsuc' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntitySucursalAction',  '_route' => 'bd_add_entity_sucursal',);
                }

                // bd_add_entity_remito
                if ('/addrto' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityRemitoAction',  '_route' => 'bd_add_entity_remito',);
                }

                // bd_add_entity_reparto
                if ('/addrpto' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityRepartoAction',  '_route' => 'bd_add_entity_reparto',);
                }

                // bd_add_entity_anexo
                if ('/addanxo' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityAnexoAction',  '_route' => 'bd_add_entity_anexo',);
                }

                // bd_add_entity_exportacion
                if ('/addexpo' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityExportacionAction',  '_route' => 'bd_add_entity_exportacion',);
                }

            }

            // bd_avanzar_cantidad_tunel
            if (0 === strpos($pathinfo, '/advance') && preg_match('#^/advance/(?P<proc>[^/]++)/(?P<fan>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_avanzar_cantidad_tunel']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::procesarAvanzarSalidaTunel',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_avanzar_cantidad_tunel;
                }

                return $ret;
            }
            not_bd_avanzar_cantidad_tunel:

            // bd_get_articulos_tipo_pallet
            if (0 === strpos($pathinfo, '/artpallet') && preg_match('#^/artpallet/(?P<tp>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_get_articulos_tipo_pallet']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::getArticulosPorTipoPaller',));
            }

        }

        elseif (0 === strpos($pathinfo, '/i')) {
            // main_page_site
            if ('/index' === $pathinfo) {
                return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::successAction',  '_route' => 'main_page_site',);
            }

            if (0 === strpos($pathinfo, '/informes')) {
                // planilla_control_antemorten
                if (0 === strpos($pathinfo, '/informes/ctrlam') && preg_match('#^/informes/ctrlam/(?P<procFanDay>[^/]++)/(?P<fanDay>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'planilla_control_antemorten']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::emitirCuponesAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_planilla_control_antemorten;
                    }

                    return $ret;
                }
                not_planilla_control_antemorten:

                // informes_rendimientos_faena
                if ('/informes/perform' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::viewRendimientosFaena',  '_route' => 'informes_rendimientos_faena',);
                }

                // informes_pollo_vivo
                if ('/informes/pollovivo' === $pathinfo) {
                    $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::generarInformePolloVivo',  '_route' => 'informes_pollo_vivo',);
                    if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                        $allow = array_merge($allow, ['POST', 'GET']);
                        goto not_informes_pollo_vivo;
                    }

                    return $ret;
                }
                not_informes_pollo_vivo:

                if (0 === strpos($pathinfo, '/informes/e')) {
                    // informes_ver_existencias
                    if ('/informes/existencias' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::viewExistenciasAction',  '_route' => 'informes_ver_existencias',);
                    }

                    // export_informe_uno
                    if (0 === strpos($pathinfo, '/informes/expinone') && preg_match('#^/informes/expinone/(?P<proc>[^/]++)/(?P<fd>[^/]++)(?:/(?P<ajs>[^/]++))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'export_informe_uno']), array (  'ajs' => 0,  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::generatePdfInformeUno',));
                    }

                    // informes_editarr_informe_procesar
                    if (0 === strpos($pathinfo, '/informes/editclfn') && preg_match('#^/informes/editclfn/(?P<cl>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'informes_editarr_informe_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::editarCalculoFaena',));
                    }

                    // informes_procesar_editar_informe_procesar
                    if (0 === strpos($pathinfo, '/informes/editproccl') && preg_match('#^/informes/editproccl/(?P<cl>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'informes_procesar_editar_informe_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::procesarEditarDefinirInforme',));
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_informes_procesar_editar_informe_procesar;
                        }

                        return $ret;
                    }
                    not_informes_procesar_editar_informe_procesar:

                }

                elseif (0 === strpos($pathinfo, '/informes/defineinf')) {
                    // informes_definir_informe
                    if ('/informes/defineinf' === $pathinfo) {
                        return array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::definirInformeFaena',  '_route' => 'informes_definir_informe',);
                    }

                    // informes_definir_informe_procesar
                    if ('/informes/defineinfproc' === $pathinfo) {
                        $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::procesarDefinirInforme',  '_route' => 'informes_definir_informe_procesar',);
                        if (!in_array($requestMethod, ['POST'])) {
                            $allow = array_merge($allow, ['POST']);
                            goto not_informes_definir_informe_procesar;
                        }

                        return $ret;
                    }
                    not_informes_definir_informe_procesar:

                }

                // informes_faena_diaria_informe
                if (0 === strpos($pathinfo, '/informes/infmefna') && preg_match('#^/informes/infmefna/(?P<fd>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'informes_faena_diaria_informe']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::viewResumenFaena',));
                }

                if (0 === strpos($pathinfo, '/informes/informei')) {
                    // informe_ingresos_egresos
                    if (preg_match('#^/informes/informei/(?P<fd>[^/]++)/(?P<pfd>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'informe_ingresos_egresos']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::informeMovimientosAction',));
                    }

                    // informe_informe_dos
                    if (0 === strpos($pathinfo, '/informes/informeii') && preg_match('#^/informes/informeii/(?P<fd>[^/]++)/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'informe_informe_dos']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::informeDosAction',));
                    }

                }

                // informe_list_informes
                if ('/informes/listi' === $pathinfo) {
                    return array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::informesList',  '_route' => 'informe_list_informes',);
                }

                if (0 === strpos($pathinfo, '/informes/addatri1')) {
                    // informe_add_atributo_informe
                    if (preg_match('#^/informes/addatri1/(?P<i1>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'informe_add_atributo_informe']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::informeAddAtributoInforme',));
                    }

                    // informe_add_atributo_informe_procesar
                    if (0 === strpos($pathinfo, '/informes/addatri1proc') && preg_match('#^/informes/addatri1proc/(?P<i1>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'informe_add_atributo_informe_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::informeAddAtributoInformeProcesar',));
                    }

                }

                // informe_informe_tres
                if (0 === strpos($pathinfo, '/informes/gerencia/informeiii') && preg_match('#^/informes/gerencia/informeiii/(?P<fd>[^/]++)/(?P<proc>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'informe_informe_tres']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::informeTresAction',));
                    if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                        $allow = array_merge($allow, ['POST', 'GET']);
                        goto not_informe_informe_tres;
                    }

                    return $ret;
                }
                not_informe_informe_tres:

                // exportar_a_excel
                if (0 === strpos($pathinfo, '/informes/toexcel') && preg_match('#^/informes/toexcel/(?P<proc>[^/]++)/(?P<fd>[^/]++)(?:/(?P<ajs>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'exportar_a_excel']), array (  'ajs' => 0,  '_controller' => 'GestionFaenaBundle\\Controller\\InformesController::exportarInformeExcel',));
                }

            }

            // bd_add_informe_proceso_procesar
            if ('/iprproc' === $pathinfo) {
                $ret = array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::procesarFormArtAtrConcepto',  '_route' => 'bd_add_informe_proceso_procesar',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_add_informe_proceso_procesar;
                }

                return $ret;
            }
            not_bd_add_informe_proceso_procesar:

        }

        elseif (0 === strpos($pathinfo, '/ge')) {
            if (0 === strpos($pathinfo, '/gen')) {
                // bd_generate_movimientos_automaticos
                if (0 === strpos($pathinfo, '/genauto') && preg_match('#^/genauto/(?P<proc>[^/]++)/(?P<fan>[^/]++)/(?P<gpo>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_generate_movimientos_automaticos']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::generateMovimientosAutmaticos',));
                }

                // generar_ventas
                if (0 === strpos($pathinfo, '/genvtas') && preg_match('#^/genvtas/(?P<proc>[^/]++)/(?P<fd>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'generar_ventas']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::generarVentas',));
                    if (!in_array($canonicalMethod, ['POST', 'GET'])) {
                        $allow = array_merge($allow, ['POST', 'GET']);
                        goto not_generar_ventas;
                    }

                    return $ret;
                }
                not_generar_ventas:

                // bd_adm_generate_mov_manual_from_automatic
                if (0 === strpos($pathinfo, '/genmanauto') && preg_match('#^/genmanauto/(?P<proc>[^/]++)/(?P<fd>[^/]++)/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_generate_mov_manual_from_automatic']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::generateFormIngresoManualFromAutomatic',));
                }

            }

            // bd_adm_get_pallet_faena
            if ('/getpallets' === $pathinfo) {
                return array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::getPalletsFaenaActivos',  '_route' => 'bd_adm_get_pallet_faena',);
            }

            // bd_adm_romanea_articulos_proceso_medium
            if (0 === strpos($pathinfo, '/getrmprmd') && preg_match('#^/getrmprmd/(?P<proc>[^/]++)/(?P<fd>[^/]++)/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_romanea_articulos_proceso_medium']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::getFormRomaneaProcesoMedium',));
            }

        }

        elseif (0 === strpos($pathinfo, '/gst')) {
            if (0 === strpos($pathinfo, '/gstProcFanDay')) {
                // bd_adm_proc_fan_day
                if (preg_match('#^/gstProcFanDay/(?P<proc>[^/]++)/(?P<fd>[^/]++)(?:/(?P<typ>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_proc_fan_day']), array (  'typ' => NULL,  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::administrarProcesoFaenaDiaria',));
                }

                // bd_adm_proc_fan_day_procesar
                if (0 === strpos($pathinfo, '/gstProcFanDayProc') && preg_match('#^/gstProcFanDayProc/(?P<proc>[^/]++)/(?P<fd>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_proc_fan_day_procesar']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::administrarProcesoFaenaDiariaProcesar',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_bd_adm_proc_fan_day_procesar;
                    }

                    return $ret;
                }
                not_bd_adm_proc_fan_day_procesar:

            }

            // bd_adm_get_movimientos_proceso
            if (0 === strpos($pathinfo, '/gstmovproc') && preg_match('#^/gstmovproc/(?P<proc>[^/]++)/(?P<fd>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_get_movimientos_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::procesarFormMovimientosProceso',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_adm_get_movimientos_proceso;
                }

                return $ret;
            }
            not_bd_adm_get_movimientos_proceso:

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
            if (preg_match('#^/gst/(?P<mov>[^/]++)/(?P<trx>[^/]++)/(?P<faena>[^/]++)(?:/(?P<typ>[^/]++))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_mov_st_delete']), array (  'typ' => NULL,  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::eliminarMovimientoStockAction',));
                if (!in_array($requestMethod, ['DELETE', 'POST'])) {
                    $allow = array_merge($allow, ['DELETE', 'POST']);
                    goto not_bd_adm_mov_st_delete;
                }

                return $ret;
            }
            not_bd_adm_mov_st_delete:

            // bd_adm_mov_st_delete_obsolet
            if (0 === strpos($pathinfo, '/gstObsolet') && preg_match('#^/gstObsolet/(?P<mov>[^/]++)/(?P<trx>[^/]++)/(?P<faena>[^/]++)(?:/(?P<typ>[^/]++))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_mov_st_delete_obsolet']), array (  'typ' => NULL,  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::eliminarMovimientoStockAjaxAction',));
                if (!in_array($requestMethod, ['POST', 'DELETE'])) {
                    $allow = array_merge($allow, ['POST', 'DELETE']);
                    goto not_bd_adm_mov_st_delete_obsolet;
                }

                return $ret;
            }
            not_bd_adm_mov_st_delete_obsolet:

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

        // eliminar_movimiento_pallet
        if (0 === strpos($pathinfo, '/deletevalpallet') && preg_match('#^/deletevalpallet/(?P<pallet>[^/]++)/(?P<valor>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'eliminar_movimiento_pallet']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::eliminarMovimientoPallet',));
        }

        // bd_adm_get_detalle_movimientos_proceso
        if (0 === strpos($pathinfo, '/detamov') && preg_match('#^/detamov/(?P<proc>[^/]++)/(?P<fd>[^/]++)/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_get_detalle_movimientos_proceso']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::detalleMovimientos',));
        }

        // romanear_from_tapado
        if (0 === strpos($pathinfo, '/romnear') && preg_match('#^/romnear/(?P<proc>[^/]++)/(?P<fd>[^/]++)/(?P<art>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'romanear_from_tapado']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::romanearArticulosFromTapado',));
            if (!in_array($requestMethod, ['POST'])) {
                $allow = array_merge($allow, ['POST']);
                goto not_romanear_from_tapado;
            }

            return $ret;
        }
        not_romanear_from_tapado:

        if (0 === strpos($pathinfo, '/re')) {
            // bd_adm_proc_registrar_venta
            if (0 === strpos($pathinfo, '/regvta') && preg_match('#^/regvta/(?P<proc>[^/]++)/(?P<art>[^/]++)/(?P<val>[^/]++)/(?P<fd>[^/]++)/(?P<cv>[^/]++)/(?P<ent>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_proc_registrar_venta']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::registrarVenta',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_bd_adm_proc_registrar_venta;
                }

                return $ret;
            }
            not_bd_adm_proc_registrar_venta:

            if (0 === strpos($pathinfo, '/register')) {
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

        }

        // bd_adm_next_move
        if (0 === strpos($pathinfo, '/nextmove') && preg_match('#^/nextmove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'bd_adm_next_move']), array (  '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::avanzarMovimiento',));
        }

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

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
