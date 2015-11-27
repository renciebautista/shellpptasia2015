  <html>
  <head>
    
    <title id="print_title">
      Print
    </title>
    
    <style> 
      table.messageheader td.label {
        background-color:#E1EBFB;
        
        font-weight:bold;
        width:1%;
      }
      
      table.messageheader td {
        border-bottom-color:#E6E6E6;
        
        border-bottom-style:solid;
        
        border-bottom-width:1px;
        
        font-size:80%;
        
        padding:0.5em;
        
        font-family: sans-serif;
      }

      table.event td {
        font-weight:bold;
      }
      table.event td:first-child {
         width: 250px;
      }

      table.otherdetails td {
        font-weight:bold;
      }
      table.otherdetails td:first-child {
        width: 250px;
      }
      
      a {
        text-decoration:none;
      }
      
      a:hover {
        text-decoration:underline;
      }
      
      @media print{
        
        div.yjmthloginarea {
          display:none;
        }
        
        #print_title {
          display:none;
        }
      }
      
    </style>
  </head>
  <body style="background-color:#FFF;" dir="ltr">

Your registration has been confirmed. Here are the details:
<BR>
Confirmation code: {{ $attendee->code }}
<BR>
Barcode:<br> 
<img src="<?php echo strtolower($pathToFile); ?>" alt="logo">
<BR>
To review this registration click here: <a href="www.shellpptasia.com">www.shellpptasia.com</a>
<BR>
<BR>
Dear {{ ucwords(strtolower($prefix->prefix))}} {{ ucwords(strtolower($attendee->first_name))}} {{ ucwords(strtolower($attendee->last_name))}},
<BR>
<BR>
Thank you for registering your attendance to <strong>Shell Powering Progress Together Asia 2016</strong> in <strong>Manila, Philippines</strong>.
<BR>
<BR>
Below are the details you have completed to date. We recommend that you read and ensure you have entered your details and requirements correctly. Should you need to revisit the site to edit or add missing information, you may revisit the site by clicking on the link above. 
<BR>
<BR>
Approximately 2 weeks prior to the event, you will receive Joining Instructions with further detailed information.
<BR>
<BR>
Please print and bring this confirmation email to present at the registration desk at the event. Badges will be issued upon registering and, for security reasons, must be worn for the duration of the event.
<BR>
<BR>
If you have any questions, please contact us at +632 501 9588 and look for Ms. Zoe Magallanes <a href="mailto:oe.magallanes@protegepr.com" target="_top">(zoe.magallanes@protegepr.com)</a>, mobile: +63939 9226683.
<BR>
<BR>
Kind regards,
<BR>
<BR>
Shell Powering Progress Together Asia 2016 Team 
<BR>
<BR>
<hr>
<table class="event">
  <tr>
    <td>Event:</td>
    <td>Powering Progress Together – Asia</td>
  </tr>
  <tr>
    <td>Date:</td>
    <td>3 March 2016</td>
  </tr>
  <tr>
    <td>Location:</td>
    <td>Manila Hotel, Manila, Philippines</td>
  </tr>
</table><br>
<strong>ATTENDEE INFORMATION</strong>
<hr>
<table class="otherdetails">
  <tr>
    <td>Name:</td>
    <td>{{ ucwords(strtolower($prefix->prefix))}} {{ ucwords(strtolower($attendee->first_name))}} {{ ucwords(strtolower($attendee->last_name))}}</td>
  </tr>
  <tr>
    <td>Preferred name printed on badge:</td>
    <td>{{ $attendee->prefered_name }}</td>
  </tr>
  <tr>
    <td>Email Address:</td>
    <td>{{ $attendee->email}}</td>
  </tr>
  <tr>
    <td>Onsite Mobile Phone:</td>
    <td>{{ $attendee->mobile_phone }}</td>
  </tr>
  <tr>
    <td>Assistant Name + number:</td>
    <td>{{ $attendee->assist_phone }}</td>
  </tr>
  <tr>
    <td>Alternative email address:</td>
    <td>{{ $attendee->alternative_email }}</td>
  </tr>
  <tr>
    <td>Company Name/ Department:</td>
    <td>{{ $attendee->company }}</td>
  </tr>
  <tr>
    <td>Address + city:</td>
    <td>{{ $attendee->address }}</td>
  </tr>
  <tr>
    <td>Job Title:</td>
    <td>{{ $attendee->job_title }}</td>
  </tr>
  <tr>
    <td>Country:</td>
    <td>{{ $country->name }}</td>
  </tr>
  <tr>
    <td>Special requirements:</td>
    <td>{{ $attendee->special }}</td>
  </tr>
