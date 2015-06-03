<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\loginFormRequest;
use App\Http\Requests\RegFormRequest;
use App\Models\Users;
use Auth;
use Session;
use Redirect;
use Mail;
use Input;
use Illuminate\Http\Request;
//use Illuminate\Http\Request;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function _constructor()
	{
	}
	public function index()
	{
        if(Session('fname') !== null){
        return view('home');
        }
		else{
        Session::forget('flash');
        return view('user.login1');}
	}
    
    public function login(loginFormRequest $request)
	{   
        Session::forget('flash');
        $Users = new Users;
        $email     = $request->input('email');
        $password  = bcrypt($request->input('password')); 
        $query = $Users::where('email', '=', $email)->where
            ('password', '=', $password) ->where('verified', '=', 1);
        if ($query = 1){
            $query = $Users::select();
            
            foreach ($Users->get() as $user)
                {
                    Session::put('fname', $user->fname);
                    Session::put('lname', $user->lname);
                }
            return view('home');
        } 
        else {
            
            redirect('user.login1'); 
        }       
    
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function register( )
        {
            //
           return view('user.register');
            //return 'ndani';
	}
    
	public function store(RegFormRequest $request)
	{
            Session::forget('flash');
            $Users = new Users;
            $Users->password = bcrypt($request->input('passwd'));
            $Users->email  = $email = $request->input('email');
            $Users->fname  = $fname = $request->input('firstname');
            $Users->lname  = $request->input('lastname');
            $Users->a_code  = $code = $request->input('_token');
        
            if($Users->save())
            {
                $data['fname'] = $fname;
                $data['code'] = $code;
                
                Mail::send(['html' => 'emails.auth_email'], $data, function($message) {
                    $message->to(Input::get('email'), 'iLIFE')
                        ->subject('Account Validation:iLIFE'); });
                
                Session::flash('flash', 'You are one step closer :) .Kindly check your email to activate your account.');
               return redirect('user.reg'); 
            }
            else {
                
                Session::flash('flash', 'There was a problem seeting up');
                redirect('user.reg');
            }

	}
    
    public function activate($code )
        {
        Session::reflash();
        //echo $code;
        $Users = new Users;
        $Users::where('a_code', '=', $code)->update(['verified' => 1]);
        Session::flash('flash', 'Your account has been activated, kindly log in to access the system');
        return redirect('/');
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
	public function destroy()
	{
		//
        Session::forget('sname');
        Session::forget('lname'); 
        Session::flush();
         Session::regenerate();
        return redirect('/');
	}

}
