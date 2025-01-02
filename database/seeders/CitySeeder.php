<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\city;
use File;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(path:"database/json/cities.json");
        $cities = json_decode($json);
        foreach ($cities as $city) {
            city::create([
                "city_name" => $city->city_name,
            ]);
        }
    }
}
