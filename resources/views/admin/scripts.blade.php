<script type="text/javascript">
// $('.modal-backdrop .fade .show').remove();
G_resources = {};
$('#start_time').daterangepicker({
    singleDatePicker: true,
    timePicker: true,
    locale: {
        format: 'hh:mm'
    },
});

$('#end_time').daterangepicker({
    singleDatePicker: true,
    timePicker: true,
    locale: {
        format: 'hh:mm'
    },
});

function date() {
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd',
    });
}

function editBooking() {
    var bookingId = $('#bookingId').val();
    $.ajax({
        url: "",
        type: "GET",
        data: {
            'bookingId': bookingId
        },
        success: function(response) {
            $('body').find('#edit_booking .modal-body').html(response);
            $('body').find("#edit_booking").modal('toggle');
            $('body').find("#bookingDetails").modal('hide');
        }
    });
}

function deleteBooking() {
    var bookingId = $('#bookingId').val();
    $.ajax({
        url: "",
        type: "GET",
        data: {
            'bookingId': bookingId
        },
        success: function(response) {}
    });
}

function duplicateBooking() {
    var bookingId = $('#bookingId').val();
    $.ajax({
        url: "",
        type: "GET",
        data: {
            'bookingId': bookingId
        },
        success: function(response) {
            $('body').find('#duplicate_booking .modal-body').html(response);
            $('body').find("#duplicate_booking").modal('toggle');
            $('body').find("#bookingDetails").modal('hide');
        }
    });
}

function addTask() {
    var bookingId = $('#bookingId').val();
    window.location.href = "";
}

function viewCompletedAppointment() {
    var bookingId = $('#bookingId').val();
    window.location.href = "hospital/appointments/reschedules";
}

function rescheduleBooking() {
    var bookingId = $('#bookingId').val();
    $.ajax({
        url: "",
        type: "POST",
        data: {
            'bookingId': bookingId
        },
        success: function(response) {
            window.location.href = "hospital/appointments/reschedules";
        }
    });
}

function addBlockTime() {

}

function getEvents(fetchInfo, successCallback, failureCallback) {
    $.ajax({
        url: '',
        type: "GET",
        success: function(response) {
            response = JSON.parse(response);
            var events = [];
            response.forEach(function(value, key) {
                events.push({
                    title: value.title,
                    start: value.start,
                    end: value.end,
                    resourceId: value.resourceId,
                    backgroundColor: value.color
                });
            });
            successCallback(events);
        },
    });
}

function eventClick(info) {
    $.ajax({
        url: '',
        type: "POST",
        data: {
            title: info.event.title,
            date: info.event.start.toISOString(),
            resource: info.event._def.resourceIds,
        },
        success: function(response) {
            $('body').find('#service').html(info.event.title);
            $('body').find('#bookingId').val(response['data']['_id']);
            $('body').find('#staff').html(response['data']['resource']['name']);
            $('body').find('#duration').html('20 Min');
            $('body').find("#name").html(response['data']['customer']['name'])
            $('body').find('#mobile').html(response['data']['customer']['mobile_number']);
            $('body').find('#price').html(response['data']['booking_price'] + 'AED');
            $('body').find('#package').html(response['membership']);

            if (response['data']['status'] == "Pending") {
                $('#title').addClass('pending').html("Pending")
            }
        },
    });
    info.el.style.borderColor = 'red';
    $('body').find('#bookingDetails').modal('toggle');
}

function getResources(fetchInfo, successCallback, failureCallback) {
    $.ajax({
        url: '',
        type: "GET",
        success: function(response) {
            G_resources = {};
            resources = [];
            response.forEach(function(value, key) {
                var img = '<img src="' + value.image + '" height="50" width="50">';
                // span.fc-col-header-cell-cushion .fc-sticky
                G_resources[value.id] = value.image;
                var data = $('span.fc-col-header-cell-cushion .fc-sticky').append(img);
                resources.push({
                    id: value.id,
                    title: value.name,
                    class: "cal_resorce_" + value.id
                });
            });
            successCallback(resources);
        },
    });
}

function listAppointments() {
    $.ajax({
        url: '',
        type: "GET",
        success: function(response) {
            $('body').find('#calendar').hide();
            $('body').find('.displayCalender').show();
            $('.page-title').innerHTML = "Appointments";
            $('#listAppointment').html(response);
        },
    });
}

function displayCalender() {
    window.location.href = "appointments/";
}

function dropEvent(info) {
    var bookingId = $('#bookingId').val();
    $.ajax({
        url: '',
        type: "POST",
        data: {
            title: info.event.title,
            date: info.event.start.toISOString(),
            resource: info.event._def.resourceIds,
            oldDate: info.oldEvent._instance.range.start.toISOString(),
            oldResource: info.oldEvent._def.resourceIds,
            bookingId: bookingId
        },
        success: function(response) {},
    });
}

function addPatient() {

}

function doSearch() {
    var searchVal = $("#search_box").val();
    $.ajax({
        url: "",
        type: "GET",
        data: {
            'name': searchVal
        },
        success: function(data) {
            $('#userDetails').html(data);
        }
    });
}
</script>
<script type="text/javascript">
$(document).on('click', 'li', function() {
    var value = $(this).text();
    $('#search_box').val(value);
    $('#userDetails').html("");
});

