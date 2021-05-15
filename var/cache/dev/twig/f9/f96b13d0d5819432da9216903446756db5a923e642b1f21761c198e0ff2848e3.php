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

/* @GestionFaena/procesoEdit.html.twig */
class __TwigTemplate_411cac6ef23d132eb9d5e2670a79083add70a7aba28193feb29661fae0c19c10 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/procesoEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/procesoEdit.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/procesoEdit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "<br>
<hr>
<span class=\"h5 card-title\">Editar proceso</span>
<hr>

\t

\t    <p class=\"h4 mb-4 text-center\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "nombre", []), "html", null, true);
        echo "</p>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Reporta articulos a...
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Proceso Destino</th>
\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t  \t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "procesosDestino", []));
        foreach ($context['_seq'] as $context["_key"] => $context["send"]) {
            // line 29
            echo "\t\t\t\t\t  \t  <tr>
\t\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["send"], "nombre", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t<td>
\t\t\t\t\t\t  \t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_destination", ["origen" => $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "id", []), "destino" => $this->getAttribute($context["send"], "id", [])]), "html", null, true);
            echo "\" 
\t\t\t\t\t\t  \t\t\t   class=\"btn btn-sm btn-danger col\">
\t\t\t\t\t\t  \t\t\t   \tQuitar
\t\t\t\t\t\t  \t\t\t </a>
\t\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t  </tr>
\t\t\t\t\t\t  
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['send'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary col-6\" data-toggle=\"modal\" data-target=\"#modalSubscriptionForm\">Agregar proceso</button>\t\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t  </div>
\t\t  <br>
\t\t  <div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t    Configurar manejo stock
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Articulo</th>
\t\t\t\t\t\t\t\t\t\t<th>Atributo</th>
\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "manejosStock", []));
        foreach ($context['_seq'] as $context["_key"] => $context["proceso"]) {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["proceso"], "articulo", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["proceso"], "atributo", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_delete_manejo_stock_from_proccess", ["proccess" => $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "id", []), "manejo" => $this->getAttribute($context["proceso"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\">Quitar</a></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proceso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["stock"] ?? $this->getContext($context, "stock")), 'form_start');
        echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stock"] ?? $this->getContext($context, "stock")), "articulo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stock"] ?? $this->getContext($context, "stock")), "atributo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stock"] ?? $this->getContext($context, "stock")), "asignar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["stock"] ?? $this->getContext($context, "stock")), 'form_end');
        echo "
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<br>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Ajusta movimiento
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Articulo</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Tipo Movimiento</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Concepto Movimiento</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Factor Ajuste</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "ajustes", []));
        foreach ($context['_seq'] as $context["_key"] => $context["aj"]) {
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "articulo", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "tipoMovimiento", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "conceptoMovimiento", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "factorAjuste", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_edit_procesos_delete_ajuste", ["ajuste" => $this->getAttribute($context["aj"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t";
        // line 125
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["ajuste"] ?? $this->getContext($context, "ajuste")), 'form_start');
        echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["ajuste"] ?? $this->getContext($context, "ajuste")), "proceso", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>

\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["ajuste"] ?? $this->getContext($context, "ajuste")), "tipoMovimiento", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["ajuste"] ?? $this->getContext($context, "ajuste")), "conceptoMovimiento", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-2\">
\t\t\t\t  \t\t\t\t";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["ajuste"] ?? $this->getContext($context, "ajuste")), "articulo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-2\">
\t\t\t\t  \t\t\t\t";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["ajuste"] ?? $this->getContext($context, "ajuste")), "factorAjuste", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["ajuste"] ?? $this->getContext($context, "ajuste")), "asignar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["ajuste"] ?? $this->getContext($context, "ajuste")), 'form_end');
        echo "\t\t
