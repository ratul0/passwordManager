<?php 
class Account extends BaseModel{
	public $timestamps = false;

	protected $guarded = [];

	protected static $rules = ['email'=>'required|email',
		 'password' =>'Required',
		'username'=>'Required',
		'service'=> 'required',
		];
}