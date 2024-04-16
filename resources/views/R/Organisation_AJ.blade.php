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

                    <form method="POST" action="{{ route('Organisation.store') }}">
                    @csrf
                    <!--
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("1 -  Personne Interroée *") }}</label>
                <input id="Pers_Inter" type="text" class="form-control  col-md-8" name="Pers_Inter" value="5" autofocus>
                          
</p>
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("3 - Temps de remplissage *") }}</label>
                <input id="Temps_remp" type="text" class="form-control  " name="Temps_remp" value="5" autofocus>
-->             
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("3 - Ce_formulair ") }}</label>
                <input id="Ce_formulair" type="text" class="form-control  " name="Ce_formulair" value="5" >

                <label for="Nom_Org" class="col-md-5 col-form-label  text-md-end">{{ __("4 - Nom de  l'organisation? *") }}</label>
                <input id="Nom_Org" type="text" class="form-control " name="Nom_Org" value="5">
                
                <label for="Nom_org" class="col-md-5 col-form-label  text-md-end">{{ __("4 - Secteur d'activité* ") }}</label>
            </p>
            @foreach ($Secteurs as $item)
                <input class="form-check-input" type="checkbox" name="Secteur_Org" id="Secteur_Org" value="{{$item->nom_secteur}}" > {{$item->nom_secteur}} </p>
            @endforeach
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("5 - Missions* ") }}</label>
                <input id="Mission_Org" type="text" class="form-control  " name="Mission_Org" value="Miss" >
                
                <label for="Statut" class="col-md-5 col-form-label  text-md-end">{{ __("6 - Statut * *") }}</label>
</p>
                <input class="form-check-input" type="radio" name="Statut_Org" id="Statut_Org" value="1" >  1 </p>
                <input class="form-check-input" type="radio" name="Statut_Org" id="Statut_Org" value="2" >  2 </p>
                <input class="form-check-input" type="radio" name="Statut_Org" id="Statut_Org" value="3" >  3 </p>

                <label for="Date_crea" class="col-md-5 col-form-label  text-md-end">{{ __("7 - Date de création *") }}</label>
                <input id="Date_Org" type="date" class="form-control  " name="Date_Org" value="12/01/2024" >
555555555555555555
                <label for="Histo" class="col-md-5 col-form-label  text-md-end">{{ __("8 - Historique") }}</label>
                <input id="Histo" type="text" class="form-control  " name="Histo" value="Histo" >
5555555555555555555555
                <label for="Siege" class="col-md-5 col-form-label  text-md-end">{{ __("9 - Siège *") }}</label>
                <input id="Siege_Org" type="text" class="form-control  " name="Siege_Org" value="Siege" >

                <label for="Date_adh_Mauri" class="col-md-5 col-form-label  text-md-end">{{ __("9 - Date d'adhésion de la Mauritanie *") }}</label>
                <input id="Date_adh_Mauri" type="date" class="form-control  " name="Date_adh_Mauri" value="12/01/2024" >

                <label for="Cotisation" class="col-md-5 col-form-label  text-md-end">{{ __("9 - cotisation") }}</label>
                <input id="Cotisation" type="text" class="form-control  " name="Cotisation" value="cotisation" >

                <label for="Montant_coti" class="col-md-5 col-form-label  text-md-end">{{ __("9 - Montant de la cotisation") }}</label>
                <input id="Montant_coti" type="text" class="form-control  " name="Montant_coti" value="Montant_coti" >

                <label for="qui_coti" class="col-md-5 col-form-label  text-md-end">{{ __("9 - qui paie cette cotisation") }}</label>
                </p>
                <input class="form-check-input" type="checkbox" id="Peie_Org" name="Peie_Org"  value="1" >  1 </p>
                <input class="form-check-input" type="checkbox" id="Peie_Org" name="Peie_Org"  value="2" >  2 </p>
                <input class="form-check-input" type="checkbox" id="Peie_Org" name="Peie_Org"  value="3" >  3 </p>
                <input class="form-check-input" type="checkbox" id="Peie_Org" name="Peie_Org"  value="4" >  4 </p>
                
                <label for="qui_coti" class="col-md-5 col-form-label  text-md-end">{{ __("9 - Etat de la cotisation") }}</label>
                </p>
                <input class="form-check-input" type="checkbox" id="Etat_cotise_Org" name="Etat_cotise_Org"  value="1" >  a jour </p>
                <input class="form-check-input" type="checkbox" id="Etat_cotise_Org" name="Etat_cotise_Org"  value="2" >  avec arriérés  (à préciser) </p>
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("10 - Site Web *") }}</label>
                <input id="Sie_web_Org" type="text" class="form-control  " name="Sie_web_Org" value="Sie_web_Org" >

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("11 - contacs *") }}</label>
                <input id="Contacts_Org" type="text" class="form-control  " name="Contacts_Org" value="Contacts_Org" >
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("10 - Existent-ils des postes occupés par des responsables mauritaniens ?") }}</label>
                <input id="Postes_ocuup" type="text" class="form-control  " name="Postes_ocuup" value="Postes_ocuup" >
                

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("10 - Existe-t-il une opportunité de candidature mauritanienne à des postes au niveau de cette organisation?") }}</label>
                <input id="Candid_Mau_Org" type="text" class="form-control  " name="Candid_Mau_Org" value="Candid_Mau_Org" >
                
                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("17 -Degrès d’importance de cette organisation ou institution? ") }}</label>
</P> 
@foreach ($Degres_impo_org_insts as $item)
                <input class="form-check-input" type="radio" id="Degres_Org" name="Degres_Org"  value="{{$item->nom_Degres}}" >  {{$item->nom_Degres}} </p>
@endforeach

                <label for="email" class="col-md-5 col-form-label  text-md-end">{{ __("10 - Qui est le point focal au MTNIMA ") }}</label>
                <input id="PF_MTNIMA" type="text" class="form-control" name="PF_MTNIMA" value="PF_MTNIMA"  >
                <div class="row mb-0">
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
