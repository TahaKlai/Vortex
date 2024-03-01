<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/actualites' => [[['_route' => 'app_actualites_index', '_controller' => 'App\\Controller\\ActualitesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/actualites/new' => [[['_route' => 'app_actualites_new', '_controller' => 'App\\Controller\\ActualitesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/actualites/listp' => [[['_route' => 'app_actualites_listp', '_controller' => 'App\\Controller\\ActualitesController::listp'], null, ['GET' => 0], null, false, false, null]],
        '/actualites/actualites/stats' => [[['_route' => 'app_actualites_stat', '_controller' => 'App\\Controller\\ActualitesController::stats'], null, null, null, false, false, null]],
        '/actualites/actualites/search' => [[['_route' => 'search_actualites', '_controller' => 'App\\Controller\\ActualitesController::searchByType'], null, null, null, false, false, null]],
        '/commentaires' => [[['_route' => 'app_commentaires_index', '_controller' => 'App\\Controller\\CommentairesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaires/new' => [[['_route' => 'app_commentaires_new', '_controller' => 'App\\Controller\\CommentairesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [[['_route' => 'app_front_index', '_controller' => 'App\\Controller\\FrontController::index'], null, ['GET' => 0], null, true, false, null]],
        '/front/new' => [[['_route' => 'app_front_new', '_controller' => 'App\\Controller\\FrontController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::search'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/actualites(?'
                    .'|actualitess/([^/]++)(*:41)'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|/edit(*:68)'
                            .'|(*:75)'
                        .')'
                        .'|actualites/sort/([^/]++)(*:107)'
                    .')'
                .')'
                .'|/commentaires/([^/]++)(?'
                    .'|(*:142)'
                    .'|/edit(*:155)'
                    .'|(*:163)'
                .')'
                .'|/front/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:251)'
                    .'|wdt/([^/]++)(*:271)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:317)'
                            .'|router(*:331)'
                            .'|exception(?'
                                .'|(*:351)'
                                .'|\\.css(*:364)'
                            .')'
                        .')'
                        .'|(*:374)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'app_actualites_show', '_controller' => 'App\\Controller\\ActualitesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        68 => [[['_route' => 'app_actualites_edit', '_controller' => 'App\\Controller\\ActualitesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        75 => [[['_route' => 'app_actualites_delete', '_controller' => 'App\\Controller\\ActualitesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        107 => [[['_route' => 'app_actualites_sort', '_controller' => 'App\\Controller\\ActualitesController::sort'], ['sortField'], ['GET' => 0], null, false, true, null]],
        142 => [[['_route' => 'app_commentaires_show', '_controller' => 'App\\Controller\\CommentairesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        155 => [[['_route' => 'app_commentaires_edit', '_controller' => 'App\\Controller\\CommentairesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        163 => [[['_route' => 'app_commentaires_delete', '_controller' => 'App\\Controller\\CommentairesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        190 => [[['_route' => 'app_front_show', '_controller' => 'App\\Controller\\FrontController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'app_front_edit', '_controller' => 'App\\Controller\\FrontController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'app_front_delete', '_controller' => 'App\\Controller\\FrontController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        251 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        271 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        317 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        331 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        351 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        364 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        374 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
