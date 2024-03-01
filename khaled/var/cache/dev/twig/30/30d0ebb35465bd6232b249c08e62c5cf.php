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

/* Front.html.twig */
class __TwigTemplate_924637bd8f1fe321978fa27c7a8c36e9 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('css', $context, $blocks);
        // line 17
        echo "</head>
<body>
    <header>
        <nav>
            ";
        // line 22
        echo "            <ul>
                <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"></a></li>
                <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\"></a></li>
                <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"></a></li>
            </ul>
        </nav>
    </header>

    <main>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 556
        echo "    </main>

    <footer>
        ";
        // line 560
        echo "        <p>&copy; ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Your Website</p>
    </footer>

    ";
        // line 563
        $this->displayBlock('js', $context, $blocks);
        // line 577
        echo "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"plugins/bootstrap/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\" ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/slick/slick.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/slick/slick-theme.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fancybox/jquery.fancybox.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/aos/aos.css"), "html", null, true);
        echo "\">

  <!-- CUSTOM CSS -->
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css\" rel=\"stylesheet"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "        
        <nav class=\"navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
      aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"ti-menu\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item dropdown active\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Home
            <span><i class=\"ti-angle-down\"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item active\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">Homepage</a></li>
            <li><a class=\"dropdown-item\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("homepage-2.html"), "html", null, true);
        echo "\">Homepage 2</a></li>
            <li><a class=\"dropdown-item active3\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("homepage-3.html"), "html", null, true);
        echo "\">Homepage 3</a></li>

            <li class=\"dropdown dropdown-submenu dropright\">
              <a class=\"dropdown-item dropdown-toggle\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#!\" id=\"dropdown0301\" role=\"button\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>

              <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0301\">
                <li><a class=\"dropdown-item\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">Submenu 11</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">Submenu 12</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class=\"nav-item dropdown @@pages\">
          <a class=\"nav-link dropdown-toggle\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\" data-toggle=\"dropdown\">Pages
            <span><i class=\"ti-angle-down\"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item @@team\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("team.html"), "html", null, true);
        echo "\">Team</a></li>
            <li><a class=\"dropdown-item @@career\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("career.html"), "html", null, true);
        echo "\">Career</a></li>
            <li><a class=\"dropdown-item @@blog\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog.html"), "html", null, true);
        echo "\">Blog</a></li>
            <li><a class=\"dropdown-item @@blogSingle\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog-single.html"), "html", null, true);
        echo "\">Blog Single</a></li>
            <li><a class=\"dropdown-item @@privacy\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("privacy-policy.html"), "html", null, true);
        echo "\">Privacy</a></li>
            <li><a class=\"dropdown-item @@faq\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FAQ.html"), "html", null, true);
        echo "\">FAQ</a></li>
            <li><a class=\"dropdown-item\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sign-in.html"), "html", null, true);
        echo "\">Sign In</a></li>
            <li><a class=\"dropdown-item\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sign-up.html"), "html", null, true);
        echo "\">Sign Up</a></li>
            <li><a class=\"dropdown-item\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("404.html"), "html", null, true);
        echo "\">404</a></li>
            <li><a class=\"dropdown-item\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("comming-soon.html"), "html", null, true);
        echo "\">Coming Soon</a></li>

            <li class=\"dropdown dropdown-submenu dropleft\">
              <a class=\"dropdown-item dropdown-toggle\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#!\" id=\"dropdown0501\" role=\"button\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>

              <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0501\">
                <li><a class=\"dropdown-item\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">Submenu 21</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">Submenu 22</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class=\"nav-item @@about\">
          <a class=\"nav-link\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about.html"), "html", null, true);
        echo "\">About</a>
        </li>
        <li class=\"nav-item @@contact\">
          <a class=\"nav-link\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--====================================
=            Hero Section            =
=====================================-->
<section class=\"section gradient-banner\">
\t<div class=\"shapes-container\">
\t\t<div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"1500\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down\" data-aos-duration=\"1000\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-up-right\" data-aos-duration=\"1000\" data-aos-delay=\"200\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"200\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"1000\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"1000\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"zoom-in\" data-aos-duration=\"1000\" data-aos-delay=\"300\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down-right\" data-aos-duration=\"500\" data-aos-delay=\"200\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down-right\" data-aos-duration=\"500\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"zoom-out\" data-aos-duration=\"2000\" data-aos-delay=\"500\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-up-right\" data-aos-duration=\"500\" data-aos-delay=\"200\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"500\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-delay=\"0\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down\" data-aos-duration=\"500\" data-aos-delay=\"0\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-up-right\" data-aos-duration=\"500\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"500\" data-aos-delay=\"0\"></div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-6 order-2 order-md-1 text-center text-md-left\">
\t\t\t\t<h1 class=\"text-white font-weight-bold mb-4\">Showcase your app with Small Apps</h1>
\t\t\t\t<p class=\"text-white mb-5\">Besides its beautiful design. Laapp is an incredibly rich core framework for you to
\t\t\t\t\tshowcase your App.</p>
\t\t\t\t<a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FAQ.html"), "html", null, true);
        echo "\" class=\"btn btn-main-md\">Download Now</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 text-center order-1 order-md-2\">
