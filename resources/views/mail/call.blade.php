<!DOCTYPE html>
<html>

<head>
    <title>wizeAdvisor</title>
</head>

<body>
    <h1>Congratulations</h1>
    <p>Your Call with the mentor has been approved </p>

    <div class="card text-center mt-5">
        <div class="card-body">
            <p class="card-text">Meeting Details are mentioned below</p>
            <h5 class="card-title">Join Link : <a href="{{ $details['join_url'] }}">{{ $details['join_url'] }} </a></h5>
            <h5 class="card-title">Password : {{ $details['password'] }} </h5>

            <i class="fab fa-time"><b>You can Join the meeting from your dashboard also for the better convenience.
                </b></i>
        </div>
    </div>
    <p>Thank You for being an valued customer with wiseAdvizor</p>
</body>

</html>