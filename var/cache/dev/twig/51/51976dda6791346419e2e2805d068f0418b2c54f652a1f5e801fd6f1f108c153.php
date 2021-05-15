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

/* @GestionFaena/faena/procesosFaenaDiaria.html.twig */
class __TwigTemplate_c7819fb1a3e0977247ec9f0a4a2a46fce9d13376a2fcbcc56488aff357e9396f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/faena/procesosFaenaDiaria.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/faena/procesosFaenaDiaria.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/faena/procesosFaenaDiaria.html.twig", 1);
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
        echo "\t<hr>
\t<p class=\"h5\">Faena Fecha: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["faena"]) ? $context["faena"] : $this->getContext($context, "faena")), "html", null, true);
        echo "</p>
\t<hr>


<div class=\"card-columns\">
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["procesos"]) ? $context["procesos"] : $this->getContext($context, "procesos")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 12
            echo "  <div class=\"card mb-3\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</h5>
      <div class=\"row\">
      \t\t<div class=\"col\"><p class=\"card-text\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_fan_day", ["proc" => $this->getAttribute($context["p"], "id", []), "fd" => $this->getAttribute((isset($context["faena"]) ? $context["faena"] : $this->getContext($context, "faena")), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Ir a gestionar..</a></p></div>
      \t\t<div class=\"col\">
\t\t\t\t<button class=\"btn btn-warning dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"
\t\t\t\t  aria-haspopup=\"true\" aria-expanded=\"false\">Informes</button>

\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t  <a class=\"dropdown-item\" target=\"_blanck\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planilla_control_antemorten", ["fanDay" => $this->getAttribute((isset($context["faena"]) ? $context["faena"] : $this->getContext($context, "faena")), "id", []), "procFanDay" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">Planilla Control Ante-Mortem</a>
\t\t\t\t\t
\t\t\t\t\t <a class=\"dropdown-item\" target='_blanck'  href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("informe_informe_dos", ["fd" => $this->getAttribute((isset($context["faena"]) ? $context["faena"] : $this->getContext($context, "faena")), "id", []), "proc" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">Informe I</a>
\t\t\t
\t\t\t\t\t  <a class=\"dropdown-item\" target='_blanck' href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("informe_ingresos_egresos", ["fd" => $this->getAttribute((isset($context["faena"]) ? $context["faena"] : $this->getContext($context, "faena")), "id", []), "pfd" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">Informe II</a>


\t\t\t\t\t";
            // line 29
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 30
                echo "\t\t\t\t\t  \t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t  <a class=\"dropdown-item\" target='_blanck'  href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("informe_informe_tres", ["fd" => $this->getAttribute((isset($context["faena"]) ? $context["faena"] : $this->getContext($context, "faena")), "id", []), "proc" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\">Informe III</a>
\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t</div>
      \t\t</div>
      </div>
      
      <p class=\"card-text\"><small class=\"text-muted\">Ultima Actualizacion: ";
            // line 37
            ((twig_test_empty($this->getAttribute($context["p"], "ultimoMovimiento", []))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "ultimoMovimiento", []), "d/m/Y - H:i"), "html", null, true))));
            echo "</small></p>
    </div>
  </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</div>
<br>
";
        // line 44
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN") && (isset($context["formPendientes"]) || array_key_exists("formPendientes", $context)))) {
            // line 45
            echo "<hr>
\t";
            // line 46
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPendientes"]) ? $context["formPendientes"] : $this->getContext($context, "formPendientes")), 'form_start');
            echo "
\t";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPendientes"]) ? $context["formPendientes"] : $this->getContext($context, "formPendientes")), 'widget');
            echo "
\t";
            // line 48
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPendientes"]) ? $context["formPendientes"] : $this->getContext($context, "formPendientes")), 'form_end');
            echo "
";
        }
        // line 50
        echo "
<hr>
<a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_faena");
        echo "\" class=\"btn btn-success\"><< Volver </a>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "
<script type=\"text/javascript\">

