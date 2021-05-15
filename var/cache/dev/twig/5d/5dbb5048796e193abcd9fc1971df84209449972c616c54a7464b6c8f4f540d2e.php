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

/* @GestionFaena/faena/clasificarArticuloBase.html.twig */
class __TwigTemplate_2b6a27527be7722fd0bf16c45268bae172a00bd2d2a977093b66b1cd5087554a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/faena/clasificarArticuloBase.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GestionFaena/faena/clasificarArticuloBase.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/faena/clasificarArticuloBase.html.twig", 1);
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
<p class=\"h5 card-title\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["proceso"] ?? $this->getContext($context, "proceso")), "html", null, true);
        echo " - Fecha: ";
        echo twig_escape_filter($this->env, ($context["faena"] ?? $this->getContext($context, "faena")), "html", null, true);
        echo "</p>

<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tArticulo : ";
        // line 11
        echo twig_escape_filter($this->env, ($context["articulo"] ?? $this->getContext($context, "articulo")), "html", null, true);
        echo " ";
        if (($this->getAttribute($this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "procesoFaena", []), "id", []) != 14)) {
            echo "- Stock: <span id=\"stock\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["stock"] ?? $this->getContext($context, "stock")), "cantidad", []), "html", null, true);
            echo "</span> ";
        }
        // line 12
        echo "\t\t</div>
  \t</div>
\t<div class=\"card-body\">
\t\t<table class=\"table table-bordered table-sm table-fit\">
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t";
        // line 18
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
            // line 19
            echo "\t\t\t\t\t";
            if ((0 == $this->getAttribute($context["loop"], "index0", []) % 2)) {
                // line 20
                echo "\t\t\t\t\t    ";
                $context["color"] = " light-blue lighten-3";
                // line 21
                echo "\t\t\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t\t\t";
                $context["color"] = "light-blue lighten-2";
                echo "\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t<tr class=\"";
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo "\">
\t\t\t\t\t\t<td class=\"align-middle\" rowspan=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ccat"] ?? $this->getContext($context, "ccat")), $context["key"], [], "array"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cates"] ?? $this->getContext($context, "cates")), $context["key"], [], "array"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 28
            $context["count"] = 0;
            // line 29
            echo "
\t\t\t\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["art"]);
            foreach ($context['_seq'] as $context["ks"] => $context["sub"]) {
                echo " 

\t\t\t\t\t\t\t";
                // line 32
                if ((($context["count"] ?? $this->getContext($context, "count")) == 0)) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t<td class=\"align-middle\" rowspan=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["csub"] ?? $this->getContext($context, "csub")), $context["key"], [], "array"), $context["ks"], [], "array"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["subcates"] ?? $this->getContext($context, "subcates")), $context["ks"], [], "array"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                    // line 36
                    $context["count"] = 1;
                    // line 37
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t<tr class=\"";
                    echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\" rowspan=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["csub"] ?? $this->getContext($context, "csub")), $context["key"], [], "array"), $context["ks"], [], "array"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["subcates"] ?? $this->getContext($context, "subcates")), $context["ks"], [], "array"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t\t";
                $context["count2"] = 0;
                // line 44
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sub"]);
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t";
                    $context["idV"] = 0;
                    // line 46
                    echo "\t\t\t\t\t\t\t\t";
                    $context["valV"] = "";
                    // line 47
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["v"], 1, [], "array") != null)) {
                        // line 48
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["idV"] = $this->getAttribute($this->getAttribute($context["v"], 1, [], "array"), "id", []);
                        // line 49
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["valV"] = $this->getAttribute($this->getAttribute($context["v"], 1, [], "array"), "data", []);
                        // line 50
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["count2"] ?? $this->getContext($context, "count2")) == 0)) {
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "nombreResumido", []), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"field-amount form-control form-control-sm align-center\" value=\"";
                        // line 58
                        echo twig_escape_filter($this->env, ($context["valV"] ?? $this->getContext($context, "valV")), "html", null, true);
                        echo "\"/>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-idv=\"";
                        // line 61
                        echo twig_escape_filter($this->env, ($context["idV"] ?? $this->getContext($context, "idV")), "html", null, true);
                        echo "\" data-proc=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "html", null, true);
                        echo "\" data-art=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), "html", null, true);
                        echo "\"  class=\"btn btn-sm btn-warning update\">\tGuardar
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                        // line 67
                        $context["count2"] = 1;
                        // line 68
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t<tr class=\"";
                        echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "nombreResumido", []), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"mt-1 field-amount form-control form-control-sm align-center\" value=\"";
                        // line 76
                        echo twig_escape_filter($this->env, ($context["valV"] ?? $this->getContext($context, "valV")), "html", null, true);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-idv=\"";
                        // line 79
                        echo twig_escape_filter($this->env, ($context["idV"] ?? $this->getContext($context, "idV")), "html", null, true);
                        echo "\" data-proc=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "html", null, true);
                        echo "\" data-art=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), "html", null, true);
                        echo "\" class=\"btn btn-sm btn-warning update\">\tGuardar
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                    }
                    // line 86
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ks'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
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
        // line 89
        echo "
