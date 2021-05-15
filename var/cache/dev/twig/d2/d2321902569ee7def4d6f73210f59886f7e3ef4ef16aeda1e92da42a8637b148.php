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

/* GestionSigcerBundle::generarMultiples.html.twig */
class __TwigTemplate_69639cb9e258d1dffc64a78b0c237d5d51babbd74ca96b5ef7b483c55b657147 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionSigcerBundle::generarMultiples.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionSigcerBundle::generarMultiples.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionSigcerBundle::generarMultiples.html.twig", 1);
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
<span class=\"h5 card-title\">Solicitudes de fecha: ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["grupo"] ?? $this->getContext($context, "grupo")), "fecha", []), "d/m/Y"), "html", null, true);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "warning"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "  <div class=\"alert alert-warning\" role=\"alert\">
    ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "<div class=\"\">
\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"form-row\">
      <div class=\"col-2\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "region", []), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "region", []), 'widget');
        echo "
      </div>
      <div class=\"col-2\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precinto", []), 'label', ["label" => "Inicio Precinto"]);
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precinto", []), 'widget');
        echo "
      </div>
      <div class=\"col-4\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tropa", []), 'label');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tropa", []), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "generar", []), 'widget');
        echo "
      </div>
    </div>
\t";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
  <hr>
  ";
        // line 41
        if ((isset($context["solicitudes"]) || array_key_exists("solicitudes", $context))) {
            // line 42
            echo "  <h4>Solicitudes Region: ";
            echo twig_escape_filter($this->env, ($context["region"] ?? $this->getContext($context, "region")), "html", null, true);
            echo "</h4>
  <hr>
    
        <table class=\"table table-striped table-bordered table-hover table-sm \">
            <thead>
              <tr>
                <th>Zona</th>
                <th>Localidad</th>
                <th>
                          <div  class=\"form-row\">
                            <div class=\"col-2\">Camion.</div>
                            <div class=\"col-2\">Tº</div>
                            <div class=\"col-3\">Precinto</div>                            
                            <div class=\"col-2\"></div> 
                          </div>
                </th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["solicitudes"] ?? $this->getContext($context, "solicitudes")));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 62
                echo "                  <tr>
                      <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "zona", []), "codigo", []), "html", null, true);
                echo "</td>
                      <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "zona", []), "zona", [])), "html", null, true);
                echo "</td>
                      ";
                // line 65
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["forms"] ?? $this->getContext($context, "forms")), $this->getAttribute($context["s"], "id", []), [], "array"), 'form_start', ["attr" => ["class" => "upd", "novalidate" => "novalidate"]]);
                echo "
                      <td class=\"text-right\">
                          <div  class=\"form-row text-right\">
                            <div class=\"col-2\">";
                // line 68
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["forms"] ?? $this->getContext($context, "forms")), $this->getAttribute($context["s"], "id", []), [], "array"), "camion", []), 'widget', ["attr" => ["class" => "form-control form-control-sm"]]);
                echo "</div>
                            <div class=\"col-2\">";
                // line 69
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["forms"] ?? $this->getContext($context, "forms")), $this->getAttribute($context["s"], "id", []), [], "array"), "temp", []), 'widget', ["attr" => ["class" => "form-control form-control-sm"]]);
                echo "</div>
                            <div class=\"col-3\">";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["forms"] ?? $this->getContext($context, "forms")), $this->getAttribute($context["s"], "id", []), [], "array"), "precinto", []), 'widget', ["attr" => ["class" => "form-control form-control-sm"]]);
                echo "</div>                        
                            <div class=\"col-2\">";
                // line 71
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["forms"] ?? $this->getContext($context, "forms")), $this->getAttribute($context["s"], "id", []), [], "array"), "load", []), 'widget', ["attr" => ["class" => "btn btn-warning btn-sm"]]);
                echo "</div> 
                          </div>
                      </td>
                      ";
                // line 74
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["forms"] ?? $this->getContext($context, "forms")), $this->getAttribute($context["s"], "id", []), [], "array"), 'form_end');
                echo "
                  </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            </tbody>
        </table>
    ";
        }
        // line 80
        echo "    <hr>
    <div>
        <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_grupos_solicitudes");
        echo "\" class=\"btn btn-success\"><< Volver</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">

          \$('.upd').submit(function(event){
                                            event.preventDefault();
                                            var form = \$(this);
                                            var route = form.attr('action');
                                            \$.post(route,
                                                   form.serialize(),
                                                   function(data){
                                                                  if (data.status)
                                                                      alert('Actualizacion realizada exitosamente!!')
                                                                  else
                                                                      alert(data.message);
                                                   });
                                            
          });
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionSigcerBundle::generarMultiples.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 86,  250 => 85,  237 => 82,  233 => 80,  228 => 77,  219 => 74,  213 => 71,  209 => 70,  205 => 69,  201 => 68,  195 => 65,  191 => 64,  187 => 63,  184 => 62,  180 => 61,  157 => 42,  155 => 41,  149 => 38,  143 => 35,  135 => 30,  131 => 29,  125 => 26,  121 => 25,  115 => 22,  111 => 21,  105 => 18,  102 => 17,  93 => 14,  90 => 13,  86 => 12,  77 => 9,  74 => 8,  70 => 7,  65 => 5,  61 => 3,  52 => 2,  30 => 1,);
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
<span class=\"h5 card-title\">Solicitudes de fecha: {{ grupo.fecha|date('d/m/Y') }}</span>
<hr>
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
{% for message in app.flashes('warning') %}
  <div class=\"alert alert-warning\" role=\"alert\">
    {{ message }}
  </div>
{% endfor %}
<div class=\"\">
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-row\">
      <div class=\"col-2\">
        {{ form_label(form.region) }}
        {{ form_widget(form.region) }}
      </div>
      <div class=\"col-2\">
        {{ form_label(form.precinto, 'Inicio Precinto') }}
        {{ form_widget(form.precinto) }}
      </div>
      <div class=\"col-4\">
        {{ form_label(form.tropa) }}
        {{ form_widget(form.tropa) }}
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        {{ form_widget(form.generar) }}
      </div>
    </div>
