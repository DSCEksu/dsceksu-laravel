<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
        [
          'name' => 'lead',
          'display_name' => 'Lead Organizer',
          'description' => 'DSC Lead Organizer',
          'created_at' => now(),
          'updated_at' => now()
        ],
        [
          'name' => 'coreteam',
          'display_name' => 'Technical Core Team Member',
          'description' => 'DSC Technical Core Team Member',
          'created_at' => now(),
          'updated_at' => now()
        ],
        [
          'name' => 'noncoreteam',
          'display_name' => 'Non-Technical Core Team Member',
          'description' => 'DSC Non-Technical Core Team Member',
          'created_at' => now(),
          'updated_at' => now()
        ],
        [
          'name' => 'member',
          'display_name' => 'Member',
          'description' => 'DSC Member',
          'created_at' => now(),
          'updated_at' => now()
        ],
      ]);
    }
}
