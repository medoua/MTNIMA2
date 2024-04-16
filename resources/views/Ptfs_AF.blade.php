@extends('layouts.app')
@section('content')
 
<div class="container">
@foreach ($Ptfs as $item)
<!-- donne de base de donnee -->
<table class="table">
    <Thead class="table-">
        <tr>
        <th scope="col"> {{ __("1. Nom de l'institution ou programme") }}</th>                    </tr><tr>  <th scope="row">{{$item->nom_ins}}  </th> </tr><tr>
        <th scope="col"> {{ __("2. Secteur") }}</th>                                               </tr><tr>  <th scope="row">@foreach ($Ptfs_sects as $item1) {{$item1->nom_secteur}} </br> @endforeach</th> </tr><tr>
        <th scope="col"> {{ __("3. Missions") }}</th>                                              </tr><tr> <th scope="row"> {{$item->Mission__PTFs}}</th>  </tr><tr>
        <th scope="col"> {{ __("4. Statut et Type") }}</th>                                         </tr><tr>   <th scope="row">{{$item->Statut_Type}}  </th> </tr><tr>
        <th scope="col"> {{ __("5. Point Focal en Mauritanie") }}</th>                               </tr><tr> <th scope="row">{{$item->Point_focal}}  </th>  </tr><tr>
        <th scope="col"> {{ __("6. Historique de coopération avec la Mauritanie/MTNIMA") }}</th>      </tr><tr>  <th scope="row">{{$item->Hist_Coop}}  </th>  </tr><tr>
        <th scope="col"> {{ __("7. Siège") }}</th>                                                    </tr><tr>  <th scope="row">{{$item->Siege_PTFs}}  </th>  </tr><tr>
        <th scope="col"> {{ __("8. Programmes") }}</th>                                                </tr><tr>  <th scope="row">{{$item->programme}}  </th>  </tr><tr>
        <th scope="col"> {{ __("9. Evenements") }}</th>                                                 </tr><tr>  <th scope="row">{{$item->Evenements}}  </th>  </tr><tr>
        <th scope="col"> {{ __("10. Financements octroyés ou appuis") }}</th>                             </tr><tr> <th scope="row">{{$item->Finnacements}}  </th>  </tr><tr>
        <th scope="col"> {{ __("11. Site Web et contacs") }}</th>                                         </tr><tr> <th scope="row">{{$item->Site_web_PTFs}}  </th>  </tr><tr>
        

</tr>
@endforeach
<tr><th scope="row" colspan=3>
 </th></tr>
</tbody>
</table>

@endsection
