@extends('layouts.app')


@section('content')
    <h1>Update the Post</h1>
    {!! Form::open(['class'=>'', 'action'=>['PostsController@update', $post->id], 'method'=>'POST']) !!}
        <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class='form-group'>
            {{Form::label("body", 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'post-body', 'class'=>'form-control'])}}
        </div>
        <div class='form-group'>
            {{Form::label('cover_image', 'Cover Image: ')}}
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection