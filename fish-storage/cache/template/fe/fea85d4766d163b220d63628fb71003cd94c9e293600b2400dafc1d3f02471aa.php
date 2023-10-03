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

/* fish/template/checkout/cart.twig */
class __TwigTemplate_30df30a6902b7c7ff8d111dcf317af85dd599e994cf4c7a76ebbe2b4e479c7c6 extends \Twig\Template
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
<div id=\"checkout-cart\" class=\"checkout-cart\">


  <header class=\"pages-header\">
    <div class=\"container\">
      <h1 class=\"pages-header__title\">";
        // line 7
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
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </ul>
    </div>
  </header>

  <div id=\"content\" class=\"checkout-cart__container container\">
    <span class=\"breadcrumb\"></span>
    ";
        // line 18
        if (($context["attention"] ?? null)) {
            // line 19
            echo "      <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 28
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 29
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 33
        echo "
    <form action=\"";
        // line 34
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" class=\"checkout-cart__table\" id=\"content\">

      <div class=\"checkout-cart__table-top\">
        <span class=\"checkout-cart__table-top_title table-top-name\">Наименoвание</span>
        <span class=\"checkout-cart__table-top_title table-top-quantity\">Кoличествo</span>
        <span class=\"checkout-cart__table-top_title table-top-size\">Вес</span>
        <span class=\"checkout-cart__table-top_title table-top-price\">Цена/Итог</span>
      </div>
      <div class=\"checkout-cart__table-cont\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "          <div class=\"checkout-cart__table-cont_row\">
            <div class=\"checkout-cart__table-cont_thumb\">
              ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 46)) {
                // line 47
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 47);
                echo "\">
                  <img src=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 48);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 48);
                echo "\" class=\"img-thumbnail\" />
                </a>
              ";
            }
            // line 51
            echo "            </div>
            <div class=\"checkout-cart__table-cont_name\">
              <a href=\"";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 53);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
            echo "</a>
              ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 54)) {
                // line 55
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 56
                    echo "                  <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 56);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 56);
                    echo "</span>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "              ";
            }
            // line 59
            echo "            </div>
            <div class=\"checkout-cart__table-cont_quantity\">
              <div class=\"quantity-block\">
                <button class=\"quantity-arrow-minus quantity-block__btn\"> - </button>
                <input class=\"quantity-block__input\" type=\"text\" name=\"quantity[";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 63);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 63);
            echo "\" id=\"input-quantity\" />
                <button class=\"quantity-arrow-plus quantity-block__btn\"> + </button>
              </div>
            </div>
            <div class=\"checkout-cart__table-cont_weight\">
              ";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 68);
            echo "
            </div>
            <div class=\"checkout-cart__table-cont_price\">
              <span class=\"checkout-cart__table-cont_price-main\">";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 71);
            echo "</span> / <span class=\"checkout-cart__table-cont_price-total\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 71);
            echo "</span>
            </div>
            <div class=\"checkout-cart__table-cont_total\">

            </div>
            <div class=\"checkout-cart__table-cont_remove\">
              <button class=\"checkout-cart__table-cont_remove-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 77
            echo ($context["button_remove"] ?? null);
            echo "\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 77);
            echo "');\">
                <svg width=\"22\" height=\"21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M17.13 8.14s-.482 5.612-.761 7.976c-.133 1.13-.875 1.79-2.09 1.812a191.14 191.14 0 01-6.94-.004c-1.169-.023-1.898-.693-2.029-1.802-.28-2.385-.76-7.983-.76-7.983m13.805-2.69H3.325m12.134 0c-.696 0-1.295-.462-1.432-1.103l-.215-1.014c-.133-.467-.583-.79-1.096-.79H8.963c-.514 0-.964.323-1.097.79l-.215 1.014c-.137.64-.736 1.103-1.432 1.103\" stroke=\"#E36363\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
              </button>
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "      </div>
    </form>

    <div class=\"checkout-cart__action-wrap\">
      <div class=\"checkout-cart__action\">
        <div class=\"checkout-cart__action_row\">
          <span class=\"checkout-cart__action_title\">Товаров:</span>
          <span class=\"checkout-cart__action_val\">";
        // line 90
        echo ($context["total_count"] ?? null);
        echo "</span>
        </div>
        ";
        // line 92
        if (($context["weight"] ?? null)) {
            // line 93
            echo "        <div class=\"checkout-cart__action_row\">
          <span class=\"checkout-cart__action_title\">Вес:</span>
          <span class=\"checkout-cart__action_val\">";
            // line 95
            echo ($context["weight"] ?? null);
            echo " (кг)</span>
        </div>
        ";
        }
        // line 98
        echo "        <div class=\"checkout-cart__action_row checkout-cart__action_row-tatal\">
          <span class=\"checkout-cart__action_title\">Итоговая цена:</span>
          <span class=\"checkout-cart__action_val\">";
        // line 100
        echo ($context["total_price"] ?? null);
        echo "</span>
        </div>
        <div class=\"checkout-cart__action_btn\">
          <a href=\"";
        // line 103
        echo ($context["checkout"] ?? null);
        echo "\" class=\"button\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a>
        </div>
      </div>
    </div>

  </div>
</div>
";
        // line 110
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "fish/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 110,  266 => 103,  260 => 100,  256 => 98,  250 => 95,  246 => 93,  244 => 92,  239 => 90,  230 => 83,  216 => 77,  205 => 71,  199 => 68,  189 => 63,  183 => 59,  180 => 58,  169 => 56,  164 => 55,  162 => 54,  156 => 53,  152 => 51,  142 => 48,  137 => 47,  135 => 46,  131 => 44,  127 => 43,  115 => 34,  112 => 33,  104 => 29,  101 => 28,  93 => 24,  90 => 23,  82 => 19,  80 => 18,  72 => 12,  61 => 10,  57 => 9,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/checkout/cart.twig", "");
    }
}
