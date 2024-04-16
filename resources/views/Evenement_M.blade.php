@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Evenement') }}</div>

                <div class="card-body">
                <div class="alert alert-success" role="alert">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  
                    @foreach ($Evenements as $item)
                    <form method="POST" action="{{ route('Evenement_U', $item->id) }}">
                    @csrf
                    @method('PUT')
                    
                    <label for="email" class="col-md-15 col-form-label text-md-">{{ __('Evenement') }}</label> 
                    <input id="Evenement" type="text" class="form-control" name="Evenement" value="{{$item->Evenement}}" required autocomplete="email" autofocus>
                    </br>
                    <label for="email" class="col-md-15 col-form-label text-md-">{{ __('Description de l’événement') }}</label> 
                    <input id="Description" type="text" class="form-control" name="Description" value="{{$item->Description}}" required autocomplete="email" autofocus>
</br>
                    <label for="email" class="col-md-15 col-form-label text-md-">{{ __('Qui organise cet événement') }}</label> </br>
                    <div class="alert alert-succes+s" role="alert">
                    @foreach ($Qui_orgs as $item1)
                    <input id="qui_Orgqnise" type="radio" class="form-check-input " name="qui_Orgqnise" value="{{$item1->nom_qui_org}}"
                    @if(collect($Evenements)->contains('qui_Orgqnise', $item1->nom_qui_org))
                checked
                @endif
                    > {{$item1->nom_qui_org}} </br>
                    @endforeach
</div>
                    <label for="email" class="col-md-14 col-form-label text-md-">{{ __('Information sur les organisateurs') }}</label> 
                    <input id="Inf_even" type="text" class="form-control" name="Inf_even" value="{{$item->Inf_even}}" >

                    <label for="email" class="col-md-14 col-form-label text-md-">{{ __('Périodicité') }}</label> </br>
                    <div class="alert alert-succes+s" role="alert">
                    @foreach ($Periodicites as $item2)
                    <input id="Periodicite" type="radio" class="form-check-input" name="Periodicite" value="{{$item2->nom_Perio}}" 
                    @if(collect($Evenements)->contains('Periodicite', $item2->nom_Perio))
                    checked
                    @endif
                    > {{$item2->nom_Perio}} </br>
                    @endforeach 
                    </div>

                    <label for="email" class="col-md-14 col-form-label text-md-">{{ __("Lieu de l'évenement") }}</label> 
                    <input id="lieu_even" type="text" class="form-control" name="lieu_even" value="{{$item->lieu_even}}" required autocomplete="email" autofocus>

                    <label for="email" class="col-md-14 col-form-label text-md-">{{ __("Date de l'évenement") }}</label> 
                    <input id="date_even" type="Date" class="form-control col-md-3" name="date_even" value="{{$item->date_even}}" required  autofocus>

                    <label for="email" class="col-md-14 col-form-label text-md-">{{ __('Thème du dernier évenement') }}</label> 
                    <input id="theme_derier" type="text" class="form-control" name="theme_derier" value="{{$item->theme_derier}}" required autocomplete="email" autofocus>
</br>

                    <label for="email" class="col-md-15 col-form-label text-md-">{{ __('Participation du MTNIMA au dernier évenement') }}</label>  </br>
                    <div class="alert alert-succes+s" role="alert">
                    @foreach ($Paticipations as $item3)
                    <input id="Participation_MTNIMA" type="radio" class="form-check-input text-md-centre" name="Participation_MTNIMA" value="{{$item3->nom_Patici}}"
                    @if(collect($Evenements)->contains('Participation_MTNIMA', $item3->nom_Patici ))  checked  @endif
                    > {{$item3->nom_Patici}} </br>
                    @endforeach
                    </div>

     
                    <label for="email" class="col-md-14 col-form-label text-md-">{{ __('Lieu du prochain évenement') }}</label> 
                    <input id="lieu_prochain" type="text" class="form-control" name="lieu_prochain" value="{{$item->lieu_prochain}}" required autocomplete="email" autofocus>

                    <label for="email" class="col-md-14 col-form-label text-md-">{{ __('Date du prochain évenement') }}</label> 
                    <input id="Date_prochain" type="date" class="form-control col-md-3 " name="Date_prochain" value="{{$item->Date_prochain}}" required autocomplete="email" autofocus>

                    <label for="email" class="col-md-14 col-form-label text-md-">{{ __("degrès d'importance du prochaine évenement") }}</label> </br>
                    <div class="alert alert-succes+s" role="alert">
                    @foreach ($Degres_impo_org_insts as $item4)
                    <input id="Degres_imp" type="radio" class="form-check-input" name="Degres_imp" value="{{$item4->nom_Degres}}" 
                    @if(collect($Evenements)->contains('Degres_imp', $item4->nom_Degres ))  checked  @endif>{{$item4->nom_Degres}} </br>
                    @endforeach
                    </div>

                    <label for="email" class="col-md-14 col-form-label text-md-">{{ __('Niveau de participation requis pour le prochain évenement') }}</label> 
</br><div class="alert alert-succes+s" role="alert">
                    <input id="Niveau_imp" type="radio" class="form-check-input" name="Niveau_imp" value="Ministre" 
                    @if(collect($Evenements)->contains('Niveau_imp', "Ministre"))  checked  @endif > Ministre </br>
                    <input id="Niveau_imp" type="radio" class="form-check-input" name="Niveau_imp" value="Haut cadre"  
                    @if(collect($Evenements)->contains('Niveau_imp', "Haut cadre"))  checked  @endif > Haut cadre</br>
                    <input id="Niveau_imp" type="radio" class="form-check-input" name="Niveau_imp" value="expert"  
                    @if(collect($Evenements)->contains('Niveau_imp', "expert"))  checked  @endif > expert </br>
                    <input id="Niveau_imp" type="radio" class="form-check-input" name="Niveau_imp" value="Autre"  
                    @if(collect($Evenements)->contains('Niveau_imp', "Autre"))  checked  @endif > Autre </br>
                    </div>


                    <label for="email" class="col-md-14 col-form-label text-md-">{{ __('Format du prochaine évenement') }}</label> 
                    </br>
                    <div class="alert alert-succes+s" role="alert">
                    <input id="Format_prochain" type="radio" class="form-check-input" name="Format_prochain" value="En ligne" 
                    @if(collect($Evenements)->contains('Format_prochain', "En ligne"))  checked  @endif > En ligne </br>
                    <input id="Format_prochain" type="radio" class="form-check-input" name="Format_prochain" value="Présentiel"
                    @if(collect($Evenements)->contains('Format_prochain', "Présentiel"))  checked  @endif > Présentiel </br>
                    <input id="Format_prochain" type="radio" class="form-check-input" name="Format_prochain" value="Hybride" 
                    @if(collect($Evenements)->contains('Format_prochain', "Hybride"))  checked  @endif > Hybride  </br>
                    </div>
                    <label for="email" class="col-md-14 col-form-label text-md-">{{ __("Site web de l'évenement") }}</label> 
                    <input id="Site_web_even" type="text" class="form-control" name="Site_web_even" value="{{$item->Site_web_even}}" required autocomplete="email" autofocus>
     
                    @endforeach
                    <button type="submit" class="btn btn-primary center">
                                    {{ __('Enregistrer') }}
                                </button>
                                <button type="res" class="btn btn-secondary center">
                                    {{ __('Annuler') }}
                                </button>




                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
