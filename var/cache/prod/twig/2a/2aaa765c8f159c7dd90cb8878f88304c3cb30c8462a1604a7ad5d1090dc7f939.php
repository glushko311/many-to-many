<?php

/* TrackBundle:Track:load_track.html.twig */
class __TwigTemplate_c46f37cb8251a45f7c00d63f8eaf42cfb8ce1656f8a0c0e0cb4b22de962ab999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TrackBundle:Track:load_track.html.twig", 1);
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
        // line 3
        echo "    <style type=\"text/css\">
        form{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:space-between;
        }
    </style>

    <form action=\"\" method=\"post\">
        <h2>Создание нового трека</h2>
        <label for=\"track\">Нитка маршрута</label>
        <textarea name=\"track\" id=\"textarea-track-load-195\" cols=\"30\" rows=\"10\"></textarea>
        <button type=\"submit\">Создать новый трек</button>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</h3>
    </form>

";
    }

    public function getTemplateName()
    {
        return "TrackBundle:Track:load_track.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 17,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TrackBundle:Track:load_track.html.twig", "/var/www/html/many-to-many/src/TrackBundle/Resources/views/Track/load_track.html.twig");
    }
}
