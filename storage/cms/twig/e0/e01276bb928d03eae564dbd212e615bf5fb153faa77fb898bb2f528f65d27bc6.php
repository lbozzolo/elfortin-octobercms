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

/* /home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/offline/sitesearch/components/searchresults/searchresult.htm */
class __TwigTemplate_b6e76870e2171f520cf5f6aa52df484992538e4f1a6c013a2720644ca4fd8c3f extends \Twig\Template
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
        echo "<div class=\"ss-result\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "thumb", [], "any", false, false, false, 2)) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['result'] = ($context["result"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::thumbnail")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        }
        // line 5
        echo "    <div class=\"ss-result__content\">
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['result'] = ($context["result"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::content")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div>
    <hr/>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/offline/sitesearch/components/searchresults/searchresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  54 => 6,  51 => 5,  48 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ss-result\">
    {% if result.thumb %}
        {% partial __SELF__ ~ '::thumbnail' result = result %}
    {% endif %}
    <div class=\"ss-result__content\">
        {% partial __SELF__ ~ '::content' result = result %}
    </div>
    <hr/>
</div>", "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/offline/sitesearch/components/searchresults/searchresult.htm", "");
    }
}
