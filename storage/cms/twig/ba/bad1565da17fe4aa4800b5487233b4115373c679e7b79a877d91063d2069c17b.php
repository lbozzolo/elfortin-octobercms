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

/* /Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/partials/footer.htm */
class __TwigTemplate_c065a7c808b11de69e0f82a02fce58239dfe9b1f837af7d79f0f56b60c52598a extends \Twig\Template
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
        echo "<footer>
    <!-- Footer-area start -->
    <div class=\"footer-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"single-footer\">
                        <h3 class=\"footer-title  title-border\">INFORMACION</h3>
                        <ul class=\"footer-contact\">
                            <li><span>Dirección :</span>Estanislao López 1138, B1629<br>Ex Ruta 8 - Pilar, Buenos Aires</li>
                        </ul>
                    </div>
                </div>

                <div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-12\">
                    <div class=\"single-footer\">
                        <h3 class=\"footer-title  title-border\">HORARIOS</h3>
                        <ul class=\"footer-menu\">
                            <li>Lunes a Viernes de 8 a 18</li>
                            <li>Sabados de 8 a 13hs</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 hidden-sm col-xs-12\">
                    <div class=\"single-footer\">
                        <h3 class=\"footer-title  title-border\">CONTACTANOS</h3>
                        <ul class=\"footer-contact\">
                            <li><span>Nextel :</span>705*69</li>
                            <li><span>Celular :</span>011-15-66060977</li>
                            <li><span>Teléfono :</span>02304-430150</li>
                            <li><span>Email :</span>ventas@fortinagropecuaria.com.ar</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-xs-12\">
                    <div class=\"copyright\">
                        <p class=\"mb-0\">&copy; <a href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"> Fortinagropecuaria.com.ar  </a> 2019. @ By Verticedigital & Cuartocreativo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-area end -->

</footer>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 37,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <!-- Footer-area start -->
    <div class=\"footer-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"single-footer\">
                        <h3 class=\"footer-title  title-border\">INFORMACION</h3>
                        <ul class=\"footer-contact\">
                            <li><span>Dirección :</span>Estanislao López 1138, B1629<br>Ex Ruta 8 - Pilar, Buenos Aires</li>
                        </ul>
                    </div>
                </div>

                <div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-12\">
                    <div class=\"single-footer\">
                        <h3 class=\"footer-title  title-border\">HORARIOS</h3>
                        <ul class=\"footer-menu\">
                            <li>Lunes a Viernes de 8 a 18</li>
                            <li>Sabados de 8 a 13hs</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 hidden-sm col-xs-12\">
                    <div class=\"single-footer\">
                        <h3 class=\"footer-title  title-border\">CONTACTANOS</h3>
                        <ul class=\"footer-contact\">
                            <li><span>Nextel :</span>705*69</li>
                            <li><span>Celular :</span>011-15-66060977</li>
                            <li><span>Teléfono :</span>02304-430150</li>
                            <li><span>Email :</span>ventas@fortinagropecuaria.com.ar</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-xs-12\">
                    <div class=\"copyright\">
                        <p class=\"mb-0\">&copy; <a href=\"{{ 'home'|page }}\"> Fortinagropecuaria.com.ar  </a> 2019. @ By Verticedigital & Cuartocreativo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-area end -->

</footer>", "/Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/partials/footer.htm", "");
    }
}
