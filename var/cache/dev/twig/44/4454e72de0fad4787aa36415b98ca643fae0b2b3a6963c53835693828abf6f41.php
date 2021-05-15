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

/* GestionFaenaBundle:faena:romanearArticuloBase.html.twig */
class __TwigTemplate_bdf75120b1c71dbf4c0fba7822dfba97753b6c1c479bb7ecd99aaa037659c621 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:romanearArticuloBase.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:romanearArticuloBase.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:faena:romanearArticuloBase.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "<br>
<hr>
<p class=\"h5 card-title\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["proceso"] ?? $this->getContext($context, "proceso")), "html", null, true);
        echo " - Fecha: ";
        echo twig_escape_filter($this->env, ($context["faena"] ?? $this->getContext($context, "faena")), "html", null, true);
        echo "</p>

<div class=\"card\">
\t<div class=\"card-header\">
\t\t";
        // line 9
        $context["idPallet"] = 0;
        // line 10
        echo "\t\t";
        if ((isset($context["pallet"]) || array_key_exists("pallet", $context))) {
            // line 11
            echo "\t\t\t<div class=\"h5\">
\t\t\t\t<span>Pallet: ";
            // line 12
            echo twig_escape_filter($this->env, ($context["pallet"] ?? $this->getContext($context, "pallet")), "html", null, true);
            echo "</span><br>
\t\t\t\t<span class=\"pt-2\">Articulo: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pallet"] ?? $this->getContext($context, "pallet")), "articulosPallet", []), "html", null, true);
            echo "</span><br>
\t\t\t\t<span class=\"pt-2\">Capacidad libre: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["pallet"] ?? $this->getContext($context, "pallet")), "tipoPallet", []), "capacidad", []), "html", null, true);
            echo " Bultos</span>
\t\t\t</div>
\t\t\t";
            // line 16
            $context["idPallet"] = $this->getAttribute(($context["pallet"] ?? $this->getContext($context, "pallet")), "id", []);
            // line 17
            echo "\t\t";
        } else {
            // line 18
            echo "\t\t\t<div class=\"h5\">
\t\t\t\tArticulo : ";
            // line 19
            echo twig_escape_filter($this->env, ($context["articulo"] ?? $this->getContext($context, "articulo")), "html", null, true);
            echo " ";
            if (($this->getAttribute($this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "procesoFaena", []), "id", []) != 14)) {
                echo "- Stock: <span id=\"stock\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["stock"] ?? $this->getContext($context, "stock")), "cantidad", []), "html", null, true);
                echo "</span> ";
            }
            // line 20
            echo "\t\t\t</div>
\t\t";
        }
        // line 22
        echo "  \t</div>
\t<div class=\"card-body\">
\t\t<table class=\"table table-bordered table-sm table-fit\">
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t";
        // line 27
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
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 28
            echo "\t\t\t\t\t";
            $context["color"] = "blue";
            // line 29
            echo "\t\t\t\t\t";
            if ((($this->getAttribute($context["loop"], "index", []) % 2) == 0)) {
                // line 30
                echo "\t\t\t\t\t\t";
                $context["color"] = "teal";
                // line 31
                echo "\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td rowspan=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "cant", []), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo " align-middle\">
\t\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "categoria", []), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["v"], "subcategorias", []));
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
            foreach ($context['_seq'] as $context["ks"] => $context["vs"]) {
                // line 37
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["loop"], "index", []) > 1)) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t\t<td rowspan=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "cant", []), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
                echo " lighten-2 align-middle\">
