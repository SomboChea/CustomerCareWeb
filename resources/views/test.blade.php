<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{asser}}
    <style>
            html, body {
                margin: 0;
                padding: 0;
                font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
                font-size: 14px;
              }
              
              #calendar {
                max-width: 900px;
                margin: 40px auto;
              }
    </style>
</head>
<body>
        <div id='calendar'></div>
        <script>    
                $(function() {

                    $('#calendar').fullCalendar({
                  
                      header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,listYear'
                      },
                  
                      displayEventTime: false, // don't show the time column in list view
                  
                      // THIS KEY WON'T WORK IN PRODUCTION!!!
                      // To make your own Google API key, follow the directions here:
                      // http://fullcalendar.io/docs/google_calendar/
                      googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',
                  
                      // US Holidays
                      events: 'en.usa#holiday@group.v.calendar.google.com',
                  
                      eventClick: function(event) {
                        // opens events in a popup window
                        window.open(event.url, '_blank', 'width=700,height=600');
                        return false;
                      }
                  
                    });
                  
                  });
        </script>
</body>
</html>