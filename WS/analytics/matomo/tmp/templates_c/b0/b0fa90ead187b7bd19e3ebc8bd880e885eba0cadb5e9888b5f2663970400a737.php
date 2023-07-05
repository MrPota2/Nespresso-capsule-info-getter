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

/* @CoreHome/_shortcuts.twig */
class __TwigTemplate_7a06b608e5dce699a38702903460da3b1889a1673b18896ea11c675f969ad42b extends Template
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
        echo "<div class=\"ui-confirm\" id=\"shortcuthelp\">
    <h2>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ShortcutsAvailable"), "html", null, true);
        echo "</h2>
    <dl></dl>
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_shortcuts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui-confirm\" id=\"shortcuthelp\">
    <h2>{{ 'CoreHome_ShortcutsAvailable'|translate }}</h2>
    <dl></dl>
</div>", "@CoreHome/_shortcuts.twig", "/var/www/html/nes/analytics/matomo/plugins/CoreHome/templates/_shortcuts.twig");
    }
}
