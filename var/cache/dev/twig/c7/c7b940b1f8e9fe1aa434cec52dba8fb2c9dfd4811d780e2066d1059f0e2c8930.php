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

/* @GestionFaena/gestionBD/abmTransportista.html.twig */
class __TwigTemplate_5dba302e8d38271014eb7ffa97e919e391e3de14f5d2b5a8cd079be7f54ee186 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/abmTransportista.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/abmTransportista.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/gestionBD/abmTransportista.html.twig", 1);
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
<span class=\"h5 card-title\">Transportistas</span>
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
    <br>
    <span class=\"h5\">Nuevo Transportista</span>
    <hr>
    \t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["trans"] ?? $this->getContext($context, "trans")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        <div class=\"form-row\">
          <div class=\"col\">
              ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["trans"] ?? $this->getContext($context, "trans")), "entidad", []), "valor", []), 'label', ["label" => "TTE."]);
        echo "
              ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["trans"] ?? $this->getContext($context, "trans")), "entidad", []), "valor", []), 'widget');
        echo "
          </div>
          <div class=\"col\">
              ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? $this->getContext($context, "trans")), "cuit", []), 'label', ["label" => "CUIT"]);
        echo "
              ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? $this->getContext($context, "trans")), "cuit", []), 'widget');
        echo "
          </div>
          <div class=\"col\">
              ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? $this->getContext($context, "trans")), "titular", []), 'label');
        echo "
              ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? $this->getContext($context, "trans")), "titular", []), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-row\">
          <div class=\"col\">
              ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? $this->getContext($context, "trans")), "chofer", []), 'label');
        echo "
              ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? $this->getContext($context, "trans")), "chofer", []), 'widget');
        echo "
          </div>
          <div class=\"col\">
              ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? $this->getContext($context, "trans")), "chasis", []), 'label');
        echo "
              ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? $this->getContext($context, "trans")), "chasis", []), 'widget');
        echo "
          </div>
          <div class=\"col\">
              ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? $this->getContext($context, "trans")), "acoplado", []), 'label');
        echo "
              ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? $this->getContext($context, "trans")), "acoplado", []), 'widget');
        echo "
          </div>
        </div>
    \t";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["trans"] ?? $this->getContext($context, "trans")), 'form_end');
        echo "
    <br>
    <span class=\"h5\">Transportista Existentes</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>TTE</th>
            <th>CUIT</th>
            <th>Titular</th>
            <th>Chofer</th>
            <th>Chasis</th>
            <th>Acoplado</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transportistas"] ?? $this->getContext($context, "transportistas")));
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
            // line 63
            echo "            <tr>
              <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "</td>
              <td>";
            // line 65
            echo twig_escape_filter($this->env, $context["f"], "html", null, true);
            echo "</td>  
              <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "cuit", []), "html", null, true);
            echo "</td>            
              <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "titular", []), "html", null, true);
            echo "</td>
              <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "chofer", []), "html", null, true);
            echo "</td>
              <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "chasis", []), "html", null, true);
            echo "</td>
              <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "acoplado", []), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/gestionBD/abmTransportista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 73,  220 => 70,  216 => 69,  212 => 68,  208 => 67,  204 => 66,  200 => 65,  196 => 64,  193 => 63,  176 => 62,  156 => 45,  150 => 42,  146 => 41,  140 => 38,  136 => 37,  130 => 34,  126 => 33,  118 => 28,  114 => 27,  108 => 24,  104 => 23,  98 => 20,  94 => 19,  88 => 16,  82 => 12,  73 => 9,  70 => 8,  66 => 7,  60 => 3,  51 => 2,  29 => 1,);
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
<span class=\"h5 card-title\">Transportistas</span>
<hr>
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}

    <br>
    <span class=\"h5\">Nuevo Transportista</span>
    <hr>
    \t{{ form_start(trans, {'attr': {'novalidate': 'novalidate'}}) }}
        <div class=\"form-row\">
          <div class=\"col\">
              {{ form_label(trans.entidad.valor, 'TTE.') }}
              {{ form_widget(trans.entidad.valor) }}
          </div>
          <div class=\"col\">
              {{ form_label(trans.cuit, 'CUIT') }}
              {{ form_widget(trans.cuit) }}
          </div>
          <div class=\"col\">
              {{ form_label(trans.titular) }}
              {{ form_widget(trans.titular) }}
          </div>
        </div>
        <div class=\"form-row\">
          <div class=\"col\">
              {{ form_label(trans.chofer) }}
              {{ form_widget(trans.chofer) }}
          </div>
          <div class=\"col\">
              {{ form_label(trans.chasis) }}
              {{ form_widget(trans.chasis) }}
          </div>
          <div class=\"col\">
              {{ form_label(trans.acoplado) }}
              {{ form_widget(trans.acoplado) }}
          </div>
        </div>
    \t{{ form_end(trans) }}
    <br>
    <span class=\"h5\">Transportista Existentes</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>TTE</th>
            <th>CUIT</th>
            <th>Titular</th>
            <th>Chofer</th>
            <th>Chasis</th>
            <th>Acoplado</th>
          </tr>
        </thead>
        <tbody>
        {% for f in transportistas %}
            <tr>
              <td>{{ loop.index }}</td>
              <td>{{ f }}</td>  
              <td>{{ f.cuit }}</td>            
              <td>{{ f.titular }}</td>
              <td>{{ f.chofer }}</td>
              <td>{{ f.chasis }}</td>
              <td>{{ f.acoplado }}</td>
            </tr>
          {% endfor %}
        </tbody>
    </table>
{% endblock fos_user_content %}
", "@GestionFaena/gestionBD/abmTransportista.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\abmTransportista.html.twig");
    }
}
