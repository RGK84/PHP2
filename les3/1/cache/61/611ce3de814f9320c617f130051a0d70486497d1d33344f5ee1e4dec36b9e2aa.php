<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* img.html.twig */
class __TwigTemplate_1e64b2b9a06a71bc499709921d4c592a50b8a0268b229d3d62b9d793a83ab39b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/app.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/app.html.twig", "img.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Фото: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "description", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<img class=\"img\" src=\"img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "link", [], "any", false, false, false, 6), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "img.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/app.html.twig\" %}

{% block title %}Фото: {{img.description}}{% endblock %}

{% block content %}
<img class=\"img\" src=\"img/{{img.link}}\" alt=\"{{img.description}}\">
{% endblock %}", "img.html.twig", "C:\\OpenServer\\domains\\gbwork\\templates\\img.html.twig");
    }
}
