<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_aed82f138a6b9006e3827c9f7529fcfd91ccfc90cc9e32d14b74d6f02cf7327c extends Twig_Template
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
        $__internal_57c5d08ab99bc3ad76d8f9099697f9b373b5f6f5e5bfaac20dcd9f7660788673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c5d08ab99bc3ad76d8f9099697f9b373b5f6f5e5bfaac20dcd9f7660788673->enter($__internal_57c5d08ab99bc3ad76d8f9099697f9b373b5f6f5e5bfaac20dcd9f7660788673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_559c1d23ec4a12dbddafa52b9c32af8abfc3ee25bc82bb3c6e2709b6eb4f0efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559c1d23ec4a12dbddafa52b9c32af8abfc3ee25bc82bb3c6e2709b6eb4f0efa->enter($__internal_559c1d23ec4a12dbddafa52b9c32af8abfc3ee25bc82bb3c6e2709b6eb4f0efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_57c5d08ab99bc3ad76d8f9099697f9b373b5f6f5e5bfaac20dcd9f7660788673->leave($__internal_57c5d08ab99bc3ad76d8f9099697f9b373b5f6f5e5bfaac20dcd9f7660788673_prof);

        
        $__internal_559c1d23ec4a12dbddafa52b9c32af8abfc3ee25bc82bb3c6e2709b6eb4f0efa->leave($__internal_559c1d23ec4a12dbddafa52b9c32af8abfc3ee25bc82bb3c6e2709b6eb4f0efa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\OpenServer\\domains\\many-to-many\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
