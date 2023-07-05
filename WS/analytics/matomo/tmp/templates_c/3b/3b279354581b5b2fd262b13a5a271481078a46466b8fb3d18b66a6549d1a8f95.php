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

/* @UserCountry/_profileSummary.twig */
class __TwigTemplate_c98f3652be3605fde5b1ee59f93154e90ed026d9da339b54e31cc7464536e3a4 extends Template
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
        echo "<div class=\"visitor-profile-summary visitor-profile-location\">
    <h1>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountry_Location"), "html", null, true);
        echo "</h1>
    <p>";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 4, $this->source); })()), "countries", [], "any", false, false, false, 4));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 6
            ob_start();
            // line 7
            if (((twig_get_attribute($this->env, $this->source, $context["entry"], "cities", [], "any", true, true, false, 7) && (0 === twig_compare(1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "cities", [], "any", false, false, false, 7))))) && twig_join_filter(twig_get_attribute($this->env, $this->source, $context["entry"], "cities", [], "any", false, false, false, 7)))) {
                // line 8
                echo \Piwik\piwik_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["entry"], "cities", [], "any", false, false, false, 8)), "html", null, true);
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 9
$context["entry"], "cities", [], "any", true, true, false, 9) && (-1 === twig_compare(1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "cities", [], "any", false, false, false, 9)))))) {
                // line 10
                echo "<span title=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["entry"], "cities", [], "any", false, false, false, 10), ", "), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountry_FromDifferentCities"), "html", null, true);
                echo "</span>";
            }
            $context["entryCity"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
            ";
            // line 14
            ob_start();
            // line 15
            echo "<strong>
                    ";
            // line 16
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["entry"], "nb_visits", [], "any", false, false, false, 16), 1))) {
                // line 17
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OneVisit"), "html", null, true);
            } else {
                // line 19
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NVisits", twig_get_attribute($this->env, $this->source, $context["entry"], "nb_visits", [], "any", false, false, false, 19)), "html", null, true);
            }
            // line 21
            echo "</strong>";
            $context["entryVisits"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
            ";
            // line 24
            ob_start();
            // line 25
            if ((isset($context["entryCity"]) || array_key_exists("entryCity", $context) ? $context["entryCity"] : (function () { throw new RuntimeError('Variable "entryCity" does not exist.', 25, $this->source); })())) {
                // line 26
                echo $this->env->getFilter('translate')->getCallable()("UserCountry_CityAndCountry", (isset($context["entryCity"]) || array_key_exists("entryCity", $context) ? $context["entryCity"] : (function () { throw new RuntimeError('Variable "entryCity" does not exist.', 26, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["entry"], "prettyName", [], "any", false, false, false, 26));
            } else {
                // line 28
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "prettyName", [], "any", false, false, false, 28), "html", null, true);
            }
            // line 31
            echo "&nbsp;<img height=\"16px\" src=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "flag", [], "any", false, false, false, 31), "html", null, true);
            echo "\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "prettyName", [], "any", false, false, false, 31), "html", null, true);
            echo "\"/>";
            $context["entryCountry"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            echo $this->env->getFilter('translate')->getCallable()("General_XFromY", (isset($context["entryVisits"]) || array_key_exists("entryVisits", $context) ? $context["entryVisits"] : (function () { throw new RuntimeError('Variable "entryVisits" does not exist.', 34, $this->source); })()), (isset($context["entryCountry"]) || array_key_exists("entryCountry", $context) ? $context["entryCountry"] : (function () { throw new RuntimeError('Variable "entryCountry" does not exist.', 34, $this->source); })()));
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 34)) {
                echo ", ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        <a class=\"visitor-profile-show-map\" href=\"#\" ";
        if (twig_test_empty((((isset($context["userCountryMapUrl"]) || array_key_exists("userCountryMapUrl", $context))) ? (_twig_default_filter((isset($context["userCountryMapUrl"]) || array_key_exists("userCountryMapUrl", $context) ? $context["userCountryMapUrl"] : (function () { throw new RuntimeError('Variable "userCountryMapUrl" does not exist.', 36, $this->source); })()), "")) : ("")))) {
            echo "style=\"display:none\"";
        }
        echo ">(";
        echo twig_replace_filter($this->env->getFilter('translate')->getCallable()("Live_ShowMap"), [" " => "&nbsp;"]);
        echo ")</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
    </p>
    <div class=\"visitor-profile-map\" style=\"display:none\" data-href=\"";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, (((isset($context["userCountryMapUrl"]) || array_key_exists("userCountryMapUrl", $context))) ? (_twig_default_filter((isset($context["userCountryMapUrl"]) || array_key_exists("userCountryMapUrl", $context) ? $context["userCountryMapUrl"] : (function () { throw new RuntimeError('Variable "userCountryMapUrl" does not exist.', 38, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@UserCountry/_profileSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 38,  133 => 36,  116 => 34,  109 => 31,  106 => 28,  103 => 26,  101 => 25,  99 => 24,  96 => 23,  93 => 21,  90 => 19,  87 => 17,  85 => 16,  82 => 15,  80 => 14,  77 => 13,  69 => 10,  67 => 9,  65 => 8,  63 => 7,  61 => 6,  44 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"visitor-profile-summary visitor-profile-location\">
    <h1>{{ 'UserCountry_Location'|translate }}</h1>
    <p>
        {%- for entry in visitorData.countries -%}

            {% set entryCity -%}
                {% if entry.cities is defined and 1 == entry.cities|length and entry.cities|join -%}
                    {{ entry.cities|join }}
                {%- elseif entry.cities is defined and 1 < entry.cities|length -%}
                    <span title=\"{{ entry.cities|join(', ') }}\">{{ 'UserCountry_FromDifferentCities'|translate }}</span>
                {%- endif %}
            {%- endset %}

            {% set entryVisits -%}
                <strong>
                    {% if entry.nb_visits == 1 -%}
                        {{ 'General_OneVisit'|translate }}
                    {%- else -%}
                        {{ 'General_NVisits'|translate(entry.nb_visits) }}
                    {%- endif -%}
                </strong>
            {%- endset %}

            {% set entryCountry -%}
                {%- if entryCity -%}
                    {{ 'UserCountry_CityAndCountry'|translate(entryCity, entry.prettyName)|raw }}
                {%- else -%}
                    {{ entry.prettyName }}
                {%- endif -%}

                &nbsp;<img height=\"16px\" src=\"{{ entry.flag }}\" title=\"{{ entry.prettyName }}\"/>
            {%- endset %}

            {{- 'General_XFromY'|translate(entryVisits, entryCountry)|raw -}}{% if not loop.last %}, {% endif %}
        {%- endfor %}
        <a class=\"visitor-profile-show-map\" href=\"#\" {% if userCountryMapUrl|default('') is empty %}style=\"display:none\"{% endif %}>({{ 'Live_ShowMap'|translate|replace({' ': '&nbsp;'})|raw }})</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
    </p>
    <div class=\"visitor-profile-map\" style=\"display:none\" data-href=\"{{ userCountryMapUrl|default('') }}\">
    </div>
</div>", "@UserCountry/_profileSummary.twig", "/var/www/html/nes/analytics/matomo/plugins/UserCountry/templates/_profileSummary.twig");
    }
}
