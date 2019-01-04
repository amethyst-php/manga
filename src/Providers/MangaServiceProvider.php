<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Common\CommonServiceProvider;
use Railken\Amethyst\Managers\MangaManager;
use Railken\Amethyst\Models\Manga;

class MangaServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Railken\Amethyst\Providers\TagServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\SourceServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\AliasServiceProvider::class);

        Config::set('amethyst.source.data.source.sourceables.'.Manga::class, MangaManager::class);
        Config::set('amethyst.alias.data.alias.aliasables.'.Manga::class, MangaManager::class);
        Config::set('amethyst.tag.data.tag-entity.taggables.'.Manga::class, MangaManager::class);
    }
}
