<!DOCTYPE html>
<html>

<head>
    <title>wiseAdvizor</title>
</head>

<body>
    <h1>Dear {{ $details['mentor_name'] }},</h1>
    <p>You have new meeting request from wiseAdvizor</p>

    <div class="card text-center mt-5">
        <div class="card-body">
            <p class="card-text">I hope this email finds you well. I am reaching out to inform you that {{ $details['user_name'] }} has
                requested a call with you. As one of our esteemed mentors, your expertise and guidance are highly valued
                by our users, and we appreciate your commitment to helping others succeed.<br />Here are the details of
                the call request:
            </p>
            <h5 class="card-title"><b>Date: {{ $details['date'] }} </b></h5>
            <i class="fab fa-time"><b>Time: {{ $details['mentor_start_time'] }} - {{ $details['mentor_finish_time'] }} {{ $details['mentor_timezone'] }} </b></i>
            <i class="fab fa-time"><b>Duration: {{ $details['duration'] }} Min Meeting </b></i>
            <i class="fab fa-time"><b>User's Description: {{ $details['desc'] }}</b> </i>
            <p class="card-text mt-2"><b>Please approve the call as it is important for us to respect your time as well as the user’s time.</b>
            </p><br />
            <p class="card-text mt-2">As a mentor on wiseAdvizor, you have agreed to provide support and guidance to
                users who seek your expertise. Your mentorship is vital in empowering individuals to achieve their goals
                and overcome challenges they face in their professional journey. We greatly appreciate your continued
                dedication and support in this regard.</p><br />
            <p class="card-text mt-2">Thank you for your attention to this matter, and we look forward to your response.
                Should you have any questions or require further information, please do not hesitate to contact us.
            </p><br />
        </div>
    </div>
    <p>Best Regards, <br />wiseAdvizor Team</p>
</body>

</html>