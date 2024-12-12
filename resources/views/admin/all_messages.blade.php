<!DOCTYPE html>
<html>
  <head>
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
               <th class="th_deg">Name</th>
               <th class="th_deg">Email</th>
               <th class="th_deg">Phone</th>
               <th class="th_deg">Message</th>
            </tr>

            @foreach ($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->message}}</td>
            </tr>
            @endforeach


        </table>
      </div>
    </div>
</div>


        @include('admin.footer')
  </body>
</html>
