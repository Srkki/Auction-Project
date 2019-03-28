@extends('layouts.dashboard')

@section('content')

<h3>Create stamp</h3>

{!! Form::open(['action' => 'StampController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('collection', 'Collection')}}
        {{Form::text('collection', '', ['class' => 'form-control', 'placeholder'=>'Collection'])}}
    </div>
    <div class="form-group">
        {{Form::label('price', 'Price')}}
        {{Form::text('price', '', ['class' => 'form-control', 'placeholder'=>'Price'])}}
    </div>
    <div class="form-group">
        {{Form::file('stamp_image')}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection