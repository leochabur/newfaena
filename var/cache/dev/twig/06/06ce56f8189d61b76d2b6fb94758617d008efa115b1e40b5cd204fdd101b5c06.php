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

/* @GestionFaena/gestionBD/atributoABM.html.twig */
class __TwigTemplate_0c9fbb57f65949d1f875b9aa05c98ec2cba6e388a16d0c74568b66c148749247 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/atributoABM.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/gestionBD/atributoABM.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/gestionBD/atributoABM.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "concepto", []), "procesoFaena", []), "html", null, true);
            echo "</li>
\t\t<li class=\"h6\">Concepto : ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "concepto", []), "concepto", []), "html", null, true);
            echo "</li>
\t\t<li class=\"h6\">Articulo : ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "articulo", []), "html", null, true);
            echo "</li>
\t\t";
            // line 42
            if ((isset($context["transf"]) || array_key_exists("transf", $context))) {
                // line 43
                echo "\t\t\t<li class=\"h6\">Articulo origen de transformacion: ";
                if ( !(null === $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "articuloOrigenTransformacion", []))) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "articuloOrigenTransformacion", []), "html", null, true);
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transf"] ?? $this->getContext($context, "transf")), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "assign"]]);
            echo "
\t<span class=\"h6 container\">Asignar articulo origen</span>
\t<div class=\"form-row container align-items-center\">
\t\t<div class=\"col\">";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["transf"] ?? $this->getContext($context, "transf")), "articulo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
            echo "
\t\t<small id=\"defaultRegisterFormPasswordHelpBlock\" class=\"form-text text-muted\">
        \tLos articulos se configuran desde <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_edit_procesos", ["proccess" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "concepto", []), "procesoFaena", []), "id", [])]), "html", null, true);
            echo "\">aqui</a>
    </small></div>
\t\t<div class=\"col\">";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["transf"] ?? $this->getContext($context, "transf")), "agregar", []), 'widget', ["attr" => ["class" => "btn-sm btn-success"]]);
            echo "
\t\t<small id=\"defaultRegisterFormPasswordHelpBlock\" class=\"form-text text-muted\">
         .
    </small>
\t</div>
\t</div>
\t<hr>
\t";
            // line 64
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["transf"] ?? $this->getContext($context, "transf")), 'form_end');
            echo "
\t
";
        }
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "errors"], "method"));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t<div class='form-row'>
\t\t<div class=\"col-4\">
\t\t\t";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "atributo", []), "atributoAbstracto", []), 'label');
        echo "
\t\t\t";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "atributo", []), "atributoAbstracto", []), 'widget');
        echo "
\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "atributo", []), "atributoAbstracto", []), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"col-4\">
\t\t\t";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "atributo", []), "nombre", []), 'label', ["label" => "Mostrar como..."]);
        echo "
\t\t\t";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "atributo", []), "nombre", []), 'widget');
        echo "
\t\t\t";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "atributo", []), "nombre", []), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"col-4\">
\t\t\t";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "unidadMedida", []), 'label');
        echo "
\t\t\t";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "unidadMedida", []), 'widget');
        echo "
\t\t\t";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "unidadMedida", []), 'errors');
        echo "
\t\t</div>
\t</div>
\t<div class='form-row'>
\t\t<div class=\"col-4\">
\t\t\t";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "decimales", []), 'label');
        echo "
\t\t\t";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "decimales", []), 'widget');
        echo "
\t\t\t";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "decimales", []), 'errors');
        echo "
\t\t</div>
\t</div>
\t<div class='form-row'>
\t\t<div class=\"col-3\">
\t\t\t";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "acumula", []), 'label');
        echo "
\t\t\t";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "acumula", []), 'widget');
        echo "
\t\t\t";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "acumula", []), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"col-3\">
\t\t\t";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "promedia", []), 'label');
        echo "
\t\t\t";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "promedia", []), 'widget');
        echo "
\t\t\t";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atributoMedible", []), "promedia", []), 'errors');
        echo "
