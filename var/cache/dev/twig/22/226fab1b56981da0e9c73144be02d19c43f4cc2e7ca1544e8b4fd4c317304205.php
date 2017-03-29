<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_d6bfebeb38ae3105cb66275eec4e2b7720a4cf645b936e399399be6b1764ede2 extends Twig_Template
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
        $__internal_6ff82e39c118b5de10807b9dc9c022d47b69a1429530fb8fa024cf4b82114118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff82e39c118b5de10807b9dc9c022d47b69a1429530fb8fa024cf4b82114118->enter($__internal_6ff82e39c118b5de10807b9dc9c022d47b69a1429530fb8fa024cf4b82114118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ff82e39c118b5de10807b9dc9c022d47b69a1429530fb8fa024cf4b82114118->leave($__internal_6ff82e39c118b5de10807b9dc9c022d47b69a1429530fb8fa024cf4b82114118_prof);

    }

    // line 4
    public function block_login($context, array $blocks = array())
    {
        $__internal_3a8252a550f3ebf6c92c48bf6116bf3c45524449a179466a8415f1546aeb55be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8252a550f3ebf6c92c48bf6116bf3c45524449a179466a8415f1546aeb55be->enter($__internal_3a8252a550f3ebf6c92c48bf6116bf3c45524449a179466a8415f1546aeb55be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 5
        echo "    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"> Welcome ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "</a>
    <li><a href=\"contact.html\">Contact</a>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a>
    ";
        
        $__internal_3a8252a550f3ebf6c92c48bf6116bf3c45524449a179466a8415f1546aeb55be->leave($__internal_3a8252a550f3ebf6c92c48bf6116bf3c45524449a179466a8415f1546aeb55be_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c90c1e14bcb84cc9fbab8c35c3216fbdb9df309111db9dcf8c6f4eae576c614c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90c1e14bcb84cc9fbab8c35c3216fbdb9df309111db9dcf8c6f4eae576c614c->enter($__internal_c90c1e14bcb84cc9fbab8c35c3216fbdb9df309111db9dcf8c6f4eae576c614c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
Hello World !
";
        
        $__internal_c90c1e14bcb84cc9fbab8c35c3216fbdb9df309111db9dcf8c6f4eae576c614c->leave($__internal_c90c1e14bcb84cc9fbab8c35c3216fbdb9df309111db9dcf8c6f4eae576c614c_prof);

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
