<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use App\Models\Type;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 50; $i++ ){
            $new_project = new Project();
            $new_project->type_id = Type::inRandomOrder()->first()->id;
            $new_project->name = $faker->sentence(3);
            $new_project->slug = Project::generateSlug($new_project->name);
            $new_project->date_creation = $faker->date();
            $new_project->description = $faker->text();
            $new_project->type = $faker->word();
            $new_project->tecnology = $faker->word();
            $new_project->web_site = $faker->url();
            $new_project->save();
        }
    }
}
