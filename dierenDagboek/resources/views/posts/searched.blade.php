@extends('layouts.app')

@section('content')
<div class="container">
    @if(auth()->user()->likes->count() > 4) 
        <div class="container">
            <div class="justify-content-center">
            <div class="mb-1"><strong>{{ $posts->count()}} </strong> posts geplaatst</div>
                
                <div class="card pl-5 pt-1">
                <form action="/post/searched" method="get">
                    <div class="form-group row">
                        <label for="search" class="col-md-4 col-form-label">{{ ('Search:') }}</label>
                        <div class="col-md-6">
                            <input type="search" name="search" class="form-control">
                        </div>
                        <span class="form-group-btn">
                            <button type="submit" class="btn btn-outline-info">Zoeken</button>
                        </span>
                    </div>
                </form>
                
                <form action="/post/filtered" method="post">
                    @csrf

                    <div class="form-group row">
                        <label for="tags_id" class="col-md-4 col-form-label">{{ ('Filter:') }}</label>
                        <div class="col-md-6">
                        <select multiple class="selectpicker" name="tags_id[]" id="tags_id"> 
                                <option value="1">Eten</option>
                                <option value="2">Knuffelen</option>
                                <option value="3">Slapen</option>
                                <option value="4">Spelen</option>
                                <option value="5">Lekker gek doen</option>
                            </select>
                        </div>
                        <button class="btn btn-outline-success">Filter posts!</button>
                    </div>
                </form>
</div>
            </div>
    

    <div class="row pt-5">
        @foreach($posts as $post)
            <div class="col-4 pb-4 mt-1 mr-1 border border-dark">
                <a href="/post/{{ $post->id }}" class="font-weight-bold text-dark">
                    <div class="font-weight-bold">{{$post->caption}}</div>
                </a>
                <a href="/post/{{ $post->id }}" class="font-weight-bold text-muted">
                    <div class="pb-2 font-weight-bold">{{$post->tags->name}}</div> 
                </a>
                <a href="/post/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
                @include('partials.LikeButton', ['post_id' => $post->id, 'liked' => $likes])
            </div>
        @endforeach
    </div>
</div>
    
@elseif(auth()->user()->likes->count() <=4) 

    <div class="container">
        <div class="justify-content-center">
            <div><strong>{{ $posts->count()}} </strong> posts</div>
        </div>

        <div class="row pt-5">
            @foreach($posts as $post)
                <div class="col-4 pb-4 mt-1 mr-1 border border-dark">
                    <a href="/post/{{ $post->id }}" class="font-weight-bold text-dark">
                        <div class="font-weight-bold">{{$post->caption}}</div>
                    </a>
                    <a href="/post/{{ $post->id }}" class="font-weight-bold text-muted">
                        <div class="pb-2 font-weight-bold">{{$post->tags->name}}</div> 
                    </a>
                    <a href="/post/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                    @include('partials.LikeButton', ['post_id' => $post->id, 'liked' => $likes])
                </div>
            @endforeach
        </div>
    </div>

@endif
</div>
@endsection