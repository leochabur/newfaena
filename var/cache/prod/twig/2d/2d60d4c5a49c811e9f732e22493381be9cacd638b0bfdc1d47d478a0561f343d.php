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

/* GestionFaenaBundle:gestionBD:articuloProcFanEdit.html.twig */
class __TwigTemplate_2499ffd486a34b8335709eb85ad54ac4df35a26422b1ba9bea354086d7be73c9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:gestionBD:articuloProcFanEdit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 5
        echo "
\t\t<br>
<p class=\"h4 mb-5\">Editar Atributo Articulo</p>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "get", [0 => "errorForm"], "method"));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
\t";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    <div id=\"atributo\">

    </div>
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        // line 21
        echo "
<script type=\"text/javascript\">
    \$('.proceso').change(function(){
                                    var proceso = \$(this);
                                    \$('.articulo').empty();
                                    \$('.atributo').empty();
                                    \$.ajax({
                                        url: \"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_get_articles_for_proccess");
        echo "\",
                                        type: \"GET\",
                                        dataType: \"JSON\",
                                        data: {
                                            prid: proceso.val()
                                        },
                                        success: function (data) {                                                        
                                                            \$.each(data, function (key, value) {
                                                                    \$('.articulo').append('<option value=\"' + value.key + '\">' + value.value + '</option>');
                                                            });
                                        },
                                        error: function (err) {
                                                                \$('.articulo').empty();
                                                                \$('.atributo').empty();
                                        }
                                    });
    });
    \$('.articulo').change(function(){
                                    var articulo = \$(this);
                                    \$('.atributo').empty();
                                    \$.ajax({
                                        url: \"";
        // line 49
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
        // line 69
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
    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:gestionBD:articuloProcFanEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 69,  118 => 49,  94 => 28,  85 => 21,  82 => 20,  73 => 15,  69 => 14,  64 => 13,  55 => 10,  52 => 9,  48 => 8,  43 => 5,  40 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "GestionFaenaBundle:gestionBD:articuloProcFanEdit.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/gestionBD/articuloProcFanEdit.html.twig");
    }
}
