<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;
use Brian2694\Toastr\Facades\Toastr;


class RoomController extends Controller
{
	    
	public function RoomsView(){
           $this->data['allData']  = Rooms::orderBy('id','desc')->get(); 
		   return view('backend.rooms.view_rooms',$this->data);  
	}
//End method


	public function RoomsAdd(){
      return view('backend.rooms.add_rooms');
	}

//End method

	public function RoomsStore(Request $request){

		  $validata = $request->validate([
	    	'seater'       => 'required',
	    	'room_no'  => 'required',
	    	'fees'  => 'required',
	    	'posting_date'       => 'required',
	    
	     
	     ]);	

   	Rooms::insert([
   	   		'seater'              =>$request->seater,
   	   		'room_no'             =>$request->room_no,
   	   		'fees'                =>$request->fees,
   	   		'posting_date'        =>$request->posting_date,

   	    ]);

      Toastr::success('Room Successfully Saved :)' ,'Success');
      return redirect()->route('rooms.view');
	}

//End method

	public function RoomsEdit($id){
       	$this->data['editData']  = Rooms::findOrFail($id);
		return view('backend.rooms.edit_rooms',$this->data);
	}

//End method

	public function RoomsUpdate(Request $request ,$id){

			Rooms::findOrFail($id)->update([
   	   		'seater'              =>$request->seater,
   	   		'room_no'             =>$request->room_no,
   	   		'fees'                =>$request->fees,
   	   		'posting_date'        =>$request->posting_date,

   	    ]);

      Toastr::success('Room Successfully Updated :)' ,'Success');
      return redirect()->route('rooms.view');
	}
//End method


	public function RoomsDelete($id){

		$rooms = Rooms::findOrFail($id);

		$rooms->delete();
		 Toastr::success('Room Successfully Deleted :)' ,'Success');
        return redirect()->route('rooms.view');


	}

//End method





}
