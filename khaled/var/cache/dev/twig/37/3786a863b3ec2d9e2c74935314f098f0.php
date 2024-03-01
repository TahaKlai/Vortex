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

/* actualites/index.html.twig */
class __TwigTemplate_8d744acadda2ef1dd124b847349c934d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualites/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualites/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "actualites/index.html.twig", 1);
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

        echo "Actualites index";
        
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
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/favicon.png"), "html", null, true);
        echo "\">
    <!-- Custom Stylesheet -->
    <link href=\"";
        // line 45
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
        // line 75
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
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index.html"), "html", null, true);
        echo "\">Dashboard 1</a></li>
                            <li><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index2.html"), "html", null, true);
        echo "\">Dashboard 2</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Apps</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-app-store\"></i><span class=\"nav-text\">Apps</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-profile.html"), "html", null, true);
        echo "\">khaled-test</a></li>
                            <li><a class=\"has-arrow\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Actualites</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualites/index.html.twig"), "html", null, true);
        echo "\">Actualites_index</a></li>
                                    <li><a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualites/show.html.twig"), "html", null, true);
        echo "\">Actualites_show</a></li>
                                    <li><a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualites/edit.html.twig"), "html", null, true);
        echo "\">Actualites_edit</a></li>
                                    <li><a href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualites/new.html.twig"), "html", null, true);
        echo "\">Actualites_new</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./app-calender.html"), "html", null, true);
        echo "\">Calendar</a></li>
                        </ul>
                    </li>
                  <li><a class=\"has-arrow\" href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Commentaires</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Commentaires/index.html.twig"), "html", null, true);
        echo "\">Commentaires_index</a></li>
                                    <li><a href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Commentaires/show.html.twig"), "html", null, true);
        echo "\">Commentaires_show</a></li>
                                    <li><a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Commentaires/edit.html.twig"), "html", null, true);
        echo "\">Commentaires_edit</a></li>
                                    <li><a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Commentaires/new.html.twig"), "html", null, true);
        echo "\">Commentaires_new</a></li>
                                </ul>
                            </li>
                    <li class=\"nav-label\">Components</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-world-2\"></i><span class=\"nav-text\">Bootstrap</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-accordion.html"), "html", null, true);
        echo "\">Accordion</a></li>
                            <li><a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-alert.html"), "html", null, true);
        echo "\">Alert</a></li>
                            <li><a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-badge.html"), "html", null, true);
        echo "\">Badge</a></li>
                            <li><a href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-button.html"), "html", null, true);
        echo "\">Button</a></li>
                            <li><a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-modal.html"), "html", null, true);
        echo "\">Modal</a></li>
                            <li><a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-button-group.html"), "html", null, true);
        echo "\">Button Group</a></li>
                            <li><a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-list-group.html"), "html", null, true);
        echo "\">List Group</a></li>
                            <li><a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-media-object.html"), "html", null, true);
        echo "\">Media Object</a></li>
                            <li><a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-card.html"), "html", null, true);
        echo "\">Cards</a></li>
                            <li><a href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-carousel.html"), "html", null, true);
        echo "\">Carousel</a></li>
                            <li><a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-dropdown.html"), "html", null, true);
        echo "\">Dropdown</a></li>
                            <li><a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-popover.html"), "html", null, true);
        echo "\">Popover</a></li>
                            <li><a href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-progressbar.html"), "html", null, true);
        echo "\">Progressbar</a></li>
                            <li><a href=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-tab.html"), "html", null, true);
        echo "\">Tab</a></li>
                            <li><a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-typography.html"), "html", null, true);
        echo "\">Typography</a></li>
                            <li><a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-pagination.html"), "html", null, true);
        echo "\">Pagination</a></li>
                            <li><a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./ui-grid.html"), "html", null, true);
        echo "\">Grid</a></li>

                        </ul>
                    </li>

                    <li><a class=\"has-arrow\" href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-plug\"></i><span class=\"nav-text\">Plugins</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-select2.html"), "html", null, true);
        echo "\">Select 2</a></li>
                            <li><a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-nestable.html"), "html", null, true);
        echo "\">Nestedable</a></li>
                            <li><a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-noui-slider.html"), "html", null, true);
        echo "\">Noui Slider</a></li>
                            <li><a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-sweetalert.html"), "html", null, true);
        echo "\">Sweet Alert</a></li>
                            <li><a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./uc-toastr.html"), "html", null, true);
        echo "\">Toastr</a></li>
                            <li><a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./map-jqvmap.html"), "html", null, true);
        echo "\">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("widget-basic.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i class=\"icon icon-globe-2\"></i><span
                                class=\"nav-text\">Widget</span></a></li>
                    <li class=\"nav-label\">Forms</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Forms</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-element.html"), "html", null, true);
        echo "\">Form Elements</a></li>
                            <li><a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-wizard.html"), "html", null, true);
        echo "\">Wizard</a></li>
                            <li><a href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./form-editor-summernote.html"), "html", null, true);
        echo "\">Summernote</a></li>
                            <li><a href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("form-pickers.html"), "html", null, true);
        echo "\">Pickers</a></li>
                            <li><a href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("form-validation-jquery.html"), "html", null, true);
        echo "\">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Table</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-layout-25\"></i><span class=\"nav-text\">Table</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("table-bootstrap-basic.html"), "html", null, true);
        echo "\">Bootstrap</a></li>
                            <li><a href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("table-datatable-basic.html"), "html", null, true);
        echo "\">Datatable</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-label\">Extra</li>
                    <li><a class=\"has-arrow\" href=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-copy-06\"></i><span class=\"nav-text\">Pages</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-register.html"), "html", null, true);
        echo "\">Register</a></li>
                            <li><a href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-login.html"), "html", null, true);
        echo "\">Login</a></li>
                            <li><a class=\"has-arrow\" href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void()"), "html", null, true);
        echo "\" aria-expanded=\"false\">Error</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-400.html"), "html", null, true);
        echo "\">Error 400</a></li>
                                    <li><a href=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-403.html"), "html", null, true);
        echo "\">Error 403</a></li>
                                    <li><a href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-404.html"), "html", null, true);
        echo "\">Error 404</a></li>
                                    <li><a href=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-500.html"), "html", null, true);
        echo "\">Error 500</a></li>
                                    <li><a href=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./page-error-503.html"), "html", null, true);
        echo "\">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 202
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
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\">Form</a></li>
                            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 229
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
                            <h1>Actualites index</h1>


