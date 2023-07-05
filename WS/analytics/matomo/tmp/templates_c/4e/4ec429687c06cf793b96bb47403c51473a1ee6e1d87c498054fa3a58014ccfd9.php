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

/* @Live/_profileSummaryVisits.twig */
class __TwigTemplate_b63a033b6b985fda5487e80aa7a8069e8a57f75d594696ed86a987d50a8c55a8 extends Template
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
        echo "<div class=\"visitor-profile-summary visitor-profile-important-visits\">";
        // line 2
        $context["keywordNotDefined"] = $this->env->getFilter('translate')->getCallable()("General_NotDefined", $this->env->getFilter('translate')->getCallable()("General_ColumnKeyword"));
        // line 3
        echo "<div>
        <h1>";
        // line 4
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 4, $this->source); })()), "visitsAggregated", [], "any", false, false, false, 4), 100))) {
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Visit"), "html", null, true);
            echo "# 100";
        } else {
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_FirstVisit"), "html", null, true);
        }
        echo "</h1>
        <div>
            <p><strong>";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 6, $this->source); })()), "firstVisit", [], "any", false, false, false, 6), "prettyDate", [], "any", false, false, false, 6), "html", null, true);
        echo "</strong>&nbsp;- ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_DaysAgo", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 6, $this->source); })()), "firstVisit", [], "any", false, false, false, 6), "daysAgo", [], "any", false, false, false, 6)), "html", null, true);
        echo "</p>
            <p>
                ";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_FromReferrer"), "html", null, true);
        echo " <strong ";
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 8, $this->source); })()), "firstVisit", [], "any", false, false, false, 8), "referrerType", [], "any", false, false, false, 8), "search")) && !twig_in_filter("(", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 8, $this->source); })()), "firstVisit", [], "any", false, false, false, 8), "referralSummary", [], "any", false, false, false, 8)))) {
            echo "title=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["keywordNotDefined"]) || array_key_exists("keywordNotDefined", $context) ? $context["keywordNotDefined"] : (function () { throw new RuntimeError('Variable "keywordNotDefined" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 9
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 9, $this->source); })()), "firstVisit", [], "any", false, false, false, 9), "referrerType", [], "any", false, false, false, 9), "website"))) {
            // line 10
            echo "                        <a href=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 10, $this->source); })()), "firstVisit", [], "any", false, false, false, 10), "referrerUrl", [], "any", false, false, false, 10)), "html_attr");
            echo "\" target=\"_blank\" rel=\"noreferrer noopener\">
                            ";
            // line 11
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 11, $this->source); })()), "firstVisit", [], "any", false, false, false, 11), "referralSummary", [], "any", false, false, false, 11), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 14
            echo "                        ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 14, $this->source); })()), "firstVisit", [], "any", false, false, false, 14), "referralSummary", [], "any", false, false, false, 14), "html", null, true);
            echo "
                    ";
        }
        // line 16
        echo "                </strong>
            </p>
        </div>
    </div>
    ";
        // line 20
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 20, $this->source); })()), "lastVisits", [], "any", false, false, false, 20), "getRowsCount", [], "method", false, false, false, 20), 1))) {
            // line 21
            echo "        <div>
            <h1>";
            // line 22
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_LastVisit"), "html", null, true);
            echo "</h1>
            <div>
                <p><strong>";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 24, $this->source); })()), "lastVisit", [], "any", false, false, false, 24), "prettyDate", [], "any", false, false, false, 24), "html", null, true);
            echo "</strong>&nbsp;- ";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_DaysAgo", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 24, $this->source); })()), "lastVisit", [], "any", false, false, false, 24), "daysAgo", [], "any", false, false, false, 24)), "html", null, true);
            echo "</p>
                <p>
                    ";
            // line 26
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_FromReferrer"), "html", null, true);
            echo " <strong ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 26, $this->source); })()), "lastVisit", [], "any", false, false, false, 26), "referrerType", [], "any", false, false, false, 26), "search")) && !twig_in_filter("(", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 26, $this->source); })()), "lastVisit", [], "any", false, false, false, 26), "referralSummary", [], "any", false, false, false, 26)))) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["keywordNotDefined"]) || array_key_exists("keywordNotDefined", $context) ? $context["keywordNotDefined"] : (function () { throw new RuntimeError('Variable "keywordNotDefined" does not exist.', 26, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">";
            // line 27
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 27, $this->source); })()), "lastVisit", [], "any", false, false, false, 27), "referrerType", [], "any", false, false, false, 27), "website"))) {
                // line 28
                echo "                            <a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 28, $this->source); })()), "lastVisit", [], "any", false, false, false, 28), "referrerUrl", [], "any", false, false, false, 28)), "html_attr");
                echo "\" target=\"_blank\" rel=\"noreferrer noopener\">
                                ";
                // line 29
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 29, $this->source); })()), "lastVisit", [], "any", false, false, false, 29), "referralSummary", [], "any", false, false, false, 29), "html", null, true);
                echo "
                            </a>
                        ";
            } else {
                // line 32
                echo "                            ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 32, $this->source); })()), "lastVisit", [], "any", false, false, false, 32), "referralSummary", [], "any", false, false, false, 32), "html", null, true);
                echo "
                        ";
            }
            // line 34
            echo "                    </strong>
                </p>
            </div>
        </div>
    ";
        }
        // line 39
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Live/_profileSummaryVisits.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 39,  140 => 34,  134 => 32,  128 => 29,  123 => 28,  121 => 27,  112 => 26,  105 => 24,  100 => 22,  97 => 21,  95 => 20,  89 => 16,  83 => 14,  77 => 11,  72 => 10,  70 => 9,  61 => 8,  54 => 6,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"visitor-profile-summary visitor-profile-important-visits\">
    {%- set keywordNotDefined = 'General_NotDefined'|translate('General_ColumnKeyword'|translate) -%}
    <div>
        <h1>{% if visitorData.visitsAggregated == 100 %}{{ 'General_Visit'|translate }}# 100{% else %}{{ 'Live_FirstVisit'|translate }}{% endif %}</h1>
        <div>
            <p><strong>{{ visitorData.firstVisit.prettyDate }}</strong>&nbsp;- {{ 'UserCountryMap_DaysAgo'|translate(visitorData.firstVisit.daysAgo) }}</p>
            <p>
                {{ 'General_FromReferrer'|translate }} <strong {% if visitorData.firstVisit.referrerType == 'search' and '(' not in visitorData.firstVisit.referralSummary %}title=\"{{ keywordNotDefined }}\"{% endif %}>
                    {%- if visitorData.firstVisit.referrerType == 'website' %}
                        <a href=\"{{ visitorData.firstVisit.referrerUrl|safelink|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\">
                            {{ visitorData.firstVisit.referralSummary }}
                        </a>
                    {% else %}
                        {{ visitorData.firstVisit.referralSummary }}
                    {% endif %}
                </strong>
            </p>
        </div>
    </div>
    {% if visitorData.lastVisits.getRowsCount() != 1 %}
        <div>
            <h1>{{ 'Live_LastVisit'|translate }}</h1>
            <div>
                <p><strong>{{ visitorData.lastVisit.prettyDate }}</strong>&nbsp;- {{ 'UserCountryMap_DaysAgo'|translate(visitorData.lastVisit.daysAgo) }}</p>
                <p>
                    {{ 'General_FromReferrer'|translate }} <strong {% if visitorData.lastVisit.referrerType == 'search' and '(' not in visitorData.lastVisit.referralSummary %}title=\"{{ keywordNotDefined }}\"{% endif %}>
                        {%- if visitorData.lastVisit.referrerType == 'website' %}
                            <a href=\"{{ visitorData.lastVisit.referrerUrl|safelink|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\">
                                {{ visitorData.lastVisit.referralSummary }}
                            </a>
                        {% else %}
                            {{ visitorData.lastVisit.referralSummary }}
                        {% endif %}
                    </strong>
                </p>
            </div>
        </div>
    {% endif %}
</div>", "@Live/_profileSummaryVisits.twig", "/var/www/html/nes/analytics/matomo/plugins/Live/templates/_profileSummaryVisits.twig");
    }
}
