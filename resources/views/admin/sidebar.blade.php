<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="title">
          <h1 class="h5">NC Admin</h1>
          <p>Web Designer</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main Menu</span>
      <ul class="list-unstyled">
              <li class="active"><a href="{{url('/home')}}"> <i class="icon-home" style="color: #DB6574;"></i>Home </a></li>

              <li><a href="#bookingdropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows" style="color: #DB6574;"></i>Booking Management </a>
                <ul id="bookingdropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('create_booking')}}">Add Bookings</a></li>
                  <li><a href="{{url('view_booking')}}">View Type of Bookings</a></li>
                  <li><a href="{{url('reminder')}}">Reminder</a></li>
                </ul>
              </li>

              <li><a href="{{url('appointments')}}"> <i class="fa fa-calendar" style="color: #DB6574;"></i>Appointments</a></li>

            </li>

            <li><a href="{{url('view_gallary')}}"> <i class="fa fa-camera" style="color: #DB6574;"></i>Gallary</a></li>

            <li><a href="#reportdropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-folder" style="color: #DB6574;"></i>Report Management</a>
                <ul id="reportdropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('report')}}">Add Report</a></li>
                  <li><a href="{{url('view_report')}}">View Report</a></li>
                </ul>
              </li>

              <li><a href="#invoicedropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file" style="color: #DB6574;"></i>Payment and Invoice</a>
                <ul id="invoicedropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('invoice')}}">Add Invoice</a></li>
                  <li><a href="{{url('view_invoice')}}">View Invoice</a></li>
                  <li><a href="{{url('view_payment')}}">View Payment</a></li>
                </ul>
              </li>

            <li><a href="{{url('all_messages')}}"> <i class="fa fa-envelope" style="color: #DB6574;"></i>Messages</a></li>
      </ul>
    </nav>
