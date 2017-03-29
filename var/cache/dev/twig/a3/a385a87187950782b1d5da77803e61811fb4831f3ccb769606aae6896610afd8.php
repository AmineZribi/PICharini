<?php

/* UserBundle:Default:indexAdmin.html.twig */
class __TwigTemplate_dd1ed70d73744496a4f302f305e606c667a88ad5c13c1f9d0c2cdae519a42462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "UserBundle:Default:indexAdmin.html.twig", 1);
        $this->blocks = array(
            'adminName' => array($this, 'block_adminName'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81b3b64de072910384d394a6863329575197e94ca6aea9d34e41e2d2cc04bb78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b3b64de072910384d394a6863329575197e94ca6aea9d34e41e2d2cc04bb78->enter($__internal_81b3b64de072910384d394a6863329575197e94ca6aea9d34e41e2d2cc04bb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81b3b64de072910384d394a6863329575197e94ca6aea9d34e41e2d2cc04bb78->leave($__internal_81b3b64de072910384d394a6863329575197e94ca6aea9d34e41e2d2cc04bb78_prof);

    }

    // line 3
    public function block_adminName($context, array $blocks = array())
    {
        $__internal_ff8b86c12028243d1fe83e5154b250eb87e19aa3b284d77956faad472125bf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8b86c12028243d1fe83e5154b250eb87e19aa3b284d77956faad472125bf40->enter($__internal_ff8b86c12028243d1fe83e5154b250eb87e19aa3b284d77956faad472125bf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminName"));

        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        
        $__internal_ff8b86c12028243d1fe83e5154b250eb87e19aa3b284d77956faad472125bf40->leave($__internal_ff8b86c12028243d1fe83e5154b250eb87e19aa3b284d77956faad472125bf40_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef5c90874a7d9e2907d9b54298fbdd72a897263357718abf4ee41becf53a454b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5c90874a7d9e2907d9b54298fbdd72a897263357718abf4ee41becf53a454b->enter($__internal_ef5c90874a7d9e2907d9b54298fbdd72a897263357718abf4ee41becf53a454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    Hello Admin ";
        // line 7
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo ", Welcome to Charrini website !
";
        
        $__internal_ef5c90874a7d9e2907d9b54298fbdd72a897263357718abf4ee41becf53a454b->leave($__internal_ef5c90874a7d9e2907d9b54298fbdd72a897263357718abf4ee41becf53a454b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layoutAdmin.html.twig\" %}

{% block adminName %}{{ name }}{% endblock %}

{% block content %}

    Hello Admin {{ name }}, Welcome to Charrini website !
{% endblock %}", "UserBundle:Default:indexAdmin.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Default/indexAdmin.html.twig");
    }
}
