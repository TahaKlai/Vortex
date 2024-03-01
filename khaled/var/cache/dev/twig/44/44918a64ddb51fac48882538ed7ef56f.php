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

/* commentaires/show.html.twig */
class __TwigTemplate_0ac337315f4dc1c930b58fb02031b170 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaires/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaires/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commentaires/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Commentaires";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
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
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/favicon.png"), "html", null, true);
        echo "\">
    <!-- Custom Stylesheet -->
    <link href=\"";
        // line 22
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
        // line 52
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
        // line 90
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
        // line 99
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
        // line 109
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
        // line 118
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
        // line 128
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
        // line 137
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
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">See all notifications <i
                                            class=\"ti-arrow-right\"></i></a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown header-profile\">
                                <a class=\"nav-link\" href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" role=\"button\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-account\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-profile.html"), "html", null, true);
        echo "\" class=\"dropdown-item\">
                                        <i class=\"icon-user\"></i>
                                        <span class=\"ml-2\">Profile </span>
                                    </a>
                                    <a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./email-inbox.html"), "html", null, true);
        echo "\" class=\"dropdown-item\">
                                        <i class=\"icon-envelope-open\"></i>
                                        <span class=\"ml-2\">Inbox </span>
                                    </a>
                                    <a href=\"";
        // line 162
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
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\"><i class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                    </li> -->
                    <li><a class=\"has-arrow\" href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index.html"), "html", null, true);
        echo "\">Dashboard 1</a></li>
                            <li><a href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index2.html"), "html", null, true);
        echo "\">Dashboard 2</a></li></ul>
                    </li>
                    
                    <li class=\"nav-label\">Apps</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-app-store\"></i><span class=\"nav-text\">Apps</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-profile.html"), "html", null, true);
        echo "\">Profile</a></li>
                            <li><a class=\"has-arrow\" href=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Email</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./email-compose.html"), "html", null, true);
        echo "\">Compose</a></li>
                                    <li><a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./email-inbox.html"), "html", null, true);
        echo "\">Inbox</a></li>
                                    <li><a href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./email-read.html"), "html", null, true);
        echo "\">Read</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-calender.html"), "html", null, true);
        echo "\">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-chart-bar-33\"></i><span class=\"nav-text\">Charts</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./chart-flot.html"), "html", null, true);
        echo "\">Flot</a></li>
                            <li><a href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./chart-morris.html"), "html", null, true);
        echo "\">Morris</a></li>
                            <li><a href=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./chart-chartjs.html"), "html", null, true);
        echo "\">Chartjs</a></li>
                            <li><a href=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./chart-chartist.html"), "html", null, true);
        echo "\">Chartist</a></li>
                            <li><a href=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./chart-sparkline.html"), "html", null, true);
        echo "\">Sparkline</a></li>
                            <li><a href=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./chart-peity.html"), "html", null, true);
        echo "\">Peity</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Components</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-world-2\"></i><span class=\"nav-text\">Bootstrap</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-accordion.html"), "html", null, true);
        echo "\">Accordion</a></li>
                            <li><a href=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-alert.html"), "html", null, true);
        echo "\">Alert</a></li>
                            <li><a href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-badge.html"), "html", null, true);
        echo "\">Badge</a></li>
                            <li><a href=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-button.html"), "html", null, true);
        echo "\">Button</a></li>
                            <li><a href=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-modal.html"), "html", null, true);
        echo "\">Modal</a></li>
                            <li><a href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-button-group.html"), "html", null, true);
        echo "\">Button Group</a></li>
                            <li><a href=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-list-group.html"), "html", null, true);
        echo "\">List Group</a></li>
                            <li><a href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-media-object.html"), "html", null, true);
        echo "\">Media Object</a></li>
                            <li><a href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/ui-card.html"), "html", null, true);
        echo ".\">Cards</a></li>
                            <li><a href=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-carousel.html"), "html", null, true);
        echo "\">Carousel</a></li>
                            <li><a href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-dropdown.html"), "html", null, true);
        echo "\">Dropdown</a></li>
                            <li><a href=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-popover.html"), "html", null, true);
        echo "\">Popover</a></li>
                            <li><a href=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-progressbar.html"), "html", null, true);
        echo "\">Progressbar</a></li>
                            <li><a href=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-tab.html"), "html", null, true);
        echo "\">Tab</a></li>
                            <li><a href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-typography.html"), "html", null, true);
        echo "\">Typography</a></li>
                            <li><a href=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-pagination.html"), "html", null, true);
        echo "\">Pagination</a></li>
                            <li><a href=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-grid.html"), "html", null, true);
        echo "\">Grid</a></li>

                        </ul>
                    </li>

                    <li><a class=\"has-arrow\" href=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-plug\"></i><span class=\"nav-text\">Plugins</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-select2.html"), "html", null, true);
        echo "\">Select 2</a></li>
                            <li><a href=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-nestable.html"), "html", null, true);
        echo "\">Nestedable</a></li>
                            <li><a href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-noui-slider.html"), "html", null, true);
        echo "\">Noui Slider</a></li>
                            <li><a href=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-sweetalert.html"), "html", null, true);
        echo "\">Sweet Alert</a></li>
                            <li><a href=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-toastr.html"), "html", null, true);
        echo "\">Toastr</a></li>
                            <li><a href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./map-jqvmap.html"), "html", null, true);
        echo "\">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("widget-basic.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i class=\"icon icon-globe-2\"></i><span
                                class=\"nav-text\">Widget</span></a></li>
                    <li class=\"nav-label\">Forms</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Forms</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-element.html"), "html", null, true);
        echo "\">Form Elements</a></li>
                            <li><a href=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-wizard.html"), "html", null, true);
        echo "\">Wizard</a></li>
                            <li><a href=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-editor-summernote.html"), "html", null, true);
        echo "\">Summernote</a></li>
                            <li><a href=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("form-pickers.html"), "html", null, true);
        echo "\">Pickers</a></li>
                            <li><a href=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("form-validation-jquery.html"), "html", null, true);
        echo "\">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Table</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-layout-25\"></i><span class=\"nav-text\">Table</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("table-bootstrap-basic.html"), "html", null, true);
        echo "\">Bootstrap</a></li>
                            <li><a href=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("table-datatable-basic.html"), "html", null, true);
        echo "\">Datatable</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-label\">Extra</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-copy-06\"></i><span class=\"nav-text\">Pages</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-register.html"), "html", null, true);
        echo "\">Register</a></li>
                            <li><a href=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-login.html"), "html", null, true);
        echo "\">Login</a></li>
                            <li><a class=\"has-arrow\" href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Error</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-400.html"), "html", null, true);
        echo "\">Error 400</a></li>
                                    <li><a href=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-403.html"), "html", null, true);
        echo "\">Error 403</a></li>
                                    <li><a href=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-404.html"), "html", null, true);
        echo "\">Error 404</a></li>
                                    <li><a href=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-500.html"), "html", null, true);
        echo "\">Error 500</a></li>
                                    <li><a href=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-503.html"), "html", null, true);
        echo "\">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 292
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
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\">Form</a></li>
                            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 317
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
<h1>Commentaires</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 368
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commentaire"]) || array_key_exists("commentaire", $context) ? $context["commentaire"] : (function () { throw new RuntimeError('Variable "commentaire" does not exist.', 368, $this->source); })()), "id", [], "any", false, false, false, 368), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Theme</th>
                <td>";
        // line 372
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commentaire"]) || array_key_exists("commentaire", $context) ? $context["commentaire"] : (function () { throw new RuntimeError('Variable "commentaire" does not exist.', 372, $this->source); })()), "theme", [], "any", false, false, false, 372), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Discription</th>
                <td>";
        // line 376
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commentaire"]) || array_key_exists("commentaire", $context) ? $context["commentaire"] : (function () { throw new RuntimeError('Variable "commentaire" does not exist.', 376, $this->source); })()), "discription", [], "any", false, false, false, 376), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

