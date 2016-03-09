@extends('layouts.admin_app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $title !!}</div>

                <div class="panel-body">
                    {!! Form::open(array('route' => array('admin_users_update', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form')) !!}
                        <div class="form-group{!! $errors->has('name') ? ' has-error' : '' !!}">
                            {!! Form::label('name', 'Name', array('class' => 'control-label col-md-4')) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', (old('name')) ? old('name') : $user->name, array('class' => 'form-control', 'placeholder' => 'First Name    Last Name', 'id' => 'name')) !!}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{!! $errors->has('email') ? ' has-error' : '' !!}">
                            {!! Form::label('email', 'Email', array('class' => 'control-label col-md-4')) !!}
                            <div class="col-md-6">
                                {!! Form::text('email', (old('email')) ? old('email') : $user->email, array('type' => 'email', 'class' => 'form-control', 'placeholder' => 'email@example.com', 'id' => 'email')) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{!! $errors->has('role_id') ? ' has-error' : '' !!}">
                            {!! Form::label('role_id', 'Role', array('class' => 'control-label col-md-4')) !!}
                            <div class="col-md-6">
                                {!! Form::select('role_id', $roles, (old('role_id')) ? old('role_id') : $user->roles()->first()->id, array('class' => 'form-control', 'id' => 'role_id')) !!}
                                @if ($errors->has('role_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role_id') }}</strong>
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
