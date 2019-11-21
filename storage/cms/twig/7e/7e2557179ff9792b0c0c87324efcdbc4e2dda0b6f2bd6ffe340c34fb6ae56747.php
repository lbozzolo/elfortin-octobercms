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

/* /Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/partials/header.htm */
class __TwigTemplate_8f438179eb3520730a27bc4957e2f6e0d0616eaeaade59aa1156dc27c30f8fc0 extends \Twig\Template
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
        echo "<div class=\"section group ct\">
    <div class=\"col-xs-12 col-lg-4\">
        <a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
            <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo/logo01.png");
        echo "\">
        </a>
    </div>
    <div class=\"col-xs-12 col-lg-4\">
        <!--<form action=\"#\">-->
            <!--<div class=\"form-inline\">-->
                <!--<input type=\"text\" class=\"form-control\" style=\"border-radius: 25px\" placeholder=\"Buscar...\"/>-->
                <!--<button type=\"submit\"><i class=\"zmdi zmdi-search align-self-top\" style=\"color: #b0c951\"></i></button>-->
            <!--</div>-->
        <!--</form>-->
        <form action=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("busqueda");
        echo "\" method=\"get\">
            <div class=\"form-inline\">
                <input name=\"q\" type=\"text\" style=\"border-radius: 25px\" placeholder=\"Buscar...\" class=\"form-control\" autocomplete=\"off\">
                <button type=\"submit\"><i class=\"zmdi zmdi-search align-self-top\" style=\"color: #b0c951\"></i></button>
            </div>
        </form>
    </div>
    <div class=\"col-xs-12 col-lg-4\">
        <i class=\"zmdi zmdi-email\" style=\"color: #b0c951\"></i> ventas@fortinagropecuaria.com.ar
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section group ct\">
    <div class=\"col-xs-12 col-lg-4\">
        <a href=\"{{ 'home'|page }}\">
            <img src=\"{{ 'assets/img/logo/logo01.png'|theme }}\">
        </a>
    </div>
    <div class=\"col-xs-12 col-lg-4\">
        <!--<form action=\"#\">-->
            <!--<div class=\"form-inline\">-->
                <!--<input type=\"text\" class=\"form-control\" style=\"border-radius: 25px\" placeholder=\"Buscar...\"/>-->
                <!--<button type=\"submit\"><i class=\"zmdi zmdi-search align-self-top\" style=\"color: #b0c951\"></i></button>-->
            <!--</div>-->
        <!--</form>-->
        <form action=\"{{ 'busqueda' | page }}\" method=\"get\">
            <div class=\"form-inline\">
                <input name=\"q\" type=\"text\" style=\"border-radius: 25px\" placeholder=\"Buscar...\" class=\"form-control\" autocomplete=\"off\">
                <button type=\"submit\"><i class=\"zmdi zmdi-search align-self-top\" style=\"color: #b0c951\"></i></button>
            </div>
        </form>
    </div>
    <div class=\"col-xs-12 col-lg-4\">
        <i class=\"zmdi zmdi-email\" style=\"color: #b0c951\"></i> ventas@fortinagropecuaria.com.ar
    </div>
</div>", "/Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/partials/header.htm", "");
    }
}
