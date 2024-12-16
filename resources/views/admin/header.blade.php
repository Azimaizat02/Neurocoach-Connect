<header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="{{url('/home')}}" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Neurocoach</strong><strong>Connect</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">N</strong><strong>C</strong></div></a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        <div class="right-menu list-inline no-margin-bottom" >

          <!-- Log out               -->
          <div class="list-inline-item logout">
            <x-app-layout>

            </x-app-layout>
        </div>
      </div>
    </div>
    </nav>
  </header>

  <style>
    /* Style for the logout button */
    .list-inline-item.logout a {
        color: #000; /* Change this to your preferred text color */
        background-color: transparent; /* Ensure the background is transparent */
        border: 1px solid #ddd; /* Add border if needed */
        border-radius: 4px; /* Optional: Adjust border-radius for rounded corners */
    }

    /* Style for the logout button on hover */
    .list-inline-item.logout a:hover {
        color: #000; /* Maintain the text color on hover */
        background-color: transparent; /* Ensure the background remains transparent on hover */
        border-color: #ccc; /* Change border color if needed on hover */
    }
</style>
