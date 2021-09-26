@extends('admin.admin_master')
@section('content')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Rooms </h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('rooms.update',$editData->id) }}">
	 	@csrf

<div class="row">
	<div class="col-12">	

   <div class="row">
		<div class="col-md-6" >		
		<div class="form-group">
			<h5>Rooms Seater <span class="text-danger">*</span></h5>
			<div class="controls">

      <select  name="seater" id="seater"  class="form-control">
         <option value="One Seater" {{ ($editData->seater == "One Seater" ? "selected": "") }}>One Seater</option>
         <option value="Two Seater" {{ ($editData->seater == "Two Seater" ? "selected": "") }}>Two Seater</option>
         <option value="Three Seater" {{ ($editData->seater == "Three Seater" ? "selected": "") }}>Three Seater</option>
         <option value="Four Seater" {{ ($editData->seater == "Four Seater" ? "selected": "") }}>Four Seater</option>
         <option value="Five Seater" {{ ($editData->seater == "Five Seater" ? "selected": "") }}>Five Seater</option>
         <option value="Six Seater" {{ ($editData->seater == "Six Seater" ? "selected": "") }}>Six Seater</option>
         
      </select>

          		</select>

			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

	  <div class="col-md-6" >		
		<div class="form-group">
			<h5>Room No.  <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" value="{{ $editData->room_no }}" name="room_no"  class="form-control" >  
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->
    </div> <!-- End Row -->

    <div class="row">
		<div class="col-md-6" >		
		<div class="form-group">
			<h5>Fees <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" value="{{ $editData->fees }}" name="fees"  class="form-control" >  
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

	  <div class="col-md-6" >		
		<div class="form-group">
			<h5>Posting Date <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="date" value="{{ $editData->posting_date }}" name="posting_date"  class="form-control" >  
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->
    </div> <!-- End Row -->

</div> <!-- End Col M12 -->


</div> <!-- End Row -->

 
  
						 
	 <div class="text-xs-right">
	   <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
		<a href="{{ route('rooms.view') }}" class="btn btn-rounded btn-success">Back</a>
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
