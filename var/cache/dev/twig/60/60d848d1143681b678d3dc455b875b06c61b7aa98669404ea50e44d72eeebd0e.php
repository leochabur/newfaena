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

/* GestionFaenaBundle:options:addAtrInf.html.twig */
class __TwigTemplate_3e7293b14d3c04fe2ee14b54ae8f6a0e2ff8cd129284dbf24c2f68a6bdfe469a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:options:addAtrInf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:options:addAtrInf.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:options:addAtrInf.html.twig", 1);
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
<span class=\"h5 card-title\">Nueva Configuracion Informe</span>
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
        echo "<hr>
  <table class=\"table table-striped table-bordered table-hover table-sm \">
      <thead>
        <tr>
          <th>#</th>
          <th>Atributo</th>
          <th>Posicion</th>
          <th>Visible</th>
          <th>Sumariza</th>
          <th>Promedia</th>
          <th>Agrupa</th>
          <th>Nº Orden</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["informe"] ?? $this->getContext($context, "informe")), "atributos", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 30
            echo "          <tr>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "atributo", []), "html", null, true);
            echo "</td>  
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "posicion", []), "html", null, true);
            echo "</td>      
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "visible", []), "html", null, true);
            echo "</td>  
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "sumariza", []), "html", null, true);
            echo "</td>    
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "promedia", []), "html", null, true);
            echo "</td>  
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "agrupa", []), "html", null, true);
            echo "</td>      
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "numeroOrden", []), "html", null, true);
            echo "</td>      
            <td class=\"text-center\">
              <a href=\"#\" class=\"btn btn-sm btn-success\">Modificar</a>
          </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
      </table>
      <hr>

\t";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"form-row\">
      <div class=\"col-sm-3\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "informe", []), 'label');
        echo "
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "informe", []), 'widget');
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributo", []), 'label');
        echo "
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributo", []), 'widget');
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "posicion", []), 'label');
        echo "
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "posicion", []), 'widget');
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroOrden", []), 'label');
        echo "
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numeroOrden", []), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col-sm-3\">
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "agrupa", []), 'label');
        echo "
        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "agrupa", []), 'widget');
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sumariza", []), 'label');
        echo "
        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sumariza", []), 'widget');
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promedia", []), 'label');
        echo "
        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "promedia", []), 'widget');
        echo "
      </div>
      <div class=\"col-sm-3\">
        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "visible", []), 'label');
        echo "
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "visible", []), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col-sm-6\">
        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
        echo "
      </div>
    </div>
\t";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:options:addAtrInf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 90,  265 => 87,  257 => 82,  253 => 81,  247 => 78,  243 => 77,  237 => 74,  233 => 73,  227 => 70,  223 => 69,  215 => 64,  211 => 63,  205 => 60,  201 => 59,  195 => 56,  191 => 55,  185 => 52,  181 => 51,  175 => 48,  169 => 44,  149 => 38,  145 => 37,  141 => 36,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  121 => 31,  118 => 30,  101 => 29,  82 => 12,  73 => 9,  70 => 8,  66 => 7,  60 => 3,  51 => 2,  29 => 1,);
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
<span class=\"h5 card-title\">Nueva Configuracion Informe</span>
<hr>
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
<hr>
  <table class=\"table table-striped table-bordered table-hover table-sm \">
      <thead>
        <tr>
          <th>#</th>
          <th>Atributo</th>
          <th>Posicion</th>
          <th>Visible</th>
          <th>Sumariza</th>
          <th>Promedia</th>
          <th>Agrupa</th>
          <th>Nº Orden</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        
        {% for f in informe.atributos %}
          <tr>
            <td>{{ loop.index }}</td>
            <td>{{ f.atributo }}</td>  
            <td>{{ f.posicion }}</td>      
            <td>{{ f.visible }}</td>  
            <td>{{ f.sumariza }}</td>    
            <td>{{ f.promedia }}</td>  
            <td>{{ f.agrupa }}</td>      
            <td>{{ f.numeroOrden }}</td>      
            <td class=\"text-center\">
              <a href=\"#\" class=\"btn btn-sm btn-success\">Modificar</a>
          </td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
      <hr>

\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-row\">
      <div class=\"col-sm-3\">
        {{ form_label(form.informe) }}
        {{ form_widget(form.informe) }}
      </div>
      <div class=\"col-sm-3\">
        {{ form_label(form.atributo) }}
        {{ form_widget(form.atributo) }}
      </div>
      <div class=\"col-sm-3\">
        {{ form_label(form.posicion) }}
        {{ form_widget(form.posicion) }}
      </div>
      <div class=\"col-sm-3\">
        {{ form_label(form.numeroOrden) }}
        {{ form_widget(form.numeroOrden) }}
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col-sm-3\">
        {{ form_label(form.agrupa) }}
        {{ form_widget(form.agrupa) }}
      </div>
      <div class=\"col-sm-3\">
        {{ form_label(form.sumariza) }}
        {{ form_widget(form.sumariza) }}
      </div>
      <div class=\"col-sm-3\">
        {{ form_label(form.promedia) }}
        {{ form_widget(form.promedia) }}
      </div>
      <div class=\"col-sm-3\">
        {{ form_label(form.visible) }}
        {{ form_widget(form.visible) }}
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col-sm-6\">
        {{ form_widget(form.guardar) }}
      </div>
    </div>
\t{{ form_end(form) }}

{% endblock fos_user_content %}
", "GestionFaenaBundle:options:addAtrInf.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/options/addAtrInf.html.twig");
    }
}