<input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for names..\">

    <table id=\"myTable\" class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th onclick=\"sortTable(1)\" >Titre</th>
                <th onclick=\"sortTable(2)\">Date</th>
                <th>Priorite</th>
                <th>Categorie</th>
                <th>Discription</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 274, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 275
            echo "            <tr>
                <td>";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "id", [], "any", false, false, false, 276), "html", null, true);
            echo "</td>
                <td>";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "titre", [], "any", false, false, false, 277), "html", null, true);
            echo "</td>
                <td>";
            // line 278
            ((twig_get_attribute($this->env, $this->source, $context["actualite"], "date", [], "any", false, false, false, 278)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "date", [], "any", false, false, false, 278), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "priorite", [], "any", false, false, false, 279), "html", null, true);
            echo "</td>
                <td>";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "categorie", [], "any", false, false, false, 280), "html", null, true);
            echo "</td>
                <td>";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "discription", [], "any", false, false, false, 281), "html", null, true);
            echo "</td>
                <td>
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
            // line 302
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualites_show", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "id", [], "any", false, false, false, 302)]), "html", null, true);
            echo "\">show</a>
                    
                    </div>


                   <div class=\"action-buttons\">
                   <a href=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualites_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "id", [], "any", false, false, false, 308)]), "html", null, true);
            echo "\">edit</a>
                   </div>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 314
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        echo "        </tbody>
    </table>
