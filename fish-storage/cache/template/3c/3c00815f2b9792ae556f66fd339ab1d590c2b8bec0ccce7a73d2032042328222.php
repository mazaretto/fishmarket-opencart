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

/* fish/template/common/cart.twig */
class __TwigTemplate_0a5099b76a740b5b5616c5da235e376e118a87dd0fdb6d5b192ac8ed8771ff40 extends \Twig\Template
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
        echo "<a href=\"";
        echo ($context["cart"] ?? null);
        echo "\" class=\"top-line__cart flex-center mini-cart\">
  <span class=\"top-line__cart_inner\">
    <svg width=\"14\" height=\"16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g clip-path=\"url(#clip0)\" fill=\"#2F3E78\"><path d=\"M7.096 16.027c-2.423 0-4.607-1.28-6.132-3.605C.38 11.528.08 10.47.08 9.352V3.424h14.045v5.93a5.617 5.617 0 01-.883 3.054c-1.54 2.34-3.724 3.62-6.147 3.62zM1.502 4.84v4.499c0 .834.224 1.639.658 2.28.898 1.355 2.468 2.98 4.95 2.98 2.484 0 4.054-1.625 4.952-2.98.433-.656.658-1.446.658-2.28v-4.5H1.502z\"/><path d=\"M11.284 4.839H2.878l.03-.745C2.968 2.678 3.91-.004 7.051-.004c3.126 0 4.113 2.667 4.188 4.083l.045.76zm-6.82-1.416h5.22c-.24-.82-.883-1.996-2.633-1.996-1.735 0-2.363 1.177-2.588 1.996z\"/></g><defs><clipPath id=\"clip0\"><path fill=\"#fff\" d=\"M0 0h14v16H0z\"/></clipPath></defs></svg>
    <span class=\"top-line__cart_count\">";
        // line 4
        echo ($context["text_items_count"] ?? null);
        echo "</span>
  </span>
</a>
";
    }

    public function getTemplateName()
    {
        return "fish/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fish/template/common/cart.twig", "");
    }
}
