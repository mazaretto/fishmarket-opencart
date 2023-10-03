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

/* fish/template/account/wishlist.twig */
class __TwigTemplate_215d55b3ebe8da96ad04fe21e89aadfc641307376b49e27b47c6fb9831f40a49 extends \Twig\Template
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
<div id=\"account-wishlist\" class=\"account-wishlist\">

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

  <div id=\"content\" class=\"container account-wishlist__container\">

    <div class=\"account-wishlist__products\">

      ";
        // line 19
        if (($context["products"] ?? null)) {
            // line 20
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 21
                echo "          <div class=\"product-layout product-item\">
            <div class=\"product-item__top\">
              <a class=\"product-item__top_like\" href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 23);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\">
                <svg width=\"22\" height=\"21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M17.13 8.14s-.482 5.612-.761 7.976c-.133 1.13-.875 1.79-2.09 1.812a191.14 191.14 0 01-6.94-.004c-1.169-.023-1.898-.693-2.029-1.802-.28-2.385-.76-7.983-.76-7.983m13.805-2.69H3.325m12.134 0c-.696 0-1.295-.462-1.432-1.103l-.215-1.014c-.133-.467-.583-.79-1.096-.79H8.963c-.514 0-.964.323-1.097.79l-.215 1.014c-.137.64-.736 1.103-1.432 1.103\" stroke=\"#E36363\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
              </a>
            </div>
            <div class=\"product-item__thumb\">
              <a href=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 28);
                echo "\" class=\"product-item__thumb_link\">
                <img src=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 29);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                echo "\" class=\"img-responsive\" />
              </a>
            </div>
            <div class=\"product-item__content\">
              <h4 class=\"product-item__title\"><a href=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 33);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                echo "</a></h4>
            </div>
            <div class=\"product-item__button\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 36);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"button\">Добавить в корзину</button>
            </div>
            <span class=\"product-item__price\">
              ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "                <p class=\"price\">
                  ";
                    // line 41
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 41)) {
                        // line 42
                        echo "                    <span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 42);
                        echo "</span>
                  ";
                    } else {
                        // line 44
                        echo "                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 44);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44);
                        echo "</span>
                  ";
                    }
                    // line 46
                    echo "                </p>
              ";
                }
                // line 48
                echo "            </span>

          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "      ";
        } else {
            // line 53
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 55
        echo "    </div>

  </div>
</div>
";
        // line 59
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "fish/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 59,  176 => 55,  170 => 53,  167 => 52,  158 => 48,  154 => 46,  146 => 44,  140 => 42,  138 => 41,  135 => 40,  133 => 39,  125 => 36,  117 => 33,  106 => 29,  102 => 28,  92 => 23,  88 => 21,  83 => 20,  81 => 19,  71 => 11,  60 => 9,  56 => 8,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/account/wishlist.twig", "");
    }
}
