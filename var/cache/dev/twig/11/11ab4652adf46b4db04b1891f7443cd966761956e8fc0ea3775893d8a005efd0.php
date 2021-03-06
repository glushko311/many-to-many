<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_6231b6120b31ff4c5eb06f926cc0a6ca9e6ac9b70ce95ea3484a97a88dd4ee80 extends Twig_Template
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
        $__internal_0fcbba080e6c3ce889e1ff4d5de7d5aa5a8c6ea78b58eca09bb7f4a1c90d2d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fcbba080e6c3ce889e1ff4d5de7d5aa5a8c6ea78b58eca09bb7f4a1c90d2d80->enter($__internal_0fcbba080e6c3ce889e1ff4d5de7d5aa5a8c6ea78b58eca09bb7f4a1c90d2d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_415c7d31605868bb9dae25d31c6355f0871e98b1ec1bd2628d695b393f6678f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415c7d31605868bb9dae25d31c6355f0871e98b1ec1bd2628d695b393f6678f4->enter($__internal_415c7d31605868bb9dae25d31c6355f0871e98b1ec1bd2628d695b393f6678f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_0fcbba080e6c3ce889e1ff4d5de7d5aa5a8c6ea78b58eca09bb7f4a1c90d2d80->leave($__internal_0fcbba080e6c3ce889e1ff4d5de7d5aa5a8c6ea78b58eca09bb7f4a1c90d2d80_prof);

        
        $__internal_415c7d31605868bb9dae25d31c6355f0871e98b1ec1bd2628d695b393f6678f4->leave($__internal_415c7d31605868bb9dae25d31c6355f0871e98b1ec1bd2628d695b393f6678f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "TwigBundle:Exception:error.html.twig", "/var/www/html/many-to-many/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.html.twig");
    }
}
