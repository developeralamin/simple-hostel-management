<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;
use App\Models\Course;
use App\Models\Registration;

class DashboardController extends Controller
{
    
   public function AdminView()
   {
   	 
   	   $data['border'] = Registration::count('id');
   	   return view('admin.index',compact('border')); 



   }

//End method



}
