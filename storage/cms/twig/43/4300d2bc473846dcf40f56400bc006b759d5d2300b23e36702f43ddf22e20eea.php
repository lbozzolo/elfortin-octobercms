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

/* /home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/pages/categorias.htm */
class __TwigTemplate_8b17a0a3c348d50a0d08d983765ff733836cedea74829b6d57d47a959df9f9fd extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["productos"] ?? null), "productos", [], "any", false, false, false, 1);
        // line 2
        echo "



<div class=\"product-area pt-80 pb-80 product-style-2 mb-60 mt-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"table-content table-responsive\">

                    <table>
                        <thead>
                        <tr>
                            <th class=\"product-thumbnail\">Producto</th>
                            <th class=\"product-price\">Principio Activo</th>
                            <th class=\"product-stock\">Laboratorio</th>
                            <th class=\"product-add-cart\">Presentación</th>
                            <th class=\"product-add-cart\">Categorías</th>
                            <th class=\"product-remove\"></th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 26
            echo "                        <tr>
                            <td class=\"product-thumbnail  text-left\">
                                <!-- Single-product start -->
                                <div class=\"single-product\">
                                    <div class=\"product-img\">
                                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["basePath"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
                                            ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 32)) {
                // line 33
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 33), "thumb", [0 => 150, 1 => 150, 2 => ["mode" => "crop"]], "method", false, false, false, 33), "html", null, true);
                echo "\" alt=\"\" />
                                            ";
            } else {
                // line 35
                echo "                                            <img src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo/logo01.png");
                echo "\" alt=\"\" />
                                            ";
            }
            // line 37
            echo "                                        </a>
                                    </div>
                                    <div class=\"product-info\">
                                        <h4 class=\"post-title\"><a class=\"text-light-black\" href=\"#\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></h4>
                                        <p class=\"mb-0\">Color :  Black</p>
                                        <p class=\"mb-0\">Size : SL</p>
                                    </div>
                                </div>
                                <!-- Single-product end -->
                            </td>
                            <td class=\"product-price\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "principio", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td class=\"product-stock\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "laboratorio", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                            <td class=\"product-add-cart\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "presentacion", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                            <td class=\"product-add-cart\">
                                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "categorias", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 52
                echo "
                                <span style=\"padding: 5px 10px; color:white; background-color: darkkhaki; border-radius: 5px\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "name", [], "any", false, false, false, 53), "html", null, true);
                echo "</span>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                            </td>
                            <td class=\"product-remove\">
                                ";
            // line 58
            if (($context["detailsPage"] ?? null)) {
                // line 59
                echo "                                <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 59)]);
                echo "\" data-text=\"ver\" class=\"button-one\">detalles</a>
                                ";
            }
            // line 61
            echo "
                                <!--<a href=\"producto/";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\" data-text=\"ver\" class=\"button-one\">detalles</a>-->
                                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, ($context["basePath"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\" data-text=\"ver\" class=\"button-one\">detalles</a>

                            </td>
                        </tr>

                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "
                        <tr>
                            <td colspan=\"5\">
                                <p>";
            // line 72
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</p>
                            </td>
                        </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
                        </tbody>
                    </table>

                    <div class=\"mt-50\">

                        ";
        // line 83
        echo twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "render", [], "any", false, false, false, 83);
        echo "
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/pages/categorias.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 83,  188 => 77,  177 => 72,  172 => 69,  159 => 63,  155 => 62,  152 => 61,  146 => 59,  144 => 58,  140 => 56,  131 => 53,  128 => 52,  124 => 51,  119 => 49,  115 => 48,  111 => 47,  101 => 40,  96 => 37,  90 => 35,  84 => 33,  82 => 32,  76 => 31,  69 => 26,  64 => 25,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = productos.productos %}




<div class=\"product-area pt-80 pb-80 product-style-2 mb-60 mt-60\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"table-content table-responsive\">

                    <table>
                        <thead>
                        <tr>
                            <th class=\"product-thumbnail\">Producto</th>
                            <th class=\"product-price\">Principio Activo</th>
                            <th class=\"product-stock\">Laboratorio</th>
                            <th class=\"product-add-cart\">Presentación</th>
                            <th class=\"product-add-cart\">Categorías</th>
                            <th class=\"product-remove\"></th>
                        </tr>
                        </thead>
                        <tbody>

                        {% for record in records %}
                        <tr>
                            <td class=\"product-thumbnail  text-left\">
                                <!-- Single-product start -->
                                <div class=\"single-product\">
                                    <div class=\"product-img\">
                                        <a href=\"{{ basePath }}/{{ record.id}}\">
                                            {% if(record.poster) %}
                                            <img src=\"{{ record.poster.thumb(150,150, {'mode' : 'crop'}) }}\" alt=\"\" />
                                            {% else %}
                                            <img src=\"{{'assets/img/logo/logo01.png'|theme }}\" alt=\"\" />
                                            {% endif %}
                                        </a>
                                    </div>
                                    <div class=\"product-info\">
                                        <h4 class=\"post-title\"><a class=\"text-light-black\" href=\"#\">{{ record.name }}</a></h4>
                                        <p class=\"mb-0\">Color :  Black</p>
                                        <p class=\"mb-0\">Size : SL</p>
                                    </div>
                                </div>
                                <!-- Single-product end -->
                            </td>
                            <td class=\"product-price\">{{ record.principio.name }}</td>
                            <td class=\"product-stock\">{{ record.laboratorio.name }}</td>
                            <td class=\"product-add-cart\">{{ record.presentacion }}</td>
                            <td class=\"product-add-cart\">
                                {% for categoria in record.categorias %}

                                <span style=\"padding: 5px 10px; color:white; background-color: darkkhaki; border-radius: 5px\">{{ categoria.name }}</span>

                                {% endfor %}
                            </td>
                            <td class=\"product-remove\">
                                {% if detailsPage %}
                                <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\" data-text=\"ver\" class=\"button-one\">detalles</a>
                                {% endif %}

                                <!--<a href=\"producto/{{ record.id }}\" data-text=\"ver\" class=\"button-one\">detalles</a>-->
                                <a href=\"{{ basePath }}/{{ record.id}}\" data-text=\"ver\" class=\"button-one\">detalles</a>

                            </td>
                        </tr>

                        {% else %}

                        <tr>
                            <td colspan=\"5\">
                                <p>{{ noRecordsMessage }}</p>
                            </td>
                        </tr>

                        {% endfor %}

                        </tbody>
                    </table>

                    <div class=\"mt-50\">

                        {{ records.render|raw }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>", "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/pages/categorias.htm", "");
    }
}
