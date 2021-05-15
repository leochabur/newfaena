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

/* GestionFaenaBundle:informes:informePolloVivo.html.twig */
class __TwigTemplate_87919f488e102ec9385ca2514b4d50c7933c90f70a2eed017a7502fe2f5783f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:informes:informePolloVivo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:informes:informePolloVivo.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:informes:informePolloVivo.html.twig", 1);
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
\t<span class=\"h5 card-title\">INFORME POLLO VIVO</span>
</div>
<hr>
      ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
      <div class=\"form-row\">
      \t<div class=\"col col-lg-4\">
      \t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "desde", []), 'label');
        echo "
      \t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "desde", []), 'widget');
        echo "
      \t</div>
      \t<div class=\"col col-lg-4\">
      \t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hasta", []), 'label');
        echo "
      \t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hasta", []), 'widget');
        echo "
      \t</div>
      </div>
      <div class=\"form-row\">
      \t<div class=\"col col-lg-4\">
      \t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "transporte", []), 'label');
        echo "
      \t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "transporte", []), 'widget');
        echo "
      \t</div>
      \t<div class=\"col col-lg-4\">
      \t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cargador", []), 'label');
        echo "
      \t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cargador", []), 'widget');
        echo "
      \t</div>
        <div class=\"col col-lg-4\">
          ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "granja", []), 'label');
        echo "
          ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "granja", []), 'widget');
        echo "
        </div>
      </div>
      <div class=\"form-row\">
        <div class=\"col col-lg-4\">
          ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "agrupar", []), 'label', ["label" => "Agrupar por ..."]);
        echo "
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "agrupar", []), 'widget');
        echo "
        </div>
      </div>
      <div class=\"form-row\">
      \t<div class=\"col col-lg-4\">
      \t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cargar", []), 'widget');
        echo "
      \t</div>
      </div>
      ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

      ";
        // line 47
        if ((isset($context["header"]) || array_key_exists("header", $context))) {
            // line 48
            echo "        <table class=\"table table-striped table-bordered table-hover table-sm \">
          <thead>
            <tr>
              ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? $this->getContext($context, "header")));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                // line 52
                echo "                <th>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "value", []), "html", null, true);
                echo "</th>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            </tr>
          </thead>
          <tbody>

            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 59
                echo "
                ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["group"]);
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 61
                    echo "                    <tr>
                      ";
                    // line 62
                    $context["index"] = 0;
                    // line 63
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["header"] ?? $this->getContext($context, "header")));
                    foreach ($context['_seq'] as $context["k"] => $context["h"]) {
                        // line 64
                        echo "                            ";
                        $context["fontClass"] = "";
                        echo "    

                            ";
                        // line 66
                        if ($this->getAttribute($context["line"], $context["k"], [], "array", true, true)) {
                            // line 67
                            echo "
                              ";
                            // line 68
                            if ($this->getAttribute($this->getAttribute($context["line"], $context["k"], [], "array"), "total", [])) {
                                echo " ";
                                // line 69
                                echo "                                  ";
                                $context["fontClass"] = "font-weight-bold text-right";
                                // line 70
                                echo "                              ";
                            }
                            // line 71
                            echo "
                              ";
                            // line 72
                            if ($this->getAttribute($this->getAttribute($context["line"], $context["k"], [], "array"), "promedia", [])) {
                                // line 73
                                echo "                                  <td class=\"";
                                echo twig_escape_filter($this->env, ($context["fontClass"] ?? $this->getContext($context, "fontClass")), "html", null, true);
                                echo "\">
                                    ";
                                // line 74
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getAttribute($context["line"], $context["k"], [], "array"), "value", []) / $this->getAttribute($this->getAttribute($context["line"], $context["k"], [], "array"), "count", [])), $this->getAttribute($this->getAttribute($context["line"], $context["k"], [], "array"), "decimales", []), ",", ""), "html", null, true);
                                echo "
                                  </td>
                              ";
                            } else {
                                // line 77
                                echo "                                  ";
                                if ($this->getAttribute($this->getAttribute($context["line"], $context["k"], [], "array"), "numeric", [])) {
                                    // line 78
                                    echo "                                      ";
                                    $context["fontClass"] = "text-right";
                                    // line 79
                                    echo "                                      ";
                                    if ($this->getAttribute($this->getAttribute($context["line"], $context["k"], [], "array"), "total", [])) {
                                        // line 80
                                        echo "                                        ";
                                        $context["fontClass"] = "text-right font-weight-bold";
                                        // line 81
                                        echo "                                      ";
                                    }
                                    // line 82
                                    echo "                                      <td class=\"";
                                    echo twig_escape_filter($this->env, ($context["fontClass"] ?? $this->getContext($context, "fontClass")), "html", null, true);
                                    echo "\">                                    
                                        ";
                                    // line 83
                                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["line"], $context["k"], [], "array"), "value", []), $this->getAttribute($this->getAttribute($context["line"], $context["k"], [], "array"), "decimales", []), ",", ""), "html", null, true);
                                    echo "                                    
                                      </td>
                                  ";
                                } else {
                                    // line 86
                                    echo "                                      <td>                                    
                                        ";
                                    // line 87
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["line"], $context["k"], [], "array"), "value", []), "html", null, true);
                                    echo "                                    
                                      </td>                                  
                                  ";
                                }
                                // line 90
                                echo "                                  
                              ";
                            }
                            // line 92
                            echo "
                            ";
                        } else {
                            // line 94
                            echo "                              ";
                            if ((($context["index"] ?? $this->getContext($context, "index")) == 0)) {
                                // line 95
                                echo "                                <td class=\"font-weight-bold\">TOTAL</td>
                              ";
                            } else {
                                // line 97
                                echo "                                <td></td>
                              ";
                            }
                            // line 99
                            echo "
                            ";
                        }
                        // line 101
                        echo "                            ";
                        $context["index"] = 1;
                        // line 102
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['h'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "
          </tbody>
        </table>
      ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:informes:informePolloVivo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 107,  308 => 105,  301 => 103,  295 => 102,  292 => 101,  288 => 99,  284 => 97,  280 => 95,  277 => 94,  273 => 92,  269 => 90,  263 => 87,  260 => 86,  254 => 83,  249 => 82,  246 => 81,  243 => 80,  240 => 79,  237 => 78,  234 => 77,  228 => 74,  223 => 73,  221 => 72,  218 => 71,  215 => 70,  212 => 69,  209 => 68,  206 => 67,  204 => 66,  198 => 64,  193 => 63,  191 => 62,  188 => 61,  184 => 60,  181 => 59,  177 => 58,  171 => 54,  162 => 52,  158 => 51,  153 => 48,  151 => 47,  146 => 45,  140 => 42,  132 => 37,  128 => 36,  120 => 31,  116 => 30,  110 => 27,  106 => 26,  100 => 23,  96 => 22,  88 => 17,  84 => 16,  78 => 13,  74 => 12,  68 => 9,  60 => 3,  51 => 2,  29 => 1,);
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
\t<span class=\"h5 card-title\">INFORME POLLO VIVO</span>
</div>
<hr>
      {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
      <div class=\"form-row\">
      \t<div class=\"col col-lg-4\">
      \t\t{{ form_label(form.desde) }}
      \t\t{{ form_widget(form.desde) }}
      \t</div>
      \t<div class=\"col col-lg-4\">
      \t\t{{ form_label(form.hasta) }}
      \t\t{{ form_widget(form.hasta) }}
      \t</div>
      </div>
      <div class=\"form-row\">
      \t<div class=\"col col-lg-4\">
      \t\t{{ form_label(form.transporte) }}
      \t\t{{ form_widget(form.transporte) }}
      \t</div>
      \t<div class=\"col col-lg-4\">
      \t\t{{ form_label(form.cargador) }}
      \t\t{{ form_widget(form.cargador) }}
      \t</div>
        <div class=\"col col-lg-4\">
          {{ form_label(form.granja) }}
          {{ form_widget(form.granja) }}
        </div>
      </div>
      <div class=\"form-row\">
        <div class=\"col col-lg-4\">
          {{ form_label(form.agrupar, 'Agrupar por ...') }}
          {{ form_widget(form.agrupar) }}
        </div>
      </div>
      <div class=\"form-row\">
      \t<div class=\"col col-lg-4\">
      \t\t{{ form_widget(form.cargar) }}
      \t</div>
      </div>
      {{ form_end(form) }}

      {% if header is defined%}
        <table class=\"table table-striped table-bordered table-hover table-sm \">
          <thead>
            <tr>
              {% for h in header %}
                <th>{{ h.value }}</th>
              {% endfor %}
            </tr>
          </thead>
          <tbody>

            {% for group in data %}

                {% for line in group %}
                    <tr>
                      {% set index = 0 %}
                      {% for k, h in header %}
                            {% set fontClass = \"\" %}    

                            {% if line[k] is defined %}

                              {% if line[k].total %} {# imprime la fila de totales #}
                                  {% set fontClass = \"font-weight-bold text-right\" %}
                              {% endif %}

                              {% if line[k].promedia %}
                                  <td class=\"{{ fontClass }}\">
                                    {{ (line[k].value/line[k].count)|number_format(line[k].decimales, ',', '') }}
                                  </td>
                              {% else %}
                                  {% if line[k].numeric %}
                                      {% set fontClass = \"text-right\" %}
                                      {% if line[k].total %}
                                        {% set fontClass = \"text-right font-weight-bold\" %}
                                      {% endif %}
                                      <td class=\"{{ fontClass }}\">                                    
                                        {{ line[k].value|number_format(line[k].decimales, ',', '') }}                                    
                                      </td>
                                  {% else %}
                                      <td>                                    
                                        {{ line[k].value }}                                    
                                      </td>                                  
                                  {% endif %}
                                  
                              {% endif %}

                            {% else %}
                              {% if index == 0 %}
                                <td class=\"font-weight-bold\">TOTAL</td>
                              {% else %}
                                <td></td>
                              {% endif %}

                            {% endif %}
                            {% set index = 1 %}
                      {% endfor %}
                    </tr>
                {% endfor %}

            {% endfor %}

          </tbody>
        </table>
      {% endif %}
{% endblock fos_user_content %}
", "GestionFaenaBundle:informes:informePolloVivo.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/informes/informePolloVivo.html.twig");
    }
}
