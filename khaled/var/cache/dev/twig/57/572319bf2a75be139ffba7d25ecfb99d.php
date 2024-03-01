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

/* actualites/edit.html.twig */
class __TwigTemplate_2aea960f2272d0333aa52a9455790a95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualites/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualites/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "actualites/edit.html.twig", 1);
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

        echo "New Actualites";
        
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
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/favicon.png"), "html", null, true);
        echo "\">
    <!-- Custom Stylesheet -->
    <link href=\"";
        // line 41
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
        // line 71
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
        <div class=\"quixnav\">
            <div class=\"quixnav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                    <li class=\"nav-label first\">Main Menu</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index.html"), "html", null, true);
        echo "\">Dashboard 1</a></li>
                            <li><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index2.html"), "html", null, true);
        echo "\">Dashboard 2</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Apps</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-app-store\"></i><span class=\"nav-text\">Apps</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-profile.html"), "html", null, true);
        echo "\">khaled-test</a></li>
                            <li><a class=\"has-arrow\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Actualites</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualites/index.html.twig"), "html", null, true);
        echo "\">Actualites_index</a></li>
                                    <li><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualites/show.html.twig"), "html", null, true);
        echo "\">Actualites_show</a></li>
                                    <li><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualites/edit.html.twig"), "html", null, true);
        echo "\">Actualites_edit</a></li>
                                    <li><a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualites/new.html.twig"), "html", null, true);
        echo "\">Actualites_new</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-calender.html"), "html", null, true);
        echo "\">Calendar</a></li>
                        </ul>
                    </li>
                  <li><a class=\"has-arrow\" href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Commentaires</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Commentaires/index.html.twig"), "html", null, true);
        echo "\">Commentaires_index</a></li>
                                    <li><a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Commentaires/show.html.twig"), "html", null, true);
        echo "\">Commentaires_show</a></li>
                                    <li><a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Commentaires/edit.html.twig"), "html", null, true);
        echo "\">Commentaires_edit</a></li>
                                    <li><a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Commentaires/new.html.twig"), "html", null, true);
        echo "\">Commentaires_new</a></li>
                                </ul>
                            </li>
                    <li class=\"nav-label\">Components</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-world-2\"></i><span class=\"nav-text\">Bootstrap</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-accordion.html"), "html", null, true);
        echo "\">Accordion</a></li>
                            <li><a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-alert.html"), "html", null, true);
        echo "\">Alert</a></li>
                            <li><a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-badge.html"), "html", null, true);
        echo "\">Badge</a></li>
                            <li><a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-button.html"), "html", null, true);
        echo "\">Button</a></li>
                            <li><a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-modal.html"), "html", null, true);
        echo "\">Modal</a></li>
                            <li><a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-button-group.html"), "html", null, true);
        echo "\">Button Group</a></li>
                            <li><a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-list-group.html"), "html", null, true);
        echo "\">List Group</a></li>
                            <li><a href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-media-object.html"), "html", null, true);
        echo "\">Media Object</a></li>
                            <li><a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-card.html"), "html", null, true);
        echo "\">Cards</a></li>
                            <li><a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-carousel.html"), "html", null, true);
        echo "\">Carousel</a></li>
                            <li><a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-dropdown.html"), "html", null, true);
        echo "\">Dropdown</a></li>
                            <li><a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-popover.html"), "html", null, true);
        echo "\">Popover</a></li>
                            <li><a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-progressbar.html"), "html", null, true);
        echo "\">Progressbar</a></li>
                            <li><a href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-tab.html"), "html", null, true);
        echo "\">Tab</a></li>
                            <li><a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-typography.html"), "html", null, true);
        echo "\">Typography</a></li>
                            <li><a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-pagination.html"), "html", null, true);
        echo "\">Pagination</a></li>
                            <li><a href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-grid.html"), "html", null, true);
        echo "\">Grid</a></li>

                        </ul>
                    </li>

                    <li><a class=\"has-arrow\" href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-plug\"></i><span class=\"nav-text\">Plugins</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-select2.html"), "html", null, true);
        echo "\">Select 2</a></li>
                            <li><a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-nestable.html"), "html", null, true);
        echo "\">Nestedable</a></li>
                            <li><a href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-noui-slider.html"), "html", null, true);
        echo "\">Noui Slider</a></li>
                            <li><a href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-sweetalert.html"), "html", null, true);
        echo "\">Sweet Alert</a></li>
                            <li><a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-toastr.html"), "html", null, true);
        echo "\">Toastr</a></li>
                            <li><a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./map-jqvmap.html"), "html", null, true);
        echo "\">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("widget-basic.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i class=\"icon icon-globe-2\"></i><span
                                class=\"nav-text\">Widget</span></a></li>
                    <li class=\"nav-label\">Forms</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Forms</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-element.html"), "html", null, true);
        echo "\">Form Elements</a></li>
                            <li><a href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-wizard.html"), "html", null, true);
        echo "\">Wizard</a></li>
                            <li><a href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-editor-summernote.html"), "html", null, true);
        echo "\">Summernote</a></li>
                            <li><a href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("form-pickers.html"), "html", null, true);
        echo "\">Pickers</a></li>
                            <li><a href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("form-validation-jquery.html"), "html", null, true);
        echo "\">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Table</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-layout-25\"></i><span class=\"nav-text\">Table</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("table-bootstrap-basic.html"), "html", null, true);
        echo "\">Bootstrap</a></li>
                            <li><a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("table-datatable-basic.html"), "html", null, true);
        echo "\">Datatable</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-label\">Extra</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-copy-06\"></i><span class=\"nav-text\">Pages</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-register.html"), "html", null, true);
        echo "\">Register</a></li>
                            <li><a href=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-login.html"), "html", null, true);
        echo "\">Login</a></li>
                            <li><a class=\"has-arrow\" href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Error</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-400.html"), "html", null, true);
        echo "\">Error 400</a></li>
                                    <li><a href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-403.html"), "html", null, true);
        echo "\">Error 403</a></li>
                                    <li><a href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-404.html"), "html", null, true);
        echo "\">Error 404</a></li>
                                    <li><a href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-500.html"), "html", null, true);
        echo "\">Error 500</a></li>
                                    <li><a href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-503.html"), "html", null, true);
        echo "\">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 198
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
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\">Form</a></li>
                            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 225
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

                                <h1>Edit Actualites</h1>
                                


    <div class=\"action-buttons\">
    ";
        // line 276
        echo twig_include($this->env, $context, "actualites/_form.html.twig", ["button_label" => "Update"]);
        echo "
    </div<



    <div class=\"action-buttons\">
    <a href=\"";
        // line 282
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualites_index");
        echo "\">back to list</a>
    </div>
     


     <div class=\"action-buttons\">
    ";
        // line 288
        echo twig_include($this->env, $context, "actualites/_delete_form.html.twig");
        echo "
    </div>

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
        // line 364
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
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/quixnav-init.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/custom.min.js"), "html", null, true);
        echo "\"></script>
    



    <!-- Jquery Validation -->
    <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Form validate init -->
    <script src=\"";
        // line 399
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
        return "actualites/edit.html.twig";
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
        return array (  705 => 399,  700 => 397,  691 => 391,  687 => 390,  683 => 389,  655 => 364,  576 => 288,  567 => 282,  558 => 276,  504 => 225,  500 => 224,  471 => 198,  465 => 195,  461 => 194,  457 => 193,  453 => 192,  449 => 191,  444 => 189,  440 => 188,  436 => 187,  430 => 184,  422 => 179,  418 => 178,  412 => 175,  405 => 171,  401 => 170,  397 => 169,  393 => 168,  389 => 167,  383 => 164,  377 => 161,  371 => 158,  367 => 157,  363 => 156,  359 => 155,  355 => 154,  351 => 153,  345 => 150,  337 => 145,  333 => 144,  329 => 143,  325 => 142,  321 => 141,  317 => 140,  313 => 139,  309 => 138,  305 => 137,  301 => 136,  297 => 135,  293 => 134,  289 => 133,  285 => 132,  281 => 131,  277 => 130,  273 => 129,  267 => 126,  260 => 122,  256 => 121,  252 => 120,  248 => 119,  243 => 117,  237 => 114,  231 => 111,  227 => 110,  223 => 109,  219 => 108,  214 => 106,  210 => 105,  204 => 102,  197 => 98,  193 => 97,  187 => 94,  161 => 71,  128 => 41,  123 => 39,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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

                                <h1>Edit Actualites</h1>
                                


    <div class=\"action-buttons\">
    {{ include('actualites/_form.html.twig', {'button_label': 'Update'}) }}
    </div<



    <div class=\"action-buttons\">
    <a href=\"{{ path('app_actualites_index') }}\">back to list</a>
    </div>
     


     <div class=\"action-buttons\">
    {{ include('actualites/_delete_form.html.twig') }}
    </div>

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
", "actualites/edit.html.twig", "C:\\Users\\khale\\khaled\\templates\\actualites\\edit.html.twig");
    }
}
