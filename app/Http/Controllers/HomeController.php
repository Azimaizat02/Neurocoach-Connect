<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;

use App\Models\Appointment;

use App\Models\Gallary;

use App\Models\Contact;

use App\Models\User;

use Carbon\Carbon;

class HomeController extends Controller
{
    public function book_details($id)
    {

        $book = Booking::find($id);

        return view('home.book_details',compact('book'));

    }

    public function add_appointment(Request $request, $id)
    {
        $user = auth()->user();
        $data = new Appointment;

        $data->appointment_id = $id;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;


        $startTime = $request->startTime;

        $endTime = $request->endTime;

        $isBooked = Appointment::where('appointment_id',$id)
        ->where('start_time','<=',$endTime)
        ->where('end_time','>=',$startTime)->exists();

        if($isBooked)
        {
            return redirect()->back()->with('message','Appointment is already taken, please try different time');
        }

        else
        {
        $data->start_time = $request->startTime;

        $data->end_time = $request->endTime;

        $data->ondate = $request->sDate;

        $data->user_id = $user->id;

        $data->save();

        return redirect()->back()->with('message','Booking Appointment Successfully');
        }




    }

    public function contact(Request $request)
    {

        $contact = new Contact;

        $contact->name = $request->name;

        $contact->email = $request->email;

        $contact->phone = $request->phone;

        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message','Message Sent Successfully');

    }

    public function contact_us()
    {
        return view('home.contact_us');
    }

    public function my_bookings()
    {
        $data = auth()->user()->appointments;

        return view('home.my_bookings', compact('data'));
    }

    public function calendar(Request $request)
{
        // Get the requested month and year or use the current month/year if none specified
        $month = $request->input('month', Carbon::now()->month);
        $year = $request->input('year', Carbon::now()->year);

        // Calculate previous and next month
        $currentDate = Carbon::create($year, $month, 1);
        $previousMonth = $currentDate->copy()->subMonth();
        $nextMonth = $currentDate->copy()->addMonth();

        // Retrieve all appointments for the specified month and year
        $data = Appointment::whereYear('ondate', $year)
                            ->whereMonth('ondate', $month)
                            ->get();

        // Pass data to the view
        return view('home.calendar', [
            'data' => $data,
            'month' => $month,
            'year' => $year,
            'previousMonth' => $previousMonth,
            'nextMonth' => $nextMonth
        ]);
}

public function about_us()
    {
        return view('home.about_us');
    }

public function policy()
    {
        return view('home.policy');
    }

public function book_info()
    {
        return view('home.book_info');
    }


}
