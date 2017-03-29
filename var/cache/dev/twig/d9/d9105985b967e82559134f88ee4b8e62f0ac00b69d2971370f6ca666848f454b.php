<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_0a35f2fc8103c34461689665299d409cc9fddf6bb13b5b504e2d2c92ba945227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55afdf5a685452d8041b0fc2715bccba1a67ec3525a8786d278959a6323b2bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55afdf5a685452d8041b0fc2715bccba1a67ec3525a8786d278959a6323b2bed->enter($__internal_55afdf5a685452d8041b0fc2715bccba1a67ec3525a8786d278959a6323b2bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_55afdf5a685452d8041b0fc2715bccba1a67ec3525a8786d278959a6323b2bed->leave($__internal_55afdf5a685452d8041b0fc2715bccba1a67ec3525a8786d278959a6323b2bed_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e9a2c4f2d55ee366bef6ae9c56b078bcfd707fa77622ab7c95e0d234e70af83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a2c4f2d55ee366bef6ae9c56b078bcfd707fa77622ab7c95e0d234e70af83a->enter($__internal_e9a2c4f2d55ee366bef6ae9c56b078bcfd707fa77622ab7c95e0d234e70af83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e9a2c4f2d55ee366bef6ae9c56b078bcfd707fa77622ab7c95e0d234e70af83a->leave($__internal_e9a2c4f2d55ee366bef6ae9c56b078bcfd707fa77622ab7c95e0d234e70af83a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_eb7592cec73099696bd0801caf73f8461917430888688e8bb22067bc37651d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7592cec73099696bd0801caf73f8461917430888688e8bb22067bc37651d70->enter($__internal_eb7592cec73099696bd0801caf73f8461917430888688e8bb22067bc37651d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_eb7592cec73099696bd0801caf73f8461917430888688e8bb22067bc37651d70->leave($__internal_eb7592cec73099696bd0801caf73f8461917430888688e8bb22067bc37651d70_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_01e4a5df467dc2afb26d12c8b1556f991575abfbd7c025be3216d241f152c708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e4a5df467dc2afb26d12c8b1556f991575abfbd7c025be3216d241f152c708->enter($__internal_01e4a5df467dc2afb26d12c8b1556f991575abfbd7c025be3216d241f152c708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_01e4a5df467dc2afb26d12c8b1556f991575abfbd7c025be3216d241f152c708->leave($__internal_01e4a5df467dc2afb26d12c8b1556f991575abfbd7c025be3216d241f152c708_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
