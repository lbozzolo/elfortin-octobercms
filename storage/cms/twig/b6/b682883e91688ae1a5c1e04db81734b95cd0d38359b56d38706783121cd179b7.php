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

/* /home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/pages/producto.htm */
class __TwigTemplate_a04d383d7523ab945cffafe9743c03f2b0108e28e7cbe11c9235535ba263b50f extends \Twig\Template
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
                        </div>
                        <div class=\"fix mb-20\">
                            <span class=\"pro-price\">\$ ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
                        </div>
                        <ul class=\"list-inline\">
                            <li class=\"list-group-item text-center\"><small>Principio Activo</small> <br> <span>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "principio", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</span></li>
                            <li class=\"list-group-item text-center\"><small>Presentación</small> <br> <span>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "presentacion", [], "any", false, false, false, 46), "html", null, true);
            echo "</span></li>
                        </ul>

                        <div class=\"product-description\">
                            <p>";
            // line 50
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 50);
            echo "</p>
                        </div>

                        <div class=\"product-description\">
                            <p>";
            // line 54
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "caracteristicas", [], "any", false, false, false, 54);
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
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", [], "any", false, false, false, 67), "thumb", [0 => 150, 1 => 150, 2 => ["mode" => "crop"]], "method", false, false, false, 67), "html", null, true);
            echo "\" alt=\"\" />
                            </div>

                            ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "product_gallery", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 71
                echo "
                                <div>
                                    <img src=\"";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 150, 1 => 150, 2 => ["mode" => "crop"]], "method", false, false, false, 73), "html", null, true);
                echo "\" alt=\"\" />
                                </div>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
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


                                    <div class=\"card bg-danger mb-20\" style=\"border-radius: 5px\" id=\"result\"></div>


                                    <h3 class=\"tab-title title-border mb-30\">Solicitar cotización</h3>

                                    <div class=\"reply-box\">

                                    ";
            // line 108
            $context["producto"] = twig_get_attribute($this->env, $this->source, ($context["cotizacionform"] ?? null), "record", [], "any", false, false, false, 108);
            // line 109
            echo "
                                    <form data-request=\"onSend\">
                                        <input type=\"hidden\" name=\"producto_id\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 111), "html", null, true);
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
                                                
                                                <!--";
            // line 125
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("captcha"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            echo "-->
                                                
                                                <button type=\"submit\" data-text=\"Cotizar\" class=\"button-one submit-button mt-20\">Enviar</button>
                                                
                                            </div>
                                        </div>
                                    </form>

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
            // line 149
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/pages/producto.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 149,  237 => 125,  220 => 111,  216 => 109,  214 => 108,  181 => 77,  171 => 73,  167 => 71,  163 => 70,  157 => 67,  141 => 54,  134 => 50,  127 => 46,  123 => 45,  117 => 42,  109 => 39,  102 => 34,  88 => 28,  84 => 27,  80 => 25,  76 => 24,  67 => 20,  63 => 19,  50 => 8,  48 => 7,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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

                        <div class=\"product-description\">
                            <p>{{ record.caracteristicas|raw }}</p>
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


                                    <div class=\"card bg-danger mb-20\" style=\"border-radius: 5px\" id=\"result\"></div>


                                    <h3 class=\"tab-title title-border mb-30\">Solicitar cotización</h3>

                                    <div class=\"reply-box\">

                                    {% set producto = cotizacionform.record %}

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
                                                
                                                <!--{% component 'captcha' %}-->
                                                
                                                <button type=\"submit\" data-text=\"Cotizar\" class=\"button-one submit-button mt-20\">Enviar</button>
                                                
                                            </div>
                                        </div>
                                    </form>

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
{% endif %}", "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/pages/producto.htm", "");
    }
}
