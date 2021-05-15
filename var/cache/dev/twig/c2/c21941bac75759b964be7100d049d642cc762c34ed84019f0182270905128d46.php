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

/* GestionFaenaBundle:faena:editMovStock.html.twig */
class __TwigTemplate_b4fa80f36b9a435853ad8d13632c13d0aca0ff80ee479a689ce7f6403f6422a9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:editMovStock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:faena:editMovStock.html.twig"));

        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle:faena:editMovStock.html.twig", 1);
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
        echo "<br>
<hr>
<p class=\"h5 card-title\">Proceso: ";
        // line 6
        echo twig_escape_filter($this->env, ($context["proceso"] ?? $this->getContext($context, "proceso")), "html", null, true);
        echo " - Fecha: ";
        echo twig_escape_filter($this->env, ($context["faena"] ?? $this->getContext($context, "faena")), "html", null, true);
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fatr"] ?? $this->getContext($context, "fatr")), 'form_start', ["atr" => ["class" => "container", "novalidate" => "novalidate"]]);
            echo "
\t<ul>
\t\t<li>";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fatr"] ?? $this->getContext($context, "fatr")), "procesoFnDay", []), 'widget', ["attr" => ["class" => "form-control-plaintext h5"]]);
            echo "</li>
\t\t
\t\t<li>";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fatr"] ?? $this->getContext($context, "fatr")), "artProcFaena", []), 'widget', ["attr" => ["class" => "form-control-plaintext h5"]]);
            echo "</li>

\t\t<li>";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fatr"] ?? $this->getContext($context, "fatr")), "concepto", []), 'widget', ["attr" => ["class" => "form-control-plaintext h5"]]);
            echo "</li>
\t</ul>
\t";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fatr"] ?? $this->getContext($context, "fatr")), "valores", []), 'label', ["label" => "Valores"]);
            echo "
    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["fatr"] ?? $this->getContext($context, "fatr")), "valores", []));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 27
                echo "    \t<div class=\"form-row ";
                if ($this->getAttribute($context["f"], "hidden", [], "any", true, true)) {
                    echo "invisible";
                }
                echo "\">
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
                echo "    \t\t";
                if ($this->getAttribute($context["f"], "hidden", [], "any", true, true)) {
                    // line 39
                    echo "    \t\t\t";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["f"], "hidden", []), 'widget');
                    echo "
    \t\t";
                }
                // line 41
                echo "    \t</div>            \t
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    <div class=\"row\">
    \t<div class=\"col\">
    \t\t";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["fatr"] ?? $this->getContext($context, "fatr")), "guardar", []), 'widget');
            echo "
    \t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_adm_proc_fan_day", ["proc" => $this->getAttribute(($context["proceso"] ?? $this->getContext($context, "proceso")), "id", []), "fd" => $this->getAttribute(($context["faena"] ?? $this->getContext($context, "faena")), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Cancelar</a>
    \t</div>
    </div>
\t";
            // line 49
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["fatr"] ?? $this->getContext($context, "fatr")), 'form_end');
            echo "
</div>
</div>
";
        }
        // line 53
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "
<script type=\"text/javascript\">
\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 60
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:faena:editMovStock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 60,  206 => 57,  197 => 56,  186 => 53,  179 => 49,  173 => 46,  169 => 45,  165 => 43,  158 => 41,  152 => 39,  149 => 38,  143 => 36,  140 => 35,  134 => 33,  131 => 32,  125 => 30,  123 => 29,  119 => 28,  112 => 27,  108 => 26,  104 => 25,  99 => 23,  94 => 21,  89 => 19,  84 => 17,  77 => 12,  75 => 11,  65 => 6,  61 => 4,  52 => 3,  30 => 1,);
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
<p class=\"h5 card-title\">Proceso: {{ proceso }} - Fecha: {{ faena }}</p>
<hr>



{% if fatr is defined %}
<div class=\"card\">
  <div class=\"card-header\">
    Editar movimiento
  </div>
  <div class=\"card-body\">
\t{{ form_start(fatr, {'atr':{'class' : 'container', 'novalidate':'novalidate'}}) }}
\t<ul>
\t\t<li>{{  form_widget(fatr.procesoFnDay,{'attr' : {'class' : 'form-control-plaintext h5'}}) }}</li>
\t\t
\t\t<li>{{  form_widget(fatr.artProcFaena,{'attr' : {'class' : 'form-control-plaintext h5'}}) }}</li>

\t\t<li>{{  form_widget(fatr.concepto,{'attr' : {'class' : 'form-control-plaintext h5'}}) }}</li>
\t</ul>
\t{{ form_label(fatr.valores, 'Valores') }}
    {% for f in fatr.valores %}
    \t<div class=\"form-row {% if f.hidden is defined %}invisible{% endif %}\">
    \t\t{{  form_widget(f.atributo) }}
    \t\t{%  if f.unidadMedida is defined %}
    \t\t\t{{  form_widget(f.unidadMedida) }}
    \t\t{% endif %}
    \t\t{%  if f.entidadExterna is defined %}
    \t\t\t{{  form_widget(f.entidadExterna) }}
    \t\t{% endif %}
    \t\t{%  if f.valor is defined %}
    \t\t\t{{  form_widget(f.valor, {'atr':{'placeholder' : 'Ingrese el valor'}}) }}
    \t\t{% endif %}
    \t\t{% if f.hidden is defined %}
    \t\t\t{{ form_widget(f.hidden) }}
    \t\t{% endif %}
    \t</div>            \t
    {% endfor %}
    <div class=\"row\">
    \t<div class=\"col\">
    \t\t{{ form_widget(fatr.guardar) }}
    \t\t<a href=\"{{ path('bd_adm_proc_fan_day',{proc: proceso.id, fd : faena.id }) }}\" class=\"btn btn-danger\">Cancelar</a>
    \t</div>
    </div>
\t{{ form_end(fatr) }}
</div>
</div>
{% endif %}

{% endblock fos_user_content %}

{% block javascripts %}

<script type=\"text/javascript\">
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
</script>

{% endblock %}
", "GestionFaenaBundle:faena:editMovStock.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/faena/editMovStock.html.twig");
    }
}
