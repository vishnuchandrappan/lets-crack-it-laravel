<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Crack IT</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/head.js"></script>

</head>

<body>
    @include('components.navbar')
    <div class="container">

        @if($errors->any())
        <script>
            @foreach($errors->all() as $error)
            toastr.error('{{$error}}')
            @endforeach
        </script>
        @endif

        @if(Session::has('message'))
        <script>
            toastr.success('{{Session::get('message')}}')
        </script>
        @endif
        @yield('content')
    </div>

    <script src="/js/app.js"></script>
</body>

</html>
