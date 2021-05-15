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

/* GestionFaenaBundle:faena:adminProcFanDayRomanea.html.twig */
class __TwigTemplate_99753db9433fb3606c32d46ff52399914264d42510785311551b3c086df28805 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:adminProcFanDayRomanea.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:adminProcFanDayRomanea.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:faena:adminProcFanDayRomanea.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<style type=\"text/css\">
.rotate {
    height: 140px;
    white-space: nowrap;
\twidth: 0;
\t
    > div {
      transform: 
        translate(0px, 110px)
        rotate(-90deg);
    }
    > div > span {
      border-bottom: 1px solid #ccc;
      padding: 5px 10px;
    }
  }
</style>
<br>
<hr>
<p class=\"h5 card-title\">Proceso: ";
        // line 23
        echo twig_escape_filter($this->env, ($context["proceso"] ?? $this->getContext($context, "proceso")), "html", null, true);
        echo " - Fecha: ";
        echo twig_escape_filter($this->env, ($context["faena"] ?? $this->getContext($context, "faena")), "html", null, true);
        echo "</p>


<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tArticulos pendientes de clasificar
\t\t\t<hr>
\t\t</div>
\t\t\t<ul class=\"list-group\">
\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clasificables"] ?? $this->getContext($context, "clasificables")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 34
            echo "\t\t\t\t\t  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
\t\t\t\t\t    ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nombre", []), "html", null, true);
            echo ":  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "cantidad", []), "html", null, true);
            echo " 
\t\t\t\t\t    <span class=\"badge\" title=\"Clasificar\">
\t\t\t\t\t    \t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clasifiar_articulo_base", ["proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", []), "art" => $this->getAttribute($context["c"], "idArt", [])]), "html", null, true);
            echo "\"><i class=\"far fa-calendar-check fa-2x\"></i></a></span>
\t\t\t\t\t  </li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t</ul>
  \t</div>
\t<div class=\"card-body\">
\t\t<span class=\"h5\">
\t\t\tRegistrar Salidas
\t\t</span>
\t\t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["ventas"] ?? $this->getContext($context, "ventas")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t<div class=\"form-row\">
\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["ventas"] ?? $this->getContext($context, "ventas")), "conceptoVenta", []), 'widget', ["attr" => ["class" => "form-control col-lg-3"]]);
        echo "
\t\t</div>
\t\t<div class=\"form-row\">
\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["ventas"] ?? $this->getContext($context, "ventas")), "asignar", []), 'widget');
        echo "
\t\t</div>
\t\t";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["ventas"] ?? $this->getContext($context, "ventas")), 'form_end');
        echo "
\t</div>
</div>
<br>
<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tExistencias Totales
\t\t</div>
  \t</div>
\t<div class=\"card-body\">
\t\t<a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_procesos_faena_diaria", ["fan" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-success\"><< Volver</a>
\t\t<table class=\"table table-bordered table-sm table-fit table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th>Stock Inicial</th>
\t\t\t\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["conceptos"] ?? $this->getContext($context, "conceptos")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 73
            echo "\t\t\t\t\t\t<th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "resumido", []), "html", null, true);
            echo "</th>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t\t\t<th>Produccion</th>
\t\t\t\t\t<th>Stock Final</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
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
        foreach ($context['_seq'] as $context["key"] => $context["art"]) {
            // line 82
            echo "\t\t\t\t\t";
            if ((0 == $this->getAttribute($context["loop"], "index0", []) % 2)) {
                // line 83
                echo "\t\t\t\t\t    ";
                $context["color"] = " light-blue lighten-3";
                // line 84
                echo "\t\t\t\t\t";
            } else {
                // line 85
                echo "\t\t\t\t\t\t";
                $context["color"] = "light-blue lighten-2";
                echo "\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t<tr class=\"";
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo "\">
\t\t\t\t\t\t<td class=\"align-middle\" rowspan=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ccat"] ?? $this->getContext($context, "ccat")), $context["key"], [], "array"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cates"] ?? $this->getContext($context, "cates")), $context["key"], [], "array"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 91
            $context["count"] = 0;
            // line 92
            echo "
