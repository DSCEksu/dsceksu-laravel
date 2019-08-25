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
        'name' => 'DSC Lead',
        'email' => 'lead@dsc.com',
        'password' => bcrypt('password'),
        'email_verified_at' => now()
      ]);

      $user->attachRole($lead);
    }
}