\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Movimientos Automaticos
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "automaticos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["aj"]) {
            // line 166
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["el"] = "";
            // line 167
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["aj"], "eliminado", [])) {
                // line 168
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["el"] = " (E)";
                // line 169
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 170
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a target=\"_blanck\" href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_edit_grupo_movimientos_automaticos", ["gpo" => $this->getAttribute($context["aj"], "id", [])]), "html", null, true);
            echo "\">Nombre: ";
            echo twig_escape_filter($this->env, $context["aj"], "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["el"] ?? $this->getContext($context, "el")), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_edit_procesos_delete_grupo_movimientos_automatic", ["proc" => $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "id", []), "gpo" => $this->getAttribute($context["aj"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["aj"], "automaticos", []));
            foreach ($context['_seq'] as $context["_key"] => $context["auto"]) {
                // line 178
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["el"] = "";
                // line 179
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["aj"], "eliminado", [])) {
                    // line 180
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["el"] = " (E)";
                    // line 181
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 182
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 184
                echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "ordenEjecucion", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auto"], "articuloAtributoConcepto", []), "vistaEdicion", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["el"] ?? $this->getContext($context, "el")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "procesoDestinoDefault", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 187
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_edit_procesos_delete_automatic", ["proccess" => $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "id", []), "automatic" => $this->getAttribute($context["auto"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t";
        // line 194
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["auto"] ?? $this->getContext($context, "auto")), 'form_start');
        echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["auto"] ?? $this->getContext($context, "auto")), "grupo", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["auto"] ?? $this->getContext($context, "auto")), "grupo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["auto"] ?? $this->getContext($context, "auto")), "articuloAtributoConcepto", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["auto"] ?? $this->getContext($context, "auto")), "articuloAtributoConcepto", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-2\">
\t\t\t\t  \t\t\t\t";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["auto"] ?? $this->getContext($context, "auto")), "ordenEjecucion", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["auto"] ?? $this->getContext($context, "auto")), "ordenEjecucion", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-2\">
\t\t\t\t  \t\t\t\t";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["auto"] ?? $this->getContext($context, "auto")), "procesoDestinoDefault", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["auto"] ?? $this->getContext($context, "auto")), "procesoDestinoDefault", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>

\t\t\t\t  \t\t\t<div class=\"col-2 mt-3\">
\t\t\t\t  \t\t\t\t";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["auto"] ?? $this->getContext($context, "auto")), "guardar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block mt-2"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>\t\t\t\t  \t
\t\t\t\t  \t";
        // line 217
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["auto"] ?? $this->getContext($context, "auto")), 'form_end');
        echo "\t\t
\t
\t\t\t\t\t";
        // line 219
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), 'form_start');
        echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "manual", []), 'label', ["label" => "Manual"]);
        echo "
\t\t\t\t  \t\t\t\t";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "manual", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>

\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "orden", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "orden", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "nombre", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "nombre", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-2\">
\t\t\t\t  \t\t\t\t";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "detalle", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "detalle", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "procesoFaena", []), 'label', ["label" => "Proc."]);
        echo "
\t\t\t\t  \t\t\t\t";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "procesoFaena", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>

\t\t\t\t  \t\t\t<div class=\"col-2 mt-3\">
\t\t\t\t  \t\t\t\t";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "guardar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block mt-2"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>\t\t\t\t  \t
\t\t\t\t  \t";
        // line 247
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), 'form_end');
        echo "\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row mt-4\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Proceso destino defecto..
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Proceso</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 269
        if ($this->getAttribute(($context["proccess"] ?? null), "procesosDestinoDefault", [], "any", true, true)) {
            // line 270
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 271
            echo twig_escape_filter($this->env, $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "procesosDestinoDefault", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"";
            // line 273
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_delete_proceso_default", ["proc" => $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 277
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t";
        // line 279
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["default"] ?? $this->getContext($context, "default")), 'form_start');
        echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["default"] ?? $this->getContext($context, "default")), "proceso", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["default"] ?? $this->getContext($context, "default")), "asignar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t";
        // line 288
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["default"] ?? $this->getContext($context, "default")), 'form_end');
        echo "\t\t
\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Definir articulo base
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Articulo</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 313
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "articuloBase", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_delete_proceso_default", ["proc" => $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-danger\">-</a></td>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t";
        // line 319
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["base"] ?? $this->getContext($context, "base")), 'form_start');
        echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["base"] ?? $this->getContext($context, "base")), "articulo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2\">
