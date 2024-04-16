@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-"> 
            <div class="card">
                <div class="card-header">{{ __('Modifie') }}</div>

                <div class="card-body">
                    
                <div class="alert alert-success" role="alert">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($Organisations as $item)
                    <form method="PUT" action="{{ route('Organisation_U', $item->id) }}">
                    @csrf
                    @method('PUT')
                    
                    <!--
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("1 -  Personne Interroée *") }}</label>
                <input id="Pers_Inter" type="text" class="form-control  col-md-8" name="Pers_Inter" value="" autofocus>
                          
</p>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("3 - Temps de remplissage *") }}</label>
                <input id="Temps_remp" type="text" class="form-control  " name="Temps_remp" value="" autofocus>
            
                <label for="email" class="col-md-5 col-form-label  text-md-">{{ __("3 - Ce_formulair ") }}</label>
                <input id="Ce_formulair" type="text" class="myTabContent form-control  " name="Ce_formulair" value="{{$item->Ce_formulair}} " >
--> 
                <label for="Nom_Org" class="col-md-5 col-form-label  text-md-">{{ __("1 - Nom de  l'organisation? *") }}</label>
                <input id="Nom_Org" type="text" class="form-control " name="Nom_Org" value="{{$item->Nom_Org}}">
                
                <label for="Nom_org" class="col-md-5 col-form-label  text-md-">{{ __("2 - Secteur d'activité* ") }}</label>
            
                <div class="alert alert-succes+s" role="alert">
            
                @foreach ($Secteurs as $item1) 
                <input class="form-check-input" type="checkbox" name="Secteur_Org0[]" id="Secteur_Org" value="{{$item1->id}}" 
                @if(collect($Qrg_sects)->contains('id_sect', $item1->id))
                checked
                @endif
                > {{$item1->nom_secteur}} </br>
                @endforeach
</div>
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("3 - Missions* ") }}</label>
                <input id="Mission_Org" type="text" class="form-control  " name="Mission_Org" value="{{$item->Mission_Org}}" >
                
                <label for="Statut" class="col-md-15 col-form-label  text-md-">{{ __("4 - Statut") }}</label>
                <div class="alert alert-succes+s" role="alert">
                @foreach ($Statuts as $item2)
                <input class="form-check-input alert" type="radio" name="Statut_Org" id="Statut_Org" value="{{$item2->nom_Statut}}" 
                @if(collect($Organisations)->contains('Statut_Org', $item2->nom_Statut))
                checked
                @endif 
                >  {{$item2->nom_Statut}} </br>
                @endforeach
</div>
                <label for="Date_crea" class="col-md-15 col-form-label  text-md-">{{ __("5 - Date de création *") }}</label>
                <!-- <input id="Date_Org" type="date" class="form-contro+l" name="Date_Org" value="{{ $item->Date_Org ? \Carbon\Carbon::parse($item->Date_Org)->format('Y-m-d') : '' }}">
--> </br>
                <input id="Date_Org" type="Date" class="form-control" name="Date_Org" value="{{$item->Date_Org}}" >

                <label for="Histo" class="col-md-15 col-form-label  text-md-">{{ __("6 - Historique") }}</label>
                <input id="Histo" type="text" class="form-control  " name="Histo" value="{{$item->Histo}}" >

                <label for="Siege" class="col-md-15 col-form-label  text-md-">{{ __("7 - Siège *") }}</label>
                <input id="Siege_Org" type="text" class="form-control  " name="Siege_Org" value="{{$item->Siege_Org}}" >

                <label for="Date_adh_Mauri" class="col-md-15 col-form-label  text-md-">{{ __("8 - Date d'adhésion de la Mauritanie *") }}</label>
                <input id="Date_adh_Mauri" type="date" class="form-control  " name="Date_adh_Mauri" value="{{$item->Date_adh_Mauri}}" >

                <label for="Cotisation" class="col-md-15 col-form-label  text-md-">{{ __("9 - cotisation") }}</label>
            </br>
            <div class="alert alert-succes+s" role="alert">
                <input class="form-check-input" type="radio" name="Cotisation" id="Cotisation" value="avec cotisation" 
                @if(collect($Organisations)->contains('Cotisation', "avec cotisation"))    checked
                @endif
                > avec cotisation </br>
                <input class="form-check-input" type="radio" name="Cotisation" id="Cotisation" value="sans cotisation" 
                @if(collect($Organisations)->contains('Cotisation', "sans cotisation"))   checked
                @endif
                > sans cotisation  </br> 
