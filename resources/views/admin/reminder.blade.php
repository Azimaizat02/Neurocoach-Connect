<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('admin.css')
    <style type="text/css">
        .table_deg {
    border-collapse: collapse; /* Ensures borders are not doubled */
    border: 2px solid black;
    width: 80%;
    margin: auto;
    text-align: center;
    margin-top: 40px;
}

.th_deg {
    background-color: skyblue;
    padding: 15px;
    border: 2px solid black; /* Adds vertical borders for header cells */
}

tr {
    border: 2px solid black;
}

td {
    padding: 10px;
    border: 2px solid black; /* Adds vertical borders for table cells */
}
        .calendar-button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .calendar-button:hover {
            background-color: #45a049;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <table class="table_deg">
            <tr>
              <th class="th_deg">Appointment Type</th>
              <th class="th_deg">Patient Name</th>
              <th class="th_deg">Email</th>
              <th class="th_deg">Phone</th>
              <th class="th_deg">Start</th>
              <th class="th_deg">End</th>
              <th class="th_deg">Date</th>
              <th class="th_deg">Add To Calendar</th>
            </tr>

            @foreach($data as $data)
            <tr>
              <td>{{ $data->book->booking_type }}</td>
              <td>{{ $data->name }}</td>
              <td>{{ $data->email }}</td>
              <td>{{ $data->phone }}</td>
              <td>{{ $data->start_time }}</td>
              <td>{{ $data->end_time }}</td>
              <td>{{ $data->ondate }}</td>
              <td>
                <button class="calendar-button" onclick="addToCalendar('{{ $data->book->booking_type }}', '{{ $data->ondate }}', '{{ $data->start_time }}', '{{ $data->end_time }}')">Google Calendar</button>
              </td>
            </tr>
            @endforeach
          </table>

          <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment-with-locales.min.js" integrity="sha512-4F1cxYdMiAW98oomSLaygEwmCnIP38pb4Kx70yQYqRwLVCs3DbRumfBq82T08g/4LJ/smbFGFpmeFlQgoDccgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

          <script type="text/javascript">
            function addToCalendar(event_name, date, start_time, end_time) {
              // Format the date and time for Google Calendar
              var start_date = moment(date).format('YYYYMMDD');
              var end_date = moment(date).format('YYYYMMDD');
              var start_time_formatted = moment(start_time, 'HH:mm:ss').format('HHmmss');
              var end_time_formatted = moment(end_time, 'HH:mm:ss').format('HHmmss');

              var location = 'IIUM, Neurocoach Digital Lab, KICT, Jln Gombak, 50728, Wilayah Persekutuan Kuala Lumpur';  // You can set the location dynamically if needed

              // Open the Google Calendar event with the dynamic data
              window.open(
                "https://www.google.com/calendar/render?action=TEMPLATE&text=" + event_name +
                "&dates=" + start_date + "T" + start_time_formatted + "Z/" + end_date + "T" + end_time_formatted + "Z" +
                "&location=" + location + "&pli=1&uid=&sf=true&output=xml"
              );
            }
          </script>
        </div>
      </div>
    </div>

    @include('admin.footer')

  </body>
</html>
