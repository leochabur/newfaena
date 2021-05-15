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

/* @GestionSigcer/opciones/findSolicitud.html.twig */
class __TwigTemplate_06058c19fc23f3dc3ba8c7c6f3f4730f66c2a6470b8b9c2b6b28095c3f3ae24b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionSigcer/opciones/findSolicitud.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionSigcer/opciones/findSolicitud.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionSigcer/opciones/findSolicitud.html.twig", 1);
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
<span class=\"h5 card-title\">Buscar solicitud</span>
<hr>

<div class=\"\">
\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"form-row\">
      <div class=\"col-4\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precinto", []), 'label');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precinto", []), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "find", []), 'widget');
        echo "
      </div>
    </div>
\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
  ";
        // line 23
        if ((isset($context["solicitudes"]) || array_key_exists("solicitudes", $context))) {
            // line 24
            echo "    <span class=\"h5\">Resultados de la busqueda...</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Zona</th>
            <th>Destino</th>
            <th>Precintos</th>
            <th>Camion</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["solicitudes"] ?? $this->getContext($context, "solicitudes")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 39
                echo "            <tr>
                <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
                <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "grupo", []), "fecha", []), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "zona", []), "html", null, true);
                echo "</td>
                <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "lugarDestino", []), "html", null, true);
                echo "</td>
                <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "precintoSenasa", []), "html", null, true);
                echo "</td>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "camion", []), "html", null, true);
                echo "</td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </tbody>
    </table>
  ";
        }
        // line 51
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionSigcer/opciones/findSolicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 51,  172 => 48,  155 => 45,  151 => 44,  147 => 43,  143 => 42,  139 => 41,  135 => 40,  132 => 39,  115 => 38,  99 => 24,  97 => 23,  92 => 21,  86 => 18,  78 => 13,  74 => 12,  68 => 9,  60 => 3,  51 => 2,  29 => 1,);
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
<span class=\"h5 card-title\">Buscar solicitud</span>
<hr>

<div class=\"\">
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-row\">
      <div class=\"col-4\">
        {{ form_label(form.precinto) }}
        {{ form_widget(form.precinto) }}
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        {{ form_widget(form.find) }}
      </div>
    </div>
\t{{ form_end(form) }}
    <br>
  {% if solicitudes is defined %}
    <span class=\"h5\">Resultados de la busqueda...</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Zona</th>
            <th>Destino</th>
            <th>Precintos</th>
            <th>Camion</th>
          </tr>
        </thead>
        <tbody>
          {% for p in solicitudes %}
            <tr>
                <td>{{ loop.index }}</td>
                <td>{{ p.grupo.fecha|date('d/m/Y') }}</td>
                <td>{{ p.zona }}</td>
                <td>{{ p.lugarDestino }}</td>
                <td>{{ p.precintoSenasa }}</td>
                <td>{{ p.camion }}</td>
            </tr>
          {% endfor %}
        </tbody>
    </table>
  {% endif %}
</div>
{% endblock fos_user_content %}
", "@GestionSigcer/opciones/findSolicitud.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionSigcerBundle\\Resources\\views\\opciones\\findSolicitud.html.twig");
    }
}
