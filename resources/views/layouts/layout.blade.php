<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<title>@yield('head-title')</title>

<body>
    {{-- Header --}}
    <div class="container">
        <div class="row">
            <div class="col-10 ">
                <div class="container mt-3">
                    <div style="background: #9e9ead" class="mt-4 p-3  text-white rounded shadow-lg">
                        <h1 style="text-align: center;">@yield('body-title')</h1>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <br><br>
                @yield('button-new')
            </div>
        </div>
    </div>
    {{-- Content --}}
    <br><br>
    @yield('content')



    {{-- Footer --}}
    <div style="margin-top: 33%;" class="container">

        <div style="background: #9e9ead" class=" p-3 sstext-white rounded shadow-lg">
            <h1 style="text-align: center;color:white;"> Copyright&copy; by @yield('footer-title','Matejko Team')
                {{now()->year}}</h1>
        </div>
    </div>
    <br>
</body>

</html>