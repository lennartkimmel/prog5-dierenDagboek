@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4 pt-2">
            <h2>{{ $post->caption}}</h2>
            <h5>created by {{ $post->created_by}}</h5>
            <p>{{ $post->tags->name}}<p>
            <p><strong>{{$post->liked->count()}}</strong> likes voor dit diertje</p>  
            <p>{{ $post->text}}</p>  

        </div>
        <div class="col-4 pt-2 font-weight-bold">
            <a class="btn btn-primary" href="/post">Terug naar alle posts</a>
    </div>
</div>
@endsection
