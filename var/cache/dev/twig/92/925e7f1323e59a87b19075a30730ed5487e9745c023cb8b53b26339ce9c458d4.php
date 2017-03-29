<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_29ddc1eca04b767cf92df40577bece6f77c2001c1a299cf5d954f332635d2621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_ae74c364f6845d01c35a147d65c10f4615946d7f74520be8eb55ddc4aded90e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae74c364f6845d01c35a147d65c10f4615946d7f74520be8eb55ddc4aded90e4->enter($__internal_ae74c364f6845d01c35a147d65c10f4615946d7f74520be8eb55ddc4aded90e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae74c364f6845d01c35a147d65c10f4615946d7f74520be8eb55ddc4aded90e4->leave($__internal_ae74c364f6845d01c35a147d65c10f4615946d7f74520be8eb55ddc4aded90e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_baec350d03e04bac367bd72f1744196c513740bcfe9f437609f54d8116d48dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baec350d03e04bac367bd72f1744196c513740bcfe9f437609f54d8116d48dfc->enter($__internal_baec350d03e04bac367bd72f1744196c513740bcfe9f437609f54d8116d48dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_baec350d03e04bac367bd72f1744196c513740bcfe9f437609f54d8116d48dfc->leave($__internal_baec350d03e04bac367bd72f1744196c513740bcfe9f437609f54d8116d48dfc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9e502c6ca4a353463d7d737f29ff354d6942635009cb2c41c656fdbf853111b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e502c6ca4a353463d7d737f29ff354d6942635009cb2c41c656fdbf853111b->enter($__internal_c9e502c6ca4a353463d7d737f29ff354d6942635009cb2c41c656fdbf853111b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9e502c6ca4a353463d7d737f29ff354d6942635009cb2c41c656fdbf853111b->leave($__internal_c9e502c6ca4a353463d7d737f29ff354d6942635009cb2c41c656fdbf853111b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b02bb1373f0906389d1d4d0abbca5ffa26debc026fc7a6f1eb514ca0ef5ea34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b02bb1373f0906389d1d4d0abbca5ffa26debc026fc7a6f1eb514ca0ef5ea34->enter($__internal_8b02bb1373f0906389d1d4d0abbca5ffa26debc026fc7a6f1eb514ca0ef5ea34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8b02bb1373f0906389d1d4d0abbca5ffa26debc026fc7a6f1eb514ca0ef5ea34->leave($__internal_8b02bb1373f0906389d1d4d0abbca5ffa26debc026fc7a6f1eb514ca0ef5ea34_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