</table>

<br>
<strong>HOTEL INFORMATION</strong>
<hr>
<table class="otherdetails">
  <tr>
    <td>Hotel room required:</td>
    <td>
      @if($attendee->withhotel == 1)
      YES
      @else
      NO
      @endif
    </td>
  </tr>
  @if($attendee->withhotel == 1)
  <tr>
    <td>Selected nights:</td>
    <td>
      @foreach($nights as $row)
      {{ date_format(date_create($row->available_night),"m/d/Y") }},
      @endforeach
    </td>
  </tr>
  <tr>
    <td>Hotel:</td>
    <td>{{ $hotel->name }}</td>
  </tr>
  <tr>
    <td>Room Type:</td>
    <td>{{ $room->room_type }}</td>
  </tr>
  <tr>
    <td>Room rate:</td>
    <td>{{ $room->room_rate }}</td>
  </tr>
  <tr>
    <td>Billing Instructions:</td>
    <td>{{ $attendee->billing }}</td>
  </tr>
 @endif
</table>
<br>
<strong>TRAVEL INFORMATION</strong>
<hr>
<table class="otherdetails">
  <tr>
    <td>Arrival transfer required:</td>
    <td>
      @if($attendee->with_arrival == 1)
      YES
      @else
      NO
      @endif
    </td>
  </tr>
   @if($attendee->with_arrival == 1)
  <tr>
    <td>Carrier:</td>
    <td>{{ $attendee->arrival_carrier }}</td>
  </tr>
  <tr>
    <td>Flight Number:</td>
    <td>{{ $attendee->arrival_no }}</td>
  </tr>
  <tr>
    <td>Arrival Date:</td>
    <td>{{ date_format(date_create($attendee->arrival_date),"m/d/Y") }}</td>
  </tr>
  <tr>
    <td>Arrival Time:</td>
    <td>{{ $attendee->arrival_time }}</td>
  </tr>
  <tr>
    <td>Arrival Port:</td>
    <td>{{ $attendee->arrival_port }}</td>
  </tr>
  @endif
</table><br>
<table class="otherdetails">
  <tr>
    <td>Departure transfer required:</td>
    <td>
      @if($attendee->with_departure == 1)
      YES
      @else
      NO
      @endif
    </td>
  </tr>
    @if($attendee->with_departure == 1)
  <tr>
    <td>Carrier:</td>
    <td>{{ $attendee->departure_carrier }}</td>
  </tr>
  <tr>
    <td>Flight Number:</td>
    <td>{{ $attendee->departure_no }}</td>
  </tr>
  <tr>
    <td>Arrival Date:</td>
    <td>{{ date_format(date_create($attendee->departure_date),"m/d/Y") }}</td>
  </tr>
  <tr>
    <td>Arrival Time:</td>
    <td>{{ $attendee->departure_time }}</td>
  </tr>
  <tr>
    <td>Arrival Port:</td>
    <td>{{ $attendee->departure_port }}</td>
  </tr>
    @endif
</table>
<br>
<strong>PARKING INFORMATION</strong>
<hr>
<table class="otherdetails">
  <tr>
    <td>Parking at venue required:</td>
    <td>
      @if($attendee->withparking == 1)
      YES
      @else
      NO
      @endif
    </td>
  </tr>
</table>
<br>
<strong>EMERGENCY CONTACT INFORMATION</strong>
<hr>
<table class="otherdetails">
  <tr>
    <td>Contact Name:</td>
    <td>{{ $attendee->e_name }}</td>
  </tr>
  <tr>
    <td>Contact Number:</td>
    <td>{{ $attendee->e_number }}</td>
  </tr>
  <tr>
    <td>Relationship to attendee:</td>
    <td>{{ $attendee->e_relationship }}</td>
  </tr>
</table>
</body>
</html>