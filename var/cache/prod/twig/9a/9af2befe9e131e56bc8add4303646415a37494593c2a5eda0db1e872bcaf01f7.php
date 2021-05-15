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

/* @GestionFaena/gestionBD/viewArtProcFan.html.twig */
class __TwigTemplate_c2a6d69f6668fc91c9719c1c0ab91520e796190a5e9202d9aa9dc645005ebc1b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<p class=\"h4 mb-4 text-center\">";
        echo twig_escape_filter($this->env, ($context["article"] ?? null), "html", null, true);
        echo "</p>

\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t    Atributos
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
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
\t\t\t\t\t\t    </tr>
\t\t\t\t\t\t  </thead>
\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t  \t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["article"] ?? null), "atributos", []));
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
            // line 22
            echo "\t\t\t\t\t\t  \t\t<tr>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["attr"], "atributo", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attr"], "atributo", []), "tipo", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attr"], "atributo", []), "carga", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attr"], "atributo", []), "unidadMedida", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attr"], "atributo", []), "calculo", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["attr"], "atributo", []), "ajuste", []), "html", null, true);
            echo "</td>
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
        // line 32
        echo "\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "sender"]]);
        echo "
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
\t\t\t\t";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
<script type=\"text/javascript\">
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
        return "@GestionFaena/gestionBD/viewArtProcFan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  125 => 37,  121 => 36,  115 => 32,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  71 => 22,  54 => 21,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@GestionFaena/gestionBD/viewArtProcFan.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\viewArtProcFan.html.twig");
    }
}
