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

/* @GestionSigcer/altaGrupoSolicitud.html.twig */
class __TwigTemplate_382b79d2c68a468eb45c64597e730f3b3245d69021e6500d9834de71775cd3d7 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionSigcer/altaGrupoSolicitud.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionSigcer/altaGrupoSolicitud.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "<br>
<hr>
<span class=\"h5 card-title\">Nuevo grupo de solicitudes</span>
<hr>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "flashes", [0 => "sussecc"], "method"));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"form-row\">
      <div class=\"col-2\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", []), 'label');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", []), 'widget');
        echo "
      </div>
      <div class=\"col-1\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "version", []), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "version", []), 'widget');
        echo "
      </div>
      <div class=\"col-2\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "exportacion", []), 'label', ["label" => "Destino"]);
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "exportacion", []), 'widget');
        echo "
      </div>
      <div class=\"col-2\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paisDestino", []), 'label');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paisDestino", []), 'widget');
        echo "
      </div>
      <div class=\"col-3\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigoEstablecimiento", []), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigoEstablecimiento", []), 'widget');
        echo "
      </div>
      <div class=\"col-2\">
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roleEstablecimiento", []), 'label', ["label" => "Rol establecimineto"]);
        echo "
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roleEstablecimiento", []), 'widget');
        echo "
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", []), 'widget');
        echo "
      </div>
    </div>
\t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
    <span class=\"h5\">Grupos de solicitudes generadas</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Destino</th>
            <th>Pais Destino</th>
            <th>Establecimiento</th>
            <th>Role Establecimiento</th>
            <th>Cant. Solic.</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grupos"]) ? $context["grupos"] : $this->getContext($context, "grupos")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 65
            echo "            <tr>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["g"], "fecha", []), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 69
            if ($this->getAttribute($context["g"], "exportacion", [])) {
                // line 70
                echo "                      Exportacion
                    ";
            } else {
                // line 72
                echo "                      Cons. Interno
                    ";
            }
            // line 74
            echo "                </td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "paisDestino", []), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "codigoEstablecimiento", []), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "roleEstablecimiento", []), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["g"], "solicitudes", [])), "html", null, true);
            echo "</td>
                <td>
              <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify\"></i></a>
                <div class=\"dropdown-menu\">
                  ";
            // line 82
            if ( !$this->getAttribute($context["g"], "exportacion", [])) {
                // line 83
                echo "                    <a class=\"dropdown-item\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_tropa_grupo_solicitud", ["gpo" => $this->getAttribute($context["g"], "id", [])]), "html", null, true);
                echo "\">Agregar Tropa</a>                  
                    <a class=\"dropdown-item\"  href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_generate_multiples", ["gpo" => $this->getAttribute($context["g"], "id", [])]), "html", null, true);
                echo "\">Generar solicitudes multiples</a>
                  ";
            }
            // line 86
            echo "                  <a class=\"dropdown-item\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_add_solictud_a_grupo", ["gpo" => $this->getAttribute($context["g"], "id", [])]), "html", null, true);
            echo "\">Gestionar solicitudes</a>
                  ";
            // line 87
            if ( !$this->getAttribute($context["g"], "exportacion", [])) {
                // line 88
                echo "                    <a class=\"dropdown-item\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_modificacion_multiple", ["gpo" => $this->getAttribute($context["g"], "id", [])]), "html", null, true);
                echo "\">Modificar Multiples Solicitudes</a>
                  ";
            }
            // line 90
            echo "                  ";
            if ($this->getAttribute($context["g"], "exportacion", [])) {
                // line 91
                echo "                    <a class=\"dropdown-item\"  target=\"_blanck\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_generar_archivos", ["gpo" => $this->getAttribute($context["g"], "id", [])]), "html", null, true);
                echo "\">Generar archivos</a>
                  ";
            }
            // line 93
            echo "                  <a class=\"dropdown-item delete\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sigcer_delete_grupos_solicitudes", ["gpo" => $this->getAttribute($context["g"], "id", [])]), "html", null, true);
            echo "\">Eliminar</a>
                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "
    ";
        // line 104
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

              \$('.delete').click(function(event){
                                                event.preventDefault();
                                                var a = \$(this);
                                                bootbox.confirm({
                                                                message: 'Se eliminaran todas las solicitudes generadas al momento. Seguro eliminar?',
                                                                size: \"large\",
                                                                buttons: {
                                                                    confirm: {
                                                                        label: 'Si, eliminar',
                                                                        className: 'btn-success'
                                                                    },
                                                                    cancel: {
                                                                        label: 'No, cancelar',
                                                                        className: 'btn-danger'
                                                                    }
                                                                },
                                                                callback: function (result) {
                                                                    if (result)
                                                                    {
                                                                        \$.post(a.attr('href'),
                                                                               function(data){
                                                                                              if (data.ok)
                                                                                                  location.reload();
                                                                                              else
                                                                                                  alert(data.message);
                                                                               });
                                                                    }
                                                                }
                                                            });

                                                
                                                
              });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@GestionSigcer/altaGrupoSolicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 104,  304 => 103,  298 => 102,  288 => 98,  268 => 93,  262 => 91,  259 => 90,  253 => 88,  251 => 87,  246 => 86,  241 => 84,  236 => 83,  234 => 82,  227 => 78,  223 => 77,  219 => 76,  215 => 75,  212 => 74,  208 => 72,  204 => 70,  202 => 69,  197 => 67,  193 => 66,  190 => 65,  173 => 64,  152 => 46,  146 => 43,  138 => 38,  134 => 37,  128 => 34,  124 => 33,  118 => 30,  114 => 29,  108 => 26,  104 => 25,  98 => 22,  94 => 21,  88 => 18,  84 => 17,  78 => 14,  74 => 12,  65 => 9,  62 => 8,  58 => 7,  52 => 3,  46 => 2,  30 => 1,);
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
<span class=\"h5 card-title\">Nuevo grupo de solicitudes</span>
<hr>
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}

