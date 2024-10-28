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
            <h1 style="font-size: 30px; font-weight:bold">Add Booking</h1>
            <form action="{{url('add_booking')}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="div_deg">
                    <label>Booking Title</label>
                    <input type="text" name="title">

                </div>
                <div class="div_deg">
                    <label>Description</label>
                    <textarea name="description"></textarea>

                </div>
                <div class="div_deg">
                    <label>Price</label>
                    <input type="number" name="price">

                </div>
                <div class="div_deg">
                    <label>Booking Type</label>
                    <select name="type">
                    <option selected value="EEG & ALERTNESS">EEG & ALERTNESS</option>
                    <option value="BRAIN TRAINING">BRAIN TRAINING</option>
                    </select>
                </div>


                <div class="div_deg">
                    <label>Upload Image</label>
                    <input type="file" name="image">
                </div>

                <div class="div_deg">
                    <input class="btn btn-primary" type="submit" value="Add Booking">
                </div>
            </form>
        </div>

      </div>
    </div>
</div>

        @include('admin.footer')
  </body>
</html>
