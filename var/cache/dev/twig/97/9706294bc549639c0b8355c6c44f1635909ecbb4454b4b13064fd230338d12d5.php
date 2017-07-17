<?php

/* TrackBundle:Track:members_to_track.html.twig */
class __TwigTemplate_d611b914cb9cf152c88518cd3d8b323c0834b283bf7a6c526914d00dcb33b138 extends Twig_Template
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
        $__internal_af096f5a9f8357bd1d9c695947f322035be55a28d8e0b2bd00bd09ce15b40c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af096f5a9f8357bd1d9c695947f322035be55a28d8e0b2bd00bd09ce15b40c86->enter($__internal_af096f5a9f8357bd1d9c695947f322035be55a28d8e0b2bd00bd09ce15b40c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:members_to_track.html.twig"));

        $__internal_c55b21a211ea9887ab0b6bb97c24aa1bfde1a2ebe98d1edf2e3e457028c4c6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55b21a211ea9887ab0b6bb97c24aa1bfde1a2ebe98d1edf2e3e457028c4c6d3->enter($__internal_c55b21a211ea9887ab0b6bb97c24aa1bfde1a2ebe98d1edf2e3e457028c4c6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TrackBundle:Track:members_to_track.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af096f5a9f8357bd1d9c695947f322035be55a28d8e0b2bd00bd09ce15b40c86->leave($__internal_af096f5a9f8357bd1d9c695947f322035be55a28d8e0b2bd00bd09ce15b40c86_prof);

        
        $__internal_c55b21a211ea9887ab0b6bb97c24aa1bfde1a2ebe98d1edf2e3e457028c4c6d3->leave($__internal_c55b21a211ea9887ab0b6bb97c24aa1bfde1a2ebe98d1edf2e3e457028c4c6d3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_00833b5f163feaa975fd505118963b4f506f445956071e89d2d0765c37acbe2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00833b5f163feaa975fd505118963b4f506f445956071e89d2d0765c37acbe2e->enter($__internal_00833b5f163feaa975fd505118963b4f506f445956071e89d2d0765c37acbe2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1d22a1b5055739f2e2af23d8811725289523e227211c75fa85f291fc99ac25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d22a1b5055739f2e2af23d8811725289523e227211c75fa85f291fc99ac25a->enter($__internal_b1d22a1b5055739f2e2af23d8811725289523e227211c75fa85f291fc99ac25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["track"]) ? $context["track"] : $this->getContext($context, "track")));
        echo "

";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["membersDiff"]) ? $context["membersDiff"] : $this->getContext($context, "membersDiff")));
        echo "
";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["membersInTrack"]) ? $context["membersInTrack"] : $this->getContext($context, "membersInTrack")));
        echo "
<div class=\"members-cont\">
    <div class=\"members-item-cont diff-cont\">
        <p>Добавить в маршрут</p>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membersDiff"]) ? $context["membersDiff"] : $this->getContext($context, "membersDiff")));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["membersInTrack"]) ? $context["membersInTrack"] : $this->getContext($context, "membersInTrack")));
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
<h3 class=\"content\"></h3>



";
        
        $__internal_b1d22a1b5055739f2e2af23d8811725289523e227211c75fa85f291fc99ac25a->leave($__internal_b1d22a1b5055739f2e2af23d8811725289523e227211c75fa85f291fc99ac25a_prof);

        
        $__internal_00833b5f163feaa975fd505118963b4f506f445956071e89d2d0765c37acbe2e->leave($__internal_00833b5f163feaa975fd505118963b4f506f445956071e89d2d0765c37acbe2e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf94f87a918676d1aa4306ec2ba7ad1211ae50802fd2df08ef20b09d7bfdb55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf94f87a918676d1aa4306ec2ba7ad1211ae50802fd2df08ef20b09d7bfdb55c->enter($__internal_bf94f87a918676d1aa4306ec2ba7ad1211ae50802fd2df08ef20b09d7bfdb55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0694a16bce3b34fc7cbb3ba4402f50f5dd54ba8e04090562bd6198c5cca6032c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0694a16bce3b34fc7cbb3ba4402f50f5dd54ba8e04090562bd6198c5cca6032c->enter($__internal_0694a16bce3b34fc7cbb3ba4402f50f5dd54ba8e04090562bd6198c5cca6032c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
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
                dataArr = JSON.stringify(dataArr);
                console.log(dataArr);


                \$.ajax({
                    type:'POST'
                    ,url: \"\"
                    , data:dataArr
                    , success: function(res) {
                        console.log('ajax send - OK');
                        console.log(res);
                    }
                });

            }

            \$('.track-cont>.member-item').bind('click', trackClickHandler);
            \$('.diff-cont>.member-item').bind('click', diffClickHandler);


            \$('.submit-member-to-track').bind('click', loadData);


        })
    </script>
";
        
        $__internal_0694a16bce3b34fc7cbb3ba4402f50f5dd54ba8e04090562bd6198c5cca6032c->leave($__internal_0694a16bce3b34fc7cbb3ba4402f50f5dd54ba8e04090562bd6198c5cca6032c_prof);

        
        $__internal_bf94f87a918676d1aa4306ec2ba7ad1211ae50802fd2df08ef20b09d7bfdb55c->leave($__internal_bf94f87a918676d1aa4306ec2ba7ad1211ae50802fd2df08ef20b09d7bfdb55c_prof);

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
        return array (  182 => 78,  173 => 77,  156 => 68,  147 => 65,  143 => 64,  140 => 63,  136 => 62,  130 => 58,  121 => 55,  117 => 54,  114 => 53,  110 => 52,  103 => 48,  99 => 47,  94 => 45,  50 => 3,  41 => 2,  11 => 1,);
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
<h3 class=\"content\"></h3>



{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
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
                dataArr = JSON.stringify(dataArr);
                console.log(dataArr);


                \$.ajax({
                    type:'POST'
                    ,url: \"\"
                    , data:dataArr
                    , success: function(res) {
                        console.log('ajax send - OK');
                        console.log(res);
                    }
                });

            }

            \$('.track-cont>.member-item').bind('click', trackClickHandler);
            \$('.diff-cont>.member-item').bind('click', diffClickHandler);


            \$('.submit-member-to-track').bind('click', loadData);


        })
    </script>
{% endblock %}

", "TrackBundle:Track:members_to_track.html.twig", "C:\\OpenServer\\domains\\many-to-many\\src\\TrackBundle/Resources/views/Track/members_to_track.html.twig");
    }
}
