<?php

class AccountsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('accounts.index')
			->with('accounts',Account::all())
			->with('title','P - Home');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('accounts.create')
				->with('title','P - Create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Account::validate(Input::all());
		
		if($validation->passes()){
			$account = ['service'=>Input::get('service'),
				'username'=>Input::get('username'),
				'email'=>Input::get('email'),
				'password'=>strrev(Input::get('password')),
				'note'=>Input::get('note')
				]; 

			Account::create($account);
			return Redirect::route('accounts.index');
		}
		return Redirect::back()->withInput()->withErrors($validation);


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		return View::make('accounts.show')
				->with('account',Account::find($id))
				->with('title','P - Show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('accounts.edit')
				->with('account',Account::find($id))
				->with('title','P - Edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$id = Input::get('account_id');
		$validation = Account::validate(Input::all());
		
		if($validation->passes()){
			$account = ['service'=>Input::get('service'),
				'username'=>Input::get('username'),
				'email'=>Input::get('email'),
				'password'=>strrev(Input::get('password')),
				'note'=>Input::get('note')
				]; 

			Account::find($id)->update($account);
			return Redirect::route('accounts.index');
		}
		return Redirect::route('accounts.edit',$id)->withErrors($validation);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Account::destroy($id);
		return Redirect::route('accounts.index')
				->with('message','Account Deleted!');
	}

}