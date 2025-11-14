<?php

namespace Database\Seeders;

use App\Models\Code;
use Illuminate\Database\Seeder;

class CodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['code' => '3305900009', 'name' => 'Прочие средства для волос'],
            ['code' => '3305100000', 'name' => 'Шампуни'],
            ['code' => '3305300000', 'name' => 'Лаки для волос'],
            ['code' => '3305900001', 'name' => 'Лосьоны для волос'],
            ['code' => '3910000008', 'name' => 'Прочие силиконы в первичных формах'],
        ];

        foreach ($data as $item) {
            Code::query()->create($item);
        }
    }
}
