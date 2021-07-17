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

/* layouts/app.html.twig */
class __TwigTemplate_bd2be919cc1b9062a91f29b015b571fadf7c11458c680ece4db2443d2e075d6e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>BRANDSHOP ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<script src=\"https://kit.fontawesome.com/747a53ae8a.js\" crossorigin=\"anonymous\"></script>
\t<link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"style.css\">
</head>
<body>
\t<header class=\"header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"header__main-box\">
\t\t\t\t<a href=\"catalog.php\" class=\"logo\">
\t\t\t\t\t\t<img src=\"img/logo.png\" alt=\"\" class=\"logo__img\">
\t\t\t\t\t\t<span class=\"logo__text\">BRAN<span class=\"logo__spec\">D</span></span>
\t\t\t\t</a>
\t\t\t\t<div class=\"search-box\">
\t\t\t\t\t<div class=\"search-box__browse-box\">
\t\t\t\t\t\t<button class=\"search-box__browse-btn\">Поиск<i class=\"fas fa-caret-down\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t\t<form action=\"post\" class=\"search-box__field\">
\t\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"Поиск по...\" class=\"search-box__input\">
\t\t\t\t\t\t<button type=\"submit\" class=\"search-box__submit\"><i class=\"fas fa-search\"></i></button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"account\">
\t\t\t\t\t<div class=\"account__cart-box\">
\t\t\t\t\t\t<a href=\"#\" class=\"account__cart\"><img src=\"img/cart.svg\" alt=\"корзина\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"account__btn\">Аккаунт<i class=\"fas fa-caret-down white\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
\t<nav>
\t\t<div class=\"container\">
\t\t\t<input type=\"checkbox\" id=\"menu-checkbox\" class=\"menu-checkbox\">
\t\t\t<div class=\"menu\">
\t\t\t\t<label for=\"menu-checkbox\" class=\"toggle-btn\" data-open=\"&#9776;\" data-close=\"&#9776;\" onclick></label>
\t\t\t\t<ul class=\"menu__box\">
\t\t\t\t\t<li class=\"menu__item\"><a href=\"catalog.php\" class=\"menu__link\">Домой</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a href=\"#\" class=\"menu__link\">Мужчинам</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a href=\"#\" class=\"menu__link\">Женщинам</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a href=\"#\" class=\"menu__link\">Детям</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a href=\"#\" class=\"menu__link\">Аксессуары</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a href=\"#\" class=\"menu__link\">Рекомендации</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a href=\"#\" class=\"menu__link\">Акции</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<main>
\t\t";
        // line 55
        $this->displayBlock('main', $context, $blocks);
        // line 56
        echo "\t</main>
\t<footer class=\"footer\">
\t\t<div class=\"footer__bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"footer__block\">
\t\t\t\t\t<div class=\"copy\">&copy; <?php echo date(\"Y\") ?>  Brandshop  Все права защищены.</div>
\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t<a href=\"#\" class=\"socials__btn\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t\t\t\t<a href=\"#\" class=\"socials__btn\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\" class=\"socials__btn\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t\t\t\t<a href=\"#\" class=\"socials__btn\"><i class=\"fab fa-pinterest-p\"></i></a>
\t\t\t\t\t\t<a href=\"#\" class=\"socials__btn\"><i class=\"fab fa-google-plus-g\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>

";
        // line 74
        $this->displayBlock('script', $context, $blocks);
        // line 75
        echo "
</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 55
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 74
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/app.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 74,  135 => 55,  129 => 6,  123 => 75,  121 => 74,  101 => 56,  99 => 55,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>BRANDSHOP {% block title %}{% endblock %}</title>
\t<script src=\"https://kit.fontawesome.com/747a53ae8a.js\" crossorigin=\"anonymous\"></script>
\t<link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"style.css\">
</head>
<body>
\t<header class=\"header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"header__main-box\">
\t\t\t\t<a href=\"catalog.php\" class=\"logo\">
\t\t\t\t\t\t<img src=\"img/logo.png\" alt=\"\" class=\"logo__img\">
\t\t\t\t\t\t<span class=\"logo__text\">BRAN<span class=\"logo__spec\">D</span></span>
\t\t\t\t</a>
\t\t\t\t<div class=\"search-box\">
\t\t\t\t\t<div class=\"search-box__browse-box\">
\t\t\t\t\t\t<button class=\"search-box__browse-btn\">Поиск<i class=\"fas fa-caret-down\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t\t<form action=\"post\" class=\"search-box__field\">
\t\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"Поиск по...\" class=\"search-box__input\">
\t\t\t\t\t\t<button type=\"submit\" class=\"search-box__submit\"><i class=\"fas fa-search\"></i></button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"account\">
\t\t\t\t\t<div class=\"account__cart-box\">
\t\t\t\t\t\t<a href=\"#\" class=\"account__cart\"><img src=\"img/cart.svg\" alt=\"корзина\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"account__btn\">Аккаунт<i class=\"fas fa-caret-down white\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
\t<nav>
\t\t<div class=\"container\">
\t\t\t<input type=\"checkbox\" id=\"menu-checkbox\" class=\"menu-checkbox\">
\t\t\t<div class=\"menu\">
\t\t\t\t<label for=\"menu-checkbox\" class=\"toggle-btn\" data-open=\"&#9776;\" data-close=\"&#9776;\" onclick></label>
\t\t\t\t<ul class=\"menu__box\">
\t\t\t\t\t<li class=\"menu__item\"><a href=\"catalog.php\" class=\"menu__link\">Домой</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a href=\"#\" class=\"menu__link\">Мужчинам</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a href=\"#\" class=\"menu__link\">Женщинам</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a href=\"#\" class=\"menu__link\">Детям</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a href=\"#\" class=\"menu__link\">Аксессуары</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a href=\"#\" class=\"menu__link\">Рекомендации</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a href=\"#\" class=\"menu__link\">Акции</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<main>
\t\t{% block main %}{% endblock %}
\t</main>
\t<footer class=\"footer\">
\t\t<div class=\"footer__bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"footer__block\">
\t\t\t\t\t<div class=\"copy\">&copy; <?php echo date(\"Y\") ?>  Brandshop  Все права защищены.</div>
\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t<a href=\"#\" class=\"socials__btn\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t\t\t\t<a href=\"#\" class=\"socials__btn\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\" class=\"socials__btn\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t\t\t\t<a href=\"#\" class=\"socials__btn\"><i class=\"fab fa-pinterest-p\"></i></a>
\t\t\t\t\t\t<a href=\"#\" class=\"socials__btn\"><i class=\"fab fa-google-plus-g\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>

{% block script %}{% endblock %}

</body>
</html>", "layouts/app.html.twig", "C:\\OpenServer\\domains\\gbwork\\templates\\layouts\\app.html.twig");
    }
}
