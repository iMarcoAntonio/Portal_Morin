<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$users = ['username' => 'morin', 'password' => Hash::make('morin')];

		DB::table('users')->insert($users);
	}

}
