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

/* fish/template/extension/module/featured.twig */
class __TwigTemplate_d15b8fef7a762d2356d7155960b24e4ee32451dcaf6b0a201831600f47732eb6 extends \Twig\Template
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
        echo "<section class=\"hits\">
    <span class=\"hits__grid\"></span>
    <div class=\"container\">
        <div class=\"hits__title_inner\">
            <h2 class=\"hits__title\">Хиты продаж</h2>
        </div>
        <div class=\"hits__slider_inner\">
            <div class=\"hits__slider swiper-container\">
                <div class=\"swiper-wrapper\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "                        <div class=\"product-layout hits__product swiper-slide\">
                            <div class=\"hits__product_top\">
                                <button class=\"hits__product_like\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 13
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 13);
            echo "');\">
                                    <svg width=\"17\" height=\"15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.313 1.031C13.5-.5 10.718-.28 9 1.5c-1.75-1.781-4.531-2-6.344-.469C.312 3 .656 6.22 2.344 7.938l5.469 5.593c.312.313.718.5 1.187.5a1.63 1.63 0 001.156-.5l5.5-5.594c1.656-1.718 2-4.937-.344-6.906zm-.75 5.844l-5.47 5.594c-.062.062-.124.062-.218 0L3.406 6.875c-1.156-1.156-1.375-3.344.219-4.688 1.219-1.03 3.094-.874 4.281.313L9 3.625 10.094 2.5c1.156-1.188 3.031-1.344 4.25-.344 1.594 1.375 1.375 3.563.219 4.719z\" fill=\"#E64B37\"/></svg>
                                </button>
                            </div>
                            <div class=\"hits__product_img-inner\">
                                <a href=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
            echo "\" class=\"hits__product_img\">
                                    <img src=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
            echo "\" />
                                </a>
                            </div>
                            <div class=\"hits__product_content\">
                                <h4 class=\"hits__product_title\"><a href=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
            echo "</a></h4>
                                <div class=\"hits__product_price-wrap\">
                                    <span class=\"hits__product_option\">50шт / 5кг</span>
                                    <span class=\"hits__product_price\">
                                    ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27)) {
                // line 28
                echo "                                      <p class=\"price\">
                                        ";
                // line 29
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                                          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                    echo "
                                        ";
                } else {
                    // line 32
                    echo "                                          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32);
                    echo "</span>
                                        ";
                }
                // line 34
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "                                          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 35);
                    echo "</span>
                                        ";
                }
                // line 37
                echo "                                      </p>
                                    ";
            }
            // line 39
            echo "                                    </span>
                                </div>
                            </div>
                            <div class=\"hits__product_button\">
                                <button class=\"button btn-middle\" type=\"button\" onclick=\"cart.add('";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 43);
            echo "');\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </div>
            </div>
            <div class=\"hits__slider_next hits__slider_btn\">
                <svg width=\"14\" height=\"10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M9.25.594l-.625.625a.389.389 0 00.031.531l2.5 2.438H.375A.38.38 0 000 4.563v.875c0 .187.187.375.375.375h10.781l-2.5 2.406a.389.389 0 00-.031.531l.625.625a.423.423 0 00.531 0l4.125-4.125a.423.423 0 000-.531L9.781.594a.423.423 0 00-.531 0z\" fill=\"#222\" fill-opacity=\".6\"/></svg>
            </div>
            <div class=\"hits__slider_prev hits__slider_btn\">
                <svg width=\"14\" height=\"10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M4.75 9.406l.625-.625a.389.389 0 00-.031-.531l-2.5-2.438h10.781A.38.38 0 0014 5.438v-.875a.403.403 0 00-.375-.375H2.844l2.5-2.406a.389.389 0 00.031-.531L4.75.625a.423.423 0 00-.531 0L.094 4.75a.423.423 0 000 .531l4.125 4.125a.423.423 0 00.531 0z\" fill=\"#222\" fill-opacity=\".6\"/></svg>
            </div>
        </div>
    </div>
</section>

<script type=\"text/javascript\"><!--
    \$('.hits__slider').swiper({
        slidesPerView: 3,
        spaceBetween: 30,
        nextButton: '.hits__slider_next',
        prevButton: '.hits__slider_prev',
        breakpoints: {
            800: {
                slidesPerView: 1,
            },
            1300: {
                slidesPerView: 2,
            },
        },
    });
--></script>";
    }

    public function getTemplateName()
    {
        return "fish/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  132 => 43,  126 => 39,  122 => 37,  114 => 35,  111 => 34,  103 => 32,  97 => 30,  95 => 29,  92 => 28,  90 => 27,  81 => 23,  70 => 19,  66 => 18,  56 => 13,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/extension/module/featured.twig", "");
    }
}
