<?php

/* TrackBundle:Track:success.html.twig */
class __TwigTemplate_96991e911f0e89e6006eb4bc66fc8633bf075c863324981c9a2ce85329f2bcd0 extends Twig_Template
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
        // line 1
        echo "<div><p>Список участников обновлен успешно</p></div>";
    }

    public function getTemplateName()
    {
        return "TrackBundle:Track:success.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TrackBundle:Track:success.html.twig", "/var/www/html/many-to-many/src/TrackBundle/Resources/views/Track/success.html.twig");
    }
}
