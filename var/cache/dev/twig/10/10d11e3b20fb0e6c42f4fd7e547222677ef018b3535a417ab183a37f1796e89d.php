<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_91e040af0420d93321c06321941f9812f86d48de80a416169b577cd61c38ba72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74703527be3f9cf8b27d6e0d5381b58b889ea964d81e9ced87db25bf1dbf7d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74703527be3f9cf8b27d6e0d5381b58b889ea964d81e9ced87db25bf1dbf7d76->enter($__internal_74703527be3f9cf8b27d6e0d5381b58b889ea964d81e9ced87db25bf1dbf7d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_74703527be3f9cf8b27d6e0d5381b58b889ea964d81e9ced87db25bf1dbf7d76->leave($__internal_74703527be3f9cf8b27d6e0d5381b58b889ea964d81e9ced87db25bf1dbf7d76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
