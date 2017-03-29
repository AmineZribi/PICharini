<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3ebb59c598bc58a0cae8ea08b0107b3eaa66fe29386b7457f87b6bd4a24e5edc extends Twig_Template
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
        $__internal_e858dcefbead47bf483499d922f730aa7916619d470ee191143b9d8085ed6723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e858dcefbead47bf483499d922f730aa7916619d470ee191143b9d8085ed6723->enter($__internal_e858dcefbead47bf483499d922f730aa7916619d470ee191143b9d8085ed6723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e858dcefbead47bf483499d922f730aa7916619d470ee191143b9d8085ed6723->leave($__internal_e858dcefbead47bf483499d922f730aa7916619d470ee191143b9d8085ed6723_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0a8158bbec84b1715cf3a5c3166b93ac59be875e6ff85b1e9baf6354cc6807b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8158bbec84b1715cf3a5c3166b93ac59be875e6ff85b1e9baf6354cc6807b3->enter($__internal_0a8158bbec84b1715cf3a5c3166b93ac59be875e6ff85b1e9baf6354cc6807b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0a8158bbec84b1715cf3a5c3166b93ac59be875e6ff85b1e9baf6354cc6807b3->leave($__internal_0a8158bbec84b1715cf3a5c3166b93ac59be875e6ff85b1e9baf6354cc6807b3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ae87604254b8242ced02aac531352481b73d725c02ce1bd2c560d74943490eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae87604254b8242ced02aac531352481b73d725c02ce1bd2c560d74943490eef->enter($__internal_ae87604254b8242ced02aac531352481b73d725c02ce1bd2c560d74943490eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ae87604254b8242ced02aac531352481b73d725c02ce1bd2c560d74943490eef->leave($__internal_ae87604254b8242ced02aac531352481b73d725c02ce1bd2c560d74943490eef_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_07c48b9401883ae016ea28d62d70ff6ddd57d524686f6159987d3efc1f9c128a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c48b9401883ae016ea28d62d70ff6ddd57d524686f6159987d3efc1f9c128a->enter($__internal_07c48b9401883ae016ea28d62d70ff6ddd57d524686f6159987d3efc1f9c128a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_07c48b9401883ae016ea28d62d70ff6ddd57d524686f6159987d3efc1f9c128a->leave($__internal_07c48b9401883ae016ea28d62d70ff6ddd57d524686f6159987d3efc1f9c128a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
