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

/* GestionFaenaBundle:gestionBD:viewAllAtributesAtributoConcepto.html.twig */
class __TwigTemplate_f96f2e39a584638ce93263cc0964ac6cf579760e01344587a48b7de15af0a425 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:gestionBD:viewAllAtributesAtributoConcepto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:gestionBD:viewAllAtributesAtributoConcepto.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "atributos", []));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_delete_atr_proc_atr_conc", ["atco" => $this->getAttribute(($context["atr"] ?? $this->getContext($context, "atr")), "id", []), "atpr" => $this->getAttribute($context["attr"], "id", [])]), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "add"]]);
        echo "
\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:gestionBD:viewAllAtributesAtributoConcepto.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 37,  162 => 36,  150 => 33,  146 => 32,  142 => 31,  138 => 29,  121 => 26,  117 => 25,  113 => 24,  109 => 23,  105 => 22,  101 => 21,  98 => 20,  81 => 19,  62 => 2,  53 => 1,  43 => 36,  40 => 35,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block fos_user_content %}

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
\t\t\t\t\t\t  \t{% for attr in atr.atributos %}
\t\t\t\t\t\t  \t\t<tr>
\t\t\t\t\t\t  \t\t\t<td>{{ loop.index }}</td>
\t\t\t\t\t\t  \t\t\t<td>{{ attr }}</td>
\t\t\t\t\t\t  \t\t\t<td>{{ attr.mostrar }}</td>
\t\t\t\t\t\t  \t\t\t<td>{{ attr.controlaStock }}</td>
\t\t\t\t\t\t  \t\t\t<td>{{ attr.orden }}</td>
\t\t\t\t\t\t  \t\t\t<td><a href=\"{{ path('bd_delete_atr_proc_atr_conc', { atco: atr.id, atpr : attr.id}) }}\" class=\"btn btn-sm btn-danger sender\">Eliminar</a></td>
\t\t\t\t\t\t  \t\t</tr>
\t\t\t\t\t\t  \t{% endfor %}
\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t{{ form_start(form, { 'attr' : { 'novalidate' : 'novalidate' , 'class' : 'add'}}) }}
\t\t\t\t\t\t{{ form_widget(form) }}
\t\t\t\t\t\t{{ form_end(form) }}
{% endblock fos_user_content %}

{% block javascripts %}
<script type=\"text/javascript\">
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
{% endblock %}", "GestionFaenaBundle:gestionBD:viewAllAtributesAtributoConcepto.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/gestionBD/viewAllAtributesAtributoConcepto.html.twig");
    }
}
