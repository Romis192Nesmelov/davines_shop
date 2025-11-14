<?php

namespace Database\Seeders;
use App\Models\Hair;
use Illuminate\Database\Seeder;

class HairTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Тонкие',
            'Непослушные',
            'Вьющиеся',
            'Жесткие',
            'Окрашенные',
            'Для всех типов волос',
            'Для чувствительной кожи головы',
            'Поврежденные',
            'Осветленные',
            'Смешанный тип волос',
            'Сухие',
            'Нормальные',
            'Жирные'
        ];

        foreach ($data as $name) {
            Hair::query()->create(['name' => $name]);
        }
    }
}
