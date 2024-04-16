@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header alert-info">{{ __('Ajoute mission') }}</div>

                <div class="card-body">
                <div class="alert alert-success" role="alert">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div> 
                    @endif
                    <form method="POST" action="{{ route('mission.store') }}" enctype="multipart/form-data">
                    @csrf
                <label for="email" class="col-md-5 col-form-label  text-md+-end">{{ __("1 -  Evenement ") }} <span class="texte-rouge"> * </span></label> </br>
                <input id="Evenement" type="text" class="form-control  col-md-+30" name="Evenement" value="" autofocus> </br>
                
                <label for="Nom_org" class="col-md-5 col-form-label  text-md+-end">{{ __("2 - Secteur d'activité ") }} <span class="texte-rouge"> * </span></label> 
                
                <div class="alert alert-succes+s" role="alert">
            @foreach($Secteurs as $item)
            <input class="form-check-input" type="radio" name="Secteur_mis" id="Secteur_mis" value="{{$item->id}}" required>  {{$item->nom_secteur}} </br>
            @endforeach </div>
<!--
                <input class="form-check-input" type="radio" name="Secteur_mis" id="Secteur_mis" value="Numérique" required>  Numérique </br>
                <input class="form-check-input" type="radio" name="Secteur_mis" id="Secteur_mis" value="Innovation" required>  Innovation </br>
                <input class="form-check-input" type="radio" name="Secteur_mis" id="Secteur_mis" value="Modernisation de L'Administration" required> Modernisation de L'Administration </br>
-->             
                
                <label for="email" class="col-md-+5 col-form-label  text-md+-end">{{ __("3 - Organisation ou l'initiative qui organise cet évenement  ") }}</label> </br>
                <input id="qui_Organise" type="text" class="form-control  " name="qui_Organise" value="Miss" autofocus> </br>

                <label for="email" class="col-md-+5 col-form-label  text-md+-end">{{ __("4 - Lieu  ") }}</label> </br>
                <input id="lieu_mis" type="text" class="form-control  " name="lieu_mis" value="" autofocus> </br>
                
                <label for="email" class="col-md-+5 col-form-label  text-md+-end">{{ __("5 - Date de début  ") }}</label> </br>
                <input id="date_d" type="date" class="form-control  " name="date_d" value="" autofocus> </br>
                <label for="email" class="col-md-+5 col-form-label  text-md+-end">{{ __("6 - Date de fin  ") }}</label> </br>
                <input id="date_f" type="date" class="form-control  " name="date_f" value="" autofocus> </br>

                <label for="email" class="col-md-+30 col-form-label  text-md+-end">{{ __("7 - Le thème de  l'évenement  ") }}</label> </br>
                <input id="theme_evenement" type="text" class="form-control  " name="theme_evenement" value="Miss" autofocus> </br>

                <label for="email" class="col-md-+5 col-form-label  text-md+-end">{{ __("8 - Participants   ") }}</label> </br>
                <input id="Participants" type="text" class="form-control  " name="Participants" value="" autofocus> </br>

                <label for="Statut" class="col-md-5 col-form-label  text-md+-end">{{ __("9 - Nature de prise en charge  ") }}</label> </br>
                <div class="alert alert-succes+s" role="alert">
                <input class="form-check-input" type="radio" name="Nature_prise_en_charge" id="Nature_prise_en_charge" value="Budget Etat">  Budget Etat </br>
                <input class="form-check-input" type="radio" name="Nature_prise_en_charge" id="Nature_prise_en_charge" value="Prise en charge par les organisateurs">  Prise en charge par les organisateurs </br>
                <input class="form-check-input" type="radio" name="Nature_prise_en_charge" id="Nature_prise_en_charge" value="Partage de la prise en charge entre l'Etat et les organisateurs"> Partage de la prise en charge entre l'Etat et les organisateurs </br>
</div>
                <label for="email" class="col-md-5 col-form-label  text-md+-end">{{ __("10 - Ordre de mission   ") }}</label> </br>
                <input id="Ordre_mission" type="file" class="form-control  " name="Ordre_mission" value="" 
                accept="image/*,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" autofocus> </br>

                <label for="email" class="col-md-5 col-form-label  text-md+-end">{{ __("11 - Résumé des idées retenues de cet évenement   ") }}</label> </br>
                <input id="Resume_evenement" type="text" class="form-control  " name="Resume_evenement" value="" autofocus> </br>

                <label for="Statut" class="col-md-5 col-form-label  text-md+-end">{{ __("12 - Pièce jointes   ") }}</label> </br> 
                <div class="alert alert-succes+s" role="alert">
                <input class="form-check-input" type="radio" name="Pieces_Joint" id="Pieces_Joint" value="Rapport de mission">  Rapport de mission </br> 
                <input class="form-check-input" type="radio" name="Pieces_Joint" id="Pieces_Joint" value="Option 2">  Option 2  </br>
</div>
<label for="email" class="col-md-4 col-form-label text-md+-end">{{ __('13 - Lieu du prochain évenement') }}</label>  </br>
                    <input id="lieu_prochain" type="text" class="form-control col-md-+10" name="lieu_prochain" value="" required autocomplete="email" autofocus> </br>

                    <label for="email" class="col-md-4 col-form-label text-md+-end">{{ __('14 - Date du prochain évenement') }}</label> </br>
                    <input id="Date_prochain" type="date" class="form-control" name="Date_prochain" value="" required autocomplete="email" autofocus> </br>
                    
                    
                
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary center">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
  <path d="M11 2H9v3h2z"/>
  <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
</svg>
                                    {{ __('Enregistrer') }}
                                </button>
                                <button type="req" class="btn btn-outline-secondary center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"/>
</svg>
                                    {{ __('Annuler') }}
                                </button>
</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
