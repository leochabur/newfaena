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

/* GestionFaenaBundle:gestionBD:editFactores.html.twig */
class __TwigTemplate_d726e852ca855cc11785023c384fdf257e8fac071295ffdb435e33ffd61e11f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:gestionBD:editFactores.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:gestionBD:editFactores.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:gestionBD:editFactores.html.twig", 1);
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
        echo "<div class=\"container\">
    <br>
    ";
        // line 7
        if ((isset($context["form"]) || array_key_exists("form", $context))) {
            // line 8
            echo "        <p class=\"h5 card-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["atributo"] ?? $this->getContext($context, "atributo")), "articuloAtrConc", []), "vistaEdicion", []), "html", null, true);
            echo "</p>
        <p class=\"h5 card-title\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["atributo"] ?? $this->getContext($context, "atributo")), "atributoAbstracto", []), "html", null, true);
            echo "</p>
        <hr>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "sussecc"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "          <div class=\"alert alert-success\" role=\"alert\">
            ";
                // line 13
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
          <div class=\"form-row\">
              <div class=\"col-4\">
                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "factores", []), 'label');
            echo "
                ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "factores", []), 'widget');
            echo "
              </div>
          </div>
                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cargar", []), 'widget');
            echo "

            ";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
    ";
        } else {
            // line 27
            echo "        <p class=\"h5 card-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["atributo"] ?? $this->getContext($context, "atributo")), "atributoAbstracto", []), "html", null, true);
            echo "</p>
        <p class=\"h5 card-title\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["factor"] ?? $this->getContext($context, "factor")), "action", []), "html", null, true);
            echo "</p>
        <hr>
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "sussecc"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "          <div class=\"alert alert-success\" role=\"alert\">
            ";
                // line 32
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAdd"] ?? $this->getContext($context, "formAdd")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
          <div class=\"form-row\">
              <div class=\"col-4\">
                ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAdd"] ?? $this->getContext($context, "formAdd")), "factores", []), 'label');
            echo "
                ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAdd"] ?? $this->getContext($context, "formAdd")), "factores", []), 'widget');
            echo "
              </div>
          </div>
          <div class=\"form-row\">
              <div class=\"col-4\">
                ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAdd"] ?? $this->getContext($context, "formAdd")), "conceptos", []), 'label');
            echo "
                ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAdd"] ?? $this->getContext($context, "formAdd")), "conceptos", []), 'widget');
            echo "
              </div>
          </div>
                ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAdd"] ?? $this->getContext($context, "formAdd")), "asignar", []), 'widget');
            echo "
            ";
            // line 49
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAdd"] ?? $this->getContext($context, "formAdd")), 'form_end');
            echo "
          <br>
  <div class=\"form-check\">
    <input type=\"checkbox\" class=\"form-check-input chonly\" id=\"exampleCheck1\"  ";
            // line 52
            if ($this->getAttribute(($context["factor"] ?? $this->getContext($context, "factor")), "soloIngreso", [])) {
                echo " checked ";
            }
            echo ">
    <label class=\"form-check-label\" for=\"exampleCheck1\">Solo a Ingresos</label>
  </div>
  <br>
          <p class=\"h5\">Conceptos a excluir al momento de calcular el factor</p>
          <table class=\"table table-bordered table-hover table-striped table-sm\">
            <thead>
              <tr>
                <th>Concepto</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["factor"] ?? $this->getContext($context, "factor")), "conceptosExcentos", []));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 66
                echo "                <tr>
                    <td>";
                // line 67
                echo twig_escape_filter($this->env, $context["c"], "html", null, true);
                echo "</td>
                    <td></td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            </tbody>
          </table>
          <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_editar_factor_calculo", ["atr" => $this->getAttribute(($context["atributo"] ?? $this->getContext($context, "atributo")), "id", [])]), "html", null, true);
            echo "\"  class=\"btn btn-success\"><< Volver </a>
    ";
        }
        // line 75
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "
<script type=\"text/javascript\">
";
        // line 81
        if ((isset($context["factor"]) || array_key_exists("factor", $context))) {
            // line 82
            echo "
  \$('.chonly').change(function() {                            
                            var estado = 0;
                            if (\$(this).is(':checked'))
                              estado = 1;
                            \$.post(\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_editar_factor_calculo_cambiar_solo_ingreso", ["fc" => $this->getAttribute(($context["factor"] ?? $this->getContext($context, "factor")), "id", [])]), "html", null, true);
            echo "\",
                                   {state : estado},
                                   function(data){
                                                  alert(data.state);
                                    
                                });
  });
  ";
        }
        // line 95
        echo "  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:gestionBD:editFactores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 95,  262 => 87,  255 => 82,  253 => 81,  249 => 79,  240 => 78,  229 => 75,  224 => 73,  220 => 71,  210 => 67,  207 => 66,  203 => 65,  185 => 52,  179 => 49,  175 => 48,  169 => 45,  165 => 44,  157 => 39,  153 => 38,  146 => 35,  137 => 32,  134 => 31,  130 => 30,  125 => 28,  120 => 27,  115 => 25,  110 => 23,  104 => 20,  100 => 19,  93 => 16,  84 => 13,  81 => 12,  77 => 11,  72 => 9,  67 => 8,  65 => 7,  61 => 5,  52 => 4,  30 => 1,);
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
<div class=\"container\">
    <br>
    {% if form is defined %}
        <p class=\"h5 card-title\">{{ atributo.articuloAtrConc.vistaEdicion }}</p>
        <p class=\"h5 card-title\">{{ atributo.atributoAbstracto}}</p>
        <hr>
        {% for message in app.flashes('sussecc') %}
          <div class=\"alert alert-success\" role=\"alert\">
            {{ message }}
          </div>
        {% endfor %}
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
          <div class=\"form-row\">
              <div class=\"col-4\">
                {{ form_label(form.factores) }}
                {{ form_widget(form.factores) }}
              </div>
          </div>
                {{ form_widget(form.cargar) }}

            {{ form_end(form) }}
    {% else %}
        <p class=\"h5 card-title\">{{ atributo.atributoAbstracto}}</p>
        <p class=\"h5 card-title\">{{ factor.action}}</p>
        <hr>
        {% for message in app.flashes('sussecc') %}
          <div class=\"alert alert-success\" role=\"alert\">
            {{ message }}
          </div>
        {% endfor %}
        {{ form_start(formAdd, {'attr': {'novalidate': 'novalidate'}}) }}
          <div class=\"form-row\">
              <div class=\"col-4\">
                {{ form_label(formAdd.factores) }}
                {{ form_widget(formAdd.factores) }}
              </div>
          </div>
          <div class=\"form-row\">
              <div class=\"col-4\">
                {{ form_label(formAdd.conceptos) }}
                {{ form_widget(formAdd.conceptos) }}
              </div>
          </div>
                {{ form_widget(formAdd.asignar) }}
            {{ form_end(formAdd) }}
          <br>
  <div class=\"form-check\">
    <input type=\"checkbox\" class=\"form-check-input chonly\" id=\"exampleCheck1\"  {% if factor.soloIngreso %} checked {% endif %}>
    <label class=\"form-check-label\" for=\"exampleCheck1\">Solo a Ingresos</label>
  </div>
  <br>
          <p class=\"h5\">Conceptos a excluir al momento de calcular el factor</p>
          <table class=\"table table-bordered table-hover table-striped table-sm\">
            <thead>
              <tr>
                <th>Concepto</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              {% for c in factor.conceptosExcentos %}
                <tr>
                    <td>{{ c }}</td>
                    <td></td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
          <a href=\"{{ path('bd_editar_factor_calculo', {atr : atributo.id}) }}\"  class=\"btn btn-success\"><< Volver </a>
    {% endif %}
</div>
{% endblock fos_user_content %}

{% block javascripts %}

<script type=\"text/javascript\">
{% if factor is defined %}

  \$('.chonly').change(function() {                            
                            var estado = 0;
                            if (\$(this).is(':checked'))
                              estado = 1;
                            \$.post(\"{{ path('bd_editar_factor_calculo_cambiar_solo_ingreso', {fc : factor.id}) }}\",
                                   {state : estado},
                                   function(data){
                                                  alert(data.state);
                                    
                                });
  });
  {% endif %}
  </script>
{% endblock %}", "GestionFaenaBundle:gestionBD:editFactores.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/gestionBD/editFactores.html.twig");
    }
}
