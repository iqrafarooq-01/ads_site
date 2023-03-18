<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
            'name' => 'Community',
                        'children' => [
                            ['name' => 'Activities'],
                            ['name' => 'Artists'],
                            ['name' => 'Chilcare'],
                            ['name' => 'Classes'],
                            ['name' => 'Events'],
                            ['name' => 'General'],
                            ['name' => 'Groups'],
                            ['name' => 'Local news'],
                            ['name' => 'Lost and found'],
                            ['name' => 'Musicians'],
                            ['name' => 'Pets'],
                            ['name' => 'Politics'],
                            ['name' => 'Rideshare'],
                            ['name' => 'Volunteers'],
                            ['name' => 'Rodeshare'],
                        ]
                    ],
                    [
                        'name' => 'Personals',
                        'children' => [
                            ['name' => 'Strictly platonic'],
                            ['name' => 'Women seeking women'],
                            ['name' => 'Men seeking women'],
                            ['name' => 'Misc romance'],
                            ['name' => 'Casual encounters'],
                            ['name' => 'Missed connections'],
                            ['name' => 'Rants and raves'],
                        ]
                    ],
                    [
                        'name' => 'Housing',
                        'children' => [
                            ['name' => 'appartments / housing'],
                            ['name' => 'Housing swap'],
                            ['name' => 'Housing wanted'],
                            ['name' => 'Office / comercial'],
                            ['name' => 'Parking / stroge'],
                            ['name' => 'Real estate for sale'],
                            ['name' => 'Rooms / shared'],
                            ['name' => 'Rooms wanted'],
                            ['name' => 'Sublets / temporary'],
                            ['name' => 'Vacation rentals'],
                        ]
                    ],
        ];


        foreach($categories as $category) {
           \App\Category::create($category);
        }
    }
}