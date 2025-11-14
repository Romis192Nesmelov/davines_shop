<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use Sluggable;

    protected $fillable = [
        'article',
        'slug',
        'name',
        'price',
        'value_added_tax',
        'barcode',
        'weight',
        'width',
        'height',
        'length',
        'video',
        'photo1',
        'photo2',
        'photo3',
        'product_type_id',
        'sub_brand_id',
        'volume',
        'expiration_date_in_days',
        'hash_tags',
        'abstract',
        'structure',
        'method_of_application',
        'effect',
        'composition_features',
        'sex',
        'country_id',
        'code_id',
        'bestseller',
        'active'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function images(): HasMany
    {
        $this->hasMany(ProductImages::class);
    }

    public function productTypes(): BelongsTo
    {
        return $this->belongsTo(ProductType::class);
    }

    public function subBrands(): BelongsTo
    {
        return $this->belongsTo(SubBrand::class);
    }

    public function hairs(): BelongsToMany
    {
        return $this->belongsToMany(Hair::class);
    }

    public function countries(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function codes(): BelongsTo
    {
        return $this->belongsTo(Code::class);
    }
}