<div class=\"action-buttons\">

    <a href=\"";
        // line 383
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaires_index");
        echo "\">back to list</a>
    </div>


<div class=\"action-buttons\">
    <a href=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaires_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["commentaire"]) || array_key_exists("commentaire", $context) ? $context["commentaire"] : (function () { throw new RuntimeError('Variable "commentaire" does not exist.', 388, $this->source); })()), "id", [], "any", false, false, false, 388)]), "html", null, true);
        echo "\">edit</a>
    </div>

    ";
        // line 391
        echo twig_include($this->env, $context, "commentaires/_delete_form.html.twig");
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
        // line 468
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
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/quixnav-init.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/custom.min.js"), "html", null, true);
        echo "\"></script>
    



    <!-- Jquery Validation -->
    <script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Form validate init -->
    <script src=\"";
        // line 503
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
        return "commentaires/show.html.twig";
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
        return array (  857 => 503,  852 => 501,  843 => 495,  839 => 494,  835 => 493,  807 => 468,  727 => 391,  721 => 388,  713 => 383,  703 => 376,  696 => 372,  689 => 368,  635 => 317,  631 => 316,  604 => 292,  598 => 289,  594 => 288,  590 => 287,  586 => 286,  582 => 285,  577 => 283,  573 => 282,  569 => 281,  563 => 278,  555 => 273,  551 => 272,  545 => 269,  538 => 265,  534 => 264,  530 => 263,  526 => 262,  522 => 261,  516 => 258,  510 => 255,  504 => 252,  500 => 251,  496 => 250,  492 => 249,  488 => 248,  484 => 247,  478 => 244,  470 => 239,  466 => 238,  462 => 237,  458 => 236,  454 => 235,  450 => 234,  446 => 233,  442 => 232,  438 => 231,  434 => 230,  430 => 229,  426 => 228,  422 => 227,  418 => 226,  414 => 225,  410 => 224,  406 => 223,  400 => 220,  393 => 216,  389 => 215,  385 => 214,  381 => 213,  377 => 212,  373 => 211,  367 => 208,  361 => 205,  355 => 202,  351 => 201,  347 => 200,  342 => 198,  338 => 197,  332 => 194,  325 => 190,  321 => 189,  315 => 186,  310 => 184,  285 => 162,  278 => 158,  271 => 154,  264 => 150,  256 => 145,  245 => 137,  233 => 128,  220 => 118,  208 => 109,  195 => 99,  183 => 90,  142 => 52,  109 => 22,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commentaires{% endblock %}

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
<h1>Commentaires</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ commentaire.id }}</td>
            </tr>
            <tr>
                <th>Theme</th>
                <td>{{ commentaire.theme }}</td>
            </tr>
            <tr>
                <th>Discription</th>
                <td>{{ commentaire.discription }}</td>
            </tr>
        </tbody>
    </table>

<div class=\"action-buttons\">

    <a href=\"{{ path('app_commentaires_index') }}\">back to list</a>
    </div>


<div class=\"action-buttons\">
    <a href=\"{{ path('app_commentaires_edit', {'id': commentaire.id}) }}\">edit</a>
    </div>

    {{ include('commentaires/_delete_form.html.twig') }}


                                
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
", "commentaires/show.html.twig", "C:\\Users\\khale\\khaled\\templates\\commentaires\\show.html.twig");
    }
}
