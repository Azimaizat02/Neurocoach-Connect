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
                    <div class="room_img">
                        <figure>
                            <img class="room-image" src="booking/{{$books->image}}" alt="{{$books->booking_title}}"/>
                        </figure>
                    </div>
                    <div class="bed_room">
                        <h5>{{$books->booking_title}}</h5>
                        <a class="btn btn-primary" href="{{url('book_details', $books->id)}}">Booking Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
/* General Styles */
.our_book {
    padding: 50px 0;
}

.titlepage h2 {
    font-size: 2rem;
    margin-bottom: 20px;
}

.titlepage p {
    font-size: 1rem;
    color: #666;
}

/* Room Card Styles */
.room {
    height: 400px; /* Set consistent height for all boxes */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.room:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Image Container Styles */
.room_img {
    height: 200px; /* Fixed height for the image container */
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.room_img img {
    width: 100%; /* Ensures images take the full width of the container */
    height: 100%; /* Ensures images take the full height of the container */
    object-fit: cover; /* Ensures the image fills the space without distortion */
    border-radius: 8px;
}

/* Text and Button Styles */
.bed_room {
    text-align: center;
    margin-top: 10px;
}

.bed_room h5 {
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
}

.bed_room .btn {
    margin-top: 10px;
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
    text-transform: uppercase;
    padding: 8px 15px;
    font-size: 0.9rem;
}

.bed_room .btn:hover {
    background-color: #0056b3;
    border-color: #004085;
}
</style>
