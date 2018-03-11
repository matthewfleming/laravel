<?php

use Illuminate\Database\Seeder;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $columns = ['name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages'];
        $data = [
            ['The Victoria',374662,4,2,2,2],
            ['The Xavier',513268,4,2,1,2],
            ['The Como',454990,4,3,2,3],
            ['The Aspen',384356,4,2,2,2],
            ['The Lucretia',572002,4,3,2,2],
            ['The Toorak',521951,5,2,1,2],
            ['The Skyscape',263604,3,2,2,2],
            ['The Clifton',386103,3,2,1,1],
            ['The Geneva',390600,4,3,2,2],
        ];
        $now = new \DateTime();

        foreach($data as $datum) {
            $row = array_combine($columns, $datum);
            $row['created_at'] = $now;
            $row['updated_at'] = $now;
            DB::table('properties')->insert($row);
        }
    }
}
