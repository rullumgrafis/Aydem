<!DOCTYPE html>

<html @yield('html_attribute') lang="en">
<head>
    <meta charset="utf-8"/>
    <title>{{ $title }} | Booking - Multipurpose Tailwind CSS Landing Page Template</title>
    <base href="/"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta
        content="Booking - Multipurpose Bootstrap HTML Template, Full-featured, professional-looking software, saas and startup website template. Multipurpose Tailwind CSS Landing Page Template"
        name="description"/>
    <meta
        content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, light and dark mode, html5, css3, javascript, gallery, slider, touch, creative"
        name="keywords"/>
    <meta content="Unifato" name="author"/>
    <!-- Favicon icons -->
    <link href="{{ asset('images/favicon-1.ico') }}" rel="shortcut icon"/>

    @yield('styles')

    @include('shared.partials/head-css')

</head>
<body @yield('body_attribute')>

@yield('content')

@yield('scripts')

</body>
</html>