\t\t</div>
\t</div>
\t";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
        echo "
\t";
        // line 131
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

  </div>
  <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
  \t<br>
\t\t";
        // line 136
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAMA"] ?? $this->getContext($context, "formAMA")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t<div class='form-row'>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "atributoMedible", []), "atributo", []), "atributoAbstracto", []), 'label');
        echo "
\t\t\t\t\t";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "atributoMedible", []), "atributo", []), "atributoAbstracto", []), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "atributoMedible", []), "atributo", []), "nombre", []), 'label', ["label" => "Mostrar como..."]);
        echo "
\t\t\t\t\t";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "atributoMedible", []), "atributo", []), "nombre", []), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "atributoMedible", []), "unidadMedida", []), 'label');
        echo "
\t\t\t\t\t";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "atributoMedible", []), "unidadMedida", []), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "operacion", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "operacion", []), 'widget', ["attr" => ["class" => "form-control-sm col-8"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factorAjuste", []), 'label', ["label" => "Valor"]);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factorAjuste", []), 'widget', ["attr" => ["class" => "form-control-sm col-8"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor1", []), "atributo", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor1", []), "atributo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor1", []), "articulo", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor1", []), "articulo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor1", []), "tipoCalculo", []), 'label', ["label" => "Tipo"]);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor1", []), "tipoCalculo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\tIng.
\t\t\t\t\t\t\t\t\t\t";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor1", []), "soloIngreso", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset class=\"col-md-4\">    \t
\t\t\t\t\t\t\t\t<legend class=\"h6\">Factor 2</legend>
\t\t\t\t\t\t\t\t<div class=\"form-row\">\t\t\t\t 
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor2", []), "atributo", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor2", []), "atributo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor2", []), "articulo", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor2", []), "articulo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor2", []), "tipoCalculo", []), 'label');
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor2", []), "tipoCalculo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\tIng.
\t\t\t\t\t\t\t\t\t";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "factor2", []), "soloIngreso", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
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
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "atributoMedible", []), "decimales", []), 'label');
        echo "
\t\t\t\t\t";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "atributoMedible", []), "decimales", []), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "atributoMedible", []), "acumula", []), 'label');
        echo "
\t\t\t\t\t";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "atributoMedible", []), "acumula", []), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "atributoMedible", []), "promedia", []), 'label');
        echo "
\t\t\t\t\t";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "atributoMedible", []), "promedia", []), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAMA"] ?? $this->getContext($context, "formAMA")), "guardar", []), 'widget');
        echo "
\t\t\t";
        // line 235
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAMA"] ?? $this->getContext($context, "formAMA")), 'form_end');
        echo "
  </div>
  <div class=\"tab-pane fade\" id=\"manual\" role=\"tabpanel\" aria-labelledby=\"manual-tab\">
  \t<br>
\t";
        // line 239
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAI"] ?? $this->getContext($context, "formAI")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAI"] ?? $this->getContext($context, "formAI")), "atributoInformable", []), "atributo", []), "nombre", []), 'label', ["label" => "Mostrar como..."]);
        echo "
\t";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAI"] ?? $this->getContext($context, "formAI")), "atributoInformable", []), "atributo", []), "nombre", []), 'widget', ["attr" => ["class" => "col-4"]]);
        echo "
\t";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAI"] ?? $this->getContext($context, "formAI")), "atributoInformable", []), "atributo", []), "atributoAbstracto", []), 'label');
        echo "
\t";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["formAI"] ?? $this->getContext($context, "formAI")), "atributoInformable", []), "atributo", []), "atributoAbstracto", []), 'widget', ["attr" => ["class" => "col-4"]]);
        echo "
\t";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAI"] ?? $this->getContext($context, "formAI")), "claseExterna", []), 'label');
        echo "
\t";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAI"] ?? $this->getContext($context, "formAI")), "claseExterna", []), 'widget', ["attr" => ["class" => "col-4"]]);
        echo "
