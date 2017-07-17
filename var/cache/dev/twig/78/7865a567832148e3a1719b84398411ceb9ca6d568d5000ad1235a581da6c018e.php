<?php

/* TrackBundle:Track:members_to_track.html.twig */
class __TwigTemplate_a0357c38423652cd2959548b214c0aa08fcb8c77efd6f7a26b1ef3ee88718cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TrackBundle:Track:members_to_track.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44e3637b97dab8e93e850cc65e3c592c9984ecfcb51ca1bcb2a680472accb44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e3637b97dab8e93e850cc65e3c592c9984ecfcb51ca1bcb2a680472accb44b->enter($__internal_44e3637b97dab8e93e850cc65e3c592c9984ecfcb51ca1bcb2a680472accb44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:members_to_track.html.twig"));

        $__internal_17591aa51dc4636ce7a070d244b67729bbae5de03136934095c0abf99baf3cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17591aa51dc4636ce7a070d244b67729bbae5de03136934095c0abf99baf3cba->enter($__internal_17591aa51dc4636ce7a070d244b67729bbae5de03136934095c0abf99baf3cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:members_to_track.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e3637b97dab8e93e850cc65e3c592c9984ecfcb51ca1bcb2a680472accb44b->leave($__internal_44e3637b97dab8e93e850cc65e3c592c9984ecfcb51ca1bcb2a680472accb44b_prof);

        
        $__internal_17591aa51dc4636ce7a070d244b67729bbae5de03136934095c0abf99baf3cba->leave($__internal_17591aa51dc4636ce7a070d244b67729bbae5de03136934095c0abf99baf3cba_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8a76362efd80d85f242a8db2c99989b938ff337c5c7dceaacea18f80eb0a042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a76362efd80d85f242a8db2c99989b938ff337c5c7dceaacea18f80eb0a042->enter($__internal_e8a76362efd80d85f242a8db2c99989b938ff337c5c7dceaacea18f80eb0a042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86b50754697fd6e34111a9f288660ef9eebfd69412f806fb97678888d674c70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b50754697fd6e34111a9f288660ef9eebfd69412f806fb97678888d674c70f->enter($__internal_86b50754697fd6e34111a9f288660ef9eebfd69412f806fb97678888d674c70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <style type=\"text/css\">
        .members-cont{
            width: 330px;
            border:1px #000 solid;
            display:flex;
            justify-content:space-between;
        }
        .members-item-cont{
            display:flex;
            flex-direction:column;
            border:1px #000 solid;
            width: 100px;
            justify-content:space-arround;
            align-items:center
        }
        .member-item-id{
            display: none;
        }
        .member-item-name{
            width: 100px;
            height: 30px;
            display:flex;
            cursor:pointer;
            margin:2px;
            background:#999;
        }
        .members-cont p{
            text-align: center;
        }
        .submit-member-to-track{
            width: 100px;
            height: 60px;
            cursor:pointer;
            display:flex;
            align-items: center;
            justify-content: center;
            border:1px solid #000;
        }
        .submit-member-to-track:hover{
            background: yellow;
        }
    </style>
";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["track"] ?? $this->getContext($context, "track")));
        echo "

";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["membersDiff"] ?? $this->getContext($context, "membersDiff")));
        echo "
";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["membersInTrack"] ?? $this->getContext($context, "membersInTrack")));
        echo "
<div class=\"members-cont\">
    <div class=\"members-item-cont diff-cont\">
        <p>Добавить в маршрут</p>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["membersDiff"] ?? $this->getContext($context, "membersDiff")));
        foreach ($context['_seq'] as $context["_key"] => $context["memberDiff"]) {
            // line 53
            echo "            <div class=\"member-item\">
                <p class='member-item-name'>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberDiff"], "name", array()), "html", null, true);
            echo "</p>
                <p class=\"member-item-id\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberDiff"], "id", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberDiff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </div>

    <div class=\"members-item-cont track-cont\">
        <p>Убрать из маршрута</p>
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["membersInTrack"] ?? $this->getContext($context, "membersInTrack")));
        foreach ($context['_seq'] as $context["_key"] => $context["memberInTrack"]) {
            // line 63
            echo "            <div class=\"member-item\">
                <p class='member-item-name'>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberInTrack"], "name", array()), "html", null, true);
            echo "</p>
                <p class=\"member-item-id\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["memberInTrack"], "id", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberInTrack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </div>
    <div class =\"submit-member-to-track\"><p>Обновить учасников</p></div>
</div>
<div class=\"content-message\"></div>



";
        
        $__internal_86b50754697fd6e34111a9f288660ef9eebfd69412f806fb97678888d674c70f->leave($__internal_86b50754697fd6e34111a9f288660ef9eebfd69412f806fb97678888d674c70f_prof);

        
        $__internal_e8a76362efd80d85f242a8db2c99989b938ff337c5c7dceaacea18f80eb0a042->leave($__internal_e8a76362efd80d85f242a8db2c99989b938ff337c5c7dceaacea18f80eb0a042_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_437e01c51ad87db6bd37768dd31026e66f92325e102e3181dfc4f3dc8b732bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437e01c51ad87db6bd37768dd31026e66f92325e102e3181dfc4f3dc8b732bef->enter($__internal_437e01c51ad87db6bd37768dd31026e66f92325e102e3181dfc4f3dc8b732bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8f70a477de41b6d683bf5c3ccbab0811f9f5b0238ac65593194dfca175044efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f70a477de41b6d683bf5c3ccbab0811f9f5b0238ac65593194dfca175044efe->enter($__internal_8f70a477de41b6d683bf5c3ccbab0811f9f5b0238ac65593194dfca175044efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.json.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            function diffClickHandler(){
                var el = \$(this).clone().bind('click', trackClickHandler)
                \$('.track-cont').append(el);
                \$(this).remove();

            }
            function trackClickHandler(){
                var el = \$(this).clone().bind('click', diffClickHandler);
                \$('.diff-cont').append(el);
                \$(this).remove();
            }

            function loadData(){
                var dataArrJQ = \$('.track-cont>.member-item>.member-item-id');
                var dataArr=[];
                for(var i = 0; i < dataArrJQ.length; i++){
                    dataArr[i] = \$(dataArrJQ[i]).html();
                }

                dataArr = 'jsonData=' + \$.toJSON(dataArr);

                \$.ajax({
                    type:'POST'
                    ,url: \"\"
                    , data:dataArr
                    , success: function(res) {
                        \$('.content-message').append(res);
                    }
                });

            }

            \$('.track-cont>.member-item').bind('click', trackClickHandler);
            \$('.diff-cont>.member-item').bind('click', diffClickHandler);


            \$('.submit-member-to-track').bind('click', loadData);


        })
    </script>
";
        
        $__internal_8f70a477de41b6d683bf5c3ccbab0811f9f5b0238ac65593194dfca175044efe->leave($__internal_8f70a477de41b6d683bf5c3ccbab0811f9f5b0238ac65593194dfca175044efe_prof);

        
        $__internal_437e01c51ad87db6bd37768dd31026e66f92325e102e3181dfc4f3dc8b732bef->leave($__internal_437e01c51ad87db6bd37768dd31026e66f92325e102e3181dfc4f3dc8b732bef_prof);

    }

    public function getTemplateName()
    {
        return "TrackBundle:Track:members_to_track.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 79,  182 => 78,  173 => 77,  156 => 68,  147 => 65,  143 => 64,  140 => 63,  136 => 62,  130 => 58,  121 => 55,  117 => 54,  114 => 53,  110 => 52,  103 => 48,  99 => 47,  94 => 45,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body%}
    <style type=\"text/css\">
        .members-cont{
            width: 330px;
            border:1px #000 solid;
            display:flex;
            justify-content:space-between;
        }
        .members-item-cont{
            display:flex;
            flex-direction:column;
            border:1px #000 solid;
            width: 100px;
            justify-content:space-arround;
            align-items:center
        }
        .member-item-id{
            display: none;
        }
        .member-item-name{
            width: 100px;
            height: 30px;
            display:flex;
            cursor:pointer;
            margin:2px;
            background:#999;
        }
        .members-cont p{
            text-align: center;
        }
        .submit-member-to-track{
            width: 100px;
            height: 60px;
            cursor:pointer;
            display:flex;
            align-items: center;
            justify-content: center;
            border:1px solid #000;
        }
        .submit-member-to-track:hover{
            background: yellow;
        }
    </style>
{{ dump(track) }}

{{ dump(membersDiff) }}
{{ dump(membersInTrack) }}
<div class=\"members-cont\">
    <div class=\"members-item-cont diff-cont\">
        <p>Добавить в маршрут</p>
        {% for memberDiff in membersDiff %}
            <div class=\"member-item\">
                <p class='member-item-name'>{{ memberDiff.name }}</p>
                <p class=\"member-item-id\">{{ memberDiff.id }}</p>
            </div>
        {% endfor %}
    </div>

    <div class=\"members-item-cont track-cont\">
        <p>Убрать из маршрута</p>
        {% for memberInTrack in membersInTrack %}
            <div class=\"member-item\">
                <p class='member-item-name'>{{ memberInTrack.name }}</p>
                <p class=\"member-item-id\">{{ memberInTrack.id }}</p>
            </div>
        {% endfor %}
    </div>
    <div class =\"submit-member-to-track\"><p>Обновить учасников</p></div>
</div>
<div class=\"content-message\"></div>



{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.json.js') }}\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            function diffClickHandler(){
                var el = \$(this).clone().bind('click', trackClickHandler)
                \$('.track-cont').append(el);
                \$(this).remove();

            }
            function trackClickHandler(){
                var el = \$(this).clone().bind('click', diffClickHandler);
                \$('.diff-cont').append(el);
                \$(this).remove();
            }

            function loadData(){
                var dataArrJQ = \$('.track-cont>.member-item>.member-item-id');
                var dataArr=[];
                for(var i = 0; i < dataArrJQ.length; i++){
                    dataArr[i] = \$(dataArrJQ[i]).html();
                }

                dataArr = 'jsonData=' + \$.toJSON(dataArr);

                \$.ajax({
                    type:'POST'
                    ,url: \"\"
                    , data:dataArr
                    , success: function(res) {
                        \$('.content-message').append(res);
                    }
                });

            }

            \$('.track-cont>.member-item').bind('click', trackClickHandler);
            \$('.diff-cont>.member-item').bind('click', diffClickHandler);


            \$('.submit-member-to-track').bind('click', loadData);


        })
    </script>
{% endblock %}

", "TrackBundle:Track:members_to_track.html.twig", "/var/www/html/many-to-many/src/TrackBundle/Resources/views/Track/members_to_track.html.twig");
    }
}
