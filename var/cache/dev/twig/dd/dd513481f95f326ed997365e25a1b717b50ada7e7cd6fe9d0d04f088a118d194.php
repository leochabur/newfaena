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

/* GestionFaenaBundle:informes:informeTres.html.twig */
class __TwigTemplate_e76cdf92b7787789bf2d89c3b809211270c81cd0ec1fb45606c78de4ce2e23b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:informes:informeTres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:informes:informeTres.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:informes:informeTres.html.twig", 1);
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
<div class=\"text-left\">
\t<span class=\"h5 card-title\">INFORME III</span>
</div>
<div class=\"text-center\">
\t<span class=\"h5 card-title\">Faena:  ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "fechaFaena", []), "d/m/Y"), "html", null, true);
        echo "</span>
</div>
<hr>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"form-row\">
\t<div class=\"col-2\">
\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "factor", []), 'label');
        echo "
\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "factor", []), 'widget');
        echo "
\t</div>
</div>
<div class=\"form-row\">
\t<div class=\"col-3\">
\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "load", []), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
        echo "
\t</div>
\t<div class=\"col-3\">
\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "aplicar", []), 'widget', ["attr" => ["class" => "btn btn-danger"]]);
        echo "
\t</div>
</div>
";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<hr>
";
        // line 29
        if ((isset($context["movimientos"]) || array_key_exists("movimientos", $context))) {
            // line 30
            echo "\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th rowspan=\"2\">Granja</th>
\t\t\t\t\t<th rowspan=\"2\">Galpon</th>
\t\t\t\t\t<th rowspan=\"2\">O/C</th>
\t\t\t\t\t<th rowspan=\"2\">Transp.</th>
\t\t\t\t\t<th rowspan=\"2\">Aves</th>
\t\t\t\t\t<th rowspan=\"2\">DT-e</th>
\t\t\t\t\t<th colspan=\"4\">Pesos</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Bruto</th>
\t\t\t\t\t<th>Tara</th>
\t\t\t\t\t<th>Neto</th>
\t\t\t\t\t<th>Prom.</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["movimientos"] ?? $this->getContext($context, "movimientos")));
            foreach ($context['_seq'] as $context["key"] => $context["mov"]) {
                // line 50
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header"] ?? $this->getContext($context, "header")));
                foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                    // line 52
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["h"], "visible", [])) {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t<td class=\"";
                        if ($this->getAttribute($context["mov"], "total", [], "array", true, true)) {
                            echo "font-weight-bold ";
                        }
                        if (($this->getAttribute($context["h"], "sumariza", []) || $this->getAttribute($context["h"], "promedia", []))) {
                            echo "text-right";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 54
                        if ($this->getAttribute($context["mov"], $this->getAttribute($this->getAttribute($context["h"], "atributo", []), "id", []), [], "array", true, true)) {
                            // line 55
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["mov"], "total", [], "array", true, true)) {
                                // line 56
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                                if (($this->getAttribute($this->getAttribute($context["h"], "atributo", []), "id", []) == 4)) {
                                    // line 57
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["mov"], 2, [], "array") / $this->getAttribute($context["mov"], 9, [], "array")), 3, ".", ""), "html", null, true);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 59
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], $this->getAttribute($this->getAttribute($context["h"], "atributo", []), "id", []), [], "array"), "html", null, true);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 61
                                echo "\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 62
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["mov"], $this->getAttribute($this->getAttribute($context["h"], "atributo", []), "id", []), [], "array"), "html", null, true);
                                echo "
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 64
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 65
                        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                    }
                    // line 67
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['mov'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t</tbody>
\t</table>
\t<a class=\"btn btn-success\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_informe_uno", ["proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", []), "ajs" => 1]), "html", null, true);
            echo "\" target=\"_blanck\">Imprimir</a>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:informes:informeTres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 72,  205 => 70,  198 => 68,  192 => 67,  188 => 65,  185 => 64,  179 => 62,  176 => 61,  170 => 59,  164 => 57,  161 => 56,  158 => 55,  156 => 54,  146 => 53,  143 => 52,  139 => 51,  136 => 50,  132 => 49,  111 => 30,  109 => 29,  104 => 27,  98 => 24,  92 => 21,  84 => 16,  80 => 15,  74 => 12,  68 => 9,  60 => 3,  51 => 2,  29 => 1,);
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
<div class=\"text-left\">
\t<span class=\"h5 card-title\">INFORME III</span>
</div>
<div class=\"text-center\">
\t<span class=\"h5 card-title\">Faena:  {{ faena.fechaFaena | date('d/m/Y') }}</span>
</div>
<hr>
{{ form_start(form) }}
<div class=\"form-row\">
\t<div class=\"col-2\">
\t\t{{ form_label(form.factor) }}
\t\t{{ form_widget(form.factor) }}
\t</div>
</div>
<div class=\"form-row\">
\t<div class=\"col-3\">
\t\t{{ form_widget(form.load, {'attr' : {'class' : 'btn btn-warning'}}) }}
\t</div>
\t<div class=\"col-3\">
\t\t{{ form_widget(form.aplicar, {'attr' : {'class' : 'btn btn-danger'}}) }}
\t</div>
</div>
{{ form_end(form) }}
<hr>
{% if movimientos is defined %}
\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th rowspan=\"2\">Granja</th>
\t\t\t\t\t<th rowspan=\"2\">Galpon</th>
\t\t\t\t\t<th rowspan=\"2\">O/C</th>
\t\t\t\t\t<th rowspan=\"2\">Transp.</th>
\t\t\t\t\t<th rowspan=\"2\">Aves</th>
\t\t\t\t\t<th rowspan=\"2\">DT-e</th>
\t\t\t\t\t<th colspan=\"4\">Pesos</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Bruto</th>
\t\t\t\t\t<th>Tara</th>
\t\t\t\t\t<th>Neto</th>
\t\t\t\t\t<th>Prom.</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for key, mov in movimientos %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t{% for h in header %}
\t\t\t\t\t\t\t{% if h.visible %}
\t\t\t\t\t\t\t\t<td class=\"{% if mov['total'] is defined %}font-weight-bold {% endif %}{% if h.sumariza or h.promedia %}text-right{% endif %}\">
\t\t\t\t\t\t\t\t\t{% if mov[h.atributo.id] is defined %}
\t\t\t\t\t\t\t\t\t\t{% if mov['total'] is defined %}
\t\t\t\t\t\t\t\t\t\t\t{% if h.atributo.id == 4 %}
\t\t\t\t\t\t\t\t\t\t\t\t{{ (mov[2] / mov[9])|number_format(3, '.', '') }}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t{{ mov[h.atributo.id] }}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{{ mov[h.atributo.id] }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t</table>
\t<a class=\"btn btn-success\" href=\"{{ path('export_informe_uno', { proc: proceso.id, fd : faena.id, ajs: 1}) }}\" target=\"_blanck\">Imprimir</a>
{% endif %}
{% endblock fos_user_content %}
", "GestionFaenaBundle:informes:informeTres.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/informes/informeTres.html.twig");
    }
}
