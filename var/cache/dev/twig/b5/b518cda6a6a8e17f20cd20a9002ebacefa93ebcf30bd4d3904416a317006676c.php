<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4fa23a947e32c478f3f2e369e43e14326bf62c17ee666395be20aa3df1613844 extends Twig_Template
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
        $__internal_5408bcb03fe4e007c7d2bdf86b4cd4600294f55065b5c611b1f59a8759a3e659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5408bcb03fe4e007c7d2bdf86b4cd4600294f55065b5c611b1f59a8759a3e659->enter($__internal_5408bcb03fe4e007c7d2bdf86b4cd4600294f55065b5c611b1f59a8759a3e659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_bf330c7a8932d885bfd2bd399849e4f671fce7bab7aa11777f0dc9cb30807487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf330c7a8932d885bfd2bd399849e4f671fce7bab7aa11777f0dc9cb30807487->enter($__internal_bf330c7a8932d885bfd2bd399849e4f671fce7bab7aa11777f0dc9cb30807487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5408bcb03fe4e007c7d2bdf86b4cd4600294f55065b5c611b1f59a8759a3e659->leave($__internal_5408bcb03fe4e007c7d2bdf86b4cd4600294f55065b5c611b1f59a8759a3e659_prof);

        
        $__internal_bf330c7a8932d885bfd2bd399849e4f671fce7bab7aa11777f0dc9cb30807487->leave($__internal_bf330c7a8932d885bfd2bd399849e4f671fce7bab7aa11777f0dc9cb30807487_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
