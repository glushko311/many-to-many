<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_88af072b24287294e937b0c1773ef4ea44ee513c8f59a15e861c05f3d65c2710 extends Twig_Template
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
        $__internal_d706b2e42812605c33868c7c4a81bfb476b80dfa1156f74d4da25573f87e3ca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d706b2e42812605c33868c7c4a81bfb476b80dfa1156f74d4da25573f87e3ca1->enter($__internal_d706b2e42812605c33868c7c4a81bfb476b80dfa1156f74d4da25573f87e3ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a4cc8e718d7a735cf5e512f8a6d2574016e3ecb1b7534695e3e328dd7611b77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cc8e718d7a735cf5e512f8a6d2574016e3ecb1b7534695e3e328dd7611b77f->enter($__internal_a4cc8e718d7a735cf5e512f8a6d2574016e3ecb1b7534695e3e328dd7611b77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d706b2e42812605c33868c7c4a81bfb476b80dfa1156f74d4da25573f87e3ca1->leave($__internal_d706b2e42812605c33868c7c4a81bfb476b80dfa1156f74d4da25573f87e3ca1_prof);

        
        $__internal_a4cc8e718d7a735cf5e512f8a6d2574016e3ecb1b7534695e3e328dd7611b77f->leave($__internal_a4cc8e718d7a735cf5e512f8a6d2574016e3ecb1b7534695e3e328dd7611b77f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
