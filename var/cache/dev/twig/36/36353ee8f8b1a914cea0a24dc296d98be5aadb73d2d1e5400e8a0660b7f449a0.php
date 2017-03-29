<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_bde74d1ca114faefae44532d181ec9352d8f6ec2f552a77117741ab26917c7d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3f7539aca345e1bb8647977f2e50c265778a2088119a8864b63bbbf378130435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7539aca345e1bb8647977f2e50c265778a2088119a8864b63bbbf378130435->enter($__internal_3f7539aca345e1bb8647977f2e50c265778a2088119a8864b63bbbf378130435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f7539aca345e1bb8647977f2e50c265778a2088119a8864b63bbbf378130435->leave($__internal_3f7539aca345e1bb8647977f2e50c265778a2088119a8864b63bbbf378130435_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea4540d62a80e3f5bf9203d898745bb676a1cdb234396c31d31b5835bff6765c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4540d62a80e3f5bf9203d898745bb676a1cdb234396c31d31b5835bff6765c->enter($__internal_ea4540d62a80e3f5bf9203d898745bb676a1cdb234396c31d31b5835bff6765c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ea4540d62a80e3f5bf9203d898745bb676a1cdb234396c31d31b5835bff6765c->leave($__internal_ea4540d62a80e3f5bf9203d898745bb676a1cdb234396c31d31b5835bff6765c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
