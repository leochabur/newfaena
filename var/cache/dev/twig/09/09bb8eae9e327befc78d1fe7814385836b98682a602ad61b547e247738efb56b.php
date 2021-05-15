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

/* GestionFaenaBundle:informes:informeRendimiento.html.twig */
class __TwigTemplate_aa3dd648421e4e966069442220cf42decddd3ac6bf534703461dffe4b5768d85 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:informes:informeRendimiento.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:informes:informeRendimiento.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:informes:informeRendimiento.html.twig", 1);
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
<div class=\"text-left\">
\t<span class=\"h5 card-title\">INFORME RENDIMIENTO</span>
</div>
<hr>
<div class=\"text-center\">
\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t<div class=\"form-row\">
\t\t<div class=\"col-lg-4 text-left\">
\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "faena", []), 'label');
        echo "
\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "faena", []), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"form-row\">
\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cargar", []), 'widget');
        echo "
\t</div>
\t";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        // line 22
        if ((isset($context["faena"]) || array_key_exists("faena", $context))) {
            // line 23
            echo "<hr>
<div class=\"card\">
\t  
\t  <div class=\"card-header h5\">
    Fecha faena: ";
            // line 27
            echo twig_escape_filter($this->env, ($context["faena"] ?? $this->getContext($context, "faena")), "html", null, true);
            echo "
  </div>
  <div class=\"card-body\">
\t\t  <div class=\"card-header h5\">
\t\t    Produccion
\t\t  </div>
\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t  \t\t<div class=\"col-lg-4\">
\t\t\t    \t<span class=\"card-title\"> INGRESOS: <br> 
\t\t\t    \t\t\t\t\t\t\t\t\t\t<span class=\"ml-5\"><span class=\"text-muted\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []), "html", null, true);
            echo "</span> KG </span><br> 
\t\t\t    \t\t\t\t\t\t\t\t\t\t<span class=\"ml-5\"><span class=\"text-muted\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cantidad"] ?? $this->getContext($context, "cantidad")), "stock", []), "html", null, true);
            echo "</span> POLLOS</span>
\t\t\t    \t</span>
\t\t\t    </div>

\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<span class=\"card-title\"> DECOMISOS:</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3 ml-5\">ANTE MORTEM: <br>
\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">";
            // line 49
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "stock", []), 2, ",", ""), "html", null, true);
            echo "</span> KG</div>
\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cantDAM"] ?? $this->getContext($context, "cantDAM")), "stock", []), "html", null, true);
            echo "</span> POLLOS</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">POST MORTEM: <br>
\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["kmDPM"] ?? $this->getContext($context, "kmDPM")), "stock", []), 2, ",", ""), "html", null, true);
            echo "</span> KG</div>
\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cantDPM"] ?? $this->getContext($context, "cantDPM")), "stock", []), "html", null, true);
            echo "</span> POLLOS </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">TOTAL DECOMISOS: <br>
\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute(($context["kmDPM"] ?? $this->getContext($context, "kmDPM")), "stock", []) + $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "stock", [])), 2, ",", ""), "html", null, true);
            echo "</span> KG</div>
\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">";
            // line 58
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["cantDPM"] ?? $this->getContext($context, "cantDPM")), "stock", []) + $this->getAttribute(($context["cantDAM"] ?? $this->getContext($context, "cantDAM")), "stock", [])), "html", null, true);
            echo "</span> POLLOS </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t    </div>
\t\t    </div>
\t\t    \t\t\t\t<hr>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-4\">
\t\t\t\t    \t<span class=\"card-title\"> CAJONES:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-3 ml-5\">FRESCO: <br>
\t\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cajones"] ?? $this->getContext($context, "cajones")), "f", []), "stock", []), "html", null, true);
            echo "</span> Cajones</div>
\t\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">";
            // line 73
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["cajones"] ?? $this->getContext($context, "cajones")), "f", []), "stock", []) * 20), "html", null, true);
            echo "</span> Kg.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-3\">A CONGELAR: <br>
