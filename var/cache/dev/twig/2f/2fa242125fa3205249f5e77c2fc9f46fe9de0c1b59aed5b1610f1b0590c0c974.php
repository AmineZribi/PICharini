<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_c33d084ca8f2d06939b0e148bf1a1236a5fae999e85c01fcde970f2097af707e extends Twig_Template
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
        $__internal_5bc288fc0cf69cf022bce1c3af3b99660e5ba26df10d54cbbc5afd17f3ab0beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc288fc0cf69cf022bce1c3af3b99660e5ba26df10d54cbbc5afd17f3ab0beb->enter($__internal_5bc288fc0cf69cf022bce1c3af3b99660e5ba26df10d54cbbc5afd17f3ab0beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_5bc288fc0cf69cf022bce1c3af3b99660e5ba26df10d54cbbc5afd17f3ab0beb->leave($__internal_5bc288fc0cf69cf022bce1c3af3b99660e5ba26df10d54cbbc5afd17f3ab0beb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
