@extends('layouts.app')
@section('content')
 
<div class="container">
@foreach ($Ptfs as $item)
<!-- donne de base de donnee -->
<table class="table">
    <Thead class="table-">
        <tr>
        <th scope="col"> {{ __("Nom de l'institution ou programme") }}</th>                    </tr><tr>  <th scope="row">{{$item->nom_ins}}  </th> </tr><tr>
        <th scope="col"> {{ __("Secteur") }}</th>                                               </tr><tr>  <th scope="row"> {{$item->Secteur_PTFS}}</th> </tr><tr>
        <th scope="col"> {{ __("Missions") }}</th>                                              </tr><tr> <th scope="row"> {{$item->Mission__PTFs}}</th>  </tr><tr>
        <th scope="col"> {{ __("Statut et Type") }}</th>                                         </tr><tr>   <th scope="row">{{$item->Statut_Type}}  </th> </tr><tr>
        <th scope="col"> {{ __("Point Focal en Mauritanie") }}</th>                               </tr><tr> <th scope="row">{{$item->Point_focal}}  </th>  </tr><tr>
        <th scope="col"> {{ __("Historique de coopération avec la Mauritanie/MTNIMA") }}</th>      </tr><tr>  <th scope="row">{{$item->Hist_Coop}}  </th>  </tr><tr>
        <th scope="col"> {{ __("Siège") }}</th>                                                    </tr><tr>  <th scope="row">{{$item->Siege_PTFs}}  </th>  </tr><tr>
        <th scope="col"> {{ __("Programmes") }}</th>                                                </tr><tr>  <th scope="row">{{$item->programme}}  </th>  </tr><tr>
        <th scope="col"> {{ __("Evenements") }}</th>                                                 </tr><tr>  <th scope="row">{{$item->Evenements}}  </th>  </tr><tr>
        <th scope="col"> {{ __("Financements octroyés ou appuis") }}</th>                             </tr><tr> <th scope="row">{{$item->Finnacements}}  </th>  </tr><tr>
        <th scope="col"> {{ __("Site Web et contacs") }}</th>                                         </tr><tr> <th scope="row">{{$item->Site_web_PTFs}}  </th>  </tr><tr>
        

</tr>
@endforeach
<tr><th scope="row" colspan=3>
 </th></tr>
</tbody>
</table>

@endsection
