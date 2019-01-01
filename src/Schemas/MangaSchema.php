<?php

namespace Railken\Amethyst\Schemas;

use Cocur\Slugify\Slugify;
use Railken\Amethyst\Managers\SourceManager;
use Railken\Amethyst\Models\Manga;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class MangaSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\TextAttribute::make('slug')->setDefault(function (Manga $entity) {
                $slugify = new Slugify();

                return $slugify->slugify($entity->name);
            }),
            Attributes\BelongsToAttribute::make('source_id')
                ->setRelationName('source')
                ->setRelationManager(SourceManager::class),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
