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

/* core/modules/system/templates/select.html.twig */
class __TwigTemplate_04d3b47210f7f71e9787a65e8a0c1cda extends Template
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
        // line 15
        yield "<select";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 17
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, true, 17) == "optgroup")) {
                // line 18
                yield "      <optgroup label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 18), "html", null, true);
                yield "\">
        ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, true, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                    // line 20
                    yield "          <option value=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "value", [], "any", false, false, true, 20), "html", null, true);
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "selected", [], "any", false, false, true, 20)) ? (" selected=\"selected\"") : ("")));
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 20), "html", null, true);
                    yield "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sub_option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                yield "      </optgroup>
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 23
$context["option"], "type", [], "any", false, false, true, 23) == "option")) {
                // line 24
                yield "      <option value=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 24), "html", null, true);
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 24)) ? (" selected=\"selected\"") : ("")));
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 24), "html", null, true);
                yield "</option>
    ";
            }
            // line 26
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "</select>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "options"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/system/templates/select.html.twig";
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
        return array (  99 => 27,  93 => 26,  83 => 24,  81 => 23,  78 => 22,  65 => 20,  61 => 19,  56 => 18,  53 => 17,  49 => 16,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/system/templates/select.html.twig", "/var/www/html/web/core/modules/system/templates/select.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 16, "if" => 17];
        static $filters = ["escape" => 15];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
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
