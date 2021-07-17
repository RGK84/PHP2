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
            'main' => [$this, 'block_main'],
            'script' => [$this, 'block_script'],
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
        echo "Catalog";
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<section class=\"fetured-items\">
    <div class=\"container\">
        <h2 class=\"title\">Акционный каталог</h2>
        <p class=\"desc\">Лучшие предложения этой недели</p>
        <div class=\"fetured-items__box\" id=\"items__box\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "            <div class=\"item\">
                <div class=\"item__img\">
                    <img  src=\"img/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "link", [], "any", false, false, false, 14), "html", null, true);
            echo "\" alt=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo ">
                    <div class=\"item__overlay\">
                        <button class=\"item__btn\">В корзину</button>
                    </div>
                </div>
                <div class=\"item__info\">
                    <h3><a href=\"product.php?id=";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"item__link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></h3>
                    <p class=\"item__price pink\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21), "html", null, true);
            echo " руб.</p>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
        <button class=\"fetured-items__btn\" id=\"more\">Показать еще</button>
    </div>
</section>
";
    }

    // line 31
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
<script>
    const moreBtn = document.querySelector('#more');
    const box = document.querySelector('#items__box');
    let offset = 25;

    moreBtn.addEventListener('click', addMore);

    function addMore() {
        \$.ajax({
            url: \"index.php?data\",
            type: \"POST\",
            data: {more: true, offset: offset},
            success: function (data) {
                if (data) {
                    box.innerHTML += data;
                    offset += 25;
                    console.log(data);
                } else {
                    moreBtn.style.display = 'none';
                }
            }
        });
    }
</script>
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
        return array (  113 => 32,  109 => 31,  101 => 25,  91 => 21,  85 => 20,  74 => 14,  70 => 12,  66 => 11,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layouts/app.html.twig\" %}

{% block title %}Catalog{% endblock %}

{% block main %}
<section class=\"fetured-items\">
    <div class=\"container\">
        <h2 class=\"title\">Акционный каталог</h2>
        <p class=\"desc\">Лучшие предложения этой недели</p>
        <div class=\"fetured-items__box\" id=\"items__box\">
            {% for product in productArr %}
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
            {% endfor %}
        </div>
        <button class=\"fetured-items__btn\" id=\"more\">Показать еще</button>
    </div>
</section>
{% endblock %}

{% block script %}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
<script>
    const moreBtn = document.querySelector('#more');
    const box = document.querySelector('#items__box');
    let offset = 25;

    moreBtn.addEventListener('click', addMore);

    function addMore() {
        \$.ajax({
            url: \"index.php?data\",
            type: \"POST\",
            data: {more: true, offset: offset},
            success: function (data) {
                if (data) {
                    box.innerHTML += data;
                    offset += 25;
                    console.log(data);
                } else {
                    moreBtn.style.display = 'none';
                }
            }
        });
    }
</script>
{% endblock %}", "index.html.twig", "C:\\OpenServer\\domains\\gbwork\\templates\\index.html.twig");
    }
}