\t\t\t</tbody>
\t\t</table>
\t<a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_fan_day", ["proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-success\"><< Volver</a>
\t</div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
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
        // line 111
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
        // line 129
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

\t\$('.field-amount').keyup(function(event) {
\t\t\t\t\t\t\t\t\t    var keycode = (event.keyCode ? event.keyCode : event.which);
\t\t\t\t\t\t\t\t\t    var input = \$(this);
\t\t\t\t\t\t\t\t\t    if(keycode == 13)
\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t    \tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tvar parent = btn.parent().parent();
\t\t\t\t\t\t\t\t\t\t\tvar input = parent.find('button');\t
\t\t\t\t\t\t\t\t\t\t\tinput.focus();
\t            \t\t\t\t\t\t\t//alert(input.data('art'));
\t            \t\t\t\t\t\t}
\t        });

\t\$('.update').click(function(event) {
\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\tvar parent = btn.parent().parent();
\t\t\t\t\t\t\t\t\t\tvar input = parent.find('input');\t\t\t\t\t\t\t\t\t   

\t\t\t\t\t\t\t\t\t    if(\$.isNumeric(input.val()))
\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t    \tbtn.addClass('invisible');

\t\t\t\t\t\t\t\t\t\t\tvar route = \"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_romaneo_articulos", ["proc" => "_PROC", "art" => "_ART", "val" => "_VAL", "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", []), "base" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", [])]), "html", null, true);
        echo "\";

\t\t\t\t\t\t\t\t\t\t\tvar ruta = route.replace('_PROC', btn.data('proc')).replace('_ART', btn.data('art')).replace('_VAL', btn.data('idv'));
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\$.post(ruta,
\t\t\t\t\t\t\t\t\t\t\t\t   {data : input.val(), palletiza: 0},
\t\t\t\t\t\t\t\t\t\t\t\t  function(response)
\t\t\t\t\t\t\t\t\t\t\t\t  {
\t\t\t\t\t\t\t\t\t\t\t\t  \tif (response.status)
\t\t\t\t\t\t\t\t\t\t\t\t  \t{
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tbtn.next().focus();
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tbtn.parent().html('<i class=\"far fa-check-circle fa-2x\"></i>');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#stock').html(response.stb);

\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  \telse
\t\t\t\t\t\t\t\t\t\t\t\t  \t{
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tbtn.removeClass('invisible');
\t\t\t\t\t\t\t\t\t\t\t\t  \t\talert(response.message);
\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\talert('Valor invalido '+input.val());
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t});

\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 195
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
        // line 221
        if ((isset($context["tipo"]) || array_key_exists("tipo", $context))) {
            // line 222
            echo "\t\t";
            if ((($context["tipo"] ?? $this->getContext($context, "tipo")) == "M")) {
                // line 223
                echo "\t\t\$(\".type option[value='";
                echo twig_escape_filter($this->env, ($context["tipo"] ?? $this->getContext($context, "tipo")), "html", null, true);
                echo "']\").attr('selected','selected');

\t\t";
            }
            // line 226
            echo "\t";
        }
        // line 227
        echo "</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@GestionFaena/faena/clasificarArticuloBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 227,  482 => 226,  475 => 223,  472 => 222,  470 => 221,  441 => 195,  406 => 163,  369 => 129,  348 => 111,  336 => 101,  327 => 100,  310 => 92,  305 => 89,  291 => 88,  285 => 87,  279 => 86,  265 => 79,  259 => 76,  251 => 71,  245 => 69,  242 => 68,  240 => 67,  227 => 61,  221 => 58,  213 => 53,  210 => 52,  207 => 51,  204 => 50,  201 => 49,  198 => 48,  195 => 47,  192 => 46,  189 => 45,  184 => 44,  181 => 43,  175 => 40,  171 => 39,  166 => 38,  163 => 37,  161 => 36,  156 => 34,  151 => 33,  149 => 32,  142 => 30,  139 => 29,  137 => 28,  132 => 26,  128 => 25,  123 => 24,  117 => 22,  114 => 21,  111 => 20,  108 => 19,  91 => 18,  83 => 12,  75 => 11,  65 => 6,  61 => 4,  52 => 3,  30 => 1,);
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
<p class=\"h5 card-title\">{{ proceso }} - Fecha: {{ faena }}</p>

<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tArticulo : {{ articulo }} {% if proceso.procesoFaena.id != 14 %}- Stock: <span id=\"stock\">{{ stock.cantidad }}</span> {% endif %}
\t\t</div>
  \t</div>
\t<div class=\"card-body\">
\t\t<table class=\"table table-bordered table-sm table-fit\">
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
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"field-amount form-control form-control-sm align-center\" value=\"{{ valV }}\"/>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-idv=\"{{ idV }}\" data-proc=\"{{ proceso.id }}\" data-art=\"{{ v[0].id }}\"  class=\"btn btn-sm btn-warning update\">\tGuardar
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% set count2 = 1 %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<tr class=\"{{ color }}\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{{ v[0].nombreResumido }}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"mt-1 field-amount form-control form-control-sm align-center\" value=\"{{ valV }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-idv=\"{{ idV }}\" data-proc=\"{{ proceso.id }}\" data-art=\"{{ v[0].id }}\" class=\"btn btn-sm btn-warning update\">\tGuardar
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}

\t\t\t</tbody>
\t\t</table>
\t<a href=\"{{ path('bd_adm_proc_fan_day', {proc : proceso.id, fd : faena.id}) }}\" class=\"btn btn-success\"><< Volver</a>
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

\t\$('.field-amount').keyup(function(event) {
\t\t\t\t\t\t\t\t\t    var keycode = (event.keyCode ? event.keyCode : event.which);
\t\t\t\t\t\t\t\t\t    var input = \$(this);
\t\t\t\t\t\t\t\t\t    if(keycode == 13)
\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t    \tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tvar parent = btn.parent().parent();
\t\t\t\t\t\t\t\t\t\t\tvar input = parent.find('button');\t
\t\t\t\t\t\t\t\t\t\t\tinput.focus();
\t            \t\t\t\t\t\t\t//alert(input.data('art'));
\t            \t\t\t\t\t\t}
\t        });

\t\$('.update').click(function(event) {
\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\tvar parent = btn.parent().parent();
\t\t\t\t\t\t\t\t\t\tvar input = parent.find('input');\t\t\t\t\t\t\t\t\t   

\t\t\t\t\t\t\t\t\t    if(\$.isNumeric(input.val()))
\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t    \tbtn.addClass('invisible');

\t\t\t\t\t\t\t\t\t\t\tvar route = \"{{ path ('bd_adm_proc_romaneo_articulos', {proc: '_PROC', art : '_ART', val : '_VAL', fd : faena.id, base : articulo.id})}}\";

\t\t\t\t\t\t\t\t\t\t\tvar ruta = route.replace('_PROC', btn.data('proc')).replace('_ART', btn.data('art')).replace('_VAL', btn.data('idv'));
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\$.post(ruta,
\t\t\t\t\t\t\t\t\t\t\t\t   {data : input.val(), palletiza: 0},
\t\t\t\t\t\t\t\t\t\t\t\t  function(response)
\t\t\t\t\t\t\t\t\t\t\t\t  {
\t\t\t\t\t\t\t\t\t\t\t\t  \tif (response.status)
\t\t\t\t\t\t\t\t\t\t\t\t  \t{
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tbtn.next().focus();
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tbtn.parent().html('<i class=\"far fa-check-circle fa-2x\"></i>');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#stock').html(response.stb);

\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  \telse
\t\t\t\t\t\t\t\t\t\t\t\t  \t{
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tbtn.removeClass('invisible');
\t\t\t\t\t\t\t\t\t\t\t\t  \t\talert(response.message);
\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\talert('Valor invalido '+input.val());
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t
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
", "@GestionFaena/faena/clasificarArticuloBase.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\faena\\clasificarArticuloBase.html.twig");
    }
}
