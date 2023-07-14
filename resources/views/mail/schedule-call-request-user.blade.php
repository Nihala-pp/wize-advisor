<!DOCTYPE html>
<html>
<head>
    <title>wizeAdvisor</title>
</head>
<body>
    <h1>Congratulations</h1>
    <p>Your call schedule request is in the review stage  </p>

<div class="card text-center mt-5">
  <div class="card-body">
    <p class="card-text">You are scheduled with {{ $details['mentor_name'] }}</p>
    <h5 class="card-title">{{ $details['duration'] }} Min Meeting</h5>
    <i class="fab fa-time"><b> {{ $details['start_time'] }} - {{ $details['finish_time'] }} {{ $details['date'] }} </b></i>
    <i class="fab fa-time"> {{ $details['UTC'] }} </i>
    <p class="card-text mt-2">You will recieve an email shortly with the meeting link. Once the mentor is approved your call request</p>
  </div> 
</div>
    <p>Thank you For being a valued-customer for the wiseAdvizor</p>
</body>
</html>