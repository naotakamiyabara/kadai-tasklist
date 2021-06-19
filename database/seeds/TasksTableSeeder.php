<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'status' => 'test status 1',
            'content' => 'test content 1'
        ]);
        DB::table('tasks')->insert([
            'status' => 'test status 2',
            'content' => 'test content 2'
        ]);
        DB::table('tasks')->insert([
            'status' => 'test status 3',
            'content' => 'test content 3'
        ]);
    }
}