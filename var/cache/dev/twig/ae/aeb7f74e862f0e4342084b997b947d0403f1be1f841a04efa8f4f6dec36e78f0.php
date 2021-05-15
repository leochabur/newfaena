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

/* GestionSigcerBundle::modificacionMultiple.html.twig */
class __TwigTemplate_c8098d648d3c54db5918a3e26dcc376498811c35d735d3bd62a6f624f5520dd3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionSigcerBundle::modificacionMultiple.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionSigcerBundle::modificacionMultiple.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionSigcerBundle::modificacionMultiple.html.twig", 1);
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
<span class=\"h5 card-title\">Multiples modificaciones</span>
<hr>
  ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"form-row\">
      <div class=\"col-2\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zona", []), 'label', ["label" => "Region"]);
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zona", []), 'widget');
        echo "
      </div>
      <div class=\"col-3\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grupo", []), 'label', ["label" => "Fecha Solicitudes"]);
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grupo", []), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "load", []), 'widget');
        echo "
      </div>
    </div>
  ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  <hr>
  ";
        // line 25
        if ((isset($context["solicitudes"]) || array_key_exists("solicitudes", $context))) {
            // line 26
            echo "  <h4>Solicitudes Region: ";
            echo twig_escape_filter($this->env, ($context["region"] ?? $this->getContext($context, "region")), "html", null, true);
            echo "</h4>
  <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_generar_archivos", ["gpo" => ($context["grupo"] ?? $this->getContext($context, "grupo")), "rgn" => $this->getAttribute(($context["region"] ?? $this->getContext($context, "region")), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-danger\" target=\"_blank\">Exportar solicitudes</a>
  <hr>
    
        <table class=\"table table-striped table-bordered table-hover table-sm \">
            <thead>
              <tr>
                <th>Zona</th>
                <th>Localidad</th>
                <th>Articulo</th>
                <th>
                          <div  class=\"form-row\">
                            <div class=\"col-2\">Cant.Sanit.</div>
                            <div class=\"col-2\">Cant.</div>
                            <div class=\"col-2\">P. Neto</div>
                            <div class=\"col-2\">P. Bruto</div>                            
                            <div class=\"col-2\"></div> 
                            <div class=\"col-1\"></div> 
                          </div>
                </th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 49
            $context["last"] = 0;
            // line 50
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["solicitudes"] ?? $this->getContext($context, "solicitudes")));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 51
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["s"], "detalles", []));
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    // line 52
                    echo "                  <tr>
                      <td>
                          ";
                    // line 54
                    if ((($context["last"] ?? $this->getContext($context, "last")) != $this->getAttribute($this->getAttribute($context["s"], "zona", []), "codigo", []))) {
                        // line 55
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "zona", []), "codigo", []), "html", null, true);
                        echo "
                            ";
                        // line 56
                        $context["last"] = $this->getAttribute($this->getAttribute($context["s"], "zona", []), "codigo", []);
                        // line 57
                        echo "                          ";
                    }
                    // line 58
                    echo "                      </td>
                      <td>";
                    // line 59
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "zona", []), "zona", [])), "html", null, true);
                    echo "</td>
                      <td>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "articulo", []), "html", null, true);
                    echo "</td>
                      
                      <td class=\"text-right\">
                        ";
                    // line 63
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["formUpd"] ?? $this->getContext($context, "formUpd")), $this->getAttribute($context["d"], "id", []), [], "array"), 'form_start', ["attr" => ["class" => "upd", "novalidate" => "novalidate"]]);
                    echo "
                          <div  class=\"form-row text-right\">
                            <div class=\"col-2\">";
                    // line 65
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formUpd"] ?? $this->getContext($context, "formUpd")), $this->getAttribute($context["d"], "id", []), [], "array"), "cantSan", []), 'widget', ["attr" => ["class" => "cansan form-control form-control-sm"]]);
                    echo "</div>
                            <div class=\"col-2\">";
                    // line 66
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formUpd"] ?? $this->getContext($context, "formUpd")), $this->getAttribute($context["d"], "id", []), [], "array"), "cant", []), 'widget', ["attr" => ["class" => "cansol form-control form-control-sm"]]);
                    echo "</div>
                            <div class=\"col-2\">";
                    // line 67
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formUpd"] ?? $this->getContext($context, "formUpd")), $this->getAttribute($context["d"], "id", []), [], "array"), "pneto", []), 'widget', ["attr" => ["class" => "pneto form-control form-control-sm"]]);
                    echo "</div>
                            <div class=\"col-2\">
                                                ";
                    // line 69
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formUpd"] ?? $this->getContext($context, "formUpd")), $this->getAttribute($context["d"], "id", []), [], "array"), "pbruto", []), 'widget', ["attr" => ["class" => "pbruto form-control form-control-sm"]]);
                    echo "
                            </div>                        
                            <div class=\"col-2 mt-0\">
                                    ";
                    // line 72
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formUpd"] ?? $this->getContext($context, "formUpd")), $this->getAttribute($context["d"], "id", []), [], "array"), "load", []), 'widget', ["attr" => ["class" => "btn btn-warning btn-sm"]]);
                    echo "
                            </div> 
                            <div class=\"col-1 result\">
                            </div>
                          </div>
                        ";
                    // line 77
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["formUpd"] ?? $this->getContext($context, "formUpd")), $this->getAttribute($context["d"], "id", []), [], "array"), 'form_end');
                    echo "
                      </td>
                  </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "            </tbody>
        </table>
      ";
        }
        // line 85
        echo "    <div>
        <a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_grupos_solicitudes");
        echo "\" class=\"btn btn-success\"><< Volver</a>
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
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">

          \$(\".cansan\").focusout(function(){
                                            var cantSan = \$(this);
                                            var cant = '';
                                            var neto = '';
                                            var bruto = '';

                                            if (cantSan)
                                            {
                                              var cant = (cantSan.val()/cantSan.data('fcan'));
                                              var neto = Math.round(cant*cantSan.data('fpn'));
                                              var bruto = Math.round(cant*cantSan.data('fpb'));
                                              var cant = Math.round(cant);
                                            }

                                            var form = cantSan.closest('form');
                                            form.find('.cansol').val(cant);
                                            form.find('.pneto').val(neto);
                                            form.find('.pbruto').val(bruto);
                                            form.find('button').focus();

          });

          \$('.upd').submit(function(event){
                                            event.preventDefault();
                                            var form = \$(this);
                                            var route = form.attr('action');
                                            var btn = form.find('button');
                                            \$.post(route,
                                                   form.serialize(),
                                                   function(data){
                                                                  if (data.status)
                                                                  {
                                                           
                                                                      form.find('.result').append('<i class=\"far fa-thumbs-up fa-2x\"></i>');
                                                                     
                                                                  }
                                                                  else
                                                                      form.find('.result').append('<i class=\"far fa-thumbs-down fa-2x\"></i>');
                                                   });
                                            
          });
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionSigcerBundle::modificacionMultiple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 91,  248 => 90,  235 => 86,  232 => 85,  227 => 82,  221 => 81,  211 => 77,  203 => 72,  197 => 69,  192 => 67,  188 => 66,  184 => 65,  179 => 63,  173 => 60,  169 => 59,  166 => 58,  163 => 57,  161 => 56,  156 => 55,  154 => 54,  150 => 52,  145 => 51,  140 => 50,  138 => 49,  113 => 27,  108 => 26,  106 => 25,  101 => 23,  95 => 20,  87 => 15,  83 => 14,  77 => 11,  73 => 10,  67 => 7,  61 => 3,  52 => 2,  30 => 1,);
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
<span class=\"h5 card-title\">Multiples modificaciones</span>
<hr>
  {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-row\">
      <div class=\"col-2\">
        {{ form_label(form.zona, 'Region') }}
        {{ form_widget(form.zona) }}
      </div>
      <div class=\"col-3\">
        {{ form_label(form.grupo, 'Fecha Solicitudes') }}
        {{ form_widget(form.grupo) }}
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        {{ form_widget(form.load) }}
      </div>
    </div>
  {{ form_end(form) }}
  <hr>
  {% if solicitudes is defined %}
  <h4>Solicitudes Region: {{ region }}</h4>
  <a href=\"{{ path('sigcer_generar_archivos', {gpo: grupo, rgn: region.id}) }}\" class=\"btn btn-danger\" target=\"_blank\">Exportar solicitudes</a>
  <hr>
    
        <table class=\"table table-striped table-bordered table-hover table-sm \">
            <thead>
              <tr>
                <th>Zona</th>
                <th>Localidad</th>
                <th>Articulo</th>
                <th>
                          <div  class=\"form-row\">
                            <div class=\"col-2\">Cant.Sanit.</div>
                            <div class=\"col-2\">Cant.</div>
                            <div class=\"col-2\">P. Neto</div>
                            <div class=\"col-2\">P. Bruto</div>                            
                            <div class=\"col-2\"></div> 
                            <div class=\"col-1\"></div> 
                          </div>
                </th>
              </tr>
            </thead>
            <tbody>
              {% set last = 0 %}
              {% for s in solicitudes %}
                {% for d in s.detalles %}
                  <tr>
                      <td>
                          {% if last != s.zona.codigo %}
                            {{ s.zona.codigo }}
                            {% set last = s.zona.codigo %}
                          {% endif %}
                      </td>
                      <td>{{ s.zona.zona|upper }}</td>
                      <td>{{ d.articulo }}</td>
                      
                      <td class=\"text-right\">
                        {{ form_start(formUpd[d.id], {'attr' : {'class' : 'upd', 'novalidate' : 'novalidate'}} ) }}
                          <div  class=\"form-row text-right\">
                            <div class=\"col-2\">{{ form_widget(formUpd[d.id].cantSan, {'attr' : {'class' : 'cansan form-control form-control-sm'}}) }}</div>
                            <div class=\"col-2\">{{ form_widget(formUpd[d.id].cant, {'attr' : {'class' : 'cansol form-control form-control-sm'}}) }}</div>
                            <div class=\"col-2\">{{ form_widget(formUpd[d.id].pneto, {'attr' : {'class' : 'pneto form-control form-control-sm'}}) }}</div>
                            <div class=\"col-2\">
                                                {{ form_widget(formUpd[d.id].pbruto, {'attr' : {'class' : 'pbruto form-control form-control-sm'}}) }}
                            </div>                        
                            <div class=\"col-2 mt-0\">
                                    {{ form_widget(formUpd[d.id].load, {'attr' : { 'class' : 'btn btn-warning btn-sm'}}) }}
                            </div> 
                            <div class=\"col-1 result\">
                            </div>
                          </div>
                        {{ form_end(formUpd[d.id]) }}
                      </td>
                  </tr>
                {% endfor %}
              {% endfor %}
            </tbody>
        </table>
      {% endif %}
    <div>
        <a href=\"{{ path('sigcer_add_grupos_solicitudes') }}\" class=\"btn btn-success\"><< Volver</a>
    </div>
{% endblock fos_user_content %}

{% block javascripts %}
 {{ parent() }}
<script type=\"text/javascript\">

          \$(\".cansan\").focusout(function(){
                                            var cantSan = \$(this);
                                            var cant = '';
                                            var neto = '';
                                            var bruto = '';

                                            if (cantSan)
                                            {
                                              var cant = (cantSan.val()/cantSan.data('fcan'));
                                              var neto = Math.round(cant*cantSan.data('fpn'));
                                              var bruto = Math.round(cant*cantSan.data('fpb'));
                                              var cant = Math.round(cant);
                                            }

                                            var form = cantSan.closest('form');
                                            form.find('.cansol').val(cant);
                                            form.find('.pneto').val(neto);
                                            form.find('.pbruto').val(bruto);
                                            form.find('button').focus();

          });

          \$('.upd').submit(function(event){
                                            event.preventDefault();
                                            var form = \$(this);
                                            var route = form.attr('action');
                                            var btn = form.find('button');
                                            \$.post(route,
                                                   form.serialize(),
                                                   function(data){
                                                                  if (data.status)
                                                                  {
                                                           
                                                                      form.find('.result').append('<i class=\"far fa-thumbs-up fa-2x\"></i>');
                                                                     
                                                                  }
                                                                  else
                                                                      form.find('.result').append('<i class=\"far fa-thumbs-down fa-2x\"></i>');
                                                   });
                                            
          });
</script>

{% endblock  %}
", "GestionSigcerBundle::modificacionMultiple.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionSigcerBundle/Resources/views/modificacionMultiple.html.twig");
    }
}