<div class=\"action-buttons\">
    <a href=\"";
        // line 321
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualites_new");
        echo "\">Create new</a>
    </div> 
    <div class=\"action-buttons\">
    <a href=\"";
        // line 324
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualites_listp");
        echo "\" download=\"list d'Actualites\" >Generate PDF</a>
    </div> 

    
    
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById(\"myInput\");
  filter = input.value.toUpperCase();
  table = document.getElementById(\"myTable\");
  tr = table.getElementsByTagName(\"tr\");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName(\"td\")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = \"\";
      } else {
        tr[i].style.display = \"none\";
      }
    }
  }
}
</script>
    
      </div> 

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById(\"myTable\");
  switching = true;
  // Set the sorting direction to ascending:
  dir = \"asc\";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName(\"TD\")[n];
      y = rows[i + 1].getElementsByTagName(\"TD\")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == \"asc\") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == \"desc\") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is \"asc\",
      set the direction to \"desc\" and run the while loop again. */
      if (switchcount == 0 && dir == \"asc\") {
        dir = \"desc\";
        switching = true;
      }
    }
  }
}
</script>

      





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
        // line 480
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
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/quixnav-init.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/custom.min.js"), "html", null, true);
        echo "\"></script>
    



    <!-- Jquery Validation -->
    <script src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./vendor/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Form validate init -->
    <script src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/plugins-init/jquery.validate-init.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo "\"><\\script>
    <script src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf.js"), "html", null, true);
        echo "\"><\\script>





















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
        return "actualites/index.html.twig";
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
        return array (  871 => 523,  867 => 522,  863 => 521,  858 => 519,  849 => 513,  845 => 512,  841 => 511,  807 => 480,  648 => 324,  642 => 321,  637 => 318,  628 => 314,  617 => 308,  608 => 302,  584 => 281,  580 => 280,  576 => 279,  572 => 278,  568 => 277,  564 => 276,  561 => 275,  556 => 274,  508 => 229,  504 => 228,  475 => 202,  469 => 199,  465 => 198,  461 => 197,  457 => 196,  453 => 195,  448 => 193,  444 => 192,  440 => 191,  434 => 188,  426 => 183,  422 => 182,  416 => 179,  409 => 175,  405 => 174,  401 => 173,  397 => 172,  393 => 171,  387 => 168,  381 => 165,  375 => 162,  371 => 161,  367 => 160,  363 => 159,  359 => 158,  355 => 157,  349 => 154,  341 => 149,  337 => 148,  333 => 147,  329 => 146,  325 => 145,  321 => 144,  317 => 143,  313 => 142,  309 => 141,  305 => 140,  301 => 139,  297 => 138,  293 => 137,  289 => 136,  285 => 135,  281 => 134,  277 => 133,  271 => 130,  264 => 126,  260 => 125,  256 => 124,  252 => 123,  247 => 121,  241 => 118,  235 => 115,  231 => 114,  227 => 113,  223 => 112,  218 => 110,  214 => 109,  208 => 106,  201 => 102,  197 => 101,  191 => 98,  165 => 75,  132 => 45,  127 => 43,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Actualites index{% endblock %}

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
                            <h1>Actualites index</h1>


<input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search for names..\">

    <table id=\"myTable\" class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th onclick=\"sortTable(1)\" >Titre</th>
                <th onclick=\"sortTable(2)\">Date</th>
                <th>Priorite</th>
                <th>Categorie</th>
                <th>Discription</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for actualite in actualites %}
            <tr>
                <td>{{ actualite.id }}</td>
                <td>{{ actualite.titre }}</td>
                <td>{{ actualite.date ? actualite.date|date('Y-m-d') : '' }}</td>
                <td>{{ actualite.priorite }}</td>
                <td>{{ actualite.categorie }}</td>
                <td>{{ actualite.discription }}</td>
                <td>
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
                    <a href=\"{{ path('app_actualites_show', {'id': actualite.id}) }}\">show</a>
                    
                    </div>


                   <div class=\"action-buttons\">
                   <a href=\"{{ path('app_actualites_edit', {'id': actualite.id}) }}\">edit</a>
                   </div>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
<div class=\"action-buttons\">
    <a href=\"{{ path('app_actualites_new') }}\">Create new</a>
    </div> 
    <div class=\"action-buttons\">
    <a href=\"{{ path('app_actualites_listp') }}\" download=\"list d'Actualites\" >Generate PDF</a>
    </div> 

    
    
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById(\"myInput\");
  filter = input.value.toUpperCase();
  table = document.getElementById(\"myTable\");
  tr = table.getElementsByTagName(\"tr\");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName(\"td\")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = \"\";
      } else {
        tr[i].style.display = \"none\";
      }
    }
  }
}
</script>
    
      </div> 

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById(\"myTable\");
  switching = true;
  // Set the sorting direction to ascending:
  dir = \"asc\";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName(\"TD\")[n];
      y = rows[i + 1].getElementsByTagName(\"TD\")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == \"asc\") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == \"desc\") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is \"asc\",
      set the direction to \"desc\" and run the while loop again. */
      if (switchcount == 0 && dir == \"asc\") {
        dir = \"desc\";
        switching = true;
      }
    }
  }
}
</script>

      





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
    <script src=\"{{asset('')}}\"><\\script>
    <script src=\"{{asset('pdf.js')}}\"><\\script>





















</body>


</html>

















    
{% endblock %}
", "actualites/index.html.twig", "C:\\Users\\khale\\khaled\\templates\\actualites\\index.html.twig");
    }
}
