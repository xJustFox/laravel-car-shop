<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Optional;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionals = array(
            'Aria Condizionata' => '700',
            'Climatizzazione' => '1000',
            'Radio' => '300',
            'Navigatore' => '500',
            'Sensori di parcheggio' => '150',
            'Retrocamera' => '700'
        );

        foreach ($optionals as $name => $price) {
            Optional::create([
                'name' => $name,
                'price' => $price,
                'slug' => Str::slug($name)
            ]);
        };
    }
}
