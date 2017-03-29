<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_74bbda8eee55e60fca14b776abe477512615140c2b98fd6c12c2f40e8ee59401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_d6852d88613317cff258a4e4c1a49e36404348cd11b390e3b821aef293d28bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6852d88613317cff258a4e4c1a49e36404348cd11b390e3b821aef293d28bf0->enter($__internal_d6852d88613317cff258a4e4c1a49e36404348cd11b390e3b821aef293d28bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6852d88613317cff258a4e4c1a49e36404348cd11b390e3b821aef293d28bf0->leave($__internal_d6852d88613317cff258a4e4c1a49e36404348cd11b390e3b821aef293d28bf0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04929de8bb6e005e6d964eb34ca3f80eee12aeec8ac30b093dc181f40a9c3e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04929de8bb6e005e6d964eb34ca3f80eee12aeec8ac30b093dc181f40a9c3e50->enter($__internal_04929de8bb6e005e6d964eb34ca3f80eee12aeec8ac30b093dc181f40a9c3e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_04929de8bb6e005e6d964eb34ca3f80eee12aeec8ac30b093dc181f40a9c3e50->leave($__internal_04929de8bb6e005e6d964eb34ca3f80eee12aeec8ac30b093dc181f40a9c3e50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Group/new.html.twig");
    }
}
