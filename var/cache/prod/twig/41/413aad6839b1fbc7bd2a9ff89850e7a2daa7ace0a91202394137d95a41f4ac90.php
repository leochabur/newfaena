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

/* GestionFaenaBundle:gestionBD:atributoABM.html.twig */
class __TwigTemplate_b44e64b53ad7895a023dad8dd28237d96ef4da484d1b953c7260c81eff052f59 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:gestionBD:atributoABM.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 4
        echo "
<style type=\"text/css\">
    fieldset 
\t{
\t\tborder: 1px solid #ddd !important;
\t\tmargin: 0;
\t\txmin-width: 0;
\t\tpadding: 10px;       
\t\tposition: relative;
\t\tborder-radius:4px;
\t\tbackground-color:#f5f5f5;
\t\tpadding-left:10px!important;
\t}\t
\t
\t\tlegend
\t\t{
\t\t\tfont-size:14px;
\t\t\tfont-weight:bold;
\t\t\tmargin-bottom: 0px; 
\t\t\twidth: 35%; 
\t\t\tborder: 1px solid #ddd;
\t\t\tborder-radius: 4px; 
\t\t\tpadding: 5px 5px 5px 10px; 
\t\t\tbackground-color: #ffffff;
\t\t}
</style>

";
    }

    // line 32
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 33
        echo "\t<br>
\t<hr>
<spam class=\"h5 mb-5\">Nueva definicion de atributos de articulos</spam>
<hr>
";
        // line 37
        if ((isset($context["articulo"]) || array_key_exists("articulo", $context))) {
            // line 38
            echo "\t<ul>
\t\t<li class=\"h6\">Proceso : ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["articulo"] ?? null), "concepto", []), "procesoFaena", []), "html", null, true);
            echo "</li>
\t\t<li class=\"h6\">Concepto : ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["articulo"] ?? null), "concepto", []), "concepto", []), "html", null, true);
            echo "</li>
\t\t<li class=\"h6\">Articulo : ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? null), "articulo", []), "html", null, true);
            echo "</li>
\t\t";
            // line 42
            if ((isset($context["transf"]) || array_key_exists("transf", $context))) {
                // line 43
                echo "\t\t\t<li class=\"h6\">Articulo origen de transformacion: ";
                if ( !(null === $this->getAttribute($this->getAttribute(($context["articulo"] ?? null), "concepto", []), "articuloOrigenTransformacion", []))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["articulo"] ?? null), "concepto", []), "articuloOrigenTransformacion", []), "html", null, true);
                    echo " ";
                } else {
                    echo "<small class=\"form-text text-muted\">Sin configurar</small> ";
                }
                echo "</li>
\t\t";
            }
            // line 45
            echo "\t</ul>
\t<hr>
";
        }
        // line 48
        if ((isset($context["transf"]) || array_key_exists("transf", $context))) {
            // line 49
            echo "\t
\t";
            // line 50
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transf"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "assign"]]);
            echo "
\t<span class=\"h6 container\">Asignar articulo origen</span>
\t<div class=\"form-row container align-items-center\">
\t\t<div class=\"col\">";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["transf"] ?? null), "articulo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
            echo "
\t\t<small id=\"defaultRegisterFormPasswordHelpBlock\" class=\"form-text text-muted\">
        \tLos articulos se configuran desde <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_edit_procesos", ["proccess" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["articulo"] ?? null), "concepto", []), "procesoFaena", []), "id", [])]), "html", null, true);
            echo "\">aqui</a>
    </small></div>
\t\t<div class=\"col\">";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["transf"] ?? null), "agregar", []), 'widget', ["attr" => ["class" => "btn-sm btn-success"]]);
            echo "
\t\t<small id=\"defaultRegisterFormPasswordHelpBlock\" class=\"form-text text-muted\">
         .
    </small>
\t</div>
\t</div>
\t<hr>
\t";
            // line 64
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transf"] ?? null), 'form_end');
            echo "
