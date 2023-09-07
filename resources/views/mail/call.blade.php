<!DOCTYPE html>
<html>

<head>
    <title>wizeAdvisor</title>
</head>

<body>
    <h1>Dear {{ $details['user_name'] }},</h1>
    <p>We are excited to inform you that your requested call with the {{ $details['mentor_name'] }} has been approved and scheduled! We
        appreciate your patience and are thrilled to facilitate this valuable connection between you and the mentor.
    </p><br />
    <p>Here are the details of your scheduled call: </p><br />

    <div class="card text-center mt-5">
        <div class="card-body">
            <p class="card-text">Meeting Details are mentioned below</p>
            <h5 class="card-title">Mentor : {{ $details['mentor_name'] }} </a></h5>
            <h5 class="card-title">Date : {{ $details['date'] }} </h5>
            <h5 class="card-title">Time : {{ $details['time'] }} </h5>
            <h5 class="card-title">Duration : 30 Min Meeting </h5>
            <h5 class="card-title">Joining Link : {{ $details['join_url'] }} </h5>

            <p>We are excited to inform you that your requested call with the {{ $details['mentor_name'] }} has been approved and
                scheduled! We appreciate your patience and are thrilled to facilitate this valuable connection between
                you and the mentor. </p><br />
            <p>We are excited to inform you that your requested call with the {{ $details['mentor_name'] }} has been approved and
                scheduled! We appreciate your patience and are thrilled to facilitate this valuable connection between
                you and the mentor. </p><br />
            <p>We are excited to inform you that your requested call with the {{ $details['mentor_name'] }} has been approved and
                scheduled! We appreciate your patience and are thrilled to facilitate this valuable connection between
                you and the mentor. </p><br />
        </div>
    </div>
    <p>Best regards,  <br />wiseAdvizor Team</p>
</body>
</html>