<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_08679dcd77fc3347082565adca400f91e49458efa1186f6727352b9a6020245d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_e463a951342823a892706ec6f35266e23340b306f2ba0ec5344e37b2d1f55aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e463a951342823a892706ec6f35266e23340b306f2ba0ec5344e37b2d1f55aa0->enter($__internal_e463a951342823a892706ec6f35266e23340b306f2ba0ec5344e37b2d1f55aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e463a951342823a892706ec6f35266e23340b306f2ba0ec5344e37b2d1f55aa0->leave($__internal_e463a951342823a892706ec6f35266e23340b306f2ba0ec5344e37b2d1f55aa0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_157769d35bcf7702e4f931306085f2725a9108b071b1feee5fba2652ba6de055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157769d35bcf7702e4f931306085f2725a9108b071b1feee5fba2652ba6de055->enter($__internal_157769d35bcf7702e4f931306085f2725a9108b071b1feee5fba2652ba6de055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_157769d35bcf7702e4f931306085f2725a9108b071b1feee5fba2652ba6de055->leave($__internal_157769d35bcf7702e4f931306085f2725a9108b071b1feee5fba2652ba6de055_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
