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

/* @GestionSigcer/opciones/abmProducto.html.twig */
class __TwigTemplate_08a7916a6361a7caf5f4e8509096d3d41a224e5440056673867ec9a9256ef556 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionSigcer/opciones/abmProducto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionSigcer/opciones/abmProducto.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionSigcer/opciones/abmProducto.html.twig", 1);
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
<span class=\"h5 card-title\">Nuevo Producto</span>
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", []), 'label');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", []), 'widget');
        echo "
      </div>
      <div class=\"col-4\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "marca", []), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "marca", []), 'widget');
        echo "
      </div>
      <div class=\"col-4\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigoCapa", []), 'label', ["label" => "Codigo CAPA"]);
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigoCapa", []), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col-4\">
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "envasePrimario", []), 'label');
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "envasePrimario", []), 'widget');
        echo "
      </div>
      <div class=\"col-4\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "envaseSecundario", []), 'label');
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "envaseSecundario", []), 'widget');
        echo "
      </div>
      <div class=\"col-4\">
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "destino", []), 'label');
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "destino", []), 'widget');
        echo "
      </div>
      </div>
    <div class=\"form-row\">
      <div class=\"col-4\">
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ajusteBruto", []), 'label', ["label" => "Factor Calculo Peso Bruto"]);
        echo "
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ajusteBruto", []), 'widget');
        echo "
      </div>
      <div class=\"col-4\">
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ajusteNeto", []), 'label', ["label" => "Factor Calculo Peso Neto"]);
        echo "
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ajusteNeto", []), 'widget');
        echo "
      </div>
      <div class=\"col-4\">
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ajusteCantidad", []), 'label', ["label" => "Ajuste Cantidad"]);
        echo "
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ajusteCantidad", []), 'widget');
        echo "
      </div>
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
        echo "
      </div>
    </div>
\t";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
    <span class=\"h5\">Productos Existentes</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Codigo CAPA</th>
            <th>Env. Prim.</th>
            <th>Env. Sec.</th>
            <th>Destino</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? $this->getContext($context, "productos")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 82
            echo "            <tr>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["p"], "nombre", [])), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["p"], "marca", [])), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["p"], "codigoCapa", [])), "html", null, true);
            echo "</td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "envasePrimario", []), "html", null, true);
            echo "</td>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "envaseSecundario", []), "html", null, true);
            echo "</td>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "destinoTxt", []), "html", null, true);
            echo "</td>
                <td><a class=\"btn btn-sm btn-success\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_editar_producto", ["prod" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">Modificar</a></td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionSigcer/opciones/abmProducto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 93,  264 => 90,  260 => 89,  256 => 88,  252 => 87,  248 => 86,  244 => 85,  240 => 84,  236 => 83,  233 => 82,  216 => 81,  195 => 63,  189 => 60,  180 => 54,  176 => 53,  170 => 50,  166 => 49,  160 => 46,  156 => 45,  148 => 40,  144 => 39,  138 => 36,  134 => 35,  128 => 32,  124 => 31,  116 => 26,  112 => 25,  106 => 22,  102 => 21,  96 => 18,  92 => 17,  86 => 14,  82 => 12,  73 => 9,  70 => 8,  66 => 7,  60 => 3,  51 => 2,  29 => 1,);
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
<span class=\"h5 card-title\">Nuevo Producto</span>
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
        {{ form_label(form.nombre) }}
        {{ form_widget(form.nombre) }}
      </div>
      <div class=\"col-4\">
        {{ form_label(form.marca) }}
        {{ form_widget(form.marca) }}
      </div>
      <div class=\"col-4\">
        {{ form_label(form.codigoCapa, 'Codigo CAPA') }}
        {{ form_widget(form.codigoCapa) }}
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col-4\">
        {{ form_label(form.envasePrimario) }}
        {{ form_widget(form.envasePrimario) }}
      </div>
      <div class=\"col-4\">
        {{ form_label(form.envaseSecundario) }}
        {{ form_widget(form.envaseSecundario) }}
      </div>
      <div class=\"col-4\">
        {{ form_label(form.destino) }}
        {{ form_widget(form.destino) }}
      </div>
      </div>
    <div class=\"form-row\">
      <div class=\"col-4\">
        {{ form_label(form.ajusteBruto, 'Factor Calculo Peso Bruto') }}
        {{ form_widget(form.ajusteBruto) }}
      </div>
      <div class=\"col-4\">
        {{ form_label(form.ajusteNeto, 'Factor Calculo Peso Neto') }}
        {{ form_widget(form.ajusteNeto) }}
      </div>
      <div class=\"col-4\">
        {{ form_label(form.ajusteCantidad, 'Ajuste Cantidad') }}
        {{ form_widget(form.ajusteCantidad) }}
      </div>
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        {{ form_widget(form.guardar) }}
      </div>
    </div>
\t{{ form_end(form) }}
    <br>
    <span class=\"h5\">Productos Existentes</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Codigo CAPA</th>
            <th>Env. Prim.</th>
            <th>Env. Sec.</th>
            <th>Destino</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {% for p in productos %}
            <tr>
                <td>{{ loop.index }}</td>
                <td>{{ p.nombre|upper }}</td>
                <td>{{ p.marca|upper }}</td>
                <td>{{ p.codigoCapa|upper }}</td>
                <td>{{ p.envasePrimario }}</td>
                <td>{{ p.envaseSecundario }}</td>
                <td>{{ p.destinoTxt }}</td>
                <td><a class=\"btn btn-sm btn-success\" href=\"{{ path('sigcer_editar_producto', {prod : p.id}) }}\">Modificar</a></td>
            </tr>
          {% endfor %}
        </tbody>
    </table>
</div>
{% endblock fos_user_content %}
", "@GestionSigcer/opciones/abmProducto.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionSigcerBundle\\Resources\\views\\opciones\\abmProducto.html.twig");
    }
}
