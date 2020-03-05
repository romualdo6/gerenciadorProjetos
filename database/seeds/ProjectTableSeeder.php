<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Entities\Project::truncate();
        factory("App\Entities\Project", 10)->create();
    }
}
