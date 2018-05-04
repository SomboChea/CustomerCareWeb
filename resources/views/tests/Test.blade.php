<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestForm</title>
    
</head>
<body>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}" ></script>
    <script>
        $.ajax({
            url:'{{asset("api/v1/db/viewLastCall")}}',
            success:function(data){
                console.log(data);
            }
        })
        function test(){

            

        };
        test();
    </script>


</body>
</html>