<?php

/* TrackBundle:Track:show_track.html.twig */
class __TwigTemplate_c62b1cc3dba99ba5bd1aff12d101bc43d05ed097706437c433aa0e84f9897f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TrackBundle:Track:show_track.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["track"] ?? null), "track", array()), "html", null, true);
        echo "</h3>

";
    }

    public function getTemplateName()
    {
        return "TrackBundle:Track:show_track.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TrackBundle:Track:show_track.html.twig", "/var/www/html/many-to-many/src/TrackBundle/Resources/views/Track/show_track.html.twig");
    }
}
