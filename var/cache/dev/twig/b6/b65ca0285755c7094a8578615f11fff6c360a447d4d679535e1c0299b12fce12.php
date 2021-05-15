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

/* @GestionVentas/ventas/ventasPendientes.html.twig */
class __TwigTemplate_fddd28d05f277dd35580e33209d6a28aeec791d6e00ad6eeefb8425f94ce1915 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionVentas/ventas/ventasPendientes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionVentas/ventas/ventasPendientes.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionVentas/ventas/ventasPendientes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<style type=\"text/css\">


</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "  ";
        $this->displayParentBlock("fos_user_content", $context, $blocks);
        echo "
<br>
<hr>
<span class=\"h5 card-title\">Pendientes incorporar</span>
<hr>
";
        // line 15
        $this->loadTemplate("@GestionFaena/messages.html.twig", "@GestionVentas/ventas/ventasPendientes.html.twig", 15)->display($context);
        // line 16
        echo "

";
        // line 18
        if ((isset($context["comprobantes"]) || array_key_exists("comprobantes", $context))) {
            // line 19
            echo "    <!--table class=\"table table-striped table-bordered table-hover table-sm fs-6\"-->
    <table id=\"dt-vertical-scroll\" class=\"table table-striped table-bordered table-hover table-sm\" cellspacing=\"0\" width=\"100%\">
      <thead>
        <tr>
            <th>Fecha</th>
            <th>Numero</th>
            <th>Destino</th>
            <th>Observaciones</th>
            <th>Articulos O</th>      
            <th>Articulos R</th>        
        </tr>
        </thead>
        <tbody>        
          ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comprobantes"] ?? $this->getContext($context, "comprobantes")));
            foreach ($context['_seq'] as $context["_key"] => $context["cmp"]) {
                // line 33
                echo "
              <tr>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cmp"], "fecha", []), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, sprintf("%06d", $this->getAttribute($context["cmp"], "numero", [])), "html", null, true);
                echo "</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "entidad", []), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "comentario", []), "html", null, true);
                echo "</td>   
                <td class=\"text-right\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "itemOficial", []), "html", null, true);
                echo "</td>  
                <td class=\"text-right\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "itemNoOficial", []), "html", null, true);
                echo "</td>  
              </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </tbody>
    </table>  
";
        }
        // line 46
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionVentas/ventas/ventasPendientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 50,  159 => 46,  154 => 43,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 33,  117 => 32,  102 => 19,  100 => 18,  96 => 16,  94 => 15,  85 => 10,  76 => 9,  62 => 4,  53 => 3,  31 => 1,);
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
<style type=\"text/css\">


</style>
{% endblock %}
{% block fos_user_content %}
  {{ parent() }}
<br>
<hr>
<span class=\"h5 card-title\">Pendientes incorporar</span>
<hr>
{% include '@GestionFaena/messages.html.twig'  %}


{% if comprobantes is defined %}
    <!--table class=\"table table-striped table-bordered table-hover table-sm fs-6\"-->
    <table id=\"dt-vertical-scroll\" class=\"table table-striped table-bordered table-hover table-sm\" cellspacing=\"0\" width=\"100%\">
      <thead>
        <tr>
            <th>Fecha</th>
            <th>Numero</th>
            <th>Destino</th>
            <th>Observaciones</th>
            <th>Articulos O</th>      
            <th>Articulos R</th>        
        </tr>
        </thead>
        <tbody>        
          {% for cmp in comprobantes %}

              <tr>
                <td>{{  cmp.fecha|date('d/m/Y') }}</td>
                <td>{{ \"%06d\" | format(cmp.numero) }}</td>
                <td>{{ cmp.entidad }}</td>
                <td>{{ cmp.comentario }}</td>   
                <td class=\"text-right\">{{ cmp.itemOficial }}</td>  
                <td class=\"text-right\">{{ cmp.itemNoOficial }}</td>  
              </tr>
          {% endfor %}
        </tbody>
    </table>  
{% endif %}



{% endblock fos_user_content %}
{% block javascripts %}
{% endblock  %}", "@GestionVentas/ventas/ventasPendientes.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionVentasBundle\\Resources\\views\\ventas\\ventasPendientes.html.twig");
    }
}
