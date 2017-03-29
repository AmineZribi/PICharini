<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_cda11b4907f1a3c178f95a2fbde9e2f97efa2a37f53a73961cf0cb35624c36a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_ddd56091fc57be149f817d7d0ab2a37fce2d271982de4f620d47b9ab9b922004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd56091fc57be149f817d7d0ab2a37fce2d271982de4f620d47b9ab9b922004->enter($__internal_ddd56091fc57be149f817d7d0ab2a37fce2d271982de4f620d47b9ab9b922004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddd56091fc57be149f817d7d0ab2a37fce2d271982de4f620d47b9ab9b922004->leave($__internal_ddd56091fc57be149f817d7d0ab2a37fce2d271982de4f620d47b9ab9b922004_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efd942e7fb964e233cb892efd175876ee1b4c6d10e3da4b6a832728c27371356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd942e7fb964e233cb892efd175876ee1b4c6d10e3da4b6a832728c27371356->enter($__internal_efd942e7fb964e233cb892efd175876ee1b4c6d10e3da4b6a832728c27371356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_efd942e7fb964e233cb892efd175876ee1b4c6d10e3da4b6a832728c27371356->leave($__internal_efd942e7fb964e233cb892efd175876ee1b4c6d10e3da4b6a832728c27371356_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
