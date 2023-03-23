<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/users' => [[['_route' => 'get_users', '_controller' => 'App\\Controller\\UserController::getCollection'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:147)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:185)'
                .'|/users/([^/]++)(?'
                    .'|(*:211)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        185 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        211 => [
            [['_route' => 'get_user', '_controller' => 'App\\Controller\\UserController::get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'post_user', '_controller' => 'App\\Controller\\UserController::post'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'put_user', '_controller' => 'App\\Controller\\UserController::Put'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'update_user', '_controller' => 'App\\Controller\\UserController::patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'get_users]', '_controller' => 'App\\Controller\\UserController::Get'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
