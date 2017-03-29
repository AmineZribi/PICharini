<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ecc7744c98b5237cdc12fe5b944d57d02363bb1bdacb8e49b043c21201e3e96f extends Twig_Template
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
        $__internal_d03f76a70bb6591fa076f906336ad79c4596ca27a618f86b8f24aa3e9415b0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03f76a70bb6591fa076f906336ad79c4596ca27a618f86b8f24aa3e9415b0a7->enter($__internal_d03f76a70bb6591fa076f906336ad79c4596ca27a618f86b8f24aa3e9415b0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d03f76a70bb6591fa076f906336ad79c4596ca27a618f86b8f24aa3e9415b0a7->leave($__internal_d03f76a70bb6591fa076f906336ad79c4596ca27a618f86b8f24aa3e9415b0a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
