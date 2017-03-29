<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8ce7eb57eeaf166898e2c3dfaafd1adaafad3cbbb0fea6970d7ab79358869fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2d1c2dd94bd69089b29e5a3d94b4f6fb4ab5a539434ed11c57b722cf1fc9fd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1c2dd94bd69089b29e5a3d94b4f6fb4ab5a539434ed11c57b722cf1fc9fd80->enter($__internal_2d1c2dd94bd69089b29e5a3d94b4f6fb4ab5a539434ed11c57b722cf1fc9fd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d1c2dd94bd69089b29e5a3d94b4f6fb4ab5a539434ed11c57b722cf1fc9fd80->leave($__internal_2d1c2dd94bd69089b29e5a3d94b4f6fb4ab5a539434ed11c57b722cf1fc9fd80_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c306f54fb4cc0f4dc520f7a3480313cc72041696132ae5cf87f9f08006ff1adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c306f54fb4cc0f4dc520f7a3480313cc72041696132ae5cf87f9f08006ff1adb->enter($__internal_c306f54fb4cc0f4dc520f7a3480313cc72041696132ae5cf87f9f08006ff1adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c306f54fb4cc0f4dc520f7a3480313cc72041696132ae5cf87f9f08006ff1adb->leave($__internal_c306f54fb4cc0f4dc520f7a3480313cc72041696132ae5cf87f9f08006ff1adb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc0fa8d017e3f02a81aab2ba2c70675e2aad486c6eb9464a7038abe42860dbdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0fa8d017e3f02a81aab2ba2c70675e2aad486c6eb9464a7038abe42860dbdd->enter($__internal_cc0fa8d017e3f02a81aab2ba2c70675e2aad486c6eb9464a7038abe42860dbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc0fa8d017e3f02a81aab2ba2c70675e2aad486c6eb9464a7038abe42860dbdd->leave($__internal_cc0fa8d017e3f02a81aab2ba2c70675e2aad486c6eb9464a7038abe42860dbdd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f6e19438c077ed82ed44d99061f305ca722cbad065d5fe6feb06515da5d7e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6e19438c077ed82ed44d99061f305ca722cbad065d5fe6feb06515da5d7e59->enter($__internal_0f6e19438c077ed82ed44d99061f305ca722cbad065d5fe6feb06515da5d7e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0f6e19438c077ed82ed44d99061f305ca722cbad065d5fe6feb06515da5d7e59->leave($__internal_0f6e19438c077ed82ed44d99061f305ca722cbad065d5fe6feb06515da5d7e59_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
