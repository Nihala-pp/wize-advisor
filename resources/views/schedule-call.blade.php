<!DOCTYPE html>
<html lang="en-US">
<head>
    <script src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <title>Connect with Professional Mentor{{ $mentor->name }}</title>
    <meta name="description"
        content="Get professional mentoring from highly accomplished mentor {{ $mentor->name }} at wiseAdvizor. Discover her expertise and see what her mentees have to say.">
    <meta name="keywords" content="professional mentor, my mentor, Find a mentor, Startup mentor">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Book 1:1 call with top startup mentors on wiseAdvizor">
    <meta property="og:description"
        content="wiseAdvizor connects you with experienced startup mentors who understand your startup. Get personalized mentorship to avoid costly mistakes, unlock sustainable growth, and achieve your business goals.">
    <meta property="og:image"
        content="https://wiseadvizor.com/wp-content/uploads/2023/07/Book-11-call-with-world-top-mentors-on-wiseadvizor.com.webp">
    <meta property="og:url" content="https://wiseadvizor.com">
    <meta property="og:site_name" content="wiseAdvizor" />
    <meta name="twitter:title" content="Schedule a 1:1 session with top-tier mentors for your startup success">
    <meta name="twitter:description"
        content="Connect directly with entrepreneurs and industry leaders on wiseAdvizor. Seek guidance, discuss challenges, and get expert advice to grow your startup.">
    <meta name="twitter:url" content="https://wiseadvizor.com">
    <meta name="twitter:image"
        url="https://wiseadvizor.com/wp-content/uploads/2023/07/Book-11-call-with-world-top-mentors-on-wiseadvizor.com.webp">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" async>
    <meta name="robots" content="max-image-preview:large">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style type="text/css">
    .current {
        background-color: #007bff !important;
        color: #fff !important;
    }
    </style>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js">
    </script>
    <script  src="https://wiseadvizor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.7.1" id="jquery-migrate-js">
    </script>
    <link rel="canonical" href="https://wiseadvizor.com/schedule-call/{{ $mentor->id }}/{{ $mentor->name }}">
    <meta name="generator"
        content="Elementor 3.14.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
