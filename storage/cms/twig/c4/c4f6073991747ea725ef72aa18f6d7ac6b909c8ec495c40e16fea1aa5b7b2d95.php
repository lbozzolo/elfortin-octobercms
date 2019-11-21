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

/* /Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/pages/producto.htm */
class __TwigTemplate_07f3254bcee4b2f9c9199d6502b42c6d6b218e9e1b5dc9bb099acee704baef5d extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "


";
        // line 7
        if (($context["record"] ?? null)) {
            // line 8
            echo "

<div class=\"product-area single-pro-area pt-80 pb-80 product-style-2\">
    <div class=\"container\">
        <div class=\"row shop-list single-pro-info no-sidebar\">
            <!-- Single-product start -->
            <div class=\"col-lg-12\">
                <div class=\"single-product clearfix\">
                    <!-- Single-pro-slider Big-photo start -->
                    <div class=\"single-pro-slider single-big-photo view-lightbox slider-for\">
                        <div>
                            <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", [], "any", false, false, false, 19), "path", [], "any", false, false, false, 19), "html", null, true);
            echo "\" alt=\"\" />
                            <a class=\"view-full-screen\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", [], "any", false, false, false, 20), "path", [], "any", false, false, false, 20), "html", null, true);
            echo "\"  data-lightbox=\"roadtrip\" data-title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
                                <i class=\"zmdi zmdi-zoom-in\"></i>
                            </a>
                        </div>
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "product_gallery", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 25
                echo "
                        <div>
                            <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 27), "html", null, true);
                echo "\" alt=\"\" />
                            <a class=\"view-full-screen\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 28), "html", null, true);
                echo "\"  data-lightbox=\"roadtrip\" data-title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                                <i class=\"zmdi zmdi-zoom-in\"></i>
                            </a>
                        </div>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
                    </div>
                    <!-- Single-pro-slider Big-photo end -->
                    <div class=\"product-info\">
                        <div class=\"fix\">
                            <h4 class=\"post-title floatleft\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["displayColumn"] ?? null), [], "any", false, false, false, 39), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "laboratorio", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</h4>
                            <!--<span class=\"pro-rating floatright\">-->
                                <!--<a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>-->
                                <!--<a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>-->
                                <!--<a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>-->
                                <!--<a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>-->
                                <!--<a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>-->
                                <!--<span>( 27 Rating )</span>-->
                            <!--</span>-->
                        </div>
                        <div class=\"fix mb-20\">
                            <span class=\"pro-price\">\$ ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, false, 50), "html", null, true);
            echo "</span>
                        </div>
                        <ul class=\"list-inline\">
                            <li class=\"list-group-item text-center\"><small>Principio Activo</small> <br> <span>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "principio", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</span></li>
                            <li class=\"list-group-item text-center\"><small>Presentación</small> <br> <span>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "presentacion", [], "any", false, false, false, 54), "html", null, true);
            echo "</span></li>
                        </ul>

                        <div class=\"product-description\">
                            <p>";
            // line 58
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 58);
            echo "</p>
                        </div>
                        <!-- color start -->

                        <!-- color end -->
                        <!-- Size start -->

                        <!-- Size end -->

                        <!-- Single-pro-slider Small-photo start -->
                        <div class=\"single-pro-slider single-sml-photo slider-nav\">

                            <div>
                                <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", [], "any", false, false, false, 71), "thumb", [0 => 150, 1 => 150, 2 => ["mode" => "crop"]], "method", false, false, false, 71), "html", null, true);
            echo "\" alt=\"\" />
                            </div>

                            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "product_gallery", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 75
                echo "
                                <div>
                                    <img src=\"";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 150, 1 => 150, 2 => ["mode" => "crop"]], "method", false, false, false, 77), "html", null, true);
                echo "\" alt=\"\" />
                                </div>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "
                        </div>
                        <!-- Single-pro-slider Small-photo end -->
                    </div>
                </div>
            </div>
            <!-- Single-product end -->
        </div>
        <!-- single-product-tab start -->
        <div class=\"single-pro-tab\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-3 col-sm-3 col-xs-12\">

                </div>
                <div class=\"col-lg-12 col-md-9 col-sm-9 col-xs-12\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">

                        <div class=\"tab-pane active\" id=\"reviews\">
                            <div class=\"pro-tab-info pro-reviews\">

                                <div class=\"leave-review\">
                                    <h3 class=\"tab-title title-border mb-30\">Solicitar cotización</h3>

                                    <div class=\"reply-box\">

                                    ";
            // line 107
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("cotizacionform"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 108
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- single-product-tab end -->
    </div>
</div>



";
        } else {
            // line 125
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/pages/producto.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 125,  214 => 108,  210 => 107,  182 => 81,  172 => 77,  168 => 75,  164 => 74,  158 => 71,  142 => 58,  135 => 54,  131 => 53,  125 => 50,  109 => 39,  102 => 34,  88 => 28,  84 => 27,  80 => 25,  76 => 24,  67 => 20,  63 => 19,  50 => 8,  48 => 7,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}



