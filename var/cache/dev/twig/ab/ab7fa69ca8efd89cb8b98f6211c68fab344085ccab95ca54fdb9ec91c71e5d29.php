<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_5f5dd4ff0e1dbf9de1fc99dc42275cd958763e5cb3d4a24d47c271de38c344c6 extends Twig_Template
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
        $__internal_f684cc583d35009f2d641ba926e4e66094bdc35ddfddaf5bc082b08b57901a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f684cc583d35009f2d641ba926e4e66094bdc35ddfddaf5bc082b08b57901a42->enter($__internal_f684cc583d35009f2d641ba926e4e66094bdc35ddfddaf5bc082b08b57901a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_f684cc583d35009f2d641ba926e4e66094bdc35ddfddaf5bc082b08b57901a42->leave($__internal_f684cc583d35009f2d641ba926e4e66094bdc35ddfddaf5bc082b08b57901a42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
