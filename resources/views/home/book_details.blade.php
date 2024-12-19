<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
    @include('home.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style type="text/css">

    label
    {
        display: inline-block;
        width: 200px;
    }

    input
    {
        width: 100%;
    }

    header {
    margin-bottom: 0; /* Remove any bottom margin from the header */
    padding-bottom: 0; /* Remove any bottom padding from the header */
}

body {
    margin: 0;
    padding: 0;
}

.our_book {
    margin-top: 0; /* Remove unnecessary margin above the content section */
    padding-top: 0; /* Remove unnecessary padding above the content section */
}
    </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
        @include('home.header')
      </header>
      <!-- end header inner -->
      <!-- end header -->


      <div  class="our_book">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2 style="padding-top: 20px">Our Services</h2>
                    <p>Learn about our top-notch EEG and neurofeedback therapy services, designed
                        to boost your mental health with seamless setup and personalized care!</p>
                        <p>For More Info, <a href="{{url('book_info')}}" style="color: red;">Click Here</a>.</p>
                 </div>
              </div>
           </div>


           <div class="row">


              <div class="col-md-8">
                 <div id="serv_hover"  class="room">
                    <div style="padding:20px" class="room_img">
                       <figure><img style="height:300px; width:800px" src="/booking/{{$book->image}}" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                       <h2>{{$book->booking_title}}</h2>
                       <p style="padding: 12px">{{$book->description}}</p>
                       <h4 style="padding: 12px"> Booking Type : {{$book->booking_type}}</h4>
                       <h3 style="padding: 12px"> Price : RM{{$book->price}}</h3>





                    </div>
                 </div>
              </div>

              <div class="col-md-4">

                <h1 style="font-size: 40px!important;">Book Appointment</h1>

                <div>

                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-bs-dismiss="alert">X</button>

                {{session()->get('message')}}

                </div>

                @endif

               </div>

                @if($errors)

                @foreach($errors->all() as $errors)

                <li>{{$errors}}</li>

                @endforeach

                @endif

                <form action="{{url('add_appointment',$book->id)}}" method="Post">
                    @csrf

                <div>
                    <label>Name</label>
                    <input type="text" name="name" @if(Auth::id()) value="{{Auth::user()->name}}" @endif>
                </div>

                <div>
                    <label>Email</label>
                    <input type="email" name="email" @if(Auth::id()) value="{{Auth::user()->email}}" @endif>
                </div>

                <div>
                    <label>Phone</label>
                    <input type="number" name="phone" @if(Auth::id()) value="{{Auth::user()->phone}}" @endif>
                </div>

                <div>
                    <label>Start Time</label>
                    <input type="time" name="startTime" id="startTime">
                </div>

                <div>
                    <label>End Time</label>
                    <input type="time" name="endTime" id="endTime">
                </div>

                <div>
                    <label>Date</label>
                    <input type="date" name="sDate" id="startDate">
                </div>

                <div style="padding-top:20px;">
                    <input type="submit" style="background-color: rgb(20, 35, 238)" class="btn btn-primary" value="Book Appointment">
                </div>

            </form>

              </div>


           </div>
        </div>
     </div>

      <!--  footer -->
      @include('home.footer')

      <script type="text/javascript">
    $(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;

    var day = dtToday.getDate();

    var year = dtToday.getFullYear();

    if(month < 10)
        month = '0' + month.toString();

    if(day < 10)
     day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;
    $('#startDate').attr('min', maxDate);

    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   </body>
</html>
