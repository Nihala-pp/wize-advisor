<!DOCTYPE html>
<html>

<head>
    <title>wiseAdvizor</title>
</head>

<body>
    <h1>Dear {{ $details->user->name }},</h1>
    <p>We hope this email finds you well. We are delighted to inform you that your approval for the call request with {{ $details->callSchedule->user->name }} has been received. Thank you for generously offering your time and expertise to guide and mentor them.
    </p><br />
    <p>Here are the details for the scheduled call:</p><br />

    <div class="card text-center mt-5">
        <div class="card-body">
            <p class="card-text">Meeting Details are mentioned below</p>
            <h5 class="card-title">User : {{ $details->callSchedule->user->name }} </a></h5>
            <h5 class="card-title">Date : {{ $details->date }} </h5>
            <h5 class="card-title">Time : {{  Illuminate\Support\Carbon::parse($details->start_time)->format('h:i A') }} - {{ Illuminate\Support\Carbon::parse($details->end_time)->format('h:i A') }}</h5>
            <h5 class="card-title">Timezone : {{ $details->time_zone }} </h5>
            <h5 class="card-title">Duration : 30 Min Meeting </h5>
            <h5 class="card-title">Joining Link : <a href="{{ $details->callSchedule->call_link }}"> {{ $details->callSchedule->call_link }} </a> </h5><br />

            <p>We greatly appreciate your willingness to share your knowledge and support. Your guidance will be invaluable to them as they navigate their entrepreneurial journey and seek insights in your area of expertise. </p><br />
            <p>As a mentor on our platform, you play a crucial role in empowering entrepreneurs and fostering their growth. Your expertise and guidance will have a significant impact on their development and success. </p><br />
            <p>We kindly request that you adhere to the scheduled call time to ensure a smooth experience for both you and the mentee.</p><br />
            <p>We deeply appreciate your dedication to mentorship and your commitment to making a difference in the lives of entrepreneurs. Thank you for being an integral part of our platform.</p><br />
            <p>Should you have any questions or require further information, please don't hesitate to reach out to us. We are here to provide any assistance or support you may need throughout the mentoring process.</p><br />
            <p><b>Please follow all guidelines on the call. </b></p><br />
            <p>Once again, thank you for your time and expertise. We greatly appreciate your contribution to the growth and development of entrepreneurs through your mentorship.</p><br />
        </div>
    </div>
    <p>Best regards,  <br />wiseAdvizor Team</p>
</body>
</html>