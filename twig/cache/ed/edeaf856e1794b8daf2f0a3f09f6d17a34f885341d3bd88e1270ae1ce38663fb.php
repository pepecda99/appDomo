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

/* login.twig */
class __TwigTemplate_422d5b07213932e4a50cedd81cd5f47bad417ec86d2613467704c7f67b3644bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"page no-navbar no-toolbar no-swipeback login-screen-page\">
    <div class=\"page-content login-screen-content\">
      <div class=\"login-screen-title\">
        <img src=\"img/banner_cleversuite.png\"
          alt=\"Apartamentos\"
          style=\"height:40px;\" />
      </div>
      <div class=\"card card-raised\">
        <div class=\"card-header\"></div>
        <div class=\"card-content card-content-padding\"
          style=\"display: flex;align-items: center;justify-content: center;\">
          ";
        // line 15
        echo ($context["error_message"] ?? null);
        echo "
          <form id=\"login-form\" method=\"POST\" action=\"method.php?action=login\">
            <div class=\"list\">
              <ul>
                <li class=\"item-content item-input item-input-outline\">
                  <div class=\"item-media\">
                    <i class=\"icon f7-icons\">person</i>
                  </div>
                  <div class=\"item-inner\">
                    <div class=\"item-title item-label\">
                      Usuario
                    </div>
                    <div class=\"item-input-wrap\">
                      <input type=\"text\"
                        required
                        placeholder=\"Tu nombre de usuario\"
                        name=\"username\" />
                      <span class=\"input-clear-button\"></span>
                    </div>
                  </div>
                </li>

                <li class=\"item-content item-input item-input-outline\">
                  <div class=\"item-media\">
                    <i class=\"icon f7-icons\">app_badge</i>
                  </div>
                  <div class=\"item-inner\">
                    <div class=\"item-title item-label\">
                      Contraseña
                    </div>
                    <div class=\"item-input-wrap\">
                      <input type=\"password\"
                        required
                        placeholder=\"Tu contraseña\"
                        name=\"password\" />
                      <span class=\"input-clear-button\"></span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class=\"list\">
              <ul>
                <button class=\"button button-fill color-green\">
                  Iniciar Sesión
                </button>
              </ul>
              <div class=\"block-footer\">
                <p>
                  CleverSuite es marca registrada de CleverByte IT Consulting
                </p>
              </div>
            </div>
          </form>
        </div>
        <div class=\"card-footer\"></div>
      </div>
    </div>
  </div>";
        // line 73
        echo twig_escape_filter($this->env, ($context["error_message"] ?? null), "html", null, true);
        echo "
  ";
        // line 74
        if ( !(null === ($context["error_message"] ?? null))) {
            // line 75
            echo "    <script>
     alert(123);
      app.dialog.alert('";
            // line 77
            echo twig_escape_filter($this->env, ($context["error_message"] ?? null), "html", null, true);
            echo "');
    </script>
  ";
        }
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 77,  130 => 75,  128 => 74,  124 => 73,  63 => 15,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block content %}
  <div class=\"page no-navbar no-toolbar no-swipeback login-screen-page\">
    <div class=\"page-content login-screen-content\">
      <div class=\"login-screen-title\">
        <img src=\"img/banner_cleversuite.png\"
          alt=\"Apartamentos\"
          style=\"height:40px;\" />
      </div>
      <div class=\"card card-raised\">
        <div class=\"card-header\"></div>
        <div class=\"card-content card-content-padding\"
          style=\"display: flex;align-items: center;justify-content: center;\">
          {{ error_message|raw }}
          <form id=\"login-form\" method=\"POST\" action=\"method.php?action=login\">
            <div class=\"list\">
              <ul>
                <li class=\"item-content item-input item-input-outline\">
                  <div class=\"item-media\">
                    <i class=\"icon f7-icons\">person</i>
                  </div>
                  <div class=\"item-inner\">
                    <div class=\"item-title item-label\">
                      Usuario
                    </div>
                    <div class=\"item-input-wrap\">
                      <input type=\"text\"
                        required
                        placeholder=\"Tu nombre de usuario\"
                        name=\"username\" />
                      <span class=\"input-clear-button\"></span>
                    </div>
                  </div>
                </li>

                <li class=\"item-content item-input item-input-outline\">
                  <div class=\"item-media\">
                    <i class=\"icon f7-icons\">app_badge</i>
                  </div>
                  <div class=\"item-inner\">
                    <div class=\"item-title item-label\">
                      Contraseña
                    </div>
                    <div class=\"item-input-wrap\">
                      <input type=\"password\"
                        required
                        placeholder=\"Tu contraseña\"
                        name=\"password\" />
                      <span class=\"input-clear-button\"></span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class=\"list\">
              <ul>
                <button class=\"button button-fill color-green\">
                  Iniciar Sesión
                </button>
              </ul>
              <div class=\"block-footer\">
                <p>
                  CleverSuite es marca registrada de CleverByte IT Consulting
                </p>
              </div>
            </div>
          </form>
        </div>
        <div class=\"card-footer\"></div>
      </div>
    </div>
  </div>{{ error_message }}
  {% if error_message is not null %}
    <script>
     alert(123);
      app.dialog.alert('{{ error_message }}');
    </script>
  {% endif %}
{% endblock %}
", "login.twig", "C:\\Users\\aluquerivas\\Desktop\\k7\\twig\\templates\\login.twig");
    }
}
