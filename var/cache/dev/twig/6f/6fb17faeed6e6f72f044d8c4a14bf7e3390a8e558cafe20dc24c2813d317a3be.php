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

/* GestionVentasBundle:ventas:detalleComprobante.html.twig */
class __TwigTemplate_e4e2def8e0ba3577ab2bd5c987d2e6c6a1f358377c8fed293ef9865bbeaa820e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionVentasBundle:ventas:detalleComprobante.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionVentasBundle:ventas:detalleComprobante.html.twig"));

        // line 1
        echo "
<div class=\"row\">
  <div class=\"col-lg-9 h6 card-title\">Destinatario: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comprobante"] ?? $this->getContext($context, "comprobante")), "entidad", []), "html", null, true);
        echo "</div>
  <div class=\"col-lg-3 h6 card-title\">Fecha: ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["comprobante"] ?? $this->getContext($context, "comprobante")), "fecha", []), "d/m/Y"), "html", null, true);
        echo " </div>
</div>
<div class=\"row\">
      <div class=\"col-lg-12\">
        Observaciones: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comprobante"] ?? $this->getContext($context, "comprobante")), "comentario", []), "html", null, true);
        echo "
      </div>
</div>
<hr>
";
        // line 12
        if (((isset($context["form"]) || array_key_exists("form", $context)) && (($context["cht"] ?? $this->getContext($context, "cht")) == 1))) {
            // line 13
            echo "    <div class=\"row\">
        <div class=\"col-lg-6\">
        ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
        ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "transporte", []), 'label');
            echo "
        ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "transporte", []), 'widget', ["attr" => ["class" => "form-control form-control-sm chtransp"]]);
            echo "
        ";
            // line 18
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
      </div>
    </div>
    <hr>
