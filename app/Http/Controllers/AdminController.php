<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Support\Facades\Validator;
 use Input;
 use DB;
// use Illuminate\Support\Facades\Redirect;

use Session;
use Auth;
use Redirect;
use App\User;
use App\Manufacturer;
use App\Dealer;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
       //$a=Hash::make('admin');
       //echo $a;
        return view('admin.adminlogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
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


    public function login()
    {
        $input=Input::all();
        $validate=Validator::make(Input::all(),
            [
            'uname' => 'required',
            'password' => 'required'
            ]);
        if(!$validate->fails())
        {
            
            $userdata=array('name'=> Input::get('uname'),
            'password' => Input::get('password'));

            $matchThese = ['name' => $userdata['name'], 'user_type_id'=>1];
            $user = User::select('*')->where($matchThese)->first();
            if (Auth::attempt($userdata))
              {
                   $user = Auth::user();
                   $id= Auth::id();
                    if($user->user_type_id == 1)
                     {
                        return view('admin.dashboard')->with('success','login success');
                     }
              }
            else
              {
                     return view('admin.adminlogin')->with('error','invalid username or password');
              }
                     
        }
            

    }

    public function insert()
    {

    }


    public function usersindex()
    {
    
      $id=Auth::id();
      $matchThese = ['user_id'=>$id,'user_type_id'=>2];
      $user_list=DB::table('users')->select('*')->where($matchThese)->get();
      return view('admin.users',['user_list'=> $user_list]);
    }


    public function manufacturersindex()
    {

        $id=Auth::id();
        $man_list=DB::table('manufacturers')->select('*')->where('user_id',$id)->get();
        return view('admin.manufacturers',['man_list'=>$man_list]);
    }
    

    public function productsindex()
    {

        $id=Auth::id();
        $matchThese=['user_id' =>2,'user_type_id'=>$id];
        $pro_list=DB::table('products')->select('*')->where($matchThese)->get();
        return view('admin.products',['pro_list'=>$pro_list]);
    }

    public function dealersindex()
    {

        $id=Auth::id();
        $matchThese=['user_id' =>2,'user_type_id'=>$id];
        $d_list=DB::table('dealers')->select('*')->where($matchThese)->get();
        return view('admin.dealers',['d_list'=>$d_list]);
    }


    public function userseditview($id)
    {

       $user=DB::table('users')->select('*')->where('id',$id)->get();
       return view('admin.userseditview',['users'=>$user]);
    }


    public function adduserview()
    {
       return view('admin.adduser');
    }


    public function adminupdateuser($id)
    {
    
       $input=Input::all();
       $validate=Validator::make(Input::all(),[
       'name' =>'required',
       'email' =>'required|email',
       'password' =>'required|min:6',
       'cpass' =>'required|same:password',
       'info' =>'required'
       ]);
    

       if(!$validate->fails())
        {
        
          $user=User::findOrFail($id);
          $user->name=Input::get('name');
          $user->email=Input::get('email');
          $pa=Input::get('password');
          $p=Hash::make($pa);
          $user->password=$p;
          $user->info=Input::get('info');
          $user->user_id=Auth::id();
          $user->user_type_id=2;
          $user->save();
          echo "success";
        
        }

    }


    public function test($file)
    {
      \Excel::load($file, function($reader) 
      {

         $results= $reader->get()->toArray();
         //echo "<pre>";
         //print_r($results);
         foreach($results as $row)
         {
            $man=new Manufacturer;
            $man->name=$row['name'];
            $man->uploadfilename=$row['uploadfilename'];
            $man->info=$row['info'];
            $man->user_id=Auth::id();
            $man->created_at=$row['created_at'];
            $man->updated_at=$row['updated_at'];
            $man->save();
            
         }
         echo "success";
      
      });

    }
    


    public function importdealers()
    {

      \Excel::load('del.csv',function($reader)
      {
        $results=$reader->get()->toArray();
        foreach ($results as $row) 
        {
          $dealer=new Dealer;
          /*$dealer->name=$row['name'];
          $dealer->user_id=1;
          $dealer->info=$row['info'];
          $dealer->uploadfilename=$row['uploadfilename'];
          //$dealer->created_at=$row['created_at'];*/
          //echo $row['created_at']."<br/>";
            $h=date('Y m d  H i s', strtotime($row['created_at']));
            echo $h;
            echo "<br/>";
           //$h=$dealer->created_at=getDateFormat($row['created_at']);
           //$h=$dealer->created_at->format('Y-m-d H:i:s');
           //echo $h;
           
          //$dealer->updated_at=$row['updated_at'];
          //$dealer->save();

        }
        exit;
        //echo "success";

      });
    }
    


}

