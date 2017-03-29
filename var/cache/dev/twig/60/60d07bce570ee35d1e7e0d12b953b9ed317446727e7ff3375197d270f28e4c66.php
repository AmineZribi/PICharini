<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_37ab8e39fa2b3a7c2bdd4028659400af6747a6bdb9ef1fd47c1e2c9c7d47c7bc extends Twig_Template
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
        $__internal_28487c7d1acda4eab63407ee0350be583a7a9fd51b303e3d02e2af023f11961d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28487c7d1acda4eab63407ee0350be583a7a9fd51b303e3d02e2af023f11961d->enter($__internal_28487c7d1acda4eab63407ee0350be583a7a9fd51b303e3d02e2af023f11961d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_28487c7d1acda4eab63407ee0350be583a7a9fd51b303e3d02e2af023f11961d->leave($__internal_28487c7d1acda4eab63407ee0350be583a7a9fd51b303e3d02e2af023f11961d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
