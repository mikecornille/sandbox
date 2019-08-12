<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {	
    	$this->seedUser();
        // $this->call(UsersTableSeeder::class);
    }

    public function seedUser()
    {

        DB::table('users')->insert([
              'name' => 'Mike Cornille',
              'email' => 'mikec@itransys.com',
              'email_verified_at' => now(),
              'password' => bcrypt('password'), // secret
              'remember_token' => Str::random(10),
             
        ]);
    }
}
