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

/* @GestionFaena/movimientoAutoEdit.html.twig */
class __TwigTemplate_0fe6703743decb0a37b58f14b6c815a1dfddc049ba72209483a36bf79355657d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/movimientoAutoEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/movimientoAutoEdit.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/movimientoAutoEdit.html.twig", 1);
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
<span class=\"h5 card-title\">Editar Grupo Movimientos Automatico</span>
<hr>

\t

\t    <p class=\"h4 mb-4 text-center\"></p>


\t\t<br>
\t\t<div class=\"row\">
\t\t  <div class=\"col card\">\t\t
\t
\t\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), 'form_start');
        echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "ordenEjecucion", []), 'label', ["label" => "Orden"]);
        echo "
\t\t\t\t  \t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "ordenEjecucion", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>

\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "articuloAtributoConcepto", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "articuloAtributoConcepto", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "procesoDestinoDefault", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "procesoDestinoDefault", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col-3\">
\t\t\t\t  \t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "grupo", []), 'label', ["label" => "Proc."]);
        echo "
\t\t\t\t  \t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "grupo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div>
\t\t\t\t  \t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "guardar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block mt-2"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>\t\t\t\t  \t
\t\t\t\t  \t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), 'form_end');
        echo "\t
\t\t  </div>
\t\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/movimientoAutoEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 53,  149 => 52,  134 => 46,  128 => 43,  120 => 38,  116 => 37,  108 => 32,  104 => 31,  98 => 28,  94 => 27,  87 => 23,  83 => 22,  77 => 19,  61 => 5,  52 => 4,  30 => 1,);
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
<span class=\"h5 card-title\">Editar Grupo Movimientos Automatico</span>
<hr>

\t

\t    <p class=\"h4 mb-4 text-center\"></p>


\t\t<br>
\t\t<div class=\"row\">
\t\t  <div class=\"col card\">\t\t
\t
\t\t\t\t\t{{ form_start(grupoMov) }}
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.ordenEjecucion, 'Orden') }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.ordenEjecucion, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>

\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.articuloAtributoConcepto) }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.articuloAtributoConcepto, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.procesoDestinoDefault) }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.procesoDestinoDefault, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col-3\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.grupo, 'Proc.') }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.grupo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div>
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.guardar, {'attr' : {'class' : 'btn btn-sm btn-success btn-block mt-2'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>\t\t\t\t  \t
\t\t\t\t  \t{{ form_end(grupoMov) }}\t
\t\t  </div>
\t\t</div>

{% endblock fos_user_content %}

{% block javascripts %}


{% endblock %}
", "@GestionFaena/movimientoAutoEdit.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\movimientoAutoEdit.html.twig");
    }
}
