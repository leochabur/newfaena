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

/* @GestionFaena/gestionBD/articuloABM.html.twig */
class __TwigTemplate_0371f0c2c904e3904be5854c4ccbe55841240443f5f4cfc5149173536a8b201f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/articuloABM.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/articuloABM.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/gestionBD/articuloABM.html.twig", 1);
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
        echo "<div class=\"container\">
<br>
  ";
        // line 7
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "isPerfilFaena", []) || (isset($context["edited"]) || array_key_exists("edited", $context)))) {
            // line 8
            echo "      <p class=\"h5 card-title\">";
            if ((isset($context["edit"]) || array_key_exists("edit", $context))) {
                echo "Editar Articulo ";
            } else {
                echo " Nuevo articulo ";
            }
            echo "</p>
      <hr>
      ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "sussecc"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "      <div class=\"alert alert-success\" role=\"alert\">
      ";
                // line 12
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
      <div class=\"form-row\">
      \t<div class=\"col col-lg-2\">
      \t\t";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigoInterno", []), 'label', ["label" => "Codigo Interno"]);
            echo "
      \t\t";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codigoInterno", []), 'widget');
            echo "
      \t</div>
      \t<div class=\"col col-lg-4\">
      \t\t";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", []), 'label');
            echo "
      \t\t";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", []), 'widget');
            echo "
      \t</div>
      \t<div class=\"col col-lg-2\">
      \t\t";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombreResumido", []), 'label', ["label" => "Nombre Corto"]);
            echo "
      \t\t";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombreResumido", []), 'widget');
            echo "
      \t</div>
        <div class=\"col col-lg-2\">
          ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descVenta", []), 'label', ["label" => "Nombre Venta"]);
            echo "
          ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descVenta", []), 'widget');
            echo "
        </div>
      </div>
      ";
            // line 34
            if ($this->getAttribute(($context["form"] ?? null), "orden", [], "any", true, true)) {
                // line 35
                echo "          <div class=\"form-row\">
            <div class=\"col col-lg-2\">
              ";
                // line 37
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "orden", []), 'label', ["label" => "Orden Aparicion"]);
                echo "
              ";
                // line 38
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "orden", []), 'widget');
                echo "
            </div>
          \t<div class=\"col col-lg-4\">
          \t\t";
                // line 41
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categoria", []), 'label', ["label" => "Categoria"]);
                echo "
          \t\t";
                // line 42
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categoria", []), 'widget');
                echo "
          \t</div>
          \t<div class=\"col col-lg-4\">
          \t\t";
                // line 45
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subcategoria", []), 'label', ["label" => "Subcategoria"]);
                echo "
          \t\t";
                // line 46
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subcategoria", []), 'widget');
                echo "
          \t</div>
          </div>
      ";
            }
            // line 50
            echo "      <div class=\"form-row\">
      \t<div class=\"col col-lg-4\">
      \t\t";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "presentacionKg", []), 'label', ["label" => "Presentacion KG"]);
            echo "
      \t\t";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "presentacionKg", []), 'widget');
            echo "
      \t</div>
      \t<div class=\"col col-lg-4\">
      \t\t";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "presentacionUnidad", []), 'label', ["label" => "Presentacion Unidad"]);
            echo "
      \t\t";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "presentacionUnidad", []), 'widget');
            echo "
      \t</div>
      </div>
      ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
            echo "
      ";
            // line 61
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
";
        }
        // line 63
        if ( !(isset($context["edit"]) || array_key_exists("edit", $context))) {
            // line 64
            echo "    <br>
    <span class=\"h5\">Articulos Existentes</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Codigo</th>
            <th>Nombre Faena</th>
            ";
            // line 73
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "isPerfilVenta", [])) {
                // line 74
                echo "                <th>Nombre Venta</th>
            ";
            }
            // line 76
            echo "            <th>Nom. Red.</th>
            <th>Categoria</th>
            <th>Subategoria</th>
            <th>Pres. Kg.</th>
            <th>Pres. Uda.</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
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
                // line 86
                echo "            <tr>
              <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
              <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "codigoInterno", []), "html", null, true);
                echo "</td>             
              <td>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nombre", []), "html", null, true);
                echo "</td>  
              ";
                // line 90
                if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "isPerfilVenta", [])) {
                    // line 91
                    echo "                  <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "descVenta", []), "html", null, true);
                    echo "</td>  
              ";
                }
                // line 93
                echo "              <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nombreResumido", []), "html", null, true);
                echo "</td> 
              <td>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "categoria", []), "html", null, true);
                echo "</td> 
              <td>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "subcategoria", []), "html", null, true);
                echo "</td> 
              <td>";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "presentacionKg", []), "html", null, true);
                echo "</td> 
              <td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "presentacionUnidad", []), "html", null, true);
                echo "</td> 
              <td><a href=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_editar_articulo_basico", ["art" => $this->getAttribute($context["f"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm\">Editar</a></td>
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
            // line 101
            echo "        </tbody>
    </table>