</head>
<body
    class="page-template page-template-elementor_canvas page page-id-11 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-11 payment-page">
    @include('partials.header-common')

    <div class="row">
        <div class="col-sm-4 mb-3 mt-2">
            <div class="card h-100">
                <div class="card-body">
                    <i class="fa-thin fa-circle-arrow-left"></i>
                    <div class="rounded-circle mt-3">
                        <a href="{{ route('profile', [$mentor ? $mentor->id : '']) }}" title="Mentor"> <img
                                class="rounded-circle" decoding="async"
                                src="{{ asset('public/assets/img/').'/'.$mentor->metaData->profile_pic }}" alt="Mentor"
                                width="100" height="100">
                        </a>
                    </div>
                    <div class="card_carousel_title">
                        <h1> {{ $mentor ?  $mentor->name : '' }} </h1>
                    </div>
                    <h5 class="card-title">30 Min Meeting</h5>
                    <!-- <i class="fab fa-time"> 30 Min</i> -->
                    <form name="scheduleCallForm" method="POST" enctype="multipart/form-data" class="scheduleCallForm"
                        id="scheduleCallForm">
                        @csrf
                        <input type="hidden" name="call_id" value="{{ $call->id ?? '' }}">
                        <input type="hidden" name="duration" value="30">
                        <input class="day" type="hidden" name="day" value="">
                        <input class="month" type="hidden" name="month" value="">
                        <input class="year" type="hidden" name="year" value="">
                        <input type="hidden" class="mentor" name="mentor" value="{{ $mentor ? $mentor->id : '' }}">
                        <input type="hidden" class="price" name="price"
                            value="{{ $mentor->metaData ? $mentor->metaData->price_per_call : '0' }}">
                        <input type="hidden" class="time" name="time" value="">
                        <label class="form-label desc" style="color:black;">Description (Regarding the topic)</label>
                        <textarea required="required" id="desc" class="form-control" rows="5" cols="5"
                            name="desc">{{ $call->description ?? '' }}</textarea>
                        <!-- <div class="text-danger error" data-error="desc"></div> -->
                        <label class="form-label" style="color:black;">Upload Document (if any)</label>
                        <input type="file" name="doc" class="form-control" id="customFile">
                        <label class="form-label" style="color:black;">Discount Code</label>
                        @php
                         if(!empty($referral_code_used)) {
                            $field = "readonly='true'" ;
                         }
                         else {
                            $field = ' ';
                         }
                        @endphp
                        <input type="text" name="discount_code" class="form-control" id="discount_code"
                            placeholder="Use code 'MENTOR25' for 25% off" value="{{ $referral_code_used ?? '' }}" {{ $field }}>
                </div>
            </div>
        </div>
        <div class="col-sm-8 mb-2 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="errorMsgntainer"></div>
                            <div class="col-md-6 text-left mb-0 mt-3">
                                <h2 class="heading-section"><b>Select a Date & Time</b></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content w-100">
                                    <div class="calendar-container mb-3">
                                        <div class="timezone">
                                            <select name="timezone" class="form-control mt-1 timezone select2"
                                                id="timezone" style="width:50%" required>
                                                <option value=""><b>Time zone</b></option>
                                                @foreach($timezone as $zone => $time)
                                                @php
                                                $choosen_zone = $call->utc ?? auth()->user()->metaData->timezone;
                                                @endphp
                                                <option value="{{ $time }}"
                                                    {{ $time == $choosen_zone  ? 'selected' : '' }}>
                                                    {{ $time }}</option>
                                                @endforeach
                                            </select>
                                            <!-- <div class="text-danger error" data-error="timezone"></div> -->
                                        </div>
                                        <div class="calendar">
                                            <div class="year-header">
                                                <span class="left-button fa fa-chevron-left" id="prev"> </span>
                                                <span class="year" id="label"></span>
                                                <span class="right-button fa fa-chevron-right" id="next"> </span>
                                            </div>
                                            <table class="months-table w-100">
                                                <tbody>
                                                    <tr class="months-row">
                                                        <td class="month">Jan</td>
                                                        <td class="month">Feb</td>
                                                        <td class="month">Mar</td>
                                                        <td class="month">Apr</td>
                                                        <td class="month">May</td>
                                                        <td class="month">Jun</td>
                                                        <td class="month">Jul</td>
                                                        <td class="month">Aug</td>
                                                        <td class="month">Sep</td>
                                                        <td class="month">Oct</td>
                                                        <td class="month">Nov</td>
                                                        <td class="month">Dec</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="days-table w-100">
                                                <td class="day">Sun</td>
                                                <td class="day">Mon</td>
                                                <td class="day">Tue</td>
                                                <td class="day">Wed</td>
                                                <td class="day">Thu</td>
                                                <td class="day">Fri</td>
                                                <td class="day">Sat</td>
                                            </table>
                                            <div class="frame">
                                                <table class="dates-table w-100">
                                                    <tbody class="tbody">
                                                    </tbody>
                                                </table>
                                            </div>
                                            <button class="button" id="add-button" style="display:none;">Add
                                                Event</button>
                                        </div>
                                    </div>
                                    @if(!empty($nextAvailability))
                                    <div style="" class="avail">
                                        <h4 style="color:green"><b>Next Availability on
                                                {{ Carbon\Carbon::parse($nextAvailability->date)->format('jS F\\, Y') }}</b>
                                        </h4>
                                    </div>
                                    @endif
                                    <div class="events-container">
                                    </div>
                                    <div class="dialog" id="dialog">
                                        <h2 class="dialog-header"> Add New Event </h2>
                                        <form class="form" id="form">
                                            <div class="form-container" align="center">
                                                <label class="form-label" id="valueFromMyButton" for="name">Event
                                                    name</label>
                                                <input class="input" type="text" id="name" maxlength="36">
                                                <label class="form-label" id="valueFromMyButton" for="count">Number
                                                    of people to
                                                    invite</label>
                                                <input class="input" type="number" id="count" min="0" max="1000000"
                                                    maxlength="7">
                                                <input type="button" value="Cancel" class="button" id="cancel-button">
                                                <input type="button" value="OK" class="button button-white"
                                                    id="ok-button">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="calendar">
                                                <div class="year-header">
                                                    <span class="left-button fa fa-chevron-left" id="prev"> </span>
                                                    <span class="year" id="label"></span>
                                                    <span class="right-button fa fa-chevron-right" id="next"> </span>
                                                </div>
                                                <table class="months-table w-100">
                                                    <tbody>
                                                        <tr class="months-row">
                                                            <td class="month">Jan</td>
                                                            <td class="month">Feb</td>
                                                            <td class="month">Mar</td>
                                                            <td class="month">Apr</td>
                                                            <td class="month">May</td>
                                                            <td class="month">Jun</td>
                                                            <td class="month">Jul</td>
                                                            <td class="month">Aug</td>
                                                            <td class="month">Sep</td>
                                                            <td class="month">Oct</td>
                                                            <td class="month">Nov</td>
                                                            <td class="month">Dec</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="days-table w-100">
                                                    <td class="day">Sun</td>
                                                    <td class="day">Mon</td>
                                                    <td class="day">Tue</td>
                                                    <td class="day">Wed</td>
                                                    <td class="day">Thu</td>
                                                    <td class="day">Fri</td>
                                                    <td class="day">Sat</td>
                                                </table>
                                                <div class="frame">
                                                    <table class="dates-table w-100">
                                                        <tbody class="tbody">
                                                        </tbody>
                                                    </table>
                                                </div>
                                                 <div class="timezone">
                                                    <select name="timezone" class="form-control mt-1 timezone"
                                                        id="timezone" style="width:50%" required>
                                                        <option value=""><b>Time zone</b></option>
                                                        @foreach($timezone as $zone => $time)
                                                        <option value="{{ $time }}">{{ $zone }}</option>
                                                        @endforeach
                                                    </select>
                                                </div> -->
                                    <!-- </form> -->
                                    <!-- <select class="form-control" id="add-button">Add Event

