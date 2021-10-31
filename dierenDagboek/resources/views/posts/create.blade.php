@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
    @if(auth()->user()->role_id==1)
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

            <div class="row">
                <h1>Voeg een nieuwe post toe</h1>
            </div>

            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label">{{ ('Post bijschrift') }}</label>
            
                <div class="col-md-6">
                    <input id="caption" 
                    type="text" 
                    class="form-control @error('caption') is-invalid @enderror" 
                    name="caption" 
                    value="{{ old('caption') }}"  
                    autocomplete="name" 
                    autofocus>
            
                    @error('caption')
                    <span class="invalid-feedback"               
                        role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
            <div class= "form-group row">
                <label for="image" class="col-md-4 col-form-label">{{ ('Afbeelding') }}</label>

                <div class="col-md-6">
                    <input id="image"  
                    type="file"
                    class="form-control-file"                     
                    name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="tags_id" class="col-md-4 col-form-label">{{ ('Voeg een tag toe') }}</label>
                <div class="col-md-6">
                    <select class="custom-select" name="tags_id" id="tags_id">
                        <option value="" selected="" disabled="" hidden="">Selecteer een tag...</option>
                        <option value="1">Eten</option>
                        <option value="2">Knuffelen</option>
                        <option value="3">Slapen</option>
                        <option value="4">Spelen</option>
                        <option value="5">Lekker gek doen</option>
                    </select><br>
            
                    @error('tags_id')
                        <strong>Een tag is verplicht!</strong>
                    @enderror
                </div>
            </div>

            <div> 
            <div class="form-group row">
                <label for="text" class="col-md-4 col-form-label">{{ ('Post tekst') }}</label>
            
                <div class="col-md-6">
                    <input id="text" 
                    type="text" 
                    class="form-control @error('text') is-invalid @enderror" 
                    name="text" 
                    value="{{ old('text') }}"  
                    autocomplete="name" 
                    autofocus>
            
                    @error('text')
                    <span class="invalid-feedback"               
                        role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            </div>

            <div class="row pt-3">
                <button class="btn btn-outline-success pd-1 mb-4">Voeg post toe</button>
            </div>
        </div>
    </form>
    @else <h3>Er is iets fout gegaan</h3>
    @endif
</div>
</div>
@endsection
