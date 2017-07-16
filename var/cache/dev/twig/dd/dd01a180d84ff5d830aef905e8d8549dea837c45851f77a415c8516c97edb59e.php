<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_697be029229657c2afc06329c2896ac523db2fc90a05a3f1b4fbbd2ad7075b2b extends Twig_Template
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
        $__internal_5ab5f2e47ed46ec7787a7cb6ef374bae02832bf69e37e6f2bb2404b014337a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab5f2e47ed46ec7787a7cb6ef374bae02832bf69e37e6f2bb2404b014337a36->enter($__internal_5ab5f2e47ed46ec7787a7cb6ef374bae02832bf69e37e6f2bb2404b014337a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8391c928e67d51745c3d07e2b14ca1d5065ac84bc563e9ed0f0245ebfe18e2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8391c928e67d51745c3d07e2b14ca1d5065ac84bc563e9ed0f0245ebfe18e2ed->enter($__internal_8391c928e67d51745c3d07e2b14ca1d5065ac84bc563e9ed0f0245ebfe18e2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5ab5f2e47ed46ec7787a7cb6ef374bae02832bf69e37e6f2bb2404b014337a36->leave($__internal_5ab5f2e47ed46ec7787a7cb6ef374bae02832bf69e37e6f2bb2404b014337a36_prof);

        
        $__internal_8391c928e67d51745c3d07e2b14ca1d5065ac84bc563e9ed0f0245ebfe18e2ed->leave($__internal_8391c928e67d51745c3d07e2b14ca1d5065ac84bc563e9ed0f0245ebfe18e2ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
