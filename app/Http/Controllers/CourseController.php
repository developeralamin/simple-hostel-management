<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Brian2694\Toastr\Facades\Toastr;

class CourseController extends Controller
{
	    
	public function CoureView(){
		  $this->data['allData']  = Course::orderBy('id','desc')->get(); 

		   return view('backend.course.view_course',$this->data);   
	}

//End method


	public function CoureAdd(){
		return view('backend.course.add_course');
	}
//End method

	public function CoureStore(Request $request){

   	    $validata = $request->validate([
	    	'course_code'       => 'required|unique:courses',
	    	'course_sort_name'  => 'required',
	    	'course_full_name'  => 'required',
	    	'posting_date'       => 'required',
	    
	     
	     ]);	

   	Course::insert([
   	   		'course_code'       =>$request->course_code,
   	   		'course_sort_name'  =>$request->course_sort_name,
   	   		'course_full_name'  =>$request->course_full_name,
   	   		'posting_date'      =>$request->posting_date,

   	    ]);

      Toastr::success('Course Successfully Saved :)' ,'Success');
      return redirect()->route('course.view');

	}

//End method
	public function CoureEdit($id){

		$this->data['editData']  = Course::findOrFail($id);
		return view('backend.course.edit_course',$this->data);


	}
//End method

	public function CoureUpdate(Request $request,$id){


   	Course::findOrFail($id)->update([
   	   		'course_code'       =>$request->course_code,
   	   		'course_sort_name'  =>$request->course_sort_name,
   	   		'course_full_name'  =>$request->course_full_name,
   	   		'posting_date'      =>$request->posting_date,

   	    ]);

      Toastr::success('Course Successfully Updated :)' ,'Success');
      return redirect()->route('course.view');

	}

//End method
	public function CoureDelete($id){
		 $course  = Course::findOrFail($id);

		 $course->delete();

		 Toastr::success('Course Successfully Deleted :)' ,'Success');
         return redirect()->back();

	}

//End method


}
