<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client as Google_Client;
use Google\Service\Calendar as Google_Service_Calendar;
use App\Models\Appointment;

class GoogleCalendarController extends Controller
{
    public function redirectToGoogle()
    {
        $client = new Google_Client();
        $client->setClientId(config('GOOGLE_CALENDAR_CLIENT_ID'));
        $client->setClientSecret(config('GOOGLE_CALENDAR_CLIENT_SECRET'));
        $client->setRedirectUri(config('GOOGLE_CALENDAR_REDIRECT_URI'));
        $client->addScope(Google_Service_Calendar::CALENDAR_EVENTS);

        return redirect()->away($client->createAuthUrl());
    }

    public function handleGoogleCallback(Request $request)
    {
        $client = new Google_Client();
        $client->setClientId(config('GOOGLE_CALENDAR_CLIENT_ID'));
        $client->setClientSecret(config('GOOGLE_CALENDAR_CLIENT_SECRET'));
        $client->setRedirectUri(config('GOOGLE_CALENDAR_REDIRECT_URI'));

        $token = $client->fetchAccessTokenWithAuthCode($request->input('code'));
        session(['google_access_token' => $token]);

        return redirect()->route('home')->with('success', 'You are logged in with Google!');
    }

    public function linkToGoogleCalendar(Request $request, $id)
    {
        // Find the appointment by ID
        $appointment = Appointment::findOrFail($id);
        $accessToken = session('google_access_token');

        if (!$accessToken) {
            return redirect()->route('google.redirect');
        }

        $client = new Google_Client();
        $client->setAccessToken($accessToken);

        // Create Google Calendar service
        $service = new Google_Service_Calendar($client);

        // Create the event using the appointment details
        $event = new Google_Service_Calendar_Event(array(
            'summary' => 'Appointment with ' . $appointment->name,
            'start' => array(
                'dateTime' => $appointment->start_time,
                'timeZone' => 'Asia/Kuala_Lumpur',
            ),
            'end' => array(
                'dateTime' => $appointment->end_time,
                'timeZone' => 'Asia/Kuala_Lumpur',
            ),
            'attendees' => array(
                array('email' => $appointment->email),
            ),
        ));

        // Add the event to the calendar
        $calendarId = 'primary'; // You can specify a calendar ID if needed
        $service->events->insert($calendarId, $event);

        return redirect()->back()->with('success', 'Event linked to Google Calendar successfully.');
    }
}

