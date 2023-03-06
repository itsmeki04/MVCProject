<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('data')->insert([
            'name' => 'Ricks Cabinets By: RAYOS',
            'firstname' => 'Ricks Cabinets',
            'secondname' => 'Make cabinets, you wished for!',
            'thirdname' => 'We are a team of talented designers making cabinets',
            'fourthname' => 'We build durable cabinets!',
            'fifthname' => 'Ricks Cabinets was established in 2011. It is located at Sumpong, Malaybalay City, Bukidnon',
            'sixth' => 'Why choose Ricks Cabinets?',
            'seventh' => 'Ricks Cabinets is a trusted service.', 
            'eight' => 'The design is creative, beautiful, durable, strong and could not damaged easily.', 
            'ninth' => 'The use of woods are durable.',
            'tenth' => 'Ricks Cabinets are built to last for a long time and cost an affordable amount.',
            'eleventh' => 'What We Do?',
            'twelvth' => 'Many customers are satisfied of how strong and beautifully designed cabinets. We build different cabinets.',
            'thirteenth' => 'Wardrobe Cabinet',
            'fourteenth' => 'Kitchen Cabinet',
            'fifteenth' => 'Shoe Cabinet',
            'sixteenth' => 'Medicine Cabinet',
            'seventeenth' => 'Diningroom Cabinet',
            'eightteenth' => 'Office Cabinet',
        ]);

    }
}
