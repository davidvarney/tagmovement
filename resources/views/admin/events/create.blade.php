@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $title !!}</div>

                <div class="panel-body">
                    {!! Form::open(array('route' => 'admin_events_store', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form')) !!}
                        <div class="form-group{!! $errors->has('name') ? ' has-error' : '' !!}">
                            {!! Form::label('name', 'Name', array('class' => 'control-label col-md-4')) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', old('name'), array('class' => 'form-control', 'placeholder' => 'Event Name', 'id' => 'name')) !!}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Add Event
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
