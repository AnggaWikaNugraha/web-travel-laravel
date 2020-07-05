<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes/user/style')
</head>

<body>
    @include('includes.user.navbar')
    @yield('content')

    @include('includes.user.footer')

    @include('includes.user.script')
</body>

</html>