\t";
        // line 246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAI"] ?? $this->getContext($context, "formAI")), "guardar", []), 'widget');
        echo "
\t";
        // line 247
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAI"] ?? $this->getContext($context, "formAI")), 'form_end');
        echo "
  </div>
  <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
  \t<br>
\t";
        // line 251
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAIM"] ?? $this->getContext($context, "formAIM")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAIM"] ?? $this->getContext($context, "formAIM")), "atributo", []), "nombre", []), 'label', ["label" => "Mostrar como..."]);
        echo "
\t";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAIM"] ?? $this->getContext($context, "formAIM")), "atributo", []), "nombre", []), 'widget', ["attr" => ["class" => "col-4"]]);
        echo "
\t";
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAIM"] ?? $this->getContext($context, "formAIM")), "atributo", []), "atributoAbstracto", []), 'label');
        echo "
\t";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formAIM"] ?? $this->getContext($context, "formAIM")), "atributo", []), "atributoAbstracto", []), 'widget', ["attr" => ["class" => "col-4"]]);
        echo "
\t";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["formAIM"] ?? $this->getContext($context, "formAIM")), "guardar", []), 'widget');
        echo "
\t";
        // line 257
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formAIM"] ?? $this->getContext($context, "formAIM")), 'form_end');
        echo "
  </div>
</div>
\t<br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/gestionBD/atributoABM.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  596 => 257,  592 => 256,  588 => 255,  584 => 254,  580 => 253,  576 => 252,  572 => 251,  565 => 247,  561 => 246,  557 => 245,  553 => 244,  549 => 243,  545 => 242,  541 => 241,  537 => 240,  533 => 239,  526 => 235,  522 => 234,  516 => 231,  512 => 230,  506 => 227,  502 => 226,  496 => 223,  492 => 222,  479 => 212,  472 => 208,  468 => 207,  462 => 204,  458 => 203,  452 => 200,  448 => 199,  437 => 191,  430 => 187,  426 => 186,  420 => 183,  416 => 182,  410 => 179,  406 => 178,  395 => 170,  391 => 169,  380 => 161,  376 => 160,  361 => 148,  357 => 147,  351 => 144,  347 => 143,  341 => 140,  337 => 139,  331 => 136,  323 => 131,  319 => 130,  313 => 127,  309 => 126,  305 => 125,  299 => 122,  295 => 121,  291 => 120,  283 => 115,  279 => 114,  275 => 113,  267 => 108,  263 => 107,  259 => 106,  253 => 103,  249 => 102,  245 => 101,  239 => 98,  235 => 97,  231 => 96,  225 => 93,  202 => 72,  193 => 69,  190 => 68,  186 => 67,  180 => 64,  170 => 57,  165 => 55,  160 => 53,  154 => 50,  151 => 49,  149 => 48,  144 => 45,  132 => 43,  130 => 42,  126 => 41,  122 => 40,  118 => 39,  115 => 38,  113 => 37,  107 => 33,  98 => 32,  61 => 4,  52 => 3,  30 => 1,);
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
        
{% block stylesheets %}

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

{% endblock %}
{% block fos_user_content %}
\t<br>
\t<hr>
<spam class=\"h5 mb-5\">Nueva definicion de atributos de articulos</spam>
<hr>
{% if articulo is defined %}
\t<ul>
\t\t<li class=\"h6\">Proceso : {{ articulo.concepto.procesoFaena }}</li>
\t\t<li class=\"h6\">Concepto : {{ articulo.concepto.concepto }}</li>
\t\t<li class=\"h6\">Articulo : {{ articulo.articulo }}</li>
\t\t{% if transf is defined %}
\t\t\t<li class=\"h6\">Articulo origen de transformacion: {% if articulo.articuloOrigenTransformacion is not null %} {{ articulo.articuloOrigenTransformacion }} {% else %}<small class=\"form-text text-muted\">Sin configurar</small> {% endif %}</li>
\t\t{% endif %}
\t</ul>
\t<hr>
{% endif %}
{% if transf is defined %}
\t
\t{{ form_start(transf, {'attr' : {'novalidate' : 'novalidate', 'class' : 'assign'}}) }}
\t<span class=\"h6 container\">Asignar articulo origen</span>
\t<div class=\"form-row container align-items-center\">
\t\t<div class=\"col\">{{ form_widget(transf.articulo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t<small id=\"defaultRegisterFormPasswordHelpBlock\" class=\"form-text text-muted\">
        \tLos articulos se configuran desde <a href=\"{{ path('bd_edit_procesos', {proccess: articulo.concepto.procesoFaena.id})}}\">aqui</a>
    </small></div>
