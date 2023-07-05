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

/* @ProfessionalServices/promoSessionRecordings.twig */
class __TwigTemplate_98a27f8e06a7c406f50098bf722a651884fab4acc6e0d9eff3f2b1feda1aa6c0 extends Template
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
        echo "<p class=\"alert-info alert\">Did you know?
    With <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/recommends/heatmap-session-recording-learn-more/\">Heatmap & Session Recording</a> you can record all clicks, mouse movements, scrolls and form interactions of your visitors and replay them in a video to truly understand your visitors.
</p>
";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoSessionRecordings.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"alert-info alert\">Did you know?
    With <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/recommends/heatmap-session-recording-learn-more/\">Heatmap & Session Recording</a> you can record all clicks, mouse movements, scrolls and form interactions of your visitors and replay them in a video to truly understand your visitors.
</p>
", "@ProfessionalServices/promoSessionRecordings.twig", "/var/www/html/nes/analytics/matomo/plugins/ProfessionalServices/templates/promoSessionRecordings.twig");
    }
}
