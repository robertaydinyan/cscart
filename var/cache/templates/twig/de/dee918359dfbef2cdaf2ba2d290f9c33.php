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

/* __string_template__8e2f6e9dda6b33a1ac363f580d1d3fea */
class __TwigTemplate_fed5448cf23aede3fabee334e065a225 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header");
        echo "
";
        // line 2
        if (($context["new_account"] ?? null)) {
            // line 3
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.vendor_plan_has_been_set_text", ["[vendor]" => ($context["vendor_name"] ?? null), "[old_plan]" => twig_get_attribute($this->env, $this->source, ($context["old_plan"] ?? null), "plan", [], "any", false, false, false, 3), "[new_plan]" => twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "plan", [], "any", false, false, false, 3)]);
            echo "
";
        } else {
            // line 5
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.vendor_plan_has_been_changed_text", ["[vendor]" => ($context["vendor_name"] ?? null), "[old_plan]" => twig_get_attribute($this->env, $this->source, ($context["old_plan"] ?? null), "plan", [], "any", false, false, false, 5), "[new_plan]" => twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "plan", [], "any", false, false, false, 5)]);
            echo "
<br /><br />
";
            // line 7
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.old_plan");
            echo ":
<br /><br />
";
            // line 9
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "vendorplans.plandetails", ["plan" => ($context["old_plan"] ?? null)]);
            echo "
";
        }
        // line 11
        echo "<br /><br />
";
        // line 12
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.new_plan");
        echo ":
<br /><br />
";
        // line 14
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "vendorplans.plandetails");
        echo "
";
        // line 15
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__8e2f6e9dda6b33a1ac363f580d1d3fea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  71 => 14,  66 => 12,  63 => 11,  58 => 9,  53 => 7,  48 => 5,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8e2f6e9dda6b33a1ac363f580d1d3fea", "");
    }
}
