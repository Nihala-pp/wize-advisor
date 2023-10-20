<!DOCTYPE html>
<html>

<head>
    <title>wiseAdvizor</title>
</head>

<body>
    <h1>Dear {{ $details['user_name']  }},</h1>
    <p>We hope this message finds you well. Regrettably, we need to inform you that your requested call with
        {{ $details['mentor_name'] }} on {{ $details['call']->date }} {{ $details['call']->start_time }} -
        {{ $details['call']->end_time }} has been cancelled.
    </p><br />

    <div class="card text-center mt-5">
        <div class="card-body">
            <p>We understand that scheduling conflicts or unforeseen circumstances can arise, and we want to ensure you
                still
                have the opportunity to connect with a mentor who can provide valuable insights.
            </p><br />

            <p>Not to worry—rescheduling is simple! Please login into your account and choose an alternative time that
                suits you best. We appreciate your understanding and flexibility.
            </p><br />
            <p>We value your commitment to seeking guidance, and we are dedicated to making sure you have a meaningful
                mentorship experience. Thank you for your understanding.</p><br />
        </div>
    </div>
    <p>Best regards, <br />wiseAdvizor Team</p>
</body>
</html>