\t\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cajones"] ?? $this->getContext($context, "cajones")), "c", []), "stock", []), "html", null, true);
            echo "</span> Cajones</div>
\t\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">";
            // line 77
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["cajones"] ?? $this->getContext($context, "cajones")), "c", []), "stock", []) * 20), "html", null, true);
            echo "</span> Kg.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-3\">TOTAL: <br>
\t\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">";
            // line 80
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["cajones"] ?? $this->getContext($context, "cajones")), "f", []), "stock", []) + $this->getAttribute($this->getAttribute(($context["cajones"] ?? $this->getContext($context, "cajones")), "c", []), "stock", [])), "html", null, true);
            echo "</span> Cajones</div>
\t\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">";
            // line 81
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["cajones"] ?? $this->getContext($context, "cajones")), "f", []), "stock", []) + $this->getAttribute($this->getAttribute(($context["cajones"] ?? $this->getContext($context, "cajones")), "c", []), "stock", [])) * 20), "html", null, true);
            echo "</span> Kg.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t  <div class=\"card-header mt-4 h5\">
\t\t    MERMAS
\t\t  </div>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t\t    \t<span class=\"card-title\"> MERMA MUERTOS:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
            // line 97
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []), 0, ",", "."), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
            // line 103
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute(($context["kmDPM"] ?? $this->getContext($context, "kmDPM")), "stock", []) + $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "stock", [])), 0, ",", "."), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t=
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"><span class=\"text-muted\">";
            // line 109
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []) - ($this->getAttribute(($context["kmDPM"] ?? $this->getContext($context, "kmDPM")), "stock", []) + $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "stock", []))), 0, ",", "."), "html", null, true);
            echo "</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t=>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"><span class=\"text-muted\">";
            // line 115
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((1 - (($this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []) - ($this->getAttribute(($context["kmDPM"] ?? $this->getContext($context, "kmDPM")), "stock", []) + $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "stock", []))) / $this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []))) * 100), 3, ",", "."), "html", null, true);
            echo " %</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t\t    \t<span class=\"card-title\"> MERMA FAENA:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
            // line 128
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []) - ($this->getAttribute(($context["kmDPM"] ?? $this->getContext($context, "kmDPM")), "stock", []) + $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "stock", []))), 0, ",", "."), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
            // line 134
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []) - ($this->getAttribute(($context["kmDPM"] ?? $this->getContext($context, "kmDPM")), "stock", []) + $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "stock", []))), 0, ",", "."), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t=
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"><span class=\"text-muted\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t=>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"><span class=\"text-muted\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t\t    \t<span class=\"card-title\"> MERMA GENERAL:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
            // line 159
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []), 0, ",", "."), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<span class=\"text-muted\">";
            // line 165
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []) - ($this->getAttribute(($context["kmDPM"] ?? $this->getContext($context, "kmDPM")), "stock", []) + $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "stock", []))), 0, ",", "."), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t=
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"><span class=\"text-muted\">";
            // line 171
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []) - ($this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []) - ($this->getAttribute(($context["kmDPM"] ?? $this->getContext($context, "kmDPM")), "stock", []) + $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "stock", [])))), 0, ",", "."), "html", null, true);
            echo "</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t=>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"><span class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 178
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []) - ($this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", []) - ($this->getAttribute(($context["kmDPM"] ?? $this->getContext($context, "kmDPM")), "stock", []) + $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "stock", [])))) / $this->getAttribute(($context["total"] ?? $this->getContext($context, "total")), "stock", [])) * 100), 3, ",", "."), "html", null, true);
            echo " %
\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t  <div class=\"card-header mt-4 h5\">
\t\t    TROZADO
\t\t  </div>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t\t    \t<span class=\"card-title\"> Transito Inicial:</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">";
            // line 206
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["transitoInicial"] ?? $this->getContext($context, "transitoInicial")), "stock", []), 0, ",", "."), "html", null, true);
            echo "</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t\t    \t<span class=\"card-title\"> De Produccion:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">";
            // line 237
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["kgAtrozar"] ?? $this->getContext($context, "kgAtrozar")), "stock", []), 0, ",", "."), "html", null, true);
            echo "</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2 font-weight-bold\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t  \t\t\t<hr>
