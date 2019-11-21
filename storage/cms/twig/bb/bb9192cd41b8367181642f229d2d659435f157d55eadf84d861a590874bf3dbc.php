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

/* /Applications/MAMP/htdocs/elfortin-october/plugins/offline/sitesearch/components/searchresults/no-results.htm */
class __TwigTemplate_8ccc7a15c4bb7cad1b4bae6e1a7d10cc7467b215cc89ee54dba7f044d78c29c0 extends \Twig\Template
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
        echo "<p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "noResultsMessage", [], "any", false, false, false, 1), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/elfortin-october/plugins/offline/sitesearch/components/searchresults/no-results.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>{{ __SELF__.noResultsMessage }}</p>", "/Applications/MAMP/htdocs/elfortin-october/plugins/offline/sitesearch/components/searchresults/no-results.htm", "");
    }
}
