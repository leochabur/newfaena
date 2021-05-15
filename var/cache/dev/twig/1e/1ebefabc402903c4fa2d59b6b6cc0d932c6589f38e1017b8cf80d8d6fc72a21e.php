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

/* @GestionFaena/faena/adminProcFanDay.html.twig */
class __TwigTemplate_127e47114a9ae4d897b56d448654d31e22eb662e9bb3bb223755114603690a14 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/faena/adminProcFanDay.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/faena/adminProcFanDay.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/faena/adminProcFanDay.html.twig", 1);
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
        echo "<br>
<hr>
<p class=\"h5 card-title\">
\t\tProceso: ";
        // line 7
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["proceso"]) ? $context["proceso"] : $this->getContext($context, "proceso"))), "html", null, true);
        echo " - Fecha Faena: ";
        echo twig_escape_filter($this->env, (isset($context["faena"]) ? $context["faena"] : $this->getContext($context, "faena")), "html", null, true);
        echo "</p>
<hr>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "flashes", [0 => "errorLoad"], "method"));
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
            echo "\t<div class=\"card\">
\t\t<div class=\"card-header\">
\t\t    <p class=\"h5\">Ingresar Movimiento</p>
\t\t</div>
  \t\t<div class=\"card-body\">
\t\t\t";
            // line 20
            if ((isset($context["errors"]) || array_key_exists("errors", $context))) {
                // line 21
                echo "\t\t\t\t<ul>
\t\t\t\t\t";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 23
                    echo "\t\t\t\t\t    <li class=\"list-group-item list-group-item-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                    echo "</li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "\t\t\t\t</ul>
\t\t\t";
            }
            // line 27
            echo "\t\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoMovimiento", []), 'label');
            echo "
\t\t\t\t\t\t";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoMovimiento", []), 'widget', ["attr" => ["class" => "tipos"]]);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conMovProc", []), 'label', ["label" => "Concepto de Movimiento"]);
            echo "
\t\t\t\t\t\t";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conMovProc", []), 'widget', ["attr" => ["class" => "conceptos"]]);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artProcFaena", []), 'label', ["label" => "Articulo"]);
            echo "
\t\t\t\t\t\t";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artProcFaena", []), 'widget', ["attr" => ["class" => "articulos"]]);
            echo "
\t\t\t\t</div>
\t\t\t\t";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proceso", []), 'widget', ["attr" => ["class" => "proceso"]]);
            echo "
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-sm-12\">
\t\t\t\t\t\t";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", []), 'widget');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8 col-sm-12 text-right\">
\t\t\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#fullHeightModalRight\"><i class=\"far fa-question-circle fa-2x mt-3\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 51
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "automatic", [], "any", true, true)) {
                // line 52
                echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t";
                // line 54
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "automatic", []), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 58
            echo "\t\t\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
\t\t</div>
\t</div>
\t<br>
";
        }
        // line 63
        echo "
";
        // line 64
        if ((isset($context["fatr"]) || array_key_exists("fatr", $context))) {
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "flashes", [0 => "error"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 66
                echo "    <div class=\"alert alert-danger\">
        ";
                // line 67
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "<div class=\"card\">
  <div class=\"card-header\">
    <p class=\"h5\">Movimiento : ";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["movimiento"]) ? $context["movimiento"] : $this->getContext($context, "movimiento")), "html", null, true);
            echo "</p>
  </div>
  <div class=\"card-body\">
\t";
            // line 75
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fatr"]) ? $context["fatr"] : $this->getContext($context, "fatr")), 'form_start', ["attr" => ["class" => "container", "novalidate" => "novalidate"]]);
            echo "
\t\t<ul>
\t\t<li>";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : $this->getContext($context, "fatr")), "procesoFnDay", []), 'widget', ["attr" => ["class" => "form-control-plaintext h5"]]);
            echo "</li>

\t\t<li>";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : $this->getContext($context, "fatr")), "artProcFaena", []), 'widget', ["attr" => ["class" => "form-control-plaintext h5"]]);
            echo "</li>

\t\t<li>";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : $this->getContext($context, "fatr")), "concepto", []), 'widget', ["attr" => ["class" => "form-control-plaintext h5"]]);
            echo "</li>