";
        }
        // line 104
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/gestionBD/articuloABM.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 104,  317 => 101,  300 => 98,  296 => 97,  292 => 96,  288 => 95,  284 => 94,  279 => 93,  273 => 91,  271 => 90,  267 => 89,  263 => 88,  259 => 87,  256 => 86,  239 => 85,  228 => 76,  224 => 74,  222 => 73,  211 => 64,  209 => 63,  204 => 61,  200 => 60,  194 => 57,  190 => 56,  184 => 53,  180 => 52,  176 => 50,  169 => 46,  165 => 45,  159 => 42,  155 => 41,  149 => 38,  145 => 37,  141 => 35,  139 => 34,  133 => 31,  129 => 30,  123 => 27,  119 => 26,  113 => 23,  109 => 22,  103 => 19,  99 => 18,  92 => 15,  83 => 12,  80 => 11,  76 => 10,  66 => 8,  64 => 7,  60 => 5,  51 => 4,  29 => 1,);
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
<div class=\"container\">
<br>
  {% if  app.user.isPerfilFaena or edited is defined%}
      <p class=\"h5 card-title\">{% if edit is defined %}Editar Articulo {% else %} Nuevo articulo {% endif %}</p>
      <hr>
      {% for message in app.flashes('sussecc') %}
      <div class=\"alert alert-success\" role=\"alert\">
      {{ message }}
      </div>
      {% endfor %}
      {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
      <div class=\"form-row\">
      \t<div class=\"col col-lg-2\">
      \t\t{{ form_label(form.codigoInterno, 'Codigo Interno') }}
      \t\t{{ form_widget(form.codigoInterno) }}
      \t</div>
      \t<div class=\"col col-lg-4\">
      \t\t{{ form_label(form.nombre) }}
      \t\t{{ form_widget(form.nombre) }}
      \t</div>
      \t<div class=\"col col-lg-2\">
      \t\t{{ form_label(form.nombreResumido, 'Nombre Corto') }}
      \t\t{{ form_widget(form.nombreResumido) }}
      \t</div>
        <div class=\"col col-lg-2\">
          {{ form_label(form.descVenta, 'Nombre Venta') }}
          {{ form_widget(form.descVenta) }}
        </div>
      </div>
      {% if form.orden is defined%}
          <div class=\"form-row\">
            <div class=\"col col-lg-2\">
              {{ form_label(form.orden, 'Orden Aparicion') }}
              {{ form_widget(form.orden) }}
            </div>
          \t<div class=\"col col-lg-4\">
          \t\t{{ form_label(form.categoria, 'Categoria') }}
          \t\t{{ form_widget(form.categoria) }}
          \t</div>
          \t<div class=\"col col-lg-4\">
          \t\t{{ form_label(form.subcategoria, 'Subcategoria') }}
          \t\t{{ form_widget(form.subcategoria) }}
          \t</div>
          </div>
      {% endif %}
      <div class=\"form-row\">
      \t<div class=\"col col-lg-4\">
      \t\t{{ form_label(form.presentacionKg, 'Presentacion KG') }}
      \t\t{{ form_widget(form.presentacionKg) }}
      \t</div>
      \t<div class=\"col col-lg-4\">
      \t\t{{ form_label(form.presentacionUnidad, 'Presentacion Unidad') }}
      \t\t{{ form_widget(form.presentacionUnidad) }}
      \t</div>
      </div>
      {{ form_widget(form.guardar) }}
      {{ form_end(form) }}
{% endif %}
{% if not edit is defined %}
    <br>
    <span class=\"h5\">Articulos Existentes</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Codigo</th>
            <th>Nombre Faena</th>
            {% if app.user.isPerfilVenta %}
                <th>Nombre Venta</th>
            {% endif %}
            <th>Nom. Red.</th>
            <th>Categoria</th>
            <th>Subategoria</th>
            <th>Pres. Kg.</th>
            <th>Pres. Uda.</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        {% for f in articulos %}
            <tr>
              <td>{{ loop.index }}</td>
              <td>{{ f.codigoInterno }}</td>             
              <td>{{ f.nombre }}</td>  
              {% if app.user.isPerfilVenta %}
                  <td>{{ f.descVenta }}</td>  
              {% endif %}
              <td>{{ f.nombreResumido }}</td> 
              <td>{{ f.categoria }}</td> 
              <td>{{ f.subcategoria }}</td> 
              <td>{{ f.presentacionKg }}</td> 
              <td>{{ f.presentacionUnidad }}</td> 
              <td><a href=\"{{ path('bd_editar_articulo_basico', { 'art' : f.id }) }}\" class=\"btn btn-warning btn-sm\">Editar</a></td>
            </tr>
          {% endfor %}
        </tbody>
    </table>
{% endif %}
</div>
{% endblock fos_user_content %}
", "@GestionFaena/gestionBD/articuloABM.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\articuloABM.html.twig");
    }
}
