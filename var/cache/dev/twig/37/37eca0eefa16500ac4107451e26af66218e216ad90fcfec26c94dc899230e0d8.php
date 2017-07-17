<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_91f8eadb50b3e3cd330e838c315beaa85e184bf96a39e636c99369ed49fca04c extends Twig_Template
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
        $__internal_cea92b04cc7ac4a3dbe692a27bc6962a40b547fdb481430dfd71b662a17835c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea92b04cc7ac4a3dbe692a27bc6962a40b547fdb481430dfd71b662a17835c2->enter($__internal_cea92b04cc7ac4a3dbe692a27bc6962a40b547fdb481430dfd71b662a17835c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_fa3dcb68f0d5120690126e1b6c2c24229804a02eca58a063dd0887686982cfe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3dcb68f0d5120690126e1b6c2c24229804a02eca58a063dd0887686982cfe3->enter($__internal_fa3dcb68f0d5120690126e1b6c2c24229804a02eca58a063dd0887686982cfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cea92b04cc7ac4a3dbe692a27bc6962a40b547fdb481430dfd71b662a17835c2->leave($__internal_cea92b04cc7ac4a3dbe692a27bc6962a40b547fdb481430dfd71b662a17835c2_prof);

        
        $__internal_fa3dcb68f0d5120690126e1b6c2c24229804a02eca58a063dd0887686982cfe3->leave($__internal_fa3dcb68f0d5120690126e1b6c2c24229804a02eca58a063dd0887686982cfe3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
", "@Framework/Form/email_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
