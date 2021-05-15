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

/* GestionVentasBundle:bd:asignarRubrosAEntes.html.twig */
class __TwigTemplate_cccc5975f109024ad9f030fb4004479551af7c0ad167496bca5a27b590c96e0e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionVentasBundle:bd:asignarRubrosAEntes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionVentasBundle:bd:asignarRubrosAEntes.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionVentasBundle:bd:asignarRubrosAEntes.html.twig", 1);
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
";
        // line 4
        $this->loadTemplate("@GestionFaena/messages.html.twig", "GestionVentasBundle:bd:asignarRubrosAEntes.html.twig", 4)->display($context);
        // line 5
        echo "
<div class=\"\">
    <span class=\"h5\">Destinatarios Ventas</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Razon Social</th>
            <th>Rubro</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entes"] ?? $this->getContext($context, "entes")));
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
            // line 19
            echo "            <tr>
              <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "</td>
              <td>";
            // line 21
            echo twig_escape_filter($this->env, $context["f"], "html", null, true);
            echo "</td>                  
              <td>
                ";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["forms"] ?? $this->getContext($context, "forms")), $this->getAttribute($context["f"], "id", []), [], "array"), 'form_start', ["novalidate" => "novalidate"]);
            echo "
                ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["forms"] ?? $this->getContext($context, "forms")), $this->getAttribute($context["f"], "id", []), [], "array"), "grupo", []), 'widget', ["attr" => ["class" => "form-control-sm form-control changegpo"]]);
            echo "
                ";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["forms"] ?? $this->getContext($context, "forms")), $this->getAttribute($context["f"], "id", []), [], "array"), 'form_end');
            echo "
              </td>                
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
        // line 29
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "<script type=\"text/javascript\">
    
    \$(document).ready(function(){
 
      \$('.changegpo').change(function(){
                                            var a = \$(this);
                                            var f = a.closest('form');
                                            \$.post(f.attr('action'),
                                                   f.serialize(),
                                                   function(data)
                                                   {
                                                      console.log(data);
                                                   });

      });
    });

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionVentasBundle:bd:asignarRubrosAEntes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 34,  149 => 33,  136 => 29,  118 => 25,  114 => 24,  110 => 23,  105 => 21,  101 => 20,  98 => 19,  81 => 18,  66 => 5,  64 => 4,  61 => 3,  52 => 2,  30 => 1,);
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
{% include '@GestionFaena/messages.html.twig'  %}

<div class=\"\">
    <span class=\"h5\">Destinatarios Ventas</span>
    <hr>
    <table class=\"table table-striped table-bordered table-hover table-sm \">
        <thead>
          <tr>
            <th>#</th>
            <th>Razon Social</th>
            <th>Rubro</th>
          </tr>
        </thead>
        <tbody>
        {% for f in entes %}
            <tr>
              <td>{{ loop.index }}</td>
              <td>{{ f }}</td>                  
              <td>
                {{ form_start(forms[f.id], { 'novalidate' : 'novalidate'})}}
                {{ form_widget(forms[f.id].grupo, {'attr' : {'class' : 'form-control-sm form-control changegpo'}})  }}
                {{ form_end(forms[f.id]) }}
              </td>                
            </tr>
          {% endfor %}
        </tbody>
    </table>
</div>
{% endblock fos_user_content %}
{% block javascripts %}
<script type=\"text/javascript\">
    
    \$(document).ready(function(){
 
      \$('.changegpo').change(function(){
                                            var a = \$(this);
                                            var f = a.closest('form');
                                            \$.post(f.attr('action'),
                                                   f.serialize(),
                                                   function(data)
                                                   {
                                                      console.log(data);
                                                   });

      });
    });

</script>
{% endblock %}", "GestionVentasBundle:bd:asignarRubrosAEntes.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionVentasBundle/Resources/views/bd/asignarRubrosAEntes.html.twig");
    }
}
