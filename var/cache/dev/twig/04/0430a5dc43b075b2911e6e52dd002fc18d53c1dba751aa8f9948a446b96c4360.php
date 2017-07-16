<?php

/* ::base.html.twig */
class __TwigTemplate_dc53bcd21753282c61aea5d4032a28c2ba88b3ef31f1f3c1c22dacb40b6e1219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_568e24daac91c445cdb3005502658f6c7d08665dc07a3c9d7680ccd75e3cbb55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568e24daac91c445cdb3005502658f6c7d08665dc07a3c9d7680ccd75e3cbb55->enter($__internal_568e24daac91c445cdb3005502658f6c7d08665dc07a3c9d7680ccd75e3cbb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_bab470edfd66ff74c2a1db723f82f109a15f8a86f159f4fec3721f24770b70de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab470edfd66ff74c2a1db723f82f109a15f8a86f159f4fec3721f24770b70de->enter($__internal_bab470edfd66ff74c2a1db723f82f109a15f8a86f159f4fec3721f24770b70de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_568e24daac91c445cdb3005502658f6c7d08665dc07a3c9d7680ccd75e3cbb55->leave($__internal_568e24daac91c445cdb3005502658f6c7d08665dc07a3c9d7680ccd75e3cbb55_prof);

        
        $__internal_bab470edfd66ff74c2a1db723f82f109a15f8a86f159f4fec3721f24770b70de->leave($__internal_bab470edfd66ff74c2a1db723f82f109a15f8a86f159f4fec3721f24770b70de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_52f091e08e87f8eec92ae1fae8c861f6e5540c8a7d8fff419ae4dd92c7b7e0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f091e08e87f8eec92ae1fae8c861f6e5540c8a7d8fff419ae4dd92c7b7e0a8->enter($__internal_52f091e08e87f8eec92ae1fae8c861f6e5540c8a7d8fff419ae4dd92c7b7e0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_546997b25f01a66d806e470aae7d99aabedcc072e41ec88293cf2caa6f10ab52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546997b25f01a66d806e470aae7d99aabedcc072e41ec88293cf2caa6f10ab52->enter($__internal_546997b25f01a66d806e470aae7d99aabedcc072e41ec88293cf2caa6f10ab52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_546997b25f01a66d806e470aae7d99aabedcc072e41ec88293cf2caa6f10ab52->leave($__internal_546997b25f01a66d806e470aae7d99aabedcc072e41ec88293cf2caa6f10ab52_prof);

        
        $__internal_52f091e08e87f8eec92ae1fae8c861f6e5540c8a7d8fff419ae4dd92c7b7e0a8->leave($__internal_52f091e08e87f8eec92ae1fae8c861f6e5540c8a7d8fff419ae4dd92c7b7e0a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fad0951963c3ab66a78978783cc00fe22d17245177dab4a3825930662355598d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad0951963c3ab66a78978783cc00fe22d17245177dab4a3825930662355598d->enter($__internal_fad0951963c3ab66a78978783cc00fe22d17245177dab4a3825930662355598d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7f2c07bf90dcc11af733cf8deb8b1c910775534a0af587fb0f30e749754653bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2c07bf90dcc11af733cf8deb8b1c910775534a0af587fb0f30e749754653bc->enter($__internal_7f2c07bf90dcc11af733cf8deb8b1c910775534a0af587fb0f30e749754653bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7f2c07bf90dcc11af733cf8deb8b1c910775534a0af587fb0f30e749754653bc->leave($__internal_7f2c07bf90dcc11af733cf8deb8b1c910775534a0af587fb0f30e749754653bc_prof);

        
        $__internal_fad0951963c3ab66a78978783cc00fe22d17245177dab4a3825930662355598d->leave($__internal_fad0951963c3ab66a78978783cc00fe22d17245177dab4a3825930662355598d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe7c8e2ac1bae2d4b7a363d74183fccf901ee925c5e9b3e2724d8776044ea4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7c8e2ac1bae2d4b7a363d74183fccf901ee925c5e9b3e2724d8776044ea4dd->enter($__internal_fe7c8e2ac1bae2d4b7a363d74183fccf901ee925c5e9b3e2724d8776044ea4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e56720ead7f9d952428cd71e76b9e76207afbcca01ffb837ef9e76a733fafae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56720ead7f9d952428cd71e76b9e76207afbcca01ffb837ef9e76a733fafae1->enter($__internal_e56720ead7f9d952428cd71e76b9e76207afbcca01ffb837ef9e76a733fafae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e56720ead7f9d952428cd71e76b9e76207afbcca01ffb837ef9e76a733fafae1->leave($__internal_e56720ead7f9d952428cd71e76b9e76207afbcca01ffb837ef9e76a733fafae1_prof);

        
        $__internal_fe7c8e2ac1bae2d4b7a363d74183fccf901ee925c5e9b3e2724d8776044ea4dd->leave($__internal_fe7c8e2ac1bae2d4b7a363d74183fccf901ee925c5e9b3e2724d8776044ea4dd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9830e8f39a798d44a7a748f35a23ce3d695ce2d2995334b28ed5baf946e63ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9830e8f39a798d44a7a748f35a23ce3d695ce2d2995334b28ed5baf946e63ada->enter($__internal_9830e8f39a798d44a7a748f35a23ce3d695ce2d2995334b28ed5baf946e63ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_451143a1ce0d52f1d9a50ef8368f7aa1fcff9dbf6a2e2d65e4b55da424087b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451143a1ce0d52f1d9a50ef8368f7aa1fcff9dbf6a2e2d65e4b55da424087b20->enter($__internal_451143a1ce0d52f1d9a50ef8368f7aa1fcff9dbf6a2e2d65e4b55da424087b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_451143a1ce0d52f1d9a50ef8368f7aa1fcff9dbf6a2e2d65e4b55da424087b20->leave($__internal_451143a1ce0d52f1d9a50ef8368f7aa1fcff9dbf6a2e2d65e4b55da424087b20_prof);

        
        $__internal_9830e8f39a798d44a7a748f35a23ce3d695ce2d2995334b28ed5baf946e63ada->leave($__internal_9830e8f39a798d44a7a748f35a23ce3d695ce2d2995334b28ed5baf946e63ada_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 12,  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 13,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\OpenServer\\domains\\many-to-many\\app/Resources\\views/base.html.twig");
    }
}
