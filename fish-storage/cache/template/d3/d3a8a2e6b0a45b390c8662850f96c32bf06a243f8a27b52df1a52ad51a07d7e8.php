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

/* fish/template/information/contact.twig */
class __TwigTemplate_ee408452950bd2b7826a04e9fc0c0b54bacf2c645102a5a3d05826b055fc895c extends \Twig\Template
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


<div class=\"page-contact\">

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


    <section class=\"contact\">
        <div class=\"container contact__container\">
            <div class=\"contact__items\">
                <div class=\"contact__item\">
                    <div class=\"contact__item_icon\">
                        <svg width=\"40\" height=\"40\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><circle cx=\"20\" cy=\"20\" r=\"20\" fill=\"#5386D9\"/><path d=\"M14.548 16.691c.395 4.375 2.731 7.669 7.334 9.259.255-.554.492-1.116.782-1.652.325-.597.606-.711 1.256-.588.958.193 1.915.395 2.872.614.756.176 1.098.58 1.142 1.344.062 1.054.115 2.1.167 3.154.035.764-.158 1.08-.94 1.124-1.133.053-2.292.106-3.408-.044-3.505-.465-6.509-2.011-8.872-4.629-3.11-3.443-4.418-7.484-3.68-12.113.132-.817.369-1.625.65-2.407.263-.755.606-.878 1.361-.65 1.046.316 2.1.633 3.145.958.615.184.984.606.984 1.247 0 1.063-.035 2.135-.097 3.197-.035.589-.474.905-1.29 1.01-.458.062-.923.115-1.406.176z\" fill=\"#fff\"/></svg>
                    </div>
                    <div class=\"contact__item_info\">
                        <span class=\"contact__item_title\">Телефон</span>
                        <a href=\"tel:+7 (922) 431-24-23\" class=\"contact__item_val\">+7 (922) 431-24-23</a>
                    </div>
                </div>
                <div class=\"contact__item\">
                    <div class=\"contact__item_icon\">
                        <svg width=\"40\" height=\"40\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><circle cx=\"20\" cy=\"20\" r=\"20\" fill=\"#5386D9\"/><path d=\"M19.482 20.722c.375.335.68.32 1.065-.025 2.742-2.455 5.488-4.906 8.23-7.362l.28-.261c-.3-.03-.527-.07-.753-.07C25.38 13 22.456 13 19.53 13c-2.623 0-5.241 0-7.864.005-.222 0-.444.044-.725.074.098.094.138.133.182.172 2.781 2.49 5.572 4.98 8.358 7.47z\" fill=\"#fff\"/><path d=\"M21.538 21.88c-.655.578-1.415.755-2.243.474-.31-.104-.602-.3-.858-.508-.43-.34-.824-.725-1.248-1.105-1.938 1.86-3.86 3.709-5.828 5.592h17.253c-1.957-1.888-3.87-3.742-5.803-5.606-.434.4-.849.779-1.273 1.154zM10.02 14.322c-.01.147-.02.236-.02.32 0 3.348 0 6.701.005 10.05 0 .221.05.448.084.734 2.016-1.938 3.984-3.826 5.956-5.725-2.012-1.795-3.999-3.565-6.025-5.38zm19.916.029c-1.988 1.78-3.97 3.55-5.967 5.34 1.968 1.899 3.92 3.792 5.888 5.69.133-.305.202-10.61.079-11.03z\" fill=\"#fff\"/></svg>
                    </div>
                    <div class=\"contact__item_info\">
                        <span class=\"contact__item_title\">Email</span>
                        <a href=\"mailto:manager@rybolov.ru\" class=\"contact__item_val\">manager@rybolov.ru</a>
                    </div>
                </div>
                <div class=\"contact__item\">
                    <div class=\"contact__item_icon\">
                        <svg width=\"40\" height=\"40\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><circle cx=\"20\" cy=\"20\" r=\"20\" fill=\"#5386D9\"/><path d=\"M19.989 10A9.954 9.954 0 0010 19.988c0 5.494 4.295 9.69 9.19 9.99 6.193.399 10.488-4.496 10.787-9.19C30.377 14.495 25.383 10 19.99 10zm-.5 1.099h1v2.197h-1V11.1zm-6.193 9.389H11.1v-.999h2.197v.999zm7.192 8.39h-.999v-2.197h1v2.197zm1.399-3.096c-.2-.6-.5-1.099-.7-1.698-.3-.8-.699-1.598-.998-2.497 0-.1-.1-.2-.2-.2-.9 0-1.598-.899-1.498-1.798.1-.3 0-.4-.2-.6-.7-.299-1.499-.898-2.198-1.498l-.2-.2c.2-.299.4-.499.6-.798.4.3.699.599 1.099.899.499.4.998.799 1.398 1.098.1.1.2.1.3 0 .899-.5 1.897 0 2.197.8.2.599.1 1.098-.3 1.598-.1.1-.1.2 0 .3.5 1.298 1.1 2.696 1.599 3.995 0 .1 0 .1.1.2-.4.2-.7.299-1 .399zm6.992-5.294H26.68v-.999h2.198v.999z\" fill=\"#fff\"/><path d=\"M19.989 19.49c-.3 0-.5.199-.5.498 0 .3.2.6.5.6s.6-.2.6-.6c0-.3-.3-.499-.6-.499z\" fill=\"#fff\"/></svg>
                    </div>
                    <div class=\"contact__item_info\">
                        <span class=\"contact__item_title\">Режим работы</span>
                        <span class=\"contact__item_val\">пн-пт 9:00-17:00</span>
                    </div>
                </div>
            </div>
            <div class=\"contact__map\">
                <script type=\"text/javascript\" charset=\"utf-8\" async src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A359419f9f84f3f7829c766ae42269558e881de1d227afb04eaea9e35f01a77d1&amp;lang=ru_RU&amp;scroll=true\"></script>
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


</div>

";
        // line 97
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "fish/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 97,  67 => 13,  56 => 11,  52 => 10,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/information/contact.twig", "");
    }
}
