@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $title !!}</div>

                <div class="panel-body">
                    @foreach ($stations as $station)
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">{!! $station->name !!}</div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                Total Station Data Records: {!! $station->station_data->count() !!}
                                                &nbsp;
                                                <a href="/admin/station_data/create?station_id={!! $station->id !!}"><i class="fa fa-plus fa-fw"></i>Add Station Data</a>
                                            </div>
                                        </div>
                                        <table class="table table-condensed table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Athlete Name</th>
                                                    <th>Data</th>
                                                    <th>Created</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($station->station_data()->get()->count() > 0)
                                                    @foreach ($station->station_data()->get() as $station_data)
                                                        <tr>
                                                            <td>{!! $station_data->id !!}</td>
                                                            <td>{!! $station_data->athlete->registration->first_name . ' ' . $station_data->athlete->registration->last_name !!}</td>
                                                            <td>{!! $station_data->data !!}</td>
                                                            <td>{!! date("m/d/Y @ H:i:s", strtotime($station_data->created_at)) !!}</td>
                                                            <td>
                                                                <ul class="list-inline">
                                                                    <li>
                                                                        {!! Form::open(array('method' => 'delete', 'route' => array('admin_station_data_destroy', $station_data->id))) !!}
                                                                            {!! Form::button('<i class="fa fa-times fa-fw"></i>', array('type' => 'submit', 'class' => 'btn btn-link', 'data-confirm' => "This can't be undeone! Proceed?")) !!}
                                                                        {!! Form::close() !!}
                                                                    </li>
                                                                    <li>
                                                                        <a href="/admin/station_data/{!! $station_data->id !!}/edit"><i class="fa fa-pencil fa-fw"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="5">N/A</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
