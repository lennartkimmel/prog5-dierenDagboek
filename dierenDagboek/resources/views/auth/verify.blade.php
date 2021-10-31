@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bevestig je email adres') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Er is een nieuwe verificatielink naar uw e-mailadres verzonden.') }}
                        </div>
                    @endif

                    {{ __('Controleer voordat u verder gaat uw e-mail voor een verificatielink.') }}
                    {{ __('Als je de e-mail niet hebt ontvangen') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik hier om een andere aan te vragen') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
