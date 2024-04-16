@extends('layouts.app')
@section('content')
<div class="container">



    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Modifie Secteur d'activité") }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($Secteurs as $item)

                    <form method="POST" action="{{ route('Secteur_UP' , $item->id) }}">
                    @csrf
                    @method('PUT')
                    <label for="Secteur" class="col-md-5 col-form-label  text-md-end">{{ __("Secteur") }}</label>
</p>
 <!--           <input id="id" type="text" class="form-control  " name="id" value="{{$item->id}}" required> -->
                    <input id="nom_secteur" type="text" class="form-control  " name="nom_secteur" value="{{$item->nom_secteur}}" required>
                    
                    <button type="submit" class="btn btn-primary center"> {{ __('Modifier') }} </button>
                    <button type="rest" class="btn btn-secondary center"> {{ __('Annuler') }} </button>
                    @endforeach
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