";
        }
        // line 23
        echo "<div class=\"mt-2 mb-2\">Estado: ";
        if ($this->getAttribute(($context["comprobante"] ?? $this->getContext($context, "comprobante")), "confirmado", [])) {
            echo " <span class=\"text-success\">Ingresado</span> ";
        } else {
            echo " <span class=\"text-warning\">Pendiente de Ingresar</span> ";
        }
        echo "</div>


    <table class=\"table table-striped table-bordered table-hover table-sm mt-2\">
      <thead>
        <tr>
            <th>CODIGO</th>
            <th>PRODUCTO</th>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? $this->getContext($context, "tipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 32
            echo "                <th>CANT ";
            echo twig_escape_filter($this->env, $context["t"], "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "       
            <th>TOTAL</th>
        </tr>
        </thead>
        <tbody>        
          ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["k"] => $context["a"]) {
            // line 39
            echo "              <tr>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "codigoInterno", []), "html", null, true);
            echo "</td>
                <td> ";
            // line 41
            echo twig_escape_filter($this->env, $context["a"], "html", null, true);
            echo " </td>
                ";
            // line 42
            $context["tot"] = 0;
            // line 43
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? $this->getContext($context, "tipos")));
            foreach ($context['_seq'] as $context["kt"] => $context["t"]) {
                // line 44
                echo "   
                    ";
                // line 45
                if ($this->getAttribute($this->getAttribute(($context["data"] ?? null), $context["k"], [], "array", false, true), $context["kt"], [], "array", true, true)) {
                    // line 46
                    echo "                        <td class=\"text-right\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), $context["k"], [], "array"), $context["kt"], [], "array"), "html", null, true);
                    echo " </td>
                          ";
                    // line 47
                    $context["tot"] = (($context["tot"] ?? $this->getContext($context, "tot")) + $this->getAttribute($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), $context["k"], [], "array"), $context["kt"], [], "array"));
                    // line 48
                    echo "                    ";
                } else {
                    // line 49
                    echo "                        <td></td> 
                    ";
                }
                // line 51
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['kt'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
                <td class=\"text-right\">";
            // line 52
            echo twig_escape_filter($this->env, ($context["tot"] ?? $this->getContext($context, "tot")), "html", null, true);
            echo "</td>  
              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>  
<hr>
<div class=\"row\">

  ";
        // line 60
        if ((isset($context["back"]) || array_key_exists("back", $context))) {
            // line 61
            echo "    <div class=\"col-lg-1\">
    <a class=\"next\"data-number=\"";
            // line 62
            echo twig_escape_filter($this->env, sprintf("%06d", $this->getAttribute(($context["back"] ?? $this->getContext($context, "back")), "numero", [])), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_view_detalle_cmbte", ["cmp" => $this->getAttribute(($context["back"] ?? $this->getContext($context, "back")), "id", [])]), "html", null, true);
            echo "\"><i class=\"fas fa-backward\"></i></a>
    </div>
  ";
        }
        // line 65
        echo "

  ";
        // line 67
        if ((isset($context["next"]) || array_key_exists("next", $context))) {
            // line 68
            echo "    <div class=\"col-lg-1\">
    <a class=\"next\"data-number=\"";
            // line 69
            echo twig_escape_filter($this->env, sprintf("%06d", $this->getAttribute(($context["next"] ?? $this->getContext($context, "next")), "numero", [])), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_view_detalle_cmbte", ["cmp" => $this->getAttribute(($context["next"] ?? $this->getContext($context, "next")), "id", [])]), "html", null, true);
            echo "\"><i class=\"fas fa-forward\"></i></a>
    </div>
  ";
        }
        // line 72
        echo "
</div>

<script type=\"text/javascript\">
  \$('.chtransp').change(function(){
                                    var select = \$(this);
                                    var form = select.closest('form');
                                    \$.post(form.attr('action'),
                                           form.serialize(),
                                           function (data){
                                                            \$('.trans-";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comprobante"] ?? $this->getContext($context, "comprobante")), "id", []), "html", null, true);
        echo "').html(data.transp);
                                           });
  });

  \$('.next').click(function(event){
                                  event.preventDefault();
                                  var a = \$(this);
                                  \$('#exampleModalLabel').html('Remito Nº '+a.data('number'));                                  
                                  \$('.body-details').html('<div class=\"text-center loading\"><div class=\"spinner-border\" role=\"status\"><span class=\"sr-only\">Loading...</span></div></div>');
                                  \$('.body-details').load(a.attr('href'));
                                  \$('#viewDetalle').modal('show');
  });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "GestionVentasBundle:ventas:detalleComprobante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 82,  215 => 72,  207 => 69,  204 => 68,  202 => 67,  198 => 65,  190 => 62,  187 => 61,  185 => 60,  178 => 55,  169 => 52,  161 => 51,  157 => 49,  154 => 48,  152 => 47,  147 => 46,  145 => 45,  142 => 44,  137 => 43,  135 => 42,  131 => 41,  127 => 40,  124 => 39,  120 => 38,  113 => 33,  104 => 32,  100 => 31,  84 => 23,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 13,  58 => 12,  51 => 8,  44 => 4,  40 => 3,  36 => 1,);
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
<div class=\"row\">
  <div class=\"col-lg-9 h6 card-title\">Destinatario: {{ comprobante.entidad }}</div>
  <div class=\"col-lg-3 h6 card-title\">Fecha: {{ comprobante.fecha|date('d/m/Y') }} </div>
</div>
<div class=\"row\">
      <div class=\"col-lg-12\">
        Observaciones: {{ comprobante.comentario }}
      </div>
</div>
<hr>
{% if form is defined and cht == 1 %}
    <div class=\"row\">
        <div class=\"col-lg-6\">
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
        {{ form_label(form.transporte) }}
        {{ form_widget(form.transporte, {'attr' : {'class' : 'form-control form-control-sm chtransp'}})  }}
        {{ form_end(form) }}
      </div>
    </div>
    <hr>
{% endif %}
<div class=\"mt-2 mb-2\">Estado: {% if comprobante.confirmado %} <span class=\"text-success\">Ingresado</span> {% else %} <span class=\"text-warning\">Pendiente de Ingresar</span> {% endif %}</div>


    <table class=\"table table-striped table-bordered table-hover table-sm mt-2\">
      <thead>
        <tr>
            <th>CODIGO</th>
            <th>PRODUCTO</th>
            {% for t in tipos %}
                <th>CANT {{ t }}</th>
            {% endfor %}       
            <th>TOTAL</th>
        </tr>
        </thead>
        <tbody>        
          {% for k, a in articulos %}
              <tr>
                <td>{{ a.codigoInterno }}</td>
                <td> {{ a }} </td>
                {% set tot = 0 %}
                {% for kt, t in tipos %}
   
                    {% if data[k][kt] is defined %}
                        <td class=\"text-right\"> {{ data[k][kt] }} </td>
                          {% set tot = tot + data[k][kt] %}
                    {% else %}
                        <td></td> 
                    {% endif %}
                {% endfor %}   
                <td class=\"text-right\">{{ tot }}</td>  
              </tr>
          {% endfor %}
        </tbody>
    </table>  
<hr>
<div class=\"row\">

  {% if back is defined %}
    <div class=\"col-lg-1\">
    <a class=\"next\"data-number=\"{{ \"%06d\" | format(back.numero) }}\" href=\"{{ path('vtas_view_detalle_cmbte', { cmp : back.id }) }}\"><i class=\"fas fa-backward\"></i></a>
    </div>
  {% endif %}


  {% if next is defined %}
    <div class=\"col-lg-1\">
    <a class=\"next\"data-number=\"{{ \"%06d\" | format(next.numero) }}\" href=\"{{ path('vtas_view_detalle_cmbte', { cmp : next.id }) }}\"><i class=\"fas fa-forward\"></i></a>
    </div>
  {% endif %}

</div>

<script type=\"text/javascript\">
  \$('.chtransp').change(function(){
                                    var select = \$(this);
                                    var form = select.closest('form');
                                    \$.post(form.attr('action'),
                                           form.serialize(),
                                           function (data){
                                                            \$('.trans-{{ comprobante.id }}').html(data.transp);
                                           });
  });

  \$('.next').click(function(event){
                                  event.preventDefault();
                                  var a = \$(this);
                                  \$('#exampleModalLabel').html('Remito Nº '+a.data('number'));                                  
                                  \$('.body-details').html('<div class=\"text-center loading\"><div class=\"spinner-border\" role=\"status\"><span class=\"sr-only\">Loading...</span></div></div>');
                                  \$('.body-details').load(a.attr('href'));
                                  \$('#viewDetalle').modal('show');
  });
</script>", "GestionVentasBundle:ventas:detalleComprobante.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionVentasBundle/Resources/views/ventas/detalleComprobante.html.twig");
    }
}