\t\t\t\t<img class=\"img-fluid\" src=\"images/mobile.png\" alt=\"screenshot\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--====  End of Hero Section  ====-->

<section class=\"section pt-0 position-relative pull-top\">
\t<div class=\"container\">
\t\t<div class=\"rounded shadow p-5 bg-white\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-6 mt-5 mt-md-0 text-center\">
\t\t\t\t\t<i class=\"ti-paint-bucket text-primary h1\"></i>
\t\t\t\t\t<h3 class=\"mt-4 text-capitalize h5 \">themes made easy</h3>
\t\t\t\t\t<p class=\"regular text-muted\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
\t\t\t\t\t\ttempore ipsam dignissimos molestias.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 mt-5 mt-md-0 text-center\">
\t\t\t\t\t<i class=\"ti-shine text-primary h1\"></i>
\t\t\t\t\t<h3 class=\"mt-4 text-capitalize h5 \">powerful design</h3>
\t\t\t\t\t<p class=\"regular text-muted\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
\t\t\t\t\t\ttempore ipsam dignissimos molestias.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-12 mt-5 mt-lg-0 text-center\">
\t\t\t\t\t<i class=\"ti-thought text-primary h1\"></i>
\t\t\t\t\t<h3 class=\"mt-4 text-capitalize h5 \">creative content</h3>
\t\t\t\t\t<p class=\"regular text-muted\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
\t\t\t\t\t\ttempore ipsam dignissimos molestias.</p>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<!--==================================
=            Feature Grid            =
===================================-->
<section class=\"feature section pt-0\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 ml-auto justify-content-center\">
\t\t\t\t<!-- Feature Mockup -->
\t\t\t\t<div class=\"image-content\" data-aos=\"fade-right\">
\t\t\t\t\t<img class=\"img-fluid\" src=\"images/feature/feature-new-01.jpg\" alt=\"iphone\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 mr-auto align-self-center\">
\t\t\t\t<div class=\"feature-content\">
\t\t\t\t\t<!-- Feature Title -->
\t\t\t\t\t<h2>Increase your productivity with <a
\t\t\t\t\t\t\thref=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://themefisher.com/products/small-apps-free-app-landing-page-template/"), "html", null, true);
        echo "\">Small Apps</a></h2>
\t\t\t\t\t<!-- Feature Description -->
\t\t\t\t\t<p class=\"desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
\t\t\t\t\t\tlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
\t\t\t\t\t\taliquip ex ea commodo consequat.</p>
\t\t\t\t</div>
\t\t\t\t<!-- Testimonial Quote -->
\t\t\t\t<div class=\"testimonial\">
\t\t\t\t\t<p>
\t\t\t\t\t\t\"InVision is a window into everything that's being designed at Twitter. It gets all of our best work in one
\t\t\t\t\t\tplace.\"
\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-inline meta\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<img src=\"images/testimonial/feature-testimonial-thumb.jpg\" alt=\"\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">Jonathon Andrew , Themefisher.com</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"feature section pt-0\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 ml-auto align-self-center\">
\t\t\t\t<div class=\"feature-content\">
\t\t\t\t\t<!-- Feature Title -->
\t\t\t\t\t<h2>Increase your productivity with <a
\t\t\t\t\t\t\thref=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://themefisher.com/products/small-apps-free-app-landing-page-template/"), "html", null, true);
        echo "\">Small Apps</a></h2>
\t\t\t\t\t<!-- Feature Description -->
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
\t\t\t\t\t\tdolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
\t\t\t\t\t\tea commodo consequat.</p>
\t\t\t\t</div>
\t\t\t\t<!-- Testimonial Quote -->
\t\t\t\t<div class=\"testimonial\">
\t\t\t\t\t<p>
\t\t\t\t\t\t\"InVision is a window into everything that's being designed at Twitter. It gets all of our best work in one
\t\t\t\t\t\tplace.\"
\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-inline meta\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<img src=\"images/testimonial/feature-testimonial-thumb.jpg\" alt=\"\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">Jonathon Andrew , Themefisher.com</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 mr-auto justify-content-center\">
\t\t\t\t<!-- Feature mockup -->
\t\t\t\t<div class=\"image-content\" data-aos=\"fade-left\">
\t\t\t\t\t<img class=\"img-fluid\" src=\"images/feature/feature-new-02.jpg\" alt=\"ipad\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--====  End of Feature Grid  ====-->