\t\t\t\t  \t\t\t\t";
        // line 325
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["base"] ?? $this->getContext($context, "base")), "asignar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t";
        // line 328
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["base"] ?? $this->getContext($context, "base")), 'form_end');
        echo "\t\t
\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t</div>
 \t<br>
 \t\t<div class=\"row mt-4\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Atributo Base
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Atributo</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 352
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "atributoAbstractoBase", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_delete_proceso_default", ["proc" => $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-danger\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t";
        // line 359
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["atrBase"] ?? $this->getContext($context, "atrBase")), 'form_start');
        echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atrBase"] ?? $this->getContext($context, "atrBase")), "atributo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t";
        // line 365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atrBase"] ?? $this->getContext($context, "atrBase")), "asignar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t";
        // line 368
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["atrBase"] ?? $this->getContext($context, "atrBase")), 'form_end');
        echo "\t\t
\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t</div>
\t<hr>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Pasos ejecucion proceso
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Orden Ejecucion</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Grupo Automatico</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "pasos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["aj"]) {
            // line 394
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ( !$this->getAttribute($context["aj"], "eliminado", [])) {
                // line 395
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 397
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_edit_paso_proceso", ["pp" => $this->getAttribute($context["aj"], "id", [])]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 398
                echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "orden", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 401
                echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "detalle", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 402
                echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "grupoMovimiento", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"";
                // line 403
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_edit_procesos_delete_paso_proceso", ["proc" => $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "id", []), "paso" => $this->getAttribute($context["aj"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 406
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t";
        // line 409
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fpaso"] ?? $this->getContext($context, "fpaso")), 'form_start');
        echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\" col-lg-1 col\">
\t\t\t\t  \t\t\t\t";
        // line 412
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "orden", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "orden", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\" col-lg-2 col\">
\t\t\t\t  \t\t\t\t";
        // line 416
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "grupoMovimiento", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 417
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "grupoMovimiento", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-5 mt-2\">
\t\t\t\t  \t\t\t\t";
        // line 420
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "detalle", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 421
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "detalle", []), 'widget', ["attr" => ["class" => "form-control-sm mt-2"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2\">
\t\t\t\t  \t\t\t\t";
        // line 424
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "procesoFaena", []), 'label', ["label" => "Proceso"]);
        echo "
\t\t\t\t  \t\t\t\t";
        // line 425
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "procesoFaena", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2 mt-2\">
\t\t\t\t  \t\t\t\t";
        // line 428
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "guardar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block mt-4"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t";
        // line 432
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fpaso"] ?? $this->getContext($context, "fpaso")), 'form_end');
        echo "\t\t