\t\t<div class=\"col\">{{ form_widget(transf.agregar, {'attr' : {'class' : 'btn-sm btn-success'}}) }}
\t\t<small id=\"defaultRegisterFormPasswordHelpBlock\" class=\"form-text text-muted\">
         .
    </small>
\t</div>
\t</div>
\t<hr>
\t{{ form_end(transf) }}
\t
{% endif %}
{% for message in app.flashes('errors') %}
\t<div class=\"alert alert-danger\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
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
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
\t<div class='form-row'>
\t\t<div class=\"col-4\">
\t\t\t{{ form_label(form.atributoMedible.atributo.atributoAbstracto) }}
\t\t\t{{ form_widget(form.atributoMedible.atributo.atributoAbstracto) }}
\t\t\t{{ form_errors(form.atributoMedible.atributo.atributoAbstracto) }}
\t\t</div>
\t\t<div class=\"col-4\">
\t\t\t{{ form_label(form.atributoMedible.atributo.nombre, 'Mostrar como...') }}
\t\t\t{{ form_widget(form.atributoMedible.atributo.nombre) }}
\t\t\t{{ form_errors(form.atributoMedible.atributo.nombre) }}
\t\t</div>
\t\t<div class=\"col-4\">
\t\t\t{{ form_label(form.atributoMedible.unidadMedida) }}
\t\t\t{{ form_widget(form.atributoMedible.unidadMedida) }}
\t\t\t{{ form_errors(form.atributoMedible.unidadMedida) }}
\t\t</div>
\t</div>
\t<div class='form-row'>
\t\t<div class=\"col-4\">
\t\t\t{{ form_label(form.atributoMedible.decimales) }}
\t\t\t{{ form_widget(form.atributoMedible.decimales) }}
\t\t\t{{ form_errors(form.atributoMedible.decimales) }}
\t\t</div>
\t</div>
\t<div class='form-row'>
\t\t<div class=\"col-3\">
\t\t\t{{ form_label(form.atributoMedible.acumula) }}
\t\t\t{{ form_widget(form.atributoMedible.acumula) }}
\t\t\t{{ form_errors(form.atributoMedible.acumula) }}
\t\t</div>
\t\t<div class=\"col-3\">
\t\t\t{{ form_label(form.atributoMedible.promedia) }}
\t\t\t{{ form_widget(form.atributoMedible.promedia) }}
\t\t\t{{ form_errors(form.atributoMedible.promedia) }}
\t\t</div>
\t</div>
\t{{ form_widget(form.guardar) }}
\t{{ form_end(form) }}

  </div>
  <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
  \t<br>
