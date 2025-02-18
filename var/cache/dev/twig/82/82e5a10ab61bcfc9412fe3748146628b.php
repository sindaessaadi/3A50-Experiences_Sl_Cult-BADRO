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

/* matching/_form.html.twig */
class __TwigTemplate_feb03242ea2472a7eabb9da7fdca9244 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matching/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matching/_form.html.twig"));

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

        yield "Create New Matching";
        
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

        .form-container .form-error {
            color: red;
            font-size: 12px;
            margin-top: -8px;
            margin-bottom: 10px;
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

            .btn {
                font-size: 12px;
            }
        }
    </style>

    <div class=\"form-container\">
        <h1>Create New Matching</h1>

        ";
        // line 130
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), 'form_start');
        yield "
        
            <div class=\"form-group\">
                ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "score_compatibilite", [], "any", false, false, false, 133), 'label');
        yield "
                ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "score_compatibilite", [], "any", false, false, false, 134), 'widget');
        yield "
                ";
        // line 135
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "score_compatibilite", [], "any", false, false, false, 135), "vars", [], "any", false, false, false, 135), "errors", [], "any", false, false, false, 135)) > 0)) {
            // line 136
            yield "                    <div class=\"form-error\">
                        ";
            // line 137
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "score_compatibilite", [], "any", false, false, false, 137), 'errors');
            yield "
                    </div>
                ";
        }
        // line 140
        yield "            </div>

            <div class=\"form-group\">
                ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "status", [], "any", false, false, false, 143), 'label');
        yield "
                ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "status", [], "any", false, false, false, 144), 'widget');
        yield "
                ";
        // line 145
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "status", [], "any", false, false, false, 145), "vars", [], "any", false, false, false, 145), "errors", [], "any", false, false, false, 145)) > 0)) {
            // line 146
            yield "                    <div class=\"form-error\">
                        ";
            // line 147
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "status", [], "any", false, false, false, 147), 'errors');
            yield "
                    </div>
                ";
        }
        // line 150
        yield "            </div>

            <div class=\"form-group\">
                ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "date_matching", [], "any", false, false, false, 153), 'label');
        yield "
                ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "date_matching", [], "any", false, false, false, 154), 'widget');
        yield "
                ";
        // line 155
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "date_matching", [], "any", false, false, false, 155), "vars", [], "any", false, false, false, 155), "errors", [], "any", false, false, false, 155)) > 0)) {
            // line 156
            yield "                    <div class=\"form-error\">
                        ";
            // line 157
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "date_matching", [], "any", false, false, false, 157), 'errors');
            yield "
                    </div>
                ";
        }
        // line 160
        yield "            </div>

            <div class=\"form-group\">
                <button class=\"btn\" type=\"submit\">";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 163, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
            </div>

        ";
        // line 166
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), 'form_end');
        yield "

        <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matching_index");
        yield "\">Back to list</a>
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
        return "matching/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  319 => 168,  314 => 166,  308 => 163,  303 => 160,  297 => 157,  294 => 156,  292 => 155,  288 => 154,  284 => 153,  279 => 150,  273 => 147,  270 => 146,  268 => 145,  264 => 144,  260 => 143,  255 => 140,  249 => 137,  246 => 136,  244 => 135,  240 => 134,  236 => 133,  230 => 130,  102 => 4,  89 => 3,  66 => 1,  55 => 3,  52 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block title %}Create New Matching{% endblock %}

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

        .form-container .form-error {
            color: red;
            font-size: 12px;
            margin-top: -8px;
            margin-bottom: 10px;
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

            .btn {
                font-size: 12px;
            }
        }
    </style>

    <div class=\"form-container\">
        <h1>Create New Matching</h1>

        {{ form_start(form) }}
        
            <div class=\"form-group\">
                {{ form_label(form.score_compatibilite) }}
                {{ form_widget(form.score_compatibilite) }}
                {% if form.score_compatibilite.vars.errors|length > 0 %}
                    <div class=\"form-error\">
                        {{ form_errors(form.score_compatibilite) }}
                    </div>
                {% endif %}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.status) }}
                {{ form_widget(form.status) }}
                {% if form.status.vars.errors|length > 0 %}
                    <div class=\"form-error\">
                        {{ form_errors(form.status) }}
                    </div>
                {% endif %}
            </div>

            <div class=\"form-group\">
                {{ form_label(form.date_matching) }}
                {{ form_widget(form.date_matching) }}
                {% if form.date_matching.vars.errors|length > 0 %}
                    <div class=\"form-error\">
                        {{ form_errors(form.date_matching) }}
                    </div>
                {% endif %}
            </div>

            <div class=\"form-group\">
                <button class=\"btn\" type=\"submit\">{{ button_label|default('Save') }}</button>
            </div>

        {{ form_end(form) }}

        <a href=\"{{ path('app_matching_index') }}\">Back to list</a>
    </div>
{% endblock %}
", "matching/_form.html.twig", "C:\\Users\\jacem\\Downloads\\sinda\\sinda h - Copie\\badro\\templates\\matching\\_form.html.twig");
    }
}
