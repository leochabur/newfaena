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

/* @GestionSigcer/addSolicitudAGrupo.html.twig */
class __TwigTemplate_4512ff553473e3e10d6f5eb04db0d39173bd07f7a6946baa94e2db3d8283b62b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionSigcer/addSolicitudAGrupo.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionSigcer/addSolicitudAGrupo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "<br>
<hr>
<span class=\"h5 card-title\">Nueva Solicitud</span>
<br>
<span class=\"h5 card-title\">Tipo Solicitud: ";
        // line 7
        if ( !$this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "exportacion", [])) {
            echo "Consumo Interno ";
        } else {
            echo " Exportacion ";
        }
        echo "</span>
<hr>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "flashes", [0 => "sussecc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "\t<div class=\"alert alert-success\" role=\"alert\">
\t  ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "flashes", [0 => "error"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "  <div class=\"alert alert-danger\" role=\"alert\">
    ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "<div class=\"\">
\t";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"form-row\">
      <div class=\"col-4\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupo", []), 'label', ["label" => "Solicitudes de fecha:"]);
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupo", []), 'widget');
        echo "
      </div>
    </div>
    <br>
    ";
        // line 28
        if ( !$this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "exportacion", [])) {
            // line 29
            echo "              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zona", []), 'label');
            echo "
                  ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zona", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", []), 'label');
            echo "
                  ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "camion", []), 'label');
            echo "
                  ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "camion", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugarDestino", []), 'label');
            echo "
                  ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugarDestino", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precintos", []), 'label');
            echo "
                  ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precintos", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precintoSenasa", []), 'label');
            echo "
                  ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precintoSenasa", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precintoAduana", []), 'label');
            echo "
                  ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precintoAduana", []), 'widget');
            echo "
                </div>
                ";
            // line 62
            if ($this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "exportacion", [])) {
                // line 63
                echo "                  <div class=\"col-3\">
                    ";
                // line 64
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remitoNumero", []), 'label');
                echo "
                    ";
                // line 65
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remitoNumero", []), 'widget');
                echo "
                  </div>
                ";
            }
            // line 68
            echo "              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temperatura", []), 'label');
            echo "
                  ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temperatura", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "termoTemperatura", []), 'label', ["label" => "Tº termo-proceso"]);
            echo "
                  ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "termoTemperatura", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "termoTiempo", []), 'label', ["label" => " Tpo. termo-proceso"]);
            echo "
                  ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "termoTiempo", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-6\">
                  ";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", []), 'label');
            echo "
                  ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col\">
                  ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", []), 'widget');
            echo "
                </div>
              </div>
      ";
        } else {
            // line 95
            echo "              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patenteCamion", []), 'label');
            echo "
                  ";
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patenteCamion", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patenteAcoplado", []), 'label');
            echo "
                  ";
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patenteAcoplado", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatarioExportacion", []), 'label');
            echo "
                  ";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "destinatarioExportacion", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precintoSenasa", []), 'label');
            echo "
                  ";
            // line 112
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precintoSenasa", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remitoNumero", []), 'label');
            echo "
                  ";
            // line 116
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "remitoNumero", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 119
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temperatura", []), 'label');
            echo "
                  ";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "temperatura", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 125
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoTransporte", []), 'label');
            echo "
                  ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoTransporte", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 129
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreBuque", []), 'label');
            echo "
                  ";
            // line 130
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreBuque", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroContenedor", []), 'label');
            echo "
                  ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroContenedor", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col\">
                  ";
            // line 139
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", []), 'widget');
            echo "
                </div>
              </div>

              ";
            // line 143
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
      ";
        }
        // line 145
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
</div>
    <hr>
    <span class=\"h5\">Solicitudes generadas para el ";
        // line 149
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "fecha", []), "d/m/Y"), "html", null, true);
        echo "</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        ";
        // line 152
        if ( !$this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "exportacion", [])) {
            // line 153
            echo "            <thead>
              <tr>
                <th>#</th>
                <th>Zona</th>
                <th>Cliente</th>
                <th>Camion</th>
                <th>Lugar Destino</th>
                <th>Cant. Articulos</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "solicitudes", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 166
                echo "                <tr>
                    <td>";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "zona", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "cliente", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "camion", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "lugarDestino", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 172
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["p"], "detalles", [])), "html", null, true);
                echo "</td>
                    <td>
                  <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify\"></i></a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\"  href=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_articulos_a_solicitud", ["sol" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\">Agregar Productos</a>
                      <a class=\"dropdown-item\"  href=\"";
                // line 177
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_editar_solicitud", ["sol" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\">Modificar Solicitud</a>
                      <a class=\"dropdown-item\"  href=\"";
                // line 178
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_delete_solicitud", ["sol" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\">Eliminar Solicitud</a>
                    </div>
                    </td>
                    </td>
                </tr>
              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "            </tbody>
          ";
        } else {
            // line 186
            echo "            <thead>
              <tr>
                <th>#</th>
                <th>Destinatario</th>
                <th>Remito</th>
                <th>Contenedor</th>
                <th>Camion/Acoplado</th>
                <th>Cant. Articulos</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "solicitudes", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 199
                echo "                <tr>
                    <td>";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "destinatarioExportacion", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "remitoNumero", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "numeroContenedor", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "patenteCamion", []), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "patenteAcoplado", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 205
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["p"], "detalles", [])), "html", null, true);
                echo "</td>
                    <td>
                  <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify\"></i></a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\"  href=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_articulos_a_solicitud", ["sol" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\">Agregar Productos</a>
                      <a class=\"dropdown-item\"  href=\"";
                // line 210
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_editar_solicitud", ["sol" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\">Modificar Solicitud</a>
                      <a class=\"dropdown-item\"  href=\"";
                // line 211
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_delete_solicitud", ["sol" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\">Eliminar Solicitud</a>
                    </div>
                    </td>
                    </td>
                </tr>
              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "            </tbody>
          ";
        }
        // line 219
        echo "    </table>
    <div>
        <a href=\"";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_grupos_solicitudes");
        echo "\" class=\"btn btn-success\"><< Volver</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@GestionSigcer/addSolicitudAGrupo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 221,  584 => 219,  580 => 217,  560 => 211,  556 => 210,  552 => 209,  545 => 205,  539 => 204,  535 => 203,  531 => 202,  527 => 201,  523 => 200,  520 => 199,  503 => 198,  489 => 186,  485 => 184,  465 => 178,  461 => 177,  457 => 176,  450 => 172,  446 => 171,  442 => 170,  438 => 169,  434 => 168,  430 => 167,  427 => 166,  410 => 165,  396 => 153,  394 => 152,  388 => 149,  380 => 145,  375 => 143,  368 => 139,  360 => 134,  356 => 133,  350 => 130,  346 => 129,  340 => 126,  336 => 125,  328 => 120,  324 => 119,  318 => 116,  314 => 115,  308 => 112,  304 => 111,  296 => 106,  292 => 105,  286 => 102,  282 => 101,  276 => 98,  272 => 97,  268 => 95,  261 => 91,  253 => 86,  249 => 85,  241 => 80,  237 => 79,  231 => 76,  227 => 75,  221 => 72,  217 => 71,  212 => 68,  206 => 65,  202 => 64,  199 => 63,  197 => 62,  192 => 60,  188 => 59,  180 => 54,  176 => 53,  170 => 50,  166 => 49,  160 => 46,  156 => 45,  148 => 40,  144 => 39,  138 => 36,  134 => 35,  128 => 32,  124 => 31,  120 => 29,  118 => 28,  111 => 24,  107 => 23,  101 => 20,  98 => 19,  89 => 16,  86 => 15,  82 => 14,  73 => 11,  70 => 10,  66 => 9,  57 => 7,  51 => 3,  45 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"FOSUserBundle::layout.html.twig\" %}
{% block fos_user_content %}
<br>
<hr>
<span class=\"h5 card-title\">Nueva Solicitud</span>
<br>
<span class=\"h5 card-title\">Tipo Solicitud: {% if not grupo.exportacion %}Consumo Interno {% else %} Exportacion {% endif %}</span>
<hr>
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
{% for message in app.flashes('error') %}
  <div class=\"alert alert-danger\" role=\"alert\">
    {{ message }}
  </div>
{% endfor %}
<div class=\"\">
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-row\">
      <div class=\"col-4\">
        {{ form_label(form.grupo, 'Solicitudes de fecha:') }}
        {{ form_widget(form.grupo) }}
      </div>
    </div>
    <br>
    {% if not grupo.exportacion %}
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.zona) }}
                  {{ form_widget(form.zona) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.cliente) }}
                  {{ form_widget(form.cliente) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.camion) }}
                  {{ form_widget(form.camion) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.lugarDestino) }}
                  {{ form_widget(form.lugarDestino) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.precintos) }}
                  {{ form_widget(form.precintos) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.precintoSenasa) }}
                  {{ form_widget(form.precintoSenasa) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.precintoAduana) }}
                  {{ form_widget(form.precintoAduana) }}
                </div>
                {% if grupo.exportacion %}
                  <div class=\"col-3\">
                    {{ form_label(form.remitoNumero) }}
                    {{ form_widget(form.remitoNumero) }}
                  </div>
                {% endif %}
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.temperatura) }}
                  {{ form_widget(form.temperatura) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.termoTemperatura, 'Tº termo-proceso') }}
                  {{ form_widget(form.termoTemperatura) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.termoTiempo,' Tpo. termo-proceso') }}
                  {{ form_widget(form.termoTiempo) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-6\">
                  {{ form_label(form.observaciones) }}
                  {{ form_widget(form.observaciones) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col\">
                  {{ form_widget(form.guardar) }}
                </div>
              </div>
      {% else %}
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.patenteCamion) }}
                  {{ form_widget(form.patenteCamion) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.patenteAcoplado) }}
                  {{ form_widget(form.patenteAcoplado) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.destinatarioExportacion) }}
                  {{ form_widget(form.destinatarioExportacion) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.precintoSenasa) }}
                  {{ form_widget(form.precintoSenasa) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.remitoNumero) }}
                  {{ form_widget(form.remitoNumero) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.temperatura) }}
                  {{ form_widget(form.temperatura) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.tipoTransporte) }}
                  {{ form_widget(form.tipoTransporte) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.nombreBuque) }}
                  {{ form_widget(form.nombreBuque) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.numeroContenedor) }}
                  {{ form_widget(form.numeroContenedor) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col\">
                  {{ form_widget(form.guardar) }}
                </div>
              </div>

              {{ form_errors(form) }}
      {% endif %}
\t{{ form_end(form) }}
    <br>
</div>
    <hr>
    <span class=\"h5\">Solicitudes generadas para el {{ grupo.fecha | date('d/m/Y')}}</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        {% if not grupo.exportacion %}
            <thead>
              <tr>
                <th>#</th>
                <th>Zona</th>
                <th>Cliente</th>
                <th>Camion</th>
                <th>Lugar Destino</th>
                <th>Cant. Articulos</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              {% for p in grupo.solicitudes %}
                <tr>
                    <td>{{ loop.index }}</td>
                    <td>{{ p.zona }}</td>
                    <td>{{ p.cliente}}</td>
                    <td>{{ p.camion }}</td>
                    <td>{{ p.lugarDestino }}</td>
                    <td>{{ p.detalles|length }}</td>
                    <td>
                  <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify\"></i></a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\"  href=\"{{ path('sigcer_add_articulos_a_solicitud', { sol : p.id}) }}\">Agregar Productos</a>
                      <a class=\"dropdown-item\"  href=\"{{ path('sigcer_editar_solicitud', { sol : p.id}) }}\">Modificar Solicitud</a>
                      <a class=\"dropdown-item\"  href=\"{{ path('sigcer_delete_solicitud', { sol : p.id}) }}\">Eliminar Solicitud</a>
                    </div>
                    </td>
                    </td>
                </tr>
              {% endfor %}
            </tbody>
          {% else %}
            <thead>
              <tr>
                <th>#</th>
                <th>Destinatario</th>
                <th>Remito</th>
                <th>Contenedor</th>
                <th>Camion/Acoplado</th>
                <th>Cant. Articulos</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              {% for p in grupo.solicitudes %}
                <tr>
                    <td>{{ loop.index }}</td>
                    <td>{{ p.destinatarioExportacion }}</td>
                    <td>{{ p.remitoNumero }}</td>
                    <td>{{ p.numeroContenedor }}</td>
                    <td>{{ p.patenteCamion }}/{{ p.patenteAcoplado }}</td>
                    <td>{{ p.detalles|length }}</td>
                    <td>
                  <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify\"></i></a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\"  href=\"{{ path('sigcer_add_articulos_a_solicitud', { sol : p.id}) }}\">Agregar Productos</a>
                      <a class=\"dropdown-item\"  href=\"{{ path('sigcer_editar_solicitud', { sol : p.id}) }}\">Modificar Solicitud</a>
                      <a class=\"dropdown-item\"  href=\"{{ path('sigcer_delete_solicitud', { sol : p.id}) }}\">Eliminar Solicitud</a>
                    </div>
                    </td>
                    </td>
                </tr>
              {% endfor %}
            </tbody>
          {% endif %}
    </table>
    <div>
        <a href=\"{{ path('sigcer_add_grupos_solicitudes') }}\" class=\"btn btn-success\"><< Volver</a>
    </div>
{% endblock fos_user_content %}
", "@GestionSigcer/addSolicitudAGrupo.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionSigcerBundle\\Resources\\views\\addSolicitudAGrupo.html.twig");
    }
}
