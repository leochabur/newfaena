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

/* GestionFaenaBundle:gestionBD:atributoABMV2.html.twig */
class __TwigTemplate_ba43068cc0722822917481d6d8d5c22a5273069ec39138090152f405ea774ee3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:gestionBD:atributoABMV2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 5
        echo "\t<br>
\t<hr>
<spam class=\"h5 mb-5\">Editar articulos generados</spam>
<hr>
\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t<div class=\"form-row\">
\t\t<div class=\"col-6\">
\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "articulos", []), 'label');
        echo "
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "articulos", []), 'widget', ["attr" => ["class" => "articulos"]]);
        echo "
\t\t\t
\t\t</div>
\t</div>
\t<div class=\"form-row\">
\t\t<div class=\"col-2\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "modificar", []), 'widget', ["attr" => ["class" => "btn btn-success btn-block"]]);
        echo "
\t\t</div>
\t\t<div class=\"col-2\">
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "agregar", []), 'widget', ["attr" => ["class" => "btn btn-warning btn-block"]]);
        echo "
\t\t</div>
\t\t<div class=\"col-2\">
\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_delete_articulo", ["art" => "_ID_ART"]);
        echo "\" class=\"btn btn-danger btn-block btn-delete\">Eliminar Articulo</a>
\t\t</div>
\t</div>
\t";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        // line 33
        echo "
<script type=\"text/javascript\">

\t\$('.btn-delete').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tvar route = btn.attr('href');
\t\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t    message: \"Seguro eliminar el articulo?\",
\t\t\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t\t\t        if (result){
\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(route.replace('_ID_ART', \$('.articulos').val()),
\t\t\t\t\t\t\t\t\t\t\t        \t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\tbootbox.alert(data.msge);
\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t});
\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:gestionBD:atributoABMV2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  93 => 32,  86 => 28,  80 => 25,  74 => 22,  68 => 19,  59 => 13,  55 => 12,  49 => 9,  43 => 5,  40 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "GestionFaenaBundle:gestionBD:atributoABMV2.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/gestionBD/atributoABMV2.html.twig");
    }
}
