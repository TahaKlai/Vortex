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

/* front/show.html.twig */
class __TwigTemplate_d90c5daa09eabce0694af98b11fbd710 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Actualites";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "






















<!DOCTYPE html>

<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/favicon.png"), "html", null, true);
        echo "\">
    <!-- Custom Stylesheet -->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body>

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
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\" class=\"brand-logo\">
                <img class=\"logo-abbr\" src=\"./images/logo.png\" alt=\"\">
                <img class=\"logo-compact\" src=\"./images/logo-text.png\" alt=\"\">
                <img class=\"brand-title\" src=\"./images/logo-text.png\" alt=\"\">
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
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
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
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
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
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
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
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
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
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"success\"><i class=\"ti-image\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class=\"all-notification\" href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">See all notifications <i
                                            class=\"ti-arrow-right\"></i></a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown header-profile\">
                                <a class=\"nav-link\" href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" role=\"button\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-account\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-profile.html"), "html", null, true);
        echo "\" class=\"dropdown-item\">
                                        <i class=\"icon-user\"></i>
                                        <span class=\"ml-2\">Profile </span>
                                    </a>
                                    <a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./email-inbox.html"), "html", null, true);
        echo "\" class=\"dropdown-item\">
                                        <i class=\"icon-envelope-open\"></i>
                                        <span class=\"ml-2\">Inbox </span>
                                    </a>
                                    <a href=\"";
        // line 182
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
                    <!-- <li><a href=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\"><i class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                    </li> -->
                    <li><a class=\"has-arrow\" href=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index.html"), "html", null, true);
        echo "\">Dashboard 1</a></li>
                            <li><a href=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index2.html"), "html", null, true);
        echo "\">Dashboard 2</a></li></ul>
                    </li>
                    
                    <li class=\"nav-label\">Apps</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-app-store\"></i><span class=\"nav-text\">Apps</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-profile.html"), "html", null, true);
        echo "\">Profile</a></li>
                            <li><a class=\"has-arrow\" href=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Email</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./email-compose.html"), "html", null, true);
        echo "\">Compose</a></li>
                                    <li><a href=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./email-inbox.html"), "html", null, true);
        echo "\">Inbox</a></li>
                                    <li><a href=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./email-read.html"), "html", null, true);
        echo "\">Read</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-calender.html"), "html", null, true);
        echo "\">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-chart-bar-33\"></i><span class=\"nav-text\">Charts</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./chart-flot.html"), "html", null, true);
        echo "\">Flot</a></li>
                            <li><a href=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./chart-morris.html"), "html", null, true);
        echo "\">Morris</a></li>
                            <li><a href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./chart-chartjs.html"), "html", null, true);
        echo "\">Chartjs</a></li>
                            <li><a href=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./chart-chartist.html"), "html", null, true);
        echo "\">Chartist</a></li>
                            <li><a href=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./chart-sparkline.html"), "html", null, true);
        echo "\">Sparkline</a></li>
                            <li><a href=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./chart-peity.html"), "html", null, true);
        echo "\">Peity</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Components</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-world-2\"></i><span class=\"nav-text\">Bootstrap</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-accordion.html"), "html", null, true);
        echo "\">Accordion</a></li>
                            <li><a href=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-alert.html"), "html", null, true);
        echo "\">Alert</a></li>
                            <li><a href=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-badge.html"), "html", null, true);
        echo "\">Badge</a></li>
                            <li><a href=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-button.html"), "html", null, true);
        echo "\">Button</a></li>
                            <li><a href=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-modal.html"), "html", null, true);
        echo "\">Modal</a></li>
                            <li><a href=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-button-group.html"), "html", null, true);
        echo "\">Button Group</a></li>
                            <li><a href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-list-group.html"), "html", null, true);
        echo "\">List Group</a></li>
                            <li><a href=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-media-object.html"), "html", null, true);
        echo "\">Media Object</a></li>
                            <li><a href=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/ui-card.html"), "html", null, true);
        echo ".\">Cards</a></li>
                            <li><a href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-carousel.html"), "html", null, true);
        echo "\">Carousel</a></li>
                            <li><a href=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-dropdown.html"), "html", null, true);
        echo "\">Dropdown</a></li>
                            <li><a href=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-popover.html"), "html", null, true);
        echo "\">Popover</a></li>
                            <li><a href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-progressbar.html"), "html", null, true);
        echo "\">Progressbar</a></li>
                            <li><a href=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-tab.html"), "html", null, true);
        echo "\">Tab</a></li>
                            <li><a href=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-typography.html"), "html", null, true);
        echo "\">Typography</a></li>
                            <li><a href=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-pagination.html"), "html", null, true);
        echo "\">Pagination</a></li>
                            <li><a href=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-grid.html"), "html", null, true);
        echo "\">Grid</a></li>

                        </ul>
                    </li>

                    <li><a class=\"has-arrow\" href=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-plug\"></i><span class=\"nav-text\">Plugins</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-select2.html"), "html", null, true);
        echo "\">Select 2</a></li>
                            <li><a href=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-nestable.html"), "html", null, true);
        echo "\">Nestedable</a></li>
                            <li><a href=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-noui-slider.html"), "html", null, true);
        echo "\">Noui Slider</a></li>
                            <li><a href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-sweetalert.html"), "html", null, true);
        echo "\">Sweet Alert</a></li>
                            <li><a href=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-toastr.html"), "html", null, true);
        echo "\">Toastr</a></li>
                            <li><a href=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./map-jqvmap.html"), "html", null, true);
        echo "\">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("widget-basic.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i class=\"icon icon-globe-2\"></i><span
                                class=\"nav-text\">Widget</span></a></li>
                    <li class=\"nav-label\">Forms</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Forms</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-element.html"), "html", null, true);
        echo "\">Form Elements</a></li>
                            <li><a href=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-wizard.html"), "html", null, true);
        echo "\">Wizard</a></li>
                            <li><a href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-editor-summernote.html"), "html", null, true);
        echo "\">Summernote</a></li>
                            <li><a href=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("form-pickers.html"), "html", null, true);
        echo "\">Pickers</a></li>
                            <li><a href=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("form-validation-jquery.html"), "html", null, true);
        echo "\">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Table</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-layout-25\"></i><span class=\"nav-text\">Table</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("table-bootstrap-basic.html"), "html", null, true);
        echo "\">Bootstrap</a></li>
                            <li><a href=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("table-datatable-basic.html"), "html", null, true);
        echo "\">Datatable</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-label\">Extra</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-copy-06\"></i><span class=\"nav-text\">Pages</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-register.html"), "html", null, true);
        echo "\">Register</a></li>
                            <li><a href=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-login.html"), "html", null, true);
        echo "\">Login</a></li>
                            <li><a class=\"has-arrow\" href=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Error</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-400.html"), "html", null, true);
        echo "\">Error 400</a></li>
                                    <li><a href=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-403.html"), "html", null, true);
        echo "\">Error 403</a></li>
                                    <li><a href=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-404.html"), "html", null, true);
        echo "\">Error 404</a></li>
                                    <li><a href=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-500.html"), "html", null, true);
        echo "\">Error 500</a></li>
                                    <li><a href=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-503.html"), "html", null, true);
        echo "\">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 312
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
            <div class=\"container-fluid\">
                <div class=\"row page-titles mx-0\">
                    <div class=\"col-sm-6 p-md-0\">
                        <div class=\"welcome-text\">
                            <h4>Hi,khaled welcome back!</h4>
                            <p class=\"mb-1\">Validation</p>
                        </div>
                    </div>
                    <div class=\"col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\">Form</a></li>
                            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\">Validation</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Form Validation</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"form-validation\">
                                    <form class=\"form-valide\" action=\"#\" method=\"post\">
                                        <div class=\"row\">
                                            <div class=\"col-xl-6\">
                                                <div class=\"form-group row\">
                                                   
                                                   
                                                  
                                 
                                            




           <div class=\"welcome-text\">
                             
      </div> 



   <h1>Actualites</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 375
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 375, $this->source); })()), "id", [], "any", false, false, false, 375), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 379
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 379, $this->source); })()), "titre", [], "any", false, false, false, 379), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 383
        ((twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 383, $this->source); })()), "date", [], "any", false, false, false, 383)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 383, $this->source); })()), "date", [], "any", false, false, false, 383), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Priorite</th>
                <td>";
        // line 387
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 387, $this->source); })()), "priorite", [], "any", false, false, false, 387), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td>";
        // line 391
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 391, $this->source); })()), "categorie", [], "any", false, false, false, 391), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Discription</th>
                <td>";
        // line 395
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 395, $this->source); })()), "discription", [], "any", false, false, false, 395), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

