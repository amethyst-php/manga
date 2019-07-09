<?php

namespace Amethyst\Schemas;

use Cocur\Slugify\Slugify;
use Amethyst\Models\Manga;
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
            Attributes\EnumAttribute::make('status', ['ongoing', 'completed', 'cancelled', 'hiatus']),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
