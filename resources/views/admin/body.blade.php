<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <!-- Total Patients -->
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-user-1"></i></div>
                                <strong>Total Patients</strong>
                            </div>
                            <div class="number dashtext-1">{{ $user }}</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar"
                                 style="width: {{ $patientProgress }}%"
                                 aria-valuenow="{{ $patientProgress }}"
                                 aria-valuemin="0"
                                 aria-valuemax="100"
                                 class="progress-bar progress-bar-template dashbg-1">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Appointments -->
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-contract"></i></div>
                                <strong>Total Appointments</strong>
                            </div>
                            <div class="number dashtext-2">{{ $appointment }}</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar"
                                 style="width: {{ $appointmentProgress }}%"
                                 aria-valuenow="{{ $appointmentProgress }}"
                                 aria-valuemin="0"
                                 aria-valuemax="100"
                                 class="progress-bar progress-bar-template dashbg-2">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Invoices -->
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>New Invoices</strong>
                            </div>
                            <div class="number dashtext-3">140</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                        </div>
                    </div>
                </div>

                <!-- Reports -->
                <div class="col-md-3 col-sm-6">
                    <div class="statistic-block block">
                        <div class="progress-details d-flex align-items-end justify-content-between">
                            <div class="title">
                                <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Reports</strong>
                            </div>
                            <div class="number dashtext-4">{{ $report }}</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar"
                                 style="width: {{ $reportProgress }}%"
                                 aria-valuenow="{{ $reportProgress }}"
                                 aria-valuemin="0"
                                 aria-valuemax="100"
                                 class="progress-bar progress-bar-template dashbg-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Status and Monthly Appointments Trend -->
    <section class="no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <!-- Bar Chart for Appointment Status -->
                <div class="col-lg-6">
                    <h3>Appointment Status Count</h3>
                    <div style="width: 100%; height: 400px;">
                        <canvas id="appointmentStatusChart"></canvas>
                    </div>
                </div>

                <!-- Line Chart for Monthly Appointments Trend -->
                <div class="col-lg-6">
                    <h3>Monthly Appointments Trend</h3>
                    <div style="width: 100%; height: 400px;">
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Bar Chart for Appointment Status
        var ctx = document.getElementById('appointmentStatusChart').getContext('2d');
        var appointmentStatusChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['APPROVED', 'REJECTED', 'WAITING'], // The statuses
                datasets: [{
                    label: 'Appointment Count',
                    data: [{{ $approvedCount }}, {{ $rejectedCount }}, {{ $waitingCount }}], // Dynamic counts
                    backgroundColor: ['#28a745', '#dc3545', '#ffc107'], // Color for each status
                    borderColor: ['#28a745', '#dc3545', '#ffc107'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Appointments'
                        }
                    }
                },
                plugins: {
                    legend: {
                        position: 'top', // Place the legend on top
                    }
                }
            }
        });

        // Line Chart for Monthly Appointments Trend
        const appointmentsData = @json($appointmentsData);
        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        var lineCtx = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Appointments Per Month',
                    data: appointmentsData,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: true,
                    tension: 0.4 // Smooth curve
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Appointments'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Months'
                        }
                    }
                }
            }
        });
    </script>

    <style>
        /* Apply a white background to the chart */
        #appointmentStatusChart, #lineChart {
            background-color: white !important;
        }
    </style>
</div>
