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

/* @GestionFaena/gestionBD/editarArticuloProceso.html.twig */
class __TwigTemplate_ce703d8d4e88b4485bfc20ab591231ea2caa1275ac2b5fdc838ccfe3e3017740 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/gestionBD/editarArticuloProceso.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 5
        echo "<br>
<hr>
<span class=\"h5 card-title\">Modificar articulos de proceso</span>
<hr>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "get", [0 => "errorForm"], "method"));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
\t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["proceso"] ?? null), "articulos", []));
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
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["formsAdd"] ?? null), $this->getAttribute($context["p"], "id", []), [], "array"), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
                echo "
                            ";
                // line 42
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formsAdd"] ?? null), $this->getAttribute($context["p"], "id", []), [], "array"), "atributo", []), 'widget', ["attr" => ["class" => "form-control form-control-sm"]]);
                echo "
                            ";
                // line 43
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formsAdd"] ?? null), $this->getAttribute($context["p"], "id", []), [], "array"), "add", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success"]]);
                echo "
                            ";
                // line 44
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["formsAdd"] ?? null), $this->getAttribute($context["p"], "id", []), [], "array"), 'form_end');
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
    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
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
    }

    public function getTemplateName()
    {
        return "@GestionFaena/gestionBD/editarArticuloProceso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 93,  214 => 73,  198 => 59,  195 => 58,  188 => 54,  170 => 50,  164 => 49,  159 => 47,  153 => 44,  149 => 43,  145 => 42,  141 => 41,  136 => 38,  127 => 36,  123 => 35,  118 => 33,  114 => 32,  111 => 31,  94 => 30,  81 => 19,  79 => 18,  74 => 16,  70 => 15,  65 => 14,  56 => 11,  53 => 10,  49 => 9,  43 => 5,  40 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@GestionFaena/gestionBD/editarArticuloProceso.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\editarArticuloProceso.html.twig");
    }
}
