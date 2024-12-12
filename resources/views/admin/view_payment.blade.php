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
               <th class="th_deg">Payment Title</th>
               <th class="th_deg">Description</th>
               <th class="th_deg">View</th>
               <th class="th_deg">Download</th>
            </tr>

            @foreach($data as $data)
            <tr>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td><a href="{{url('show_payment',$data->id)}}" style="color: blue;"><strong>View</strong></a></td>
                <td><a href="{{url('/download_payment',$data->file)}}" style="color: blue;"><strong>Download</strong></a></td>
            </tr>

            @endforeach
        </table>
      </div>
    </div>
</div>

        @include('admin.footer')

  </body>
</html>
