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

/* pokemon/index.html.twig */
class __TwigTemplate_df9db26223f71b5e4d3ee8054c62f5bc extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pokemon/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Liste des Pokémons</title>
</head>
<body>
    <h1>Liste des Pokémons</h1>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pokemons"]) || array_key_exists("pokemons", $context) ? $context["pokemons"] : (function () { throw new RuntimeError('Variable "pokemons" does not exist.', 8, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pokemon"]) {
            // line 9
            yield "        <h2>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "name", [], "any", false, false, false, 9), "html", null, true);
            yield "</h2>
        <p>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pokemon"], "type", [], "any", false, false, false, 10), "html", null, true);
            yield "</p>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            yield "        <p>Aucun Pokémon trouvé.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pokemon'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pokemon/index.html.twig";
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
        return array (  78 => 14,  71 => 12,  64 => 10,  59 => 9,  54 => 8,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Liste des Pokémons</title>
</head>
<body>
    <h1>Liste des Pokémons</h1>
    {% for pokemon in pokemons %}
        <h2>{{ pokemon.name }}</h2>
        <p>{{ pokemon.type }}</p>
    {% else %}
        <p>Aucun Pokémon trouvé.</p>
    {% endfor %}
</body>
</html>
", "pokemon/index.html.twig", "/Users/mohamedkerrouche/Documents/Development/Ynov/Pokemon/templates/pokemon/index.html.twig");
    }
}
