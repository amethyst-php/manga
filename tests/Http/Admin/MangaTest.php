<?php

namespace Railken\Amethyst\Tests\Http\Admin;

use Railken\Amethyst\Api\Support\Testing\TestableBaseTrait;
use Railken\Amethyst\Fakers\CategoryFaker;
use Railken\Amethyst\Fakers\MangaFaker;
use Railken\Amethyst\Managers\CategoryManager;
use Railken\Amethyst\Managers\MangaManager;
use Railken\Amethyst\Tests\BaseTest;

class MangaTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = MangaFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'admin';

    /**
     * Route name.
     *
     * @var string
     */
    protected $route = 'admin.manga';

    /**
     * Category tests.
     */
    public function testSuccessCategory()
    {
        $manga = (new MangaManager())->createOrFail(MangaFaker::make()->parameters())->getResource();
        $this->callAndTest('GET', route('admin.manga-category.index', ['container_id' => $manga->id]), [], 200);
        $category = (new CategoryManager())->createOrFail(CategoryFaker::make()->parameters())->getResource();
        $this->callAndTest('POST', route('admin.manga-category.attach', ['container_id' => $manga->id, 'id' => $category->id]), [], 200);
        $this->callAndTest('DELETE', route('admin.manga-category.detach', ['container_id' => $manga->id, 'id' => $category->id]), [], 200);
    }
}
