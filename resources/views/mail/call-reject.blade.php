<!DOCTYPE html>
<html>

<head>
    <title>wiseAdvizor</title>
</head>

<body>
    <h1>Dear {{ $details['mentor_name']  }},</h1>
    <p>I hope this message finds you well. I wanted to inform you that the recent call request from
        {{ $details['user_name'] }} has
        rejected. We understand that unforeseen circumstances may have influenced this decision.
    </p><br />

    <div class="card text-center mt-5">
        <div class="card-body">
            <p>Your willingness to participate in our mentorship program is greatly appreciated. If you have any
                questions or concerns regarding this matter, please feel free to reach out. We value your commitment to
                mentorship and look forward to the possibility of facilitating meaningful connections in the future.
            </p><br />
            <p>Thank you for your understanding and ongoing support.
            </p><br />
        </div>
    </div>
    <p>Best regards, <br />wiseAdvizor Team</p>
</body>
</html>