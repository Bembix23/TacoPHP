<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'articles.add', '_controller' => 'App\\Controller\\HomeController::create'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/post/new' => [[['_route' => 'post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/post(?'
                    .'|s/([^/]++)(*:187)'
                    .'|/([^/]++)(?'
                        .'|(*:207)'
                        .'|/edit(*:220)'
                        .'|(*:228)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'show_post', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null]],
        207 => [[['_route' => 'post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        220 => [[['_route' => 'post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        228 => [
            [['_route' => 'post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
