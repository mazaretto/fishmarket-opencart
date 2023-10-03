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

/* fish/template/common/footer.twig */
class __TwigTemplate_5c0c50b1ed3b832e5ed3305032b31e9e9de44f0908543f24966477dbfe19370f extends \Twig\Template
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
<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"newsletter\">
      <h3 class=\"newsletter__title\">Получите специальное предложение!</h3>
      <p class=\"newsletter__desc\">Оставьте свой электронный адрес и регулярно получайте уведомления об акциях</p>
      <form class=\"newsletter__form\">
        <div class=\"form-group\">
          <input type=\"email\" name=\"email\" class=\"newsletter__form_input\" placeholder=\"Ваш e-mail\">
          <button class=\"button\">Подписаться</button>
        </div>
      </form>
    </div>
  </div>
  <div class=\"footer__content\">
    <div class=\"container footer__container\">
      <div class=\"footer__logo footer__col\">
        ";
        // line 18
        if (($context["logo"] ?? null)) {
            // line 19
            echo "          <a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"footer__logo_link\">
            <img src=\"";
            // line 20
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" />
          </a>
        ";
        }
        // line 23
        echo "      </div>
      <div class=\"footer__menu footer__col\">
        <ul>
          <li><a href=\"";
        // line 26
        echo ($context["base"] ?? null);
        echo "about\">О компании</a></li>
          <li><a href=\"";
        // line 27
        echo ($context["base"] ?? null);
        echo "dostavkaoplata\">Доставка/Оплата</a></li>
          <li><a href=\"";
        // line 28
        echo ($context["base"] ?? null);
        echo "categories\">Продукция</a></li>
        </ul>
        <ul>
          ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 32
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 32);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 32);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </ul>
        <ul>
          <li><a href=\"";
        // line 36
        echo ($context["base"] ?? null);
        echo "contact\">Контакты</a></li>
          <li><a href=\"#\">Прайс лист</a></li>
        </ul>
      </div>
      <div class=\"footer__contact footer__col\">
        <a href=\"tel:8 (800) 60 55 77\" class=\"footer__contact_phone\">8 (800) 60 55 77</a>
        <span class=\"footer__contact_address\">2464 Royal Ln. Mesa, New Jersey 45463</span>
      </div>
      <div class=\"footer__social\">
        <span class=\"footer__social_title\">Подписывайтесь на нас</span>
        <div class=\"footer__social_items\">
          <a href=\"#\" class=\"footer__social_item\">
            <svg width=\"23\" height=\"14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M22.395 1.66s-.156-.446-1.127-.323l-3.214.022c-.246-.033-.424.067-.424.067s-.19.1-.28.346c-.524 1.35-1.194 2.511-1.194 2.511-1.428 2.434-2.009 2.567-2.243 2.411-.547-.346-.402-1.406-.402-2.165 0-2.366.357-3.348-.703-3.605-.346-.078-.603-.134-1.507-.145-1.15-.011-2.12 0-2.667.268-.368.178-.647.58-.48.603.212.033.692.133.949.48 0 0 .279.457.323 1.462.123 2.779-.446 3.125-.446 3.125-.435.234-1.194-.157-2.31-2.456 0 0-.648-1.138-1.15-2.388a.82.82 0 00-.268-.357s-.2-.157-.49-.201l-3.059.022c-.469 0-.636.212-.636.212s-.167.179-.011.547c2.388 5.614 5.111 8.426 5.111 8.426s2.49 2.6 5.313 2.422h1.283c.391-.033.592-.245.592-.245s.178-.201.167-.57c-.022-1.718.782-1.975.782-1.975.78-.246 1.785 1.663 2.857 2.4 0 0 .814.558 1.428.435l2.857-.045c1.507-.011.793-1.261.793-1.261-.056-.1-.413-.87-2.132-2.466-1.786-1.663-1.551-1.396.614-4.275 1.317-1.752 1.841-2.824 1.674-3.281z\" fill=\"#2987DD\"/></svg>
          </a>
          <a href=\"#\" class=\"footer__social_item\">
            <svg width=\"18\" height=\"18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M11.429 8.857a2.863 2.863 0 01-2.858 2.857 2.863 2.863 0 01-2.857-2.857A2.863 2.863 0 018.571 6a2.863 2.863 0 012.858 2.857zm1.54 0A4.392 4.392 0 008.57 4.46a4.392 4.392 0 00-4.397 4.397 4.392 4.392 0 004.397 4.398 4.392 4.392 0 004.398-4.398zm1.205-4.576c0-.569-.457-1.027-1.027-1.027-.569 0-1.027.458-1.027 1.027 0 .57.458 1.027 1.027 1.027.57 0 1.027-.458 1.027-1.027zM8.571 1.826c1.25 0 3.929-.1 5.056.346.39.156.681.346.982.647.302.302.491.592.648.982.446 1.128.346 3.806.346 5.056s.1 3.929-.346 5.056a2.74 2.74 0 01-.648.982 2.74 2.74 0 01-.982.647c-1.127.447-3.806.346-5.056.346s-3.928.1-5.055-.346a2.74 2.74 0 01-.983-.647 2.74 2.74 0 01-.647-.982c-.446-1.127-.346-3.806-.346-5.056s-.1-3.928.346-5.056c.156-.39.346-.68.647-.982a2.74 2.74 0 01.983-.647c1.127-.447 3.805-.346 5.055-.346zm8.572 7.031c0-1.183.011-2.355-.056-3.538-.067-1.373-.38-2.59-1.384-3.594S13.483.408 12.11.342C10.926.275 9.754.286 8.571.286c-1.183 0-2.354-.011-3.538.056C3.661.408 2.444.72 1.44 1.725.435 2.73.123 3.946.056 5.32-.011 6.502 0 7.674 0 8.857c0 1.183-.011 2.355.056 3.538.067 1.373.38 2.59 1.384 3.594s2.22 1.317 3.593 1.384c1.184.067 2.355.056 3.538.056 1.183 0 2.355.01 3.538-.056 1.373-.067 2.59-.38 3.594-1.384 1.005-1.005 1.317-2.221 1.384-3.594.067-1.183.056-2.355.056-3.538z\" fill=\"#2987DD\"/></svg>
          </a>
          <a href=\"#\" class=\"footer__social_item\">
            <svg width=\"11\" height=\"21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M3.008 20.5H6.68v-8.945h2.85L10 8H6.68V5.54c0-.548.078-.978.312-1.25.235-.313.742-.47 1.446-.47h1.874V.656A24.675 24.675 0 007.579.5c-1.406 0-2.5.43-3.32 1.25-.86.82-1.25 1.953-1.25 3.438V8H0v3.555h3.008V20.5z\" fill=\"#2987DD\"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>


</div> <!-- page-wrapper -->




";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 69
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 69);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 69);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 69);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 72
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "<script src=\"catalog/view/theme/fish/js/app.min.js\" type=\"text/javascript\"></script>


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "fish/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 74,  167 => 72,  163 => 71,  150 => 69,  146 => 68,  111 => 36,  107 => 34,  96 => 32,  92 => 31,  86 => 28,  82 => 27,  78 => 26,  73 => 23,  63 => 20,  58 => 19,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/common/footer.twig", "");
    }
}
