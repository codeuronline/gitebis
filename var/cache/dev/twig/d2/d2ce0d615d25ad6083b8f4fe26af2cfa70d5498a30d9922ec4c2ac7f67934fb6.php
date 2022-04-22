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
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </head>
    <body>
    ";
        // line 21
        $this->displayBlock('navbar', $context, $blocks);
        // line 140
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 141
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

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
            ";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
            ";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        echo "<!-- Navbar -->
<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <!-- Container wrapper -->
  <div class=\"container-fluid\">
    <!-- Toggle button -->
    <button
      class=\"navbar-toggler\"
      type=\"button\"
      data-mdb-toggle=\"collapse\"
      data-mdb-target=\"#navbarSupportedContent\"
      aria-controls=\"navbarSupportedContent\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\"
    >
      <i class=\"fas fa-bars\"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <!-- Navbar brand -->
      <a class=\"navbar-brand mt-2 mt-lg-0\" href=\"#\">
        <img
          src=\"https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp\"
          height=\"15\"
          alt=\"MDB Logo\"
          loading=\"lazy\"
        />
      </a>
      <!-- Left links -->
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Dashboard</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Team</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Projects</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class=\"d-flex align-items-center\">
      <!-- Icon -->
      <a class=\"text-reset me-3\" href=\"#\">
        <i class=\"fas fa-shopping-cart\"></i>
      </a>

      <!-- Notifications -->
      <div class=\"dropdown\">
        <a
          class=\"text-reset me-3 dropdown-toggle hidden-arrow\"
          href=\"#\"
          id=\"navbarDropdownMenuLink\"
          role=\"button\"
          data-mdb-toggle=\"dropdown\"
          aria-expanded=\"false\"
        >
          <i class=\"fas fa-bell\"></i>
          <span class=\"badge rounded-pill badge-notification bg-danger\">1</span>
        </a>
        <ul
          class=\"dropdown-menu dropdown-menu-end\"
          aria-labelledby=\"navbarDropdownMenuLink\"
        >
          <li>
            <a class=\"dropdown-item\" href=\"/page\">Page</a>
          </li>
          <li>
            <a class=\"dropdown-item\" href=\"/register\">Register</a>
          </li>
          <li>
            <a class=\"dropdown-item\" href=\"/login\">Login</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class=\"dropdown\">
        <a
          class=\"dropdown-toggle d-flex align-items-center hidden-arrow\"
          href=\"#\"
          id=\"navbarDropdownMenuAvatar\"
          role=\"button\"
          data-mdb-toggle=\"dropdown\"
          aria-expanded=\"false\"
        >
          <img
            src=\"https://mdbcdn.b-cdn.net/img/new/avatars/2.webp\"
            class=\"rounded-circle\"
            height=\"25\"
            alt=\"Black and White Portrait of a Man\"
            loading=\"lazy\"
          />
        </a>
        <ul
          class=\"dropdown-menu dropdown-menu-end\"
          aria-labelledby=\"navbarDropdownMenuAvatar\"
        >
          <li>
            <a class=\"dropdown-item\" href=\"#\">My profile</a>
          </li>
          <li>
            <a class=\"dropdown-item\" href=\"#\">Settings</a>
          </li>
          <li>
            <a class=\"dropdown-item\" href=\"#\">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
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
        return array (  296 => 140,  159 => 21,  147 => 17,  144 => 16,  134 => 15,  122 => 12,  119 => 11,  109 => 10,  90 => 5,  78 => 141,  75 => 140,  73 => 21,  69 => 19,  67 => 15,  64 => 14,  61 => 10,  54 => 5,  48 => 1,);
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
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
    {% block navbar %}<!-- Navbar -->
<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <!-- Container wrapper -->
  <div class=\"container-fluid\">
    <!-- Toggle button -->
    <button
      class=\"navbar-toggler\"
      type=\"button\"
      data-mdb-toggle=\"collapse\"
      data-mdb-target=\"#navbarSupportedContent\"
      aria-controls=\"navbarSupportedContent\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\"
    >
      <i class=\"fas fa-bars\"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <!-- Navbar brand -->
      <a class=\"navbar-brand mt-2 mt-lg-0\" href=\"#\">
        <img
          src=\"https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp\"
          height=\"15\"
          alt=\"MDB Logo\"
          loading=\"lazy\"
        />
      </a>
      <!-- Left links -->
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Dashboard</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Team</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Projects</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class=\"d-flex align-items-center\">
      <!-- Icon -->
      <a class=\"text-reset me-3\" href=\"#\">
        <i class=\"fas fa-shopping-cart\"></i>
      </a>

      <!-- Notifications -->
      <div class=\"dropdown\">
        <a
          class=\"text-reset me-3 dropdown-toggle hidden-arrow\"
          href=\"#\"
          id=\"navbarDropdownMenuLink\"
          role=\"button\"
          data-mdb-toggle=\"dropdown\"
          aria-expanded=\"false\"
        >
          <i class=\"fas fa-bell\"></i>
          <span class=\"badge rounded-pill badge-notification bg-danger\">1</span>
        </a>
        <ul
          class=\"dropdown-menu dropdown-menu-end\"
          aria-labelledby=\"navbarDropdownMenuLink\"
        >
          <li>
            <a class=\"dropdown-item\" href=\"/page\">Page</a>
          </li>
          <li>
            <a class=\"dropdown-item\" href=\"/register\">Register</a>
          </li>
          <li>
            <a class=\"dropdown-item\" href=\"/login\">Login</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class=\"dropdown\">
        <a
          class=\"dropdown-toggle d-flex align-items-center hidden-arrow\"
          href=\"#\"
          id=\"navbarDropdownMenuAvatar\"
          role=\"button\"
          data-mdb-toggle=\"dropdown\"
          aria-expanded=\"false\"
        >
          <img
            src=\"https://mdbcdn.b-cdn.net/img/new/avatars/2.webp\"
            class=\"rounded-circle\"
            height=\"25\"
            alt=\"Black and White Portrait of a Man\"
            loading=\"lazy\"
          />
        </a>
        <ul
          class=\"dropdown-menu dropdown-menu-end\"
          aria-labelledby=\"navbarDropdownMenuAvatar\"
        >
          <li>
            <a class=\"dropdown-item\" href=\"#\">My profile</a>
          </li>
          <li>
            <a class=\"dropdown-item\" href=\"#\">Settings</a>
          </li>
          <li>
            <a class=\"dropdown-item\" href=\"#\">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->{% endblock %}
        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\laragon\\www\\symfony\\gitebis\\templates\\base.html.twig");
    }
}
