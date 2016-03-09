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
                            Total Registrations: {!! $registrations->count() !!}
                        </div>
                    </div>
                    <table class="table table-condensed table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Create Athlete?</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registrations as $registration)
                                <tr class="{!! ($registration->athlete()->first()) ? 'success' : '' !!}">
                                    <td>{!! $registration->id !!}</td>
                                    <td>{!! $registration->first_name . ' ' . $registration->last_name !!}</td>
                                    <td>{!! $registration->email !!}</td>
                                    <td>
                                        <ul class="list-inline">
                                            @if($registration->athlete()->first())
                                                <li>Athlete Already Created</li>
                                            @else
                                                <li>
                                                    {!! Form::open(array('method' => 'post', 'route' => 'admin_athletes_store')) !!}
                                                        {!! Form::hidden('registration_id', $registration->id) !!}
                                                        {!! Form::button('<i class="fa fa-user-plus fa-fw"></i>', array('type' => 'submit', 'class' => 'btn btn-link', 'data-confirm' => "This can't be undeone! Proceed?")) !!}
                                                    {!! Form::close() !!}
                                                </li>
                                            @endif
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
