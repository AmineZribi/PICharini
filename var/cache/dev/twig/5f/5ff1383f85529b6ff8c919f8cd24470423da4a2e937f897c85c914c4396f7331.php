<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_f48be8726daae4dda0777ce0bd624e26f64ea84c7873e88b6b55695c99dbed25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4b86c4d21c00ab49c30a352d1ef84fba9963388649f02fd49d99c98bd8a9297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b86c4d21c00ab49c30a352d1ef84fba9963388649f02fd49d99c98bd8a9297->enter($__internal_d4b86c4d21c00ab49c30a352d1ef84fba9963388649f02fd49d99c98bd8a9297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"ThemeBucket\">
    <link rel=\"shortcut icon\" href=\"#\" type=\"image/png\">

    <title>Login</title>

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
</head>

<body class=\"login-body\">
";
        // line 24
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>

";
        
        $__internal_d4b86c4d21c00ab49c30a352d1ef84fba9963388649f02fd49d99c98bd8a9297->leave($__internal_d4b86c4d21c00ab49c30a352d1ef84fba9963388649f02fd49d99c98bd8a9297_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c86a71f9b1fadd658c18e1e0bafd1794e5b2aaee6b6d06603fc6ae0d7399106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c86a71f9b1fadd658c18e1e0bafd1794e5b2aaee6b6d06603fc6ae0d7399106->enter($__internal_5c86a71f9b1fadd658c18e1e0bafd1794e5b2aaee6b6d06603fc6ae0d7399106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_5c86a71f9b1fadd658c18e1e0bafd1794e5b2aaee6b6d06603fc6ae0d7399106->leave($__internal_5c86a71f9b1fadd658c18e1e0bafd1794e5b2aaee6b6d06603fc6ae0d7399106_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  79 => 35,  75 => 34,  71 => 33,  62 => 26,  60 => 24,  52 => 19,  48 => 18,  41 => 14,  37 => 13,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"ThemeBucket\">
    <link rel=\"shortcut icon\" href=\"#\" type=\"image/png\">

    <title>Login</title>

    <link href=\"{{ asset ('css/style.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/style-responsive.css')}}\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"{{ asset ('js/html5shiv.js')}}\"></script>
    <script src=\"{{ asset ('js/respond.min.js')}}\"></script>
    <![endif]-->
</head>

<body class=\"login-body\">
{% block fos_user_content %}
{% endblock fos_user_content %}




<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src=\"{{ asset ('js/jquery-1.10.2.min.js')}}\"></script>
<script src=\"{{ asset ('js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset ('js/modernizr.min.js')}}\"></script>

</body>
</html>

", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/layout.html.twig");
    }
}
