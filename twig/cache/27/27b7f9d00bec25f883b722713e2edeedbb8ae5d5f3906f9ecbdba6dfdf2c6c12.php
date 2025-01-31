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

/* partials/header.twig */
class __TwigTemplate_8e3e0da6146f99c2edea3dbf3417fee9189b5bd6570c1a1f65bcd2cf823ab956 extends Template
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
        echo "<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\" />
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\"
    content=\"width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover\" />
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
  <meta name=\"apple-mobile-web-app-status-bar-style\"
    content=\"black-translucent\" />
  <meta name=\"theme-color\" content=\"#fff\" />
  <meta http-equiv=\"Content-Security-Policy\"
    content=\"default-src * 'self' 'unsafe-inline' 'unsafe-eval' data:\" />
  ";
        // line 14
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["conf"] ?? null), "favicon", [], "any", true, true, false, 14) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["conf"] ?? null), "favicon", [], "any", false, false, false, 14)))) {
            // line 15
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["conf"] ?? null), "favicon", [], "any", false, false, false, 15), "html", null, true);
            echo "\" type=\"image/x-icon\" />
  ";
        }
        // line 17
        echo "
  <!-- Your app title -->
  <title>
    ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["conf"] ?? null), "main_title", [], "any", false, false, false, 20), "html", null, true);
        echo "
  </title>
  <!-- Path to Framework7 Library Bundle CSS -->
  <link rel=\"stylesheet\"
    href=\"./node_modules/framework7/framework7-bundle.css\" />
  <link rel=\"stylesheet\"
    href=\"./node_modules/framework7-icons/css/framework7-icons.css\" />

  <!-- Path to your custom app styles -->
  <link rel=\"stylesheet\" href=\"./css/app.css\" />
  <script type=\"text/javascript\"
    src=\"./node_modules/framework7/framework7-bundle.js\"></script>
  <!-- Path to your app js -->
  <script type=\"text/javascript\" src=\"./js/app.js\"></script>
</head>
";
    }

    public function getTemplateName()
    {
        return "partials/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  60 => 17,  54 => 15,  51 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\" />
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\"
    content=\"width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover\" />
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
  <meta name=\"apple-mobile-web-app-status-bar-style\"
    content=\"black-translucent\" />
  <meta name=\"theme-color\" content=\"#fff\" />
  <meta http-equiv=\"Content-Security-Policy\"
    content=\"default-src * 'self' 'unsafe-inline' 'unsafe-eval' data:\" />
  {# si eciste conf.favicon añadelo #}
  {% if conf.favicon is defined and conf.favicon is not empty %}
    <link rel=\"icon\" href=\"{{ conf.favicon }}\" type=\"image/x-icon\" />
  {% endif %}

  <!-- Your app title -->
  <title>
    {{ conf.main_title }}
  </title>
  <!-- Path to Framework7 Library Bundle CSS -->
  <link rel=\"stylesheet\"
    href=\"./node_modules/framework7/framework7-bundle.css\" />
  <link rel=\"stylesheet\"
    href=\"./node_modules/framework7-icons/css/framework7-icons.css\" />

  <!-- Path to your custom app styles -->
  <link rel=\"stylesheet\" href=\"./css/app.css\" />
  <script type=\"text/javascript\"
    src=\"./node_modules/framework7/framework7-bundle.js\"></script>
  <!-- Path to your app js -->
  <script type=\"text/javascript\" src=\"./js/app.js\"></script>
</head>
", "partials/header.twig", "C:\\Users\\aluquerivas\\Desktop\\k7\\twig\\templates\\partials\\header.twig");
    }
}
