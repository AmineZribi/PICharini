<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2075be373b54ace421faf0284d3d48988b8a99c22724cda39017aa3d2132ffc5 extends Twig_Template
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
        $__internal_d00f6e9ad7a3e0cd688aabb7e58c35aad57ace66c467c1251bdb9c9aff7c87d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00f6e9ad7a3e0cd688aabb7e58c35aad57ace66c467c1251bdb9c9aff7c87d1->enter($__internal_d00f6e9ad7a3e0cd688aabb7e58c35aad57ace66c467c1251bdb9c9aff7c87d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d00f6e9ad7a3e0cd688aabb7e58c35aad57ace66c467c1251bdb9c9aff7c87d1->leave($__internal_d00f6e9ad7a3e0cd688aabb7e58c35aad57ace66c467c1251bdb9c9aff7c87d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
