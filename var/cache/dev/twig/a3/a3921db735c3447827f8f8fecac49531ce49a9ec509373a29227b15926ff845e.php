<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_d78ecb3f4b04bdcad47ee6f409f3b31b0236926f6bbb6bf4bae60d743f89db7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_7a4c427379a08628f59dd7fa69c53dde4dd9234fe9e6c180487f41de7a7ddc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4c427379a08628f59dd7fa69c53dde4dd9234fe9e6c180487f41de7a7ddc32->enter($__internal_7a4c427379a08628f59dd7fa69c53dde4dd9234fe9e6c180487f41de7a7ddc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a4c427379a08628f59dd7fa69c53dde4dd9234fe9e6c180487f41de7a7ddc32->leave($__internal_7a4c427379a08628f59dd7fa69c53dde4dd9234fe9e6c180487f41de7a7ddc32_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa6626bbdb73161286f7cd617275b5f0b895132207bb231d8c889a9faded7679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6626bbdb73161286f7cd617275b5f0b895132207bb231d8c889a9faded7679->enter($__internal_fa6626bbdb73161286f7cd617275b5f0b895132207bb231d8c889a9faded7679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_fa6626bbdb73161286f7cd617275b5f0b895132207bb231d8c889a9faded7679->leave($__internal_fa6626bbdb73161286f7cd617275b5f0b895132207bb231d8c889a9faded7679_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
