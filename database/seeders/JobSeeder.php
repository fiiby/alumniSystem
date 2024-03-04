<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
// Create 5 fake jobs
Job::factory()->count(5)->create();
}
}