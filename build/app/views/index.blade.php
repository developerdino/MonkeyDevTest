@extends('layouts.common')

@section('title')
    The Monkeys - Technical Compatibility Test Senior Front End Developer + PHP
@stop

@section('body')

@if (count($errors->all()))
<div class="error">
    Please correct the following errors:<br>
@foreach($errors->all() as $error)
    {{ $error }}<br>
@endforeach
</div>
@endif

{{ Form::model($monkeyform, array('action' => 'MonkeyController@index', 'method' => 'POST')) }}
    <div>
        <strong class="required">{{ Form::label('firstName', 'First Name') }}</strong>

        {{ Form::text('firstName', Input::old('firstName'), array('required')) }}
    </div>
    <div>
        <strong class="required">{{ Form::label('lastName', 'Surname') }}</strong>

        {{ Form::text('lastName', Input::old('lastName'), array('required')) }}
    </div>
    <div>
        <strong class="required">{{ Form::label('email', 'Email Address') }}</strong>

        {{ Form::text('email', Input::old('email'), array('required')) }}
    </div>
    <div>
        <strong class="required">{{ Form::label('phone', 'Daytime contact number') }}</strong>

        {{ Form::text('phone', Input::old('phone'), array('required')) }}
    </div>
    <div>
        <strong class="required">{{ Form::label('address', 'Address') }}</strong>

        {{ Form::text('address', Input::old('address'), array('required')) }}
    </div>
    <div>
        <strong class="required">{{ Form::label('suburb', 'Suburb') }}</strong>

        {{ Form::text('suburb', Input::old('suburb'), array('required')) }}
    </div>
    <div>
        <strong class="required">{{ Form::label('state', 'State') }}</strong>

        {{ Form::select('state', array('ACT','NSW','NT','QLD','SA','TAS','VIC','WA'), Input::old('state'), array('required')) }}
    </div>
    <div>
        <strong class="required">{{ Form::label('postcode', 'Postcode') }}</strong>

        {{ Form::text('postcode', Input::old('postcode'), array('required')) }}
    </div>
    <div>
        <strong class="required">{{ Form::label('enquiryType', 'Enquiry type') }}</strong>

        {{ Form::select('enquiryType', array('General enquiry' => 'General enquiry','Product feedback or enquiry' => 'Product feedback or enquiry','Product complaint' => 'Product complaint'), Input::old('enquiryType'), array('required')) }}
    </div>
    <div>
        <strong>{{ Form::label('productName', 'Product name') }}</strong>

        {{ Form::text('productName', Input::old('productName')) }}
    </div>
    <div>
        <strong>{{ Form::label('productSize', 'Product size') }}</strong>

        {{ Form::text('productSize', Input::old('productSize')) }}
    </div>
    <div>
        <strong>{{ Form::label('useByDate', 'Use-by date') }}</strong>

        {{ Form::text('useByDate', Input::old('useByDate')) }}
    </div>
    <div>
        <strong>{{ Form::label('batchCode', 'Batch code') }}</strong>

        {{ Form::text('batchCode', Input::old('batchCode')) }}
    </div>
    <div>
        <strong>{{ Form::label('enquiry', 'Enquiry') }}</strong>

        {{ Form::textarea('enquiry', Input::old('enquiry')) }}
    </div>

    <div>
        {{ Form::submit('Send Enquiry') }}
    </div>
{{ Form::close() }}

@stop