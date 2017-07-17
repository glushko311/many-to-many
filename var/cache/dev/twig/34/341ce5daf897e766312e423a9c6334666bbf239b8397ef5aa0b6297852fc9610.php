<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2093bb2fb183791d182371424d9e96590aebd83a1a5fb35566a8da9440a5bd6c extends Twig_Template
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
        $__internal_fccafbe9b5fb2697cdd732d62410286a43f0d01cd49339bef9d6db342471eae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccafbe9b5fb2697cdd732d62410286a43f0d01cd49339bef9d6db342471eae9->enter($__internal_fccafbe9b5fb2697cdd732d62410286a43f0d01cd49339bef9d6db342471eae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5514d62704b9954da5c5144c75f1c976b4d9b47d6b11ef26d0c4b1ae6321cfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5514d62704b9954da5c5144c75f1c976b4d9b47d6b11ef26d0c4b1ae6321cfcd->enter($__internal_5514d62704b9954da5c5144c75f1c976b4d9b47d6b11ef26d0c4b1ae6321cfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fccafbe9b5fb2697cdd732d62410286a43f0d01cd49339bef9d6db342471eae9->leave($__internal_fccafbe9b5fb2697cdd732d62410286a43f0d01cd49339bef9d6db342471eae9_prof);

        
        $__internal_5514d62704b9954da5c5144c75f1c976b4d9b47d6b11ef26d0c4b1ae6321cfcd->leave($__internal_5514d62704b9954da5c5144c75f1c976b4d9b47d6b11ef26d0c4b1ae6321cfcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