\t
";
        }
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "flashes", [0 => "errors"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            echo "\t<div class=\"alert alert-danger\" role=\"alert\">
\t  ";
            // line 69
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\"
      aria-selected=\"true\">Atributo Medible Manual</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\"
      aria-selected=\"false\">Atributo Medible Automatico</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" id=\"manual-tab\" data-toggle=\"tab\" href=\"#manual\" role=\"tab\" aria-controls=\"manual\"
      aria-selected=\"false\">Atributo Informable Externo</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\"
      aria-selected=\"false\">Atributo Informable Manual</a>
  </li>
</ul>
<div class=\"tab-content\" id=\"myTabContent\">
  <div class=\"tab-pane fade show active container\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
  \t<br>
\t";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t<div class='form-row'>
\t\t<div class=\"col-4\">
\t\t\t";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "atributo", []), "atributoAbstracto", []), 'label');
        echo "
\t\t\t";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "atributo", []), "atributoAbstracto", []), 'widget');
        echo "
\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "atributo", []), "atributoAbstracto", []), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"col-4\">
\t\t\t";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "atributo", []), "nombre", []), 'label', ["label" => "Mostrar como..."]);
        echo "
\t\t\t";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "atributo", []), "nombre", []), 'widget');
        echo "
\t\t\t";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "atributo", []), "nombre", []), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"col-4\">
\t\t\t";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "unidadMedida", []), 'label');
        echo "
\t\t\t";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "unidadMedida", []), 'widget');
        echo "
\t\t\t";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "unidadMedida", []), 'errors');
        echo "
\t\t</div>
\t</div>
\t<div class='form-row'>
\t\t<div class=\"col-4\">
\t\t\t";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "decimales", []), 'label');
        echo "
\t\t\t";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "decimales", []), 'widget');
        echo "
\t\t\t";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "decimales", []), 'errors');
        echo "
\t\t</div>
\t</div>
\t<div class='form-row'>
\t\t<div class=\"col-3\">
\t\t\t";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "acumula", []), 'label');
        echo "
\t\t\t";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "acumula", []), 'widget');
        echo "
\t\t\t";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "acumula", []), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"col-3\">
\t\t\t";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "promedia", []), 'label');
        echo "
\t\t\t";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "promedia", []), 'widget');
        echo "
\t\t\t";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "atributoMedible", []), "promedia", []), 'errors');
        echo "
\t\t</div>
\t</div>
\t";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "guardar", []), 'widget');
        echo "
\t";
        // line 131
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

  </div>
  <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
  \t<br>
\t\t";
        // line 136
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAMA"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t<div class='form-row'>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "atributoMedible", []), "atributo", []), "atributoAbstracto", []), 'label');
        echo "
\t\t\t\t\t";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "atributoMedible", []), "atributo", []), "atributoAbstracto", []), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "atributoMedible", []), "atributo", []), "nombre", []), 'label', ["label" => "Mostrar como..."]);
        echo "
\t\t\t\t\t";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "atributoMedible", []), "atributo", []), "nombre", []), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "atributoMedible", []), "unidadMedida", []), 'label');
        echo "
\t\t\t\t\t";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "atributoMedible", []), "unidadMedida", []), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-row\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t  \t<h4 class=\"card-title h5\">Definir operacion de calculo</h4>
\t\t\t\t  \t<div class=\"row\">
\t\t\t\t\t   \t<fieldset class=\"col-md-2\">    \t
\t\t\t\t\t\t\t\t<legend class=\"h6\">Operacion</legend>
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAMA"] ?? null), "operacion", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAMA"] ?? null), "operacion", []), 'widget', ["attr" => ["class" => "form-control-sm col-8"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t   \t<fieldset class=\"col-md-2\">    \t
\t\t\t\t\t\t\t\t<legend class=\"h6\">Ajuste</legend>
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAMA"] ?? null), "factorAjuste", []), 'label', ["label" => "Valor"]);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAMA"] ?? null), "factorAjuste", []), 'widget', ["attr" => ["class" => "form-control-sm col-8"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset class=\"col-md-4\">  
\t\t\t\t\t\t\t\t<legend class=\"h6\">Factor 1</legend>
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "factor1", []), "atributo", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "factor1", []), "atributo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "factor1", []), "articulo", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "factor1", []), "articulo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "factor1", []), "tipoCalculo", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "factor1", []), "tipoCalculo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset class=\"col-md-4\">    \t
\t\t\t\t\t\t\t\t<legend class=\"h6\">Factor 2</legend>
\t\t\t\t\t\t\t\t<div class=\"form-row\">\t\t\t\t 
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "factor2", []), "atributo", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "factor2", []), "atributo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "factor2", []), "articulo", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "factor2", []), "articulo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "factor2", []), "tipoCalculo", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "factor2", []), "tipoCalculo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class='form-row'>
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "atributoMedible", []), "decimales", []), 'label');
        echo "
