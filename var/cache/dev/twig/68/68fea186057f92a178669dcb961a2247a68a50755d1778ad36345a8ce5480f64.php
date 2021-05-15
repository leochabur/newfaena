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

/* GestionFaenaBundle:faena:registrarVentasAP.html.twig */
class __TwigTemplate_2453cdc569733ddcc1db8fcc5d72457adc1820064ad9058864f26b7d9a494b01 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:registrarVentasAP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:registrarVentasAP.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:faena:registrarVentasAP.html.twig", 1);
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

.table-container-x 
{
\tmax-width: 100%;
\toverflow-x: scroll;
}

.table-container-y 
{
\tmax-height: 600px;
\toverflow-y: scroll;
}

.sticky 
{
  position: sticky;
  top: 0;
  background: #ccc;
  z-index:9999;
}

table thead tr th
{
\tbackground: #ccc;
}

table td
{
\tmin-width:100px;
\tbackground: #ccc;
}

.col0
{
\tbackground: #ccc;
\tposition: sticky;
\ttop:0;
\tleft:0;
\tz-index: 9999;
}
.sticky2
{
\tposition: sticky;
\tleft: 0;
\tz-index: 9999;
  \tbackground: #fff;
}

</style>


<br>
<hr>
<p class=\"h5 card-title\">";
        // line 58
        echo twig_escape_filter($this->env, ($context["proceso"] ?? $this->getContext($context, "proceso")), "html", null, true);
        echo " - Fecha: ";
        echo twig_escape_filter($this->env, ($context["faena"] ?? $this->getContext($context, "faena")), "html", null, true);
        echo "</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_out_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "out_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "out_container"));

        // line 61
        echo "<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tConcepto : <span id=\"\">";
        // line 64
        echo twig_escape_filter($this->env, ($context["concepto"] ?? $this->getContext($context, "concepto")), "html", null, true);
        echo "</span>
\t\t</div>
  \t</div>
\t<div class=\"card-body\">
\t\t<a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_fan_day", ["proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-success\"><< Volver</a>
\t\t<br>
\t\t<div class='table-container-x'>
\t\t<div class='table-container-y'>
\t\t\t<table id=\"myTable\" class=\"table table-bordered table-hover table-sm table-striped\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\" col0\">

\t\t\t\t\t\t</th>
\t\t\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cates"] ?? $this->getContext($context, "cates")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 79
            echo "\t\t\t\t\t\t\t<th class=\"text-center sticky\" colspan=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ccat"] ?? $this->getContext($context, "ccat")), $this->getAttribute($context["c"], "id", []), [], "array"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 80
            echo twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"col0\">

