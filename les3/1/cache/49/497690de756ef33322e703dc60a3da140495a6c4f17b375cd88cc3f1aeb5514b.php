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

/* index.html.twig */
class __TwigTemplate_eb53dd2e5271a0fdec96aa7e97e498b8fc3a0a82cedf69012785742057d57e41 extends Template
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
        $this->parent = $this->loadTemplate("layouts/app.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Фотогалерея";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<h1 class=\"title\">Галерея</h1>

<section class=\"gallery\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imgArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 10
            echo "    <a class=\"item\" href=\"img.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\" target=\"blank\">
        <img class=\"item__img\" src=\"img/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "link", [], "any", false, false, false, 11), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "description", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
    </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  72 => 11,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/app.html.twig\" %}

{% block title %}Фотогалерея{% endblock %}

{% block content %}
<h1 class=\"title\">Галерея</h1>

<section class=\"gallery\">
    {% for img in imgArr %}
    <a class=\"item\" href=\"img.php?id={{img.id}}\" target=\"blank\">
        <img class=\"item__img\" src=\"img/{{img.link}}\" alt=\"{{img.description}}\">
    </a>
    {% endfor %}
</section>
{% endblock %}
", "index.html.twig", "C:\\OpenServer\\domains\\gbwork\\templates\\index.html.twig");
    }
}
