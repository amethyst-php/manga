<?php

namespace Railken\Amethyst\Http\Controllers\Admin;

use Railken\Amethyst\Api\Http\Controllers\RestManagerController;
use Railken\Amethyst\Api\Http\Controllers\Traits;
use Railken\Amethyst\Managers\CategoryManager;
use Railken\Amethyst\Managers\MangaManager;
use Railken\Lem\Contracts\EntityContract;

class MangaCategoriesController extends RestManagerController
{
    use Traits\RestManyIndexTrait;
    use Traits\RestAttachTrait;
    use Traits\RestDetachTrait;

    /**
     * The class of the manager.
     *
     * @var string
     */
    public $class = MangaManager::class;

    /**
     * Retrieve relation route name given entity.
     *
     * @param EntityContract $entity
     *
     * @return string
     */
    public function getRelationRoute(EntityContract $entity)
    {
        return 'admin.category.index';
    }

    /**
     * Retrieve name relation given entity.
     *
     * @param EntityContract $entity
     *
     * @return string
     */
    public function getRelationName(EntityContract $entity)
    {
        return 'categories';
    }

    /**
     * Retrieve name relation given entity.
     *
     * @param EntityContract $entity
     *
     * @return \Railken\Lem\Contracts\ManagerContract
     */
    public function getRelationManager(EntityContract $entity)
    {
        return new CategoryManager($this->getUser());
    }
}
