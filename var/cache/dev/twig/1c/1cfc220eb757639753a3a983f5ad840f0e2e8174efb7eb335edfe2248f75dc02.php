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

/* @GestionVentas/ventas/nuevaVenta.html.twig */
class __TwigTemplate_aac64fcbbe25ce144ea1c255d29dc331703bff1f8664c39917c3bb62406c4ddf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
            'out_container' => [$this, 'block_out_container'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionVentas/ventas/nuevaVenta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionVentas/ventas/nuevaVenta.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionVentas/ventas/nuevaVenta.html.twig", 1);
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
<span class=\"h5 card-title\">Nuevo Comprobante de Venta</span>
<hr>

";
        // line 8
        $this->loadTemplate("@GestionFaena/messages.html.twig", "@GestionVentas/ventas/nuevaVenta.html.twig", 8)->display($context);
        // line 9
        echo "
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "updvta"]]);
        echo "
          <div class=\"form-row\">
            <div class=\"col-lg-4 col-sm-12\">
              ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaComprobante", []), 'label');
        echo "
              ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaComprobante", []), 'widget', ["attr" => ["class" => "date"]]);
        echo "
            </div>
            <div class=\"col-lg-5 col-sm-12\">
              ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cliente", []), 'label');
        echo "
              ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cliente", []), 'widget');
        echo "
            </div>
            <div class=\"col-lg-3 col-sm-12\">
              ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "horarioCarga", []), 'label');
        echo "
              ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "horarioCarga", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-row mt-4\">
            <div class=\"col-lg-12 col-sm-12\">
              ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comentario", []), 'label');
        echo "
              ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comentario", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-row mt-4\">
            <div class=\"col-lg-12 col-sm-12\">
              ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "siguiente", []), 'widget');
        echo "
            </div>
          </div>
";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<div class=\"text-center loading\">
  <div class=\"spinner-border\" role=\"status\">
    <span class=\"sr-only\">Loading...</span>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_out_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "out_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "out_container"));

        // line 44
        echo "  <hr>
  <div id=\"detalle\">
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">

          \$('.loading').hide();
          \$('.date').change(function(event){
                                            \$('#detalle').empty();
                                            \$('.loading').show();
                                            \$.post(\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_detalle_ventas_fecha");
        echo "\",
                                                   \$('.updvta').serialize(),
                                                   function(data){
                                                                  \$('.loading').hide();
                                                                  \$('#detalle').html(data);
                                                   });
          });
          ";
        // line 63
        if ((isset($context["fecha"]) || array_key_exists("fecha", $context))) {
            // line 64
            echo "            \$('.date').trigger('change');
          ";
        }
        // line 66
        echo "</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionVentas/ventas/nuevaVenta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 66,  201 => 64,  199 => 63,  189 => 56,  178 => 49,  169 => 48,  156 => 44,  147 => 43,  130 => 36,  124 => 33,  116 => 28,  112 => 27,  104 => 22,  100 => 21,  94 => 18,  90 => 17,  84 => 14,  80 => 13,  74 => 10,  71 => 9,  69 => 8,  62 => 3,  53 => 2,  31 => 1,);
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
<span class=\"h5 card-title\">Nuevo Comprobante de Venta</span>
<hr>

{% include '@GestionFaena/messages.html.twig'  %}

{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class' : 'updvta'}}) }}
          <div class=\"form-row\">
            <div class=\"col-lg-4 col-sm-12\">
              {{ form_label(form.fechaComprobante) }}
              {{ form_widget(form.fechaComprobante, {'attr' : {'class' : 'date' }}) }}
            </div>
            <div class=\"col-lg-5 col-sm-12\">
              {{ form_label(form.cliente) }}
              {{ form_widget(form.cliente) }}
            </div>
            <div class=\"col-lg-3 col-sm-12\">
              {{ form_label(form.horarioCarga) }}
              {{ form_widget(form.horarioCarga) }}
            </div>
          </div>
          <div class=\"form-row mt-4\">
            <div class=\"col-lg-12 col-sm-12\">
              {{ form_label(form.comentario) }}
              {{ form_widget(form.comentario) }}
            </div>
          </div>
          <div class=\"form-row mt-4\">
            <div class=\"col-lg-12 col-sm-12\">
              {{ form_widget(form.siguiente) }}
            </div>
          </div>
{{ form_end(form) }}
<div class=\"text-center loading\">
  <div class=\"spinner-border\" role=\"status\">
    <span class=\"sr-only\">Loading...</span>
  </div>
</div>
{% endblock fos_user_content %}
{% block out_container %}
  <hr>
  <div id=\"detalle\">
  </div>
{% endblock out_container %}
{% block javascripts %}
 {{ parent() }}
<script type=\"text/javascript\">

          \$('.loading').hide();
          \$('.date').change(function(event){
                                            \$('#detalle').empty();
                                            \$('.loading').show();
                                            \$.post(\"{{ path('vtas_detalle_ventas_fecha') }}\",
                                                   \$('.updvta').serialize(),
                                                   function(data){
                                                                  \$('.loading').hide();
                                                                  \$('#detalle').html(data);
                                                   });
          });
          {% if fecha is defined %}
            \$('.date').trigger('change');
          {% endif %}
</script>

{% endblock  %}", "@GestionVentas/ventas/nuevaVenta.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionVentasBundle\\Resources\\views\\ventas\\nuevaVenta.html.twig");
    }
}
