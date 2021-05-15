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

/* @GestionFaena/informes/estadoFaena.html.twig */
class __TwigTemplate_a1f40991d5cf6d310baa6eea87649c13bf9502dae03a6248ec158f5508c5b4fa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/informes/estadoFaena.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/informes/estadoFaena.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/informes/estadoFaena.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "<br>
<hr>
<span class=\"h5 card-title\">Resumen Faena: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["faena"] ?? $this->getContext($context, "faena")), "html", null, true);
        echo "</span>
<hr>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "sussecc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "\t<div class=\"alert alert-success\" role=\"alert\">
\t  ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        if ((isset($context["headers"]) || array_key_exists("headers", $context))) {
            // line 13
            echo "\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Concepto</th>
\t\t\t\t\t<th>Articulo</th>
\t\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? $this->getContext($context, "headers")));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                // line 19
                echo "\t\t\t\t\t\t<th> ";
                echo twig_escape_filter($this->env, $context["h"], "html", null, true);
                echo "</th>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["table"] ?? $this->getContext($context, "table")));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 26
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], 0, [], "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], 1, [], "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? $this->getContext($context, "headers")));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 30
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($this->getAttribute($context["f"], 2, [], "array", false, true), $context["k"], [], "array", true, true)) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], 2, [], "array"), $context["k"], [], "array"), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t";
                    } else {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t";
                    }
                    // line 35
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/informes/estadoFaena.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 39,  153 => 36,  146 => 35,  142 => 33,  136 => 31,  133 => 30,  129 => 29,  125 => 28,  121 => 27,  118 => 26,  114 => 25,  107 => 20,  98 => 19,  94 => 18,  87 => 13,  85 => 12,  76 => 9,  73 => 8,  69 => 7,  64 => 5,  60 => 3,  51 => 2,  29 => 1,);
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
<hr>
<span class=\"h5 card-title\">Resumen Faena: {{ faena }}</span>
<hr>
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
{% if headers is defined %}
\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Concepto</th>
\t\t\t\t\t<th>Articulo</th>
\t\t\t\t\t{% for h in headers %}
\t\t\t\t\t\t<th> {{ h }}</th>
\t\t\t\t\t{% endfor %}\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t{% for f in table %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ f[0] }}</td>
\t\t\t\t\t\t<td>{{ f[1] }}</td>
\t\t\t\t\t\t{% for k, v in headers %}
\t\t\t\t\t\t\t{% if f[2][k] is defined %}
\t\t\t\t\t\t\t\t<td class=\"text-right\">{{ f[2][k] }}</td>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}\t
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t{% endif %}
{% endblock fos_user_content %}
", "@GestionFaena/informes/estadoFaena.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\informes\\estadoFaena.html.twig");
    }
}
