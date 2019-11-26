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

/* /home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/alxy/captcha/components/captcha/default.htm */
class __TwigTemplate_bb0bb27f05b2b7df10a66810d6785cb7ba5eed1db782858a25bb353d5e27e83d extends \Twig\Template
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
        echo "<div class=\"g-recaptcha\" data-callback=\"recaptchaCallback\" data-sitekey=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "site_key", [], "any", false, false, false, 1), "html", null, true);
        echo "\"></div>
<script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?hl=";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lang", [], "any", false, false, false, 2), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/alxy/captcha/components/captcha/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"g-recaptcha\" data-callback=\"recaptchaCallback\" data-sitekey=\"{{ settings.site_key }}\"></div>
<script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?hl={{ settings.lang }}\"></script>", "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/plugins/alxy/captcha/components/captcha/default.htm", "");
    }
}
