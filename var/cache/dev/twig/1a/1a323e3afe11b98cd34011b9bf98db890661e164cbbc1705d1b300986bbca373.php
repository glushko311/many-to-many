<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bb018802cc1b647dc81ddec9573108cbeb71ae7a7b5823aa03a33e6ab9b10d30 extends Twig_Template
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
        $__internal_595509735d68a221148f9ed83ce420c53960446dc8d3520942f06bac35975f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595509735d68a221148f9ed83ce420c53960446dc8d3520942f06bac35975f7f->enter($__internal_595509735d68a221148f9ed83ce420c53960446dc8d3520942f06bac35975f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_267288c7b4b8477d18b956f642462e4437055a7563b1cbe595d6f6b79870b161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267288c7b4b8477d18b956f642462e4437055a7563b1cbe595d6f6b79870b161->enter($__internal_267288c7b4b8477d18b956f642462e4437055a7563b1cbe595d6f6b79870b161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_595509735d68a221148f9ed83ce420c53960446dc8d3520942f06bac35975f7f->leave($__internal_595509735d68a221148f9ed83ce420c53960446dc8d3520942f06bac35975f7f_prof);

        
        $__internal_267288c7b4b8477d18b956f642462e4437055a7563b1cbe595d6f6b79870b161->leave($__internal_267288c7b4b8477d18b956f642462e4437055a7563b1cbe595d6f6b79870b161_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
