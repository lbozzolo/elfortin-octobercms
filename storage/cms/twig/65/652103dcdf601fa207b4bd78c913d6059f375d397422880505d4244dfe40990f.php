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

/* /Applications/MAMP/htdocs/elfortin-october/plugins/offline/sitesearch/components/searchresults/pagination.htm */
class __TwigTemplate_417401917ad576b612ad6bc06d42c73da8772a3c87dc5d7701072973bd8f48c1 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "hasPages", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            echo ($context["results"] ?? null);
            echo "
";
        }
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/elfortin-october/plugins/offline/sitesearch/components/searchresults/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if results.hasPages %}
    {{ results | raw }}
{% endif %}

", "/Applications/MAMP/htdocs/elfortin-october/plugins/offline/sitesearch/components/searchresults/pagination.htm", "");
    }
}
