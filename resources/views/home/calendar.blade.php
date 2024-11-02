<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .calendar-table {
            width: 100%;
            margin: auto;
            margin-top: 40px;
            border-collapse: collapse;
        }
        .calendar-table th, .calendar-table td {
            border: 2px solid black;
            padding: 15px;
            text-align: center;
            vertical-align: top;
            width: 14.28%;
            height: 100px;
        }
        .calendar-table th {
            background-color: skyblue;
            font-weight: bold;
        }
        .date-with-appointments {
            background-color: #c3e6cb; /* Light green for dates with appointments */
        }
        .date-no-appointments {
            background-color: #f5f5f5; /* Light grey for dates without appointments */
        }
        .month-navigation {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="main-layout">
    <header>@include('home.header')</header>

    <!-- Month Navigation -->
    <div class="month-navigation">
        <a href="{{ route('calendar.index', ['month' => $previousMonth->month, 'year' => $previousMonth->year]) }}" class="btn btn-primary">Previous Month</a>
        <h2>{{ \Carbon\Carbon::create($year, $month)->format('F Y') }}</h2>
        <a href="{{ route('calendar.index', ['month' => $nextMonth->month, 'year' => $nextMonth->year]) }}" class="btn btn-primary">Next Month</a>
    </div>

    <!-- Calendar Table -->
    <table class="calendar-table">
        <thead>
            <tr>
                <th>Sunday</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
            </tr>
        </thead>
        <tbody>
            @php
                $daysInMonth = \Carbon\Carbon::create($year, $month)->daysInMonth;
                $firstDayOfMonth = \Carbon\Carbon::create($year, $month, 1)->dayOfWeek;
                $currentDay = 1;
            @endphp
            @for ($week = 0; $week < 6; $week++)
                <tr>
                    @for ($dayOfWeek = 0; $dayOfWeek < 7; $dayOfWeek++)
                        @if ($week == 0 && $dayOfWeek < $firstDayOfMonth)
                            <td></td> <!-- Empty cells before the first day of the month -->
                        @elseif ($currentDay > $daysInMonth)
                            <td></td> <!-- Empty cells after the last day of the month -->
                        @else
                            @php
                                // Check if there are any appointments on this day
                                $hasAppointments = $data->some(function($appointment) use ($currentDay, $month) {
                                    return \Carbon\Carbon::parse($appointment->ondate)->day == $currentDay && \Carbon\Carbon::parse($appointment->ondate)->month == $month;
                                });
                            @endphp
                            <td class="{{ $hasAppointments ? 'date-with-appointments' : 'date-no-appointments' }}">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#appointmentModal" onclick="showAppointments({{ $currentDay }})">
                                    <strong>{{ $currentDay }}</strong>
                                </a>

                                <!-- Hidden div with appointment data -->
                                <div id="appointments-{{ $currentDay }}" class="d-none">
                                    @foreach($data as $appointment)
                                        @if(\Carbon\Carbon::parse($appointment->ondate)->day == $currentDay && \Carbon\Carbon::parse($appointment->ondate)->month == $month)
                                            <div>
                                                <strong>{{ $appointment->book->booking_type }}</strong><br>
                                                {{ $appointment->start_time }} - {{ $appointment->end_time }}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                @php $currentDay++; @endphp
                            </td>
                        @endif
                    @endfor
                </tr>
            @endfor
        </tbody>
    </table>

    <!-- Modal for displaying appointments -->
    <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="appointmentModalLabel">Appointments</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="appointmentDetails">
                    <!-- Appointment details will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showAppointments(day) {
            const appointments = document.getElementById(`appointments-${day}`).innerHTML;
            document.getElementById('appointmentDetails').innerHTML = appointments || "No appointments for this day.";
        }
    </script>

    @include('home.footer')
</body>
</html>