<style>
    .action-buttons {
        margin-bottom: 10px;
    }
    .action-buttons a {
        margin-right: 10px;
        padding: 8px 16px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }
    .action-buttons a:hover {
        background-color: #0056b3;
    }
</style>

<div class=\"action-buttons\">
    <a href=\"";
        // line 419
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualites_index");
        echo "\">back to list</a>
    <a href=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualites_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 420, $this->source); })()), "id", [], "any", false, false, false, 420)]), "html", null, true);
        echo "\">edit</a>
    ";
        // line 421
        echo twig_include($this->env, $context, "actualites/_delete_form.html.twig");
        echo "
</div>

      





                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Vertical Forms with icon</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"basic-form\">
                                    <form class=\"form-valide-with-icon\" action=\"#\" method=\"post\">
                                        <div class=\"form-group\">
                                            <label class=\"text-label\">Username</label>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\"> <i class=\"fa fa-user\"></i> </span>
                                                </div>
                                                <input type=\"text\" class=\"form-control\" id=\"val-username1\" name=\"val-username\" placeholder=\"Enter a username..\">
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"text-label\">Password *</label>
                                            <div class=\"input-group transparent-append\">
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\"> <i class=\"fa fa-lock\"></i> </span>
                                                </div>
                                                <input type=\"password\" class=\"form-control\" id=\"val-password1\" name=\"val-password\" placeholder=\"Choose a safe one..\">
                                                <div class=\"input-group-append show-pass\">
                                                    <span class=\"input-group-text\"> <i class=\"fa fa-eye-slash\"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"form-check\">
                                                <input id=\"checkbox1\" class=\"form-check-input\" type=\"checkbox\">
                                                <label for=\"checkbox1\" class=\"form-check-label\">Check me out</label>
                                            </div>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                                        <button type=\"submit\" class=\"btn btn-light\">cencel</button>
                                    </form>
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
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" target=\"_blank\">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src=\" ";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/quixnav-init.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/custom.min.js"), "html", null, true);
        echo "\"></script>
    



    <!-- Jquery Validation -->
    <script src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Form validate init -->
    <script src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/plugins-init/jquery.validate-init.js"), "html", null, true);
        echo "\"></script>

