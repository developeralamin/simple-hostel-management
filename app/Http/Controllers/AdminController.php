<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
class AdminController extends Controller
{
   
	public function ViewUser(){
         $this->data['users']  = User::all();
         
         return view('backend.users.view_user',$this->data);


	}
	//End mehtod


	public function AddUser(){
       
         return view('backend.users.add_user');
	}
	//End mehtod

 // $data              = new User();
 //        $code              = rand(00000,999999);
 //        $data->usertype    = 'Admin';
 //        $data->role        = $request->role;
 //        $data->name        = $request->name;
 //        $data->email       = $request->email;
 //        $data->password    = bcrypt($code);
 //        $data->code        = $code;
 //        $data->save();
	public function StoreUser(Request $request){
       
          $validata = $request->validate([
    	      'email' => 'required|unique:users',
              'name' => 'required',
          ]);	


	     $data              = new User();
	     $code              = rand(00000,999999);
	     $data->usertype    =  $request->usertype;
	     $data->name        = $request->name;
	     $data->email       = $request->email;
	     $data->password    = bcrypt($code);
	     $data->code        = $code;
	     $data->save();

	      Toastr::success('Profile Successfully Saved :)' ,'Success');
          return redirect()->route('user.view');

	}
	//End mehtod


	public function EditUser($id){

          $this->data['editData']  = User::findOrFail($id);
         return view('backend.users.edit_user',$this->data);

	}
	//End mehtod


	public function UserUpdate(Request $request , $id){

     User::findOrFail($id)->update([
        'name'  => $request->name , 
        'email'  => $request->email,  
        'usertype'  => $request->usertype,  
 
     ]);

    Toastr::success('Profile Successfully Update :)' ,'Success');
          return redirect()->route('user.view');

	}
	//End mehtod


	public function UserDelete($id){

       $user = User::findOrFail($id);

       $user->delete();

         Toastr::success('Profile Successfully Update :)' ,'Success');
          return redirect()->route('user.view');


	}
	//End mehtod






}
