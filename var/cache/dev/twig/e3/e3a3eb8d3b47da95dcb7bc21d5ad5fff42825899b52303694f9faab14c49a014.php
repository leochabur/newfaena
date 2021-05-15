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

/* @GestionVentas/ventas/agregarItemsApaisado.html.twig */
class __TwigTemplate_7cf4bbc1fe9901289fb81a31c970f9f49055b1912e9b7ee5b2ce8f0980bc9dc5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
            'out_container' => [$this, 'block_out_container'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionVentas/ventas/agregarItemsApaisado.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionVentas/ventas/agregarItemsApaisado.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionVentas/ventas/agregarItemsApaisado.html.twig", 1);
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
        echo "<style type=\"text/css\">
           
  .table-scroll {
    position:relative;
    max-width:100%;
    margin:auto;
    overflow:hidden;
  }
  .table-wrap {
    width:100%;
    overflow:auto;
  }
  .table-scroll table {
    width:100%;
    margin:auto;
    border-collapse:separate;
    border-spacing:0;
  }
  .table-scroll th, .table-scroll td {
    

    background:#fff;
    white-space:nowrap;
    vertical-align:top;
  }
  .table-scroll thead, .table-scroll tfoot {
    background:#f9f9f9;
  }
  .clone {
    position:absolute;
    top:0;
    left:0;
    pointer-events:none;
  }
  .clone th, .clone td {
    visibility:hidden
  }
  .clone td, .clone th {
    border-color:transparent
  }
  .clone tbody th {
    visibility:visible;
  }
  .clone .fixed-side {
    visibility:visible;
  }
  .clone thead, .clone tfoot{background:transparent;}

.miTablaPersonalizada th{
  width: 230px;
  overflow: auto;
  border: 1px solid;
}

</style>

<br>
<hr>


";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "updvta"]]);
        echo "
          <div class=\"form-row\">
            <div class=\"col-lg-4 col-sm-12\">
              ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaComprobante", []), 'label');
        echo "
              ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechaComprobante", []), 'widget', ["attr" => ["class" => "date"]]);
        echo "
            </div>
            <div class=\"col-lg-5 col-sm-12\">
              ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cliente", []), 'label');
        echo "
              ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cliente", []), 'widget');
        echo "
            </div>
            <div class=\"col-lg-3 col-sm-12\">
              ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "horarioCarga", []), 'label');
        echo "
              ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "horarioCarga", []), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-row mt-4\">
            <div class=\"col-lg-12 col-sm-12\">
              ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comentario", []), 'label');
        echo "
              ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comentario", []), 'widget');
        echo "
            </div>
          </div>
          ";
        // line 84
        $this->loadTemplate("@GestionFaena/messages.html.twig", "@GestionVentas/ventas/agregarItemsApaisado.html.twig", 84)->display($context);
        // line 85
        echo "          <div class=\"form-row mt-4\">
            <div class=\"col-lg-12 col-sm-12\">
              ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "siguiente", []), 'widget');
        echo "
            </div>
          </div>
";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        // line 93
        if ($this->getAttribute(($context["comprobante"] ?? $this->getContext($context, "comprobante")), "confirmado", [])) {
            // line 94
            echo "    <div class=\"row mt-4\">
        <div class=\"col-lg-4 fs-5 text-danger\">
          El formulario ya ha sido impreso
        </div>
    </div>
";
        }
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "sussecc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 101
            echo "\t<div class=\"alert alert-success\" role=\"alert\">
\t  ";
            // line 102
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_out_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "out_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "out_container"));

        // line 107
        echo "  <hr>
