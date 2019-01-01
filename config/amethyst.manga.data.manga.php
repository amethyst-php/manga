<?php

return [
    'table'      => 'amethyst_manga',
    'comment'    => 'Manga',
    'model'      => Railken\Amethyst\Models\Manga::class,
    'schema'     => Railken\Amethyst\Schemas\MangaSchema::class,
    'repository' => Railken\Amethyst\Repositories\MangaRepository::class,
    'serializer' => Railken\Amethyst\Serializers\MangaSerializer::class,
    'validator'  => Railken\Amethyst\Validators\MangaValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\MangaAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\MangaFaker::class,
    'manager'    => Railken\Amethyst\Managers\MangaManager::class,
];
