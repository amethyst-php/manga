<?php

namespace Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;
use Amethyst\Common\ConfigurableModel;
use Railken\Lem\Contracts\EntityContract;

/**
 * @property string $name
 */
class Manga extends Model implements EntityContract
{
    use SoftDeletes;
    use ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.manga.data.manga');
        parent::__construct($attributes);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(config('amethyst.tag.data.tag.model'), Config::get('amethyst.manga.data.manga-tag.table'), 'manga_id', 'tag_id');
    }

    /**
     * Get all of the manga sources.
     */
    public function sources()
    {
        return $this->morphMany(config('amethyst.source.data.source.model'), 'sourceable');
    }

    /**
     * Get all of the manga aliases.
     */
    public function aliases(): MorphMany
    {
        return $this->morphMany(config('amethyst.alias.data.alias.model'), 'aliasable');
    }
}
