<?php
$url = "https://zoom.us/oauth/authorize?response_type=code&client_id="$client_id"&redirect_uri="$redirect_uri";
?>
 
<a href="<?php echo $url; ?>">Login with Zoom</a>



<!-- <div id="dropin-container" style="display: flex;justify-content: center;align-items: center;"></div>
<div style="display: flex;justify-content: center;align-items: center; color: white">
    <a id="submit-button" class="btn btn-sm btn-success mb-5">Pay Now</a>
</div> -->
<script src="https://js.braintreegateway.com/web/dropin/1.40.2/js/dropin.min.js"></script>
<script src="https://pay.google.com/gp/p/js/pay.js"></script>

<!-- <script src="https://js.braintreegateway.com/web/dropin/1.40.2/js/dropin.min.js"></script> -->
<!-- <script>
    var button = document.querySelector('#submit-button');

    braintree.dropin.create({
        authorization: client_token,
        selector: '#dropin-container',
        paypal: {
            flow: 'vault'
        }
    }, function (createErr, instance) {
        if (createErr) {
            console.log('Create Error', createErr);
            return;
        }
        button.addEventListener('click', function (event) {
            event.preventDefault();

            instance.requestPaymentMethod(function (err, payload) {
                $(function () {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content')
                        }
                    });
                    return $.ajax("https://wiseadvizor.com/token", {
                        method: 'POST',
                        data: {
                            nonce: payload.nonce,
                            call_id: $('#call_id').val()
                        },
                        success: function (response) {
                            $('.payment-page').html(response);
                        },
                        error: function (response) {
                            $('.payment-page').html(response);
                        }
                    });
                });
            });
        });
    });
</script> -->


if(gettype($_capture_response['purchase_units'][0]['payments']['captures']['status'] == "COMPLETED")) {
    $call = ScheduledCall::find($request->call_id);

    $mentor_timezone = AvailableSchedule::where('mentor_id', $call->mentor_id)->where('date', Carbon::parse($call->date)->format('Y-m-d'))->first();

    $user_timezone = new \DateTime($call->date . ' ' . $call->start_time, new \DateTimeZone($call->utc));

    $user_timezone->setTimezone(new \DateTimeZone($mentor_timezone->time_zone));

    $mentor_finish_time = Carbon::parse($user_timezone->format('H:i:s'))->addMinutes($call->duration);

    $schedule = AvailableSchedule::where('mentor_id', $call->mentor_id)
      ->where('date', Carbon::parse($call->date)->format('Y-m-d'))
      ->where('start_time', $user_timezone->format('H:i:s'))
      ->first();

    $schedule->update([
      'is_booked' => 1,
      'call_id' => $call->id
    ]);

    $call->update([
      'is_paid' => 1
    ]);
}