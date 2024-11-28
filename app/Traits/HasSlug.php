<?php

namespace App\Traits;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Spatie\Sluggable\HasSlug as SpatieSlug;
use Spatie\Sluggable\SlugOptions;

trait HasSlug
{
    use SpatieSlug;

    public function getSlugName(): string
    {
        return property_exists($this, 'slugName') ? $this->slugName : 'name';
    }

    public function getSlugOptions(): SlugOptions
    {

        return SlugOptions::create()
            ->generateSlugsFrom($this->getSlugName())
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate()
            ->slugsShouldBeNoLongerThan(250);
    }

    /*public static function bootHasSlug(): void
    {
        static::creating(function ($model) {
            if (Schema::hasColumn($model->getTable(), 'slug')) {
                $model->slug = Str::slug($model->name);
            }
        });
    }*/
}
