@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PFTs et coopération Bilatérale') }}</div>

                <form method="POST" action="{{ route('Ptfs.store') }}">
                @csrf
                <!--
                <label for="email" class="col-md-8 col-form-label  text-md-end">{{ __(" Ce formulaire enregistrera votre nom, veuillez renseigner votre nom") }}</label>
                <input id="form_enr" type="text" class="form-control  col-md-8" name="form_enr" value="5" autofocus>
                ************* -->
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("1 - Nom de l'Institution ou programme *") }}</label>
                <input id="nom_ins" type="text" class="form-control  col-md-8" name="nom_ins" value="7" autofocus>
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("2 - Secteur *") }}</label>
</p>
                <input class="form-check-input" type="checkbox" name="Secteur_PTFS" id="Secteur_PTFS">  1 </p>
                <input class="form-check-input" type="checkbox" name="Secteur_PTFS" id="Secteur_PTFS">  2 </p>
                <input class="form-check-input" type="checkbox" name="Secteur_PTFS" id="Secteur_PTFS">  3 </p>
                <input class="form-check-input" type="checkbox" name="Secteur_PTFS" id="Secteur_PTFS">  4 </p>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("3 - Missions *") }}</label>
                <input id="Mission__PTFs" type="text" class="form-control  " name="Mission__PTFs" value="8" autofocus>
                <label for="Statut" class="col-md-5 col-form-label  text-md-end">{{ __("4. Statut et Type *") }}</label>
</p> 
<input class="form-check-input" type="radio" name="Statut_Type" id="Statut_Type">  1 </p>
                <input class="form-check-input" type="radio" name="Statut_Type" id="Statut_Type">  1 </p>
                <input class="form-check-input" type="radio" name="Statut_Type" id="Statut_Type">  1 </p>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("5 - Point Focal en Mauritanie *") }}</label>
                <input id="Point_focal" type="text" class="form-control  " name="Point_focal" value="9" autofocus>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("6. Historique de coopération avec la mauritanie/MTNIMA") }}</label>
                <input id="Hist_Coop" type="text" class="form-control  " name="Hist_Coop" value="6" autofocus>
                
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("6 - Siège *") }}</label>
                <input id="Siege_PTFs" type="text" class="form-control  " name="Siege_PTFs" value="7" autofocus>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("7 - Programmes *") }}</label>
                <input id="programme" type="text" class="form-control  " name="programme" value="8" autofocus>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("8 - Evénements *") }}</label>
                <input id="Evenements" type="text" class="form-control  " name="Evenements" value="5" autofocus>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("9 - Financements octroyés ou appuis *") }}</label>
                <input id="Finnacements " type="text" class="form-control  " name="Finnacements" value="8" autofocus>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("10 - Site Web *") }}</label>
                <input id="Site_web_PTFs" type="text" class="form-control  " name="Site_web_PTFs" value="6" autofocus>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("11 - contacs *") }}</label>
                <input id="Contacts_PTFs" type="text" class="form-control  " name="Contacts_PTFs" value="9" autofocus>

                <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary center">
                                    {{ __('Enregistrer') }}
                                </button>
                                <button type="re" class="btn btn-second center">
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
