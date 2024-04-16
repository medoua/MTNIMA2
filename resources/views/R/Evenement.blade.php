@extends('layouts.app')
<link href="http://127.0.0.1:8000\css\bootstrap.min.css" rel="stylesheet">
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
<a href="{{ route('Evenement.create') }}"  class="btn btn-success "> {{ __('Ajouter') }} </a>
</td>
</tr>
</table>
<!-- donne de base de donnee -->
<table class="table">
    <Thead class="table-dark">
        <tr>
        <th scope="col"># </th>
        <th scope="col"> {{ __("Evenement") }}</th>
        <th scope="col"> {{ __("Description de l'evennement") }}</th>
        <th scope="col"> {{ __("Qui organise cet évenement") }}</th>
        <th scope="col"> {{ __("Information sur les organisateurs") }}</th>
        <th scope="col"> {{ __("Périodicité") }}</th>
        <th scope="col"> {{ __("Lieu du dernier évenement") }}</th>
        <th scope="col"> {{ __("Date du dernier évenement") }}</th>
        <th scope="col"> {{ __("Thème du dernier évenement") }}</th>
        <th scope="col"> {{ __("Participation du MTNIMA au dernier évenement") }}</th>
        <th scope="col"> {{ __("Lieu du prochain évenement") }}</th>
        <th scope="col"> {{ __("Date du prochain évenement") }}</th>
        <th scope="col"> {{ __("Degrès d'importance du prochain évenement") }}</th>
        <th scope="col"> {{ __("Niveau de participation requis pour le prochain évenement") }}</th>
        <th scope="col"> {{ __("Format du prochain évenement") }}</th>
        <th scope="col"> {{ __("Site web de l'evenement") }}</th>


        <th scope="col" colspan=9> {{ __("Date de céation") }}</th>
        </tr>
    <Thead>
<tbody>
  


    @foreach ($Evenements as $item)
<tr>
        <th scope="row">{{$item->id}}  </th> 
        <th scope="row">{{$item->Evenement}}  </th>     
        <th scope="row">{{$item->Description}}  </th>
        <th scope="row">{{$item->qui_Orgqnise}}  </th>
        <th scope="row"> {{$item->Inf_even}}</th>
        <th scope="row"> {{$item->Periodicite}}</th>
        <th scope="row">{{$item->lieu_even}}  </th>
        <th scope="row">{{$item->date_even}}  </th>
        <th scope="row">{{$item->theme_derier}}  </th>
        <th scope="row">{{$item->Participation_MTNIMA}}  </th>
        <th scope="row">{{$item->lieu_prochain}}  </th>
        <th scope="row">{{$item->Date_prochain}}  </th>
        <th scope="row">{{$item->Degres_imp}}  </th>
        <th scope="row">{{$item->Niveau_imp}}  </th>
        <th scope="row">{{$item->Format_prochain}}  </th>
        <th scope="row">{{$item->Site_web_even}}  </th>
       
        <th scope="row"> 
            <a href="{{ route('Evenement_AF' , $item->id) }}" class="btn btn-info center"> {{ __('Afiche') }} </a>
                    </th>
        <th scope="row"> 
            <a href="{{ route('Evenement_M' , $item->id) }}" class="btn btn-primary center"> {{ __('Modifie') }} </a>
        </th>
        <th scope="row"> 
            <form  action="{{route('Evenement_D' , $item->id) }}" method="post" >
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