<span class=\"h5 card-title\">Agregar Articulos</span>
<hr>
<div id=\"table-scroll\" class=\"table-scroll\">
  <div class=\"table-wrap\">
  <table class=\"table table-sm main-table\">
    <thead>
      <tr>
          <th rowspan=\"2\" class=\"fixed-side grey lighten-2 border border-primary\">Destinatario</th>
          ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 117
            echo "
              <th colspan=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["tipos"] ?? $this->getContext($context, "tipos"))), "html", null, true);
            echo "\" scope=\"col\" class=\"px-md-5 grey lighten-2 border border-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["art"], "nombreVenta", []), "html", null, true);
            echo "</th>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "      </tr>
      <tr>
            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 124
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? $this->getContext($context, "tipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 125
                echo "                  <th scope=\"col px-md-5\" class=\" text-center grey lighten-2 border border-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "codigo", []), "html", null, true);
                echo "</th>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "      </tr>
      </thead>
      <tbody>
        ";
        // line 131
        $context["i"] = 1;
        // line 132
        echo "        <tr>
            <td class=\"fixed-side border border-primary\">";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comprobante"] ?? $this->getContext($context, "comprobante")), "entidad", []), "html", null, true);
        echo "</td>
            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ventas"] ?? $this->getContext($context, "ventas")));
        foreach ($context['_seq'] as $context["kvta"] => $context["vvta"]) {
            // line 135
            echo "
                  ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tipos"] ?? $this->getContext($context, "tipos")));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 137
                echo "                      ";
                $context["class"] = ("update form-control-sm " . ($context["i"] ?? $this->getContext($context, "i")));
                // line 138
                echo "                      <td class=\"border border-primary\">

                        ";
                // line 140
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute($context["vvta"], $this->getAttribute($context["t"], "id", []), [], "array"), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "fupdate"]]);
                echo "
                        ";
                // line 141
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["vvta"], $this->getAttribute($context["t"], "id", []), [], "array"), "cantidad", []), 'widget', ["attr" => ["size" => "100px", "data-index" => ($context["i"] ?? $this->getContext($context, "i")), "class" => ($context["class"] ?? $this->getContext($context, "class"))]]);
                echo "
                        ";
                // line 142
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute($context["vvta"], $this->getAttribute($context["t"], "id", []), [], "array"), 'form_end');
                echo "
                      </td>
                      ";
                // line 144
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 145
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "              
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kvta'], $context['vvta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "          </tr>
      </tbody>
  </table>  
</div>
</div>
  <hr>
  <div class=\"form-row\">
      <div class=\"col-lg-3 col-sm-12\">
          ";
        // line 155
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["back"] ?? $this->getContext($context, "back")), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "back"]]);
        echo "
          ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["back"] ?? $this->getContext($context, "back")), "back", []), 'widget');
        echo "
          ";
        // line 157
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["back"] ?? $this->getContext($context, "back")), 'form_end');
        echo "
      </div>
      <div class=\"col-lg-2 col-sm-12\">
          <!--a class='btn btn-success finalice' href='";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_finalizar_comprobante_venta", ["id" => $this->getAttribute(($context["comprobante"] ?? $this->getContext($context, "comprobante")), "id", [])]), "html", null, true);
        echo "'>Finalizar</a-->
      </div>
  </div>
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">