\t\t\t\t\t";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "atributoMedible", []), "decimales", []), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "atributoMedible", []), "acumula", []), 'label');
        echo "
\t\t\t\t\t";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "atributoMedible", []), "acumula", []), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "atributoMedible", []), "promedia", []), 'label');
        echo "
\t\t\t\t\t";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? null), "atributoMedible", []), "promedia", []), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAMA"] ?? null), "guardar", []), 'widget');
        echo "
\t\t\t";
        // line 227
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAMA"] ?? null), 'form_end');
        echo "
  </div>
  <div class=\"tab-pane fade\" id=\"manual\" role=\"tabpanel\" aria-labelledby=\"manual-tab\">
  \t<br>
\t";
        // line 231
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAI"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAI"] ?? null), "atributoInformable", []), "atributo", []), "nombre", []), 'label', ["label" => "Mostrar como..."]);
        echo "
\t";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAI"] ?? null), "atributoInformable", []), "atributo", []), "nombre", []), 'widget', ["attr" => ["class" => "col-4"]]);
        echo "
\t";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAI"] ?? null), "atributoInformable", []), "atributo", []), "atributoAbstracto", []), 'label');
        echo "
\t";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAI"] ?? null), "atributoInformable", []), "atributo", []), "atributoAbstracto", []), 'widget', ["attr" => ["class" => "col-4"]]);
        echo "
\t";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAI"] ?? null), "claseExterna", []), 'label');
        echo "
\t";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAI"] ?? null), "claseExterna", []), 'widget', ["attr" => ["class" => "col-4"]]);
        echo "
\t";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAI"] ?? null), "guardar", []), 'widget');
        echo "
\t";
        // line 239
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAI"] ?? null), 'form_end');
        echo "
  </div>
  <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
  \t<br>
\t";
        // line 243
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAIM"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAIM"] ?? null), "atributo", []), "nombre", []), 'label', ["label" => "Mostrar como..."]);
        echo "
\t";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAIM"] ?? null), "atributo", []), "nombre", []), 'widget', ["attr" => ["class" => "col-4"]]);
        echo "
\t";
        // line 246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAIM"] ?? null), "atributo", []), "atributoAbstracto", []), 'label');
        echo "
\t";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAIM"] ?? null), "atributo", []), "atributoAbstracto", []), 'widget', ["attr" => ["class" => "col-4"]]);
        echo "
\t";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAIM"] ?? null), "guardar", []), 'widget');
        echo "
\t";
        // line 249
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAIM"] ?? null), 'form_end');
        echo "
  </div>
</div>
\t<br>

";
    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:gestionBD:atributoABM.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 249,  548 => 248,  544 => 247,  540 => 246,  536 => 245,  532 => 244,  528 => 243,  521 => 239,  517 => 238,  513 => 237,  509 => 236,  505 => 235,  501 => 234,  497 => 233,  493 => 232,  489 => 231,  482 => 227,  478 => 226,  472 => 223,  468 => 222,  462 => 219,  458 => 218,  452 => 215,  448 => 214,  435 => 204,  431 => 203,  425 => 200,  421 => 199,  415 => 196,  411 => 195,  400 => 187,  396 => 186,  390 => 183,  386 => 182,  380 => 179,  376 => 178,  365 => 170,  361 => 169,  350 => 161,  346 => 160,  331 => 148,  327 => 147,  321 => 144,  317 => 143,  311 => 140,  307 => 139,  301 => 136,  293 => 131,  289 => 130,  283 => 127,  279 => 126,  275 => 125,  269 => 122,  265 => 121,  261 => 120,  253 => 115,  249 => 114,  245 => 113,  237 => 108,  233 => 107,  229 => 106,  223 => 103,  219 => 102,  215 => 101,  209 => 98,  205 => 97,  201 => 96,  195 => 93,  172 => 72,  163 => 69,  160 => 68,  156 => 67,  150 => 64,  140 => 57,  135 => 55,  130 => 53,  124 => 50,  121 => 49,  119 => 48,  114 => 45,  102 => 43,  100 => 42,  96 => 41,  92 => 40,  88 => 39,  85 => 38,  83 => 37,  77 => 33,  74 => 32,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "GestionFaenaBundle:gestionBD:atributoABM.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/gestionBD/atributoABM.html.twig");
    }
}
