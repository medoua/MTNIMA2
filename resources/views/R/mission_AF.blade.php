@extends('layouts.app')
@section('content')
<div class="container">
@foreach ($Missions as $item)
<!-- donne de base de donnee -->
<table class="table">
    <Thead class="table">
        <tr>
        <th scope="col"> {{ __("Evenement") }}</th>                                                 </tr><tr>  <th scope="row">{{$item->Evenement}}  </th> </tr><tr>
        <th scope="col"> {{ __("Secteur d'activité") }}</th>                                         </tr><tr>   <th scope="row">{{$item->Secteur_mis}}  </th> </tr><tr>                     
        <th scope="col"> {{ __("Organisation ou l'initiative qui organise cet évenement") }}</th>    </tr><tr> <th scope="row"> {{$item->qui_Organise}}</th>  </tr><tr>
        <th scope="col"> {{ __("Lieu") }}</th>                                                        </tr><tr> <th scope="row"> {{$item->lieu_mis}}</th>  </tr><tr>
        <th scope="col"> {{ __("Date de début") }}</th>                                                </tr><tr>  <th scope="row">{{$item->date_d}}  </th>   </tr><tr>
        <th scope="col"> {{ __("Date de fin") }}</th>                                                   </tr><tr> <th scope="row">{{$item->date_f}}  </th> </tr><tr>
        <th scope="col"> {{ __(" le théme de l'évenement") }}</th>                                      </tr><tr>  <th scope="row">{{$item->theme_evenement}}  </th> </tr><tr>
        <th scope="col"> {{ __("le ou les participants(noms et fonctions)") }}</th>                      </tr><tr> <th scope="row">{{$item->Participants}}  </th>  </tr><tr>
        <th scope="col"> {{ __("Nature de prise en charge ") }}</th>                                      </tr><tr>   <th scope="row">{{$item->Nature_prise_en_charge}}  </th> </tr><tr>
        <th scope="col"> {{ __("Ordre de mission") }}</th>                                                 </tr><tr> <th scope="row">{{$item->Ordre_mission}}  </th>  </tr><tr>
        <th scope="col"> {{ __("Résumé des idées retenus de cet évenement") }}</th>                         </tr><tr>  <th scope="row">{{$item->Resume_evenement}}  </th> </tr><tr>
        <th scope="col"> {{ __("pièce jointes") }}</th>                                                      </tr><tr>   <th scope="row">{{$item->Pieces_Joint}}  </th>
        </tr><tr>
        </tr>
    <Thead>
<tbody>

@endforeach
<tr><th scope="row" colspan=3>
 </th></tr>
</tbody>
</table>
@endsection
