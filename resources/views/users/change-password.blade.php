<!DOCTYPE html>
<html lang="en">
@include('partials.web-header-new')

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   
</head>

<body
    class="page-template page-template-elementor_canvas page page-id-13 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-13">
    @include('partials.header-common')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row mt-5">
                <div class="col-8 col-lg-8 m-auto">
                    <div class="card">
                        <!-- <div class="card-header"> -->
                        <h6 class="text-white text-capitalize ps-3">@if(!empty($data)) Change Password @else
                            Change Password @endif</h6>
                        <!-- </div> -->
                        <div class="card-body">
                            <div class="row">
                                <form method="POST" action="{{ route('user.password.save') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">Password </label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                            title="Must contain atleast one uppercase and lowercase letter, and at least 8 or more characters"
                                            required>
                                        <div id="message">
                                            <!-- <h6 style="padding-top:10px;">Password must contain the following:</h6> -->
                                            <p id="letter" class="invalid">Must include one <b>lowercase</b>
                                                character</p>
                                            <p id="capital" class="invalid">Must include one <b>capital
                                                    (uppercase)</b> character</p>
                                            <p id="length" class="invalid">Must be atleast <b>8 characters</b></p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="password-confirm" required>
                                            <span id ="password_validation" style="color:red"></span>
                                    </div>
                                    <!-- <div class="input-group input-group-dynamic mb-4">
                                        <label class="form-label">Password</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-group input-group-dynamic mb-4">
                                        <label class="form-label">Confirm Password</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password_confirmation" autocomplete="current-password">
                                    </div> -->
                                    <button type="submit" name="submitform" id="submitform"
                                        class="btn savePassword">{{ __('Save') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- @include('partials.web-footer') -->
    </main>
    <!--   Core JS Files   -->
    <!-- <script src="https://wiseadvizor.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.4" id="jquery-core-js">
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0" id="jquery-migrate-js"> -->
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
    $(function() {
        validate_pass();

        var password = document.getElementById("password");
        var confirm_password = document.getElementById("password-confirm");

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;

        function validatePassword() {
            if (confirm_password.value && password.value != confirm_password.value) {
                document.getElementById("password_validation").innerHTML = "Password Doesn't Match";  
                // confirm_password.setCustomValidity("Passwords Don't Match");
            }
        }
    });

    function validate_pass() {

        // var myInput = document.getElementById("password");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        password.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        password.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        password.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (password.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (password.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate length
            if (password.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    }
    </script>
</body>
<style>
.card {
    border-radius: 15px;
    padding-top: 30px;
    background: linear-gradient(to right, #434343, #000000);
}

.btn-primary {
    --mdb-btn-box-shadow: #000 !important;
    color: #fff;
    background-color: #000 !important;
    border-color: #434343 !important;
    box-shadow: #000 !important;
}

.savePassword {
    box-shadow: #000 !important;
}

.btn-primary:hover {
    color: #fff;
    background-color: #000 !important;
    border-color: #434343 !important;
    box-shadow: #000 !important;
}

body {
    background-color: #000;
}

i.fas.fa-chevron-down {
    font-size: 9px !important;
    font-family: "Font Awesome 5 Free" !important;
    font-weight: 900 !important;
    padding-left: 10px;
}

.form-label {
    margin-bottom: .5rem;
    color: #fff;
}

.form-control {
    color: #fff;
    background-color: #000;
}

.form-control:focus {
    color: #fff;
    background-color: #000;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25);
}

h6 {
    font-size: 20px;
}

button#submitform.btn.btn-primary.savePassword {
    text-transform: capitalize !important;
}

@media (max-width: 767px) {
    button#submitform.btn.btn-primary.savePassword {
        margin-left: 50px;
        text-transform: capitalize !important;
    }

    h6 {
        margin-left: 15px !important;
    }
}

@media(max-width:480px) {
    .col-4 {
        width: 100% !important;
    }

    .elementor-3007 .elementor-element.elementor-element-f871cda {
        width: 30%;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417 {
        width: 50%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669 {
        width: 20%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669>.elementor-element-populated {
        padding: 0px 0px 0px 30px;
        margin-top: 60px;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color: #fff;
        color: #001E64 !important;
    }

    #menu-item-5136 {
        font-size: 8px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
    }

    i.fas.fa-bell.fa-2xl {
        color: black !important;
        font-size: 27px !important;
    }

    .elementor-button {
        display: inline-block;
        line-height: 1;
        background-color: #001E64;
        font-size: 15px;
        padding: 12px 24px;
        border-radius: 7px !important;
        color: #fff;
        fill: #fff;
        text-align: center;
        transition: all .3s;
        margin: 15px;
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
    /* header*/

    .elementor-3007 .elementor-element.elementor-element-4bc8cfa>.elementor-widget-container {
        padding: 25px 10px 0px 0px;
        margin-left: -60px;
    }

    .wp-image-624 {
        width: 100%;
        height: 15.02%;
        max-width: 150px !important;
    }

    /* .elementor-5225 .elementor-element.elementor-element-13dfc598 .elementor-heading-title {
        font-size: 40px;
        padding-left: 20px;
    } */

    dl,
    ol,
    ul {
        margin-top: 0;
        margin-bottom: 1rem;
        margin-left: 20px;
    }

    .menu-item .menu-item-type-post_type .menu-item-object-page .menu-item-has-children .parent .hfe-has-submenu .hfe-creative-menu .parent-has-child {
        background-color: #fff !important;
    }

    .elementor-3007 .elementor-element.elementor-element-78270f3 .elementor-button {
        font-family: "Helvetica", Sans-serif;
        font-size: 10px;
        margin-right: 15px;
        font-weight: 400;
        background-color: transparent;
        background-image: linear-gradient(90deg, var(--e-global-color-1e1892c) 0%, var(--e-global-color-1e1892c) 100%);
        border-style: none;
        border-radius: 7px 7px 7px 7px;
    }

    .elementor-3007 .elementor-element.elementor-element-4bc8cfa .elementor-button {
        font-family: "Helvetica", Sans-serif;
        font-size: 10px;
        font-weight: 400;
        background-color: transparent;
        background-image: linear-gradient(90deg, var(--e-global-color-1e1892c) 0%, var(--e-global-color-1e1892c) 100%);
        border-style: none;
        border-radius: 7px 7px 7px 7px;
    }

    .elementor-3007 .elementor-element.elementor-element-cf19fcc:not(.elementor-motion-effects-element-type-background),
    .elementor-3007 .elementor-element.elementor-element-cf19fcc>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FFFFFF;
    }
}
</style>
<style>
/* Style all input fields */
/* input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
} */

/* Style the submit button */
/* input[type=submit] {
    background-color: #04AA6D;
    color: white;
} */

/* Style the container for inputs */
/* .container {
    background-color: #f1f1f1;
    padding: 20px;
} */

/* The message box is shown when the user clicks on the password field */
#message {
    display: none;
    /* background: #f1f1f1; */
    color: #000;
    position: relative;
    /* padding: 5px; */
    /* margin-top: 10px; */
}

#message p {
    /* padding: 5px 10px; */
    font-size: 10px;
    margin-bottom: -5px;
    padding-left: 5px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -5px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -5px;
    content: "✖";
}
</style>

</html>