<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5f8c8148a35cbbb0021cbec11f41eb041ddb387173db835307716a67541e81d2 extends Twig_Template
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
        $__internal_1e1bbca4549ae8df843921d0a0692b24650a331c93d2496c3022cdcc1803b1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e1bbca4549ae8df843921d0a0692b24650a331c93d2496c3022cdcc1803b1e6->enter($__internal_1e1bbca4549ae8df843921d0a0692b24650a331c93d2496c3022cdcc1803b1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_00fdd9f44f49fd839a372249955dc722cd4fa985c2a0e03c95e44d49a5216f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fdd9f44f49fd839a372249955dc722cd4fa985c2a0e03c95e44d49a5216f9a->enter($__internal_00fdd9f44f49fd839a372249955dc722cd4fa985c2a0e03c95e44d49a5216f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1e1bbca4549ae8df843921d0a0692b24650a331c93d2496c3022cdcc1803b1e6->leave($__internal_1e1bbca4549ae8df843921d0a0692b24650a331c93d2496c3022cdcc1803b1e6_prof);

        
        $__internal_00fdd9f44f49fd839a372249955dc722cd4fa985c2a0e03c95e44d49a5216f9a->leave($__internal_00fdd9f44f49fd839a372249955dc722cd4fa985c2a0e03c95e44d49a5216f9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
