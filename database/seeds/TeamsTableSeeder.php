<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('teams')->insert([
        [
          'name' => 'mobile',
          'display_name' => 'Mobile Development',
          'description' => 'Mobile Development - Flutter',
          'created_at' => now(),
          'updated_at' => now()
        ],
        [
          'name' => 'frontend',
          'display_name' => 'Web Frontend',
          'description' => 'Web Frontend - HTML5, CSS3, JS Es6, Firebase',
          'created_at' => now(),
          'updated_at' => now()
        ],
        [
          'name' => 'backend',
          'display_name' => 'Web Backend',
          'description' => 'Web Backend - PHP, Firebase',
          'created_at' => now(),
          'updated_at' => now()
        ],
        [
          'name' => 'android',
          'display_name' => 'Android Development',
          'description' => 'Android Development - Java',
          'created_at' => now(),
          'updated_at' => now()
        ],
        [
          'name' => 'laravel',
          'display_name' => 'Laravel',
          'description' => 'Web Development - Laravel',
          'created_at' => now(),
          'updated_at' => now()
        ],
        [
          'name' => 'django',
          'display_name' => 'Django',
          'description' => 'Web Development - Django',
          'created_at' => now(),
          'updated_at' => now()
        ],
        [
          'name' => 'design',
          'display_name' => 'Digital Design',
          'description' => 'Digital Design',
          'created_at' => now(),
          'updated_at' => now()
        ],
        [
          'name' => 'leadership',
          'display_name' => 'Leadership',
          'description' => 'Leadership',
          'created_at' => now(),
          'updated_at' => now()
        ]
      ]);
    }
}
