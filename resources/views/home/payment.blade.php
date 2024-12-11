<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
    @include('home.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
            padding-bottom: 40px;
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

  <div class="div_center">
    <h1 style="font-size: 30px; font-weight:bold">Add Payment</h1>
    <form action="{{url('add_payment')}}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="div_deg">
            <label>Payment Title</label>
            <input type="text" name="title" placeholder="Title">

        </div>
        <div class="div_deg">
            <label>Description</label>
            <input type="text" name="description" placeholder="Payment description">

        </div>

        <div class="div_deg">
            <label>Upload Payment</label>
            <input type="file" name="file">
        </div>

        <div class="div_deg">
            <input class="btn btn-primary" type="submit" value="Add Payment">
        </div>
    </form>
</div>

      <!--  footer -->
      @include('home.footer')


   </body>
</html>
