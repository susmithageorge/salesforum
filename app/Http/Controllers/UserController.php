<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Input;
use DB;
// use Illuminate\Support\Facades\Redirect;

use Session;
use Auth;
use Redirect;
use App\User;
use Mail;
use Hash;
use Config;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
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
    public function newadmin()
    {

        return view('admin.newadminregistration');
    }
    public function newadminregistration()
    {
        $rules = array(
        'name' =>'required',
        'email' =>'required|email|unique:users' ,
        'info' =>'required',
        'password' =>'required|min:6',
        'repassword' =>'same:password'
         );
        $validator=Validator::make($data=Input::all(),$rules);
        if(!$validator->fails())
        {
            //return view('admin.adminlogin')->withErrors($validator)->withInput();
            $user=new User;
            $user->name=Input::get('name');
            $user->user_type_id=1;
            $user->info=Input::get('info');
            $user->email=Input::get('email');
            $pa=Input::get('password');
            $pass=Hash::make($pa);
            $user->password=$pass;
            
            //print_r($user);
            //exit;
            $user->save();
            //echo $user->id;
            //exit;
            return view('admin.adminlogin')->with('success','Registered successfully!Please login here');

        }
    }
    public function newuserregistration()
    {
        $rules=array(

         'name'=>'required',
         'email'=>'required|email|unique:users',
         'password'=>'required|min:6',
         'info'=>'required',
         'cpass'=>'required|same:password'
        );
        $validator=Validator::make($data=Input::all(),$rules);
        if(!$validator->fails())
        {
            $user=new User;
            $user->name=Input::get('name');
            $user->user_type_id=2;
            $user->user_id=Auth::id();
            $user->info=Input::get('info');
            $user->email=Input::get('email');
            $pa=Input::get('password');
            $pass=Hash::make($pa);
            $user->password=$pass;
            //echo Auth::id();
            $user->save();
            //dd(Config::get("mail"));
            Mail::send('admin.regmail',['user'=>$user,'password'=>Input::get('password')],function($m) use ($user)
            {
             $m->to($user->email,$user->name)->subject('Salesforum account');


            });
            echo 'success';
        }
    }
    public function usersdelete($id)
    {
        $user=User::findOrFail($id);
        if($user)
        {
            User::destroy($id);
            echo "succes";
        }
    }
}
