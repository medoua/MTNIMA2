@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-">
            <div class="card">
                <div class="card-header">{{ __('PFTs et coopération Bilatérale') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($Ptfs as $item)
                <form method="PUT" action="{{ route('Ptfs_U', $item->id) }}">
                @csrf 
                
                @method('PUT')
                <!--
                <label for="email" class="col-md-8 col-form-label  text-md-end">{{ __(" Ce formulaire enregistrera votre nom, veuillez renseigner votre nom") }}</label>
                <input id="form_enr" type="text" class="form-control  col-md-8" name="form_enr" value="{{$item->qui_Orgqnise}}" autofocus>
                ************* -->
                
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("1 - Nom de l'Institution ou programme *") }}</label>
                <input id="nom_ins" type="text" class="form-control  col-md-8" name="nom_ins" value="{{$item->nom_ins}}" autofocus>
                
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("2 - Secteur *") }}</label>
</br>           @foreach ($Secteurs as $item1)
                <input class="form-check-input" type="checkbox" name="Secteur_PTFS0[]" value="{{$item1->id}}"
                @if(collect($Ptfs_sects)->contains('id_sect', $item1->id))
                checked
                @endif
                > {{$item1->nom_secteur}} </br>
                @endforeach
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("3 - Missions *") }}</label>
               <input id="Mission__PTFs" type="text" class="form-control  " name="Mission__PTFs" value="{{$item->Mission__PTFs}}" autofocus>
               
                <label for="Statut" class="col-md-15 col-form-label  text-md-">{{ __("4. Statut et Type *") }}</label>
</p>            @foreach ($Statuts as $item2)
                <input class="form-check-input" type="radio" name="Statut_Type" value="{{$item2->nom_Statut}}"
                @if(collect($Ptfs)->contains('Statut_Type', $item2->nom_Statut))
                checked
                @endif
                    >  {{$item2->nom_Statut}} </br>
                @endforeach 

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("5 - Point Focal en Mauritanie *") }}</label>
                <input id="Point_focal" type="text" class="form-control  " name="Point_focal" value="{{$item->Point_focal}}" autofocus>

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("6. Historique de coopération avec la mauritanie/MTNIMA") }}</label>
                <input id="Hist_Coop" type="text" class="form-control  " name="Hist_Coop" value="{{$item->Hist_Coop}}" autofocus>
                
                
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("6 - Siège *") }}</label>
                <input id="Siege_PTFs" type="text" class="form-control  " name="Siege_PTFs" value="{{$item->Siege_PTFs}}" autofocus>

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("7 - Programmes *") }}</label>
                <input id="programme" type="text" class="form-control  " name="programme" value="{{$item->programme}}" autofocus>

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("8 - Evénements *") }}</label>
                <input id="Evenements" type="text" class="form-control  " name="Evenements" value="{{$item->Evenements}}" autofocus>

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("9 - Financements octroyés ou appuis *") }}</label>
                <input id="Finnacements " type="text" class="form-control  " name="Finnacements" value="{{$item->Finnacements}}" autofocus>

                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("10 - Site Web *") }}</label>
                <input id="Site_web_PTFs" type="text" class="form-control  " name="Site_web_PTFs" value="{{$item->Site_web_PTFs}}" autofocus>
               
                <label for="email" class="col-md-15 col-form-label  text-md-">{{ __("11 - contacs *") }}</label>
                <input id="Contacts_PTFs" type="text" class="form-control  " name="Contacts_PTFs" value="{{$item->Contacts_PTFs}}" autofocus>
@endforeach

                <div class="row mb-0">
                            <div class="col-md-8 offset-md-14">
                                <button type="submit" class="btn btn-primary center">
                                    {{ __('Enregistrer') }}
                                </button>
                                <button type="re" class="btn btn-secondary center">
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
