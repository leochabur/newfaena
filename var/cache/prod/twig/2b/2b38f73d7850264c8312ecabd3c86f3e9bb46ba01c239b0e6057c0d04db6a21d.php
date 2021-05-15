<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ::topnav.html.twig */
class __TwigTemplate_1ceab7c9d86e3cc82be0385000ebef49468682316edb2ebeb2f6e01597064854 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::topnav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark  primary-color\">
  
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse container\" id=\"navbarTogglerDemo01\">
    <ul class=\"navbar-nav mr-auto\">
      ";
        // line 8
        if ((isset($context["perfilFaena"]) ? $context["perfilFaena"] : $this->getContext($context, "perfilFaena"))) {
            // line 9
            echo "          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle active btn\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Configuracion Sistema
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              ";
            // line 14
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 15
                echo "                <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Admin. Procesos</a>
                  <ul class=\"dropdown-menu\">
                    <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Definir Proceso</a>
                      <ul class=\"dropdown-menu\">
                        <li><a class=\"dropdown-item\" href=\"";
                // line 19
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_proceso", ["type" => 1]);
                echo "\">Proceso Inicio</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
                // line 20
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_proceso", ["type" => 2]);
                echo "\">Proceso Medio</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
                // line 21
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_proceso", ["type" => 3]);
                echo "\">Proceso Fin</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
                // line 22
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_atributo_por_proceso");
                echo "\">Configurar</a></li>
                      </ul>
                    </li>
                    <li><a class=\"dropdown-item\" href=\"";
                // line 25
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_procesos");
                echo "\">Ver Procesos</a></li>
                             
                  </ul>
                </li>

              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Gestionar Articulos</a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"";
                // line 32
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_articulo");
                echo "\">Nuevo Articulo</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_articulo_atributo_concepto");
                echo "\">Definir Articulos</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
                // line 34
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_editar_articulo");
                echo "\">Configurar Articulos</a></li>
                </ul>
              </li>
              ";
            }
            // line 38
            echo "              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Opciones BD</a>
                <ul class=\"dropdown-menu\">
                  ";
            // line 40
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 41
                echo "                    <li><a class=\"dropdown-item\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_atributo_abstracto");
                echo "\">Nuevo Atributo Abstracto</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
                // line 42
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_concepto_movimiento");
                echo "\">Nuevo Concepto Movimiento</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
                // line 43
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_concepto_movimiento_proceso");
                echo "\">Asignar Concepto a proceso</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
                // line 44
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_concepto_movimiento_proceso");
                echo "\">Ver Definicion de Conceptos</a></li>
                  ";
            }
            // line 46
            echo "                  <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Opciones del Sistema</a>
                    <ul class=\"dropdown-menu\">
                          <li><a class=\"dropdown-item\" href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_cargador");
            echo "\">Nuevo Cargador</a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_unidad_medida");
            echo "\">Nueva Unidad de Medida</a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_granja");
            echo "\">Nueva Granja</a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_transportista");
            echo "\">Nuevo Transportista</a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_ciudad");
            echo "\">Nueva Ciudad</a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_categoria_articulo");
            echo "\">Nueva Categoria</a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_subcategoria_articulo");
            echo "\">Nueva Subcategoria</a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_sucursal");
            echo "\">Nueva Sucursal</a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_consignatario");
            echo "\">Nuevo Consignatario</a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_remito");
            echo "\">Nuevo Remito</a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_anexo");
            echo "\">Nuevo Anexo</a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_reparto");
            echo "\">Nuevo Reparto</a></li>
                          <li><a class=\"dropdown-item\" href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_exportacion");
            echo "\">Nueva Entidad Exportacion</a></li>
                    </ul>
                  </li>
                  ";
            // line 63
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 64
                echo "                  <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Configurar informes</a>
                    <ul class=\"dropdown-menu\">
                          <li><a class=\"dropdown-item\" href=\"";
                // line 66
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_informe_proceso");
                echo "\">Nueva definicion de informe</a></li>
                    </ul>
                  </li>
                ";
            }
            // line 70
            echo "                </ul>
              </li>
              ";
            // line 72
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 73
                echo "                <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Configurar informes</a>
                  <ul class=\"dropdown-menu\">
                    <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Informe I</a>
                      <ul class=\"dropdown-menu\">
                        <li><a class=\"dropdown-item\" href=\"";
                // line 77
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_informe_proceso");
                echo "\">Definir informe</a></li>
                        <li><a class=\"dropdown-item\" href=\"";
                // line 78
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("informe_list_informes");
                echo "\">Configurar Informe</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              ";
            }
            // line 84
            echo "            </ul>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle btn\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Faena Diaria
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Administrar</a>
                <ul class=\"dropdown-menu\">
                      <li><a class=\"dropdown-item\" href=\"";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_faena_diaria");
            echo "\">Iniciar Nueva</a></li>
                      <li><a class=\"dropdown-item\" href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_faena");
            echo "\">Ver Faenas</a></li>
                </ul>
              </li>

              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Estados de procesos</a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"#\">Estado del dia</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Estado historico</a></li>
                </ul>
              </li>
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Informes</a>
                <ul class=\"dropdown-menu\">
                      <li><a class=\"dropdown-item\" href=\"";
            // line 106
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("informes_rendimientos_faena");
            echo "\">Rendimientos</a></li>
                      <li><a class=\"dropdown-item\" href=\"";
            // line 107
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("informes_pollo_vivo");
            echo "\">Pollo Vivo</a></li>
                </ul>
              </li>
              <li><a class=\"dropdown-item\" href=\"";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_incorporar_ventas_a_faena");
            echo "\">Incorporar Ventas</a></li>
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Exportaciones</a>
                <ul class=\"dropdown-menu\">
                      <li><a class=\"dropdown-item\" href=\"";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exportaciones_alta_tipo_pallet");
            echo "\">Definir tipos Pallet</a></li>
                </ul>
              </li>
            </ul>
          </li>
      ";
        }
        // line 119
        echo "      ";
        if ((isset($context["perfilVenta"]) ? $context["perfilVenta"] : $this->getContext($context, "perfilVenta"))) {
            // line 120
            echo "            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle btn\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Ventas
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

                <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Registrar</a>
                  <ul class=\"dropdown-menu\">
                    <li><a class=\"dropdown-item\" href=\"";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_generate");
            echo "\">Registrar Ventas</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_load_files");
            echo "\">Cargar Archivos</a></li>
                  </ul>
                </li>
                

                <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Informes</a>
                  <ul class=\"dropdown-menu\">
                    <li><a class=\"dropdown-item\" href=\"";
            // line 136
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_historico_ventas");
            echo "\">Historico Ventas</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_resumen_ventas_por_articulo");
            echo "\">Ventas Por Articulo</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle btn\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Configuraciones Ventas
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

                <li><a class=\"dropdown-item\" href=\"";
            // line 148
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_ventas_nuevo_grupo_ventas");
            echo "\">Grupos Venta</a></li>
                <li><a class=\"dropdown-item\" href=\"";
            // line 149
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_set_grupo_entidad");
            echo "\">Destinatarios Venta</a></li>
                <li><a class=\"dropdown-item\" href=\"";
            // line 150
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_articulo");
            echo "\">Modificacion Articulo</a></li>
              </ul>
            </li>
      ";
        }
        // line 154
        echo "      ";
        if ((isset($context["perfilFaena"]) ? $context["perfilFaena"] : $this->getContext($context, "perfilFaena"))) {
            // line 155
            echo "          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle btn\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Sistema SIGCER
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

              <li><a class=\"dropdown-item\" href=\"";
            // line 161
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_grupos_solicitudes");
            echo "\">Administrar Solicitudes</a></li>
              <li><a class=\"dropdown-item\" href=\"";
            // line 162
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_find_solicitud");
            echo "\">Buscar Solicitudes</a></li>
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Opciones</a>
                <ul class=\"dropdown-menu\">
                   <li><a class=\"dropdown-item\" href=\"";
            // line 165
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_zona");
            echo "\">Alta Zona</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
            // line 166
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_pais_origen");
            echo "\">Alta Pais Destino</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
            // line 167
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_envase");
            echo "\">Alta Envase</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
            // line 168
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_cliente");
            echo "\">Alta Cliente</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
            // line 169
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_camion");
            echo "\">Alta Camion</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
            // line 170
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_producto");
            echo "\">Alta Producto</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle btn\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Informes
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li><a class=\"dropdown-item\" href=\"";
            // line 180
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("informes_ver_existencias");
            echo "\">Ver existencias</a></li>
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Administrar Usuarios</a>
                <ul class=\"dropdown-menu\">
                      <li><a class=\"dropdown-item\" href=\"";
            // line 183
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Nuevo Usuario</a></li>
                      <li><a class=\"dropdown-item\" href=\"";
            // line 184
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conf_add_proc_user");
            echo "\">Asignar Procesos</a></li>
                      <li><a class=\"dropdown-item\" href=\"";
            // line 185
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("informes_definir_informe");
            echo "\">Definir Calculo</a></li>
                </ul>
              </li>
            </ul>
          </li>
      ";
        }
        // line 191
        echo "    </ul>
    <ul class=\"navbar-nav ml-auto nav-flex-icons \">
      <li class=\"nav-item dropdown indicator\">

      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\"
          aria-haspopup=\"true\" aria-expanded=\"false\">
          <i class=\"fas fa-user\"></i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right dropdown-default\"
          aria-labelledby=\"navbarDropdownMenuLink-333\">
          <a class=\"dropdown-item\" href=\"";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Cerrar sesion</a>
          <a class=\"dropdown-item\" href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Ver perfil</a>
        </div>
      </li>
    </ul>
  </div>
</nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::topnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 204,  428 => 203,  414 => 191,  405 => 185,  401 => 184,  397 => 183,  391 => 180,  378 => 170,  374 => 169,  370 => 168,  366 => 167,  362 => 166,  358 => 165,  352 => 162,  348 => 161,  340 => 155,  337 => 154,  330 => 150,  326 => 149,  322 => 148,  308 => 137,  304 => 136,  294 => 129,  290 => 128,  280 => 120,  277 => 119,  268 => 113,  262 => 110,  256 => 107,  252 => 106,  237 => 94,  233 => 93,  222 => 84,  213 => 78,  209 => 77,  203 => 73,  201 => 72,  197 => 70,  190 => 66,  186 => 64,  184 => 63,  178 => 60,  174 => 59,  170 => 58,  166 => 57,  162 => 56,  158 => 55,  154 => 54,  150 => 53,  146 => 52,  142 => 51,  138 => 50,  134 => 49,  130 => 48,  126 => 46,  121 => 44,  117 => 43,  113 => 42,  108 => 41,  106 => 40,  102 => 38,  95 => 34,  91 => 33,  87 => 32,  77 => 25,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  53 => 15,  51 => 14,  44 => 9,  42 => 8,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark  primary-color\">
  
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse container\" id=\"navbarTogglerDemo01\">
    <ul class=\"navbar-nav mr-auto\">
      {% if perfilFaena %}
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle active btn\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Configuracion Sistema
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              {% if is_granted('ROLE_ADMIN') %}
                <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Admin. Procesos</a>
                  <ul class=\"dropdown-menu\">
                    <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Definir Proceso</a>
                      <ul class=\"dropdown-menu\">
                        <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_proceso', {'type':1})}}\">Proceso Inicio</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_proceso', {'type':2})}}\">Proceso Medio</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_proceso', {'type':3})}}\">Proceso Fin</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_atributo_por_proceso')}}\">Configurar</a></li>
                      </ul>
                    </li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('bd_view_procesos') }}\">Ver Procesos</a></li>
                             
                  </ul>
                </li>

              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Gestionar Articulos</a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"{{path('bd_add_articulo')}}\">Nuevo Articulo</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_articulo_atributo_concepto') }}\">Definir Articulos</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('bd_editar_articulo') }}\">Configurar Articulos</a></li>
                </ul>
              </li>
              {% endif %}
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Opciones BD</a>
                <ul class=\"dropdown-menu\">
                  {% if is_granted('ROLE_ADMIN') %}
                    <li><a class=\"dropdown-item\" href=\"{{path('bd_add_atributo_abstracto')}}\">Nuevo Atributo Abstracto</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_concepto_movimiento') }}\">Nuevo Concepto Movimiento</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{path('bd_add_concepto_movimiento_proceso')}}\">Asignar Concepto a proceso</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{path('bd_view_concepto_movimiento_proceso')}}\">Ver Definicion de Conceptos</a></li>
                  {% endif %}
                  <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Opciones del Sistema</a>
                    <ul class=\"dropdown-menu\">
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_entity_cargador') }}\">Nuevo Cargador</a></li>
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_unidad_medida') }}\">Nueva Unidad de Medida</a></li>
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_entity_granja') }}\">Nueva Granja</a></li>
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_entity_transportista') }}\">Nuevo Transportista</a></li>
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_entity_ciudad') }}\">Nueva Ciudad</a></li>
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_categoria_articulo') }}\">Nueva Categoria</a></li>
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_subcategoria_articulo') }}\">Nueva Subcategoria</a></li>
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_entity_sucursal') }}\">Nueva Sucursal</a></li>
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_entity_consignatario') }}\">Nuevo Consignatario</a></li>
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_entity_remito') }}\">Nuevo Remito</a></li>
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_entity_anexo') }}\">Nuevo Anexo</a></li>
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_entity_reparto') }}\">Nuevo Reparto</a></li>
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_entity_exportacion') }}\">Nueva Entidad Exportacion</a></li>
                    </ul>
                  </li>
                  {% if is_granted('ROLE_ADMIN') %}
                  <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Configurar informes</a>
                    <ul class=\"dropdown-menu\">
                          <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_informe_proceso') }}\">Nueva definicion de informe</a></li>
                    </ul>
                  </li>
                {% endif %}
                </ul>
              </li>
              {% if is_granted('ROLE_ADMIN') %}
                <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Configurar informes</a>
                  <ul class=\"dropdown-menu\">
                    <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Informe I</a>
                      <ul class=\"dropdown-menu\">
                        <li><a class=\"dropdown-item\" href=\"{{path('bd_add_informe_proceso')}}\">Definir informe</a></li>
                        <li><a class=\"dropdown-item\" href=\"{{path('informe_list_informes')}}\">Configurar Informe</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              {% endif %}
            </ul>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle btn\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Faena Diaria
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Administrar</a>
                <ul class=\"dropdown-menu\">
                      <li><a class=\"dropdown-item\" href=\"{{ path('bd_add_faena_diaria') }}\">Iniciar Nueva</a></li>
                      <li><a class=\"dropdown-item\" href=\"{{ path('bd_view_faena') }}\">Ver Faenas</a></li>
                </ul>
              </li>

              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Estados de procesos</a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"#\">Estado del dia</a></li>
                  <li><a class=\"dropdown-item\" href=\"#\">Estado historico</a></li>
                </ul>
              </li>
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Informes</a>
                <ul class=\"dropdown-menu\">
                      <li><a class=\"dropdown-item\" href=\"{{ path('informes_rendimientos_faena') }}\">Rendimientos</a></li>
                      <li><a class=\"dropdown-item\" href=\"{{ path('informes_pollo_vivo') }}\">Pollo Vivo</a></li>
                </ul>
              </li>
              <li><a class=\"dropdown-item\" href=\"{{ path('vtas_incorporar_ventas_a_faena') }}\">Incorporar Ventas</a></li>
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Exportaciones</a>
                <ul class=\"dropdown-menu\">
                      <li><a class=\"dropdown-item\" href=\"{{ path('exportaciones_alta_tipo_pallet') }}\">Definir tipos Pallet</a></li>
                </ul>
              </li>
            </ul>
          </li>
      {% endif %}
      {% if perfilVenta %}
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle btn\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Ventas
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

                <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Registrar</a>
                  <ul class=\"dropdown-menu\">
                    <li><a class=\"dropdown-item\" href=\"{{ path('vtas_generate') }}\">Registrar Ventas</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('vtas_load_files') }}\">Cargar Archivos</a></li>
                  </ul>
                </li>
                

                <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Informes</a>
                  <ul class=\"dropdown-menu\">
                    <li><a class=\"dropdown-item\" href=\"{{ path('vtas_historico_ventas') }}\">Historico Ventas</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('vtas_resumen_ventas_por_articulo') }}\">Ventas Por Articulo</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle btn\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Configuraciones Ventas
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

                <li><a class=\"dropdown-item\" href=\"{{ path('bd_ventas_nuevo_grupo_ventas') }}\">Grupos Venta</a></li>
                <li><a class=\"dropdown-item\" href=\"{{ path('bd_set_grupo_entidad') }}\">Destinatarios Venta</a></li>
                <li><a class=\"dropdown-item\" href=\"{{path('bd_add_articulo')}}\">Modificacion Articulo</a></li>
              </ul>
            </li>
      {% endif %}
      {% if perfilFaena %}
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle btn\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Sistema SIGCER
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

              <li><a class=\"dropdown-item\" href=\"{{ path('sigcer_add_grupos_solicitudes') }}\">Administrar Solicitudes</a></li>
              <li><a class=\"dropdown-item\" href=\"{{ path('sigcer_find_solicitud') }}\">Buscar Solicitudes</a></li>
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Opciones</a>
                <ul class=\"dropdown-menu\">
                   <li><a class=\"dropdown-item\" href=\"{{ path('sigcer_add_zona') }}\">Alta Zona</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('sigcer_add_pais_origen') }}\">Alta Pais Destino</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('sigcer_add_envase') }}\">Alta Envase</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('sigcer_add_cliente') }}\">Alta Cliente</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('sigcer_add_camion') }}\">Alta Camion</a></li>
                  <li><a class=\"dropdown-item\" href=\"{{ path('sigcer_add_producto') }}\">Alta Producto</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle btn\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Informes
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li><a class=\"dropdown-item\" href=\"{{ path('informes_ver_existencias') }}\">Ver existencias</a></li>
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Administrar Usuarios</a>
                <ul class=\"dropdown-menu\">
                      <li><a class=\"dropdown-item\" href=\"{{ path('fos_user_registration_register') }}\">Nuevo Usuario</a></li>
                      <li><a class=\"dropdown-item\" href=\"{{path('conf_add_proc_user')}}\">Asignar Procesos</a></li>
                      <li><a class=\"dropdown-item\" href=\"{{path('informes_definir_informe')}}\">Definir Calculo</a></li>
                </ul>
              </li>
            </ul>
          </li>
      {% endif %}
    </ul>
    <ul class=\"navbar-nav ml-auto nav-flex-icons \">
      <li class=\"nav-item dropdown indicator\">

      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\"
          aria-haspopup=\"true\" aria-expanded=\"false\">
          <i class=\"fas fa-user\"></i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right dropdown-default\"
          aria-labelledby=\"navbarDropdownMenuLink-333\">
          <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout')}}\">Cerrar sesion</a>
          <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_show') }}\">Ver perfil</a>
        </div>
      </li>
    </ul>
  </div>
</nav>", "::topnav.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\app\\Resources\\views\\topnav.html.twig");
    }
}
