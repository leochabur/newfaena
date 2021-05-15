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
class __TwigTemplate_2db33102fd40382292a788ed800ed0c70b9d0e36dbdf7fbf5def6cd1417f5d6f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/faena/adminProcFanDay.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 4
        echo "<br>
<hr>
<p class=\"h5 card-title\">Proceso: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["proceso"]) ? $context["proceso"] : null), "html", null, true);
        echo " - Fecha: ";
        echo twig_escape_filter($this->env, (isset($context["faena"]) ? $context["faena"] : null), "html", null, true);
        echo "</p>
<hr>
";
        // line 8
        if ( !(isset($context["fatr"]) || array_key_exists("fatr", $context))) {
            // line 9
            echo "\t";
            if ((isset($context["errors"]) || array_key_exists("errors", $context))) {
                // line 10
                echo "\t\t<ul>
\t\t\t";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 12
                    echo "\t\t\t    <li class=\"list-group-item list-group-item-danger\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                    echo "</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "\t\t</ul>
\t";
            }
            // line 16
            echo "\t";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
\t<div class=\"row container\">
\t\t<div class=\"col\">
\t\t\t\t";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tipoMovimiento", []), 'label');
            echo "
\t\t\t\t";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tipoMovimiento", []), 'widget', ["attr" => ["class" => "tipos"]]);
            echo "
\t\t</div>
\t\t<div class=\"col\">
\t\t\t\t";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "conMovProc", []), 'label', ["label" => "Concepto de Movimiento"]);
            echo "
\t\t\t\t";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "conMovProc", []), 'widget', ["attr" => ["class" => "conceptos"]]);
            echo "
\t\t</div>
\t\t<div class=\"col\">
\t\t\t\t";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "artProcFaena", []), 'label', ["label" => "Articulo"]);
            echo "
\t\t\t\t";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "artProcFaena", []), 'widget', ["attr" => ["class" => "articulos"]]);
            echo "
\t\t</div>
\t\t";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "proceso", []), 'widget', ["attr" => ["class" => "proceso"]]);
            echo "
\t</div>
\t<div class=\"row container\">
\t\t<div class=\"col\">
\t\t\t\t";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "guardar", []), 'widget');
            echo "
\t\t</div>
\t</div>
\t";
            // line 37
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
            echo "
";
        }
        // line 39
        echo "
";
        // line 40
        if ((isset($context["fatr"]) || array_key_exists("fatr", $context))) {
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "flashes", [0 => "error"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 42
                echo "    <div class=\"alert alert-danger\">
        ";
                // line 43
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "<div class=\"card\">
  <div class=\"card-header\">
    <p class=\"h5\">Movimiento : ";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["movimiento"]) ? $context["movimiento"] : null), "html", null, true);
            echo "</p>
  </div>
  <div class=\"card-body\">
\t";
            // line 51
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fatr"]) ? $context["fatr"] : null), 'form_start', ["attr" => ["class" => "container", "novalidate" => "novalidate"]]);
            echo "
\t\t<ul>
\t\t<li>";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : null), "procesoFnDay", []), 'widget', ["attr" => ["class" => "form-control-plaintext h5"]]);
            echo "</li>

\t\t<li>";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : null), "artProcFaena", []), 'widget', ["attr" => ["class" => "form-control-plaintext h5"]]);
            echo "</li>

\t\t<li>";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : null), "concepto", []), 'widget', ["attr" => ["class" => "form-control-plaintext h5"]]);
            echo "</li>
\t</ul>
\t<hr>
\t";
            // line 60
            if ($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : null), "destino", [], "any", true, true)) {
                // line 61
                echo "\t\t";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : null), "destino", []), 'label', ["label" => "Proceso destino"]);
                echo "
\t\t";
                // line 62
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : null), "destino", []), 'widget', ["attr" => ["class" => "col-md-6 col-sm-6"]]);
                echo "
