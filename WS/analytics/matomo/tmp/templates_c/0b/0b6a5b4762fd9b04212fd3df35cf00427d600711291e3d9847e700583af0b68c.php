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

/* @DevicesDetection/_profileSummary.twig */
class __TwigTemplate_546b19ff7f00a51f7ac13f46dff9cee4b11a77098703a8302d9b91adce157fae extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["visitorData"] ?? null), "devices", [], "any", true, true, false, 1)) {
            // line 2
            echo "    <div class=\"visitor-profile-summary visitor-profile-devices\">
        <h1>";
            // line 3
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_Devices"), "html", null, true);
            echo "</h1>
        <div>";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["visitorData"]) || array_key_exists("visitorData", $context) ? $context["visitorData"] : (function () { throw new RuntimeError('Variable "visitorData" does not exist.', 5, $this->source); })()), "devices", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 6
                echo "<p>
                    <img height=\"16\" src=\"";
                // line 7
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "icon", [], "any", false, false, false, 7), "html", null, true);
                echo "\" />
                    ";
                // line 8
                if (((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "devices", [], "any", false, false, false, 8)), 1)) && twig_in_filter($this->env->getFilter('translate')->getCallable()("General_Unknown"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "devices", [], "any", false, false, false, 8), 0, [], "array", false, false, false, 8), "name", [], "any", false, false, false, 8)))) {
                    // line 9
                    echo "                        <span>";
                    echo $this->env->getFilter('translate')->getCallable()("DevicesDetection_XVisitsFromDevices", (("<strong>" . twig_get_attribute($this->env, $this->source, $context["entry"], "count", [], "any", false, false, false, 9)) . "</strong>"), (("<strong>" . twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 9)) . "</strong>"));
                    echo "
                    ";
                } else {
                    // line 11
                    echo "                    <span>";
                    echo $this->env->getFilter('translate')->getCallable()("DevicesDetection_XVisitsFromDevices", (("<strong>" . twig_get_attribute($this->env, $this->source, $context["entry"], "count", [], "any", false, false, false, 11)) . "</strong>"), (("<strong>" . twig_get_attribute($this->env, $this->source, $context["entry"], "type", [], "any", false, false, false, 11)) . "</strong>"));
                    echo ":
                        ";
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entry"], "devices", [], "any", false, false, false, 12));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
                        // line 13
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "name", [], "any", false, false, false, 13), "html", null, true);
                        echo " (";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["device"], "count", [], "any", false, false, false, 13), "html", null, true);
                        echo "x)";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 13)) {
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "</span>
                    ";
                }
                // line 17
                echo "                </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "</div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@DevicesDetection/_profileSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 19,  111 => 17,  107 => 15,  87 => 13,  70 => 12,  65 => 11,  59 => 9,  57 => 8,  53 => 7,  50 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if visitorData.devices is defined %}
    <div class=\"visitor-profile-summary visitor-profile-devices\">
        <h1>{{ 'DevicesDetection_Devices'|translate }}</h1>
        <div>
            {%- for entry in visitorData.devices -%}
                <p>
                    <img height=\"16\" src=\"{{ entry.icon }}\" />
                    {% if entry.devices|length == 1 and 'General_Unknown'|translate in entry.devices[0].name %}
                        <span>{{ 'DevicesDetection_XVisitsFromDevices'|translate('<strong>' ~ entry.count ~ '</strong>', '<strong>' ~ entry.type ~ '</strong>')|raw }}
                    {% else %}
                    <span>{{ 'DevicesDetection_XVisitsFromDevices'|translate('<strong>' ~ entry.count ~ '</strong>', '<strong>' ~ entry.type ~ '</strong>')|raw }}:
                        {% for device in entry.devices -%}
                            {{ device.name }} ({{ device.count }}x){% if not loop.last %}, {% endif %}
                        {%- endfor -%}
                    </span>
                    {% endif %}
                </p>
            {%- endfor -%}
        </div>
    </div>
{% endif %}", "@DevicesDetection/_profileSummary.twig", "/var/www/html/nes/analytics/matomo/plugins/DevicesDetection/templates/_profileSummary.twig");
    }
}
