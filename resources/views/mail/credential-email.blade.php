<!DOCTYPE html>
<html>

<head>
    <title>wiseAdvizor</title>
</head>

<body>
    <h1>Dear {{ $data['name'] }},</h1>
    <p>Your Call with the mentor has been approved </p>

    <div class="card text-center mt-5">
        <div class="card-body">
            <p class="card-text">We are thrilled to extend a warm welcome as you join our mentorship community at
                wiseAdvizor! Your expertise and experience bring a new level of value to our platform, and we are
                excited to have you on board.</p><br />
            <p class="card-text">Your contributions are set to enlighten and guide our users in meaningful ways. Your
                journey and insights will undoubtedly make a significant impact, helping others navigate their paths to
                success.</p><br />
            <p class="card-text">To get started, we've provided the necessary information for you to access our portal:
            </p><br />
            <h5 class="card-title"><b>Portal URL : <a href="https://wiseadvizor.com/login">
                    </a></b>
            </h5>
            <h5 class="card-title"><b>Username : {{ $data['email'] }}</b></h5>
            <h5 class="card-title"><b>Password : {{ $data['password'] }} </b></h5><br />
            <i class="fab fa-time">Please log in and <b>set your availability</b> for mentoring sessions.
                Additionally,
                please let us know if you feel any changes are required in your profile.
            </i><br />
            <p class="card-text">Please ensure that you reset your password for added security. You can do this by
                clicking on the <a href="https://wiseadvizor.com/forget-password">"Forgot Your Password" </a> link on
                the login page
                and following the instructions provided.
            </p><br />
            <p class="card-text">Once again, welcome to the wiseAdvizor mentorship community! We look forward to the
                valuable insights and guidance you'll be bringing to our users.</p><br />
        </div>
    </div>
    <p> Best regards, <br />
        wiseAdvizor Team <br />
        info@wiseadvizor.com</p>
</body>

</html>