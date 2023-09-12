<!DOCTYPE html>
<html>

<head>
    <title>wiseAdvizor</title>
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
            <h5 class="card-title">Timezone : {{ $details['utc'] }} </h5>
            <h5 class="card-title">Duration : 30 Min Meeting </h5>
            <h5 class="card-title">Joining Link : {{ $details['join_url'] }} </h5><br />

            <p>Please mark your calendar accordingly and ensure that you are available at the scheduled time. The mentor is eagerly looking forward to providing you with guidance and support based on your specific needs and objectives. </p><br />
            <p>This call presents a wonderful opportunity for you to gain valuable insights, ask questions, and receive guidance from an experienced mentor in your field of interest. Be prepared to share information about your startup, challenges, and goals so that the mentor can provide tailored advice to help you on your entrepreneurial journey. </p><br />
            <p>We recommend preparing any specific questions or topics you would like to discuss during the call to make the most of your time with the mentor. </p><br />
            <p>We wish you a productive and enriching call with the mentor. Remember, their expertise and guidance can significantly contribute to your startup's success.</p><br />
            <p>Also, please follow all guidelines. Not following these will cancel your call and no refund can be processed.</p><br />
            <p>If you have any further questions or need assistance, please do not hesitate to reach out to us. We are here to support you every step of the way.</p><br />
        </div>
    </div>
    <p>Best regards,  <br />wiseAdvizor Team</p>
</body>
</html>