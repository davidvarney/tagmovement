<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; margin: 0; padding: 0;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    @include('emails.email_basic_css')
</head>
<body style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; width: 100% !important; height: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; background: #efefef; margin: 0; padding: 0;" bgcolor="#efefef">
    @yield('content')
</body>
</html>