\t";
            }
            // line 64
            echo "\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : null), "valores", []), 'label', ["label" => "Valores"]);
            echo "
    ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : null), "valores", []));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 66
                echo "    \t<div class=\"form-row\">
    \t\t";
                // line 67
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "atributo", []), 'widget', ["attr" => ["class" => "col-md-2 col-sm-2"]]);
                echo "
    \t\t";
                // line 68
                if ($this->getAttribute($context["f"], "unidadMedida", [], "any", true, true)) {
                    // line 69
                    echo "    \t\t\t";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "unidadMedida", []), 'widget', ["attr" => ["class" => "col-md-2 col-sm-2"]]);
                    echo "
    \t\t";
                }
                // line 71
                echo "    \t\t";
                if ($this->getAttribute($context["f"], "entidadExterna", [], "any", true, true)) {
                    // line 72
                    echo "    \t\t\t";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "entidadExterna", []), 'widget', ["attr" => ["class" => "col-md-2 col-sm-2"]]);
                    echo "
    \t\t";
                }
                // line 74
                echo "    \t\t";
                if ($this->getAttribute($context["f"], "valor", [], "any", true, true)) {
                    // line 75
                    echo "    \t\t\t";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "valor", []), 'widget', ["attr" => ["class" => "col-md-2 col-sm-2"]]);
                    echo "
    \t\t";
                }
                // line 77
                echo "    \t</div>            \t
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "    <div class=\"row\">
    \t<div class=\"col\">
    \t\t";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["fatr"]) ? $context["fatr"] : null), "guardar", []), 'widget');
            echo "
    \t\t<a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_fan_day", ["proc" => $this->getAttribute((isset($context["proceso"]) ? $context["proceso"] : null), "id", []), "fd" => $this->getAttribute((isset($context["faena"]) ? $context["faena"] : null), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Cancelar</a>
    \t</div>
    </div>
\t";
            // line 85
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fatr"]) ? $context["fatr"] : null), 'form_end');
            echo "
</div>
</div>
";
        }
        // line 89
        echo "\t";
        if ((isset($context["movimientos"]) || array_key_exists("movimientos", $context))) {
            // line 90
            echo "\t\t\t\t\t\t";
            $context["proced"] = 0;
            // line 91
            echo "\t\t\t\t    \t";
            $context["movim"] = 0;
            // line 92
            echo "\t\t\t\t    \t";
            $context["artic"] = 0;
            // line 93
            echo "\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#</th>
\t\t\t\t\t<th>Tipo</th>
\t\t\t\t\t<th>Producto</th>
\t\t\t\t\t<th>Concepto</th>
\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["conceptos"]) ? $context["conceptos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mov"]) {
                // line 101
                echo "\t\t\t\t\t<th>";
                echo twig_escape_filter($this->env, $context["mov"], "html", null, true);
                echo "</th>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mov'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t\t\t\t<th></th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t    ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["movs"]) ? $context["movs"] : null));
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
                // line 109
                echo "\t\t    \t<tr>\t
\t\t\t    \t\t<td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "</td>
\t\t\t    \t\t<td>";
                // line 111
                (($this->getAttribute((isset($context["con"]) ? $context["con"] : null), $context["key"], [], "array", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["con"]) ? $context["con"] : null), $context["key"], [], "array"), "mov", []), "html", null, true))) : (print ("")));
                echo "</td>
\t\t\t    \t\t<td>";
                // line 112
                (($this->getAttribute((isset($context["con"]) ? $context["con"] : null), $context["key"], [], "array", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["con"]) ? $context["con"] : null), $context["key"], [], "array"), "art", []), "articulo", []), "html", null, true))) : (print ("")));
                echo "</td>
\t\t\t    \t\t<td>";
                // line 113
                (($this->getAttribute((isset($context["con"]) ? $context["con"] : null), $context["key"], [], "array", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["con"]) ? $context["con"] : null), $context["key"], [], "array"), "con", []), "html", null, true))) : (print ("")));
                echo "</td>
\t\t\t    \t\t";
                // line 114
                $context["trx"] = 0;
                // line 115
                echo "\t\t\t\t\t    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["conceptos"]) ? $context["conceptos"] : null));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo "\t\t\t\t\t    \t
\t\t\t\t\t    \t";
                    // line 116
                    if ($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), $context["key"], [], "array", false, true), $context["k"], [], "array", true, true)) {
                        // line 117
                        echo "\t\t\t\t\t\t\t    <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), $context["key"], [], "array"), $context["k"], [], "array"), "data", []), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t\t\t";
                        // line 118
                        $context["proced"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), $context["key"], [], "array"), $context["k"], [], "array"), "proc", []);
                        // line 119
                        echo "\t\t\t\t\t\t    \t";
                        $context["movim"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), $context["key"], [], "array"), $context["k"], [], "array"), "mov", []);
                        // line 120
                        echo "\t\t\t\t\t\t    \t";
                        $context["artic"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), $context["key"], [], "array"), $context["k"], [], "array"), "art", []);
                        // line 121
                        echo "\t\t\t\t\t\t    \t";
                        $context["trx"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), $context["key"], [], "array"), $context["k"], [], "array"), "trx", []);
                        // line 122
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 123
                        echo "\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t";
                    }
                    // line 125
                    echo "\t\t\t\t\t    \t