\t</ul>
\t<hr>
\t";
            // line 84
            if ($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : null), "destino", [], "any", true, true)) {
                // line 85
                echo "\t\t<div class=\"yellow lighten-1\">
\t\t\t";
                // line 86
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : $this->getContext($context, "fatr")), "destino", []), 'label', ["label" => "Proceso destino"]);
                echo "
\t\t\t";
                // line 87
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : $this->getContext($context, "fatr")), "destino", []), 'widget', ["attr" => ["class" => "yellow lighten-1 col-md-6 col-sm-6"]]);
                echo "
\t\t</div>
\t";
            }
            // line 90
            echo "\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : $this->getContext($context, "fatr")), "valores", []), 'label', ["label" => "Valores"]);
            echo "
    ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : $this->getContext($context, "fatr")), "valores", []));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 92
                echo "    \t<div class=\"form-row ";
                if ($this->getAttribute($context["f"], "hidden", [], "any", true, true)) {
                    echo "invisible";
                }
                echo "\">
    \t\t";
                // line 93
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "atributo", []), 'widget', ["attr" => ["class" => "col-md-2 col-sm-2"]]);
                echo "
    \t\t";
                // line 94
                if ($this->getAttribute($context["f"], "unidadMedida", [], "any", true, true)) {
                    // line 95
                    echo "    \t\t\t";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "unidadMedida", []), 'widget', ["attr" => ["class" => "col-md-2 col-sm-2"]]);
                    echo "
    \t\t";
                }
                // line 97
                echo "    \t\t";
                if ($this->getAttribute($context["f"], "entidadExterna", [], "any", true, true)) {
                    // line 98
                    echo "    \t\t\t";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "entidadExterna", []), 'widget', ["attr" => ["class" => "col-md-2 col-sm-2"]]);
                    echo "
    \t\t";
                }
                // line 100
                echo "    \t\t";
                if ($this->getAttribute($context["f"], "valor", [], "any", true, true)) {
                    // line 101
                    echo "    \t\t\t";
                    if ($this->getAttribute($context["f"], "class", [], "any", true, true)) {
                        // line 102
                        echo "    \t\t\t\t";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "class", []), 'widget');
                        echo "
    \t\t\t\t";
                        // line 103
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "valor", []), 'widget', ["attr" => ["class" => "col-md-2 col-sm-2 dte"]]);
                        echo "
    \t\t\t";
                    } else {
                        // line 105
                        echo "    \t\t\t\t";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "valor", []), 'widget', ["attr" => ["class" => "col-md-2 col-sm-2"]]);
                        echo "
    \t\t\t";
                    }
                    // line 106
                    echo "    \t\t\t
    \t\t";
                }
                // line 108
                echo "     \t\t";
                if ($this->getAttribute($context["f"], "hidden", [], "any", true, true)) {
                    // line 109
                    echo "    \t\t\t";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "hidden", []), 'widget');
                    echo "
    \t\t";
                }
                // line 111
                echo "    \t</div>            \t
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "    <div class=\"row\">
    \t<div class=\"col\">
    \t\t";
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : $this->getContext($context, "fatr")), "guardar", []), 'widget');
            echo "
    \t\t<a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_fan_day", ["proc" => $this->getAttribute((isset($context["proceso"]) ? $context["proceso"] : $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute((isset($context["faena"]) ? $context["faena"] : $this->getContext($context, "faena")), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Cancelar</a>
    \t</div>
    </div>
\t";
            // line 119
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fatr"]) ? $context["fatr"] : $this->getContext($context, "fatr")), 'form_end');
            echo "
