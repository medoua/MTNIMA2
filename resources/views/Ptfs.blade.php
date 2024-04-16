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
<form method="POST" action="{{ route('Ptfs_rech') }}" class="d-flex">
                    @csrf
                    <input id="rech_PTFs" type="text" class="form-control col-md-5  me-2" name="rech_PTFs" placeholder="Recherche" value="" width=15%>

                    <button type="submit" class="btn btn-outline-warning center">

<svg xmlns="/icon/eye-fill.svg " width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
      
                    {{ __('Recherche') }} </button>
 </form>
 </td><td>
     <!-- Ajouter -->
     @if(auth()->check() && (auth()->user()->isAdmin() || auth()->user()->isSuperAdmin()))
<a href="{{ route('Ptfs.create') }}"  class="btn btn-outline-success ">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
  <path d="M12.096 6.223A5 5 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.5 4.5 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-.813-.927Q8.378 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.6 4.6 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10q.393 0 .774-.024a4.5 4.5 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777M3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4"/>
</svg>
{{ __('Ajouter') }} </a>
@endif
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
       <!-- <th scope="col"> {{ __("Point Focal en Mauritanie") }}</th> -->
        <th scope="col"> {{ __("Site Web") }}</th>
        
        <th scope="col" colspan=3> {{ __("") }}</th>
        </tr>
    <Thead>
<tbody>

    @foreach ($Ptfs as $item)
<tr>
        <th scope="row">{{$item->id}}  </th>
        <th scope="row">{{$item->nom_ins}}  </th>
        <th scope="row"> 
        @foreach($item->secteurs as $item2)
        {{$item2->Secteur_PTFS}}
        @endforeach
    </th>
        <th scope="row">{{$item->Site_web_PTFs}}  </th>
       
        <th scope="row"> 
            <a href="{{ route('Ptfs_AF' , $item->id) }}" class="btn btn-outline-info btn-info center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/> 
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
  </svg>  
            {{ __('Affiche') }} </a>
                    </th>
                    @if(auth()->check() && (auth()->user()->isAdmin() || auth()->user()->isSuperAdmin()))
        <th scope="row"> 
            <a href="{{ route('Ptfs_M' , $item->id) }}" class="btn btn-outline-primary center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>    
            {{ __('Modifie') }} </a>
        </th>
        <th scope="row"> 
            <form  action="{{route('Ptfs_D' , $item->id) }}" method="post" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger"
                    onclick="return confirm('Sumprimier {{$item->nom_ins}} ?')"
                    > 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg>
                    
                    Sumprimier </button> </th> @endif
 </form>
        
</tr>
@endforeach
<tr><th scope="row" colspan=6>
 </th></tr>
</tbody>
</table>

@endsection
