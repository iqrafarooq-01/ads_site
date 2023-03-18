<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            [
            //Country 
            'name' => 'US',
            // Children of US{provience}
                'children' => [
                    [
                        // Children of each state {Cities}
                        'name' => 'Alabama',
                        //Children of Alabama {Villages }
                        'children' => [
                            ['name' => 'Auburn'],
                            ['name' => 'Birmingham'],
                            ['name' => 'Dothan'],
                            ['name' => 'Florence / Muscle shoals'],
                            ['name' => 'Huntsville / Decatur'],
                            ['name' => 'Mobile'],
                            ['name' => 'Montgomery'],
                            ['name' => 'Tuscaloosa'],
                        ],
                    ],
                    [
                        'name' => 'Alaska',
                        'children' => [
                            ['name' => 'Anchorage / Mat-su'],
                            ['name' => 'Fairbanks'],
                            ['name' => 'Kenai Peninsula'],
                            ['name' => 'Sout Alaska'],
                            ['name' => 'Huntsville / Decatur'],
                        ],
                    ],
                    [
                        'name' => 'Arizona',
                        'children' => [
                            ['name' => 'Flagstaff / Sedona'],
                            ['name' => 'Mohave Country'],
                            ['name' => 'Phoenix'],
                            ['name' => 'Prescott'],
                            ['name' => 'Show Low'],
                            ['name' => 'Siera Vista'],
                            ['name' => 'Tucson'],
                            ['name' => 'Yuma'],
                        ],
                    ],
                    [
                        'name' => 'Arkansas',
                        'children' => [
                            ['name' => 'Fayetteville'],
                            ['name' => 'Fort Smith'],
                            ['name' => 'Jonesboro'],
                            ['name' => 'Little Rock'],
                            ['name' => 'Texarkana'],
                        ],
                    ],
                    [
                        'name' => 'California',
                        'children' => [
                            ['name' => 'Bakersfield'],
                            ['name' => 'Chico'],
                            ['name' => 'Fresno / Madera'],
                            ['name' => 'Gold Country'],
                            ['name' => 'Hanford-Corcoran'],
                            ['name' => 'Humboldt Country'],
                            ['name' => 'Inland Empire'],
                            ['name' => 'Los Angeles'],
                            ['name' => 'Madocio Country'],
                            ['name' => 'Merced'],
                            ['name' => 'Modesto'],
                            ['name' => 'Monterey Bay'],
                            ['name' => 'Jonesboro'],
                            ['name' => 'Orange Country'],
                            ['name' => 'Palm Springs'],
                            ['name' => 'Redding'],
                            ['name' => 'Sacrament'],
                            ['name' => 'San Diego'],
                            ['name' => 'San Francisco Bay Area'],
                            ['name' => 'San Luis Obispo'],
                            ['name' => 'Santa Barbara'],
                            ['name' => 'Santa Maria'],
                            ['name' => 'Siskiyou Country'],
                            ['name' => 'Stockton'],
                            ['name' => 'Sunsanville'],
                            ['name' => 'Visalia-Tulare'],
                            ['name' => 'Yuba-Sutter'],
                        ],
                    ],
                ],
            ],
        ];


        foreach($areas as $area) {
           \App\Area::create($area);
        }
    }
}