<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class MangaAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'manga.create',
        Tokens::PERMISSION_UPDATE => 'manga.update',
        Tokens::PERMISSION_SHOW   => 'manga.show',
        Tokens::PERMISSION_REMOVE => 'manga.remove',
    ];
}
