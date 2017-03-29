<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_eaf2528a88f9132f0d13fab3b1cdd16902b892dc97c17b755dc0a511b5392246 extends Twig_Template
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
        $__internal_3677be09f576aa5040d5776b7948409fc8e4db79a9a9e06ede39c451a1ddc24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3677be09f576aa5040d5776b7948409fc8e4db79a9a9e06ede39c451a1ddc24e->enter($__internal_3677be09f576aa5040d5776b7948409fc8e4db79a9a9e06ede39c451a1ddc24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3677be09f576aa5040d5776b7948409fc8e4db79a9a9e06ede39c451a1ddc24e->leave($__internal_3677be09f576aa5040d5776b7948409fc8e4db79a9a9e06ede39c451a1ddc24e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