\t\t\t\t    \t<span class=\"card-title\"> TOTAL:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">";
            // line 270
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute(($context["kgAtrozar"] ?? $this->getContext($context, "kgAtrozar")), "stock", []) + $this->getAttribute(($context["transitoInicial"] ?? $this->getContext($context, "transitoInicial")), "stock", [])), 0, ",", "."), "html", null, true);
            echo "</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t\t    \t<span class=\"card-title\"> En Transito:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">";
            // line 301
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["kgAtransito"] ?? $this->getContext($context, "kgAtransito")), "stock", []), 0, ",", "."), "html", null, true);
            echo "</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2 font-weight-bold\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t  \t\t\t<hr>
\t\t\t\t    \t<span class=\"card-title\"> A Transformacion:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">";
            // line 334
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute(($context["kgAtrozar"] ?? $this->getContext($context, "kgAtrozar")), "stock", []) + $this->getAttribute(($context["transitoInicial"] ?? $this->getContext($context, "transitoInicial")), "stock", [])) - $this->getAttribute(($context["kgAtransito"] ?? $this->getContext($context, "kgAtransito")), "stock", [])), 0, ",", "."), "html", null, true);
            echo "</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2 font-weight-bold\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t  \t\t\t<hr>
\t\t\t\t    \t<span class=\"card-title\"> Produccion:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">";
            // line 367
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["trozadoCamara"] ?? $this->getContext($context, "trozadoCamara")), 0, ",", "."), "html", null, true);
            echo "</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2 font-weight-bold\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t  \t\t\t<hr>
\t\t\t\t    \t<span class=\"card-title\"> MERMA:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">";
            // line 400
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($this->getAttribute(($context["kgAtrozar"] ?? $this->getContext($context, "kgAtrozar")), "stock", []) + $this->getAttribute(($context["transitoInicial"] ?? $this->getContext($context, "transitoInicial")), "stock", [])) - $this->getAttribute(($context["kgAtransito"] ?? $this->getContext($context, "kgAtransito")), "stock", [])) - ($context["trozadoCamara"] ?? $this->getContext($context, "trozadoCamara"))), 0, ",", "."), "html", null, true);
            echo "</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t=>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t";
            // line 410
            if (((($this->getAttribute(($context["kgAtrozar"] ?? $this->getContext($context, "kgAtrozar")), "stock", []) + $this->getAttribute(($context["transitoInicial"] ?? $this->getContext($context, "transitoInicial")), "stock", [])) - $this->getAttribute(($context["kgAtransito"] ?? $this->getContext($context, "kgAtransito")), "stock", [])) > 0)) {
                // line 411
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((((($this->getAttribute(($context["kgAtrozar"] ?? $this->getContext($context, "kgAtrozar")), "stock", []) + $this->getAttribute(($context["transitoInicial"] ?? $this->getContext($context, "transitoInicial")), "stock", [])) - $this->getAttribute(($context["kgAtransito"] ?? $this->getContext($context, "kgAtransito")), "stock", [])) - ($context["trozadoCamara"] ?? $this->getContext($context, "trozadoCamara"))) / (($this->getAttribute(($context["kgAtrozar"] ?? $this->getContext($context, "kgAtrozar")), "stock", []) + $this->getAttribute(($context["transitoInicial"] ?? $this->getContext($context, "transitoInicial")), "stock", [])) - $this->getAttribute(($context["kgAtransito"] ?? $this->getContext($context, "kgAtransito")), "stock", []))) * 100), 3, ",", "."), "html", null, true);
                echo " %
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 413
            echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
  </div>