\t\t\t\t\t\t";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["art"]);
            foreach ($context['_seq'] as $context["ks"] => $context["sub"]) {
                echo " 

\t\t\t\t\t\t\t";
                // line 95
                if ((($context["count"] ?? $this->getContext($context, "count")) == 0)) {
                    // line 96
                    echo "\t\t\t\t\t\t\t\t<td class=\"align-middle\" rowspan=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["csub"] ?? $this->getContext($context, "csub")), $context["key"], [], "array"), $context["ks"], [], "array"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["subcates"] ?? $this->getContext($context, "subcates")), $context["ks"], [], "array"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                    // line 99
                    $context["count"] = 1;
                    // line 100
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t<tr class=\"";
                    echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\" rowspan=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["csub"] ?? $this->getContext($context, "csub")), $context["key"], [], "array"), $context["ks"], [], "array"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["subcates"] ?? $this->getContext($context, "subcates")), $context["ks"], [], "array"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                }
                // line 106
                echo "\t\t\t\t\t\t\t";
                $context["count2"] = 0;
                // line 107
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sub"]);
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t";
                    $context["idV"] = 0;
                    // line 109
                    echo "\t\t\t\t\t\t\t\t";
                    $context["valV"] = "";
                    // line 110
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["v"], 1, [], "array") != null)) {
                        // line 111
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["idV"] = $this->getAttribute($this->getAttribute($context["v"], 1, [], "array"), "id", []);
                        // line 112
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["valV"] = $this->getAttribute($this->getAttribute($context["v"], 1, [], "array"), "data", []);
                        // line 113
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 114
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["count2"] ?? $this->getContext($context, "count2")) == 0)) {
                        // line 115
                        echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 116
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "nombreResumido", []), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 119
                        if ($this->getAttribute(($context["si"] ?? null), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                            // line 120
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["si"] ?? $this->getContext($context, "si")), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "html", null, true);
                            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 122
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        // line 125
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["conceptos"] ?? $this->getContext($context, "conceptos")));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            // line 126
                            echo "\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 127
                            if ($this->getAttribute($this->getAttribute(($context["ventasTotales"] ?? null), $this->getAttribute($context["c"], "id", []), [], "array", false, true), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                                // line 128
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\" value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ventasTotales"] ?? $this->getContext($context, "ventasTotales")), $this->getAttribute($context["c"], "id", []), [], "array"), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "html", null, true);
                                echo "\"/>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 130
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\"/>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 132
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 135
                        echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly type=\"text\" data-idv=\"";
                        // line 138
                        echo twig_escape_filter($this->env, ($context["idV"] ?? $this->getContext($context, "idV")), "html", null, true);
                        echo "\" data-proc=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "html", null, true);
                        echo "\" data-art=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), "html", null, true);
                        echo "\"  class=\"form-control form-control-sm align-center update\" value=\"";
                        echo twig_escape_filter($this->env, ($context["valV"] ?? $this->getContext($context, "valV")), "html", null, true);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>\t
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 145
                        if ($this->getAttribute(($context["sf"] ?? null), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                            // line 146
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"form-control form-control-sm align-center col-lg-10\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["sf"] ?? $this->getContext($context, "sf")), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "html", null, true);
                            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 148
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"form-control form-control-sm align-center col-lg-10\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                        // line 152
                        $context["count2"] = 1;
                        // line 153
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        // line 154
                        echo "\t\t\t\t\t\t\t\t\t<tr class=\"";
                        echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 156
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "nombreResumido", []), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 159
                        if ($this->getAttribute(($context["si"] ?? null), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                            // line 160
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["si"] ?? $this->getContext($context, "si")), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "html", null, true);
                            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 162
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 164
                        echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        // line 165
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["conceptos"] ?? $this->getContext($context, "conceptos")));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            // line 166
                            echo "\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 167
                            if ($this->getAttribute($this->getAttribute(($context["ventasTotales"] ?? null), $this->getAttribute($context["c"], "id", []), [], "array", false, true), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                                // line 168
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\" value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ventasTotales"] ?? $this->getContext($context, "ventasTotales")), $this->getAttribute($context["c"], "id", []), [], "array"), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "html", null, true);
                                echo "\"/>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 170
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\"/>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 172
                            echo "
