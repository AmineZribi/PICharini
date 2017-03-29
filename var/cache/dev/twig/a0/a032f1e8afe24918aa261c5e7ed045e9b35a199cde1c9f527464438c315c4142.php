<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_795c9c705c1870f4342472e991d300c6bf67720ee2cb586fe1efedbd4df232ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05c8a1020d6809983fe954bdf1737c20c140d74af42a36fbeb1ec062911839be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c8a1020d6809983fe954bdf1737c20c140d74af42a36fbeb1ec062911839be->enter($__internal_05c8a1020d6809983fe954bdf1737c20c140d74af42a36fbeb1ec062911839be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05c8a1020d6809983fe954bdf1737c20c140d74af42a36fbeb1ec062911839be->leave($__internal_05c8a1020d6809983fe954bdf1737c20c140d74af42a36fbeb1ec062911839be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b62625657e63bcc1afea8d1633060200d05757690d8f286a4a6f5911c850a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b62625657e63bcc1afea8d1633060200d05757690d8f286a4a6f5911c850a46->enter($__internal_8b62625657e63bcc1afea8d1633060200d05757690d8f286a4a6f5911c850a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8b62625657e63bcc1afea8d1633060200d05757690d8f286a4a6f5911c850a46->leave($__internal_8b62625657e63bcc1afea8d1633060200d05757690d8f286a4a6f5911c850a46_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_25d39643152602ee31a30c3bd2e469aa504c05744d44aef701f2ca7edddcf9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d39643152602ee31a30c3bd2e469aa504c05744d44aef701f2ca7edddcf9d3->enter($__internal_25d39643152602ee31a30c3bd2e469aa504c05744d44aef701f2ca7edddcf9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_25d39643152602ee31a30c3bd2e469aa504c05744d44aef701f2ca7edddcf9d3->leave($__internal_25d39643152602ee31a30c3bd2e469aa504c05744d44aef701f2ca7edddcf9d3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
