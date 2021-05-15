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

/* GestionFaenaBundle:faena:registrarVentas.html.twig */
class __TwigTemplate_3fba68af13894043c429ad0854f02d34134421a532f32161e0b98ed9e70711fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:registrarVentas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:registrarVentas.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:faena:registrarVentas.html.twig", 1);
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
        thead tr th { 
            position: sticky;
            top: 0;
            z-index: 10;
            background-color: #ffffff;
        }
    
        .table-responsive { 
            height:200px;
            overflow:scroll;
        }


</style>


<br>
<hr>
<p class=\"h5 card-title\">";
        // line 23
        echo twig_escape_filter($this->env, ($context["proceso"] ?? $this->getContext($context, "proceso")), "html", null, true);
        echo " - Fecha: ";
        echo twig_escape_filter($this->env, ($context["faena"] ?? $this->getContext($context, "faena")), "html", null, true);
        echo "</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_out_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "out_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "out_container"));

        // line 26
        echo "<div class=\"card\">
\t<div class=\"card-header\">
\t\t<div class=\"h5\">
\t\t\tConcepto : <span id=\"\">";
        // line 29
        echo twig_escape_filter($this->env, ($context["concepto"] ?? $this->getContext($context, "concepto")), "html", null, true);
        echo "</span>
\t\t</div>
  \t</div>
\t<div class=\"card-body\">
\t\t<a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_fan_day", ["proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-success\"><< Volver</a>
\t\t<table class=\"table table-bordered\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"header\" scope=\"col\">Categoria</th>
\t\t\t\t\t<th class=\"header\" scope=\"col\">Subcategoria</th>
\t\t\t\t\t<th class=\"header\" scope=\"col\">Articulo</th>
\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entidades"] ?? $this->getContext($context, "entidades")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 41
            echo "\t\t\t\t\t\t<th class=\"header\" scope=\"col\">";
            echo twig_escape_filter($this->env, $context["e"], "html", null, true);
            echo "</th>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody>
\t\t\t\t
\t\t\t\t";
        // line 48
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
            // line 49
            echo "\t\t\t\t\t";
            if ((0 == $this->getAttribute($context["loop"], "index0", []) % 2)) {
                // line 50
                echo "\t\t\t\t\t    ";
                $context["color"] = " light-blue lighten-3";
                // line 51
                echo "\t\t\t\t\t";
            } else {
                // line 52
                echo "\t\t\t\t\t\t";
                $context["color"] = "light-blue lighten-2";
                echo "\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t<tr class=\"";
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo "\">
\t\t\t\t\t\t<td class=\"align-middle\" rowspan=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ccat"] ?? $this->getContext($context, "ccat")), $context["key"], [], "array"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cates"] ?? $this->getContext($context, "cates")), $context["key"], [], "array"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 58
            $context["count"] = 0;
            // line 59
            echo "
\t\t\t\t\t\t";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["art"]);
            foreach ($context['_seq'] as $context["ks"] => $context["sub"]) {
                echo " 

\t\t\t\t\t\t\t";
                // line 62
                if ((($context["count"] ?? $this->getContext($context, "count")) == 0)) {
                    // line 63
                    echo "\t\t\t\t\t\t\t\t<td class=\"align-middle\" rowspan=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["csub"] ?? $this->getContext($context, "csub")), $context["key"], [], "array"), $context["ks"], [], "array"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["subcates"] ?? $this->getContext($context, "subcates")), $context["ks"], [], "array"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                    // line 66
                    $context["count"] = 1;
                    // line 67
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t<tr class=\"";
                    echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<td class=\"align-middle\" rowspan=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["csub"] ?? $this->getContext($context, "csub")), $context["key"], [], "array"), $context["ks"], [], "array"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["subcates"] ?? $this->getContext($context, "subcates")), $context["ks"], [], "array"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                }
                // line 73
                echo "\t\t\t\t\t\t\t";
                $context["count2"] = 0;
                // line 74
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sub"]);
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["count2"] ?? $this->getContext($context, "count2")) == 0)) {
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 77
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "nombreResumido", []), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        // line 79
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["entidades"] ?? $this->getContext($context, "entidades")));
                        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                            // line 80
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            $context["idV"] = 0;
                            // line 81
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            $context["valV"] = "";
                            // line 82
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute(($context["salidas"] ?? null), $this->getAttribute($context["e"], "id", []), [], "array", false, true), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                                // line 83
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["idV"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["salidas"] ?? $this->getContext($context, "salidas")), $this->getAttribute($context["e"], "id", []), [], "array"), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "id", []);
                                // line 84
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["valV"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["salidas"] ?? $this->getContext($context, "salidas")), $this->getAttribute($context["e"], "id", []), [], "array"), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "data", []);
                                // line 85
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 87
                            echo "\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-idv=\"";
                            // line 91
                            echo twig_escape_filter($this->env, ($context["idV"] ?? $this->getContext($context, "idV")), "html", null, true);
                            echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-proc=\"";
                            // line 92
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "html", null, true);
                            echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-art=\"";
                            // line 93
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), "html", null, true);
                            echo "\"  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-ent=\"";
                            // line 94
                            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   class=\"form-control form-control-sm align-center update\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   value=\"";
                            // line 96
                            echo twig_escape_filter($this->env, ($context["valV"] ?? $this->getContext($context, "valV")), "html", null, true);
                            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>\t
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 102
                        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                        // line 104
                        $context["count2"] = 1;
                        // line 105
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t<tr class=\"";
                        echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 108
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "nombreResumido", []), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        // line 110
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["entidades"] ?? $this->getContext($context, "entidades")));
                        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                            // line 111
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            $context["idV"] = 0;
                            // line 112
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            $context["valV"] = "";
                            // line 113
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute(($context["salidas"] ?? null), $this->getAttribute($context["e"], "id", []), [], "array", false, true), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array", true, true)) {
                                // line 114
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["idV"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["salidas"] ?? $this->getContext($context, "salidas")), $this->getAttribute($context["e"], "id", []), [], "array"), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "id", []);
                                // line 115
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["valV"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["salidas"] ?? $this->getContext($context, "salidas")), $this->getAttribute($context["e"], "id", []), [], "array"), $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), [], "array"), "data", []);
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 117
                            echo "\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-idv=\"";
                            // line 121
                            echo twig_escape_filter($this->env, ($context["idV"] ?? $this->getContext($context, "idV")), "html", null, true);
                            echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-proc=\"";
                            // line 122
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "html", null, true);
                            echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-art=\"";
                            // line 123
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], 0, [], "array"), "id", []), "html", null, true);
                            echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-ent=\"";
                            // line 124
                            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", []), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   class=\"align-middle form-control form-control-sm align-center update\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   value=\"";
                            // line 126
                            echo twig_escape_filter($this->env, ($context["valV"] ?? $this->getContext($context, "valV")), "html", null, true);
                            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 133
                        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                    }
                    // line 135
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ks'], $context['sub'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
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
        // line 138
        echo "
