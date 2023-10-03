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

/* fish/template/product/product.twig */
class __TwigTemplate_61c5ee3c00b1dd353124ac9f0845888876e35a9ba721c118ffb254615b52bae0 extends \Twig\Template
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
<div id=\"product-product\" class=\"product-product\">

    <header class=\"pages-header\">
        <div class=\"container\">
            <h1 class=\"pages-header__title\">Продуция</h1>
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

    <div id=\"content\" class=\"container product-product__container\">
\t\t<div class=\"product-product__container_top\">
\t\t\t<h1 class=\"product-product__title-mob\">";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<div class=\"product-product__left\">

\t\t\t\t<div class=\"product-product__gallery\">
\t\t\t\t\t";
        // line 21
        if (($context["images"] ?? null)) {
            // line 22
            echo "\t\t\t\t\t\t<div class=\"product-slider__thumbs\">
\t\t\t\t\t\t\t<div class=\"swiper-container\"> <!-- Слайдер с превью -->
\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 26
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-slider__thumbs_item swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["image"], "mini", [], "any", false, false, false, 27);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-slider__images\">
\t\t\t\t\t\t\t<div class=\"swiper-container\"> <!-- Слайдер с изображениями -->
\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 37
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-slider__images_item swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"product-slider__images_link\" href=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 38);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" data-fancybox=\"gallery\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 39);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-slider__images_pagination swiper-pagination\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t<span class=\"product-product__gallery_nav-btn product-product__gallery_top\">
\t\t\t\t\t\t<svg width=\"7\" height=\"11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M6.805 7.188l-.47-.47a.292.292 0 00-.397.024L4.109 8.617V.531A.285.285 0 003.83.25h-.657c-.14 0-.281.14-.281.281v8.086L1.086 6.742a.292.292 0 00-.399-.023l-.468.468a.317.317 0 000 .399l3.094 3.094a.318.318 0 00.398 0l3.094-3.094a.317.317 0 000-.399z\" fill=\"#113380\"/></svg>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"product-product__gallery_nav-btn product-product__gallery_bottom\">
\t\t\t\t\t\t<svg width=\"7\" height=\"11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M6.805 7.188l-.47-.47a.292.292 0 00-.397.024L4.109 8.617V.531A.285.285 0 003.83.25h-.657c-.14 0-.281.14-.281.281v8.086L1.086 6.742a.292.292 0 00-.399-.023l-.468.468a.317.317 0 000 .399l3.094 3.094a.318.318 0 00.398 0l3.094-3.094a.317.317 0 000-.399z\" fill=\"#113380\"/></svg>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-product__left_links\">
\t\t\t\t\t<a href=\"";
        // line 56
        echo ($context["base"] ?? null);
        echo "dostavkaoplata\" class=\"product-product__left_link\">Информация об условиях доставки и оплаты</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"product\" class=\"product-product__content\">
\t\t\t\t<h1 class=\"product-product__title\">";
        // line 60
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<div class=\"product-product__desc\">
\t\t\t\t\t";
        // line 62
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 64
        if (($context["options"] ?? null)) {
            // line 65
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 66
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 66) == "select")) {
                    // line 67
                    echo "\t\t\t\t\t\t\t<div class=\"product-product__option form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 67)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 68);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 68);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 69
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 70));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 71);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 71);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 72
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 72)) {
                            // line 73
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 73);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 73);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t<div class=\"product-product__price-line\">
\t\t\t\t\t<div class=\"quantity-block\">
\t\t\t\t\t\t<button class=\"quantity-arrow-minus quantity-block__btn\"> - </button>
\t\t\t\t\t\t<input class=\"quantity-block__input\" type=\"text\" name=\"quantity\" value=\"";
        // line 85
        echo ($context["minimum"] ?? null);
        echo "\" id=\"input-quantity\" />
