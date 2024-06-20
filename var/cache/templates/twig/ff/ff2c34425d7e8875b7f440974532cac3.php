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

/* __string_template__9d47b43d6e1040498c654c003490b266 */
class __TwigTemplate_fe9b1c5f2c88b0213991eeaba58ca4bd extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "new_profile_notification")]);
        echo "
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "firstname", [], "any", false, false, false, 2)) {
            echo " ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello_name", ["[name]" => twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "firstname", [], "any", false, false, false, 2)]);
            echo " ";
        } else {
            echo " ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
            echo ", ";
        }
        // line 3
        echo "    <br>
    <br>
    ";
        // line 5
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "create_profile_notification_header");
        echo "
    <br>
    <br>
    <table border=\"0\" class=\"info\">
      <tr>
        <td align=\"right\"><b>";
        // line 10
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "login_url");
        echo ":</b></td>
        <td><a href=\"";
        // line 11
        echo ($context["login_url"] ?? null);
        echo "\">";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["login_url"] ?? null));
        echo "</a></td>
      </tr>
      <tr>
        <td align=\"right\"><b>";
        // line 14
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "email");
        echo ":</b></td>
        <td><a>";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "email", [], "any", false, false, false, 15);
        echo "</a></td>
      </tr>
      <tr>
        <td align=\"right\"><b>";
        // line 18
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "password");
        echo ":</b></td>
        <td>
";
        // line 20
        if (($context["password"] ?? null)) {
            // line 21
            echo "    ";
            echo ($context["password"] ?? null);
            echo "
";
        } else {
            // line 23
            echo "    *********** (<a href=\"";
            echo ($context["forgot_pass_url"] ?? null);
            echo "\">";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "forgot_password_question");
            echo "</a>)
";
        }
        // line 24
        echo "</td>
      </tr>
    </table>
  ";
        // line 27
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__9d47b43d6e1040498c654c003490b266";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 27,  106 => 24,  98 => 23,  92 => 21,  90 => 20,  85 => 18,  79 => 15,  75 => 14,  67 => 11,  63 => 10,  55 => 5,  51 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9d47b43d6e1040498c654c003490b266", "");
    }
}
