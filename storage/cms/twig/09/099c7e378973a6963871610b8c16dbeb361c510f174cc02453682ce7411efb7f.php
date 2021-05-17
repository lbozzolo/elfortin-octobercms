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

/* /home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/pages/productos.htm */
class __TwigTemplate_01222c7c0f57adb511f93f52c9774c91f30c4cc8612b1d0df1e9d7bfa0c2040f extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 30
            echo "                        <tr>
                            <td class=\"product-thumbnail  text-left\">
                                <!-- Single-product start -->
                                <div class=\"single-product\">
                                    <div class=\"product-img\">
                                        <a href=\"\">
                                            ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 36)) {
                // line 37
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "poster", [], "any", false, false, false, 37), "thumb", [0 => 150, 1 => 150, 2 => ["mode" => "crop"]], "method", false, false, false, 37), "html", null, true);
                echo "\" alt=\"\" />
                                            ";
            } else {
                // line 39
                echo "                                            <img src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo/logo01.png");
                echo "\" alt=\"\" />
                                            ";
            }
            // line 41
            echo "                                        </a>
                                    </div>
                                    <div class=\"product-info\">
                                        <h4 class=\"post-title\"><a class=\"text-light-black\" href=\"#\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</a></h4>
                                        <p class=\"mb-0\">Color :  Black</p>
                                        <p class=\"mb-0\">Size : SL</p>
                                    </div>
                                </div>
                                <!-- Single-product end -->
                            </td>
                            <td class=\"product-price\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "principio", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                            <td class=\"product-stock\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "laboratorio", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                            <td class=\"product-add-cart\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "presentacion", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                            <td class=\"product-add-cart\">
                                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "categorias", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 56
                echo "
                                <span style=\"padding: 5px 10px; color:white; background-color: darkkhaki; border-radius: 5px\">";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "name", [], "any", false, false, false, 57), "html", null, true);
                echo "</span>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                            </td>
                            <td class=\"product-remove\">
                                ";
            // line 62
            if (($context["detailsPage"] ?? null)) {
                // line 63
                echo "                                <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 63)]);
                echo "\" data-text=\"ver\" class=\"button-one\">detalles</a>
                                ";
            }
            // line 65
            echo "                            </td>
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
        // line 82
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 82) > 1)) {
            // line 83
            echo "                    <ul class=\"pagination\">
                        ";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 84) > 1)) {
                // line 85
                echo "                        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 85), "baseFileName", [], "any", false, false, false, 85), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 85) - 1)]);
                echo "\">&larr; </a></li>
                        ";
            }
            // line 87
            echo "
                        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 88)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 89
                echo "                        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 89) == $context["page"])) ? ("active") : (null));
                echo "\">
                            <a href=\"";
                // line 90
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 90), "baseFileName", [], "any", false, false, false, 90), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "
                        ";
            // line 94
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 94) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 94))) {
                // line 95
                echo "                        <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 95), "baseFileName", [], "any", false, false, false, 95), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 95) + 1)]);
                echo "\"> &rarr;</a></li>
                        ";
            }
            // line 97
            echo "                    </ul>
                    ";
        }
        // line 99
        echo "                    </div>

                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/pages/productos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 99,  234 => 97,  228 => 95,  226 => 94,  223 => 93,  212 => 90,  207 => 89,  203 => 88,  200 => 87,  194 => 85,  192 => 84,  189 => 83,  187 => 82,  180 => 77,  169 => 72,  164 => 69,  156 => 65,  150 => 63,  148 => 62,  144 => 60,  135 => 57,  132 => 56,  128 => 55,  123 => 53,  119 => 52,  115 => 51,  105 => 44,  100 => 41,  94 => 39,  88 => 37,  86 => 36,  78 => 30,  73 => 29,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}



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
                                        <a href=\"\">
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
                    {% if records.lastPage > 1 %}
                    <ul class=\"pagination\">
                        {% if records.currentPage > 1 %}
                        <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; </a></li>
                        {% endif %}

                        {% for page in 1..records.lastPage %}
                        <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                            <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                        </li>
                        {% endfor %}

                        {% if records.lastPage > records.currentPage %}
                        <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\"> &rarr;</a></li>
                        {% endif %}
                    </ul>
                    {% endif %}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>", "/home/fortina/domains/fortinagropecuaria.com.ar/public_html/themes/el-fortin-agropecuaria/pages/productos.htm", "");
    }
}