</div>
</div>
";
        }
        // line 123
        echo "\t";
        if ((isset($context["movimientos"]) || array_key_exists("movimientos", $context))) {
            // line 124
            echo "\t\t\t\t\t\t";
            $context["proced"] = 0;
            // line 125
            echo "\t\t\t\t    \t";
            $context["movim"] = 0;
            // line 126
            echo "\t\t\t\t    \t";
            $context["artic"] = 0;
            // line 127
            echo "\t<div class=\"card\">
\t\t<div class=\"card-header\">
\t    <p class=\"h5\">Movimientos existentes</p>
\t  </div>
  \t\t<div class=\"card-body\">
\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#</th>
\t\t\t\t\t<th>Tipo</th>
\t\t\t\t\t<th>Producto</th>
\t\t\t\t\t<th>Concepto</th>
\t\t\t\t";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["conceptos"]) ? $context["conceptos"] : $this->getContext($context, "conceptos")));
            foreach ($context['_seq'] as $context["_key"] => $context["mov"]) {
                // line 140
                echo "\t\t\t\t\t<th>";
                echo twig_escape_filter($this->env, $context["mov"], "html", null, true);
                echo "</th>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mov'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t    ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["movs"]) ? $context["movs"] : $this->getContext($context, "movs")));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 147
                echo "\t\t    \t<tr>\t
\t\t\t    \t\t<td>";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
\t\t\t    \t\t<td>";
                // line 149
                (($this->getAttribute((isset($context["con"]) ? $context["con"] : null), $context["key"], [], "array", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["con"]) ? $context["con"] : $this->getContext($context, "con")), $context["key"], [], "array"), "mov", []), "html", null, true))) : (print ("")));
                echo "</td>
\t\t\t    \t\t<td>";
                // line 150
                (($this->getAttribute((isset($context["con"]) ? $context["con"] : null), $context["key"], [], "array", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["con"]) ? $context["con"] : $this->getContext($context, "con")), $context["key"], [], "array"), "art", []), "articulo", []), "html", null, true))) : (print ("")));
                echo "</td>
\t\t\t    \t\t<td>";
                // line 151
                (($this->getAttribute((isset($context["con"]) ? $context["con"] : null), $context["key"], [], "array", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["con"]) ? $context["con"] : $this->getContext($context, "con")), $context["key"], [], "array"), "con", []), "html", null, true))) : (print ("")));
                echo "</td>
\t\t\t    \t\t";
                // line 152
                $context["trx"] = 0;
                // line 153
                echo "\t\t\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["conceptos"]) ? $context["conceptos"] : $this->getContext($context, "conceptos")));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo "\t\t\t\t\t    \t
\t\t\t\t\t    \t";
                    // line 154
                    if ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), $context["key"], [], "array", false, true), $context["k"], [], "array", true, true)) {
                        // line 155
                        echo "\t\t\t\t\t\t\t    <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), $context["key"], [], "array"), $context["k"], [], "array"), "data", []), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t";
                        // line 156
                        $context["proced"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), $context["key"], [], "array"), $context["k"], [], "array"), "proc", []);
                        // line 157
                        echo "\t\t\t\t\t\t    \t";
                        $context["movim"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), $context["key"], [], "array"), $context["k"], [], "array"), "mov", []);
                        // line 158
                        echo "\t\t\t\t\t\t    \t";
                        $context["artic"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), $context["key"], [], "array"), $context["k"], [], "array"), "art", []);
                        // line 159
                        echo "\t\t\t\t\t\t    \t";
                        $context["trx"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), $context["key"], [], "array"), $context["k"], [], "array"), "trx", []);
                        // line 160
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 161
                        echo "\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t";
                    }
                    // line 163
                    echo "\t\t\t\t\t    \t
\t\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "\t\t\t\t\t    <td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify fa-1x\"></i></a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
 \t\t \t\t\t\t\t\t\t<a class=\"dropdown-item ";
                // line 168
                if ((isset($context["trx"]) ? $context["trx"] : $this->getContext($context, "trx"))) {
                    echo " disabled ";
                }
                echo "\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_mov_st_edit", ["mov" => (isset($context["movim"]) ? $context["movim"] : $this->getContext($context, "movim")), "proc" => (isset($context["proced"]) ? $context["proced"] : $this->getContext($context, "proced")), "art" => (isset($context["artic"]) ? $context["artic"] : $this->getContext($context, "artic")), "fanday" => $this->getAttribute((isset($context["faena"]) ? $context["faena"] : $this->getContext($context, "faena")), "id", [])]), "html", null, true);
                echo "\">
  \t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm ";
                // line 169
                if ((isset($context["trx"]) ? $context["trx"] : $this->getContext($context, "trx"))) {
                    echo " disabled ";
                }
                echo "\">Editar</button>
  \t\t\t\t\t\t\t\t\t</a>
  \t\t\t\t\t\t\t\t\t";
                // line 171
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 172
                    echo "\t  \t\t\t\t\t\t\t\t\t<div class=\"dropdown-item\">
