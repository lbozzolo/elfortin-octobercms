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

/* /Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/partials/head.htm */
class __TwigTemplate_ed7f75c3d3a03d8356ae79d7619a9e4cdc7b18c89857d512b9afaeaa4b8a644b extends \Twig\Template
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
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
<title>El Fortin || Agropecuaria</title>
<meta name=\"description\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo "assets/img/favicon.ico";
        echo "\">
<!-- Place favicon.ico in the root directory -->

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

<!-- all css here -->

<!-- bootstrap v3.3.6 css -->
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">

<!-- animate css -->
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\">
<!-- jquery-ui.min css -->
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery-ui.min.css");
        echo "\">
<!-- meanmenu css -->
<link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/meanmenu.min.css");
        echo "\">
<!-- nivo-slider css -->
<link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/lib/css/nivo-slider.css");
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/lib/css/preview.css");
        echo "\">
<!-- slick css -->
<link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick.css");
        echo "\">
<!-- lightbox css -->
<link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/lightbox.min.css");
        echo "\">
<!-- material-design-iconic-font css -->
<link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/material-design-iconic-font.css");
        echo "\">
<!-- All common css of theme -->
<link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/default.css");
        echo "\">
<!-- style css -->
<link rel=\"stylesheet\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">

<link rel=\"stylesheet\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/estilos.css");
        echo "\">
<!-- shortcode css -->
<link rel=\"stylesheet\" href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/shortcode.css");
        echo "\">
<!-- responsive css -->
<link rel=\"stylesheet\" href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">
<!-- modernizr css -->
<script src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-2.8.3.min.js");
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/partials/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 45,  123 => 43,  118 => 41,  113 => 39,  108 => 37,  103 => 35,  98 => 33,  93 => 31,  88 => 29,  83 => 27,  79 => 26,  74 => 24,  69 => 22,  64 => 20,  58 => 17,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
<title>El Fortin || Agropecuaria</title>
<meta name=\"description\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ 'assets/img/favicon.ico' }}\">
<!-- Place favicon.ico in the root directory -->

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

<!-- all css here -->

<!-- bootstrap v3.3.6 css -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\">

<!-- animate css -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css'|theme }}\">
<!-- jquery-ui.min css -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/jquery-ui.min.css'|theme }}\">
<!-- meanmenu css -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/meanmenu.min.css'|theme }}\">
<!-- nivo-slider css -->
<link rel=\"stylesheet\" href=\"{{ 'assets/lib/css/nivo-slider.css'|theme }}\">
<link rel=\"stylesheet\" href=\"{{ 'assets/lib/css/preview.css'|theme }}\">
<!-- slick css -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/slick.css'|theme }}\">
<!-- lightbox css -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/lightbox.min.css'|theme }}\">
<!-- material-design-iconic-font css -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/material-design-iconic-font.css'|theme }}\">
<!-- All common css of theme -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/default.css'|theme }}\">
<!-- style css -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">

<link rel=\"stylesheet\" href=\"{{ 'assets/css/estilos.css'|theme }}\">
<!-- shortcode css -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/shortcode.css'|theme }}\">
<!-- responsive css -->
<link rel=\"stylesheet\" href=\"{{ 'assets/css/responsive.css'|theme }}\">
<!-- modernizr css -->
<script src=\"{{ 'assets/js/vendor/modernizr-2.8.3.min.js'|theme }}\"></script>", "/Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/partials/head.htm", "");
    }
}
