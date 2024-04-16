@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("1 -  Personne Interroée *") }}</label>
                <input id="Pers_Inter" type="text" class="form-control  col-md-8" name="" value="" autofocus>
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("2 - Nom & Prenom *") }}</label>
                <input id="Pers_Inter" type="text" class="form-control  col-md-8" name="" value="" autofocus>
</p>
                <

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("3 - Temps de remplissage *") }}</label>
                <input id="Temps_remp" type="text" class="form-control  " name="" value="" autofocus>

                <label for="Nom_org" class="col-md-5 col-form-label  text-md-end">{{ __("4 - Nom de  l'organisatiom? *") }}</label>
                <input id="Nom_org" type="text" class="form-control  " name="" value="" autofocus>
                <label for="Nom_org" class="col-md-5 col-form-label  text-md-end">{{ __("4 - Secteur d'activité* ") }}</label>
            </p>
                <input class="form-check-input" type="checkbox" name="Secteur" id="Secteur">  1 </p>
                <input class="form-check-input" type="checkbox" name="Secteur" id="Secteur">  2 </p>
                <input class="form-check-input" type="checkbox" name="Secteur" id="Secteur">  3 </p>
                <input class="form-check-input" type="checkbox" name="Secteur" id="Secteur">  4 </p>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("5 - Missions* ") }}</label>
                <input id="Miss" type="text" class="form-control  " name="" value="" autofocus>
                
                <label for="Statut" class="col-md-5 col-form-label  text-md-end">{{ __("6 - Statut * *") }}</label>
</p>
                <input class="form-check-input" type="radio" name="" id="Statut">  1 </p>
                <input class="form-check-input" type="radio" name="" id="Statut">  2 </p>
                <input class="form-check-input" type="radio" name="" id="Statut">  3 </p>

                <input id="Statut" type="text" class="form-control  " name="" value="" autofocus>

                <label for="Date_crea" class="col-md-5 col-form-label  text-md-end">{{ __("7 - Date de création *") }}</label>
                <input id="Date_crea" type="text" class="form-control  " name="" value="" autofocus>

                <label for="Histo" class="col-md-5 col-form-label  text-md-end">{{ __("8 - Historique") }}</label>
                <input id="Histo" type="text" class="form-control  " name="" value="" autofocus>

                <label for="Siege" class="col-md-5 col-form-label  text-md-end">{{ __("9 - Siège *") }}</label>
                <input id="Siege" type="text" class="form-control  " name="" value="" autofocus>

                <label for="Date_adh_Mauri" class="col-md-5 col-form-label  text-md-end">{{ __("9 - Date d'adhésion de la Mauritanie *") }}</label>
                <input id="Date_adh_Mauri" type="text" class="form-control  " name="" value="" autofocus>

                <label for="cotisation" class="col-md-5 col-form-label  text-md-end">{{ __("9 - cotisation") }}</label>
                <input id="cotisation" type="text" class="form-control  " name="" value="" autofocus>

                <label for="Montant_coti" class="col-md-5 col-form-label  text-md-end">{{ __("9 - Montant de la cotisation") }}</label>
                <input id="Montant_coti" type="text" class="form-control  " name="" value="" autofocus>

                <label for="Montant_coti" class="col-md-5 col-form-label  text-md-end">{{ __("9 - Montant de la cotisation") }}</label>
                <input id="Montant_coti" type="text" class="form-control  " name="" value="" autofocus>

                <label for="qui_coti" class="col-md-5 col-form-label  text-md-end">{{ __("9 - qui paie cette cotisation") }}</label>
                </p>
                <input class="form-check-input" type="checkbox" name="qui_coti" id="qui_coti">  1 </p>
                <input class="form-check-input" type="checkbox" name="qui_coti" id="qui_coti">  2 </p>
                <input class="form-check-input" type="checkbox" name="qui_coti" id="qui_coti">  3 </p>
                <input class="form-check-input" type="checkbox" name="qui_coti" id="qui_coti">  4 </p>
                
                <label for="qui_coti" class="col-md-5 col-form-label  text-md-end">{{ __("9 - Etat de la cotisation") }}</label>
                </p>
                <input class="form-check-input" type="checkbox" name="qui_coti" id="qui_coti">  a jour </p>
                <input class="form-check-input" type="checkbox" name="qui_coti" id="qui_coti">  avec arriérés  (à préciser) </p>
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("10 - Site Web *") }}</label>
                <input id="Nom de Programme" type="text" class="form-control  " name="" value="" autofocus>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("11 - contacs *") }}</label>
                <input id="Nom de Programme" type="text" class="form-control  " name="" value="" autofocus>
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("10 - Existent-ils des postes occupés par des responsables mauritaniens ?") }}</label>
                <input id="Existent" type="text" class="form-control  " name="Existent" value="" autofocus>
                

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("10 - Existe-t-il une opportunité de candidature mauritanienne à des postes au niveau de cette organisation?") }}</label>
                <input id="Existent" type="text" class="form-control  " name="Existent" value="" autofocus>
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("10 -Degrès d’importance de cette organisation ou institution? ") }}</label>
</P>
<input class="form-check-input" type="radio" name="" id="Statut">  1 </p>
                <input class="form-check-input" type="radio" name="" id="Statut">  2 </p>
                <input class="form-check-input" type="radio" name="" id="Statut">  3 </p>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("10 - Qui est le point focal au MTNIMA ") }}</label>
                <input id="qui_Pt" type="text" class="form-control  " name="qui_Pt" value="" autofocus>
                <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary center">
                                    {{ __('Enregistrer') }}
                                </button>
                                <button type="submit" class="btn btn- center">
                                    {{ __('Annuler') }}
                                </button>
</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