\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t<hr>
\t\t";
        // line 440
        if ($this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "generaVentas", [])) {
            // line 441
            echo "\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Concepto venta
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Concepto</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Atributo</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Entidad Externa</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 458
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "ventas", []));
            foreach ($context['_seq'] as $context["_key"] => $context["aj"]) {
                // line 459
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 462
                echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "concepto", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 465
                echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "atributo", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 466
                echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "entidadExterna", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"";
                // line 467
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_edit_procesos_delete_paso_proceso", ["proc" => $this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "id", []), "paso" => $this->getAttribute($context["aj"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 470
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t";
            // line 472
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formConcepto"] ?? $this->getContext($context, "formConcepto")), 'form_start');
            echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\" col-lg-3 col\">
\t\t\t\t  \t\t\t\t";
            // line 475
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formConcepto"] ?? $this->getContext($context, "formConcepto")), "entidadExterna", []), 'label');
            echo "
\t\t\t\t  \t\t\t\t";
            // line 476
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formConcepto"] ?? $this->getContext($context, "formConcepto")), "entidadExterna", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
            echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\" col-lg-3 col\">
\t\t\t\t  \t\t\t\t";
            // line 479
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formConcepto"] ?? $this->getContext($context, "formConcepto")), "concepto", []), 'label');
            echo "
\t\t\t\t  \t\t\t\t";
            // line 480
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formConcepto"] ?? $this->getContext($context, "formConcepto")), "concepto", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
            echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2\">
\t\t\t\t  \t\t\t\t";
            // line 483
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formConcepto"] ?? $this->getContext($context, "formConcepto")), "atributo", []), 'label');
            echo "
\t\t\t\t  \t\t\t\t";
            // line 484
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formConcepto"] ?? $this->getContext($context, "formConcepto")), "atributo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
            echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2\">
\t\t\t\t  \t\t\t\t";
            // line 487
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formConcepto"] ?? $this->getContext($context, "formConcepto")), "procesoFaena", []), 'label', ["label" => "Proceso"]);
            echo "
\t\t\t\t  \t\t\t\t";
            // line 488
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formConcepto"] ?? $this->getContext($context, "formConcepto")), "procesoFaena", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
            echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2 mt-2\">
\t\t\t\t  \t\t\t\t";
            // line 491
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formConcepto"] ?? $this->getContext($context, "formConcepto")), "guardar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block mt-4"]]);
            echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t";
            // line 495
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formConcepto"] ?? $this->getContext($context, "formConcepto")), 'form_end');
            echo "\t\t
\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Atributos Ventas
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">

\t\t\t\t  \t";
            // line 510
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fventas"] ?? $this->getContext($context, "fventas")), 'form_start');
            echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\" col-lg-2 col\">
\t\t\t\t  \t\t\t\t";
            // line 513
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fventas"] ?? $this->getContext($context, "fventas")), "atributo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
            echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2 mt-1\">
\t\t\t\t  \t\t\t\t";
            // line 516
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fventas"] ?? $this->getContext($context, "fventas")), "chAtributo", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block"]]);
            echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\" col-lg-2 col\">
\t\t\t\t  \t\t\t\t";
            // line 519
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fventas"] ?? $this->getContext($context, "fventas")), "conceptos", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
            echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\" col-lg-2 col\">
\t\t\t\t  \t\t\t\t";
            // line 522
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fventas"] ?? $this->getContext($context, "fventas")), "entidades", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
            echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-1 mt-1\">
\t\t\t\t  \t\t\t\t";
            // line 525
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fventas"] ?? $this->getContext($context, "fventas")), "chArticulo", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block"]]);
            echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t";
            // line 529
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fventas"] ?? $this->getContext($context, "fventas")), 'form_end');
            echo "\t\t
\t\t\t\t  <hr>
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Entidad Externa</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Concepto Movimiento</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 540
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["proccess"] ?? $this->getContext($context, "proccess")), "entidadesConcepto", []));
            foreach ($context['_seq'] as $context["_key"] => $context["aj"]) {
                // line 541
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 544
                echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "entidad", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 547
                echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "concepto", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t";
        }
        // line 559
        echo "
<div class=\"modal fade\" id=\"modalSubscriptionForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-100 font-weight-bold\">Agregar proceso destino</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body mx-3\">
\t\t\t";
        // line 571
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "sender"]]);
        echo "
\t\t\t";
        // line 572
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t";
        // line 573
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"viewArticle\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-100 font-weight-bold\">Detalle Articulo</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body mx-3 modal-body-article\">

      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 597
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 598
        echo "
<script type=\"text/javascript\">
\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 601
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_art_proc_fan", ["articulo" => "id_article"]);
        echo "\"; 
\t\t\t\t\t\t\t\t\turl = url.replace('id_article', \$(this).data('id'));
\t\t\t\t\t\t\t\t\t\$('.modal-body-article').load(url);
\t\t\t\t\t\t\t\t\t\$('#viewArticle').modal('show');
\t});

