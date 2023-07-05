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

/* @Live/getVisitList.twig */
class __TwigTemplate_9975c3d92cdb32bee267fc25c2e202a6f153b6324372272c522910eb001cd212 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["visits"]) || array_key_exists("visits", $context) ? $context["visits"] : (function () { throw new RuntimeError('Variable "visits" does not exist.', 1, $this->source); })()), "getRows", [], "method", false, false, false, 1));
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
        foreach ($context['_seq'] as $context["_key"] => $context["visitInfo"]) {
            // line 2
            echo "<li data-number=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["startCounter"]) || array_key_exists("startCounter", $context) ? $context["startCounter"] : (function () { throw new RuntimeError('Variable "startCounter" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\">
    <div>
        <div class=\"visitor-profile-visit-title\" data-idvisit=\"";
            // line 4
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitInfo"], "getColumn", [0 => "idVisit"], "method", false, false, false, 4), "html", null, true);
            echo "\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ClickToViewMoreAboutVisit"), "html", null, true);
            echo "\">
            ";
            // line 5
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Visit"), "html", null, true);
            echo " #<span class=\"counter\">";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["startCounter"]) || array_key_exists("startCounter", $context) ? $context["startCounter"] : (function () { throw new RuntimeError('Variable "startCounter" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "</span>

            <span class=\"visitor-profile-date\" title=\"";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitInfo"], "getColumn", [0 => "serverDatePrettyFirstAction"], "method", false, false, false, 7), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitInfo"], "getColumn", [0 => "serverTimePrettyFirstAction"], "method", false, false, false, 7), "html", null, true);
            echo "\">
                ";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitInfo"], "getColumn", [0 => "serverDatePrettyFirstAction"], "method", false, false, false, 8), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitInfo"], "getColumn", [0 => "serverTimePrettyFirstAction"], "method", false, false, false, 8), "html", null, true);
            echo "
            </span>
        </div>
        <div class=\"visitor-profile-visit-details-extended\">
            ";
            // line 12
            echo $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorDetails", $context["visitInfo"]);
            echo "
        </div>
        <div class=\"visitor-profile-visit-details\">
            ";
            // line 15
            echo $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorIcons", $context["visitInfo"]);
            echo "
            <a href=\"#\" class=\"visitor-profile-show-actions\">
                ";
            // line 17
            $context["actionCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitInfo"], "getColumn", [0 => "actionDetails"], "method", false, false, false, 17));
            // line 18
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["visitInfo"], "truncatedActionsCount", [], "any", true, true, false, 18)) {
                // line 19
                echo "                    ";
                $context["actionCount"] = ((isset($context["actionCount"]) || array_key_exists("actionCount", $context) ? $context["actionCount"] : (function () { throw new RuntimeError('Variable "actionCount" does not exist.', 19, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["visitInfo"], "truncatedActionsCount", [], "any", false, false, false, 19));
                // line 20
                echo "                ";
            }
            // line 21
            echo "                ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["visitInfo"], "getColumn", [0 => "visitDuration"], "method", false, false, false, 21), 0))) {
                // line 22
                echo "                    ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ActionsAndDuration", (isset($context["actionCount"]) || array_key_exists("actionCount", $context) ? $context["actionCount"] : (function () { throw new RuntimeError('Variable "actionCount" does not exist.', 22, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["visitInfo"], "getColumn", [0 => "visitDurationPretty"], "method", false, false, false, 22)), "html", null, true);
                echo "
                ";
            } else {
                // line 24
                echo "                    ";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["actionCount"]) || array_key_exists("actionCount", $context) ? $context["actionCount"] : (function () { throw new RuntimeError('Variable "actionCount" does not exist.', 24, $this->source); })()), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Actions"), "html", null, true);
                echo "
                ";
            }
            // line 26
            echo "            </a>
        </div>
        <ol class=\"visitorLog visitor-profile-actions actionList\">
            ";
            // line 29
            $this->loadTemplate("@Live/_actionsList.twig", "@Live/getVisitList.twig", 29)->display(twig_array_merge($context, ["actionDetails" => twig_get_attribute($this->env, $this->source, $context["visitInfo"], "getColumn", [0 => "actionDetails"], "method", false, false, false, 29), "actionGroups" => twig_get_attribute($this->env, $this->source,             // line 30
$context["visitInfo"], "getColumn", [0 => "actionGroups"], "method", false, false, false, 30), "visitInfo" =>             // line 31
$context["visitInfo"]]));
            // line 32
            echo "        </ol>
    </div>
</li>
";
            // line 35
            $context["startCounter"] = ((isset($context["startCounter"]) || array_key_exists("startCounter", $context) ? $context["startCounter"] : (function () { throw new RuntimeError('Variable "startCounter" does not exist.', 35, $this->source); })()) - 1);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Live/getVisitList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 35,  136 => 32,  134 => 31,  133 => 30,  132 => 29,  127 => 26,  119 => 24,  113 => 22,  110 => 21,  107 => 20,  104 => 19,  101 => 18,  99 => 17,  94 => 15,  88 => 12,  79 => 8,  73 => 7,  66 => 5,  60 => 4,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for visitInfo in visits.getRows() %}
<li data-number=\"{{ startCounter }}\">
    <div>
        <div class=\"visitor-profile-visit-title\" data-idvisit=\"{{ visitInfo.getColumn('idVisit') }}\" title=\"{{ 'Live_ClickToViewMoreAboutVisit'|translate }}\">
            {{ 'General_Visit'|translate }} #<span class=\"counter\">{{ startCounter }}</span>

            <span class=\"visitor-profile-date\" title=\"{{ visitInfo.getColumn('serverDatePrettyFirstAction') }} {{ visitInfo.getColumn('serverTimePrettyFirstAction') }}\">
                {{ visitInfo.getColumn('serverDatePrettyFirstAction') }} {{ visitInfo.getColumn('serverTimePrettyFirstAction') }}
            </span>
        </div>
        <div class=\"visitor-profile-visit-details-extended\">
            {{ postEvent('Live.renderVisitorDetails', visitInfo) }}
        </div>
        <div class=\"visitor-profile-visit-details\">
            {{ postEvent('Live.renderVisitorIcons', visitInfo) }}
            <a href=\"#\" class=\"visitor-profile-show-actions\">
                {% set actionCount = visitInfo.getColumn('actionDetails')|length %}
                {% if visitInfo.truncatedActionsCount is defined %}
                    {% set actionCount = actionCount + visitInfo.truncatedActionsCount %}
                {% endif %}
                {% if visitInfo.getColumn('visitDuration') != 0 %}
                    {{ 'Live_ActionsAndDuration'|translate(actionCount, visitInfo.getColumn('visitDurationPretty')) }}
                {% else %}
                    {{ actionCount }} {{ 'General_Actions'|translate }}
                {% endif %}
            </a>
        </div>
        <ol class=\"visitorLog visitor-profile-actions actionList\">
            {% include \"@Live/_actionsList.twig\" with {'actionDetails': visitInfo.getColumn('actionDetails'),
                                                       'actionGroups': visitInfo.getColumn('actionGroups'),
                                                       'visitInfo': visitInfo} %}
        </ol>
    </div>
</li>
{% set startCounter = startCounter - 1 %}
{% endfor %}", "@Live/getVisitList.twig", "/var/www/html/nes/analytics/matomo/plugins/Live/templates/getVisitList.twig");
    }
}
