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
<form method="POST" action="{{ route('Secteur_rech') }}">
                    @csrf
                    <input id="nom_secteur" type="text" class="form-control col-md-5 " name="nom_secteur" value="M" width=15%>
</td><td>
                    <button type="submit" class="btn btn-warning center"> {{ __('Recherche') }} </button>
 </form>
 </td><td>
     <!-- Ajouter -->
<a href="{{ url('/Secteur_i/create') }}"  class="btn btn-success "> {{ __('Ajouter') }} </a>
</td>
</tr>
</table>
<!-- donne de base de donnee -->
<table class="table">
    <Thead class="table-dark">
        <tr>
        <th scope="col"># </th>
        <th scope="col"> {{ __("Secteur d'activité") }}</th>
        <th scope="col"> {{ __("Date de céation") }}</th>
        <th scope="col" colspan=9> {{ __("Date de céation") }}</th>
        </tr>
    <Thead>
<tbody>

    @foreach ($Secteurs as $item)
<tr>
        <th scope="row">{{$item->id}}  </th>
        <th scope="row"> {{$item->nom_secteur}}</th>
        <th scope="row"> {{$item->created_at}}</th>
       
        <th scope="row"> 
            <a href="{{ route('Secteur_i.show' , $item->id) }}" class="btn btn-info center"> {{ __('Afiche') }} </a>
                    </th>
        <th scope="row"> 
            <a href="{{ url('Secteur_modif' , $item->id) }}" class="btn btn-primary center"> {{ __('Modifie') }} </a>
        </th>
        <th scope="row"> 
            <form  action="{{route('Secteur_d' , $item->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" 
                    onclick="return confirm('Sumprimier {{$item->nom_secteur}} ?')"
                    > Sumprimier </button>
 </form>
        </th>
</tr>
@endforeach
<tr><th scope="row" colspan=3>
 </th></tr>
</tbody>
</table>

</div>
@endsection
