<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_22bf91ab2065d189b55f467ae3afe6a2950e735bea02491d0052d2c2985f4934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_6cfaaaec996066fdad446059a65b0bfaf08d5e994abd3e85924e130d0be02166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfaaaec996066fdad446059a65b0bfaf08d5e994abd3e85924e130d0be02166->enter($__internal_6cfaaaec996066fdad446059a65b0bfaf08d5e994abd3e85924e130d0be02166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cfaaaec996066fdad446059a65b0bfaf08d5e994abd3e85924e130d0be02166->leave($__internal_6cfaaaec996066fdad446059a65b0bfaf08d5e994abd3e85924e130d0be02166_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdd3d184d46a34260c359cd9904c818cede683652a57b227daeeb164de65a55e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd3d184d46a34260c359cd9904c818cede683652a57b227daeeb164de65a55e->enter($__internal_bdd3d184d46a34260c359cd9904c818cede683652a57b227daeeb164de65a55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bdd3d184d46a34260c359cd9904c818cede683652a57b227daeeb164de65a55e->leave($__internal_bdd3d184d46a34260c359cd9904c818cede683652a57b227daeeb164de65a55e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
