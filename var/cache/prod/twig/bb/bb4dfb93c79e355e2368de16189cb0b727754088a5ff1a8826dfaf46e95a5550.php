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

/* @GestionFaena/gestionBD/editAtrConProc.html.twig */
class __TwigTemplate_32db2325baf7b07e0c35ad413f6190751092ba3dcea31b3b75365fc1e2f29b47 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/gestionBD/editAtrConProc.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = [])
    {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "get", [0 => "errorForm"], "method"));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    <div id=\"atributos\">

    </div>
";
    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
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
    }

    public function getTemplateName()
    {
        return "@GestionFaena/gestionBD/editAtrConProc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 69,  119 => 50,  95 => 29,  89 => 25,  86 => 24,  77 => 19,  73 => 18,  68 => 17,  59 => 14,  56 => 13,  52 => 12,  43 => 5,  40 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@GestionFaena/gestionBD/editAtrConProc.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\editAtrConProc.html.twig");
    }
}
