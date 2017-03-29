<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_cc3a57384b49cabf22cad27a6321a452784d740f9930f02e97716bfa6453ee6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_ceb4425b487b6502af74022a2dd2d4119e2e8cd99e996ada1820078bb611a7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb4425b487b6502af74022a2dd2d4119e2e8cd99e996ada1820078bb611a7a0->enter($__internal_ceb4425b487b6502af74022a2dd2d4119e2e8cd99e996ada1820078bb611a7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb4425b487b6502af74022a2dd2d4119e2e8cd99e996ada1820078bb611a7a0->leave($__internal_ceb4425b487b6502af74022a2dd2d4119e2e8cd99e996ada1820078bb611a7a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92c17ee18fecf80cfa61e7d55a34f4c640461162de5a8556a3a1d26b5b36f9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c17ee18fecf80cfa61e7d55a34f4c640461162de5a8556a3a1d26b5b36f9f5->enter($__internal_92c17ee18fecf80cfa61e7d55a34f4c640461162de5a8556a3a1d26b5b36f9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_92c17ee18fecf80cfa61e7d55a34f4c640461162de5a8556a3a1d26b5b36f9f5->leave($__internal_92c17ee18fecf80cfa61e7d55a34f4c640461162de5a8556a3a1d26b5b36f9f5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
