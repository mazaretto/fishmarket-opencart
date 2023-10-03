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

/* fish/template/product/search.twig */
class __TwigTemplate_db650c53f3e6e3893bfb65bfaf354b3a5abe2da69ed0be9b0260588cad3f599a extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-search\" class=\"product-search\">

    <header class=\"pages-header\">
        <div class=\"container\">
            <h1 class=\"pages-header__title\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo " ";
        if (($context["weight"] ?? null)) {
            echo " (";
            echo ($context["weight"] ?? null);
            echo ") ";
        }
        echo "</h1>
            <ul class=\"pages-header__breadcrumbs\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </ul>
        </div>
    </header>
    <div class=\"container product-search__container\" id=\"content\">
        <div class=\"product-search__field\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 16
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"product-search__input\" />
            <input type=\"button\" value=\"";
        // line 17
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"button\" />
        </div>

        ";
        // line 20
        if (($context["products"] ?? null)) {
            // line 21
            echo "
            <div class=\"product-search__top\">
                <h2 class=\"product-search__title\">";
            // line 23
            echo ($context["text_search"] ?? null);
            echo "</h2>

                <select id=\"input-sort\" class=\"product-search__select\" onchange=\"location = this.value;\">
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 27
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 27) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 28
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 28);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 28);
                    echo "</option>
                        ";
                } else {
                    // line 30
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 30);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 30);
                    echo "</option>
                        ";
                }
                // line 32
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </select>
            </div>

            <div class=\"product-search__products\">
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 38
                echo "                    <div class=\"product-layout product-item\">
                        <div class=\"product-item__top\">
                            <button class=\"product-item__top_like\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 40
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
                echo "');\">
                                <svg width=\"17\" height=\"15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.313 1.031C13.5-.5 10.718-.28 9 1.5c-1.75-1.781-4.531-2-6.344-.469C.312 3 .656 6.22 2.344 7.938l5.469 5.593c.312.313.718.5 1.187.5a1.63 1.63 0 001.156-.5l5.5-5.594c1.656-1.718 2-4.937-.344-6.906zm-.75 5.844l-5.47 5.594c-.062.062-.124.062-.218 0L3.406 6.875c-1.156-1.156-1.375-3.344.219-4.688 1.219-1.03 3.094-.874 4.281.313L9 3.625 10.094 2.5c1.156-1.188 3.031-1.344 4.25-.344 1.594 1.375 1.375 3.563.219 4.719z\" fill=\"#E64B37\"/></svg>
                            </button>
                        </div>
                        <div class=\"product-item__thumb\">
                            <a href=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 45);
                echo "\" class=\"product-item__thumb_link\">
                                <img src=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 46);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
                echo "\" class=\"img-responsive\" />
                            </a>
                        </div>
                        <div class=\"product-item__content\">
                            <h4 class=\"product-item__title\"><a href=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 50);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                echo "</a></h4>
                            <span class=\"product-item__option\">50шт / 5кг</span>
                        </div>
                        <div class=\"product-item__button\">
                            <button class=\"button btn-middle\" type=\"button\" onclick=\"cart.add('";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 54);
                echo "');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
                        </div>
                        <span class=\"product-item__price\">
                            ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "                                <p class=\"price\">
                                ";
                    // line 59
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 59)) {
                        // line 60
                        echo "                                    <span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 60);
                        echo "</span>
                                ";
                    } else {
                        // line 62
                        echo "                                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 62);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 62);
                        echo "</span>
                                ";
                    }
                    // line 64
                    echo "                              </p>
                            ";
                }
                // line 66
                echo "                        </span>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            </div>
            ";
            // line 70
            echo ($context["pagination"] ?? null);
            echo "
            ";
            // line 71
            echo ($context["results"] ?? null);
            echo "
        ";
        } else {
            // line 73
            echo "          <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        ";
        }
        // line 75
        echo "    </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 124
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "fish/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 124,  238 => 75,  232 => 73,  227 => 71,  223 => 70,  220 => 69,  212 => 66,  208 => 64,  200 => 62,  194 => 60,  192 => 59,  189 => 58,  187 => 57,  179 => 54,  170 => 50,  159 => 46,  155 => 45,  145 => 40,  141 => 38,  137 => 37,  131 => 33,  125 => 32,  117 => 30,  109 => 28,  106 => 27,  102 => 26,  96 => 23,  92 => 21,  90 => 20,  84 => 17,  78 => 16,  71 => 11,  60 => 9,  56 => 8,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/product/search.twig", "");
    }
}
