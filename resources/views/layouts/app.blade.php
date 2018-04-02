<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Care - @yield('title','Dashboard')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ mix('css/all.css') }}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" />
</head>
<body class="adminbody">

    <div id="main">

        @yield("content")

    </div>

    {{-- <script src="js/modernizr.min.js" type="text/javascript"></script> --}}
    {{-- <script src="js/fastclick.js" type="text/javascript"></script> --}}
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    
    <!-- BEGIN Java Script for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            console.log("jQuery is Activated!");
        });
    </script>
    <script>
            var ctx1 = document.getElementById("lineChart").getContext('2d');
            var lineChart = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: 'Dataset 1',
                        backgroundColor: '#3EB9DC',
                        data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9]
                    }, {
                        label: 'Dataset 2',
                        backgroundColor: '#EBEFF3',
                        data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
                    }]
    
                },
                options: {
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }
                }
            });
    
    
            var ctx2 = document.getElementById("pieChart").getContext('2d');
            var pieChart = new Chart(ctx2, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        label: 'Dataset 1'
                    }],
                    labels: [
                        "Red",
                        "Orange",
                        "Yellow",
                        "Green",
                        "Blue"
                    ]
                },
                options: {
                    responsive: true
                }
    
            });
    
    
            var ctx3 = document.getElementById("doughnutChart").getContext('2d');
            var doughnutChart = new Chart(ctx3, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        label: 'Dataset 1'
                    }],
                    labels: [
                        "Red",
                        "Orange",
                        "Yellow",
                        "Green",
                        "Blue"
                    ]
                },
                options: {
                    responsive: true
                }
    
            });
        </script>
        <!-- END Java Script for this page -->
    
    
</body>
</html>