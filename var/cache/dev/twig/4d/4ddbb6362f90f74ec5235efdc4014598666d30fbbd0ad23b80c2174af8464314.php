<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1fc27556285e89f27223a94a4a15169060a85223e538b5a974c90defdf8497f4 extends Twig_Template
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
        $__internal_6cd2382ae65737aa9372f9f73b417de46c2c2ede8e40f6afdca787b4b3ee6a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd2382ae65737aa9372f9f73b417de46c2c2ede8e40f6afdca787b4b3ee6a2a->enter($__internal_6cd2382ae65737aa9372f9f73b417de46c2c2ede8e40f6afdca787b4b3ee6a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_6cd2382ae65737aa9372f9f73b417de46c2c2ede8e40f6afdca787b4b3ee6a2a->leave($__internal_6cd2382ae65737aa9372f9f73b417de46c2c2ede8e40f6afdca787b4b3ee6a2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
