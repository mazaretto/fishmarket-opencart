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

/* fish/template/common/home.twig */
class __TwigTemplate_e21fa455b075abed1232f2a782f4ba8f1570ce0a4a51490187551ab30d9f1862 extends \Twig\Template
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
<div id=\"common-home\">
  ";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
  ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "  ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "  ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "  ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "  ";
        } else {
            // line 9
            echo "  ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "  ";
        }
        // line 11
        echo "  <header class=\"header\">
    <nav class=\"top-line\">
      <div class=\"container top-line__container\">
        <div class=\"top-line__logo\">
          ";
        // line 15
        if (($context["logo"] ?? null)) {
            // line 16
            echo "            <a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"top-line__logo_link\">
              <img src=\"";
            // line 17
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" />
            </a>
          ";
        }
        // line 20
        echo "        </div>
        <nav class=\"top-line__menu flex-center\">
          <ul class=\"top-line__menu_list\">
            <li class=\"top-line__menu_item\">
              <a class=\"top-line__menu_link\" href=\"/\">Главная</a>
            </li>
            <li class=\"top-line__menu_item\">
              <a class=\"top-line__menu_link\" href=\"";
        // line 27
        echo ($context["base"] ?? null);
        echo "categories\">Продукция</a>
            </li>
            <li class=\"top-line__menu_item\">
              <a class=\"top-line__menu_link\" href=\"";
        // line 30
        echo ($context["base"] ?? null);
        echo "about\">О компании</a>
            </li>
            <li class=\"top-line__menu_item\">
              <a class=\"top-line__menu_link\" href=\"";
        // line 33
        echo ($context["base"] ?? null);
        echo "dostavkaoplata\">Доставка/Оплата</a>
            </li>
            <li class=\"top-line__menu_item\">
              <a class=\"top-line__menu_link\" href=\"";
        // line 36
        echo ($context["base"] ?? null);
        echo "contact\">Контакты</a>
            </li>
          </ul>
        </nav>
        <a href=\"tel:8 (800) 600 44-55\" class=\"top-line__phone flex-center\">8 (800) 600 44-55</a>
        <div class=\"top-line__action flex-center\">
          <a href=\"";
        // line 42
        echo ($context["search_link"] ?? null);
        echo "\" class=\"top-line__action_item top-line_search flex-center\">
            <svg width=\"16\" height=\"17\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.875 14.656l-3.781-3.781c-.094-.063-.188-.125-.281-.125h-.407A6.543 6.543 0 0013 6.5C13 2.937 10.062 0 6.5 0 2.906 0 0 2.938 0 6.5 0 10.094 2.906 13 6.5 13a6.58 6.58 0 004.25-1.563v.407a.5.5 0 00.094.281l3.781 3.781c.156.156.406.156.531 0l.719-.719c.156-.124.156-.374 0-.53zM6.5 11.5c-2.781 0-5-2.219-5-5 0-2.75 2.219-5 5-5 2.75 0 5 2.25 5 5 0 2.781-2.25 5-5 5z\" fill=\"#113380\"/></svg>
          </a>
          <a href=\"";
        // line 45
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"top-line__action_item top-line_like flex-center\">
            <svg width=\"17\" height=\"15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.313 1.031C13.5-.5 10.718-.28 9 1.5c-1.75-1.781-4.531-2-6.344-.469C.312 3 .656 6.22 2.344 7.938l5.469 5.593c.312.313.718.5 1.187.5a1.63 1.63 0 001.156-.5l5.5-5.594c1.656-1.718 2-4.937-.344-6.906zm-.75 5.844l-5.47 5.594c-.062.062-.124.062-.218 0L3.406 6.875c-1.156-1.156-1.375-3.344.219-4.688 1.219-1.03 3.094-.874 4.281.313L9 3.625 10.094 2.5c1.156-1.188 3.031-1.344 4.25-.344 1.594 1.375 1.375 3.563.219 4.719z\" fill=\"#113380\"/></svg>
          </a>
          <a href=\"";
        // line 48
        echo ($context["account"] ?? null);
        echo "\" class=\"top-line__action_item top-line_account flex-center\">
            <svg width=\"14\" height=\"16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M9.781 9.5C8.875 9.5 8.47 10 7 10c-1.5 0-1.906-.5-2.813-.5C1.876 9.5 0 11.406 0 13.719v.781c0 .844.656 1.5 1.5 1.5h11a1.5 1.5 0 001.5-1.5v-.781C14 11.406 12.094 9.5 9.781 9.5zm2.719 5h-11v-.781C1.5 12.219 2.688 11 4.188 11c.468 0 1.187.5 2.812.5 1.594 0 2.313-.5 2.781-.5a2.72 2.72 0 012.719 2.719v.781zM7 9c2.469 0 4.5-2 4.5-4.5C11.5 2.031 9.469 0 7 0 4.5 0 2.5 2.031 2.5 4.5 2.5 7 4.5 9 7 9zm0-7.5c1.625 0 3 1.375 3 3 0 1.656-1.375 3-3 3a3 3 0 01-3-3c0-1.625 1.344-3 3-3z\" fill=\"#113380\"/></svg>
          </a>
        </div>
        ";
        // line 52
        echo ($context["cart"] ?? null);
        echo "
        <a href=\"#\" class=\"top-line__mmenu flex-center\">
          <svg width=\"14\" height=\"12\" viewBox=\"0 0 14 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M13.625 1.875C13.8125 1.875 14 1.71875 14 1.5V0.5C14 0.3125 13.8125 0.125 13.625 0.125H0.375C0.15625 0.125 0 0.3125 0 0.5V1.5C0 1.71875 0.15625 1.875 0.375 1.875H13.625ZM13.625 6.875C13.8125 6.875 14 6.71875 14 6.5V5.5C14 5.3125 13.8125 5.125 13.625 5.125H0.375C0.15625 5.125 0 5.3125 0 5.5V6.5C0 6.71875 0.15625 6.875 0.375 6.875H13.625ZM13.625 11.875C13.8125 11.875 14 11.7188 14 11.5V10.5C14 10.3125 13.8125 10.125 13.625 10.125H0.375C0.15625 10.125 0 10.3125 0 10.5V11.5C0 11.7188 0.15625 11.875 0.375 11.875H13.625Z\" fill=\"#113380\"/></svg>
          <span class=\"top-line__mmenu_text\">Меню</span>
        </a>
      </div>
    </nav>
    <div class=\"container\">
      <div class=\"header__content\">
        <h1 class=\"header__title\">Вяленая продукция</h1>
        <p class=\"header__desc\">Производственно торговая компания</p>
        <a href=\"";
        // line 63
        echo ($context["base"] ?? null);
        echo "categories\" class=\"header__button button\">Продукция</a>
      </div>
    </div>
  </header>

  <section class=\"actions\">
    <div class=\"container actions__container\">
      <div class=\"actions__left actions__row\">
        <a href=\"#\" class=\"actions__left_item actions__item\">
          <img src=\"catalog/view/theme/fish/image/dest/actions/1.png\" alt=\"\">
        </a>
        <a href=\"#\" class=\"actions__left_item actions__item\">
          <img src=\"catalog/view/theme/fish/image/dest/actions/2.png\" alt=\"\">
        </a>
      </div>
      <div class=\"actions__center actions__row\">
        <a href=\"#\" class=\"actions__center_item actions__item\">
          <img src=\"catalog/view/theme/fish/image/dest/actions/3.png\" alt=\"\">
        </a>
      </div>
      <div class=\"actions__right actions__row\">
        <a href=\"#\" class=\"actions__right_item actions__item\">
          <img src=\"catalog/view/theme/fish/image/dest/actions/4.png\" alt=\"\">
        </a>
        <a href=\"#\" class=\"actions__right_item actions__item\">
          <img src=\"catalog/view/theme/fish/image/dest/actions/5.png\" alt=\"\">
        </a>
      </div>
    </div>
  </section>

  ";
        // line 94
        echo ($context["content_top"] ?? null);
        echo "

  <div class=\"about\">
    <div class=\"container about__container\">
      <div class=\"about__img\">
        <img src=\"catalog/view/theme/fish/image/dest/about.png\" alt=\"\">
      </div>
      <div class=\"about__content\">
        <h2 class=\"about__title\">О компании</h2>
        <p class=\"about__desc\">Работаем с 2004 года. Владеем двумя цехами суммарной мощностью переработки 250 т. сырья в месяц. Одни из лидеров по качеству вяленой рыбы и вяленого мяса на Российском рынке.</p>
        <div class=\"about__bulits\">
          <div class=\"about__bulit\">
            <span class=\"about__bulit_num\">10</span>
            <p class=\"about__bulit_desc\">лет производим вяленую продукцию</p>
          </div>
          <div class=\"about__bulit\">
            <span class=\"about__bulit_num\">100</span>
            <p class=\"about__bulit_desc\">cвыше сотни сотрудников в компании</p>
          </div>
          <div class=\"about__bulit\">
            <span class=\"about__bulit_num\">250</span>
            <p class=\"about__bulit_desc\">обрабатываем 250 тонн сырья в месяц</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"production\">
    <div class=\"container production__container\">
      <div class=\"production__content\">
        <h2 class=\"production__title\">Производство</h2>
        <p class=\"production__desc\">Имеем две площадки по производству: одна в г. Гаврилов Посаде (Ивановская область), другая в Талдоме (Московская область). Производим различную качественную вяленую продукцию: рыба, мяса, икра. Осуществляем полный цикл производства.</p>
      </div>
      <div class=\"production__img\">
        <img src=\"catalog/view/theme/fish/image/dest/production.png\" alt=\"\">
      </div>
    </div>
  </div>
  <section class=\"partners\">
    <div class=\"container\">
      <div class=\"partners__title_inner\">
        <h2 class=\"partners__title\">Нам доверяют</h2>
      </div>
      <div class=\"partners__content\">
        <div class=\"partners__item\">
          <div class=\"partners__item_img\">
            <img src=\"catalog/view/theme/fish/image/dest/partner-example.png\" alt=\"\">
          </div>
          <span class=\"partners__item_name\">Морячка</span>
        </div>
        <div class=\"partners__item\">
          <div class=\"partners__item_img\">
            <img src=\"catalog/view/theme/fish/image/dest/partner-example.png\" alt=\"\">
          </div>
          <span class=\"partners__item_name\">Морячка</span>
        </div>
        <div class=\"partners__item\">
          <div class=\"partners__item_img\">
            <img src=\"catalog/view/theme/fish/image/dest/partner-example.png\" alt=\"\">
          </div>
          <span class=\"partners__item_name\">Морячка</span>
        </div>
        <div class=\"partners__item\">
          <div class=\"partners__item_img\">
            <img src=\"catalog/view/theme/fish/image/dest/partner-example.png\" alt=\"\">
          </div>
          <span class=\"partners__item_name\">Морячка</span>
        </div>
        <div class=\"partners__item\">
          <div class=\"partners__item_img\">
            <img src=\"catalog/view/theme/fish/image/dest/partner-example.png\" alt=\"\">
          </div>
          <span class=\"partners__item_name\">Морячка</span>
        </div>
        <div class=\"partners__item\">
          <div class=\"partners__item_img\">
            <img src=\"catalog/view/theme/fish/image/dest/partner-example.png\" alt=\"\">
          </div>
          <span class=\"partners__item_name\">Морячка</span>
        </div>
      </div>
    </div>
  </section>
  <section class=\"home-callback\">
    <div class=\"container\">
      <h2 class=\"home-callback__title\">Связаться с нами</h2>
      <form class=\"home-callback__form\">
        <div class=\"home-callback__areas\">
          <div class=\"home-callback__form_col\">
            <div class=\"form-group\">
              <input name=\"name\" type=\"text\" class=\"home-callback__input\" placeholder=\"Ваше имя\">
            </div>
            <div class=\"form-group\">
              <input name=\"phone\" type=\"text\" class=\"home-callback__input\" placeholder=\"Ваш телефон\">
            </div>
            <div class=\"form-group\">
              <input name=\"email\" type=\"text\" class=\"home-callback__input\" placeholder=\"Ваш email\">
            </div>
          </div>
          <div class=\"home-callback__form_col\">
            <div class=\"form-group\">
              <input name=\"company\" type=\"text\" class=\"home-callback__input\" placeholder=\"Организация\">
            </div>
            <div class=\"form-group\">
              <textarea name=\"message\" class=\"home-callback__textarea\" placeholder=\"Ваш комментарий\"></textarea>
            </div>
          </div>
        </div>
        <div class=\"home-callback__action\">
          <label class=\"home-callback__checkbox\">
            <input type=\"checkbox\" name=\"agreerules\">
            <span class=\"home-callback__checkbox_custom\"></span>
            <span class=\"home-callback__checkbox_text\">Я согласен на обработку персональных данных</span>
          </label>
          <br>
          <button class=\"button\">Оставить заявку</button>
        </div>

      </form>
    </div>
  </section>
  <section class=\"destributers\">
    <div class=\"container\">
      <h2 class=\"destributers__title\">Широкая дистрибьюторская сеть</h2>
      <p class=\"destributers__desc\">Осуществляем поставки по всей России, а также в ближайшее зарубежье. Доставка до терминала транспортной компании в пределах Москвы осуществляется бесплатно</p>
    </div>
    <div class=\"destributers__map\" style=\"background-image: url('catalog/view/theme/fish/image/dest/map.jpg')\"></div>
  </section>


  ";
        // line 224
        echo ($context["content_bottom"] ?? null);
        echo "

  ";
        // line 226
        echo ($context["column_right"] ?? null);
        echo "

</div>
";
        // line 229
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "fish/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 229,  330 => 226,  325 => 224,  192 => 94,  158 => 63,  144 => 52,  137 => 48,  131 => 45,  125 => 42,  116 => 36,  110 => 33,  104 => 30,  98 => 27,  89 => 20,  79 => 17,  74 => 16,  72 => 15,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/common/home.twig", "");
    }
}
