<head>
  <meta charset="utf-8" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('public/assets/img/favicon.png') }}">
  <title>
    wize-advisor
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('public/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/css/material-dashboard.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('public/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <!-- Font Awesome Icons -->
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('public/assets/css/material-dashboard.css') }}" rel="stylesheet" />
  <!-- <link id="pagestyle" href="https://demos.creative-tim.com/material-dashboard-pro/assets/css/material-dashboard.min.css?v=3.0.6" rel="stylesheet" /> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<!-- MDB -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>

  <style>
    /*====================================================
                      Client Testimonials
======================================================*/
    .modal-backdrop {
      display: none;
    }

    .testimonial-card .card-up {
      height: 120px;
      overflow: hidden;
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }

    .testimonial-card .avatar {
      width: 110px;
      margin-top: -60px;
      overflow: hidden;
      border: 3px solid #fff;
      border-radius: 50%;
    }

    /*====================================================
                      Experience
======================================================*/

    #experience {
      background: #f5f5f5;
    }

    #experience .card h4 {
      font-family: 'Roboto Condensed', sans-serif;
      text-transform: none;
      color: #555;
    }

    /*====================================================
                      AWARD
======================================================*/

    #awards {
      background: #f0f0f0;
    }

    #award-box {
      overflow: hidden;
      position: relative;
      padding: 60px 0;
    }

    #award-box:before {
      content: "";
      width: 1px;
      height: 100%;
      background: #cfcdcd;
      position: absolute;
      top: 0;
      left: 50%;
    }

    #award-box .award {
      width: 50%;
      clear: both;
      position: relative;
    }

    #award-box .award:before,
    #award-box .award:after {
      content: "";
      display: block;
      clear: both;
    }

    #award-box .award:first-child:before,
    #award-box .award:last-child:before {
      content: "";
      width: 11px;
      height: 11px;
      background: #cfcdcd;
      box-sizing: content-box;
      border: 5px solid #fff;
      box-shadow: 0 0 0 2px #cfcdcd;
      position: absolute;
      top: -54px;
      right: -11px;
      transform: rotate(45deg);
    }

    #award-box .award:last-child:before {
      top: auto;
      bottom: -54px;
    }

    #award-box .award:last-child:nth-child(even):before {
      right: auto;
      left: -11px;
    }

    #award-box .award-icon {
      width: 24px;
      height: 24px;
      background: #fff;
      border: 1px solid #cfcdcd;
      position: absolute;
      top: 17px;
      right: -13px;
      z-index: 1;
      transform: rotate(45deg);
    }

    #award-box .award-icon:before {
      content: "";
      display: block;
      width: 15px;
      height: 15px;
      background: #fff;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      transition: background-color 0.2s ease 0s;
    }

    #award-box .award:hover .award-icon:before {
      background: #39b3ff;
    }

    #award-box .award-content {
      width: 85%;
      padding: 18px 30px;
      background: #fff;
      text-align: right;
      float: left;
      border: 1px solid transparent;
      position: relative;
      transition: all 0.3s ease 0s;
    }

    #award-box .award:hover .award-content {
      border: 1px solid #cfcdcd;
    }

    #award-box .award-content:before {
      content: "";
      display: block;
      width: 14px;
      height: 14px;
      background: #fff;
      border: 1px solid #cfcdcd;
      position: absolute;
      top: 21px;
      right: -7.3px;
      transform: rotate(45deg);
      transition: all 0.2s ease 0s;
    }

    #award-box .award:hover .award-content:before {
      background: #39b3ff;
      border-color: #39b3ff;
    }

    #award-box .award-content:after {
      content: "";
      width: 11%;
      height: 1px;
      background: #cfcdcd;
      position: absolute;
      top: 28px;
      right: -14%;
    }

    #award-box .date {
      display: block;
      font-size: 15px;
      font-weight: 600;
      color: #39b3ff;
      margin: 0 0 8px;
      transition: all 0.3s ease 0s;
    }

    #award-box .award:hover .date {
      color: #444;
    }

    #award-box .title {
      font-size: 18px;
      color: #444;
      margin-top: 0;
      transition: all 0.3s ease 0s;
    }

    #award-box .award:hover .title {
      color: #39b3ff;
    }

    #award-box .description {
      font-size: 16px;
      color: #777;
      line-height: 28px;
      margin-top: 8px;
    }

    #award-box .award:nth-child(2n),
    #award-box .award:nth-child(2n) .award-content {
      float: right;
      text-align: left;
    }

    #award-box .award:nth-child(2n) .award-icon {
      right: 0;
      left: -12px;
    }

    #award-box .award:nth-child(2n) .award-content:before {
      left: -7.3px;
    }

    #award-box .award:nth-child(2n) .award-content:after {
      left: -14%;
    }

    @media only screen and (max-width: 767px) {
      #award-box {
        padding-left: 20px;
      }

      #award-box:before {
        left: 20px;
      }

      #award-box .award {
        width: 100%;
      }

      #award-box .award,
      #award-box .award-content {
        float: right;
        padding: 5px;
        text-align: left;
      }

      #award-box .award:first-child:before,
      #award-box .award:last-child:nth-child(odd):before {
        right: auto;
        left: -11px;
      }

      #award-box .award-icon {
        right: 0;
        left: -12px;
      }

      #award-box .award-content:before {
        left: -7.3px;
      }

      #award-box .award-content:after {
        left: -14%;
      }
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.5/index.global.min.js"></script>
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="{{ asset('public/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/datatables.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/multistep-form.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/choices.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/countup.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins//chartjs.min.js') }}"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- <script src="https://demos.creative-tim.com/material-dashboard-pro/assets/js/material-dashboard.min.js?v=3.0.6"></script> -->
  <!-- <script src="{{ asset('public/assets/js/plugins/timepicker-bs4.js') }}"></script> -->
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
</head>