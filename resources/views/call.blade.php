<!-- <!doctype html>
<html lang="en">

<head>
    <title>Calendar 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Calendar #04</h2>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="content w-100">
                        <div class="calendar-container">
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
                                <button class="button" id="add-button">Add Event</button>
                            </div>
                        </div>
                        <div class="events-container">
                        </div>
                        <div class="dialog" id="dialog">
                            <h2 class="dialog-header"> Add New Event </h2>
                            <form class="form" id="form">
                                <div class="form-container" align="center">
                                    <label class="form-label" id="valueFromMyButton" for="name">Event name</label>
                                    <input class="input" type="text" id="name" maxlength="36">
                                    <label class="form-label" id="valueFromMyButton" for="count">Number of people to
                                        invite</label>
                                    <input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
                                    <input type="button" value="Cancel" class="button" id="cancel-button">
                                    <input type="button" value="OK" class="button button-white" id="ok-button">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div>
    </section> -->
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/popper.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
    (function($) {

        "use strict";

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
            var events = check_events(today, date.getMonth() + 1, date.getFullYear());
            show_events(events, months[date.getMonth()], today);
        });

        // Initialize the calendar by appending the HTML dates
        function init_calendar(date) {
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
            show_events(event.data.events, event.data.month, event.data.day);
        };

        // Event handler for when a month is clicked
        function month_click(event) {
            $(".events-container").show(250);
            $("#dialog").hide(250);
            var date = event.data.date;
            $(".active-month").removeClass("active-month");
            $(this).addClass("active-month");
            var new_month = $(".month").index(this);
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
            // Clear the dates container
            $(".events-container").empty();
            $(".events-container").show(250);
            console.log(event_data["events"]);
            // If there are no events for this date, notify the user
            if (events.length === 0) {
                var event_card = $("<div class='event-card'></div>");
                var event_name = $("<div class='event-name'>There are no events planned for " + month + " " + day +
                    ".</div>");
                $(event_card).css({
                    "border-left": "10px solid #FF1744"
                });
                $(event_card).append(event_name);
                $(".events-container").append(event_card);
            } else {
                // Go through and add each event as a card to the events container
                for (var i = 0; i < events.length; i++) {
                    var event_card = $("<div class='event-card'></div>");
                    var event_name = $("<div class='event-name'>" + events[i]["occasion"] + ":</div>");
                    var event_count = $("<div class='event-count'>" + events[i]["invited_count"] +
                        " Invited</div>");
                    if (events[i]["cancelled"] === true) {
                        $(event_card).css({
                            "border-left": "10px solid #FF1744"
                        });
                        event_count = $("<div class='event-cancelled'>Cancelled</div>");
                    }
                    $(event_card).append(event_name).append(event_count);
                    $(".events-container").append(event_card);
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

    })(jQuery);
    </script>
<!-- </body> -->
<!-- </html> -->