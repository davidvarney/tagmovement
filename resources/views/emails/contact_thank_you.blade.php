@extends('emails.email_basic')

@section('content')
    <table class="body-wrap" style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; width: 100% !important; height: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; background: #efefef; margin: 0; padding: 0;" bgcolor="#efefef">
        <tr style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; margin: 0; padding: 0;">
            <td class="container" style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; display: block !important; clear: both !important; max-width: 580px !important; margin: 0 auto; padding: 0;">

                <!-- Message start -->
                <table style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;">
                    <tr style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; margin: 0; padding: 0;">
                        <td align="center" class="masthead" style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; color: white; background: #000; margin: 0; padding: 80px 0;" bgcolor="#000">

                            <h1 style="font-size: 32px; font-family: 'open sans',Arial,sans-serif; line-height: 1.25; max-width: 90%; text-transform: uppercase; margin: 0 auto; padding: 0;">T<span style="color: #A91F23; font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; margin: 0; padding: 0;">A</span>G Movement</h1>

                        </td>
                    </tr>
                    <tr style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; margin: 0; padding: 0;">
                        <td class="content" style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; background: white; margin: 0; padding: 30px 35px;" bgcolor="white">

                            <h2 style="font-size: 28px; font-family: 'open sans',Arial,sans-serif; line-height: 1.25; margin: 0 0 20px; padding: 0;">Hi {!! $data['name'] !!},</h2>

                            <p style="font-size: 16px; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; font-weight: normal; margin: 0 0 20px; padding: 0;">
                                Your message has been submitted!
                            </p>

                            <p style="font-size: 16px; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; font-weight: normal; margin: 0 0 20px; padding: 0;">
                                <em style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; margin: 0; padding: 0;">Message -</em>
                            </p>

                            <p style="font-size: 16px; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; font-weight: normal; margin: 0 0 20px; padding: 0;">
                                {!! $data['message'] !!}
                            </p>

                            <p style="font-size: 16px; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; font-weight: normal; margin: 0 0 20px; padding: 0;">
                                <em style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; margin: 0; padding: 0;">
                                    – The Team @ T<span style="color: #A91F23; font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; margin: 0; padding: 0;">A</span>G Movement
                                </em>
                            </p>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; margin: 0; padding: 0;">
            <td class="container" style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; display: block !important; clear: both !important; max-width: 580px !important; margin: 0 auto; padding: 0;">

                <!-- Message start -->
                <table style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; width: 100% !important; border-collapse: collapse; margin: 0; padding: 0;">
                    <tr style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; margin: 0; padding: 0;">
                        <td class="content footer" align="center" style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; background: white none; margin: 0; padding: 30px 35px;" bgcolor="white">
                            <p style="font-size: 14px; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; font-weight: normal; color: #888; text-align: center; margin: 0; padding: 0;" align="center">
                                Sent by T<span style="color: #A91F23; font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; margin: 0; padding: 0;">A</span>G Movement, 4480 Refugee Rd, Ste. 301, Columbus, OH, 43232
                            </p>
                            <p style="font-size: 14px; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; font-weight: normal; color: #888; text-align: center; margin: 0; padding: 0;" align="center">
                                <a href="mailto:admin@tagmovement.org" style="font-size: 100%; font-family: 'open sans',Arial,sans-serif; line-height: 1.65; color: #888; text-decoration: none; font-weight: bold; margin: 0; padding: 0;">
                                    admin@tagmovement.org
                                </a>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
@endsection
