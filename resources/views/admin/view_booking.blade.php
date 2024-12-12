<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@include('admin.css')

<style type="text/css">

.table_deg {
    border-collapse: collapse; /* Ensures borders are not doubled */
    border: 2px solid black;
    width: 80%;
    margin: auto;
    text-align: center;
    margin-top: 40px;
}

.th_deg {
    background-color: skyblue;
    padding: 15px;
    border: 2px solid black; /* Adds vertical borders for header cells */
}

tr {
    border: 2px solid black;
}

td {
    padding: 10px;
    border: 2px solid black; /* Adds vertical borders for table cells */
}
</style>
  </head>
  <body>
@include('admin.header')
@include('admin.sidebar')

<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <table class="table_deg">
            <tr>
               <th class="th_deg">Booking Title</th>
               <th class="th_deg">Description</th>
               <th class="th_deg">Price</th>
               <th class="th_deg">Booking Type</th>
               <th class="th_deg">Image</th>
               <th class="th_deg">Delete</th>
               <th class="th_deg">Update</th>
            </tr>

            @foreach($data as $data)
            <tr>
                <td>{{$data->booking_title}}</td>
                <td>{!! Str::limit($data->description,150) !!}</td>
                <td>RM{{$data->price}}</td>
                <td>{{$data->booking_type}}</td>
                <td style="text-align: center;">
                    <img width="100" src="booking/{{$data->image}}" style="display: block; margin: auto;">
                </td>
                <td> <a onclick="confirmation(event)" class= "btn btn-danger" href="{{url('booking_delete',$data->id)}}">Delete</a></td>
                <td> <a class= "btn btn-warning" href="{{url('booking_update',$data->id)}}">Update</a></td>
            </tr>

            @endforeach
        </table>
      </div>
    </div>
</div>

        @include('admin.footer')

        <script type= "text/javascript">
        function confirmation(ev)
        {
          ev.preventDefault();

          var urlToRedirect=ev.currentTarget.getAttribute('href');

          console.log(urlToRedirect);

          swal({

            title: "Are you Sure to delete this ",

            text: "You won't be able to revert this delete ",

            icon: "warning",

            buttons: true,

            dangerMode: true ,
          })

          .then((willCancel)=>
          {

            if(willCancel)
          {
            window.location.href=urlToRedirect;
          }

          });
        }
        </script>
  </body>
</html>
