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

/* @GestionSigcer/addArticulo.html.twig */
class __TwigTemplate_ca53841b3211075725a030858ce13997d8e9e8b8b49df3d4a66540ff92366b49 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionSigcer/addArticulo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionSigcer/addArticulo.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionSigcer/addArticulo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "<br>
<hr>
<span class=\"h5 card-title\">Agregar articulo a la solicitud</span>
<hr>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "sussecc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "\t<div class=\"alert alert-success\" role=\"alert\">
\t  ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  ";
        if ( !$this->getAttribute($this->getAttribute(($context["sol"] ?? $this->getContext($context, "sol")), "grupo", []), "exportacion", [])) {
            // line 13
            echo "      <div class=\"\">
      \t";
            // line 14
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
          <div class=\"form-row\">
            <div class=\"col-6\">
              ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "solicitud", []), 'label');
            echo "
              ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "solicitud", []), 'widget');
            echo "
            </div>
          </div>
          <br>
          <div class=\"form-row\">
            <div class=\"col-3\">
              ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "articulo", []), 'label');
            echo "
              ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "articulo", []), 'widget');
            echo "
            </div>
            <div class=\"col-3\">
              ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "envasePrimario", []), 'label');
            echo "
              ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "envasePrimario", []), 'widget');
            echo "
            </div>
            <div class=\"col-3\">
              ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "envaseSecundario", []), 'label');
            echo "
              ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "envaseSecundario", []), 'widget');
            echo "
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-3\">
              ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cantidad", []), 'label');
            echo "
              ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cantidad", []), 'widget');
            echo "
            </div>
            <div class=\"col-3\">
              ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pesoNeto", []), 'label');
            echo "
              ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pesoNeto", []), 'widget');
            echo "
            </div>
            <div class=\"col-3\">
              ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pesoBruto", []), 'label');
            echo "
              ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pesoBruto", []), 'widget');
            echo "
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-6\">
              ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tropa", []), 'label');
            echo "
              ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tropa", []), 'widget');
            echo "
            </div>
            <div class=\"col-3\">
              ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "certificadoOrigen", []), 'label');
            echo "
              ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "certificadoOrigen", []), 'widget');
            echo "
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col\">
              ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
            echo "
            </div>
          </div>
      \t";
            // line 65
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
          <br>
      </div>
    ";
        } else {
            // line 69
            echo "      <div class=\"\">
        ";
            // line 70
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
          <div class=\"form-row\">
            <div class=\"col-6\">
              ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "solicitud", []), 'label');
            echo "
              ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "solicitud", []), 'widget');
            echo "
            </div>
          </div>
          <br>
          <div class=\"form-row\">
            <div class=\"col-6\">
              ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "producto", []), 'label');
            echo "
              ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "producto", []), 'widget');
            echo "
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-6\">
              ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "archivo", []), 'label');
            echo "
              ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "archivo", []), 'widget');
            echo "
            </div>
            ";
            // line 107
            echo "          </div>
          <div class=\"form-row\">
            <div class=\"col\">
              ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
            echo "
            </div>
          </div>
        ";
            // line 113
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
          <br>
      </div>
    ";
        }
        // line 117
        echo "    <hr>
    <span class=\"h5\">Articulos asignados a la solicitud => ";
        // line 118
        echo twig_escape_filter($this->env, ($context["sol"] ?? $this->getContext($context, "sol")), "html", null, true);
        echo "</span>
    <hr>
    ";
        // line 120
        if ( !$this->getAttribute($this->getAttribute(($context["sol"] ?? $this->getContext($context, "sol")), "grupo", []), "exportacion", [])) {
            // line 121
            echo "        <table class=\"table table-striped table-bordered table-hover table-sm \">
            <thead>
              <tr>
                <th>#</th>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>P. Neto</th>
                <th>P. Bruto</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sol"] ?? $this->getContext($context, "sol")), "detalles", []));
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
                // line 134
                echo "                <tr>
                    <td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "articulo", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "cantidad", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "pesoNeto", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "pesoBruto", []), "html", null, true);
                echo "</td>
                    <td>
                  <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify\"></i></a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\"  href=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_articulos_editar", ["art" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\">Editar Producto</a>
                      <a class=\"dropdown-item\"  href=\"";
                // line 144
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_delete_detalle", ["art" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\">Eliminar Producto</a>
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
            // line 150
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 153
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_delete_all_detalle", ["sol" => $this->getAttribute(($context["sol"] ?? $this->getContext($context, "sol")), "id", [])]), "html", null, true);
            echo "\" method=\"post\" class=\"form-delete\">
            <input type=\"submit\" class=\"btn btn-danger delete-all\" value=\"Eliminar Todos\"/>
        </form>
        <table class=\"table table-striped table-bordered table-hover table-sm \">
            <thead>
              <tr>
                <th>#</th>
                <th>Articulo</th>
                <th>Lote</th>
                <th>F. Faena</th>
                <th>F. Elab.</th>
                <th>F. Vto</th>
                <th>Cantidad</th>
                <th>P. Neto</th>
                <th>P. Bruto</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["sol"] ?? $this->getContext($context, "sol")), "detalles", []));
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
                // line 173
                echo "                <tr>
                    <td>";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "articulo", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "tropa", []), "lote", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 177
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "tropa", []), "fechaElaboracion", []), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 178
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "tropa", []), "fechaFaena", []), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 179
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "tropa", []), "fechaVto", []), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "cantidad", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "pesoNeto", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "pesoBruto", []), "html", null, true);
                echo "</td>
                    <td>
                  <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify\"></i></a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\"  href=\"";
                // line 186
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_articulos_editar", ["art" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\">Editar Producto</a>
                      <a class=\"dropdown-item\"  href=\"";
                // line 187
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_delete_detalle", ["art" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\">Eliminar Producto</a>
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
            // line 193
            echo "            </tbody>
        </table>
    ";
        }
        // line 196
        echo "    <div>
        <a href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_solictud_a_grupo", ["gpo" => $this->getAttribute($this->getAttribute(($context["sol"] ?? $this->getContext($context, "sol")), "grupo", []), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-success\"><< Volver</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 200
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 201
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">

          \$('.delete-all').click(function(event){
                                            event.preventDefault();
                                            var btn = \$(this);
                                            bootbox.confirm({
                                                              message: 'Seguro eliminar todos los articulos cargados a la solicitud?',
                                                              size: \"large\",
                                                              buttons: {
                                                                  confirm: {
                                                                      label: 'Si, eliminar',
                                                                      className: 'btn-success'
                                                                  },
                                                                  cancel: {
                                                                      label: 'No, cancelar',
                                                                      className: 'btn-danger'
                                                                  }
                                                              },
                                                              callback: function (result) 
                                                              {
                                                                  if (result)
                                                                  {
                                                                    \$(\".form-delete\").submit();
                                                                  }
                                                              }
                                                          });
                                            
          });
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionSigcer/addArticulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 201,  491 => 200,  478 => 197,  475 => 196,  470 => 193,  450 => 187,  446 => 186,  439 => 182,  435 => 181,  431 => 180,  427 => 179,  423 => 178,  419 => 177,  415 => 176,  411 => 175,  407 => 174,  404 => 173,  387 => 172,  364 => 153,  359 => 150,  339 => 144,  335 => 143,  328 => 139,  324 => 138,  320 => 137,  316 => 136,  312 => 135,  309 => 134,  292 => 133,  278 => 121,  276 => 120,  271 => 118,  268 => 117,  261 => 113,  255 => 110,  250 => 107,  245 => 87,  241 => 86,  233 => 81,  229 => 80,  220 => 74,  216 => 73,  210 => 70,  207 => 69,  200 => 65,  194 => 62,  186 => 57,  182 => 56,  176 => 53,  172 => 52,  164 => 47,  160 => 46,  154 => 43,  150 => 42,  144 => 39,  140 => 38,  132 => 33,  128 => 32,  122 => 29,  118 => 28,  112 => 25,  108 => 24,  99 => 18,  95 => 17,  89 => 14,  86 => 13,  83 => 12,  74 => 9,  71 => 8,  67 => 7,  61 => 3,  52 => 2,  30 => 1,);
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
<span class=\"h5 card-title\">Agregar articulo a la solicitud</span>
<hr>
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
  {% if not sol.grupo.exportacion %}
      <div class=\"\">
      \t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
          <div class=\"form-row\">
            <div class=\"col-6\">
              {{ form_label(form.solicitud) }}
              {{ form_widget(form.solicitud) }}
            </div>
          </div>
          <br>
          <div class=\"form-row\">
            <div class=\"col-3\">
              {{ form_label(form.articulo) }}
              {{ form_widget(form.articulo) }}
            </div>
            <div class=\"col-3\">
              {{ form_label(form.envasePrimario) }}
              {{ form_widget(form.envasePrimario) }}
            </div>
            <div class=\"col-3\">
              {{ form_label(form.envaseSecundario) }}
              {{ form_widget(form.envaseSecundario) }}
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-3\">
              {{ form_label(form.cantidad) }}
              {{ form_widget(form.cantidad) }}
            </div>
            <div class=\"col-3\">
              {{ form_label(form.pesoNeto) }}
              {{ form_widget(form.pesoNeto) }}
            </div>
            <div class=\"col-3\">
              {{ form_label(form.pesoBruto) }}
              {{ form_widget(form.pesoBruto) }}
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-6\">
              {{ form_label(form.tropa) }}
              {{ form_widget(form.tropa) }}
            </div>
            <div class=\"col-3\">
              {{ form_label(form.certificadoOrigen) }}
              {{ form_widget(form.certificadoOrigen) }}
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col\">
              {{ form_widget(form.guardar) }}
            </div>
          </div>
      \t{{ form_end(form) }}
          <br>
      </div>
    {% else %}
      <div class=\"\">
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
          <div class=\"form-row\">
            <div class=\"col-6\">
              {{ form_label(form.solicitud) }}
              {{ form_widget(form.solicitud) }}
            </div>
          </div>
          <br>
          <div class=\"form-row\">
            <div class=\"col-6\">
              {{ form_label(form.producto) }}
              {{ form_widget(form.producto) }}
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-6\">
              {{ form_label(form.archivo) }}
              {{ form_widget(form.archivo) }}
            </div>
            {#
            <div class=\"col-3\">
              {{ form_label(form.fecha, 'Fecha Faena') }}
              {{ form_widget(form.fecha) }}
            </div>
            <div class=\"col-3\">
              {{ form_label(form.cant, 'Cantidad') }}
              {{ form_widget(form.cant) }}
            </div>
            <div class=\"col-3\">
              {{ form_label(form.pbruto, 'Peso Bruto') }}
              {{ form_widget(form.pbruto) }}
            </div>
            <div class=\"col-3\">
              {{ form_label(form.pneto, 'Peso Neto') }}
              {{ form_widget(form.pneto) }}
            </div>
            #}
          </div>
          <div class=\"form-row\">
            <div class=\"col\">
              {{ form_widget(form.guardar) }}
            </div>
          </div>
        {{ form_end(form) }}
          <br>
      </div>
    {% endif %}
    <hr>
    <span class=\"h5\">Articulos asignados a la solicitud => {{ sol }}</span>
    <hr>
    {%  if not sol.grupo.exportacion %}
        <table class=\"table table-striped table-bordered table-hover table-sm \">
            <thead>
              <tr>
                <th>#</th>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>P. Neto</th>
                <th>P. Bruto</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              {% for p in sol.detalles %}
                <tr>
                    <td>{{ loop.index }}</td>
                    <td>{{ p.articulo }}</td>
                    <td>{{ p.cantidad}}</td>
                    <td>{{ p.pesoNeto }}</td>
                    <td>{{ p.pesoBruto }}</td>
                    <td>
                  <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify\"></i></a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\"  href=\"{{ path('sigcer_add_articulos_editar', { art : p.id}) }}\">Editar Producto</a>
                      <a class=\"dropdown-item\"  href=\"{{ path('sigcer_delete_detalle', { art : p.id}) }}\">Eliminar Producto</a>
                    </div>
                    </td>
                    </td>
                </tr>
              {% endfor %}
            </tbody>
        </table>
    {% else %}
        <form action=\"{{ path('sigcer_delete_all_detalle', { sol : sol.id }) }}\" method=\"post\" class=\"form-delete\">
            <input type=\"submit\" class=\"btn btn-danger delete-all\" value=\"Eliminar Todos\"/>
        </form>
        <table class=\"table table-striped table-bordered table-hover table-sm \">
            <thead>
              <tr>
                <th>#</th>
                <th>Articulo</th>
                <th>Lote</th>
                <th>F. Faena</th>
                <th>F. Elab.</th>
                <th>F. Vto</th>
                <th>Cantidad</th>
                <th>P. Neto</th>
                <th>P. Bruto</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              {% for p in sol.detalles %}
                <tr>
                    <td>{{ loop.index }}</td>
                    <td>{{ p.articulo }}</td>
                    <td>{{ p.tropa.lote }}</td>
                    <td>{{ p.tropa.fechaElaboracion | date('d/m/Y') }}</td>
                    <td>{{ p.tropa.fechaFaena | date('d/m/Y') }}</td>
                    <td>{{ p.tropa.fechaVto | date('d/m/Y') }}</td>
                    <td>{{ p.cantidad}}</td>
                    <td>{{ p.pesoNeto }}</td>
                    <td>{{ p.pesoBruto }}</td>
                    <td>
                  <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify\"></i></a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\"  href=\"{{ path('sigcer_add_articulos_editar', { art : p.id}) }}\">Editar Producto</a>
                      <a class=\"dropdown-item\"  href=\"{{ path('sigcer_delete_detalle', { art : p.id}) }}\">Eliminar Producto</a>
                    </div>
                    </td>
                    </td>
                </tr>
              {% endfor %}
            </tbody>
        </table>
    {% endif %}
    <div>
        <a href=\"{{ path('sigcer_add_solictud_a_grupo', {gpo : sol.grupo.id}) }}\" class=\"btn btn-success\"><< Volver</a>
    </div>
{% endblock fos_user_content %}
{% block javascripts %}
 {{ parent() }}
<script type=\"text/javascript\">

          \$('.delete-all').click(function(event){
                                            event.preventDefault();
                                            var btn = \$(this);
                                            bootbox.confirm({
                                                              message: 'Seguro eliminar todos los articulos cargados a la solicitud?',
                                                              size: \"large\",
                                                              buttons: {
                                                                  confirm: {
                                                                      label: 'Si, eliminar',
                                                                      className: 'btn-success'
                                                                  },
                                                                  cancel: {
                                                                      label: 'No, cancelar',
                                                                      className: 'btn-danger'
                                                                  }
                                                              },
                                                              callback: function (result) 
                                                              {
                                                                  if (result)
                                                                  {
                                                                    \$(\".form-delete\").submit();
                                                                  }
                                                              }
                                                          });
                                            
          });
</script>

{% endblock  %}", "@GestionSigcer/addArticulo.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionSigcerBundle\\Resources\\views\\addArticulo.html.twig");
    }
}