\t\t{{ form_start(formAMA, {'attr': {'novalidate': 'novalidate'}}) }}
\t\t\t<div class='form-row'>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t{{ form_label(formAMA.atributoMedible.atributo.atributoAbstracto) }}
\t\t\t\t\t{{ form_widget(formAMA.atributoMedible.atributo.atributoAbstracto) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t{{ form_label(formAMA.atributoMedible.atributo.nombre, 'Mostrar como...') }}
\t\t\t\t\t{{ form_widget(formAMA.atributoMedible.atributo.nombre) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t{{ form_label(formAMA.atributoMedible.unidadMedida) }}
\t\t\t\t\t{{ form_widget(formAMA.atributoMedible.unidadMedida) }}
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
\t\t\t\t\t\t\t\t\t\t{{ form_label(formAMA.operacion) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formAMA.operacion, {'attr' : {'class' : 'form-control-sm col-8'}}) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t   \t<fieldset class=\"col-md-2\">    \t
\t\t\t\t\t\t\t\t<legend class=\"h6\">Ajuste</legend>
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(formAMA.factorAjuste, 'Valor') }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formAMA.factorAjuste, {'attr' : {'class' : 'form-control-sm col-8'}}) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset class=\"col-md-4\">  
\t\t\t\t\t\t\t\t<legend class=\"h6\">Factor 1</legend>
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(formAMA.factor1.atributo) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formAMA.factor1.atributo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(formAMA.factor1.articulo) }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formAMA.factor1.articulo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(formAMA.factor1.tipoCalculo, 'Tipo') }}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formAMA.factor1.tipoCalculo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\tIng.
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formAMA.factor1.soloIngreso, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset class=\"col-md-4\">    \t
\t\t\t\t\t\t\t\t<legend class=\"h6\">Factor 2</legend>
\t\t\t\t\t\t\t\t<div class=\"form-row\">\t\t\t\t 
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t{{ form_label(formAMA.factor2.atributo) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(formAMA.factor2.atributo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t{{ form_label(formAMA.factor2.articulo) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(formAMA.factor2.articulo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t{{ form_label(formAMA.factor2.tipoCalculo) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(formAMA.factor2.tipoCalculo, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\tIng.
\t\t\t\t\t\t\t\t\t{{ form_widget(formAMA.factor2.soloIngreso, {'attr' : {'class' : 'form-control-sm'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class='form-row'>
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t{{ form_label(formAMA.atributoMedible.decimales) }}
\t\t\t\t\t{{ form_widget(formAMA.atributoMedible.decimales) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t{{ form_label(formAMA.atributoMedible.acumula) }}
\t\t\t\t\t{{ form_widget(formAMA.atributoMedible.acumula) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t{{ form_label(formAMA.atributoMedible.promedia) }}
\t\t\t\t\t{{ form_widget(formAMA.atributoMedible.promedia) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{{ form_widget(formAMA.guardar) }}
\t\t\t{{ form_end(formAMA) }}
  </div>
  <div class=\"tab-pane fade\" id=\"manual\" role=\"tabpanel\" aria-labelledby=\"manual-tab\">
  \t<br>
\t{{ form_start(formAI, {'attr': {'novalidate': 'novalidate'}}) }}
\t{{ form_label(formAI.atributoInformable.atributo.nombre, 'Mostrar como...') }}
\t{{ form_widget(formAI.atributoInformable.atributo.nombre, {'attr': {'class': 'col-4'}}) }}
\t{{ form_label(formAI.atributoInformable.atributo.atributoAbstracto) }}
\t{{ form_widget(formAI.atributoInformable.atributo.atributoAbstracto, {'attr': {'class': 'col-4'}}) }}
\t{{ form_label(formAI.claseExterna) }}
\t{{ form_widget(formAI.claseExterna, {'attr': {'class': 'col-4'}}) }}
\t{{ form_widget(formAI.guardar) }}
\t{{ form_end(formAI) }}
  </div>
  <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
  \t<br>
\t{{ form_start(formAIM, {'attr': {'novalidate': 'novalidate'}}) }}
\t{{ form_label(formAIM.atributo.nombre, 'Mostrar como...') }}
\t{{ form_widget(formAIM.atributo.nombre, {'attr': {'class': 'col-4'}}) }}
\t{{ form_label(formAIM.atributo.atributoAbstracto) }}
\t{{ form_widget(formAIM.atributo.atributoAbstracto, {'attr': {'class': 'col-4'}}) }}
\t{{ form_widget(formAIM.guardar) }}
\t{{ form_end(formAIM) }}
  </div>
</div>
\t<br>

{% endblock fos_user_content %}
", "@GestionFaena/gestionBD/atributoABM.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\atributoABM.html.twig");
    }
}
