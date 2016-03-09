@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $title !!}</div>
                <div class="row">
                    <div class="col-md-6">{{-- BEGIN - LATEST REGISTRATIONS --}}
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel-heading">Latest Registrations</div>

                                <div class="panel-body">
                                    <table class="table table-condensed table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Created</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <span class="pull-right">
                                                        Total Registrations: {!! $registrations_count !!}
                                                    </span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @if ($latest_registrations && $latest_registrations->count() > 0)
                                                @foreach ($latest_registrations as $lr)
                                                    <tr>
                                                        <td>{!! $lr->first_name . ' ' . $lr->last_name!!}</td>
                                                        <td>{!! date('m/d/Y @ H:i:s', strtotime($lr->created_at)) !!}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="2">N/A</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>{{-- END - LATEST REGISTRATIONS --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
