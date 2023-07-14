<!DOCTYPE html>
<html>
<head>
    <title>wizeAdvisor</title>
</head>
<body>
    <h1>Congratulations</h1>
    <p>You have new meeting request from wiseAdvizor</p>

<div class="card text-center mt-5">
  <div class="card-body">
    <p class="card-text">You are scheduled with {{ $details['user'] }}</p>
    <h5 class="card-title">{{ $details['duration'] }} Min Meeting</h5>
    <i class="fab fa-time"><b> {{ $details['start_time'] }} - {{ $details['finish_time'] }} {{ $details['date'] }} </b></i>
    <i class="fab fa-time"> {{ $details['UTC'] }} </i>
    <p class="card-text mt-2">Please approve the request to create the meeting link</p>
  </div> 
</div>
    <p>Thank you</p>
</body>
</html>