</body>

</html>






















";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/show.html.twig";
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
        return array (  889 => 527,  884 => 525,  875 => 519,  871 => 518,  867 => 517,  839 => 492,  765 => 421,  761 => 420,  757 => 419,  730 => 395,  723 => 391,  716 => 387,  709 => 383,  702 => 379,  695 => 375,  654 => 337,  650 => 336,  623 => 312,  617 => 309,  613 => 308,  609 => 307,  605 => 306,  601 => 305,  596 => 303,  592 => 302,  588 => 301,  582 => 298,  574 => 293,  570 => 292,  564 => 289,  557 => 285,  553 => 284,  549 => 283,  545 => 282,  541 => 281,  535 => 278,  529 => 275,  523 => 272,  519 => 271,  515 => 270,  511 => 269,  507 => 268,  503 => 267,  497 => 264,  489 => 259,  485 => 258,  481 => 257,  477 => 256,  473 => 255,  469 => 254,  465 => 253,  461 => 252,  457 => 251,  453 => 250,  449 => 249,  445 => 248,  441 => 247,  437 => 246,  433 => 245,  429 => 244,  425 => 243,  419 => 240,  412 => 236,  408 => 235,  404 => 234,  400 => 233,  396 => 232,  392 => 231,  386 => 228,  380 => 225,  374 => 222,  370 => 221,  366 => 220,  361 => 218,  357 => 217,  351 => 214,  344 => 210,  340 => 209,  334 => 206,  329 => 204,  304 => 182,  297 => 178,  290 => 174,  283 => 170,  275 => 165,  264 => 157,  252 => 148,  239 => 138,  227 => 129,  214 => 119,  202 => 110,  161 => 72,  128 => 42,  123 => 40,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}New Actualites{% endblock %}