\t\t\t\t\t\t\t\t";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["vs"], "subcategoria", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["vs"], "articulos", []));
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
                foreach ($context['_seq'] as $context["ka"] => $context["va"]) {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["loop"], "index", []) > 1)) {
                        // line 46
                        echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t";
                    }
                    // line 48
                    echo "\t\t\t\t\t\t\t\t<td class=\"";
                    echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
                    echo " lighten-3\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["va"], "art", []), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"";
                    // line 51
                    echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
                    echo " lighten-3\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 53
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute($context["va"], "form", []), 'form_start', ["attr" => ["class" => "form-inline form-romanear"]]);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 55
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["va"], "form", []), "cantidad", []), 'widget', ["attr" => ["class" => "col-lg-4 cant field-amount"]]);
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 56
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($context["va"], "form", []), "fecha", []), 'widget', ["attr" => ["data-art" =>                     // line 59
$context["ka"], "data-proc" => $this->getAttribute(                    // line 60
($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "class" => "col-lg-4 fecha_elaboracion update", "data-pallet" =>                     // line 62
($context["idPallet"] ?? $this->getContext($context, "idPallet"))]]);
                    // line 65
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rta\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 69
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute($context["va"], "form", []), 'form_end');
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['ka'], $context['va'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['ks'], $context['vs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
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
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t\t\t\t\t

\t\t\t</tbody>
\t\t</table>
\t<hr>
\t<div>
\t\t<p>Detalle Pallet</p>
\t\t<div class=\"det-pallet\">

\t\t</div>
\t\t<hr>
\t</div>
\t<a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_fan_day", ["proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-success\"><< Volver</a>
\t</div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">

\t\$('.field-amount').keypress(function(event) {
\t\t\t\t\t\t\t\t\t    var keycode = (event.keyCode ? event.keyCode : event.which);
\t\t\t\t\t\t\t\t\t    var input = \$(this);
\t\t\t\t\t\t\t\t\t    if(keycode == 13)
\t\t\t\t\t\t\t\t\t    {
\t            \t\t\t\t\t\t\tinput.next().focus();
\t            \t\t\t\t\t\t}
\t        });

\t";
        // line 109
        if ((isset($context["pallet"]) || array_key_exists("pallet", $context))) {
            // line 110
            echo "\t\tconst loadDetalle = (\$id) => {
\t\t\t\$('.det-pallet').html('<div class=\"d-flex justify-content-center\"><div class=\"spinner-border\" role=\"status\"><span class=\"sr-only\">Loading...</span></div></div>');
\t\t\tconst baseURL = \"";
            // line 112
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_detalle_pallet_faena", ["pallet" => "_PALLET"]);
            echo "\";
\t\t\tconst realURL = baseURL.replace('_PALLET', \$id);
\t\t\t\$('.det-pallet').load(realURL);
\t\t};

\t\tloadDetalle(";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pallet"] ?? $this->getContext($context, "pallet")), "id", []), "html", null, true);
            echo ");

\t\tconst deleteMovimiento = (pallet, valor) => {
\t\t\tconst baseURLdelete = \"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eliminar_movimiento_pallet", ["pallet" => "_PALLET", "valor" => "_VALOR"]), "html", null, true);
            echo "\";
\t\t\tconst realURLdelete = baseURLdelete.replace('_PALLET', pallet).replace('_VALOR', valor);
\t\t\t
\t\t\tbootbox.confirm({
\t\t\t\t\t\t    message: 'Seguro eliminar el item?',
\t\t\t\t\t\t    size: \"large\",
\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t        },
\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t        }
\t\t\t\t\t\t    },
\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t        if (result)
\t\t\t\t\t\t        {
\t\t\t\t\t\t\t\t\t\$.post(realURLdelete,
\t\t\t\t\t\t\t\t\t\t   function (data){
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\tif (data.status)
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tloadDetalle(pallet);
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\talert(data.message);
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t   });
\t\t\t\t\t\t        }
\t\t\t\t\t\t    }
\t\t\t\t\t\t });\t\t\t
\t\t};

\t";
        }
        // line 156
        echo "
\tconst route = \"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_romaneo_articulos", ["proc" => "_PROC", "art" => "_ART", "val" => "_VAL", "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", []), "base" => $this->getAttribute(($context["articulo"] ?? $this->getContext($context, "articulo")), "id", [])]), "html", null, true);
        echo "\";