\t\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "\t\t\t\t\t    <td class=\"align-middle\">
\t\t\t\t\t    \t<a href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_mov_st_edit", ["mov" => (isset($context["movim"]) ? $context["movim"] : null), "proc" => (isset($context["proced"]) ? $context["proced"] : null), "art" => (isset($context["artic"]) ? $context["artic"] : null), "fanday" => $this->getAttribute((isset($context["faena"]) ? $context["faena"] : null), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success\">Editar</a>
\t\t\t\t\t    </td>
\t\t\t\t\t    <td class=\"align-middle\">
\t\t\t\t\t    \t\t\t\t\t\t";
                // line 131
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute((isset($context["formsDelete"]) ? $context["formsDelete"] : null), $context["value"], [], "array"), 'form_start', ["attr" => ["class" => "sendDelete"]]);
                echo "
\t\t\t\t\t\t\t\t\t\t    \t";
                // line 132
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formsDelete"]) ? $context["formsDelete"] : null), $context["value"], [], "array"), "delete", []), 'widget', ["attr" => ["data-mov" => $context["value"], "data-trx" => (isset($context["trx"]) ? $context["trx"] : null), "data-index" => $this->getAttribute($context["loop"], "index", []), "class" => "btn btn-sm btn-danger btnDelete"]]);
                echo "
\t\t\t\t\t\t\t\t\t\t    \t";
                // line 133
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute((isset($context["formsDelete"]) ? $context["formsDelete"] : null), $context["value"], [], "array"), 'form_end');
                echo "
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
            // line 137
            echo "\t\t    <tr class=\"table-warning h5\"> <!--v.decimales-->
\t\t    \t<td>TOTALES</td>
\t\t    \t<td></td>
\t\t    \t<td></td>
\t\t    \t<td></td>
\t\t    ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["conceptos"]) ? $context["conceptos"] : null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 143
                echo "\t\t\t    <td>
\t\t\t    \t";
                // line 144
                if ($this->getAttribute((isset($context["totales"]) ? $context["totales"] : null), $context["k"], [], "array", true, true)) {
                    // line 145
                    echo "\t\t\t    \t\t";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["totales"]) ? $context["totales"] : null), $context["k"], [], "array"), "total", []) / $this->getAttribute($this->getAttribute((isset($context["totales"]) ? $context["totales"] : null), $context["k"], [], "array"), "cant", [])), 2, ",", ""), "html", null, true);
                    echo "
\t\t\t    \t";
                }
                // line 147
                echo "\t\t\t    </td>
\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "\t\t\t <td></td>
\t\t\t <td></td>
\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<a href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_procesos_faena_diaria", ["fan" => $this->getAttribute((isset($context["faena"]) ? $context["faena"] : null), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-warning\"><< Volver</a>
\t";
        }
        // line 156
        echo "
";
    }

    // line 159
    public function block_javascripts($context, array $blocks = [])
    {
        // line 160
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
        // line 170
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
        // line 188
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
        // line 203
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
        // line 256
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
</script>

";
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
        return array (  576 => 256,  520 => 203,  502 => 188,  481 => 170,  469 => 160,  466 => 159,  461 => 156,  456 => 154,  449 => 149,  442 => 147,  436 => 145,  434 => 144,  431 => 143,  427 => 142,  420 => 137,  402 => 133,  398 => 132,  394 => 131,  388 => 128,  385 => 127,  378 => 125,  374 => 123,  371 => 122,  368 => 121,  365 => 120,  362 => 119,  360 => 118,  355 => 117,  353 => 116,  346 => 115,  344 => 114,  340 => 113,  336 => 112,  332 => 111,  328 => 110,  325 => 109,  308 => 108,  301 => 103,  292 => 101,  288 => 100,  279 => 93,  276 => 92,  273 => 91,  270 => 90,  267 => 89,  260 => 85,  254 => 82,  250 => 81,  246 => 79,  239 => 77,  233 => 75,  230 => 74,  224 => 72,  221 => 71,  215 => 69,  213 => 68,  209 => 67,  206 => 66,  202 => 65,  197 => 64,  192 => 62,  187 => 61,  185 => 60,  179 => 57,  174 => 55,  169 => 53,  164 => 51,  158 => 48,  154 => 46,  145 => 43,  142 => 42,  138 => 41,  136 => 40,  133 => 39,  128 => 37,  122 => 34,  115 => 30,  110 => 28,  106 => 27,  100 => 24,  96 => 23,  90 => 20,  86 => 19,  79 => 16,  75 => 14,  66 => 12,  62 => 11,  59 => 10,  56 => 9,  54 => 8,  47 => 6,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@GestionFaena/faena/adminProcFanDay.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\faena\\adminProcFanDay.html.twig");
    }
}
