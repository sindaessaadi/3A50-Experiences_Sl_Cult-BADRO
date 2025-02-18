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

/* registration/register.html.twig */
class __TwigTemplate_23819634687f5a522d14a756bbcf45d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 2
        yield "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>eLEARNING - Registration</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <link href=\"img/favicon.ico\" rel=\"icon\">
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/style.css\" rel=\"stylesheet\">
</head>
<body>
    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoBADRO.png"), "html", null, true);
        yield "\" alt=\"Logo\" style=\"height: 50px; width: auto; margin-right: 10px;\">
        </a>

        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link\">Home</a>
                <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"nav-item nav-link active\">Register</a>
                <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matching_index");
        yield "\" class=\"nav-item nav-link\">Matching</a>
                <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class=\"container py-5\">
        <h1 class=\"text-center\">Inscription</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow\">
                    <div class=\"card-body\">
                        ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start');
        yield "
                            <div class=\"mb-3\">
                                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "prenom", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email_user", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "password", [], "any", false, false, false, 52), "first", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de Passe"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "password", [], "any", false, false, false, 55), "second", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirmer Mot de Passe"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "date_naissance", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Date de Naissance (jj-mm-aaaa)"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "telephone", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro de Téléphone"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "nom_institution", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Institution"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "role", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            </div>
                            <div class=\"text-center\">
                                <button class=\"btn btn-primary py-2 px-4\" type=\"submit\">S'inscrire</button>
                            </div>
                        ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        yield "
                        <p class=\"mt-3 text-center\">Already have an account? <a>Login here</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"js/bootstrap.bundle.min.js\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register.html.twig";
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
        return array (  165 => 72,  157 => 67,  151 => 64,  145 => 61,  139 => 58,  133 => 55,  127 => 52,  121 => 49,  115 => 46,  109 => 43,  104 => 41,  87 => 27,  83 => 26,  79 => 25,  68 => 17,  64 => 16,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/registration/register.html.twig #}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>eLEARNING - Registration</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <link href=\"img/favicon.ico\" rel=\"icon\">
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"css/style.css\" rel=\"stylesheet\">
</head>
<body>
    <!-- Navbar Start -->
    <nav class=\"navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0\">
        <a href=\"{{ path('app_home') }}\" class=\"navbar-brand d-flex align-items-center px-4 px-lg-5\">
            <img src=\"{{ asset('img/logoBADRO.png') }}\" alt=\"Logo\" style=\"height: 50px; width: auto; margin-right: 10px;\">
        </a>

        <button type=\"button\" class=\"navbar-toggler me-4\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto p-4 p-lg-0\">
                <a href=\"{{ path('app_home') }}\" class=\"nav-item nav-link\">Home</a>
                <a href=\"{{ path('app_register') }}\" class=\"nav-item nav-link active\">Register</a>
                <a href=\"{{ path('app_matching_index') }}\" class=\"nav-item nav-link\">Matching</a>
                <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class=\"container py-5\">
        <h1 class=\"text-center\">Inscription</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow\">
                    <div class=\"card-body\">
                        {{ form_start(form) }}
                            <div class=\"mb-3\">
                                {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prénom'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_widget(form.email_user, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_widget(form.password.first, {'attr': {'class': 'form-control', 'placeholder': 'Mot de Passe'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_widget(form.password.second, {'attr': {'class': 'form-control', 'placeholder': 'Confirmer Mot de Passe'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_widget(form.date_naissance, {'attr': {'class': 'form-control', 'placeholder': 'Date de Naissance (jj-mm-aaaa)'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Numéro de Téléphone'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_widget(form.nom_institution, {'attr': {'class': 'form-control', 'placeholder': 'Institution'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_widget(form.role, {'attr': {'class': 'form-select'}}) }}
                            </div>
                            <div class=\"text-center\">
                                <button class=\"btn btn-primary py-2 px-4\" type=\"submit\">S'inscrire</button>
                            </div>
                        {{ form_end(form) }}
                        <p class=\"mt-3 text-center\">Already have an account? <a>Login here</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"js/bootstrap.bundle.min.js\"></script>
</body>
</html>", "registration/register.html.twig", "C:\\Users\\jacem\\Downloads\\sinda\\sinda h - Copie\\badro\\templates\\registration\\register.html.twig");
    }
}
