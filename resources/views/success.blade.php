<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Success</title>
    <style>
        .text-center {
            padding: 50px 50px 50px 50px;
        }
    </style>
  </head>
  <body>
  <div class="card text-center mt-5">
    <div class="card-header mt-5">
    Successfully Scheduled
    </div>
  <div class="card-body">
    <div class="rounded-circle mt-3">
          <a href="{{ route('profile', [$mentor->id]) }}" title="Mentor"> <img class="rounded-circle" decoding="async" src="{{ asset('public/assets/img/').'/'.$mentor->metaData->profile_pic }}" alt="Mentor" width="100" height="100">
          </a>  
   </div>
    <h5 class="card-title mt-3">Confirmed</h5>
    <p class="card-text">You are scheduled with {{ $mentor->name }}</p>
    <h5 class="card-title">{{ $details['duration'] }} Min Meeting</h5>
    <i class="fab fa-time"><b> {{ $details['start_time'] }} - {{ $details['finish_time'] }} {{ $details['date'] }} </b></i>
    <i class="fab fa-time"> {{ $details['UTC'] }} </i>
    <p class="card-text mt-2">An email for the meeting link will be sent to your Email Address Once the mentor is approved</p>
  </div> 
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>