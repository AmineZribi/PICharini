<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_1ba0fc2ee3cefa59cffcb47262860599812b59594890bac96bcc43967f68a1fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e9500a4fb5d5a8e5979118fb749b3d52a510421943f2b333bd066ed9a2371b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9500a4fb5d5a8e5979118fb749b3d52a510421943f2b333bd066ed9a2371b10->enter($__internal_e9500a4fb5d5a8e5979118fb749b3d52a510421943f2b333bd066ed9a2371b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9500a4fb5d5a8e5979118fb749b3d52a510421943f2b333bd066ed9a2371b10->leave($__internal_e9500a4fb5d5a8e5979118fb749b3d52a510421943f2b333bd066ed9a2371b10_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5f2d94829d6d5bcc186f2ccfa51df62da08aa9ce1d6d416f09cb00046885492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f2d94829d6d5bcc186f2ccfa51df62da08aa9ce1d6d416f09cb00046885492->enter($__internal_c5f2d94829d6d5bcc186f2ccfa51df62da08aa9ce1d6d416f09cb00046885492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c5f2d94829d6d5bcc186f2ccfa51df62da08aa9ce1d6d416f09cb00046885492->leave($__internal_c5f2d94829d6d5bcc186f2ccfa51df62da08aa9ce1d6d416f09cb00046885492_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Group/list.html.twig");
    }
}
