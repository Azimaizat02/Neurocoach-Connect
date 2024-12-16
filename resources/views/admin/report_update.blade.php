<!DOCTYPE html>
<html>
  <head>

    <base href="/public">

@include('admin.css')

<style type="text/css">
    label
    {
        display: inline-block;
        width: 200px;
    }
    .div_deg
    {
        padding-top: 30px;
    }
    .div_center
    {
        text-align: center;
        padding-top: 40px;
    }
</style>
  </head>
  <body>
@include('admin.header')
@include('admin.sidebar')

<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <div class="div_center">
            <h1 style="font-size: 30px; font-weight:bold">Update Report</h1>
            <form action="{{url('edit_report',$data->id)}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="div_deg">
                    <label style="color: black;">Name</label>
                    <input type="text" name="name" value="{{$data->report_writer}}">

                </div>

                <div class="div_deg">
                    <label style="color: black;">Report Type</label>
                    <select name="type">
                        <option selected value="{{$data->report_type}}">{{$data->report_type}}</option>

                        <option value="General">General</option>
                        <option value="Incident">Incident</option>
                        <option value="Memo">Memo</option>
                    </select>
                </div>

                <div class="div_deg">
                    <label style="color: black;">Report Title</label>
                    <input type="text" name="title" value="{{$data->report_title}}">

                </div>
                <div class="div_deg">
                    <label style="color: black;">Description</label>
                    <textarea name="desc">{{$data->desc}}</textarea>

                </div>
                <div class="div_deg">
                    <label style="color: black;">Report Date</label>
                    <input type="text" name="date" value="{{$data->report_date}}">

                </div>



                <div class="div_deg">
                    <input class="btn btn-primary" type="submit" value="Update Report">
                </div>
            </form>
        </div>

      </div>
    </div>
</div>

        @include('admin.footer')
  </body>
</html>
