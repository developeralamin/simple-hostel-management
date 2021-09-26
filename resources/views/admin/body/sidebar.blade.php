 
@php
$prefix = Request::route()->getprefix();
$route  = Route::current()->getName();
@endphp



 <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{ route('dashboard') }}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
						  <h3 style="font-size: 21px!important;"><b>Hostel</b> Managemnt System</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="index.html">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="ti-more"></i>Chat</a></li>
            <li><a href=""><i class="ti-more"></i>Calendar</a></li>
          </ul>
        </li> 
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="ti-more"></i>Inbox</a></li>
            <li><a href=""><i class="ti-more"></i>Compose</a></li>
            <li><a href=""><i class="ti-more"></i>Read</a></li>
          </ul>
        </li>
		
        <li class="treeview">
          <a href="#">
            <i data-feather="file"></i>
            <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="profile.html"><i class="ti-more"></i>Profile</a></li>
            <li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
            <li><a href="gallery.html"><i class="ti-more"></i>Gallery</a></li>
            <li><a href="faq.html"><i class="ti-more"></i>FAQs</a></li>
            <li><a href="timeline.html"><i class="ti-more"></i>Timeline</a></li>
          </ul>
        </li> 		  
		 
        <li class="header nav-small-cap">User Interface</li>
		  
        <li class="treeview {{ ($prefix == '/course')?'active' : '' }}">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Course</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
      <li class="{{ ($route == 'course.add')?'active':'' }}"><a href="{{ route('course.add') }}"><i class="ti-more"></i>Add Course</a></li>

      <li  class="{{ ($route == 'course.view')?'active':'' }}"><a href="{{ route('course.view') }}"><i class="ti-more"></i>View Course</a></li>
     
          </ul>
        </li>
		



		<li class="treeview {{ ($prefix == '/rooms')?'active' : '' }}">
          <a href="#">
            <i data-feather="credit-card"></i>
            <span>Rooms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li  class="{{ ($route == 'rooms.add')?'active':'' }}"><a href="{{ route('rooms.add') }}"><i class="ti-more"></i>Add Rooms</a></li>
			<li class="{{ ($route == 'rooms.view')?'active':'' }}"><a href="{{ route('rooms.view') }}"><i class="ti-more"></i>View Rooms</a></li>

		  </ul>
   </li>  
		  
        <li class="treeview {{ ($prefix == '/registry')?'active' : '' }}">
          <a href="#">
            <i data-feather="hard-drive"></i>
            <span>Registration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li  class="{{ ($route == 'registry.add')?'active':'' }}"><a href="{{ route('registry.add') }}"><i class="ti-more"></i>Add Student</a></li>
            <li  class="{{ ($route == 'registry.view')?'active':'' }}"><a href="{{ route('registry.view') }}"><i class="ti-more"></i>View Student</a></li>
           
          </ul>
        </li>
		  
     
						  
		  
	
 
		  
	{{-- 	<li>
          <a href="auth_login.html">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li>  --}}
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
