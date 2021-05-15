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

/* GestionFaenaBundle:faena:adminProcFanDay2.html.twig */
class __TwigTemplate_52393ebea47f1035997ba30ca20c6bf1b5624a0f31b2f12bf6eb0a9c6aed3899 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:faena:adminProcFanDay2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 5
        echo "<br>
<p class=\"h5 card-title\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["proceso"] ?? null), "html", null, true);
        echo "</p>


";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
  \t <div class=\"row\">
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "atributo1", []), 'label');
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "atributo1", []), 'widget');
        echo "
  \t\t</div>
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "galpon", []), 'label', ["label" => "Galpon"]);
        echo "
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "galpon", []), 'widget');
        echo "
  \t\t</div>  \t\t
  \t\t<div class=\"col-4\">
  \t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "atributo2", []), 'label');
        echo "
\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "atributo2", []), 'widget');
        echo "
  \t\t</div>    \t\t
  </div>


  <div class=\"row\">
  \t\t<div class=\"col-2\">
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "cantidad1", []), 'label', ["label" => "Cantidad 1"]);
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "cantidad1", []), 'widget');
        echo "
  \t\t</div>
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "unidadMedida1", []), 'label', ["label" => "Unidad de Medida 1"]);
        echo "
\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "unidadMedida1", []), 'widget');
        echo "
  \t\t</div>  \t\t
  \t\t<div class=\"col-2\">
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "cantidad2", []), 'label', ["label" => "Cantidad 2"]);
        echo "
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "cantidad2", []), 'widget');
        echo "
  \t\t</div>
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "unidadMedida2", []), 'label', ["label" => "Unidad de Medida 2"]);
        echo "
\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "unidadMedida2", []), 'widget');
        echo "
  \t\t</div>  \t\t
  </div>
  <div class=\"row\">
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "procesoFnDay", []), 'label', ["label" => "Proceso"]);
        echo "
\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "procesoFnDay", []), 'widget');
        echo "
  \t\t</div>
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "articulo", []), 'label', ["label" => "Articulo"]);
        echo "
\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "articulo", []), 'widget');
        echo "
  \t\t</div>  \t\t
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "concepto", []), 'label', ["label" => "Concepto"]);
        echo "
\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "movimiento", []), "concepto", []), 'widget');
        echo "
  \t\t</div>  
  </div>
  <div class=\"row\">
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "oc", []), 'label', ["label" => "O/C"]);
        echo "
\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "oc", []), 'widget');
        echo "
  \t\t</div>
\t\t
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dte", []), 'label', ["label" => "DT-e"]);
        echo "
\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dte", []), 'widget');
        echo "
  \t\t</div>  
  </div>

";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        // line 75
        echo "
<script type=\"text/javascript\">
\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 78
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

\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t{

\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}


\t\t\t\t\t\t\t\t\t\t \t\t});
\t\t\t\t\t\t\t\t\t\t
\t});
</script>

";
    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:faena:adminProcFanDay2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 78,  198 => 75,  195 => 74,  188 => 70,  181 => 66,  177 => 65,  170 => 61,  166 => 60,  158 => 55,  154 => 54,  148 => 51,  144 => 50,  138 => 47,  134 => 46,  126 => 41,  122 => 40,  116 => 37,  112 => 36,  106 => 33,  102 => 32,  96 => 29,  92 => 28,  82 => 21,  78 => 20,  72 => 17,  68 => 16,  62 => 13,  58 => 12,  52 => 9,  46 => 6,  43 => 5,  40 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "GestionFaenaBundle:faena:adminProcFanDay2.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/faena/adminProcFanDay2.html.twig");
    }
}
