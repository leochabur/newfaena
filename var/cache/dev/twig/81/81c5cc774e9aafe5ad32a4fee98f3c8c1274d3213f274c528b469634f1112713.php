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

/* GestionFaenaBundle:faena:adminProcFanDayRomaneaAp.html.twig */
class __TwigTemplate_a1c0f29bad01eb5c89d5138a93668dae12606b15cf888654c21012b80a2f8031 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:adminProcFanDayRomaneaAp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:adminProcFanDayRomaneaAp.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:faena:adminProcFanDayRomaneaAp.html.twig", 1);
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

.table-container {
\tmax-width: 100%;
\toverflow-x: scroll;
}

.table-cebra tbody tr
{
\tbackground : white;
}

.table-cebra tbody tr:nth-child(2n)
{
\tbackground : #f2f2f2;
}

.table-cebra td
{
\tmin-width:100px;
}

.table-cebra tbody tr .sticky
{
\tbackground : white;
}

.table-cebra thead th
{
\tbackground : white;
}

.table-cebra tbody tr:nth-child(2n) .sticky
{
\tbackground : #f2f2f2;
}

.table-cebra .sticky
{
\tposition: sticky;
\tleft: 0;
\tz-index: 9999;
}
</style>
<br>
<hr>
<p class=\"h5 card-title\">Proceso: ";
        // line 50
        echo twig_escape_filter($this->env, ($context["proceso"] ?? $this->getContext($context, "proceso")), "html", null, true);
        echo " - Fecha: ";
        echo twig_escape_filter($this->env, ($context["faena"] ?? $this->getContext($context, "faena")), "html", null, true);
        echo "</p>


<div class=\"card\" >
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tArticulos pendientes de clasificar
\t\t\t<hr>
\t\t</div>
\t\t\t<ul class=\"list-group\">
\t\t\t\t";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clasificables"] ?? $this->getContext($context, "clasificables")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 61
            echo "\t\t\t\t\t  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
\t\t\t\t\t    ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nombre", []), "html", null, true);
            echo ":  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "cantidad", []), "html", null, true);
            echo " 
\t\t\t\t\t    <span title=\"Clasificar\">
\t\t\t\t\t    \t\t<a class=\"btn btn-sm\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clasifiar_articulo_base", ["proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", []), "art" => $this->getAttribute($context["c"], "idArt", [])]), "html", null, true);
            echo "\">>></a></span>
\t\t\t\t\t  </li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t</ul>
\t\t\t";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formMovimientos"] ?? $this->getContext($context, "formMovimientos")), 'form_start');
        echo "
\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formMovimientos"] ?? $this->getContext($context, "formMovimientos")), 'widget');
        echo "
\t\t\t";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formMovimientos"] ?? $this->getContext($context, "formMovimientos")), 'form_end');
        echo "
  \t</div>
\t<div class=\"card-body\">
\t\t<span class=\"h5\">
\t\t\tRegistrar Salidas
\t\t</span>
\t\t";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["ventas"] ?? $this->getContext($context, "ventas")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t<div class=\"form-row\">
\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["ventas"] ?? $this->getContext($context, "ventas")), "conceptoVenta", []), 'widget', ["attr" => ["class" => "form-control col-lg-3"]]);
        echo "
\t\t</div>
\t\t<div class=\"form-row\">
\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["ventas"] ?? $this->getContext($context, "ventas")), "asignar", []), 'widget');
        echo "
\t\t</div>
\t\t";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["ventas"] ?? $this->getContext($context, "ventas")), 'form_end');
        echo "
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_out_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "out_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "out_container"));

        // line 88
        echo "<br>
<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tExistencias Totales
\t\t</div>
  \t</div>
\t<div class=\"card-body\">
\t\t<a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_procesos_faena_diaria", ["fan" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-success\"><< Volver</a>
\t\t<div class=\"table-container\">
\t\t\t<table id=\"\" class=\"table-cebra table table-hover table-bordered\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"sticky\">

