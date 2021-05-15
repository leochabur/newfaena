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

/* GestionFaenaBundle:exportacion:viewAllPallets.html.twig */
class __TwigTemplate_a4b592cb55919025f7373ffb8872e946b63538f87569a71de179367800dc9e9e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:exportacion:viewAllPallets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:exportacion:viewAllPallets.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:exportacion:viewAllPallets.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<br>
<hr>
<span class=\"h5 card-title\">Tipo Pallet</span>
<hr>
";
        // line 8
        $this->loadTemplate("@GestionFaena/messages.html.twig", "GestionFaenaBundle:exportacion:viewAllPallets.html.twig", 8)->display($context);
        // line 9
        echo "

<div class=\"\">
\t";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"form-row\">
      <div class=\"col-lg-4\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pallet", []), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pallet", []), 'widget');
        echo "
      </div>
    </div>

    <div class=\"form-row\">
      <div class=\"col\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
        echo "
      </div>
    </div>
\t";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        // line 26
        if ((isset($context["pallet"]) || array_key_exists("pallet", $context))) {
            // line 27
            echo "          <hr>
          <p class=\"h5\">Codigo Pallet: ";
            // line 28
            echo twig_escape_filter($this->env, ($context["pallet"] ?? $this->getContext($context, "pallet")), "html", null, true);
            echo "</p>
          <p class=\"h5\">Tipo Pallet: ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pallet"] ?? $this->getContext($context, "pallet")), "tipoPallet", []), "html", null, true);
            echo "</p>
          <p class=\"h5\">Estado Pallet: ";
            // line 30
            if ($this->getAttribute(($context["pallet"] ?? $this->getContext($context, "pallet")), "completo", [])) {
                echo " Completo ";
            } else {
                echo " Pendiente ";
            }
            echo "</p>
          <hr>
          <div class=\"det-pallet\">
          </div>
    ";
        }
        // line 35
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\">
  ";
        // line 41
        if ((isset($context["pallet"]) || array_key_exists("pallet", $context))) {
            // line 42
            echo "      const loadDetalle = (\$id) => {
        \$('.det-pallet').html('<div class=\"d-flex justify-content-center\"><div class=\"spinner-border\" role=\"status\"><span class=\"sr-only\">Loading...</span></div></div>');
        const baseURL = \"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_detalle_pallet_faena", ["pallet" => "_PALLET"]);
            echo "\";
        const realURL = baseURL.replace('_PALLET', \$id);
        \$('.det-pallet').load(realURL);
      };

      loadDetalle(";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pallet"] ?? $this->getContext($context, "pallet")), "id", []), "html", null, true);
            echo ");


    const deleteMovimiento = (pallet, valor) => {
      const baseURLdelete = \"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_movimiento_pallet", ["pallet" => "_PALLET", "valor" => "_VALOR"]), "html", null, true);
            echo "\";
      const realURLdelete = baseURLdelete.replace('_PALLET', pallet).replace('_VALOR', valor);
      
      bootbox.confirm({
                message: 'Seguro eliminar el item?',
                size: \"large\",
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if (result)
                    {
                  \$.post(realURLdelete,
                       function (data){
                                if (data.status)
                                {
                                loadDetalle(pallet);
                                }
                                else
                                {
                                  alert(data.message);
                                }
                       });
                    }
                }
             });      
    };

  ";
        }
        // line 89
        echo "  </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:exportacion:viewAllPallets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 89,  175 => 53,  168 => 49,  160 => 44,  156 => 42,  154 => 41,  148 => 39,  139 => 38,  128 => 35,  116 => 30,  112 => 29,  108 => 28,  105 => 27,  103 => 26,  99 => 25,  93 => 22,  84 => 16,  80 => 15,  74 => 12,  69 => 9,  67 => 8,  61 => 4,  52 => 3,  30 => 1,);
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
<span class=\"h5 card-title\">Tipo Pallet</span>
<hr>
{% include '@GestionFaena/messages.html.twig'  %}


<div class=\"\">
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-row\">
      <div class=\"col-lg-4\">
        {{ form_label(form.pallet) }}
        {{ form_widget(form.pallet) }}
      </div>
    </div>

    <div class=\"form-row\">
      <div class=\"col\">
        {{ form_widget(form.guardar) }}
      </div>
    </div>
\t{{ form_end(form) }}
    {% if pallet is defined %}
          <hr>
          <p class=\"h5\">Codigo Pallet: {{ pallet }}</p>
          <p class=\"h5\">Tipo Pallet: {{ pallet.tipoPallet }}</p>
          <p class=\"h5\">Estado Pallet: {% if pallet.completo %} Completo {% else %} Pendiente {% endif %}</p>
          <hr>
          <div class=\"det-pallet\">
          </div>
    {% endif %}
</div>
{% endblock fos_user_content %}

{% block javascripts %}
  {{ parent() }}
  <script type=\"text/javascript\">
  {% if pallet is defined %}
      const loadDetalle = (\$id) => {
        \$('.det-pallet').html('<div class=\"d-flex justify-content-center\"><div class=\"spinner-border\" role=\"status\"><span class=\"sr-only\">Loading...</span></div></div>');
        const baseURL = \"{{ path('ver_detalle_pallet_faena', { pallet : '_PALLET'}) }}\";
        const realURL = baseURL.replace('_PALLET', \$id);
        \$('.det-pallet').load(realURL);
      };

      loadDetalle({{ pallet.id }});


    const deleteMovimiento = (pallet, valor) => {
      const baseURLdelete = \"{{ path('eliminar_movimiento_pallet', { pallet : '_PALLET', valor: '_VALOR'}) }}\";
      const realURLdelete = baseURLdelete.replace('_PALLET', pallet).replace('_VALOR', valor);
      
      bootbox.confirm({
                message: 'Seguro eliminar el item?',
                size: \"large\",
                buttons: {
                    confirm: {
                        label: 'Si',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if (result)
                    {
                  \$.post(realURLdelete,
                       function (data){
                                if (data.status)
                                {
                                loadDetalle(pallet);
                                }
                                else
                                {
                                  alert(data.message);
                                }
                       });
                    }
                }
             });      
    };

  {% endif %}
  </script>

{% endblock javascripts %}", "GestionFaenaBundle:exportacion:viewAllPallets.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/exportacion/viewAllPallets.html.twig");
    }
}
