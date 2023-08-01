(function ($) {

    "use strict";

    // Setup the calendar with the current date
    $(document).ready(function () {
        var date = new Date();
        var today = date.getDate();
        // Set click handlers for DOM elements
        $(".right-button").click({ date: date }, next_year);
        $(".left-button").click({ date: date }, prev_year);
        $(".month").click({ date: date }, month_click);
        $("#add-button").click({ date: date }, new_event);
        // Set current month as active
        $(".months-row").children().eq(date.getMonth()).addClass("active-month");
        init_calendar(date);
        var events = check_events(today, date.getMonth(), date.getFullYear());
        show_events(events, months[date.getMonth()], today);



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("body").on('click', '#payNow', function () {
            // var time = $('.event-card').val();
            var formdata = $('.scheduleCallForm').serialize();
            return $.ajax("https://wiseadvizor.com/addScheduleRequest", {
                method: 'POST',
                data: {
                    "data": formdata,
                },
                success: function (response) {
                    $('.success').html(response);
                }
            });
        });

        $("body").on('click', '.event-card', function () {
            var fired_button = $(this).val();
            $('body').find('.time').val(fired_button);
        });

        $("body").on('change', '.timezone', function () {
            var timezone = $(this).val();
            var mentor = $('.mentor').val();
            var month = date.getMonth();
            var year = date.getFullYear();
            var day = date.getDate();

            // Change format of date
            var newdate = day + "-" + month + '-' + year;

            // Set tooltip text when mouse over date
            var tooltip_text = "Availability on " + newdate;

            // return $.ajax("https://wiseadvizor.com/getDateAvailability", {
            //     method: 'GET',
            //     data: {
            //         "timezone": timezone,
            //         "mentor": mentor
            //     },
            //     success: function (response) {
            //         var event_data = [];
            //         response.forEach(function (value, key) {
            //             event_data.push({
            //                 "date": value.date
            //             });
            //         });
            //         // Check date in Array
            //         if (jQuery.inArray(newdate, event_data[date]) != -1) {
            //             $('.table-date').css({
            //                 "background": "white", "border-radius": "50%", "position": "absolute", "top": "0", "left": "0", "top": "0",
            //                 "left": "0", "width": "10px", "height": "10px"
            //             })
            //             // Pass class name and tooltip text
            //             return [true, "highlight", tooltip_text];
            //         }
            //         // check_events(today, date.getMonth() + 1, date.getFullYear());
            //     },
            // });
        });
    });

    // Initialize the calendar by appending the HTML dates
    function init_calendar(date, data = 'Null') {
        // getAvailableDates(month, year);
        // console.log(data[0]["day"]);
        $(".tbody").empty();
        $(".events-container").empty();
        var calendar_days = $(".tbody");
        var month = date.getMonth();
        var year = date.getFullYear();
        var available_days = getAvailableDates(month, year);
        // console.log(available_days);
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
            }
            if (!(day == data[0]["day"])) {
                var curr_date = $("<td class='table-date nil'>" + "</td>");
                row.append(curr_date);
            }
            else {
                var curr_date = $("<td class='table-date'>" + day + "</td>");
                var events = check_events(day, month, year);
                if (today === day && $(".active-date").length === 0) {
                    curr_date.addClass("active-date");
                    show_events(events, months[month], day);
                }
                // If this date has any events, style it with .event-date
                if (events.length !== 0) {
                    curr_date.addClass("event-date");
                }
                // Set onClick handler for clicking a date
                curr_date.click({ events: events, month: months[month], day: day }, date_click);
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

    function getAvailableDates(month, year) {
        var mentor = $('.mentor').val();
        var timezone = $("#timezone").val();
        var date = new Date();

        return $.ajax("https://wiseadvizor.com/getDateAvailability", {
            method: 'GET',
            data: {
                "_token"   : $('meta[name="csrf-token"]').attr('content'),
                "mentor"   : mentor,
                "month"    : month + 1,
                "year"     : year,
                "timezone" : timezone,
            },
            success: function (response) {
                var available_dates = [];
                for (var key in response) {
                    // console.log(response[key]);
                    available_dates.push({
                        day: response[key],
                    });
                }
                init_calendar(date, available_dates);
            },
        });
    }

    // Event handler for when a date is clicked
    function date_click(event) {
        $(".events-container").show(250);
        $("#dialog").hide(250);
        $(".active-date").removeClass("active-date");
        $(this).addClass("active-date");

        // console.log(event.data.year);
        var mentor = $('.mentor').val();
        var day = event.data.day;
        console.log(event.data);
        $('body').find('.day').val(day);
        var year = new Date().getFullYear();
        $('body').find('.year').val(year);
        var month = event.data.month;
        $('body').find('.month').val(month);

        var timezone = $("#timezone").val();

        return $.ajax("https://wiseadvizor.com/getTimeAvailability", {
            method: 'POST',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "mentor": mentor,
                "day": day,
                "month": month,
                "year": year,
                "timezone": timezone,
            },
            success: function (response) {
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
        console.log(date.setMonth(new_month));
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
        $("input").click(function () {
            $(this).removeClass("error-input");
        })
        // empty inputs and hide events
        $("#dialog input[type=text]").val('');
        $("#dialog input[type=number]").val('');
        $(".events-container").hide(250);
        $("#dialog").show(250);
        // Event handler for cancel button
        $("#cancel-button").click(function () {
            $("#name").removeClass("error-input");
            $("#count").removeClass("error-input");
            $("#dialog").hide(250);
            $(".events-container").show(250);
        });
        // Event handler for ok button
        $("#ok-button").unbind().click({ date: event.data.date }, function () {
            var date = event.data.date;
            var name = $("#name").val().trim();
            var count = parseInt($("#count").val().trim());
            var day = parseInt($(".active-date").html());
            // Basic form validation
            if (name.length === 0) {
                $("#name").addClass("error-input");
            }
            else if (isNaN(count)) {
                $("#count").addClass("error-input");
            }
            else {
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
        alert(month);
        // Clear the dates container
        $(".events-container").empty();
        $(".events-container").show(250);
        console.log(event_data["events"]);
        // If there are no events for this date, notify the user
        if (events.length === 0) {
            var event_card = $("<button type='button' class='btn btn-outline-primary btn-lg btn-block event-card' style='background-color:white;border:solid;border-color:#007bff; width:75%' value=''></button>");
            var event_name = $("<div class='event-name'>There are no calls planned for " + month + " " + day + ".</div>");
            $(event_card).css({ "border-left": "10px solid #FF1744" });
            $(event_card).append(event_name);
            $(".events-container").append(event_card);
        }
        else {
            // Go through and add each event as a card to the events container
            for (var i = 0; i < events.length; i++) {
                var event_card = $("<button type='button' class='btn btn-outline-primary btn-lg btn-block event-card' value=" + events[i]["start_time"] + " style='background-color:white;border:solid;border-color:#007bff;  width:75%' required></button>");
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
        "events": [
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
