@extends('emails.email_basic')

@section('content')
    <table class="body-wrap">
        <tr>
            <td class="container">

                <!-- Message start -->
                <table>
                    <tr>
                        <td align="center" class="masthead">

                            <h1>T<span style="color:#A91F23;">A</span>G Movement</h1>

                        </td>
                    </tr>
                    <tr>
                        <td class="content">

                            <h2>Hi {!! $data['name'] !!},</h2>

                            <p>Your message has been submitted!</p>

                            <p><em>Message -</em></p>

                            <p>{!! $data['message'] !!}</p>

                            <p><em>– The Team @ T<span style="color:#A91F23;">A</span>G Movement</em></p>

                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr>
            <td class="container">

                <!-- Message start -->
                <table>
                    <tr>
                        <td class="content footer" align="center">
                            <p>Sent by <a href="#">TAG Movement</a>, 4480 Refugee Rd, Ste. 301, Columbus, OH, 43232</p>
                            <p><a href="mailto:admin@tagmovement.org">admin@tagmovement.org</a></p>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
@endsection
