<?php


/*for creating a User*/


/*Route::get('/',['as'=>'login', function()
{
	$user = ['username'=>'Ratul','email'=>'ratulcse27@gmail.com','password'=>Hash::make('1')];

	User::create($user);
}]);
*/

/*for creating a User*/

Route::get('/',['as'=>'login','uses'=>'UsersController@getLogin']);
Route::get('login',['as'=>'login','uses'=>'UsersController@getLogin']);
Route::post('login','UsersController@postLogin');
Route::get('logout',['as'=>'logout', 'uses'=>'UsersController@getLogout']);



Route::group(array('before' => 'auth'), function()
{

	Route::get('home',['as'=>'home','uses'=>'UsersController@index']);
	Route::get('adminchange',['as'=>'adminchange','uses'=>'UsersController@edit']);
	Route::post('adminchange','UsersController@update');
	
	Route::resource('accounts',"AccountsController");


	Route::get('accounts/delete/{id}', 'AccountsController@destroy');

});


