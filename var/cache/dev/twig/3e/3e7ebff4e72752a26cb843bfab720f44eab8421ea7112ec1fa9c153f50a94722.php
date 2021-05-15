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

/* GestionFaenaBundle:gestionBD:editAtrConProc.html.twig */
class __TwigTemplate_c9c6d1c582ec6f8811af5cbe2abd517de49dbf650f3e9ff042f1119c906da014 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:gestionBD:editAtrConProc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:gestionBD:editAtrConProc.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:gestionBD:editAtrConProc.html.twig", 1);
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
<span class=\"h5 card-title\">Asignar atributos por concepto</span>
<hr>
<small id=\"defaultRegisterFormPasswordHelpBlock\" class=\"form-text text-muted mb-4\">
        Desde aqui se configuran cuales son los atributos -de cada articulo- que se manejaran para cada concepto
    </small>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "errorForm"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 13
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <div id=\"atributos\">

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "
<script type=\"text/javascript\">
    \$('.proceso').change(function(){
                                    var proceso = \$(this);
                                    var url = \"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_get_conceptos_proceso", ["proc" => "_PROC"]);
        echo "\";
                                    url = url.replace('_PROC', proceso.val());
                                    \$('.concepto').empty();
                                    \$.ajax({
                                        url: url,
                                        type: \"POST\",
                                        dataType: \"JSON\",
                                        success: function (data) {     

                                                            \$.each(data, function (key, value) {
                                                                
                                                                    \$('.concepto').append('<option value=\"' + key+ '\">'+value+'</option>');
                                                            });
                                        },
                                        error: function (err) {
                                                                alert(err);
                                        }
                                    });
    });
    \$('.concepto').change(function(){
                                    var concepto = \$(this);
                                    var url = \"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_get_atributos_concepto", ["con" => "_PROC"]);
        echo "\";
                                    url = url.replace('_PROC', concepto.val());
                                    \$.ajax({
                                        url: url,
                                        type: \"POST\",
                                        dataType: \"JSON\",
                                        success: function (data) {
                                                            \$('.atrCon').empty();                                                        
                                                            \$.each(data, function (key, value) {
                                                                    \$('.atrCon').append('<option value=\"' + key + '\">' + value + '</option>');
                                                            });
                                        },
                                        error: function (err) {
                                                                alert(err);
                                        }
                                    });
    });
    \$('.atrCon').change(function(){
                                    var atributo = \$(this);
                                    var url = \"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_get_atributos_atributo_concepto", ["ac" => "_PROC"]);
        echo "\";
                                    url = url.replace('_PROC', atributo.val());
                                    \$(\"#atributo\").html('');
                                    \$.ajax({
                                        url: url,
                                        type: \"POST\",
                                        success: function (data) {                                                  
                                                            \$(\"#atributos\").html(data);
                                        },
                                        error: function (err) {
                                                            \$(\"#atributos\").html('');
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
        return "GestionFaenaBundle:gestionBD:editAtrConProc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 69,  149 => 50,  125 => 29,  119 => 25,  110 => 24,  95 => 19,  91 => 18,  86 => 17,  77 => 14,  74 => 13,  70 => 12,  61 => 5,  52 => 4,  30 => 1,);
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
<span class=\"h5 card-title\">Asignar atributos por concepto</span>
<hr>
<small id=\"defaultRegisterFormPasswordHelpBlock\" class=\"form-text text-muted mb-4\">
        Desde aqui se configuran cuales son los atributos -de cada articulo- que se manejaran para cada concepto
    </small>
    {% for flash_message in app.session.flashbag.get('errorForm') %}
            <div class=\"alert alert-danger\" role=\"alert\">
                {{ flash_message }}
            </div>
    {% endfor %}
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
\t{{ form_widget(form) }}
\t{{ form_end(form) }}
    <div id=\"atributos\">

    </div>
{% endblock fos_user_content %}
{% block javascripts %}

<script type=\"text/javascript\">
    \$('.proceso').change(function(){
                                    var proceso = \$(this);
                                    var url = \"{{ path('bd_get_conceptos_proceso', { proc : '_PROC'}) }}\";
                                    url = url.replace('_PROC', proceso.val());
                                    \$('.concepto').empty();
                                    \$.ajax({
                                        url: url,
                                        type: \"POST\",
                                        dataType: \"JSON\",
                                        success: function (data) {     

                                                            \$.each(data, function (key, value) {
                                                                
                                                                    \$('.concepto').append('<option value=\"' + key+ '\">'+value+'</option>');
                                                            });
                                        },
                                        error: function (err) {
                                                                alert(err);
                                        }
                                    });
    });
    \$('.concepto').change(function(){
                                    var concepto = \$(this);
                                    var url = \"{{ path('bd_get_atributos_concepto', { con : '_PROC'}) }}\";
                                    url = url.replace('_PROC', concepto.val());
                                    \$.ajax({
                                        url: url,
                                        type: \"POST\",
                                        dataType: \"JSON\",
                                        success: function (data) {
                                                            \$('.atrCon').empty();                                                        
                                                            \$.each(data, function (key, value) {
                                                                    \$('.atrCon').append('<option value=\"' + key + '\">' + value + '</option>');
                                                            });
                                        },
                                        error: function (err) {
                                                                alert(err);
                                        }
                                    });
    });
    \$('.atrCon').change(function(){
                                    var atributo = \$(this);
                                    var url = \"{{ path('bd_get_atributos_atributo_concepto', { ac : '_PROC'}) }}\";
                                    url = url.replace('_PROC', atributo.val());
                                    \$(\"#atributo\").html('');
                                    \$.ajax({
                                        url: url,
                                        type: \"POST\",
                                        success: function (data) {                                                  
                                                            \$(\"#atributos\").html(data);
                                        },
                                        error: function (err) {
                                                            \$(\"#atributos\").html('');
                                        }
                                    });
    });
</script>
{% endblock %}


", "GestionFaenaBundle:gestionBD:editAtrConProc.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/gestionBD/editAtrConProc.html.twig");
    }
}
