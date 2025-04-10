<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/guarder/templates/block/block--guarder-slider.html.twig */
class __TwigTemplate_6cab68dd3b4f9e528191296c9d83d39e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "
<section class=\" slider_section\">
    <div class=\"carousel slide\" id=\"carouselExampleIndicators\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            <div class=\"detail-box\">
                                <h1>
                                    Your Saftey&nbsp;<br>
                                    <span>Our Responsibility&nbsp;</span>
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod magna aliqua. Ut enim ad minim veniam
                                </p>
                                <div class=\"btn-box\">
                                    <a class=\"btn-1\" href=\"\">Read more </a><a class=\"btn-2\" href=\"\">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            <div class=\"detail-box\">
                                <h1>
                                    Your Saftey&nbsp;<br>
                                    <span>Our Responsibility&nbsp;</span>
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod magna aliqua. Ut enim ad minim veniam
                                </p>
                                <div class=\"btn-box\">
                                    <a class=\"btn-1\" href=\"\">Read more </a><a class=\"btn-2\" href=\"\">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            <div class=\"detail-box\">
                                <h1>
                                    Your Saftey&nbsp;<br>
                                    <span>Our Responsibility&nbsp;</span>
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod magna aliqua. Ut enim ad minim veniam
                                </p>
                                <div class=\"btn-box\">
                                    <a class=\"btn-1\" href=\"\">Read more </a><a class=\"btn-2\" href=\"\">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container idicator_container\">
            <ol class=\"carousel-indicators\">
                <li class=\"active\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\">
                    &nbsp;
                </li>
                <li class=\"\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\">
                    &nbsp;
                </li>
                <li class=\"\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\">
                    &nbsp;
                </li>
            </ol>
        </div>
    </div>
</section>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/guarder/templates/block/block--guarder-slider.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<section class=\" slider_section\">
    <div class=\"carousel slide\" id=\"carouselExampleIndicators\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            <div class=\"detail-box\">
                                <h1>
                                    Your Saftey&nbsp;<br>
                                    <span>Our Responsibility&nbsp;</span>
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod magna aliqua. Ut enim ad minim veniam
                                </p>
                                <div class=\"btn-box\">
                                    <a class=\"btn-1\" href=\"\">Read more </a><a class=\"btn-2\" href=\"\">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            <div class=\"detail-box\">
                                <h1>
                                    Your Saftey&nbsp;<br>
                                    <span>Our Responsibility&nbsp;</span>
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod magna aliqua. Ut enim ad minim veniam
                                </p>
                                <div class=\"btn-box\">
                                    <a class=\"btn-1\" href=\"\">Read more </a><a class=\"btn-2\" href=\"\">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            <div class=\"detail-box\">
                                <h1>
                                    Your Saftey&nbsp;<br>
                                    <span>Our Responsibility&nbsp;</span>
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod magna aliqua. Ut enim ad minim veniam
                                </p>
                                <div class=\"btn-box\">
                                    <a class=\"btn-1\" href=\"\">Read more </a><a class=\"btn-2\" href=\"\">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container idicator_container\">
            <ol class=\"carousel-indicators\">
                <li class=\"active\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\">
                    &nbsp;
                </li>
                <li class=\"\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\">
                    &nbsp;
                </li>
                <li class=\"\" data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\">
                    &nbsp;
                </li>
            </ol>
        </div>
    </div>
</section>", "themes/guarder/templates/block/block--guarder-slider.html.twig", "/app/web/themes/guarder/templates/block/block--guarder-slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
