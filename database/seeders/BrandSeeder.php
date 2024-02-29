<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Brand;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\FakeCar($faker));
        
        for ($i=0; $i < 25; $i++) {
            $name = $faker->vehicleBrand;
            $slug = Str::slug($name);
            
            Brand::create([
                'name' => $name,
                'slug' => $slug,
                'phone_num' => $faker->phoneNumber,
                'car_type' => $faker->vehicleType,
            ]);
        }
    }
}
