<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_dea05a16990ecce5c4d4f705d6b312e6eaee5410cbc723b2cf9731a21c18b04a extends Twig_Template
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
        $__internal_ecd0ecd9d532902980ea6f98520f4552ba6a8edf00a1176f18188022b40ebd3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd0ecd9d532902980ea6f98520f4552ba6a8edf00a1176f18188022b40ebd3e->enter($__internal_ecd0ecd9d532902980ea6f98520f4552ba6a8edf00a1176f18188022b40ebd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ecd0ecd9d532902980ea6f98520f4552ba6a8edf00a1176f18188022b40ebd3e->leave($__internal_ecd0ecd9d532902980ea6f98520f4552ba6a8edf00a1176f18188022b40ebd3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
