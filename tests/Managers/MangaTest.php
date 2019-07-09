<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\MangaFaker;
use Amethyst\Managers\MangaManager;
use Amethyst\Tests\BaseTest;
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