<div class=\"\">
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-row\">
      <div class=\"col-2\">
        {{ form_label(form.fecha) }}
        {{ form_widget(form.fecha) }}
      </div>
      <div class=\"col-1\">
        {{ form_label(form.version) }}
        {{ form_widget(form.version) }}
      </div>
      <div class=\"col-2\">
        {{ form_label(form.exportacion, 'Destino') }}
        {{ form_widget(form.exportacion) }}
      </div>
      <div class=\"col-2\">
        {{ form_label(form.paisDestino) }}
        {{ form_widget(form.paisDestino) }}
      </div>
      <div class=\"col-3\">
        {{ form_label(form.codigoEstablecimiento) }}
        {{ form_widget(form.codigoEstablecimiento) }}
      </div>
      <div class=\"col-2\">
        {{ form_label(form.roleEstablecimiento, 'Rol establecimineto') }}
        {{ form_widget(form.roleEstablecimiento) }}
      </div>
    </div>
    <div class=\"form-row\">
      <div class=\"col\">
        {{ form_widget(form.guardar) }}
      </div>
    </div>
\t{{ form_end(form) }}
    <br>
    <span class=\"h5\">Grupos de solicitudes generadas</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Destino</th>
            <th>Pais Destino</th>
            <th>Establecimiento</th>
            <th>Role Establecimiento</th>
            <th>Cant. Solic.</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {% for g in grupos %}
            <tr>
                <td>{{ loop.index }}</td>
                <td>{{ g.fecha|date('d/m/Y')}}</td>
                <td>
                    {% if g.exportacion %}
                      Exportacion
                    {% else %}
                      Cons. Interno
                    {% endif %}
                </td>
                <td>{{ g.paisDestino }}</td>
                <td>{{ g.codigoEstablecimiento }}</td>
                <td>{{ g.roleEstablecimiento }}</td>
                <td>{{ g.solicitudes|length }}</td>
                <td>
              <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify\"></i></a>
                <div class=\"dropdown-menu\">
                  {%  if not g.exportacion %}
                    <a class=\"dropdown-item\"  href=\"{{ path('sigcer_add_tropa_grupo_solicitud', { gpo : g.id}) }}\">Agregar Tropa</a>                  
                    <a class=\"dropdown-item\"  href=\"{{ path('sigcer_generate_multiples', { gpo : g.id}) }}\">Generar solicitudes multiples</a>
                  {% endif %}
                  <a class=\"dropdown-item\"  href=\"{{ path('sigcer_add_solictud_a_grupo', { gpo : g.id}) }}\">Gestionar solicitudes</a>
                  {%  if not g.exportacion %}
                    <a class=\"dropdown-item\"  href=\"{{ path('sigcer_modificacion_multiple', { gpo : g.id}) }}\">Modificar Multiples Solicitudes</a>
                  {% endif %}
                  {% if g.exportacion %}
                    <a class=\"dropdown-item\"  target=\"_blanck\" href=\"{{ path('sigcer_generar_archivos', { gpo : g.id}) }}\">Generar archivos</a>
                  {% endif %}
                  <a class=\"dropdown-item delete\"  href=\"{{ path('sigcer_delete_grupos_solicitudes', { gpo : g.id}) }}\">Eliminar</a>
                </div>
                </td>
            </tr>
          {% endfor %}
        </tbody>
    </table>
</div>
{% endblock fos_user_content %}
{% block javascripts %}

    {{ parent() }}
    <script type=\"text/javascript\">

              \$('.delete').click(function(event){
                                                event.preventDefault();
                                                var a = \$(this);
                                                bootbox.confirm({
                                                                message: 'Se eliminaran todas las solicitudes generadas al momento. Seguro eliminar?',
                                                                size: \"large\",
                                                                buttons: {
                                                                    confirm: {
                                                                        label: 'Si, eliminar',
                                                                        className: 'btn-success'
                                                                    },
                                                                    cancel: {
                                                                        label: 'No, cancelar',
                                                                        className: 'btn-danger'
                                                                    }
                                                                },
                                                                callback: function (result) {
                                                                    if (result)
                                                                    {
                                                                        \$.post(a.attr('href'),
                                                                               function(data){
                                                                                              if (data.ok)
                                                                                                  location.reload();
                                                                                              else
                                                                                                  alert(data.message);
                                                                               });
                                                                    }
                                                                }
                                                            });

                                                
                                                
              });
    </script>

{% endblock  %}", "@GestionSigcer/altaGrupoSolicitud.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionSigcerBundle\\Resources\\views\\altaGrupoSolicitud.html.twig");
    }
}