{% if record %}


<div class=\"product-area single-pro-area pt-80 pb-80 product-style-2\">
    <div class=\"container\">
        <div class=\"row shop-list single-pro-info no-sidebar\">
            <!-- Single-product start -->
            <div class=\"col-lg-12\">
                <div class=\"single-product clearfix\">
                    <!-- Single-pro-slider Big-photo start -->
                    <div class=\"single-pro-slider single-big-photo view-lightbox slider-for\">
                        <div>
                            <img src=\"{{ record.poster.path }}\" alt=\"\" />
                            <a class=\"view-full-screen\" href=\"{{ record.poster.path }}\"  data-lightbox=\"roadtrip\" data-title=\"{{ record.name }}\">
                                <i class=\"zmdi zmdi-zoom-in\"></i>
                            </a>
                        </div>
                        {% for image in record.product_gallery %}

                        <div>
                            <img src=\"{{ image.path }}\" alt=\"\" />
                            <a class=\"view-full-screen\" href=\"{{ image.path }}\"  data-lightbox=\"roadtrip\" data-title=\"{{ record.name }}\">
                                <i class=\"zmdi zmdi-zoom-in\"></i>
                            </a>
                        </div>

                        {% endfor %}

                    </div>
                    <!-- Single-pro-slider Big-photo end -->
                    <div class=\"product-info\">
                        <div class=\"fix\">
                            <h4 class=\"post-title floatleft\">{{ attribute(record, displayColumn) }} - {{ record.laboratorio.name }}</h4>
                            <!--<span class=\"pro-rating floatright\">-->
                                <!--<a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>-->
                                <!--<a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>-->
                                <!--<a href=\"#\"><i class=\"zmdi zmdi-star\"></i></a>-->
                                <!--<a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>-->
                                <!--<a href=\"#\"><i class=\"zmdi zmdi-star-half\"></i></a>-->
                                <!--<span>( 27 Rating )</span>-->
                            <!--</span>-->
                        </div>
                        <div class=\"fix mb-20\">
                            <span class=\"pro-price\">\$ {{ record.price }}</span>
                        </div>
                        <ul class=\"list-inline\">
                            <li class=\"list-group-item text-center\"><small>Principio Activo</small> <br> <span>{{ record.principio.name}}</span></li>
                            <li class=\"list-group-item text-center\"><small>Presentación</small> <br> <span>{{ record.presentacion}}</span></li>
                        </ul>

                        <div class=\"product-description\">
                            <p>{{ record.description|raw }}</p>
                        </div>
                        <!-- color start -->

                        <!-- color end -->
                        <!-- Size start -->

                        <!-- Size end -->

                        <!-- Single-pro-slider Small-photo start -->
                        <div class=\"single-pro-slider single-sml-photo slider-nav\">

                            <div>
                                <img src=\"{{ record.poster.thumb(150,150, {'mode':'crop'}) }}\" alt=\"\" />
                            </div>

                            {% for image in record.product_gallery %}

                                <div>
                                    <img src=\"{{ image.thumb(150,150, {'mode':'crop'}) }}\" alt=\"\" />
                                </div>

                            {% endfor %}

                        </div>
                        <!-- Single-pro-slider Small-photo end -->
                    </div>
                </div>
            </div>
            <!-- Single-product end -->
        </div>
        <!-- single-product-tab start -->
        <div class=\"single-pro-tab\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-3 col-sm-3 col-xs-12\">

                </div>
                <div class=\"col-lg-12 col-md-9 col-sm-9 col-xs-12\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">

                        <div class=\"tab-pane active\" id=\"reviews\">
                            <div class=\"pro-tab-info pro-reviews\">

                                <div class=\"leave-review\">
                                    <h3 class=\"tab-title title-border mb-30\">Solicitar cotización</h3>

                                    <div class=\"reply-box\">

                                    {% component 'cotizacionform' %}

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- single-product-tab end -->
    </div>
</div>



{% else %}
    {{ notFoundMessage }}
{% endif %}", "/Applications/MAMP/htdocs/elfortin-october/themes/el-fortin-agropecuaria/pages/producto.htm", "");
    }
}