\tconst update = (input) => 
\t{\t\t\t
\t\tvar ruta = route.replace('_PROC', input.data('proc')).replace('_ART', input.data('art')).replace('_VAL', input.data('idv'));
\t\tinput.parent().siblings('div .rta').html('');
\t\tconst count = input.siblings('.cant').val();
\t\tconst date = input.val();
\t\tconst codigo = input.data('pallet');
\t\t\$.post(ruta,
\t\t\t   {data: count, fecha: date, palletiza: 1, idPallet: codigo},
\t\t\t   function(response)
\t\t\t   {
\t\t\t\t  \tif (response.status)
\t\t\t\t  \t{
\t\t\t\t  \t\tinput.parent().siblings('div .rta').html('<i class=\"far fa-check-circle fa-2x\"></i>');
\t\t\t\t\t\tinput.trigger(\"keypress\", [9]);
\t\t\t\t\t\t\$('#stock').html(response.stb);
\t\t\t\t\t\t\$(\".form-romanear\").trigger(\"reset\");
\t\t\t\t\t\t\$('.field-amount').focus();
\t\t\t\t\t\t";
        // line 177
        if ((isset($context["pallet"]) || array_key_exists("pallet", $context))) {
            // line 178
            echo "\t\t\t\t\t\t\tloadDetalle(";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pallet"] ?? $this->getContext($context, "pallet")), "id", []), "html", null, true);
            echo ");
\t\t\t\t\t\t";
        }
        // line 180
        echo "\t\t\t\t  \t}
\t\t\t\t  \telse
\t\t\t\t  \t{

\t\t\t\t  \t\tinput.parent().siblings('div .rta').html('<i class=\"far fa-times-circle fa-2x\"></i>');
\t\t\t\t  \t\talert(response.message);
\t\t\t\t  \t}
\t\t\t  \t}
\t\t);
\t};

\t\$('.update').keypress(function(event) {
\t\t\t\t\t\t\t\t\t    var keycode = (event.keyCode ? event.keyCode : event.which);
\t\t\t\t\t\t\t\t\t    var input = \$(this);
\t\t\t\t\t\t\t\t\t    if(keycode == '13')
\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t    \tupdate(input);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t
\t});

\t\$( \".fecha_elaboracion\" ).inputmask({
\t\t\t\t\t\t\tmask: '99/99/2099',
\t\t\t\t\t\t\tshowMaskOnHover: true,
\t\t\t\t\t\t\tshowMaskOnFocus: true
\t});

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:faena:romanearArticuloBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 180,  450 => 178,  448 => 177,  425 => 157,  422 => 156,  383 => 120,  377 => 117,  369 => 112,  365 => 110,  363 => 109,  348 => 97,  339 => 96,  322 => 88,  308 => 76,  294 => 75,  280 => 74,  261 => 69,  255 => 65,  253 => 62,  252 => 60,  251 => 59,  250 => 56,  246 => 55,  241 => 53,  236 => 51,  231 => 49,  226 => 48,  222 => 46,  219 => 45,  202 => 44,  196 => 41,  189 => 40,  185 => 38,  182 => 37,  165 => 36,  160 => 34,  154 => 33,  151 => 32,  148 => 31,  145 => 30,  142 => 29,  139 => 28,  122 => 27,  115 => 22,  111 => 20,  103 => 19,  100 => 18,  97 => 17,  95 => 16,  90 => 14,  86 => 13,  82 => 12,  79 => 11,  76 => 10,  74 => 9,  65 => 5,  61 => 3,  52 => 2,  30 => 1,);
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
\t\t{% set idPallet = 0 %}
\t\t{% if pallet is defined %}
\t\t\t<div class=\"h5\">
\t\t\t\t<span>Pallet: {{ pallet }}</span><br>
\t\t\t\t<span class=\"pt-2\">Articulo: {{ pallet.articulosPallet }}</span><br>
\t\t\t\t<span class=\"pt-2\">Capacidad libre: {{ pallet.tipoPallet.capacidad }} Bultos</span>
\t\t\t</div>
\t\t\t{% set idPallet = pallet.id %}
\t\t{% else %}
\t\t\t<div class=\"h5\">
\t\t\t\tArticulo : {{ articulo }} {% if proceso.procesoFaena.id != 14 %}- Stock: <span id=\"stock\">{{ stock.cantidad }}</span> {% endif %}
\t\t\t</div>
\t\t{% endif %}
  \t</div>
\t<div class=\"card-body\">
\t\t<table class=\"table table-bordered table-sm table-fit\">
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t{% for k, v in articulos %}
\t\t\t\t\t{% set color = 'blue' %}
\t\t\t\t\t{% if loop.index % 2 == 0 %}
\t\t\t\t\t\t{% set color = 'teal' %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td rowspan=\"{{ v.cant}}\" class=\"{{ color }} align-middle\">
\t\t\t\t\t\t\t{{ v.categoria }}
\t\t\t\t\t\t</td>
\t\t\t\t\t{% for ks, vs in v.subcategorias %}
\t\t\t\t\t\t\t{% if loop.index > 1 %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<td rowspan=\"{{ vs.cant }}\" class=\"{{ color }} lighten-2 align-middle\">
\t\t\t\t\t\t\t\t{{vs.subcategoria}}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t{% for ka, va in vs.articulos %}
\t\t\t\t\t\t\t\t{% if loop.index > 1 %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<td class=\"{{ color }} lighten-3\">
\t\t\t\t\t\t\t\t\t\t{{ va.art }}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"{{ color }} lighten-3\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{{ form_start(va.form, {'attr' : { 'class' : 'form-inline form-romanear'}}) }}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(va.form.cantidad, {'attr' : {'class' : 'col-lg-4 cant field-amount'}}) }}\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(va.form.fecha, 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  {'attr' : 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t\t'data-art': ka, 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t \t'data-proc': proceso.id,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t \t'class' : 'col-lg-4 fecha_elaboracion update',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t \t'data-pallet' : idPallet
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t}) 
\t\t\t\t\t\t\t\t\t\t\t\t}}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rta\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{{ form_end(va.form) }}\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t

