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
class __TwigTemplate_95ce39dbfdeef338d2397c258f604c26a4dcc2269e25002e427b10cf99cc3657 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:gestionBD:atributoABMV2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:gestionBD:atributoABMV2.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:gestionBD:atributoABMV2.html.twig", 1);
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
<spam class=\"h5 mb-5\">Editar articulos generados</spam>
<hr>
\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t<div class=\"form-row\">
\t\t<div class=\"col-6\">
\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "articulos", []), 'label');
        echo "
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "articulos", []), 'widget', ["attr" => ["class" => "articulos"]]);
        echo "
\t\t\t
\t\t</div>
\t</div>
\t<div class=\"form-row\">
\t\t<div class=\"col-2\">
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "modificar", []), 'widget', ["attr" => ["class" => "btn btn-success btn-block"]]);
        echo "
\t\t</div>
\t\t<div class=\"col-2\">
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "agregar", []), 'widget', ["attr" => ["class" => "btn btn-warning btn-block"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t<p id='upgrade' class='mt-5'></p>
\t<p id='listeners' class='mt-2'></p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "
<script type=\"text/javascript\">
\t
\tvar select  = \$(\"<select id='select-art' class='form-control' />\");

\tvar btn = \$(\"<button id='add-des' class='btn btn-primary' onClick='clickButton()'>Agregar Listener</button>\");

\t\$.post(\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_get_all_articles");
        echo "\",
\t\t\tfunction(data){

\t\t\t\t\t\t\$(data).each(function() {
\t\t\t\t\t\t \t\t\t\t\t\tselect.append(\$(\"<option>\").attr('value',this.id).text(this.articulo));
\t\t\t\t\t\t});
\t\t\t});

\tfunction clickButton()
\t{
\t\t\t\t\t\t   var route = \"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_add_listener", ["orig" => "__ORIGEN", "list" => "__LISTENER"]), "html", null, true);
        echo "\";
\t\t\t\t\t\t   
\t\t\t\t\t\t   var origen = \$('.articulos').val();
\t\t\t\t\t\t   var listener = \$('#select-art').val();

\t\t\t\t\t\t   route = route.replace('__ORIGEN', origen).replace('__LISTENER', listener);
\t\t\t\t\t\t   \$.post(route,
\t\t\t\t\t\t   \t\t  function(data){
\t\t\t\t\t\t   \t\t  \t\t\t\tif (!data.status) {
\t\t\t\t\t\t   \t\t  \t\t\t\t\talert(data.message);
\t\t\t\t\t\t   \t\t  \t\t\t\t}
\t\t\t\t\t\t   \t\t  \t\t\t\telse
\t\t\t\t\t\t   \t\t  \t\t\t\t{
\t\t\t\t\t\t   \t\t  \t\t\t\t\t\$('.articulos').trigger('change');
\t\t\t\t\t\t   \t\t  \t\t\t\t}
\t\t\t\t\t\t   \t\t  });
\t};

\tfunction deleteItem(listen)
\t{
\t   var route = \"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_delete_listener", ["orig" => "__ORIGEN", "list" => "__LISTENER"]), "html", null, true);
        echo "\";
\t   var origen = \$('.articulos').val();
\t   route = route.replace('__ORIGEN', origen).replace('__LISTENER', listen);
\t   \$.post(route,
\t   \t\t function(data){
\t   \t\t  \t\t\t\tif (!data.status) {
\t   \t\t  \t\t\t\t\talert(data.message);
\t   \t\t  \t\t\t\t}
\t   \t\t  \t\t\t\telse
\t   \t\t  \t\t\t\t{
\t   \t\t  \t\t\t\t\t\$('.articulos').trigger('change');
\t   \t\t  \t\t\t\t}
\t   \t\t });
\t\t
\t};

\t\$('.articulos').change(function() {

\t\t\t\$('#upgrade').html(select);
\t\t\t\$('#upgrade').append(btn);
\t\t\tlet list = \$('<ul/>');
\t\t\tlet art = \$(this);
\t\t\tlet route = \"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_listeners", ["id" => "__ART"]);
        echo "\";
    \t\t\$.post(route.replace('__ART', art.val()),
\t\t\t\t   function(data){
\t\t\t\t\t\t\$(data).each(function() {
\t\t\t\t\t\t \t\t\t\t\t\tlist.append(\"<li>\"+this.articulo+\"</li><button onclick='deleteItem(\"+this.id+\")' class='btn btn-sm btn-warning'>Delete</button>\");
\t\t\t\t\t\t});
\t\t\t\t\t\t\$('#listeners').html(list);
\t\t\t\t   });
\t});

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  197 => 93,  172 => 71,  149 => 51,  136 => 41,  127 => 34,  118 => 33,  104 => 28,  98 => 25,  92 => 22,  86 => 19,  77 => 13,  73 => 12,  67 => 9,  61 => 5,  52 => 4,  30 => 1,);
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
<spam class=\"h5 mb-5\">Editar articulos generados</spam>
<hr>
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
\t<div class=\"form-row\">
\t\t<div class=\"col-6\">
\t\t\t{{ form_label(form.articulos) }}
\t\t\t{{ form_widget(form.articulos, {'attr' : {'class' : 'articulos'}}) }}
\t\t\t
\t\t</div>
\t</div>
\t<div class=\"form-row\">
\t\t<div class=\"col-2\">
\t\t\t{{ form_widget(form.modificar, {'attr' : {'class' : 'btn btn-success btn-block'}}) }}
\t\t</div>
\t\t<div class=\"col-2\">
\t\t\t{{ form_widget(form.agregar, {'attr' : {'class' : 'btn btn-warning btn-block'}}) }}
\t\t</div>
\t\t<div class=\"col-2\">
\t\t\t<a href=\"{{ path('bd_delete_articulo', {art : '_ID_ART'}) }}\" class=\"btn btn-danger btn-block btn-delete\">Eliminar Articulo</a>
\t\t</div>
\t</div>
\t{{ form_end(form) }}
\t<p id='upgrade' class='mt-5'></p>
\t<p id='listeners' class='mt-2'></p>
{% endblock fos_user_content %}

{% block javascripts %}

<script type=\"text/javascript\">
\t
\tvar select  = \$(\"<select id='select-art' class='form-control' />\");

\tvar btn = \$(\"<button id='add-des' class='btn btn-primary' onClick='clickButton()'>Agregar Listener</button>\");

\t\$.post(\"{{ path('bd_get_all_articles') }}\",
\t\t\tfunction(data){

\t\t\t\t\t\t\$(data).each(function() {
\t\t\t\t\t\t \t\t\t\t\t\tselect.append(\$(\"<option>\").attr('value',this.id).text(this.articulo));
\t\t\t\t\t\t});
\t\t\t});

\tfunction clickButton()
\t{
\t\t\t\t\t\t   var route = \"{{ path('bd_add_listener', { orig :'__ORIGEN', list: '__LISTENER'}) }}\";
\t\t\t\t\t\t   
\t\t\t\t\t\t   var origen = \$('.articulos').val();
\t\t\t\t\t\t   var listener = \$('#select-art').val();

\t\t\t\t\t\t   route = route.replace('__ORIGEN', origen).replace('__LISTENER', listener);
\t\t\t\t\t\t   \$.post(route,
\t\t\t\t\t\t   \t\t  function(data){
\t\t\t\t\t\t   \t\t  \t\t\t\tif (!data.status) {
\t\t\t\t\t\t   \t\t  \t\t\t\t\talert(data.message);
\t\t\t\t\t\t   \t\t  \t\t\t\t}
\t\t\t\t\t\t   \t\t  \t\t\t\telse
\t\t\t\t\t\t   \t\t  \t\t\t\t{
\t\t\t\t\t\t   \t\t  \t\t\t\t\t\$('.articulos').trigger('change');
\t\t\t\t\t\t   \t\t  \t\t\t\t}
\t\t\t\t\t\t   \t\t  });
\t};

\tfunction deleteItem(listen)
\t{
\t   var route = \"{{ path('bd_delete_listener', { orig :'__ORIGEN', list: '__LISTENER'}) }}\";
\t   var origen = \$('.articulos').val();
\t   route = route.replace('__ORIGEN', origen).replace('__LISTENER', listen);
\t   \$.post(route,
\t   \t\t function(data){
\t   \t\t  \t\t\t\tif (!data.status) {
\t   \t\t  \t\t\t\t\talert(data.message);
\t   \t\t  \t\t\t\t}
\t   \t\t  \t\t\t\telse
\t   \t\t  \t\t\t\t{
\t   \t\t  \t\t\t\t\t\$('.articulos').trigger('change');
\t   \t\t  \t\t\t\t}
\t   \t\t });
\t\t
\t};

\t\$('.articulos').change(function() {

\t\t\t\$('#upgrade').html(select);
\t\t\t\$('#upgrade').append(btn);
\t\t\tlet list = \$('<ul/>');
\t\t\tlet art = \$(this);
\t\t\tlet route = \"{{ path('bd_listeners', { id : '__ART'}) }}\";
    \t\t\$.post(route.replace('__ART', art.val()),
\t\t\t\t   function(data){
\t\t\t\t\t\t\$(data).each(function() {
\t\t\t\t\t\t \t\t\t\t\t\tlist.append(\"<li>\"+this.articulo+\"</li><button onclick='deleteItem(\"+this.id+\")' class='btn btn-sm btn-warning'>Delete</button>\");
\t\t\t\t\t\t});
\t\t\t\t\t\t\$('#listeners').html(list);
\t\t\t\t   });
\t});

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
{% endblock %}", "GestionFaenaBundle:gestionBD:atributoABMV2.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/gestionBD/atributoABMV2.html.twig");
    }
}