\t{{ form_end(form) }}
</div>
  <hr>
  {% if solicitudes is defined %}
  <h4>Solicitudes Region: {{ region }}</h4>
  <hr>
    
        <table class=\"table table-striped table-bordered table-hover table-sm \">
            <thead>
              <tr>
                <th>Zona</th>
                <th>Localidad</th>
                <th>
                          <div  class=\"form-row\">
                            <div class=\"col-2\">Camion.</div>
                            <div class=\"col-2\">Tº</div>
                            <div class=\"col-3\">Precinto</div>                            
                            <div class=\"col-2\"></div> 
                          </div>
                </th>
              </tr>
            </thead>
            <tbody>
              {% for s in solicitudes %}
                  <tr>
                      <td>{{ s.zona.codigo }}</td>
                      <td>{{ s.zona.zona|upper }}</td>
                      {{ form_start(forms[s.id], {'attr' : {'class' : 'upd', 'novalidate' : 'novalidate'}} ) }}
                      <td class=\"text-right\">
                          <div  class=\"form-row text-right\">
                            <div class=\"col-2\">{{ form_widget(forms[s.id].camion, {'attr' : {'class' : 'form-control form-control-sm'}}) }}</div>
                            <div class=\"col-2\">{{ form_widget(forms[s.id].temp, {'attr' : {'class' : 'form-control form-control-sm'}}) }}</div>
                            <div class=\"col-3\">{{ form_widget(forms[s.id].precinto, {'attr' : {'class' : 'form-control form-control-sm'}}) }}</div>                        
                            <div class=\"col-2\">{{ form_widget(forms[s.id].load, {'attr' : { 'class' : 'btn btn-warning btn-sm'}}) }}</div> 
                          </div>
                      </td>
                      {{ form_end(forms[s.id]) }}
                  </tr>
              {% endfor %}
            </tbody>
        </table>
    {% endif %}
    <hr>
    <div>
        <a href=\"{{ path('sigcer_add_grupos_solicitudes') }}\" class=\"btn btn-success\"><< Volver</a>
    </div>
{% endblock fos_user_content %}
{% block javascripts %}
 {{ parent() }}
<script type=\"text/javascript\">

          \$('.upd').submit(function(event){
                                            event.preventDefault();
                                            var form = \$(this);
                                            var route = form.attr('action');
                                            \$.post(route,
                                                   form.serialize(),
                                                   function(data){
                                                                  if (data.status)
                                                                      alert('Actualizacion realizada exitosamente!!')
                                                                  else
                                                                      alert(data.message);
                                                   });
                                            
          });
</script>

{% endblock  %}", "GestionSigcerBundle::generarMultiples.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionSigcerBundle/Resources/views/generarMultiples.html.twig");
    }
}
