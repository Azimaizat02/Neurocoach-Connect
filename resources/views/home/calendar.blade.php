<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <style type="text/css">
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
        }

        .calendar-table th {
            background-color: skyblue;
            font-weight: bold;
        }

        .calendar-table td {
            height: 100px; /* Adjust height as needed */
            position: relative;
        }

        .calendar-table td .appointment {
            background-color: lightgreen;
            padding: 5px;
            margin: 5px 0;
            border-radius: 4px;
        }

        .month-navigation {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="main-layout">
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#"/></div>
    </div>

    <header>
        @include('home.header')
    </header>

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
                $firstDayOfMonth = \Carbon\Carbon::create($year, $month)->startOfMonth()->dayOfWeek;
                $currentDay = 1;
            @endphp
            @for ($week = 0; $week < 6; $week++) <!-- Maximum 6 weeks in a month -->
                <tr>
                    @for ($dayOfWeek = 0; $dayOfWeek < 7; $dayOfWeek++)
                        @if ($week == 0 && $dayOfWeek < $firstDayOfMonth)
                            <td></td> <!-- Empty cells before the first day of the month -->
                        @elseif ($currentDay > $daysInMonth)
                            <td></td> <!-- Empty cells after the last day of the month -->
                        @else
                            <td>
                                <strong>{{ $currentDay }}</strong><br>

                                <!-- Display appointments that match this date -->
                                @foreach($data as $appointment)
                                    @if(\Carbon\Carbon::parse($appointment->ondate)->day == $currentDay && \Carbon\Carbon::parse($appointment->ondate)->month == $month)
                                        <div class="appointment">
                                            <strong>{{ $appointment->book->booking_type }}</strong><br>
                                            {{ $appointment->start_time }} - {{ $appointment->end_time }}
                                        </div>
                                    @endif
                                @endforeach

                                @php $currentDay++; @endphp
                            </td>
                        @endif
                    @endfor
                </tr>
            @endfor
        </tbody>
    </table>

    @include('home.footer')

    <script type="text/javascript">
        $(window).scroll(function() {
            sessionStorage.scrollTop = $(this).scrollTop();
        });

        $(document).ready(function(){
            if(sessionStorage.scrollTop != "undefined") {
                $(window).scrollTop(sessionStorage.scrollTop);
            }
        });
    </script>
</body>
</html>
