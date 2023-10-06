<!DOCTYPE html>
<html>

<head>
    <title>wiseAdvizor</title>
</head>

<body>
    <h1>Dear {{ $details->user->name }},</h1>
    <p>We hope this message finds you well and that you are looking forward to your upcoming mentorship session on {{ $details->date }} at {{ Illuminate\Support\Carbon::parse($details->start_time)->format('h:i A') }} - {{ Illuminate\Support\Carbon::parse($details->end_time)->format('h:i A') }} {{ $details->utc }} with {{ $details->mentor->name }} on wiseAdvizor.</p><br />
    <p>This is a friendly reminder about the upcoming mentorship session scheduled. We highly appreciate your commitment to this session, and we believe it will be a valuable experience for the mentee. You can join the session with below link or by login into your portal on wiseAdvizor.com </p><br />

    <div class="card text-center mt-5">
        <div class="card-body">
            <p>This is a gentle reminder about your scheduled session, where you'll have the opportunity to gain valuable insights and guidance for your startup journey. We're excited to see you connect with a mentor who can provide you with expert advice and support.</p><br />
            <p>To access your mentorship session, simply click on the following link at the scheduled time: {{ $details->call_link }} or login into your account. Please ensure that you are in a quiet and conducive environment for your session.</p><br />
            <p>If you have any questions or need any assistance before the session, please don't hesitate to reach out to our support team at info@wiseadvizor.com. We are here to assist you.</p><br />
            <p>Thank you for choosing 'wiseAdvizor' for your mentorship needs. We look forward to seeing you at your session and wish you a productive and insightful experience.
</p><br />
        </div>
    </div>
    <p>Best regards,  <br />wiseAdvizor Team</p>
</body>
</html>