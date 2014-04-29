<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = array(
			array(
				'username'  =>'ratul',
				'email'      =>'ratulcse27@gmail.com',
				'password'   => Hash::make('1')
			)
		);

		DB::table('users')->insert($users);
	}
}