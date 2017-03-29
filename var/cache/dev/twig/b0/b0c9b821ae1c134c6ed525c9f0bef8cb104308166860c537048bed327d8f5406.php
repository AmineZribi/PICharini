<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_e2118704dad06fcaee3c10d004d56be49675157133e15ca43937b4162a2c7870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6469e6e2481cc1fe9a1e97cde628b9fe031d86d3c89a5b5860713e06f87c52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6469e6e2481cc1fe9a1e97cde628b9fe031d86d3c89a5b5860713e06f87c52b->enter($__internal_e6469e6e2481cc1fe9a1e97cde628b9fe031d86d3c89a5b5860713e06f87c52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6469e6e2481cc1fe9a1e97cde628b9fe031d86d3c89a5b5860713e06f87c52b->leave($__internal_e6469e6e2481cc1fe9a1e97cde628b9fe031d86d3c89a5b5860713e06f87c52b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_551671bf0278cd5516cf5e51b9320313106166fa8253e28d32ac844b95fe2c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551671bf0278cd5516cf5e51b9320313106166fa8253e28d32ac844b95fe2c4f->enter($__internal_551671bf0278cd5516cf5e51b9320313106166fa8253e28d32ac844b95fe2c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_551671bf0278cd5516cf5e51b9320313106166fa8253e28d32ac844b95fe2c4f->leave($__internal_551671bf0278cd5516cf5e51b9320313106166fa8253e28d32ac844b95fe2c4f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/Applications/MAMP/htdocs/PICharini/src/UserBundle/Resources/views/Registration/check_email.html.twig");
    }
}
