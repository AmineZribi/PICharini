<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a739ed59a49b8145e5a2e5a134c716310c62da81119a893674c6a32fad88f560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e00eca087e23fa73e6af482695d36f1939e447020c82294a8b3a38b61b5ce1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00eca087e23fa73e6af482695d36f1939e447020c82294a8b3a38b61b5ce1fc->enter($__internal_e00eca087e23fa73e6af482695d36f1939e447020c82294a8b3a38b61b5ce1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e00eca087e23fa73e6af482695d36f1939e447020c82294a8b3a38b61b5ce1fc->leave($__internal_e00eca087e23fa73e6af482695d36f1939e447020c82294a8b3a38b61b5ce1fc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_104719b3ab9ed0886c051c3fc5e50b5752edd1a78bf166e0cb8b83964c90ab80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104719b3ab9ed0886c051c3fc5e50b5752edd1a78bf166e0cb8b83964c90ab80->enter($__internal_104719b3ab9ed0886c051c3fc5e50b5752edd1a78bf166e0cb8b83964c90ab80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_104719b3ab9ed0886c051c3fc5e50b5752edd1a78bf166e0cb8b83964c90ab80->leave($__internal_104719b3ab9ed0886c051c3fc5e50b5752edd1a78bf166e0cb8b83964c90ab80_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
