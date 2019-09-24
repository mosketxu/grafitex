<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(\App\User::class, 1)->create([
			'name' => 'admin',
			'last_name' => 'ape admin',
			'email' => 'admin@admin.com',
			'slug' => 'admin',
			'password' => bcrypt('1234'),
		]);

		factory(\App\User::class, 1)->create([
			'name' => 'alex',
			'last_name' => 'arre',
			'email' => 'alex@alex.com',
			'slug' => 'alex-arre',
			'password' => bcrypt('1234'),
		]);

		factory(\App\User::class, 1)->create([
			'name' => 'grafitex',
			'last_name' => 'print',
			'email' => 'grafitex@grafitex.com',
			'slug' => 'grafitex-print',
			'password' => bcrypt('1234'),
		]);
    }
}
