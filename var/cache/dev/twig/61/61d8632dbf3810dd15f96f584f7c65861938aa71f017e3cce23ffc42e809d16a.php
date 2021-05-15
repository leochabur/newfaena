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

/* @GestionVentas/ventas/incorporarVentas.html.twig */
class __TwigTemplate_ec62272d2afa96778409e125969d5d907c8b0ad31dcf27516767e67fc4c3fb92 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionVentas/ventas/incorporarVentas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionVentas/ventas/incorporarVentas.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionVentas/ventas/incorporarVentas.html.twig", 1);
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
<span class=\"h5 card-title\">Comprobantes venta generados</span>
<hr>
";
        // line 15
        $this->loadTemplate("@GestionFaena/messages.html.twig", "@GestionVentas/ventas/incorporarVentas.html.twig", 15)->display($context);
        // line 16
        echo "
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
          <div class=\"form-row\">
            <div class=\"col-lg-4 col-sm-12\">
              ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fecha", []), 'widget', ["attr" => ["class" => "form-control form-control-sm mt-2 "]]);
        echo "
            </div>
            <div class=\"col-lg-4 col-sm-12\">
              ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cargar", []), 'widget', ["attr" => ["class" => "btn btn-sm  btn-primary btnsend"]]);
        echo "
            </div>
          </div>
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<hr>

";
        // line 29
        if ((isset($context["comprobantes"]) || array_key_exists("comprobantes", $context))) {
            // line 30
            echo "<div class=\"row mt-2 mb-2\">
  <div class=\"col-lg-2 col-sm-12 border ml-3 mr-2 blue lighten-5\">
      Confirmados
  </div>
  <div class=\"col-lg-2 col-sm-12 border ml-2 orange lighten-4\">
      Pendientes
  </div>
</div>
    <table class=\"table table-striped table-bordered table-hover table-sm\">
      <thead>
        <tr>
            <th>Numero</th>
            <th>Destino</th>
            <th>Transporte</th>
            <th>Observaciones</th>
            <th>Articulos O</th>      
            <th>Articulos R</th>        
            <th></th>
        </tr>
        </thead>
        <tbody>        
          ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comprobantes"] ?? $this->getContext($context, "comprobantes")));
            foreach ($context['_seq'] as $context["_key"] => $context["cmp"]) {
                // line 52
                echo "              ";
                $context["color"] = "orange lighten-4";
                // line 53
                echo "              ";
                if ($this->getAttribute($context["cmp"], "confirmado", [])) {
                    // line 54
                    echo "                  ";
                    $context["color"] = "blue lighten-5";
                    // line 55
                    echo "              ";
                }
                // line 56
                echo "              <tr class=\"";
                echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
                echo "\">
                <td>";
                // line 57
                echo twig_escape_filter($this->env, sprintf("%06d", $this->getAttribute($context["cmp"], "numero", [])), "html", null, true);
                echo "</td>
                <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "entidad", []), "html", null, true);
                echo "</td>
                <td class=\"trans-";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "id", []), "html", null, true);
                echo "\">
                    ";
                // line 60
                if ($this->getAttribute($this->getAttribute($context["cmp"], "ordenCarga", [], "any", false, true), "transportista", [], "any", true, true)) {
                    // line 61
                    echo "                        ";
                    $context["oc"] = $this->getAttribute($context["cmp"], "ordenCarga", []);
                    // line 62
                    echo "                          ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["oc"] ?? $this->getContext($context, "oc")), "titularTransporte", []), "html", null, true);
                    echo "
                      ";
                }
                // line 64
                echo "                </td>
                <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "comentario", []), "html", null, true);
                echo "</td>   
                <td class=\"text-right\">";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "itemOficial", []), "html", null, true);
                echo "</td>  
                <td class=\"text-right\">";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "itemNoOficial", []), "html", null, true);
                echo "</td>
                <td class=\"text-center\">


<a class=\"dropdown-toggle mr-4\" data-toggle=\"dropdown\"
  aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-cog fa-2x\"></i></a>

<div class=\"dropdown-menu\">
    <a class=\"dropdown-item\" target=\"_blank\" href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_imprimir_comprobante", ["cmp" => $this->getAttribute($context["cmp"], "id", [])]), "html", null, true);
                echo "\">Imprimir Remito</a>
    ";
                // line 76
                if ($this->getAttribute($context["cmp"], "ordenCarga", [])) {
                    // line 77
                    echo "      <a class=\"dropdown-item\" target=\"_blanck\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_imprimir_orden_carga", ["oc" => $this->getAttribute($this->getAttribute($context["cmp"], "ordenCarga", []), "id", [])]), "html", null, true);
                    echo "\">Imprimir Orden Carga</a>
    ";
                }
                // line 79
                echo "    <a class=\"dropdown-item open\" data-number=\"";
                echo twig_escape_filter($this->env, sprintf("%06d", $this->getAttribute($context["cmp"], "numero", [])), "html", null, true);
                echo "\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_view_detalle_cmbte", ["cmp" => $this->getAttribute($context["cmp"], "id", [])]), "html", null, true);
                echo "\">Ver Detalle</a>
</div>

                  
                  </td>     
              </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "        </tbody>
    </table>  
";
        }
        // line 89
        echo "<div class=\"modal fade\" id=\"viewDetalle\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body body-details\">

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"asignarTransporte\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"transporteAsignar\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"transporteAsignar\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body body-transportista\">

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
      </div>
    </div>
  </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "
