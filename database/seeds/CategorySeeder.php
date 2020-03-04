<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

        	[
        		'name' => 'Trial',
        		'min_amount' => 500,
        		'max_amount' => 5000,
        		'roi' => 10,
                'weeks' => 1,
                'duration' => 21,
        	],
        	[
        		'name' => 'Basic',
        		'min_amount' => 5100,
        		'max_amount' => 20000,
        		'roi' => 13.5,
                 'weeks' => 1,
                'duration' => 30,
        	],
        	[
        		'name' => 'Enthusiast',
        		'min_amount' => 20100,
        		'max_amount' => 50000,
        		'roi' => 30,
                 'weeks' => 2,
                'duration' => 45,
        	],
            [
                'name' => 'Professional',
                'min_amount' => 50100,
                'max_amount' => 150000,
                'roi' => 35,
                 'weeks' => 2,
                'duration' => 45,
            ],
             [
                'name' => 'Veteran',
                'min_amount' => 150100,
                'max_amount' => 300000,
                'roi' => 50,
                 'weeks' => 3,
                'duration' => 60,
            ],
             [
                'name' => 'Master',
                'min_amount' => 300100,
                'max_amount' => 500000,
                'roi' => 74,
                 'weeks' => 4,
                'duration' => 60,
            ],
             [
                'name' => 'Ultimate',
                'min_amount' => 500100,
                'max_amount' => 1000000,
                'roi' => 80,
                 'weeks' => 4,
                'duration' => 84,
            ],
        ];

        foreach ($data as $cat) {

        	Category::create([

        		'name' => $cat['name'],
        		'min_amount' => $cat['min_amount'],
        		'max_amount' => $cat['max_amount'],
                'roi' => $cat['roi'],
                'weeks' => $cat['weeks'],
        		'duration' => $cat['duration'],
        	]);
        }
    }
}
