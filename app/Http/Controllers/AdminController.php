<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Booking;

use App\Models\Appointment;

use App\Models\Gallary;

use App\Models\Contact;

use Carbon\Carbon;


use Google_Client;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;

use Notification;

use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                $book = Booking::all();
                $gallary = Gallary::all();
                return view('home.index', compact('book', 'gallary'));
            } else if ($usertype == 'admin') {
                // Fetch total number of users and appointments
                $user = User::where('usertype', 'user')->count();
                $appointment = Appointment::count();

                // Example maximum values (these can be dynamic or hardcoded)
                $maxPatients = 100;
                $maxAppointments = 100;

                // Calculate progress percentages
                $patientProgress = ($user / $maxPatients) * 100;
                $patientProgress = min($patientProgress, 100); // Ensure it doesn't exceed 100%

                $appointmentProgress = ($appointment / $maxAppointments) * 100;
                $appointmentProgress = min($appointmentProgress, 100); // Ensure it doesn't exceed 100%

             // Line chart data: appointments per month for the current year
             $currentYear = Carbon::now()->year;

             $monthlyAppointments = DB::table('appointments')
                 ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
                 ->whereYear('created_at', $currentYear)
                 ->groupBy(DB::raw('MONTH(created_at)'))
                 ->pluck('count', 'month')->toArray();

             // Ensure all months are represented, even with 0 appointments
             $appointmentsData = [];
             for ($i = 1; $i <= 12; $i++) {
                 $appointmentsData[] = $monthlyAppointments[$i] ?? 0;
             }

             // Pass progress percentages and chart data to the view
             return view('admin.index', compact('user', 'appointment', 'patientProgress', 'appointmentProgress', 'appointmentsData'));
            } else {
                return redirect()->back();
            }
        }
    }



    public function home()
    {
        $book = Booking::all();
        $gallary = Gallary::all();
        return view('home.index',compact('book','gallary'));

    }

    public function create_booking()
    {
        return view('admin.create_booking');
    }

    public function add_booking(Request $request)
    {
        $data = new Booking;

        $data->booking_title = $request->title;

        $data->description = $request->description;

        $data->price = $request->price;

        $data->booking_type = $request->type;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('booking',$imagename);

            $data->image=$imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function view_booking()
    {
        $data = Booking::all();

        return view('admin.view_booking',compact('data'));
    }

    public function booking_delete($id)
    {
        $data = Booking::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function booking_update($id)
    {
        $data = Booking::find($id);

        return view('admin.booking_update',compact('data'));
    }

    public function edit_booking(Request $request, $id)
    {
        $data = Booking::find($id);

        $data->booking_title = $request->title;

        $data->description = $request->description;

        $data->price = $request->price;

        $data->booking_type = $request->type;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('booking',$imagename);

            $data->image=$imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function appointments()
    {
        $data = Appointment::all();
        return view('admin.appointment',compact('data'));
    }

    public function delete_appointment($id)
    {
        $data = Appointment::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function approve_appointment($id)
    {
        $appointment = Appointment::find($id);

        $appointment->status='APPROVE';

        $appointment->save();

        return redirect()->back();
    }

    public function rejected_appointment($id)
    {
        $appointment = Appointment::find($id);

        $appointment->status='REJECTED';

        $appointment->save();

        return redirect()->back();
    }

    public function view_gallary()
    {
        $gallary = Gallary::all();

        return view('admin.gallary',compact('gallary'));
    }

    public function upload_gallary(Request $request)
    {
        $data = new Gallary;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('gallary',$imagename);

            $data->image=$imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function delete_gallary($id)
    {
        $data = Gallary::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function all_messages()
    {
        $data = Contact::all();

        return view('admin.all_messages',compact('data'));
    }

    public function send_mail($id)
    {
        $data = Appointment::find($id);

        return view('admin.send_mail',compact('data'));
    }

    public function mail(Request $request,$id)
    {
        $data = Appointment::find($id);

        $details = [
            'greeting' => $request->greeting,

            'body' => $request->body,

            'action_text' => $request->action_text,

            'action_url' => $request->action_url,

            'endline' => $request->endline,
        ];

        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back();
    }

    public function reminder()
    {
        $data = Appointment::all();

        return view('admin.reminder',compact('data'));
    }
}
