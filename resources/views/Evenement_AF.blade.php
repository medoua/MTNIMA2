@extends('layouts.app')
<link href="http://127.0.0.1:8000\css\bootstrap.min.css" rel="stylesheet">
@section('content')

<div class="container">
<div class="row justify-content-center">
        <div class="col-md-20">
<div class="card" id="org">
            <div class="card-body"> 
<!-- donne de base de donnee -->
@foreach ($Evenements as $item)
<table class="table table-ligh+t">
  <!--  <Thead class="table"> hh </Thead> -->
        <tr>
        
        <th scope="col"> {{ __("1. Evenement") }}</th>                                   </tr><tr>  <th scope="row" class="alert alert-success" width="1000">{{$item->Evenement}}  </th> </tr><tr>
        <th scope="col"> {{ __("2. Description de l'evennement") }}</th>                  </tr><tr> <th scope="row" class="alert alert-success">{{$item->Description}}  </th> </tr><tr>
        <th scope="col"> {{ __("3. Qui organise cet évenement") }}</th>                    </tr><tr> <th scope="row" class="alert alert-success">{{$item->qui_Orgqnise}}  </th> </tr><tr>
        <th scope="col"> {{ __("4. Information sur les organisateurs") }}</th>             </tr><tr> <th scope="row" class="alert alert-success"> {{$item->Inf_even}}</th> </tr><tr>
        <th scope="col"> {{ __("5. Périodicité") }}</th>                                    </tr><tr> <th scope="row" class="alert alert-success"> {{$item->Periodicite}}</th>  </tr><tr>
        <th scope="col"> {{ __("6. Lieu du dernier évenement") }}</th>                      </tr><tr> <th scope="row" class="alert alert-success">{{$item->lieu_even}}  </th> </tr><tr>
        <th scope="col"> {{ __("7. Date du dernier évenement") }}</th>                       </tr><tr> <th scope="row" class="alert alert-success">{{$item->date_even}}  </th> </tr><tr>
        <th scope="col"> {{ __("8. Thème du dernier évenement") }}</th>                        </tr><tr> <th scope="row" class="alert alert-success">{{$item->theme_derier}}  </th> </tr><tr>
        <th scope="col"> {{ __("9. Participation du MTNIMA au dernier évenement") }}</th>       </tr><tr> <th scope="row" class="alert alert-success">{{$item->Participation_MTNIMA}}  </th> </tr><tr>
        <th scope="col"> {{ __("10. Lieu du prochain évenement") }}</th>                          </tr><tr> <th scope="row" class="alert alert-success">{{$item->lieu_prochain}}  </th> </tr><tr>
        <th scope="col"> {{ __("11. Date du prochain évenement") }}</th>                           </tr><tr> <th scope="row" class="alert alert-success">{{$item->Date_prochain}}  </th> </tr><tr>
        <th scope="col"> {{ __("12. Degrès d'importance du prochain évenement") }}</th>             </tr><tr> <th scope="row" class="alert alert-success">{{$item->Degres_imp}}  </th> </tr><tr>
        <th scope="col"> {{ __("13. Niveau de participation requis pour le prochain évenement") }}  </th>  </tr><tr> <th scope="row" class="alert alert-success">{{$item->Niveau_imp}}  </th> </tr><tr>
        <th scope="col"> {{ __("14. Format du prochain évenement") }}</th>                          </tr><tr> <th scope="row" class="alert alert-success">{{$item->Format_prochain}}  </th> </tr><tr>
        <th scope="col"> {{ __("15. Site web de l'evenement") }}</th>                                </tr><tr> <th scope="row" class="alert alert-success">{{$item->Site_web_even}}  </th> </tr><tr>
        </tr>
@endforeach
<tr><th scope="row" colspan=3>
 </th></tr>
</tbody>
</table>

@endsection
