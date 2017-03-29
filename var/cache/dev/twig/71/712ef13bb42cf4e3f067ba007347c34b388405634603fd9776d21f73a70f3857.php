<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b7c857d4f4f8e4e783a8b0fb0585970a8a8074f95b3e4be7dd934fb9cce69d2c extends Twig_Template
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
        $__internal_e5c9f46bcd8f2e49d0a436a4031cc14472dc40af41224a1eb9718811097a1aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c9f46bcd8f2e49d0a436a4031cc14472dc40af41224a1eb9718811097a1aa2->enter($__internal_e5c9f46bcd8f2e49d0a436a4031cc14472dc40af41224a1eb9718811097a1aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e5c9f46bcd8f2e49d0a436a4031cc14472dc40af41224a1eb9718811097a1aa2->leave($__internal_e5c9f46bcd8f2e49d0a436a4031cc14472dc40af41224a1eb9718811097a1aa2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0ad981d55fc35bfc2b9b91f9ba104ee279b0c09aec58f160c00793aae6f7a464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad981d55fc35bfc2b9b91f9ba104ee279b0c09aec58f160c00793aae6f7a464->enter($__internal_0ad981d55fc35bfc2b9b91f9ba104ee279b0c09aec58f160c00793aae6f7a464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_0ad981d55fc35bfc2b9b91f9ba104ee279b0c09aec58f160c00793aae6f7a464->leave($__internal_0ad981d55fc35bfc2b9b91f9ba104ee279b0c09aec58f160c00793aae6f7a464_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_77ab9a03fb35c1add4e2c525afeaf8bc453f34d5c7d2175a249feda3d75df310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ab9a03fb35c1add4e2c525afeaf8bc453f34d5c7d2175a249feda3d75df310->enter($__internal_77ab9a03fb35c1add4e2c525afeaf8bc453f34d5c7d2175a249feda3d75df310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_77ab9a03fb35c1add4e2c525afeaf8bc453f34d5c7d2175a249feda3d75df310->leave($__internal_77ab9a03fb35c1add4e2c525afeaf8bc453f34d5c7d2175a249feda3d75df310_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b6135315e1708cb6b209855ccb7e843ac16dba4137c34b86aa20852e31de6731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6135315e1708cb6b209855ccb7e843ac16dba4137c34b86aa20852e31de6731->enter($__internal_b6135315e1708cb6b209855ccb7e843ac16dba4137c34b86aa20852e31de6731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b6135315e1708cb6b209855ccb7e843ac16dba4137c34b86aa20852e31de6731->leave($__internal_b6135315e1708cb6b209855ccb7e843ac16dba4137c34b86aa20852e31de6731_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
