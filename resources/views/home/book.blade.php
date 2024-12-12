<div id="book" class="our_book">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Services</h2>
                    <p>Learn about our top-notch EEG and neurofeedback therapy services, designed
                        to boost your mental health with seamless setup and personalized care!</p>
                        <p>For More Info, <a href="{{url('book_info')}}" style="color: red;">Click Here</a>.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($book as $books)
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img" style="display: flex; justify-content: center; align-items: center;">
                        <figure><img style="height:200px; width:350px" src="booking/{{$books->image}}" alt="#"/></figure>
                    </div>
                    <div class="bed_room">
                        <h3>{{$books->booking_title}}</h3>
                        <p style="padding:10px">{!! Str::limit($books->description,100) !!}</p>
                        <a class="btn btn-primary" href="{{url('book_details',$books->id)}}">Booking Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

