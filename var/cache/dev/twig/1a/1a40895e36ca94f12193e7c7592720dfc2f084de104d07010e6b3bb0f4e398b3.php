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

/* @GestionVentas/ventas/listaVentasDiarias.html.twig */
class __TwigTemplate_e0dd544d4f5cffa6007c521c79def60960a9b1de4b173e278648381cb9f619f3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'out_container' => [$this, 'block_out_container'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionVentas/ventas/listaVentasDiarias.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionVentas/ventas/listaVentasDiarias.html.twig"));

        // line 1
        echo "


";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 54
        $this->displayBlock('out_container', $context, $blocks);
        // line 119
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<style type=\"text/css\">
           
  .table-scroll {
    position:relative;
    max-width:100%;
    margin:auto;
    overflow:hidden;
  }
  .table-wrap {
    width:100%;
    overflow:auto;
  }
  .table-scroll table {
    width:100%;
    margin:auto;
    border-collapse:separate;
    border-spacing:0;
  }
  .table-scroll th, .table-scroll td {
    padding:5px 10px;

    background:#fff;
    white-space:nowrap;
    vertical-align:top;
  }
  .table-scroll thead, .table-scroll tfoot {
    background:#f9f9f9;
  }
  .clone {
    position:absolute;
    top:0;
    left:0;
    pointer-events:none;
  }
  .clone th, .clone td {
    visibility:hidden
  }
  .clone td, .clone th {
    border-color:transparent
  }
  .clone tbody th {
    visibility:visible;
  }
  .clone .fixed-side {
    visibility:visible;
  }
  .clone thead, .clone tfoot{background:transparent;}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_out_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "out_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "out_container"));

        // line 55
        echo "<span class=\"h5 card-title\">Comprobantes Fecha: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["fecha"] ?? $this->getContext($context, "fecha")), "d/m/Y"), "html", null, true);
        echo "</span>
<hr>

<div class=\"row mt-2 mb-2\">
  <div class=\"col-lg-2 col-sm-12 border ml-3 mr-2 blue lighten-5\">
      Finalizado
  </div>
  <div class=\"col-lg-2 col-sm-12 border ml-2 orange lighten-4\">
      Pendientes
  </div>
</div>
<div id=\"table-scroll\" class=\"table-scroll\">
  <div class=\"table-wrap\">
  <table class=\"table table-striped table-bordered table-hover table-sm main-table\">
    <thead>
      <tr>
          <th class=\"fixed-side\" rowspan=\"2\">Destinatario</th>
          <th rowspan=\"2\">Numero</th>
          <th rowspan=\"2\">Hora Carga</th>
          <th rowspan=\"2\"></th>          
          
          ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 77
            echo "              <th colspan=\"";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["tipos"] ?? $this->getContext($context, "tipos"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nombreVenta", []), "html", null, true);
            echo "</th>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        
      </tr>
      <tr>
          ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 82
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? $this->getContext($context, "tipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 83
                echo "              <th>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "codigo", []), "html", null, true);
                echo "</th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "      </tr>
      </thead>
      <tbody>        
        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comprobantes"] ?? $this->getContext($context, "comprobantes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cmp"]) {
            // line 90
            echo "            ";
            $context["color"] = "orange lighten-4";
            // line 91
            echo "            ";
            if ($this->getAttribute($context["cmp"], "finalizado", [])) {
                // line 92
                echo "                ";
                $context["color"] = "blue lighten-5";
                // line 93
                echo "            ";
            }
            // line 94
            echo "            <tr class=\"color ";
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo "\">
              <th class=\"fixed-side ";
            // line 95
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "entidad", []), "html", null, true);
            echo "</th>
              <td>";
            // line 96
            echo twig_escape_filter($this->env, sprintf("%06d", $this->getAttribute($context["cmp"], "numero", [])), "html", null, true);
            echo "</td>
              <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "horarioCarga", []), "html", null, true);
            echo "</td>
              <td>
                    <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_agregar_articulos", ["id" => $this->getAttribute($context["cmp"], "id", [])]), "html", null, true);
            echo "\"><i class=\"far fa-edit\" title=\"Modificar\"></i></a>
                    <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_delete_comprobante_venta", ["id" => $this->getAttribute($context["cmp"], "id", [])]), "html", null, true);
            echo "\" data-action=\"eliminar\" data-index=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "entidad", []), "html", null, true);
            echo "\" class=\"deletecmp\"><i class=\"far fa-trash-alt\" title=\"Eliminar\"></i></a>
                    <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_finalizar_comprobante_venta", ["id" => $this->getAttribute($context["cmp"], "id", [])]), "html", null, true);
            echo "\" data-action=\"finalizar\" data-index=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "entidad", []), "html", null, true);
            echo "\" class=\"deletecmp\"><i class=\"far fa-check-square\" title=\"Finalizar\"></i></a>
              </td>             
              ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
            foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
                // line 104
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? $this->getContext($context, "tipos")));
                foreach ($context['_seq'] as $context["_key"] => $context["tpo"]) {
                    // line 105
                    echo "                    <td>
                      ";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), $this->getAttribute($context["cmp"], "id", []), [], "array"), $this->getAttribute($context["art"], "id", []), [], "array"), $this->getAttribute($context["tpo"], "id", []), [], "array"), "html", null, true);
                    echo "
                    </td>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tpo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "      </tbody>
  </table>  
</div>
</div>
<br>
<br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        echo "
<script type=\"text/javascript\">

  \$(\".main-table\").clone(true).appendTo('#table-scroll').addClass('clone');  
  \$('.deletecmp').click(function(event){
                                        event.preventDefault();
                                        var a = \$(this);
                                        bootbox.confirm({                                        
                                                        message: 'Seguro '+a.data('action')+' el comprobante correspondiente a '+a.data('index')+'?',
                                                        size: \"large\",
                                                        buttons: {
                                                                  confirm: {
                                                                      label: 'Si',
                                                                      className: 'btn-success'
                                                                  },
                                                                  cancel: {
                                                                      label: 'No',
                                                                      className: 'btn-danger'
                                                                  }
                                                              },
                                                              callback: function (result) {
                                                                  if (result)
                                                                  {
                                                                      \$.post(a.attr('href'),
                                                                             function (data)
                                                                             {
                                                                                if (!data.error)
                                                                                {
                                                                                   location.reload();
                                                                                }
                                                                                else
                                                                                {
                                                                                  alert(data.message);
                                                                                }
                                                                             });
                                                                  }
                                                              }
                                        });

  });


</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionVentas/ventas/listaVentasDiarias.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 120,  311 => 119,  295 => 112,  288 => 110,  282 => 109,  273 => 106,  270 => 105,  265 => 104,  261 => 103,  254 => 101,  248 => 100,  244 => 99,  239 => 97,  235 => 96,  229 => 95,  224 => 94,  221 => 93,  218 => 92,  215 => 91,  212 => 90,  208 => 89,  203 => 86,  197 => 85,  188 => 83,  183 => 82,  179 => 81,  174 => 78,  163 => 77,  159 => 76,  134 => 55,  125 => 54,  67 => 5,  58 => 4,  48 => 119,  46 => 54,  44 => 4,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("


{% block stylesheets %}
<style type=\"text/css\">
           
  .table-scroll {
    position:relative;
    max-width:100%;
    margin:auto;
    overflow:hidden;
  }
  .table-wrap {
    width:100%;
    overflow:auto;
  }
  .table-scroll table {
    width:100%;
    margin:auto;
    border-collapse:separate;
    border-spacing:0;
  }
  .table-scroll th, .table-scroll td {
    padding:5px 10px;

    background:#fff;
    white-space:nowrap;
    vertical-align:top;
  }
  .table-scroll thead, .table-scroll tfoot {
    background:#f9f9f9;
  }
  .clone {
    position:absolute;
    top:0;
    left:0;
    pointer-events:none;
  }
  .clone th, .clone td {
    visibility:hidden
  }
  .clone td, .clone th {
    border-color:transparent
  }
  .clone tbody th {
    visibility:visible;
  }
  .clone .fixed-side {
    visibility:visible;
  }
  .clone thead, .clone tfoot{background:transparent;}
</style>
{% endblock %}
{% block out_container %}
<span class=\"h5 card-title\">Comprobantes Fecha: {{ fecha|date('d/m/Y') }}</span>
<hr>

<div class=\"row mt-2 mb-2\">
  <div class=\"col-lg-2 col-sm-12 border ml-3 mr-2 blue lighten-5\">
      Finalizado
  </div>
  <div class=\"col-lg-2 col-sm-12 border ml-2 orange lighten-4\">
      Pendientes
  </div>
</div>
<div id=\"table-scroll\" class=\"table-scroll\">
  <div class=\"table-wrap\">
  <table class=\"table table-striped table-bordered table-hover table-sm main-table\">
    <thead>
      <tr>
          <th class=\"fixed-side\" rowspan=\"2\">Destinatario</th>
          <th rowspan=\"2\">Numero</th>
          <th rowspan=\"2\">Hora Carga</th>
          <th rowspan=\"2\"></th>          
          
          {% for a in articulos %}
              <th colspan=\"{{ tipos|length  }}\"> {{ a.nombreVenta }}</th>
          {% endfor %}        
      </tr>
      <tr>
          {% for a in articulos %}
            {% for t in tipos %}
              <th>{{ t.codigo }}</th>
            {% endfor %}
          {% endfor %}
      </tr>
      </thead>
      <tbody>        
        {% for cmp in comprobantes %}
            {% set color = 'orange lighten-4' %}
            {% if cmp.finalizado %}
                {% set color ='blue lighten-5' %}
            {% endif %}
            <tr class=\"color {{ color }}\">
              <th class=\"fixed-side {{ color }}\">{{ cmp.entidad }}</th>
              <td>{{ \"%06d\" | format(cmp.numero) }}</td>
              <td>{{ cmp.horarioCarga }}</td>
              <td>
                    <a href=\"{{ path('vtas_agregar_articulos', { id : cmp.id }) }}\"><i class=\"far fa-edit\" title=\"Modificar\"></i></a>
                    <a href=\"{{ path('vtas_delete_comprobante_venta', { id : cmp.id }) }}\" data-action=\"eliminar\" data-index=\"{{ cmp.entidad}}\" class=\"deletecmp\"><i class=\"far fa-trash-alt\" title=\"Eliminar\"></i></a>
                    <a href=\"{{ path('vtas_finalizar_comprobante_venta', { id : cmp.id }) }}\" data-action=\"finalizar\" data-index=\"{{ cmp.entidad}}\" class=\"deletecmp\"><i class=\"far fa-check-square\" title=\"Finalizar\"></i></a>
              </td>             
              {% for art in articulos %}
                  {% for tpo in tipos %}
                    <td>
                      {{ data[cmp.id][art.id][tpo.id] }}
                    </td>
                  {% endfor %}
              {% endfor %}
            </tr>
        {% endfor %}
      </tbody>
  </table>  
</div>
</div>
<br>
<br>
{% endblock out_container %}
{% block javascripts %}

<script type=\"text/javascript\">

  \$(\".main-table\").clone(true).appendTo('#table-scroll').addClass('clone');  
  \$('.deletecmp').click(function(event){
                                        event.preventDefault();
                                        var a = \$(this);
                                        bootbox.confirm({                                        
                                                        message: 'Seguro '+a.data('action')+' el comprobante correspondiente a '+a.data('index')+'?',
                                                        size: \"large\",
                                                        buttons: {
                                                                  confirm: {
                                                                      label: 'Si',
                                                                      className: 'btn-success'
                                                                  },
                                                                  cancel: {
                                                                      label: 'No',
                                                                      className: 'btn-danger'
                                                                  }
                                                              },
                                                              callback: function (result) {
                                                                  if (result)
                                                                  {
                                                                      \$.post(a.attr('href'),
                                                                             function (data)
                                                                             {
                                                                                if (!data.error)
                                                                                {
                                                                                   location.reload();
                                                                                }
                                                                                else
                                                                                {
                                                                                  alert(data.message);
                                                                                }
                                                                             });
                                                                  }
                                                              }
                                        });

  });


</script>

{% endblock  %}", "@GestionVentas/ventas/listaVentasDiarias.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionVentasBundle\\Resources\\views\\ventas\\listaVentasDiarias.html.twig");
    }
}
