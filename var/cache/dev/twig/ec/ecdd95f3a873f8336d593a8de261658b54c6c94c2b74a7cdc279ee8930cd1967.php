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

/* GestionFaenaBundle:gestionBD:atributoABMV2Update.html.twig */
class __TwigTemplate_d39b09b0d51fd31b561e8abf821095397b5744f495bafb04ae2c8ae76032d682 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:gestionBD:atributoABMV2Update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:gestionBD:atributoABMV2Update.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:gestionBD:atributoABMV2Update.html.twig", 1);
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
        echo "\t<br>
\t<hr>
<spam class=\"h5 mb-5\">Modificar atributos de articulos</spam>
<hr>

\t<div class=\"form-row\">
\t\t<div class=\"col-6 h5\">
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["art"] ?? $this->getContext($context, "art")), "vistaEdicion", []), "html", null, true);
        echo "
\t\t</div>
\t</div>
\t<hr>
\t\t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fupd"] ?? $this->getContext($context, "fupd")), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "updart"]]);
        echo "
\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fupd"] ?? $this->getContext($context, "fupd")), "articulos", []), 'widget', ["attr" => ["class" => "form-control-sm col-lg-4"]]);
        echo "
\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fupd"] ?? $this->getContext($context, "fupd")), "update", []), 'widget', ["attr" => ["class" => "btn btn-primary btn-sm"]]);
        echo "
\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fupd"] ?? $this->getContext($context, "fupd")), 'form_end');
        echo "
\t<hr>
\t<table class=\"table table-bordered table-hover table-striped table-sm\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Atributo</th>
\t\t\t\t<th>Tipo</th>
\t\t\t\t<th>Acumula</th>
\t\t\t\t<th>Admite Cero</th>
\t\t\t\t<th>Promedia</th>
\t\t\t\t<th>Redondea</th>
\t\t\t\t<th>Espejo</th>
\t\t\t\t<th>Mostrar al cargar</th>
\t\t\t\t<th>Atr. Base</th>
\t\t\t\t<th>Mostrar</th>
\t\t\t\t<th>Decimales</th>
\t\t\t\t<th>Posicion</th>
\t\t\t\t<th></th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["art"] ?? $this->getContext($context, "art")), "atributos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["atrib"]) {
            // line 42
            echo "\t\t\t\t";
            if ( !$this->getAttribute($context["atrib"], "eliminado", [])) {
                // line 43
                echo "\t\t\t\t\t";
                $context["atr"] = $this->getAttribute(($context["formsAtr"] ?? $this->getContext($context, "formsAtr")), $this->getAttribute($context["atrib"], "id", []), [], "array");
                // line 44
                echo "\t\t\t\t\t";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["atr"] ?? $this->getContext($context, "atr")), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "editatr"]]);
                echo "
\t\t\t\t\t<tr class=\"h6 small\">
\t\t\t\t\t\t<td title=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["atrib"], "calculo", []), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["atrib"], "atributoAbstracto", []), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_editar_factor_calculo", ["atr" => $this->getAttribute($context["atrib"], "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["atrib"], "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t<td title=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["atrib"], "calculo", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["atrib"], "tipo", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 48
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "acumula", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 49
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "admiteCero", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 50
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "promedia", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 51
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "redondea", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 52
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "espejo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 53
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "mostrarAlCargar", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 54
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "atributoBase", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 55
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "mostrar", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 56
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "decimales", []), 'widget', ["attr" => ["class" => "form-control-sm col-4"]]);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 57
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "posicion", []), 'widget', ["attr" => ["class" => "form-control-sm col-5"]]);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 58
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "guardar", []), 'widget', ["attr" => ["class" => "btn-sm btn-warning"]]);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 59
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "delete", []), 'widget', ["attr" => ["class" => "btn-sm btn-danger btn-delete", "data-id" => $this->getAttribute($context["atrib"], "id", [])]]);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
                // line 61
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["atr"] ?? $this->getContext($context, "atr")), 'form_end');
                echo "
\t\t\t\t";
            }
            // line 63
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atrib'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t</tbody>
\t</table>
\t";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAdd"] ?? $this->getContext($context, "formAdd")), 'form_start');
        echo "
