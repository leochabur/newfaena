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

/* @GestionFaena/gestionBD/atributoABMV2Update.html.twig */
class __TwigTemplate_c67a234c5dc4f776eda6f3dee0fd33006342e459fdc8b21ed0e474891426b839 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/gestionBD/atributoABMV2Update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 5
        echo "\t<br>
\t<hr>
<spam class=\"h5 mb-5\">Modificar atributos de articulos</spam>
<hr>

\t<div class=\"form-row\">
\t\t<div class=\"col-6 h5\">
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["art"] ?? null), "vistaEdicion", []), "html", null, true);
        echo "
\t\t</div>
\t</div>

\t<table class=\"table table-bordered table-hover table-striped table-sm\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Atributo</th>
\t\t\t\t<th>Calculo</th>
\t\t\t\t<th>Acumula</th>
\t\t\t\t<th>Promedia</th>
\t\t\t\t<th>Decimales</th>
\t\t\t\t<th>Posicion</th>
\t\t\t\t<th></th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["art"] ?? null), "atributos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["atrib"]) {
            // line 31
            echo "\t\t\t\t";
            if ( !$this->getAttribute($context["atrib"], "eliminado", [])) {
                // line 32
                echo "\t\t\t\t\t";
                $context["atr"] = $this->getAttribute(($context["formsAtr"] ?? null), $this->getAttribute($context["atrib"], "id", []), [], "array");
                // line 33
                echo "\t\t\t\t\t";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["atr"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "editatr"]]);
                echo "
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 35
                echo twig_escape_filter($this->env, $context["atrib"], "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["atrib"], "calculo", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 37
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? null), "acumula", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 38
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? null), "promedia", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? null), "decimales", []), 'widget', ["attr" => ["class" => "form-control-sm col-4"]]);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 40
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? null), "posicion", []), 'widget', ["attr" => ["class" => "form-control-sm col-4"]]);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 41
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? null), "guardar", []), 'widget', ["attr" => ["class" => "btn-sm btn-warning"]]);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 42
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["atr"] ?? null), "delete", []), 'widget', ["attr" => ["class" => "btn-sm btn-danger btn-delete", "data-id" => $this->getAttribute($context["atrib"], "id", [])]]);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
                // line 44
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["atr"] ?? null), 'form_end');
                echo "
\t\t\t\t";
            }
            // line 46
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atrib'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t</tbody>
\t</table>
\t<button class=\"btn btn-success back\"><< Volver</button>

";
    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        // line 54
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t\t\$('.back').click(function(){window.history.back();});
\t\t\t\t\t\t\t\t\tvar route = \"";
        // line 58
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
\t\t});
\t</script>

";
    }

    public function getTemplateName()
    {
        return "@GestionFaena/gestionBD/atributoABMV2Update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 58,  144 => 54,  141 => 53,  133 => 47,  127 => 46,  122 => 44,  117 => 42,  113 => 41,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  83 => 33,  80 => 32,  77 => 31,  73 => 30,  52 => 12,  43 => 5,  40 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@GestionFaena/gestionBD/atributoABMV2Update.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\atributoABMV2Update.html.twig");
    }
}
