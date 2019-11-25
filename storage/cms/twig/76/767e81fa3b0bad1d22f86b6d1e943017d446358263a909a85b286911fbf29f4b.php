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

/* /home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/partials/scripts.htm */
class __TwigTemplate_13acdade67d36e1eba30e1cb5be559eb584eebd641e18ecd101a886e8b3b1d81 extends \Twig\Template
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
        echo "<script type=\"text/javascript\">
    (function () {
        var options = {
            whatsapp: \"+54 91151321300\", // WhatsApp number
            call_to_action: \"Envianos un mensaje!!!\", // Call to action
            position: \"right\", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = \"whatshelp.io\", url = proto + \"//static.\" + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
<!-- all js here -->
<!-- jquery latest version -->
<script src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/jquery-1.12.0.min.js");
        echo "\"></script>
<!-- bootstrap js -->
<script src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<!-- jquery.meanmenu js -->
<script src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.meanmenu.js");
        echo "\"></script>
<!-- slick.min js -->
<script src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/slick.min.js");
        echo "\"></script>
<!-- jquery.treeview js -->
<script src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.treeview.js");
        echo "\"></script>
<!-- lightbox.min js -->
<script src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/lightbox.min.js");
        echo "\"></script>
<!-- jquery-ui js -->
<script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-ui.min.js");
        echo "\"></script>
<!-- jquery.nivo.slider js -->
<script src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/lib/js/jquery.nivo.slider.js");
        echo "\"></script>
<script src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/lib/home.js");
        echo "\"></script>
<!-- jquery.nicescroll.min js -->
<script src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.nicescroll.min.js");
        echo "\"></script>
<!-- countdon.min js -->
<script src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/countdon.min.js");
        echo "\"></script>
<!-- wow js -->
<script src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
<!-- plugins js -->
<script src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugins.js");
        echo "\"></script>
<!-- main js -->
<script src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>

";
        // line 44
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
    }

    public function getTemplateName()
    {
        return "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/partials/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  119 => 42,  114 => 40,  109 => 38,  104 => 36,  99 => 34,  94 => 32,  90 => 31,  85 => 29,  80 => 27,  75 => 25,  70 => 23,  65 => 21,  60 => 19,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    (function () {
        var options = {
            whatsapp: \"+54 91151321300\", // WhatsApp number
            call_to_action: \"Envianos un mensaje!!!\", // Call to action
            position: \"right\", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = \"whatshelp.io\", url = proto + \"//static.\" + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
<!-- all js here -->
<!-- jquery latest version -->
<script src=\"{{ 'assets/js/vendor/jquery-1.12.0.min.js'|theme }}\"></script>
<!-- bootstrap js -->
<script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
<!-- jquery.meanmenu js -->
<script src=\"{{ 'assets/js/jquery.meanmenu.js'|theme }}\"></script>
<!-- slick.min js -->
<script src=\"{{ 'assets/js/slick.min.js'|theme }}\"></script>
<!-- jquery.treeview js -->
<script src=\"{{ 'assets/js/jquery.treeview.js'|theme }}\"></script>
<!-- lightbox.min js -->
<script src=\"{{ 'assets/js/lightbox.min.js'|theme }}\"></script>
<!-- jquery-ui js -->
<script src=\"{{ 'assets/js/jquery-ui.min.js'|theme }}\"></script>
<!-- jquery.nivo.slider js -->
<script src=\"{{ 'assets/lib/js/jquery.nivo.slider.js'|theme }}\"></script>
<script src=\"{{ 'assets/lib/home.js'|theme }}\"></script>
<!-- jquery.nicescroll.min js -->
<script src=\"{{ 'assets/js/jquery.nicescroll.min.js'|theme }}\"></script>
<!-- countdon.min js -->
<script src=\"{{ 'assets/js/countdon.min.js'|theme }}\"></script>
<!-- wow js -->
<script src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
<!-- plugins js -->
<script src=\"{{ 'assets/js/plugins.js'|theme }}\"></script>
<!-- main js -->
<script src=\"{{ 'assets/js/main.js'|theme }}\"></script>

{% framework extras %}", "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/partials/scripts.htm", "");
    }
}
