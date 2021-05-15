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

/* @GestionFaena/gestionBD/viewAllAtributes.html.twig */
class __TwigTemplate_bffce943f4f781fd2695101116a264fa1121b2c2d4d053801718343816d5a14c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/gestionBD/viewAllAtributes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 3
        echo "
\t\t<br>
\t\t<hr>
<p class=\"h5 card-title\">Listado de atributos generados</p>
<hr>

\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t    <tr>
\t\t\t\t\t\t      <th scope=\"col\">#</th>
\t\t\t\t\t\t      <th scope=\"col\">Detalle</th>
\t\t\t\t\t\t      <th scope=\"col\">Tipo</th>
\t\t\t\t\t\t      <th scope=\"col\">Manual/Automatico</th>
\t\t\t\t\t\t      <th scope=\"col\">Unidad Medida</th>
\t\t\t\t\t\t      <th scope=\"col\">Calculo</th>
\t\t\t\t\t\t      <th scope=\"col\">Factor Ajuste</th>
\t\t\t\t\t\t      <th scope=\"col\"></th>
\t\t\t\t\t\t    </tr>
\t\t\t\t\t\t  </thead>
\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t  \t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["atributos"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["attr"]) {
            // line 24
            echo "\t\t\t\t\t\t  \t\t<tr>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["attr"], "tipo", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["attr"], "carga", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["attr"], "unidadMedida", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["attr"], "calculo", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["attr"], "ajuste", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_atributos_show", ["atr" => $this->getAttribute($context["attr"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">Editar</a></td>
\t\t\t\t\t\t  \t\t</tr>
\t\t\t\t\t\t  \t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t</table>
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        // line 40
        echo "<script type=\"text/javascript\">
\t\$('.sender').submit(function(event){
\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\tvar form = \$(this);
\t\t\t\t\t\t\t\t\t\talert(form.attr('action'));
\t\t\t\t\t\t\t\t\t\t\$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t\t   form.serialize(),
\t\t\t\t\t\t\t\t\t\t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\tif (data.status){
\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\$('#viewArticle').modal('hide');
\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\telse{
\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\talert(data.message);
\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t   });
\t\t\t\t\t\t\t\t\t\t
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "@GestionFaena/gestionBD/viewAllAtributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  136 => 39,  130 => 35,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  82 => 24,  65 => 23,  43 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@GestionFaena/gestionBD/viewAllAtributes.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\viewAllAtributes.html.twig");
    }
}
