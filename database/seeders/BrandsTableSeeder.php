<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\SubBrand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Davines' => [
                'Oi',
                'NouNou',
                'MoMo',
                'Love Curl',
                'Love Smoothing',
                'Energizing',
                'Solu',
                'Purifying',
                'Dede Delicate',
                'Nourishing',
                'Melu',
                'Replumping',
                'Minu',
                'Calming',
                'Detoxifying',
                'Renewing',
                'Well-Being',
                'More Inside',
                'The Circle Chronicles',
                'Heart of glass',
                'Pasta & Love',
                'SU'
            ]
        ];

        foreach ($data as $brandName => $subBrandNames) {
            $brandModel = Brand::query()->create(['name' => $brandName]);
            foreach ($subBrandNames as $subBrandName) {
                SubBrand::query()->create([
                    'name' => $subBrandName,
                    'brand_id' => $brandModel->id
                ]);
            }
        }
    }
}
