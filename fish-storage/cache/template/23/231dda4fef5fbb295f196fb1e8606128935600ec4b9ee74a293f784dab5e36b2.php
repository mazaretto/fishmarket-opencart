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

/* fish/template/common/header.twig */
class __TwigTemplate_1bda29fe42eca1b784c1e062a2f5badd54c2ff23285b49d96b3d0b4c58092508 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
  ";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
  ";
        }
        // line 17
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
  ";
        }
        // line 20
        echo "  <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
  <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
  <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
  <link href=\"catalog/view/theme/fish/stylesheet/stylesheet.css\" rel=\"stylesheet\">
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 25
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 25);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 25);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 25);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 28
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 32
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 32);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 32);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 35
            echo "    ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</head>
<body class=\"";
        // line 38
        echo ($context["is_home"] ?? null);
        echo "\">

<div class=\"overlay\"></div>



<nav class=\"mmenu\">
  <div class=\"mmenu__top\">
    <span class=\"mmenu__title\">Меню</span>
      <div class=\"mmenu__close\">
        <svg width=\"10\" height=\"10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M6.277 4.75l2.817-2.79.574-.573c.082-.082.082-.219 0-.328L9.066.457c-.11-.082-.246-.082-.328 0l-3.363 3.39-3.39-3.39c-.083-.082-.22-.082-.329 0l-.601.602c-.082.109-.082.246 0 .328l3.39 3.363-3.39 3.39c-.082.083-.082.22 0 .329l.601.601c.11.082.246.082.328 0l3.39-3.39 2.79 2.816.574.574c.082.082.219.082.328 0l.602-.601c.082-.11.082-.246 0-.328L6.278 4.75z\" fill=\"#113380\"/></svg>
      </div>
  </div>
  <ul class=\"mmenu__list\">
    <li class=\"mmenu__item\">
      <a class=\"mmenu__link\" href=\"";
        // line 53
        echo ($context["base"] ?? null);
        echo "\">Главная</a>
    </li>
    <li class=\"mmenu__item\">
      <a class=\"mmenu__link\" href=\"";
        // line 56
        echo ($context["base"] ?? null);
        echo "categories\">Продукция</a>
    </li>
    <li class=\"mmenu__item\">
      <a class=\"mmenu__link\" href=\"";
        // line 59
        echo ($context["base"] ?? null);
        echo "about\">О компании</a>
    </li>
    <li class=\"mmenu__item\">
      <a class=\"mmenu__link\" href=\"";
        // line 62
        echo ($context["base"] ?? null);
        echo "dostavkaoplata\">Доставка/Оплата</a>
    </li>
    <li class=\"mmenu__item\">
      <a class=\"mmenu__link\" href=\"";
        // line 65
        echo ($context["base"] ?? null);
        echo "contact\">Контакты</a>
    </li>
  </ul>
</nav>

