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

/* @GestionFaena/gestionBD/atrProc.html.twig */
class __TwigTemplate_4dac6939005118758cfcb338dccca5dfefc432f9adcd1d820950819a14526986 extends \Twig\Template
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
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 1
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "editForm"]]);
        echo "
  <div class=\"form-row\">
    <div class=\"col-3\">
      ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "atributo", []), 'label');
        echo "
      ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "atributo", []), 'widget', ["attr" => ["class" => "form-control-plaintext"]]);
        echo "
    </div>
  </div>
  <div class=\"form-row\">
    <div class=\"col-2\">
      ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "orden", []), 'label');
        echo "
      ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "orden", []), 'widget');
        echo "
    </div>
    <div class=\"col-2\">
      ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "decimales", []), 'label');
        echo "
      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "decimales", []), 'widget');
        echo "
    </div>
  </div>
  <div class=\"form-row\">
    <div class=\"col-2 form-check\">
      ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mostrar", []), 'label');
        echo "
      ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mostrar", []), 'widget');
        echo "
    </div>
    <div class=\"col-2 form-check\">
\t      ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "controlaStock", []), 'label');
        echo "
\t      ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "controlaStock", []), 'widget');
        echo "
    </div>
    <div class=\"col-2 form-check\">
\t      ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "acumula", []), 'label');
        echo "
\t      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "acumula", []), 'widget');
        echo "
    </div>
    <div class=\"col-2 form-check\">
\t      ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "promedia", []), 'label');
        echo "
\t      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "promedia", []), 'widget');
        echo "
    </div>
  </div>
    <div class=\"form-row\">
    <div class=\"col\">
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "guardar", []), 'widget');
        echo "
    </div>
  </div>
";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        // line 47
        echo "
<script type=\"text/javascript\">
    \$('.editForm').submit(function(event){
    \t\t\t\t\t\t\t\tevent.preventDefault();
                                    var form = \$(this);
\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t    message: \"Seguro realizar la modificacion?\",
\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t        if (result){
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.post(form.attr('action'), 
\t\t\t\t\t\t\t\t\t                           form.serialize(),
\t\t\t\t\t\t\t\t\t                           function(data){
\t\t\t\t\t\t\t\t\t                           \t\t\t\t\tif (data.status)\t\t\t\t\t\t\t                           \t\t\t\t\t
\t\t\t\t\t\t\t\t\t                           \t\t\t\t\t{
\t\t\t\t\t\t\t\t\t                           \t\t\t\t\t\tbootbox.alert({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    message: \"Modificacion realizada con exito!\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t                           \t\t\t\t\t}
\t\t\t\t\t\t\t\t\t                                    \t  });
\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t});
    });

</script>
";
    }

    public function getTemplateName()
    {
        return "@GestionFaena/gestionBD/atrProc.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  142 => 47,  139 => 46,  132 => 43,  126 => 40,  118 => 35,  114 => 34,  108 => 31,  104 => 30,  98 => 27,  94 => 26,  88 => 23,  84 => 22,  76 => 17,  72 => 16,  66 => 13,  62 => 12,  54 => 7,  50 => 6,  44 => 3,  41 => 2,  38 => 1,  34 => 46,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@GestionFaena/gestionBD/atrProc.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\gestionBD\\atrProc.html.twig");
    }
}