$('body').on('submit', '.block_time_form', function(e) {
    e.preventDefault();

    var formData = new FormData(this);
    submit_form($(this).data("href"), formData);

    if (ajax_res.status == "success") {

        $('div.modal').modal('hide');
        $('form.block_time_form').trigger("reset");
        table.draw();
    }

    ajax_res = '';
});

$('body').on('submit', '.checkoutForm', function(e) {
    e.preventDefault();

    var formData = new FormData(this);
    submit_form($(this).data("href"), formData);

    if (ajax_res.status == "success") {

        $('div.modal').modal('hide');
        $('form.checkoutForm').trigger("reset");
        table.draw();
    }

    ajax_res = '';
});

$('body').on('submit', '.edit_booking_form', function(e) {
    e.preventDefault();

    var formData = new FormData(this);
    submit_form($(this).data("href"), formData);

    if (ajax_res.status == "success") {

        $('div.modal').modal('hide');
        $('form.edit_booking_form').trigger("reset");
        table.draw();
    }

    ajax_res = '';
});

$('body').on('submit', '.duplicate_booking_form', function(e) {
    e.preventDefault();

    var formData = new FormData(this);
    submit_form($(this).data("href"), formData);

    if (ajax_res.status == "success") {

        $('div.modal').modal('hide');
        $('form.duplicate_booking_form').trigger("reset");
        table.draw();
    }

    ajax_res = '';
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    // console.log(calendarEl);
    var calendar = new FullCalendar.Calendar(calendarEl, {
        schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
        themeSystem: 'bootstrap5',
        expandRows: true,
        // height: 750,
        allDaySlot: false,
        timeZone: 'UTC',
        initialView: 'resourceTimeGridDay',
        slotMinTime: "08:00:00",
        slotMaxTime: "24:00:00",
        headerToolbar: {
            left: 'prev,next',
            center: 'title',
            right: 'resourceTimeGridDay,resourceTimeGridFourDay,resourceTimeGridWeek'
        },
        customButtons: {
            myCustomButton: {
                text: 'List',
                // icon: 'fa fa-list',
                click: function() {
                    listAppointments();
                    // alert('clicked the custom button!');
                }
            }
        },
        dateClick: function(info) {
            window.location.href = "appointments/newAppointment/" + info.dateStr + "/" + info
                .resource.id;
        },
        eventClick: function(info) {
            eventClick(info);
        },
        eventDrop: function(info) {
            if (!confirm("Are you sure about this change?")) {
                info.revert();
            }
            dropEvent(info);
        },
        editable: true,
        droppable: true,
        businessHours: true,
        eventLimit: true,
        selectable: true,
        selectHelper: true,
        views: {
            resourceTimeGridFourDay: {
                type: 'resourceTimeGrid',
                duration: {
                    days: 4
                },
                buttonText: '4 days'
            },
        },
        resources: function(fetchInfo, successCallback, failureCallback) {
            $.ajax({
                url: "{{ route('admin.mentors.resources') }}",
                type: "GET",
                success: function(response) {
                    resources = [];
                    response.forEach(function(value, key) {
                        resources.push({
                            id: value.id,
                            title: value.name,
                        });
                    });
                    successCallback(resources);
                },
            });
        },
        // resourceRender: function(resourceObj, th) {
        //     if (resourceObj.file_name) {
        //         th.prepend(
        //             '<img src="{{ asset('img/doctors.png') }}" height="25px" width="25px"></img>'
        //         );
        //     } else {
        //         th.prepend(
        //             '<img src="{{ asset('img/doctors.png') }}" height="25px" width="25px"></img>'
        //         );
        //     }
        // },
        // events: function(fetchInfo, successCallback, failureCallback) {
        //     getEvents(fetchInfo, successCallback, failureCallback);
        // },

        events: [
            $.ajax({
                url: "{{ route('admin.mentors.events') }}",
                type: "GET",
                success: function(response) {
                    response = JSON.parse(response);
                    var events = [];
                    response.forEach(function(value, key) {
                        events.push({
                            title: value.title,
                            start: value.start,
                            end: value.end,
                            resourceId: value.resourceId,
                            backgroundColor: value.color
                        });
                    });
                    successCallback(events);
                },
            });
        ],
        resourcesSet: function(resources) {
            G_resources;
            // var img = '<img src="' + value.image + '" height="50" width="50">';
            // console.log(G_resources, "G_resources");

            if (Object.keys(G_resources).length == 0) {
                return;
            } else {
                $.each(G_resources, function(key, value) {
                    $('th[data-resource-id="' + key + '"]').children('div').children(
                        'span').prepend('<img src="' + value +
                        '" height="50" width="50">');
                });
            }
            //   $('th[data-resource-id="6413f15b1cdb3828bd0dc31b"]').children('div').children('span').prepend('<img src="http://localhost/CloudMeERP2_Mongo-Laravel9/public/img/doctors.png" height="50" width="50">');
        },
    });
    calendar.render();
});
</script>