</div>
";
        }
        // line 423
        echo "<br><br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:informes:informeRendimiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 423,  591 => 413,  585 => 411,  583 => 410,  570 => 400,  534 => 367,  498 => 334,  462 => 301,  428 => 270,  392 => 237,  358 => 206,  327 => 178,  317 => 171,  308 => 165,  299 => 159,  271 => 134,  262 => 128,  246 => 115,  237 => 109,  228 => 103,  219 => 97,  200 => 81,  196 => 80,  190 => 77,  186 => 76,  180 => 73,  176 => 72,  159 => 58,  155 => 57,  149 => 54,  145 => 53,  139 => 50,  135 => 49,  120 => 37,  116 => 36,  104 => 27,  98 => 23,  96 => 22,  91 => 20,  86 => 18,  79 => 14,  75 => 13,  69 => 10,  60 => 3,  51 => 2,  29 => 1,);
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
<div class=\"text-left\">
\t<span class=\"h5 card-title\">INFORME RENDIMIENTO</span>
</div>
<hr>
<div class=\"text-center\">
\t{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
\t<div class=\"form-row\">
\t\t<div class=\"col-lg-4 text-left\">
\t\t{{ form_label(form.faena) }}
\t\t{{ form_widget(form.faena) }}
\t\t</div>
\t</div>
\t<div class=\"form-row\">
\t\t{{ form_widget(form.cargar) }}
\t</div>
\t{{ form_end(form) }}
</div>
{% if faena is defined %}
<hr>
<div class=\"card\">
\t  
\t  <div class=\"card-header h5\">
    Fecha faena: {{ faena }}
  </div>
  <div class=\"card-body\">
\t\t  <div class=\"card-header h5\">
\t\t    Produccion
\t\t  </div>
\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t  \t\t<div class=\"col-lg-4\">
\t\t\t    \t<span class=\"card-title\"> INGRESOS: <br> 
\t\t\t    \t\t\t\t\t\t\t\t\t\t<span class=\"ml-5\"><span class=\"text-muted\">{{ total.stock }}</span> KG </span><br> 
\t\t\t    \t\t\t\t\t\t\t\t\t\t<span class=\"ml-5\"><span class=\"text-muted\">{{ cantidad.stock }}</span> POLLOS</span>
\t\t\t    \t</span>
\t\t\t    </div>

\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<span class=\"card-title\"> DECOMISOS:</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3 ml-5\">ANTE MORTEM: <br>
\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">{{ dam.stock|number_format(2,',','') }}</span> KG</div>
\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">{{ cantDAM.stock}}</span> POLLOS</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">POST MORTEM: <br>
\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">{{ kmDPM.stock|number_format(2,',','') }}</span> KG</div>
\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">{{ cantDPM.stock}}</span> POLLOS </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">TOTAL DECOMISOS: <br>
\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">{{ (kmDPM.stock+dam.stock)|number_format(2,',','') }}</span> KG</div>
\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">{{ (cantDPM.stock+cantDAM.stock)}}</span> POLLOS </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t    </div>
\t\t    </div>
\t\t    \t\t\t\t<hr>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-4\">
\t\t\t\t    \t<span class=\"card-title\"> CAJONES:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-3 ml-5\">FRESCO: <br>
\t\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">{{ cajones.f.stock}}</span> Cajones</div>
\t\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">{{ (cajones.f.stock * 20) }}</span> Kg.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-3\">A CONGELAR: <br>
\t\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">{{ cajones.c.stock}}</span> Cajones</div>
\t\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">{{ (cajones.c.stock * 20) }}</span> Kg.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-3\">TOTAL: <br>
\t\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">{{ (cajones.f.stock + cajones.c.stock)}}</span> Cajones</div>
\t\t\t\t\t\t\t\t<div class=\"ml-5\"><span class=\"text-muted\">{{ ((cajones.f.stock + cajones.c.stock) * 20) }}</span> Kg.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t  <div class=\"card-header mt-4 h5\">
\t\t    MERMAS
\t\t  </div>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t\t    \t<span class=\"card-title\"> MERMA MUERTOS:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">{{ total.stock|number_format(0,',','.') }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<span class=\"text-muted\">{{ (kmDPM.stock+dam.stock)|number_format(0,',','.') }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t=
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"><span class=\"text-muted\">{{ (total.stock - (kmDPM.stock + dam.stock))|number_format(0,',','.') }}</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t=>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"><span class=\"text-muted\">{{ ((1-((total.stock - (kmDPM.stock + dam.stock))/total.stock))*100)|number_format(3,',','.') }} %</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t\t    \t<span class=\"card-title\"> MERMA FAENA:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">{{ (total.stock - (kmDPM.stock + dam.stock))|number_format(0,',','.') }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<span class=\"text-muted\">{{ (total.stock - (kmDPM.stock + dam.stock))|number_format(0,',','.') }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t=
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"><span class=\"text-muted\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t=>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"><span class=\"text-muted\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t\t    \t<span class=\"card-title\"> MERMA GENERAL:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">{{ total.stock|number_format(0,',','.') }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<span class=\"text-muted\">{{ (total.stock - (kmDPM.stock + dam.stock))|number_format(0,',','.') }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t=
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"><span class=\"text-muted\">{{ (total.stock - (total.stock - (kmDPM.stock + dam.stock)))|number_format(0,',','.') }}</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t=>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"><span class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t{{  (((total.stock - (total.stock - (kmDPM.stock + dam.stock)))/total.stock)*100)|number_format(3,',','.') }} %
\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t  <div class=\"card-header mt-4 h5\">
\t\t    TROZADO
\t\t  </div>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t\t    \t<span class=\"card-title\"> Transito Inicial:</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">{{ transitoInicial.stock|number_format(0,',','.') }}</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t\t    \t<span class=\"card-title\"> De Produccion:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">{{ kgAtrozar.stock|number_format(0,',','.') }}</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2 font-weight-bold\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t  \t\t\t<hr>
\t\t\t\t    \t<span class=\"card-title\"> TOTAL:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">{{ (kgAtrozar.stock + transitoInicial.stock)|number_format(0,',','.') }}</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t\t    \t<span class=\"card-title\"> En Transito:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">{{ kgAtransito.stock|number_format(0,',','.') }}</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2 font-weight-bold\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t  \t\t\t<hr>
\t\t\t\t    \t<span class=\"card-title\"> A Transformacion:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">{{ (kgAtrozar.stock + transitoInicial.stock - kgAtransito.stock)|number_format(0,',','.') }}</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2 font-weight-bold\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t  \t\t\t<hr>
\t\t\t\t    \t<span class=\"card-title\"> Produccion:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">{{ (trozadoCamara)|number_format(0,',','.') }}</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  \t<div class=\"row mt-2 ml-2 font-weight-bold\">
\t\t\t  \t\t<div class=\"col-lg-3\">
\t\t\t  \t\t\t<hr>
\t\t\t\t    \t<span class=\"card-title\"> MERMA:
\t\t\t\t    \t</span>
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"text-right\"><span class=\"text-muted\">{{ ((kgAtrozar.stock + transitoInicial.stock - kgAtransito.stock) - trozadoCamara)|number_format(0,',','.') }}</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t=>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t{% if (kgAtrozar.stock + transitoInicial.stock - kgAtransito.stock) > 0 %}
\t\t\t\t\t\t\t\t\t\t{{ ((((kgAtrozar.stock + transitoInicial.stock - kgAtransito.stock) - trozadoCamara)/(kgAtrozar.stock + transitoInicial.stock - kgAtransito.stock))*100)|number_format(3,',','.') }} %
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t    </div>
\t\t\t\t</div>
  </div>
</div>
{% endif %}
<br><br>

{% endblock fos_user_content %}
", "GestionFaenaBundle:informes:informeRendimiento.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/informes/informeRendimiento.html.twig");
    }
}