\t  \t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 173
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute((isset($context["formsDelete"]) ? $context["formsDelete"] : $this->getContext($context, "formsDelete")), $context["value"], [], "array"), 'form_start', ["attr" => ["class" => "sendDelete"]]);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t    \t";
                    // line 174
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formsDelete"]) ? $context["formsDelete"] : $this->getContext($context, "formsDelete")), $context["value"], [], "array"), "delete", []), 'widget', ["attr" => ["data-mov" => $context["value"], "data-trx" => (isset($context["trx"]) ? $context["trx"] : $this->getContext($context, "trx")), "data-index" => $this->getAttribute($context["loop"], "index", []), "class" => "btn btn-sm btn-danger btnDelete"]]);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t    \t";
                    // line 175
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute((isset($context["formsDelete"]) ? $context["formsDelete"] : $this->getContext($context, "formsDelete")), $context["value"], [], "array"), 'form_end');
                    echo "
\t  \t\t\t\t\t\t\t\t\t</div>
\t  \t\t\t\t\t\t\t\t";
                }
                // line 178
                echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t    </td>
\t\t\t</tr>
\t\t    ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "\t\t    <tr class=\"table-warning h5\"> <!--v.decimales-->
\t\t    \t<td colspan=\"4\">TOTALES</td>
\t\t    ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["conceptos"]) ? $context["conceptos"] : $this->getContext($context, "conceptos")));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 186
                echo "\t\t\t    <td class=\"text-right\">
\t\t\t    \t";
                // line 187
                if ($this->getAttribute((isset($context["totales"]) ? $context["totales"] : null), $context["k"], [], "array", true, true)) {
                    // line 188
                    echo "\t\t\t    \t\t";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["totales"]) ? $context["totales"] : $this->getContext($context, "totales")), $context["k"], [], "array"), "total", []) / $this->getAttribute($this->getAttribute((isset($context["totales"]) ? $context["totales"] : $this->getContext($context, "totales")), $context["k"], [], "array"), "cant", [])), 2, ",", ""), "html", null, true);
                    echo "
\t\t\t    \t";
                }
                // line 190
                echo "\t\t\t    </td>
\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "\t\t\t <td></td>
\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t</div>
\t</div>
\t<a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_procesos_faena_diaria", ["fan" => $this->getAttribute((isset($context["faena"]) ? $context["faena"] : $this->getContext($context, "faena")), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success\"><< Volver</a>
\t";
        }
        // line 200
        echo "
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
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["proceso"]) ? $context["proceso"] : $this->getContext($context, "proceso")), "procesoFaena", []), "pasos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["aj"]) {
            // line 217
            echo "\t\t\t\t\t\t";
            if ( !$this->getAttribute($context["aj"], "eliminado", [])) {
                // line 218
                echo "\t\t\t\t\t\t\t<li>Paso ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "orden", []), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aj"], "detalle", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 219
                if ($this->getAttribute((isset($context["pasos"]) ? $context["pasos"] : null), $this->getAttribute($context["aj"], "id", []), [], "array", true, true)) {
                    // line 220
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"far fa-check-circle fa-2x\"></i>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 222
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"far fa-times-circle fa-2x mt-2\"></i>
\t\t\t\t\t\t\t\t";
                }
                // line 224
                echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 226
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "\t        \t</ul>
\t      </div>
\t      <div class=\"modal-footer justify-content-center\">
\t        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
\t      </div>
\t    </div>
\t  </div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 238
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 239
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
        // line 249
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
        // line 267
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
        // line 282
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        if (result){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \tbtn.parent().submit();
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
\t\t\t\t\t\t\t\t\t\t\t\t        \tbtn.parent().submit();
\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t}
\t});

\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 335
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

