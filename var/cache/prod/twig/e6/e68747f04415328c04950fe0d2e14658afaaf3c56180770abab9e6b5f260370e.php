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

/* @GestionFaena/gestionBD/viewAllAtributesAtributoConcepto.html.twig */
class __TwigTemplate_b30c67413798a74cfd28e79241718d905cc28f5579e1fde9fced65e23fb1a382 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 1
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 2
        echo "
\t\t<br>
<p class=\"h5 card-title\">Listado de atributos generados</p>
<hr>

\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t    <tr>
\t\t\t\t\t\t      <th scope=\"col\">#</th>
\t\t\t\t\t\t      <th scope=\"col\">Nombre</th>
\t\t\t\t\t\t      <th scope=\"col\">Visible</th>
\t\t\t\t\t\t      <th scope=\"col\">Controla Stock</th>
\t\t\t\t\t\t      <th scope=\"col\">Orden</th>
\t\t\t\t\t\t      <th></th>
\t\t\t\t\t\t    </tr>
\t\t\t\t\t\t  </thead>
\t\t\t\t\t\t  <tbody>
\t\t\t\t\t\t  \t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["atr"] ?? null), "atributos", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["attr"]) {
            // line 20
            echo "\t\t\t\t\t\t  \t\t<tr>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["attr"], "mostrar", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["attr"], "controlaStock", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["attr"], "orden", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t  \t\t\t<td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_delete_atr_proc_atr_conc", ["atco" => $this->getAttribute(($context["atr"] ?? null), "id", []), "atpr" => $this->getAttribute($context["attr"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger sender\">Eliminar</a></td>
\t\t\t\t\t\t  \t\t</tr>
\t\t\t\t\t\t  \t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "add"]]);
        echo "
\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        // line 37
        echo "<script type=\"text/javascript\">
\t\$('.sender').click(function(event){
\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\tvar a = \$(this);
\t\t\t\t\t\t\t\t\t\t\$.post(a.attr('href'),
\t\t\t\t\t\t\t\t\t\t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\tif (data.status)
\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\$('.atrCon').trigger('change');
\t\t\t\t\t\t\t\t\t\t\t   });
\t\t\t\t\t\t\t\t\t\t
\t});
\t\$('.add').submit(function(event){
\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\tvar form = \$(this);
\t\t\t\t\t\t\t\t\t\t\$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t\t   form.serialize(),
\t\t\t\t\t\t\t\t\t\t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\tif (data.status)
\t\t\t\t\t\t\t\t\t\t\t   \t\t\t\t\t\t\$('.atrCon').trigger('change');
\t\t\t\t\t\t\t\t\t\t\t   });
\t\t\t\t\t\t\t\t\t\t
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "@GestionFaena/gestionBD/viewAllAtributesAtributoConcepto.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 37,  138 => 36,  132 => 33,  128 => 32,  124 => 31,  120 => 29,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  80 => 20,  63 => 19,  44 => 2,  41 => 1,  37 => 36,  34 => 35,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@GestionFaena/gestionBD/viewAllAtributesAtributoConcepto.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\viewAllAtributesAtributoConcepto.html.twig");
    }
}
