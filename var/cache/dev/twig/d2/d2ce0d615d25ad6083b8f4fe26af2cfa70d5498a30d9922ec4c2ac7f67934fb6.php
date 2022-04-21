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

/* base.html.twig */
class __TwigTemplate_08e1ab0b780c1118aa31bc00c7c2f8f355bb21ebb68e1eb75f8656fd6989ee3d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
    ";
        // line 20
        $this->displayBlock('navbar', $context, $blocks);
        // line 124
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Page d'accueil!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
            ";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "
            ";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        echo "<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-dark gradient-custom\">
  <!-- Container wrapper -->
  <div class=\"container-fluid\">
    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>

    <!-- Toggle button -->
    <button class=\"navbar-toggler\" type=\"button\" data-mdb-toggle=\"collapse\"
      data-mdb-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
      aria-label=\"Toggle navigation\">
      <i class=\"fas fa-bars text-light\"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <!-- Left links -->
      <ul class=\"navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0\">
        <li class=\"nav-item text-center mx-2 mx-lg-1\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"#!\">
            <div>
              <i class=\"fas fa-home fa-lg mb-1\"></i>
            </div>
            Home
          </a>
        </li>
        <li class=\"nav-item text-center mx-2 mx-lg-1\">
          <a class=\"nav-link\" href=\"#!\">
            <div>
              <i class=\"far fa-envelope fa-lg mb-1\"></i>
              <span class=\"badge rounded-pill badge-notification bg-dark\">11</span>
            </div>
            Link
          </a>
        </li>
        <li class=\"nav-item text-center mx-2 mx-lg-1\">
          <a class=\"nav-link disabled\" aria-disabled=\"true\" href=\"#!\">
            <div>
              <i class=\"far fa-envelope fa-lg mb-1\"></i>
              <span class=\"badge rounded-pill badge-notification bg-dark\">11</span>
            </div>
            Disabled
          </a>
        </li>
        <li class=\"nav-item dropdown text-center mx-2 mx-lg-1\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-mdb-toggle=\"dropdown\"
            aria-expanded=\"false\">
            <div>
              <i class=\"far fa-envelope fa-lg mb-1\"></i>
              <span class=\"badge rounded-pill badge-notification bg-dark\">11</span>
            </div>
            Dropdown
          </a>
          <!-- Dropdown menu -->
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
            <li>
              <hr class=\"dropdown-divider\" />
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Left links -->

      <!-- Right links -->
      <ul class=\"navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0\">
        <li class=\"nav-item text-center mx-2 mx-lg-1\">
          <a class=\"nav-link\" href=\"#!\">
            <div>
              <i class=\"fas fa-bell fa-lg mb-1\"></i>
              <span class=\"badge rounded-pill badge-notification bg-dark\">11</span>
            </div>
            Messages
          </a>
        </li>
        <li class=\"nav-item text-center mx-2 mx-lg-1\">
          <a class=\"nav-link\" href=\"#!\">
            <div>
              <i class=\"fas fa-globe-americas fa-lg mb-1\"></i>
              <span class=\"badge rounded-pill badge-notification bg-dark\">11</span>
            </div>
            News
          </a>
        </li>
      </ul>
      <!-- Right links -->

      <!-- Search form -->
      <form class=\"d-flex input-group w-auto ms-lg-3 my-3 my-lg-0\">
        <input type=\"search\" class=\"form-control\" placeholder=\"Search\" aria-label=\"Search\" />
        <button class=\"btn btn-outline-white\" type=\"button\" data-mdb-ripple-color=\"dark\">
          Search
        </button>
      </form>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  280 => 124,  158 => 20,  146 => 16,  143 => 15,  133 => 14,  121 => 11,  118 => 10,  108 => 9,  89 => 5,  77 => 125,  74 => 124,  72 => 20,  68 => 18,  66 => 14,  63 => 13,  60 => 9,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Page d'accueil!{% endblock %}</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}

            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
    {% block navbar %}<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-dark gradient-custom\">
  <!-- Container wrapper -->
  <div class=\"container-fluid\">
    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>

    <!-- Toggle button -->
    <button class=\"navbar-toggler\" type=\"button\" data-mdb-toggle=\"collapse\"
      data-mdb-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
      aria-label=\"Toggle navigation\">
      <i class=\"fas fa-bars text-light\"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <!-- Left links -->
      <ul class=\"navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0\">
        <li class=\"nav-item text-center mx-2 mx-lg-1\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"#!\">
            <div>
              <i class=\"fas fa-home fa-lg mb-1\"></i>
            </div>
            Home
          </a>
        </li>
        <li class=\"nav-item text-center mx-2 mx-lg-1\">
          <a class=\"nav-link\" href=\"#!\">
            <div>
              <i class=\"far fa-envelope fa-lg mb-1\"></i>
              <span class=\"badge rounded-pill badge-notification bg-dark\">11</span>
            </div>
            Link
          </a>
        </li>
        <li class=\"nav-item text-center mx-2 mx-lg-1\">
          <a class=\"nav-link disabled\" aria-disabled=\"true\" href=\"#!\">
            <div>
              <i class=\"far fa-envelope fa-lg mb-1\"></i>
              <span class=\"badge rounded-pill badge-notification bg-dark\">11</span>
            </div>
            Disabled
          </a>
        </li>
        <li class=\"nav-item dropdown text-center mx-2 mx-lg-1\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-mdb-toggle=\"dropdown\"
            aria-expanded=\"false\">
            <div>
              <i class=\"far fa-envelope fa-lg mb-1\"></i>
              <span class=\"badge rounded-pill badge-notification bg-dark\">11</span>
            </div>
            Dropdown
          </a>
          <!-- Dropdown menu -->
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
            <li>
              <hr class=\"dropdown-divider\" />
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Left links -->

      <!-- Right links -->
      <ul class=\"navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0\">
        <li class=\"nav-item text-center mx-2 mx-lg-1\">
          <a class=\"nav-link\" href=\"#!\">
            <div>
              <i class=\"fas fa-bell fa-lg mb-1\"></i>
              <span class=\"badge rounded-pill badge-notification bg-dark\">11</span>
            </div>
            Messages
          </a>
        </li>
        <li class=\"nav-item text-center mx-2 mx-lg-1\">
          <a class=\"nav-link\" href=\"#!\">
            <div>
              <i class=\"fas fa-globe-americas fa-lg mb-1\"></i>
              <span class=\"badge rounded-pill badge-notification bg-dark\">11</span>
            </div>
            News
          </a>
        </li>
      </ul>
      <!-- Right links -->

      <!-- Search form -->
      <form class=\"d-flex input-group w-auto ms-lg-3 my-3 my-lg-0\">
        <input type=\"search\" class=\"form-control\" placeholder=\"Search\" aria-label=\"Search\" />
        <button class=\"btn btn-outline-white\" type=\"button\" data-mdb-ripple-color=\"dark\">
          Search
        </button>
      </form>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->{% endblock %}
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\laragon\\www\\Symfony\\gitebis\\templates\\base.html.twig");
    }
}
