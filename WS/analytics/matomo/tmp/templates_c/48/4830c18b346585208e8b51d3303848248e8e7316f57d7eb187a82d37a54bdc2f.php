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

/* @Live/getVisitorProfilePopup.twig */
class __TwigTemplate_492bd1bed58a1ec756ff8f53ac2d74c8b01c89113c08dcb7502d7b170bcbfc15 extends Template
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
        if ( !(isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <div class=\"pk-emptyDataTable\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ThereIsNoDataForThisReport"), "html", null, true);
            echo "</div>
";
        } else {
            // line 4
            echo "    <div class=\"visitor-profile\"
         data-visitor-id=\"";
            // line 5
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 5, $this->source); })()), "lastVisits", [], "any", false, false, false, 5), "getFirstRow", [], "method", false, false, false, 5), "getColumn", [0 => "visitorId"], "method", false, false, false, 5), "html", null, true);
            echo "\"
         data-next-visitor=\"";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 6, $this->source); })()), "nextVisitorId", [], "any", false, false, false, 6), "html", null, true);
            echo "\"
         data-prev-visitor=\"";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 7, $this->source); })()), "previousVisitorId", [], "any", false, false, false, 7), "html", null, true);
            echo "\"
         tabindex=\"0\">
        <div class=\"visitor-profile-options\">
            <a href class=\"visitor-profile-close\" title=\"";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Close"), "html", null, true);
            echo " \"></a>
            <a href=\"https://matomo.org/docs/user-profile/\" class=\"visitor-profile-help\" rel=\"noreferrer\"
               target=\"_blank\"
               title=\"";
            // line 13
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ViewDocumentationFor", ucwords($this->env->getFilter('translate')->getCallable()("Live_VisitorProfile"))), "html", null, true);
            echo "\">
            </a>
            <a href class=\"visitor-profile-toggle-actions\" title=\"";
            // line 15
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ToggleActions"), "html", null, true);
            echo " \"></a>
        </div>
        <div class=\"visitor-profile-info\">
            <div class=\"visitor-profile-overview\">
                <div class=\"visitor-profile-header\">
                    <div class=\"visitor-profile-avatar\">
                        <img src=\"";
            // line 21
            echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "visitorAvatar", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "visitorAvatar", [], "any", false, false, false, 21), "plugins/Live/images/unknown_avatar.png")) : ("plugins/Live/images/unknown_avatar.png")), "html", null, true);
            echo "\"
                             alt=\"";
            // line 22
            echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "visitorDescription", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "visitorDescription", [], "any", false, false, false, 22), "")) : ("")), "html", null, true);
            echo "\"
                             title=\"";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "visitorDescription", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "visitorDescription", [], "any", false, false, false, 23), "")) : ("")), "html", null, true);
            echo "\"/>
                    </div>
                    <div class=\"visitor-profile-header-details\">
                        <div class=\"visitor-profile-headline\">
                            ";
            // line 27
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 27, $this->source); })()), "previousVisitorId", [], "any", false, false, false, 27))) {
                echo "<a class=\"visitor-profile-prev-visitor\"
                                                                                  href=\"#\"
                                                                                  title=\"";
                // line 29
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_PreviousVisitor"), "html", null, true);
                echo "\">
                                    &larr;</a>";
            }
            // line 31
            echo "                            <h1>";
            // line 32
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 32, $this->source); })()), "userId", [], "any", false, false, false, 32))) {
                // line 33
                echo "                                    ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_VisitorProfile"), "html", null, true);
            } else {
                // line 35
                echo "                                    <span title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_UserId"), "html", null, true);
                echo ": ";
                echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 35, $this->source); })()), "userId", [], "any", false, false, false, 35));
                echo "\">";
                echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 35, $this->source); })()), "userId", [], "any", false, false, false, 35));
                echo "</span>
                                ";
            }
            // line 37
            echo "</h1>
                            ";
            // line 38
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 38, $this->source); })()), "nextVisitorId", [], "any", false, false, false, 38))) {
                echo "<a class=\"visitor-profile-next-visitor\"
                                                                              href=\"#\"
                                                                              title=\"";
                // line 40
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_NextVisitor"), "html", null, true);
                echo "\">
                                    &rarr;</a>";
            }
            // line 42
            echo "                        </div>
                        <div class=\"visitor-profile-latest-visit\">
                            <div class=\"visitor-profile-id\">
                                <span>";
            // line 45
            echo \Piwik\piwik_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Id")), "html", null, true);
            echo "</span>
                                ";
            // line 46
            if ((isset($context["widgetizedLink"]) || array_key_exists("widgetizedLink", $context))) {
                echo "<a class=\"visitor-profile-widget-link\"
                                                                     href=\"";
                // line 47
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["widgetizedLink"]) || array_key_exists("widgetizedLink", $context) ? $context["widgetizedLink"] : (function () { throw new RuntimeError('Variable "widgetizedLink" does not exist.', 47, $this->source); })()), "html", null, true);
                echo "\" target=\"_blank\"
                                                                     title=\"";
                // line 48
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Widgetize_OpenInNewWindow"), "html", null, true);
                echo " - ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_VisitorProfile"), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Id")), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 48, $this->source); })()), "visitorId", [], "any", false, false, false, 48), "html", null, true);
                echo "\">";
            }
            // line 49
            echo "                                    <span>";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 49, $this->source); })()), "visitorId", [], "any", false, false, false, 49), "html", null, true);
            echo "</span>";
            // line 50
            if ((isset($context["widgetizedLink"]) || array_key_exists("widgetizedLink", $context))) {
                echo "</a>";
            }
            // line 51
            echo "                                <a class=\"visitor-profile-export\" href=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["exportLink"]) || array_key_exists("exportLink", $context) ? $context["exportLink"] : (function () { throw new RuntimeError('Variable "exportLink" does not exist.', 51, $this->source); })()), "html", null, true);
            echo "\" target=\"_blank\"
                                   title=\"";
            // line 52
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ExportThisReport"), "html", null, true);
            echo "\">
                                    <span class=\"icon-export\"></span>
                                </a>
                            </div>
                            ";
            // line 56
            echo $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorIcons", twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 56, $this->source); })()), "lastVisits", [], "any", false, false, false, 56)));
            echo "
                        </div>
                    </div>
                </div>

                ";
            // line 61
            echo (isset($context["profileSummary"]) || array_key_exists("profileSummary", $context) ? $context["profileSummary"] : (function () { throw new RuntimeError('Variable "profileSummary" does not exist.', 61, $this->source); })());
            echo "

                ";
            // line 63
            echo $this->env->getFunction('postEvent')->getCallable()("Template.afterVisitorProfileOverview");
            echo "
            </div>
            <div class=\"visitor-profile-visits-info\">
                <div class=\"visitor-profile-visits-container\">
                    <ol class=\"visitor-profile-visits\">
                        ";
            // line 68
            $this->loadTemplate("@Live/getVisitList.twig", "@Live/getVisitorProfilePopup.twig", 68)->display(twig_array_merge($context, ["visits" => twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 68, $this->source); })()), "lastVisits", [], "any", false, false, false, 68), "startCounter" => twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 68, $this->source); })()), "totalVisits", [], "any", false, false, false, 68)]));
            // line 69
            echo "                    </ol>
                </div>
                <div class=\"visitor-profile-more-info\">
                    ";
            // line 72
            if ((0 <= twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 72, $this->source); })()), "lastVisits", [], "any", false, false, false, 72), "getRowsCount", [], "method", false, false, false, 72), twig_constant("Piwik\\Plugins\\Live\\VisitorProfile::VISITOR_PROFILE_MAX_VISITS_TO_SHOW")))) {
                // line 73
                echo "                        <a href=\"#\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_LoadMoreVisits"), "html", null, true);
                echo "</a> <img class=\"loadingPiwik\"
                                                                                   style=\"display:none;\"
                                                                                   src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                    ";
            } else {
                // line 77
                echo "                        <span class=\"visitor-profile-no-visits\">
                            ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 78, $this->source); })()), "hasMoreVisits", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "                                ";
                    echo $this->env->getFilter('translate')->getCallable()("Live_LimitedVisitsShown", (("<strong>" . twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 79, $this->source); })()), "totalVisits", [], "any", false, false, false, 79)) . "</strong>"));
                    echo "
                            ";
                } else {
                    // line 81
                    echo "                                ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_NoMoreVisits"), "html", null, true);
                    echo "
                            ";
                }
                // line 83
                echo "                        </span>
                    ";
            }
            // line 85
            echo "                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        \$(function () {
            require('piwik/UI').VisitorProfileControl.initElements();
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "@Live/getVisitorProfilePopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 85,  240 => 83,  234 => 81,  228 => 79,  226 => 78,  223 => 77,  215 => 73,  213 => 72,  208 => 69,  206 => 68,  198 => 63,  193 => 61,  185 => 56,  178 => 52,  173 => 51,  169 => 50,  165 => 49,  155 => 48,  151 => 47,  147 => 46,  143 => 45,  138 => 42,  133 => 40,  128 => 38,  125 => 37,  115 => 35,  111 => 33,  109 => 32,  107 => 31,  102 => 29,  97 => 27,  90 => 23,  86 => 22,  82 => 21,  73 => 15,  68 => 13,  62 => 10,  56 => 7,  52 => 6,  48 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not visitorData %}
    <div class=\"pk-emptyDataTable\">{{ 'CoreHome_ThereIsNoDataForThisReport'|translate }}</div>
{% else %}
    <div class=\"visitor-profile\"
         data-visitor-id=\"{{ visitorData.lastVisits.getFirstRow().getColumn('visitorId') }}\"
         data-next-visitor=\"{{ visitorData.nextVisitorId }}\"
         data-prev-visitor=\"{{ visitorData.previousVisitorId }}\"
         tabindex=\"0\">
        <div class=\"visitor-profile-options\">
            <a href class=\"visitor-profile-close\" title=\"{{ 'General_Close'|translate }} \"></a>
            <a href=\"https://matomo.org/docs/user-profile/\" class=\"visitor-profile-help\" rel=\"noreferrer\"
               target=\"_blank\"
               title=\"{{ 'General_ViewDocumentationFor'|translate(\"Live_VisitorProfile\"|translate|ucwords) }}\">
            </a>
            <a href class=\"visitor-profile-toggle-actions\" title=\"{{ 'Live_ToggleActions'|translate }} \"></a>
        </div>
        <div class=\"visitor-profile-info\">
            <div class=\"visitor-profile-overview\">
                <div class=\"visitor-profile-header\">
                    <div class=\"visitor-profile-avatar\">
                        <img src=\"{{ visitorData.visitorAvatar|default(\"plugins/Live/images/unknown_avatar.png\") }}\"
                             alt=\"{{ visitorData.visitorDescription|default('') }}\"
                             title=\"{{ visitorData.visitorDescription|default('') }}\"/>
                    </div>
                    <div class=\"visitor-profile-header-details\">
                        <div class=\"visitor-profile-headline\">
                            {% if visitorData.previousVisitorId is not empty %}<a class=\"visitor-profile-prev-visitor\"
                                                                                  href=\"#\"
                                                                                  title=\"{{ 'Live_PreviousVisitor'|translate }}\">
                                    &larr;</a>{% endif %}
                            <h1>
                                {%- if visitorData.userId is empty %}
                                    {{ 'Live_VisitorProfile'|translate }}
                                {%- else %}
                                    <span title=\"{{ 'General_UserId'|translate }}: {{ visitorData.userId|rawSafeDecoded }}\">{{ visitorData.userId|rawSafeDecoded }}</span>
                                {% endif -%}
                            </h1>
                            {% if visitorData.nextVisitorId is not empty %}<a class=\"visitor-profile-next-visitor\"
                                                                              href=\"#\"
                                                                              title=\"{{ 'Live_NextVisitor'|translate }}\">
                                    &rarr;</a>{% endif %}
                        </div>
                        <div class=\"visitor-profile-latest-visit\">
                            <div class=\"visitor-profile-id\">
                                <span>{{ 'General_Id'|translate|upper }}</span>
                                {% if widgetizedLink is defined %}<a class=\"visitor-profile-widget-link\"
                                                                     href=\"{{ widgetizedLink }}\" target=\"_blank\"
                                                                     title=\"{{ 'Widgetize_OpenInNewWindow'|translate }} - {{ 'Live_VisitorProfile'|translate }} {{ 'General_Id'|translate|upper }} {{ visitorData.visitorId }}\">{% endif %}
                                    <span>{{ visitorData.visitorId }}</span>
                                    {%- if widgetizedLink is defined %}</a>{% endif %}
                                <a class=\"visitor-profile-export\" href=\"{{ exportLink }}\" target=\"_blank\"
                                   title=\"{{ 'General_ExportThisReport'|translate }}\">
                                    <span class=\"icon-export\"></span>
                                </a>
                            </div>
                            {{ postEvent('Live.renderVisitorIcons', visitorData.lastVisits|first) }}
                        </div>
                    </div>
                </div>

                {{ profileSummary|raw }}

                {{ postEvent('Template.afterVisitorProfileOverview') }}
            </div>
            <div class=\"visitor-profile-visits-info\">
                <div class=\"visitor-profile-visits-container\">
                    <ol class=\"visitor-profile-visits\">
                        {% include \"@Live/getVisitList.twig\" with {'visits': visitorData.lastVisits, 'startCounter': visitorData.totalVisits} %}
                    </ol>
                </div>
                <div class=\"visitor-profile-more-info\">
                    {% if visitorData.lastVisits.getRowsCount() >= constant(\"Piwik\\\\Plugins\\\\Live\\\\VisitorProfile::VISITOR_PROFILE_MAX_VISITS_TO_SHOW\") %}
                        <a href=\"#\">{{ 'Live_LoadMoreVisits'|translate }}</a> <img class=\"loadingPiwik\"
                                                                                   style=\"display:none;\"
                                                                                   src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                    {% else %}
                        <span class=\"visitor-profile-no-visits\">
                            {% if visitorData.hasMoreVisits %}
                                {{ 'Live_LimitedVisitsShown'|translate('<strong>' ~ visitorData.totalVisits ~ '</strong>')|raw }}
                            {% else %}
                                {{ 'Live_NoMoreVisits'|translate }}
                            {% endif %}
                        </span>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        \$(function () {
            require('piwik/UI').VisitorProfileControl.initElements();
        });
    </script>
{% endif %}", "@Live/getVisitorProfilePopup.twig", "/var/www/html/nes/analytics/matomo/plugins/Live/templates/getVisitorProfilePopup.twig");
    }
}
