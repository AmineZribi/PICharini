<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d73ca74481f467cbc40cd5bf105ff87102086058bd149ea66d7d03eb7ab99a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_02ab915bacbe409a41fe56650b7d0fda3532c2f7f0e3b23b44b64ed94038ba5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ab915bacbe409a41fe56650b7d0fda3532c2f7f0e3b23b44b64ed94038ba5f->enter($__internal_02ab915bacbe409a41fe56650b7d0fda3532c2f7f0e3b23b44b64ed94038ba5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02ab915bacbe409a41fe56650b7d0fda3532c2f7f0e3b23b44b64ed94038ba5f->leave($__internal_02ab915bacbe409a41fe56650b7d0fda3532c2f7f0e3b23b44b64ed94038ba5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_726f1698e9bbaf99d58297d8bded5e09e7faa7af5780ababe8336878ae352c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726f1698e9bbaf99d58297d8bded5e09e7faa7af5780ababe8336878ae352c6d->enter($__internal_726f1698e9bbaf99d58297d8bded5e09e7faa7af5780ababe8336878ae352c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_726f1698e9bbaf99d58297d8bded5e09e7faa7af5780ababe8336878ae352c6d->leave($__internal_726f1698e9bbaf99d58297d8bded5e09e7faa7af5780ababe8336878ae352c6d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
