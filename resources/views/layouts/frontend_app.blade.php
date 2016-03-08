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
    @include('frontend.css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    {{-- Navigation --}}
    @include('frontend.nav')
    {{-- Intro Header --}}
    @include('frontend.intro_header')
    {{-- Registration Modal --}}
    @include('frontend.registration_modal')
    {{-- Countdown --}}
    @include('frontend.countdown')
    {{-- Action Section --}}
    @include('frontend.action_section')
    {{-- About Section --}}
    @include('frontend.about_section')
    {{-- MailChimp Section --}}
    @include('frontend.mailchimp')
    {{-- Project Section --}}
    {{--@include('frontend.project.section')--}}
    {{-- Project Modals --}}
    {{--@include('frontend.project.modals')--}}
    {{-- Team Section --}}
    @include('frontend.team_section')
    {{-- Sponsors --}}
    @include('frontend.sponsors')
    {{-- Contact Section --}}
    @include('frontend.contact_section')
    {{-- Map Section --}}
    @include('frontend.map_section')
    {{-- Footer --}}
    @include('frontend.footer')
    {{-- JavaScript --}}
    @include('frontend.js')
</body>
</html>
