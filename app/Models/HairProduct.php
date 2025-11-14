<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HairProduct extends Model
{
    protected $table = 'hair_product';

    protected $fillable = [
        'hair_id',
        'product_id'
    ];

    public $timestamps = false;

    public function hair(): BelongsTo
    {
        return $this->belongsTo(Hair::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