\t\$( \".dte\" ).inputmask({
mask: '999999999-9',
placeholder: '999999999-9',
showMaskOnHover: true,
showMaskOnFocus: true
});
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/faena/adminProcFanDay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 335,  710 => 282,  692 => 267,  671 => 249,  659 => 239,  650 => 238,  631 => 227,  625 => 226,  621 => 224,  617 => 222,  613 => 220,  611 => 219,  604 => 218,  601 => 217,  597 => 216,  579 => 200,  574 => 198,  566 => 192,  559 => 190,  553 => 188,  551 => 187,  548 => 186,  544 => 185,  540 => 183,  522 => 178,  516 => 175,  512 => 174,  508 => 173,  505 => 172,  503 => 171,  496 => 169,  488 => 168,  483 => 165,  476 => 163,  472 => 161,  469 => 160,  466 => 159,  463 => 158,  460 => 157,  458 => 156,  453 => 155,  451 => 154,  444 => 153,  442 => 152,  438 => 151,  434 => 150,  430 => 149,  426 => 148,  423 => 147,  406 => 146,  400 => 142,  391 => 140,  387 => 139,  373 => 127,  370 => 126,  367 => 125,  364 => 124,  361 => 123,  354 => 119,  348 => 116,  344 => 115,  340 => 113,  333 => 111,  327 => 109,  324 => 108,  320 => 106,  314 => 105,  309 => 103,  304 => 102,  301 => 101,  298 => 100,  292 => 98,  289 => 97,  283 => 95,  281 => 94,  277 => 93,  270 => 92,  266 => 91,  261 => 90,  255 => 87,  251 => 86,  248 => 85,  246 => 84,  240 => 81,  235 => 79,  230 => 77,  225 => 75,  219 => 72,  215 => 70,  206 => 67,  203 => 66,  199 => 65,  197 => 64,  194 => 63,  185 => 58,  178 => 54,  174 => 52,  172 => 51,  163 => 45,  156 => 41,  151 => 39,  147 => 38,  141 => 35,  137 => 34,  131 => 31,  127 => 30,  120 => 27,  116 => 25,  107 => 23,  103 => 22,  100 => 21,  98 => 20,  91 => 15,  89 => 14,  80 => 11,  77 => 10,  73 => 9,  66 => 7,  61 => 4,  52 => 3,  30 => 1,);
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
<p class=\"h5 card-title\">
\t\tProceso: {{ proceso|upper }} - Fecha Faena: {{ faena }}</p>
<hr>
{% for message in app.flashes('errorLoad') %}
\t<div class=\"alert alert-danger\" role=\"alert\">
\t  {{ message }}
\t</div>
{% endfor %}
{% if fatr is not defined %}
\t<div class=\"card\">
\t\t<div class=\"card-header\">
\t\t    <p class=\"h5\">Ingresar Movimiento</p>
\t\t</div>
  \t\t<div class=\"card-body\">
