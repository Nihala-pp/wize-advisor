<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <section>
        <div class="row">
            <!-- <div class="col-md-8"> -->
                <div class="card col-6 offset-3" style="width: 30%;">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Personal Details</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('update-details.save') }}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $id }}">
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example3" class="form-control" name="company_name">
                                <label class="form-label" for="form6Example3">Company name</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example4" class="form-control" name="designation">
                                <label class="form-label" for="form6Example4">Designation</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="url" id="form6Example5" class="form-control" name="linked_in">
                                <label class="form-label" for="form6Example5">Linked-In Url</label>
                            </div>
                            <div class="form-outline mb-4">
                                <select class="select form-control select-label" multiple data-mdb-clear-button="true"
                                    name="expert[]">
                                    @foreach($expertise as $key => $expert)
                                    <option value="{{ $expert }}">{{ $expert }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label" for="form6Example6">Expertise</label>
                            </div>
                            <div class="form-outline mb-4">
                                <select name="timezone" class="select form-control select-label">
                                    @foreach($timezone as $zone=> $time)
                                    <option value="{{ $time }}">{{ $zone }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label" for="form6Example7">Timezone</label>
                            </div>
                            <hr class="my-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="terms_condition" id="checkoutForm3"
                                    value="1">
                                <label class="form-check-label" for="checkoutForm3">
                                    Terms and Conditions
                                </label>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">
                                Continue to Dashboard
                            </button>
                        </form>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>
<style>
max-width: 448px;
width: 100%;
padding: 32px;
margin: 48px auto;
border-radius: 12px;
</style>

</html>