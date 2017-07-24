<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b1bbb85071be0b956b726aac6d4cd543bfbda541baa55c99bb30d98875d105e0 extends Twig_Template
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
        $__internal_eb77fc32ed36e122e54c27832780c2078a702f0286c1a09d3b7e7eb7938d3340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb77fc32ed36e122e54c27832780c2078a702f0286c1a09d3b7e7eb7938d3340->enter($__internal_eb77fc32ed36e122e54c27832780c2078a702f0286c1a09d3b7e7eb7938d3340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6f67116920ea71a9954b58d8cb56cf9e238397c94c7f85e5b43de6343907a4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f67116920ea71a9954b58d8cb56cf9e238397c94c7f85e5b43de6343907a4b4->enter($__internal_6f67116920ea71a9954b58d8cb56cf9e238397c94c7f85e5b43de6343907a4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_eb77fc32ed36e122e54c27832780c2078a702f0286c1a09d3b7e7eb7938d3340->leave($__internal_eb77fc32ed36e122e54c27832780c2078a702f0286c1a09d3b7e7eb7938d3340_prof);

        
        $__internal_6f67116920ea71a9954b58d8cb56cf9e238397c94c7f85e5b43de6343907a4b4->leave($__internal_6f67116920ea71a9954b58d8cb56cf9e238397c94c7f85e5b43de6343907a4b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
