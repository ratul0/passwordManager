<?php

class AccountsTableSeeder extends Seeder {

	public function run()
	{
		$users = array(
			array(
				'service'  =>'gmail',
				'username'  =>'ratul',
				'password'   => strrev('hello123'),
				'email'      =>'ratulcse27@gmail.com',
				'note'	=>	'somthing about this ..'
			)
		);

		DB::table('accounts')->insert($users);
	}
}