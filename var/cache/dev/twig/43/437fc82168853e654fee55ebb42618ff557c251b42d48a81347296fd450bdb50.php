<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_09f57fdc096c2fa445d0a549bf55a5781b4a46df10ff858bbab987900b12c25e extends Twig_Template
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
        $__internal_a4667ac77348de1e9394dba5e0e4e797c7b8bb68d2c1ada97446cfb2b1817d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4667ac77348de1e9394dba5e0e4e797c7b8bb68d2c1ada97446cfb2b1817d32->enter($__internal_a4667ac77348de1e9394dba5e0e4e797c7b8bb68d2c1ada97446cfb2b1817d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a4667ac77348de1e9394dba5e0e4e797c7b8bb68d2c1ada97446cfb2b1817d32->leave($__internal_a4667ac77348de1e9394dba5e0e4e797c7b8bb68d2c1ada97446cfb2b1817d32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
