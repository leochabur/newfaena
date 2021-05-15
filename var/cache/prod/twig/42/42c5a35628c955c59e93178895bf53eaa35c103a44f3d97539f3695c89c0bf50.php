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

/* GestionFaenaBundle:gestionBD:abmTransportista.html.twig */
class __TwigTemplate_129f205cce79c97f7ffd5abcb35f300536da5fb6b862b882d27f26ff8c5119cb extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:gestionBD:abmTransportista.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 3
        echo "<br>
<hr>
<span class=\"h5 card-title\">Transportistas</span>
<hr>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "flashes", [0 => "sussecc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "\t<div class=\"alert alert-success\" role=\"alert\">
\t  ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <br>
    <span class=\"h5\">Nuevo Transportista</span>
    <hr>
    \t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["trans"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        <div class=\"form-row\">
          <div class=\"col\">
              ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["trans"] ?? null), "entidad", []), "valor", []), 'label', ["label" => "TTE."]);
        echo "
              ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["trans"] ?? null), "entidad", []), "valor", []), 'widget');
        echo "
          </div>
          <div class=\"col\">
              ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? null), "cuit", []), 'label', ["label" => "CUIT"]);
        echo "
              ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? null), "cuit", []), 'widget');
        echo "
          </div>
          <div class=\"col\">
              ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? null), "titular", []), 'label');
        echo "
              ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? null), "titular", []), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-row\">
          <div class=\"col\">
              ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? null), "chofer", []), 'label');
        echo "
              ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? null), "chofer", []), 'widget');
        echo "
          </div>
          <div class=\"col\">
              ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? null), "chasis", []), 'label');
        echo "
              ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? null), "chasis", []), 'widget');
        echo "
          </div>
          <div class=\"col\">
              ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? null), "acoplado", []), 'label');
        echo "
              ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trans"] ?? null), "acoplado", []), 'widget');
        echo "
          </div>
        </div>
    \t";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["trans"] ?? null), 'form_end');
        echo "
    <br>
    <span class=\"h5\">Transportista Existentes</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>TTE</th>
            <th>CUIT</th>
            <th>Titular</th>
            <th>Chofer</th>
            <th>Chasis</th>
            <th>Acoplado</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transportistas"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 63
            echo "            <tr>
              <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "</td>
              <td>";
            // line 65
            echo twig_escape_filter($this->env, $context["f"], "html", null, true);
            echo "</td>  
              <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "cuit", []), "html", null, true);
            echo "</td>            
              <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "titular", []), "html", null, true);
            echo "</td>
              <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "chofer", []), "html", null, true);
            echo "</td>
              <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "chasis", []), "html", null, true);
            echo "</td>
              <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "acoplado", []), "html", null, true);
            echo "</td>
            </tr>
          ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:gestionBD:abmTransportista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 73,  202 => 70,  198 => 69,  194 => 68,  190 => 67,  186 => 66,  182 => 65,  178 => 64,  175 => 63,  158 => 62,  138 => 45,  132 => 42,  128 => 41,  122 => 38,  118 => 37,  112 => 34,  108 => 33,  100 => 28,  96 => 27,  90 => 24,  86 => 23,  80 => 20,  76 => 19,  70 => 16,  64 => 12,  55 => 9,  52 => 8,  48 => 7,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "GestionFaenaBundle:gestionBD:abmTransportista.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/gestionBD/abmTransportista.html.twig");
    }
}
