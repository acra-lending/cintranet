<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'title' => 'Escrow Holdbacks',
                'start' => '2020-06-15 10:00:00',
                'end' => '2020-06-15 10:30:00',
                'color' => '#AB2328',
                'description' => 'Location ZOOM Only'
            ],
            [
                'title' => 'Mortgage Servicing 101',
                'start' => '2020-06-15 13:30:00',
                'end' => '2020-06-15 14:30:00',
                'color' => '#AB2328',
                'description' => 'Location ZOOM Only'
            ],
            [
                'title' => 'Formula for Commitment',
                'start' => '2020-06-18 09:00:00',
                'end' => '2020-06-15 10:00:00',
                'color' => '#343a40',
                'description' => 'Location ZOOM Only'
            ]
        ]);
    }
}
