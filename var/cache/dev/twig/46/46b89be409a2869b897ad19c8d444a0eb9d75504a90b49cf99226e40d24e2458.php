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

/* @GestionVentas/ventas/resumenXArticulo.html.twig */
class __TwigTemplate_b26be0a8df12d112b45e2768accc825874827a8428c171ce6163363f208eba72 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionVentas/ventas/resumenXArticulo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionVentas/ventas/resumenXArticulo.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionVentas/ventas/resumenXArticulo.html.twig", 1);
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
<span class=\"h5 card-title\">Resumen Ventas Por Articulo</span>
<hr>
";
        // line 15
        $this->loadTemplate("@GestionFaena/messages.html.twig", "@GestionVentas/ventas/resumenXArticulo.html.twig", 15)->display($context);
        // line 16
        echo "
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
          <div class=\"form-row\">
            <div class=\"col-lg-4 col-sm-12\">
              ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fecha", []), 'widget', ["attr" => ["class" => "form-control form-control-sm mt-2 "]]);
        echo "
            </div>
            <div class=\"col-lg-2 col-sm-12\">
              ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'widget', ["attr" => ["class" => "form-control form-control-sm mt-2 "]]);
        echo "
            </div>
            <div class=\"col-lg-4 col-sm-12\">
              ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cargar", []), 'widget', ["attr" => ["class" => "btn btn-sm  btn-primary btnsend"]]);
        echo "
            </div>
          </div>
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<hr>

