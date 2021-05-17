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

/* /home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/vertice/cotizacion/components/cotizacionform/messages.htm */
class __TwigTemplate_8acef619df8c277a93130e46e3e00e1e09a68c4c6d220b5b970ae78b83d59640 extends \Twig\Template
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
        echo "
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errorMsg"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "
    <li style=\"padding: 5px 10px\">";
            // line 5
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/vertice/cotizacion/components/cotizacionform/messages.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<ul>
    {% for message in errorMsg %}

    <li style=\"padding: 5px 10px\">{{ message }}</li>

    {% endfor %}
</ul>
", "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/vertice/cotizacion/components/cotizacionform/messages.htm", "");
    }
}
