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
class __TwigTemplate_04b660c438533c492dbe5eaf755e8d2658af7ef2a4ddefae0a04b377a37ec306 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:adminProcFanDay2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:adminProcFanDay2.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:faena:adminProcFanDay2.html.twig", 1);
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
<p class=\"h5 card-title\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["proceso"] ?? $this->getContext($context, "proceso")), "html", null, true);
        echo "</p>


";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  \t <div class=\"row\">
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributo1", []), 'label');
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributo1", []), 'widget');
        echo "
  \t\t</div>
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "galpon", []), 'label', ["label" => "Galpon"]);
        echo "
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "galpon", []), 'widget');
        echo "
  \t\t</div>  \t\t
  \t\t<div class=\"col-4\">
  \t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributo2", []), 'label');
        echo "
\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributo2", []), 'widget');
        echo "
  \t\t</div>    \t\t
  </div>


  <div class=\"row\">
  \t\t<div class=\"col-2\">
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "cantidad1", []), 'label', ["label" => "Cantidad 1"]);
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "cantidad1", []), 'widget');
        echo "
  \t\t</div>
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "unidadMedida1", []), 'label', ["label" => "Unidad de Medida 1"]);
        echo "
\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "unidadMedida1", []), 'widget');
        echo "
  \t\t</div>  \t\t
  \t\t<div class=\"col-2\">
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "cantidad2", []), 'label', ["label" => "Cantidad 2"]);
        echo "
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "cantidad2", []), 'widget');
        echo "
  \t\t</div>
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "unidadMedida2", []), 'label', ["label" => "Unidad de Medida 2"]);
        echo "
\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "unidadMedida2", []), 'widget');
        echo "
  \t\t</div>  \t\t
  </div>
  <div class=\"row\">
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "procesoFnDay", []), 'label', ["label" => "Proceso"]);
        echo "
\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "procesoFnDay", []), 'widget');
        echo "
  \t\t</div>
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "articulo", []), 'label', ["label" => "Articulo"]);
        echo "
\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "articulo", []), 'widget');
        echo "
  \t\t</div>  \t\t
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "concepto", []), 'label', ["label" => "Concepto"]);
        echo "
\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "movimiento", []), "concepto", []), 'widget');
        echo "
  \t\t</div>  
  </div>
  <div class=\"row\">
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "oc", []), 'label', ["label" => "O/C"]);
        echo "
\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "oc", []), 'widget');
        echo "
  \t\t</div>
\t\t
  \t\t<div class=\"col-4\">
\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dte", []), 'label', ["label" => "DT-e"]);
        echo "
\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dte", []), 'widget');
        echo "
  \t\t</div>  
  </div>

";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  233 => 78,  228 => 75,  219 => 74,  206 => 70,  199 => 66,  195 => 65,  188 => 61,  184 => 60,  176 => 55,  172 => 54,  166 => 51,  162 => 50,  156 => 47,  152 => 46,  144 => 41,  140 => 40,  134 => 37,  130 => 36,  124 => 33,  120 => 32,  114 => 29,  110 => 28,  100 => 21,  96 => 20,  90 => 17,  86 => 16,  80 => 13,  76 => 12,  70 => 9,  64 => 6,  61 => 5,  52 => 4,  30 => 1,);
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
<p class=\"h5 card-title\">{{ proceso }}</p>


{{ form_start(form) }}
  \t <div class=\"row\">
  \t\t<div class=\"col-4\">
\t\t\t\t{{ form_label(form.atributo1) }}
\t\t\t\t{{ form_widget(form.atributo1) }}
  \t\t</div>
  \t\t<div class=\"col-4\">
\t\t\t\t{{ form_label(form.galpon, 'Galpon') }}
\t\t\t\t{{ form_widget(form.galpon) }}
  \t\t</div>  \t\t
  \t\t<div class=\"col-4\">
  \t\t\t\t{{ form_label(form.atributo2) }}
\t\t\t\t{{ form_widget(form.atributo2) }}
  \t\t</div>    \t\t
  </div>


  <div class=\"row\">
  \t\t<div class=\"col-2\">
\t\t\t\t{{ form_label(form.movimiento.cantidad1, 'Cantidad 1') }}
\t\t\t\t{{ form_widget(form.movimiento.cantidad1) }}
  \t\t</div>
  \t\t<div class=\"col-4\">
\t\t\t\t{{ form_label(form.movimiento.unidadMedida1, 'Unidad de Medida 1') }}
\t\t\t\t{{ form_widget(form.movimiento.unidadMedida1) }}
  \t\t</div>  \t\t
  \t\t<div class=\"col-2\">
\t\t\t\t{{ form_label(form.movimiento.cantidad2, 'Cantidad 2') }}
\t\t\t\t{{ form_widget(form.movimiento.cantidad2) }}
  \t\t</div>
  \t\t<div class=\"col-4\">
\t\t\t\t{{ form_label(form.movimiento.unidadMedida2, 'Unidad de Medida 2') }}
\t\t\t\t{{ form_widget(form.movimiento.unidadMedida2) }}
  \t\t</div>  \t\t
  </div>
  <div class=\"row\">
  \t\t<div class=\"col-4\">
\t\t\t\t{{ form_label(form.movimiento.procesoFnDay, 'Proceso') }}
\t\t\t\t{{ form_widget(form.movimiento.procesoFnDay) }}
  \t\t</div>
  \t\t<div class=\"col-4\">
\t\t\t\t{{ form_label(form.movimiento.articulo, 'Articulo') }}
\t\t\t\t{{ form_widget(form.movimiento.articulo) }}
  \t\t</div>  \t\t
  \t\t<div class=\"col-4\">
\t\t\t\t{{ form_label(form.movimiento.concepto, 'Concepto') }}
\t\t\t\t{{ form_widget(form.movimiento.concepto) }}
  \t\t</div>  
  </div>
  <div class=\"row\">
  \t\t<div class=\"col-4\">
\t\t\t\t{{ form_label(form.oc, 'O/C') }}
\t\t\t\t{{ form_widget(form.oc) }}
  \t\t</div>
\t\t
  \t\t<div class=\"col-4\">
\t\t\t\t{{ form_label(form.dte, 'DT-e') }}
\t\t\t\t{{ form_widget(form.dte) }}
  \t\t</div>  
  </div>

{{ form_end(form) }}

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

\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t{

\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}


\t\t\t\t\t\t\t\t\t\t \t\t});
\t\t\t\t\t\t\t\t\t\t
\t});
</script>

{% endblock %}
", "GestionFaenaBundle:faena:adminProcFanDay2.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/faena/adminProcFanDay2.html.twig");
    }
}