\t\t\t</tbody>
\t\t</table>
\t<hr>
\t<div>
\t\t<p>Detalle Pallet</p>
\t\t<div class=\"det-pallet\">

\t\t</div>
\t\t<hr>
\t</div>
\t<a href=\"{{ path('bd_adm_proc_fan_day', {proc : proceso.id, fd : faena.id}) }}\" class=\"btn btn-success\"><< Volver</a>
\t</div>
</div>



{% endblock fos_user_content %}

{% block javascripts %}
{{ parent() }}
<script type=\"text/javascript\">

\t\$('.field-amount').keypress(function(event) {
\t\t\t\t\t\t\t\t\t    var keycode = (event.keyCode ? event.keyCode : event.which);
\t\t\t\t\t\t\t\t\t    var input = \$(this);
\t\t\t\t\t\t\t\t\t    if(keycode == 13)
\t\t\t\t\t\t\t\t\t    {
\t            \t\t\t\t\t\t\tinput.next().focus();
\t            \t\t\t\t\t\t}
\t        });

\t{% if pallet is defined %}
\t\tconst loadDetalle = (\$id) => {
\t\t\t\$('.det-pallet').html('<div class=\"d-flex justify-content-center\"><div class=\"spinner-border\" role=\"status\"><span class=\"sr-only\">Loading...</span></div></div>');
\t\t\tconst baseURL = \"{{ path('ver_detalle_pallet_faena', { pallet : '_PALLET'}) }}\";
\t\t\tconst realURL = baseURL.replace('_PALLET', \$id);
\t\t\t\$('.det-pallet').load(realURL);
\t\t};

