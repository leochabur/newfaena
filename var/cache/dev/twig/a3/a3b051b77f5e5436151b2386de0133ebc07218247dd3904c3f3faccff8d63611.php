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

/* @GestionFaena/procesoView.html.twig */
class __TwigTemplate_67304c0b40339e4d220fb77967c363da4ee01f71fafbc929a627f4a2abf06a12 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/procesoView.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/procesoView.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/procesoView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<style type=\"text/css\">
\t\ttable.dataTable thead .sorting:after,
\t\ttable.dataTable thead .sorting:before,
\t\ttable.dataTable thead .sorting_asc:after,
\t\ttable.dataTable thead .sorting_asc:before,
\t\ttable.dataTable thead .sorting_asc_disabled:after,
\t\ttable.dataTable thead .sorting_asc_disabled:before,
\t\ttable.dataTable thead .sorting_desc:after,
\t\ttable.dataTable thead .sorting_desc:before,
\t\ttable.dataTable thead .sorting_desc_disabled:after,
\t\ttable.dataTable thead .sorting_desc_disabled:before {
\t\tbottom: .5em;
\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "<br>
<hr>
<span class=\"h5 card-title\">Procesos existentes en el sistema</span>
<hr>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "sussecc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "\t<div class=\"alert alert-success\" role=\"alert\">
\t  ";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<table id=\"dtBasicExample\" class=\"table table-hover table-striped table-bordered table-sm table-responsive-md btn-table\" cellspacing=\"0\" width=\"100%\">
  <thead>
    <tr>
      <th class=\"th-sm\">Nombre Proceso </th>
      <th class=\"th-sm\">Tipo de Proceso</th>
      <th class=\"th-sm\" >Orden</th>
      <th class=\"th-sm\">Permanente</th>
      <th class=\"th-sm\"></th>
    </tr>
  </thead>
  <tbody>
  \t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["procesos"] ?? $this->getContext($context, "procesos")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 41
            echo "  \t\t\t<tr>
  \t\t\t\t<td>
  \t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nombre", []), "html", null, true);
            echo "
  \t\t\t\t</td>
  \t\t\t\t<td>
  \t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "type", []), "html", null, true);
            echo "
  \t\t\t\t</td>
  \t\t\t\t<td>
  \t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "orden", []), "html", null, true);
            echo "
  \t\t\t\t</td>
   \t\t\t\t<td>
  \t\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "permanente", []), "html", null, true);
            echo "
  \t\t\t\t</td>
  \t\t\t\t<td class=\"text-center\">
\t\t\t\t\t<a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_edit_procesos", ["proccess" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-indigo btn-sm m-0\">Administrar</a>
  \t\t\t\t</td>
  \t\t\t</tr>
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  </tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\$('#dtBasicExample').DataTable({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"info\": false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"searching\": false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"paging\": false
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\$('.dataTables_length').addClass('bs-select');
\t});
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/procesoView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 65,  185 => 64,  172 => 59,  162 => 55,  156 => 52,  150 => 49,  144 => 46,  138 => 43,  134 => 41,  130 => 40,  117 => 29,  108 => 26,  105 => 25,  101 => 24,  95 => 20,  86 => 19,  62 => 4,  53 => 3,  31 => 1,);
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
        
{% block stylesheets %}
\t<style type=\"text/css\">
\t\ttable.dataTable thead .sorting:after,
\t\ttable.dataTable thead .sorting:before,
\t\ttable.dataTable thead .sorting_asc:after,
\t\ttable.dataTable thead .sorting_asc:before,
\t\ttable.dataTable thead .sorting_asc_disabled:after,
\t\ttable.dataTable thead .sorting_asc_disabled:before,
\t\ttable.dataTable thead .sorting_desc:after,
\t\ttable.dataTable thead .sorting_desc:before,
\t\ttable.dataTable thead .sorting_desc_disabled:after,
\t\ttable.dataTable thead .sorting_desc_disabled:before {
\t\tbottom: .5em;
\t\t}
\t</style>
{% endblock %}
{% block fos_user_content %}
<br>
<hr>
<span class=\"h5 card-title\">Procesos existentes en el sistema</span>
<hr>
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
<table id=\"dtBasicExample\" class=\"table table-hover table-striped table-bordered table-sm table-responsive-md btn-table\" cellspacing=\"0\" width=\"100%\">
  <thead>
    <tr>
      <th class=\"th-sm\">Nombre Proceso </th>
      <th class=\"th-sm\">Tipo de Proceso</th>
      <th class=\"th-sm\" >Orden</th>
      <th class=\"th-sm\">Permanente</th>
      <th class=\"th-sm\"></th>
    </tr>
  </thead>
  <tbody>
  \t\t{% for p in  procesos %}
  \t\t\t<tr>
  \t\t\t\t<td>
  \t\t\t\t\t{{ p.nombre }}
  \t\t\t\t</td>
  \t\t\t\t<td>
  \t\t\t\t\t{{ p.type }}
  \t\t\t\t</td>
  \t\t\t\t<td>
  \t\t\t\t\t{{ p.orden }}
  \t\t\t\t</td>
   \t\t\t\t<td>
  \t\t\t\t\t{{ p.permanente }}
  \t\t\t\t</td>
  \t\t\t\t<td class=\"text-center\">
\t\t\t\t\t<a href=\"{{ path('bd_edit_procesos', {proccess : p.id}) }}\" class=\"btn btn-indigo btn-sm m-0\">Administrar</a>
  \t\t\t\t</td>
  \t\t\t</tr>
  \t\t{% endfor %}
  </tbody>
</table>

{% endblock fos_user_content %}

{% block javascripts %}
<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\t\t\t\t\t\t\t\t\$('#dtBasicExample').DataTable({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"info\": false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"searching\": false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\"paging\": false
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\$('.dataTables_length').addClass('bs-select');
\t});
</script>
{% endblock %}
", "@GestionFaena/procesoView.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\procesoView.html.twig");
    }
}
