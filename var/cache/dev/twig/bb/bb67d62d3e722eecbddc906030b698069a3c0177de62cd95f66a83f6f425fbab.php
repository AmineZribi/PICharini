<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ea294f2e7259562bf9f96625486c06b4e2da4469bbaef87f051ef1826e89836f extends Twig_Template
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
        $__internal_518b742c422208ab88651af01ddade18e790f5a9cac89aca4c6abfccc35906de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518b742c422208ab88651af01ddade18e790f5a9cac89aca4c6abfccc35906de->enter($__internal_518b742c422208ab88651af01ddade18e790f5a9cac89aca4c6abfccc35906de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_518b742c422208ab88651af01ddade18e790f5a9cac89aca4c6abfccc35906de->leave($__internal_518b742c422208ab88651af01ddade18e790f5a9cac89aca4c6abfccc35906de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
