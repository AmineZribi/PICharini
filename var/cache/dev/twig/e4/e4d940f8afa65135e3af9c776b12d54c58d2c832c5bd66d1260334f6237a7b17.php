<?php

/* ::base.html.twig */
class __TwigTemplate_3021766ed2225e3a68d444af94728eab5a7906b86a804f921320b2491d192a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9d0a364695df4ab393496fa9b8d16a4c6bb95b8e8c4be3b7e054b03249692db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d0a364695df4ab393496fa9b8d16a4c6bb95b8e8c4be3b7e054b03249692db->enter($__internal_f9d0a364695df4ab393496fa9b8d16a4c6bb95b8e8c4be3b7e054b03249692db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f9d0a364695df4ab393496fa9b8d16a4c6bb95b8e8c4be3b7e054b03249692db->leave($__internal_f9d0a364695df4ab393496fa9b8d16a4c6bb95b8e8c4be3b7e054b03249692db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_517c8015a19a88ef5aa029e39d794f2c1c1623b16faaa6c2eb84c5bb90e7e38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517c8015a19a88ef5aa029e39d794f2c1c1623b16faaa6c2eb84c5bb90e7e38f->enter($__internal_517c8015a19a88ef5aa029e39d794f2c1c1623b16faaa6c2eb84c5bb90e7e38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_517c8015a19a88ef5aa029e39d794f2c1c1623b16faaa6c2eb84c5bb90e7e38f->leave($__internal_517c8015a19a88ef5aa029e39d794f2c1c1623b16faaa6c2eb84c5bb90e7e38f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47631cce8838b7633a6c6156438b2d2f784ae84214d8b1300f3b64f7de14514b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47631cce8838b7633a6c6156438b2d2f784ae84214d8b1300f3b64f7de14514b->enter($__internal_47631cce8838b7633a6c6156438b2d2f784ae84214d8b1300f3b64f7de14514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_47631cce8838b7633a6c6156438b2d2f784ae84214d8b1300f3b64f7de14514b->leave($__internal_47631cce8838b7633a6c6156438b2d2f784ae84214d8b1300f3b64f7de14514b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba69a7b43bf6ab67e2bbf8070dc0b45dd9265939d874fe2c516e53a952809feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba69a7b43bf6ab67e2bbf8070dc0b45dd9265939d874fe2c516e53a952809feb->enter($__internal_ba69a7b43bf6ab67e2bbf8070dc0b45dd9265939d874fe2c516e53a952809feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ba69a7b43bf6ab67e2bbf8070dc0b45dd9265939d874fe2c516e53a952809feb->leave($__internal_ba69a7b43bf6ab67e2bbf8070dc0b45dd9265939d874fe2c516e53a952809feb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec594ca14020b0ad0faabb25ce9a160a9858058fa7ab9b5b3f9e6f3ea3b4922a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec594ca14020b0ad0faabb25ce9a160a9858058fa7ab9b5b3f9e6f3ea3b4922a->enter($__internal_ec594ca14020b0ad0faabb25ce9a160a9858058fa7ab9b5b3f9e6f3ea3b4922a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ec594ca14020b0ad0faabb25ce9a160a9858058fa7ab9b5b3f9e6f3ea3b4922a->leave($__internal_ec594ca14020b0ad0faabb25ce9a160a9858058fa7ab9b5b3f9e6f3ea3b4922a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/PICharini/app/Resources/views/base.html.twig");
    }
}
