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

/* @GestionFaena/pasoProcesoEdit.html.twig */
class __TwigTemplate_8e37b1c695ae5dea58820e43a323b4d85758228e7a9c98c67266538b8d77ae41 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/pasoProcesoEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/pasoProcesoEdit.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/pasoProcesoEdit.html.twig", 1);
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
        echo "<br>
<hr>
<span class=\"h5 card-title\">Editar Paso Proceso</span>
<hr>

\t

\t    <p class=\"h4 mb-4 text-center\"></p>
\t\t<br>
\t\t\t\t  \t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fpaso"] ?? $this->getContext($context, "fpaso")), 'form_start');
        echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center row\">
\t\t\t\t  \t\t\t<div class=\" col-lg-2\">
\t\t\t\t  \t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "orden", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "orden", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\" col-lg-6\">
\t\t\t\t  \t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "grupoMovimiento", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "grupoMovimiento", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center row\">
\t\t\t\t  \t\t\t<div class=\"col-lg-8\">
\t\t\t\t  \t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "detalle", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "detalle", []), 'widget', ["attr" => ["class" => "form-control-sm mt-2"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center row\">
\t\t\t\t  \t\t\t<div class=\"col-lg-4\">
\t\t\t\t  \t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "procesoFaena", []), 'label', ["label" => "Proceso"]);
        echo "
\t\t\t\t  \t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "procesoFaena", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center row\">
\t\t\t\t  \t\t\t<div class=\"col-lg-4\">
\t\t\t\t  \t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fpaso"] ?? $this->getContext($context, "fpaso")), "guardar", []), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fpaso"] ?? $this->getContext($context, "fpaso")), 'form_end');
        echo "\t\t
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/pasoProcesoEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  143 => 46,  131 => 43,  124 => 39,  116 => 34,  112 => 33,  104 => 28,  100 => 27,  92 => 22,  88 => 21,  82 => 18,  78 => 17,  72 => 14,  61 => 5,  52 => 4,  30 => 1,);
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
<span class=\"h5 card-title\">Editar Paso Proceso</span>
<hr>

\t

\t    <p class=\"h4 mb-4 text-center\"></p>
\t\t<br>
\t\t\t\t  \t{{ form_start(fpaso) }}
\t\t\t\t  \t\t<div class=\"form-row align-items-center row\">
\t\t\t\t  \t\t\t<div class=\" col-lg-2\">
\t\t\t\t  \t\t\t\t{{ form_label(fpaso.orden) }}
\t\t\t\t  \t\t\t\t{{ form_widget(fpaso.orden, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\" col-lg-6\">
\t\t\t\t  \t\t\t\t{{ form_label(fpaso.grupoMovimiento) }}
\t\t\t\t  \t\t\t\t{{ form_widget(fpaso.grupoMovimiento, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center row\">
\t\t\t\t  \t\t\t<div class=\"col-lg-8\">
\t\t\t\t  \t\t\t\t{{ form_label(fpaso.detalle) }}
\t\t\t\t  \t\t\t\t{{ form_widget(fpaso.detalle, {'attr' : {'class' : 'form-control-sm mt-2'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center row\">
\t\t\t\t  \t\t\t<div class=\"col-lg-4\">
\t\t\t\t  \t\t\t\t{{ form_label(fpaso.procesoFaena, 'Proceso') }}
\t\t\t\t  \t\t\t\t{{ form_widget(fpaso.procesoFaena, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center row\">
\t\t\t\t  \t\t\t<div class=\"col-lg-4\">
\t\t\t\t  \t\t\t\t{{ form_widget(fpaso.guardar, {'attr' : {'class' : 'btn btn-success'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t{{ form_end(fpaso) }}\t\t
{% endblock fos_user_content %}

{% block javascripts %}

{% endblock %}
", "@GestionFaena/pasoProcesoEdit.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\pasoProcesoEdit.html.twig");
    }
}
