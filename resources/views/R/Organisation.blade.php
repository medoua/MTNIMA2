@extends('layouts.app')
@section('content')
<div class="container">
    <!-- message Ajoute -->
@if ($message =Session::get('success_A'))
                        <div class="alert alert-success" role="alert">
                            {{ $message }}
                        </div>
@endif
<!-- message Modifie -->
@if ($message =Session::get('success_M'))
                        <div class="alert alert-info" role="alert">
                            {{ $message }}
                        </div>   
@endif
<!-- message Suprime -->
@if ($message =Session::get('success_S'))
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
@endif

<table class="table"> <tr> <td>
    <!-- Recherche -->
<form method="POST" action="">
                    @csrf
                    <input id="nom_secteur" type="text" class="form-control col-md-5 " name="nom_secteur" value="M" width=15%>
</td><td>
                    <button type="submit" class="btn btn-warning center"> {{ __('Recherche') }} </button>
 </form>
 </td><td>
     <!-- Ajouter -->
<a href="{{ route('Organisation.create') }}"  class="btn btn-success "> {{ __('Ajouter') }} </a>
</td>
</tr>
</table>
<!-- donne de base de donnee -->
<table class="table">
    <Thead class="table-dark">
        <tr>
        <th scope="col"># </th>
        <th scope="col"> {{ __("Nom de l'organisation ") }}</th>
        <th scope="col"> {{ __(" secteur d'activité") }}</th>
        <th scope="col"> {{ __("Mission") }}</th>
        <th scope="col"> {{ __("Statut") }}</th>
        <th scope="col"> {{ __("Date de Création") }}</th>
        <th scope="col"> {{ __("Historique") }}</th>
        <th scope="col"> {{ __("Secteur d'activité") }}</th>
        <th scope="col"> {{ __("Siège") }}</th>
        <th scope="col"> {{ __("Date d'adhésion de la Mauritanie") }}</th>
        <th scope="col"> {{ __("cotisation") }}</th>
        <th scope="col"> {{ __("Montant de la cotisation") }}</th>
        <th scope="col"> {{ __("qui paie cette cotisation") }}</th>
        <th scope="col"> {{ __("Etat de la cotisation") }}</th>
        <th scope="col"> {{ __("Site Web") }}</th>
        <th scope="col"> {{ __("Contacts") }}</th>
        <th scope="col"> {{ __("Existent-ils des postes occupés par des responsables mauritaniens?") }}</th>
        <th scope="col"> {{ __("Existe-t-il une oppotunité de candidature mauritanienne à des postes au niveau de cette organisation ou institution?") }}</th>
        <th scope="col"> {{ __("degrès d'importance de cette organisation ou institution?") }}</th>
        <th scope="col"> {{ __("Qui est le point focal au MTNIMA") }}</th>




        <th scope="col" colspan=9> {{ __("af mod sup") }}</th>
        </tr>
    <Thead>
<tbody>

    @foreach ($Organisations as $item)
<tr>
       < <th scope="row">{{$item->Ce_formulair}}  </th>

        <th scope="row">{{$item->Nom_Org}}  </th>
        <th scope="row"> {{$item->Secteur_Org}}</th>
        <th scope="row"> {{$item->Mission_Org}}</th>
        <th scope="row"> {{$item->Statut_Org}}</th>
        <th scope="row"> {{$item->Date_Org}}</th>
        <th scope="row"> {{$item->Siege_Org}}</th>
        <th scope="row"> {{$item->Date_adh_Mauri}}</th>
        <th scope="row"> {{$item->Cotisation}}</th>
        <th scope="row"> {{$item->Montant_coti}}</th>
        <th scope="row"> {{$item->Peie_Org}}</th>
        <th scope="row"> {{$item->Etat_cotise_Org}}</th>
        <th scope="row"> {{$item->Sie_web_Org}}</th>
        <th scope="row"> {{$item->Contacts_Org}}</th>
        <th scope="row"> {{$item->Postes_ocuup}}</th>
        <th scope="row"> {{$item->Candid_Mau_Org}}</th>
        <th scope="row"> {{$item->Degres_Org}}</th>
        <th scope="row"> {{$item->PF_MTNIMA}}</th>
       
        <th scope="row">
            <a href="{{ route('Organisation_AF' , $item->id) }}" class="btn btn-info center"> {{ __('Afiche') }} </a>
                    </th>
        <th scope="row"> 
            <a href="{{ route('Organisation_M' , $item->id) }}" class="btn btn-primary center"> {{ __('Modifie') }} </a>
        </th>
        <th scope="row"> 
            <form  action="{{route('Organisation_D' , $item->id) }}" method="post" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Sumprimier {{$item->Nom_Org}} ?')"
                    > Sumprimier </button>
 </form>
        </th>
</tr>
@endforeach
<tr><th scope="row" colspan=3>
 </th></tr>
</tbody>
</table>

@endsection
