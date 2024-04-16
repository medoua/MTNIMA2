@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Administateur') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                    </div>
                    @endif
                    <ul class="navbar-nav me-auto">
                    @if(auth()->check() && (auth()->user()->isSuperAdmin() || auth()->user()->isAdmin() ))
                    <a class="navbar-brand success" href="{{ url('/user') }}"> {{ __('user') }} </a> 
                    @endif
                        <a class="navbar-brand" href="{{ url('/OrgList') }}"> {{ __('Organisation') }} </a>
                        <a class="navbar-brand" href="{{ url('/EvenList') }}"> {{ __('Evenement') }} </a>
                        <a class="navbar-brand" href="{{ url('/Secteur_i') }}"> {{ __('Secteur') }} </a>
                        <a class="navbar-brand" href="{{ url('/Statut_Type') }}"> {{ __('Statut et Type') }} </a>
                        <a class="navbar-brand" href="{{ url('/qui_org') }}"> {{ __('Qui Organise cet évenement') }} </a>
                        <a class="navbar-brand" href="{{ url('/Périodicité') }}"> {{ __('Périodicité') }} </a>
                        <a class="navbar-brand" href="{{ url('/participation') }}"> {{ __('Participation') }} </a>
                        <a class="navbar-brand" href="{{ url('/qui_paie_coti') }}"> {{ __('Qui paie cette cotisation') }} </a>
                        <a class="navbar-brand" href="{{ url('/Etat_coti') }}"> {{ __('Etat de la cotisation') }} </a>
                        <a class="navbar-brand" href="{{ url('/Degr_imp') }}"> {{ __('Degrès d’importance de cette organisation ou institution?') }} </a>
                        
                    </ul> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
