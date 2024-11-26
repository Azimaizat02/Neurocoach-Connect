<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@include('admin.css')

<style type="text/css">

.table_deg
{
    border: 2px solid white;
    width: 80%;
    margin: auto;
    text-align: center;
    margin-top: 40px;
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
  <body>
@include('admin.header')
@include('admin.sidebar')

<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <table class="table_deg">
            <tr>
               <th class="th_deg">Name</th>
               <th class="th_deg">Type</th>
               <th class="th_deg">Title</th>
               <th class="th_deg">Description</th>
               <th class="th_deg">Date</th>
               <th class="th_deg">Delete</th>
               <th class="th_deg">Update</th>
            </tr>

            @foreach($data as $data)
            <tr>
                <td>{{$data->report_writer}}</td>
                <td>{{$data->report_type}}</td>
                <td>{{$data->report_title}}</td>
                <td>{{$data->desc}}</td>
                <td>{{$data->report_date}}</td>
                <td> <a onclick="confirmation(event)" class= "btn btn-danger" href="{{url('report_delete',$data->id)}}">Delete</a></td>
                <td> <a class= "btn btn-warning" href="{{url('report_update',$data->id)}}">Update</a></td>
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
