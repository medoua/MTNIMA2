@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-25">
            <div class="card">
                <div class="card-header">{{ __('Ajoutez une Organisation') }}</div>

                <div class="card-body">
                <div class="alert alert-success" role="alert">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<!-- message Error -->
@if ($message =Session::get('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
@endif
                    <form method="POST" action="{{ route('Organisation.store') }}">
                    @csrf
                    <!--
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("1 -  Personne Interroée *") }}</label>
                <input id="Pers_Inter" type="text" class="form-control  col-md-8" name="Pers_Inter" value="5" autofocus>
                          
</p> 
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("3 - Temps de remplissage *") }}</label>
                <input id="Temps_remp" type="text" class="form-control  " name="Temps_remp" value="5" autofocus>
            
                    <label for="email" class="col-md-15 col-form-label  text-md+-end">{{ __("0 - Ce formulaire ") }}</label> </br>
                    <input id="Ce_formulair" type="text" class="form-control" name="Ce_formulair" value="" > </br>
--> 
                    <label for="Nom_Org" class="col-md-15 col-form-label  text-md+-end">{{ __("1 - Nom de  l'organisation ") }}</label> </br>
                <!--    <input id="Nom_Org" type="text" class="form-control " name="Nom_Org" value="">  </br> -->
                <select id="Nom_Org" type="text" class="form-select " name="Nom_Org"  >
                <option value="">
                </option>  
                @foreach ($Short_orgs as $it5)
                <option value="{{$it5->nom_org}}" class="form-control">
                {{$it5->nom_org}}
                </option>
                @endforeach
</select>

</p>
                    <label for="Nom_org" class="col-md-15 col-form-label  text-md+-end">{{ __("2 - Secteur d'activité ") }}</label>  
            <div class="alert alert-succes+s" role="alert">
            @foreach ($Secteurs as $item)
                <input class="form-check-input" type="checkbox" name="Secteur_Org1[]" id="Secteur_Org1" value="{{$item->id}}" multiple > {{$item->nom_secteur}} </br>
            @endforeach
</div>
</p>
                <label for="email" class="col-md-15 col-form-label  text-md+-end">{{ __("3 - Missions ") }}</label> </br>
                <input id="Mission_Org" type="text" class="form-control  " name="Mission_Org" value="" > 
</br>
                <label for="Statut" class="col-md-15 col-form-label  text-md+-end">{{ __("4 - Statut") }}</label> 

<div class="alert alert-succes+s" role="alert">
@foreach ($Statuts as $item)
<input class="form-check-input" type="radio" name="Statut_Org" id="Statut_Org" value="{{$item->nom_Statut}}" >  {{$item->nom_Statut}} </br>
  @endforeach

</div>
                <label for="Date_crea" class="col-md-15 col-form-label  text-md+-end">{{ __("5 - Date de création ") }}</label> </br>
                <input id="Date_Org" type="date" class="alert alert-succes+s  " name="Date_Org" value="" > </br>

                <label for="Histo" class="col-md-15 col-form-label  text-md+-end">{{ __("6 - Historique") }}</label> </br>
                <input id="Histo" type="text" class="form-control  " name="Histo" value="" > </br>

                <label for="Siege" class="col-md-15 col-form-label  text-md+-end">{{ __("7 - Siège ") }}</label> </br>
                <input id="Siege_Org" type="text" class="form-control  " name="Siege_Org" value="" > </br>

                <label for="Date_adh_Mauri" class="col-md-15 col-form-label  text-md+-end">{{ __("8 - Date d'adhésion de la Mauritanie ") }}</label> </br>
                <input id="Date_adh_Mauri" type="date" class="alert alert-succes+s " name="Date_adh_Mauri" value="" > </br>

                <label for="Cotisation" class="col-md-15 col-form-label  text-md+-end">{{ __("9 - Cotisation") }}</label> </br>
                <div class="alert alert-succes+s" role="alert">
                <input class="form-check-input" type="radio" name="Cotisation" id="Cotisation" value="avec cotisation" > avec cotisation </br>
                <input class="form-check-input" type="radio" name="Cotisation" id="Cotisation" value="sans cotisation" > sans cotisation  </br> 
</div>
            </p> 

                <label for="Montant_coti" class="col-md-15 col-form-label  text-md+-end">{{ __("10 - Montant de la cotisation") }}</label> </br>
                <input id="Montant_coti" type="text" class="form-control  " name="Montant_coti" value="" > </br>

                <label for="qui_coti" class="col-md-15 col-form-label  text-md+-end">{{ __("11 - qui paie cette cotisation") }}</label> </br> 
                <div class="alert alert-succes+s" role="alert">
                @foreach ($Qui_paie_cotis as $item)
                <input class="form-check-input" type="checkbox" id="Peie_Org" name="Peie_Org0[]"  value="{{$item->id}}" multiple> {{$item->nom_qui_paie_coti}}  </br>
                @endforeach
                </div>
                <label for="qui_coti" class="col-md-15 col-form-label  text-md+-end">{{ __("12 - Etat de la cotisation") }}</label> </br>
                <div class="alert alert-succes+s" role="alert">
                @foreach ($Etat_cotis as $item)
                <input class="form-check-input" type="checkbox" id="Etat_cotise_Org" name="Etat_cotise_Org0[]"  value="{{$item->id}}" multiple>  {{$item->nom_Etat_coti}}  </br>
                @endforeach
</div>
                <label for="email" class="col-md-15 col-form-label  text-md+-end">{{ __("13 - Site Web ") }}</label> </br>
                <input id="Sie_web_Org" type="text" class="form-control  " name="Sie_web_Org" value="" > </br>

                <label for="email" class="col-md-15 col-form-label  text-md+-end">{{ __("14 - contacs ") }}</label> </br>
                <input id="Contacts_Org" type="text" class="form-control  " name="Contacts_Org" value="" > </br>
                
                <label for="email" class="col-md-15 col-form-label  text-md+-end">{{ __("15 - Existent-ils des postes occupés par des responsables mauritaniens ?") }}</label> </br>
                <input id="Postes_ocuup" type="text" class="form-control  " name="Postes_ocuup" value="" > </br>
                 

                <label for="email" class="col-md-15 col-form-label  text-md+-end">{{ __("16 - Existe-t-il une opportunité de candidature mauritanienne à des postes au niveau de cette organisation?") }}</label> </br>
                <input id="Candid_Mau_Org" type="text" class="form-control  " name="Candid_Mau_Org" value="" > </br>
                
                <label for="email" class="col-md-15 col-form-label  text-md+-end">{{ __("17 -Degrès d’importance de cette organisation ou institution? ") }}</label> </br>
                <div class="alert alert-succes+s" role="alert">
@foreach ($Degres_impo_org_insts as $item)
                <input class="form-check-input" type="radio" id="Degres_Org" name="Degres_Org"  value="{{$item->nom_Degres}}" >  {{$item->nom_Degres}}  </br>
@endforeach
</div>
                <label for="email" class="col-md-5 col-form-label  text-md+-end">{{ __("18 - Qui est le point focal au MTNIMA ") }}</label> </br>
                <input id="PF_MTNIMA" type="text" class="form-control" name="PF_MTNIMA" value=""  > </br>
                <div class="row mb-0">
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
