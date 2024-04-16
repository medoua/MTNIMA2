@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Secteur d'activité") }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    @foreach ($Short_orgs as $item)
                    <form method="POST" action="{{ route('OrgList_U', $item->id) }}">
                    @csrf
                    <label for="Secteur" class="col-md-5 col-form-label  text-md-end">{{ __("nom_org") }}</label>
</p>
                    <input id="nom_org" type="text" class="form-control  " name="nom_org" value="{{$item->nom_org}}" required>
                    
                    <label for="Secteur" class="col-md-5 col-form-label  text-md-end">{{ __("info_org") }}</label>
                   <input id="nom_org" type="text" class="form-control  " name="info_org" value="{{$item->info_org}}" >
</textarea> @endforeach
                    <button type="submit" class="btn btn-primary center"> {{ __('Ajouter') }} </button>
                    <button type="rest" class="btn btn-secondary center"> {{ __('Annuler') }} </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
