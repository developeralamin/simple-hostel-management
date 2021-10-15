<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;
use App\Models\Course;
use App\Models\Registration;
use Brian2694\Toastr\Facades\Toastr;
use PDF;

class RegistrationController extends Controller
{
		    
		public function registryView(){
			$this->data['allData']   = Registration::all();
			return view('backend.registrations.view_registrations',$this->data);
		}
		

	//End method


		public function registryAdd(){
			 $this->data['room_no']  = Rooms::all();
			 $this->data['courses']  = Course::all();
			 return view('backend.registrations.add_registrations',$this->data);
		}

	//End method


		public function registryStore(Request $request){
              

 		Registration::insert([

				'room_id'=>$request->room_id,
				'course_id'=>$request->course_id,
				'reg_no'=>$request->reg_no,
				'seater'=>$request->seater,
				'feespm'=>$request->feespm,
				'foodstatus'=>$request->foodstatus,
				'stayfrom'=>$request->stayfrom,
				'durations'=>$request->durations,
				'gender'=>$request->gender,
				'first_name'=>$request->first_name,
				'last_name'=>$request->last_name,
				'phone_no'=>$request->phone_no,
				'email'=>$request->email,
				'gurdian_name'=>$request->gurdian_name,
				'gurdian_contact'=>$request->gurdian_contact,
				'gurdian_relation'=>$request->gurdian_relation,
				'current_address'=>$request->current_address,
				'current_state'=>$request->current_state,
				'current_city'=>$request->current_city,
				'current_pincode'=>$request->current_pincode,
				'permanent_address'=>$request->permanent_address,
				'permanent_state'=>$request->permanent_state,
				'permanent_city'=>$request->permanent_city,
				'permanent_pincode'=>$request->permanent_pincode,
				'posting_date'=>$request->posting_date,

 		]);

      Toastr::success('Registration Successfully Saved :)' ,'Success');
      return redirect()->route('registry.view');


		}

	//End method


		public function registryEdit($id){

		}

	//End method


		public function registryUpdate(Request $request ,$id){

		}

	//End method


		public function registryDelete($id){

			$registry = Registration::findOrFail($id);
			$registry->delete();

      Toastr::success('Registration Successfully delete :)' ,'Success');
      return redirect()->route('registry.view');


		}


//End method

	 public function Details($details_id)
	 {
	   $this->data['borders'] = Registration::where('id',$details_id)->first();
           

	$pdf = PDF::loadView('backend.registrations.registrations_details', $this->data);
	$pdf->SetProtection(['copy', 'print'], '', 'pass');
	return $pdf->stream('document.pdf');

	 }



	//End method

	public function findPrice(Request $request)
	{
		     $category = Rooms::whereId($request->id)->first();
	    	return $category;
	}


}