<script type=\"text/javascript\">

  \$('.open').click(function(event){
                                  event.preventDefault();
                                  var a = \$(this);
                                  \$('#exampleModalLabel').html('Remito Nº '+a.data('number'));                                  
                                  \$('.body-details').html('<div class=\"text-center loading\"><div class=\"spinner-border\" role=\"status\"><span class=\"sr-only\">Loading...</span></div></div>');
                                  \$('.body-details').load(a.attr('href'));
                                  \$('#viewDetalle').modal('show');
  });
  
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
        return "@GestionVentas/ventas/incorporarVentas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 131,  297 => 130,  247 => 89,  242 => 86,  226 => 79,  220 => 77,  218 => 76,  214 => 75,  203 => 67,  199 => 66,  195 => 65,  192 => 64,  186 => 62,  183 => 61,  181 => 60,  177 => 59,  173 => 58,  169 => 57,  164 => 56,  161 => 55,  158 => 54,  155 => 53,  152 => 52,  148 => 51,  125 => 30,  123 => 29,  117 => 26,  111 => 23,  105 => 20,  99 => 17,  96 => 16,  94 => 15,  85 => 10,  76 => 9,  62 => 4,  53 => 3,  31 => 1,);
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
<span class=\"h5 card-title\">Comprobantes venta generados</span>
<hr>
{% include '@GestionFaena/messages.html.twig'  %}

{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
          <div class=\"form-row\">
            <div class=\"col-lg-4 col-sm-12\">
              {{ form_widget(form.fecha, { 'attr' : {'class' : 'form-control form-control-sm mt-2 '}}) }}
            </div>
            <div class=\"col-lg-4 col-sm-12\">
              {{ form_widget(form.cargar, { 'attr' : { 'class' : 'btn btn-sm  btn-primary btnsend' }}) }}
            </div>
          </div>
{{ form_end(form) }}
<hr>

{% if comprobantes is defined %}
<div class=\"row mt-2 mb-2\">
  <div class=\"col-lg-2 col-sm-12 border ml-3 mr-2 blue lighten-5\">
      Confirmados
  </div>
  <div class=\"col-lg-2 col-sm-12 border ml-2 orange lighten-4\">
      Pendientes
  </div>
</div>
    <table class=\"table table-striped table-bordered table-hover table-sm\">
      <thead>
        <tr>
            <th>Numero</th>
            <th>Destino</th>
            <th>Transporte</th>
            <th>Observaciones</th>
            <th>Articulos O</th>      
            <th>Articulos R</th>        
            <th></th>
        </tr>
        </thead>
        <tbody>        
          {% for cmp in comprobantes %}
              {% set color = 'orange lighten-4' %}
              {% if cmp.confirmado %}
                  {% set color ='blue lighten-5' %}
              {% endif %}
              <tr class=\"{{ color }}\">
                <td>{{ \"%06d\" | format(cmp.numero) }}</td>
                <td>{{ cmp.entidad }}</td>
                <td class=\"trans-{{ cmp.id }}\">
                    {% if cmp.ordenCarga.transportista is defined %}
                        {% set oc = cmp.ordenCarga %}
                          {{ oc.titularTransporte }}
                      {% endif %}
                </td>
                <td>{{ cmp.comentario }}</td>   
                <td class=\"text-right\">{{ cmp.itemOficial }}</td>  
                <td class=\"text-right\">{{ cmp.itemNoOficial }}</td>
                <td class=\"text-center\">


<a class=\"dropdown-toggle mr-4\" data-toggle=\"dropdown\"
  aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fas fa-cog fa-2x\"></i></a>

<div class=\"dropdown-menu\">
    <a class=\"dropdown-item\" target=\"_blank\" href=\"{{  path('vtas_imprimir_comprobante', { cmp : cmp.id }) }}\">Imprimir Remito</a>
    {% if cmp.ordenCarga %}
      <a class=\"dropdown-item\" target=\"_blanck\" href=\"{{ path('vtas_imprimir_orden_carga', { oc : cmp.ordenCarga.id }) }}\">Imprimir Orden Carga</a>
    {% endif %}
    <a class=\"dropdown-item open\" data-number=\"{{ \"%06d\" | format(cmp.numero) }}\"  href=\"{{ path('vtas_view_detalle_cmbte', { cmp : cmp.id }) }}\">Ver Detalle</a>
</div>

                  
                  </td>     
              </tr>
          {% endfor %}
        </tbody>
    </table>  
{% endif %}
<div class=\"modal fade\" id=\"viewDetalle\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body body-details\">

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"asignarTransporte\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"transporteAsignar\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"transporteAsignar\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body body-transportista\">

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
      </div>
    </div>
  </div>
</div>

{% endblock fos_user_content %}
{% block javascripts %}

<script type=\"text/javascript\">

  \$('.open').click(function(event){
                                  event.preventDefault();
                                  var a = \$(this);
                                  \$('#exampleModalLabel').html('Remito Nº '+a.data('number'));                                  
                                  \$('.body-details').html('<div class=\"text-center loading\"><div class=\"spinner-border\" role=\"status\"><span class=\"sr-only\">Loading...</span></div></div>');
                                  \$('.body-details').load(a.attr('href'));
                                  \$('#viewDetalle').modal('show');
  });
  
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

{% endblock  %}", "@GestionVentas/ventas/incorporarVentas.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionVentasBundle\\Resources\\views\\ventas\\incorporarVentas.html.twig");
    }
}
