<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\FakeCar($faker));
        
        for ($i=0; $i < 25; $i++) {
            $model = $faker->vehicleModel;
            $slug = Str::slug($model);
            
            Car::create([
                'model' => $model,
                'slug' => $slug,
                'year' => $faker->year,
                'color' => $faker->safeColorName,
                'kilometers' => $faker->randomFloat(2, 100, 100000),
                'price' => $faker->randomFloat(2, 1000, 100000),
                'transmission' => $faker->vehicleGearBoxType,
                'fuel_type' => $faker->vehicleFuelType,
                'engine_size' => $faker->randomFloat(2, 1.0, 5.0),
                'description' => $faker->text,
            ]);
        }
    }
}
