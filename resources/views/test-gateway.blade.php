<!DOCTYPE html>
<html>

<head>
    <title>Test Stripe</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body>
    <section>
        <div class="product">
            <img src="{{ asset('public/assets/img/').'/'. $call_data->mentor->metaData->profile_pic }}" alt="MENTOR" />
            <div class="description">
                <h3>{{ $call_data->mentor ?  $call_data->mentor->name : '' }}</h3>
                <h4>30 Min Meeting</h4>
                <h5>${{ $call_data->mentor->metaData->price_per_call }}</h5>
            </div>
        </div>
        <form action="{{ route('checkout') }}" method="POST">
            <input type="hidden" name="price" value="{{ $call_data->mentor->metaData->price_per_call }}" id="price">
            <button type="submit" id="checkout-button">Checkout</button>
        </form>
    </section>
</body>

</html>