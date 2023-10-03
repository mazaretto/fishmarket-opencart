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
class __TwigTemplate_902721023f5d42808c3b226a97a94fa1a9394aaf120161f80d2d43525549b38a extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["category"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
            // line 21
            echo "            <li class=\"block-categories__item\">
              <a href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "href", [], "any", false, false, false, 22);
            echo "\" class=\"block-categories__link\">";
            echo twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 22);
            echo "</a>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </ul>
      </div>
    </div>
    <div id=\"content\" class=\"product-category__content\">
      <h2 class=\"product-category__content_title\">";
        // line 29
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 30
        if (($context["products"] ?? null)) {
            // line 31
            echo "        <div class=\"product-category__top\">
          <span class=\"product-category__total-prod\">Всего товаров: <span>42</span></span>
          <div class=\"input-group product-category__sort\">
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 36
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 36) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 37
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 37);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 37);
                    echo "</option>
                ";
                } else {
                    // line 39
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 39);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 39);
                    echo "</option>
                ";
                }
                // line 41
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </select>
          </div>
        </div>
        <div class=\"product-category__products\">
          ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 47
                echo "            <div class=\"product-layout product-item\">
              <div class=\"product-item__top\">
                <button class=\"product-item__top_like\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 49
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 49);
                echo "');\">
                  <svg width=\"17\" height=\"15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.313 1.031C13.5-.5 10.718-.28 9 1.5c-1.75-1.781-4.531-2-6.344-.469C.312 3 .656 6.22 2.344 7.938l5.469 5.593c.312.313.718.5 1.187.5a1.63 1.63 0 001.156-.5l5.5-5.594c1.656-1.718 2-4.937-.344-6.906zm-.75 5.844l-5.47 5.594c-.062.062-.124.062-.218 0L3.406 6.875c-1.156-1.156-1.375-3.344.219-4.688 1.219-1.03 3.094-.874 4.281.313L9 3.625 10.094 2.5c1.156-1.188 3.031-1.344 4.25-.344 1.594 1.375 1.375 3.563.219 4.719z\" fill=\"#E64B37\"/></svg>
                </button>
              </div>
              <div class=\"product-item__thumb\">
                <a href=\"";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 54);
                echo "\" class=\"product-item__thumb_link\">
                  <img src=\"";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 55);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
                echo "\" class=\"img-responsive\" />
                </a>
              </div>
              <div class=\"product-item__content\">
                <h4 class=\"product-item__title\"><a href=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 59);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59);
                echo "</a></h4>
                <span class=\"product-item__option\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 60);
                echo "</span>
              </div>
              <div class=\"product-item__button\">
                <button class=\"button btn-middle\" type=\"button\" onclick=\"cart.add('";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 63);
                echo "');\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
              </div>
              <span class=\"product-item__price\">
                ";
                // line 66
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "                  <p class=\"price\">
                    ";
                    // line 68
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 68)) {
                        // line 69
                        echo "                      <span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 69);
                        echo "</span>
                    ";
                    } else {
                        // line 71
                        echo "                      <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 71);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 71);
                        echo "</span>
                    ";
                    }
                    // line 73
                    echo "                  </p>
                ";
                }
                // line 75
                echo "              </span>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "        </div>

        ";
            // line 80
            echo ($context["pagination"] ?? null);
            echo "
        ";
            // line 81
            echo ($context["results"] ?? null);
            echo "

      ";
        }
        // line 84
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 85
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 87
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 90
        echo "    </div>
  </div>

  <div class=\"product-category__bottom\">
    ";
        // line 94
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
</div>

";
        // line 98
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
        return array (  277 => 98,  270 => 94,  264 => 90,  256 => 87,  250 => 85,  247 => 84,  241 => 81,  237 => 80,  233 => 78,  225 => 75,  221 => 73,  213 => 71,  207 => 69,  205 => 68,  202 => 67,  200 => 66,  192 => 63,  186 => 60,  180 => 59,  169 => 55,  165 => 54,  155 => 49,  151 => 47,  147 => 46,  141 => 42,  135 => 41,  127 => 39,  119 => 37,  116 => 36,  112 => 35,  106 => 31,  104 => 30,  100 => 29,  94 => 25,  83 => 22,  80 => 21,  76 => 20,  65 => 11,  54 => 9,  50 => 8,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/product/category.twig", "");
    }
}
