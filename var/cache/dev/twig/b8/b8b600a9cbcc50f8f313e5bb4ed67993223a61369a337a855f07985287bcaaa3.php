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

/* @GestionFaena/faena/adminProcFanDayMedium.html.twig */
class __TwigTemplate_230d9621ce5a84c6c815f4bfe965c2ff8ebea48f6134bdf8f161272dd9d04016 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/faena/adminProcFanDayMedium.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/faena/adminProcFanDayMedium.html.twig"));

        // line 2
        list($context["fontawesome"], $context["mask"]) =         [false, false];
        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/faena/adminProcFanDayMedium.html.twig", 1);
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
<p class=\"h5 card-title\">Proceso: ";
        // line 7
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["proceso"] ?? $this->getContext($context, "proceso"))), "html", null, true);
        echo " - Fecha: ";
        echo twig_escape_filter($this->env, ($context["faena"] ?? $this->getContext($context, "faena")), "html", null, true);
        echo "</p>
<hr>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "errorLoad"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "\t<div class=\"alert alert-danger\" role=\"alert\">
\t  ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        if ( !(isset($context["fatr"]) || array_key_exists("fatr", $context))) {
            // line 15
            echo "\t";
            if ( !$this->getAttribute($this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "procesoFaena", []), "isTransito", [])) {
                // line 16
                echo "\t\t\t<div class=\"card\">
\t\t  \t\t<div class=\"card-body\">
\t\t\t\t\t";
                // line 18
                if ((isset($context["errors"]) || array_key_exists("errors", $context))) {
                    // line 19
                    echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 21
                        echo "\t\t\t\t\t\t\t    <li class=\"list-group-item list-group-item-danger\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                        echo "</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
                echo "
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t";
                // line 28
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoMovimiento", []), 'label');
                echo "
\t\t\t\t\t\t\t\t";
                // line 29
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipoMovimiento", []), 'widget', ["attr" => ["class" => "tipos"]]);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t";
                // line 32
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "conMovProc", []), 'label', ["label" => "Concepto de Movimiento"]);
                echo "
\t\t\t\t\t\t\t\t";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "conMovProc", []), 'widget', ["attr" => ["class" => "conceptos"]]);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t";
                // line 36
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "artProcFaena", []), 'label', ["label" => "Articulo"]);
                echo "
\t\t\t\t\t\t\t\t";
                // line 37
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "artProcFaena", []), 'widget', ["attr" => ["class" => "articulos"]]);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "proceso", []), 'widget', ["attr" => ["class" => "proceso"]]);
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-12\">
\t\t\t\t\t\t\t\t";
                // line 43
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "guardar", []), 'widget');
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 col-sm-12 text-right\">
\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#fullHeightModalRight\"><i class=\"far fa-question-circle fa-2x mt-3\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 49
                if ($this->getAttribute(($context["form"] ?? null), "automatic", [], "any", true, true)) {
                    // line 50
                    echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t";
                    // line 52
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "automatic", []), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t";
            }
        }
        // line 61
        if ((isset($context["tapar"]) || array_key_exists("tapar", $context))) {
            // line 62
            echo "\t<div class=\"card\">
  \t\t<div class=\"card-body\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 col-md-12\">
\t\t\t\t\t";
            // line 67
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["tapar"] ?? $this->getContext($context, "tapar")), "formRomanea", []), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "form-inline ml-4"]]);
            echo "
\t\t\t\t\t";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["tapar"] ?? $this->getContext($context, "tapar")), "formRomanea", []), "pallet", []), 'label');
            echo "
\t\t\t\t\t";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["tapar"] ?? $this->getContext($context, "tapar")), "formRomanea", []), "pallet", []), 'widget', ["attr" => ["class" => "ml-2 form-control-sm"]]);
            echo "
\t\t\t\t\t";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["tapar"] ?? $this->getContext($context, "tapar")), "formRomanea", []), "romanear", []), 'widget', ["attr" => ["class" => "btn btn-primary btn-sm"]]);
            echo "
\t\t\t\t\t";
            // line 71
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["tapar"] ?? $this->getContext($context, "tapar")), "formRomanea", []), 'form_end');
            echo "
\t\t\t\t\t</div>

\t\t\t  \t\t<div class=\"col-lg-6 col-md-12\">
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t  <button class=\"btn btn-secondary btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t    Administrar Pallet
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t    <a class=\"dropdown-item open-pallet\" href=\"#\">Abrir Pallet</a>
\t\t\t\t\t\t    <a class=\"dropdown-item view-pallet\" href=\"#\">Ver pendientes</a>
\t\t\t\t\t\t    <a class=\"dropdown-item\" target='_blanck' href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_all_pallet_faena");
            echo "\">Ver todos</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<div class=\"gst-pallet d-none\">
\t\t\t\t<hr>
\t\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 91
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["tapar"] ?? $this->getContext($context, "tapar")), "palletForm", []), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "form-inline ml-4"]]);
            echo "
\t\t\t\t";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["tapar"] ?? $this->getContext($context, "tapar")), "palletForm", []), "tipo", []), 'widget', ["attr" => ["class" => "form-control form-control-sm select-tipo"]]);
            echo "
\t\t\t\t";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["tapar"] ?? $this->getContext($context, "tapar")), "palletForm", []), "articulo", []), 'widget', ["attr" => ["class" => "form-control form-control-sm select-articulo"]]);
            echo "
\t\t\t\t";
            // line 94
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["tapar"] ?? $this->getContext($context, "tapar")), "palletForm", []), "codigo", []), 'widget', ["attr" => ["placeholder" => "Codigo Alfa-Numerico", "class" => "form-control form-control-sm ml-2 input-code"]]);
            echo "
\t\t\t\t";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["tapar"] ?? $this->getContext($context, "tapar")), "palletForm", []), "save", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-warning ml-2 save-pallet"]]);
            echo "
