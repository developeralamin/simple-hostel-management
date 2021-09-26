@extends('admin.admin_master')
@section('content')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">FILL ALL INFO</h4>

			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('registry.store') }}">
	 	@csrf

<div class="row">
	<div class="col-12">	
		 <h4 style="color: red;">Room Related info<span class="text-danger">*</span></h4>
   <div class="row">
   	 <div class="col-md-6" >		
		<div class="form-group">
			<h5>Room No.  <span class="text-danger">*</span></h5>
			<div class="controls">
				<select id="room_id" name="room_id" onChange="getSeater(this.value);" onBlur="checkAvailability()" class="form-control" >
					<option value="">Select Room</option>
					@foreach($room_no as $room)
					<option value="{{ $room->id }}">{{ $room->room_no }}</option>
					@endforeach
				</select>
				
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

		<div class="col-md-6" >		
		<div class="form-group">
			<h5>Seater <span class="text-danger">*</span></h5>
			<div class="controls">
                {{-- <select id="seater" name="seater"  class="form-control" >
					
				</select>  --}}
				<input type="text" id="seater" name="seater"  class="form-control">
 
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

	 
    </div> <!-- End Row -->

    <div class="row">
		<div class="col-md-6" >		
		<div class="form-group">
			<h5>Fees Per Month <span class="text-danger">*</span></h5>
			<div class="controls">
				
				<input type="text" id="feespm" name="feespm"  class="form-control" >
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->
 <div class="col-md-6" >		
		<div class="form-group">
			<h5>Duration<span class="text-danger">*</span></h5>
			<div class="controls">
				
				 <select name="durations"  class="form-control">
				 	<option value="">Select Month</option>
				 	<option value="1">1</option>
				 	<option value="2">2</option>
				 	<option value="3">3</option>
				 	<option value="4">4</option>
				 	<option value="5">5</option>
				 	<option value="6">6</option>
				 	<option value="7">7</option>
				 	<option value="8">8</option>
				 	<option value="9">9</option>
				 	<option value="10">10</option>
				 	<option value="11">11</option>
				 	<option value="12">12</option>
				 </select>
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->
	  
    </div> <!-- End Row -->


     <div class="row">
		<div class="col-md-6" >		
		<div class="form-group">
			<h5>Stay From<span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="date" name="stayfrom"  class="form-control" >  
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

	<div class="col-md-6" >		
		<div class="form-group">
			<h5>Food Status <span class="text-danger">*</span></h5>
			
			 <select id="fees" name="fees"  class="form-control" >
			 	<option value="Without Food"> Without Food</option>
			 	<option value="With Food(Rs 2000.00 Per Month Extra)"> With Food(Rs 2000.00 Per Month Extra)</option>
			 </select>
			
			 
		</div>
	</div><!-- End Col Md-6 -->
	 
    </div> <!-- End Row -->

</div> <!-- End Col M12 -->


</div> <!-- End Row -->

 
  <div class="row">
	<div class="col-12">	
		 <h4 style="color: red;">Personal info
<span class="text-danger">*</span></h4>
   <div class="row">
   	 <div class="col-md-6" >		
		<div class="form-group">
			<h5>Course<span class="text-danger">*</span></h5>
			<div class="controls">
				<select id="course_id" name="course_id"  class="form-control" >
					<option value="">Select Course</option>
					@foreach($courses as $course)
					<option value="{{ $course->id }}">{{ $course->course_full_name }}</option>
					@endforeach
				</select>
				
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

		<div class="col-md-6" >		
		<div class="form-group">
			<h5>Registration No : <span class="text-danger">*</span></h5>
			<div class="controls">
               <input type="text" id="reg_no" name="reg_no"  class="form-control"  >
 
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

	 
    </div> <!-- End Row -->

    <div class="row">
		<div class="col-md-6" >		
		<div class="form-group">
			<h5>First Name : <span class="text-danger">*</span></h5>
			<div class="controls">
               <input type="text" id="first_name" name="first_name"  class="form-control"  >
 
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->
 <div class="col-md-6" >		
		<div class="form-group">
			<h5>Last Name : : <span class="text-danger">*</span></h5>
			<div class="controls">
               <input type="text" id="last_name" name="last_name"  class="form-control"  >
 
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->
	  
    </div> <!-- End Row -->


     <div class="row">
		<div class="col-md-6" >		
		<div class="form-group">
			<h5>Phone No.<span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="phone_no"  class="form-control" >  
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

	<div class="col-md-6" >		
		<div class="form-group">
			<h5>Email <span class="text-danger">*</span></h5>
			
			<div class="controls">
				 <input type="email" name="email"  class="form-control" >  
			</div>
			
			 
		</div>
	</div><!-- End Col Md-6 -->


	<div class="col-md-6" >		
		<div class="form-group">
			<h5>Gender <span class="text-danger">*</span></h5>
			
			<div class="controls">
				 {{-- <input type="text" name="gender"  class="form-control" >   --}}
				 <select type="text" name="gender"  class="form-control" >
				 	<option value="Male">Male</option>
				 	<option value="FeMale">FeMale</option>
				 	<option value="Others">Others</option>
				 </select>
			</div>
			
			 
		</div>
	</div><!-- End Col Md-6 -->

	 <div class="col-md-6" >		
		<div class="form-group">
			<h5>Guardian Name <span class="text-danger">*</span></h5>
			
			<div class="controls">
				 <input type="text" name="gurdian_name"  class="form-control" >  
			</div>
			
			 
		</div>
	</div><!-- End Col Md-6 -->
