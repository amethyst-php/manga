<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;
use Amethyst\Managers\MangaManager;
use Amethyst\Models\Manga;
use Illuminate\Support\Facades\Config;

class MangaServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Amethyst\Providers\TagServiceProvider::class);
        $this->app->register(\Amethyst\Providers\SourceServiceProvider::class);
        $this->app->register(\Amethyst\Providers\AliasServiceProvider::class);

        Config::set('amethyst.source.data.source.sourceables.'.Manga::class, MangaManager::class);
        Config::set('amethyst.alias.data.alias.aliasables.'.Manga::class, MangaManager::class);
        Config::set('amethyst.tag.data.tag-entity.taggables.'.Manga::class, MangaManager::class);
    }
}
