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

/* /home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/partials/footer.htm */
class __TwigTemplate_05efaa2f080986f7d9d79e6fb8c2cc23c306ce4cffb4be6b6bc99be8eca21c8b extends \Twig\Template
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
                <div class=\"col-lg-6 col-md-6 col-sm-10 col-xs-12\">
                    <div class=\"single-footer\">
                        <h3 class=\"footer-title  title-border\">INFORMACION</h3>
                        <ul class=\"footer-contact\">
                            <li>
                                <strong style=\"font-size: 1.2em\">Atención al Público: </strong><br><br>
                                <div style=\"margin-left: 15px\">
                                    <strong>Dirección:</strong> Dr. Bernardo Houssay 206 (Colectora Este, Km 53), B1630, Pilar, Buenos Aires.<br>
                                    <strong>Teléfono:</strong> 0230 4422-721
                                </div>
                            </li>
                        </ul><br>
                        <ul class=\"footer-contact\">
                            <li>
                                <strong style=\"font-size: 1.2em\">Oficinas y Depósito Central: </strong><br><br>
                                <div style=\"margin-left: 15px\">
                                    <strong>Dirección:</strong> Estanislao Lopez 1138, B1629 Ex Ruta 8 - Pilar, Buenos Aires<br>
                                    <strong>Teléfono:</strong> 02304 422-721
                                </div>
                            </li>
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
                            <li><span>Celular :</span>011-15-66060977</li>
                            <li><span>Oficinas y Deposito Central :</span>02304 - 430150</li>
                            <li><span>Atención al Público :</span>02304 - 422721</li>
                            <li><span>Email :</span>ventas@fortinagropecuaria.com.ar</li>
                        </ul>
                    </div>
                </div><br><br>
                <div class=\"col-sm-6 col-xs-12\">
                    <div class=\"copyright\">
                        <p class=\"mb-0\">&copy; <a href=\"";
        // line 54
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
        return "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 54,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <!-- Footer-area start -->
    <div class=\"footer-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-sm-10 col-xs-12\">
                    <div class=\"single-footer\">
                        <h3 class=\"footer-title  title-border\">INFORMACION</h3>
                        <ul class=\"footer-contact\">
                            <li>
                                <strong style=\"font-size: 1.2em\">Atención al Público: </strong><br><br>
                                <div style=\"margin-left: 15px\">
                                    <strong>Dirección:</strong> Dr. Bernardo Houssay 206 (Colectora Este, Km 53), B1630, Pilar, Buenos Aires.<br>
                                    <strong>Teléfono:</strong> 0230 4422-721
                                </div>
                            </li>
                        </ul><br>
                        <ul class=\"footer-contact\">
                            <li>
                                <strong style=\"font-size: 1.2em\">Oficinas y Depósito Central: </strong><br><br>
                                <div style=\"margin-left: 15px\">
                                    <strong>Dirección:</strong> Estanislao Lopez 1138, B1629 Ex Ruta 8 - Pilar, Buenos Aires<br>
                                    <strong>Teléfono:</strong> 02304 422-721
                                </div>
                            </li>
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
                            <li><span>Celular :</span>011-15-66060977</li>
                            <li><span>Oficinas y Deposito Central :</span>02304 - 430150</li>
                            <li><span>Atención al Público :</span>02304 - 422721</li>
                            <li><span>Email :</span>ventas@fortinagropecuaria.com.ar</li>
                        </ul>
                    </div>
                </div><br><br>
                <div class=\"col-sm-6 col-xs-12\">
                    <div class=\"copyright\">
                        <p class=\"mb-0\">&copy; <a href=\"{{ 'home'|page }}\"> Fortinagropecuaria.com.ar  </a> 2019. @ By Verticedigital & Cuartocreativo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-area end -->

</footer>", "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/partials/footer.htm", "");
    }
}
