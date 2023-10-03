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

/* fish/template/information/delivery.twig */
class __TwigTemplate_e15c8ff2222b6b6f09c17e6c9d7abd3a817ec58996168a25aad4a0cd06d4de7c extends \Twig\Template
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


<div class=\"page-delivery information-page\">

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


    <div class=\"container\">
        <div class=\"page-delivery__content\">
            <div class=\"page-delivery__content_side\">
                <p>Таким образом, перспективное планирование требует анализа позиций, занимаемых участниками в отношении поставленных задач. Равным образом, курс на социально-ориентированный национальный проект не даёт нам иного выбора, кроме определения дальнейших направлений развития. Сложно сказать, почему элементы политического процесса описаны максимально подробно. </p>
                <p>Равным образом, граница обучения кадров представляет собой интересный эксперимент проверки своевременного выполнения сверхзадачи. Равным образом, начало повседневной работы по формированию позиции не даёт нам иного выбора, кроме определения экономической целесообразности принимаемых решений.</p>
            </div>
            <div class=\"page-delivery__content_side\">
                <p>Следуя традиции классической гомеопатии, показания к назначению гомеопатических монопрепаратов составляются на основе испытаний этих лекарственных средств на здоровых добровольцах с фиксированием всех симптомов.</p>
            </div>
        </div>
    </div>


</div>

";
        // line 33
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "fish/template/information/delivery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  67 => 13,  56 => 11,  52 => 10,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/information/delivery.twig", "");
    }
}
