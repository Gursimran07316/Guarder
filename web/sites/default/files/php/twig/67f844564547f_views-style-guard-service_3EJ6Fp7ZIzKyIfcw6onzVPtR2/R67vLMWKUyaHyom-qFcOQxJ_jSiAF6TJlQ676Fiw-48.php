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

/* modules/guard/templates/views-style-guard-services.html.twig */
class __TwigTemplate_9bb08355b9dc85f8ccdf2bd487b237ca extends Template
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
        // line 16
        yield "<section class=\"service_section layout_padding\">
    <div class=\"container\">
      <div class=\"heading_container heading_center\">
        <h2>
          Our services
        </h2>
      </div>
<div class=\"row\" >

  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            yield "  
      
      <div class=\"col-md-4\">
          <div class=\"box \">
           <div class=\"img-box\">
              ";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::source($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "url", [], "any", false, false, true, 31)));
            yield "
            </div>
            <div class=\"detail-box\">
              <h6>
                ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 35), "html", null, true);
            yield "
              </h6>
              <p>
                ";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "body", [], "any", false, false, true, 38), "html", null, true);
            yield "
              </p>
              <a href=\"\">
                Read More
              </a>
            </div>
          </div>
        </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "  </div>
     </div>
     </section>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/guard/templates/views-style-guard-services.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  94 => 47,  79 => 38,  73 => 35,  66 => 31,  59 => 26,  55 => 25,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a view template to display a list of rows.
 *
 * Available variables:
 * - attributes: HTML attributes for the container.
 * - rows: A list of rows.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's contents.
 * - title: The title of this group of rows. May be empty.
 *
 * @see template_preprocess_views_style_guard_services()
 */
#}
<section class=\"service_section layout_padding\">
    <div class=\"container\">
      <div class=\"heading_container heading_center\">
        <h2>
          Our services
        </h2>
      </div>
<div class=\"row\" >

  {% for row in rows %}
  
      
      <div class=\"col-md-4\">
          <div class=\"box \">
           <div class=\"img-box\">
              {{ source(row.url) }}
            </div>
            <div class=\"detail-box\">
              <h6>
                {{row.title}}
              </h6>
              <p>
                {{row.body}}
              </p>
              <a href=\"\">
                Read More
              </a>
            </div>
          </div>
        </div>
  {% endfor %}
  </div>
     </div>
     </section>", "modules/guard/templates/views-style-guard-services.html.twig", "/app/web/modules/guard/templates/views-style-guard-services.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 25];
        static $filters = ["escape" => 35];
        static $functions = ["source" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['source'],
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