\t\$('.sender').submit(function (event){
\t\t\t\t\t\t\t\t\t\t event.preventDefault();
\t\t\t\t\t\t\t\t\t\t var form = \$(this);
\t\t\t\t\t\t\t\t\t\t \$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t \t\tform.serialize(),
\t\t\t\t\t\t\t\t\t\t \t\tfunction(data){
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\tif (data.status)
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t{

\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}


\t\t\t\t\t\t\t\t\t\t \t\t});
\t\t\t\t\t\t\t\t\t\t
\t});
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/procesoEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1137 => 601,  1132 => 598,  1123 => 597,  1090 => 573,  1086 => 572,  1082 => 571,  1068 => 559,  1058 => 551,  1048 => 547,  1042 => 544,  1037 => 541,  1033 => 540,  1019 => 529,  1012 => 525,  1006 => 522,  1000 => 519,  994 => 516,  988 => 513,  982 => 510,  964 => 495,  957 => 491,  951 => 488,  947 => 487,  941 => 484,  937 => 483,  931 => 480,  927 => 479,  921 => 476,  917 => 475,  911 => 472,  907 => 470,  898 => 467,  894 => 466,  890 => 465,  884 => 462,  879 => 459,  875 => 458,  856 => 441,  854 => 440,  843 => 432,  836 => 428,  830 => 425,  826 => 424,  820 => 421,  816 => 420,  810 => 417,  806 => 416,  800 => 413,  796 => 412,  790 => 409,  786 => 407,  780 => 406,  774 => 403,  770 => 402,  766 => 401,  760 => 398,  756 => 397,  752 => 395,  749 => 394,  745 => 393,  717 => 368,  711 => 365,  705 => 362,  699 => 359,  691 => 354,  686 => 352,  659 => 328,  653 => 325,  647 => 322,  641 => 319,  634 => 315,  629 => 313,  601 => 288,  595 => 285,  589 => 282,  583 => 279,  579 => 277,  572 => 273,  567 => 271,  564 => 270,  562 => 269,  537 => 247,  531 => 244,  524 => 240,  520 => 239,  514 => 236,  510 => 235,  504 => 232,  500 => 231,  494 => 228,  490 => 227,  483 => 223,  479 => 222,  473 => 219,  468 => 217,  462 => 214,  455 => 210,  451 => 209,  445 => 206,  441 => 205,  435 => 202,  431 => 201,  425 => 198,  421 => 197,  415 => 194,  411 => 192,  404 => 190,  395 => 187,  391 => 186,  385 => 185,  381 => 184,  377 => 182,  374 => 181,  371 => 180,  368 => 179,  365 => 178,  361 => 177,  356 => 175,  345 => 171,  342 => 170,  339 => 169,  336 => 168,  333 => 167,  330 => 166,  326 => 165,  306 => 148,  299 => 144,  293 => 141,  287 => 138,  281 => 135,  275 => 132,  268 => 128,  262 => 125,  258 => 123,  248 => 119,  243 => 117,  239 => 116,  235 => 115,  231 => 114,  228 => 113,  224 => 112,  196 => 87,  189 => 83,  183 => 80,  177 => 77,  171 => 74,  167 => 72,  158 => 69,  154 => 68,  150 => 67,  147 => 66,  143 => 65,  115 => 39,  101 => 32,  96 => 30,  93 => 29,  89 => 28,  70 => 12,  61 => 5,  52 => 4,  30 => 1,);
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
<span class=\"h5 card-title\">Editar proceso</span>
<hr>

\t

