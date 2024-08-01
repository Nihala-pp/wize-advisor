<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================
* Coded by Nihala PP
=========================================================
-->
<!DOCTYPE html>
<html lang="en">
@php header('Access-Control-Allow-Origin: *'); @endphp
@include('partials.web-header-new')

<body
    class="page-template page-template-elementor_canvas page page-id-13 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-13">
    @include('partials.header-common')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- <div class="col-lg-8">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item active">
                    <a href="" class="nav-link text-muted active" target="_blank">Dashboard </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-muted" target="_blank">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-muted" target="_blank">Posts</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link pe-0 text-muted" target="_blank">Browse Mentors</a>
                </li>
            </ul>
        </div> -->
        <!-- Navbar -->
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mt-5">
                <div class="col-12 col-lg-10 m-auto">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Update Session</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row" id="row">
                                <form method="POST" action="{{ route('user.schedule.save') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="row_id" value="{{ $scheduled_call->id }}">
                                    <input type="hidden" class="mentor" name="mentor_id"
                                        value="{{ $scheduled_call->mentor_id }}">
                                    <input type="hidden" class="timezone" name="timezone"
                                        value="{{ $scheduled_call->utc }}">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Mentor</label>
                                        <input type="text" name="mentor" class="form-control"
                                            value="{{ $scheduled_call->mentor->name ??  '' }}" placeholder="Mentor"
                                            disabled>
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Documents</label>
                                        <input type="file" name="documents" class="form-control"
                                            value="{{ $scheduled_call->documents ??  '' }}" placeholder="Documents"
                                            required>
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" cols="7"
                                            placeholder="Description"
                                            required> {{ $scheduled_call->description ??  '' }} </textarea>
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Date</label>
                                        <input type="text" name="date" class="form-control date" placeholder="Date"
                                            id="date-pick" placeholder="Date" value="{{ $scheduled_call->date }}">
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Time Slot</label>
                                        <select class="form-control" id="educationDate" name="start_time" required>
                                            @foreach($timeAvailability as $key => $time)
                                            <option value="{{ $time }}"
                                                {{ $scheduled_call->start_time == $time ? "selected" : "" }}>
                                                {{ $time }}</option>
                                            @endforeach
                                        </select>
                                        <!-- <label class="form-label">Time</label> -->
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Timezone</label>
                                        <select class="form-control" id="timezone" name="utc" required>
                                            @foreach($utc as $key => $ut)
                                            <option value="{{ $ut }}"
                                                {{ $key == $scheduled_call->utc ? "selected" : "" }}>{{ $key }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            <button type="submit" name="submitform" id="submitform" class="btn btn-primary"><i
                                    class="fa-solid mx-1 fa-floppy-disk"></i>{{ __('Save') }}</button>
                            </form>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.footer')
        </div>
    </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js" async>
    < script type = "text/javascript" >
        $(document).ready(function() {
            var highlight_dates = ['2023-08-06', '2023-08-23', '2023-08-07', '2023-08-14', '2023-08-05',
                '2023-08-11', '2023-08-08', '2023-08-09', '2023-08-21', '2023-08-31', '2023-08-29'
            ];

            console.log(highlight_dates);

            $('#date-pick').datepicker({
                beforeShowDay: function(date) {
                    var month = date.getMonth() + 1;
                    var year = date.getFullYear();
                    var day = date.getDate();

                    // Change format of date
                    var newdate = year + "-" + month + '-' + day;

                    // Set tooltip text when mouse over date
                    var tooltip_text = "Availability on " + newdate;

                    // Check date in Array
                    if (jQuery.inArray(newdate, highlight_dates) != -1) {
                        // Pass class name and tooltip text
                        return [true, "highlight", tooltip_text];
                    }
                    return [true];
                }
            });

            $('.date').on("change", function() {
                var date = $(this).val();
                var timezone = $(".timezone").val();
                var mentor = $(".mentor").val();
                return $.ajax("https://wiseadvizor.com/user/getTimeAvailability", {
                    method: 'GET',
                    data: {
                        "_token": $('meta[name="csrf-token"]').attr('content'),
                        "date": date,
                        "timezone": timezone,
                        "mentor": mentor,
                    },
                    success: function(response) {
                        for (var key in response) {
                            $('#educationDate').append($('<option/>', {
                                value: response[key],
                                text: response[key]
                            }));
                        }
                        // return available_dates;
                    },
                });
            });

            $('#timezone').on("change", function() {
                var timezone = $(this).val();
                var date = $(".date").val();
                var mentor = $(".mentor").val();
                return $.ajax("https://wiseadvizor.com/user/getTimeAvailability", {
                    method: 'GET',
                    data: {
                        "_token": $('meta[name="csrf-token"]').attr('content'),
                        "date": date,
                        "timezone": timezone,
                        "mentor": mentor,
                    },
                    success: function(response) {
                        for (var key in response) {
                            $('#educationDate').append($('<option/>', {
                                value: response[key],
                                text: response[key]
                            }));
                        }
                        // return available_dates;
                    },
                });
            });
        });
    </script>
</body>
<style>
.highlight a {
    background: #29f274 !important;
    color: #ffffff !important;
}
</style>
<style>
    @media(max-width:480px) {
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

</style>
</html>