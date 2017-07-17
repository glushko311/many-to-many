<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ea479208d504151f0438e95b8a51da6e907bdc9fb0791e24e5e1825efb6d996d extends Twig_Template
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
        $__internal_ab0d385bce7c81cd4cb7fb5cf95cc866594d6719937a8b5a045af7be05f58071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0d385bce7c81cd4cb7fb5cf95cc866594d6719937a8b5a045af7be05f58071->enter($__internal_ab0d385bce7c81cd4cb7fb5cf95cc866594d6719937a8b5a045af7be05f58071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f63ed28b229afeed9e01b55a8979df2d468b711520f25a5f226b24a626c8ff8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63ed28b229afeed9e01b55a8979df2d468b711520f25a5f226b24a626c8ff8e->enter($__internal_f63ed28b229afeed9e01b55a8979df2d468b711520f25a5f226b24a626c8ff8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_ab0d385bce7c81cd4cb7fb5cf95cc866594d6719937a8b5a045af7be05f58071->leave($__internal_ab0d385bce7c81cd4cb7fb5cf95cc866594d6719937a8b5a045af7be05f58071_prof);

        
        $__internal_f63ed28b229afeed9e01b55a8979df2d468b711520f25a5f226b24a626c8ff8e->leave($__internal_f63ed28b229afeed9e01b55a8979df2d468b711520f25a5f226b24a626c8ff8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
