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

/* GestionVentasBundle:ventas:agregarItems.html.twig */
class __TwigTemplate_86c956fd29be5567549b449cfb09a5bf7736fa65d59206921ca85f805a094305 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionVentasBundle:ventas:agregarItems.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionVentasBundle:ventas:agregarItems.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionVentasBundle:ventas:agregarItems.html.twig", 1);
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
        echo "<style type=\"text/css\">

table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
}

</style>
<br>
<hr>
<span class=\"h5 card-title\">Agregar Articulos</span>
<div class=\"row mt-4\">
  <div class=\"col-lg-4\">
    Fecha: ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["comprobante"] ?? $this->getContext($context, "comprobante")), "fecha", []), "d/m/Y"), "html", null, true);
        echo "
  </div>
  <div class=\"col-lg-4\">
    Destinatario: ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comprobante"] ?? $this->getContext($context, "comprobante")), "entidad", []), "html", null, true);
        echo "
  </div>
</div>
";
        // line 30
        if ($this->getAttribute(($context["comprobante"] ?? $this->getContext($context, "comprobante")), "confirmado", [])) {
            // line 31
            echo "    <div class=\"row mt-4\">
        <div class=\"col-lg-4 fs-5 text-danger\">
          El formulario ya ha sido impreso
        </div>
    </div>
";
        }
        // line 37
        echo "<hr>
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "sussecc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            echo "\t<div class=\"alert alert-success\" role=\"alert\">
\t  ";
            // line 40
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  <table class=\"table table-striped table-bordered table-hover table-sm \" id=\"table-items\">
    <thead>
      <tr>
        <th rowspan=\"2\"  scope=\"col\">Articulo</th>
        <th colspan=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["tipos"] ?? $this->getContext($context, "tipos"))), "html", null, true);
        echo "\"  scope=\"col\">Tipo</th>
      </tr>
      <tr>
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? $this->getContext($context, "tipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 51
            echo "          <th  scope=\"col\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "codigo", []), "html", null, true);
            echo "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "      </tr>
      </thead>
      <tbody>
        ";
        // line 56
        $context["i"] = 1;
        // line 57
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ventas"] ?? $this->getContext($context, "ventas")));
        foreach ($context['_seq'] as $context["kvta"] => $context["vvta"]) {
            // line 58
            echo "          <tr>
              <td>

                ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["articulos"] ?? $this->getContext($context, "articulos")), $context["kvta"], [], "array"), "nombreVenta", []), "html", null, true);
            echo "

              </td>

              ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? $this->getContext($context, "tipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 66
                echo "                  ";
                $context["class"] = ("update col-lg-6 form-control-sm " . ($context["i"] ?? $this->getContext($context, "i")));
                // line 67
                echo "                  <td class=\"w-auto\">

                    ";
                // line 69
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute($context["vvta"], $this->getAttribute($context["t"], "id", []), [], "array"), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "fupdate"]]);
                echo "
                    ";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["vvta"], $this->getAttribute($context["t"], "id", []), [], "array"), "cantidad", []), 'widget', ["attr" => ["data-index" => ($context["i"] ?? $this->getContext($context, "i")), "class" => ($context["class"] ?? $this->getContext($context, "class"))]]);
                echo "
                    ";
                // line 71
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute($context["vvta"], $this->getAttribute($context["t"], "id", []), [], "array"), 'form_end');
                echo "
                  </td>
                  ";
                // line 73
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 74
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kvta'], $context['vvta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "      </tbody>
  </table>  
  <hr>
  <div class=\"form-row\">
      <div class=\"col-lg-3 col-sm-12\">
          ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["back"] ?? $this->getContext($context, "back")), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "back"]]);
        echo "
          ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["back"] ?? $this->getContext($context, "back")), "back", []), 'widget');
        echo "
          ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["back"] ?? $this->getContext($context, "back")), 'form_end');
        echo "
      </div>
      <div class=\"col-lg-2 col-sm-12\">
          <!--a class='btn btn-success finalice' href='";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_finalizar_comprobante_venta", ["id" => $this->getAttribute(($context["comprobante"] ?? $this->getContext($context, "comprobante")), "id", [])]), "html", null, true);
        echo "'>Finalizar</a-->
      </div>
  </div>
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">