\$(document).ready(function () {
          \$(\".main-table\").clone(true).appendTo('#table-scroll').addClass('clone');  



          \$('.finalice').click(function(event){
                                                event.preventDefault();
                                                var a = \$(this);
                                                bootbox.confirm({                                        
                                                        message: 'Seguro finalizar el comprobante de venta?',
                                                        size: \"large\",
                                                        buttons: {
                                                                  confirm: {
                                                                      label: 'Si',
                                                                      className: 'btn-success'
                                                                  },
                                                                  cancel: {
                                                                      label: 'No',
                                                                      className: 'btn-danger'
                                                                  }
                                                              },
                                                              callback: function (result) {
                                                                  if (result)
                                                                  {
                                                                      \$.post(a.attr('href'),
                                                                             function (data)
                                                                             {
                                                                                if (!data.error)
                                                                                {
                                                                                   \$('.back').trigger('submit');
                                                                                }
                                                                                else
                                                                                {
                                                                                  alert(data.message);
                                                                                }
                                                                             });
                                                                  }
                                                              }
                                        });
          });

          \$('.dataTables_length').addClass('bs-select');

          \$('.update').focusout(function(event){
                                            event.preventDefault();
                                            var input = \$(this);
                                            var form = input.closest('form');
                                            if (input.val())
                                            {
                                              \$.post(form.attr('action'),
                                                     form.serialize(),
                                                     function(data)
                                                     {
                                                         if (!data.error)
                                                         {
                                                          input.addClass('green 50');
                                                         }
                                                         else{
                                                              input.addClass('red 50');
                                                              alert(data.message);
                                                         }
                                                     });            
                                            }
             
          });

          \$('.fupdate').submit(function(event){
                                            event.preventDefault();
                                            var form = \$(this);
                                            var input = form.find( \":text\" );
                                            if (input.val())
                                            {
                                              \$.post(form.attr('action'),
                                                     form.serialize(),
                                                     function(data)
                                                     {
                                                       if (!data.error)
                                                         {
                                                          input.addClass('green 50');
                                                          var i = input.data('index')+1;

                                                          \$('.'+i).focus();
                                                         }
                                                         else{
                                                          input.addClass('red 50');
                                                          alert(data.message);
                                                         }
                                                     });            
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
        return "@GestionVentas/ventas/agregarItemsApaisado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 166,  388 => 165,  373 => 160,  367 => 157,  363 => 156,  359 => 155,  349 => 147,  337 => 145,  335 => 144,  330 => 142,  326 => 141,  322 => 140,  318 => 138,  315 => 137,  311 => 136,  308 => 135,  304 => 134,  300 => 133,  297 => 132,  295 => 131,  290 => 128,  284 => 127,  275 => 125,  270 => 124,  266 => 123,  262 => 121,  251 => 118,  248 => 117,  244 => 116,  233 => 107,  224 => 106,  207 => 102,  204 => 101,  200 => 100,  192 => 94,  190 => 93,  184 => 90,  178 => 87,  174 => 85,  172 => 84,  166 => 81,  162 => 80,  154 => 75,  150 => 74,  144 => 71,  140 => 70,  134 => 67,  130 => 66,  124 => 63,  62 => 3,  53 => 2,  31 => 1,);
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
<style type=\"text/css\">
           
  .table-scroll {
    position:relative;
    max-width:100%;
    margin:auto;
    overflow:hidden;
  }
  .table-wrap {
    width:100%;
    overflow:auto;
  }
  .table-scroll table {
    width:100%;
    margin:auto;
    border-collapse:separate;
    border-spacing:0;
  }
  .table-scroll th, .table-scroll td {
    

    background:#fff;
    white-space:nowrap;
    vertical-align:top;
  }
  .table-scroll thead, .table-scroll tfoot {
    background:#f9f9f9;
  }
  .clone {
    position:absolute;
    top:0;
    left:0;
    pointer-events:none;
  }
  .clone th, .clone td {
    visibility:hidden
  }
  .clone td, .clone th {
    border-color:transparent
  }
  .clone tbody th {
    visibility:visible;
  }
  .clone .fixed-side {
    visibility:visible;
  }
  .clone thead, .clone tfoot{background:transparent;}

.miTablaPersonalizada th{
  width: 230px;
  overflow: auto;
  border: 1px solid;
}

</style>

<br>
<hr>


{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class' : 'updvta'}}) }}
          <div class=\"form-row\">
            <div class=\"col-lg-4 col-sm-12\">
              {{ form_label(form.fechaComprobante) }}
              {{ form_widget(form.fechaComprobante, {'attr' : {'class' : 'date' }}) }}
            </div>
            <div class=\"col-lg-5 col-sm-12\">
              {{ form_label(form.cliente) }}
              {{ form_widget(form.cliente) }}
            </div>
            <div class=\"col-lg-3 col-sm-12\">
              {{ form_label(form.horarioCarga) }}
              {{ form_widget(form.horarioCarga) }}
            </div>
          </div>
          <div class=\"form-row mt-4\">
            <div class=\"col-lg-12 col-sm-12\">
              {{ form_label(form.comentario) }}
              {{ form_widget(form.comentario) }}
            </div>
          </div>
          {% include '@GestionFaena/messages.html.twig'  %}
          <div class=\"form-row mt-4\">
            <div class=\"col-lg-12 col-sm-12\">
              {{ form_widget(form.siguiente) }}
            </div>
          </div>
{{ form_end(form) }}


{% if comprobante.confirmado %}
    <div class=\"row mt-4\">
        <div class=\"col-lg-4 fs-5 text-danger\">
          El formulario ya ha sido impreso
        </div>
    </div>
{% endif %}
{% for message in app.flashes('sussecc') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
{% endblock %}
{% block out_container %}
  <hr>
<span class=\"h5 card-title\">Agregar Articulos</span>
<hr>
<div id=\"table-scroll\" class=\"table-scroll\">
  <div class=\"table-wrap\">
  <table class=\"table table-sm main-table\">
    <thead>
      <tr>
          <th rowspan=\"2\" class=\"fixed-side grey lighten-2 border border-primary\">Destinatario</th>
          {% for art in articulos %}

              <th colspan=\"{{ tipos|length }}\" scope=\"col\" class=\"px-md-5 grey lighten-2 border border-primary\">{{  art.nombreVenta }}</th>

          {% endfor %}
      </tr>
      <tr>
            {% for art in articulos %}
              {% for t in tipos %}
                  <th scope=\"col px-md-5\" class=\" text-center grey lighten-2 border border-primary\">{{ t.codigo }}</th>
              {% endfor %}
            {% endfor %}
      </tr>
      </thead>
      <tbody>
        {% set i = 1 %}
        <tr>
            <td class=\"fixed-side border border-primary\">{{ comprobante.entidad }}</td>
            {% for kvta, vvta in ventas %}

                  {% for t in tipos %}
                      {% set class =  \"update form-control-sm \" ~ i %}
                      <td class=\"border border-primary\">

                        {{ form_start(vvta[t.id], {'attr': {'novalidate': 'novalidate', 'class': 'fupdate'}}) }}
                        {{ form_widget(vvta[t.id].cantidad, {'attr' : {'size' : '100px', 'data-index' : i, 'class' : class }}) }}
                        {{ form_end(vvta[t.id]) }}
                      </td>
                      {% set i = i + 1 %}
                  {% endfor %}              
            {% endfor %}
          </tr>
      </tbody>
  </table>  
</div>
</div>
  <hr>
  <div class=\"form-row\">
      <div class=\"col-lg-3 col-sm-12\">
          {{ form_start(back, {'attr': {'novalidate': 'novalidate', 'class' : 'back'}}) }}
          {{ form_widget(back.back) }}
          {{ form_end(back) }}
      </div>
      <div class=\"col-lg-2 col-sm-12\">
          <!--a class='btn btn-success finalice' href='{{ path('vtas_finalizar_comprobante_venta', { id : comprobante.id }) }}'>Finalizar</a-->
      </div>
  </div>
  
{% endblock %}
{% block javascripts %}
 {{ parent() }}
<script type=\"text/javascript\">

\$(document).ready(function () {
          \$(\".main-table\").clone(true).appendTo('#table-scroll').addClass('clone');  



          \$('.finalice').click(function(event){
                                                event.preventDefault();
                                                var a = \$(this);
                                                bootbox.confirm({                                        
                                                        message: 'Seguro finalizar el comprobante de venta?',
                                                        size: \"large\",
                                                        buttons: {
                                                                  confirm: {
                                                                      label: 'Si',
                                                                      className: 'btn-success'
                                                                  },
                                                                  cancel: {
                                                                      label: 'No',
                                                                      className: 'btn-danger'
                                                                  }
                                                              },
                                                              callback: function (result) {
                                                                  if (result)
                                                                  {
                                                                      \$.post(a.attr('href'),
                                                                             function (data)
                                                                             {
                                                                                if (!data.error)
                                                                                {
                                                                                   \$('.back').trigger('submit');
                                                                                }
                                                                                else
                                                                                {
                                                                                  alert(data.message);
                                                                                }
                                                                             });
                                                                  }
                                                              }
                                        });
          });

          \$('.dataTables_length').addClass('bs-select');

          \$('.update').focusout(function(event){
                                            event.preventDefault();
                                            var input = \$(this);
                                            var form = input.closest('form');
                                            if (input.val())
                                            {
                                              \$.post(form.attr('action'),
                                                     form.serialize(),
                                                     function(data)
                                                     {
                                                         if (!data.error)
                                                         {
                                                          input.addClass('green 50');
                                                         }
                                                         else{
                                                              input.addClass('red 50');
                                                              alert(data.message);
                                                         }
                                                     });            
                                            }
             
          });

          \$('.fupdate').submit(function(event){
                                            event.preventDefault();
                                            var form = \$(this);
                                            var input = form.find( \":text\" );
                                            if (input.val())
                                            {
                                              \$.post(form.attr('action'),
                                                     form.serialize(),
                                                     function(data)
                                                     {
                                                       if (!data.error)
                                                         {
                                                          input.addClass('green 50');
                                                          var i = input.data('index')+1;

                                                          \$('.'+i).focus();
                                                         }
                                                         else{
                                                          input.addClass('red 50');
                                                          alert(data.message);
                                                         }
                                                     });            
                                            }
             
          });

});
</script>

{% endblock  %}", "@GestionVentas/ventas/agregarItemsApaisado.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionVentasBundle\\Resources\\views\\ventas\\agregarItemsApaisado.html.twig");
    }
}
