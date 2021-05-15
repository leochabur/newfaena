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

/* @GestionSigcer/addTropaAGrupo.html.twig */
class __TwigTemplate_bf3359f7258706884017765456b166f370b73a670b2ad9b99969589d1a0984bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionSigcer/addTropaAGrupo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionSigcer/addTropaAGrupo.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionSigcer/addTropaAGrupo.html.twig", 1);
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
<span class=\"h5 card-title\">";
        // line 5
        if ((isset($context["grupo"]) || array_key_exists("grupo", $context))) {
            echo "Agregar";
        } else {
            echo " Modificar ";
        }
        echo "Tropa</span>
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
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"form-row\">
      <div class=\"col-4\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grupoSolicitud", []), 'label', ["label" => "Solicitudes de fecha:"]);
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grupoSolicitud", []), 'widget');
        echo "
      </div>
    </div>
    <br>
    <hr>
    <div class=\"form-row\">
      <div class=\"col-3\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaElaboracion", []), 'label');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaElaboracion", []), 'widget', ["attr" => ["class" => "fel"]]);
        echo "
      </div>
      <div class=\"col-3\">
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFaena", []), 'label');
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaFaena", []), 'widget', ["attr" => ["class" => "ffn"]]);
        echo "
      </div>
      <div class=\"col-3\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaVto", []), 'label');
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaVto", []), 'widget', ["attr" => ["class" => "fvt"]]);
        echo "
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col-3\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lote", []), 'label');
        echo "
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lote", []), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
        echo "
      </div>
    </div>
\t";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
</div>
  ";
        // line 53
        if ((isset($context["grupo"]) || array_key_exists("grupo", $context))) {
            // line 54
            echo "    <hr>
    <span class=\"h5\">Tropas Asignadas a la Solicitud</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Fecha Elaboracion</th>
            <th>Fecha Faena</th>
            <th>Fecha Vencimiento</th>
            <th>Lote</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["grupo"] ?? $this->getContext($context, "grupo")), "tropas", []));
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
                // line 70
                echo "            <tr>
                <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
                <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "fechaElaboracion", []), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "fechaFaena", []), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "fechaVto", []), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "lote", []), "html", null, true);
                echo "</td>
                <td>
                    <a class=\"btn btn-warning btn-sm\" href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_editar_tropa", ["tpa" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\">Modificar</a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "        </tbody>
    </table>
    <div>
        <a href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_grupos_solicitudes");
            echo "\" class=\"btn btn-success\"><< Volver</a>
    </div>
  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

              \$('.fel').focusout(function(){                                                
                                            \$('.ffn').val(\$(this).val());  
                                            var ffn = new Date(\$(this).val());  
                                            ffn.setDate(ffn.getDate() + 16);
                                            var result = ffn.getFullYear() + \"-\";
                                            var mont = ffn.getMonth()+1;
                                            if (mont < 10)
                                              mont = '0'+mont;
                                            result = result+mont+'-';
                                            var day = ffn.getDate();
                                            if (day < 10)
                                              day = '0'+day;
                                            result = result + day;
                                            \$('.fvt').val(result);
              });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionSigcer/addTropaAGrupo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 89,  272 => 88,  258 => 84,  253 => 81,  235 => 77,  230 => 75,  226 => 74,  222 => 73,  218 => 72,  214 => 71,  211 => 70,  194 => 69,  177 => 54,  175 => 53,  169 => 50,  163 => 47,  155 => 42,  151 => 41,  143 => 36,  139 => 35,  133 => 32,  129 => 31,  123 => 28,  119 => 27,  109 => 20,  105 => 19,  99 => 16,  95 => 15,  90 => 12,  81 => 9,  78 => 8,  74 => 7,  65 => 5,  61 => 3,  52 => 2,  30 => 1,);
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
<span class=\"h5 card-title\">{% if grupo is defined %}Agregar{% else %} Modificar {% endif %}Tropa</span>
<hr>
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}

<div class=\"\">

\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
  {{ form_errors(form) }}
    <div class=\"form-row\">
      <div class=\"col-4\">
        {{ form_label(form.grupoSolicitud, 'Solicitudes de fecha:') }}
        {{ form_widget(form.grupoSolicitud) }}
      </div>
    </div>
    <br>
    <hr>
    <div class=\"form-row\">
      <div class=\"col-3\">
        {{ form_label(form.fechaElaboracion) }}
        {{ form_widget(form.fechaElaboracion, {'attr' : {'class' : 'fel'}}) }}
      </div>
      <div class=\"col-3\">
        {{ form_label(form.fechaFaena) }}
        {{ form_widget(form.fechaFaena, {'attr' : {'class' : 'ffn'}}) }}
      </div>
      <div class=\"col-3\">
        {{ form_label(form.fechaVto) }}
        {{ form_widget(form.fechaVto, {'attr' : {'class' : 'fvt'}}) }}
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col-3\">
        {{ form_label(form.lote) }}
        {{ form_widget(form.lote) }}
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        {{ form_widget(form.guardar) }}
      </div>
    </div>
\t{{ form_end(form) }}
    <br>
</div>
  {% if grupo is defined %}
    <hr>
    <span class=\"h5\">Tropas Asignadas a la Solicitud</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Fecha Elaboracion</th>
            <th>Fecha Faena</th>
            <th>Fecha Vencimiento</th>
            <th>Lote</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {% for p in grupo.tropas %}
            <tr>
                <td>{{ loop.index }}</td>
                <td>{{ p.fechaElaboracion|date('d/m/Y') }}</td>
                <td>{{ p.fechaFaena|date('d/m/Y') }}</td>
                <td>{{ p.fechaVto|date('d/m/Y') }}</td>
                <td>{{ p.lote }}</td>
                <td>
                    <a class=\"btn btn-warning btn-sm\" href=\"{{ path('sigcer_editar_tropa', {tpa : p.id}) }}\">Modificar</a>
                </td>
            </tr>
          {% endfor %}
        </tbody>
    </table>
    <div>
        <a href=\"{{ path('sigcer_add_grupos_solicitudes') }}\" class=\"btn btn-success\"><< Volver</a>
    </div>
  {% endif %}
{% endblock fos_user_content %}
{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">

              \$('.fel').focusout(function(){                                                
                                            \$('.ffn').val(\$(this).val());  
                                            var ffn = new Date(\$(this).val());  
                                            ffn.setDate(ffn.getDate() + 16);
                                            var result = ffn.getFullYear() + \"-\";
                                            var mont = ffn.getMonth()+1;
                                            if (mont < 10)
                                              mont = '0'+mont;
                                            result = result+mont+'-';
                                            var day = ffn.getDate();
                                            if (day < 10)
                                              day = '0'+day;
                                            result = result + day;
                                            \$('.fvt').val(result);
              });
    </script>

{% endblock  %}", "@GestionSigcer/addTropaAGrupo.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionSigcerBundle\\Resources\\views\\addTropaAGrupo.html.twig");
    }
}
