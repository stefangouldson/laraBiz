@extends('layouts.app')

@section('content')
<div class="container">
    {{ Form:: open( ['action' => 'ListingController@store', 'method'=>'POST'])}}
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        {{ Form::text('name','',['class'=>'form-control', 'placeholder'=>'Name of Business']) }}
    </div>
    <div class="form-group">
        <label for="address">Address</label>
      {{ Form::text('address','',['class'=>'form-control', 'placeholder'=>'Address of Business']) }}
    </div>
    <div class="form-group">
        <label for="website">Website</label>
        {{ Form::text('website','',['class'=>'form-control', 'placeholder'=>'Enter Website URL']) }}
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        {{ Form::email('email','',['class'=>'form-control', 'placeholder'=>'Enter Email']) }}
    </div>
    <div class="form-group">
        <label for="phone">Phone Number</label>
        {{ Form::number('phone','',['class'=>'form-control', 'placeholder'=>'Enter Business Number']) }}
    </div>
    <div class="form-group">
        <label for="bio">Bio</label>
        {{ Form::text('bio','',['class'=>'form-control', 'placeholder'=>'Summary of your Business']) }}
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
{{ Form::close() }}
</div>


@endsection
