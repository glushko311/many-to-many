<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c61f672806e58d853d786c0ada3d4e7e76096fbb5b25ae5ecbbbe8d599249065 extends Twig_Template
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
        $__internal_0b439d4e4165849c8fa59a57681068992a91ab8d2600cefa8634a9f5686193d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b439d4e4165849c8fa59a57681068992a91ab8d2600cefa8634a9f5686193d1->enter($__internal_0b439d4e4165849c8fa59a57681068992a91ab8d2600cefa8634a9f5686193d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_520e3bfa5ec545db805c7e7e532821d2b32eb9bc75f3c44e9d21d09aa833b2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520e3bfa5ec545db805c7e7e532821d2b32eb9bc75f3c44e9d21d09aa833b2d1->enter($__internal_520e3bfa5ec545db805c7e7e532821d2b32eb9bc75f3c44e9d21d09aa833b2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0b439d4e4165849c8fa59a57681068992a91ab8d2600cefa8634a9f5686193d1->leave($__internal_0b439d4e4165849c8fa59a57681068992a91ab8d2600cefa8634a9f5686193d1_prof);

        
        $__internal_520e3bfa5ec545db805c7e7e532821d2b32eb9bc75f3c44e9d21d09aa833b2d1->leave($__internal_520e3bfa5ec545db805c7e7e532821d2b32eb9bc75f3c44e9d21d09aa833b2d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
