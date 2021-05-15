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

/* FOSUserBundle:FOSUserBundle/views/Resetting:email.txt.twig */
class __TwigTemplate_ef011b5c015bab2b7eb97b736e397430018c96c2e33438d35adadd34171a4a57 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'subject' => [$this, 'block_subject'],
            'body_text' => [$this, 'block_body_text'],
            'body_html' => [$this, 'block_body_html'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = [])
    {
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", [], "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = [])
    {
        // line 9
        echo "safasdfdsafsdafsadfsdafasd
";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", ["%username%" => $this->getAttribute(($context["user"] ?? null), "username", []), "%confirmationUrl%" => ($context["confirmationUrl"] ?? null)], "FOSUserBundle");
        echo "
";
    }

    // line 13
    public function block_body_html($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:FOSUserBundle/views/Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  56 => 10,  53 => 9,  50 => 7,  44 => 4,  41 => 2,  37 => 13,  35 => 7,  33 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:FOSUserBundle/views/Resetting:email.txt.twig", "E:\\proyectos\\sapucai\\gestionFaena\\vendor\\friendsofsymfony\\user-bundle/Resources/views/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
