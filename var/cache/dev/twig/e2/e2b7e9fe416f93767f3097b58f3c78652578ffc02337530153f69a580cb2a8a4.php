<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b6beaf9787e5ce0fcd282433f12571fd3184cd40579d035db41bf67a73e2f1ef extends Twig_Template
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
        $__internal_68bc757eb1f584068961148308ceb836b3b676796696a481b446fa5cffbb55d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68bc757eb1f584068961148308ceb836b3b676796696a481b446fa5cffbb55d0->enter($__internal_68bc757eb1f584068961148308ceb836b3b676796696a481b446fa5cffbb55d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_68bc757eb1f584068961148308ceb836b3b676796696a481b446fa5cffbb55d0->leave($__internal_68bc757eb1f584068961148308ceb836b3b676796696a481b446fa5cffbb55d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
