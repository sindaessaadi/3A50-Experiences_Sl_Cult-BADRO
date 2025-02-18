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

/* matching/edit.html.twig */
class __TwigTemplate_bd5d4df240692a9e14dc3539cee9283e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matching/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matching/edit.html.twig"));

        // line 1
        yield "

";
        // line 3
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
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

        yield "Edit Matching";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <style>
        /* Facebook-inspired styles for the page */

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

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            max-width: 600px;
            margin: 20px auto;
        }

        .form-container .form-group {
            margin-bottom: 15px;
        }

        .form-container label {
            font-size: 14px;
            color: #333;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-container input, 
        .form-container select, 
        .form-container textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f1f2f6;
            margin-bottom: 10px;
        }

        .form-container input:focus, 
        .form-container select:focus, 
        .form-container textarea:focus {
            border-color: #1877f2;
            outline: none;
            background-color: #ffffff;
        }

        .btn {
            background-color: #1877f2;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0d6efd;
        }

        .btn:active {
            background-color: #0045bb;
        }

        .form-container a {
            color: #1877f2;
            font-weight: 600;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }

        .form-container a:hover {
            text-decoration: underline;
            color: #0d6efd;
        }

        .form-container .delete-button {
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

        .form-container .delete-button:hover {
            background-color: #d32f2f;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }

            .form-container {
                padding: 15px;
            }

            .form-container label {
                font-size: 12px;
            }

            .form-container input, 
            .form-container select, 
            .form-container textarea {
                font-size: 12px;
            }

            .btn, .delete-button {
                font-size: 12px;
            }
        }
    </style>

    <div class=\"form-container\">
        <h1>Edit Matching</h1>

        ";
        // line 142
        yield Twig\Extension\CoreExtension::include($this->env, $context, "matching/_form.html.twig", ["button_label" => "Update"]);
        yield "

        <a href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matching_index");
        yield "\">Back to list</a>

        ";
        // line 146
        yield Twig\Extension\CoreExtension::include($this->env, $context, "matching/_delete_form.html.twig");
        yield "
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
        return "matching/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  254 => 146,  249 => 144,  244 => 142,  106 => 6,  93 => 5,  70 => 3,  59 => 5,  56 => 4,  54 => 3,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% block title %}Edit Matching{% endblock %}

{% block body %}
    <style>
        /* Facebook-inspired styles for the page */

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

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            max-width: 600px;
            margin: 20px auto;
        }

        .form-container .form-group {
            margin-bottom: 15px;
        }

        .form-container label {
            font-size: 14px;
            color: #333;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-container input, 
        .form-container select, 
        .form-container textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f1f2f6;
            margin-bottom: 10px;
        }

        .form-container input:focus, 
        .form-container select:focus, 
        .form-container textarea:focus {
            border-color: #1877f2;
            outline: none;
            background-color: #ffffff;
        }

        .btn {
            background-color: #1877f2;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0d6efd;
        }

        .btn:active {
            background-color: #0045bb;
        }

        .form-container a {
            color: #1877f2;
            font-weight: 600;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }

        .form-container a:hover {
            text-decoration: underline;
            color: #0d6efd;
        }

        .form-container .delete-button {
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

        .form-container .delete-button:hover {
            background-color: #d32f2f;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }

            .form-container {
                padding: 15px;
            }

            .form-container label {
                font-size: 12px;
            }

            .form-container input, 
            .form-container select, 
            .form-container textarea {
                font-size: 12px;
            }

            .btn, .delete-button {
                font-size: 12px;
            }
        }
    </style>

    <div class=\"form-container\">
        <h1>Edit Matching</h1>

        {{ include('matching/_form.html.twig', {'button_label': 'Update'}) }}

        <a href=\"{{ path('app_matching_index') }}\">Back to list</a>

        {{ include('matching/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "matching/edit.html.twig", "C:\\Users\\jacem\\Downloads\\sinda\\sinda h - Copie\\badro\\templates\\matching\\edit.html.twig");
    }
}
