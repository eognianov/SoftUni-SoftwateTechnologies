<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b5930951ddfee98273a94d53b30ee22a5f9cfc1ee431e02be8cc97102a4dee4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1489416a40cb8254a5fb29363f408e21a1266323b02fdfa896521077d0ac6720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1489416a40cb8254a5fb29363f408e21a1266323b02fdfa896521077d0ac6720->enter($__internal_1489416a40cb8254a5fb29363f408e21a1266323b02fdfa896521077d0ac6720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1489416a40cb8254a5fb29363f408e21a1266323b02fdfa896521077d0ac6720->leave($__internal_1489416a40cb8254a5fb29363f408e21a1266323b02fdfa896521077d0ac6720_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73c899b0c3aa8e642e22a5d9c5d69c34541e88650adc17f177927599d1f92af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c899b0c3aa8e642e22a5d9c5d69c34541e88650adc17f177927599d1f92af5->enter($__internal_73c899b0c3aa8e642e22a5d9c5d69c34541e88650adc17f177927599d1f92af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73c899b0c3aa8e642e22a5d9c5d69c34541e88650adc17f177927599d1f92af5->leave($__internal_73c899b0c3aa8e642e22a5d9c5d69c34541e88650adc17f177927599d1f92af5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92d82a14a3b675de70ebf289567f4dc2ec92ad72df5ead123dbb93a550190614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d82a14a3b675de70ebf289567f4dc2ec92ad72df5ead123dbb93a550190614->enter($__internal_92d82a14a3b675de70ebf289567f4dc2ec92ad72df5ead123dbb93a550190614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_92d82a14a3b675de70ebf289567f4dc2ec92ad72df5ead123dbb93a550190614->leave($__internal_92d82a14a3b675de70ebf289567f4dc2ec92ad72df5ead123dbb93a550190614_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed214975b91bfa2652df7d740a19d56d231f4d60a8da38730b3047438c9f1cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed214975b91bfa2652df7d740a19d56d231f4d60a8da38730b3047438c9f1cd1->enter($__internal_ed214975b91bfa2652df7d740a19d56d231f4d60a8da38730b3047438c9f1cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed214975b91bfa2652df7d740a19d56d231f4d60a8da38730b3047438c9f1cd1->leave($__internal_ed214975b91bfa2652df7d740a19d56d231f4d60a8da38730b3047438c9f1cd1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