\t\t\t\t";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["tapar"] ?? $this->getContext($context, "tapar")), "palletForm", []), "cancelar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-danger ml-2 cancel-pallet"]]);
            echo "
\t\t\t\t";
            // line 97
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["tapar"] ?? $this->getContext($context, "tapar")), "palletForm", []), 'form_end');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"row alert alert-light d-none text-danger\" role=\"alert\" id=\"pallet-error\">

\t\t\t\t</div>
\t\t\t\t<div class=\"row alert alert-light d-none text-success\" role=\"alert\" id=\"pallet-success\">

\t\t\t\t</div>
\t\t\t</div>
  \t\t</div>

  \t</div>


";
        }
        // line 112
        if (((isset($context["nextForm"]) || array_key_exists("nextForm", $context)) && ($this->getAttribute($this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "procesoFaena", []), "id", []) == 13))) {
            // line 113
            echo "\t<div class=\"card\">
  \t\t<div class=\"card-body\">
  \t\t\t";
            // line 115
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["nextForm"] ?? $this->getContext($context, "nextForm")), 'form_start', ["attr" => ["class" => "sendnext"]]);
            echo "
  \t\t\t<div class=\"row\">
  \t\t\t\t<div class=\"col-lg-4\">
  \t\t\t\t\t";
            // line 118
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["nextForm"] ?? $this->getContext($context, "nextForm")), "faenas", []), 'label', ["label" => "Faena"]);
            echo "
  \t\t\t\t\t";
            // line 119
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["nextForm"] ?? $this->getContext($context, "nextForm")), "faenas", []), 'widget');
            echo "
  \t\t\t\t\t
  \t\t\t\t</div>
  \t\t\t\t<div class=\"col-lg-2\">
  \t\t\t\t\t";
            // line 123
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["nextForm"] ?? $this->getContext($context, "nextForm")), "bultos", []), 'label', ["label" => "Cant. Bultos"]);
            echo "
  \t\t\t\t\t";
            // line 124
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["nextForm"] ?? $this->getContext($context, "nextForm")), "bultos", []), 'widget');
            echo "
  \t\t\t\t\t
  \t\t\t\t</div>
  \t\t\t\t<div class=\"col-lg-4 mt-4\">
  \t\t\t\t\t";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["nextForm"] ?? $this->getContext($context, "nextForm")), "guardar", []), 'widget', ["attr" => ["class" => "next btn btn-primary"]]);
            echo "
  \t\t\t\t\t
  \t\t\t\t</div>
  \t\t\t</div>
  \t\t\t";
            // line 132
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["nextForm"] ?? $this->getContext($context, "nextForm")), 'form_end');
            echo "
  \t\t</div>
  \t</div>
";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "error"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 136
                echo "\t<div class=\"alert alert-danger\" role=\"alert\">
\t  ";
                // line 137
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
\t</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", [0 => "success"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 141
                echo "\t<div class=\"alert alert-success\" role=\"alert\">
\t  ";
                // line 142
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
\t</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "  \t<hr>
";
        }
        // line 147
        echo "<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tExistencias Totales
\t\t\t<hr>
\t\t</div>
  \t</div>
\t<div class=\"card-body\">
\t";
        // line 155
        if ((isset($context["headers"]) || array_key_exists("headers", $context))) {
            // line 156
            echo "\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#</th>
\t\t\t\t\t";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? $this->getContext($context, "headers")));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                // line 161
                echo "\t\t\t\t\t\t<th>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "data", [], "array"), "html", null, true);
                echo "</th>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["body"] ?? $this->getContext($context, "body")));
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
            foreach ($context['_seq'] as $context["kart"] => $context["m"]) {
                // line 169
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
\t\t\t\t\t";
                // line 171
                $context["key"] = 0;
                // line 172
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? $this->getContext($context, "headers")));
                foreach ($context['_seq'] as $context["k"] => $context["h"]) {
                    // line 173
                    echo "\t\t\t\t\t\t";
                    $context["key"] = $context["k"];
                    // line 174
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute($context["h"], "numeric", [], "array")) {
                        // line 175
                        echo "\t\t\t\t\t\t\t";
                        $context["align"] = "text-right";
                        // line 176
                        echo "\t\t\t\t\t\t";
                    } else {
                        // line 177
                        echo "\t\t\t\t\t\t\t";
                        $context["align"] = "text-left";
                        // line 178
                        echo "\t\t\t\t\t\t";
                    }
                    // line 179
                    echo "\t\t\t\t\t\t<td class=\"";
                    echo twig_escape_filter($this->env, ($context["align"] ?? $this->getContext($context, "align")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 180
                    if ($this->getAttribute($context["m"], $context["k"], [], "array", true, true)) {
                        // line 181
                        echo "\t\t\t\t\t\t\t\t ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["m"], $context["k"], [], "array"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t";
                    }
                    // line 183
                    echo "\t\t\t\t\t\t</td>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['h'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "\t\t\t\t\t";
                $context["trx"] = $this->getAttribute($context["m"], "trx", []);
                // line 186
                echo "\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t";
                // line 187
                if ( !$this->getAttribute($this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "procesoFaena", []), "isTransito", [])) {
                    // line 188
                    echo "\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> 
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-align-justify fa-1x\"></i>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t \t\t \t\t\t\t\t\t\t<a class=\"dropdown-item\"  
\t\t \t\t \t\t\t\t\t\t\t   href=\"";
                    // line 193
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_get_detalle_movimientos_proceso", ["proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", []), "art" => $context["kart"]]), "html", null, true);
                    echo "\">
\t\t  \t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm\">Ver Movimientos</button>
\t\t  \t\t\t\t\t\t\t\t\t</a>
\t\t  \t\t\t\t\t\t\t\t\t";
                    // line 196
                    if ($this->getAttribute($this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "procesoFaena", []), "getAdmiteCombinado", [])) {
                        // line 197
                        echo "\t\t\t \t\t \t\t\t\t\t\t\t<a class=\"dropdown-item\"  
\t\t\t \t\t \t\t\t\t\t\t\t   href=\"";
                        // line 198
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_romanea_articulos_proceso_medium", ["proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", []), "art" => $context["kart"]]), "html", null, true);
                        echo "\">
\t\t\t  \t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\">Registrar Salida</button>
\t\t\t  \t\t\t\t\t\t\t\t\t</a>
\t\t  \t\t\t\t\t\t\t\t\t";
                    }
                    // line 202
                    echo "\t\t  \t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    // line 203
                    if ((isset($context["formsDelete"]) || array_key_exists("formsDelete", $context))) {
                        // line 204
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify fa-1x\"></i></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t \t\t \t\t\t\t\t\t\t<a class=\"dropdown-item ";
                        // line 206
                        if (($context["trx"] ?? $this->getContext($context, "trx"))) {
                            echo " disabled ";
                        }
                        echo "\"  
\t\t \t\t \t\t\t\t\t\t\t   href=\"";
                        // line 207
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_mov_st_edit", ["mov" => $this->getAttribute($context["m"], "id", []), "proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "art" => $this->getAttribute($this->getAttribute($context["m"], "art", []), "id", []), "fanday" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", [])]), "html", null, true);
                        echo "\">
\t\t  \t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm ";
                        // line 208
                        if (($context["trx"] ?? $this->getContext($context, "trx"))) {
                            echo " disabled ";
                        }
                        echo "\">Editar</button>
\t\t  \t\t\t\t\t\t\t\t\t</a>
\t\t  \t\t\t\t\t\t\t\t\t";
                        // line 210
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                            // line 211
                            echo "\t\t\t  \t\t\t\t\t\t\t\t\t<div class=\"dropdown-item\">
\t\t\t  \t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 212
                            echo                             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["formsDelete"] ?? $this->getContext($context, "formsDelete")), $this->getAttribute($context["m"], "id", []), [], "array"), 'form_start', ["attr" => ["class" => "sendDelete"]]);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t    \t";
                            // line 213
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formsDelete"] ?? $this->getContext($context, "formsDelete")), $this->getAttribute($context["m"], "id", []), [], "array"), "delete", []), 'widget', ["attr" => ["data-mov" => $this->getAttribute($context["m"], "id", []), "data-trx" => ($context["trx"] ?? $this->getContext($context, "trx")), "data-index" => $this->getAttribute($context["loop"], "index", []), "class" => "btn btn-sm btn-danger btnDelete"]]);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t    \t";
                            // line 214
                            echo                             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["formsDelete"] ?? $this->getContext($context, "formsDelete")), $this->getAttribute($context["m"], "id", []), [], "array"), 'form_end');
                            echo "
