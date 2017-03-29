<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_eff53437209e532b1ff6797c9a97f69a6594f1e7562e6a05f9e0e43cc54d8a7d extends Twig_Template
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
        $__internal_e62d7229966763a5059bafb9f6092646ba87f2b366e0672e67183ac8c11cebff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62d7229966763a5059bafb9f6092646ba87f2b366e0672e67183ac8c11cebff->enter($__internal_e62d7229966763a5059bafb9f6092646ba87f2b366e0672e67183ac8c11cebff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e62d7229966763a5059bafb9f6092646ba87f2b366e0672e67183ac8c11cebff->leave($__internal_e62d7229966763a5059bafb9f6092646ba87f2b366e0672e67183ac8c11cebff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
