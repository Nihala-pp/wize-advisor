<!DOCTYPE html>
<html>

<head>
    <title>wiseAdvizor</title>
</head>

<body>
    <h1>Dear {{ $details['mentor_name'] }},</h1>

    <div class="card text-center mt-5">
        <div class="card-body">
            <p>I hope this message finds you well. I wanted to extend my gratitude to you for your commitment to
                mentoring on our platform. Your expertise and guidance are invaluable to our users, and we greatly
                appreciate your contributions.
            </p><br />
            <p>I'm writing to confirm the successful completion of your recent mentorship session with
                {{ $details['user_name'] }}. We trust that the session was both productive and insightful for the
                mentee's startup journey. </p><br />
            <p>Your dedication to providing guidance is highly commendable. We understand that sometimes, despite
                everyone's best efforts, issues may arise. If you believe that anything in the session did not go as
                expected or if you have any concerns, please do not hesitate to let us know. </p><br />
            <p>Your feedback is vital in maintaining the quality of mentorship on our platform, and we are here to
                support both mentors and mentees in every way we can. Feel free to reach out to us with any feedback or
                questions you may have. </p><br />
            <p>Once again, thank you for your time and expertise. We look forward to continuing to work with you to
                empower entrepreneurs on their path to success.</p><br />
        </div>
    </div>
    <p>Warm regards, <br />wiseAdvizor Team</p>
</body>

</html>