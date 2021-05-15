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

/* GestionFaenaBundle:gestionBD:editarAtributoProceso.html.twig */
class __TwigTemplate_47659b8b832f29bc51dcde78334794da977323768e1b89cf921ffc93d8ff4960 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:gestionBD:editarAtributoProceso.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 5
        echo "
\t\t<br>
<p class=\"h4 mb-5\">Editar Atributos de Concepto de movimiento</p>
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["concepto"] ?? null), "atributos", []));
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
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
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
    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:gestionBD:editarAtributoProceso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 79,  177 => 59,  161 => 45,  158 => 44,  151 => 40,  135 => 37,  126 => 35,  122 => 34,  117 => 32,  113 => 31,  110 => 30,  93 => 29,  80 => 18,  78 => 17,  73 => 15,  69 => 14,  64 => 13,  55 => 10,  52 => 9,  48 => 8,  43 => 5,  40 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "GestionFaenaBundle:gestionBD:editarAtributoProceso.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/gestionBD/editarAtributoProceso.html.twig");
    }
}
