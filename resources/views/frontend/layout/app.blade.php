<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Borrow - is the loan company website template.">
    <meta name="keywords" content="loan, bad credit, EMI Calculator, credit cars, home loan, car loan, education loan">
    <title>@yield('title') - A Loan Company Website Templates</title>
</head>

<body>
    @if (Request::is('/'))
        @include('frontend.layout.nav') {{-- Home page header --}}
    @else
        @include('frontend.layout.inner-nav') {{-- Inner page header --}}
    @endif

    @yield('content')
    @include('frontend.layout.footer')
    @yield('js')
</body>

</html>
