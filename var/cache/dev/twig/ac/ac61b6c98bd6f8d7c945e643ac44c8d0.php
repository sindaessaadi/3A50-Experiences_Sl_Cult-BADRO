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

/* matching/index.html.twig */
class __TwigTemplate_5dbeda072835aecd3516d758303099c5 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matching/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matching/index.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 169
        yield "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Matching index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "  

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #1c1e21;
            font-size: 28px;
            text-align: center;
            margin-top: 20px;
            font-weight: 600;
        }

        /* Blue Action Bar */
        .action-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            background-color: #1877f2;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            margin: 30px auto;
            width: fit-content;
        }

        .action-bar a {
            background-color: #fff;
            color: #1877f2;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .action-bar a:hover {
            background-color: #e6e6e6;
            transform: scale(1.05);
        }

        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .table:hover {
            transform: scale(1.01);
        }

        .table th, .table td {
            padding: 12px 16px;
            text-align: left;
            font-size: 14px;
            color: #1c1e21;
        }

        .table th {
            background-color: #f5f6f7;
            font-weight: bold;
        }

        .table tr:hover {
            background-color: #f0f2f5;
            cursor: pointer;
        }

        .table td a {
            color: #fff;
            background-color: #1877f2;
            padding: 10px 15px;
            border-radius: 4px;
            font-size: 14px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }

        .table td a:hover {
            background-color: #0d6efd;
            transform: scale(1.05);
        }

        .button-container {
            display: flex;
            gap: 10px;
        }

        .button-container button,
        .button-container a {
            background-color: #1877f2;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .button-container button:hover,
        .button-container a:hover {
            background-color: #0d6efd;
            transform: scale(1.05);
        }
    </style>

    <h1>Matching index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Score_compatibilite</th>
                <th>Status</th>
                <th>Date_matching</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matchings"]) || array_key_exists("matchings", $context) ? $context["matchings"] : (function () { throw new RuntimeError('Variable "matchings" does not exist.', 138, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["matching"]) {
            // line 139
            yield "            <tr>
                <td>";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matching"], "id", [], "any", false, false, false, 140), "html", null, true);
            yield "</td>
                <td>";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matching"], "scoreCompatibilite", [], "any", false, false, false, 141), "html", null, true);
            yield "</td>
                <td>";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["matching"], "status", [], "any", false, false, false, 142), "html", null, true);
            yield "</td>
                <td>";
            // line 143
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["matching"], "dateMatching", [], "any", false, false, false, 143)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["matching"], "dateMatching", [], "any", false, false, false, 143), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>
                    <div class=\"button-container\">
                        <a href=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matching_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matching"], "id", [], "any", false, false, false, 146)]), "html", null, true);
            yield "\">Show</a>
                        <a href=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matching_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matching"], "id", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\">Edit</a>
                        <form action=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matching_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["matching"], "id", [], "any", false, false, false, 148)]), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"return confirm('Are you sure?');\">
                            <button type=\"submit\">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 158
        if (!$context['_iterated']) {
            // line 155
            yield "            <tr>
                <td colspan=\"5\">No records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['matching'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "        </tbody>
    </table>

    <!-- Blue Horizontal Action Bar -->
    <div class=\"action-bar\">
        <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matching_new");
        yield "\">Create New</a>
        <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "matching/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  307 => 165,  303 => 164,  296 => 159,  287 => 155,  285 => 158,  274 => 148,  270 => 147,  266 => 146,  260 => 143,  256 => 142,  252 => 141,  248 => 140,  245 => 139,  240 => 138,  104 => 4,  91 => 3,  68 => 1,  57 => 169,  55 => 3,  52 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block title %}Matching index{% endblock %}

{% block body %}
  

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #1c1e21;
            font-size: 28px;
            text-align: center;
            margin-top: 20px;
            font-weight: 600;
        }

        /* Blue Action Bar */
        .action-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            background-color: #1877f2;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            margin: 30px auto;
            width: fit-content;
        }

        .action-bar a {
            background-color: #fff;
            color: #1877f2;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .action-bar a:hover {
            background-color: #e6e6e6;
            transform: scale(1.05);
        }

        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .table:hover {
            transform: scale(1.01);
        }

        .table th, .table td {
            padding: 12px 16px;
            text-align: left;
            font-size: 14px;
            color: #1c1e21;
        }

        .table th {
            background-color: #f5f6f7;
            font-weight: bold;
        }

        .table tr:hover {
            background-color: #f0f2f5;
            cursor: pointer;
        }

        .table td a {
            color: #fff;
            background-color: #1877f2;
            padding: 10px 15px;
            border-radius: 4px;
            font-size: 14px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
        }

        .table td a:hover {
            background-color: #0d6efd;
            transform: scale(1.05);
        }

        .button-container {
            display: flex;
            gap: 10px;
        }

        .button-container button,
        .button-container a {
            background-color: #1877f2;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .button-container button:hover,
        .button-container a:hover {
            background-color: #0d6efd;
            transform: scale(1.05);
        }
    </style>

    <h1>Matching index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Score_compatibilite</th>
                <th>Status</th>
                <th>Date_matching</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for matching in matchings %}
            <tr>
                <td>{{ matching.id }}</td>
                <td>{{ matching.scoreCompatibilite }}</td>
                <td>{{ matching.status }}</td>
                <td>{{ matching.dateMatching ? matching.dateMatching|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <div class=\"button-container\">
                        <a href=\"{{ path('app_matching_show', {'id': matching.id}) }}\">Show</a>
                        <a href=\"{{ path('app_matching_edit', {'id': matching.id}) }}\">Edit</a>
                        <form action=\"{{ path('app_matching_delete', {'id': matching.id}) }}\" method=\"post\" onsubmit=\"return confirm('Are you sure?');\">
                            <button type=\"submit\">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">No records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <!-- Blue Horizontal Action Bar -->
    <div class=\"action-bar\">
        <a href=\"{{ path('app_matching_new') }}\">Create New</a>
        <a href=\"{{ path('app_home') }}\">Home</a>
    </div>

{% endblock %}
    ", "matching/index.html.twig", "C:\\Users\\jacem\\Downloads\\badro\\templates\\matching\\index.html.twig");
    }
}
