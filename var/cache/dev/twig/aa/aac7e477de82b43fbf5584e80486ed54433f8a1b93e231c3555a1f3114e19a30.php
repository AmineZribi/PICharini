<?php

/* UserBundle:Default:indexGuest.html.twig */
class __TwigTemplate_ab91cfd0c5c9c274841a3f942f96f9cecf27f371aea35bf3aba9befb326c2cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutUser.html.twig", "UserBundle:Default:indexGuest.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'content' => array($this, 'block_content'),
            'usersection' => array($this, 'block_usersection'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d327293efaa928e15b693549e54e40bad255e26c85ef35f079f320286c64d37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d327293efaa928e15b693549e54e40bad255e26c85ef35f079f320286c64d37f->enter($__internal_d327293efaa928e15b693549e54e40bad255e26c85ef35f079f320286c64d37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:indexGuest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d327293efaa928e15b693549e54e40bad255e26c85ef35f079f320286c64d37f->leave($__internal_d327293efaa928e15b693549e54e40bad255e26c85ef35f079f320286c64d37f_prof);

    }

    // line 3
    public function block_login($context, array $blocks = array())
    {
        $__internal_33ab502233f294d8ee6091578983d32488a8843e8a302ab5e48f7cf75af906a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ab502233f294d8ee6091578983d32488a8843e8a302ab5e48f7cf75af906a7->enter($__internal_33ab502233f294d8ee6091578983d32488a8843e8a302ab5e48f7cf75af906a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 4
        echo "<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"> Welcome ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</a>
<li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Login</a>
<li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a>

<li><a href=\"contact.html\">Contact</a>
    ";
        
        $__internal_33ab502233f294d8ee6091578983d32488a8843e8a302ab5e48f7cf75af906a7->leave($__internal_33ab502233f294d8ee6091578983d32488a8843e8a302ab5e48f7cf75af906a7_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_06223cb9f5c85542aab73ddd15e88ae2c5d9833abf17e11a3bab4f877d833fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06223cb9f5c85542aab73ddd15e88ae2c5d9833abf17e11a3bab4f877d833fe3->enter($__internal_06223cb9f5c85542aab73ddd15e88ae2c5d9833abf17e11a3bab4f877d833fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        Hello World !
    ";
        
        $__internal_06223cb9f5c85542aab73ddd15e88ae2c5d9833abf17e11a3bab4f877d833fe3->leave($__internal_06223cb9f5c85542aab73ddd15e88ae2c5d9833abf17e11a3bab4f877d833fe3_prof);

    }

    // line 16
    public function block_usersection($context, array $blocks = array())
    {
        $__internal_a3298d84a11c21c0a4058eeb959332c683cb888d2ba337bee26cd6e075017109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3298d84a11c21c0a4058eeb959332c683cb888d2ba337bee26cd6e075017109->enter($__internal_a3298d84a11c21c0a4058eeb959332c683cb888d2ba337bee26cd6e075017109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "usersection"));

        // line 17
        echo "        <!-- <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a></li>
         <li><a href=\"register.html\">Regiter</a></li>-->
        <h4>User section</h4>

        <ul>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Login</a>
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a>
        </ul>
    ";
        
        $__internal_a3298d84a11c21c0a4058eeb959332c683cb888d2ba337bee26cd6e075017109->leave($__internal_a3298d84a11c21c0a4058eeb959332c683cb888d2ba337bee26cd6e075017109_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:indexGuest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 22,  83 => 17,  77 => 16,  68 => 11,  62 => 10,  51 => 6,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layoutUser.html.twig\" %}

{% block login %}
<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"> Welcome {{ name }}</a>
<li><a href=\"{{ path('fos_user_security_login') }}\">Login</a>
<li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a>

<li><a href=\"contact.html\">Contact</a>
    {% endblock %}
    {% block content %}

        Hello World !
    {% endblock %}


    {% block usersection %}
        <!-- <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a></li>
         <li><a href=\"register.html\">Regiter</a></li>-->
        <h4>User section</h4>

        <ul>
            <li><a href=\"{{ path('fos_user_security_login') }}\">Login</a>
            <li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a>
        </ul>
    {% endblock %}

", "UserBundle:Default:indexGuest.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Default/indexGuest.html.twig");
    }
}
