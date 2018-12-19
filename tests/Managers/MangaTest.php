<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\MangaFaker;
use Railken\Amethyst\Managers\MangaManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class MangaTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = MangaManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = MangaFaker::class;
}
