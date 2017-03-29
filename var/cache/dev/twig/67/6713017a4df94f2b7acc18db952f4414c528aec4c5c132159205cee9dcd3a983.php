<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_eb79884bd37a39d6d7aa872cd3e696c56c72df9a192c54e62223edf11199b593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e55a757364f84bd4156ff2e5b2d2c94b09bbe0d0bafa73311054ec3a585a675f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55a757364f84bd4156ff2e5b2d2c94b09bbe0d0bafa73311054ec3a585a675f->enter($__internal_e55a757364f84bd4156ff2e5b2d2c94b09bbe0d0bafa73311054ec3a585a675f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e55a757364f84bd4156ff2e5b2d2c94b09bbe0d0bafa73311054ec3a585a675f->leave($__internal_e55a757364f84bd4156ff2e5b2d2c94b09bbe0d0bafa73311054ec3a585a675f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fd42e4444ace5720e130b3424fea483ee6563143700f61de051560a53325d808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd42e4444ace5720e130b3424fea483ee6563143700f61de051560a53325d808->enter($__internal_fd42e4444ace5720e130b3424fea483ee6563143700f61de051560a53325d808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fd42e4444ace5720e130b3424fea483ee6563143700f61de051560a53325d808->leave($__internal_fd42e4444ace5720e130b3424fea483ee6563143700f61de051560a53325d808_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_114cd651207a9830e037f3679a5fcbabd67466e6cc48c2f80c47e6ff2639d7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114cd651207a9830e037f3679a5fcbabd67466e6cc48c2f80c47e6ff2639d7fb->enter($__internal_114cd651207a9830e037f3679a5fcbabd67466e6cc48c2f80c47e6ff2639d7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_114cd651207a9830e037f3679a5fcbabd67466e6cc48c2f80c47e6ff2639d7fb->leave($__internal_114cd651207a9830e037f3679a5fcbabd67466e6cc48c2f80c47e6ff2639d7fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ddc7a36abec2015155c3796f3cc46dbbe6343bd4547007fd1e3b7c4b4f516f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc7a36abec2015155c3796f3cc46dbbe6343bd4547007fd1e3b7c4b4f516f14->enter($__internal_ddc7a36abec2015155c3796f3cc46dbbe6343bd4547007fd1e3b7c4b4f516f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ddc7a36abec2015155c3796f3cc46dbbe6343bd4547007fd1e3b7c4b4f516f14->leave($__internal_ddc7a36abec2015155c3796f3cc46dbbe6343bd4547007fd1e3b7c4b4f516f14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