<!--==============================
=            Services            =
===============================-->
<section class=\"service section bg-gray\">
\t<div class=\"container-fluid p-0\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>An Interface For Lifestyle</h2>
\t\t\t\t\t<p><a href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://themefisher.com/products/small-apps-free-app-landing-page-template/"), "html", null, true);
        echo "\">Small Apps</a> makes
\t\t\t\t\t\tit easy to stay on top of your Life Style. No late tasks. No gimmicks.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row no-gutters\">
\t\t\t<div class=\"col-lg-6 align-self-center\">
\t\t\t\t<!-- Feature Image -->
\t\t\t\t<div class=\"service-thumb left\" data-aos=\"fade-right\">
\t\t\t\t\t<img class=\"img-fluid\" src=\"images/feature/iphone-ipad.jpg\" alt=\"iphone-ipad\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-5 mr-auto align-self-center\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<!-- Service 01 -->
\t\t\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t\t<i class=\"ti-bookmark\"></i>
\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t<h3>Easy Prototyping</h3>
\t\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t\t<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<!-- Service 01 -->
\t\t\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t\t<i class=\"ti-pulse\"></i>
\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t<h3>Sensor Bridge</h3>
\t\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t\t<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<!-- Service 01 -->
\t\t\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t\t<i class=\"ti-bar-chart\"></i>
\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t<h3>Strategist</h3>
\t\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t\t<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<!-- Service 01 -->
\t\t\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t\t<i class=\"ti-panel\"></i>
\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t<h3>Art Direction</h3>
\t\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t\t<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--====  End of Services  ====-->


<!--=================================
=            Video Promo            =
==================================-->
<section class=\"video-promo section bg-1\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"content-block\">
\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t<h2>Watch Our Promo Video</h2>
\t\t\t\t\t<!-- Promotional Speech -->
\t\t\t\t\t<p>Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et,
\t\t\t\t\t\tporttitor at sem. Vivamus </p>
\t\t\t\t\t<!-- Popup Video -->
\t\t\t\t\t<a data-fancybox href=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.youtube.com/watch?v=SG-ZKuQ5pKQ&ab_channel=Superpitch"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<i class=\"ti-control-play video\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--====  End of Video Promo  ====-->

<!--=================================
=            Testimonial            =
==================================-->
<section class=\"section testimonial\" id=\"testimonial\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<!-- Testimonial Slider -->
\t\t\t\t<div class=\"testimonial-slider owl-carousel owl-theme\">
\t\t\t\t\t<!-- Testimonial 01 -->
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"block shadow\">
\t\t\t\t\t\t\t<!-- Speech -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
\t\t\t\t\t\t\t\tDonec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
\t\t\t\t\t\t\t\tsit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
\t\t\t\t\t\t\t\tpretium ut lacinia in, elementum id enim.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!-- Person Thumb -->
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img src=\"images/testimonial/feature-testimonial-thumb.jpg\" alt=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Name and Company -->
\t\t\t\t\t\t\t<cite>Abraham Linkon , Themefisher.com</cite>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Testimonial 01 -->
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"block shadow\">
\t\t\t\t\t\t\t<!-- Speech -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
\t\t\t\t\t\t\t\tDonec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
\t\t\t\t\t\t\t\tsit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
\t\t\t\t\t\t\t\tpretium ut lacinia in, elementum id enim.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!-- Person Thumb -->
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img src=\"images/testimonial/feature-testimonial-thumb.jpg\" alt=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Name and Company -->
\t\t\t\t\t\t\t<cite>Abraham Linkon , Themefisher.com</cite>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Testimonial 01 -->
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"block shadow\">
\t\t\t\t\t\t\t<!-- Speech -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
\t\t\t\t\t\t\t\tDonec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
\t\t\t\t\t\t\t\tsit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
\t\t\t\t\t\t\t\tpretium ut lacinia in, elementum id enim.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!-- Person Thumb -->
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img src=\"images/testimonial/feature-testimonial-thumb.jpg\" alt=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Name and Company -->
\t\t\t\t\t\t\t<cite>Abraham Linkon , Themefisher.com</cite>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Testimonial 01 -->
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"block shadow\">
\t\t\t\t\t\t\t<!-- Speech -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
\t\t\t\t\t\t\t\tDonec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
\t\t\t\t\t\t\t\tsit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
\t\t\t\t\t\t\t\tpretium ut lacinia in, elementum id enim.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!-- Person Thumb -->
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img src=\"images/testimonial/feature-testimonial-thumb.jpg\" alt=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Name and Company -->
\t\t\t\t\t\t\t<cite>Abraham Linkon , Themefisher.com</cite>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--====  End of Testimonial  ====-->

<section class=\"call-to-action-app section bg-blue\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h2>It's time to change your mind</h2>
\t\t\t\t<p>Download over 2 million humans .Get <a href=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://themefisher.com/products/small-apps-free-app-landing-page-template/"), "html", null, true);
        echo "\">Small Apps</a> free forever!