\t\t\t</tbody>
\t\t</table>
\t</div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 149
        echo "
<script type=\"text/javascript\">


\t\$('.update').keypress(function(event) {
\t\t\t\t\t\t\t\t\t    var keycode = (event.keyCode ? event.keyCode : event.which);
\t\t\t\t\t\t\t\t\t    var input = \$(this);
\t\t\t\t\t\t\t\t\t    if(keycode == '13')
\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t\t\tvar route = \"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_registrar_venta", ["proc" => "_PROC", "art" => "_ART", "val" => "_VAL", "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", []), "cv" => $this->getAttribute(($context["concepto"] ?? $this->getContext($context, "concepto")), "id", []), "ent" => "_ENT"]), "html", null, true);
        echo "\";
\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tvar ruta = route.replace('_PROC', btn.data('proc')).replace('_ART', btn.data('art')).replace('_VAL', btn.data('idv')).replace('_ENT', btn.data('ent'));
\t\t\t\t\t\t\t\t\t\t\tinput.parent().siblings('div').html('');
\t\t\t\t\t\t\t\t\t\t\t\$.post(ruta,
\t\t\t\t\t\t\t\t\t\t\t\t   {data : btn.val()},
\t\t\t\t\t\t\t\t\t\t\t\t  function(response)
\t\t\t\t\t\t\t\t\t\t\t\t  {
\t\t\t\t\t\t\t\t\t\t\t\t  \tif (response.status)
\t\t\t\t\t\t\t\t\t\t\t\t  \t{
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tinput.parent().siblings('div').html('<i class=\"far fa-check-circle fa-2x\"></i>');
\t\t\t\t\t\t\t\t\t\t\t\t\t\tinput.trigger(\"keypress\", [9]);
\t\t\t\t\t\t\t\t\t\t\t\t\t\tinput.data('idv', response.idm);
\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  \telse
\t\t\t\t\t\t\t\t\t\t\t\t  \t{

\t\t\t\t\t\t\t\t\t\t\t\t  \t\tinput.parent().siblings('div').html('<i class=\"far fa-times-circle fa-2x\"></i>');
\t\t\t\t\t\t\t\t\t\t\t\t  \t\talert(response.message);
\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t
\t});

\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 185
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
        // line 211
        if ((isset($context["tipo"]) || array_key_exists("tipo", $context))) {
            // line 212
            echo "\t\t";
            if ((($context["tipo"] ?? $this->getContext($context, "tipo")) == "M")) {
                // line 213
                echo "\t\t\$(\".type option[value='";
                echo twig_escape_filter($this->env, ($context["tipo"] ?? $this->getContext($context, "tipo")), "html", null, true);
                echo "']\").attr('selected','selected');

\t\t";
            }
            // line 216
            echo "\t";
        }
        // line 217
        echo "</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:faena:registrarVentas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 217,  533 => 216,  526 => 213,  523 => 212,  521 => 211,  492 => 185,  462 => 158,  451 => 149,  442 => 148,  424 => 138,  410 => 137,  404 => 136,  398 => 135,  394 => 133,  381 => 126,  376 => 124,  372 => 123,  368 => 122,  364 => 121,  358 => 117,  352 => 115,  349 => 114,  346 => 113,  343 => 112,  340 => 111,  336 => 110,  331 => 108,  325 => 106,  322 => 105,  320 => 104,  316 => 102,  303 => 96,  298 => 94,  294 => 93,  290 => 92,  286 => 91,  280 => 87,  276 => 85,  273 => 84,  270 => 83,  267 => 82,  264 => 81,  261 => 80,  257 => 79,  252 => 77,  249 => 76,  246 => 75,  241 => 74,  238 => 73,  232 => 70,  228 => 69,  223 => 68,  220 => 67,  218 => 66,  213 => 64,  208 => 63,  206 => 62,  199 => 60,  196 => 59,  194 => 58,  189 => 56,  185 => 55,  180 => 54,  174 => 52,  171 => 51,  168 => 50,  165 => 49,  148 => 48,  141 => 43,  132 => 41,  128 => 40,  118 => 33,  111 => 29,  106 => 26,  97 => 25,  83 => 23,  62 => 4,  53 => 3,  31 => 1,);
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
        thead tr th { 
            position: sticky;
            top: 0;
            z-index: 10;
            background-color: #ffffff;
        }
    
        .table-responsive { 
            height:200px;
            overflow:scroll;
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
\t\t<table class=\"table table-bordered\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"header\" scope=\"col\">Categoria</th>
\t\t\t\t\t<th class=\"header\" scope=\"col\">Subcategoria</th>
\t\t\t\t\t<th class=\"header\" scope=\"col\">Articulo</th>
\t\t\t\t\t{% for e in entidades %}
\t\t\t\t\t\t<th class=\"header\" scope=\"col\">{{ e }}</th>
\t\t\t\t\t{% endfor %}
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
\t\t\t\t\t\t\t\t{% if count2 == 0 %}
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{{ v[0].nombreResumido }}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t{% for e in entidades %}
\t\t\t\t\t\t\t\t\t\t\t{% set idV = 0 %}
\t\t\t\t\t\t\t\t\t\t\t{% set valV = '' %}
\t\t\t\t\t\t\t\t\t\t\t{% if salidas[e.id][v[0].id] is defined %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set idV = salidas[e.id][v[0].id].id %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set valV = salidas[e.id][v[0].id].data %}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<td>
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
\t\t\t\t\t\t\t\t\t\t\t</td>\t
\t\t\t\t\t\t\t\t\t\t{% endfor %}\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% set count2 = 1 %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<tr class=\"{{ color }}\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t{{ v[0].nombreResumido }}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t{% for e in entidades %}
\t\t\t\t\t\t\t\t\t\t\t{% set idV = 0 %}
\t\t\t\t\t\t\t\t\t\t\t{% set valV = '' %}
\t\t\t\t\t\t\t\t\t\t\t{% if salidas[e.id][v[0].id] is defined %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set idV = salidas[e.id][v[0].id].id %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set valV = salidas[e.id][v[0].id].data %}\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<td class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-idv=\"{{ idV }}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-proc=\"{{ proceso.id }}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-art=\"{{ v[0].id }}\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-ent=\"{{ e.id }}\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   class=\"align-middle form-control form-control-sm align-center update\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   value=\"{{ valV }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}

\t\t\t</tbody>
\t\t</table>
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
\t\t\t\t\t\t\t\t\t\t\tinput.parent().siblings('div').html('');
\t\t\t\t\t\t\t\t\t\t\t\$.post(ruta,
\t\t\t\t\t\t\t\t\t\t\t\t   {data : btn.val()},
\t\t\t\t\t\t\t\t\t\t\t\t  function(response)
\t\t\t\t\t\t\t\t\t\t\t\t  {
\t\t\t\t\t\t\t\t\t\t\t\t  \tif (response.status)
\t\t\t\t\t\t\t\t\t\t\t\t  \t{
\t\t\t\t\t\t\t\t\t\t\t\t  \t\tinput.parent().siblings('div').html('<i class=\"far fa-check-circle fa-2x\"></i>');
\t\t\t\t\t\t\t\t\t\t\t\t\t\tinput.trigger(\"keypress\", [9]);
\t\t\t\t\t\t\t\t\t\t\t\t\t\tinput.data('idv', response.idm);
\t\t\t\t\t\t\t\t\t\t\t\t  \t}
\t\t\t\t\t\t\t\t\t\t\t\t  \telse
\t\t\t\t\t\t\t\t\t\t\t\t  \t{

\t\t\t\t\t\t\t\t\t\t\t\t  \t\tinput.parent().siblings('div').html('<i class=\"far fa-times-circle fa-2x\"></i>');
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
", "GestionFaenaBundle:faena:registrarVentas.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/faena/registrarVentas.html.twig");
    }
}
