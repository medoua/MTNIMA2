@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajoute mission') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                    <form method="POST" action="{{ route('mission.store') }}">
                    @csrf
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("1 -  Evenement *") }}</label>
                <input id="Evenement" type="text" class="form-control  col-md-8 subscribe" name="Evenement" value="5" autofocus>
                
                <label for="Nom_org" class="col-md-5 col-form-label  text-md-end">{{ __("2 - Secteur d'activité* ") }}</label>
            </p>
                <input class="form-check-input" type="radio" name="Secteur_mis" id="" value="74" required>  Numérique </p>
                <input class="form-check-input" type="radio" name="Secteur_mis" id="" value="74" required>  Innovation </p>
                <input class="form-check-input" type="radio" name="Secteur_mis" id="" value="74" required> Modernisation de L'Administration </p>
                
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("3 - Organisation ou l'initiative qui organise cet évenement * ") }}</label>
                <input id="qui_Organise" type="text" class="form-control  " name="qui_Organise" value="Miss" autofocus>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("4 - Lieu * ") }}</label>
                <input id="lieu_mis" type="text" class="form-control  " name="lieu_mis" value="8dff" autofocus>
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("5 -Date de début * ") }}</label>
                <input id="date_d" type="date" class="form-control  " name="date_d" value="12/02/2023" autofocus>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("6 -Date de fin * ") }}</label>
                <input id="date_f" type="date" class="form-control  " name="date_f" value="12/02/2023" autofocus>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("7 -Le thème de  l'évenement * ") }}</label>
                <input id="theme_evenement" type="text" class="form-control  " name="theme_evenement" value="Miss" autofocus>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("8 -Participants  * ") }}</label>
                <input id="Participants" type="text" class="form-control  " name="Participants" value="Miss" autofocus>
                
                <label for="Statut" class="col-md-5 col-form-label  text-md-end">{{ __("9 - Nature de prise en charge  *") }}</label>
</p>
                <input class="form-check-input" type="radio" name="Nature_prise_en_charge" id="Nature_prise_en_charge" value="Budget Etat"> Budget Etat </p>
                <input class="form-check-input" type="radio" name="Nature_prise_en_charge" id="Nature_prise_en_charge" value="Prise en charge par les organisateurs"> Prise en charge par les organisateurs </p>
                <input class="form-check-input" type="radio" name="Nature_prise_en_charge" id="Nature_prise_en_charge" value="Partage de la prise en charge entre l'Etat et les organisateurs"> Partage de la prise en charge entre l'Etat et les organisateurs </p>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("10 -Ordre de mission  * ") }}</label>
                <input id="Ordre_mission" type="file" class="form-control  " name="Ordre_mission" value="Miss" autofocus>

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("11 -Résumé des idées retenues de cet évenement  * ") }}</label>
                <input id="Resume_evenement" type="text" class="form-control  " name="Resume_evenement" value="Miss" autofocus>

                <label for="Statut" class="col-md-5 col-form-label  text-md-+end">{{ __("12- Pièce jointes   *") }}</label> </br>
                <input class="form-check-input " type="radio" name="Pieces_Joint" id="Pieces_Joint" value="Rapport de mission">  Rapport de mission </br>
                <input class="form-check-input" type="radio" name="Pieces_Joint" id="Pieces_Joint" value="Option 2">  Option 2 </br>
</p>
 

                
                
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary center">
                                    {{ __('Enregistrer') }}
                                </button>
                                <button type="req" class="btn btn- center">
                                    {{ __('Annuler') }}
                                </button>
</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
