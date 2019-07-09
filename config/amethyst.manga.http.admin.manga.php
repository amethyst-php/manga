<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\MangaController::class,
    'router'     => [
        'as'     => 'manga.',
        'prefix' => '/manga',
    ],
];