\t\t\t\t\t\t<button class=\"quantity-arrow-plus quantity-block__btn\"> + </button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 88
        if (($context["price"] ?? null)) {
            // line 89
            echo "\t\t\t\t\t\t<div class=\"product-product__price\">
\t\t\t\t\t\t\t";
            // line 90
            if ( !($context["special"] ?? null)) {
                // line 91
                echo "\t\t\t\t\t\t\t\t<span class=\"product-product__price_main\">";
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t";
            } else {
                // line 93
                echo "\t\t\t\t\t\t\t\t<span class=\"product-product__price_main\">";
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"product-product__price_special\">";
                // line 94
                echo ($context["special"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            // line 96
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"product-product__action\">
\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 100
        echo ($context["product_id"] ?? null);
        echo "\" />

\t\t\t\t\t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 102
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"button product-product__btn\">Добавить в корзину</button>
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" class=\"product-product__wishlist\" title=\"";
        // line 103
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">
\t\t\t\t\t\t<svg width=\"17\" height=\"15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.313 1.031C13.5-.5 10.718-.28 9 1.5c-1.75-1.781-4.531-2-6.344-.469C.312 3 .656 6.22 2.344 7.938l5.469 5.593c.312.313.718.5 1.187.5a1.63 1.63 0 001.156-.5l5.5-5.594c1.656-1.718 2-4.937-.344-6.906zm-.75 5.844l-5.47 5.594c-.062.062-.124.062-.218 0L3.406 6.875c-1.156-1.156-1.375-3.344.219-4.688 1.219-1.03 3.094-.874 4.281.313L9 3.625 10.094 2.5c1.156-1.188 3.031-1.344 4.25-.344 1.594 1.375 1.375 3.563.219 4.719z\" fill=\"#E64B37\"/></svg>
\t\t\t\t\t\t<span class=\"product-product__wishlist_text\">Добавить в избранное</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"product-product__container_bottom\">
\t\t\t<div class=\"product-product__tabs\">
\t\t\t\t<div class=\"product-product__tabs_top\">
\t\t\t\t\t<a href=\"#\" class=\"product-product__tabs_title\">О товаре</a>
\t\t\t\t\t<a href=\"#\" class=\"product-product__tabs_title\">Характеристики</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-product__tabs_cont\">

\t\t\t\t\t<div class=\"product-product__tabs_tab\">
\t\t\t\t\t\t<div class=\"product-product__tabs_description\">
\t\t\t\t\t\t\t<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
\t<div class=\"product-product__bottom\">
\t\t";
        // line 129
        echo ($context["content_bottom"] ?? null);
        echo "
\t</div>
</div>





<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\$('.mini-cart').html(`<span class=\"top-line__cart_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"14\" height=\"16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g clip-path=\"url(#clip0)\" fill=\"#2F3E78\"><path d=\"M7.096 16.027c-2.423 0-4.607-1.28-6.132-3.605C.38 11.528.08 10.47.08 9.352V3.424h14.045v5.93a5.617 5.617 0 01-.883 3.054c-1.54 2.34-3.724 3.62-6.147 3.62zM1.502 4.84v4.499c0 .834.224 1.639.658 2.28.898 1.355 2.468 2.98 4.95 2.98 2.484 0 4.054-1.625 4.952-2.98.433-.656.658-1.446.658-2.28v-4.5H1.502z\"/><path d=\"M11.284 4.839H2.878l.03-.745C2.968 2.678 3.91-.004 7.051-.004c3.126 0 4.113 2.667 4.188 4.083l.045.76zm-6.82-1.416h5.22c-.24-.82-.883-1.996-2.633-1.996-1.735 0-2.363 1.177-2.588 1.996z\"/></g><defs><clipPath id=\"clip0\"><path fill=\"#fff\" d=\"M0 0h14v16H0z\"/></clipPath></defs></svg>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"top-line__cart_count\">\${json['text_items_count']}</span>
\t\t\t\t\t\t\t\t\t\t\t  </span>`);
\t\t\t\t}, 100);

\t\t\t\t\$('body').prepend(`
\t\t\t\t\t\t\t\t<div class=\"pp-product-add\">
\t\t\t\t\t\t\t\t  <div class=\"pp-product-add__close\">
\t\t\t\t\t\t\t\t\t<svg width=\"10\" height=\"10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M6.277 4.75l2.817-2.79.574-.573c.082-.082.082-.219 0-.328L9.066.457c-.11-.082-.246-.082-.328 0l-3.363 3.39-3.39-3.39c-.083-.082-.22-.082-.329 0l-.601.602c-.082.109-.082.246 0 .328l3.39 3.363-3.39 3.39c-.082.083-.082.22 0 .329l.601.601c.11.082.246.082.328 0l3.39-3.39 2.79 2.816.574.574c.082.082.219.082.328 0l.602-.601c.082-.11.082-.246 0-.328L6.278 4.75z\" fill=\"#113380\"/></svg>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  \${json['success']}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t`);
\t\t\t\t\$('.overlay').fadeIn();
\t\t\t\t\$('.pp-product-add').fadeIn();
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 223
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 228
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 234
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 301
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 305
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});


\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script>


";
        // line 346
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "fish/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 346,  514 => 305,  507 => 301,  437 => 234,  428 => 228,  420 => 223,  323 => 129,  292 => 103,  288 => 102,  283 => 100,  279 => 98,  275 => 96,  270 => 94,  265 => 93,  259 => 91,  257 => 90,  254 => 89,  252 => 88,  246 => 85,  241 => 82,  238 => 81,  232 => 80,  227 => 77,  220 => 75,  213 => 73,  211 => 72,  204 => 71,  200 => 70,  196 => 69,  190 => 68,  183 => 67,  180 => 66,  175 => 65,  173 => 64,  168 => 62,  163 => 60,  156 => 56,  146 => 48,  139 => 43,  125 => 39,  119 => 38,  116 => 37,  112 => 36,  104 => 30,  91 => 27,  88 => 26,  84 => 25,  79 => 22,  77 => 21,  70 => 17,  62 => 11,  51 => 9,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/product/product.twig", "");
    }
}
