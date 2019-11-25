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

/* /home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/vertice/cotizacion/components/cotizacionform/default.htm */
class __TwigTemplate_cf9696fd9873338d4b6c41e8e34b3e442a9a826d1e71fbcca9cb832187b93ebf extends \Twig\Template
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
        return "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/vertice/cotizacion/components/cotizacionform/default.htm";
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
</form>", "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/vertice/cotizacion/components/cotizacionform/default.htm", "");
    }
}
