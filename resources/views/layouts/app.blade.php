<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Care - @yield('title','Dashboard')</title>
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" />
</head>
<body class="adminbody">

    <div id="main">

        @yield("content")

    </div>

    {{-- <script src="js/modernizr.min.js" type="text/javascript"></script> --}}
    {{-- <script src="js/fastclick.js" type="text/javascript"></script> --}}
    <script src="js/app.js" type="text/javascript"></script>
    
    <!-- BEGIN Java Script for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            console.log("jQuery is Activated!");
        });
    </script>
</body>
</html>