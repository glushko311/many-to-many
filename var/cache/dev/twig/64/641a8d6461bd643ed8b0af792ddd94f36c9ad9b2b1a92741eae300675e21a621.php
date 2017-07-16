<?php

/* ::base.html.twig */
class __TwigTemplate_5b20544d98168e0d293fc37f78314a076c7f3d5afbbd34955dca93cd90a7ed73 extends Twig_Template
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
        $__internal_b3a913a817c320c07974e8f8fe5a195899e5b0e516f735f59312f07495a12d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a913a817c320c07974e8f8fe5a195899e5b0e516f735f59312f07495a12d9e->enter($__internal_b3a913a817c320c07974e8f8fe5a195899e5b0e516f735f59312f07495a12d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_cdcc4062df20f9c5f6cd3813bb1a405d114d8cdf7ee956a3667118a24a2e6028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcc4062df20f9c5f6cd3813bb1a405d114d8cdf7ee956a3667118a24a2e6028->enter($__internal_cdcc4062df20f9c5f6cd3813bb1a405d114d8cdf7ee956a3667118a24a2e6028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b3a913a817c320c07974e8f8fe5a195899e5b0e516f735f59312f07495a12d9e->leave($__internal_b3a913a817c320c07974e8f8fe5a195899e5b0e516f735f59312f07495a12d9e_prof);

        
        $__internal_cdcc4062df20f9c5f6cd3813bb1a405d114d8cdf7ee956a3667118a24a2e6028->leave($__internal_cdcc4062df20f9c5f6cd3813bb1a405d114d8cdf7ee956a3667118a24a2e6028_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fa0c0975e46d7660bc133ea1ba3c1bd367c65182b7bda1f2465b28e1ce28b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa0c0975e46d7660bc133ea1ba3c1bd367c65182b7bda1f2465b28e1ce28b12->enter($__internal_0fa0c0975e46d7660bc133ea1ba3c1bd367c65182b7bda1f2465b28e1ce28b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9c04a42e376f42dd54c85935873c91d02b8e2ad9ac76dfacb8d3ee7d23d1db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c04a42e376f42dd54c85935873c91d02b8e2ad9ac76dfacb8d3ee7d23d1db6->enter($__internal_b9c04a42e376f42dd54c85935873c91d02b8e2ad9ac76dfacb8d3ee7d23d1db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b9c04a42e376f42dd54c85935873c91d02b8e2ad9ac76dfacb8d3ee7d23d1db6->leave($__internal_b9c04a42e376f42dd54c85935873c91d02b8e2ad9ac76dfacb8d3ee7d23d1db6_prof);

        
        $__internal_0fa0c0975e46d7660bc133ea1ba3c1bd367c65182b7bda1f2465b28e1ce28b12->leave($__internal_0fa0c0975e46d7660bc133ea1ba3c1bd367c65182b7bda1f2465b28e1ce28b12_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ce2507cdd5db8964f245883e63d3adde3182c4148ed000c23e9361a6cd92dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce2507cdd5db8964f245883e63d3adde3182c4148ed000c23e9361a6cd92dd7->enter($__internal_2ce2507cdd5db8964f245883e63d3adde3182c4148ed000c23e9361a6cd92dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e854c9385263a5a73e6a8394f738469b1b96194d422381cc2213fec6842d8150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e854c9385263a5a73e6a8394f738469b1b96194d422381cc2213fec6842d8150->enter($__internal_e854c9385263a5a73e6a8394f738469b1b96194d422381cc2213fec6842d8150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e854c9385263a5a73e6a8394f738469b1b96194d422381cc2213fec6842d8150->leave($__internal_e854c9385263a5a73e6a8394f738469b1b96194d422381cc2213fec6842d8150_prof);

        
        $__internal_2ce2507cdd5db8964f245883e63d3adde3182c4148ed000c23e9361a6cd92dd7->leave($__internal_2ce2507cdd5db8964f245883e63d3adde3182c4148ed000c23e9361a6cd92dd7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_232cc6abb7644badacfcb63e2072f1119006fe4d211db31a9bbb8c9201862659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232cc6abb7644badacfcb63e2072f1119006fe4d211db31a9bbb8c9201862659->enter($__internal_232cc6abb7644badacfcb63e2072f1119006fe4d211db31a9bbb8c9201862659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b61c69f556c5cf27eb0cec5dff7499a1dcd9db15101be05e812a8f32d6eef84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61c69f556c5cf27eb0cec5dff7499a1dcd9db15101be05e812a8f32d6eef84d->enter($__internal_b61c69f556c5cf27eb0cec5dff7499a1dcd9db15101be05e812a8f32d6eef84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b61c69f556c5cf27eb0cec5dff7499a1dcd9db15101be05e812a8f32d6eef84d->leave($__internal_b61c69f556c5cf27eb0cec5dff7499a1dcd9db15101be05e812a8f32d6eef84d_prof);

        
        $__internal_232cc6abb7644badacfcb63e2072f1119006fe4d211db31a9bbb8c9201862659->leave($__internal_232cc6abb7644badacfcb63e2072f1119006fe4d211db31a9bbb8c9201862659_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fea36e8887cf4129fc18dbb2af6753604431e1d161f71917ab600cb28062554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fea36e8887cf4129fc18dbb2af6753604431e1d161f71917ab600cb28062554->enter($__internal_3fea36e8887cf4129fc18dbb2af6753604431e1d161f71917ab600cb28062554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f83082958065aa8492e527896f4106b9871a725a371d6ffc24ff2f8b82050e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83082958065aa8492e527896f4106b9871a725a371d6ffc24ff2f8b82050e80->enter($__internal_f83082958065aa8492e527896f4106b9871a725a371d6ffc24ff2f8b82050e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_f83082958065aa8492e527896f4106b9871a725a371d6ffc24ff2f8b82050e80->leave($__internal_f83082958065aa8492e527896f4106b9871a725a371d6ffc24ff2f8b82050e80_prof);

        
        $__internal_3fea36e8887cf4129fc18dbb2af6753604431e1d161f71917ab600cb28062554->leave($__internal_3fea36e8887cf4129fc18dbb2af6753604431e1d161f71917ab600cb28062554_prof);

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
", "::base.html.twig", "C:\\OpenServer\\domains\\many-to-many\\app\\Resources\\views\\base.html.twig");
    }
}
