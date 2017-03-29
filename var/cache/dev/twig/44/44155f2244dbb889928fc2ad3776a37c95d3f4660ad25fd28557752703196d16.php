<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_edbeac85e7297b5bd0465ded4a0fa28cc4246e61f4a8b03cc08d5c459a426d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layoutUser.html.twig", "UserBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e830739cf52fa9278549ab2ab0ce70abbc8aeaa3b7d8d631c2728a9de68506fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e830739cf52fa9278549ab2ab0ce70abbc8aeaa3b7d8d631c2728a9de68506fc->enter($__internal_e830739cf52fa9278549ab2ab0ce70abbc8aeaa3b7d8d631c2728a9de68506fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e830739cf52fa9278549ab2ab0ce70abbc8aeaa3b7d8d631c2728a9de68506fc->leave($__internal_e830739cf52fa9278549ab2ab0ce70abbc8aeaa3b7d8d631c2728a9de68506fc_prof);

    }

    // line 4
    public function block_login($context, array $blocks = array())
    {
        $__internal_6f3bff50c22bec52143c34ee4af12b299069278520fa72c636033464b6768860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3bff50c22bec52143c34ee4af12b299069278520fa72c636033464b6768860->enter($__internal_6f3bff50c22bec52143c34ee4af12b299069278520fa72c636033464b6768860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 5
        echo "    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"> Welcome ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</a>
    <li><a href=\"contact.html\">Contact</a>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a>
    ";
        
        $__internal_6f3bff50c22bec52143c34ee4af12b299069278520fa72c636033464b6768860->leave($__internal_6f3bff50c22bec52143c34ee4af12b299069278520fa72c636033464b6768860_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_8454477abdf12f78ff6a735eaa2aefc1fe1a88194bc9da8ba6a5d0b6a5a63b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8454477abdf12f78ff6a735eaa2aefc1fe1a88194bc9da8ba6a5d0b6a5a63b1a->enter($__internal_8454477abdf12f78ff6a735eaa2aefc1fe1a88194bc9da8ba6a5d0b6a5a63b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
Hello World !
";
        
        $__internal_8454477abdf12f78ff6a735eaa2aefc1fe1a88194bc9da8ba6a5d0b6a5a63b1a->leave($__internal_8454477abdf12f78ff6a735eaa2aefc1fe1a88194bc9da8ba6a5d0b6a5a63b1a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  56 => 9,  47 => 7,  41 => 5,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"layoutUser.html.twig\" %}

{% block login %}
    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"> Welcome {{ name }}</a>
    <li><a href=\"contact.html\">Contact</a>
    <li><a href=\"{{ path('fos_user_security_logout') }}\">Logout</a>
    {% endblock %}
{% block content %}

Hello World !
{% endblock %}

", "UserBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}
