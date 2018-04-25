<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>{{ env('APP_NAME') }} | @yield('title')</title> 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}"> 
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
</head> 
<body> 
     
    <div class="container"> 
        <div class="row"> 
            @yield('content') 
        </div> 
    </div> 
    
    
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}} 
    {{-- <script> 
        $(document).ready(function(){ 
            $('.toggle').on('click', function() { 
            $('.container').stop().addClass('active'); 
            }); 
 
            $('.close').on('click', function() { 
            $('.container').stop().removeClass('active'); 
            }); 
        }); 
    </script> --}} 
</body> 
</html>