@extends('admin.admin_master')
@section('content')


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
	
	<div class="col-12">

	 <div class="box">
  <div class="box-header with-border">
	<h3 class="box-title">Room List</h3>
	<a href="{{ route('rooms.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Room</a>			  
				</div>
				<!-- /.box-header -->
		<div class="box-body">
			<div class="table-responsive">
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th width="5%">SL</th>
				<th>Seater</th>
				<th>Room NO.</th>
				<th>Fees(PM)</th>
				<th>Posting Date</th>
				<th width="25%">Action</th>
				 
			</tr>
		</thead>
		<tbody>
	@forelse($allData as $key => $room )
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $room->seater }}</td>
				<td>{{ $room->room_no }}</td>
				<td>{{ $room->fees }}</td>
				<td>{{ $room->posting_date }}</td>
				<td>
<a href="{{ route('rooms.edit',$room->id) }}" class="btn btn-info">Edit</a>
<a href="{{ route('rooms.delete',$room->id) }}" class="btn btn-danger" id="delete">Delete</a>

				</td>
				 
			</tr>

  @empty

   <tr>
   	<td colspan="50" class="text-center">
   		You haven't no course item
   	</td>
   </tr>

@endforelse
							 
			</tbody>
			<tfoot>
				 
			</tfoot>
		  </table>
		</div>
		</div>
		<!-- /.box-body -->
	  </div>
	  <!-- /.box -->
	       
	</div>
	<!-- /.col -->
  </div>
  <!-- /.row -->
</section>
		<!-- /.content -->
	  
	  </div>
  </div>





@endsection
