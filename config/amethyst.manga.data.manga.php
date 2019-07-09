<?php

return [
    'table'      => 'amethyst_manga',
    'comment'    => 'Manga',
    'model'      => Amethyst\Models\Manga::class,
    'schema'     => Amethyst\Schemas\MangaSchema::class,
    'repository' => Amethyst\Repositories\MangaRepository::class,
    'serializer' => Amethyst\Serializers\MangaSerializer::class,
    'validator'  => Amethyst\Validators\MangaValidator::class,
    'authorizer' => Amethyst\Authorizers\MangaAuthorizer::class,
    'faker'      => Amethyst\Fakers\MangaFaker::class,
    'manager'    => Amethyst\Managers\MangaManager::class,
];