\$(document).ready(function () {

          \$('#table-items').DataTable({
                                      \"scrollY\": \"200px\",
                                      \"scrollCollapse\": true,
                                      \"ordering\": false,
                                      \"paging\": false,
                                      \"searching\": false,
                                      \"scrollY\": \"400px\",
                                      \"language\": {
                                                      \"info\": \"\"
                                                  }
          });

          \$('.finalice').click(function(event){
                                                event.preventDefault();
                                                var a = \$(this);
                                                bootbox.confirm({                                        
                                                        message: 'Seguro finalizar el comprobante de venta?',
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
                                                                                   \$('.back').trigger('submit');
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

          \$('.dataTables_length').addClass('bs-select');

          \$('.update').focusout(function(event){
                                            event.preventDefault();
                                            var input = \$(this);
                                            var form = input.closest('form');
                                            if (input.val())
                                            {
                                              \$.post(form.attr('action'),
                                                     form.serialize(),
                                                     function(data)
                                                     {
                                                         if (!data.error)
                                                         {
                                                          input.addClass('green 50');
                                                         }
                                                         else{
                                                              input.addClass('red 50');
                                                              alert(data.message);
                                                         }
                                                     });            
                                            }
             
          });

          \$('.fupdate').submit(function(event){
                                            event.preventDefault();
                                            var form = \$(this);
                                            var input = form.find( \":text\" );
                                            if (input.val())
                                            {
                                              \$.post(form.attr('action'),
                                                     form.serialize(),
                                                     function(data)
                                                     {
                                                       if (!data.error)
                                                         {
                                                          input.addClass('green 50');
                                                          var i = input.data('index')+1;

                                                          \$('.'+i).focus();
                                                         }
                                                         else{
                                                          input.addClass('red 50');
                                                          alert(data.message);
                                                         }
                                                     });            
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
        return "GestionVentasBundle:ventas:agregarItems.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 94,  250 => 93,  235 => 88,  229 => 85,  225 => 84,  221 => 83,  214 => 78,  206 => 75,  200 => 74,  198 => 73,  193 => 71,  189 => 70,  185 => 69,  181 => 67,  178 => 66,  174 => 65,  167 => 61,  162 => 58,  157 => 57,  155 => 56,  150 => 53,  141 => 51,  137 => 50,  131 => 47,  125 => 43,  116 => 40,  113 => 39,  109 => 38,  106 => 37,  98 => 31,  96 => 30,  90 => 27,  84 => 24,  61 => 3,  52 => 2,  30 => 1,);
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
<style type=\"text/css\">

table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
}

</style>
<br>
<hr>
<span class=\"h5 card-title\">Agregar Articulos</span>
<div class=\"row mt-4\">
  <div class=\"col-lg-4\">
    Fecha: {{ comprobante.fecha|date('d/m/Y') }}
  </div>
  <div class=\"col-lg-4\">
    Destinatario: {{ comprobante.entidad }}
  </div>
</div>
{% if comprobante.confirmado %}
    <div class=\"row mt-4\">
        <div class=\"col-lg-4 fs-5 text-danger\">
          El formulario ya ha sido impreso
        </div>
    </div>
{% endif %}
<hr>
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
  <table class=\"table table-striped table-bordered table-hover table-sm \" id=\"table-items\">
    <thead>
      <tr>
        <th rowspan=\"2\"  scope=\"col\">Articulo</th>
        <th colspan=\"{{ tipos|length  }}\"  scope=\"col\">Tipo</th>
      </tr>
      <tr>
        {% for t in tipos %}
          <th  scope=\"col\">{{ t.codigo }}</th>
        {% endfor %}
      </tr>
      </thead>
      <tbody>
        {% set i = 1 %}
        {% for kvta, vvta in ventas %}
          <tr>
              <td>

                {{ articulos[kvta].nombreVenta }}

              </td>

              {% for t in tipos %}
                  {% set class =  \"update col-lg-6 form-control-sm \" ~ i %}
                  <td class=\"w-auto\">

                    {{ form_start(vvta[t.id], {'attr': {'novalidate': 'novalidate', 'class': 'fupdate'}}) }}
                    {{ form_widget(vvta[t.id].cantidad, {'attr' : {'data-index' : i, 'class' : class }}) }}
                    {{ form_end(vvta[t.id]) }}
                  </td>
                  {% set i = i + 1 %}
              {% endfor %}

          </tr>
        {% endfor %}
      </tbody>
  </table>  
  <hr>
  <div class=\"form-row\">
      <div class=\"col-lg-3 col-sm-12\">
          {{ form_start(back, {'attr': {'novalidate': 'novalidate', 'class' : 'back'}}) }}
          {{ form_widget(back.back) }}
          {{ form_end(back) }}
      </div>
      <div class=\"col-lg-2 col-sm-12\">
          <!--a class='btn btn-success finalice' href='{{ path('vtas_finalizar_comprobante_venta', { id : comprobante.id }) }}'>Finalizar</a-->
      </div>
  </div>
  
{% endblock fos_user_content %}
{% block javascripts %}
 {{ parent() }}
<script type=\"text/javascript\">

\$(document).ready(function () {

          \$('#table-items').DataTable({
                                      \"scrollY\": \"200px\",
                                      \"scrollCollapse\": true,
                                      \"ordering\": false,
                                      \"paging\": false,
                                      \"searching\": false,
                                      \"scrollY\": \"400px\",
                                      \"language\": {
                                                      \"info\": \"\"
                                                  }
          });

          \$('.finalice').click(function(event){
                                                event.preventDefault();
                                                var a = \$(this);
                                                bootbox.confirm({                                        
                                                        message: 'Seguro finalizar el comprobante de venta?',
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
                                                                                   \$('.back').trigger('submit');
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

          \$('.dataTables_length').addClass('bs-select');

          \$('.update').focusout(function(event){
                                            event.preventDefault();
                                            var input = \$(this);
                                            var form = input.closest('form');
                                            if (input.val())
                                            {
                                              \$.post(form.attr('action'),
                                                     form.serialize(),
                                                     function(data)
                                                     {
                                                         if (!data.error)
                                                         {
                                                          input.addClass('green 50');
                                                         }
                                                         else{
                                                              input.addClass('red 50');
                                                              alert(data.message);
                                                         }
                                                     });            
                                            }
             
          });

          \$('.fupdate').submit(function(event){
                                            event.preventDefault();
                                            var form = \$(this);
                                            var input = form.find( \":text\" );
                                            if (input.val())
                                            {
                                              \$.post(form.attr('action'),
                                                     form.serialize(),
                                                     function(data)
                                                     {
                                                       if (!data.error)
                                                         {
                                                          input.addClass('green 50');
                                                          var i = input.data('index')+1;

                                                          \$('.'+i).focus();
                                                         }
                                                         else{
                                                          input.addClass('red 50');
                                                          alert(data.message);
                                                         }
                                                     });            
                                            }
             
          });

});
</script>

{% endblock  %}", "GestionVentasBundle:ventas:agregarItems.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionVentasBundle/Resources/views/ventas/agregarItems.html.twig");
    }
}
