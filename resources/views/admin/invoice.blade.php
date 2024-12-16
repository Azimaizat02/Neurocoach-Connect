<!DOCTYPE html>
<html>
  <head>
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
            <h1 style="font-size: 30px; font-weight:bold">Add Invoice</h1>
            <form action="{{url('add_invoice')}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="div_deg">
                    <label style="color: black;">Invoice Title</label>
                    <input type="text" name="title" placeholder="Invoice Title">

                </div>
                <div class="div_deg">
                    <label style="color: black;">Description</label>
                    <input type="text" name="description" placeholder="Invoice description">

                </div>

                <div class="div_deg">
                    <label style="color: black;">Upload Invoice</label>
                    <input type="file" name="file">
                </div>

                <div class="div_deg">
                    <input class="btn btn-primary" type="submit" value="Add Invoice">
                </div>
            </form>
        </div>

      </div>
    </div>
</div>

        @include('admin.footer')
  </body>
</html>
