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
                            Total Subscribers: {!! $newsletter_subscribers->count() !!}
                            &nbsp;
                            {!! Form::open(array('route' => 'admin_newsletter_subscribers_store', 'method' => 'POST')) !!}
                                {!! Form::button('Add Subscribers From Registrations', array('type' => 'submit', 'class' => 'btn btn-primary')) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <table class="table table-condensed table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Unsubscribe</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newsletter_subscribers as $newsletter_subscriber)
                                <tr class="{!! ((int)$newsletter_subscriber->unsubscribe == 1) ? 'warning' : '' !!}">
                                    <td>{!! $newsletter_subscriber->id !!}</td>
                                    <td>{!! $newsletter_subscriber->first_name . ' ' . $newsletter_subscriber->last_name !!}</td>
                                    <td>{!! $newsletter_subscriber->email !!}</td>
                                    <td>
                                        <ul class="list-inline">
                                            <li>
                                                {!! Form::open(array('method' => 'post', 'route' => array('admin_newsletter_subscribers_unsubscribe', $newsletter_subscriber->id))) !!}
                                                    @if((int)$newsletter_subscriber->unsubscribe == 0)
                                                        {!! Form::button('<i class="fa fa-user-times fa-fw"></i>', array('type' => 'submit', 'class' => 'btn btn-link')) !!}
                                                    @else
                                                        {!! Form::button('<i class="fa fa-user-plus fa-fw"></i>', array('type' => 'submit', 'class' => 'btn btn-link')) !!}
                                                    @endif
                                                {!! Form::close() !!}
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li>
                                                {!! Form::open(array('method' => 'delete', 'route' => array('admin_newsletter_subscribers_destroy', $newsletter_subscriber->id))) !!}
                                                    {!! Form::button('<i class="fa fa-times fa-fw"></i>', array('type' => 'submit', 'class' => 'btn btn-link', 'data-confirm' => "This can't be undeone! Proceed?")) !!}
                                                {!! Form::close() !!}
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
