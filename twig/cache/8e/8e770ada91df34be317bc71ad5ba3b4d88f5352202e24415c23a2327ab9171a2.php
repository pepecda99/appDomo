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

/* partials/footer.twig */
class __TwigTemplate_4d155cbe3f098b691e3aa69521b3d462e3a784b3125bef8a619405021dcdfed8 extends Template
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
        echo "<script type=\"text/javascript\"
  src=\"./node_modules/framework7/framework7-bundle.js\"></script>
<!-- Path to your app js -->
<script type=\"text/javascript\" src=\"./js/app.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\"
  src=\"./node_modules/framework7/framework7-bundle.js\"></script>
<!-- Path to your app js -->
<script type=\"text/javascript\" src=\"./js/app.js\"></script>
", "partials/footer.twig", "C:\\Users\\aluquerivas\\Desktop\\k7\\twig\\templates\\partials\\footer.twig");
    }
}
