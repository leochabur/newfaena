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

/* @GestionFaena/gestionBD/atrProc.html.twig */
class __TwigTemplate_13bf397c65970209371ad421a94b83a0ba55d3a704eb1a4521f3f0cb16af906d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/atrProc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/atrProc.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "editForm"]]);
        echo "
  <div class=\"form-row\">
    <div class=\"col-3\">
      ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributo", []), 'label');
        echo "
      ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributo", []), 'widget', ["attr" => ["class" => "form-control-plaintext"]]);
        echo "
    </div>
  </div>
  <div class=\"form-row\">
    <div class=\"col-2\">
      ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "orden", []), 'label');
        echo "
      ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "orden", []), 'widget');
        echo "
    </div>
    <div class=\"col-2\">
      ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "decimales", []), 'label');
        echo "
      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "decimales", []), 'widget');
        echo "
    </div>
  </div>
  <div class=\"form-row\">
    <div class=\"col-2 form-check\">
      ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mostrar", []), 'label');
        echo "
      ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mostrar", []), 'widget');
        echo "
    </div>
    <div class=\"col-2 form-check\">
\t      ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "controlaStock", []), 'label');
        echo "
\t      ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "controlaStock", []), 'widget');
        echo "
    </div>
    <div class=\"col-2 form-check\">
\t      ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "acumula", []), 'label');
        echo "
\t      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "acumula", []), 'widget');
        echo "
    </div>
    <div class=\"col-2 form-check\">
\t      ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promedia", []), 'label');
        echo "
\t      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promedia", []), 'widget');
        echo "
    </div>
  </div>
    <div class=\"form-row\">
    <div class=\"col\">
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
        echo "
    </div>
  </div>
";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "
<script type=\"text/javascript\">
    \$('.editForm').submit(function(event){
    \t\t\t\t\t\t\t\tevent.preventDefault();
                                    var form = \$(this);
\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t    message: \"Seguro realizar la modificacion?\",
\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t        if (result){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.post(form.attr('action'), 
\t\t\t\t\t\t\t\t\t                           form.serialize(),
\t\t\t\t\t\t\t\t\t                           function(data){
\t\t\t\t\t\t\t\t\t                           \t\t\t\t\tif (data.status)\t\t\t\t\t\t\t                           \t\t\t\t\t
\t\t\t\t\t\t\t\t\t                           \t\t\t\t\t{
\t\t\t\t\t\t\t\t\t                           \t\t\t\t\t\tbootbox.alert({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    message: \"Modificacion realizada con exito!\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t                           \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t                                    \t  });
\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t});
    });

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/gestionBD/atrProc.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  172 => 47,  163 => 46,  150 => 43,  144 => 40,  136 => 35,  132 => 34,  126 => 31,  122 => 30,  116 => 27,  112 => 26,  106 => 23,  102 => 22,  94 => 17,  90 => 16,  84 => 13,  80 => 12,  72 => 7,  68 => 6,  62 => 3,  59 => 2,  50 => 1,  40 => 46,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block fos_user_content %}

{{ form_start(form, {'attr': {'novalidate':'novalidate', 'class' : 'editForm'}}) }}
  <div class=\"form-row\">
    <div class=\"col-3\">
      {{  form_label(form.atributo) }}
      {{ form_widget(form.atributo, {'attr' :{'class' : 'form-control-plaintext'}}) }}
    </div>
  </div>
  <div class=\"form-row\">
    <div class=\"col-2\">
      {{  form_label(form.orden) }}
      {{ form_widget(form.orden) }}
    </div>
    <div class=\"col-2\">
      {{  form_label(form.decimales) }}
      {{ form_widget(form.decimales) }}
    </div>
  </div>
  <div class=\"form-row\">
    <div class=\"col-2 form-check\">
      {{  form_label(form.mostrar) }}
      {{ form_widget(form.mostrar) }}
    </div>
    <div class=\"col-2 form-check\">
\t      {{  form_label(form.controlaStock) }}
\t      {{ form_widget(form.controlaStock) }}
    </div>
    <div class=\"col-2 form-check\">
\t      {{  form_label(form.acumula) }}
\t      {{ form_widget(form.acumula) }}
    </div>
    <div class=\"col-2 form-check\">
\t      {{  form_label(form.promedia) }}
\t      {{ form_widget(form.promedia) }}
    </div>
  </div>
    <div class=\"form-row\">
    <div class=\"col\">
      {{ form_widget(form.guardar) }}
    </div>
  </div>
{{ form_end(form) }}

{% endblock fos_user_content %}
{% block javascripts %}

<script type=\"text/javascript\">
    \$('.editForm').submit(function(event){
    \t\t\t\t\t\t\t\tevent.preventDefault();
                                    var form = \$(this);
\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t    message: \"Seguro realizar la modificacion?\",
\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t        if (result){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.post(form.attr('action'), 
\t\t\t\t\t\t\t\t\t                           form.serialize(),
\t\t\t\t\t\t\t\t\t                           function(data){
\t\t\t\t\t\t\t\t\t                           \t\t\t\t\tif (data.status)\t\t\t\t\t\t\t                           \t\t\t\t\t
\t\t\t\t\t\t\t\t\t                           \t\t\t\t\t{
\t\t\t\t\t\t\t\t\t                           \t\t\t\t\t\tbootbox.alert({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    message: \"Modificacion realizada con exito!\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t                           \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t                                    \t  });
\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t});
    });

</script>
{% endblock %}", "@GestionFaena/gestionBD/atrProc.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\atrProc.html.twig");
    }
}
