<?php

/* base.html.twig */
class __TwigTemplate_dd7809023e9ae331d827437e3e319225fb3a2589827ec972ed20774f64d2d5d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36487fbd97770533b41095de4fae0e55a3e60c94d58774d2b0dca5f99477857b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36487fbd97770533b41095de4fae0e55a3e60c94d58774d2b0dca5f99477857b->enter($__internal_36487fbd97770533b41095de4fae0e55a3e60c94d58774d2b0dca5f99477857b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_36487fbd97770533b41095de4fae0e55a3e60c94d58774d2b0dca5f99477857b->leave($__internal_36487fbd97770533b41095de4fae0e55a3e60c94d58774d2b0dca5f99477857b_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f66f77363fc5af7b8a6c0d2b128ca0cbcff3f6db86ea38317a50b92f7de0b1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66f77363fc5af7b8a6c0d2b128ca0cbcff3f6db86ea38317a50b92f7de0b1a1->enter($__internal_f66f77363fc5af7b8a6c0d2b128ca0cbcff3f6db86ea38317a50b92f7de0b1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_f66f77363fc5af7b8a6c0d2b128ca0cbcff3f6db86ea38317a50b92f7de0b1a1->leave($__internal_f66f77363fc5af7b8a6c0d2b128ca0cbcff3f6db86ea38317a50b92f7de0b1a1_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e458d3589c5e236763c9b4b0c1c67d54e0971fff8d96f19ef62b72b2d7a0053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e458d3589c5e236763c9b4b0c1c67d54e0971fff8d96f19ef62b72b2d7a0053->enter($__internal_2e458d3589c5e236763c9b4b0c1c67d54e0971fff8d96f19ef62b72b2d7a0053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_2e458d3589c5e236763c9b4b0c1c67d54e0971fff8d96f19ef62b72b2d7a0053->leave($__internal_2e458d3589c5e236763c9b4b0c1c67d54e0971fff8d96f19ef62b72b2d7a0053_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1cc5856784b1fc0874f24a2c58426aebb1c3245a3ab12b1edd5357fa342744f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc5856784b1fc0874f24a2c58426aebb1c3245a3ab12b1edd5357fa342744f3->enter($__internal_1cc5856784b1fc0874f24a2c58426aebb1c3245a3ab12b1edd5357fa342744f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_1cc5856784b1fc0874f24a2c58426aebb1c3245a3ab12b1edd5357fa342744f3->leave($__internal_1cc5856784b1fc0874f24a2c58426aebb1c3245a3ab12b1edd5357fa342744f3_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_b5890e13b97cb6880e82cf422c9274c4227c38ca09b43a5b1c8f7414e02bf5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5890e13b97cb6880e82cf422c9274c4227c38ca09b43a5b1c8f7414e02bf5dc->enter($__internal_b5890e13b97cb6880e82cf422c9274c4227c38ca09b43a5b1c8f7414e02bf5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_b5890e13b97cb6880e82cf422c9274c4227c38ca09b43a5b1c8f7414e02bf5dc->leave($__internal_b5890e13b97cb6880e82cf422c9274c4227c38ca09b43a5b1c8f7414e02bf5dc_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ada80ede2278b0490f2e6640c5b89ecb94f7b5074c368cf1f135f316d7adae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ada80ede2278b0490f2e6640c5b89ecb94f7b5074c368cf1f135f316d7adae0->enter($__internal_1ada80ede2278b0490f2e6640c5b89ecb94f7b5074c368cf1f135f316d7adae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_1ada80ede2278b0490f2e6640c5b89ecb94f7b5074c368cf1f135f316d7adae0->leave($__internal_1ada80ede2278b0490f2e6640c5b89ecb94f7b5074c368cf1f135f316d7adae0_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_4d4fb6820a069ef8bc1b681e49c3ba1168d8ddc9d495450ac14c9abb41e37f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4fb6820a069ef8bc1b681e49c3ba1168d8ddc9d495450ac14c9abb41e37f5e->enter($__internal_4d4fb6820a069ef8bc1b681e49c3ba1168d8ddc9d495450ac14c9abb41e37f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_4d4fb6820a069ef8bc1b681e49c3ba1168d8ddc9d495450ac14c9abb41e37f5e->leave($__internal_4d4fb6820a069ef8bc1b681e49c3ba1168d8ddc9d495450ac14c9abb41e37f5e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f993b3200de63e08a5aa0bd6d0beaf640eeafb22f066cb5ae4dd6f0126b2093f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f993b3200de63e08a5aa0bd6d0beaf640eeafb22f066cb5ae4dd6f0126b2093f->enter($__internal_f993b3200de63e08a5aa0bd6d0beaf640eeafb22f066cb5ae4dd6f0126b2093f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f993b3200de63e08a5aa0bd6d0beaf640eeafb22f066cb5ae4dd6f0126b2093f->leave($__internal_f993b3200de63e08a5aa0bd6d0beaf640eeafb22f066cb5ae4dd6f0126b2093f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
