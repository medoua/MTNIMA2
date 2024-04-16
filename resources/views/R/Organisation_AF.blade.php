@extends('layouts.app')
@section('content')
<div class="container">
@foreach ($Organisations as $item)
<!-- donne de base de donnee -->
<table class="table">
    <Thead class="table">
  <tr>               
        <th scope="col"> {{ __("1. Nom de l'organisation ") }}</th> </tr><tr>    <th scope="row">{{$item->Nom_Org}}  </th> </tr><tr>
        <th scope="col"> {{ __("2. secteur d'activité") }}</th>   </tr><tr><th scope="row"> {{$item->Secteur_Org}}</th>        </tr><tr>
        <th scope="col"> {{ __("3. Mission") }}</th>                 </tr><tr><th scope="row"> {{$item->Mission_Org}}</th>        </tr><tr>
        <th scope="col"> {{ __("4. Statut") }}</th>                    </tr><tr>  <th scope="row"> {{$item->Statut_Org}}</th>       </tr><tr>
        <th scope="col"> {{ __("5. Date de Création") }}</th>           </tr><tr>  <th scope="row"> {{$item->Date_Org}}</th>      </tr><tr>
        <th scope="col"> {{ __("6. Historique") }}</th>                  </tr><tr> <th scope="row"> {{$item->Siege_Org}}</th>       </tr><tr>
        <th scope="col"> {{ __(" Secteur d'activité") }}</th>           </tr><tr>  <th scope="row"> {{$item->Date_adh_Mauri}}</th>      </tr><tr>
        <th scope="col"> {{ __("Siège") }}</th>                           </tr><tr>   <th scope="row"> {{$item->Cotisation}}</th>      </tr><tr>
        <th scope="col"> {{ __("Date d'adhésion de la Mauritanie") }}</th>   </tr><tr> <th scope="row"> {{$item->Montant_coti}}</th>       </tr><tr>
        <th scope="col"> {{ __("cotisation") }}</th>                            </tr><tr><th scope="row"> {{$item->Peie_Org}}</th>        </tr><tr>
        <th scope="col"> {{ __("Montant de la cotisation") }}</th>               </tr><tr>     <th scope="row"> {{$item->Etat_cotise_Org}}</th>    </tr><tr>
        <th scope="col"> {{ __("qui paie cette cotisation") }}</th>                </tr><tr>  <th scope="row"> {{$item->Sie_web_Org}}</th>      </tr><tr>
        <th scope="col"> {{ __("Etat de la cotisation") }}</th>                    </tr><tr>  <th scope="row"> {{$item->Contacts_Org}}</th>      </tr><tr>
        <th scope="col"> {{ __("Site Web") }}</th>                                   </tr><tr>  <th scope="row"> {{$item->Postes_ocuup}}</th>       </tr><tr>
        <th scope="col"> {{ __("Contacts") }}</th>                                     </tr><tr>  <th scope="row"> {{$item->Candid_Mau_Org}}</th>      </tr><tr>
        <th scope="col"> {{ __("Existent-ils des postes occupés par des responsables mauritaniens?") }}</th>  </tr><tr> <th scope="row"> {{$item->Degres_Org}}</th>       </tr><tr>
        <th scope="col"> {{ __("Existe-t-il une oppotunité de candidature mauritanienne à des postes au niveau de cette organisation ou institution?") }}</th>  </tr><tr>  <th scope="row"> {{$item->PF_MTNIMA}}</th>      </tr><tr>
        <th scope="col"> {{ __("degrès d'importance de cette organisation ou institution?") }}</th>  </tr><tr>        </tr><tr>
        <th scope="col"> {{ __("Qui est le point focal au MTNIMA") }}</th>                                </tr><tr>    <th scope="row"> {{$item->PF_MTNIMA}}</th>    </tr><tr>
        <th scope="col" colspan=9> {{ __("af mod sup") }}</th>
        </tr>
    

</tr>
@endforeach
<tr><th scope="row" colspan=3>
 </th></tr>
</tbody>
</table>

@endsection
