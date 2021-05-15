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

/* @GestionFaena/gestionBD/editarAtributoProceso.html.twig */
class __TwigTemplate_25c0af8304a2693fc718c7f6cd4f4d445fe8e8196d884a79ea430a04145dce9d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/editarAtributoProceso.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/editarAtributoProceso.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/gestionBD/editarAtributoProceso.html.twig", 1);
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
        echo "
\t\t<br>
<p class=\"h4 mb-5\">Editar Atributos de Concepto de movimiento</p>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "errorForm"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 9
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    ";
        // line 17
        if ((isset($context["concepto"]) || array_key_exists("concepto", $context))) {
            // line 18
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
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["concepto"] ?? $this->getContext($context, "concepto")), "atributos", []));
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
                // line 30
                echo "                    <tr>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "articulo", []), "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["p"], "atributos", []));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 35
                    echo "                                ";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "/
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                        </td>
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
            // line 40
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
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
        // line 59
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
        // line 79
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
        return "@GestionFaena/gestionBD/editarAtributoProceso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 79,  207 => 59,  191 => 45,  182 => 44,  169 => 40,  153 => 37,  144 => 35,  140 => 34,  135 => 32,  131 => 31,  128 => 30,  111 => 29,  98 => 18,  96 => 17,  91 => 15,  87 => 14,  82 => 13,  73 => 10,  70 => 9,  66 => 8,  61 => 5,  52 => 4,  30 => 1,);
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

\t\t<br>
<p class=\"h4 mb-5\">Editar Atributos de Concepto de movimiento</p>
    {% for flash_message in app.session.flashbag.get('errorForm') %}
            <div class=\"alert alert-danger\" role=\"alert\">
                {{ flash_message }}
            </div>
    {% endfor %}
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
\t{{ form_widget(form) }}
\t{{ form_end(form) }}

    {% if concepto is defined %}
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
                {% for p in concepto.atributos %}
                    <tr>
                        <td>{{ loop.index }}</td>
                        <td>{{ p.articulo }}</td>
                        <td>
                            {% for a in p.atributos %}
                                {{ a }}/
                            {% endfor %}
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


", "@GestionFaena/gestionBD/editarAtributoProceso.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\editarAtributoProceso.html.twig");
    }
}
