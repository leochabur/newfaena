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

/* GestionVentasBundle:ventas:loadFileVentas.html.twig */
class __TwigTemplate_ffdcd7f1c7f88b02ea1464ac4bc8015fe7fd739187eca7e884aea625b020fb46 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionVentasBundle:ventas:loadFileVentas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionVentasBundle:ventas:loadFileVentas.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionVentasBundle:ventas:loadFileVentas.html.twig", 1);
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
        echo "<style type=\"text/css\">


</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "  ";
        $this->displayParentBlock("fos_user_content", $context, $blocks);
        echo "
<br>
<hr>
<span class=\"h5 card-title\">Cargar archivo ventas</span>
<hr>
";
        // line 15
        $this->loadTemplate("@GestionFaena/messages.html.twig", "GestionVentasBundle:ventas:loadFileVentas.html.twig", 15)->display($context);
        // line 16
        echo "
  ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"row\">
        
        <div class=\"col-lg-6\">        
          ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "archivo", []), 'label');
        echo "
          ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "archivo", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">        
          ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cargar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success mt-4"]]);
        echo "
        </div>
        
    </div>
  ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <hr>

    ";
        // line 34
        if ((isset($context["articulos"]) || array_key_exists("articulos", $context))) {
            // line 35
            echo "    <span class=\"h5 card-title\">Listado de Ventas a Ingresar</span>
    <hr>
        <table class=\"table table-striped table-hover table-sm main-table\">
          <thead>
            <tr>
                <th>Fecha</th>
                <th>Zona</th>
                <th>Codigo</th>
                <th>Destinatario</th>
                <th>Codigo Art.</th>
                <th>Articulo</th>    
                <th>Cantidad</th>      
                <th>#</th>      
            </tr>
          </thead>
                ";
            // line 50
            $context["index"] = 1;
            // line 51
            echo "                ";
            $context["l"] = 0;
            // line 52
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["k"] => $context["it"]) {
                // line 53
                echo "                  ";
                $context["i"] = 0;
                // line 54
                echo "                  <tr class=\"";
                echo twig_escape_filter($this->env, (($context["l"] ?? $this->getContext($context, "l")) % 2), "html", null, true);
                echo "\">
                    <td rowspan=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "cant", []), "html", null, true);
                echo "\" class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "fecha", []), "html", null, true);
                echo "</td>
                    <td rowspan=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "cant", []), "html", null, true);
                echo "\" class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "zona", []), "html", null, true);
                echo "</td>
                    <td rowspan=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "cant", []), "html", null, true);
                echo "\" class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "code", []), "html", null, true);
                echo "</td>
                    <td rowspan=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "cant", []), "html", null, true);
                echo "\" class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "destinatario", []), "html", null, true);
                echo "</td>
                    ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["it"], "items", []));
                foreach ($context['_seq'] as $context["kv"] => $context["vta"]) {
                    // line 60
                    echo "                        ";
                    if ((($context["i"] ?? $this->getContext($context, "i")) == 0)) {
                        // line 61
                        echo "
                            <td>";
                        // line 62
                        echo twig_escape_filter($this->env, $context["kv"], "html", null, true);
                        echo "</td>
                            ";
                        // line 63
                        if ($this->getAttribute(($context["articulos"] ?? null), $context["kv"], [], "array", true, true)) {
                            // line 64
                            echo "                              <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["articulos"] ?? $this->getContext($context, "articulos")), $context["kv"], [], "array"), "html", null, true);
                            echo "</td>
                            ";
                        } else {
                            // line 66
                            echo "                              <td></td>
                            ";
                        }
                        // line 68
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, $context["vta"], "html", null, true);
                        echo "</td>
                            <td class=\"text-muted\">";
                        // line 69
                        echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
                        echo "</td>
                          </tr>

                        ";
                    } else {
                        // line 73
                        echo "
                          <tr class=\"";
                        // line 74
                        echo twig_escape_filter($this->env, (($context["l"] ?? $this->getContext($context, "l")) % 2), "html", null, true);
                        echo "\">
                            <td>";
                        // line 75
                        echo twig_escape_filter($this->env, $context["kv"], "html", null, true);
                        echo "</td>
                            ";
                        // line 76
                        if ($this->getAttribute(($context["articulos"] ?? null), $context["kv"], [], "array", true, true)) {
                            // line 77
                            echo "                              <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["articulos"] ?? $this->getContext($context, "articulos")), $context["kv"], [], "array"), "html", null, true);
                            echo "</td>
                            ";
                        } else {
                            // line 79
                            echo "                              <td></td>
                            ";
                        }
                        // line 81
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, $context["vta"], "html", null, true);
                        echo "</td>
                            <td class=\"text-muted\">";
                        // line 82
                        echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
                        echo "</td>
                          </tr>

                        ";
                    }
                    // line 86
                    echo "
                        ";
                    // line 87
                    $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                    // line 88
                    echo "                        ";
                    $context["index"] = (($context["index"] ?? $this->getContext($context, "index")) + 1);
                    // line 89
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['kv'], $context['vta'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                
                    ";
                // line 91
                $context["l"] = (($context["l"] ?? $this->getContext($context, "l")) + 1);
                // line 92
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['it'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "          <tbody>


          </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "
<script type=\"text/javascript\">
    \$('.1').addClass('grey lighten-2');
    \$('.0').addClass('grey lighten-1');
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionVentasBundle:ventas:loadFileVentas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 102,  307 => 101,  291 => 93,  285 => 92,  283 => 91,  280 => 90,  273 => 89,  270 => 88,  268 => 87,  265 => 86,  258 => 82,  253 => 81,  249 => 79,  243 => 77,  241 => 76,  237 => 75,  233 => 74,  230 => 73,  223 => 69,  218 => 68,  214 => 66,  208 => 64,  206 => 63,  202 => 62,  199 => 61,  196 => 60,  192 => 59,  186 => 58,  180 => 57,  174 => 56,  168 => 55,  163 => 54,  160 => 53,  155 => 52,  152 => 51,  150 => 50,  133 => 35,  131 => 34,  125 => 31,  118 => 27,  110 => 22,  106 => 21,  99 => 17,  96 => 16,  94 => 15,  85 => 10,  76 => 9,  62 => 4,  53 => 3,  31 => 1,);
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
<style type=\"text/css\">


</style>
{% endblock %}
{% block fos_user_content %}
  {{ parent() }}
<br>
<hr>
<span class=\"h5 card-title\">Cargar archivo ventas</span>
<hr>
{% include '@GestionFaena/messages.html.twig'  %}

  {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"row\">
        
        <div class=\"col-lg-6\">        
          {{ form_label(form.archivo) }}
          {{ form_widget(form.archivo, {'attr' : {'class' : 'form-control'}})  }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">        
          {{ form_widget(form.cargar, {'attr' : {'class' : 'btn btn-sm btn-success mt-4'}})  }}
        </div>
        
    </div>
  {{ form_end(form) }}
    <hr>

    {% if articulos is defined%}
    <span class=\"h5 card-title\">Listado de Ventas a Ingresar</span>
    <hr>
        <table class=\"table table-striped table-hover table-sm main-table\">
          <thead>
            <tr>
                <th>Fecha</th>
                <th>Zona</th>
                <th>Codigo</th>
                <th>Destinatario</th>
                <th>Codigo Art.</th>
                <th>Articulo</th>    
                <th>Cantidad</th>      
                <th>#</th>      
            </tr>
          </thead>
                {% set index = 1 %}
                {% set l = 0 %}
                {% for k, it in data %}
                  {% set i = 0 %}
                  <tr class=\"{{ l % 2 }}\">
                    <td rowspan=\"{{ it.cant }}\" class=\"align-middle\">{{ it.fecha }}</td>
                    <td rowspan=\"{{ it.cant }}\" class=\"align-middle\">{{ it.zona }}</td>
                    <td rowspan=\"{{ it.cant }}\" class=\"align-middle\">{{ it.code }}</td>
                    <td rowspan=\"{{ it.cant }}\" class=\"align-middle\">{{ it.destinatario }}</td>
                    {% for kv, vta in it.items %}
                        {% if i == 0 %}

                            <td>{{ kv }}</td>
                            {% if articulos[kv] is defined %}
                              <td>{{ articulos[kv] }}</td>
                            {% else %}
                              <td></td>
                            {% endif %}
                            <td>{{ vta }}</td>
                            <td class=\"text-muted\">{{ index }}</td>
                          </tr>

                        {% else %}

                          <tr class=\"{{ l % 2 }}\">
                            <td>{{ kv }}</td>
                            {% if articulos[kv] is defined %}
                              <td>{{  articulos[kv]  }}</td>
                            {% else %}
                              <td></td>
                            {% endif %}
                            <td>{{ vta }}</td>
                            <td class=\"text-muted\">{{ index }}</td>
                          </tr>

                        {% endif %}

                        {% set i = i + 1 %}
                        {% set index = index + 1 %}

                    {% endfor %}                
                    {% set l = l + 1 %}
                {% endfor %}
          <tbody>


          </tbody>
        </table>
    {% endif %}
{% endblock %}

{% block javascripts %}

<script type=\"text/javascript\">
    \$('.1').addClass('grey lighten-2');
    \$('.0').addClass('grey lighten-1');
</script>
{% endblock  %}", "GestionVentasBundle:ventas:loadFileVentas.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionVentasBundle/Resources/views/ventas/loadFileVentas.html.twig");
    }
}
