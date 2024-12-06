<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Event::create([
        'name' => 'Concert',
        'location' => 'Arena',
        'date_time' => now(),
        'description' => 'An amazing concert event',
        'available_seats' => 100,
    ]);
}

}
