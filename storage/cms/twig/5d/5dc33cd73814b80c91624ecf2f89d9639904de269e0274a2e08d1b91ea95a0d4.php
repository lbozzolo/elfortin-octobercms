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

/* /home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/offline/sitesearch/components/searchresults/content.htm */
class __TwigTemplate_ff97681da8386501c6edbd09348831739b18c213e4955040bcf0245d440eb06b extends \Twig\Template
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
        echo "<h4 class=\"ss-result__title\">
    <a href=\"";
        // line 2
        echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", [], "any", false, false, false, 2));
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "title", [], "any", false, false, false, 2);
        echo "</a>
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showProviderBadge", [], "any", false, false, false, 3)) {
            // line 4
            echo "        <span class=\"ss-result__badge\">
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "provider", [], "any", false, false, false, 5), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 8
        echo "
    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "</h4>

<p class=\"ss-result__text\">
    ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "excerpt", [], "any", false, false, false, 18);
        echo "
</p>

<p class=\"ss-result__url\">
    <a href=\"";
        // line 22
        echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", [], "any", false, false, false, 22));
        echo "\" class=\"ss-result__link\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "visitPageMessage", [], "any", false, false, false, 22), "html", null, true);
        echo " &rarr;</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/offline/sitesearch/components/searchresults/content.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  75 => 18,  70 => 15,  68 => 14,  66 => 13,  64 => 12,  62 => 11,  60 => 10,  57 => 8,  51 => 5,  48 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4 class=\"ss-result__title\">
    <a href=\"{{ result.url | app }}\">{{ result.title | raw }}</a>
    {% if __SELF__.showProviderBadge %}
        <span class=\"ss-result__badge\">
            {{ result.provider }}
        </span>
    {% endif %}

    {# Some results contain meta information.     #}
    {# You can access it using result.meta.       #}
    {# To find out from which plugin the result   #}
    {# was returned you can use result.identifier #}
    {# Some results contain the original model.   #}
    {# You can access it using result.model       #}
</h4>

<p class=\"ss-result__text\">
    {{ result.excerpt | raw }}
</p>

<p class=\"ss-result__url\">
    <a href=\"{{ result.url | app }}\" class=\"ss-result__link\">{{ __SELF__.visitPageMessage }} &rarr;</a>
</p>
", "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/offline/sitesearch/components/searchresults/content.htm", "");
    }
}