\t\tloadDetalle({{ pallet.id }});

\t\tconst deleteMovimiento = (pallet, valor) => {
\t\t\tconst baseURLdelete = \"{{ path('eliminar_movimiento_pallet', { pallet : '_PALLET', valor: '_VALOR'}) }}\";
\t\t\tconst realURLdelete = baseURLdelete.replace('_PALLET', pallet).replace('_VALOR', valor);
\t\t\t
\t\t\tbootbox.confirm({
\t\t\t\t\t\t    message: 'Seguro eliminar el item?',
\t\t\t\t\t\t    size: \"large\",
\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t        },
\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t        }
\t\t\t\t\t\t    },
\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t        if (result)
\t\t\t\t\t\t        {
\t\t\t\t\t\t\t\t\t\$.post(realURLdelete,
\t\t\t\t\t\t\t\t\t\t   function (data){
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\tif (data.status)
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tloadDetalle(pallet);
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\talert(data.message);
\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t   });
\t\t\t\t\t\t        }
\t\t\t\t\t\t    }
\t\t\t\t\t\t });\t\t\t
\t\t};

\t{% endif %}

\tconst route = \"{{ path ('bd_adm_proc_romaneo_articulos', {proc: '_PROC', art : '_ART', val : '_VAL', fd : faena.id, base : articulo.id})}}\";

\tconst update = (input) => 
\t{\t\t\t
\t\tvar ruta = route.replace('_PROC', input.data('proc')).replace('_ART', input.data('art')).replace('_VAL', input.data('idv'));
\t\tinput.parent().siblings('div .rta').html('');
\t\tconst count = input.siblings('.cant').val();
\t\tconst date = input.val();
\t\tconst codigo = input.data('pallet');
\t\t\$.post(ruta,
\t\t\t   {data: count, fecha: date, palletiza: 1, idPallet: codigo},
\t\t\t   function(response)
\t\t\t   {
\t\t\t\t  \tif (response.status)
\t\t\t\t  \t{
\t\t\t\t  \t\tinput.parent().siblings('div .rta').html('<i class=\"far fa-check-circle fa-2x\"></i>');
\t\t\t\t\t\tinput.trigger(\"keypress\", [9]);
\t\t\t\t\t\t\$('#stock').html(response.stb);
\t\t\t\t\t\t\$(\".form-romanear\").trigger(\"reset\");
\t\t\t\t\t\t\$('.field-amount').focus();
\t\t\t\t\t\t{% if pallet is defined %}
\t\t\t\t\t\t\tloadDetalle({{ pallet.id }});
\t\t\t\t\t\t{% endif %}
\t\t\t\t  \t}
\t\t\t\t  \telse
\t\t\t\t  \t{

\t\t\t\t  \t\tinput.parent().siblings('div .rta').html('<i class=\"far fa-times-circle fa-2x\"></i>');
\t\t\t\t  \t\talert(response.message);
\t\t\t\t  \t}
\t\t\t  \t}
\t\t);
\t};

\t\$('.update').keypress(function(event) {
\t\t\t\t\t\t\t\t\t    var keycode = (event.keyCode ? event.keyCode : event.which);
\t\t\t\t\t\t\t\t\t    var input = \$(this);
\t\t\t\t\t\t\t\t\t    if(keycode == '13')
\t\t\t\t\t\t\t\t\t    {
\t\t\t\t\t\t\t\t\t    \tupdate(input);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t
\t});

\t\$( \".fecha_elaboracion\" ).inputmask({
\t\t\t\t\t\t\tmask: '99/99/2099',
\t\t\t\t\t\t\tshowMaskOnHover: true,
\t\t\t\t\t\t\tshowMaskOnFocus: true
\t});

</script>

{% endblock javascripts %}
", "GestionFaenaBundle:faena:romanearArticuloBase.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/faena/romanearArticuloBase.html.twig");
    }
}
