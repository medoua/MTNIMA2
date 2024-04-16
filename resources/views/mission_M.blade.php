@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-">
            <div class="card">
                <div class="card-header">{{ __('Ajoute mission') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                    @foreach ($Missions as $item)
                    <form class="" method="POST" action="{{ route('mission_U', $item->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
            

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("1 -  Evenement *") }}</label> </br>
                <input id="Evenement" type="text" class="form-control  col-md-8" name="Evenement" value="{{$item->Evenement}}" autofocus> </br>
                
                <label for="Nom_org" class="col-md-15 col-form-label  text-md-">{{ __("2 - Secteur d'activité* ") }}</label> </br>
            </p>@foreach ($Secteurs as $item1)
                <input class="form-check-input" type="radio" name="Secteur_mis" id="Secteur_mis" value="{{$item1->nom_secteur}}"
                @if(collect($Missions)->contains('Secteur_mis', $item1->nom_secteur))
                checked
                @endif
                > {{$item1->nom_secteur}} </br>
                @endforeach
                
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("3 -Organisation ou l'initiative qui organise cet évenement * ") }}</label>
                <input id="qui_Orgqnise" type="text" class="form-control  " name="qui_Orgqnise" value="{{$item->qui_Organise}}" autofocus>

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("4 - Lieu * ") }}</label>
                <input id="lieu_mis" type="text" class="form-control  " name="lieu_mis" value="{{$item->lieu_mis}}" autofocus>
                
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("5 -Date de début * ") }}</label>
                <input id="date_d" type="date" class="form-control col-md-3" name="date_d" value="{{$item->date_d}}" autofocus>
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("6 -Date de fin * ") }}</label>
                <input id="date_f" type="date" class="form-control col-md-3" name="date_f" value="{{$item->date_f}}" autofocus>

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("7 -Le thème de  l'évenement * ") }}</label> </br>
                <input id="theme_evenement" type="text" class="form-control  " name="theme_evenement" value="{{$item->theme_evenement}}" autofocus> </br>

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("8 - Participants  * ") }}</label> </br>
                <input id="Participants" type="text" class="form-control  " name="Participants" value="{{$item->Participants}}" autofocus>  </br>
                
                <label for="Statut" class="col-md-15 col-form-label  text-md-">{{ __("9 - Nature de prise en charge  *") }}</label></br>
</p>
                <input class="form-check-input" type="radio" name="Nature_prise_en_charge" id="Nature_prise_en_charge" value="Budget Etat"
                @if(collect($Missions)->contains('Nature_prise_en_charge', "Budget Etat"))  checked   @endif >  Budget Etat </br>
                <input class="form-check-input" type="radio" name="Nature_prise_en_charge" id="Nature_prise_en_charge" value="Prise en charge par les organisateurs" 
                @if(collect($Missions)->contains('Nature_prise_en_charge', "Prise en charge par les organisateurs"))  checked   @endif >  Prise en charge par les organisateurs </br>
                <input class="form-check-input" type="radio" name="Nature_prise_en_charge" id="Nature_prise_en_charge" value="Partage de la prise en charge entre l'Etat et les organisateurs"
                @if(collect($Missions)->contains('Nature_prise_en_charge', "Partage de la prise en charge entre l'Etat et les organisateurs"))  checked   @endif 
                > Partage de la prise en charge entre l'Etat et les organisateurs </br>

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("10 - Ordre de mission  * ") }}</label></br>
                <a href="/Uploads/Mission/{{$item->Ordre_mission}}">  {{$item->Ordre_mission}}
                     </a> </br>
                <input id="Ordre_mission" type="file" class="form-control  col-md-8" name="Ordre_mission" >

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("11 - Résumé des idées retenues de cet évenement  * ") }}</label></br>
                <input id="Resume_evenement" type="text" class="form-control  " name="Resume_evenement" value="{{$item->Resume_evenement}}" autofocus>

                <label for="Statut" class="col-md-15 col-form-label  text-md-">{{ __("12 - Pièce jointes   *") }}</label> </br>
                <input class="form-check-input" type="radio" name="Pieces_Joint" id="Pieces_Joint" value="Rapport de mission"
                @if(collect($Missions)->contains('Pieces_Joint', "Rapport de mission"))  checked   @endif>  Rapport de mission </br>
                <input class="form-check-input" type="radio" name="Pieces_Joint" id="Pieces_Joint" value="Option 2"
                @if(collect($Missions)->contains('Pieces_Joint', "Option 2"))  checked   @endif
                >  Option 2 </br>
</p>
<label for="email" class="col-md-4 col-form-label text-md+-end">{{ __('7. Lieu du prochain évenement') }}</label>  </br>
                    <input id="lieu_prochain" type="text" class="form-control col-md-10" name="lieu_prochain" value="{{$item->lieu_prochain}}" required autocomplete="email" autofocus> </br>

                    <label for="email" class="col-md-4 col-form-label text-md+-end">{{ __('8. Date du prochain évenement') }}</label> </br>
                    <input id="Date_prochain" type="date" class="form-control" name="Date_prochain" value="{{$item->Date_prochain}}" required autocomplete="email" autofocus> </br>

               @endforeach 
                
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary center">
                                    {{ __('Enregistrer') }}
                                </button>
                                <button type="req" class="btn btn-secondary center">
                                    {{ __('Annuler') }}
                                </button>
</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
