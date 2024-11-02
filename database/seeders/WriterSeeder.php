<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;
use Faker\Factory as Faker;

class WriterSeeder extends Seeder
{
    public function run(): void
    {
        $faker=Faker::create();

        for ($i=0;$i<3;$i++){
            Writer::create([
                'name'=>$faker->name,
                'photo'=>'img/writer' . $i . '.jpg',
            ]);
        }
    }
}
