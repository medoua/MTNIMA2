@extends('layouts.app')
<link href="http://127.0.0.1:8000\css\bootstrap.min.css" rel="stylesheet">
@section('content')

<div class="container">
    
<!-- donne de base de donnee -->
@foreach ($Evenements as $item)
<table class="table">
    <Thead class="table">
        <tr>
        
        <th scope="col"> {{ __("Evenement") }}</th>                                   </tr><tr>  <th scope="row">{{$item->Evenement}}  </th> </tr><tr>
        <th scope="col"> {{ __("Description de l'evennement") }}</th>                  </tr><tr> <th scope="row">{{$item->Description}}  </th> </tr><tr>
        <th scope="col"> {{ __("Qui organise cet évenement") }}</th>                    </tr><tr> <th scope="row">{{$item->qui_Orgqnise}}  </th> </tr><tr>
        <th scope="col"> {{ __("Information sur les organisateurs") }}</th>             </tr><tr> <th scope="row"> {{$item->Inf_even}}</th> </tr><tr>
        <th scope="col"> {{ __("Périodicité") }}</th>                                    </tr><tr> <th scope="row"> {{$item->Periodicite}}</th>  </tr><tr>
        <th scope="col"> {{ __("Lieu du dernier évenement") }}</th>                      </tr><tr> <th scope="row">{{$item->lieu_even}}  </th> </tr><tr>
        <th scope="col"> {{ __("Date du dernier évenement") }}</th>                       </tr><tr> <th scope="row">{{$item->date_even}}  </th> </tr><tr>
        <th scope="col"> {{ __("Thème du dernier évenement") }}</th>                        </tr><tr> <th scope="row">{{$item->theme_derier}}  </th> </tr><tr>
        <th scope="col"> {{ __("Participation du MTNIMA au dernier évenement") }}</th>       </tr><tr> <th scope="row">{{$item->Participation_MTNIMA}}  </th> </tr><tr>
        <th scope="col"> {{ __("Lieu du prochain évenement") }}</th>                          </tr><tr> <th scope="row">{{$item->lieu_prochain}}  </th> </tr><tr>
        <th scope="col"> {{ __("Date du prochain évenement") }}</th>                           </tr><tr> <th scope="row">{{$item->Date_prochain}}  </th> </tr><tr>
        <th scope="col"> {{ __("Degrès d'importance du prochain évenement") }}</th>             </tr><tr> <th scope="row">{{$item->Degres_imp}}  </th> </tr><tr>
        <th scope="col"> {{ __("Niveau de participation requis pour le prochain évenement") }}  </th>  </tr><tr> <th scope="row">{{$item->Niveau_imp}}  </th> </tr><tr>
        <th scope="col"> {{ __("Format du prochain évenement") }}</th>                          </tr><tr> <th scope="row">{{$item->Format_prochain}}  </th> </tr><tr>
        <th scope="col"> {{ __("Site web de l'evenement") }}</th>                                </tr><tr> <th scope="row">{{$item->Site_web_even}}  </th> </tr><tr>
        </tr>
@endforeach
<tr><th scope="row" colspan=3>
 </th></tr>
</tbody>
</table>

@endsection
