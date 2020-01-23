@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-3">
                        @if($post->cover_image == "")
                            <image src="/storage/cover_images/no_image.jpg" style="width:200px;">
                        @else
                            <image src="/storage/cover_images/{{$post->cover_image}}" style="width:200px;">
                        @endif                        
                    </div>
                    <div class="col-md-9">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Post Found!!</p>        
    @endif
@endsection