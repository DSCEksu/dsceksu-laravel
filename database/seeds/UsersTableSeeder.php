<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $lead = Role::where('name', 'lead')->first();

      $user = User::create([
        'name' => 'Emmanuel Joseph (JET)',
        'email' => 'emmanueljet774@gmail.com',
        'password' => bcrypt('password'),
      ]);

      $user->attachRole($lead);
    }
}