\t\t\t  \t\t\t\t\t\t\t\t\t</div>
\t\t\t  \t\t\t\t\t\t\t\t";
                        }
                        // line 217
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 219
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 220
                    echo "\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-warning\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_get_detalle_movimientos_proceso", ["proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", []), "art" => $context["kart"]]), "html", null, true);
                    echo "\">
\t\t  \t\t\t\t\t\t\t\t\tVer >></a>
\t\t\t\t\t\t";
                }
                // line 223
                echo "\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['kart'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "\t\t\t\t";
            if ((isset($context["totales"]) || array_key_exists("totales", $context))) {
                // line 227
                echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t";
                // line 230
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? $this->getContext($context, "headers")));
                foreach ($context['_seq'] as $context["k"] => $context["h"]) {
                    // line 231
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["h"], "numeric", [], "array")) {
                        // line 232
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["align"] = "text-right";
                        // line 233
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        // line 234
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["align"] = "text-left";
                        // line 235
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 236
                    echo "\t\t\t\t\t\t\t\t<td class=\"";
                    echo twig_escape_filter($this->env, ($context["align"] ?? $this->getContext($context, "align")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 237
                    if ($this->getAttribute(($context["totales"] ?? null), $context["k"], [], "array", true, true)) {
                        // line 238
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["totales"] ?? $this->getContext($context, "totales")), $context["k"], [], "array"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    // line 240
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['h'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 242
                echo "\t\t\t\t\t\t</tr>
\t\t\t
\t\t\t\t";
            }
            // line 245
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 248
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_procesos_faena_diaria", ["fan" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-success\"><< Volver</a>
\t</div>
</div>

\t<div class=\"modal fade top\" id=\"fullHeightModalRight\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
\t  aria-hidden=\"true\">

\t  <div class=\"modal-dialog modal-full-height modal-top\" role=\"document\">


\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title w-100\" id=\"myModalLabel\">Pasos a ejecutar...</h4>
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t          <span aria-hidden=\"true\">&times;</span>
\t        </button>
\t      </div>
\t      <div class=\"modal-body\">
\t        \t<ul>
\t\t\t\t\t";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "procesoFaena", []), "pasos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["aj"]) {
            // line 268
            echo "\t\t\t\t\t\t";
            if ( !$this->getAttribute($context["aj"], "eliminado", [])) {
                // line 269
                echo "\t\t\t\t\t\t\t\t<li>Paso ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "orden", []), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "detalle", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 270
                if ($this->getAttribute(($context["pasos"] ?? null), $this->getAttribute($context["aj"], "id", []), [], "array", true, true)) {
                    // line 271
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-check-circle fa-2x\"></i>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 273
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-times-circle fa-2x mt-2\"></i>
\t\t\t\t\t\t\t\t\t";
                }
                // line 275
                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 277
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "\t        \t</ul>
\t      </div>
\t      <div class=\"modal-footer justify-content-center\">
\t        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
\t      </div>
\t    </div>
\t  </div>
\t</div>

<div class=\"modal fade modal-view-pallets\" id=\"modalLoginForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-50 font-weight-bold\">Pallets activos</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body body-modal-view mx-3\">

      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 305
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 306
        echo "
<script type=\"text/javascript\">

\tvar articulosPallet = \$('.select-articulo');
\t\$('.select-tipo').change(function(){
\t\t\t\t\t\t\t\t\t\tvar articulos = \"";
        // line 311
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_get_articulos_tipo_pallet", ["tp" => "_TP"]);
        echo "\";
\t\t\t\t\t\t\t\t\t\tvar routArt = articulos.replace('_TP', \$(this).val());
\t\t\t\t\t\t\t\t\t\t  \$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t    url : routArt,
\t\t\t\t\t\t\t\t\t\t\t\t    type: \"POST\",
\t\t\t\t\t\t\t\t\t\t\t\t    success: function(data) 
\t\t\t\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t\t\t\t\t    \t
\t\t\t\t\t\t\t\t\t\t\t\t    \t\tconsole.log(data.length);

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tarticulosPallet.html('');

\t\t\t\t\t\t\t\t\t\t\t                articulosPallet.html('<option>Selecciona...</option>');
\t\t\t\t\t\t\t\t\t\t\t                for (var i = 0, total = data.length; i < total; i++) 
\t\t\t\t\t\t\t\t\t\t\t                {
\t\t\t\t\t\t\t\t\t\t\t                    articulosPallet.append('<option value=\"' + data[i].id + '\">' + data[i].art + '</option>');
\t\t\t\t\t\t\t\t\t\t\t\t    \t\t}
\t\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t\t    failed: function(data){
\t\t\t\t\t\t\t\t\t\t\t\t    \talert('error');
\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t  \t\t});
\t});

\t\$('.view-pallet').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\$('.body-modal-view').html('<div class=\"d-flex justify-content-center\"><div class=\"spinner-border\" role=\"status\"><span class=\"sr-only\">Loading...</span></div></div>');
\t\t\t\t\t\t\t\t\t\t\t\$('.body-modal-view').load(\"";
        // line 338
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_get_pallet_faena");
        echo "\");
\t\t\t\t\t\t\t\t\t\t\t\$('.modal-view-pallets').modal('show');
\t});

\t\$('.save-pallet').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();

\t\t\t\t\t\t\t\t\t\t\tconst form = \$(this).closest('form');
\t\t\t\t\t\t\t\t\t\t\t\$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t\t\t   {
\t\t\t\t\t\t\t\t\t\t\t\t   \t\tarticulo : \$('.select-articulo').val(),
\t\t\t\t\t\t\t\t\t\t\t\t   \t\ttipo: \$('.select-tipo').val(),
\t\t\t\t\t\t\t\t\t\t\t\t   \t\tcode: \$('.input-code').val()

\t\t\t\t\t\t\t\t\t\t\t\t   },
\t\t\t\t\t\t\t\t\t\t\t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\tif (!data.status)
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\$('#pallet-error').html(data.message);
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\$('#pallet-error').removeClass('d-none');
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\twindow.setTimeout(()=>{\$('#pallet-error').addClass('d-none')}, 3000);
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t
\t\t\t\t\t\t\t\t\t\t\t\t   });

