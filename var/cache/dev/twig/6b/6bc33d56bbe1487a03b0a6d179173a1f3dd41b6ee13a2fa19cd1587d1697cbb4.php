<?php

/* UserBundle:Default:indexGuest.html.twig */
class __TwigTemplate_3b6e1f55e1589b8820ee5cf1c496271c8eaae873387e4edd95146b7b6f3f02a3 extends Twig_Template
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
        $__internal_7dcb3ca25126574b023c177ca8b63fbfb58e4299ea6f9a67d88a9cf885a7be4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcb3ca25126574b023c177ca8b63fbfb58e4299ea6f9a67d88a9cf885a7be4f->enter($__internal_7dcb3ca25126574b023c177ca8b63fbfb58e4299ea6f9a67d88a9cf885a7be4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:indexGuest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dcb3ca25126574b023c177ca8b63fbfb58e4299ea6f9a67d88a9cf885a7be4f->leave($__internal_7dcb3ca25126574b023c177ca8b63fbfb58e4299ea6f9a67d88a9cf885a7be4f_prof);

    }

    // line 3
    public function block_login($context, array $blocks = array())
    {
        $__internal_aa5a88f8805836ebdfd7428e0c722f362f56f26ea2d091d15d5b7d74088d5573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5a88f8805836ebdfd7428e0c722f362f56f26ea2d091d15d5b7d74088d5573->enter($__internal_aa5a88f8805836ebdfd7428e0c722f362f56f26ea2d091d15d5b7d74088d5573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 4
        echo "<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\"> Welcome ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
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
        
        $__internal_aa5a88f8805836ebdfd7428e0c722f362f56f26ea2d091d15d5b7d74088d5573->leave($__internal_aa5a88f8805836ebdfd7428e0c722f362f56f26ea2d091d15d5b7d74088d5573_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_d532fb71e7dfc884789904f153ff87fc57b07fcd23186748827c1cf0ed86e2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d532fb71e7dfc884789904f153ff87fc57b07fcd23186748827c1cf0ed86e2fb->enter($__internal_d532fb71e7dfc884789904f153ff87fc57b07fcd23186748827c1cf0ed86e2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        Hello World !
    ";
        
        $__internal_d532fb71e7dfc884789904f153ff87fc57b07fcd23186748827c1cf0ed86e2fb->leave($__internal_d532fb71e7dfc884789904f153ff87fc57b07fcd23186748827c1cf0ed86e2fb_prof);

    }

    // line 16
    public function block_usersection($context, array $blocks = array())
    {
        $__internal_a0896dbf1861b8c785ec602e1d450005bb16372a3397a2f2e475001ab6768425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0896dbf1861b8c785ec602e1d450005bb16372a3397a2f2e475001ab6768425->enter($__internal_a0896dbf1861b8c785ec602e1d450005bb16372a3397a2f2e475001ab6768425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "usersection"));

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
        
        $__internal_a0896dbf1861b8c785ec602e1d450005bb16372a3397a2f2e475001ab6768425->leave($__internal_a0896dbf1861b8c785ec602e1d450005bb16372a3397a2f2e475001ab6768425_prof);

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
