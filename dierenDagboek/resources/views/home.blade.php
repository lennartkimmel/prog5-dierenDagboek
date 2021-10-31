@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-10"> 
            <img src="https://media.wired.com/photos/593261cab8eb31692072f129/4:3/w_929,h_697,c_limit/85120553.jpg" class="">
        </div>
        <div class="col-9 pt-5">
            <div><h1><strong>{{ Auth::user()->username }}</strong></h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong> 12</strong><strong> posts</strong></div>
                <div class="pr-5"><strong> {{ Auth::user()->likes->count()}}</strong> <strong>Likes</strong></div>
            </div>
        </div>
    </div>
</div>
@endsection
