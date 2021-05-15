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

/* GestionFaenaBundle:gestionBD:editarArticuloProceso.html.twig */
class __TwigTemplate_493efd5dfa9c56cb422dd70e53d53bbb5c72a8272084a7da052c1abf8dff86bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:gestionBD:editarArticuloProceso.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:gestionBD:editarArticuloProceso.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:gestionBD:editarArticuloProceso.html.twig", 1);
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
        echo "<br>
<hr>
<span class=\"h5 card-title\">Modificar articulos de proceso</span>
<hr>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "errorForm"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 10
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 11
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    ";
        // line 18
        if ((isset($context["proceso"]) || array_key_exists("proceso", $context))) {
            // line 19
            echo "        <table class=\"table table-striped table-bordered table-hover table-sm \">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Articulo</th>
                    <th>Atributos</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "articulos", []));
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
                // line 31
                echo "                    <tr>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["p"], "atributos", []));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 36
                    echo "                                ";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "/
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                        </td>

                        <td>
                            ";
                // line 41
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["formsAdd"] ?? $this->getContext($context, "formsAdd")), $this->getAttribute($context["p"], "id", []), [], "array"), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
                echo "
                            ";
                // line 42
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formsAdd"] ?? $this->getContext($context, "formsAdd")), $this->getAttribute($context["p"], "id", []), [], "array"), "atributo", []), 'widget', ["attr" => ["class" => "form-control form-control-sm"]]);
                echo "
                            ";
                // line 43
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formsAdd"] ?? $this->getContext($context, "formsAdd")), $this->getAttribute($context["p"], "id", []), [], "array"), "add", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success"]]);
                echo "
                            ";
                // line 44
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["formsAdd"] ?? $this->getContext($context, "formsAdd")), $this->getAttribute($context["p"], "id", []), [], "array"), 'form_end');
                echo "
                        </td>
                            
                        <td>";
                // line 47
                echo (($this->getAttribute($context["p"], "activo", [])) ? ("Activado") : ("Desactivado"));
                echo "</td>
                        <td>
                            <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_change_articulo_proceso", ["art" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning actdes\">";
                echo (($this->getAttribute($context["p"], "activo", [])) ? ("Desactivar") : ("Activar"));
                echo "</a>
 <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_delete_articulo_proceso", ["art" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger actdes\">Eliminar</a>
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
            // line 54
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "
<script type=\"text/javascript\">
    \$('.actdes').click(function(event){
                                    event.preventDefault();
                                    var a = \$(this);
                                    \$.post(a.attr('href'),
                                           function(data){

                                           });
    });
    \$('.articulo').change(function(){
                                    var articulo = \$(this);
                                    \$('.atributo').empty();
                                    \$.ajax({
                                        url: \"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_get_atributes_for_articles");
        echo "\",
                                        type: \"GET\",
                                        dataType: \"JSON\",
                                        data: {
                                            artid: articulo.val()
                                        },
                                        success: function (data) {                                                        
                                                            \$.each(data, function (key, value) {
                                                                    \$('.atributo').append('<option value=\"' + value.key + '\">' + value.value + '</option>');
                                                            });
                                        },
                                        error: function (err) {
                                                                \$('.atributo').empty();
                                        }
                                    });
    });
    \$('.atributo').change(function(){
                                    var atributo = \$(this);
                                    \$(\"#atributo\").html('');
                                    \$.ajax({
                                        url: \"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_get_atribute");
        echo "\",
                                        type: \"GET\",
                                        data: {
                                            atrid: atributo.val()
                                        },
                                        success: function (data) {                                                  
                                                            \$(\"#atributo\").html(data);
                                        },
                                        error: function (err) {
                                                            \$(\"#atributo\").html('');
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
        return "GestionFaenaBundle:gestionBD:editarArticuloProceso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 93,  244 => 73,  228 => 59,  219 => 58,  206 => 54,  188 => 50,  182 => 49,  177 => 47,  171 => 44,  167 => 43,  163 => 42,  159 => 41,  154 => 38,  145 => 36,  141 => 35,  136 => 33,  132 => 32,  129 => 31,  112 => 30,  99 => 19,  97 => 18,  92 => 16,  88 => 15,  83 => 14,  74 => 11,  71 => 10,  67 => 9,  61 => 5,  52 => 4,  30 => 1,);
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
<span class=\"h5 card-title\">Modificar articulos de proceso</span>
<hr>
    {% for flash_message in app.session.flashbag.get('errorForm') %}
            <div class=\"alert alert-danger\" role=\"alert\">
                {{ flash_message }}
            </div>
    {% endfor %}
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
\t{{ form_widget(form) }}
\t{{ form_end(form) }}

    {% if proceso is defined %}
        <table class=\"table table-striped table-bordered table-hover table-sm \">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Articulo</th>
                    <th>Atributos</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {% for p in proceso.articulos %}
                    <tr>
                        <td>{{ loop.index }}</td>
                        <td>{{ p }}</td>
                        <td>
                            {% for a in p.atributos %}
                                {{ a }}/
                            {% endfor %}
                        </td>

                        <td>
                            {{ form_start(formsAdd[p.id], {'attr': {'novalidate': 'novalidate'}}) }}
                            {{ form_widget(formsAdd[p.id].atributo, { 'attr' : { 'class' : 'form-control form-control-sm'}}) }}
                            {{ form_widget(formsAdd[p.id].add, { 'attr' : { 'class' : 'btn btn-sm btn-success'}}) }}
                            {{ form_end(formsAdd[p.id]) }}
                        </td>
                            
                        <td>{{ p.activo ? 'Activado' : 'Desactivado' }}</td>
                        <td>
                            <a href=\"{{ path('bd_change_articulo_proceso', { art: p.id }) }}\" class=\"btn btn-sm btn-warning actdes\">{{ p.activo ? 'Desactivar' : 'Activar' }}</a>
 <a href=\"{{ path('bd_delete_articulo_proceso', { art: p.id }) }}\" class=\"btn btn-sm btn-danger actdes\">Eliminar</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock fos_user_content %}
{% block javascripts %}

<script type=\"text/javascript\">
    \$('.actdes').click(function(event){
                                    event.preventDefault();
                                    var a = \$(this);
                                    \$.post(a.attr('href'),
                                           function(data){

                                           });
    });
    \$('.articulo').change(function(){
                                    var articulo = \$(this);
                                    \$('.atributo').empty();
                                    \$.ajax({
                                        url: \"{{ path('bd_get_atributes_for_articles') }}\",
                                        type: \"GET\",
                                        dataType: \"JSON\",
                                        data: {
                                            artid: articulo.val()
                                        },
                                        success: function (data) {                                                        
                                                            \$.each(data, function (key, value) {
                                                                    \$('.atributo').append('<option value=\"' + value.key + '\">' + value.value + '</option>');
                                                            });
                                        },
                                        error: function (err) {
                                                                \$('.atributo').empty();
                                        }
                                    });
    });
    \$('.atributo').change(function(){
                                    var atributo = \$(this);
                                    \$(\"#atributo\").html('');
                                    \$.ajax({
                                        url: \"{{ path('bd_get_atribute') }}\",
                                        type: \"GET\",
                                        data: {
                                            atrid: atributo.val()
                                        },
                                        success: function (data) {                                                  
                                                            \$(\"#atributo\").html(data);
                                        },
                                        error: function (err) {
                                                            \$(\"#atributo\").html('');
                                        }
                                    });
    });
</script>
{% endblock %}


", "GestionFaenaBundle:gestionBD:editarArticuloProceso.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/gestionBD/editarArticuloProceso.html.twig");
    }
}
