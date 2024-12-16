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
            <h1 style="font-size: 30px; font-weight:bold">Update Booking</h1>
            <form action="{{url('edit_booking',$data->id)}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="div_deg">
                    <label style="color: black;">Booking Title</label>
                    <input type="text" name="title" value="{{$data->booking_title}}">

                </div>
                <div class="div_deg">
                    <label style="color: black;">Description</label>
                    <textarea name="description">{{$data->description}}</textarea>

                </div>
                <div class="div_deg">
                    <label style="color: black;">Price</label>
                    <input type="number" name="price" value="{{$data->price}}">

                </div>
                <div class="div_deg">
                    <label style="color: black;">Booking Type</label>
                    <select name="type">
                        <option selected value="{{$data->booking_type}}">{{$data->booking_type}}</option>

                        <option value="EEG & ALERTNESS">EEG & ALERTNESS</option>
                        <option value="BRAIN TRAINING">BRAIN TRAINING</option>
                    </select>
                </div>

                <div class="div_deg">
                    <label style="color: black;">Current Image</label>
                    <img style="margin:auto;" width="100" src="/booking/{{$data->image}}">
                </div>


                <div class="div_deg">
                    <label style="color: black;">Upload Image</label>
                    <input type="file" name="image">
                </div>

                <div class="div_deg">
                    <input class="btn btn-primary" type="submit" value="Update Booking">
                </div>
            </form>
        </div>

      </div>
    </div>
</div>

        @include('admin.footer')
  </body>
</html>
