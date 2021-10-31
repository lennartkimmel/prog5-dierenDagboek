@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if(auth()->user()->role_id==1)
        <div class="col-4 pt-2">
            <table class="table">
                <tbody>
                    <div class="pt-4 pb-2 font-weight-bold a-color-black">
                        <tr>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>Gebruikersnaam</th>
                            <th>Email</th>
                        </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form method="post" action="profiles/{{ $user->id}}">
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Verwijderen</button>
                                    @method('delete')
                                    @csrf
                                </form>
                                {{-- <form method="post" action="profiles/{{ $user->id}}/edit">
                                    <button type="submit" class="btn btn-outline-warning btn-sm">Aanpassen</button>
                                    @csrf
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                    </div>
                </tbody>
            </table>
        </div>
        @else 
            <div> 
                <h3>Er is iets fout gegaan</h3>
                {{-- <div class=backgroundimage> --}}
                    <img class=img-fluid src="https://wallpaper.dog/large/10978609.jpg">
            </div>
        @endif
    </div>   
</div>
@endsection