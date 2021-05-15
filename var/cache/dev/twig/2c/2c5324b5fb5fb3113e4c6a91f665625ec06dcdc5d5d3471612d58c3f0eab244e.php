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

/* GestionFaenaBundle::grupoAutoEdit.html.twig */
class __TwigTemplate_59faf7b6aea5a645efb0557de7d26a907d9f966d06d5a0041cd30810c03ce22f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle::grupoAutoEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle::grupoAutoEdit.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle::grupoAutoEdit.html.twig", 1);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "manual", []), 'label', ["label" => "Manual"]);
        echo "
\t\t\t\t  \t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "manual", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>

\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "orden", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "orden", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "nombre", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "nombre", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "detalle", []), 'label');
        echo "
\t\t\t\t  \t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "detalle", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col-3\">
\t\t\t\t  \t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "procesoFaena", []), 'label', ["label" => "Proc."]);
        echo "
\t\t\t\t  \t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "procesoFaena", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div>
\t\t\t\t  \t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), "guardar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block mt-2"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>\t\t\t\t  \t
\t\t\t\t  \t";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["grupoMov"] ?? $this->getContext($context, "grupoMov")), 'form_end');
        echo "\t
\t\t  </div>
\t\t</div>
\t\t<hr>
\t\t<div class=\"row\">
\t\t  <div class=\"col card\">\t
\t\t  \t<span class=\"h5\">Movimientos automaticos definidos</span>
\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Orden</th>
\t\t\t\t\t\t\t\t\t<th>Movimiento a relizar</th>
\t\t\t\t\t\t\t\t\t<th>Proceso destino default</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["grupo"] ?? $this->getContext($context, "grupo")), "automaticos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["auto"]) {
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "ordenEjecucion", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td><a target=\"_blanck\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_edit_movimiento_automatico", ["mov" => $this->getAttribute($context["auto"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auto"], "articuloAtributoConcepto", []), "vistaEdicion", []), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["auto"], "procesoDestinoDefault", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle::grupoAutoEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 81,  204 => 80,  189 => 73,  180 => 70,  174 => 69,  170 => 68,  167 => 67,  163 => 66,  144 => 50,  138 => 47,  130 => 42,  126 => 41,  118 => 36,  114 => 35,  108 => 32,  104 => 31,  98 => 28,  94 => 27,  87 => 23,  83 => 22,  77 => 19,  61 => 5,  52 => 4,  30 => 1,);
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
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.manual, 'Manual') }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.manual, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>

\t\t\t\t  \t\t\t<div class=\"col-1\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.orden) }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.orden, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.nombre) }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.nombre, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.detalle) }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.detalle, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col-3\">
\t\t\t\t  \t\t\t\t{{ form_label(grupoMov.procesoFaena, 'Proc.') }}
\t\t\t\t  \t\t\t\t{{ form_widget(grupoMov.procesoFaena, {'attr' : {'class' : 'form-control-sm'}}) }}
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
\t\t<hr>
\t\t<div class=\"row\">
\t\t  <div class=\"col card\">\t
\t\t  \t<span class=\"h5\">Movimientos automaticos definidos</span>
\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Orden</th>
\t\t\t\t\t\t\t\t\t<th>Movimiento a relizar</th>
\t\t\t\t\t\t\t\t\t<th>Proceso destino default</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for auto in grupo.automaticos %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ auto.ordenEjecucion }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td><a target=\"_blanck\" href=\"{{ path('bd_edit_movimiento_automatico', { mov : auto.id})}}\">{{ auto.articuloAtributoConcepto.vistaEdicion }}</a></td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ auto.procesoDestinoDefault }}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

{% endblock fos_user_content %}

{% block javascripts %}


{% endblock %}
", "GestionFaenaBundle::grupoAutoEdit.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/grupoAutoEdit.html.twig");
    }
}
