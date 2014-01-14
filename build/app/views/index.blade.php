@extends('layouts.common')

@section('title')
    The Monkeys - Technical Compatibility Test Senior Front End Developer + PHP
@stop

@section('body')

{{ Form::model($monkeyform, array('action' => 'MonkeyController@index', 'method' => 'POST')) }}
    <div>
        <strong>{{ Form::label('firstName', 'First Name') }}</strong>

        {{ Form::text('firstName') }}
    </div>
    <div>
        <strong>{{ Form::label('lastName', 'Surname') }}</strong>

        {{ Form::text('lastName') }}
    </div>
    <div>
        <strong>{{ Form::label('email', 'Email Address') }}</strong>

        {{ Form::text('email') }}
    </div>
    <div>
        <strong>{{ Form::label('phone', 'Daytime contact number') }}</strong>

        {{ Form::text('phone') }}
    </div>
    <div>
        <strong>{{ Form::label('address', 'Address') }}</strong>

        {{ Form::text('address') }}
    </div>
    <div>
        <strong>{{ Form::label('suburb', 'Suburb') }}</strong>

        {{ Form::text('suburb') }}
    </div>
    <div>
        <strong>{{ Form::label('state', 'State') }}</strong>

        {{ Form::text('state') }}
    </div>
    <div>
        <strong>{{ Form::label('postcode', 'Postcode') }}</strong>

        {{ Form::text('postcode') }}
    </div>
    <div>
        <strong>{{ Form::label('enquiryType', 'Enquiry type') }}</strong>

        {{ Form::text('enquiryType') }}
    </div>
    <div>
        <strong>{{ Form::label('productName', 'Product name') }}</strong>

        {{ Form::text('productName') }}
    </div>
    <div>
        <strong>{{ Form::label('productSize', 'Product size') }}</strong>

        {{ Form::text('productSize') }}
    </div>
    <div>
        <strong>{{ Form::label('useByDate', 'Use-by date') }}</strong>

        {{ Form::text('useByDate') }}
    </div>
    <div>
        <strong>{{ Form::label('batchCode', 'Batch code') }}</strong>

        {{ Form::text('batchCode') }}
    </div>
    <div>
        <strong>{{ Form::label('enquiry', 'Enquiry') }}</strong>

        {{ Form::text('enquiry') }}
    </div>

{{ Form::close() }}

@stop