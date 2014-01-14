@extends('layouts.common')

@section('title')
    The Monkeys - Technical Compatibility Test Senior Front End Developer + PHP
@stop

@section('body')

    <p>Thank you for submitting your enquiry. A summary of data sent is listed below.</p>
    <div>
        First Name:    {{ $monkeyform->firstName }}   <br>
        Last Name:     {{ $monkeyform->lastName }}    <br>
        Email:         {{ $monkeyform->email }}       <br>
        Phone:         {{ $monkeyform->phone }}       <br>
        Address:       {{ $monkeyform->address }}     <br>
        Suburb:        {{ $monkeyform->suburb }}      <br>
        State:         {{ $monkeyform->state }}       <br>
        Postcode:      {{ $monkeyform->postcode }}    <br>
        Enquiry Type:  {{ $monkeyform->enquiryType }} <br>
        Product Name:  {{ $monkeyform->productName }} <br>
        Product Size:  {{ $monkeyform->productSize }} <br>
        Use-by Date:   {{ $monkeyform->useByDate }}   <br>
        Batch Code:    {{ $monkeyform->batchCode }}   <br>
        Enquiry:       {{ $monkeyform->enquiry }}
    </div>

@stop