</select> -->
                                    <!-- </div>
                                        </div>
                                        <div class="events-container">
                                        </div>
                                        <div class="dialog" id="dialog">
                                            <h2 class="dialog-header"> Add New Event </h2>
                                            <form class="form" id="form">
                                                <div class="form-container" align="center">
                                                    <label class="form-label" id="valueFromMyButton" for="name">Event
                                                        name</label>
                                                    <input class="input" type="text" id="name" maxlength="36">
                                                    <label class="form-label" id="valueFromMyButton" for="count">Number
                                                        of people to invite</label>
                                                    <input class="input" type="number" id="count" min="0" max="1000000"
                                                        maxlength="7">
                                                    <input type="button" value="Cancel" class="button"
                                                        id="cancel-button">
                                                    <input type="button" value="OK" class="button button-white"
                                                        id="ok-button">
                                                </div>
                                            </form>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark btn-lg mt-5 payNow" id="payNow"
                            style="align:center;background-color:#001E64;">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    @include('partials.footer-web')
    
    @include('partials.web-style')

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" id="elementor-post-2772-css"
    href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-2772.css?ver=1699364619" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" async>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript">
    (function($) {
        // Setup the calendar with the current date
        $(document).ready(function() {
            var date = new Date();
            var today = date.getDate();
            // Set click handlers for DOM elements
            $(".right-button").click({
                date: date
            }, next_year);
            $(".left-button").click({
                date: date
            }, prev_year);
            $(".month").click({
                date: date
            }, month_click);
            $("#add-button").click({
                date: date
            }, new_event);
            // Set current month as active
            $(".months-row").children().eq(date.getMonth()).addClass("active-month");
            init_calendar(date);
            var events = check_events(today, date.getMonth(), date.getFullYear());
            show_events(events, months[date.getMonth()], today);

            $.ajaxSetup({
                headers: {
                    'Accept': "application/json",
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // function paynow() {
            $("body").on('click', '#payNow', function(e) {
                e.preventDefault();
                // $("form[name='scheduleCallForm']").submit(function(e) {

                // var $form = document.getElementById('scheduleCallForm');

                // var formdata = new FormData(document.getElementById("scheduleCallForm"));
                var desc = $('#desc').val();
                var mentor = $('.mentor').val();
                var price = $('.price').val();
                // e.preventDefault();


                var formdata = $('.scheduleCallForm').serialize();
                // let myForm = document.getElementById('scheduleCallForm');
                // let formdata = new FormData(myForm);

                // var $form = $(this);
                // var formData = new FormData($form[0]); // note [0] here
                // url = $form.prop("action");

                $('.error').html('');

                return $.ajax("https://wiseadvizor.com/addScheduleRequest", {
                    method: 'POST',
                    data: {
                        "data": formdata
                    },
                    success: function(response) {
                        window.location.href = response;

                        // $.post("https://wiseadvizor.com/checkout", {price:price, mentor:mentor}, function(response){

                        // });
                        // $('.payment-page').html(response);
                    },
                    // error: function(error) {w
                    //     let errors = error.responseJSON.errors
                    //     for (let key in errors) {
                    //         let errorDiv = $(`.error[data-error="${key}"]`);
                    //         if (errorDiv.length) {
                    //             errorDiv.text(errors[key][0]);
                    //         }
                    //     }
                    // }
                    error: function(err) {
                        let error = err.responseJSON;
                        $.each(error.errors, function(index, value) {
                            $(document).find('[name=' + index + ']').after(
                                '<span class="text-danger error">' +
                                value + '</span>' + '<br>');

                            // $('.errorMsgntainer').append(
                            //     '<span class="text-danger">' + value +
                            //     '<span>' + '<br>');
                        });
                    }
                });
            });
            // }

            $("body").on('click', '.event-card', function(e) {
                e.preventDefault();

                var fired_button = $(this).val();
                $('body').find('.time').val(fired_button);

                $('.event-card').removeClass("current");
                $(this).addClass("current");
            });
        });

        // Initialize the calendar by appending the HTML dates
        function init_calendar(date) {
            console.log(date);
            $(".tbody").empty();
            $(".events-container").empty();
            var calendar_days = $(".tbody");
            var month = date.getMonth();
            var year = date.getFullYear();
            var day_count = days_in_month(month, year);
            var row = $("<tr class='table-row'></tr>");
            var today = date.getDate();
            // Set date to 1 to find the first day of the month
            date.setDate(1);
            var first_day = date.getDay();
            // 35+firstDay is the number of date elements to be added to the dates table
            // 35 is from (7 days in a week) * (up to 5 rows of dates in a month)
            for (var i = 0; i < 35 + first_day; i++) {
                // Since some of the elements will be blank, 
                // need to calculate actual date from index
                var day = i - first_day + 1;
                // If it is a sunday, make a new row
                if (i % 7 === 0) {
                    calendar_days.append(row);
                    row = $("<tr class='table-row'></tr>");
                }
                // if current index isn't a day in this month, make it blank
                if (i < first_day || day > day_count) {
                    var curr_date = $("<td class='table-date nil'>" + "</td>");
                    row.append(curr_date);
                } else {
                    var curr_date = $("<td class='table-date'>" + day + "</td>");
                    var events = check_events(day, month + 1, year);
                    if (today === day && $(".active-date").length === 0) {
                        curr_date.addClass("active-date");
                        show_events(events, months[month], day);
                    }
                    // If this date has any events, style it with .event-date
                    if (events.length !== 0) {
                        curr_date.addClass("event-date");
                    }
                    // Set onClick handler for clicking a date
                    curr_date.click({
                        events: events,
                        month: months[month],
                        day: day
                    }, date_click);
                    row.append(curr_date);
                }
            }
            // Append the last row and set the current year
            calendar_days.append(row);
            $(".year").text(year);
        }

        // Get the number of days in a given month/year
        function days_in_month(month, year) {
            var monthStart = new Date(year, month, 1);
            var monthEnd = new Date(year, month + 1, 1);
            return (monthEnd - monthStart) / (1000 * 60 * 60 * 24);
        }

        // Event handler for when a date is clicked
        function date_click(event) {
            $(".events-container").show(250);
            $("#dialog").hide(250);
            $(".active-date").removeClass("active-date");
            $(this).addClass("active-date");
            var d = new Date();
            var month_taken = event.data.month;
            var new_month = getMonthFromString(month_taken);
            // var month_name = getMonthName(new_month);
            var mentor = $('.mentor').val();
            var day = event.data.day;

            // console.log(event.data);
            $('body').find('.day').val(day);
            var year = new Date().getFullYear();
            $('body').find('.year').val(year);

            // var new_month = getMonthFromString(month);
            // var month_name = getMonthName(new_month);

            if (months[d.getMonth()] === month_taken) {
                month_name = month_taken;
            } else {
                month_name = getMonthName(new_month);
            }
            $('body').find('.month').val(month_name);

            var timezone = $("#timezone").val();

            return $.ajax("https://wiseadvizor.com/getTimeAvailability", {
                method: 'POST',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    "mentor": mentor,
                    "day": day,
                    "month": month_name,
                    "year": year,
                    "timezone": timezone,
                },
                success: function(response) {
                    var times = [];
                    for (var key in response) {
                        // console.log(response[key]);
                        times.push({
                            start_time: response[key],
                        });
                    }
                    show_events(times, event.data.month, event.data.day);
                },
            });
            // show_events(event.data.events, event.data.month, event.data.day);
        };

        // Event handler for when a month is clicked
        function month_click(event) {
            $(".events-container").show(250);
            $("#dialog").hide(250);
            var date = event.data.date;
            $(".active-month").removeClass("active-month");
            $(this).addClass("active-month");
            var new_month = $(".month").index(this);
            // date.setMonth(date.getMonth() + 1);
            date.setMonth(new_month);
            init_calendar(date);
        }

        // Event handler for when the year right-button is clicked
        function next_year(event) {
            $("#dialog").hide(250);
            var date = event.data.date;
            var new_year = date.getFullYear() + 1;
            $("year").html(new_year);
            date.setFullYear(new_year);
            init_calendar(date);
        }

        // Event handler for when the year left-button is clicked
        function prev_year(event) {
            $("#dialog").hide(250);
            var date = event.data.date;
            var new_year = date.getFullYear() - 1;
            $("year").html(new_year);
            date.setFullYear(new_year);
            init_calendar(date);
        }

        // Event handler for clicking the new event button
        function new_event(event) {
            // if a date isn't selected then do nothing
            if ($(".active-date").length === 0)
                return;
            // remove red error input on click
            $("input").click(function() {
                $(this).removeClass("error-input");
            })
            // empty inputs and hide events
            $("#dialog input[type=text]").val('');
            $("#dialog input[type=number]").val('');
            $(".events-container").hide(250);
            $("#dialog").show(250);
            // Event handler for cancel button
            $("#cancel-button").click(function() {
                $("#name").removeClass("error-input");
                $("#count").removeClass("error-input");
                $("#dialog").hide(250);
                $(".events-container").show(250);
            });
            // Event handler for ok button
            $("#ok-button").unbind().click({
                date: event.data.date
            }, function() {
                var date = event.data.date;
                var name = $("#name").val().trim();
                var count = parseInt($("#count").val().trim());
                var day = parseInt($(".active-date").html());
                // Basic form validation
                if (name.length === 0) {
                    $("#name").addClass("error-input");
                } else if (isNaN(count)) {
                    $("#count").addClass("error-input");
                } else {
                    $("#dialog").hide(250);
                    console.log("new event");
                    new_event_json(name, count, date, day);
                    date.setDate(day);
                    init_calendar(date);
                }
            });
        }

        // Adds a json event to event_data
        function new_event_json(name, count, date, day) {
            var event = {
                "occasion": name,
                "invited_count": count,
                "year": date.getFullYear(),
                "month": date.getMonth() + 1,
                "day": day
            };
            event_data["events"].push(event);
        }

        // Display all events of the selected date in card views
        function show_events(events, month, day) {
            // console.log(month);
            // Clear the dates container
            var d = new Date();
            var new_month = getMonthFromString(month);
            // var month_name = getMonthName(new_month);
            if (months[d.getMonth()] === month) {
                month_name = month;
            } else {
                month_name = getMonthName(new_month);
            }
            // console.log(month_name);
            $(".events-container").empty();
            $(".events-container").show(250);
            console.log(event_data["events"]);
            // If there are no events for this date, notify the user
            if (events.length === 0) {
                // console.log(getMonth(month));
                var event_card = $("<div class='event-card'></div>");
                var event_name = $("<div class='event-name'>There are no slots available on " +
                    month_name +
                    " " +
                    day +
                    ".</div>");
                $(event_card).css({
                    "border-left": "10px solid #FF1744"
                });
                $(event_card).append(event_name);
                $(".events-container").append(event_card);
            } else {
                // Go through and add each event as a card to the events container
                for (var i = 0; i < events.length; i++) {

                    var event_card = $(
                        "<button type='button' class='btn btn-outline-primary btn-lg btn-block event-card timeslot' value=" +
                        events[i]["start_time"] +
                        " style='background-color:white;border:solid;border-color:#007bff;width:75%' required></button>"
                    );
                    var event_name = $("<div class='event-name'>" + events[i]["start_time"] + "</div>");
                    // var event_count = $("<div class='event-count'>"+events[i]["invited_count"]+" Invited</div>");
                    if (events[i]["cancelled"] === true) {
                        $(event_card).css({
                            "border-left": "10px solid #FF1744"
                        });
                        // event_count = $("<div class='event-cancelled'>Cancelled</div>");
                    }
                    $(event_card).append(event_name);
                    $(".events-container").append(event_card);

                    // var event_card = $("<div class='event-card'></div>");
                    // var event_name = $("<div class='event-name'>" + events[i]["occasion"] + ":</div>");
                    // var event_count = $("<div class='event-count'>" + events[i]["invited_count"] +
                    //     " Invited</div>");
                    // if (events[i]["cancelled"] === true) {
                    //     $(event_card).css({
                    //         "border-left": "10px solid #FF1744"
                    //     });
                    //     event_count = $("<div class='event-cancelled'>Cancelled</div>");
                    // }
                    // $(event_card).append(event_name).append(event_count);
                    // $(".events-container").append(event_card);
                }
            }
        }

        // Checks if a specific date has any events
        function check_events(day, month, year) {
            var events = [];
            for (var i = 0; i < event_data["events"].length; i++) {
                var event = event_data["events"][i];
                if (event["day"] === day &&
                    event["month"] === month &&
                    event["year"] === year) {
                    events.push(event);
                }
            }
            return events;
        }

        // Given data for events in JSON format
        var event_data = {
            "events": [{
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10
                },
                {
                    "occasion": "Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10
                },
                {
                    "occasion": " Test Event",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 11
                }
            ]
        };

        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];

        function getMonthFromString(mon) {
            var d = Date.parse(mon + "1, 2023");
            if (!isNaN(d)) {
                return new Date(d).getMonth();
            }
            return -1;
        }

        function getMonthName(month) {
            const d = new Date();
            d.setMonth(month - 1);
            const monthName = d.toLocaleString("default", {
                month: "long"
            });
            return monthName;
        }
    })(jQuery);
    </script>
    <script>
    $('.select2').select2();
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js" async>
    </script>
</body>
<style>
.elementor-32 .elementor-element.elementor-element-60f0ea5:not(.elementor-motion-effects-element-type-background),
.elementor-32 .elementor-element.elementor-element-60f0ea5>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #000;
    background-image: linear-gradient(90deg, #000 0%, #000 100%);
}

h1 {
    font-size: 17px;
    font-family: "Helvetica", Sans-serif !important;
}

i.fas.fa-chevron-down {
    margin-top: -15px !important;
    padding-left: 10px !important;
    font-size: 9px !important;
    font-family: "Font Awesome 5 Free" !important;
    font-weight: 900 !important;
}

.elementor-32 .elementor-element.elementor-element-b84e421 .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-7b6d864 .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-aaf88ad .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-b23aa07 .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-269f902 .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-32f5614 .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-159e6db .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-5db6379 .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.avail h4 {
    margin-left: 20px;
    font-family: "Helvetica", Sans-serif;
    font-size: 16px !important;
    font-weight: 300;
}

.avail h4 b {
    padding-left: 20px;
}

/* .browseMentor {
        padding-right: 20px;
    } */

i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
}

