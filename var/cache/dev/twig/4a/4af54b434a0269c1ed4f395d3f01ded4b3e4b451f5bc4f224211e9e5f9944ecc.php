<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0adc651a122259162d9c9952e4e54c95b27fc08ca5c9a6d3f319acc7b990e919 extends Twig_Template
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
        $__internal_96a47d511171315b9fc7121d9f3dbc1852da6a745957aeed517dab976b6f96e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a47d511171315b9fc7121d9f3dbc1852da6a745957aeed517dab976b6f96e0->enter($__internal_96a47d511171315b9fc7121d9f3dbc1852da6a745957aeed517dab976b6f96e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_96a47d511171315b9fc7121d9f3dbc1852da6a745957aeed517dab976b6f96e0->leave($__internal_96a47d511171315b9fc7121d9f3dbc1852da6a745957aeed517dab976b6f96e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
