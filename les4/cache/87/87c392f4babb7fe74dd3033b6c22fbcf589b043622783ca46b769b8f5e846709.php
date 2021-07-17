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

/* data.html.twig */
class __TwigTemplate_16e7cba90a37ef1ad6f534eb361243a9910a97454043cac5b7daff516291541e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 2
            echo "<div class=\"item\">
    <div class=\"item__img\">
        <img  src=\"img/";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "link", [], "any", false, false, false, 4), "html", null, true);
            echo "\" alt=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 4), "html", null, true);
            echo ">
        <div class=\"item__overlay\">
            <button class=\"item__btn\">В корзину</button>
        </div>
    </div>
    <div class=\"item__info\">
        <h3><a href=\"product.php?id=";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\" class=\"item__link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</a></h3>
        <p class=\"item__price pink\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 11), "html", null, true);
            echo " руб.</p>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  56 => 10,  45 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for product in productArr %}
<div class=\"item\">
    <div class=\"item__img\">
        <img  src=\"img/{{ product.link }}\" alt={{ product.name }}>
        <div class=\"item__overlay\">
            <button class=\"item__btn\">В корзину</button>
        </div>
    </div>
    <div class=\"item__info\">
        <h3><a href=\"product.php?id={{ product.id }}\" class=\"item__link\">{{ product.name }}</a></h3>
        <p class=\"item__price pink\">{{ product.price }} руб.</p>
    </div>
</div>
{% endfor %}", "data.html.twig", "C:\\OpenServer\\domains\\gbwork\\templates\\data.html.twig");
    }
}
