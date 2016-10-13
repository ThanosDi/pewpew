<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Validator,Input,Redirect,Auth,Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function register()
    {
        $hometitle = "Register";
        $return = view('register',compact('hometitle'));

        return $return;
    }

    public function doRegister()
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'name'    => 'required', // make sure the username is an actual username
            'username'    => 'required', // make sure the username is an actual username
            'email'    => 'required|email|unique:users', // make sure the username is an actual username
            'password' => 'required|alphaNum|min:3|confirmed', // password can only be alphanumeric and has to be greater than 3 characters
            'password_confirmation' => 'required|min:3'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

         // if the validator fails, redirect back to the form
        if ($validator->fails()) {

            return Redirect::to('register')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        }else{

            // create our user data for the authentication
            $userRegister = array(
                'name'  => Input::get('name'),
                'username'  => Input::get('username'),
                'email'     => Input::get('email'),
                'password'  => Hash::make(Input::get('password'))
            );

            $user = User::create($userRegister);
            Auth::logout(); // log the user out of our application
            return Redirect::to('/')->with('message', 'Your account has been created.You can login now!'); // redirect the user to the login screen with success message
           
        }
    }

    public function doLogin()
    {

        // validate the info, create rules for the inputs
        $rules = array(
            'username'    => 'required', // make sure the username is an actual username
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'username'     => Input::get('username'),
                'password'  => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                 return Redirect::to('home');
             

            } else {        

                // validation not successful, send back to form 
                return Redirect::back()->withErrors(['error' => 'Wrong username and/or password' ]);;

            }

        }
    }

    public function doLogout()
    {
        
        Auth::logout(); // log the user out of our application
        return Redirect::to('/'); // redirect the user to the login screen

    }
}
