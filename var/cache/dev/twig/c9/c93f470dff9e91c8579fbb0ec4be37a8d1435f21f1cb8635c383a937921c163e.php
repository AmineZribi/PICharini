<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_da15a56bdd00dbe6db43a0fef215a7c585dbc8762353c937aeeae5705d8ed832 extends Twig_Template
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
        $__internal_307c82ba90e0b7412ce82909c34154c589176b5a09ec21a76ba69cd0a7927cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307c82ba90e0b7412ce82909c34154c589176b5a09ec21a76ba69cd0a7927cf1->enter($__internal_307c82ba90e0b7412ce82909c34154c589176b5a09ec21a76ba69cd0a7927cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_307c82ba90e0b7412ce82909c34154c589176b5a09ec21a76ba69cd0a7927cf1->leave($__internal_307c82ba90e0b7412ce82909c34154c589176b5a09ec21a76ba69cd0a7927cf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