\t    <p class=\"h4 mb-4 text-center\">{{ proccess.nombre }}</p>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Reporta articulos a...
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Proceso Destino</th>
\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t  \t{% for send in proccess.procesosDestino %}
\t\t\t\t\t  \t  <tr>
\t\t\t\t\t\t\t\t<td>{{ send.nombre }}</td>
\t\t\t\t\t\t  \t\t<td>
\t\t\t\t\t\t  \t\t\t<a href=\"{{ path('delete_destination', {origen : proccess.id, destino : send.id}) }}\" 
\t\t\t\t\t\t  \t\t\t   class=\"btn btn-sm btn-danger col\">
\t\t\t\t\t\t  \t\t\t   \tQuitar
\t\t\t\t\t\t  \t\t\t </a>
\t\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t  </tr>
\t\t\t\t\t\t  
\t\t\t\t\t\t{% endfor %}\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary col-6\" data-toggle=\"modal\" data-target=\"#modalSubscriptionForm\">Agregar proceso</button>\t\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t  </div>
\t\t  <br>
\t\t  <div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t    Configurar manejo stock
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Articulo</th>
\t\t\t\t\t\t\t\t\t\t<th>Atributo</th>
\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for proceso in proccess.manejosStock %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ proceso.articulo }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ proceso.atributo }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"{{ path('bd_delete_manejo_stock_from_proccess', {proccess : proccess.id, manejo : proceso.id}) }}\" class=\"btn btn-sm btn-danger\">Quitar</a></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t{{ form_start(stock) }}
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_widget(stock.articulo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_widget(stock.atributo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_widget(stock.asignar, {'attr' : {'class' : 'btn btn-sm btn-success btn-block'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t{{ form_end(stock) }}
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<br>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Ajusta movimiento
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Articulo</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Tipo Movimiento</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Concepto Movimiento</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Factor Ajuste</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% for aj in proccess.ajustes %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ aj.articulo }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ aj.tipoMovimiento }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ aj.conceptoMovimiento }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ aj.factorAjuste }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"{{ path('bd_edit_procesos_delete_ajuste', {ajuste : aj.id}) }}\" class=\"btn btn-sm btn-danger\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t{{ form_start(ajuste) }}
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_widget(ajuste.proceso, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>

\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_widget(ajuste.tipoMovimiento, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_widget(ajuste.conceptoMovimiento, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-2\">
\t\t\t\t  \t\t\t\t{{ form_widget(ajuste.articulo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-2\">
\t\t\t\t  \t\t\t\t{{ form_widget(ajuste.factorAjuste, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t{{ form_widget(ajuste.asignar, {'attr' : {'class' : 'btn btn-sm btn-success btn-block'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t{{ form_end(ajuste) }}\t\t
\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Movimientos Automaticos
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% for aj in proccess.automaticos %}
\t\t\t\t\t\t\t\t\t\t\t{% set el = \"\" %}
\t\t\t\t\t\t\t\t\t\t\t{% if aj.eliminado %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set el = \" (E)\" %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a target=\"_blanck\" href=\"{{ path('bd_edit_grupo_movimientos_automaticos', {gpo : aj.id}) }}\">Nombre: {{ aj }} {{ el }}</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"{{ path('bd_edit_procesos_delete_grupo_movimientos_automatic', {proc : proccess.id, gpo : aj.id }) }}\" class=\"btn btn-sm btn-danger\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t{% for auto in aj.automaticos %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set el = \"\" %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if aj.eliminado %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set el = \" (E)\" %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ auto.ordenEjecucion }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ auto.articuloAtributoConcepto.vistaEdicion }} {{ el }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ auto.procesoDestinoDefault }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"{{ path('bd_edit_procesos_delete_automatic', {proccess : proccess.id, automatic : auto.id }) }}\" class=\"btn btn-sm btn-warning\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t{{ form_start(auto) }}
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_label(auto.grupo) }}
\t\t\t\t  \t\t\t\t{{ form_widget(auto.grupo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_label(auto.articuloAtributoConcepto) }}
\t\t\t\t  \t\t\t\t{{ form_widget(auto.articuloAtributoConcepto, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-2\">
\t\t\t\t  \t\t\t\t{{ form_label(auto.ordenEjecucion) }}
\t\t\t\t  \t\t\t\t{{ form_widget(auto.ordenEjecucion, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-2\">
\t\t\t\t  \t\t\t\t{{ form_label(auto.procesoDestinoDefault) }}
\t\t\t\t  \t\t\t\t{{ form_widget(auto.procesoDestinoDefault, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>

\t\t\t\t  \t\t\t<div class=\"col-2 mt-3\">
\t\t\t\t  \t\t\t\t{{ form_widget(auto.guardar, {'attr' : {'class' : 'btn btn-sm btn-success btn-block mt-2'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>\t\t\t\t  \t
\t\t\t\t  \t{{ form_end(auto) }}\t\t
\t
\t\t\t\t\t{{ form_start(grupoMov) }}
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.manual, 'Manual') }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.manual, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>

\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.orden) }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.orden, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.nombre) }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.nombre, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-2\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.detalle) }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.detalle, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.procesoFaena, 'Proc.') }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.procesoFaena, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>

\t\t\t\t  \t\t\t<div class=\"col-2 mt-3\">
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.guardar, {'attr' : {'class' : 'btn btn-sm btn-success btn-block mt-2'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>\t\t\t\t  \t
\t\t\t\t  \t{{ form_end(grupoMov) }}\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row mt-4\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Proceso destino defecto..
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Proceso</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% if proccess.procesosDestinoDefault is defined %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ proccess.procesosDestinoDefault}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"{{ path('bd_delete_proceso_default', {proc : proccess.id}) }}\" class=\"btn btn-sm btn-danger\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t{{ form_start(default) }}
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_widget(default.proceso, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t{{ form_widget(default.asignar, {'attr' : {'class' : 'btn btn-sm btn-success btn-block'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t{{ form_end(default) }}\t\t
\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Definir articulo base
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Articulo</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ proccess.articuloBase}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"{{ path('bd_delete_proceso_default', {proc : proccess.id}) }}\" class=\"btn btn-sm btn-danger\">-</a></td>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t{{ form_start(base) }}
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_widget(base.articulo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2\">
\t\t\t\t  \t\t\t\t{{ form_widget(base.asignar, {'attr' : {'class' : 'btn btn-sm btn-success btn-block'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t{{ form_end(base) }}\t\t
\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t</div>
 \t<br>
 \t\t<div class=\"row mt-4\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Atributo Base
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Atributo</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ proccess.atributoAbstractoBase}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"{{ path('bd_delete_proceso_default', {proc : proccess.id}) }}\" class=\"btn btn-sm btn-danger\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t{{ form_start(atrBase) }}
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_widget(atrBase.atributo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t{{ form_widget(atrBase.asignar, {'attr' : {'class' : 'btn btn-sm btn-success btn-block'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t{{ form_end(atrBase) }}\t\t
\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t</div>
\t<hr>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Pasos ejecucion proceso
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Orden Ejecucion</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Descripcion</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Grupo Automatico</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% for aj in proccess.pasos %}
\t\t\t\t\t\t\t\t\t\t\t{% if not aj.eliminado %}
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('bd_edit_paso_proceso', { pp : aj.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ aj.orden }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ aj.detalle }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ aj.grupoMovimiento }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"{{ path('bd_edit_procesos_delete_paso_proceso', {proc : proccess.id, paso : aj.id}) }}\" class=\"btn btn-sm btn-danger\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t{{ form_start(fpaso) }}
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\" col-lg-1 col\">
\t\t\t\t  \t\t\t\t{{ form_label(fpaso.orden) }}
\t\t\t\t  \t\t\t\t{{ form_widget(fpaso.orden, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\" col-lg-2 col\">
\t\t\t\t  \t\t\t\t{{ form_label(fpaso.grupoMovimiento) }}
\t\t\t\t  \t\t\t\t{{ form_widget(fpaso.grupoMovimiento, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-5 mt-2\">
\t\t\t\t  \t\t\t\t{{ form_label(fpaso.detalle) }}
\t\t\t\t  \t\t\t\t{{ form_widget(fpaso.detalle, {'attr' : {'class' : 'form-control-sm mt-2'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2\">
\t\t\t\t  \t\t\t\t{{ form_label(fpaso.procesoFaena, 'Proceso') }}
\t\t\t\t  \t\t\t\t{{ form_widget(fpaso.procesoFaena, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2 mt-2\">
\t\t\t\t  \t\t\t\t{{ form_widget(fpaso.guardar, {'attr' : {'class' : 'btn btn-sm btn-success btn-block mt-4'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t{{ form_end(fpaso) }}\t\t
\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t<hr>
\t\t{% if proccess.generaVentas %}
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Concepto venta
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Concepto</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Atributo</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Entidad Externa</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% for aj in proccess.ventas %}
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ aj.concepto }}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ aj.atributo }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ aj.entidadExterna }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"{{ path('bd_edit_procesos_delete_paso_proceso', {proc : proccess.id, paso : aj.id}) }}\" class=\"btn btn-sm btn-danger\">-</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t{{ form_start(formConcepto) }}
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\" col-lg-3 col\">
\t\t\t\t  \t\t\t\t{{ form_label(formConcepto.entidadExterna) }}
\t\t\t\t  \t\t\t\t{{ form_widget(formConcepto.entidadExterna, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\" col-lg-3 col\">
\t\t\t\t  \t\t\t\t{{ form_label(formConcepto.concepto) }}
\t\t\t\t  \t\t\t\t{{ form_widget(formConcepto.concepto, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2\">
\t\t\t\t  \t\t\t\t{{ form_label(formConcepto.atributo) }}
\t\t\t\t  \t\t\t\t{{ form_widget(formConcepto.atributo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2\">
\t\t\t\t  \t\t\t\t{{ form_label(formConcepto.procesoFaena, 'Proceso') }}
\t\t\t\t  \t\t\t\t{{ form_widget(formConcepto.procesoFaena, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2 mt-2\">
\t\t\t\t  \t\t\t\t{{ form_widget(formConcepto.guardar, {'attr' : {'class' : 'btn btn-sm btn-success btn-block mt-4'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t{{ form_end(formConcepto) }}\t\t
\t
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Atributos Ventas
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">

\t\t\t\t  \t{{ form_start(fventas) }}
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\" col-lg-2 col\">
\t\t\t\t  \t\t\t\t{{ form_widget(fventas.atributo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-2 mt-1\">
\t\t\t\t  \t\t\t\t{{ form_widget(fventas.chAtributo, {'attr' : {'class' : 'btn btn-sm btn-success btn-block'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\" col-lg-2 col\">
\t\t\t\t  \t\t\t\t{{ form_widget(fventas.conceptos, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\" col-lg-2 col\">
\t\t\t\t  \t\t\t\t{{ form_widget(fventas.entidades, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col-lg-1 mt-1\">
\t\t\t\t  \t\t\t\t{{ form_widget(fventas.chArticulo, {'attr' : {'class' : 'btn btn-sm btn-success btn-block'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t{{ form_end(fventas) }}\t\t
\t\t\t\t  <hr>
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Entidad Externa</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Concepto Movimiento</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% for aj in proccess.entidadesConcepto %}
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ aj.entidad }}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ aj.concepto }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  </div>
\t\t  </div>
\t\t</div>
\t\t{% endif %}

<div class=\"modal fade\" id=\"modalSubscriptionForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-100 font-weight-bold\">Agregar proceso destino</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body mx-3\">
\t\t\t{{ form_start(form, {'attr': {'class': 'sender'}}) }}
\t\t\t{{ form_widget(form) }}
\t\t\t{{ form_end(form) }}
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"viewArticle\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-100 font-weight-bold\">Detalle Articulo</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body mx-3 modal-body-article\">

      </div>
    </div>
  </div>
</div>
{% endblock fos_user_content %}

{% block javascripts %}

<script type=\"text/javascript\">
\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"{{ path('bd_view_art_proc_fan', {'articulo' : 'id_article'}) }}\"; 
\t\t\t\t\t\t\t\t\turl = url.replace('id_article', \$(this).data('id'));
\t\t\t\t\t\t\t\t\t\$('.modal-body-article').load(url);
\t\t\t\t\t\t\t\t\t\$('#viewArticle').modal('show');
\t});

\t\$('.sender').submit(function (event){
\t\t\t\t\t\t\t\t\t\t event.preventDefault();
\t\t\t\t\t\t\t\t\t\t var form = \$(this);
\t\t\t\t\t\t\t\t\t\t \$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t \t\tform.serialize(),
\t\t\t\t\t\t\t\t\t\t \t\tfunction(data){
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\tif (data.status)
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t{

\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}


\t\t\t\t\t\t\t\t\t\t \t\t});
\t\t\t\t\t\t\t\t\t\t
\t});
</script>

{% endblock %}
", "@GestionFaena/procesoEdit.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\procesoEdit.html.twig");
    }
}
