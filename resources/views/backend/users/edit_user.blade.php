@extends('admin.admin_master')
@section('content')


 <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->
    

    <section class="content">

                       
<div class="container col-12  align-center">

       	<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('user.update',$editData->id) }}">
	 	@csrf
					  <div class="row">
						<div class="col-12">	


<div class="row">
	<div class="col-md-6" >

	<div class="form-group">
		<h5>User Role <span class="text-danger">*</span></h5>
		<div class="controls">
		 <select name="usertype" id="usertype"  class="form-control">
				<option value="" selected="" disabled="">Select Role</option>
				<option value="Admin" {{ $editData->usertype =='Admin' ?'selected' :'' }}>Admin</option>
				<option value="Operator"{{ $editData->usertype =='Operator' ?'selected' :'' }} >Operator</option>
				 
			</select>
		 </div>
    </div>

	</div> <!-- End Col Md-6 -->

	<div class="col-md-6" >		
	<div class="form-group">
		<h5>User Name <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="name" value="{{ $editData->name }}" class="form-control " >  </div>
		 
	</div>

	</div><!-- End Col Md-6 -->
	

</div> <!-- End Row -->



    <div class="row">

		<div class="col-md-6" >

	  <div class="form-group">
			<h5>Email <span class="text-danger">*</span></h5>
			<div class="controls">
		 <input type="email" name="email" value="{{ $editData->email }}" class="form-control" >  </div>
			 
		</div>

	</div> <!-- End Col Md-6 -->

	<div class="col-md-6" >

	 {{--  <div class="form-group">
			<h5>User Password <span class="text-danger">*</span></h5>
			<div class="controls">
		 <input type="password" name="password" class="form-control" >  </div>
			 
		</div> --}}

	</div> <!-- End Col Md-6 -->
	

</div> <!-- End Row -->

 
  
						 
	<div class="text-xs-right">

	   <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
		<a href="{{ route('user.view') }}" class="btn btn-rounded btn-success">Back</a>
		</div>
</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
 


       
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
        <!-- /.content -->
      
      </div>
  </div>





@endsection
