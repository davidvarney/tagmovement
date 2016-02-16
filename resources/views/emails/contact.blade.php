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

                            <p>{!! $data['message'] !!}</p>

                            <p>
                                <em>– {!! $data['name'] !!}</em><br>
                                <em>Email - {!! $data['email'] !!})</em><br>
                                <em>Phone - {!! $data['phone'] !!})</em>
                            </p>

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