\t\t\t\t\t</th>
\t\t\t\t\t";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cates"] ?? $this->getContext($context, "cates")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 105
            echo "\t\t\t\t\t\t<th class=\"text-center\" colspan=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ccat"] ?? $this->getContext($context, "ccat")), $this->getAttribute($context["c"], "id", []), [], "array"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 106
            echo twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "
\t\t\t\t\t\t</th>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"sticky\">

\t\t\t\t\t</th>
\t\t\t\t\t";
        // line 114
        $context["class"] = "";
        // line 115
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["csub"] ?? $this->getContext($context, "csub")));
        foreach ($context['_seq'] as $context["kc"] => $context["sub"]) {
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sub"]);
            foreach ($context['_seq'] as $context["ks"] => $context["vs"]) {
                // line 117
                echo "\t\t\t\t\t\t\t<th class=\"text-center ";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo "\" colspan=\"";
                echo twig_escape_filter($this->env, $context["vs"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute(($context["subcates"] ?? $this->getContext($context, "subcates")), $context["ks"], [], "array"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t";
                // line 120
                $context["class"] = "";
                // line 121
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ks'], $context['vs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kc'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"sticky\">

\t\t\t\t\t\t</th>
\t\t\t\t\t\t";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["key"] => $context["art"]) {
            // line 129
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["art"]);
            foreach ($context['_seq'] as $context["ks"] => $context["sub"]) {
                echo " 
\t\t\t\t\t\t\t\t";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sub"]);
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t<th class=\"col-lg-12 text-center ";
                    echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                    echo "\"  width=\"100px\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-center\">";
                    // line 132
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "nombreResumido", []), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t";
                    // line 134
                    $context["class"] = "";
                    // line 135
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ks'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"sticky green lighten-2\">
\t\t\t\t\t\t\tStock Inicial
\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["key"] => $context["art"]) {
            // line 146
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["art"]);
            foreach ($context['_seq'] as $context["ks"] => $context["sub"]) {
                echo " 
\t\t\t\t\t\t\t\t\t";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sub"]);
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t\t\t<td class=\"col-lg-12 green lighten-2\"> \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 149
                    if ($this->getAttribute(($context["si"] ?? null), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\" text-right form-control form-control-sm col col-lg-12\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["si"] ?? $this->getContext($context, "si")), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "html", null, true);
                        echo "\"/>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 152
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\" text-right form-control form-control-sm col col-lg-12\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 153
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ks'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["conceptos"] ?? $this->getContext($context, "conceptos")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 160
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"sticky\">
\t\t\t\t\t\t\t\t";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "resumido", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            // line 164
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
            foreach ($context['_seq'] as $context["key"] => $context["art"]) {
                // line 165
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["art"]);
                foreach ($context['_seq'] as $context["ks"] => $context["sub"]) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t";
                    // line 166
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["sub"]);
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-lg-12\"> \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 168
                        if ($this->getAttribute($this->getAttribute(($context["ventasTotales"] ?? null), $this->getAttribute($context["c"], "id", []), [], "array", false, true), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                            // line 169
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col-lg-12\" value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["ventasTotales"] ?? $this->getContext($context, "ventasTotales")), $this->getAttribute($context["c"], "id", []), [], "array"), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "html", null, true);
                            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 171
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col col-lg-12\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 172
                        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['ks'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['art'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"sticky deep-orange lighten-4\">
\t\t\t\t\t\t\tDESPACHADO
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["key"] => $context["art"]) {
            // line 184
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["art"]);
            foreach ($context['_seq'] as $context["ks"] => $context["sub"]) {
                echo " 
\t\t\t\t\t\t\t\t";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sub"]);
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["valV"] = "";
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute(($context["totVtas"] ?? null), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                        // line 188
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["valV"] = $this->getAttribute(($context["totVtas"] ?? $this->getContext($context, "totVtas")), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array");
                        // line 189
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 190
                    echo "
\t\t\t\t\t\t\t\t\t<td class=\"col-lg-12 deep-orange lighten-4\"> \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    // line 192
                    if ($this->getAttribute(($context["sf"] ?? null), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                        // line 193
                        echo "\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\" text-right form-control form-control-sm col-lg-12\" value=\"";
                        echo twig_escape_filter($this->env, ($context["valV"] ?? $this->getContext($context, "valV")), "html", null, true);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 195
                        echo "\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col col-lg-12\"/>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 196
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 199
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ks'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"sticky\">
\t\t\t\t\t\t\tProduccion
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["key"] => $context["art"]) {
            // line 207
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["art"]);
            foreach ($context['_seq'] as $context["ks"] => $context["sub"]) {
                echo " 
\t\t\t\t\t\t\t\t";
                // line 208
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sub"]);
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 209
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["valV"] = "";
                    // line 210
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["v"], 1, [], "array") != null)) {
                        // line 211
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context["valV"] = $this->getAttribute($context["v"], 1, [], "array");
                        // line 212
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 213
                    echo "
\t\t\t\t\t\t\t\t\t<td class=\"col-lg-12\"> \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    // line 215
                    if ($this->getAttribute(($context["sf"] ?? null), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                        // line 216
                        echo "\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col-lg-12\" value=\"";
                        echo twig_escape_filter($this->env, ($context["valV"] ?? $this->getContext($context, "valV")), "html", null, true);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 218
                        echo "\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col col-lg-12\"/>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 219
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ks'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"sticky\">
\t\t\t\t\t\t\tStock Final
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articulos"] ?? $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["key"] => $context["art"]) {
            // line 230
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["art"]);
            foreach ($context['_seq'] as $context["ks"] => $context["sub"]) {
                echo " 
\t\t\t\t\t\t\t\t";
                // line 231
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sub"]);
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 232
                    echo "\t\t\t\t\t\t\t\t\t<td class=\"col-lg-12\"> \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    // line 233
                    if ($this->getAttribute(($context["sf"] ?? null), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                        // line 234
                        echo "\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col-lg-12\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["sf"] ?? $this->getContext($context, "sf")), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "html", null, true);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 236
                        echo "\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col col-lg-12\"/>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 237
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 240
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ks'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 253
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 254
        echo "
<script type=\"text/javascript\">


\$('#myTytable').DataTable({
\"scrollX\": true,
\"ordering\": false,
\"paging\": false,
\"searching\": false
});




</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:faena:adminProcFanDayRomaneaAp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  700 => 254,  691 => 253,  672 => 242,  666 => 241,  660 => 240,  652 => 237,  648 => 236,  642 => 234,  640 => 233,  637 => 232,  633 => 231,  626 => 230,  622 => 229,  615 => 224,  609 => 223,  603 => 222,  595 => 219,  591 => 218,  585 => 216,  583 => 215,  579 => 213,  576 => 212,  573 => 211,  570 => 210,  567 => 209,  563 => 208,  556 => 207,  552 => 206,  545 => 201,  539 => 200,  533 => 199,  525 => 196,  521 => 195,  515 => 193,  513 => 192,  509 => 190,  506 => 189,  503 => 188,  500 => 187,  497 => 186,  493 => 185,  486 => 184,  482 => 183,  476 => 179,  469 => 177,  463 => 176,  457 => 175,  449 => 172,  445 => 171,  439 => 169,  437 => 168,  434 => 167,  430 => 166,  423 => 165,  419 => 164,  414 => 162,  410 => 160,  406 => 159,  403 => 158,  397 => 157,  391 => 156,  383 => 153,  379 => 152,  373 => 150,  371 => 149,  368 => 148,  364 => 147,  357 => 146,  353 => 145,  344 => 138,  338 => 137,  332 => 136,  326 => 135,  324 => 134,  319 => 132,  314 => 131,  310 => 130,  303 => 129,  299 => 128,  292 => 123,  286 => 122,  280 => 121,  278 => 120,  273 => 118,  266 => 117,  262 => 116,  255 => 115,  253 => 114,  246 => 109,  237 => 106,  232 => 105,  228 => 104,  217 => 96,  207 => 88,  198 => 87,  184 => 83,  179 => 81,  173 => 78,  168 => 76,  159 => 70,  155 => 69,  151 => 68,  148 => 67,  139 => 64,  132 => 62,  129 => 61,  125 => 60,  110 => 50,  62 => 4,  53 => 3,  31 => 1,);
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

.table-container {
\tmax-width: 100%;
\toverflow-x: scroll;
}

.table-cebra tbody tr
{
\tbackground : white;
}

.table-cebra tbody tr:nth-child(2n)
{
\tbackground : #f2f2f2;
}

.table-cebra td
{
\tmin-width:100px;
}

.table-cebra tbody tr .sticky
{
\tbackground : white;
}

.table-cebra thead th
{
\tbackground : white;
}

.table-cebra tbody tr:nth-child(2n) .sticky
{
\tbackground : #f2f2f2;
}

.table-cebra .sticky
{
\tposition: sticky;
\tleft: 0;
\tz-index: 9999;
}
</style>
<br>
<hr>
<p class=\"h5 card-title\">Proceso: {{ proceso }} - Fecha: {{ faena }}</p>


<div class=\"card\" >
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tArticulos pendientes de clasificar
\t\t\t<hr>
\t\t</div>
\t\t\t<ul class=\"list-group\">
\t\t\t\t{% for c in clasificables %}
\t\t\t\t\t  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
\t\t\t\t\t    {{ c.nombre }}:  {{ c.cantidad }} 
\t\t\t\t\t    <span title=\"Clasificar\">
\t\t\t\t\t    \t\t<a class=\"btn btn-sm\" href=\"{{ path('clasifiar_articulo_base', {proc : proceso.id, fd : faena.id, art : c.idArt})}}\">>></a></span>
\t\t\t\t\t  </li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t{{ form_start(formMovimientos) }}
\t\t\t{{ form_widget(formMovimientos) }}
\t\t\t{{ form_end(formMovimientos) }}
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
{% endblock fos_user_content %}
{% block out_container %}
<br>
<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tExistencias Totales
\t\t</div>
  \t</div>
\t<div class=\"card-body\">
\t\t<a href=\"{{ path('bd_view_procesos_faena_diaria', {fan : faena.id}) }}\" class=\"btn btn-success\"><< Volver</a>
\t\t<div class=\"table-container\">
\t\t\t<table id=\"\" class=\"table-cebra table table-hover table-bordered\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"sticky\">

\t\t\t\t\t</th>
\t\t\t\t\t{% for c in cates %}
\t\t\t\t\t\t<th class=\"text-center\" colspan=\"{{ ccat[c.id] }}\">
\t\t\t\t\t\t\t{{ c }}
\t\t\t\t\t\t</th>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"sticky\">

\t\t\t\t\t</th>
\t\t\t\t\t{% set class = '' %}
\t\t\t\t\t{% for kc, sub in  csub %}\t\t\t\t\t\t
\t\t\t\t\t\t{% for ks, vs in sub %}
\t\t\t\t\t\t\t<th class=\"text-center {{ class }}\" colspan=\"{{ vs }}\">
\t\t\t\t\t\t\t\t{{ subcates[ks] }}
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t{% set class = '' %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"sticky\">

\t\t\t\t\t\t</th>
\t\t\t\t\t\t{% for key, art in articulos %}
\t\t\t\t\t\t\t{% for ks, sub in art %} 
\t\t\t\t\t\t\t\t{% for k, v in sub %}
\t\t\t\t\t\t\t\t\t<th class=\"col-lg-12 text-center {{ class }}\"  width=\"100px\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-center\">{{ v[0].nombreResumido }}</span>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t{% set class = '' %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"sticky green lighten-2\">
\t\t\t\t\t\t\tStock Inicial
\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% for key, art in articulos %}
\t\t\t\t\t\t\t\t{% for ks, sub in art %} 
\t\t\t\t\t\t\t\t\t{% for k, v in sub %}
\t\t\t\t\t\t\t\t\t\t<td class=\"col-lg-12 green lighten-2\"> \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if si[v[0].id]  is defined%}
\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\" text-right form-control form-control-sm col col-lg-12\" value=\"{{ si[v[0].id] }}\"/>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\" text-right form-control form-control-sm col col-lg-12\"/>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tr>
\t\t\t\t\t{% for c in conceptos %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"sticky\">
\t\t\t\t\t\t\t\t{{ c.resumido }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% for key, art in articulos %}
\t\t\t\t\t\t\t\t\t{% for ks, sub in art %} 
\t\t\t\t\t\t\t\t\t\t{% for k, v in sub %}
\t\t\t\t\t\t\t\t\t\t\t<td class=\"col-lg-12\"> \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{%  if ventasTotales[c.id][v[0].id] is defined  %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col-lg-12\" value=\"{{ ventasTotales[c.id][v[0].id] }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col col-lg-12\"/>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"sticky deep-orange lighten-4\">
\t\t\t\t\t\t\tDESPACHADO
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% for key, art in articulos %}
\t\t\t\t\t\t\t{% for ks, sub in art %} 
\t\t\t\t\t\t\t\t{% for k, v in sub %}
\t\t\t\t\t\t\t\t\t{% set valV = '' %}
\t\t\t\t\t\t\t\t\t{% if totVtas[v[0].id] is defined %}
\t\t\t\t\t\t\t\t\t\t{% set valV = totVtas[v[0].id] %}
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t<td class=\"col-lg-12 deep-orange lighten-4\"> \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% if sf[v[0].id]  is defined%}
\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\" text-right form-control form-control-sm col-lg-12\" value=\"{{ valV }}\"/>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col col-lg-12\"/>
\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"sticky\">
\t\t\t\t\t\t\tProduccion
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% for key, art in articulos %}
\t\t\t\t\t\t\t{% for ks, sub in art %} 
\t\t\t\t\t\t\t\t{% for k, v in sub %}
\t\t\t\t\t\t\t\t\t{% set valV = '' %}
\t\t\t\t\t\t\t\t\t{% if v[1] != null %}
\t\t\t\t\t\t\t\t\t\t{% set valV = v[1] %}
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t<td class=\"col-lg-12\"> \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% if sf[v[0].id]  is defined%}
\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col-lg-12\" value=\"{{ valV }}\"/>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col col-lg-12\"/>
\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"sticky\">
\t\t\t\t\t\t\tStock Final
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% for key, art in articulos %}
\t\t\t\t\t\t\t{% for ks, sub in art %} 
\t\t\t\t\t\t\t\t{% for k, v in sub %}
\t\t\t\t\t\t\t\t\t<td class=\"col-lg-12\"> \t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% if sf[v[0].id]  is defined%}
\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col-lg-12\" value=\"{{ sf[v[0].id] }}\"/>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input readonly class=\"text-right form-control form-control-sm col col-lg-12\"/>
\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>



{% endblock out_container %}

{% block javascripts %}

<script type=\"text/javascript\">


\$('#myTytable').DataTable({
\"scrollX\": true,
\"ordering\": false,
\"paging\": false,
\"searching\": false
});




</script>

{% endblock %}
", "GestionFaenaBundle:faena:adminProcFanDayRomaneaAp.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/faena/adminProcFanDayRomaneaAp.html.twig");
    }
}
