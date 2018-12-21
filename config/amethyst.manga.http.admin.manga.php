<?php

return [
    'enabled'     => true,
    'controller'  => Railken\Amethyst\Http\Controllers\Admin\MangasController::class,
    'router'      => [
        'as'        => 'manga.',
        'prefix'    => '/manga',
    ],
];
