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
class __TwigTemplate_31d638c11e618f980f522d09dc4c34ca84dcb4fe0cd97f4a7b16b9bc6c9b18ba extends \Twig\Template
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
      ";
        // line 17
        echo ($context["column_left"] ?? null);
        echo "
    </div>
    <div id=\"content\" class=\"product-category__content\">
      <h2 class=\"product-category__content_title\">";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 21
        if (($context["products"] ?? null)) {
            // line 22
            echo "        <div class=\"product-category__top\">
          <span class=\"product-category__total-prod\">Всего товаров: <span>42</span></span>
          <div class=\"input-group product-category__sort\">
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 27
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 27) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 28
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 28);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 28);
                    echo "</option>
                ";
                } else {
                    // line 30
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 30);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 30);
                    echo "</option>
                ";
                }
                // line 32
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </select>
          </div>
        </div>
        <div class=\"product-category__products\">
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 38
                echo "            <div class=\"product-layout product-item\">
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
                <span class=\"product-item__option\">";
                // line 51
                echo ($context["weight"] ?? null);
                echo "</span>
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
                    echo "                  <p class=\"price\">
                    ";
                    // line 59
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 59)) {
                        // line 60
                        echo "                      <span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 60);
                        echo "</span>
                    ";
                    } else {
                        // line 62
                        echo "                      <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 62);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 62);
                        echo "</span>
                    ";
                    }
                    // line 64
                    echo "                  </p>
                ";
                }
                // line 66
                echo "              </span>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        </div>

        ";
            // line 71
            echo ($context["pagination"] ?? null);
            echo "
        ";
            // line 72
            echo ($context["results"] ?? null);
            echo "

      ";
        }
        // line 75
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 76
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 78
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 81
        echo "    </div>
  </div>

  <div class=\"product-category__bottom\">
    ";
        // line 85
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
</div>

";
        // line 89
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
        return array (  256 => 89,  249 => 85,  243 => 81,  235 => 78,  229 => 76,  226 => 75,  220 => 72,  216 => 71,  212 => 69,  204 => 66,  200 => 64,  192 => 62,  186 => 60,  184 => 59,  181 => 58,  179 => 57,  171 => 54,  165 => 51,  159 => 50,  148 => 46,  144 => 45,  134 => 40,  130 => 38,  126 => 37,  120 => 33,  114 => 32,  106 => 30,  98 => 28,  95 => 27,  91 => 26,  85 => 22,  83 => 21,  79 => 20,  73 => 17,  65 => 11,  54 => 9,  50 => 8,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/product/category.twig", "");
    }
}