{% block body %}























<!DOCTYPE html>

<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{asset('../images/favicon.png')}}\">
    <!-- Custom Stylesheet -->
    <link href=\"{{asset('./css/style.css')}}\" rel=\"stylesheet\">

</head>

<body>

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
                <img class=\"logo-abbr\" src=\"./images/logo.png\" alt=\"\">
                <img class=\"logo-compact\" src=\"./images/logo-text.png\" alt=\"\">
                <img class=\"brand-title\" src=\"./images/logo-text.png\" alt=\"\">
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
                                <a class=\"nav-link\" href=\"{{asset('#')}}\" role=\"button\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-bell\"></i>
                                    <div class=\"pulse-css\"></div>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <ul class=\"list-unstyled\">
                                        <li class=\"media dropdown-item\">
                                            <span class=\"success\"><i class=\"ti-user\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"{{asset('#')}}\">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"primary\"><i class=\"ti-shopping-cart\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"{{asset('#')}}\">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"danger\"><i class=\"ti-bookmark\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"{{asset('#')}}\">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"primary\"><i class=\"ti-heart\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"{{asset('#')}}\">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"success\"><i class=\"ti-image\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"{{asset('#')}}\">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class=\"all-notification\" href=\"{{asset('#')}}\">See all notifications <i
                                            class=\"ti-arrow-right\"></i></a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown header-profile\">
                                <a class=\"nav-link\" href=\"{{asset('#')}}\" role=\"button\" data-toggle=\"dropdown\">
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
                    <!-- <li><a href=\"{{asset('index.html')}}\"><i class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                    </li> -->
                    <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{asset('./index.html')}}\">Dashboard 1</a></li>
                            <li><a href=\"{{asset('./index2.html')}}\">Dashboard 2</a></li></ul>
                    </li>
                    
                    <li class=\"nav-label\">Apps</li>
                    <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\"><i
                                class=\"icon icon-app-store\"></i><span class=\"nav-text\">Apps</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{asset('./app-profile.html')}}\">Profile</a></li>
                            <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\">Email</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"{{asset('./email-compose.html')}}\">Compose</a></li>
                                    <li><a href=\"{{asset('./email-inbox.html')}}\">Inbox</a></li>
                                    <li><a href=\"{{asset('./email-read.html')}}\">Read</a></li>
                                </ul>
                            </li>
                            <li><a href=\"{{asset('./app-calender.html')}}\">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a class=\"has-arrow\" href=\"{{asset('javascript:void()')}}\" aria-expanded=\"false\"><i
                                class=\"icon icon-chart-bar-33\"></i><span class=\"nav-text\">Charts</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{asset('./chart-flot.html')}}\">Flot</a></li>
                            <li><a href=\"{{asset('./chart-morris.html')}}\">Morris</a></li>
                            <li><a href=\"{{asset('./chart-chartjs.html')}}\">Chartjs</a></li>
                            <li><a href=\"{{asset('./chart-chartist.html')}}\">Chartist</a></li>
                            <li><a href=\"{{asset('./chart-sparkline.html')}}\">Sparkline</a></li>
                            <li><a href=\"{{asset('./chart-peity.html')}}\">Peity</a></li>
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
                            <li><a href=\"{{asset('/ui-card.html')}}.\">Cards</a></li>
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
            <div class=\"container-fluid\">
                <div class=\"row page-titles mx-0\">
                    <div class=\"col-sm-6 p-md-0\">
                        <div class=\"welcome-text\">
                            <h4>Hi,khaled welcome back!</h4>
                            <p class=\"mb-1\">Validation</p>
                        </div>
                    </div>
                    <div class=\"col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex\">
                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\"><a href=\"{{asset('javascript:void(0)')}}\">Form</a></li>
                            <li class=\"breadcrumb-item active\"><a href=\"{{asset('javascript:void(0)')}}\">Validation</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Form Validation</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"form-validation\">
                                    <form class=\"form-valide\" action=\"#\" method=\"post\">
                                        <div class=\"row\">
                                            <div class=\"col-xl-6\">
                                                <div class=\"form-group row\">
                                                   
                                                   
                                                  
                                 
                                            




           <div class=\"welcome-text\">
                             
      </div> 



   <h1>Actualites</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ actualite.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ actualite.titre }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ actualite.date ? actualite.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Priorite</th>
                <td>{{ actualite.priorite }}</td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td>{{ actualite.categorie }}</td>
            </tr>
            <tr>
                <th>Discription</th>
                <td>{{ actualite.discription }}</td>
            </tr>
        </tbody>
    </table>

