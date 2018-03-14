<?php

use App\Services\Hook;
use Illuminate\Http\Request;
use Illuminate\Contracts\Events\Dispatcher;

return function (Request $request, Dispatcher $events) {
    if ($request->is('skinlib/show/*')) {
        $events->listen(App\Events\RenderingFooter::class, function ($event) {
            $event->addContent('<script src="'.plugin_assets('skin-utilities', 'assets/common/js/buttons.js').'" defer></script>');
        });
    }

    Hook::addMenuItem('user', 3, [
        'title' => '皮肤工具',
        'icon'  => 'fa-briefcase',
        'link'  => 'user/skin-utilities'
    ]);

    Hook::addRoute(function ($routes) {
        $routes->group([
            'middleware' => ['web', 'auth'],
            'prefix'     => '/user/skin-utilities',
            'namespace'  => 'GPlane\SkinUtilities'
        ], function ($route) {
            $route->any('/', 'ViewController@tools');
            $route->any('/converter', 'ViewController@converter');
            $route->any('/editor-1', 'ViewController@editor1');
            $route->any('/editor-2', 'ViewController@editor2');
            $route->any('/skinnr/skinlib/{tid}', 'SkinnrController@tid');
            $route->post('/skinnr/edit', 'SkinnrController@out');
        });
    });
};
