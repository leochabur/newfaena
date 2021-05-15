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

/* GestionFaenaBundle:faena:detalleMovimientosProceso.html.twig */
class __TwigTemplate_36448159dd129a6f2db0ba0e261226b5d59a515238e221d8f985c436e202a6e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:detalleMovimientosProceso.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:detalleMovimientosProceso.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:faena:detalleMovimientosProceso.html.twig", 1);
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
\tProceso: ";
        // line 7
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["proceso"] ?? $this->getContext($context, "proceso"))), "html", null, true);
        echo " - Fecha Faena: ";
        echo twig_escape_filter($this->env, ($context["faena"] ?? $this->getContext($context, "faena")), "html", null, true);
        echo "
</p>
<hr>

<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tDetalle de Movimientos
\t\t\t<hr>
\t\t</div>
    \t";
        // line 35
        echo "  \t</div>
\t<div class=\"card-body\">
\t";
        // line 37
        if ((isset($context["headers"]) || array_key_exists("headers", $context))) {
            // line 38
            echo "\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#</th>
\t\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? $this->getContext($context, "headers")));
            foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
                // line 43
                echo "\t\t\t\t\t\t<th>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "data", [], "array"), "html", null, true);
                echo "</th>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t";
            // line 50
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
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 51
                echo "\t\t\t\t\t";
                if ( !$this->getAttribute($context["m"], "proc", [])) {
                    // line 52
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t";
                    // line 54
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? $this->getContext($context, "headers")));
                    foreach ($context['_seq'] as $context["k"] => $context["h"]) {
                        // line 55
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["h"], "numeric", [], "array")) {
                            // line 56
                            echo "\t\t\t\t\t\t\t\t";
                            $context["align"] = "text-right";
                            // line 57
                            echo "\t\t\t\t\t\t\t";
                        } else {
                            // line 58
                            echo "\t\t\t\t\t\t\t\t";
                            $context["align"] = "text-left";
                            // line 59
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 60
                        echo "\t\t\t\t\t\t\t<td class=\"";
                        echo twig_escape_filter($this->env, ($context["align"] ?? $this->getContext($context, "align")), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t";
                        // line 61
                        if ($this->getAttribute($context["m"], $context["k"], [], "array", true, true)) {
                            // line 62
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], $context["k"], [], "array"), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                        }
                        // line 64
                        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['h'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "\t\t\t\t\t\t";
                    $context["trx"] = $this->getAttribute($context["m"], "trx", []);
                    // line 67
                    echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 68
                    if ((isset($context["formsDelete"]) || array_key_exists("formsDelete", $context))) {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify fa-1x\"></i></a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 71
                        if ( !$this->getAttribute($this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "procesoFaena", []), "isTransito", [])) {
                            // line 72
                            echo "\t\t \t\t \t\t\t\t\t\t\t<a class=\"dropdown-item ";
                            if (($context["trx"] ?? $this->getContext($context, "trx"))) {
                                echo " disabled ";
                            }
                            echo "\"  
\t\t \t\t \t\t\t\t\t\t\t   href=\"";
                            // line 73
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_mov_st_edit", ["mov" => $this->getAttribute($context["m"], "id", []), "proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "art" => $this->getAttribute($this->getAttribute($context["m"], "art", []), "id", []), "fanday" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", [])]), "html", null, true);
                            echo "\">
\t\t  \t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm ";
                            // line 74
                            if (($context["trx"] ?? $this->getContext($context, "trx"))) {
                                echo " disabled ";
                            }
                            echo "\">Editar</button>
\t\t  \t\t\t\t\t\t\t\t\t</a>
\t\t  \t\t\t\t\t\t\t\t";
                        } elseif ( !$this->getAttribute(                        // line 76
$context["m"], "proc", [])) {
                            // line 77
                            echo "
\t\t \t\t \t\t\t\t\t\t";
                            // line 81
                            echo "\t\t  \t\t\t\t\t\t\t\t";
                        }
                        // line 82
                        echo "\t  \t\t\t\t\t\t\t\t\t";
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                            // line 83
                            echo "\t\t  \t\t\t\t\t\t\t\t\t<div class=\"dropdown-item\">
\t\t  \t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 84
                            echo                             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["formsDelete"] ?? $this->getContext($context, "formsDelete")), $this->getAttribute($context["m"], "id", []), [], "array"), 'form_start', ["attr" => ["class" => "sendDelete"]]);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t    \t";
                            // line 85
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formsDelete"] ?? $this->getContext($context, "formsDelete")), $this->getAttribute($context["m"], "id", []), [], "array"), "delete", []), 'widget', ["attr" => ["data-mov" => $this->getAttribute($context["m"], "id", []), "data-trx" => ($context["trx"] ?? $this->getContext($context, "trx")), "data-index" => $this->getAttribute($context["loop"], "index", []), "class" => "btn btn-sm btn-danger btnDelete"]]);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t    \t";
                            // line 86
                            echo                             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["formsDelete"] ?? $this->getContext($context, "formsDelete")), $this->getAttribute($context["m"], "id", []), [], "array"), 'form_end');
                            echo "