<style>
    .action-buttons {
        margin-bottom: 10px;
    }
    .action-buttons a {
        margin-right: 10px;
        padding: 8px 16px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }
    .action-buttons a:hover {
        background-color: #0056b3;
    }
</style>

<div class=\"action-buttons\">
    <a href=\"{{ path('app_actualites_index') }}\">back to list</a>
    <a href=\"{{ path('app_actualites_edit', {'id': actualite.id}) }}\">edit</a>
    {{ include('actualites/_delete_form.html.twig') }}
</div>

      





                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Vertical Forms with icon</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"basic-form\">
                                    <form class=\"form-valide-with-icon\" action=\"#\" method=\"post\">
                                        <div class=\"form-group\">
                                            <label class=\"text-label\">Username</label>
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\"> <i class=\"fa fa-user\"></i> </span>
                                                </div>
                                                <input type=\"text\" class=\"form-control\" id=\"val-username1\" name=\"val-username\" placeholder=\"Enter a username..\">
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"text-label\">Password *</label>
                                            <div class=\"input-group transparent-append\">
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\"> <i class=\"fa fa-lock\"></i> </span>
                                                </div>
                                                <input type=\"password\" class=\"form-control\" id=\"val-password1\" name=\"val-password\" placeholder=\"Choose a safe one..\">
                                                <div class=\"input-group-append show-pass\">
                                                    <span class=\"input-group-text\"> <i class=\"fa fa-eye-slash\"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"form-check\">
                                                <input id=\"checkbox1\" class=\"form-check-input\" type=\"checkbox\">
                                                <label for=\"checkbox1\" class=\"form-check-label\">Check me out</label>
                                            </div>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                                        <button type=\"submit\" class=\"btn btn-light\">cencel</button>
                                    </form>
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
                <p>Copyright © Designed &amp; Developed by <a href=\"{{asset('#')}}\" target=\"_blank\">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src=\" {{asset('../vendor/global/global.min.js')}}\"></script>
    <script src=\"{{asset('./js/quixnav-init.js')}}\"></script>
    <script src=\"{{asset('./js/custom.min.js')}}\"></script>
    



    <!-- Jquery Validation -->
    <script src=\"{{asset('./vendor/jquery-validation/jquery.validate.min.js')}}\"></script>
    <!-- Form validate init -->
    <script src=\"{{asset('./js/plugins-init/jquery.validate-init.js')}}\"></script>

</body>

</html>






















{% endblock %}
", "front/show.html.twig", "C:\\Users\\khale\\khaled\\templates\\front\\show.html.twig");
    }
}