\t});

\t\$('.open-pallet').click(function(event){
\t\t\t\t\t\t\t\t\t\t\t\$('.gst-pallet').removeClass('d-none');
\t});

\t\$('.cancel-pallet').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\$('.gst-pallet').addClass('d-none');
\t});

\t\$('.next').click(function(event){
\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    message: 'Seguro quitar la cantidad del tunel?',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    size: \"large\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        if (result)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\$('.sendnext').trigger('submit');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t });

\t});


\tvar tipos = \$('.tipos');
\tvar conceptos = \$('.conceptos');
\tvar articulos = \$('.articulos');
\tconceptos.html('');
\tarticulos.html('');
\ttipos.change(function() {
\t  var form = \$(this).closest('form');
\t  \$.ajax({
\t\t\t    url : \"";
        // line 412
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_change_tipo_movimiento");
        echo "\",
\t\t\t    type: \"POST\",
\t\t\t    data : {proceso: form.find('.proceso').val(), tipoMovimiento: \$(this).val()},
\t\t\t    success: function(data) {
\t\t\t\t\t\tarticulos.html('');
\t\t                conceptos.html('<option>Selecciona...</option>');
\t\t                for (var i = 0, total = data.length; i < total; i++) {
\t\t                    conceptos.append('<option value=\"' + data[i].id + '\">' + data[i].show + '</option>');
\t\t\t    \t\t}
\t\t\t    },
\t\t\t    failed: function(data){
\t\t\t    \talert('error');
\t\t\t    }
\t  \t\t});
\t});

\tconceptos.change(function() {
\t  \$.ajax({
\t\t\t    url : \"";
        // line 430
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_change_concepto_movimiento");
        echo "\",
\t\t\t    type: \"POST\",
\t\t\t    data : {concepto: \$(this).val()},
\t\t\t    success: function(data) {
\t\t\t\t\t\tarticulos.html('<option value=\"null\">Selecciona...</option>');
\t\t                for (var i = 0, total = data.length; i < total; i++) {
\t\t                    articulos.append('<option value=\"' + data[i].id + '\">' + data[i].show + '</option>');
\t\t\t    \t\t}
\t\t\t    }
\t  \t\t});
\t});


\t\$('.btnDelete').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\tvar route = \"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("query_consulta_movimiento", ["mov" => "_MOV", "trx" => "_TRX"]), "html", null, true);
        echo "\";
