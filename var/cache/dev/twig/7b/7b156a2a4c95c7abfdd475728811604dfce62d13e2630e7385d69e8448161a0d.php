<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0cab2e2bbebb1aad83f40c625464815350d631234ee1f9a9391fb83a399374d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ad4f78b4ec64e442d8d19d1fbbcc3106d7d841ebb7a73ef2937192dc6237edf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4f78b4ec64e442d8d19d1fbbcc3106d7d841ebb7a73ef2937192dc6237edf9->enter($__internal_ad4f78b4ec64e442d8d19d1fbbcc3106d7d841ebb7a73ef2937192dc6237edf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad4f78b4ec64e442d8d19d1fbbcc3106d7d841ebb7a73ef2937192dc6237edf9->leave($__internal_ad4f78b4ec64e442d8d19d1fbbcc3106d7d841ebb7a73ef2937192dc6237edf9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f23a7312b6747ef93405df8033b0d53712e8cf0c462278dcff68e0c5c3b88699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23a7312b6747ef93405df8033b0d53712e8cf0c462278dcff68e0c5c3b88699->enter($__internal_f23a7312b6747ef93405df8033b0d53712e8cf0c462278dcff68e0c5c3b88699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f23a7312b6747ef93405df8033b0d53712e8cf0c462278dcff68e0c5c3b88699->leave($__internal_f23a7312b6747ef93405df8033b0d53712e8cf0c462278dcff68e0c5c3b88699_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Group/show.html.twig");
    }
}
