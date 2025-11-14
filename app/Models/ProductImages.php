<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImages extends Model
{
    protected $fillable = [
        'image',
        'product_id'
    ];

    public $timestamps = false;

    public function product(): BelongsTo
    {
        $this->belongsTo(Product::class);
    }
}
