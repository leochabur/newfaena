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

/* topnav.html.twig */
class __TwigTemplate_7ec9f69715da6e5bc5e7d0911e0fd8700cbbb2e9d574a65ac363d54865070b28 extends \Twig\Template
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
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark primary-color\">
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse container\" id=\"navbarTogglerDemo01\">
    <ul class=\"navbar-nav mr-auto\">

      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Configuracion Sistema
        </a>
        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
          <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Admin. Procesos</a>
            <ul class=\"dropdown-menu\">
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Definir Proceso</a>
                <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_proceso", ["type" => 1]);
        echo "\">Proceso Inicio</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_proceso", ["type" => 2]);
        echo "\">Proceso Medio</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_proceso", ["type" => 3]);
        echo "\">Proceso Fin</a></li>
                </ul>
              </li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_procesos");
        echo "\">Ver Procesos</a></li>
                       
            </ul>
          </li>
          <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Gestionar Articulos</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_articulo");
        echo "\">Nuevo Articulo</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_articulo_atributo_concepto");
        echo "\">Definir Articulos</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_editar_articulo");
        echo "\">Configurar Articulos</a></li>
            </ul>
          </li>
          <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Opciones BD</a>
            <ul class=\"dropdown-menu\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_atributo_abstracto");
        echo "\">Nuevo Atributo Abstracto</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_concepto_movimiento");
        echo "\">Nuevo Concepto Movimiento</a></li>
               <!--li><a class=\"dropdown-item\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_editar_atributo_articulo");
        echo "\">Configurar Atributos por proceso</a></li-->
              <li><a class=\"dropdown-item\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_concepto_movimiento_proceso");
        echo "\">Asignar Concepto a proceso</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_concepto_movimiento_proceso");
        echo "\">Ver Definicion de Conceptos</a></li>
              <!--li><a class=\"dropdown-item\" href=\" path('bd_editar_atr_concepto') \">Configurar atributos por concepto</a></li-->
              <!--li><a class=\"dropdown-item\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_editar_articulo_proceso");
        echo "\">Definicion de articulos por proceso</a></li-->
              
              <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Opciones del Sistema</a>
                <ul class=\"dropdown-menu\">
                      <li><a class=\"dropdown-item\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_unidad_medida");
        echo "\">Nueva Unidad de Medida</a></li>
                      <li><a class=\"dropdown-item\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_granja");
        echo "\">Nueva Granja</a></li>
                      <li><a class=\"dropdown-item\" href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_transportista");
        echo "\">Nuevo Transportista</a></li>
                      <li><a class=\"dropdown-item\" href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_entity_ciudad");
        echo "\">Nueva Ciudad</a></li>
                </ul>
              </li>
            </ul>
          </li>

        </ul>
      </li>
        <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Faena Diaria
        </a>
        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
          <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Administrar</a>
            <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_faena_diaria");
        echo "\">Iniciar Nueva</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
        // line 64
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
        </ul>
      </li>
        <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Informes
        </a>
        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
          <li class=\"dropdown-submenu\"><a class=\"dropdown-item dropdown-toggle\" href=\"#\">Administrar Usuarios</a>
            <ul class=\"dropdown-menu\">
                  <li><a class=\"dropdown-item\" href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Nuevo Usuario</a></li>
                  <li><a class=\"dropdown-item\" href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conf_add_proc_user");
        echo "\">Asignar Procesos</a></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
    <ul class=\"navbar-nav ml-auto nav-flex-icons\">
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\"
          aria-haspopup=\"true\" aria-expanded=\"false\">
          <i class=\"fas fa-user\"></i>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right dropdown-default\"
          aria-labelledby=\"navbarDropdownMenuLink-333\">
          <a class=\"dropdown-item\" href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Cerrar sesion</a>
          <a class=\"dropdown-item\" href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Ver perfil</a>
        </div>
      </li>
    </ul>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "topnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 99,  192 => 98,  175 => 84,  171 => 83,  149 => 64,  145 => 63,  127 => 48,  123 => 47,  119 => 46,  115 => 45,  108 => 41,  103 => 39,  99 => 38,  95 => 37,  91 => 36,  87 => 35,  79 => 30,  75 => 29,  71 => 28,  62 => 22,  56 => 19,  52 => 18,  48 => 17,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "topnav.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\app\\Resources\\views\\topnav.html.twig");
    }
}
