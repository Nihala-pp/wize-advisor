<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap-multiselect.min.css') }}" />
</head>

<body>
    <section>
        <div class="row mt-5">
            <!-- <div class="col-md-8"> -->
            <div class="card col-12 offset-4" style="width: 30%;">
                <!-- <div class="card-header py-3">
                        <h5 class="mb-0">Personal Details</h5>
                    </div> -->
                <div class="card-body">
                    <form method="POST" action="{{ route('update-details.save') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $id }}">
                        <div class="form-outline mb-4">
                            <input type="text" id="form6Example3" class="form-control" name="company_name" required>
                            <label class="form-label" for="form6Example3">Company name</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="form6Example4" class="form-control" name="designation" required>
                            <label class="form-label" for="form6Example4">Designation</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="url" id="form6Example5" class="form-control" name="linked_in">
                            <label class="form-label" for="form6Example5">Linked-In Url</label>
                        </div>
                        <div class="form-outline mb-4">
                            <select class="select form-control" name="expert[]" id="form6Example8" multiple required>
                                @foreach($expertise as $key => $expert)
                                <option value="{{ $expert }}">{{ $expert }}</option>
                                @endforeach
                            </select>
                            <!-- <select class="select form-control select-label" multiple data-mdb-clear-button="true"
                                name="expert[]">
                                @foreach($expertise as $key => $expert)
                                <option value="{{ $expert }}">{{ $expert }}</option>
                                @endforeach
                            </select> -->
                            <label class="form-label" for="form6Example6">Expertise</label>
                        </div>
                        <div class="form-outline mb-4">
                            <select name="timezone" class="select" multiple required>
                                @foreach($timezone as $zone=> $time)
                                <option value="{{ $time }}">{{ $zone }}</option>
                                @endforeach
                            </select>
                            <label class="form-label select-label">Timezone</label>
                            <!-- <label class="form-label" for="form6Example7">Timezone</label> -->
                        </div>
                        <hr class="my-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="terms_condition" id="checkoutForm3"
                                value="1" required>
                            <label class="form-check-label" for="checkoutForm3">
                                Terms and Conditions
                            </label>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block mt-3" type="submit">
                            Continue
                        </button>
                    </form>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </section>
    <script type="text/javascript" src="{{ asset('public/assets/js/mdb.min.js') }}"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script> -->
</body>
<style>
max-width: 448px;
width: 100%;
padding: 32px;
margin: 48px auto;
border-radius: 12px;
</style>
</html>