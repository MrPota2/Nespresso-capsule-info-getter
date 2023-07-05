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

/* @SitesManager/_siteWithoutDataTabs.twig */
class __TwigTemplate_73d161e20d204798ef9bb0f4d369d151ea17aaaa1534680ff1a5056bd7ebbbae extends Template
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
        echo "<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.tabs').tabs();
    });
</script>

";
        // line 7
        $context["columnClass"] = (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 7, $this->source); })())) ? ("s2") : ("s3"));
        // line 8
        echo "
<div class=\"row\">
    <div class=\"col s12\">
        <ul class=\"tabs\">
            <li class=\"tab col ";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["columnClass"]) || array_key_exists("columnClass", $context) ? $context["columnClass"] : (function () { throw new RuntimeError('Variable "columnClass" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\"><a ";
        if ((((0 !== twig_compare((isset($context["siteType"]) || array_key_exists("siteType", $context) ? $context["siteType"] : (function () { throw new RuntimeError('Variable "siteType" does not exist.', 12, $this->source); })()), twig_constant("Piwik\\Plugins\\SitesManager\\SitesManager::SITE_TYPE_UNKNOWN"))) && (0 === twig_compare((isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 12, $this->source); })()), false))) && (0 === twig_compare((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 12, $this->source); })()), "")))) {
            echo " class=\"active\" ";
        }
        echo " href=\"#integrations\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_Integrations"), "html", null, true);
        echo "</a></li>
            <li class=\"tab col ";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["columnClass"]) || array_key_exists("columnClass", $context) ? $context["columnClass"] : (function () { throw new RuntimeError('Variable "columnClass" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\"><a ";
        if ((((0 === twig_compare((isset($context["siteType"]) || array_key_exists("siteType", $context) ? $context["siteType"] : (function () { throw new RuntimeError('Variable "siteType" does not exist.', 13, $this->source); })()), twig_constant("Piwik\\Plugins\\SitesManager\\SitesManager::SITE_TYPE_UNKNOWN"))) && (0 === twig_compare((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 13, $this->source); })()), ""))) || (isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 13, $this->source); })()))) {
            echo " class=\"active\" ";
        }
        echo " href=\"#tracking-code\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCode"), "html", null, true);
        echo "</a></li>
            <li class=\"tab col ";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["columnClass"]) || array_key_exists("columnClass", $context) ? $context["columnClass"] : (function () { throw new RuntimeError('Variable "columnClass" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\"><a href=\"#mtm\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataMatomoTagManager"), "html", null, true);
        echo "</a></li>
            ";
        // line 15
        if ((isset($context["cloudflare"]) || array_key_exists("cloudflare", $context) ? $context["cloudflare"] : (function () { throw new RuntimeError('Variable "cloudflare" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "                <li class=\"tab col s2\"><a ";
            if ((0 === twig_compare((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 16, $this->source); })()), "cloudflare"))) {
                echo " class=\"active\" ";
            }
            echo " href=\"#cloudflare\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflare"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 18
        echo "            <li class=\"tab col ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["columnClass"]) || array_key_exists("columnClass", $context) ? $context["columnClass"] : (function () { throw new RuntimeError('Variable "columnClass" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\"><a href=\"#other\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataOtherWays"), "html", null, true);
        echo "</a></li>
        </ul>
    </div>

    <div id=\"integrations\" class=\"col s12\">
        <h3>";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_Integrations"), "html", null, true);
        echo "</h3>
        ";
        // line 24
        if ((isset($context["instruction"]) || array_key_exists("instruction", $context) ? $context["instruction"] : (function () { throw new RuntimeError('Variable "instruction" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "            <p>";
            echo (isset($context["instruction"]) || array_key_exists("instruction", $context) ? $context["instruction"] : (function () { throw new RuntimeError('Variable "instruction" does not exist.', 25, $this->source); })());
            echo "</p>

            ";
            // line 27
            if ((isset($context["gtmUsed"]) || array_key_exists("gtmUsed", $context) ? $context["gtmUsed"] : (function () { throw new RuntimeError('Variable "gtmUsed" does not exist.', 27, $this->source); })())) {
                // line 28
                echo "                <p>";
                echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataDetectedGtm", twig_capitalize_string_filter($this->env, (isset($context["siteType"]) || array_key_exists("siteType", $context) ? $context["siteType"] : (function () { throw new RuntimeError('Variable "siteType" does not exist.', 28, $this->source); })())), "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager\">", "</a>");
                echo "</p>
            ";
            }
            // line 30
            echo "
            <p>";
            // line 31
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataOtherIntegrations"), "html", null, true);
            echo ": ";
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", "<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
            echo "</p>
        ";
        } else {
            // line 33
            echo "            <p>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_InstallationGuidesIntro"), "html", null, true);
            echo "

            <p>
                <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/'>WordPress</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-integrate-matomo-with-squarespace-website/'>Squarespace</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-wix/'>Wix</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/how-to-install/faq_19424/'>SharePoint</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-joomla/'>Joomla</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-shopify-store/'>Shopify</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/'>Google Tag Manager</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/'>Cloudflare</a>
            </p>

            <p>";
            // line 46
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", "<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
            echo "</p>
            <p>";
            // line 47
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3b");
            echo "</p>
            <br>
            <p>";
            // line 49
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_ExtraInformationNeeded"), "html", null, true);
            echo "</p>
            <p>Matomo URL: <code piwik-select-on-focus>";
            // line 50
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "</code></p>
            <p>";
            // line 51
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourSiteId", (("<code piwik-select-on-focus>" . (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 51, $this->source); })())) . "</code>"));
            echo "</p>
        ";
        }
        // line 53
        echo "    </div>

    <div id=\"tracking-code\" class=\"col s12\">

        ";
        // line 57
        if ((isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "        <p></p><p></p>
        <div class=\"system notification notification-info\">
            <p> ";
            // line 60
            echo $this->env->getFilter('translate')->getCallable()("PrivacyManager_ConsentManagerDetected", (isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 60, $this->source); })()), (("<a href=\"" . (isset($context["consentManagerUrl"]) || array_key_exists("consentManagerUrl", $context) ? $context["consentManagerUrl"] : (function () { throw new RuntimeError('Variable "consentManagerUrl" does not exist.', 60, $this->source); })())) . "\" target=\"_blank\" rel=\"noreferrer noopener\">"), "</a");
            echo "
            </p>
            ";
            // line 62
            if ((isset($context["consentManagerIsConnected"]) || array_key_exists("consentManagerIsConnected", $context) ? $context["consentManagerIsConnected"] : (function () { throw new RuntimeError('Variable "consentManagerIsConnected" does not exist.', 62, $this->source); })())) {
                // line 63
                echo "                <p> ";
                echo $this->env->getFilter('translate')->getCallable()("PrivacyManager_ConsentManagerConnected", (isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 63, $this->source); })()));
                echo "
                </p>
            ";
            }
            // line 66
            echo "        </div>
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if ((isset($context["ga3Used"]) || array_key_exists("ga3Used", $context) ? $context["ga3Used"] : (function () { throw new RuntimeError('Variable "ga3Used" does not exist.', 69, $this->source); })())) {
            // line 70
            echo "        <p></p><p></p>
        <div class=\"system notification notification-info\">
             ";
            // line 72
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_GADetected", "Google Analytics 3", "GA", "<a href=\"", "https://matomo.org/faq/how-to/migrate-from-google-analytics-3-to-matomo/", "\" target=\"_blank\" rel=\"noreferrer noopener\">", "</a>");
            echo "
        </div>
        ";
        }
        // line 75
        echo "
        ";
        // line 76
        if ((isset($context["ga4Used"]) || array_key_exists("ga4Used", $context) ? $context["ga4Used"] : (function () { throw new RuntimeError('Variable "ga4Used" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "        <p></p><p></p>
        <div class=\"system notification notification-info\">
            ";
            // line 79
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_GADetected", "Google Analytics 4", "GA", "<a href=\"", "https://matomo.org/faq/how-to/migrate-from-google-analytics-4-to-matomo/", "\" target=\"_blank\" rel=\"noreferrer noopener\">", "</a>");
            echo "
        </div>
        ";
        }
        // line 82
        echo "
        ";
        // line 83
        if ((isset($context["gtmUsed"]) || array_key_exists("gtmUsed", $context) ? $context["gtmUsed"] : (function () { throw new RuntimeError('Variable "gtmUsed" does not exist.', 83, $this->source); })())) {
            // line 84
            echo "        <p></p><p></p>
        <div class=\"system notification notification-info\">
            ";
            // line 86
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_GADetected", "Google Tag Manager", "GTM", "<a href=\"", "https://matomo.org/faq/tag-manager/migrating-from-google-tag-manager/", "\" target=\"_blank\" rel=\"noreferrer noopener\">", "</a>");
            echo "
        </div>
        ";
        }
        // line 89
        echo "
        <h3>";
        // line 90
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCode"), "html", null, true);
        echo "</h3>

        <p>";
        // line 92
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead", "&lt;/head&gt;");
        echo "</p>

        <pre piwik-select-on-focus>";
        // line 94
        echo (isset($context["jsTag"]) || array_key_exists("jsTag", $context) ? $context["jsTag"] : (function () { throw new RuntimeError('Variable "jsTag" does not exist.', 94, $this->source); })());
        echo "</pre>

        <p>";
        // line 96
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro5", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://developer.matomo.org/guides/tracking-javascript-guide\">", "</a>");
        echo "</p>

        <p>";
        // line 98
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_EndNote", (("<a href=\"" . $this->env->getFunction('linkTo')->getCallable()(["module" => "CoreAdminHome", "action" => "trackingCodeGenerator"])) . "\">"), "</a>");
        echo "</p>
    </div>

    <div id=\"mtm\" class=\"col s12\">
        ";
        // line 102
        if ((isset($context["tagManagerActive"]) || array_key_exists("tagManagerActive", $context) ? $context["tagManagerActive"] : (function () { throw new RuntimeError('Variable "tagManagerActive" does not exist.', 102, $this->source); })())) {
            // line 103
            echo "            ";
            echo $this->env->getFunction('postEvent')->getCallable()("Template.endTrackingCodePage");
            echo "
        ";
        } else {
            // line 105
            echo "                <h3>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataMatomoTagManager"), "html", null, true);
            echo "</h3>
                <p>";
            // line 106
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataMatomoTagManagerNotActive", "<a href=\"https://matomo.org/docs/tag-manager/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
            echo "</p>
        ";
        }
        // line 108
        echo "    </div>

    ";
        // line 110
        if ((isset($context["cloudflare"]) || array_key_exists("cloudflare", $context) ? $context["cloudflare"] : (function () { throw new RuntimeError('Variable "cloudflare" does not exist.', 110, $this->source); })())) {
            // line 111
            echo "        <div id=\"cloudflare\" class=\"col s12\">

            <p></p><p></p>
            <div class=\"system notification notification-info\">
                ";
            // line 115
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_CloudflareDetected", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/\">", "</a>");
            echo "
            </div>

            <div class=\"right\">
                <img src=\"plugins/SitesManager/images/cloudflare-icon.png\" style=\"height: 12rem;width: 12rem;margin-top: -4rem;\">
            </div>
            <p>";
            // line 121
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareIntro"), "html", null, true);
            echo "</p>
            <br>
            <p>";
            // line 123
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStepsIntro"), "html", null, true);
            echo "</p>
            <ol style=\"list-style: decimal;list-style-position: inside;\">
                <li>";
            // line 125
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep1", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://dash.cloudflare.com/\">", "</a>");
            echo "</li>
                <li>";
            // line 126
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep2"), "html", null, true);
            echo "</li>
                <li>";
            // line 127
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep3"), "html", null, true);
            echo "</li>
                <li>";
            // line 128
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep4"), "html", null, true);
            echo "</li>
                <li>";
            // line 129
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep5"), "html", null, true);
            echo "</li>
                <li>";
            // line 130
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep6"), "html", null, true);
            echo "</li>
                <li>";
            // line 131
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep7"), "html", null, true);
            echo "<div style=\"text-indent: 1.2rem;\">Matomo URL: <code vue-directive=\"CoreHome.SelectOnFocus\">";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 131, $this->source); })()), "html", null, true);
            echo "</code></div><div style=\"text-indent: 1.2rem;\">";
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourSiteId", (("<code vue-directive=\"CoreHome.SelectOnFocus\">" . (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 131, $this->source); })())) . "</code>"));
            echo "</div></li>
                <li>";
            // line 132
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep8"), "html", null, true);
            echo "</li>
                <li>";
            // line 133
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStep9"), "html", null, true);
            echo "</li>
            </ol>
            <br>
            <p>";
            // line 136
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareFollowStepCompleted", "<strong>", "</strong>");
            echo "</p>
        </div>
    ";
        }
        // line 139
        echo "
    <div id=\"other\" class=\"col s12\">
        <h3>";
        // line 141
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalytics"), "html", null, true);
        echo "</h3>
        <p>";
        // line 142
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalyticsDescription", "<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

        <h3>";
        // line 144
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKs"), "html", null, true);
        echo "</h3>
        <p>";
        // line 145
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKsDescription", "<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

        <h3>";
        // line 147
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApi"), "html", null, true);
        echo "</h3>
        <p>";
        // line 148
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApiDescription", "<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

        <h3>";
        // line 150
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManager"), "html", null, true);
        echo "</h3>
        <p>";
        // line 151
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManagerDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager\">", "</a>");
        echo "</p>

        <h3>";
        // line 153
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplication"), "html", null, true);
        echo "</h3>
        <p>";
        // line 154
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplicationDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org/guides/spa-tracking\">", "</a>");
        echo "</p>

        <h3>";
        // line 156
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflare"), "html", null, true);
        echo "</h3>
        <p>";
        // line 157
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataCloudflareDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/\">", "</a>");
        echo "</p>

        ";
        // line 159
        if ((isset($context["googleAnalyticsImporterMessage"]) || array_key_exists("googleAnalyticsImporterMessage", $context))) {
            // line 160
            echo "            ";
            echo (isset($context["googleAnalyticsImporterMessage"]) || array_key_exists("googleAnalyticsImporterMessage", $context) ? $context["googleAnalyticsImporterMessage"] : (function () { throw new RuntimeError('Variable "googleAnalyticsImporterMessage" does not exist.', 160, $this->source); })());
            echo "
        ";
        }
        // line 162
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SitesManager/_siteWithoutDataTabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 162,  433 => 160,  431 => 159,  426 => 157,  422 => 156,  417 => 154,  413 => 153,  408 => 151,  404 => 150,  399 => 148,  395 => 147,  390 => 145,  386 => 144,  381 => 142,  377 => 141,  373 => 139,  367 => 136,  361 => 133,  357 => 132,  349 => 131,  345 => 130,  341 => 129,  337 => 128,  333 => 127,  329 => 126,  325 => 125,  320 => 123,  315 => 121,  306 => 115,  300 => 111,  298 => 110,  294 => 108,  289 => 106,  284 => 105,  278 => 103,  276 => 102,  269 => 98,  264 => 96,  259 => 94,  254 => 92,  249 => 90,  246 => 89,  240 => 86,  236 => 84,  234 => 83,  231 => 82,  225 => 79,  221 => 77,  219 => 76,  216 => 75,  210 => 72,  206 => 70,  204 => 69,  201 => 68,  197 => 66,  190 => 63,  188 => 62,  183 => 60,  179 => 58,  177 => 57,  171 => 53,  166 => 51,  162 => 50,  158 => 49,  153 => 47,  149 => 46,  132 => 33,  125 => 31,  122 => 30,  116 => 28,  114 => 27,  108 => 25,  106 => 24,  102 => 23,  91 => 18,  81 => 16,  79 => 15,  73 => 14,  63 => 13,  53 => 12,  47 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.tabs').tabs();
    });