\t\t\t\t\t<br>We say you won’t look back.</p>
\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\" class=\"btn btn-rounded-icon\">
\t\t\t\t\t\t\t<i class=\"ti-apple\"></i>
\t\t\t\t\t\t\tIphone
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\" class=\"btn btn-rounded-icon\">
\t\t\t\t\t\t\t<i class=\"ti-android\"></i>
\t\t\t\t\t\t\tAndroid
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\" class=\"btn btn-rounded-icon\">
\t\t\t\t\t\t\t<i class=\"ti-microsoft-alt\"></i>
\t\t\t\t\t\t\tWindows
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<!--============================
=            Footer            =
=============================-->
<footer>
  <div class=\"footer-main\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-md-12 m-md-auto align-self-center\">
          <div class=\"block\">
            <a href=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\"><img src=\"images/logo-alt.png\" alt=\"footer-logo\"></a>
            <!-- Social Site Icons -->
            <ul class=\"social-icon list-inline\">
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.facebook.com/themefisher"), "html", null, true);
        echo "\"><i class=\"ti-facebook\"></i></a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://twitter.com/themefisher"), "html", null, true);
        echo "\"><i class=\"ti-twitter\"></i></a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.instagram.com/themefisher/"), "html", null, true);
        echo "\"><i class=\"ti-instagram\"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
          <div class=\"block-2\">
            <!-- heading -->
            <h6>Product</h6>
            <!-- links -->
            <ul>
              <li><a href=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("team.html"), "html", null, true);
        echo "\">Teams</a></li>
              <li><a href=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog.html"), "html", null, true);
        echo "\">Blogs</a></li>
              <li><a href=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FAQ.html"), "html", null, true);
        echo "\">FAQs</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
          <div class=\"block-2\">
            <!-- heading -->
            <h6>Resources</h6>
            <!-- links -->
            <ul>
              <li><a href=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sign-up.html"), "html", null, true);
        echo "\">Singup</a></li>
              <li><a href=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sign-in.html"), "html", null, true);
        echo "\">Login</a></li>
              <li><a href=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog.html"), "html", null, true);
        echo "\">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
          <div class=\"block-2\">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("career.html"), "html", null, true);
        echo "\">Career</a></li>
              <li><a href=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Contact</a></li>
              <li><a href=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("team.html"), "html", null, true);
        echo "\">Investor</a></li>
              <li><a href=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("privacy.html"), "html", null, true);
        echo "\">Terms</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
          <div class=\"block-2\">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about.html"), "html", null, true);
        echo "\">About</a></li>
              <li><a href=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo "\">Contact</a></li>
              <li><a href=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("team.html"), "html", null, true);
        echo "\">Team</a></li>
              <li><a href=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("privacy-policy.html"), "html", null, true);
        echo "\">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"text-center bg-dark py-4\">
    <small class=\"text-secondary\">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://themefisher.com/"), "html", null, true);
        echo "\">Themefisher</a></small class=\"text-secondary\">
  </div>
</footer>


  <!-- To Top -->
  <div class=\"scroll-top-to\">
    <i class=\"ti-angle-up\"></i>
  </div>
        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 563
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 564
        echo "      <script src=\"plugins/jquery/jquery.min.js\"></script>
  <script src=\"plugins/bootstrap/bootstrap.min.js\"></script>
  <script src=\"plugins/slick/slick.min.js\"></script>
  <script src=\"plugins/fancybox/jquery.fancybox.min.js\"></script>
  <script src=\"plugins/syotimer/jquery.syotimer.min.js\"></script>
  <script src=\"plugins/aos/aos.js\"></script>
  <!-- google map -->
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g\"></script>
  <script src=\"plugins/google-map/gmap.js\"></script>
  
  <script src=\"js/script.js\"></script>
       
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  887 => 564,  877 => 563,  856 => 545,  845 => 537,  841 => 536,  837 => 535,  833 => 534,  820 => 524,  816 => 523,  812 => 522,  808 => 521,  795 => 511,  791 => 510,  787 => 509,  774 => 499,  770 => 498,  766 => 497,  752 => 486,  746 => 483,  740 => 480,  733 => 476,  710 => 456,  701 => 450,  692 => 444,  685 => 440,  579 => 337,  494 => 255,  451 => 215,  417 => 184,  360 => 130,  322 => 95,  316 => 92,  307 => 86,  303 => 85,  296 => 81,  290 => 78,  286 => 77,  282 => 76,  278 => 75,  274 => 74,  270 => 73,  266 => 72,  262 => 71,  258 => 70,  254 => 69,  246 => 64,  237 => 58,  233 => 57,  226 => 53,  220 => 50,  216 => 49,  212 => 48,  194 => 35,  189 => 32,  179 => 31,  167 => 15,  161 => 12,  157 => 11,  153 => 10,  149 => 9,  145 => 8,  142 => 7,  132 => 6,  113 => 5,  101 => 577,  99 => 563,  92 => 560,  87 => 556,  85 => 31,  76 => 25,  72 => 24,  68 => 23,  65 => 22,  59 => 17,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block css %}
        <link rel=\"stylesheet\" href=\"plugins/bootstrap/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\" {{asset('plugins/themify-icons/themify-icons.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('plugins/slick/slick.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('plugins/slick/slick-theme.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('plugins/fancybox/jquery.fancybox.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('plugins/aos/aos.css')}}\">

  <!-- CUSTOM CSS -->
  <link href=\"{{asset('css/style.css\" rel=\"stylesheet')}}\">
    {% endblock %}
