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
<a href="{{ route('Ptfs.create') }}"  class="btn btn-success "> {{ __('Ajouter') }} </a>
</td>
</tr>
</table>
<!-- donne de base de donnee -->
<table class="table">
    <Thead class="table-dark">
        <tr>
        <th scope="col"># </th>
        <th scope="col"> {{ __("Nom de l'institution ou programme") }}</th>
        <th scope="col"> {{ __("Secteur") }}</th>
        <th scope="col"> {{ __("Missions") }}</th>
        <th scope="col"> {{ __("Statut et Type") }}</th>
        <th scope="col"> {{ __("Point Focal en Mauritanie") }}</th>
        <th scope="col"> {{ __("Historique de coopération avec la Mauritanie/MTNIMA") }}</th>
        <th scope="col"> {{ __("Siège") }}</th>
        <th scope="col"> {{ __("Programmes") }}</th>
        <th scope="col"> {{ __("Evenements") }}</th>
        <th scope="col"> {{ __("Financements octroyés ou appuis") }}</th>
        <th scope="col"> {{ __("Site Web et contacs") }}</th>
        



        <th scope="col" colspan=9> {{ __("Date de céation") }}</th>
        </tr>
    <Thead>
<tbody>



    @foreach ($Ptfs as $item)
<tr>
        <th scope="row">{{$item->nom_ins}}  </th>
        <th scope="row"> {{$item->Secteur_PTFS}}</th>
        <th scope="row"> {{$item->Mission__PTFs}}</th>
        <th scope="row">{{$item->Statut_Type}}  </th>
        <th scope="row">{{$item->Point_focal}}  </th>
        <th scope="row">{{$item->Hist_Coop}}  </th>
        <th scope="row">{{$item->Siege_PTFs}}  </th>
        <th scope="row">{{$item->programme}}  </th>
        <th scope="row">{{$item->Evenements}}  </th>
        <th scope="row">{{$item->Finnacements}}  </th>
        <th scope="row">{{$item->Site_web_PTFs}}  </th>
        <th scope="row">{{$item->Contacts_PTFs}}  </th>
       
        <th scope="row"> 
            <a href="{{ route('Ptfs_AF' , $item->id) }}" class="btn btn-info center"> {{ __('Afiche') }} </a>
                    </th>
        <th scope="row"> 
            <a href="{{ route('Ptfs_M' , $item->id) }}" class="btn btn-primary center"> {{ __('Modifie') }} </a>
        </th>
        <th scope="row"> 
            <form  action="{{route('Ptfs_D' , $item->id) }}" method="post" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Sumprimier {{$item->nom_ins}} ?')"
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
