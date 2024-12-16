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
</style>
  </head>
  <body>
@include('admin.header')
@include('admin.sidebar')

<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <center>
            <h1 style="font-size: 30px; font-weight:bold">Gallery</h1>

            <div class = "row">

            @foreach ($gallary as $gallary)
            <div class="col-md-4">
                <img style="height: 200px!important; width: 300px!important; padding: 10px;" src="/gallary/{{$gallary->image}}">
                <a class="btn btn-danger" href="{{url('delete_gallary',$gallary->id)}}">Delete Image</a>
            </div>
            @endforeach

        </div>

            <form action="{{url('upload_gallary')}}" method="Post" enctype="multipart/form-data">
                @csrf

                <div class="div_deg">
                    <label style="color: black;">Upload Image</label>
                    <input type="file" name="image" required>
                </div>

                <div class="div_deg">
                    <input class="btn btn-primary" type="submit" value="Add Image">
                </div>
            </form>
    </center>

      </div>
    </div>
</div>

        @include('admin.footer')
  </body>
</html>