</head>
<body>
    <header>
        <nav>
            {# Your navigation links here #}
            <ul>
                <li><a href=\"{{ path('homepage') }}\"></a></li>
                <li><a href=\"{{ path('about') }}\"></a></li>
                <li><a href=\"{{ path('contact') }}\"></a></li>
            </ul>
        </nav>
    </header>

    <main>
        {% block body %}
        
        <nav class=\"navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"{{asset('index.html')}}\"><img src=\"{{asset('images/logo.png')}}\" alt=\"logo\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
      aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"ti-menu\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item dropdown active\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Home
            <span><i class=\"ti-angle-down\"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item active\" href=\"{{asset('index.html')}}\">Homepage</a></li>
            <li><a class=\"dropdown-item\" href=\"{{asset('homepage-2.html')}}\">Homepage 2</a></li>
            <li><a class=\"dropdown-item active3\" href=\"{{asset('homepage-3.html')}}\">Homepage 3</a></li>

            <li class=\"dropdown dropdown-submenu dropright\">
              <a class=\"dropdown-item dropdown-toggle\" href=\"{{asset('')}}#!\" id=\"dropdown0301\" role=\"button\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>

              <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0301\">
                <li><a class=\"dropdown-item\" href=\"{{asset('index.html')}}\">Submenu 11</a></li>
                <li><a class=\"dropdown-item\" href=\"{{asset('index.html')}}\">Submenu 12</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class=\"nav-item dropdown @@pages\">
          <a class=\"nav-link dropdown-toggle\" href=\"{{asset('')}}#\" data-toggle=\"dropdown\">Pages
            <span><i class=\"ti-angle-down\"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item @@team\" href=\"{{asset('team.html')}}\">Team</a></li>
            <li><a class=\"dropdown-item @@career\" href=\"{{asset('career.html')}}\">Career</a></li>
            <li><a class=\"dropdown-item @@blog\" href=\"{{asset('blog.html')}}\">Blog</a></li>
            <li><a class=\"dropdown-item @@blogSingle\" href=\"{{asset('blog-single.html')}}\">Blog Single</a></li>
            <li><a class=\"dropdown-item @@privacy\" href=\"{{asset('privacy-policy.html')}}\">Privacy</a></li>
            <li><a class=\"dropdown-item @@faq\" href=\"{{asset('FAQ.html')}}\">FAQ</a></li>
            <li><a class=\"dropdown-item\" href=\"{{asset('sign-in.html')}}\">Sign In</a></li>
            <li><a class=\"dropdown-item\" href=\"{{asset('sign-up.html')}}\">Sign Up</a></li>
            <li><a class=\"dropdown-item\" href=\"{{asset('404.html')}}\">404</a></li>
            <li><a class=\"dropdown-item\" href=\"{{asset('comming-soon.html')}}\">Coming Soon</a></li>

            <li class=\"dropdown dropdown-submenu dropleft\">
              <a class=\"dropdown-item dropdown-toggle\" href=\"{{asset('')}}#!\" id=\"dropdown0501\" role=\"button\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>

              <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0501\">
                <li><a class=\"dropdown-item\" href=\"{{asset('index.html')}}\">Submenu 21</a></li>
                <li><a class=\"dropdown-item\" href=\"{{asset('index.html')}}\">Submenu 22</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class=\"nav-item @@about\">
          <a class=\"nav-link\" href=\"{{asset('about.html')}}\">About</a>
        </li>
        <li class=\"nav-item @@contact\">
          <a class=\"nav-link\" href=\"{{asset('contact.html')}}\">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--====================================
=            Hero Section            =
=====================================-->
<section class=\"section gradient-banner\">
\t<div class=\"shapes-container\">
\t\t<div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"1500\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down\" data-aos-duration=\"1000\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-up-right\" data-aos-duration=\"1000\" data-aos-delay=\"200\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"200\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"1000\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"1000\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"zoom-in\" data-aos-duration=\"1000\" data-aos-delay=\"300\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down-right\" data-aos-duration=\"500\" data-aos-delay=\"200\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down-right\" data-aos-duration=\"500\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"zoom-out\" data-aos-duration=\"2000\" data-aos-delay=\"500\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-up-right\" data-aos-duration=\"500\" data-aos-delay=\"200\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"500\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-up\" data-aos-duration=\"500\" data-aos-delay=\"0\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down\" data-aos-duration=\"500\" data-aos-delay=\"0\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-up-right\" data-aos-duration=\"500\" data-aos-delay=\"100\"></div>
\t\t<div class=\"shape\" data-aos=\"fade-down-left\" data-aos-duration=\"500\" data-aos-delay=\"0\"></div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-6 order-2 order-md-1 text-center text-md-left\">
\t\t\t\t<h1 class=\"text-white font-weight-bold mb-4\">Showcase your app with Small Apps</h1>
\t\t\t\t<p class=\"text-white mb-5\">Besides its beautiful design. Laapp is an incredibly rich core framework for you to
\t\t\t\t\tshowcase your App.</p>
\t\t\t\t<a href=\"{{asset('FAQ.html')}}\" class=\"btn btn-main-md\">Download Now</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 text-center order-1 order-md-2\">
\t\t\t\t<img class=\"img-fluid\" src=\"images/mobile.png\" alt=\"screenshot\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--====  End of Hero Section  ====-->

<section class=\"section pt-0 position-relative pull-top\">
\t<div class=\"container\">
\t\t<div class=\"rounded shadow p-5 bg-white\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-6 mt-5 mt-md-0 text-center\">
\t\t\t\t\t<i class=\"ti-paint-bucket text-primary h1\"></i>
\t\t\t\t\t<h3 class=\"mt-4 text-capitalize h5 \">themes made easy</h3>
\t\t\t\t\t<p class=\"regular text-muted\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
\t\t\t\t\t\ttempore ipsam dignissimos molestias.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 mt-5 mt-md-0 text-center\">
\t\t\t\t\t<i class=\"ti-shine text-primary h1\"></i>
\t\t\t\t\t<h3 class=\"mt-4 text-capitalize h5 \">powerful design</h3>
\t\t\t\t\t<p class=\"regular text-muted\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
\t\t\t\t\t\ttempore ipsam dignissimos molestias.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-12 mt-5 mt-lg-0 text-center\">
\t\t\t\t\t<i class=\"ti-thought text-primary h1\"></i>
\t\t\t\t\t<h3 class=\"mt-4 text-capitalize h5 \">creative content</h3>
\t\t\t\t\t<p class=\"regular text-muted\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
\t\t\t\t\t\ttempore ipsam dignissimos molestias.</p>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<!--==================================
=            Feature Grid            =
===================================-->
<section class=\"feature section pt-0\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 ml-auto justify-content-center\">
\t\t\t\t<!-- Feature Mockup -->
\t\t\t\t<div class=\"image-content\" data-aos=\"fade-right\">
\t\t\t\t\t<img class=\"img-fluid\" src=\"images/feature/feature-new-01.jpg\" alt=\"iphone\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 mr-auto align-self-center\">
\t\t\t\t<div class=\"feature-content\">
\t\t\t\t\t<!-- Feature Title -->
\t\t\t\t\t<h2>Increase your productivity with <a
\t\t\t\t\t\t\thref=\"{{asset('https://themefisher.com/products/small-apps-free-app-landing-page-template/')}}\">Small Apps</a></h2>
\t\t\t\t\t<!-- Feature Description -->
\t\t\t\t\t<p class=\"desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
\t\t\t\t\t\tlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
\t\t\t\t\t\taliquip ex ea commodo consequat.</p>
\t\t\t\t</div>
\t\t\t\t<!-- Testimonial Quote -->
\t\t\t\t<div class=\"testimonial\">
\t\t\t\t\t<p>
\t\t\t\t\t\t\"InVision is a window into everything that's being designed at Twitter. It gets all of our best work in one
\t\t\t\t\t\tplace.\"
\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-inline meta\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<img src=\"images/testimonial/feature-testimonial-thumb.jpg\" alt=\"\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">Jonathon Andrew , Themefisher.com</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"feature section pt-0\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 ml-auto align-self-center\">
\t\t\t\t<div class=\"feature-content\">
\t\t\t\t\t<!-- Feature Title -->
\t\t\t\t\t<h2>Increase your productivity with <a
\t\t\t\t\t\t\thref=\"{{asset('https://themefisher.com/products/small-apps-free-app-landing-page-template/')}}\">Small Apps</a></h2>
\t\t\t\t\t<!-- Feature Description -->
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
\t\t\t\t\t\tdolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
\t\t\t\t\t\tea commodo consequat.</p>
\t\t\t\t</div>
\t\t\t\t<!-- Testimonial Quote -->
\t\t\t\t<div class=\"testimonial\">
\t\t\t\t\t<p>
\t\t\t\t\t\t\"InVision is a window into everything that's being designed at Twitter. It gets all of our best work in one
\t\t\t\t\t\tplace.\"
\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-inline meta\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<img src=\"images/testimonial/feature-testimonial-thumb.jpg\" alt=\"\">
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">Jonathon Andrew , Themefisher.com</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 mr-auto justify-content-center\">
\t\t\t\t<!-- Feature mockup -->
\t\t\t\t<div class=\"image-content\" data-aos=\"fade-left\">
\t\t\t\t\t<img class=\"img-fluid\" src=\"images/feature/feature-new-02.jpg\" alt=\"ipad\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--====  End of Feature Grid  ====-->

<!--==============================
=            Services            =
===============================-->
<section class=\"service section bg-gray\">
\t<div class=\"container-fluid p-0\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>An Interface For Lifestyle</h2>
\t\t\t\t\t<p><a href=\"{{asset('https://themefisher.com/products/small-apps-free-app-landing-page-template/')}}\">Small Apps</a> makes
\t\t\t\t\t\tit easy to stay on top of your Life Style. No late tasks. No gimmicks.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row no-gutters\">
\t\t\t<div class=\"col-lg-6 align-self-center\">
\t\t\t\t<!-- Feature Image -->
\t\t\t\t<div class=\"service-thumb left\" data-aos=\"fade-right\">
\t\t\t\t\t<img class=\"img-fluid\" src=\"images/feature/iphone-ipad.jpg\" alt=\"iphone-ipad\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-5 mr-auto align-self-center\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<!-- Service 01 -->
\t\t\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t\t<i class=\"ti-bookmark\"></i>
\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t<h3>Easy Prototyping</h3>
\t\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t\t<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<!-- Service 01 -->
\t\t\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t\t<i class=\"ti-pulse\"></i>
\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t<h3>Sensor Bridge</h3>
\t\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t\t<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<!-- Service 01 -->
\t\t\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t\t<i class=\"ti-bar-chart\"></i>
\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t<h3>Strategist</h3>
\t\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t\t<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t<!-- Service 01 -->
\t\t\t\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t\t<i class=\"ti-panel\"></i>
\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t<h3>Art Direction</h3>
\t\t\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t\t\t<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--====  End of Services  ====-->


<!--=================================
=            Video Promo            =
==================================-->
<section class=\"video-promo section bg-1\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"content-block\">
\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t<h2>Watch Our Promo Video</h2>
\t\t\t\t\t<!-- Promotional Speech -->
\t\t\t\t\t<p>Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et,
\t\t\t\t\t\tporttitor at sem. Vivamus </p>
\t\t\t\t\t<!-- Popup Video -->
\t\t\t\t\t<a data-fancybox href=\"{{asset('https://www.youtube.com/watch?v=SG-ZKuQ5pKQ&ab_channel=Superpitch')}}\">
\t\t\t\t\t\t<i class=\"ti-control-play video\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--====  End of Video Promo  ====-->

<!--=================================
=            Testimonial            =
==================================-->
<section class=\"section testimonial\" id=\"testimonial\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<!-- Testimonial Slider -->
\t\t\t\t<div class=\"testimonial-slider owl-carousel owl-theme\">
\t\t\t\t\t<!-- Testimonial 01 -->
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"block shadow\">
\t\t\t\t\t\t\t<!-- Speech -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
\t\t\t\t\t\t\t\tDonec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
\t\t\t\t\t\t\t\tsit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
\t\t\t\t\t\t\t\tpretium ut lacinia in, elementum id enim.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!-- Person Thumb -->
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img src=\"images/testimonial/feature-testimonial-thumb.jpg\" alt=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Name and Company -->
\t\t\t\t\t\t\t<cite>Abraham Linkon , Themefisher.com</cite>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Testimonial 01 -->
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"block shadow\">
\t\t\t\t\t\t\t<!-- Speech -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
\t\t\t\t\t\t\t\tDonec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
\t\t\t\t\t\t\t\tsit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
\t\t\t\t\t\t\t\tpretium ut lacinia in, elementum id enim.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!-- Person Thumb -->
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img src=\"images/testimonial/feature-testimonial-thumb.jpg\" alt=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Name and Company -->
\t\t\t\t\t\t\t<cite>Abraham Linkon , Themefisher.com</cite>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Testimonial 01 -->
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"block shadow\">
\t\t\t\t\t\t\t<!-- Speech -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
\t\t\t\t\t\t\t\tDonec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
\t\t\t\t\t\t\t\tsit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
\t\t\t\t\t\t\t\tpretium ut lacinia in, elementum id enim.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!-- Person Thumb -->
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img src=\"images/testimonial/feature-testimonial-thumb.jpg\" alt=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Name and Company -->
\t\t\t\t\t\t\t<cite>Abraham Linkon , Themefisher.com</cite>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Testimonial 01 -->
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"block shadow\">
\t\t\t\t\t\t\t<!-- Speech -->
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tMauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
\t\t\t\t\t\t\t\tDonec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
\t\t\t\t\t\t\t\tsit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
\t\t\t\t\t\t\t\tpretium ut lacinia in, elementum id enim.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!-- Person Thumb -->
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img src=\"images/testimonial/feature-testimonial-thumb.jpg\" alt=\"image\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Name and Company -->
\t\t\t\t\t\t\t<cite>Abraham Linkon , Themefisher.com</cite>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--====  End of Testimonial  ====-->

<section class=\"call-to-action-app section bg-blue\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h2>It's time to change your mind</h2>
\t\t\t\t<p>Download over 2 million humans .Get <a href=\"{{asset('https://themefisher.com/products/small-apps-free-app-landing-page-template/')}}\">Small Apps</a> free forever!
\t\t\t\t\t<br>We say you won’t look back.</p>
\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"{{asset('')}}\" class=\"btn btn-rounded-icon\">
\t\t\t\t\t\t\t<i class=\"ti-apple\"></i>
\t\t\t\t\t\t\tIphone
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"{{asset('')}}\" class=\"btn btn-rounded-icon\">
\t\t\t\t\t\t\t<i class=\"ti-android\"></i>
\t\t\t\t\t\t\tAndroid
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"{{asset('')}}\" class=\"btn btn-rounded-icon\">
\t\t\t\t\t\t\t<i class=\"ti-microsoft-alt\"></i>
\t\t\t\t\t\t\tWindows
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<!--============================
=            Footer            =
=============================-->
<footer>
  <div class=\"footer-main\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-md-12 m-md-auto align-self-center\">
          <div class=\"block\">
            <a href=\"{{asset('index.html')}}\"><img src=\"images/logo-alt.png\" alt=\"footer-logo\"></a>
            <!-- Social Site Icons -->
            <ul class=\"social-icon list-inline\">
              <li class=\"list-inline-item\">
                <a href=\"{{asset('https://www.facebook.com/themefisher')}}\"><i class=\"ti-facebook\"></i></a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"{{asset('https://twitter.com/themefisher')}}\"><i class=\"ti-twitter\"></i></a>
              </li>
              <li class=\"list-inline-item\">
                <a href=\"{{asset('https://www.instagram.com/themefisher/')}}\"><i class=\"ti-instagram\"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
          <div class=\"block-2\">
            <!-- heading -->
            <h6>Product</h6>
            <!-- links -->
            <ul>
              <li><a href=\"{{asset('team.html')}}\">Teams</a></li>
              <li><a href=\"{{asset('blog.html')}}\">Blogs</a></li>
              <li><a href=\"{{asset('FAQ.html')}}\">FAQs</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
          <div class=\"block-2\">
            <!-- heading -->
            <h6>Resources</h6>
            <!-- links -->
            <ul>
              <li><a href=\"{{asset('sign-up.html')}}\">Singup</a></li>
              <li><a href=\"{{asset('sign-in.html')}}\">Login</a></li>
              <li><a href=\"{{asset('blog.html')}}\">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
          <div class=\"block-2\">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href=\"{{asset('career.html')}}\">Career</a></li>
              <li><a href=\"{{asset('contact.html')}}\">Contact</a></li>
              <li><a href=\"{{asset('team.html')}}\">Investor</a></li>
              <li><a href=\"{{asset('privacy.html')}}\">Terms</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-2 col-md-3 col-6 mt-5 mt-lg-0\">
          <div class=\"block-2\">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href=\"{{asset('about.html')}}\">About</a></li>
              <li><a href=\"{{asset('contact.html')}}\">Contact</a></li>
              <li><a href=\"{{asset('team.html')}}\">Team</a></li>
              <li><a href=\"{{asset('privacy-policy.html')}}\">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"text-center bg-dark py-4\">
    <small class=\"text-secondary\">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href=\"{{asset('https://themefisher.com/')}}\">Themefisher</a></small class=\"text-secondary\">
  </div>
</footer>


  <!-- To Top -->
  <div class=\"scroll-top-to\">
    <i class=\"ti-angle-up\"></i>
  </div>
        
        {% endblock %}
    </main>

    <footer>
        {# Your footer content here #}
        <p>&copy; {{ 'now'|date('Y') }} Your Website</p>
    </footer>

    {% block js %}
      <script src=\"plugins/jquery/jquery.min.js\"></script>
  <script src=\"plugins/bootstrap/bootstrap.min.js\"></script>
  <script src=\"plugins/slick/slick.min.js\"></script>
  <script src=\"plugins/fancybox/jquery.fancybox.min.js\"></script>
  <script src=\"plugins/syotimer/jquery.syotimer.min.js\"></script>
  <script src=\"plugins/aos/aos.js\"></script>
  <!-- google map -->
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g\"></script>
  <script src=\"plugins/google-map/gmap.js\"></script>
  
  <script src=\"js/script.js\"></script>
       
    {% endblock %}
</body>
</html>
", "Front.html.twig", "C:\\Users\\khale\\khaled\\templates\\Front.html.twig");
    }
}
