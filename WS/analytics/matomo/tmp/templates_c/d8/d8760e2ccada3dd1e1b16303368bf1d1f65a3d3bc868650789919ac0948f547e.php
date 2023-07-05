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

/* @Live/_profileSummary.twig */
class __TwigTemplate_40fe1425cf49466b09bf1ac54e7f871479c447317ad37de5b453c573dd20af3f extends Template
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
        ob_start();
        // line 2
        echo "    ";
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 2, $this->source); })()), "totalUniquePageViews", [], "any", false, false, false, 2), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnUniquePageviews"), "html", null, true);
        echo ", ";
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 2, $this->source); })()), "totalRevisitedPages", [], "any", false, false, false, 2), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_RevisitedPages"), "html", null, true);
        echo "
";
        $context["pageviewDetails"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo "
<div class=\"visitor-profile-summary visitor-profile-resume\">
    <h1>";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Summary"), "html", null, true);
        echo "</h1>
    <div>
        ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 8, $this->source); })()), "hasMoreVisits", [], "any", false, false, false, 8)) {
            // line 9
            echo "            <p>";
            echo $this->env->getFilter('translate')->getCallable()("Live_LimitedSummary", (("<strong>" . twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 9, $this->source); })()), "totalVisits", [], "any", false, false, false, 9)) . "</strong>"));
            echo "</p>
        ";
        }
        // line 11
        echo "        ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 11, $this->source); })()), "totalPageViews", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 11, $this->source); })()), "totalActions", [], "any", false, false, false, 11)))) {
            // line 12
            echo "            ";
            $context["actionDetails"] = [];
            // line 13
            echo "            ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 13, $this->source); })()), "totalPageViews", [], "any", false, false, false, 13), 0))) {
                $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) || array_key_exists("actionDetails", $context) ? $context["actionDetails"] : (function () { throw new RuntimeError('Variable "actionDetails" does not exist.', 13, $this->source); })()), [0 => (((((("<span title=\"" . (isset($context["pageviewDetails"]) || array_key_exists("pageviewDetails", $context) ? $context["pageviewDetails"] : (function () { throw new RuntimeError('Variable "pageviewDetails" does not exist.', 13, $this->source); })())) . "\">") . twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 13, $this->source); })()), "totalPageViews", [], "any", false, false, false, 13)) . " ") . $this->env->getFilter('translate')->getCallable()("General_ColumnPageviews")) . "</span>")]);
            }
            // line 14
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "totalEvents", [], "any", true, true, false, 14) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 14, $this->source); })()), "totalEvents", [], "any", false, false, false, 14), 0)))) {
                $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) || array_key_exists("actionDetails", $context) ? $context["actionDetails"] : (function () { throw new RuntimeError('Variable "actionDetails" does not exist.', 14, $this->source); })()), [0 => ((twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 14, $this->source); })()), "totalEvents", [], "any", false, false, false, 14) . " ") . $this->env->getFilter('translate')->getCallable()("Events_Events"))]);
            }
            // line 15
            echo "            ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 15, $this->source); })()), "totalDownloads", [], "any", false, false, false, 15), 0))) {
                $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) || array_key_exists("actionDetails", $context) ? $context["actionDetails"] : (function () { throw new RuntimeError('Variable "actionDetails" does not exist.', 15, $this->source); })()), [0 => ((twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 15, $this->source); })()), "totalDownloads", [], "any", false, false, false, 15) . " ") . $this->env->getFilter('translate')->getCallable()("General_Downloads"))]);
            }
            // line 16
            echo "            ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 16, $this->source); })()), "totalOutlinks", [], "any", false, false, false, 16), 0))) {
                $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) || array_key_exists("actionDetails", $context) ? $context["actionDetails"] : (function () { throw new RuntimeError('Variable "actionDetails" does not exist.', 16, $this->source); })()), [0 => ((twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 16, $this->source); })()), "totalOutlinks", [], "any", false, false, false, 16) . " ") . $this->env->getFilter('translate')->getCallable()("General_Outlinks"))]);
            }
            // line 17
            echo "            ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 17, $this->source); })()), "totalSearches", [], "any", false, false, false, 17), 0))) {
                $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) || array_key_exists("actionDetails", $context) ? $context["actionDetails"] : (function () { throw new RuntimeError('Variable "actionDetails" does not exist.', 17, $this->source); })()), [0 => ((twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 17, $this->source); })()), "totalSearches", [], "any", false, false, false, 17) . " ") . $this->env->getFilter('translate')->getCallable()("Actions_ColumnSearches"))]);
            }
            // line 18
            echo "            <p>";
            echo $this->env->getFilter('translate')->getCallable()("Live_VisitSummaryWithActionDetails", (("<strong>" . twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 18, $this->source); })()), "totalVisitDurationPretty", [], "any", false, false, false, 18)) . "</strong>"), "", "", ("<strong>" . twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 18, $this->source); })()), "totalActions", [], "any", false, false, false, 18)), "</strong>", twig_join_filter((isset($context["actionDetails"]) || array_key_exists("actionDetails", $context) ? $context["actionDetails"] : (function () { throw new RuntimeError('Variable "actionDetails" does not exist.', 18, $this->source); })()), ", "), ("<strong>" . twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 18, $this->source); })()), "totalVisits", [], "any", false, false, false, 18)), "</strong>");
            echo "</p>
        ";
        } else {
            // line 20
            echo "            <p>";
            echo $this->env->getFilter('translate')->getCallable()("Live_VisitSummary", (("<strong>" . twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 20, $this->source); })()), "totalVisitDurationPretty", [], "any", false, false, false, 20)) . "</strong>"), "", "", ((("<strong title=\"" . (isset($context["pageviewDetails"]) || array_key_exists("pageviewDetails", $context) ? $context["pageviewDetails"] : (function () { throw new RuntimeError('Variable "pageviewDetails" does not exist.', 20, $this->source); })())) . "\">") . twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 20, $this->source); })()), "totalActions", [], "any", false, false, false, 20)), "</strong>", ("<strong>" . twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 20, $this->source); })()), "totalVisits", [], "any", false, false, false, 20)), "</strong>");
            echo "</p>
        ";
        }
        // line 22
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "totalGoalConversions", [], "any", true, true, false, 22)) {
            // line 23
            echo "        <p>";
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 23, $this->source); })()), "totalGoalConversions", [], "any", false, false, false, 23)) {
                echo "<strong>";
            }
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ConvertedNGoals", twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 23, $this->source); })()), "totalGoalConversions", [], "any", false, false, false, 23)), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 23, $this->source); })()), "totalGoalConversions", [], "any", false, false, false, 23)) {
                echo "</strong>";
            }
            // line 24
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 24, $this->source); })()), "totalGoalConversions", [], "any", false, false, false, 24)) {
                // line 25
                echo "            ";
                ob_start();
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 26, $this->source); })()), "totalConversionsByGoal", [], "any", false, false, false, 26));
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
                foreach ($context['_seq'] as $context["idGoal"] => $context["totalConversions"]) {
                    // line 27
                    $context["idGoal"] = twig_slice($this->env, $context["idGoal"], 7, null);
                    // line 28
                    if (twig_get_attribute($this->env, $this->source, ($context["goals"] ?? null), $context["idGoal"], [], "array", true, true, false, 28)) {
                        // line 29
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 29)) {
                            echo ", ";
                        }
                        echo \Piwik\piwik_escape_filter($this->env, $context["totalConversions"], "html", null, true);
                        echo " ";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["goals"]) || array_key_exists("goals", $context) ? $context["goals"] : (function () { throw new RuntimeError('Variable "goals" does not exist.', 29, $this->source); })()), $context["idGoal"], [], "array", false, false, false, 29), "name", [], "array", false, false, false, 29), "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['idGoal'], $context['totalConversions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                $context["goalList"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 33
                echo "            ";
                if ((isset($context["goalList"]) || array_key_exists("goalList", $context) ? $context["goalList"] : (function () { throw new RuntimeError('Variable "goalList" does not exist.', 33, $this->source); })())) {
                    echo "(";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["goalList"]) || array_key_exists("goalList", $context) ? $context["goalList"] : (function () { throw new RuntimeError('Variable "goalList" does not exist.', 33, $this->source); })()), "html", null, true);
                    echo ")";
                }
            }
            // line 34
            echo ".</p>
        ";
        }
        // line 36
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "totalSearches", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "totalSearches", [], "any", false, false, false, 36), 0)) : (0))) {
            // line 37
            echo "        <p>
            ";
            // line 38
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_WidgetSearchKeywords"), "html", null, true);
            echo ":";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 39, $this->source); })()), "searches", [], "any", false, false, false, 39));
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
                echo " <strong title=\"";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["entry"], "searches", [], "any", false, false, false, 39), 1))) {
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_OneSearch"), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountryMap_Searches", twig_get_attribute($this->env, $this->source, $context["entry"], "searches", [], "any", false, false, false, 39)), "html", null, true);
                }
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "keyword", [], "any", false, false, false, 39), "html", null, true);
                echo "</strong>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 39)) {
                    echo ",";
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
            // line 40
            echo "        </p>
        ";
        }
        // line 42
        echo "        ";
        if ((1 === twig_compare(((twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "averagePageLoadTime", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "averagePageLoadTime", [], "any", false, false, false, 42), 0)) : (0)), 0))) {
            // line 43
            echo "            <p title=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_CalculatedOverNPageViews", twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 43, $this->source); })()), "totalPageViewsWithLoadTime", [], "any", false, false, false, 43)), "html", null, true);
            echo "\">
                ";
            // line 44
            echo $this->env->getFilter('translate')->getCallable()("Live_AveragePageGenerationTime", (("<strong>" . twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 44, $this->source); })()), "averagePageLoadTime", [], "any", false, false, false, 44)) . "s</strong>"));
            echo "
            </p>
        ";
        }
        // line 47
        echo "        ";
        if (((0 === twig_compare(((twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "averagePageLoadTime", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "averagePageLoadTime", [], "any", false, false, false, 47), 0)) : (0)), 0)) && twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "averagePageGenerationTime", [], "any", true, true, false, 47))) {
            // line 48
            echo "        <p title=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_CalculatedOverNPageViews", twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 48, $this->source); })()), "totalPageViewsWithTiming", [], "any", false, false, false, 48)), "html", null, true);
            echo "\">
            ";
            // line 49
            echo $this->env->getFilter('translate')->getCallable()("Live_AveragePageGenerationTime", (("<strong>" . twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 49, $this->source); })()), "averagePageGenerationTime", [], "any", false, false, false, 49)) . "s</strong>"));
            echo "
        </p>
        ";
        }
        // line 52
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Live/_profileSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 52,  258 => 49,  253 => 48,  250 => 47,  244 => 44,  239 => 43,  236 => 42,  232 => 40,  191 => 39,  188 => 38,  185 => 37,  182 => 36,  178 => 34,  170 => 33,  149 => 29,  147 => 28,  145 => 27,  128 => 26,  125 => 25,  123 => 24,  114 => 23,  111 => 22,  105 => 20,  99 => 18,  94 => 17,  89 => 16,  84 => 15,  79 => 14,  74 => 13,  71 => 12,  68 => 11,  62 => 9,  60 => 8,  55 => 6,  51 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set pageviewDetails %}
    {{ visitorData.totalUniquePageViews }} {{ 'General_ColumnUniquePageviews'|translate }}, {{ visitorData.totalRevisitedPages }} {{ 'Actions_RevisitedPages'|translate }}
{% endset %}