</script>

{% set columnClass = activeTab ? 's2' : 's3' %}

<div class=\"row\">
    <div class=\"col s12\">
        <ul class=\"tabs\">
            <li class=\"tab col {{ columnClass }}\"><a {% if siteType != constant('Piwik\\\\Plugins\\\\SitesManager\\\\SitesManager::SITE_TYPE_UNKNOWN') and (consentManagerName == false) and (activeTab == '') %} class=\"active\" {% endif %} href=\"#integrations\">{{ 'SitesManager_Integrations'|translate }}</a></li>
            <li class=\"tab col {{ columnClass }}\"><a {% if (siteType == constant('Piwik\\\\Plugins\\\\SitesManager\\\\SitesManager::SITE_TYPE_UNKNOWN') and (activeTab == '')) or consentManagerName %} class=\"active\" {% endif %} href=\"#tracking-code\">{{ 'CoreAdminHome_TrackingCode'|translate }}</a></li>
            <li class=\"tab col {{ columnClass }}\"><a href=\"#mtm\">{{ 'SitesManager_SiteWithoutDataMatomoTagManager'|translate }}</a></li>
            {% if cloudflare %}
                <li class=\"tab col s2\"><a {% if activeTab == 'cloudflare' %} class=\"active\" {% endif %} href=\"#cloudflare\">{{ 'SitesManager_SiteWithoutDataCloudflare'|translate }}</a></li>
            {% endif %}
            <li class=\"tab col {{ columnClass }}\"><a href=\"#other\">{{ 'SitesManager_SiteWithoutDataOtherWays'|translate }}</a></li>
        </ul>
    </div>

    <div id=\"integrations\" class=\"col s12\">
        <h3>{{ 'SitesManager_Integrations'|translate }}</h3>
        {% if instruction %}
            <p>{{ instruction|raw }}</p>

            {% if gtmUsed %}
                <p>{{ 'SitesManager_SiteWithoutDataDetectedGtm'|translate(siteType|capitalize, '<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager\">','</a>')|raw }}</p>
            {% endif %}

            <p>{{ 'SitesManager_SiteWithoutDataOtherIntegrations'|translate }}: {{ 'CoreAdminHome_JSTrackingIntro3a'|translate('<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
        {% else %}
            <p>{{ 'SitesManager_InstallationGuidesIntro'|translate }}

            <p>
                <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/'>WordPress</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-integrate-matomo-with-squarespace-website/'>Squarespace</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-wix/'>Wix</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/how-to-install/faq_19424/'>SharePoint</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-joomla/'>Joomla</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-shopify-store/'>Shopify</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/'>Google Tag Manager</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/'>Cloudflare</a>
            </p>

            <p>{{ 'CoreAdminHome_JSTrackingIntro3a'|translate('<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
            <p>{{ 'CoreAdminHome_JSTrackingIntro3b'|translate|raw }}</p>
            <br>
            <p>{{ 'SitesManager_ExtraInformationNeeded'|translate }}</p>
            <p>Matomo URL: <code piwik-select-on-focus>{{ piwikUrl }}</code></p>
            <p>{{ 'SitesManager_EmailInstructionsYourSiteId'|translate('<code piwik-select-on-focus>' ~ idSite ~ '</code>')|raw }}</p>
        {% endif %}
    </div>

    <div id=\"tracking-code\" class=\"col s12\">

        {% if consentManagerName %}
        <p></p><p></p>
        <div class=\"system notification notification-info\">
            <p> {{ 'PrivacyManager_ConsentManagerDetected'|translate(consentManagerName, '<a href=\"' ~ consentManagerUrl ~ '\" target=\"_blank\" rel=\"noreferrer noopener\">', '</a')|raw }}
            </p>
            {% if consentManagerIsConnected %}
                <p> {{ 'PrivacyManager_ConsentManagerConnected'|translate(consentManagerName)|raw }}
                </p>
            {% endif %}
        </div>
        {% endif %}

        {% if ga3Used %}
        <p></p><p></p>
        <div class=\"system notification notification-info\">
             {{ 'SitesManager_GADetected'|translate('Google Analytics 3', 'GA', '<a href=\"', 'https://matomo.org/faq/how-to/migrate-from-google-analytics-3-to-matomo/', '\" target=\"_blank\" rel=\"noreferrer noopener\">', '</a>')|raw }}
        </div>
        {% endif %}

        {% if ga4Used %}
        <p></p><p></p>
        <div class=\"system notification notification-info\">
            {{ 'SitesManager_GADetected'|translate('Google Analytics 4', 'GA', '<a href=\"', 'https://matomo.org/faq/how-to/migrate-from-google-analytics-4-to-matomo/', '\" target=\"_blank\" rel=\"noreferrer noopener\">', '</a>')|raw }}
        </div>
        {% endif %}

        {% if gtmUsed %}
        <p></p><p></p>
        <div class=\"system notification notification-info\">
            {{ 'SitesManager_GADetected'|translate('Google Tag Manager', 'GTM', '<a href=\"', 'https://matomo.org/faq/tag-manager/migrating-from-google-tag-manager/', '\" target=\"_blank\" rel=\"noreferrer noopener\">', '</a>')|raw }}
        </div>
        {% endif %}

        <h3>{{ 'CoreAdminHome_TrackingCode'|translate }}</h3>

        <p>{{ 'CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead'|translate(\"&lt;/head&gt;\")|raw }}</p>

        <pre piwik-select-on-focus>{{ jsTag|raw }}</pre>

        <p>{{ 'CoreAdminHome_JSTrackingIntro5'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://developer.matomo.org/guides/tracking-javascript-guide\">','</a>')|raw }}</p>

        <p>{{ 'CoreAdminHome_JSTracking_EndNote'|translate('<a href=\"' ~ linkTo({'module': 'CoreAdminHome', 'action': 'trackingCodeGenerator'}) ~'\">','</a>')|raw }}</p>
    </div>

    <div id=\"mtm\" class=\"col s12\">
        {% if tagManagerActive %}
            {{ postEvent('Template.endTrackingCodePage') }}
        {% else %}
                <h3>{{ 'SitesManager_SiteWithoutDataMatomoTagManager'|translate }}</h3>
                <p>{{ 'SitesManager_SiteWithoutDataMatomoTagManagerNotActive'|translate('<a href=\"https://matomo.org/docs/tag-manager/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>
        {% endif %}
    </div>

    {% if cloudflare %}
        <div id=\"cloudflare\" class=\"col s12\">

            <p></p><p></p>
            <div class=\"system notification notification-info\">
                {{ 'SitesManager_CloudflareDetected'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/\">','</a>')|raw }}
            </div>

            <div class=\"right\">
                <img src=\"plugins/SitesManager/images/cloudflare-icon.png\" style=\"height: 12rem;width: 12rem;margin-top: -4rem;\">
            </div>
            <p>{{ 'SitesManager_SiteWithoutDataCloudflareIntro'|translate }}</p>
            <br>
            <p>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStepsIntro'|translate }}</p>
            <ol style=\"list-style: decimal;list-style-position: inside;\">
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep1'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://dash.cloudflare.com/\">','</a>')|raw }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep2'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep3'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep4'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep5'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep6'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep7'|translate }}<div style=\"text-indent: 1.2rem;\">Matomo URL: <code vue-directive=\"CoreHome.SelectOnFocus\">{{ piwikUrl }}</code></div><div style=\"text-indent: 1.2rem;\">{{ 'SitesManager_EmailInstructionsYourSiteId'|translate('<code vue-directive=\"CoreHome.SelectOnFocus\">' ~ idSite ~ '</code>')|raw }}</div></li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep8'|translate }}</li>
                <li>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStep9'|translate }}</li>
            </ol>
            <br>
            <p>{{ 'SitesManager_SiteWithoutDataCloudflareFollowStepCompleted'|translate('<strong>','</strong>')|raw }}</p>
        </div>
    {% endif %}

    <div id=\"other\" class=\"col s12\">
        <h3>{{ 'SitesManager_LogAnalytics'|translate }}</h3>
        <p>{{ 'SitesManager_LogAnalyticsDescription'|translate('<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>

        <h3>{{ 'SitesManager_MobileAppsAndSDKs'|translate }}</h3>
        <p>{{ 'SitesManager_MobileAppsAndSDKsDescription'|translate('<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

        <h3>{{ 'CoreAdminHome_HttpTrackingApi'|translate }}</h3>
        <p>{{ 'CoreAdminHome_HttpTrackingApiDescription'|translate('<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

        <h3>{{ 'SitesManager_SiteWithoutDataGoogleTagManager'|translate }}</h3>
        <p>{{ 'SitesManager_SiteWithoutDataGoogleTagManagerDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager\">','</a>')|raw }}</p>

        <h3>{{ 'SitesManager_SiteWithoutDataSinglePageApplication'|translate }}</h3>
        <p>{{ 'SitesManager_SiteWithoutDataSinglePageApplicationDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org/guides/spa-tracking\">','</a>')|raw }}</p>

        <h3>{{ 'SitesManager_SiteWithoutDataCloudflare'|translate }}</h3>
        <p>{{ 'SitesManager_SiteWithoutDataCloudflareDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/\">','</a>')|raw }}</p>

        {% if googleAnalyticsImporterMessage is defined %}
            {{ googleAnalyticsImporterMessage|raw }}
        {% endif %}
    </div>
</div>
", "@SitesManager/_siteWithoutDataTabs.twig", "/var/www/html/nes/analytics/matomo/plugins/SitesManager/templates/_siteWithoutDataTabs.twig");
    }
}
