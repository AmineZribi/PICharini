<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e22541a58c94846c1a6d073967299abb01dc096be31e7889b2e8e4b298071e26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b4479e353a9d70199f1a81768ee9eb747a63ddc7e9a23d9e661c08d21fd4181c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4479e353a9d70199f1a81768ee9eb747a63ddc7e9a23d9e661c08d21fd4181c->enter($__internal_b4479e353a9d70199f1a81768ee9eb747a63ddc7e9a23d9e661c08d21fd4181c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4479e353a9d70199f1a81768ee9eb747a63ddc7e9a23d9e661c08d21fd4181c->leave($__internal_b4479e353a9d70199f1a81768ee9eb747a63ddc7e9a23d9e661c08d21fd4181c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eba532b3718d10f2c37b739e08e5c37774918ec177565db88248d469d133aaff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba532b3718d10f2c37b739e08e5c37774918ec177565db88248d469d133aaff->enter($__internal_eba532b3718d10f2c37b739e08e5c37774918ec177565db88248d469d133aaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_eba532b3718d10f2c37b739e08e5c37774918ec177565db88248d469d133aaff->leave($__internal_eba532b3718d10f2c37b739e08e5c37774918ec177565db88248d469d133aaff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
