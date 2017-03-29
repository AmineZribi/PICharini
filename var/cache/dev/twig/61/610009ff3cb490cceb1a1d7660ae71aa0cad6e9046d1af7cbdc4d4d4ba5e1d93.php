<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_46825976ab9b566af19200ed2a87d5ed1975be5b85b00af70ccfed000365fa01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_3ab4c28d31404833945e2e60b0816632b0200f2a037c87c8ca1d64f12f323f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab4c28d31404833945e2e60b0816632b0200f2a037c87c8ca1d64f12f323f74->enter($__internal_3ab4c28d31404833945e2e60b0816632b0200f2a037c87c8ca1d64f12f323f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ab4c28d31404833945e2e60b0816632b0200f2a037c87c8ca1d64f12f323f74->leave($__internal_3ab4c28d31404833945e2e60b0816632b0200f2a037c87c8ca1d64f12f323f74_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a83cf9694dc6a914dee5aa7fe4b4e2000d2958f5a0a387e6dce74cf0c66907a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83cf9694dc6a914dee5aa7fe4b4e2000d2958f5a0a387e6dce74cf0c66907a0->enter($__internal_a83cf9694dc6a914dee5aa7fe4b4e2000d2958f5a0a387e6dce74cf0c66907a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a83cf9694dc6a914dee5aa7fe4b4e2000d2958f5a0a387e6dce74cf0c66907a0->leave($__internal_a83cf9694dc6a914dee5aa7fe4b4e2000d2958f5a0a387e6dce74cf0c66907a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_365dc7a86879e7c680a5ae93eb849cbf99d11560e21a664c8b7bb902785cdfeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365dc7a86879e7c680a5ae93eb849cbf99d11560e21a664c8b7bb902785cdfeb->enter($__internal_365dc7a86879e7c680a5ae93eb849cbf99d11560e21a664c8b7bb902785cdfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_365dc7a86879e7c680a5ae93eb849cbf99d11560e21a664c8b7bb902785cdfeb->leave($__internal_365dc7a86879e7c680a5ae93eb849cbf99d11560e21a664c8b7bb902785cdfeb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_46accd663bfebba604de01efc478e49d0a1e0087aecd8c5dd4c3f510ee535560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46accd663bfebba604de01efc478e49d0a1e0087aecd8c5dd4c3f510ee535560->enter($__internal_46accd663bfebba604de01efc478e49d0a1e0087aecd8c5dd4c3f510ee535560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_46accd663bfebba604de01efc478e49d0a1e0087aecd8c5dd4c3f510ee535560->leave($__internal_46accd663bfebba604de01efc478e49d0a1e0087aecd8c5dd4c3f510ee535560_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
