<?php

return [
    'enabled'     => true,
    'controller'  => Railken\Amethyst\Http\Controllers\Admin\MangaCategoriesController::class,
    'router'      => [
        'as'        => 'manga-category.',
		'prefix'    => '/manga/{container_id}/categories',
    ],
];
