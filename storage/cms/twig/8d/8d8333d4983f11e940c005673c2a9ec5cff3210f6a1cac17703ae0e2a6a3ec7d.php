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

/* /home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/offline/sitesearch/components/searchresults/thumbnail.htm */
class __TwigTemplate_efc1373cae9efb7c70b691f94312adacf35036eca6efa7b30cdb2ed9c732de63 extends \Twig\Template
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
        echo "<div class=\"ss-result__aside\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
        <img class=\"ss-result__image\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "thumb", [], "any", false, false, false, 3), "getThumb", [0 => 120, 1 => ($context["auto"] ?? null)], "method", false, false, false, 3), "html", null, true);
        echo "\" alt=\"\"/>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/offline/sitesearch/components/searchresults/thumbnail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ss-result__aside\">
    <a href=\"{{ result.url }}\">
        <img class=\"ss-result__image\" src=\"{{ result.thumb.getThumb(120, auto) }}\" alt=\"\"/>
    </a>
</div>", "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/offline/sitesearch/components/searchresults/thumbnail.htm", "");
    }
}
