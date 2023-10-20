<!DOCTYPE html>
<html>

<head>
    <title>wiseAdvizor</title>
</head>

<body>
    <h1>Dear,</h1>
    <p>user has been update the call</p>

    <div class="card text-center mt-5">
        <div class="card-body">
            <p class="card-text">I hope this email finds you well. I am reaching out to inform you that
                {{ $details['user_name'] }} has
                update the call with {{ $details['mentor_name'] }} on {{ $details['call']->date }}
                {{ $details['call']->start_time }} -
                {{ $details['call']->end_time }} <br />Here are the details of
                the updated call:
            </p>
            <h5 class="card-title"><b>Date: {{ $details['date'] }} </b></h5>
            <i class="fab fa-time"><b>Time: {{ $details['start_time'] }} - {{ $details['finish_time'] }}
                    {{ $details['UTC'] }} </b></i>
            <i class="fab fa-time"><b>Duration: {{ $details['duration'] }} Min Meeting </b></i>
            <i class="fab fa-time"><b>User's Description: {{ $details['desc'] }}</b> </i>           
        </div>
    </div>
    <p>Best Regards, <br />wiseAdvizor Team</p>
</body>
</html>