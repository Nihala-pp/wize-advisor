<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="robots" content="max-image-preview:large">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">
    <title>Dashboard - wiseAdvizor </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('public/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <!-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('public/assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/material-kit-pro.min.css') }}">
    <link href="{{ asset('public/assets/vendor/@fontawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="alternate" type="application/rss+xml" title="wiseAdvizor &raquo; Feed"
        href="{{ asset('public/feed/') }}">
    <link rel="alternate" type="application/rss+xml" title="wiseAdvizor &raquo; Comments Feed"
        href="{{ asset('public/comments/feed/') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />


    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>wiseAdvizor</title> -->
    <script>
    var theplus_ajax_url = "https://wiseadvizor.com/wp-admin/admin-ajax.php";
    var theplus_ajax_post_url = "https://wiseadvizor.com/wp-admin/admin-post.php";
    var theplus_nonce = "41e9834823";
    </script>





//     if (empty($data['desc'])) {
//       ?>
// <script type="text/javascript">
// var custom_location = '{{ url("https://wiseadvizor.com/schedule-call") }}';
// Id = "{{ $id }}";
// alert("Please choose the time slot");
// window.location.href = "' + custom_location + " / " + Id'";
// location.reload();
// </script>
// <?php
//     } elseif (empty($data['time'])) {
//       ?>
// <script type="text/javascript">
// var custom_location = '{{ url("https://wiseadvizor.com/schedule-call") }}';
// Id = "{{ $id }}";
// alert("Please fill the description");
// window.location.href = "' + custom_location + " / " + Id'";
// location.reload();
// </script>
// <?php
//     } elseif (empty($data['timezone'])) {
      ?>
<script type="text/javascript">
var custom_location = '{{ url("https://wiseadvizor.com/schedule-call") }}';
Id = "{{ $id }}";

alert("Please choose the timezone");
window.location.href = "' + custom_location + " / " + Id'";
location.reload();
</script>
<?php
    // } 