\t\t\t\t\t\t</th>
\t\t\t\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["csub"] ?? $this->getContext($context, "csub")));
        foreach ($context['_seq'] as $context["kc"] => $context["sub"]) {
            // line 89
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sub"]);
            foreach ($context['_seq'] as $context["ks"] => $context["vs"]) {
                // line 90
                echo "\t\t\t\t\t\t\t\t<th class=\"text-center sticky\" colspan=\"";
                echo twig_escape_filter($this->env, $context["vs"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute(($context["subcates"] ?? $this->getContext($context, "subcates")), $context["ks"], [], "array"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ks'], $context['vs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kc'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\" col0\">

\t\t\t\t\t\t</th>
\t\t\t\t\t\t";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["key"] => $context["art"]) {
            // line 101
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["art"]);
            foreach ($context['_seq'] as $context["ks"] => $context["sub"]) {
                echo " 
\t\t\t\t\t\t\t\t";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sub"]);
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t<th class=\"col-lg-12 sticky\">
\t\t\t\t\t\t\t\t\t\t<span class=\" mr-3 ml-3\">";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "nombreResumido", []), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ks'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>

\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entidades"] ?? $this->getContext($context, "entidades")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 115
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"sticky2\">";
            // line 116
            echo twig_escape_filter($this->env, $context["e"], "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
            foreach ($context['_seq'] as $context["key"] => $context["art"]) {
                // line 118
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["art"]);
                foreach ($context['_seq'] as $context["ks"] => $context["sub"]) {
                    echo " 
\t\t\t\t\t\t\t\t\t";
                    // line 119
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["sub"]);
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 120
                        echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 121
                        $context["idV"] = 0;
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["valV"] = "";
                        // line 123
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($this->getAttribute(($context["salidas"] ?? null), $this->getAttribute($context["e"], "id", []), [], "array", false, true), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                            // line 124
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["idV"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["salidas"] ?? $this->getContext($context, "salidas")), $this->getAttribute($context["e"], "id", []), [], "array"), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "id", []);
                            // line 125
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["valV"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["salidas"] ?? $this->getContext($context, "salidas")), $this->getAttribute($context["e"], "id", []), [], "array"), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "data", []);
                            // line 126
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 128
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-idv=\"";
                        // line 131
                        echo twig_escape_filter($this->env, ($context["idV"] ?? $this->getContext($context, "idV")), "html", null, true);
                        echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-proc=\"";
                        // line 132
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "html", null, true);
                        echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-art=\"";
                        // line 133
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), "html", null, true);
                        echo "\"  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-ent=\"";
                        // line 134
                        echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   class=\"form-control form-control-sm align-center update\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   value=\"";
                        // line 136
                        echo twig_escape_filter($this->env, ($context["valV"] ?? $this->getContext($context, "valV")), "html", null, true);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['ks'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['art'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t</div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 160
        echo "
<script type=\"text/javascript\">



\t\$('.update').keypress(function(event) {
\t\t\t\t\t\t\t\t\t    var keycode = (event.keyCode ? event.keyCode : event.which);
\t\t\t\t\t\t\t\t\t    var input = \$(this);
\t\t\t\t\t\t\t\t\t    if(keycode == '13')
\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t\t\tvar route = \"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_registrar_venta", ["proc" => "_PROC", "art" => "_ART", "val" => "_VAL", "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", []), "cv" => $this->getAttribute(($context["concepto"] ?? $this->getContext($context, "concepto")), "id", []), "ent" => "_ENT"]), "html", null, true);
        echo "\";
\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tvar ruta = route.replace('_PROC', btn.data('proc')).replace('_ART', btn.data('art')).replace('_VAL', btn.data('idv')).replace('_ENT', btn.data('ent'));
\t\t\t\t\t\t\t\t\t\t\tinput.removeClass('green');
\t\t\t\t\t\t\t\t\t\t\tinput.removeClass('red');
\t\t\t\t\t\t\t\t\t\t\t\$.post(ruta,
\t\t\t\t\t\t\t\t\t\t\t\t   {data : btn.val()},
\t\t\t\t\t\t\t\t\t\t\t\t  function(response)
\t\t\t\t\t\t\t\t\t\t\t\t  {
\t\t\t\t\t\t\t\t\t\t\t\t  \tif (response.status)
\t\t\t\t\t\t\t\t\t\t\t\t  \t{
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tinput.addClass('green');
\t\t\t\t\t\t\t\t\t\t\t\t\t\tinput.trigger(\"keypress\", [9]);
\t\t\t\t\t\t\t\t\t\t\t\t\t\tinput.data('idv', response.idm);
\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  \telse
\t\t\t\t\t\t\t\t\t\t\t\t  \t{

\t\t\t\t\t\t\t\t\t\t\t\t  \t\tinput.addClass('red');
\t\t\t\t\t\t\t\t\t\t\t\t  \t\talert(response.message);
\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t
\t});

\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 198
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
        // line 224
        if ((isset($context["tipo"]) || array_key_exists("tipo", $context))) {
            // line 225
            echo "\t\t";
            if ((($context["tipo"] ?? $this->getContext($context, "tipo")) == "M")) {
                // line 226
                echo "\t\t\$(\".type option[value='";
                echo twig_escape_filter($this->env, ($context["tipo"] ?? $this->getContext($context, "tipo")), "html", null, true);
                echo "']\").attr('selected','selected');

\t\t";
            }
            // line 229
            echo "\t";
        }
        // line 230
        echo "</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:faena:registrarVentasAP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 230,  487 => 229,  480 => 226,  477 => 225,  475 => 224,  446 => 198,  415 => 170,  403 => 160,  394 => 159,  375 => 148,  367 => 145,  361 => 144,  355 => 143,  342 => 136,  337 => 134,  333 => 133,  329 => 132,  325 => 131,  320 => 128,  316 => 126,  313 => 125,  310 => 124,  307 => 123,  304 => 122,  302 => 121,  299 => 120,  295 => 119,  288 => 118,  284 => 117,  280 => 116,  277 => 115,  273 => 114,  266 => 109,  260 => 108,  254 => 107,  245 => 104,  242 => 103,  238 => 102,  231 => 101,  227 => 100,  220 => 95,  214 => 94,  205 => 91,  200 => 90,  195 => 89,  191 => 88,  184 => 83,  175 => 80,  170 => 79,  166 => 78,  153 => 68,  146 => 64,  141 => 61,  132 => 60,  118 => 58,  62 => 4,  53 => 3,  31 => 1,);
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

.table-container-x 
{
\tmax-width: 100%;
\toverflow-x: scroll;
}

.table-container-y 
{
\tmax-height: 600px;
\toverflow-y: scroll;
}

.sticky 
{
  position: sticky;
  top: 0;
  background: #ccc;
  z-index:9999;
}

table thead tr th
{
\tbackground: #ccc;
}

table td
{
\tmin-width:100px;
\tbackground: #ccc;
}

.col0
{
\tbackground: #ccc;
\tposition: sticky;
\ttop:0;
\tleft:0;
\tz-index: 9999;
}
.sticky2
{
\tposition: sticky;
\tleft: 0;
\tz-index: 9999;
  \tbackground: #fff;
}

</style>


<br>
<hr>
<p class=\"h5 card-title\">{{ proceso }} - Fecha: {{ faena }}</p>
{% endblock fos_user_content %}
{% block out_container %}
<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tConcepto : <span id=\"\">{{ concepto}}</span>
\t\t</div>
  \t</div>
\t<div class=\"card-body\">
\t\t<a href=\"{{ path('bd_adm_proc_fan_day', {proc : proceso.id, fd : faena.id}) }}\" class=\"btn btn-success\"><< Volver</a>
\t\t<br>
\t\t<div class='table-container-x'>
\t\t<div class='table-container-y'>
\t\t\t<table id=\"myTable\" class=\"table table-bordered table-hover table-sm table-striped\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\" col0\">

\t\t\t\t\t\t</th>
\t\t\t\t\t\t{% for c in cates %}
\t\t\t\t\t\t\t<th class=\"text-center sticky\" colspan=\"{{ ccat[c.id] }}\">
\t\t\t\t\t\t\t\t{{ c }}
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"col0\">

\t\t\t\t\t\t</th>
\t\t\t\t\t\t{% for kc, sub in  csub %}
\t\t\t\t\t\t\t{% for ks, vs in sub %}
\t\t\t\t\t\t\t\t<th class=\"text-center sticky\" colspan=\"{{ vs }}\">
\t\t\t\t\t\t\t\t\t{{ subcates[ks] }}
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\" col0\">

\t\t\t\t\t\t</th>
\t\t\t\t\t\t{% for key, art in articulos %}
\t\t\t\t\t\t\t{% for ks, sub in art %} 
\t\t\t\t\t\t\t\t{% for k, v in sub %}
\t\t\t\t\t\t\t\t\t<th class=\"col-lg-12 sticky\">
\t\t\t\t\t\t\t\t\t\t<span class=\" mr-3 ml-3\">{{ v[0].nombreResumido }}</span>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tr>
\t\t\t\t</thead>

\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t{% for e in entidades %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"sticky2\">{{ e }}</td>
\t\t\t\t\t\t\t{% for key, art in articulos %}
\t\t\t\t\t\t\t\t{% for ks, sub in art %} 
\t\t\t\t\t\t\t\t\t{% for k, v in sub %}
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t{% set idV = 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set valV = '' %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if salidas[e.id][v[0].id] is defined %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set idV = salidas[e.id][v[0].id].id %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set valV = salidas[e.id][v[0].id].data %}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-idv=\"{{ idV }}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-proc=\"{{ proceso.id }}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-art=\"{{ v[0].id }}\"  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-ent=\"{{ e.id }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   class=\"form-control form-control-sm align-center update\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   value=\"{{ valV }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t</div>
</div>



{% endblock out_container %}

{% block javascripts %}

<script type=\"text/javascript\">



\t\$('.update').keypress(function(event) {
\t\t\t\t\t\t\t\t\t    var keycode = (event.keyCode ? event.keyCode : event.which);
\t\t\t\t\t\t\t\t\t    var input = \$(this);
\t\t\t\t\t\t\t\t\t    if(keycode == '13')
\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t\t\tvar route = \"{{ path ('bd_adm_proc_registrar_venta', {proc: '_PROC', art : '_ART', val : '_VAL', fd : faena.id, cv : concepto.id, ent : '_ENT'})}}\";
\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tvar ruta = route.replace('_PROC', btn.data('proc')).replace('_ART', btn.data('art')).replace('_VAL', btn.data('idv')).replace('_ENT', btn.data('ent'));
\t\t\t\t\t\t\t\t\t\t\tinput.removeClass('green');
\t\t\t\t\t\t\t\t\t\t\tinput.removeClass('red');
\t\t\t\t\t\t\t\t\t\t\t\$.post(ruta,
\t\t\t\t\t\t\t\t\t\t\t\t   {data : btn.val()},
\t\t\t\t\t\t\t\t\t\t\t\t  function(response)
\t\t\t\t\t\t\t\t\t\t\t\t  {
\t\t\t\t\t\t\t\t\t\t\t\t  \tif (response.status)
\t\t\t\t\t\t\t\t\t\t\t\t  \t{
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tinput.addClass('green');
\t\t\t\t\t\t\t\t\t\t\t\t\t\tinput.trigger(\"keypress\", [9]);
\t\t\t\t\t\t\t\t\t\t\t\t\t\tinput.data('idv', response.idm);
\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  \telse
\t\t\t\t\t\t\t\t\t\t\t\t  \t{

\t\t\t\t\t\t\t\t\t\t\t\t  \t\tinput.addClass('red');
\t\t\t\t\t\t\t\t\t\t\t\t  \t\talert(response.message);
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
", "GestionFaenaBundle:faena:registrarVentasAP.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/faena/registrarVentasAP.html.twig");
    }
}