\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tif (btn.data('trx'))
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\tvar ruta = route.replace('_MOV', btn.data('mov')).replace('_TRX', btn.data('trx'));
\t\t\t\t\t\t\t\t\t\t\t\t\$.post(ruta,
\t\t\t\t\t\t\t\t\t\t\t\t\t  function(response){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    message: response.msge,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    size: \"large\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        if (result)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \tvar route = btn.parent().attr('action');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(route,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   function (result){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t if (result.status)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t \t\$('.enviar').trigger('click');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t\t    message: \"Seguro eliminar el item \"+btn.data('index')+\"?\",
\t\t\t\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t\t\t\t        if (result){
\t\t\t\t\t\t\t\t\t\t\t\t        \tvar route = btn.parent().attr('action');
\t\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(route,
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   function (result){
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t if (result.status)
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t {
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t \t\$('.enviar').trigger('click');
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t }
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t}
\t});

\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 513
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_art_proc_fan", ["articulo" => "id_article"]);
        echo "\"; 
\t\t\t\t\t\t\t\t\turl = url.replace('id_article', \$(this).data('id'));
\t\t\t\t\t\t\t\t\t\$('.modal-body-article').load(url);
\t\t\t\t\t\t\t\t\t\$('#viewArticle').modal('show');
\t});

\t\$('.sender').submit(function (event){
\t\t\t\t\t\t\t\t\t\t event.preventDefault();
\t\t\t\t\t\t\t\t\t\t var form = \$(this);
\t\t\t\t\t\t\t\t\t\t \$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t \t\tform.serialize(),
\t\t\t\t\t\t\t\t\t\t \t\tfunction(data){
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\tif (data.status)
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t{

\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t{

\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}


\t\t\t\t\t\t\t\t\t\t \t\t});
\t\t\t\t\t\t\t\t\t\t
\t});

