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

/* GestionFaenaBundle::procesoView.html.twig */
class __TwigTemplate_6ce733141db59dd3c9f84b527e74525574f4af72e269207bce573e47a7158b4e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle::procesoView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
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
    }

    // line 19
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 20
        echo "<br>
<hr>
<span class=\"h5 card-title\">Procesos existentes en el sistema</span>
<hr>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "flashes", [0 => "sussecc"], "method"));
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
      <th class=\"th-sm\"></th>
    </tr>
  </thead>
  <tbody>
  \t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["procesos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 39
            echo "  \t\t\t<tr>
  \t\t\t\t<td>
  \t\t\t\t\t";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nombre", []), "html", null, true);
            echo "
  \t\t\t\t</td>
  \t\t\t\t<td>
  \t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "type", []), "html", null, true);
            echo "
  \t\t\t\t</td>
  \t\t\t\t<td class=\"text-center\">
\t\t\t\t\t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_edit_procesos", ["proccess" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-indigo btn-sm m-0\">Administrar</a>
  \t\t\t\t</td>
  \t\t\t</tr>
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "  </tbody>
</table>

";
    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        // line 57
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
    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle::procesoView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 57,  135 => 56,  128 => 51,  118 => 47,  112 => 44,  106 => 41,  102 => 39,  98 => 38,  87 => 29,  78 => 26,  75 => 25,  71 => 24,  65 => 20,  62 => 19,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "GestionFaenaBundle::procesoView.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/procesoView.html.twig");
    }
}
