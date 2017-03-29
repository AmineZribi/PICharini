<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_08e0eff8729188651c2d6f7b322706a4f7064819e2470e93bb1c486a40c2b451 extends Twig_Template
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
        $__internal_1f1a72e355d585bf3608dbd0848555c55851083d01c9a0d6b1b52bc6ebacd80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1a72e355d585bf3608dbd0848555c55851083d01c9a0d6b1b52bc6ebacd80b->enter($__internal_1f1a72e355d585bf3608dbd0848555c55851083d01c9a0d6b1b52bc6ebacd80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1f1a72e355d585bf3608dbd0848555c55851083d01c9a0d6b1b52bc6ebacd80b->leave($__internal_1f1a72e355d585bf3608dbd0848555c55851083d01c9a0d6b1b52bc6ebacd80b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