\t";
        // line 539
        if ((isset($context["tipo"]) || array_key_exists("tipo", $context))) {
            // line 540
            echo "\t\t";
            if ((($context["tipo"] ?? $this->getContext($context, "tipo")) == "M")) {
                // line 541
                echo "\t\t\$(\".type option[value='";
                echo twig_escape_filter($this->env, ($context["tipo"] ?? $this->getContext($context, "tipo")), "html", null, true);
                echo "']\").attr('selected','selected');

\t\t";
            }
            // line 544
            echo "\t";
        }
        // line 545
        echo "</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/faena/adminProcFanDayMedium.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1013 => 545,  1010 => 544,  1003 => 541,  1000 => 540,  998 => 539,  969 => 513,  898 => 445,  880 => 430,  859 => 412,  782 => 338,  752 => 311,  745 => 306,  736 => 305,  701 => 278,  695 => 277,  691 => 275,  687 => 273,  683 => 271,  681 => 270,  674 => 269,  671 => 268,  667 => 267,  644 => 248,  639 => 245,  634 => 242,  627 => 240,  621 => 238,  619 => 237,  614 => 236,  611 => 235,  608 => 234,  605 => 233,  602 => 232,  599 => 231,  595 => 230,  590 => 227,  587 => 226,  571 => 223,  564 => 220,  561 => 219,  557 => 217,  551 => 214,  547 => 213,  543 => 212,  540 => 211,  538 => 210,  531 => 208,  527 => 207,  521 => 206,  517 => 204,  515 => 203,  512 => 202,  505 => 198,  502 => 197,  500 => 196,  494 => 193,  487 => 188,  485 => 187,  482 => 186,  479 => 185,  472 => 183,  466 => 181,  464 => 180,  459 => 179,  456 => 178,  453 => 177,  450 => 176,  447 => 175,  444 => 174,  441 => 173,  436 => 172,  434 => 171,  430 => 170,  427 => 169,  410 => 168,  403 => 163,  394 => 161,  390 => 160,  384 => 156,  382 => 155,  372 => 147,  368 => 145,  359 => 142,  356 => 141,  352 => 140,  343 => 137,  340 => 136,  336 => 135,  330 => 132,  323 => 128,  316 => 124,  312 => 123,  305 => 119,  301 => 118,  295 => 115,  291 => 113,  289 => 112,  271 => 97,  267 => 96,  263 => 95,  259 => 94,  255 => 93,  251 => 92,  247 => 91,  235 => 82,  221 => 71,  217 => 70,  213 => 69,  209 => 68,  205 => 67,  198 => 62,  196 => 61,  187 => 56,  180 => 52,  176 => 50,  174 => 49,  165 => 43,  158 => 39,  153 => 37,  149 => 36,  143 => 33,  139 => 32,  133 => 29,  129 => 28,  122 => 25,  118 => 23,  109 => 21,  105 => 20,  102 => 19,  100 => 18,  96 => 16,  93 => 15,  91 => 14,  82 => 11,  79 => 10,  75 => 9,  68 => 7,  64 => 5,  55 => 4,  44 => 1,  42 => 2,  30 => 1,);
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
{% set fontawesome, mask = false, false %}
\t
{% block fos_user_content %}
<br>
<hr>
<p class=\"h5 card-title\">Proceso: {{ proceso|upper }} - Fecha: {{ faena }}</p>
<hr>
{% for message in app.flashes('errorLoad') %}
\t<div class=\"alert alert-danger\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
{% if fatr is not defined %}
\t{% if not proceso.procesoFaena.isTransito %}
\t\t\t<div class=\"card\">
\t\t  \t\t<div class=\"card-body\">
\t\t\t\t\t{% if errors is defined %}
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% for error in errors %}
\t\t\t\t\t\t\t    <li class=\"list-group-item list-group-item-danger\">{{ error.message }}</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{{ form_start(form, {'attr' : {'novalidate' : 'novalidate'}}) }}
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t{{ form_label(form.tipoMovimiento) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.tipoMovimiento, {'attr' : {'class' : 'tipos'}}) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t{{ form_label(form.conMovProc, 'Concepto de Movimiento') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.conMovProc, {'attr' : {'class' : 'conceptos'}}) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t{{ form_label(form.artProcFaena, 'Articulo') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.artProcFaena, {'attr' : {'class' : 'articulos'}}) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_widget(form.proceso, {'attr' : {'class' : 'proceso'}}) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-sm-12\">
\t\t\t\t\t\t\t\t{{ form_widget(form.guardar) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 col-sm-12 text-right\">
\t\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#fullHeightModalRight\"><i class=\"far fa-question-circle fa-2x mt-3\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t{% if form.automatic is defined %}
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t{{ form_widget(form.automatic, {'attr' : {'class' : 'btn btn-warning'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t</div>
\t{% endif %}
{% endif %}
{% if tapar is defined %}
\t<div class=\"card\">
  \t\t<div class=\"card-body\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 col-md-12\">
\t\t\t\t\t{{ form_start(tapar.formRomanea, {'attr' : {'novalidate': 'novalidate', 'class' : 'form-inline ml-4'}}) }}
\t\t\t\t\t{{ form_label(tapar.formRomanea.pallet) }}
\t\t\t\t\t{{ form_widget(tapar.formRomanea.pallet, {'attr' : {'class' : 'ml-2 form-control-sm'}}) }}
\t\t\t\t\t{{ form_widget(tapar.formRomanea.romanear, {'attr' : {'class' : 'btn btn-primary btn-sm'}}) }}
\t\t\t\t\t{{ form_end(tapar.formRomanea) }}
\t\t\t\t\t</div>

\t\t\t  \t\t<div class=\"col-lg-6 col-md-12\">
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t  <button class=\"btn btn-secondary btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t    Administrar Pallet
\t\t\t\t\t\t  </button>
\t\t\t\t\t\t  <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t    <a class=\"dropdown-item open-pallet\" href=\"#\">Abrir Pallet</a>
\t\t\t\t\t\t    <a class=\"dropdown-item view-pallet\" href=\"#\">Ver pendientes</a>
\t\t\t\t\t\t    <a class=\"dropdown-item\" target='_blanck' href=\"{{ path('bd_view_all_pallet_faena') }}\">Ver todos</a>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<div class=\"gst-pallet d-none\">
\t\t\t\t<hr>
\t\t\t\t<div class=\"row\">
\t\t\t\t{{ form_start(tapar.palletForm, {'attr' : {'novalidate': 'novalidate', 'class' : 'form-inline ml-4'}}) }}
\t\t\t\t{{ form_widget(tapar.palletForm.tipo, {'attr' : {'class' : 'form-control form-control-sm select-tipo'}}) }}
\t\t\t\t{{ form_widget(tapar.palletForm.articulo, {'attr' : {'class' : 'form-control form-control-sm select-articulo'}}) }}
\t\t\t\t{{ form_widget(tapar.palletForm.codigo, {'attr' : {'placeholder' :'Codigo Alfa-Numerico', 'class' : 'form-control form-control-sm ml-2 input-code'}}) }}
\t\t\t\t{{ form_widget(tapar.palletForm.save, {'attr' : {'class' : 'btn btn-sm btn-warning ml-2 save-pallet'}}) }}
\t\t\t\t{{ form_widget(tapar.palletForm.cancelar, {'attr' : {'class' : 'btn btn-sm btn-danger ml-2 cancel-pallet'}}) }}
\t\t\t\t{{ form_end(tapar.palletForm) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"row alert alert-light d-none text-danger\" role=\"alert\" id=\"pallet-error\">

\t\t\t\t</div>
\t\t\t\t<div class=\"row alert alert-light d-none text-success\" role=\"alert\" id=\"pallet-success\">

\t\t\t\t</div>
\t\t\t</div>
  \t\t</div>

  \t</div>


{% endif %}
{% if nextForm is defined and proceso.procesoFaena.id == 13 %}
\t<div class=\"card\">
  \t\t<div class=\"card-body\">
  \t\t\t{{ form_start(nextForm, {'attr': {'class': 'sendnext'}}) }}
  \t\t\t<div class=\"row\">
  \t\t\t\t<div class=\"col-lg-4\">
  \t\t\t\t\t{{ form_label(nextForm.faenas, 'Faena') }}
  \t\t\t\t\t{{ form_widget(nextForm.faenas) }}
  \t\t\t\t\t
  \t\t\t\t</div>
  \t\t\t\t<div class=\"col-lg-2\">
  \t\t\t\t\t{{ form_label(nextForm.bultos, 'Cant. Bultos') }}
  \t\t\t\t\t{{ form_widget(nextForm.bultos) }}
  \t\t\t\t\t
  \t\t\t\t</div>
  \t\t\t\t<div class=\"col-lg-4 mt-4\">
  \t\t\t\t\t{{ form_widget(nextForm.guardar, {'attr': {'class' : 'next btn btn-primary'}}) }}
  \t\t\t\t\t
  \t\t\t\t</div>
  \t\t\t</div>
  \t\t\t{{ form_end(nextForm) }}
  \t\t</div>
  \t</div>
{% for message in app.flashes('error') %}
\t<div class=\"alert alert-danger\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
{% for message in app.flashes('success') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
  \t<hr>
{% endif %}
<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tExistencias Totales
\t\t\t<hr>
\t\t</div>
  \t</div>
\t<div class=\"card-body\">
\t{% if headers is defined %}
\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#</th>
\t\t\t\t\t{% for h in headers %}
\t\t\t\t\t\t<th>{{ h['data'] }}</th>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t{% for kart, m in body %}
\t\t\t\t\t<tr>
\t\t\t\t\t<td>{{ loop.index }}</td>
\t\t\t\t\t{% set key = 0 %}
\t\t\t\t\t{% for k, h in headers %}
\t\t\t\t\t\t{% set key = k %}
\t\t\t\t\t\t{% if h['numeric'] %}
\t\t\t\t\t\t\t{% set align = 'text-right' %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% set align = 'text-left' %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<td class=\"{{ align }}\">
\t\t\t\t\t\t\t{% if m[k] is defined %}
\t\t\t\t\t\t\t\t {{ m[k] }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% set trx = m.trx %}
\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t{% if not proceso.procesoFaena.isTransito %}
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> 
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-align-justify fa-1x\"></i>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t \t\t \t\t\t\t\t\t\t<a class=\"dropdown-item\"  
\t\t \t\t \t\t\t\t\t\t\t   href=\"{{ path('bd_adm_get_detalle_movimientos_proceso', { proc : proceso.id, fd : faena.id, art : kart }) }}\">
\t\t  \t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm\">Ver Movimientos</button>
\t\t  \t\t\t\t\t\t\t\t\t</a>
\t\t  \t\t\t\t\t\t\t\t\t{% if  proceso.procesoFaena.getAdmiteCombinado %}
\t\t\t \t\t \t\t\t\t\t\t\t<a class=\"dropdown-item\"  
\t\t\t \t\t \t\t\t\t\t\t\t   href=\"{{ path('bd_adm_romanea_articulos_proceso_medium', { proc : proceso.id, fd : faena.id, art : kart }) }}\">
\t\t\t  \t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\">Registrar Salida</button>
\t\t\t  \t\t\t\t\t\t\t\t\t</a>
\t\t  \t\t\t\t\t\t\t\t\t{% endif %}
\t\t  \t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if formsDelete is defined %}
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify fa-1x\"></i></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t \t\t \t\t\t\t\t\t\t<a class=\"dropdown-item {% if trx %} disabled {% endif %}\"  
\t\t \t\t \t\t\t\t\t\t\t   href=\"{{ path('bd_adm_mov_st_edit',{mov : m.id, proc : proceso.id, art : m.art.id , fanday : faena.id}) }}\">
\t\t  \t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm {% if trx %} disabled {% endif %}\">Editar</button>
\t\t  \t\t\t\t\t\t\t\t\t</a>
\t\t  \t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t  \t\t\t\t\t\t\t\t\t<div class=\"dropdown-item\">
\t\t\t  \t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(formsDelete[m.id], {'attr' : {'class' : 'sendDelete'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_widget(formsDelete[m.id].delete, {'attr' : {'data-mov' : m.id, 'data-trx' : trx, 'data-index' : loop.index, 'class' : 'btn btn-sm btn-danger btnDelete'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_end(formsDelete[m.id]) }}
\t\t\t  \t\t\t\t\t\t\t\t\t</div>
\t\t\t  \t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn-warning\" href=\"{{ path('bd_adm_get_detalle_movimientos_proceso', { proc : proceso.id, fd : faena.id, art : kart }) }}\">
\t\t  \t\t\t\t\t\t\t\t\tVer >></a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t{% if totales is defined %}
\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t{% for k, h in headers %}
\t\t\t\t\t\t\t\t{% if h['numeric'] %}
\t\t\t\t\t\t\t\t\t{% set align = 'text-right' %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% set align = 'text-left' %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<td class=\"{{ align }}\">
\t\t\t\t\t\t\t\t{% if totales[k] is defined %}
\t\t\t\t\t\t\t\t\t{{ totales[k] }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tr>
\t\t\t
\t\t\t\t{% endif %}
\t\t\t</tbody>
\t\t</table>
\t{% endif %}
\t<a href=\"{{ path('bd_view_procesos_faena_diaria', {fan : faena.id}) }}\" class=\"btn btn-success\"><< Volver</a>
\t</div>
</div>

\t<div class=\"modal fade top\" id=\"fullHeightModalRight\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
\t  aria-hidden=\"true\">

\t  <div class=\"modal-dialog modal-full-height modal-top\" role=\"document\">


\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title w-100\" id=\"myModalLabel\">Pasos a ejecutar...</h4>
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t          <span aria-hidden=\"true\">&times;</span>
\t        </button>
\t      </div>
\t      <div class=\"modal-body\">
\t        \t<ul>
\t\t\t\t\t{% for aj in proceso.procesoFaena.pasos %}
\t\t\t\t\t\t{% if not aj.eliminado %}
\t\t\t\t\t\t\t\t<li>Paso {{ aj.orden }}: {{ aj.detalle }}
\t\t\t\t\t\t\t\t\t{% if pasos[aj.id] is defined %}
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-check-circle fa-2x\"></i>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-times-circle fa-2x mt-2\"></i>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t        \t</ul>
\t      </div>
\t      <div class=\"modal-footer justify-content-center\">
\t        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
\t      </div>
\t    </div>
\t  </div>
\t</div>

<div class=\"modal fade modal-view-pallets\" id=\"modalLoginForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-50 font-weight-bold\">Pallets activos</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body body-modal-view mx-3\">

      </div>
    </div>
  </div>
</div>
{% endblock fos_user_content %}

{% block javascripts %}

<script type=\"text/javascript\">

\tvar articulosPallet = \$('.select-articulo');
\t\$('.select-tipo').change(function(){
\t\t\t\t\t\t\t\t\t\tvar articulos = \"{{ path('bd_get_articulos_tipo_pallet', { tp : '_TP'}) }}\";
\t\t\t\t\t\t\t\t\t\tvar routArt = articulos.replace('_TP', \$(this).val());
\t\t\t\t\t\t\t\t\t\t  \$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t    url : routArt,
\t\t\t\t\t\t\t\t\t\t\t\t    type: \"POST\",
\t\t\t\t\t\t\t\t\t\t\t\t    success: function(data) 
\t\t\t\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t\t\t\t\t    \t
\t\t\t\t\t\t\t\t\t\t\t\t    \t\tconsole.log(data.length);

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tarticulosPallet.html('');

\t\t\t\t\t\t\t\t\t\t\t                articulosPallet.html('<option>Selecciona...</option>');
\t\t\t\t\t\t\t\t\t\t\t                for (var i = 0, total = data.length; i < total; i++) 
\t\t\t\t\t\t\t\t\t\t\t                {
\t\t\t\t\t\t\t\t\t\t\t                    articulosPallet.append('<option value=\"' + data[i].id + '\">' + data[i].art + '</option>');
\t\t\t\t\t\t\t\t\t\t\t\t    \t\t}
\t\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t\t    failed: function(data){
\t\t\t\t\t\t\t\t\t\t\t\t    \talert('error');
\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t  \t\t});
\t});

\t\$('.view-pallet').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\$('.body-modal-view').html('<div class=\"d-flex justify-content-center\"><div class=\"spinner-border\" role=\"status\"><span class=\"sr-only\">Loading...</span></div></div>');
\t\t\t\t\t\t\t\t\t\t\t\$('.body-modal-view').load(\"{{ path('bd_adm_get_pallet_faena') }}\");
\t\t\t\t\t\t\t\t\t\t\t\$('.modal-view-pallets').modal('show');
\t});

\t\$('.save-pallet').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();

\t\t\t\t\t\t\t\t\t\t\tconst form = \$(this).closest('form');
\t\t\t\t\t\t\t\t\t\t\t\$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t\t\t   {
\t\t\t\t\t\t\t\t\t\t\t\t   \t\tarticulo : \$('.select-articulo').val(),
\t\t\t\t\t\t\t\t\t\t\t\t   \t\ttipo: \$('.select-tipo').val(),
\t\t\t\t\t\t\t\t\t\t\t\t   \t\tcode: \$('.input-code').val()

\t\t\t\t\t\t\t\t\t\t\t\t   },
\t\t\t\t\t\t\t\t\t\t\t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\tif (!data.status)
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\$('#pallet-error').html(data.message);
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\$('#pallet-error').removeClass('d-none');
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\twindow.setTimeout(()=>{\$('#pallet-error').addClass('d-none')}, 3000);
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t   \t\t
\t\t\t\t\t\t\t\t\t\t\t\t   });

\t});

\t\$('.open-pallet').click(function(event){
\t\t\t\t\t\t\t\t\t\t\t\$('.gst-pallet').removeClass('d-none');
\t});

\t\$('.cancel-pallet').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\t\$('.gst-pallet').addClass('d-none');
\t});

\t\$('.next').click(function(event){
\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    message: 'Seguro quitar la cantidad del tunel?',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    size: \"large\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        if (result)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\$('.sendnext').trigger('submit');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t });

\t});


\tvar tipos = \$('.tipos');
\tvar conceptos = \$('.conceptos');
\tvar articulos = \$('.articulos');
\tconceptos.html('');
\tarticulos.html('');
\ttipos.change(function() {
\t  var form = \$(this).closest('form');
\t  \$.ajax({
\t\t\t    url : \"{{ path('bd_change_tipo_movimiento') }}\",
\t\t\t    type: \"POST\",
\t\t\t    data : {proceso: form.find('.proceso').val(), tipoMovimiento: \$(this).val()},
\t\t\t    success: function(data) {
\t\t\t\t\t\tarticulos.html('');
\t\t                conceptos.html('<option>Selecciona...</option>');
\t\t                for (var i = 0, total = data.length; i < total; i++) {
\t\t                    conceptos.append('<option value=\"' + data[i].id + '\">' + data[i].show + '</option>');
\t\t\t    \t\t}
\t\t\t    },
\t\t\t    failed: function(data){
\t\t\t    \talert('error');
\t\t\t    }
\t  \t\t});
\t});

\tconceptos.change(function() {
\t  \$.ajax({
\t\t\t    url : \"{{ path('bd_change_concepto_movimiento') }}\",
\t\t\t    type: \"POST\",
\t\t\t    data : {concepto: \$(this).val()},
\t\t\t    success: function(data) {
\t\t\t\t\t\tarticulos.html('<option value=\"null\">Selecciona...</option>');
\t\t                for (var i = 0, total = data.length; i < total; i++) {
\t\t                    articulos.append('<option value=\"' + data[i].id + '\">' + data[i].show + '</option>');
\t\t\t    \t\t}
\t\t\t    }
\t  \t\t});
\t});


\t\$('.btnDelete').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\tvar route = \"{{ path ('query_consulta_movimiento', {mov: '_MOV', trx : '_TRX'})}}\";
\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tif (btn.data('trx'))
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\tvar ruta = route.replace('_MOV', btn.data('mov')).replace('_TRX', btn.data('trx'));
\t\t\t\t\t\t\t\t\t\t\t\t\$.post(ruta,
\t\t\t\t\t\t\t\t\t\t\t\t\t  function(response){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    message: response.msge,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    size: \"large\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        if (result)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \tvar route = btn.parent().attr('action');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(route,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   function (result){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t if (result.status)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t \t\$('.enviar').trigger('click');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t\t    message: \"Seguro eliminar el item \"+btn.data('index')+\"?\",
\t\t\t\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t\t\t\t        if (result){
\t\t\t\t\t\t\t\t\t\t\t\t        \tvar route = btn.parent().attr('action');
\t\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(route,
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   function (result){
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t if (result.status)
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t {
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t \t\$('.enviar').trigger('click');
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t }
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t}
\t});

\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"{{ path('bd_view_art_proc_fan', {'articulo' : 'id_article'}) }}\"; 
\t\t\t\t\t\t\t\t\turl = url.replace('id_article', \$(this).data('id'));
\t\t\t\t\t\t\t\t\t\$('.modal-body-article').load(url);
\t\t\t\t\t\t\t\t\t\$('#viewArticle').modal('show');
\t});

\t\$('.sender').submit(function (event){
\t\t\t\t\t\t\t\t\t\t event.preventDefault();
\t\t\t\t\t\t\t\t\t\t var form = \$(this);
\t\t\t\t\t\t\t\t\t\t \$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t \t\tform.serialize(),
\t\t\t\t\t\t\t\t\t\t \t\tfunction(data){
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\tif (data.status)
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t{

\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t{

\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}


\t\t\t\t\t\t\t\t\t\t \t\t});
\t\t\t\t\t\t\t\t\t\t
\t});

\t{% if tipo is defined %}
\t\t{% if tipo == 'M' %}
\t\t\$(\".type option[value='{{ tipo }}']\").attr('selected','selected');

\t\t{% endif %}
\t{% endif %}
</script>

{% endblock %}
", "@GestionFaena/faena/adminProcFanDayMedium.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\faena\\adminProcFanDayMedium.html.twig");
    }
}
