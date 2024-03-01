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
        '/commentaires' => [[['_route' => 'app_commentaires_index', '_controller' => 'App\\Controller\\CommentairesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaires/new' => [[['_route' => 'app_commentaires_new', '_controller' => 'App\\Controller\\CommentairesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/actualites/([^/]++)(?'
                    .'|(*:30)'
                    .'|/edit(*:42)'
                    .'|(*:49)'
                .')'
                .'|/commentaires/([^/]++)(?'
                    .'|(*:82)'
                    .'|/edit(*:94)'
                    .'|(*:101)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'app_actualites_show', '_controller' => 'App\\Controller\\ActualitesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        42 => [[['_route' => 'app_actualites_edit', '_controller' => 'App\\Controller\\ActualitesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        49 => [[['_route' => 'app_actualites_delete', '_controller' => 'App\\Controller\\ActualitesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        82 => [[['_route' => 'app_commentaires_show', '_controller' => 'App\\Controller\\CommentairesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        94 => [[['_route' => 'app_commentaires_edit', '_controller' => 'App\\Controller\\CommentairesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        101 => [
            [['_route' => 'app_commentaires_delete', '_controller' => 'App\\Controller\\CommentairesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
