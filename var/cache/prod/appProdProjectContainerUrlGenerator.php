<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'main_server_root_site' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::defaultServerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_articulo_atributo_concepto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addArticuloAtributoConcepto',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addartatcon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_articulo_atributo_concepto_procesar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormArtAtrConcepto',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addartatconproc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_atributo_abstracto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addAtributoAbstracto',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addatrabs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_atributo_abstracto_procesar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoAbstracto',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addatrabsproc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_concepto_movimiento_proceso' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addConceptoMovimientoProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addcnmvpr',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_concepto_movimiento_proceso_procesar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioConceptoMovimientoProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addcnmvprproc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_view_concepto_movimiento_proceso' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::viewConceptoMovimientoProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/viewcnmvpr',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_edit_concepto_movimiento_proceso' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editConceptoMovimientoProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editcnmvpr',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_edit_concepto_movimiento_proceso_procesar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editConceptoMovimientoProcesoProcesar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editcnmvproc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_unidad_medida' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addUnidadMedidaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addUM',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_um_procesar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioUnidadMedida',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addUMProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_articulo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addArticuloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addArt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_articulo_procesar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioArticulo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addArtProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_articulo_proceso_faena' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addArticuloProcesoFaenaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addArtProcFan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_articulo_proceso_faena_procesar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioArticuloProcesoFaena',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addArtProcFanProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_atributos_view_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::viewAllAtributes',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vieAllAtributes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_atributos_show' => array (  0 =>   array (    0 => 'atr',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::showAtribute',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'atr',    ),    1 =>     array (      0 => 'text',      1 => '/vieAtribute',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_delete_articulo' => array (  0 =>   array (    0 => 'art',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteArticulo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'art',    ),    1 =>     array (      0 => 'text',      1 => '/deleteArt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_editar_articulo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarArticuloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editart',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_delete_atributo' => array (  0 =>   array (    0 => 'atr',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteAtributo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'atr',    ),    1 =>     array (      0 => 'text',      1 => '/delatr',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_update_atributo' => array (  0 =>   array (    0 => 'atr',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::updateAtributo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'atr',    ),    1 =>     array (      0 => 'text',      1 => '/updatr',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_asignar_articulo_origen_transformacion' => array (  0 =>   array (    0 => 'conc',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::asignarArticuloOrigenTransformacion',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'conc',    ),    1 =>     array (      0 => 'text',      1 => '/assartor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_atributo' => array (  0 =>   array (    0 => 'art',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addAtributoMedibleManualAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'art',    ),    1 =>     array (      0 => 'text',      1 => '/addatr',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_tributo_informable_manual_procesar' => array (  0 =>   array (    0 => 'art',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoInformableManual',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'art',    ),    1 =>     array (      0 => 'text',      1 => '/addAIMProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_tributo_medible_manual_procesar' => array (  0 =>   array (    0 => 'art',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoMedibleManual',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'art',    ),    1 =>     array (      0 => 'text',      1 => '/addAMMProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_tributo_medible_automatico_procesar' => array (  0 =>   array (    0 => 'art',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoMedibleAutomatico',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'art',    ),    1 =>     array (      0 => 'text',      1 => '/addAMAProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_tributo_informable_procesar' => array (  0 =>   array (    0 => 'art',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioAtributoInformable',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'art',    ),    1 =>     array (      0 => 'text',      1 => '/addAIProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_proceso' => array (  0 =>   array (    0 => 'type',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addProcesoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),    1 =>     array (      0 => 'text',      1 => '/addPrc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_proceso_procesar' => array (  0 =>   array (    0 => 'type',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::procesarFormularioProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),    1 =>     array (      0 => 'text',      1 => '/addProcProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_view_procesos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::viewProcesosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/viewProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_edit_procesos' => array (  0 =>   array (    0 => 'proccess',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editProcesosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'proccess',    ),    1 =>     array (      0 => 'text',      1 => '/editProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_update_manejo_stock' => array (  0 =>   array (    0 => 'proc',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::updateManejoStockProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'proc',    ),    1 =>     array (      0 => 'text',      1 => '/updmnjst',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_edit_procesos_add_sender' => array (  0 =>   array (    0 => 'proccess',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editProcesosProcesarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'proccess',    ),    1 =>     array (      0 => 'text',      1 => '/addSender',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_view_art_proc_fan' => array (  0 =>   array (    0 => 'articulo',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::viewArticuloProcesoFaena',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'articulo',    ),    1 =>     array (      0 => 'text',      1 => '/viewArtProcFan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_art_proc_fan' => array (  0 =>   array (    0 => 'articulo',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addAtrArtProcFanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'articulo',    ),    1 =>     array (      0 => 'text',      1 => '/addAtrArtProcFan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_config_atr_proceso' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editAtributoConceptoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cnfAtrPrc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_config_atr_proceso_procesar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editAtributoConceptoProcesar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cnfAtrPrcProcesar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_editar_atr_concepto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarAtributoConceptoProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edConAtr',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_get_conceptos_proceso' => array (  0 =>   array (    0 => 'proc',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getConceptosProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'proc',    ),    1 =>     array (      0 => 'text',      1 => '/getConcProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_get_atributos_concepto' => array (  0 =>   array (    0 => 'con',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getAtributosConceptosProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'con',    ),    1 =>     array (      0 => 'text',      1 => '/getAtribCon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_delete_atr_proc_atr_conc' => array (  0 =>   array (    0 => 'atco',    1 => 'atpr',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::deleteAtributoProcesoOfAtributoConcepto',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'atpr',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'atco',    ),    2 =>     array (      0 => 'text',      1 => '/delAtPrAtCn',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_get_atributos_atributo_concepto' => array (  0 =>   array (    0 => 'ac',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getAtributosAtributoConcepto',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ac',    ),    1 =>     array (      0 => 'text',      1 => '/getAtribAtribCon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_atributo_proceso_a_atributo_concepto' => array (  0 =>   array (    0 => 'atrcon',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::addAtrProcAtAtrConc',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'atrcon',    ),    1 =>     array (      0 => 'text',      1 => '/addAtrPrAtrCn',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_editar_atributo_articulo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarAtributoProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editAtrArtProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_change_articulo_proceso' => array (  0 =>   array (    0 => 'art',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::changeStateArticuloProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'art',    ),    1 =>     array (      0 => 'text',      1 => '/artProcChnage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_editar_articulo_proceso' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarArticuloProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editArtProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_atr_art_procesar' => array (  0 =>   array (    0 => 'artic',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::adAtrArtProcesar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'artic',    ),    1 =>     array (      0 => 'text',      1 => '/addAtrProcP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_editar_atributo_concepto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarAtributoConcepto',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editAtrConc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_get_articles_for_proccess' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getArticulosProceso',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getArtProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_get_atributes_for_articles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getAtributosArticulos',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getAtrArt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_get_atribute' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::getAtributo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getAtr',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_editar_atributo' => array (  0 =>   array (    0 => 'atr',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionBDController::editarAtributo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'atr',    ),    1 =>     array (      0 => 'text',      1 => '/editAtr',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_faena_diaria' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::addFaenaDiariaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addFanDay',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_faena_diaria_procesar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::addFaenaDiariaProcesarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addFanDayProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'main_page_site' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::successAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_view_faena' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::viewFaenaDiariaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/viewFan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_view_procesos_faena_diaria' => array (  0 =>   array (    0 => 'fan',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::viewProcesosFaenaDiariaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'fan',    ),    1 =>     array (      0 => 'text',      1 => '/viewProcFanDay',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_change_tipo_movimiento' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::changeTipoMovimiento',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/chgtm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_change_concepto_movimiento' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::changeConceptoMovimiento',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/chgcon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_adm_proc_fan_day' => array (  0 =>   array (    0 => 'proc',    1 => 'fd',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::administrarProcesoFaenaDiaria',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'fd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'proc',    ),    2 =>     array (      0 => 'text',      1 => '/gstProcFanDay',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_adm_proc_mov_st' => array (  0 =>   array (    0 => 'proc',    1 => 'art',    2 => 'conc',    3 => 'type',    4 => 'fanday',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::procesarMovimientoStockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'fanday',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'conc',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'art',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'proc',    ),    5 =>     array (      0 => 'text',      1 => '/gstMovProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'query_consulta_movimiento' => array (  0 =>   array (    0 => 'mov',    1 => 'trx',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::queryMovimiento',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'trx',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mov',    ),    2 =>     array (      0 => 'text',      1 => '/qdelmov',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_fan_day_close' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::closeFanDayAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gstFanDayClose',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_fan_day_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::deleteFanDayAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gstFanDayDelete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_adm_mov_st_edit' => array (  0 =>   array (    0 => 'mov',    1 => 'proc',    2 => 'art',    3 => 'fanday',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::editarMovimientoStockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'fanday',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'art',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'proc',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mov',    ),    4 =>     array (      0 => 'text',      1 => '/gstMovEdit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_adm_edit_mov_stock_procesar' => array (  0 =>   array (    0 => 'mov',    1 => 'proc',    2 => 'art',    3 => 'fanday',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::procesarEditMovimientoStockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'fanday',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'art',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'proc',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mov',    ),    4 =>     array (      0 => 'text',      1 => '/gstMovEditProc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_adm_mov_st_delete' => array (  0 =>   array (    0 => 'mov',    1 => 'trx',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::eliminarMovimientoStockAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'trx',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mov',    ),    2 =>     array (      0 => 'text',      1 => '/gst',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_concepto_movimiento' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::generarNuevoConceptoMovimiento',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gstaddconmov',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_concepto_movimiento_procesar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::procesarFormularioConceptoMovimiento',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gstaddconmovproc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'conf_add_proc_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::addProcedureUser',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addProcUsr',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'conf_add_proc_user_procesar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::addProcedureUserProcesar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addProcUsrProcesar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planilla_control_antemorten' => array (  0 =>   array (    0 => 'fanday',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionFaenaController::emitirCuponesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'fanday',    ),    1 =>     array (      0 => 'text',      1 => '/informes/ctrlam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_entity_granja' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityGranjaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addgja',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_entity_transportista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityTransportistaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addtrs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bd_add_entity_ciudad' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::addEntityCiudadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addcty',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'save_entidad_externa' => array (  0 =>   array (    0 => 'ee',  ),  1 =>   array (    '_controller' => 'GestionFaenaBundle\\Controller\\GestionOpcionesSistemaController::saveEntidadExterna',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ee',    ),    1 =>     array (      0 => 'text',      1 => '/saveEntExt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.change_password.controller:changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
