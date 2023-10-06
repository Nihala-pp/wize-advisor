<!DOCTYPE html>
<html>

<head>
    <title>wiseAdvizor</title>
</head>

<body>
    <h1>Dear {{ $details->user->name }},</h1>
    <p>I hope this message finds you well. We want to extend our gratitude for your dedication to mentoring on our platform. Your expertise and guidance play a crucial role in the growth and success of our community of entrepreneurs.</p><br />
    <p>This is a friendly reminder about the upcoming mentorship session scheduled. We highly appreciate your commitment to this session, and we believe it will be a valuable experience for the mentee. You can join the session with below link or by login into your portal on wiseAdvizor.com </p><br />

    <div class="card text-center mt-5">
        <div class="card-body">
            <p class="card-text">Here are the details for the scheduled call:</p>
            <h5 class="card-title">User : {{ $details->callSchedule->user->name }} </a></h5>
            <h5 class="card-title">Date : {{ $details->date }} </h5>
            <h5 class="card-title">Time : {{ Illuminate\Support\Carbon::parse($details->start_time)->format('h:i A') }} - {{ Illuminate\Support\Carbon::parse($details->end_time)->format('h:i A') }} </h5>
            <h5 class="card-title">Duration : 30 Min Meeting </h5>
            <h5 class="card-title">UTC : {{ $details->time_zone }} </h5>
            <h5 class="card-title">Joining Link : {{ $details->callSchedule->call_link }} </h5><br />

            <p>As a mentor, your insights and support are immensely valuable. We encourage you to prepare for the session and ensure that you are in a conducive environment for a productive discussion. Please be punctual and join the call a few minutes before the scheduled time. </p><br />
            <p>If you have any questions or need assistance with the session, please don't hesitate to reach out to our support team. We are here to ensure that your mentorship experience is smooth and rewarding.</p><br />
            <p>Once again, thank you for your time and expertise. Your dedication to mentoring is making a positive impact on budding entrepreneurs, and we look forward to a successful session.</p><br />
        </div>
    </div>
    <p>Best regards,  <br />wiseAdvizor Team</p>
</body>
</html>