</div>
                <label for="Montant_coti" class="col-md-15 col-form-label  text-md-">{{ __("10 - Montant de la cotisation") }}</label>
                <input id="Montant_coti" type="text" class="form-control  " name="Montant_coti" value="{{$item->Montant_coti}}" >

                <label for="qui_coti" class="col-md-15 col-form-label  text-md-">{{ __("11 - qui paie cette cotisation") }}</label>
                <div class="alert alert-succes+s" role="alert">
                @foreach ($Qui_paie_cotis as $item3)
                <input class="form-check-input" type="checkbox" id="Peie_Org" name="Peie_Org0[]"  value="{{$item3->id}}" 
                @if(collect($Qui_paie_orgs)->contains('id_qui_paie', $item3->id))
                checked
                @endif
                >  {{$item3->nom_qui_paie_coti}} </br>
                @endforeach
</div> 
                <label for="qui_coti" class="col-md-15 col-form-label  text-md-">{{ __("12 - Etat de la cotisation") }}</label>
                <div class="alert alert-succes+s" role="alert">
                @foreach ($Etat_cotis as $item4)
                <input class="form-check-input" type="checkbox" id="Etat_cotise_Org" name="Etat_cotise_Org0[]"  value="{{$item4->id}}"
                @if(collect($Etat_orgs)->contains('id_etat', $item4->id))
                checked
                @endif
                > {{$item4->nom_Etat_coti}} </br>
                @endforeach
</div>
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("13 - Site Web *") }}</label>
                <input id="Sie_web_Org" type="text" class="form-control  " name="Sie_web_Org" value="{{$item->Sie_web_Org}}" >

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("14 - contacs *") }}</label>
                <input id="Contacts_Org" type="text" class="form-control  " name="Contacts_Org" value="{{$item->Contacts_Org}}" >
                
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("15 - Existent-ils des postes occupés par des responsables mauritaniens ?") }}</label>
                <input id="Postes_ocuup" type="text" class="form-control  " name="Postes_ocuup" value="{{$item->Postes_ocuup}}" >
                

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("16 - Existe-t-il une opportunité de candidature mauritanienne à des postes au niveau de cette organisation?") }}</label>
                <input id="Candid_Mau_Org" type="text" class="form-control  " name="Candid_Mau_Org" value="{{$item->Candid_Mau_Org}}" >
                
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("17 -Degrès d’importance de cette organisation ou institution? ") }}</label>
                <div class="alert alert-succes+s" role="alert">
                @foreach ($Degres_impo_org_insts as $item5)
                <input class="form-check-input" type="radio" id="Degres_Org" name="Degres_Org"  value="{{$item5->nom_Degres}}" 
                @if(collect($Organisations)->contains('Degres_Org', $item5->nom_Degres))
                checked
                @endif
                
                >  {{$item5->nom_Degres}} </br>
                @endforeach
</div>
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("18 - Qui est le point focal au MTNIMA ") }}</label>
                <input id="PF_MTNIMA" type="text" class="form-control" name="PF_MTNIMA" value="{{$item->PF_MTNIMA}}"  >
                <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                @endforeach
                            
                                <button type="submit" class="btn btn-primary center">
                                    {{ __('Enregistrer') }}
                                </button>
                                <button type="reqest" class="btn btn-secondary center">
                                    {{ __('Annuler') }}
                                </button>
</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
