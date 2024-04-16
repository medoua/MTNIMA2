@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PFTs et coopération Bilatérale') }}</div>

                <form method="POST" action="{{ route('login') }}">
                <label for="email" class="col-md-8 col-form-label  text-md-end">{{ __(" Ce formulaire enregistrera votre nom, veuillez renseigner votre nom") }}</label>
                <input id="form_enr" type="text" class="form-control  col-md-8" name="form_enr" value="" autofocus>
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("1 - Nom de l'Institution ou programme *") }}</label>
                <input id="Nom_Prog" type="text" class="form-control  col-md-8" name="" value="" autofocus>
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("2 - Secteur *") }}</label>
</p>
                <input class="form-check-input" type="checkbox" name="Secteur" id="Secteur">  1 </p>
                <input class="form-check-input" type="checkbox" name="Secteur" id="Secteur">  2 </p>
                <input class="form-check-input" type="checkbox" name="Secteur" id="Secteur">  3 </p>
                <input class="form-check-input" type="checkbox" name="Secteur" id="Secteur">  4 </p>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("3 - Missions *") }}</label>
                <input id="Miss" type="text" class="form-control  " name="" value="" autofocus>
                <label for="Statut" class="col-md-5 col-form-label  text-md-end">{{ __("4. Statut et Type *") }}</label>
</p> <input class="form-check-input" type="radio" name="" id="Statut">  1 </p>
                <input class="form-check-input" type="radio" name="" id="Statut">  1 </p>
                <input class="form-check-input" type="radio" name="" id="Statut">  1 </p>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("5 - Point Focal en Mauritanie *") }}</label>
                <input id="Nom de Programme" type="text" class="form-control  " name="" value="" autofocus>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("6. Historique de coopération avec la mauritanie/MTNIMA") }}</label>
                <input id="Nom de Programme" type="text" class="form-control  " name="His_coop" value="" autofocus>
                
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("6 - Siège *") }}</label>
                <input id="Nom de Programme" type="text" class="form-control  " name="" value="" autofocus>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("7 - Programmes *") }}</label>
                <input id="Nom de Programme" type="text" class="form-control  " name="" value="" autofocus>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("8 - Evénements *") }}</label>
                <input id="Nom de Programme" type="text" class="form-control  " name="" value="" autofocus>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("9 - Financements octroyés ou appuis *") }}</label>
                <input id="Nom de Programme" type="text" class="form-control  " name="" value="" autofocus>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("10 - Site Web *") }}</label>
                <input id="Nom de Programme" type="text" class="form-control  " name="" value="" autofocus>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("11 - contacs *") }}</label>
                <input id="Nom de Programme" type="text" class="form-control  " name="" value="" autofocus>

                <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary center">
                                    {{ __('Enregistrer') }}
                                </button>
                                <button type="submit" class="btn btn- center">
                                    {{ __('Annuler') }}
                                </button>
</form>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