\t\$('.btn-close').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t    message: \"Seguro cerrar la faena # \"+btn.data('index')+\"?\",
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
\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(btn.attr('href'),
\t\t\t\t\t\t\t\t\t\t\t        \t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\tif (data.status)
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\telse
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\tbootbox.alert(data.msge);
\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t});
\t});


\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 96
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
        return "@GestionFaena/faena/procesosFaenaDiaria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 96,  190 => 62,  181 => 61,  163 => 52,  159 => 50,  154 => 48,  150 => 47,  146 => 46,  143 => 45,  141 => 44,  137 => 42,  126 => 37,  120 => 33,  115 => 31,  112 => 30,  110 => 29,  104 => 26,  99 => 24,  94 => 22,  85 => 16,  80 => 14,  76 => 12,  72 => 11,  64 => 6,  61 => 5,  52 => 4,  30 => 1,);
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
\t<hr>
\t<p class=\"h5\">Faena Fecha: {{ faena }}</p>
\t<hr>


<div class=\"card-columns\">
{% for p in procesos %}
  <div class=\"card mb-3\">
    <div class=\"card-body\">
      <h5 class=\"card-title\">{{ p }}</h5>
      <div class=\"row\">
      \t\t<div class=\"col\"><p class=\"card-text\"><a href=\"{{ path('bd_adm_proc_fan_day', {proc : p.id, fd : faena.id}) }}\" class=\"btn btn-primary\">Ir a gestionar..</a></p></div>
      \t\t<div class=\"col\">
\t\t\t\t<button class=\"btn btn-warning dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"
\t\t\t\t  aria-haspopup=\"true\" aria-expanded=\"false\">Informes</button>

\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t  <a class=\"dropdown-item\" target=\"_blanck\" href=\"{{ path('planilla_control_antemorten', {fanDay : faena.id, procFanDay : p.id}) }}\">Planilla Control Ante-Mortem</a>
\t\t\t\t\t
\t\t\t\t\t <a class=\"dropdown-item\" target='_blanck'  href=\"{{ path('informe_informe_dos', {fd: faena.id, proc: p.id}) }}\">Informe I</a>
\t\t\t
\t\t\t\t\t  <a class=\"dropdown-item\" target='_blanck' href=\"{{ path('informe_ingresos_egresos', {fd: faena.id, pfd: p.id}) }}\">Informe II</a>


\t\t\t\t\t{% if is_granted('ROLE_SUPER_ADMIN') %}
\t\t\t\t\t  \t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t  <a class=\"dropdown-item\" target='_blanck'  href=\"{{ path('informe_informe_tres', {fd: faena.id, proc: p.id}) }}\">Informe III</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
      \t\t</div>
      </div>
      
      <p class=\"card-text\"><small class=\"text-muted\">Ultima Actualizacion: {{ p.ultimoMovimiento is empty ? \"\" : p.ultimoMovimiento|date('d/m/Y - H:i') }}</small></p>
    </div>
  </div>

{% endfor %}
</div>
<br>
{% if is_granted('ROLE_SUPER_ADMIN') and formPendientes is defined %}
<hr>
\t{{ form_start(formPendientes) }}
\t{{ form_widget(formPendientes) }}
\t{{ form_end(formPendientes) }}
{% endif %}

<hr>
<a href=\"{{ path('bd_view_faena') }}\" class=\"btn btn-success\"><< Volver </a>






{% endblock fos_user_content %}

{% block javascripts %}

<script type=\"text/javascript\">

\t\$('.btn-close').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t    message: \"Seguro cerrar la faena # \"+btn.data('index')+\"?\",
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
\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(btn.attr('href'),
\t\t\t\t\t\t\t\t\t\t\t        \t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\tif (data.status)
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\telse
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\tbootbox.alert(data.msge);
\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t});
\t});


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
", "@GestionFaena/faena/procesosFaenaDiaria.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\faena\\procesosFaenaDiaria.html.twig");
    }
}
