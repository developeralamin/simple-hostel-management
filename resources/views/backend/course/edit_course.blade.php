@extends('admin.admin_master')
@section('content')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Course </h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('course.update',$editData->id) }}">
	 	@csrf

<div class="row">
	<div class="col-12">	

   <div class="row">
		<div class="col-md-6" >		
		<div class="form-group">
			<h5>Course Code <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="course_code" value="{{ $editData->course_code }}"  class="form-control" >  
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

	  <div class="col-md-6" >		
		<div class="form-group">
			<h5>Course SN  <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="course_sort_name"  value="{{ $editData->course_sort_name }}" class="form-control" >  
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->
    </div> <!-- End Row -->

    <div class="row">
		<div class="col-md-6" >		
		<div class="form-group">
			<h5>Course FN <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="course_full_name"  value="{{ $editData->course_full_name }}" class="form-control" >  
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->

	  <div class="col-md-6" >		
		<div class="form-group">
			<h5>Posting Date <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="date" name="posting_date"  value="{{ $editData->posting_date }}"  class="form-control" >  
			</div>
			 
		</div>
	</div><!-- End Col Md-6 -->
    </div> <!-- End Row -->

</div> <!-- End Col M12 -->


</div> <!-- End Row -->

 
  
						 
	 <div class="text-xs-right">
	   <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
		<a href="{{ route('course.view') }}" class="btn btn-rounded btn-success">Back</a>
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
