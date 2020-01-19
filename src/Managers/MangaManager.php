<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Manga                 newEntity()
 * @method \Amethyst\Schemas\MangaSchema          getSchema()
 * @method \Amethyst\Repositories\MangaRepository getRepository()
 * @method \Amethyst\Serializers\MangaSerializer  getSerializer()
 * @method \Amethyst\Validators\MangaValidator    getValidator()
 * @method \Amethyst\Authorizers\MangaAuthorizer  getAuthorizer()
 */
class MangaManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.manga.data.manga';
}
