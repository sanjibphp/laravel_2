@extends('layouts.app')


@section('content')
    <h1>Add Post</h1>
    {!! Form::open(['class'=>'', 'action'=>'PostsController@store', 'method'=>'POST']) !!}
        <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class='form-group'>
            {{Form::label("body", 'Body')}}
            {{Form::textarea('body', '', ['id' => 'post-body', 'class'=>'form-control'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection