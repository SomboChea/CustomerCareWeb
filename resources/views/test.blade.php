<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
  <style>
    aside{
      height: 1000px;
      width: 50%;
    }
  </style>
</head>
<body>
   
  <h3>Hello</h3>
  <button class="btn">Click</button>
  <aside style="float:left;background:blue">

  </aside>
  <aside  class="ref" style="float:right;background:red">

  </aside>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(".btn").on("click",function(){
      $.ajax({
        url:"https://www.youtube.com",
        datatype:"html",
        success:function(data){
          alert("ddd");
        }
      })
    })
  </script>
</body>
</html>