<div class=\"visitor-profile-summary visitor-profile-resume\">
    <h1>{{ 'General_Summary'|translate }}</h1>
    <div>
        {% if visitorData.hasMoreVisits %}
            <p>{{ 'Live_LimitedSummary'|translate('<strong>' ~ visitorData.totalVisits ~ '</strong>')|raw }}</p>
        {% endif %}
        {% if visitorData.totalPageViews != visitorData.totalActions %}
            {% set actionDetails = [] %}
            {% if visitorData.totalPageViews > 0 %}{% set actionDetails = actionDetails|merge(['<span title=\"' ~ pageviewDetails ~ '\">' ~ visitorData.totalPageViews ~ ' ' ~ 'General_ColumnPageviews'|translate ~ '</span>']) %}{% endif %}
            {% if visitorData.totalEvents is defined and visitorData.totalEvents > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalEvents ~ ' ' ~ 'Events_Events'|translate]) %}{% endif %}
            {% if visitorData.totalDownloads > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalDownloads ~ ' ' ~ 'General_Downloads'|translate]) %}{% endif %}
            {% if visitorData.totalOutlinks > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalOutlinks ~ ' ' ~ 'General_Outlinks'|translate]) %}{% endif %}
            {% if visitorData.totalSearches > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalSearches ~ ' ' ~ 'Actions_ColumnSearches'|translate]) %}{% endif %}
            <p>{{ 'Live_VisitSummaryWithActionDetails'|translate('<strong>' ~ visitorData.totalVisitDurationPretty ~ '</strong>', '', '', '<strong>' ~ visitorData.totalActions, '</strong>', actionDetails|join(', ') , '<strong>' ~ visitorData.totalVisits, '</strong>')|raw }}</p>
        {% else %}
            <p>{{ 'Live_VisitSummary'|translate('<strong>' ~ visitorData.totalVisitDurationPretty ~ '</strong>', '', '', '<strong title=\"' ~ pageviewDetails ~ '\">' ~ visitorData.totalActions,  '</strong>', '<strong>' ~ visitorData.totalVisits, '</strong>')|raw }}</p>
        {% endif %}
        {% if visitorData.totalGoalConversions is defined %}
        <p>{% if visitorData.totalGoalConversions %}<strong>{% endif %}{{ 'Live_ConvertedNGoals'|translate(visitorData.totalGoalConversions) }}{% if visitorData.totalGoalConversions %}</strong>{% endif %}
        {%- if visitorData.totalGoalConversions %}
            {% set goalList %}
            {%- for idGoal, totalConversions in visitorData.totalConversionsByGoal -%}
                {%- set idGoal = idGoal[7:] -%}
                {% if goals[idGoal] is defined %}
                    {%- if not loop.first %}, {% endif -%}{{- totalConversions }} {{ goals[idGoal]['name'] -}}
                {% endif %}
            {%- endfor -%}
            {% endset %}
            {% if goalList %}({{ goalList }}){% endif %}
        {%- endif %}.</p>
        {% endif %}
        {% if visitorData.totalSearches|default(0) %}
        <p>
            {{ 'Actions_WidgetSearchKeywords'|translate }}:
            {%- for entry in visitorData.searches %} <strong title=\"{% if entry.searches == 1 %}{{ 'Actions_OneSearch'|translate }}{% else %}{{ 'UserCountryMap_Searches'|translate(entry.searches) }}{% endif %}\">{{ entry.keyword }}</strong>{% if not loop.last %},{% endif %}{% endfor %}
        </p>
        {% endif %}
        {% if visitorData.averagePageLoadTime|default(0) > 0 %}
            <p title=\"{{ 'Live_CalculatedOverNPageViews'|translate(visitorData.totalPageViewsWithLoadTime) }}\">
                {{ 'Live_AveragePageGenerationTime'|translate('<strong>' ~ visitorData.averagePageLoadTime ~ 's</strong>')|raw }}
            </p>
        {% endif %}
        {% if visitorData.averagePageLoadTime|default(0) == 0 and visitorData.averagePageGenerationTime is defined %}
        <p title=\"{{ 'Live_CalculatedOverNPageViews'|translate(visitorData.totalPageViewsWithTiming) }}\">
            {{ 'Live_AveragePageGenerationTime'|translate('<strong>' ~ visitorData.averagePageGenerationTime ~ 's</strong>')|raw }}
        </p>
        {% endif %}
    </div>
</div>", "@Live/_profileSummary.twig", "/var/www/html/nes/analytics/matomo/plugins/Live/templates/_profileSummary.twig");
    }
}
