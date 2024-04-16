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
<a href="{{ route('mission.create') }}"  class="btn btn-success "> {{ __('Ajouter') }} </a>
</td>
</tr>
</table>
<!-- donne de base de donnee -->
<table class="table">
    <Thead class="table-dark">
        <tr>
        <th scope="col"># </th>
        <th scope="col"> {{ __("Evenement") }}</th>
        <th scope="col"> {{ __("Secteur d'activité") }}</th>
        <th scope="col"> {{ __("Organisation ou l'initiative qui organise cet évenement") }}</th>
        <th scope="col"> {{ __("Lieu") }}</th>
        <th scope="col"> {{ __("Date de début") }}</th>
        <th scope="col"> {{ __("Date de fin") }}</th>
        <th scope="col"> {{ __(" le théme de l'évenement") }}</th>
        <th scope="col"> {{ __("le ou les participants(noms et fonctions)") }}</th>
        <th scope="col"> {{ __("Nature de prise en charge ") }}</th>
        <th scope="col"> {{ __("Ordre de mission") }}</th>
        <th scope="col"> {{ __("Résumé des idées retenus de cet évenement") }}</th>
        <th scope="col"> {{ __("pièce jointes") }}</th>
        

        <th scope="col" colspan=9> {{ __("Date de céation") }}</th>
        </tr>
    <Thead>
<tbody>

    @foreach ($Missions as $item)
<tr>


        <th scope="row">{{$item->Evenement}}  </th>
        <th scope="row">{{$item->Secteur_mis}}  </th>
        <th scope="row"> {{$item->qui_Organise}}</th>
        <th scope="row"> {{$item->lieu_mis}}</th>
        <th scope="row">{{$item->date_d}}  </th>
        <th scope="row">{{$item->date_f}}  </th>
        <th scope="row">{{$item->theme_evenement}}  </th>
        <th scope="row">{{$item->Participants}}  </th>
        <th scope="row">{{$item->Nature_prise_en_charge}}  </th>
        <th scope="row">{{$item->Ordre_mission}}  </th>
        <th scope="row">{{$item->Resume_evenement}}  </th>
        <th scope="row">{{$item->Pieces_Joint}}  </th>
       
        <th scope="row"> 
            <a href="{{ route('mission_AF' , $item->id) }}" class="btn btn-info center"> {{ __('Afiche') }} </a>
                    </th>
        <th scope="row"> 
            <a href="{{ route('mission_M' , $item->id) }}" class="btn btn-primary center"> {{ __('Modifie') }} </a>
        </th>
        <th scope="row"> 
            <form  action="{{route('mission_D' , $item->id) }}" method="post" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Sumprimier {{$item->Evenement}} ?')"
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
