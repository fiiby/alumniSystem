<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alum;

class AlumSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
// Create 10 fake alumni records
Alum::factory()->count(10)->create();
}
}
