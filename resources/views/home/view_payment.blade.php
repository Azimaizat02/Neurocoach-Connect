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
            <th class="th_deg">Payment Title</th>
            <th class="th_deg">Description</th>
            <th class="th_deg">View</th>
            <th class="th_deg">Download</th>
        </tr>

        @foreach($data as $data)
        <tr>
            <td>{{$data->title}}</td>
            <td>{{$data->description}}</td>
            <td><a href="{{url('show_payment',$data->id)}}">View</a></td>
            <td><a href="{{url('/download',$data->file)}}">Download</a></td>
        </tr>
        @endforeach

    </table>

      <!--  footer -->
      @include('home.footer')


   </body>
</html>
