<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e8a9871f7ff9bebc2339fb3b3c06b8aa0a8203a459b4be56c25abcd905882efd extends Twig_Template
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
        $__internal_8af6020eeb82692f08af5175f67a355b4850d1b6f2c4e178d6e6130a4f62a7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af6020eeb82692f08af5175f67a355b4850d1b6f2c4e178d6e6130a4f62a7a6->enter($__internal_8af6020eeb82692f08af5175f67a355b4850d1b6f2c4e178d6e6130a4f62a7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8af6020eeb82692f08af5175f67a355b4850d1b6f2c4e178d6e6130a4f62a7a6->leave($__internal_8af6020eeb82692f08af5175f67a355b4850d1b6f2c4e178d6e6130a4f62a7a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
