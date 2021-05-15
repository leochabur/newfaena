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

/* @GestionFaena/gestionBD/abmSucursal.html.twig */
class __TwigTemplate_3d0e7861255dff4ac2a9851a1682b32cb8d6233fee8630d6bbf5380d1465945e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/abmSucursal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/abmSucursal.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/gestionBD/abmSucursal.html.twig", 1);
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
<span class=\"h5 card-title\">Nueva Sucursal</span>
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
\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"form-row\">
      <div class=\"col-4\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "entidad", []), "valor", []), 'label', ["label" => "Sucursal"]);
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "entidad", []), "valor", []), 'widget');
        echo "
      </div>
      <div class=\"col-4\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "direccion", []), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "direccion", []), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
        echo "
      </div>
    </div>
\t";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
    <span class=\"h5\">Sucursales Existentes</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Sucursal</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sucursales"] ?? $this->getContext($context, "sucursales")));
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
            // line 44
            echo "            <tr>
              <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "</td>
              <td>";
            // line 46
            echo twig_escape_filter($this->env, $context["f"], "html", null, true);
            echo "</td>             
              <td></td>
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
        // line 50
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/gestionBD/abmSucursal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 50,  160 => 46,  156 => 45,  153 => 44,  136 => 43,  120 => 30,  114 => 27,  106 => 22,  102 => 21,  96 => 18,  92 => 17,  86 => 14,  82 => 12,  73 => 9,  70 => 8,  66 => 7,  60 => 3,  51 => 2,  29 => 1,);
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
<span class=\"h5 card-title\">Nueva Sucursal</span>
<hr>
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}

<div class=\"\">
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-row\">
      <div class=\"col-4\">
        {{ form_label(form.entidad.valor, 'Sucursal') }}
        {{ form_widget(form.entidad.valor) }}
      </div>
      <div class=\"col-4\">
        {{ form_label(form.direccion) }}
        {{ form_widget(form.direccion) }}
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        {{ form_widget(form.guardar) }}
      </div>
    </div>
\t{{ form_end(form) }}
    <br>
    <span class=\"h5\">Sucursales Existentes</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Sucursal</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        {% for f in sucursales %}
            <tr>
              <td>{{ loop.index }}</td>
              <td>{{ f }}</td>             
              <td></td>
            </tr>
          {% endfor %}
        </tbody>
    </table>
</div>
{% endblock fos_user_content %}
", "@GestionFaena/gestionBD/abmSucursal.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\abmSucursal.html.twig");
    }
}
