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

/* fish/template/information/about.twig */
class __TwigTemplate_4ab6139f3485344213e25452ebb4361c300810a31087e21f4feb0d5a737cb875 extends \Twig\Template
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


<div class=\"page-about information-page\">

    <header class=\"pages-header\">
        <div class=\"container\">
            <h1 class=\"pages-header__title\">";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"pages-header__breadcrumbs\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </header>

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

    <section class=\"advantages\">
        <div class=\"container advantages__container\">
            <div class=\"advantages__item\">
                <div class=\"advantages__item_img\">
                    <img src=\"catalog/view/theme/fish/image/dest/advantages/1.svg\" alt=\"\">
                </div>
                <h3 class=\"advantages__item_title\">Качество</h3>
                <span class=\"advantages__item_desc\">Высокое качество, надежность</span>
            </div>
            <div class=\"advantages__item\">
                <div class=\"advantages__item_img\">
                    <img src=\"catalog/view/theme/fish/image/dest/advantages/2.svg\" alt=\"\">
                </div>
                <h3 class=\"advantages__item_title\">Производство</h3>
                <span class=\"advantages__item_desc\">Собственное производство</span>
            </div>
            <div class=\"advantages__item\">
                <div class=\"advantages__item_img\">
                    <img src=\"catalog/view/theme/fish/image/dest/advantages/3.svg\" alt=\"\">
                </div>
                <h3 class=\"advantages__item_title\">Продукция</h3>
                <span class=\"advantages__item_desc\">Большие объемы, стабильное наличие</span>
            </div>
            <div class=\"advantages__item\">
                <div class=\"advantages__item_img\">
                    <img src=\"catalog/view/theme/fish/image/dest/advantages/1.svg\" alt=\"\">
                </div>
                <h3 class=\"advantages__item_title\">Широкий ассортимент</h3>
                <span class=\"advantages__item_desc\">Высокое качество, надежность</span>
            </div>
        </div>
    </section>

    <section class=\"destributers\">
        <div class=\"container\">
            <h2 class=\"destributers__title\">Широкая дистрибьюторская сеть</h2>
            <p class=\"destributers__desc\">Осуществляем поставки по всей России, а также в ближайшее зарубежье. Доставка до терминала транспортной компании в пределах Москвы осуществляется бесплатно</p>
        </div>
        <div class=\"destributers__map\" style=\"background-image: url('catalog/view/theme/fish/image/dest/map.jpg')\"></div>
    </section>

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

</div>

";
        // line 132
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "fish/template/information/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 132,  67 => 13,  56 => 11,  52 => 10,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/information/about.twig", "");
    }
}
