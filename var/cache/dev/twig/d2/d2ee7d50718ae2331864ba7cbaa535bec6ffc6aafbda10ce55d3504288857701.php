<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_a318effdc6f987d33f72b35c737489de59feb41c109e2c954a9ee31693849a44 extends Twig_Template
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
        $__internal_aad8dd1e5f8b40a1f50dc43a916212cff094b5a67c8ed392b4baf6e1a47cae8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad8dd1e5f8b40a1f50dc43a916212cff094b5a67c8ed392b4baf6e1a47cae8f->enter($__internal_aad8dd1e5f8b40a1f50dc43a916212cff094b5a67c8ed392b4baf6e1a47cae8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_b8f60736d1145dca873e1a1dc05021cdc9a2492ff69f3d4f2b28a7d42b27f53e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f60736d1145dca873e1a1dc05021cdc9a2492ff69f3d4f2b28a7d42b27f53e->enter($__internal_b8f60736d1145dca873e1a1dc05021cdc9a2492ff69f3d4f2b28a7d42b27f53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_aad8dd1e5f8b40a1f50dc43a916212cff094b5a67c8ed392b4baf6e1a47cae8f->leave($__internal_aad8dd1e5f8b40a1f50dc43a916212cff094b5a67c8ed392b4baf6e1a47cae8f_prof);

        
        $__internal_b8f60736d1145dca873e1a1dc05021cdc9a2492ff69f3d4f2b28a7d42b27f53e->leave($__internal_b8f60736d1145dca873e1a1dc05021cdc9a2492ff69f3d4f2b28a7d42b27f53e_prof);

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
", "@Framework/Form/form_start.html.php", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
