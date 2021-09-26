<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;
use App\Models\Course;
use App\Models\Registration;
use Brian2694\Toastr\Facades\Toastr;


class RegistrationController extends Controller
{
		    
		public function registryView(){
			return 'ok';
		}

	//End method


		public function registryAdd(){
			 $this->data['room_no']  = Rooms::all();
			 $this->data['courses']  = Course::all();
			 return view('backend.registrations.add_registrations',$this->data);
		}

	//End method


		public function registryStore(Request $request){
             return $request->all();
		}

	//End method


		public function registryEdit(){

		}

	//End method


		public function registryUpdate(){

		}

	//End method


		public function registryDelete(){

		}

	//End method





}