\t\t\t{% if errors is defined %}
\t\t\t\t<ul>
\t\t\t\t\t{% for error in errors %}
\t\t\t\t\t    <li class=\"list-group-item list-group-item-danger\">{{ error.message }}</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t{% endif %}
\t\t\t{{ form_start(form, {'attr' : {'novalidate' : 'novalidate'}}) }}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t{{ form_label(form.tipoMovimiento) }}
\t\t\t\t\t\t{{ form_widget(form.tipoMovimiento, {'attr' : {'class' : 'tipos'}}) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t{{ form_label(form.conMovProc, 'Concepto de Movimiento') }}
\t\t\t\t\t\t{{ form_widget(form.conMovProc, {'attr' : {'class' : 'conceptos'}}) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t{{ form_label(form.artProcFaena, 'Articulo') }}
\t\t\t\t\t\t{{ form_widget(form.artProcFaena, {'attr' : {'class' : 'articulos'}}) }}
\t\t\t\t</div>
\t\t\t\t{{ form_widget(form.proceso, {'attr' : {'class' : 'proceso'}}) }}
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-sm-12\">
\t\t\t\t\t\t{{ form_widget(form.guardar) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8 col-sm-12 text-right\">
\t\t\t\t\t\t<a href=\"#\" data-toggle=\"modal\" data-target=\"#fullHeightModalRight\"><i class=\"far fa-question-circle fa-2x mt-3\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% if form.automatic is defined %}
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t{{ form_widget(form.automatic, {'attr' : {'class' : 'btn btn-warning'}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>
\t<br>
{% endif %}

{% if fatr is defined %}
{% for message in app.flashes('error') %}
    <div class=\"alert alert-danger\">
        {{ message }}
    </div>
{% endfor %}
<div class=\"card\">
  <div class=\"card-header\">
    <p class=\"h5\">Movimiento : {{ movimiento }}</p>
  </div>
  <div class=\"card-body\">
\t{{ form_start(fatr, {'attr':{'class' : 'container', 'novalidate':'novalidate'}}) }}
\t\t<ul>
\t\t<li>{{  form_widget(fatr.procesoFnDay, {'attr' : {'class' : 'form-control-plaintext h5'}}) }}</li>

\t\t<li>{{  form_widget(fatr.artProcFaena, {'attr' : {'class' : 'form-control-plaintext h5'}}) }}</li>

\t\t<li>{{  form_widget(fatr.concepto, {'attr' : {'class' : 'form-control-plaintext h5'}}) }}</li>
\t</ul>
\t<hr>
\t{% if fatr.destino is defined %}
\t\t<div class=\"yellow lighten-1\">
\t\t\t{{ form_label(fatr.destino, 'Proceso destino') }}
\t\t\t{{ form_widget(fatr.destino, {'attr' : {'class' : 'yellow lighten-1 col-md-6 col-sm-6'}}) }}
\t\t</div>
\t{% endif %}
\t{{ form_label(fatr.valores, 'Valores') }}
    {% for f in fatr.valores %}
    \t<div class=\"form-row {% if f.hidden is defined %}invisible{% endif %}\">
    \t\t{{  form_widget(f.atributo, {'attr' : {'class' : 'col-md-2 col-sm-2'}}) }}
    \t\t{%  if f.unidadMedida is defined %}
    \t\t\t{{  form_widget(f.unidadMedida, {'attr' : {'class' : 'col-md-2 col-sm-2'}}) }}
    \t\t{% endif %}
    \t\t{%  if f.entidadExterna is defined %}
    \t\t\t{{  form_widget(f.entidadExterna, {'attr' : {'class' : 'col-md-2 col-sm-2'}}) }}
    \t\t{% endif %}
    \t\t{%  if f.valor is defined %}
    \t\t\t{% if f.class is defined %}
    \t\t\t\t{{ form_widget(f.class) }}
    \t\t\t\t{{  form_widget(f.valor, {'attr' : {'class' : 'col-md-2 col-sm-2 dte'}}) }}
    \t\t\t{% else %}
    \t\t\t\t{{  form_widget(f.valor, {'attr' : {'class' : 'col-md-2 col-sm-2'}}) }}
    \t\t\t{% endif %}    \t\t\t
    \t\t{% endif %}
     \t\t{% if f.hidden is defined %}
    \t\t\t{{ form_widget(f.hidden) }}
    \t\t{% endif %}
    \t</div>            \t
    {% endfor %}
    <div class=\"row\">
    \t<div class=\"col\">
    \t\t{{ form_widget(fatr.guardar) }}
    \t\t<a href=\"{{ path('bd_adm_proc_fan_day',{proc: proceso.id, fd: faena.id }) }}\" class=\"btn btn-danger\">Cancelar</a>
    \t</div>
    </div>
\t{{ form_end(fatr) }}
</div>
</div>
{% endif %}
\t{% if movimientos is defined %}
\t\t\t\t\t\t{% set proced = 0 %}
\t\t\t\t    \t{% set movim = 0 %}
\t\t\t\t    \t{% set artic = 0 %}
\t<div class=\"card\">
\t\t<div class=\"card-header\">
\t    <p class=\"h5\">Movimientos existentes</p>
\t  </div>
  \t\t<div class=\"card-body\">
\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#</th>
\t\t\t\t\t<th>Tipo</th>
\t\t\t\t\t<th>Producto</th>
\t\t\t\t\t<th>Concepto</th>
\t\t\t\t{% for mov in conceptos %}
\t\t\t\t\t<th>{{ mov }}</th>
\t\t\t\t{% endfor %}
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t    {% for key, value in movs %}
\t\t    \t<tr>\t
\t\t\t    \t\t<td>{{ loop.index }}</td>
\t\t\t    \t\t<td>{{ con[key] is defined?con[key].mov:'' }}</td>
\t\t\t    \t\t<td>{{ con[key] is defined?con[key].art.articulo:'' }}</td>
\t\t\t    \t\t<td>{{ con[key] is defined?con[key].con:'' }}</td>
\t\t\t    \t\t{% set trx =  0 %}
\t\t\t\t\t    {% for k, v in conceptos %}\t\t\t\t\t    \t
\t\t\t\t\t    \t{% if datos[key][k] is defined %}
\t\t\t\t\t\t\t    <td>{{ datos[key][k].data }}</td>
\t\t\t\t\t\t\t\t{% set proced =  datos[key][k].proc %}
\t\t\t\t\t\t    \t{% set movim =  datos[key][k].mov %}
\t\t\t\t\t\t    \t{% set artic =  datos[key][k].art %}
\t\t\t\t\t\t    \t{% set trx =  datos[key][k].trx %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t    \t
\t\t\t\t\t    {% endfor %}
\t\t\t\t\t    <td class=\"text-center\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify fa-1x\"></i></a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
 \t\t \t\t\t\t\t\t\t<a class=\"dropdown-item {% if trx %} disabled {% endif %}\"  href=\"{{ path('bd_adm_mov_st_edit',{mov : movim, proc : proced, art : artic , fanday : faena.id}) }}\">
  \t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm {% if trx %} disabled {% endif %}\">Editar</button>
  \t\t\t\t\t\t\t\t\t</a>
  \t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t  \t\t\t\t\t\t\t\t\t<div class=\"dropdown-item\">
\t  \t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(formsDelete[value], {'attr' : {'class' : 'sendDelete'}}) }}
\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_widget(formsDelete[value].delete, {'attr' : {'data-mov' : value, 'data-trx' : trx, 'data-index' : loop.index, 'class' : 'btn btn-sm btn-danger btnDelete'}}) }}
\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_end(formsDelete[value]) }}
\t  \t\t\t\t\t\t\t\t\t</div>
\t  \t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t    </td>
\t\t\t</tr>
\t\t    {% endfor %}
\t\t    <tr class=\"table-warning h5\"> <!--v.decimales-->
\t\t    \t<td colspan=\"4\">TOTALES</td>
\t\t    {% for k, v in conceptos %}
\t\t\t    <td class=\"text-right\">
\t\t\t    \t{% if totales[k] is defined %}
\t\t\t    \t\t{{ (totales[k].total/totales[k].cant)|number_format(2, ',', '') }}
\t\t\t    \t{% endif %}
\t\t\t    </td>
\t\t\t {% endfor %}
\t\t\t <td></td>
\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t</div>
\t</div>
\t<a href=\"{{ path('bd_view_procesos_faena_diaria', {fan : faena.id}) }}\" class=\"btn btn-success\"><< Volver</a>
\t{% endif %}

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
\t\t\t\t\t\t\t<li>Paso {{ aj.orden }}: {{ aj.detalle }}
\t\t\t\t\t\t\t\t{% if pasos[aj.id] is defined %}
\t\t\t\t\t\t\t\t\t<i class=\"far fa-check-circle fa-2x\"></i>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<i class=\"far fa-times-circle fa-2x mt-2\"></i>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t        \t</ul>
\t      </div>
\t      <div class=\"modal-footer justify-content-center\">
\t        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
\t      </div>
\t    </div>
\t  </div>
\t</div>

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        if (result){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \tbtn.parent().submit();
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
\t\t\t\t\t\t\t\t\t\t\t\t        \tbtn.parent().submit();
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

\t\$( \".dte\" ).inputmask({
mask: '999999999-9',
placeholder: '999999999-9',
showMaskOnHover: true,
showMaskOnFocus: true
});
</script>

{% endblock %}
", "@GestionFaena/faena/adminProcFanDay.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\faena\\adminProcFanDay.html.twig");
    }
}
