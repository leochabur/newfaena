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

/* GestionVentasBundle:ventas:historicoVentas.html.twig */
class __TwigTemplate_dea281403006ab4211f3c5188b04209a322c33f28a0832e5b8da1f4041db09f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionVentasBundle:ventas:historicoVentas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionVentasBundle:ventas:historicoVentas.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionVentasBundle:ventas:historicoVentas.html.twig", 1);
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
<span class=\"h5 card-title\">Historico de Ventas</span>
<hr>
";
        // line 15
        $this->loadTemplate("@GestionFaena/messages.html.twig", "GestionVentasBundle:ventas:historicoVentas.html.twig", 15)->display($context);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "desde", []), 'widget', ["attr" => ["class" => "form-control form-control-sm mt-2 "]]);
        echo "
            </div>
            <div class=\"col-lg-4 col-sm-12\">
              ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hasta", []), 'widget', ["attr" => ["class" => "form-control form-control-sm mt-2 "]]);
        echo "
            </div>
            <div class=\"col-lg-4 col-sm-12\">
              ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cargar", []), 'widget', ["attr" => ["class" => "btn btn-sm  btn-primary btnsend"]]);
        echo "
            </div>
          </div>
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
<hr>

";
        // line 32
        if ((isset($context["comprobantes"]) || array_key_exists("comprobantes", $context))) {
            // line 33
            echo "    <!--table class=\"table table-striped table-bordered table-hover table-sm fs-6\"-->
    <table id=\"dt-vertical-scroll\" class=\"table table-striped table-bordered table-hover table-sm\" cellspacing=\"0\" width=\"100%\">
      <thead>
        <tr>
            <th>Fecha</th>
            <th>Numero</th>
            <th>Destino</th>
            <th>Observaciones</th>
            <th>Articulos O</th>      
            <th>Articulos R</th>        
            <th></th>
        </tr>
        </thead>
        <tbody>        
          ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comprobantes"] ?? $this->getContext($context, "comprobantes")));
            foreach ($context['_seq'] as $context["_key"] => $context["cmp"]) {
                // line 48
                echo "
              <tr>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cmp"], "fecha", []), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, sprintf("%06d", $this->getAttribute($context["cmp"], "numero", [])), "html", null, true);
                echo "</td>
                <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "entidad", []), "html", null, true);
                echo "</td>
                <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "comentario", []), "html", null, true);
                echo "</td>   
                <td class=\"text-right\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "itemOficial", []), "html", null, true);
                echo "</td>  
                <td class=\"text-right\">";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["cmp"], "itemNoOficial", []), "html", null, true);
                echo "</td>
                <td class=\"text-center\">
                  <a title=\"Ver detalle\" class=\"open\" data-number=\"";
                // line 57
                echo twig_escape_filter($this->env, sprintf("%06d", $this->getAttribute($context["cmp"], "numero", [])), "html", null, true);
                echo "\"  
                  href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_view_detalle_cmbte", ["cmp" => $this->getAttribute($context["cmp"], "id", []), "tpo" => 0]), "html", null, true);
                echo "\">
                    <i class=\"fas fa-eye\"></i>
                    
                    </a>
                </td>     
              </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "        </tbody>
    </table>  
";
        }
        // line 68
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


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
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

  \$('#dt-vertical-scroll').dataTable({
                                      \"scrollCollapse\": true,
                                      \"paging\": false,
                                      \"searching\": false,
                                                                            \"language\": {
                                                      \"info\": \"\"
                                                  },
    \"fnInitComplete\": function () {
      var myCustomScrollbar = document.querySelector('#dt-vertical-scroll_wrapper .dataTables_scrollBody');
      var ps = new PerfectScrollbar(myCustomScrollbar);
    },
    \"scrollY\": 500,
  });


</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionVentasBundle:ventas:historicoVentas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 91,  233 => 90,  202 => 68,  197 => 65,  184 => 58,  180 => 57,  175 => 55,  171 => 54,  167 => 53,  163 => 52,  159 => 51,  155 => 50,  151 => 48,  147 => 47,  131 => 33,  129 => 32,  123 => 29,  117 => 26,  111 => 23,  105 => 20,  99 => 17,  96 => 16,  94 => 15,  85 => 10,  76 => 9,  62 => 4,  53 => 3,  31 => 1,);
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
<span class=\"h5 card-title\">Historico de Ventas</span>
<hr>
{% include '@GestionFaena/messages.html.twig'  %}

{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
          <div class=\"form-row\">
            <div class=\"col-lg-4 col-sm-12\">
              {{ form_widget(form.desde, { 'attr' : {'class' : 'form-control form-control-sm mt-2 '}}) }}
            </div>
            <div class=\"col-lg-4 col-sm-12\">
              {{ form_widget(form.hasta, { 'attr' : {'class' : 'form-control form-control-sm mt-2 '}}) }}
            </div>
            <div class=\"col-lg-4 col-sm-12\">
              {{ form_widget(form.cargar, { 'attr' : { 'class' : 'btn btn-sm  btn-primary btnsend' }}) }}
            </div>
          </div>
{{ form_end(form) }}
<hr>

{% if comprobantes is defined %}
    <!--table class=\"table table-striped table-bordered table-hover table-sm fs-6\"-->
    <table id=\"dt-vertical-scroll\" class=\"table table-striped table-bordered table-hover table-sm\" cellspacing=\"0\" width=\"100%\">
      <thead>
        <tr>
            <th>Fecha</th>
            <th>Numero</th>
            <th>Destino</th>
            <th>Observaciones</th>
            <th>Articulos O</th>      
            <th>Articulos R</th>        
            <th></th>
        </tr>
        </thead>
        <tbody>        
          {% for cmp in comprobantes %}

              <tr>
                <td>{{  cmp.fecha|date('d/m/Y') }}</td>
                <td>{{ \"%06d\" | format(cmp.numero) }}</td>
                <td>{{ cmp.entidad }}</td>
                <td>{{ cmp.comentario }}</td>   
                <td class=\"text-right\">{{ cmp.itemOficial }}</td>  
                <td class=\"text-right\">{{ cmp.itemNoOficial }}</td>
                <td class=\"text-center\">
                  <a title=\"Ver detalle\" class=\"open\" data-number=\"{{ \"%06d\" | format(cmp.numero) }}\"  
                  href=\"{{ path('vtas_view_detalle_cmbte', { cmp : cmp.id, tpo : 0 }) }}\">
                    <i class=\"fas fa-eye\"></i>
                    
                    </a>
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

  \$('#dt-vertical-scroll').dataTable({
                                      \"scrollCollapse\": true,
                                      \"paging\": false,
                                      \"searching\": false,
                                                                            \"language\": {
                                                      \"info\": \"\"
                                                  },
    \"fnInitComplete\": function () {
      var myCustomScrollbar = document.querySelector('#dt-vertical-scroll_wrapper .dataTables_scrollBody');
      var ps = new PerfectScrollbar(myCustomScrollbar);
    },
    \"scrollY\": 500,
  });


</script>

{% endblock  %}", "GestionVentasBundle:ventas:historicoVentas.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionVentasBundle/Resources/views/ventas/historicoVentas.html.twig");
    }
}
