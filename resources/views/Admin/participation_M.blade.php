@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("participation") }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
		@foreach ($Paticipations as $item)
                    <form method="POST" action="{{ route('participation.store') }}">
                    @csrf
                    <label for="Secteur" class="col-md-5 col-form-label  text-md-end">{{ __("participation") }}</label>
</p>
                    <input id="nom_Patici" type="text" class="form-control  " name="nom_Patici" value="{{$item->nom_Patici}}" required>
         
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
