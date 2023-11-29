<?php

use Illuminate\Database\Seeder;

class FastEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fast_events')->insert([
            [
                'title' => 'Excel I',
                'start' => '10:00:00',
                'end' => '10:30:00',
                'color' => '#AB2328'
            ],
            [
                'title' => 'Excel II',
                'start' => '13:30:00',
                'end' => '14:30:00',
                'color' => '#AB2328'
            ],
        ]);
    }
}