.payNow {
    margin-top: -50px !important;
}

/* .timeslot:active{
    background-color:#007BFF;
} */

@media(max-width:480px) {

    h1 {
        font-size: 17px;
        font-family: "Helvetica", Sans-serif !important;
    }

    /* .rounded-circle {
        height: 40px !important;
        width: 40px !important;
        border-radius: 60% !important;
    } */

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-ancestor a.hfe-menu-item {
        color: white !important;
    }

    i.fas.fa-bell.fa-2xl {
        font-size: 29px !important;
    }
}

@media(max-width:767px) {

    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }

    h1 {
        font-size: 17px;
        font-family: "Helvetica", Sans-serif !important;
    }

    .elementor-32 .elementor-element.elementor-element-540d2d1>.elementor-widget-container {
        padding: 0px 20px 10px 100px;
    }

    /* .avail h4 b {
        padding-left: 25px;
    } */

    /* .avail h4 b {
        padding-left: 10px;
    } */

    .events-container {
        padding-left: 0px !important;
        padding-top: 10px !important;
    }

    .elementor-3007 .elementor-element.elementor-element-aea4c40>.elementor-widget-container {
        padding: 15px 0px 0px 0px;
    }

    /* .elementor-3007 .elementor-element.elementor-element-b97627d {
        width: 30%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669 {
        width: 50%;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417 {
        width: 20%;
    }

    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 .sub-menu a.hfe-sub-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 .elementor-menu-toggle:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 nav.hfe-dropdown li a.hfe-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 nav.hfe-dropdown li a.hfe-sub-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 nav.hfe-dropdown-expandible li a.hfe-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 nav.hfe-dropdown-expandible li a.hfe-sub-menu-item:hover {
        color: #001E64;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417>.elementor-element-populated {
        padding: 0px 0px 0px 35px;
        margin-top: 45px;
    }

    .elementor-3007 .elementor-element.elementor-element-f871cda>.elementor-element-populated {
        padding: 0px 0px 0px 10px;
        margin-top: -20px;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color: #fff;
        color: #001E64;
    } */

    .elementor-button.elementor-size-xs {
        font-size: 12px;
        padding: 10px 20px;
        border-radius: 7px;
        margin: 10px;
    }

    .elementor-button {
        display: inline-block;
        line-height: 1;
        background-color: #001E64;
        /* font-size: 15px; */
        /* padding: 12px 24px; */
        /* border-radius: 3px; */
        /* color: #fff; */
        fill: #fff;
        text-align: center;
        transition: all .3s;
    }

    /* .elementor-3007 .elementor-element.elementor-element-f871cda {
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
        margin-top: 45px;
    } */

    i.fas.fa-bell.fa-2xl {
        font-size: 29px !important;
    }

    .event-name {
        padding-right: 0;
        text-align: center !important;
        font-weight: bold;
        /* margin-left: -10px; */
    }

    .event-card {
        margin: 0;
        background: #e6e6e6;
        margin-left: 0px;
        /* margin-left: -19px; */
    }

    .events-container {
        overflow-y: scroll;
        height: 100%;
        width: 100%;
        float: right;
        margin: 0px auto;
        display: inline-block;
        padding: 0px;
        border-bottom-right-radius: 3px;
        /* border-top-right-radius: 3px; */
        padding-left: 5px !important;
        padding-right: 0px;
    }

    .event-card {
        /* padding: 0px 0px; */
        max-width: 100%;
        display: block;
        background: #fff;
        border: solid #007bff !important;
        margin-left: 0px;
        margin-right: 0px;
    }

    .avail h4 {
        margin-left: 30px;
        font-family: "Helvetica", Sans-serif;
        font-size: 16px !important;
        font-weight: 300;
    }

    button.btn.btn-outline-primary.btn-lg.btn-block.event-card.timeslot {
        margin-left: 40px !important;
    }

    .elementor-3007 .elementor-element.elementor-element-cf19fcc:not(.elementor-motion-effects-element-type-background),
    .elementor-3007 .elementor-element.elementor-element-cf19fcc>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: transparent !important;
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
}

