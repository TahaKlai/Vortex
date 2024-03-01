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
class __TwigTemplate_9aa5745a61b887280f5d55b32e55cf5f extends Template
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
            'js' => [$this, 'block_js'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "



    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/favicon.png"), "html", null, true);
        echo "\">
     ";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 19
        echo "
       




            ";
        // line 25
        $this->displayBlock('js', $context, $blocks);
        // line 59
        echo "














    </head>

    ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 940
        echo " 
 
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

        echo "HEMOTRANSFERT";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 14
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/owl-carousel/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/owl-carousel/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/jqvmap/css/jqvmap.min.css\" rel=\"stylesheet\""), "html", null, true);
        echo ">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/style.css\" rel=\"stylesheet\""), "html", null, true);
        echo ">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 26
        echo "
    <!-- Required vendors -->
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/quixnav-init.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/custom.min.js"), "html", null, true);
        echo "\"></script>


    <!-- Vectormap -->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/morris/morris.min.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/gaugeJS/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>

    <!--  flot-chart js -->
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>

    <!-- Owl Carousel -->
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/owl-carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Counter Up -->
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/jqvmap/js/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/jqvmap/js/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/jquery.counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/dashboard/dashboard-1.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "
    <!--*******************
        Preloader start
    ********************-->
    <div id=\"preloader\">
        <div class=\"sk-three-bounce\">
            <div class=\"sk-child sk-bounce1\"></div>
            <div class=\"sk-child sk-bounce2\"></div>
            <div class=\"sk-child sk-bounce3\"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id=\"main-wrapper\">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class=\"nav-header\">
            <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\" class=\"brand-logo\">
                <img class=\"logo-abbr\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                <img class=\"logo-compact\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/logo-text.png"), "html", null, true);
        echo "./images/logo-text.png\" alt=\"\">
                <img class=\"brand-title\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/logo-text.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>

            <div class=\"nav-control\">
                <div class=\"hamburger\">
                    <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class=\"header\">
            <div class=\"header-content\">
                <nav class=\"navbar navbar-expand\">
                    <div class=\"collapse navbar-collapse justify-content-between\">
                        <div class=\"header-left\">
                            <div class=\"search_bar dropdown\">
                                <span class=\"search_icon p-3 c-pointer\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-magnify\"></i>
                                </span>
                                <div class=\"dropdown-menu p-0 m-0\">
                                    <form>
                                        <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class=\"navbar-nav header-right\">
                            <li class=\"nav-item dropdown notification_dropdown\">
                                <a class=\"nav-link\" href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\" role=\"button\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-bell\"></i>
                                    <div class=\"pulse-css\"></div>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <ul class=\"list-unstyled\">
                                        <li class=\"media dropdown-item\">
                                            <span class=\"success\"><i class=\"ti-user\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"primary\"><i class=\"ti-shopping-cart\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"danger\"><i class=\"ti-bookmark\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"primary\"><i class=\"ti-heart\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"success\"><i class=\"ti-image\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class=\"all-notification\" href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\">See all notifications <i
                                            class=\"ti-arrow-right\"></i></a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown header-profile\">
                                <a class=\"nav-link\" href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\" role=\"button\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-account\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a href=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-profile.html"), "html", null, true);
        echo "\" class=\"dropdown-item\">
                                        <i class=\"icon-user\"></i>
                                        <span class=\"ml-2\">Profile </span>
                                    </a>
                                    <a href=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./email-inbox.html"), "html", null, true);
        echo "\" class=\"dropdown-item\">
                                        <i class=\"icon-envelope-open\"></i>
                                        <span class=\"ml-2\">Inbox </span>
                                    </a>
                                    <a href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-login.html"), "html", null, true);
        echo "\" class=\"dropdown-item\">
                                        <i class=\"icon-key\"></i>
                                        <span class=\"ml-2\">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class=\"quixnav\">
            <div class=\"quixnav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                    <li class=\"nav-label first\">Main Menu</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index.html"), "html", null, true);
        echo "\">Dashboard 1</a></li>
                            <li><a href=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index2.html"), "html", null, true);
        echo "\">Dashboard 2</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Apps</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-app-store\"></i><span class=\"nav-text\">Apps</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-profile.html"), "html", null, true);
        echo "\">khaled-test</a></li>
                            <li><a class=\"has-arrow\" href=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Actualites</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualites/index.html.twig"), "html", null, true);
        echo "\">Actualites_index</a></li>
                                    <li><a href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualites/show.html.twig"), "html", null, true);
        echo "\">Actualites_show</a></li>
                                    <li><a href=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualites/edit.html.twig"), "html", null, true);
        echo "\">Actualites_edit</a></li>
                                    <li><a href=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualites/new.html.twig"), "html", null, true);
        echo "\">Actualites_new</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-calender.html"), "html", null, true);
        echo "\">Calendar</a></li>
                        </ul>
                    </li>
                  <li><a class=\"has-arrow\" href=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Commentaires</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Commentaires/index.html.twig"), "html", null, true);
        echo "\">Commentaires_index</a></li>
                                    <li><a href=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Commentaires/show.html.twig"), "html", null, true);
        echo "\">Commentaires_show</a></li>
                                    <li><a href=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Commentaires/edit.html.twig"), "html", null, true);
        echo "\">Commentaires_edit</a></li>
                                    <li><a href=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Commentaires/new.html.twig"), "html", null, true);
        echo "\">Commentaires_new</a></li>
                                </ul>
                            </li>
                    <li class=\"nav-label\">Components</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-world-2\"></i><span class=\"nav-text\">Bootstrap</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-accordion.html"), "html", null, true);
        echo "\">Accordion</a></li>
                            <li><a href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-alert.html"), "html", null, true);
        echo "\">Alert</a></li>
                            <li><a href=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-badge.html"), "html", null, true);
        echo "\">Badge</a></li>
                            <li><a href=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-button.html"), "html", null, true);
        echo "\">Button</a></li>
                            <li><a href=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-modal.html"), "html", null, true);
        echo "\">Modal</a></li>
                            <li><a href=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-button-group.html"), "html", null, true);
        echo "\">Button Group</a></li>
                            <li><a href=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-list-group.html"), "html", null, true);
        echo "\">List Group</a></li>
                            <li><a href=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-media-object.html"), "html", null, true);
        echo "\">Media Object</a></li>
                            <li><a href=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-card.html"), "html", null, true);
        echo "\">Cards</a></li>
                            <li><a href=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-carousel.html"), "html", null, true);
        echo "\">Carousel</a></li>
                            <li><a href=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-dropdown.html"), "html", null, true);
        echo "\">Dropdown</a></li>
                            <li><a href=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-popover.html"), "html", null, true);
        echo "\">Popover</a></li>
                            <li><a href=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-progressbar.html"), "html", null, true);
        echo "\">Progressbar</a></li>
                            <li><a href=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-tab.html"), "html", null, true);
        echo "\">Tab</a></li>
                            <li><a href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-typography.html"), "html", null, true);
        echo "\">Typography</a></li>
                            <li><a href=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-pagination.html"), "html", null, true);
        echo "\">Pagination</a></li>
                            <li><a href=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-grid.html"), "html", null, true);
        echo "\">Grid</a></li>

                        </ul>
                    </li>

                    <li><a class=\"has-arrow\" href=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-plug\"></i><span class=\"nav-text\">Plugins</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-select2.html"), "html", null, true);
        echo "\">Select 2</a></li>
                            <li><a href=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-nestable.html"), "html", null, true);
        echo "\">Nestedable</a></li>
                            <li><a href=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-noui-slider.html"), "html", null, true);
        echo "\">Noui Slider</a></li>
                            <li><a href=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-sweetalert.html"), "html", null, true);
        echo "\">Sweet Alert</a></li>
                            <li><a href=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-toastr.html"), "html", null, true);
        echo "\">Toastr</a></li>
                            <li><a href=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./map-jqvmap.html"), "html", null, true);
        echo "\">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("widget-basic.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i class=\"icon icon-globe-2\"></i><span
                                class=\"nav-text\">Widget</span></a></li>
                    <li class=\"nav-label\">Forms</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Forms</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-element.html"), "html", null, true);
        echo "\">Form Elements</a></li>
                            <li><a href=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-wizard.html"), "html", null, true);
        echo "\">Wizard</a></li>
                            <li><a href=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-editor-summernote.html"), "html", null, true);
        echo "\">Summernote</a></li>
                            <li><a href=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("form-pickers.html"), "html", null, true);
        echo "\">Pickers</a></li>
                            <li><a href=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("form-validation-jquery.html"), "html", null, true);
        echo "\">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Table</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-layout-25\"></i><span class=\"nav-text\">Table</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("table-bootstrap-basic.html"), "html", null, true);
        echo "\">Bootstrap</a></li>
                            <li><a href=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("table-datatable-basic.html"), "html", null, true);
        echo "\">Datatable</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-label\">Extra</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-copy-06\"></i><span class=\"nav-text\">Pages</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-register.html"), "html", null, true);
        echo "\">Register</a></li>
                            <li><a href=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-login.html"), "html", null, true);
        echo "\">Login</a></li>
                            <li><a class=\"has-arrow\" href=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Error</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-400.html"), "html", null, true);
        echo "\">Error 400</a></li>
                                    <li><a href=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-403.html"), "html", null, true);
        echo "\">Error 403</a></li>
                                    <li><a href=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-404.html"), "html", null, true);
        echo "\">Error 404</a></li>
                                    <li><a href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-500.html"), "html", null, true);
        echo "\">Error 500</a></li>
                                    <li><a href=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-503.html"), "html", null, true);
        echo "\">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-lock-screen.html"), "html", null, true);
        echo "\">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->


        
        <div class=\"content-body\">
            <!-- row -->
            
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"stat-widget-two card-body\">
                                <div class=\"stat-content\">
                                    <div class=\"stat-text\">Today Expenses </div>
                                    <div class=\"stat-digit\"> <i class=\"fa fa-usd\"></i>8500</div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-success w-85\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"stat-widget-two card-body\">
                                <div class=\"stat-content\">
                                    <div class=\"stat-text\">Income Detail</div>
                                    <div class=\"stat-digit\"> <i class=\"fa fa-usd\"></i>7800</div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-primary w-75\" role=\"progressbar\" aria-valuenow=\"78\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"stat-widget-two card-body\">
                                <div class=\"stat-content\">
                                    <div class=\"stat-text\">Task Completed</div>
                                    <div class=\"stat-digit\"> <i class=\"fa fa-usd\"></i> 500</div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-warning w-50\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"stat-widget-two card-body\">
                                <div class=\"stat-content\">
                                    <div class=\"stat-text\">Task Completed</div>
                                    <div class=\"stat-digit\"> <i class=\"fa fa-usd\"></i>650</div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-danger w-65\" role=\"progressbar\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-8 col-lg-8 col-md-8\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Sales Overview</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-lg-8\">
                                        <div id=\"morris-bar-chart\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-4\">
                        <div class=\"card\">
                            <div class=\"card-body text-center\">
                                <div class=\"m-t-10\">
                                    <h4 class=\"card-title\">Customer Feedback</h4>
                                    <h2 class=\"mt-3\">385749</h2>
                                </div>
                                <div class=\"widget-card-circle mt-5 mb-5\" id=\"info-circle-card\">
                                    <i class=\"ti-control-shuffle pa\"></i>
                                </div>
                                <ul class=\"widget-line-list m-b-15\">
                                    <li class=\"border-right\">92% <br><span class=\"text-success\"><i
                                                class=\"ti-hand-point-up\"></i> Positive</span></li>
                                    <li>8% <br><span class=\"text-danger\"><i
                                                class=\"ti-hand-point-down\"></i>Negative</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Project</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"current-progress\">
                                    <div class=\"progress-content py-2\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4\">
                                                <div class=\"progress-text\">Website</div>
                                            </div>
                                            <div class=\"col-lg-8\">
                                                <div class=\"current-progressbar\">
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-primary w-40\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            40%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-content py-2\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4\">
                                                <div class=\"progress-text\">Android</div>
                                            </div>
                                            <div class=\"col-lg-8\">
                                                <div class=\"current-progressbar\">
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-primary w-60\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            60%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-content py-2\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4\">
                                                <div class=\"progress-text\">Ios</div>
                                            </div>
                                            <div class=\"col-lg-8\">
                                                <div class=\"current-progressbar\">
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-primary w-70\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            70%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-content py-2\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4\">
                                                <div class=\"progress-text\">Mobile</div>
                                            </div>
                                            <div class=\"col-lg-8\">
                                                <div class=\"current-progressbar\">
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-primary w-90\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            90%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"testimonial-widget-one p-17\">
                                    <div class=\"testimonial-widget-one owl-carousel owl-theme\">
                                        <div class=\"item\">
                                            <div class=\"testimonial-content\">
                                                <div class=\"testimonial-text\">
                                                    <i class=\"fa fa-quote-left\"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class=\"fa fa-quote-right\"></i>
                                                </div>
                                                <div class=\"media\">
                                                    <div class=\"media-body\">
                                                        <div class=\"testimonial-author\">TYRION LANNISTER</div>
                                                        <div class=\"testimonial-author-position\">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class=\"testimonial-author-img ml-3\" src=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "./images/avatar/1.png\" alt=\"\" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <div class=\"testimonial-content\">
                                                <div class=\"testimonial-text\">
                                                    <i class=\"fa fa-quote-left\"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class=\"fa fa-quote-right\"></i>
                                                </div>
                                                <div class=\"media\">
                                                    <div class=\"media-body\">
                                                        <div class=\"testimonial-author\">TYRION LANNISTER</div>
                                                        <div class=\"testimonial-author-position\">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class=\"testimonial-author-img ml-3\" src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "./images/avatar/1.png\" alt=\"\" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <div class=\"testimonial-content\">
                                                <div class=\"testimonial-text\">
                                                    <i class=\"fa fa-quote-left\"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class=\"fa fa-quote-right\"></i>
                                                </div>
                                                <div class=\"media\">
                                                    <div class=\"media-body\">
                                                        <div class=\"testimonial-author\">TYRION LANNISTER</div>
                                                        <div class=\"testimonial-author-position\">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class=\"testimonial-author-img ml-3\" src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "./images/avatar/1.png\" alt=\"\" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Web Server</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"cpu-load-chart\">
                                    <div id=\"cpu-load\" class=\"cpu-load\"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Country</h4>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"vmap13\" class=\"vmap\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">New Orders</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table mb-0\">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Product</th>
                                                <th>quantity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class=\"round-img\">
                                                        <a href=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\"><img width=\"35\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                                    </div>
                                                </td>
                                                <td>Lew Shawon</td>
                                                <td><span>Dell-985</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class=\"badge badge-success\">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class=\"round-img\">
                                                        <a href=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\"><img width=\"35\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                                    </div>
                                                </td>
                                                <td>Lew Shawon</td>
                                                <td><span>Asus-565</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class=\"badge badge-warning\">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class=\"round-img\">
                                                        <a href=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\"><img width=\"35\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                                    </div>
                                                </td>
                                                <td>lew Shawon</td>
                                                <td><span>Dell-985</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class=\"badge badge-success\">Done</span></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class=\"round-img\">
                                                        <a href=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\"><img width=\"35\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                                    </div>
                                                </td>
                                                <td>Lew Shawon</td>
                                                <td><span>Asus-565</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class=\"badge badge-warning\">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class=\"round-img\">
                                                        <a href=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\"><img width=\"35\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                                    </div>
                                                </td>
                                                <td>lew Shawon</td>
                                                <td><span>Dell-985</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class=\"badge badge-success\">Done</span></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class=\"round-img\">
                                                        <a href=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\"><img width=\"35\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/avatar/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                                    </div>
                                                </td>
                                                <td>Lew Shawon</td>
                                                <td><span>Asus-565</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class=\"badge badge-warning\">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 col-xl-4 col-xxl-6 col-md-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Timeline</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"widget-timeline\">
                                    <ul class=\"timeline\">
                                        <li>
                                            <div class=\"timeline-badge primary\"></div>
                                            <a class=\"timeline-panel text-muted\" href=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\">
                                                <span>10 minutes ago</span>
                                                <h6 class=\"m-t-5\">Youtube, a video-sharing website, goes live.</h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class=\"timeline-badge warning\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class=\"timeline-badge danger\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\">
                                                <span>30 minutes ago</span>
                                                <h6 class=\"m-t-5\">Google acquires Youtube.</h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class=\"timeline-badge success\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\">
                                                <span>15 minutes ago</span>
                                                <h6 class=\"m-t-5\">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class=\"timeline-badge warning\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class=\"timeline-badge dark\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"";
        // line 760
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class=\"timeline-badge info\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"";
        // line 769
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\">
                                                <span>30 minutes ago</span>
                                                <h6 class=\"m-t-5\">Google acquires Youtube.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-xxl-6 col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Todo</h4>
                            </div>
                            <div class=\"card-body px-0\">
                                <div class=\"todo-list\">
                                    <div class=\"tdl-holder\">
                                        <div class=\"tdl-content widget-todo mr-4\">
                                            <ul id=\"todo_list\">
                                                <li><label><input type=\"checkbox\"><i></i><span>Get up</span><a href='";
        // line 789
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#'
                                                            class=\"ti-trash\"></a></label></li>
                                                <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a
                                                            href='";
        // line 792
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#' class=\"ti-trash\"></a></label></li>
                                                <li><label><input type=\"checkbox\"><i></i><span>Don't give up the
                                                            fight.</span><a href='";
        // line 794
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#' class=\"ti-trash\"></a></label></li>
                                                <li><label><input type=\"checkbox\" checked><i></i><span>Do something
                                                            else</span><a href='";
        // line 796
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#' class=\"ti-trash\"></a></label></li>
                                                <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a
                                                            href='";
        // line 798
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#' class=\"ti-trash\"></a></label></li>
                                                <li><label><input type=\"checkbox\"><i></i><span>Don't give up the
                                                            fight.</span><a href='";
        // line 800
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#' class=\"ti-trash\"></a></label></li>
                                            </ul>
                                        </div>
                                        <div class=\"px-4\">
                                            <input type=\"text\" class=\"tdl-new form-control\" placeholder=\"Write new item and hit 'Enter'...\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-xxl-6 col-xl-4 col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Product Sold</h4>
                                <div class=\"card-action\">
                                    <div class=\"dropdown custom-dropdown\">
                                        <div data-toggle=\"dropdown\">
                                            <i class=\"ti-more-alt\"></i>
                                        </div>
                                        <div class=\"dropdown-menu dropdown-menu-right\">
                                            <a class=\"dropdown-item\" href=\"";
        // line 821
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Option 1"), "html", null, true);
        echo "#\"></a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Option 2"), "html", null, true);
        echo "#\"></a>
                                            <a class=\"dropdown-item\" href=\"";
        // line 823
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Option 3"), "html", null, true);
        echo "#\"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"chart py-4\">
                                    <canvas id=\"sold-product\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-12 col-xxl-6 col-lg-6 col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                                <div class=\"card\">
                                    <div class=\"social-graph-wrapper widget-facebook\">
                                        <span class=\"s-icon\"><i class=\"fa fa-facebook\"></i></span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-6 border-right\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                                <p class=\"m-0\">Friends</p>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                                <p class=\"m-0\">Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                                <div class=\"card\">
                                    <div class=\"social-graph-wrapper widget-linkedin\">
                                        <span class=\"s-icon\"><i class=\"fa fa-linkedin\"></i></span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-6 border-right\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                                <p class=\"m-0\">Friends</p>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                                <p class=\"m-0\">Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                                <div class=\"card\">
                                    <div class=\"social-graph-wrapper widget-googleplus\">
                                        <span class=\"s-icon\"><i class=\"fa fa-google-plus\"></i></span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-6 border-right\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                                <p class=\"m-0\">Friends</p>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                                <p class=\"m-0\">Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                                <div class=\"card\">
                                    <div class=\"social-graph-wrapper widget-twitter\">
                                        <span class=\"s-icon\"><i class=\"fa fa-twitter\"></i></span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-6 border-right\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                                <p class=\"m-0\">Friends</p>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                                <p class=\"m-0\">Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class=\"footer\">
            <div class=\"copyright\">
                <p>Copyright © Designed &amp; Developed by <a href=\"";
        // line 937
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "#\" target=\"_blank\">Quixkit</a> 2019</p>
            </div>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  1452 => 937,  1335 => 823,  1331 => 822,  1327 => 821,  1303 => 800,  1298 => 798,  1293 => 796,  1288 => 794,  1283 => 792,  1277 => 789,  1254 => 769,  1242 => 760,  1230 => 751,  1218 => 742,  1206 => 733,  1194 => 724,  1182 => 715,  1151 => 689,  1134 => 677,  1118 => 666,  1101 => 654,  1085 => 643,  1069 => 632,  1013 => 579,  993 => 562,  973 => 545,  763 => 338,  757 => 335,  753 => 334,  749 => 333,  745 => 332,  741 => 331,  736 => 329,  732 => 328,  728 => 327,  722 => 324,  714 => 319,  710 => 318,  704 => 315,  697 => 311,  693 => 310,  689 => 309,  685 => 308,  681 => 307,  675 => 304,  669 => 301,  663 => 298,  659 => 297,  655 => 296,  651 => 295,  647 => 294,  643 => 293,  637 => 290,  629 => 285,  625 => 284,  621 => 283,  617 => 282,  613 => 281,  609 => 280,  605 => 279,  601 => 278,  597 => 277,  593 => 276,  589 => 275,  585 => 274,  581 => 273,  577 => 272,  573 => 271,  569 => 270,  565 => 269,  559 => 266,  552 => 262,  548 => 261,  544 => 260,  540 => 259,  535 => 257,  529 => 254,  523 => 251,  519 => 250,  515 => 249,  511 => 248,  506 => 246,  502 => 245,  496 => 242,  489 => 238,  485 => 237,  479 => 234,  454 => 212,  447 => 208,  440 => 204,  433 => 200,  425 => 195,  414 => 187,  402 => 178,  389 => 168,  377 => 159,  364 => 149,  352 => 140,  314 => 105,  310 => 104,  306 => 103,  302 => 102,  275 => 77,  265 => 76,  252 => 56,  246 => 53,  242 => 52,  238 => 51,  232 => 48,  226 => 45,  222 => 44,  216 => 41,  211 => 39,  207 => 38,  201 => 35,  197 => 34,  190 => 30,  186 => 29,  182 => 28,  178 => 26,  168 => 25,  156 => 17,  152 => 16,  148 => 15,  143 => 14,  133 => 13,  114 => 5,  101 => 940,  99 => 76,  80 => 59,  78 => 25,  70 => 19,  68 => 13,  64 => 12,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}HEMOTRANSFERT{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}




    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\" {{asset('./images/favicon.png')}}\">
     {% block css%}
    <link rel=\"stylesheet\" href=\"{{asset('./vendor/owl-carousel/css/owl.carousel.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('./vendor/owl-carousel/css/owl.theme.default.min.css')}}\">
    <link href=\"{{asset('./vendor/jqvmap/css/jqvmap.min.css\" rel=\"stylesheet\"')}}>
    <link href=\"{{asset('./css/style.css\" rel=\"stylesheet\"')}}>
    {% endblock %}

       




            {% block js %}

    <!-- Required vendors -->
    <script src=\"{{asset('./vendor/global/global.min.js')}}\"></script>
    <script src=\"{{asset('./js/quixnav-init.js')}}\"></script>
    <script src=\"{{asset('./js/custom.min.js')}}\"></script>


    <!-- Vectormap -->
    <script src=\"{{asset('./vendor/raphael/raphael.min.js')}}\"></script>
    <script src=\"{{asset('./vendor/morris/morris.min.js')}}\"></script>


    <script src=\"{{asset('./vendor/circle-progress/circle-progress.min.js')}}\"></script>
    <script src=\"{{asset('./vendor/chart.js/Chart.bundle.min.js')}}\"></script>

    <script src=\"{{asset('./vendor/gaugeJS/dist/gauge.min.js')}}\"></script>

    <!--  flot-chart js -->
    <script src=\"{{asset('./vendor/flot/jquery.flot.js')}}\"></script>
    <script src=\"{{asset('./vendor/flot/jquery.flot.resize.js')}}\"></script>

    <!-- Owl Carousel -->
    <script src=\"{{asset('./vendor/owl-carousel/js/owl.carousel.min.js')}}\"></script>

    <!-- Counter Up -->
    <script src=\"{{asset('./vendor/jqvmap/js/jquery.vmap.min.js')}}\"></script>
    <script src=\"{{asset('./vendor/jqvmap/js/jquery.vmap.usa.js')}}\"></script>
    <script src=\"{{asset('./vendor/jquery.counterup/jquery.counterup.min.js')}}\"></script>


    <script src=\"{{asset('./js/dashboard/dashboard-1.js')}}\"></script>

    {% endblock %}















    </head>

    {% block body %}

    <!--*******************
        Preloader start
    ********************-->
    <div id=\"preloader\">
        <div class=\"sk-three-bounce\">
            <div class=\"sk-child sk-bounce1\"></div>
            <div class=\"sk-child sk-bounce2\"></div>
            <div class=\"sk-child sk-bounce3\"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id=\"main-wrapper\">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class=\"nav-header\">
            <a href=\"{{asset('index.html')}}\" class=\"brand-logo\">
                <img class=\"logo-abbr\" src=\"{{asset('./images/logo.png')}}\" alt=\"\">
                <img class=\"logo-compact\" src=\"{{asset('./images/logo-text.png')}}./images/logo-text.png\" alt=\"\">
                <img class=\"brand-title\" src=\"{{asset('./images/logo-text.png')}}\" alt=\"\">
            </a>

            <div class=\"nav-control\">
                <div class=\"hamburger\">
                    <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class=\"header\">
            <div class=\"header-content\">
                <nav class=\"navbar navbar-expand\">
                    <div class=\"collapse navbar-collapse justify-content-between\">
                        <div class=\"header-left\">
                            <div class=\"search_bar dropdown\">
                                <span class=\"search_icon p-3 c-pointer\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-magnify\"></i>
                                </span>
                                <div class=\"dropdown-menu p-0 m-0\">
                                    <form>
                                        <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class=\"navbar-nav header-right\">
                            <li class=\"nav-item dropdown notification_dropdown\">
                                <a class=\"nav-link\" href=\"{{asset('')}}\" role=\"button\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-bell\"></i>
                                    <div class=\"pulse-css\"></div>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <ul class=\"list-unstyled\">
                                        <li class=\"media dropdown-item\">
                                            <span class=\"success\"><i class=\"ti-user\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"{{asset('')}}\">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"primary\"><i class=\"ti-shopping-cart\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"{{asset('')}}\">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"danger\"><i class=\"ti-bookmark\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"{{asset('')}}\">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"primary\"><i class=\"ti-heart\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"{{asset('')}}#\">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"success\"><i class=\"ti-image\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"{{asset('')}}#\">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class=\"all-notification\" href=\"{{asset('')}}#\">See all notifications <i
                                            class=\"ti-arrow-right\"></i></a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown header-profile\">
                                <a class=\"nav-link\" href=\"{{asset('')}}#\" role=\"button\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-account\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a href=\"{{asset('./app-profile.html')}}\" class=\"dropdown-item\">
                                        <i class=\"icon-user\"></i>
                                        <span class=\"ml-2\">Profile </span>
                                    </a>
                                    <a href=\"{{asset('./email-inbox.html')}}\" class=\"dropdown-item\">
                                        <i class=\"icon-envelope-open\"></i>
                                        <span class=\"ml-2\">Inbox </span>
                                    </a>
                                    <a href=\"{{asset('./page-login.html')}}\" class=\"dropdown-item\">
                                        <i class=\"icon-key\"></i>
                                        <span class=\"ml-2\">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class=\"quixnav\">
            <div class=\"quixnav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                    <li class=\"nav-label first\">Main Menu</li>
                    <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{asset('./index.html')}}\">Dashboard 1</a></li>
                            <li><a href=\"{{asset('./index2.html')}}\">Dashboard 2</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Apps</li>
                    <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\"><i
                                class=\"icon icon-app-store\"></i><span class=\"nav-text\">Apps</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{asset('./app-profile.html')}}\">khaled-test</a></li>
                            <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\">Actualites</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"{{asset('actualites/index.html.twig')}}\">Actualites_index</a></li>
                                    <li><a href=\"{{asset('actualites/show.html.twig')}}\">Actualites_show</a></li>
                                    <li><a href=\"{{asset('actualites/edit.html.twig')}}\">Actualites_edit</a></li>
                                    <li><a href=\"{{asset('actualites/new.html.twig')}}\">Actualites_new</a></li>
                                </ul>
                            </li>
                            <li><a href=\"{{asset('./app-calender.html')}}\">Calendar</a></li>
                        </ul>
                    </li>
                  <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\">Commentaires</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"{{asset('Commentaires/index.html.twig')}}\">Commentaires_index</a></li>
                                    <li><a href=\"{{asset('Commentaires/show.html.twig')}}\">Commentaires_show</a></li>
                                    <li><a href=\"{{asset('Commentaires/edit.html.twig')}}\">Commentaires_edit</a></li>
                                    <li><a href=\"{{asset('Commentaires/new.html.twig')}}\">Commentaires_new</a></li>
                                </ul>
                            </li>
                    <li class=\"nav-label\">Components</li>
                    <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\"><i
                                class=\"icon icon-world-2\"></i><span class=\"nav-text\">Bootstrap</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{asset('./ui-accordion.html')}}\">Accordion</a></li>
                            <li><a href=\"{{asset('./ui-alert.html')}}\">Alert</a></li>
                            <li><a href=\"{{asset('./ui-badge.html')}}\">Badge</a></li>
                            <li><a href=\"{{asset('./ui-button.html')}}\">Button</a></li>
                            <li><a href=\"{{asset('./ui-modal.html')}}\">Modal</a></li>
                            <li><a href=\"{{asset('./ui-button-group.html')}}\">Button Group</a></li>
                            <li><a href=\"{{asset('./ui-list-group.html')}}\">List Group</a></li>
                            <li><a href=\"{{asset('./ui-media-object.html')}}\">Media Object</a></li>
                            <li><a href=\"{{asset('./ui-card.html')}}\">Cards</a></li>
                            <li><a href=\"{{asset('./ui-carousel.html')}}\">Carousel</a></li>
                            <li><a href=\"{{asset('./ui-dropdown.html')}}\">Dropdown</a></li>
                            <li><a href=\"{{asset('./ui-popover.html')}}\">Popover</a></li>
                            <li><a href=\"{{asset('./ui-progressbar.html')}}\">Progressbar</a></li>
                            <li><a href=\"{{asset('./ui-tab.html')}}\">Tab</a></li>
                            <li><a href=\"{{asset('./ui-typography.html')}}\">Typography</a></li>
                            <li><a href=\"{{asset('./ui-pagination.html')}}\">Pagination</a></li>
                            <li><a href=\"{{asset('./ui-grid.html')}}\">Grid</a></li>

                        </ul>
                    </li>

                    <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\"><i
                                class=\"icon icon-plug\"></i><span class=\"nav-text\">Plugins</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{asset('./uc-select2.html')}}\">Select 2</a></li>
                            <li><a href=\"{{asset('./uc-nestable.html')}}\">Nestedable</a></li>
                            <li><a href=\"{{asset('./uc-noui-slider.html')}}\">Noui Slider</a></li>
                            <li><a href=\"{{asset('./uc-sweetalert.html')}}\">Sweet Alert</a></li>
                            <li><a href=\"{{asset('./uc-toastr.html')}}\">Toastr</a></li>
                            <li><a href=\"{{asset('./map-jqvmap.html')}}\">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href=\"{{asset('widget-basic.html')}}\" aria-expanded=\"false\"><i class=\"icon icon-globe-2\"></i><span
                                class=\"nav-text\">Widget</span></a></li>
                    <li class=\"nav-label\">Forms</li>
                    <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Forms</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{asset('./form-element.html')}}\">Form Elements</a></li>
                            <li><a href=\"{{asset('./form-wizard.html')}}\">Wizard</a></li>
                            <li><a href=\"{{asset('./form-editor-summernote.html')}}\">Summernote</a></li>
                            <li><a href=\"{{asset('form-pickers.html')}}\">Pickers</a></li>
                            <li><a href=\"{{asset('form-validation-jquery.html')}}\">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Table</li>
                    <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\"><i
                                class=\"icon icon-layout-25\"></i><span class=\"nav-text\">Table</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{asset('table-bootstrap-basic.html')}}\">Bootstrap</a></li>
                            <li><a href=\"{{asset('table-datatable-basic.html')}}\">Datatable</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-label\">Extra</li>
                    <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-copy-06\"></i><span class=\"nav-text\">Pages</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{asset('./page-register.html')}}\">Register</a></li>
                            <li><a href=\"{{asset('./page-login.html')}}\">Login</a></li>
                            <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\">Error</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"{{asset('./page-error-400.html')}}\">Error 400</a></li>
                                    <li><a href=\"{{asset('./page-error-403.html')}}\">Error 403</a></li>
                                    <li><a href=\"{{asset('./page-error-404.html')}}\">Error 404</a></li>
                                    <li><a href=\"{{asset('./page-error-500.html')}}\">Error 500</a></li>
                                    <li><a href=\"{{asset('./page-error-503.html')}}\">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href=\"{{asset('./page-lock-screen.html')}}\">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->


        
        <div class=\"content-body\">
            <!-- row -->
            
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"stat-widget-two card-body\">
                                <div class=\"stat-content\">
                                    <div class=\"stat-text\">Today Expenses </div>
                                    <div class=\"stat-digit\"> <i class=\"fa fa-usd\"></i>8500</div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-success w-85\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"stat-widget-two card-body\">
                                <div class=\"stat-content\">
                                    <div class=\"stat-text\">Income Detail</div>
                                    <div class=\"stat-digit\"> <i class=\"fa fa-usd\"></i>7800</div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-primary w-75\" role=\"progressbar\" aria-valuenow=\"78\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"stat-widget-two card-body\">
                                <div class=\"stat-content\">
                                    <div class=\"stat-text\">Task Completed</div>
                                    <div class=\"stat-digit\"> <i class=\"fa fa-usd\"></i> 500</div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-warning w-50\" role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"stat-widget-two card-body\">
                                <div class=\"stat-content\">
                                    <div class=\"stat-text\">Task Completed</div>
                                    <div class=\"stat-digit\"> <i class=\"fa fa-usd\"></i>650</div>
                                </div>
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-danger w-65\" role=\"progressbar\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-8 col-lg-8 col-md-8\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Sales Overview</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-xl-12 col-lg-8\">
                                        <div id=\"morris-bar-chart\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-4\">
                        <div class=\"card\">
                            <div class=\"card-body text-center\">
                                <div class=\"m-t-10\">
                                    <h4 class=\"card-title\">Customer Feedback</h4>
                                    <h2 class=\"mt-3\">385749</h2>
                                </div>
                                <div class=\"widget-card-circle mt-5 mb-5\" id=\"info-circle-card\">
                                    <i class=\"ti-control-shuffle pa\"></i>
                                </div>
                                <ul class=\"widget-line-list m-b-15\">
                                    <li class=\"border-right\">92% <br><span class=\"text-success\"><i
                                                class=\"ti-hand-point-up\"></i> Positive</span></li>
                                    <li>8% <br><span class=\"text-danger\"><i
                                                class=\"ti-hand-point-down\"></i>Negative</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Project</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"current-progress\">
                                    <div class=\"progress-content py-2\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4\">
                                                <div class=\"progress-text\">Website</div>
                                            </div>
                                            <div class=\"col-lg-8\">
                                                <div class=\"current-progressbar\">
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-primary w-40\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            40%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-content py-2\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4\">
                                                <div class=\"progress-text\">Android</div>
                                            </div>
                                            <div class=\"col-lg-8\">
                                                <div class=\"current-progressbar\">
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-primary w-60\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            60%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-content py-2\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4\">
                                                <div class=\"progress-text\">Ios</div>
                                            </div>
                                            <div class=\"col-lg-8\">
                                                <div class=\"current-progressbar\">
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-primary w-70\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            70%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"progress-content py-2\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4\">
                                                <div class=\"progress-text\">Mobile</div>
                                            </div>
                                            <div class=\"col-lg-8\">
                                                <div class=\"current-progressbar\">
                                                    <div class=\"progress\">
                                                        <div class=\"progress-bar progress-bar-primary w-90\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            90%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"testimonial-widget-one p-17\">
                                    <div class=\"testimonial-widget-one owl-carousel owl-theme\">
                                        <div class=\"item\">
                                            <div class=\"testimonial-content\">
                                                <div class=\"testimonial-text\">
                                                    <i class=\"fa fa-quote-left\"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class=\"fa fa-quote-right\"></i>
                                                </div>
                                                <div class=\"media\">
                                                    <div class=\"media-body\">
                                                        <div class=\"testimonial-author\">TYRION LANNISTER</div>
                                                        <div class=\"testimonial-author-position\">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class=\"testimonial-author-img ml-3\" src=\"{{asset('')}}./images/avatar/1.png\" alt=\"\" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <div class=\"testimonial-content\">
                                                <div class=\"testimonial-text\">
                                                    <i class=\"fa fa-quote-left\"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class=\"fa fa-quote-right\"></i>
                                                </div>
                                                <div class=\"media\">
                                                    <div class=\"media-body\">
                                                        <div class=\"testimonial-author\">TYRION LANNISTER</div>
                                                        <div class=\"testimonial-author-position\">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class=\"testimonial-author-img ml-3\" src=\"{{asset('')}}./images/avatar/1.png\" alt=\"\" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <div class=\"testimonial-content\">
                                                <div class=\"testimonial-text\">
                                                    <i class=\"fa fa-quote-left\"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                                    consectetur adipisicing elit.
                                                    <i class=\"fa fa-quote-right\"></i>
                                                </div>
                                                <div class=\"media\">
                                                    <div class=\"media-body\">
                                                        <div class=\"testimonial-author\">TYRION LANNISTER</div>
                                                        <div class=\"testimonial-author-position\">Founder-Ceo. Dell Corp
                                                        </div>
                                                    </div>
                                                    <img class=\"testimonial-author-img ml-3\" src=\"{{asset('')}}./images/avatar/1.png\" alt=\"\" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Web Server</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"cpu-load-chart\">
                                    <div id=\"cpu-load\" class=\"cpu-load\"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Country</h4>
                            </div>
                            <div class=\"card-body\">
                                <div id=\"vmap13\" class=\"vmap\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">New Orders</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table mb-0\">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Product</th>
                                                <th>quantity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class=\"round-img\">
                                                        <a href=\"{{asset('')}}\"><img width=\"35\" src=\"{{asset('./images/avatar/1.png')}}\" alt=\"\"></a>
                                                    </div>
                                                </td>
                                                <td>Lew Shawon</td>
                                                <td><span>Dell-985</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class=\"badge badge-success\">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class=\"round-img\">
                                                        <a href=\"{{asset('')}}\"><img width=\"35\" src=\"{{asset('./images/avatar/1.png')}}\" alt=\"\"></a>
                                                    </div>
                                                </td>
                                                <td>Lew Shawon</td>
                                                <td><span>Asus-565</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class=\"badge badge-warning\">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class=\"round-img\">
                                                        <a href=\"{{asset('')}}\"><img width=\"35\" src=\"{{asset('./images/avatar/1.png')}}\" alt=\"\"></a>
                                                    </div>
                                                </td>
                                                <td>lew Shawon</td>
                                                <td><span>Dell-985</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class=\"badge badge-success\">Done</span></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class=\"round-img\">
                                                        <a href=\"{{asset('')}}\"><img width=\"35\" src=\"{{asset('./images/avatar/1.png')}}\" alt=\"\"></a>
                                                    </div>
                                                </td>
                                                <td>Lew Shawon</td>
                                                <td><span>Asus-565</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class=\"badge badge-warning\">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class=\"round-img\">
                                                        <a href=\"{{asset('')}}\"><img width=\"35\" src=\"{{asset('./images/avatar/1.png')}}\" alt=\"\"></a>
                                                    </div>
                                                </td>
                                                <td>lew Shawon</td>
                                                <td><span>Dell-985</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class=\"badge badge-success\">Done</span></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class=\"round-img\">
                                                        <a href=\"{{asset('')}}\"><img width=\"35\" src=\"{{asset('./images/avatar/1.png')}}\" alt=\"\"></a>
                                                    </div>
                                                </td>
                                                <td>Lew Shawon</td>
                                                <td><span>Asus-565</span></td>
                                                <td><span>456 pcs</span></td>
                                                <td><span class=\"badge badge-warning\">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 col-xl-4 col-xxl-6 col-md-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Timeline</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"widget-timeline\">
                                    <ul class=\"timeline\">
                                        <li>
                                            <div class=\"timeline-badge primary\"></div>
                                            <a class=\"timeline-panel text-muted\" href=\"{{asset('')}}#\">
                                                <span>10 minutes ago</span>
                                                <h6 class=\"m-t-5\">Youtube, a video-sharing website, goes live.</h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class=\"timeline-badge warning\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"{{asset('')}}#\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class=\"timeline-badge danger\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"{{asset('')}}#\">
                                                <span>30 minutes ago</span>
                                                <h6 class=\"m-t-5\">Google acquires Youtube.</h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class=\"timeline-badge success\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"{{asset('')}}#\">
                                                <span>15 minutes ago</span>
                                                <h6 class=\"m-t-5\">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class=\"timeline-badge warning\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"{{asset('')}}#\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class=\"timeline-badge dark\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"{{asset('')}}#\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>

                                        <li>
                                            <div class=\"timeline-badge info\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"{{asset('')}}#\">
                                                <span>30 minutes ago</span>
                                                <h6 class=\"m-t-5\">Google acquires Youtube.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-xxl-6 col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Todo</h4>
                            </div>
                            <div class=\"card-body px-0\">
                                <div class=\"todo-list\">
                                    <div class=\"tdl-holder\">
                                        <div class=\"tdl-content widget-todo mr-4\">
                                            <ul id=\"todo_list\">
                                                <li><label><input type=\"checkbox\"><i></i><span>Get up</span><a href='{{asset('')}}#'
                                                            class=\"ti-trash\"></a></label></li>
                                                <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a
                                                            href='{{asset('')}}#' class=\"ti-trash\"></a></label></li>
                                                <li><label><input type=\"checkbox\"><i></i><span>Don't give up the
                                                            fight.</span><a href='{{asset('')}}#' class=\"ti-trash\"></a></label></li>
                                                <li><label><input type=\"checkbox\" checked><i></i><span>Do something
                                                            else</span><a href='{{asset('')}}#' class=\"ti-trash\"></a></label></li>
                                                <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a
                                                            href='{{asset('')}}#' class=\"ti-trash\"></a></label></li>
                                                <li><label><input type=\"checkbox\"><i></i><span>Don't give up the
                                                            fight.</span><a href='{{asset('')}}#' class=\"ti-trash\"></a></label></li>
                                            </ul>
                                        </div>
                                        <div class=\"px-4\">
                                            <input type=\"text\" class=\"tdl-new form-control\" placeholder=\"Write new item and hit 'Enter'...\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-12 col-xxl-6 col-xl-4 col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Product Sold</h4>
                                <div class=\"card-action\">
                                    <div class=\"dropdown custom-dropdown\">
                                        <div data-toggle=\"dropdown\">
                                            <i class=\"ti-more-alt\"></i>
                                        </div>
                                        <div class=\"dropdown-menu dropdown-menu-right\">
                                            <a class=\"dropdown-item\" href=\"{{asset('Option 1')}}#\"></a>
                                            <a class=\"dropdown-item\" href=\"{{asset('Option 2')}}#\"></a>
                                            <a class=\"dropdown-item\" href=\"{{asset('Option 3')}}#\"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"chart py-4\">
                                    <canvas id=\"sold-product\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-12 col-xxl-6 col-lg-6 col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                                <div class=\"card\">
                                    <div class=\"social-graph-wrapper widget-facebook\">
                                        <span class=\"s-icon\"><i class=\"fa fa-facebook\"></i></span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-6 border-right\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                                <p class=\"m-0\">Friends</p>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                                <p class=\"m-0\">Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                                <div class=\"card\">
                                    <div class=\"social-graph-wrapper widget-linkedin\">
                                        <span class=\"s-icon\"><i class=\"fa fa-linkedin\"></i></span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-6 border-right\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                                <p class=\"m-0\">Friends</p>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                                <p class=\"m-0\">Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                                <div class=\"card\">
                                    <div class=\"social-graph-wrapper widget-googleplus\">
                                        <span class=\"s-icon\"><i class=\"fa fa-google-plus\"></i></span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-6 border-right\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                                <p class=\"m-0\">Friends</p>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                                <p class=\"m-0\">Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                                <div class=\"card\">
                                    <div class=\"social-graph-wrapper widget-twitter\">
                                        <span class=\"s-icon\"><i class=\"fa fa-twitter\"></i></span>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-6 border-right\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                                <p class=\"m-0\">Friends</p>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                                <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                                <p class=\"m-0\">Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class=\"footer\">
            <div class=\"copyright\">
                <p>Copyright © Designed &amp; Developed by <a href=\"{{asset('')}}#\" target=\"_blank\">Quixkit</a> 2019</p>
            </div>
        </div>
        {% endblock %} 
 
</html>
", "base.html.twig", "C:\\Users\\khale\\khaled\\templates\\base.html.twig");
    }
}
