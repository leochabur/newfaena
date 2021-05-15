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

/* @GestionFaena/faena/editMovStock.html.twig */
class __TwigTemplate_d91de6720f598d06808a889f01a12788ed59e40744ecb09642adde50fbe1a5e1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/faena/editMovStock.html.twig", 1);
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
        echo twig_escape_filter($this->env, ($context["proceso"] ?? null), "html", null, true);
        echo " - Fecha: ";
        echo twig_escape_filter($this->env, ($context["faena"] ?? null), "html", null, true);
        echo "</p>
<hr>



";
        // line 11
        if ((isset($context["fatr"]) || array_key_exists("fatr", $context))) {
            // line 12
            echo "<div class=\"card\">
  <div class=\"card-header\">
    Editar movimiento
  </div>
  <div class=\"card-body\">
\t";
            // line 17
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fatr"] ?? null), 'form_start', ["atr" => ["class" => "container", "novalidate" => "novalidate"]]);
            echo "
\t<ul>
\t\t<li>";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fatr"] ?? null), "procesoFnDay", []), 'widget', ["attr" => ["class" => "form-control-plaintext h5"]]);
            echo "</li>
\t\t
\t\t<li>";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fatr"] ?? null), "artProcFaena", []), 'widget', ["attr" => ["class" => "form-control-plaintext h5"]]);
            echo "</li>

\t\t<li>";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fatr"] ?? null), "concepto", []), 'widget', ["attr" => ["class" => "form-control-plaintext h5"]]);
            echo "</li>
\t</ul>
\t";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fatr"] ?? null), "valores", []), 'label', ["label" => "Valores"]);
            echo "
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["fatr"] ?? null), "valores", []));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 27
                echo "    \t<div class=\"form-row\">
    \t\t";
                // line 28
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "atributo", []), 'widget');
                echo "
    \t\t";
                // line 29
                if ($this->getAttribute($context["f"], "unidadMedida", [], "any", true, true)) {
                    // line 30
                    echo "    \t\t\t";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "unidadMedida", []), 'widget');
                    echo "
    \t\t";
                }
                // line 32
                echo "    \t\t";
                if ($this->getAttribute($context["f"], "entidadExterna", [], "any", true, true)) {
                    // line 33
                    echo "    \t\t\t";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "entidadExterna", []), 'widget');
                    echo "
    \t\t";
                }
                // line 35
                echo "    \t\t";
                if ($this->getAttribute($context["f"], "valor", [], "any", true, true)) {
                    // line 36
                    echo "    \t\t\t";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "valor", []), 'widget', ["atr" => ["placeholder" => "Ingrese el valor"]]);
                    echo "
    \t\t";
                }
                // line 38
                echo "    \t</div>            \t
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    <div class=\"row\">
    \t<div class=\"col\">
    \t\t";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fatr"] ?? null), "guardar", []), 'widget');
            echo "
    \t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_fan_day", ["proc" => $this->getAttribute(($context["proceso"] ?? null), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? null), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Cancelar</a>
    \t</div>
    </div>
\t";
            // line 46
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fatr"] ?? null), 'form_end');
            echo "
</div>
</div>
";
        }
        // line 50
        echo "
";
    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        // line 54
        echo "
<script type=\"text/javascript\">
\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 57
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
        return "@GestionFaena/faena/editMovStock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 57,  163 => 54,  160 => 53,  155 => 50,  148 => 46,  142 => 43,  138 => 42,  134 => 40,  127 => 38,  121 => 36,  118 => 35,  112 => 33,  109 => 32,  103 => 30,  101 => 29,  97 => 28,  94 => 27,  90 => 26,  86 => 25,  81 => 23,  76 => 21,  71 => 19,  66 => 17,  59 => 12,  57 => 11,  47 => 6,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@GestionFaena/faena/editMovStock.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\faena\\editMovStock.html.twig");
    }
}
