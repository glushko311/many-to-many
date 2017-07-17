<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_38bd9d6651179f2ce9d9e17cd508c91540274678e1c74648cbe7c7711bd846fc extends Twig_Template
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
        $__internal_7e96c2ea52faddf34ad1e8e0d00431e608eda65a4ca08fbc1bc0bafd581983c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e96c2ea52faddf34ad1e8e0d00431e608eda65a4ca08fbc1bc0bafd581983c2->enter($__internal_7e96c2ea52faddf34ad1e8e0d00431e608eda65a4ca08fbc1bc0bafd581983c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_7276d81e1e3d26402d53560e97704fe6c47a7edc778987d137910901733a37b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7276d81e1e3d26402d53560e97704fe6c47a7edc778987d137910901733a37b8->enter($__internal_7276d81e1e3d26402d53560e97704fe6c47a7edc778987d137910901733a37b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7e96c2ea52faddf34ad1e8e0d00431e608eda65a4ca08fbc1bc0bafd581983c2->leave($__internal_7e96c2ea52faddf34ad1e8e0d00431e608eda65a4ca08fbc1bc0bafd581983c2_prof);

        
        $__internal_7276d81e1e3d26402d53560e97704fe6c47a7edc778987d137910901733a37b8->leave($__internal_7276d81e1e3d26402d53560e97704fe6c47a7edc778987d137910901733a37b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
