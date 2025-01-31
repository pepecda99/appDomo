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

/* base.twig */
class __TwigTemplate_15aa4d02b367f2257ecd00a3446ebb394c20ffcf14bb8197871bee45d5fd0017 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
  ";
        // line 3
        $this->loadTemplate("partials/header.twig", "base.twig", 3)->display($context);
        // line 4
        echo "  <body>
    <!-- App root element -->
    <div id=\"app\">
      ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "      
      ";
        // line 12
        echo "    </div>
    <!-- Path to Framework7 Library Bundle JS -->
  </body>
  <footer>
    ";
        // line 16
        $this->loadTemplate("partials/footer.twig", "base.twig", 16)->display($context);
        // line 17
        echo "  </footer>
</html>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <!-- Contenido específico de cada página -->
      ";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 7,  62 => 17,  60 => 16,  54 => 12,  51 => 10,  49 => 7,  44 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  {% include 'partials/header.twig' %}
  <body>
    <!-- App root element -->
    <div id=\"app\">
      {% block content %}
        <!-- Contenido específico de cada página -->
      {% endblock %}
      
      {# Banner #}
    </div>
    <!-- Path to Framework7 Library Bundle JS -->
  </body>
  <footer>
    {% include 'partials/footer.twig' %}
  </footer>
</html>
", "base.twig", "C:\\Users\\aluquerivas\\Desktop\\k7\\twig\\templates\\base.twig");
    }
}
