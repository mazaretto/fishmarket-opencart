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

/* fish/template/account/login.twig */
class __TwigTemplate_3e76b4d244b8670e5ebb48b741bb3f1094ed2dcc5608ef746ceeb01aad93c1ed extends \Twig\Template
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
<div id=\"account-login\" class=\"account-login\">

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

  <span class=\"breadcrumb\"></span>
  ";
        // line 16
        if (($context["success"] ?? null)) {
            // line 17
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 19
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 22
        echo "
  <div id=\"content\" class=\"container account-login__container\">
      <div class=\"authForm\">
        <h2 class=\"authForm__title\">Авторизация</h2>
        <p class=\"authForm__desc\">";
        // line 26
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</p>
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"form-group\">
            <input type=\"text\" name=\"email\" value=\"";
        // line 29
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control input\" />
          </div>
          <div class=\"form-group\">
            <input type=\"password\" name=\"password\" value=\"";
        // line 32
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control input\" />
            <a href=\"";
        // line 33
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
          </div>
          <br>
          <input type=\"submit\" value=\"";
        // line 36
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn button\" />
          <a href=\"";
        // line 37
        echo ($context["register"] ?? null);
        echo "\" class=\"link authForm__register\">Регистрация</a>
          ";
        // line 38
        if (($context["redirect"] ?? null)) {
            // line 39
            echo "            <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
          ";
        }
        // line 41
        echo "        </form>
      </div>
  </div>

</div>
";
        // line 46
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "fish/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 46,  148 => 41,  142 => 39,  140 => 38,  136 => 37,  132 => 36,  124 => 33,  118 => 32,  110 => 29,  105 => 27,  101 => 26,  95 => 22,  89 => 20,  86 => 19,  80 => 17,  78 => 16,  71 => 11,  60 => 9,  56 => 8,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/account/login.twig", "");
    }
}
