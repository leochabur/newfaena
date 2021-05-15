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

/* GestionFaenaBundle:exportacion:abmTipoPallet.html.twig */
class __TwigTemplate_309017b0ad8924f92c2cb5caf3896b4fba0775308984f12d7dc2d08d088c4724 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:exportacion:abmTipoPallet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:exportacion:abmTipoPallet.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:exportacion:abmTipoPallet.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/css/bootstrap-multiselect.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <style type=\"text/css\">
input::-webkit-input-placeholder {
    font-size: 5px;
    line-height: 4;
}
  </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "<br>
<hr>
<span class=\"h5 card-title\">";
        // line 16
        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        echo " Tipo Pallet</span>
<hr>
";
        // line 18
        $this->loadTemplate("@GestionFaena/messages.html.twig", "GestionFaenaBundle:exportacion:abmTipoPallet.html.twig", 18)->display($context);
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "sussecc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "\t<div class=\"alert alert-success\" role=\"alert\">
\t  ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
<div class=\"\">
\t";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"form-row\">
      <div class=\"col-lg-4\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'label');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", []), 'widget');
        echo "
      </div>
      <div class=\"col-lg-2\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacidad", []), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capacidad", []), 'widget');
        echo "
      </div>
      <div class=\"col-lg-2\">
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prefijo", []), 'label');
        echo "
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prefijo", []), 'widget');
        echo "
      </div>
    </div>

      <div class=\"row ml-1 mt-2\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "articulos", []), 'label');
        echo "
      </div>
      <div class=\"row ml-1\">
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "articulos", []), 'widget', ["attr" => ["class" => "select-articulos col-lg-12"]]);
        echo "
      </div>
    ";
        // line 48
        if ($this->getAttribute(($context["form"] ?? null), "activo", [], "any", true, true)) {
            // line 49
            echo "      <div class=\"row ml-2 mt-2\">
        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "activo", []), 'label');
            echo "
        ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "activo", []), 'widget');
            echo "
      </div>
    ";
        }
        // line 54
        echo "    <div class=\"form-row\">
      <div class=\"col\">
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
        echo "
      </div>
    </div>
\t";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
    ";
        // line 61
        if ((isset($context["tipos"]) || array_key_exists("tipos", $context))) {
            // line 62
            echo "          <span class=\"h5\">Tipos Pallet Existentes</span>
          <hr>
          <table class=\"table table-striped table-bordered table-hover table-sm \">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tipo</th>
                  <th>Capacidad</th>
                  <th>Cant Articulos</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? $this->getContext($context, "tipos")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 76
                echo "                  <tr>
                    <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
                    <td>";
                // line 78
                echo twig_escape_filter($this->env, $context["t"], "html", null, true);
                echo "</td>   
                    <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "capacidad", []), "html", null, true);
                echo "</td>          
                    <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["t"], "articulos", [])), "html", null, true);
                echo "</td>
                    <td> <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exportaciones_editar_tipo_pallet", ["id" => $this->getAttribute($context["t"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">Modificar</a></td>
                  </tr>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "              </tbody>
          </table>
    ";
        }
        // line 87
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/bootstrap-multiselect.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('.select-articulos').multiselect({
              enableClickableOptGroups: true,
              buttonWidth: '400px',
              dropRight: true
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:exportacion:abmTipoPallet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 92,  300 => 91,  291 => 90,  280 => 87,  275 => 84,  258 => 81,  254 => 80,  250 => 79,  246 => 78,  242 => 77,  239 => 76,  222 => 75,  207 => 62,  205 => 61,  200 => 59,  194 => 56,  190 => 54,  184 => 51,  180 => 50,  177 => 49,  175 => 48,  170 => 46,  164 => 43,  156 => 38,  152 => 37,  146 => 34,  142 => 33,  136 => 30,  132 => 29,  126 => 26,  122 => 24,  113 => 21,  110 => 20,  106 => 19,  104 => 18,  99 => 16,  95 => 14,  86 => 13,  67 => 4,  62 => 3,  53 => 2,  31 => 1,);
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
  {{ parent() }}
  <link href=\"{{ asset('resources/css/bootstrap-multiselect.css') }}\" rel=\"stylesheet\">

  <style type=\"text/css\">
input::-webkit-input-placeholder {
    font-size: 5px;
    line-height: 4;
}
  </style>
{% endblock %}
{% block fos_user_content %}
<br>
<hr>
<span class=\"h5 card-title\">{{ label }} Tipo Pallet</span>
<hr>
{% include '@GestionFaena/messages.html.twig'  %}
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}

<div class=\"\">
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-row\">
      <div class=\"col-lg-4\">
        {{ form_label(form.tipo) }}
        {{ form_widget(form.tipo) }}
      </div>
      <div class=\"col-lg-2\">
        {{ form_label(form.capacidad) }}
        {{ form_widget(form.capacidad) }}
      </div>
      <div class=\"col-lg-2\">
        {{ form_label(form.prefijo) }}
        {{ form_widget(form.prefijo) }}
      </div>
    </div>

      <div class=\"row ml-1 mt-2\">
        {{ form_label(form.articulos) }}
      </div>
      <div class=\"row ml-1\">
        {{ form_widget(form.articulos, { 'attr' : {'class' : 'select-articulos col-lg-12'}}) }}
      </div>
    {% if form.activo is defined %}
      <div class=\"row ml-2 mt-2\">
        {{ form_label(form.activo) }}
        {{ form_widget(form.activo) }}
      </div>
    {% endif %}
    <div class=\"form-row\">
      <div class=\"col\">
        {{ form_widget(form.guardar) }}
      </div>
    </div>
\t{{ form_end(form) }}
    <br>
    {% if tipos is defined %}
          <span class=\"h5\">Tipos Pallet Existentes</span>
          <hr>
          <table class=\"table table-striped table-bordered table-hover table-sm \">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tipo</th>
                  <th>Capacidad</th>
                  <th>Cant Articulos</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              {% for t in tipos %}
                  <tr>
                    <td>{{ loop.index }}</td>
                    <td>{{ t }}</td>   
                    <td>{{ t.capacidad }}</td>          
                    <td>{{ t.articulos|length }}</td>
                    <td> <a href=\"{{path('exportaciones_editar_tipo_pallet', { id : t.id})}}\" class=\"btn btn-sm btn-primary\">Modificar</a></td>
                  </tr>
                {% endfor %}
              </tbody>
          </table>
    {% endif %}
</div>
{% endblock fos_user_content %}

{% block javascripts %}
  {{ parent() }}
    <script src=\"{{ asset('resources/js/bootstrap-multiselect.js') }}\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('.select-articulos').multiselect({
              enableClickableOptGroups: true,
              buttonWidth: '400px',
              dropRight: true
            });
        });
    </script>
{% endblock javascripts %}", "GestionFaenaBundle:exportacion:abmTipoPallet.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/exportacion/abmTipoPallet.html.twig");
    }
}
