<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8d169e0aaf45f2f6034fc7d2ef69d8b5706c8573cdcdc4c6a901d6844eb737de extends Twig_Template
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
        $__internal_095497fabfcc46a5da4920d26cc18224ac3770c2ce39a72740f682d05801ec66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095497fabfcc46a5da4920d26cc18224ac3770c2ce39a72740f682d05801ec66->enter($__internal_095497fabfcc46a5da4920d26cc18224ac3770c2ce39a72740f682d05801ec66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5b30bd4149ef92ac9eea418b0ba0180b148dc6d09527ee261b1ad8eca7b2b325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b30bd4149ef92ac9eea418b0ba0180b148dc6d09527ee261b1ad8eca7b2b325->enter($__internal_5b30bd4149ef92ac9eea418b0ba0180b148dc6d09527ee261b1ad8eca7b2b325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_095497fabfcc46a5da4920d26cc18224ac3770c2ce39a72740f682d05801ec66->leave($__internal_095497fabfcc46a5da4920d26cc18224ac3770c2ce39a72740f682d05801ec66_prof);

        
        $__internal_5b30bd4149ef92ac9eea418b0ba0180b148dc6d09527ee261b1ad8eca7b2b325->leave($__internal_5b30bd4149ef92ac9eea418b0ba0180b148dc6d09527ee261b1ad8eca7b2b325_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
