<?php

class UserController extends \BaseController {
	 
	public function login()
	{
		$input = Input::all();
		$username = $input['username'];
		$password = $input['password'];
		$success = Auth::attempt(array('username' => $username, 'password' => $password));
		if($success)
		{
			return Redirect::action('UserController@index');
		} else{
			echo "inside failure";
			Session::put('login_error', 'Login failed');
		}
	}
	
	public function logout()
	{
		Auth::logout();
		
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Redirect::action('salah.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		if($input['password'] == $input['confirm_password']) {
			$password = $input['password'];
			$encrypted = Hash::make($password);
			$user = new User;
			$user->username = $input['username'];
			$user->password = $encrypted;
			$mosque = new Mosque;
			$mosque->name = $input['mosque_name'];
			$mosque->save();
			$user->save();
			return Redirect::action('UserController@index');
			
		} else {
			$error = "Password and Confirmed password does not match";
			return View::make('user.create', array('username' => $input['username'], 'error' => $error));
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
