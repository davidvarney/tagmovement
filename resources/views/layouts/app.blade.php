<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{!! env('APP_TITLE') !!}</title>

    <!-- CSS -->
    @include('layouts.css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    {{-- Navigation --}}
    @include('layouts.nav')
    {{-- Intro Header --}}
    @include('layouts.intro_header')
    {{-- Countdown --}}
    @include('layouts.countdown')
    {{-- Action Section --}}
    @include('layouts.action_section')
    {{-- About Section --}}
    @include('layouts.about_section')
    {{-- MailChimp Section --}}
    @include('layouts.mailchimp')
    {{-- Project Section --}}
    @include('layouts.project.section')
    {{-- Project Modals --}}
    @include('layouts.project.modals')
    {{-- Team Section --}}
    @include('layouts.team_section')
    {{-- Sponsors --}}
    @include('layouts.sponsors')
    {{-- Contact Section --}}
    @include('layouts.contact_section')
    {{-- Map Section --}}
    @include('layouts.map_section')
    {{-- Footer --}}
    @include('layouts.footer')
    {{-- JavaScript --}}
    @include('layouts.js')
</body>
</html>
