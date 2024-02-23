<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for ($i=0; $i < 20; $i++) {
            $model = $faker->sentence(2);
            $slug = Str::slug($model);
            
            Car::create([
                'model' => $model,
                'slug' => $slug,
                'brand' => $faker->word,
                'year' => $faker->year,
                'color' => $faker->safeColorName,
                'kilometers' => $faker->randomFloat(2, 100, 100000),
                'price' => $faker->randomFloat(2, 1000, 100000),
                'transmission' => $faker->randomElement(['manual', 'automatic']),
                'fuel_type' => $faker->randomElement(['gasoline', 'diesel', 'electric']),
                'engine_size' => $faker->randomFloat(2, 1.0, 5.0),
                'description' => $faker->text,
            ]);
        }
    }
}
