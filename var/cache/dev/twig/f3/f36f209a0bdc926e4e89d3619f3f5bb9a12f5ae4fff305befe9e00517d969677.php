<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_80fe3ce347bf1494d74eb1eaae1e05afef4e4b593d690a82188b50602495f989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_8a9b53a1e99eedb6d3e9b8feaea98196972320f434e79d15433fda43d010e3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9b53a1e99eedb6d3e9b8feaea98196972320f434e79d15433fda43d010e3b0->enter($__internal_8a9b53a1e99eedb6d3e9b8feaea98196972320f434e79d15433fda43d010e3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a9b53a1e99eedb6d3e9b8feaea98196972320f434e79d15433fda43d010e3b0->leave($__internal_8a9b53a1e99eedb6d3e9b8feaea98196972320f434e79d15433fda43d010e3b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_260873382e59f8034f9d4bc0661a7882d4a8324f0c280a5be2fb97761ccda223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260873382e59f8034f9d4bc0661a7882d4a8324f0c280a5be2fb97761ccda223->enter($__internal_260873382e59f8034f9d4bc0661a7882d4a8324f0c280a5be2fb97761ccda223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_260873382e59f8034f9d4bc0661a7882d4a8324f0c280a5be2fb97761ccda223->leave($__internal_260873382e59f8034f9d4bc0661a7882d4a8324f0c280a5be2fb97761ccda223_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
