<!DOCTYPE html>
<html>

<head>
    <title>wiseAdvizor</title>
</head>

<body>
    <h1>Dear {{ $details['name'] }},</h1>
    <p>We’re excited to inform you that your referral code has been successfully used! Thank you for helping us spread
        the word about WiseAdvizor. Your support is greatly appreciated.
    </p><br />
    <p>As a token of our gratitude, we’re pleased to offer you a 35% discount on your next 1:1 call with one of our top
        founders and industry leaders. </p><br />

    <p><b>Your Discount Code: {{ $details['discount_code'] }}</b></p><br />


    <p>To redeem your discount, simply enter the code at checkout on <a
            href="https://wiseadvizor.com/">wiseadvizor.com</a>. </p><br />
    <p>Thank you once again for your support and for sharing WiseAdvizor with others. We look forward to helping you
        achieve your goals with personalized guidance from our expert mentors!</p><br />
    <p>Best regards, <br />wiseAdvizor Team</p>
</body>

</html>