@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Secteur d'activité") }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                    <form method="POST" action="{{ route('Secteur_i.store') }}">
                    @csrf
                    <label for="Secteur" class="col-md-5 col-form-label  text-md-end">{{ __("Secteur") }}</label>
</p>
                    <input id="Secteur" type="text" class="form-control  " name="nom_secteur" value="M" required>
             <!--       <textarea id="Secteur" type="text" class="form-control  " name="Secteur" value="" autofocus>
</textarea> -->
                    <button type="submit" class="btn btn-primary center"> {{ __('Ajouter') }} </button>
                    <button type="rest" class="btn btn-secondary center"> {{ __('Annuler') }} </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