\t\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 175
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly type=\"text\" data-idv=\"";
                        // line 178
                        echo twig_escape_filter($this->env, ($context["idV"] ?? $this->getContext($context, "idV")), "html", null, true);
                        echo "\" data-proc=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "html", null, true);
                        echo "\" data-art=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), "html", null, true);
                        echo "\" class=\"form-control form-control-sm align-center update\" value=\"";
                        echo twig_escape_filter($this->env, ($context["valV"] ?? $this->getContext($context, "valV")), "html", null, true);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 185
                        if ($this->getAttribute(($context["sf"] ?? null), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                            // line 186
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"form-control form-control-sm align-center col-lg-10\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["sf"] ?? $this->getContext($context, "sf")), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "html", null, true);
                            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 188
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"form-control form-control-sm align-center col-lg-10\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 190
                        echo "\t\t\t\t\t\t\t\t\t\t</td>\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                    }
                    // line 193
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ks'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "
\t\t\t</tbody>
\t\t</table>
\t
\t</div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 207
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 208
        echo "
<script type=\"text/javascript\">
\tvar tipos = \$('.tipos');
\tvar conceptos = \$('.conceptos');
\tvar articulos = \$('.articulos');
\tconceptos.html('');
\tarticulos.html('');
\ttipos.change(function() {
\t  var form = \$(this).closest('form');
\t  \$.ajax({
\t\t\t    url : \"";
        // line 218
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
        // line 236
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


\t\$('.update').keypress(function(event) {
\t\t\t\t\t\t\t\t\t    var keycode = (event.keyCode ? event.keyCode : event.which);
\t\t\t\t\t\t\t\t\t    var input = \$(this);
\t\t\t\t\t\t\t\t\t    if(keycode == '13')
\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t\t\tvar route = \"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_romaneo_articulos", ["proc" => "_PROC", "art" => "_ART", "val" => "_VAL", "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", []), "base" => 0]), "html", null, true);
        echo "\";
\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tvar ruta = route.replace('_PROC', btn.data('proc')).replace('_ART', btn.data('art')).replace('_VAL', btn.data('idv'));
\t\t\t\t\t\t\t\t\t\t\tinput.parent().siblings('div').html('');
\t\t\t\t\t\t\t\t\t\t\t\$.post(ruta,
\t\t\t\t\t\t\t\t\t\t\t\t   {data : btn.val()},
\t\t\t\t\t\t\t\t\t\t\t\t  function(response)
\t\t\t\t\t\t\t\t\t\t\t\t  {
\t\t\t\t\t\t\t\t\t\t\t\t  \tif (response.status)
\t\t\t\t\t\t\t\t\t\t\t\t  \t{
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tinput.parent().siblings('div').html('<i class=\"far fa-check-circle fa-2x\"></i>');
\t\t\t\t\t\t\t\t\t\t\t\t\t\tinput.trigger(\"keypress\", [9]);
\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  \telse
\t\t\t\t\t\t\t\t\t\t\t\t  \t{
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tinput.parent().siblings('div').html('<i class=\"far fa-times-circle fa-2x\"></i>');
\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t
\t});

\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 278
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
        // line 304
        if ((isset($context["tipo"]) || array_key_exists("tipo", $context))) {
            // line 305
            echo "\t\t";
            if ((($context["tipo"] ?? $this->getContext($context, "tipo")) == "M")) {
                // line 306
                echo "\t\t\$(\".type option[value='";
                echo twig_escape_filter($this->env, ($context["tipo"] ?? $this->getContext($context, "tipo")), "html", null, true);
                echo "']\").attr('selected','selected');

\t\t";
            }
            // line 309
            echo "\t";
        }
        // line 310
        echo "</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:faena:adminProcFanDayRomanea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  673 => 310,  670 => 309,  663 => 306,  660 => 305,  658 => 304,  629 => 278,  602 => 254,  581 => 236,  560 => 218,  548 => 208,  539 => 207,  520 => 196,  506 => 195,  500 => 194,  494 => 193,  489 => 190,  485 => 188,  479 => 186,  477 => 185,  461 => 178,  456 => 175,  448 => 172,  444 => 170,  438 => 168,  436 => 167,  433 => 166,  429 => 165,  426 => 164,  422 => 162,  416 => 160,  414 => 159,  408 => 156,  402 => 154,  399 => 153,  397 => 152,  393 => 150,  389 => 148,  383 => 146,  381 => 145,  365 => 138,  360 => 135,  352 => 132,  348 => 130,  342 => 128,  340 => 127,  337 => 126,  333 => 125,  330 => 124,  326 => 122,  320 => 120,  318 => 119,  312 => 116,  309 => 115,  306 => 114,  303 => 113,  300 => 112,  297 => 111,  294 => 110,  291 => 109,  288 => 108,  283 => 107,  280 => 106,  274 => 103,  270 => 102,  265 => 101,  262 => 100,  260 => 99,  255 => 97,  250 => 96,  248 => 95,  241 => 93,  238 => 92,  236 => 91,  231 => 89,  227 => 88,  222 => 87,  216 => 85,  213 => 84,  210 => 83,  207 => 82,  190 => 81,  182 => 75,  173 => 73,  169 => 72,  158 => 64,  144 => 53,  139 => 51,  133 => 48,  128 => 46,  120 => 40,  111 => 37,  104 => 35,  101 => 34,  97 => 33,  82 => 23,  61 => 4,  52 => 3,  30 => 1,);
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
.rotate {
    height: 140px;
    white-space: nowrap;
\twidth: 0;
\t
    > div {
      transform: 
        translate(0px, 110px)
        rotate(-90deg);
    }
    > div > span {
      border-bottom: 1px solid #ccc;
      padding: 5px 10px;
    }
  }
</style>
<br>
<hr>
<p class=\"h5 card-title\">Proceso: {{ proceso }} - Fecha: {{ faena }}</p>


<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tArticulos pendientes de clasificar
\t\t\t<hr>
\t\t</div>
\t\t\t<ul class=\"list-group\">
\t\t\t\t{% for c in clasificables %}
\t\t\t\t\t  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
\t\t\t\t\t    {{ c.nombre }}:  {{ c.cantidad }} 
\t\t\t\t\t    <span class=\"badge\" title=\"Clasificar\">
\t\t\t\t\t    \t\t<a href=\"{{ path('clasifiar_articulo_base', {proc : proceso.id, fd : faena.id, art : c.idArt})}}\"><i class=\"far fa-calendar-check fa-2x\"></i></a></span>
\t\t\t\t\t  </li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
  \t</div>
\t<div class=\"card-body\">
\t\t<span class=\"h5\">
\t\t\tRegistrar Salidas
\t\t</span>
\t\t{{ form_start(ventas, {'attr':{'novalidate':'novalidate'}})  }}
\t\t<div class=\"form-row\">
\t\t\t{{ form_widget(ventas.conceptoVenta, {'attr' : {'class' : 'form-control col-lg-3'}}) }}
\t\t</div>
\t\t<div class=\"form-row\">
\t\t\t{{ form_widget(ventas.asignar) }}
\t\t</div>
\t\t{{ form_end(ventas) }}
\t</div>
</div>
<br>
<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tExistencias Totales
\t\t</div>
  \t</div>
\t<div class=\"card-body\">
\t\t<a href=\"{{ path('bd_view_procesos_faena_diaria', {fan : faena.id}) }}\" class=\"btn btn-success\"><< Volver</a>
\t\t<table class=\"table table-bordered table-sm table-fit table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th>Stock Inicial</th>
\t\t\t\t\t{% for c in conceptos %}
\t\t\t\t\t\t<th>{{ c.resumido }}</th>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<th>Produccion</th>
\t\t\t\t\t<th>Stock Final</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t{% for key, art in articulos %}
\t\t\t\t\t{% if loop.index0 is divisible by(2) %}
\t\t\t\t\t    {% set color = ' light-blue lighten-3' %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% set color = 'light-blue lighten-2' %}\t\t\t\t\t\t
\t\t\t\t\t{% endif %}
\t\t\t\t\t<tr class=\"{{ color }}\">
\t\t\t\t\t\t<td class=\"align-middle\" rowspan=\"{{ ccat[key] }}\">
\t\t\t\t\t\t\t{{  cates[key] }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% set count = 0 %}

\t\t\t\t\t\t{% for ks, sub in art %} 

\t\t\t\t\t\t\t{% if count == 0 %}
\t\t\t\t\t\t\t\t<td class=\"align-middle\" rowspan=\"{{ csub[key][ks] }}\">
\t\t\t\t\t\t\t\t\t{{ subcates[ks] }}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% set count = 1 %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<tr class=\"{{ color }}\">
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\" rowspan=\"{{ csub[key][ks] }}\">
\t\t\t\t\t\t\t\t\t\t{{ subcates[ks] }}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% set count2 = 0 %}
\t\t\t\t\t\t\t{% for k, v in sub %}
\t\t\t\t\t\t\t\t{% set idV = 0 %}
\t\t\t\t\t\t\t\t{% set valV = '' %}
\t\t\t\t\t\t\t\t{% if v[1] != null %}
\t\t\t\t\t\t\t\t\t{% set idV = v[1].id %}
\t\t\t\t\t\t\t\t\t{% set valV = v[1].data %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if count2 == 0 %}
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{{ v[0].nombreResumido }}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{% if si[v[0].id]  is defined%}
\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\" value=\"{{ si[v[0].id] }}\"/>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t{% for c in conceptos %}
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t{% if ventasTotales[c.id][v[0].id] is defined %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\" value=\"{{ ventasTotales[c.id][v[0].id] }}\"/>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\"/>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly type=\"text\" data-idv=\"{{ idV }}\" data-proc=\"{{ proceso.id }}\" data-art=\"{{ v[0].id }}\"  class=\"form-control form-control-sm align-center update\" value=\"{{ valV }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>\t
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{% if sf[v[0].id]  is defined%}
\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"form-control form-control-sm align-center col-lg-10\" value=\"{{ sf[v[0].id] }}\"/>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"form-control form-control-sm align-center col-lg-10\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% set count2 = 1 %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<tr class=\"{{ color }}\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{{ v[0].nombreResumido }}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{% if si[v[0].id]  is defined%}
\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\" value=\"{{ si[v[0].id] }}\"/>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t{% for c in conceptos %}
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t{% if ventasTotales[c.id][v[0].id] is defined %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\" value=\"{{ ventasTotales[c.id][v[0].id] }}\"/>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm align-center col-lg-10\"/>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly type=\"text\" data-idv=\"{{ idV }}\" data-proc=\"{{ proceso.id }}\" data-art=\"{{ v[0].id }}\" class=\"form-control form-control-sm align-center update\" value=\"{{ valV }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{% if sf[v[0].id]  is defined%}
\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"form-control form-control-sm align-center col-lg-10\" value=\"{{ sf[v[0].id] }}\"/>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"form-control form-control-sm align-center col-lg-10\" value=\"0\"/>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</td>\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}

\t\t\t</tbody>
\t\t</table>
\t
\t</div>
</div>



{% endblock fos_user_content %}

{% block javascripts %}

<script type=\"text/javascript\">
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


\t\$('.update').keypress(function(event) {
\t\t\t\t\t\t\t\t\t    var keycode = (event.keyCode ? event.keyCode : event.which);
\t\t\t\t\t\t\t\t\t    var input = \$(this);
\t\t\t\t\t\t\t\t\t    if(keycode == '13')
\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t\t\tvar route = \"{{ path ('bd_adm_proc_romaneo_articulos', {proc: '_PROC', art : '_ART', val : '_VAL', fd : faena.id, base : 0})}}\";
\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tvar ruta = route.replace('_PROC', btn.data('proc')).replace('_ART', btn.data('art')).replace('_VAL', btn.data('idv'));
\t\t\t\t\t\t\t\t\t\t\tinput.parent().siblings('div').html('');
\t\t\t\t\t\t\t\t\t\t\t\$.post(ruta,
\t\t\t\t\t\t\t\t\t\t\t\t   {data : btn.val()},
\t\t\t\t\t\t\t\t\t\t\t\t  function(response)
\t\t\t\t\t\t\t\t\t\t\t\t  {
\t\t\t\t\t\t\t\t\t\t\t\t  \tif (response.status)
\t\t\t\t\t\t\t\t\t\t\t\t  \t{
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tinput.parent().siblings('div').html('<i class=\"far fa-check-circle fa-2x\"></i>');
\t\t\t\t\t\t\t\t\t\t\t\t\t\tinput.trigger(\"keypress\", [9]);
\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  \telse
\t\t\t\t\t\t\t\t\t\t\t\t  \t{
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tinput.parent().siblings('div').html('<i class=\"far fa-times-circle fa-2x\"></i>');
\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t
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
", "GestionFaenaBundle:faena:adminProcFanDayRomanea.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/faena/adminProcFanDayRomanea.html.twig");
    }
}
