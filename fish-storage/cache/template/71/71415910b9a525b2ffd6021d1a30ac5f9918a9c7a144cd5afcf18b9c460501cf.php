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

/* fish/template/product/category.twig */
class __TwigTemplate_2bdfe05ef4c682df12d45e57778130511265b7acf723053b090682b871684282 extends \Twig\Template
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
<div id=\"product-category\" class=\"product-category\">

  <header class=\"pages-header\">
    <div class=\"container\">
      <h1 class=\"pages-header__title\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"pages-header__breadcrumbs\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "          <li><a href=\"";
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
        echo "      </ul>
    </div>
  </header>

  <div class=\"container product-category__container\">
    <div class=\"product-category__left\">
      <div class=\"block-categories\">
        <span class=\"block-categories__title\">Категории</span>
        <ul class=\"block-categories__list\">
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["main_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            echo "            <li class=\"block-categories__item\">
              <a href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 22);
            echo "\" class=\"block-categories__link\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
            echo "</a>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </ul>
      </div>
      <div class=\"product-category__left_banner\">
        <img src=\"catalog/view/theme/fish/image/dest/banner.png\" alt=\"\">
      </div>
    </div>
    <div id=\"content\" class=\"product-category__content\">
      <h2 class=\"product-category__content_title\">";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 33
        if (($context["products"] ?? null)) {
            // line 34
            echo "        <div class=\"product-category__top\">
          <span class=\"product-category__total-prod\">Товаров в категории: <span>";
            // line 35
            echo ($context["count_products"] ?? null);
            echo "</span></span>
          <div class=\"input-group product-category__sort\">
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 39
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 39) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 40
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 40);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 40);
                    echo "</option>
                ";
                } else {
                    // line 42
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 42);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 42);
                    echo "</option>
                ";
                }
                // line 44
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </select>
          </div>
        </div>
        <div class=\"product-category__products\">
          ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 50
                echo "            <div class=\"product-layout product-item\">
              <div class=\"product-item__top\">
                <button class=\"product-item__top_like\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 52
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 52);
                echo "');\">
                  <svg width=\"17\" height=\"15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.313 1.031C13.5-.5 10.718-.28 9 1.5c-1.75-1.781-4.531-2-6.344-.469C.312 3 .656 6.22 2.344 7.938l5.469 5.593c.312.313.718.5 1.187.5a1.63 1.63 0 001.156-.5l5.5-5.594c1.656-1.718 2-4.937-.344-6.906zm-.75 5.844l-5.47 5.594c-.062.062-.124.062-.218 0L3.406 6.875c-1.156-1.156-1.375-3.344.219-4.688 1.219-1.03 3.094-.874 4.281.313L9 3.625 10.094 2.5c1.156-1.188 3.031-1.344 4.25-.344 1.594 1.375 1.375 3.563.219 4.719z\" fill=\"#E64B37\"/></svg>
                </button>
              </div>
              <div class=\"product-item__thumb\">
                <a href=\"";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 57);
                echo "\" class=\"product-item__thumb_link\">
                  <img src=\"";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 58);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
                echo "\" class=\"img-responsive\" />
                </a>
              </div>
              <div class=\"product-item__content\">
                <h4 class=\"product-item__title\"><a href=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 62);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62);
                echo "</a></h4>
                <span class=\"product-item__option\">";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 63);
                echo "</span>
              </div>
              <div class=\"product-item__button\">
                <button class=\"button btn-middle\" type=\"button\" onclick=\"cart.add('";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 66);
                echo "');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
              </div>
              <span class=\"product-item__price\">
                ";
                // line 69
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "                  <p class=\"price\">
                    ";
                    // line 71
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 71)) {
                        // line 72
                        echo "                      <span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 72);
                        echo "</span>
                    ";
                    } else {
                        // line 74
                        echo "                      <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 74);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 74);
                        echo "</span>
                    ";
                    }
                    // line 76
                    echo "                  </p>
                ";
                }
                // line 78
                echo "              </span>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "        </div>

        ";
            // line 83
            echo ($context["pagination"] ?? null);
            echo "
        ";
            // line 84
            echo ($context["results"] ?? null);
            echo "

      ";
        }
        // line 87
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 88
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 90
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 93
        echo "    </div>
  </div>

  <div class=\"product-category__bottom\">
    ";
        // line 97
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
</div>

";
        // line 101
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "fish/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 101,  276 => 97,  270 => 93,  262 => 90,  256 => 88,  253 => 87,  247 => 84,  243 => 83,  239 => 81,  231 => 78,  227 => 76,  219 => 74,  213 => 72,  211 => 71,  208 => 70,  206 => 69,  198 => 66,  192 => 63,  186 => 62,  175 => 58,  171 => 57,  161 => 52,  157 => 50,  153 => 49,  147 => 45,  141 => 44,  133 => 42,  125 => 40,  122 => 39,  118 => 38,  112 => 35,  109 => 34,  107 => 33,  103 => 32,  94 => 25,  83 => 22,  80 => 21,  76 => 20,  65 => 11,  54 => 9,  50 => 8,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/product/category.twig", "");
    }
}
