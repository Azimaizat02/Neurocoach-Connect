<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
    @include('home.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style type="text/css">

        .table_deg
        {
            border: 2px solid white;
            width: 100%;
            margin: auto;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 50px;
        }

        .th_deg
        {
            background-color: skyblue;
            padding: 15px;
        }

        tr
        {
            border: 3px solid white;
        }

        td
        {
            padding: 10px;
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

      @if($errors->any())
      <div class="alert alert-danger">
          {{ $errors->first() }}
      </div>
  @endif

      <table class="table_deg">
        <tr>
           <th class="th_deg">ID</th>
           <th class="th_deg">Appointment Type</th>
           <th class="th_deg">Start</th>
           <th class="th_deg">End</th>
           <th class="th_deg">Date</th>
           <th class="th_deg">Status</th>
           <th class="th_deg">Payment</th>

        </tr>

        @foreach($data as $data)
        <tr>
            <td>{{$data->appointment_id}}</td>
            <td>{{$data->book->booking_type}}</td>
            <td>{{$data->start_time}}</td>
            <td>{{$data->end_time}}</td>
            <td>{{$data->ondate}}</td>
            <td>
                @if($data->status == 'APPROVE')
                <span style="color: skyblue;">APPROVED</span>
                @endif

                @if($data->status == 'REJECTED')
                <span style="color: red;">REJECTED</span>
                @endif

                @if($data->status == 'waiting')
                <span style="color: green;">WAITING</span>
                @endif
            </td>
            <td><a href=""><b>Click Here</b></a></td>
        </tr>
        @endforeach

    </table>

      <!--  footer -->
      @include('home.footer')


   </body>
</html>
