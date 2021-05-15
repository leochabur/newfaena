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

/* @GestionSigcer/editSolicitud.html.twig */
class __TwigTemplate_0c92bf3c223ea75790f3c203cc6c14ac004ccd85e6a0213a8fcfffe09bf09964 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionSigcer/editSolicitud.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionSigcer/editSolicitud.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionSigcer/editSolicitud.html.twig", 1);
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
<span class=\"h5 card-title\">Modificar Solicitud</span>
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
        echo "
<div class=\"\">
  ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"form-row\">
      <div class=\"col-4\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grupo", []), 'label', ["label" => "Solicitudes de fecha:"]);
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grupo", []), 'widget');
        echo "
      </div>
    </div>
    <br>
    ";
        // line 22
        if ( !$this->getAttribute(($context["grupo"] ?? $this->getContext($context, "grupo")), "exportacion", [])) {
            // line 23
            echo "              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zona", []), 'label');
            echo "
                  ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zona", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cliente", []), 'label');
            echo "
                  ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cliente", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "camion", []), 'label');
            echo "
                  ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "camion", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lugarDestino", []), 'label');
            echo "
                  ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lugarDestino", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precintos", []), 'label');
            echo "
                  ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precintos", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precintoSenasa", []), 'label');
            echo "
                  ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precintoSenasa", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precintoAduana", []), 'label');
            echo "
                  ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precintoAduana", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "temperatura", []), 'label');
            echo "
                  ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "temperatura", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "termoTemperatura", []), 'label', ["label" => "Tº termo-proceso"]);
            echo "
                  ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "termoTemperatura", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "termoTiempo", []), 'label', ["label" => " Tpo. termo-proceso"]);
            echo "
                  ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "termoTiempo", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-6\">
                  ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observaciones", []), 'label');
            echo "
                  ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observaciones", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col\">
                  ";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
            echo "
                </div>
              </div>
      ";
        } else {
            // line 83
            echo "              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "patenteCamion", []), 'label');
            echo "
                  ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "patenteCamion", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "patenteAcoplado", []), 'label');
            echo "
                  ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "patenteAcoplado", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "destinatarioExportacion", []), 'label');
            echo "
                  ";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "destinatarioExportacion", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precintoSenasa", []), 'label');
            echo "
                  ";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "precintoSenasa", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "remitoNumero", []), 'label');
            echo "
                  ";
            // line 104
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "remitoNumero", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "temperatura", []), 'label');
            echo "
                  ";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "temperatura", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  ";
            // line 113
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoTransporte", []), 'label');
            echo "
                  ";
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoTransporte", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombreBuque", []), 'label');
            echo "
                  ";
            // line 118
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombreBuque", []), 'widget');
            echo "
                </div>
                <div class=\"col-3\">
                  ";
            // line 121
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroContenedor", []), 'label');
            echo "
                  ";
            // line 122
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroContenedor", []), 'widget');
            echo "
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col\">
                  ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
            echo "
                </div>
              </div>

              ";
            // line 131
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
      ";
        }
        // line 133
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
</div>
    <hr>
    <div>
        <a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_grupos_solicitudes");
        echo "\" class=\"btn btn-success\"><< Volver</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionSigcer/editSolicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 138,  348 => 133,  343 => 131,  336 => 127,  328 => 122,  324 => 121,  318 => 118,  314 => 117,  308 => 114,  304 => 113,  296 => 108,  292 => 107,  286 => 104,  282 => 103,  276 => 100,  272 => 99,  264 => 94,  260 => 93,  254 => 90,  250 => 89,  244 => 86,  240 => 85,  236 => 83,  229 => 79,  221 => 74,  217 => 73,  209 => 68,  205 => 67,  199 => 64,  195 => 63,  189 => 60,  185 => 59,  177 => 54,  173 => 53,  165 => 48,  161 => 47,  155 => 44,  151 => 43,  145 => 40,  141 => 39,  133 => 34,  129 => 33,  123 => 30,  119 => 29,  113 => 26,  109 => 25,  105 => 23,  103 => 22,  96 => 18,  92 => 17,  86 => 14,  82 => 12,  73 => 9,  70 => 8,  66 => 7,  60 => 3,  51 => 2,  29 => 1,);
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
<span class=\"h5 card-title\">Modificar Solicitud</span>
<hr>
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}

<div class=\"\">
  {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-row\">
      <div class=\"col-4\">
        {{ form_label(form.grupo, 'Solicitudes de fecha:') }}
        {{ form_widget(form.grupo) }}
      </div>
    </div>
    <br>
    {% if not grupo.exportacion %}
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.zona) }}
                  {{ form_widget(form.zona) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.cliente) }}
                  {{ form_widget(form.cliente) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.camion) }}
                  {{ form_widget(form.camion) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.lugarDestino) }}
                  {{ form_widget(form.lugarDestino) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.precintos) }}
                  {{ form_widget(form.precintos) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.precintoSenasa) }}
                  {{ form_widget(form.precintoSenasa) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.precintoAduana) }}
                  {{ form_widget(form.precintoAduana) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.temperatura) }}
                  {{ form_widget(form.temperatura) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.termoTemperatura, 'Tº termo-proceso') }}
                  {{ form_widget(form.termoTemperatura) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.termoTiempo,' Tpo. termo-proceso') }}
                  {{ form_widget(form.termoTiempo) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-6\">
                  {{ form_label(form.observaciones) }}
                  {{ form_widget(form.observaciones) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col\">
                  {{ form_widget(form.guardar) }}
                </div>
              </div>
      {% else %}
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.patenteCamion) }}
                  {{ form_widget(form.patenteCamion) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.patenteAcoplado) }}
                  {{ form_widget(form.patenteAcoplado) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.destinatarioExportacion) }}
                  {{ form_widget(form.destinatarioExportacion) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.precintoSenasa) }}
                  {{ form_widget(form.precintoSenasa) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.remitoNumero) }}
                  {{ form_widget(form.remitoNumero) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.temperatura) }}
                  {{ form_widget(form.temperatura) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col-3\">
                  {{ form_label(form.tipoTransporte) }}
                  {{ form_widget(form.tipoTransporte) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.nombreBuque) }}
                  {{ form_widget(form.nombreBuque) }}
                </div>
                <div class=\"col-3\">
                  {{ form_label(form.numeroContenedor) }}
                  {{ form_widget(form.numeroContenedor) }}
                </div>
              </div>
              <div class=\"form-row\">
                <div class=\"col\">
                  {{ form_widget(form.guardar) }}
                </div>
              </div>

              {{ form_errors(form) }}
      {% endif %}
  {{ form_end(form) }}
    <br>
</div>
    <hr>
    <div>
        <a href=\"{{ path('sigcer_add_grupos_solicitudes') }}\" class=\"btn btn-success\"><< Volver</a>
    </div>
{% endblock fos_user_content %}
", "@GestionSigcer/editSolicitud.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionSigcerBundle\\Resources\\views\\editSolicitud.html.twig");
    }
}
