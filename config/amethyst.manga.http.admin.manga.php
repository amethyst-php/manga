<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\MangaController::class,
    'router'     => [
        'as'     => 'manga.',
        'prefix' => '/manga',
    ],
];
