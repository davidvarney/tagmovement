@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $title !!}</div>

                <div class="panel-body">
                    {!! Form::open(array('route' => array('admin_stations_update', $station->id), 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form')) !!}
                        <div class="form-group{!! $errors->has('name') ? ' has-error' : '' !!}">
                            {!! Form::label('name', 'Name', array('class' => 'control-label col-md-4')) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', (old('name')) ? old('name') : $station->name, array('class' => 'form-control', 'placeholder' => 'First Name    Last Name', 'id' => 'name')) !!}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{!! $errors->has('measurement') ? ' has-error' : '' !!}">
                            {!! Form::label('measurement', 'Measurement', array('class' => 'control-label col-md-4')) !!}
                            <div class="col-md-6">
                                {!! Form::text('measurement', (old('measurement')) ? old('measurement') : $station->measurement, array('class' => 'form-control', 'placeholder' => 'Feet/Inches, lbs, Number Completed, Seconds', 'id' => 'measurement')) !!}
                                @if ($errors->has('measurement'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('measurement') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{!! $errors->has('event_id') ? ' has-error' : '' !!}">
                            {!! Form::label('event_id', 'Event', array('class' => 'control-label col-md-4')) !!}
                            <div class="col-md-6">
                                {!! Form::select('event_id', $events, (old('event_id')) ? old('event_id') : $station->event->id, array('class' => 'form-control', 'id' => 'event_id')) !!}
                                @if ($errors->has('event_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('event_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{!! $errors->has('type') ? ' has-error' : '' !!}">
                            {!! Form::label('type', 'Type', array('class' => 'control-label col-md-4')) !!}
                            <div class="col-md-6">
                                {!! Form::select('type', array('int' => 'Int', 'float' => 'Float'), (old('type')) ? old('type') : $station->type, array('class' => 'form-control', 'id' => 'type')) !!}
                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Update User
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
