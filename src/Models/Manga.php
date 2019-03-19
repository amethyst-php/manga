<?php

namespace Railken\Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Common\ConfigurableModel;
use Railken\Lem\Contracts\EntityContract;

/**
 * @property string $name
 */
class Manga extends Model implements EntityContract
{
    use SoftDeletes, ConfigurableModel;

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
        return $this->belongsToMany(Tag::class, Config::get('amethyst.manga.data.manga-tag.table'), 'manga_id', 'tag_id');
    }

    /**
     * Get all of the manga sources.
     */
    public function sources()
    {
        return $this->morphMany(Source::class, 'sourceable');
    }

    /**
     * Get all of the manga aliases.
     */
    public function aliases(): MorphMany
    {
        return $this->morphMany(Alias::class, 'aliasable');
    }
}
