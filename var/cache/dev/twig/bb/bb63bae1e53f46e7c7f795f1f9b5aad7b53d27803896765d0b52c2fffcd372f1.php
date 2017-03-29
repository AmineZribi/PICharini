<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_293109124dfba96e7abe8fef284c70f37530baedb17ff70b27bc2fe72fa3b6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_08c7f6e8039e45024693beb3b4c2ca902e024ba898c85836c49aa0c182074514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c7f6e8039e45024693beb3b4c2ca902e024ba898c85836c49aa0c182074514->enter($__internal_08c7f6e8039e45024693beb3b4c2ca902e024ba898c85836c49aa0c182074514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c7f6e8039e45024693beb3b4c2ca902e024ba898c85836c49aa0c182074514->leave($__internal_08c7f6e8039e45024693beb3b4c2ca902e024ba898c85836c49aa0c182074514_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14f36ed56007f9a043b9bdb09fc77740f08cf94fd06415702d9c73383be35b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f36ed56007f9a043b9bdb09fc77740f08cf94fd06415702d9c73383be35b23->enter($__internal_14f36ed56007f9a043b9bdb09fc77740f08cf94fd06415702d9c73383be35b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_14f36ed56007f9a043b9bdb09fc77740f08cf94fd06415702d9c73383be35b23->leave($__internal_14f36ed56007f9a043b9bdb09fc77740f08cf94fd06415702d9c73383be35b23_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
