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

/* /Applications/MAMP/htdocs/elfortin-october/plugins/vertice/cotizacion/components/cotizacionform/default.htm */
class __TwigTemplate_8a8644a7475330d1a352dd607ec89b02c671d5c45c0672fc71cebef0b6b61ee6 extends \Twig\Template
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
        $context["producto"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        echo "
<form data-request=\"onSend\">
    <input type=\"hidden\" name=\"producto_id\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <input type=\"text\" placeholder=\"Su nombre aquí...\" name=\"name\" />
        </div>
        <div class=\"col-md-6\">
            <input type=\"text\" placeholder=\"Email...\" name=\"email\" />
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <label>Comentario</label>
            <textarea class=\"custom-textarea\" name=\"message\" placeholder=\"\" ></textarea>
            <button type=\"submit\" data-text=\"Cotizar\" class=\"button-one submit-button mt-20\">Enviar</button>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/elfortin-october/plugins/vertice/cotizacion/components/cotizacionform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set producto = __SELF__.record %}

<form data-request=\"onSend\">
    <input type=\"hidden\" name=\"producto_id\" value=\"{{ record.id }}\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <input type=\"text\" placeholder=\"Su nombre aquí...\" name=\"name\" />
        </div>
        <div class=\"col-md-6\">
            <input type=\"text\" placeholder=\"Email...\" name=\"email\" />
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <label>Comentario</label>
            <textarea class=\"custom-textarea\" name=\"message\" placeholder=\"\" ></textarea>
            <button type=\"submit\" data-text=\"Cotizar\" class=\"button-one submit-button mt-20\">Enviar</button>
        </div>
    </div>
</form>", "/Applications/MAMP/htdocs/elfortin-october/plugins/vertice/cotizacion/components/cotizacionform/default.htm", "");
    }
}