\t\tProcesos Destino
\t\t<div class=\"form-row\">
\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAdd"] ?? $this->getContext($context, "formAdd")), "proceso", []), 'widget', ["attr" => ["class" => "form-control-sm col-lg-6 mt-2"]]);
        echo "
\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAdd"] ?? $this->getContext($context, "formAdd")), "guardar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-default col-lg-1 assign"]]);
        echo "
\t\t</div>
\t";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAdd"] ?? $this->getContext($context, "formAdd")), 'form_end');
        echo "
\tProcesos destino asignados
\t<table class=\"table table-bordered table-hover table-striped table-sm\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Proceso</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["art"] ?? $this->getContext($context, "art")), "procesosDestino", []));
        foreach ($context['_seq'] as $context["_key"] => $context["proc"]) {
            // line 83
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 84
            echo twig_escape_filter($this->env, $context["proc"], "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_remove_proceso_default_art_atr_con", ["art" => $this->getAttribute(($context["art"] ?? $this->getContext($context, "art")), "id", []), "proc" => $this->getAttribute($context["proc"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\">Quitar</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "\t\t</tbody>
\t</table>
\t<button class=\"btn btn-success back\"><< Volver</button>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){

\t\t\t\t\t\t\t\t\t\$('.updart').submit(function (event){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar form = \$(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   form.serialize(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\talert(data);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   });
\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\$('.back').click(function(){window.history.back();});
\t\t\t\t\t\t\t\t\tvar route = \"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_delete_atributo", ["atr" => "_ID_ATR"]);
        echo "\";
\t\t\t\t\t\t\t\t\t\$('.editatr').submit(function(event){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar form = \$(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   form.serialize(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\talert(data.posicion);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   });
\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\$('.btn-delete').click(function(event){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    message: \"Seguro eliminar el atributo?\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        if (result){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(route.replace('_ID_ATR', btn.data('id')),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\$('.assign').click(function(event){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar form = btn.closest('form');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   form.serialize(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t});
\t\t});
\t</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:gestionBD:atributoABMV2Update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 110,  281 => 95,  272 => 94,  258 => 88,  249 => 85,  245 => 84,  242 => 83,  238 => 82,  225 => 72,  220 => 70,  216 => 69,  210 => 66,  206 => 64,  200 => 63,  195 => 61,  190 => 59,  186 => 58,  182 => 57,  178 => 56,  174 => 55,  170 => 54,  166 => 53,  162 => 52,  158 => 51,  154 => 50,  150 => 49,  146 => 48,  140 => 47,  130 => 46,  124 => 44,  121 => 43,  118 => 42,  114 => 41,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  70 => 12,  61 => 5,  52 => 4,  30 => 1,);
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
\t<br>
\t<hr>
<spam class=\"h5 mb-5\">Modificar atributos de articulos</spam>
<hr>

\t<div class=\"form-row\">
\t\t<div class=\"col-6 h5\">
\t\t\t{{  art.vistaEdicion }}
\t\t</div>
\t</div>
\t<hr>
\t\t{{ form_start(fupd, {'attr': {'novalidate': 'novalidate', 'class': 'updart'}}) }}
\t\t{{ form_widget(fupd.articulos, {'attr' : {'class' : 'form-control-sm col-lg-4'}}) }}
\t\t{{ form_widget(fupd.update, {'attr' : {'class' : 'btn btn-primary btn-sm'}}) }}
\t\t{{ form_end(fupd) }}
\t<hr>
\t<table class=\"table table-bordered table-hover table-striped table-sm\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Atributo</th>
\t\t\t\t<th>Tipo</th>
\t\t\t\t<th>Acumula</th>
\t\t\t\t<th>Admite Cero</th>
\t\t\t\t<th>Promedia</th>
\t\t\t\t<th>Redondea</th>
\t\t\t\t<th>Espejo</th>
\t\t\t\t<th>Mostrar al cargar</th>
\t\t\t\t<th>Atr. Base</th>
\t\t\t\t<th>Mostrar</th>
\t\t\t\t<th>Decimales</th>
\t\t\t\t<th>Posicion</th>
\t\t\t\t<th></th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for atrib in art.atributos %}
\t\t\t\t{% if not atrib.eliminado %}
\t\t\t\t\t{% set atr = formsAtr[atrib.id] %}
\t\t\t\t\t{{ form_start(atr, {'attr' : {'novalidate' : 'novalidate', 'class' : 'editatr'}}) }}
\t\t\t\t\t<tr class=\"h6 small\">
\t\t\t\t\t\t<td title=\"{{ atrib.calculo }} - {{ atrib.atributoAbstracto }}\"><a href=\"{{ path('bd_editar_factor_calculo', {atr : atrib.id})}}\">{{ atrib }}</a></td>
\t\t\t\t\t\t<td title=\"{{ atrib.calculo }}\">{{ atrib.tipo }}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{ form_widget(atr.acumula, {'attr' : {'class' : 'form-control-sm'}}) }}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{ form_widget(atr.admiteCero, {'attr' : {'class' : 'form-control-sm'}}) }}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{ form_widget(atr.promedia, {'attr' : {'class' : 'form-control-sm'}}) }}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{ form_widget(atr.redondea, {'attr' : {'class' : 'form-control-sm'}}) }}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{ form_widget(atr.espejo, {'attr' : {'class' : 'form-control-sm'}}) }}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{ form_widget(atr.mostrarAlCargar, {'attr' : {'class' : 'form-control-sm'}}) }}</td>
\t\t\t\t\t\t<td>{{ form_widget(atr.atributoBase, {'attr' : {'class' : 'form-control-sm'}}) }}</td>
\t\t\t\t\t\t<td class=\"text-center\">{{ form_widget(atr.mostrar, {'attr' : {'class' : 'form-control-sm'}}) }}</td>
\t\t\t\t\t\t<td>{{ form_widget(atr.decimales, {'attr' : {'class' : 'form-control-sm col-4'}}) }}</td>
\t\t\t\t\t\t<td>{{ form_widget(atr.posicion, {'attr' : {'class' : 'form-control-sm col-5'}}) }}</td>
\t\t\t\t\t\t<td>{{ form_widget(atr.guardar, {'attr' : {'class' : 'btn-sm btn-warning'}}) }}</td>
\t\t\t\t\t\t<td>{{ form_widget(atr.delete, {'attr' : {'class' : 'btn-sm btn-danger btn-delete', 'data-id' : atrib.id}}) }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{{ form_end(atr) }}
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t{{ form_start(formAdd) }}
\t\tProcesos Destino
\t\t<div class=\"form-row\">
\t\t\t{{ form_widget(formAdd.proceso, {'attr' : {'class' : 'form-control-sm col-lg-6 mt-2'}}) }}
\t\t\t{{ form_widget(formAdd.guardar, {'attr' : {'class' : 'btn btn-sm btn-default col-lg-1 assign'}}) }}
\t\t</div>
\t{{ form_end(formAdd) }}
\tProcesos destino asignados
\t<table class=\"table table-bordered table-hover table-striped table-sm\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Proceso</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t\t{% for proc in art.procesosDestino %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ proc }}</td>
\t\t\t\t\t\t<td><a href=\"{{ path('bd_remove_proceso_default_art_atr_con', { art : art.id, proc : proc.id})}}\" class=\"btn btn-sm btn-danger\">Quitar</a></td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t<button class=\"btn btn-success back\"><< Volver</button>

{% endblock fos_user_content %}

{% block javascripts %}
\t{{ parent() }}
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){

\t\t\t\t\t\t\t\t\t\$('.updart').submit(function (event){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar form = \$(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   form.serialize(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\talert(data);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   });
\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\$('.back').click(function(){window.history.back();});
\t\t\t\t\t\t\t\t\tvar route = \"{{ path('bd_delete_atributo', {atr : '_ID_ATR'}) }}\";
\t\t\t\t\t\t\t\t\t\$('.editatr').submit(function(event){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar form = \$(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   form.serialize(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\talert(data.posicion);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   });
\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\$('.btn-delete').click(function(event){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    message: \"Seguro eliminar el atributo?\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        if (result){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(route.replace('_ID_ATR', btn.data('id')),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\$('.assign').click(function(event){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar form = btn.closest('form');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   form.serialize(),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t});
\t\t});
\t</script>

{% endblock %}", "GestionFaenaBundle:gestionBD:atributoABMV2Update.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/gestionBD/atributoABMV2Update.html.twig");
    }
}
