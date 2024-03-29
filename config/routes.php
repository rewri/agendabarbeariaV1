<?php
/**
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {

    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'Pages', 'action' => 'home']);

    $routes->connect('/entrar', ['controller' => 'Pages', 'action' => 'login']);
    $routes->connect('/sair', ['controller' => 'Pages', 'action' => 'logout']);

    $routes->connect('/cadastrar', ['controller' => 'Pages', 'action' => 'register']);

    $routes->connect('/agenda/:uuid', ['controller' => 'Pages', 'action' => 'agenda'], ['pass' => ['uuid']]);
    $routes->connect('/agenda', ['controller' => 'Pages', 'action' => 'agenda']);

    $routes->connect('/novo-horario/:uuid', ['controller' => 'Pages', 'action' => 'schedule'], ['pass' => ['uuid']]);

    $routes->fallbacks(DashedRoute::class);
});

/**
 * If you need a different set of middleware or none at all,
 * open new scope and define routes there.
 *
 * ```
 * Router::scope('/api', function (RouteBuilder $routes) {
 *     // No $routes->applyMiddleware() here.
 *     // Connect API actions here.
 * });
 * ```
 */
