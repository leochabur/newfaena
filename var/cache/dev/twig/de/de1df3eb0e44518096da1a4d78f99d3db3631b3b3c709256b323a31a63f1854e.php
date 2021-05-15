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
class __TwigTemplate_e9e026a1976897887828f1abcb680e6c9079d08e5bac9985f2c55e2f7acdf07d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/viewArtProcFan.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/viewArtProcFan.html.twig"));

        // line 1
        echo "<p class=\"h4 mb-4 text-center\">";
        echo twig_escape_filter($this->env, ($context["article"] ?? $this->getContext($context, "article")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "atributos", []));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "sender"]]);
        echo "
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  135 => 38,  131 => 37,  127 => 36,  121 => 32,  104 => 29,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  77 => 22,  60 => 21,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"h4 mb-4 text-center\">{{ article }}</p>

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
\t\t\t\t\t\t  \t{% for attr in article.atributos %}
\t\t\t\t\t\t  \t\t<tr>
\t\t\t\t\t\t  \t\t\t<td>{{ loop.index }}</td>
\t\t\t\t\t\t  \t\t\t<td>{{ attr.atributo }}</td>
\t\t\t\t\t\t  \t\t\t<td>{{ attr.atributo.tipo }}</td>
\t\t\t\t\t\t  \t\t\t<td>{{ attr.atributo.carga }}</td>
\t\t\t\t\t\t  \t\t\t<td>{{ attr.atributo.unidadMedida }}</td>
\t\t\t\t\t\t  \t\t\t<td>{{ attr.atributo.calculo }}</td>
\t\t\t\t\t\t  \t\t\t<td>{{ attr.atributo.ajuste }}</td>
\t\t\t\t\t\t  \t\t</tr>
\t\t\t\t\t\t  \t{% endfor %}
\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t{{ form_start(form, {'attr': {'class': 'sender'}}) }}
\t\t\t\t{{ form_widget(form) }}
\t\t\t\t{{ form_end(form) }}
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
", "@GestionFaena/gestionBD/viewArtProcFan.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\viewArtProcFan.html.twig");
    }
}
