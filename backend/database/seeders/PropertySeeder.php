<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedFile = fopen(base_path('database/data/property-data.csv'), "r");
        $skipFirstLine = true;
        while (($data = fgetcsv($seedFile, 2000, ",")) !== FALSE) {
            if (!$skipFirstLine) {
                Property::create([
                    "name" => $data['0'],
                    "price" => $data['1'],
                    'bedrooms' => $data['2'],
                    'bathrooms' => $data['3'],
                    'storeys' => $data['4'],
                    'garages' => $data['5'],
                ]);
            }
            $skipFirstLine = false;
        }
        fclose($seedFile);
    }
}
