<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3f133b45dad3200f297e666c7a1c80e5845578d4542487f4e30f7beb213d3775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_622c6d0daf7283f19d11a391405d4dd41ac6722e9e55e658620b7b1493a96c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622c6d0daf7283f19d11a391405d4dd41ac6722e9e55e658620b7b1493a96c8a->enter($__internal_622c6d0daf7283f19d11a391405d4dd41ac6722e9e55e658620b7b1493a96c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_622c6d0daf7283f19d11a391405d4dd41ac6722e9e55e658620b7b1493a96c8a->leave($__internal_622c6d0daf7283f19d11a391405d4dd41ac6722e9e55e658620b7b1493a96c8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c303a98d7990b8d818516aea5bf9617ba92d7085c5fb36b645b3165d1e5a06f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c303a98d7990b8d818516aea5bf9617ba92d7085c5fb36b645b3165d1e5a06f2->enter($__internal_c303a98d7990b8d818516aea5bf9617ba92d7085c5fb36b645b3165d1e5a06f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c303a98d7990b8d818516aea5bf9617ba92d7085c5fb36b645b3165d1e5a06f2->leave($__internal_c303a98d7990b8d818516aea5bf9617ba92d7085c5fb36b645b3165d1e5a06f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
