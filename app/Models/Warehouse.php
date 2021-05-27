<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Warehouse extends Model
{
    use HasFactory;
    use HasSlug;

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function users()
    {
        return $this->hasMany(User::class, 'warehouse_id');
    }


    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_warehouse', 'warehouse_id', 'product_id')
                        ->withPivot('quantity')
                        ->withTimestamps();
    }
}
