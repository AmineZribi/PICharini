<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_68257e38191f33b7a0d75b0dff7cf05a5e097b36abf7a368da28e807b6fb99dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab4fe539a682bdc36fd043b1ffb19fea954e1de11615b38403d5ffa6bb7f50d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4fe539a682bdc36fd043b1ffb19fea954e1de11615b38403d5ffa6bb7f50d4->enter($__internal_ab4fe539a682bdc36fd043b1ffb19fea954e1de11615b38403d5ffa6bb7f50d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 21
        echo "




";
        // line 27
        echo "<form class=\"form-signin\" action=\"index.html\" method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"  class=\"fos_user_registration_register\">
    <div class=\"form-signin-heading text-center\">
        <h1 class=\"sign-title\">Registration</h1>
        <img src=\"images/login-logo.png\" alt=\"\"/>
    </div>


    <div class=\"login-wrap\">

        <p>Enter your personal details below</p>
        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fullname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Full name", "autofocus" => "")));
        echo "
        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "autofocus" => "")));
        echo "
        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "email", "autofocus" => "")));
        echo "


        ";
        // line 75
        echo "    </div>

</form>
";
        
        $__internal_ab4fe539a682bdc36fd043b1ffb19fea954e1de11615b38403d5ffa6bb7f50d4->leave($__internal_ab4fe539a682bdc36fd043b1ffb19fea954e1de11615b38403d5ffa6bb7f50d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 75,  51 => 39,  47 => 38,  43 => 37,  29 => 27,  22 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
{% trans_default_domain 'FOSUserBundle' %}
    <div class=\"form-signin-heading text-center\">
        <h1 class=\"sign-title\">Registration</h1>
        <img src=\"images/login-logo.png\" alt=\"\"/>
    </div>

    <div class=\"login-wrap\">
        <p>Enter your personal details below</p>
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
        {{ form_widget(form) }}
            {{ form_widget(form.fullname, { 'attr': {'class': 'form-control','placeholder':'Fullname'} }) }}
    </div>

    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
_____________________
#}





{% trans_default_domain 'FOSUserBundle' %}
<form class=\"form-signin\" action=\"index.html\" method=\"post\" action=\"{{ path(\"fos_user_registration_register\") }}\"  class=\"fos_user_registration_register\">
    <div class=\"form-signin-heading text-center\">
        <h1 class=\"sign-title\">Registration</h1>
        <img src=\"images/login-logo.png\" alt=\"\"/>
    </div>


    <div class=\"login-wrap\">

        <p>Enter your personal details below</p>
        {{ form_widget(form.fullname, { 'attr': {'class': 'form-control','placeholder':'Full name','autofocus':''} }) }}
        {{ form_widget(form.adresse, { 'attr': {'class': 'form-control','placeholder':'Address','autofocus':''} }) }}
        {{ form_widget(form.email, { 'attr': {'class': 'form-control','placeholder':'email','autofocus':''} }) }}


        {#

        <input type=\"text\" autofocus=\"\" placeholder=\"Full Name\" class=\"form-control\">
        <input type=\"text\" autofocus=\"\" placeholder=\"Address\" class=\"form-control\">
        <input type=\"text\" autofocus=\"\" placeholder=\"Email\" class=\"form-control\">
        <input type=\"text\" autofocus=\"\" placeholder=\"City/Town\" class=\"form-control\">
        <div class=\"radios\">
            <label for=\"radio-01\" class=\"label_radio col-lg-6 col-sm-6\">
                <input type=\"radio\" checked=\"\" value=\"1\" id=\"radio-01\" name=\"sample-radio\"> Male
            </label>
            <label for=\"radio-02\" class=\"label_radio col-lg-6 col-sm-6\">
                <input type=\"radio\" value=\"1\" id=\"radio-02\" name=\"sample-radio\"> Female
            </label>
        </div>

        <p> Enter your account details below</p>
        <input type=\"text\" autofocus=\"\" placeholder=\"User Name\" class=\"form-control\">
        <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
        <input type=\"password\" placeholder=\"Re-type Password\" class=\"form-control\">
        <label class=\"checkbox\">
            <input type=\"checkbox\" value=\"agree this condition\"> I agree to the Terms of Service and Privacy Policy
        </label>
        <button type=\"submit\" class=\"btn btn-lg btn-login btn-block\">
            <i class=\"fa fa-check\"></i>
        </button>

        <div class=\"registration\">
            Already Registered.
            <a href=\"login.html\" class=\"\">
                Login
            </a>
        </div>
#}
    </div>

</form>
", "FOSUserBundle:Registration:register_content.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