@media (max-width: 320px) {}

@media (max-width: 280px) {
    /* .elementor-3007 .elementor-element.elementor-element-a2b9669>.elementor-element-populated {
        padding: 0px 0px 0px 20px;
        margin-top: 45px;
    } */
}

@media (max-width: 360px) {

    h1 {
        font-size: 17px;
        font-family: "Helvetica", Sans-serif !important;
    }

    .avail h4 {
        margin-left: 15px;
        /* font-family: "Helvetica", Sans-serif; */
        /* font-size: 16px !important; */
        /* font-weight: 300; */
    }
}

@media (max-width: 375px) {

    h1 {
        font-size: 17px;
        font-family: "Helvetica", Sans-serif !important;
    }

    .avail h4 {
        margin-left: 5px;
        font-family: "Helvetica", Sans-serif;
        font-size: 15px !important;
        font-weight: 300;
    }
}

@media (min-width: 540px) {}

@media screen (min-width: 768px) and (max-width: 1024px) {

    .event-card {
        padding: 0px 0px;
        max-width: 100%;
        display: block;
        background: #fff;
        border: solid #007bff !important;
        /* margin: 20px; */
        margin-left: 75px;
    }

    .event-count,
    .event-name,
    .event-cancelled {
        display: inline;
        padding: 0 0px;
        font-size: 1rem;
    }

    .avail h4 b {
        padding-left: 70px;
    }

    .avail h4 {
        margin-left: 50px !important;
        font-family: "Helvetica", Sans-serif;
        font-size: 13.5px !important;
        font-weight: 300;
    }

    .events-container {
        overflow-y: scroll;
        height: 100%;
        width: 50%;
        float: right;
        margin: 0px auto;
        display: inline-block;
        padding: 0px;
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px;
        padding-right: 20px;
    }


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

    h1 {
        font-size: 17px;
        font-family: "Helvetica", Sans-serif !important;
    }
}

@media screen (min-width: 768px) and (max-width: 820px) {
    h1 {
        font-size: 17px;
        font-family: "Helvetica", Sans-serif !important;
    }

    .avail h4 {
        font-family: "Helvetica", Sans-serif;
        font-size: 11px !important;
        font-weight: 300;
    }

    .avail h4 b {
        padding-left: 0px;
    }

    .events-container {
        overflow-y: scroll;
        height: 100%;
        width: 50%;
        float: right;
        margin: 0px auto;
        display: inline-block;
        padding: 0px;
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px;
        padding-right: 40px;
    }

    .event-card {
        padding: 0px 0px;
        max-width: 100%;
        display: block;
        background: #fff;
        border: solid #007bff !important;
        margin-left: 100px;
    }

    .event-name {
        text-align: left;
        font-weight: bold;
    }

    .heading-section {
        font-size: 20px;
        color: #000;
    }

    .events-container {
        overflow-y: scroll;
        height: 100%;
        width: 50%;
        float: right;
        margin: 0px auto;
        display: inline-block;
        padding: 0px;
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px;
        /* padding-right: 90px; */
    }
}

@media screen and (max-width: 1280) {}
</style>
</html>