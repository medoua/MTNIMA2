@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Statut et Type") }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
		@foreach ($Statuts as $item)
                    <form method="POST" action="{{ route('Statut_Type.store') }}">
                    @csrf
                    <label for="nom_Statut" class="col-md-5 col-form-label  text-md-end">{{ __("Statut et Type") }}</label>
</p>
                    <input id="nom_Statut" type="text" class="form-control  " name="nom_Statut" value="{{$item->nom_Statut}}" required>
                    
                    <button type="submit" class="btn btn-primary center"> {{ __('Ajouter') }} </button>
                    <button type="rest" class="btn btn-secondary center"> {{ __('Annuler') }} </button>
		@endforeach
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
