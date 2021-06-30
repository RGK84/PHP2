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
            'content' => [$this, 'block_content'],
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
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"style.css\">
</head>
<body>

";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('script', $context, $blocks);
        // line 14
        echo "
</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 13
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
        return array (  80 => 13,  74 => 11,  68 => 6,  62 => 14,  60 => 13,  57 => 12,  55 => 11,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>{% block title %}{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"style.css\">
</head>
<body>

{% block content %}{% endblock %}

{% block script %}{% endblock %}

</body>
</html>", "layouts/app.html.twig", "C:\\OpenServer\\domains\\gbwork\\templates\\layouts\\app.html.twig");
    }
}
