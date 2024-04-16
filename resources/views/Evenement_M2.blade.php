@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('evenement') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('Evenement.store') }}">
                    @csrf

                    @foreach ($Evenements as $item)
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Evenement') }}</label> 
                    <input id="Evenement" type="text" class="form-controlr" name="Evenement" value="{{$item->Evenement}}" required autocomplete="email" autofocus>

                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Description de l’événement') }}</label> 
                    <input id="Description" type="text" class="form-controlr" name="Description" value="{{$item->Description}}" required autocomplete="email" autofocus>

                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Qui organise cet événement') }}</label> 
                    <input id="qui_Orgqnise" type="radio" class="form-controlr" name="qui_Orgqnise" value="5" required autocomplete="email" autofocus> 1
                    <input id="qui_Orgqnise" type="radio" class="form-controlr" name="qui_Orgqnise" value="5" required autocomplete="email" autofocus> 2
                    <input id="qui_Orgqnise" type="radio" class="form-controlr" name="qui_Orgqnise" value="5" required autocomplete="email" autofocus> 3

                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Information sur les organisateurs') }}</label> 
                    <input id="Inf_even" type="text" class="form-controlr" name="Inf_even" value="8" required autocomplete="email" autofocus>

                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Périodicité') }}</label> 
                    <input id="Periodicite" type="checkbox" class="form-controlr" name="Periodicite" value="6" required autocomplete="email" autofocus>1
                    <input id="Periodicite" type="checkbox" class="form-controlr" name="Periodicite" value="6" required autocomplete="email" autofocus>2
                    <input id="Periodicite" type="checkbox" class="form-controlr" name="Periodicite" value="6" required autocomplete="email" autofocus>3
                    <input id="Periodicite" type="checkbox" class="form-controlr" name="Periodicite" value="6" required autocomplete="email" autofocus>4
                    <input id="Periodicite" type="checkbox" class="form-controlr" name="Periodicite" value="6" required autocomplete="email" autofocus>5


                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __("Lieu de l'évenement") }}</label> 
                    <input id="lieu_even" type="text" class="form-controlr" name="lieu_even" value="7" required autocomplete="email" autofocus>

                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __("Date de l'évenement") }}</label> 
                    <input id="date_even" type="Date" class="form-controlr" name="date_even" value="4" required autocomplete="email" autofocus>

                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Thème du dernier évenement') }}</label> 
                    <input id="theme_derier" type="text" class="form-controlr" name="theme_derier" value="5" required autocomplete="email" autofocus>

                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Participation du MTNIMA au dernier évenement') }}</label> 
                    <input id="Participation_MTNIMA" type="text" class="form-controlr" name="Participation_MTNIMA" value="6" required autocomplete="email" autofocus>
                    <input id="Participation_MTNIMA" type="radio" class="form-controlr" name="Participation_MTNIMA" value="6" required autocomplete="email" autofocus> 1
                    <input id="Participation_MTNIMA" type="radio" class="form-controlr" name="Participation_MTNIMA" value="6" required autocomplete="email" autofocus> 2

                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Lieu du prochain évenement') }}</label> 
                    <input id="lieu_prochain" type="text" class="form-controlr" name="lieu_prochain" value="9" required autocomplete="email" autofocus>

                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Date du prochain évenement') }}</label> 
                    <input id="Date_prochain" type="date" class="form-controlr" name="Date_prochain" value="8" required autocomplete="email" autofocus>

                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __("degrès d'importance du prochaine évenement") }}</label> 
                    <input id="Degres_imp" type="text" class="form-controlr" name="Degres_imp" value="4" required autocomplete="email" autofocus>
                    <input id="Degres_imp" type="radio" class="form-controlr" name="Degres_imp" value="4" required autocomplete="email" autofocus> 1
                    <input id="Degres_imp" type="radio" class="form-controlr" name="Degres_imp" value="4" required autocomplete="email" autofocus> 2 
                    <input id="Degres_imp" type="radio" class="form-controlr" name="Degres_imp" value="4" required autocomplete="email" autofocus> 3


                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Niveau de participation requis pour le prochain évenement') }}</label> 
                    <input id="Niveau_imp" type="text" class="form-controlr" name="Niveau_imp" value="7" required autocomplete="email" autofocus>
                    <input id="Niveau_imp" type="radio" class="form-controlr" name="Niveau_imp" value="7" required autocomplete="email" autofocus> 1
                    <input id="Niveau_imp" type="radio" class="form-controlr" name="Niveau_imp" value="7" required autocomplete="email" autofocus> 2 
                    <input id="Niveau_imp" type="radio" class="form-controlr" name="Niveau_imp" value="7" required autocomplete="email" autofocus> 3


                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('format du prochaine évenement') }}</label> 
                    <input id="Format_prochain" type="text" class="form-controlr" name="Format_prochain" value="8" required autocomplete="email" autofocus>
                    <input id="Format_prochain" type="radio" class="form-controlr" name="Format_prochain" value="8" required autocomplete="email" autofocus> 1
                    <input id="Format_prochain" type="radio" class="form-controlr" name="Format_prochain" value="8" required autocomplete="email" autofocus> 2 
                    <input id="Format_prochain" type="radio" class="form-controlr" name="Format_prochain" value="8" required autocomplete="email" autofocus> 3


                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __("site web de l'évenement") }}</label> 
                    <input id="Site_web_even" type="text" class="form-controlr" name="Site_web_even" value="1" required autocomplete="email" autofocus>
                    
                    @endforeach
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                                <button type="res" class="btn btn-primary">
                                    {{ __('Annuler') }}
                                </button>




                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
