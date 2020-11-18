{{-- Created By Gullian Van Der Walt Nov 2020 --}}

@extends('layouts.app')
@section('content')

<section class="contact-section">

<div class="contact-container">
        {{-- Errors --}}
    @include('includes.errors')
    @include('includes.messages')
    <div class="contact-heading-div">
        <h2 class="grow">Contact</h2>
        <hr class="h2_line">
    </div>

    <div class="contact-details">
        <h3>Contact Details</h3>
        <ul>
            <li><img src="/icons/call.png" alt="Mobile"> <span> 082-839-7273</span></li>
            <li><img src="/icons/email.png" alt="Mobile"> <span> gullianvdwalt1@gmail.com</span></li>
        </ul>
    </div>

    <div class="contact-form-container">
        <h3>Let's Get In Touch</h3>
        {!! Form::open(['url' => '/contact/submit']) !!}
            <div class="form-row">
                {{ Form::label('name','Name & Surname')}}
                {{ Form::text('name')}}
            </div>
            <br>
            <div class="form-row">
                {{ Form::label('mobile','Mobile Number')}}
                {{ Form::text('mobile')}}
            </div>
            <br>
            <div class="form-row">
                {{ Form::label('email','Email Address')}}
                {{ Form::text('email')}}
            </div>
            <br>
            <div class="form-row">
                {{ Form::label('message','Message')}}
                {{ Form::textarea('message')}}
            </div>
            <br>
            {{ Form::submit('Submit',['class'=> 'submit'])}}
        {{ Form::close() }}
    </div>

</div>

</section>


@endsection
