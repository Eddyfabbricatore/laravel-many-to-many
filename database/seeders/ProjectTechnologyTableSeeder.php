<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Technology;

class ProjectTechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ad ogni cicli estraggo un progetto e una tecnologia random e li relaziono

        for($i = 0; $i < 50; $i++){
            // estraggo un progetto random
            $project = Project::inRandomOrder()->first();

            // estraggo l'i della tecnologia random
            $technology_id = Technology::inRandomOrder()->first()->id;

            $project->technologies()->attach($technology_id);
        }
    }
}
