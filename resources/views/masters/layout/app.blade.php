<html>
<head>
   @section('partials.header')
</head>

<body>
    @section('partials.sidebar')
    This is the master sidebar.
    @show
    <div class="container">
        @yield('content')
    </div>
</body>

</html>