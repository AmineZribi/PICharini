<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_20230360d63d8ced4f898b3c3056169aab1752f9979bfddc1e440a08d52b691f extends Twig_Template
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
        $__internal_2abea9dc9af602b0ce1112d80694d46a82e2efef4cf11836b2c4271bc3ef2b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abea9dc9af602b0ce1112d80694d46a82e2efef4cf11836b2c4271bc3ef2b47->enter($__internal_2abea9dc9af602b0ce1112d80694d46a82e2efef4cf11836b2c4271bc3ef2b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2abea9dc9af602b0ce1112d80694d46a82e2efef4cf11836b2c4271bc3ef2b47->leave($__internal_2abea9dc9af602b0ce1112d80694d46a82e2efef4cf11836b2c4271bc3ef2b47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/PICharini/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