<nav class=\"top-line\">
  <div class=\"container top-line__container\">
    <div class=\"top-line__logo\">
      ";
        // line 73
        if (($context["logo"] ?? null)) {
            // line 74
            echo "        <a href=\"/\" class=\"top-line__logo_link\">
          <img src=\"";
            // line 75
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" />
        </a>
      ";
        }
        // line 78
        echo "    </div>
    <nav class=\"top-line__menu flex-center\">
      <ul class=\"top-line__menu_list\">
        <li class=\"top-line__menu_item\">
          <a class=\"top-line__menu_link\" href=\"/\">Главная</a>
        </li>
        <li class=\"top-line__menu_item\">
          <a class=\"top-line__menu_link\" href=\"";
        // line 85
        echo ($context["base"] ?? null);
        echo "categories\">Продукция</a>
        </li>
        <li class=\"top-line__menu_item\">
          <a class=\"top-line__menu_link\" href=\"";
        // line 88
        echo ($context["base"] ?? null);
        echo "about\">О компании</a>
        </li>
        <li class=\"top-line__menu_item\">
          <a class=\"top-line__menu_link\" href=\"";
        // line 91
        echo ($context["base"] ?? null);
        echo "dostavkaoplata\">Доставка/Оплата</a>
        </li>
        <li class=\"top-line__menu_item\">
          <a class=\"top-line__menu_link\" href=\"";
        // line 94
        echo ($context["base"] ?? null);
        echo "contact\">Контакты</a>
        </li>
      </ul>
    </nav>
    <a href=\"tel:8 (800) 600 44-55\" class=\"top-line__phone flex-center\">8 (800) 600 44-55</a>
    <div class=\"top-line__action flex-center\">
      <a href=\"";
        // line 100
        echo ($context["search_link"] ?? null);
        echo "\" class=\"top-line__action_item top-line_search flex-center\">
        <svg width=\"16\" height=\"17\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.875 14.656l-3.781-3.781c-.094-.063-.188-.125-.281-.125h-.407A6.543 6.543 0 0013 6.5C13 2.937 10.062 0 6.5 0 2.906 0 0 2.938 0 6.5 0 10.094 2.906 13 6.5 13a6.58 6.58 0 004.25-1.563v.407a.5.5 0 00.094.281l3.781 3.781c.156.156.406.156.531 0l.719-.719c.156-.124.156-.374 0-.53zM6.5 11.5c-2.781 0-5-2.219-5-5 0-2.75 2.219-5 5-5 2.75 0 5 2.25 5 5 0 2.781-2.25 5-5 5z\" fill=\"#113380\"/></svg>
      </a>
      <a href=\"";
        // line 103
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"top-line__action_item top-line_like flex-center\">
        <svg width=\"17\" height=\"15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M15.313 1.031C13.5-.5 10.718-.28 9 1.5c-1.75-1.781-4.531-2-6.344-.469C.312 3 .656 6.22 2.344 7.938l5.469 5.593c.312.313.718.5 1.187.5a1.63 1.63 0 001.156-.5l5.5-5.594c1.656-1.718 2-4.937-.344-6.906zm-.75 5.844l-5.47 5.594c-.062.062-.124.062-.218 0L3.406 6.875c-1.156-1.156-1.375-3.344.219-4.688 1.219-1.03 3.094-.874 4.281.313L9 3.625 10.094 2.5c1.156-1.188 3.031-1.344 4.25-.344 1.594 1.375 1.375 3.563.219 4.719z\" fill=\"#113380\"/></svg>
      </a>
      <a href=\"";
        // line 106
        echo ($context["account"] ?? null);
        echo "\" class=\"top-line__action_item top-line_account flex-center\">
        <svg width=\"14\" height=\"16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M9.781 9.5C8.875 9.5 8.47 10 7 10c-1.5 0-1.906-.5-2.813-.5C1.876 9.5 0 11.406 0 13.719v.781c0 .844.656 1.5 1.5 1.5h11a1.5 1.5 0 001.5-1.5v-.781C14 11.406 12.094 9.5 9.781 9.5zm2.719 5h-11v-.781C1.5 12.219 2.688 11 4.188 11c.468 0 1.187.5 2.812.5 1.594 0 2.313-.5 2.781-.5a2.72 2.72 0 012.719 2.719v.781zM7 9c2.469 0 4.5-2 4.5-4.5C11.5 2.031 9.469 0 7 0 4.5 0 2.5 2.031 2.5 4.5 2.5 7 4.5 9 7 9zm0-7.5c1.625 0 3 1.375 3 3 0 1.656-1.375 3-3 3a3 3 0 01-3-3c0-1.625 1.344-3 3-3z\" fill=\"#113380\"/></svg>
      </a>
    </div>
    ";
        // line 110
        echo ($context["cart"] ?? null);
        echo "
    <a href=\"#\" class=\"top-line__mmenu flex-center\">
      <svg width=\"14\" height=\"12\" viewBox=\"0 0 14 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M13.625 1.875C13.8125 1.875 14 1.71875 14 1.5V0.5C14 0.3125 13.8125 0.125 13.625 0.125H0.375C0.15625 0.125 0 0.3125 0 0.5V1.5C0 1.71875 0.15625 1.875 0.375 1.875H13.625ZM13.625 6.875C13.8125 6.875 14 6.71875 14 6.5V5.5C14 5.3125 13.8125 5.125 13.625 5.125H0.375C0.15625 5.125 0 5.3125 0 5.5V6.5C0 6.71875 0.15625 6.875 0.375 6.875H13.625ZM13.625 11.875C13.8125 11.875 14 11.7188 14 11.5V10.5C14 10.3125 13.8125 10.125 13.625 10.125H0.375C0.15625 10.125 0 10.3125 0 10.5V11.5C0 11.7188 0.15625 11.875 0.375 11.875H13.625Z\" fill=\"#113380\"/></svg>
      <span class=\"top-line__mmenu_text\">Меню</span>
    </a>
  </div>
</nav>

<div class=\"page-wrapper\">";
    }

    public function getTemplateName()
    {
        return "fish/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 110,  278 => 106,  272 => 103,  266 => 100,  257 => 94,  251 => 91,  245 => 88,  239 => 85,  230 => 78,  220 => 75,  217 => 74,  215 => 73,  204 => 65,  198 => 62,  192 => 59,  186 => 56,  180 => 53,  162 => 38,  159 => 37,  150 => 35,  145 => 34,  134 => 32,  130 => 31,  127 => 30,  118 => 28,  113 => 27,  100 => 25,  96 => 24,  90 => 20,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/common/header.twig", "");
    }
}
