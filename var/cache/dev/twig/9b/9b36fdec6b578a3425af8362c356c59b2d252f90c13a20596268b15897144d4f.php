<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d593f4458299476fc6b7d678190acab5d057489d282bdb6ae1dacf3df889929f extends Twig_Template
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
        $__internal_bbbd5f08ba07f54d0310ce26d55833c0ed8360e097f4cf15f6445bf5d94c3367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbbd5f08ba07f54d0310ce26d55833c0ed8360e097f4cf15f6445bf5d94c3367->enter($__internal_bbbd5f08ba07f54d0310ce26d55833c0ed8360e097f4cf15f6445bf5d94c3367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bbbd5f08ba07f54d0310ce26d55833c0ed8360e097f4cf15f6445bf5d94c3367->leave($__internal_bbbd5f08ba07f54d0310ce26d55833c0ed8360e097f4cf15f6445bf5d94c3367_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
