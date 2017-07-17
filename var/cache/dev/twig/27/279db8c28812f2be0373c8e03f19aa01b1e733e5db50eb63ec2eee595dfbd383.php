<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_bd8a9b7bbb75c5a7e67a209a63376644c6941ff59d643ed9ff799c794c403cdb extends Twig_Template
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
        $__internal_5e2ea5fc9e4e920f887816d22f87cd66c6e0ec571988e9c957f67a49047979ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2ea5fc9e4e920f887816d22f87cd66c6e0ec571988e9c957f67a49047979ba->enter($__internal_5e2ea5fc9e4e920f887816d22f87cd66c6e0ec571988e9c957f67a49047979ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_df2d2c8087107bafdf583d8e04e9824ea8afc85c6bba658517e7b43de3b30219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2d2c8087107bafdf583d8e04e9824ea8afc85c6bba658517e7b43de3b30219->enter($__internal_df2d2c8087107bafdf583d8e04e9824ea8afc85c6bba658517e7b43de3b30219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5e2ea5fc9e4e920f887816d22f87cd66c6e0ec571988e9c957f67a49047979ba->leave($__internal_5e2ea5fc9e4e920f887816d22f87cd66c6e0ec571988e9c957f67a49047979ba_prof);

        
        $__internal_df2d2c8087107bafdf583d8e04e9824ea8afc85c6bba658517e7b43de3b30219->leave($__internal_df2d2c8087107bafdf583d8e04e9824ea8afc85c6bba658517e7b43de3b30219_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
