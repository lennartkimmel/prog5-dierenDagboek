@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
        <div class="col-3 p-10"> 
            <img src="https://media.wired.com/photos/593261cab8eb31692072f129/4:3/w_929,h_697,c_limit/85120553.jpg" width="200px" class="">
        </div>
        <div class="col-9 pt-5">
            <div><h1><strong>{{ Auth::user()->username }}</strong></h1></div>
            <div class="d-flex">
                <div class="pr-5 pl-1"><strong>{{ Auth::user()->likes->count()}}</strong> <strong>Likes</strong></div>
            </div>
        </div>
    </div>
    <div class="row">
        @if(auth()->user()->id==$user->id)   
        <div class="col-4 pt-2">
            <table class="table">
                <thead>
                    <tr>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Gebruikersnaam</th>
                        <th>Email adres</th>
                        <th>Likes</th>
                        <th>Gegevens aanpassen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->likes->count()}}</td>
                        <td><a href="/profiles/{{ Auth::user()->id}}/edit">Aanpassen</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @else <h3>Er is iets fout gegaan</h3>
        @endif
    </div>   
</div>
@endsection
