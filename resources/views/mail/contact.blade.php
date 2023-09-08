<!DOCTYPE html>
<html>
<head>
    <title>wiseAdvizor</title>
</head>
<body>
    <h1>Congratulations</h1>
    <p>You have new enquiry from your website  </p>

<div class="card text-center mt-5">
  <div class="card-body">
    <p class="card-text">Contact Details are mentioned below</p>
    <h5 class="card-title">Firstname : {{ $details['firstname'] }} </h5>
    <h5 class="card-title">Lastname : {{ $details['lastname'] }} </h5>
    <h5 class="card-title">Mobile Number : {{ $details['mob'] }} </h5>
    <h5 class="card-title">Email : {{ $details['email'] }} </h5>
    <i class="fab fa-time"><b>Message : {{ $details['message'] }} </b></i>
  </div> 
</div>
    <p>{{ $details['firstname'] }} {{ $details['lastname'] }} is awaiting your response</p>
</body>
</html>