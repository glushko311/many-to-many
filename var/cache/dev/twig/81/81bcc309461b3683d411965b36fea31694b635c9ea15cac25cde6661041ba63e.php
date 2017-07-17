<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_89f70cb4f5bdbb6bcd253f5e2f92f701712b2e717c9c1d522639ee8c0fdd8414 extends Twig_Template
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
        $__internal_67aa7f6e905c37d3eafd212ae775f6e17e99f54a91cf70140fea963f1c110f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67aa7f6e905c37d3eafd212ae775f6e17e99f54a91cf70140fea963f1c110f0c->enter($__internal_67aa7f6e905c37d3eafd212ae775f6e17e99f54a91cf70140fea963f1c110f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4a8f4823c9c527a046178fc1873b27194ee4f4551aaa62efebad081ff022e484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8f4823c9c527a046178fc1873b27194ee4f4551aaa62efebad081ff022e484->enter($__internal_4a8f4823c9c527a046178fc1873b27194ee4f4551aaa62efebad081ff022e484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_67aa7f6e905c37d3eafd212ae775f6e17e99f54a91cf70140fea963f1c110f0c->leave($__internal_67aa7f6e905c37d3eafd212ae775f6e17e99f54a91cf70140fea963f1c110f0c_prof);

        
        $__internal_4a8f4823c9c527a046178fc1873b27194ee4f4551aaa62efebad081ff022e484->leave($__internal_4a8f4823c9c527a046178fc1873b27194ee4f4551aaa62efebad081ff022e484_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
