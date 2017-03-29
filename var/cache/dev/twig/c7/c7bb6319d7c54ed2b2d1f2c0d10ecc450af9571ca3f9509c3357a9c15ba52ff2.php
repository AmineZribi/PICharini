<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_8faf0cf40a9bf097667e0cfe9a011e46789fe2f828bac8fc7abf948f8f6ad800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d6b141dea5cd8cca8340d89c729de50e11a868f46087d56c075c48a2ccc2e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6b141dea5cd8cca8340d89c729de50e11a868f46087d56c075c48a2ccc2e99->enter($__internal_7d6b141dea5cd8cca8340d89c729de50e11a868f46087d56c075c48a2ccc2e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d6b141dea5cd8cca8340d89c729de50e11a868f46087d56c075c48a2ccc2e99->leave($__internal_7d6b141dea5cd8cca8340d89c729de50e11a868f46087d56c075c48a2ccc2e99_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c70a9ac63171b17f94057d13c9728b46334b50b34b92153fb0330ce0a590e088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70a9ac63171b17f94057d13c9728b46334b50b34b92153fb0330ce0a590e088->enter($__internal_c70a9ac63171b17f94057d13c9728b46334b50b34b92153fb0330ce0a590e088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c70a9ac63171b17f94057d13c9728b46334b50b34b92153fb0330ce0a590e088->leave($__internal_c70a9ac63171b17f94057d13c9728b46334b50b34b92153fb0330ce0a590e088_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Registration/check_email.html.twig");
    }
}
