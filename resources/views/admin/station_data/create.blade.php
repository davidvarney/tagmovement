@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $title !!}</div>

                <div class="panel-body">
                    {!! Form::open(array('route' => 'admin_station_data_store', 'method' => 'POST', 'class' => 'form-horizontal', 'role' => 'form')) !!}
                        {!! Form::hidden('station_id', $station_id) !!}
                        <div class="form-group{!! $errors->has('athlete_id') ? ' has-error' : '' !!}">
                            {!! Form::label('athlete_id', 'Athlete ID', array('class' => 'control-label col-md-4')) !!}
                            <div class="col-md-6">
                                {!! Form::text('athlete_id', old('athlete_id'), array('class' => 'form-control', 'placeholder' => '12, 45, 50...', 'id' => 'athlete_id')) !!}
                                @if ($errors->has('athlete_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('athlete_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{!! $errors->has('data') ? ' has-error' : '' !!}">
                            {!! Form::label('data', 'Data', array('class' => 'control-label col-md-4')) !!}
                            <div class="col-md-6">
                                {!! Form::text('data', old('data'), array('class' => 'form-control', 'placeholder' => '39, 22.56, 0...', 'id' => 'data')) !!}
                                @if ($errors->has('data'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Add Station Data
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

@section ('page_js')
    <script type="text/javascript">
        jQuery("#athlete_id").focus();
    </script>
@endsection
