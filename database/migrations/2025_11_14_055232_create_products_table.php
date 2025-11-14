<?php

use App\Models\ProductType;
use App\Models\SubBrand;
use App\Models\Country;
use App\Models\Code;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('article',20)->unique();
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->integer('price');
            $table->integer('value_added_tax');
            $table->string('barcode');
            $table->tinyInteger('weight');
            $table->tinyInteger('width');
            $table->tinyInteger('height');
            $table->tinyInteger('length');
            $table->string('video')->nullable();
            $table->foreignIdFor(ProductType::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(SubBrand::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->tinyInteger('volume');
            $table->integer('expiration_date_in_days');
            $table->text('hash_tags');
            $table->text('abstract');
            $table->text('structure');
            $table->string('method_of_application');
            $table->string('effect');
            $table->string('composition_features')->nullable();
            $table->tinyInteger('sex');
            $table->foreignIdFor(Country::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Code::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete()->nullable();
            $table->tinyInteger('bestseller');
            $table->tinyInteger('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
