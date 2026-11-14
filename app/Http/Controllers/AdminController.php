<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;


class AdminController extends Controller
{
    //

    public function __construct()
    {
       
        $this->middleware('auth:web');
    }


    public function index()
    {
       
        if(Auth::check()){
            return view('dashboard');
          }
           return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }

    public function showallmembers()
    {
      
            $allmembers = User::all();
            $allroles = Role::all();
            return view('contents.settings.utilisateurs.index',compact('allmembers','allroles'));
        
       
    }

    public function simplememberdelete($id)
    {
        $memberfordel = User::where('id',$id);

        $memberfordel->delete();

        if(!$memberfordel)
        {
            return redirect()->back()->with('success','the Member was deleted successfuly');
        }else{

            return redirect()->back()->with('error','sorry cant deleted Member !!');
        }

    }

    public function ajaxmemberdelete(Request $request)
    {
        $memberfordel = User::where('id',$request->memer_id);

        if(!$memberfordel)
        {
            return response()->json(['status'=>'error','msg'=>'cant find member ']);
        }else{

            $memberfordel->delete();

            if($memberfordel){
                return response()->json(['status'=>'success','msg'=>'member was added successfully ']);
            }else{
                return response()->json(['status'=>'error','msg'=>'cant delete member ']);
            }
        }
    }


    public function createnewmember(Request $request)
    {

        
      
        $password ='';
        $email = '';
     
      

        if($request->name == ''){
            return response()->json(['status'=>'error','input'=>'name','msg'=>'invalid Name :your name is Require ']);
        }


        if($request->email == ''){
            return response()->json(['status'=>'error','input'=>'email','msg'=>'invalid Email :your email is Require ']);
        }
      


          if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
              $email = $request->email;
          }else{
              return response()->json(['status'=>'error','input'=>'email','msg'=>'invalid Email :your email string input must have email format ']);
          }


         
            if(User::where('email',$request->email)->first() != null){
                return response()->json(['status'=>'error','input'=>'email','msg'=>'invalid email :your email is already been taken by other member ']);
            }
          
         if($request->select_role_id == null){
            return response()->json(['status'=>'error','input'=>'select_role_id','msg'=>'invalid role :the Role Name is require ']);
          }

       

          if($request->password == ''){
            return response()->json(['status'=>'error','input'=>'password','msg'=>'invalid password :your password is Require ']);
        }

        if(strlen($request->password) > 8)
        {
            $password = $request->password;
        }else
        {
            return response()->json(['status'=>'error','input'=>'password','msg'=>'invalid password :password must be at less it 8 characherts ']);
        }


        if($request->password_confirmation == ''){
            return response()->json(['status'=>'error','input'=>'password_confirmation','msg'=>'invalid confirm password :your confirmation password is Require ']);
        }

      

        if($request->password_confirmation != $request->password){
            return response()->json(['status'=>'error','input'=>'password_confirmation','msg'=>'invalid confirm password :your confirmation password dosent match the password ']);
        }

        
       
          
          User::create([
              'name' => $request->name,
              'email' => $email,
              'role_id' => $request->select_role_id,
              'password' => Hash::make($password),
          ]);

      
          return response()->json(['status'=>'success','msg'=>'Member was added successfully ']);

       
       


    }


    public function updatemember(Request $request)
    {

        $password ='';
        $email = '';
     
      
      
      

        if($request->name == ''){
            return response()->json(['status'=>'error','input'=>'name','msg'=>'invalid Name :your name is Require ']);
        }

      
        if($request->email == ''){
            return response()->json(['status'=>'error','input'=>'email','msg'=>'invalid Email :your email is Require ']);
        }

          if(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
              $email = $request->email;
          }else{
              return response()->json(['status'=>'error','input'=>'email','msg'=>'invalid Email :your email string input must have email format ']);
          }

          if($request->email != $request->oldemail)
          {
            if(User::where('email',$request->email)->first() != null){
                return response()->json(['status'=>'error','input'=>'email','msg'=>'invalid email :your email is already been taken by other member ']);
            }
          }

      

          if($request->select_role_id == 'choisir' || $request->select_role_id == ''){
            return response()->json(['status'=>'error','input'=>'select_role_id','msg'=>'invalid role :the Role Name is require ']);
          }
        
          if($request->SwitchOption == "on"){
            if($request->password == ''){
                return response()->json(['status'=>'error','input'=>'password','msg'=>'invalid password :your password is Require ']);
            }
    
            if(strlen($request->password) > 8)
            {
                $password = $request->password;
            }else
            {
                return response()->json(['status'=>'error','input'=>'password','msg'=>'invalid password :password must be at less it 8 characherts ']);
            }


            if($request->password_confirmation == ''){
                return response()->json(['status'=>'error','input'=>'password_confirmation','msg'=>'invalid confirm password :your confirmation password is Require ']);
            }
    
          
    
            if($request->password_confirmation != $request->password){
                return response()->json(['status'=>'error','input'=>'password_confirmation','msg'=>'invalid confirm password :your confirmation password dosent match the password ']);
            }

          
            
            User::find($request->getid_member)->update([
                'name' => $request->name,
                'email' => $email,
                'role_id' => $request->select_role_id,
                'password' => Hash::make($password),
            ]);


          }else{
            User::find($request->getid_member)->update([
                'name' => $request->name,
                'email' => $email,
                'role_id' => $request->select_role_id,
               
            ]);
        }
         

       

      
          return response()->json(['status'=>'success','msg'=>'Member was added successfully ']);

       
       

    }

    

}