";
        // line 32
        if ((isset($context["items"]) || array_key_exists("items", $context))) {
            // line 33
            echo "    <!--table class=\"table table-striped table-bordered table-hover table-sm fs-6\"-->
    <table id=\"dt-vertical-scroll\" class=\"table table-sm\" cellspacing=\"0\" width=\"100%\">
      <thead>
        <tr class=\"border-secondary border\">
            <th>Destinatario</th>
            <th>Fecha</th>
            <th>Numero</th>
            <th>Articulo</th>
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? $this->getContext($context, "tipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 42
                echo "              <th>Cant. ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "codigo", []), "html", null, true);
                echo "</th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </tr>
        </thead>
        <tbody>        
          ";
            // line 47
            $context["i"] = 1;
            // line 48
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? $this->getContext($context, "items")));
            foreach ($context['_seq'] as $context["kit"] => $context["it"]) {
                // line 49
                echo "              ";
                $context["count"] = 0;
                // line 50
                echo "              <tr class=\"";
                echo twig_escape_filter($this->env, (($context["i"] ?? $this->getContext($context, "i")) % 2), "html", null, true);
                echo "\">
                    <td rowspan=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "record", []), "html", null, true);
                echo "\" class=\"align-middle border-top border-secondary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "entidad", []), "html", null, true);
                echo "</td>
                    <td rowspan=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "record", []), "html", null, true);
                echo "\" class=\"align-middle border-top border-secondary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "fecha", []), "html", null, true);
                echo "</td>
                    <td rowspan=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "record", []), "html", null, true);
                echo "\" class=\"align-middle border-top border-secondary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "numero", []), "html", null, true);
                echo "</td>

                    ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["it"], "items", []));
                foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                    echo " 

                      ";
                    // line 57
                    if ((($context["count"] ?? $this->getContext($context, "count")) > 0)) {
                        // line 58
                        echo "                        <tr class=\"";
                        echo twig_escape_filter($this->env, (($context["i"] ?? $this->getContext($context, "i")) % 2), "html", null, true);
                        echo "\">
                      ";
                    }
                    // line 59
                    echo "    
                      ";
                    // line 60
                    $context["class"] = "border-top border-secondary";
                    echo " 
                      <td class=\"";
                    // line 61
                    echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["it"], "art", [], "array"), "html", null, true);
                    echo "</td>

                      ";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? $this->getContext($context, "tipos")));
                    foreach ($context['_seq'] as $context["k"] => $context["t"]) {
                        // line 64
                        echo "                          ";
                        if ($this->getAttribute($context["it"], $context["k"], [], "array", true, true)) {
                            // line 65
                            echo "                            <td class=\"text-right ";
                            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["it"], $context["k"], [], "array"), "html", null, true);
                            echo "</td>
                          ";
                        } else {
                            // line 67
                            echo "                            <td class=\"text-right ";
                            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                            echo "\"></td>
                          ";
                        }
                        // line 69
                        echo "
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['t'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "  
                      </tr>  
                      ";
                    // line 72
                    $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                    // line 73
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "              ";
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 75
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['kit'], $context['it'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "        </tbody>
    </table>  
";
        }
        // line 79
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
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
        return "@GestionVentas/ventas/resumenXArticulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 84,  289 => 83,  276 => 79,  271 => 76,  265 => 75,  262 => 74,  256 => 73,  254 => 72,  250 => 70,  243 => 69,  237 => 67,  229 => 65,  226 => 64,  222 => 63,  215 => 61,  211 => 60,  208 => 59,  202 => 58,  200 => 57,  193 => 55,  186 => 53,  180 => 52,  174 => 51,  169 => 50,  166 => 49,  161 => 48,  159 => 47,  154 => 44,  145 => 42,  141 => 41,  131 => 33,  129 => 32,  123 => 29,  117 => 26,  111 => 23,  105 => 20,  99 => 17,  96 => 16,  94 => 15,  85 => 10,  76 => 9,  62 => 4,  53 => 3,  31 => 1,);
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
<span class=\"h5 card-title\">Resumen Ventas Por Articulo</span>
<hr>
{% include '@GestionFaena/messages.html.twig'  %}

{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
          <div class=\"form-row\">
            <div class=\"col-lg-4 col-sm-12\">
              {{ form_widget(form.fecha, { 'attr' : {'class' : 'form-control form-control-sm mt-2 '}}) }}
            </div>
            <div class=\"col-lg-2 col-sm-12\">
              {{ form_widget(form.tipo, { 'attr' : {'class' : 'form-control form-control-sm mt-2 '}}) }}
            </div>
            <div class=\"col-lg-4 col-sm-12\">
              {{ form_widget(form.cargar, { 'attr' : { 'class' : 'btn btn-sm  btn-primary btnsend' }}) }}
            </div>
          </div>
{{ form_end(form) }}
<hr>

{% if items is defined %}
    <!--table class=\"table table-striped table-bordered table-hover table-sm fs-6\"-->
    <table id=\"dt-vertical-scroll\" class=\"table table-sm\" cellspacing=\"0\" width=\"100%\">
      <thead>
        <tr class=\"border-secondary border\">
            <th>Destinatario</th>
            <th>Fecha</th>
            <th>Numero</th>
            <th>Articulo</th>
            {% for t in tipos %}
              <th>Cant. {{ t.codigo }}</th>
            {% endfor %}
        </tr>
        </thead>
        <tbody>        
          {% set i = 1 %}
          {% for kit, it in items %}
              {% set count = 0 %}
              <tr class=\"{{ i % 2 }}\">
                    <td rowspan=\"{{ it.record }}\" class=\"align-middle border-top border-secondary\">{{ it.entidad }}</td>
                    <td rowspan=\"{{ it.record }}\" class=\"align-middle border-top border-secondary\">{{ it.fecha }}</td>
                    <td rowspan=\"{{ it.record }}\" class=\"align-middle border-top border-secondary\">{{ it.numero }}</td>

                    {% for it in it.items %} 

                      {% if count > 0 %}
                        <tr class=\"{{ i % 2 }}\">
                      {% endif %}    
                      {% set class = 'border-top border-secondary' %} 
                      <td class=\"{{ class }}\">{{ it['art'] }}</td>

                      {% for k, t in tipos %}
                          {% if it[k] is defined %}
                            <td class=\"text-right {{ class }}\">{{ it[k] }}</td>
                          {% else %}
                            <td class=\"text-right {{ class }}\"></td>
                          {% endif %}

                      {% endfor %}  
                      </tr>  
                      {% set count = count + 1 %}
                    {% endfor %}
              {% set i = i + 1 %}
          {% endfor %}
        </tbody>
    </table>  
{% endif %}



{% endblock fos_user_content %}
{% block javascripts %}

<script type=\"text/javascript\">
    \$('.1').addClass('grey lighten-2');
    \$('.0').addClass('grey lighten-1');
</script>
{% endblock  %}", "@GestionVentas/ventas/resumenXArticulo.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionVentasBundle\\Resources\\views\\ventas\\resumenXArticulo.html.twig");
    }
}
