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

/* matching/show.html.twig */
class __TwigTemplate_7fabedf7a9673ba512006e079a70fd60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matching/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matching/show.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
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

        yield "Matching";
        
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
        yield "    <style>
        /* Facebook-inspired styles for the matching page */

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

        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            border-radius: 8px;
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
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
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
            display: inline-block;
            margin-right: 10px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .table td a:hover {
            background-color: #0d6efd;
            transform: scale(1.05); /* Slightly grow on hover */
        }

        .table td a:last-child {
            margin-right: 0;
        }

        .btn-link {
            color: #1877f2;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        .delete-button {
            background-color: #f44336;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }

        .delete-button:hover {
            background-color: #d32f2f;
        }

        .delete-button:active {
            background-color: #c62828;
        }

        /* Container styling for proper alignment */
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }

            .table th, .table td {
                font-size: 12px;
            }

            .btn-link {
                font-size: 12px;
            }

            .delete-button {
                font-size: 12px;
            }
        }
    </style>

    <div class=\"container\">
        <h1>Matching</h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matching"]) || array_key_exists("matching", $context) ? $context["matching"] : (function () { throw new RuntimeError('Variable "matching" does not exist.', 142, $this->source); })()), "id", [], "any", false, false, false, 142), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Score_compatibilite</th>
                    <td>";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matching"]) || array_key_exists("matching", $context) ? $context["matching"] : (function () { throw new RuntimeError('Variable "matching" does not exist.', 146, $this->source); })()), "scoreCompatibilite", [], "any", false, false, false, 146), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matching"]) || array_key_exists("matching", $context) ? $context["matching"] : (function () { throw new RuntimeError('Variable "matching" does not exist.', 150, $this->source); })()), "status", [], "any", false, false, false, 150), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Date_matching</th>
                    <td>";
        // line 154
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matching"]) || array_key_exists("matching", $context) ? $context["matching"] : (function () { throw new RuntimeError('Variable "matching" does not exist.', 154, $this->source); })()), "dateMatching", [], "any", false, false, false, 154)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matching"]) || array_key_exists("matching", $context) ? $context["matching"] : (function () { throw new RuntimeError('Variable "matching" does not exist.', 154, $this->source); })()), "dateMatching", [], "any", false, false, false, 154), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                </tr>
            </tbody>
        </table>

        <div class=\"button-container\">
            <a class=\"btn-link\" href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matching_index");
        yield "\">Back to list</a>
            <a class=\"btn-link\" href=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matching_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matching"]) || array_key_exists("matching", $context) ? $context["matching"] : (function () { throw new RuntimeError('Variable "matching" does not exist.', 161, $this->source); })()), "id", [], "any", false, false, false, 161)]), "html", null, true);
        yield "\">Edit</a>

            <!-- Delete button -->
            <form action=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matching_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matching"]) || array_key_exists("matching", $context) ? $context["matching"] : (function () { throw new RuntimeError('Variable "matching" does not exist.', 164, $this->source); })()), "id", [], "any", false, false, false, 164)]), "html", null, true);
        yield "\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                <button type=\"submit\" class=\"delete-button\">Delete</button>
            </form>
        </div>
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
        return "matching/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  282 => 164,  276 => 161,  272 => 160,  263 => 154,  256 => 150,  249 => 146,  242 => 142,  102 => 4,  89 => 3,  66 => 1,  55 => 3,  52 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block title %}Matching{% endblock %}

{% block body %}
    <style>
        /* Facebook-inspired styles for the matching page */

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

        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            border-radius: 8px;
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
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
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
            display: inline-block;
            margin-right: 10px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .table td a:hover {
            background-color: #0d6efd;
            transform: scale(1.05); /* Slightly grow on hover */
        }

        .table td a:last-child {
            margin-right: 0;
        }

        .btn-link {
            color: #1877f2;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        .delete-button {
            background-color: #f44336;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }

        .delete-button:hover {
            background-color: #d32f2f;
        }

        .delete-button:active {
            background-color: #c62828;
        }

        /* Container styling for proper alignment */
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }

            .table th, .table td {
                font-size: 12px;
            }

            .btn-link {
                font-size: 12px;
            }

            .delete-button {
                font-size: 12px;
            }
        }
    </style>

    <div class=\"container\">
        <h1>Matching</h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>{{ matching.id }}</td>
                </tr>
                <tr>
                    <th>Score_compatibilite</th>
                    <td>{{ matching.scoreCompatibilite }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ matching.status }}</td>
                </tr>
                <tr>
                    <th>Date_matching</th>
                    <td>{{ matching.dateMatching ? matching.dateMatching|date('Y-m-d H:i:s') : '' }}</td>
                </tr>
            </tbody>
        </table>

        <div class=\"button-container\">
            <a class=\"btn-link\" href=\"{{ path('app_matching_index') }}\">Back to list</a>
            <a class=\"btn-link\" href=\"{{ path('app_matching_edit', {'id': matching.id}) }}\">Edit</a>

            <!-- Delete button -->
            <form action=\"{{ path('app_matching_delete', {'id': matching.id}) }}\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                <button type=\"submit\" class=\"delete-button\">Delete</button>
            </form>
        </div>
    </div>
{% endblock %}
", "matching/show.html.twig", "C:\\Users\\jacem\\Downloads\\sinda\\sinda h - Copie\\badro\\templates\\matching\\show.html.twig");
    }
}