\t\t  \t\t\t\t\t\t\t\t\t</div>
\t\t  \t\t\t\t\t\t\t\t";
                        }
                        // line 89
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                // line 94
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t\t\t";
            if ((isset($context["totales"]) || array_key_exists("totales", $context))) {
                echo "\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? $this->getContext($context, "headers")));
                foreach ($context['_seq'] as $context["k"] => $context["h"]) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["h"], "numeric", [], "array")) {
                        // line 100
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["align"] = "text-right";
                        // line 101
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["align"] = "text-left";
                        // line 103
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 104
                    echo "\t\t\t\t\t\t\t\t<td class=\"";
                    echo twig_escape_filter($this->env, ($context["align"] ?? $this->getContext($context, "align")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 105
                    if ($this->getAttribute(($context["totales"] ?? null), $context["k"], [], "array", true, true)) {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["totales"] ?? $this->getContext($context, "totales")), $context["k"], [], "array"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['h'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                echo "\t\t\t\t\t\t</tr>
\t\t\t
\t\t\t\t";
            }
            // line 113
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 116
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_fan_day", ["proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-success\"><< Volver</a>
\t</div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        echo "
<script type=\"text/javascript\">

\t\$('.nextproc').click(function (event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\tvar a = \$(this);
\t\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t    message: 'Seguro enviar a GESTIONAR CAMARAS el item '+a.data('index')+'?',
\t\t\t\t\t\t\t\t\t\t\t    size: \"large\",
\t\t\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t\t\t        if (result)
\t\t\t\t\t\t\t\t\t\t\t        {
\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(a.attr('href'),
\t\t\t\t\t\t\t\t\t\t\t        \t\t   function (data){\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t if (data.status)
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t {
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t \tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t }
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t else{
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t \talert(data.message);
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t }
\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t});
\t});

\t\$('.btnDelete').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\tvar route = \"";
        // line 164
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   function (data){\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t if (data.status)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t \tlocation.reload();
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
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t \tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t }
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t}
\t});

\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 232
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
        // line 258
        if ((isset($context["tipo"]) || array_key_exists("tipo", $context))) {
            // line 259
            echo "\t\t";
            if ((($context["tipo"] ?? $this->getContext($context, "tipo")) == "M")) {
                // line 260
                echo "\t\t\$(\".type option[value='";
                echo twig_escape_filter($this->env, ($context["tipo"] ?? $this->getContext($context, "tipo")), "html", null, true);
                echo "']\").attr('selected','selected');

\t\t";
            }
            // line 263
            echo "\t";
        }
        // line 264
        echo "</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:faena:detalleMovimientosProceso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 264,  498 => 263,  491 => 260,  488 => 259,  486 => 258,  457 => 232,  386 => 164,  345 => 125,  336 => 124,  318 => 116,  313 => 113,  308 => 110,  301 => 108,  295 => 106,  293 => 105,  288 => 104,  285 => 103,  282 => 102,  279 => 101,  276 => 100,  273 => 99,  269 => 98,  262 => 95,  248 => 94,  243 => 91,  239 => 89,  233 => 86,  229 => 85,  225 => 84,  222 => 83,  219 => 82,  216 => 81,  213 => 77,  211 => 76,  204 => 74,  200 => 73,  193 => 72,  191 => 71,  187 => 69,  185 => 68,  182 => 67,  179 => 66,  172 => 64,  166 => 62,  164 => 61,  159 => 60,  156 => 59,  153 => 58,  150 => 57,  147 => 56,  144 => 55,  140 => 54,  136 => 53,  133 => 52,  130 => 51,  113 => 50,  106 => 45,  97 => 43,  93 => 42,  87 => 38,  85 => 37,  81 => 35,  66 => 7,  61 => 4,  52 => 3,  30 => 1,);
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
\tProceso: {{ proceso|upper }} - Fecha Faena: {{ faena }}
</p>
<hr>

<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tDetalle de Movimientos
\t\t\t<hr>
\t\t</div>
    \t{#{ form_start(formDetalle) }}
    \t<div class=\"form-row\">
    \t\t<div class=\"col-3\">
    \t\t\t\t{{ form_label(formDetalle.tipoMovimiento) }}
    \t\t\t\t{{ form_widget(formDetalle.tipoMovimiento, {'attr' : {'class' : 'type'}}) }}
    \t\t</div>
    \t\t<div class=\"col-3\">
    \t\t\t\t{{ form_label(formDetalle.articulos) }}
    \t\t\t\t{{ form_widget(formDetalle.articulos) }}
    \t\t</div>
    \t\t<div class=\"col\">
    \t\t\t<div class=\"mt-4\">
    \t\t\t\t{{ form_widget(formDetalle.load, {'attr' : {'class' : 'btn btn-success btn-sm enviar'}}) }}
    \t\t\t</div>
    \t\t\t\t
    \t\t</div>
    \t</div>
    \t{{ form_end(formDetalle) }#}
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
\t\t\t\t{% for m in body %}
\t\t\t\t\t{% if not m.proc %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ loop.index }}</td>
\t\t\t\t\t\t{% for k, h in headers %}
\t\t\t\t\t\t\t{% if h['numeric'] %}
\t\t\t\t\t\t\t\t{% set align = 'text-right' %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{% set align = 'text-left' %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<td class=\"{{ align }}\">
\t\t\t\t\t\t\t\t{% if m[k] is defined %}
\t\t\t\t\t\t\t\t\t{{ m[k] }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% set trx = m.trx %}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if formsDelete is defined %}
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fas fa-align-justify fa-1x\"></i></a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t{% if not proceso.procesoFaena.isTransito %}
\t\t \t\t \t\t\t\t\t\t\t<a class=\"dropdown-item {% if trx %} disabled {% endif %}\"  
\t\t \t\t \t\t\t\t\t\t\t   href=\"{{ path('bd_adm_mov_st_edit',{mov : m.id, proc : proceso.id, art : m.art.id , fanday : faena.id}) }}\">
\t\t  \t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm {% if trx %} disabled {% endif %}\">Editar</button>
\t\t  \t\t\t\t\t\t\t\t\t</a>
\t\t  \t\t\t\t\t\t\t\t{% elseif not m.proc %}

\t\t \t\t \t\t\t\t\t\t{#\t<a class=\"dropdown-item btn btn-warning btn-sm nextproc\" data-index=\"{{ loop.index }}\" 
\t\t \t\t \t\t\t\t\t\t\t   href=\"{{ path('bd_adm_next_move', { id : m.id}) }}\">Enviar a {{ proceso.procesoFaena.procesosDestinoDefault }}
\t\t  \t\t\t\t\t\t\t\t\t</a>#}
\t\t  \t\t\t\t\t\t\t\t{% endif %}
\t  \t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t  \t\t\t\t\t\t\t\t\t<div class=\"dropdown-item\">
\t\t  \t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(formsDelete[m.id], {'attr' : {'class' : 'sendDelete'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_widget(formsDelete[m.id].delete, {'attr' : {'data-mov' : m.id, 'data-trx' : trx, 'data-index' : loop.index, 'class' : 'btn btn-sm btn-danger btnDelete'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_end(formsDelete[m.id]) }}
\t\t  \t\t\t\t\t\t\t\t\t</div>
\t\t  \t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t{% if totales is defined %}\t\t\t
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
\t<a href=\"{{ path('bd_adm_proc_fan_day', { proc : proceso.id, fd : faena.id}) }}\" class=\"btn btn-success\"><< Volver</a>
\t</div>
</div>



{% endblock fos_user_content %}

{% block javascripts %}

<script type=\"text/javascript\">

\t\$('.nextproc').click(function (event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\tvar a = \$(this);
\t\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t    message: 'Seguro enviar a GESTIONAR CAMARAS el item '+a.data('index')+'?',
\t\t\t\t\t\t\t\t\t\t\t    size: \"large\",
\t\t\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t\t\t        if (result)
\t\t\t\t\t\t\t\t\t\t\t        {
\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(a.attr('href'),
\t\t\t\t\t\t\t\t\t\t\t        \t\t   function (data){\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t if (data.status)
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t {
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t \tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t }
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t else{
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t \talert(data.message);
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t }
\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t});
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   function (data){\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t if (data.status)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t \tlocation.reload();
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
\t\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\t\t\t \tlocation.reload();
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
", "GestionFaenaBundle:faena:detalleMovimientosProceso.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/faena/detalleMovimientosProceso.html.twig");
    }
}
