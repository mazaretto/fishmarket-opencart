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

/* fish/template/extension/module/recently_viewed.twig */
class __TwigTemplate_b1167b582f32156a3a3e83d092e9b77a4949de448864954ce7c8acde1f8a51b3 extends \Twig\Template
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
        echo "
<div class=\"revently-view\">
\t<div class=\"container\">
\t\t<div class=\"revently-view__title_inner\">
\t\t\t<h3 class=\"revently-view__title\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t</div>
\t\t<div class=\"revently-view__slider_inner\">
\t\t\t<div class=\"revently-view__slider swiper-container\">
\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "\t\t\t\t\t\t<div class=\"product-layout revently-view__product swiper-slide\">
\t\t\t\t\t\t\t<div class=\"revently-view__product_top\">
\t\t\t\t\t\t\t\t<button class=\"hits__product_like\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 13
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 13);
            echo "');\">
\t\t\t\t\t\t\t\t\t<svg width=\"17\" height=\"15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.313 1.031C13.5-.5 10.718-.28 9 1.5c-1.75-1.781-4.531-2-6.344-.469C.312 3 .656 6.22 2.344 7.938l5.469 5.593c.312.313.718.5 1.187.5a1.63 1.63 0 001.156-.5l5.5-5.594c1.656-1.718 2-4.937-.344-6.906zm-.75 5.844l-5.47 5.594c-.062.062-.124.062-.218 0L3.406 6.875c-1.156-1.156-1.375-3.344.219-4.688 1.219-1.03 3.094-.874 4.281.313L9 3.625 10.094 2.5c1.156-1.188 3.031-1.344 4.25-.344 1.594 1.375 1.375 3.563.219 4.719z\" fill=\"#E64B37\"/></svg>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"revently-view__product_img-inner\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
            echo "\" class=\"revently-view__product_img\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
            echo "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"revently-view__product_content\">
\t\t\t\t\t\t\t\t<h4 class=\"revently-view__product_title\"><a href=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
            echo "</a></h4>
\t\t\t\t\t\t\t\t<div class=\"revently-view__product_price-wrap\">
\t\t\t\t\t\t\t\t\t<span class=\"revently-view__product_option\">50шт / 5кг</span>
\t\t\t\t\t\t\t\t\t<span class=\"revently-view__product_price\">
\t\t\t\t\t\t\t\t\t\t";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27)) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 29
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 35);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t\t\t\t\t\t\t  </p>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"revently-view__product_button\">
\t\t\t\t\t\t\t\t<button class=\"button btn-middle\" type=\"button\" onclick=\"cart.add('";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 43);
            echo "');\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"revently-view__slider_next revently-view__slider_btn\">
\t\t\t\t<svg width=\"14\" height=\"10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M9.25.594l-.625.625a.389.389 0 00.031.531l2.5 2.438H.375A.38.38 0 000 4.563v.875c0 .187.187.375.375.375h10.781l-2.5 2.406a.389.389 0 00-.031.531l.625.625a.423.423 0 00.531 0l4.125-4.125a.423.423 0 000-.531L9.781.594a.423.423 0 00-.531 0z\" fill=\"#222\" fill-opacity=\".6\"/></svg>
\t\t\t</div>
\t\t\t<div class=\"revently-view__slider_prev revently-view__slider_btn\">
\t\t\t\t<svg width=\"14\" height=\"10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M4.75 9.406l.625-.625a.389.389 0 00-.031-.531l-2.5-2.438h10.781A.38.38 0 0014 5.438v-.875a.403.403 0 00-.375-.375H2.844l2.5-2.406a.389.389 0 00.031-.531L4.75.625a.423.423 0 00-.531 0L.094 4.75a.423.423 0 000 .531l4.125 4.125a.423.423 0 00.531 0z\" fill=\"#222\" fill-opacity=\".6\"/></svg>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<script type=\"text/javascript\"><!--
\t\$('.revently-view__slider').swiper({
\t\tslidesPerView: 4,
\t\tspaceBetween: 30,
\t\tnextButton: '.revently-view__slider_next',
\t\tprevButton: '.revently-view__slider_prev',
\t\tbreakpoints: {
\t\t\t800: {
\t\t\t\tslidesPerView: 1,
\t\t\t},
\t\t\t1300: {
\t\t\t\tslidesPerView: 2,
\t\t\t},
\t\t},
\t});
\t--></script>";
    }

    public function getTemplateName()
    {
        return "fish/template/extension/module/recently_viewed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 47,  135 => 43,  129 => 39,  125 => 37,  117 => 35,  114 => 34,  106 => 32,  100 => 30,  98 => 29,  95 => 28,  93 => 27,  84 => 23,  73 => 19,  69 => 18,  59 => 13,  55 => 11,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/extension/module/recently_viewed.twig", "");
    }
}
