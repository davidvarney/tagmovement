@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $title !!}</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            Total Stationss: {!! $stations->count() !!}
                            &nbsp;
                            <a href="/admin/stations/create"><i class="fa fa-plus fa-fw"></i>Add Station</a>
                        </div>
                    </div>
                    <table class="table table-condensed table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Event</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stations as $station)
                                <tr>
                                    <td>{!! $station->id !!}</td>
                                    <td>{!! $station->name !!}</td>
                                    <td>{!! $station->event->name !!}</td>
                                    <td>
                                        {{--@if (Auth::user()->level() > 4)--}}

                                        {{--@endif--}}

                                        {{--{!! Form::open(array('method' => 'post', 'route' => array('admin_users_ban', $user->id), 'class' => 'pull-left')) !!}
                                            {!! Form::button('<i class="fa fa-ban fa-fw"></i>', array('type' => 'submit', 'class' => 'btn btn-link', 'data-confirm' => "Are you sure you wish to ban this user?")) !!}
                                        {!! Form::close() !!}--}}
                                        <ul class="list-inline">
                                            <li>
                                                {!! Form::open(array('method' => 'delete', 'route' => array('admin_stations_destroy', $station->id))) !!}
                                                    {!! Form::button('<i class="fa fa-times fa-fw"></i>', array('type' => 'submit', 'class' => 'btn btn-link', 'data-confirm' => "This can't be undeone! Proceed?")) !!}
                                                {!! Form::close() !!}
                                            </li>
                                            <li>
                                                <a href="/admin/stations/{!! $station->id !!}/edit"><i class="fa fa-pencil fa-fw"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
