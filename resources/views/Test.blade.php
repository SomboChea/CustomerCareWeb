<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestForm</title>
</head>
<body>
    <form action="test/name" method="POST">
        @csrf
        <label for="myname">Input name : </label><input  type="text" name="myname" id="idname">
        {{--  <input type="text" name="_token" value="{{ csrf_token() }}">  --}}
        <input type="submit" value="Submit">
    </form>
</body>
</html>