<div class="col-md-6" >		
		<div class="form-group">
			<h5>Guardian Contact <span class="text-danger">*</span></h5>
			
			<div class="controls">
				 <input type="text" name="gurdian_contact"  class="form-control" >  
			</div>
			
			 
		</div>
	</div><!-- End Col Md-6 -->
<div class="col-md-6" >		
		<div class="form-group">
			<h5>Guardian Relation <span class="text-danger">*</span></h5>
			
			<div class="controls">
				 <input type="text" name="gurdian_relation"  class="form-control" >  
			</div>
			
			 
		</div>
	</div><!-- End Col Md-6 -->




    </div> <!-- End Row -->


 



</div> <!-- End Col M12 -->


</div> <!-- End Row -->
				
<div class="row">
	<div class="col-12">	
		 <h4 style="color: red;">Correspondense Address
<span class="text-danger">*</span></h4>
   <div class="row">
   	 <div class="col-md-12" >		
		<div class="form-group">
			<h5>Address<span class="text-danger">*</span></h5>
			<div class="controls">
				
			<textarea cols="10" rows="10" type="text" name="current_address"  class="form-control" >
					
				</textarea>
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

		<div class="col-md-6" >		
		<div class="form-group">
			<h5>State : <span class="text-danger">*</span></h5>
			<div class="controls">
               <input type="text" id="current_state" name="current_state"  class="form-control"  >
 
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

	 
    </div> <!-- End Row -->

    <div class="row">
		<div class="col-md-6" >		
		<div class="form-group">
			<h5>City: <span class="text-danger">*</span></h5>
			<div class="controls">
               <input type="text" id="current_city" name="current_city"  class="form-control"  >
 
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

 <div class="col-md-6" >		
		<div class="form-group">
			<h5>Pincode : : <span class="text-danger">*</span></h5>
			<div class="controls">
               <input type="text" id="current_pincode" name="current_pincode"  class="form-control"  >
 
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->
	  
    </div> <!-- End Row -->




 <h4 style="color: red;">Permanent Address
<span class="text-danger">*</span></h4>
     <div class="row">
		<div class="col-md-12" >		
		<div class="form-group">
			<h5>Permanent Address.<span class="text-danger">*</span></h5>
			<div class="controls">
				<textarea cols="10" rows="10" type="text" name="permanent_address"  class="form-control" >
					
				</textarea>
				  
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

	<div class="col-md-6" >		
		<div class="form-group">
			<h5>P.State <span class="text-danger">*</span></h5>
			
			<div class="controls">
				 <input type="text" name="permanent_state"  class="form-control" >  
			</div>
			
			 
		</div>
	</div><!-- End Col Md-6 -->


	<div class="col-md-6" >		
		<div class="form-group">
			<h5>City <span class="text-danger">*</span></h5>
			
				<div class="controls">
				 <input type="text" name="permanent_city"  class="form-control" >  
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

	 <div class="col-md-6" >		
		<div class="form-group">
			<h5>Per. Pincode<span class="text-danger">*</span></h5>
			
			<div class="controls">
				 <input type="text" name="permanent_pincode"  class="form-control" >  
			</div>
			
			 
		</div>
	</div><!-- End Col Md-6 -->

<div class="col-md-6" >		
		<div class="form-group">
			<h5>Posting Date<span class="text-danger">*</span></h5>
			
			<div class="controls">
				 <input type="date" name="posting_date"  class="form-control" >  
			</div>
			
			 
		</div>
	</div><!-- End Col Md-6 -->


    </div> <!-- End Row -->
    </div> <!-- End Row -->






    </div> <!-- End Row -->



</div> <!-- End Col M12 -->


</div> <!-- End Row -->



	 <div class="text-xs-right">
	   <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
		<a href="{{ route('registry.view') }}" class="btn btn-rounded btn-success">Back</a>
    </div>

</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>

	  
	  </div>
  </div>


@endsection


@section('footer_js')


<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

<script>
		function getSeater(val) {
		$.ajax({
		// type: "POST",
		// url: "get_seater.php",
		data:'room_id='+val,
		success: function(data){
		//alert(data);
		$('#seater').val(data);
		}
		});


		$.ajax({
		// type: "POST",
		// url: "get_seater.php",
		data:'room_id='+val,
		success: function(data){
		//alert(data);
		$('#feespm').val(data);
		}
		});
		}
</script>

@endsection