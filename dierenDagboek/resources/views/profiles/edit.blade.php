@extends('layouts.app')

@section('content')
<div class="container">
    @if(auth()->user()->id==$user->id)
    <form action="/profiles/{{ $user->id }}" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

            <div class="row">
                <h1>Pas je profiel aan</h1>
            </div>

            <div class="form-group row">
                <label for="first_name" class="col-md-4 col-form-label">{{ ('Voornaam') }}</label>
            
                <div class="col-md-6">
                    <input id="first_name" 
                    type="text" 
                    class="form-control @error('first_name') is-invalid @enderror" 
                    name="first_name" 
                    value="{{ old('first_name') ?? $user->first_name}}"  
                    autocomplete="name" 
                    autofocus>
            
                    @error('first_name')
                    <span class="invalid-feedback"               
                        role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="last_name" class="col-md-4 col-form-label">{{ ('Achternaam') }}</label>
            
                <div class="col-md-6">
                    <input id="last_name" 
                    type="text" 
                    class="form-control @error('last_name') is-invalid @enderror" 
                    name="last_name" 
                    value="{{ old('last_name') ?? $user->last_name}}"  
                    autocomplete="name" 
                    autofocus>
            
                    @error('last_name')
                    <span class="invalid-feedback"               
                        role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label">{{ ('Gebruikersnaam') }}</label>
            
                <div class="col-md-6">
                    <input id="username" 
                    type="text" 
                    class="form-control @error('username') is-invalid @enderror" 
                    name="username" 
                    value="{{ old('username') ?? $user->username}}"  
                    autocomplete="name" 
                    autofocus>
            
                    @error('username')
                    <span class="invalid-feedback"               
                        role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
           
            <div class="row pt-3">
                <button class="btn btn-outline-success">Opslaan</button>
            </div>
        </div>
    </form>
    @else <h3>Er is iets fout gegaan</h3>
    @endif
</div>
@endsection