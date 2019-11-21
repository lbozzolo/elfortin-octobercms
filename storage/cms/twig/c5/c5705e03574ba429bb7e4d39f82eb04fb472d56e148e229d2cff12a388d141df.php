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

/* /Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/pages/busqueda.htm */
class __TwigTemplate_16260c019af8842091a11b581c78c36fae683cc894111d0e5b4979d85fc8bf7f extends \Twig\Template
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
        echo "<div class=\"product-area pt-80 pb-80 product-style-2 mb-60 mt-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">

                <h2 style=\"border-bottom: 1px solid gray; padding-bottom: 20px\">Resultados para \"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["searchResults"] ?? null), "query", [], "any", false, false, false, 6), "html", null, true);
        echo "\"</h2>

                <div class=\"single-product clearfix\">
                ";
        // line 9
        $context["results"] = twig_get_attribute($this->env, $this->source, ($context["searchResults"] ?? null), "results", [], "any", false, false, false, 9);
        // line 10
        echo "
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 12
            echo "                    ";
            // line 13
            echo "                    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['result'] = $context["result"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["searchResults"] ?? null) . "::searchresult.htm")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "                    ";
            // line 16
            echo "                    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["searchResults"] ?? null) . "::no-results.htm")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 17
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
                ";
        // line 19
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['results'] = ($context["results"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["searchResults"] ?? null) . "::pagination.htm")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/pages/busqueda.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  89 => 19,  86 => 18,  80 => 17,  75 => 16,  73 => 15,  68 => 14,  62 => 13,  60 => 12,  55 => 11,  52 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"product-area pt-80 pb-80 product-style-2 mb-60 mt-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">

                <h2 style=\"border-bottom: 1px solid gray; padding-bottom: 20px\">Resultados para \"{{ searchResults.query }}\"</h2>

                <div class=\"single-product clearfix\">
                {% set results = searchResults.results %}

                {% for result in results %}
                    {# Display all results #}
                    {% partial searchResults ~ '::searchresult.htm' result = result %}
                {% else %}
                    {# No results found #}
                    {% partial searchResults ~ '::no-results.htm' %}
                {% endfor %}

                {% partial searchResults ~ '::pagination.htm' results = results %}
                </div>
            </div>
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/pages/busqueda.htm", "");
    }
}
