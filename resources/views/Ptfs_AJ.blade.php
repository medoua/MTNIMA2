@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Ajoute PFTs et coopération Bilatérale') }}</div>

                <div class="card-body">
                <div class="alert alert-success" role="alert">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form method="POST" action="{{ route('Ptfs.store') }}">
                @csrf
                <!--
                <label for="email" class="col-md-8 col-form-label  text-md-end">{{ __(" Ce formulaire enregistrera votre nom, veuillez renseigner votre nom") }}</label>
                <input id="form_enr" type="text" class="form-control  col-md-8" name="form_enr" value="5" autofocus>
                ************* 
            <textarea id="prompt-textarea" tabindex="0" data-id="request-NEW:0-8" rows="1" placeholder="Message ChatGPT…" 
                class="m-0 w-full resize-none border-0 bg-transparent py-[10px] pr-10 focus:ring-0 focus-visible:ring-0 dark:bg-transparent md:py-3.5 md:pr-12 placeholder-black/50 dark:placeholder-white/50 pl-3 md:pl-4" 
                style="max-height: 200px; height: 52px; overflow-y: hidden;"></textarea>
            
            -->
                
                <label for="email" class="col-md-15 col-form-label ">{{ __("1 - Nom de l'Institution ou programme *") }}</label>
                <input id="nom_ins" type="text" class="form-control col-md-+10" name="nom_ins" value="" autofocus placeholder="Nom de l'Institution ou programme"> </br>
                
                <label for="email" class="col-form-label  text-md-+end">{{ __("2 - Secteur ") }}</label>
                <div class="alert alert-succes+s" role="alert">
                @foreach ($Secteurs as $item)
                <input class="form-check-input" type="checkbox" name="Secteur_PTFS0[]" id="Secteur_PTFS" value="{{$item->id}}" multiple>  {{$item->nom_secteur}} </br>
                @endforeach
</div>
       <!--          <input class="form-check-input" type="checkbox" name="Secteur_PTFS" id="Secteur_PTFS" value="Numérique">  Numérique </p>  
                <input class="form-check-input" type="checkbox" name="Secteur_PTFS" id="Secteur_PTFS" value="Innovation">  Innovation </p> 
                <input class="form-check-input" type="checkbox" name="Secteur_PTFS" id="Secteur_PTFS" value="Modernisation de L'Administration">  Modernisation de L'Administration </p>
                -->
                
                <label for="email" class="col-form-label  text-md+-end">{{ __("3 - Missions ") }}</label> </br> 
                <input id="Mission__PTFs" type="text" class="form-control  " name="Mission__PTFs" value="" autofocus>
                
                <label for="Statut" class="col-form-label  text-md+-end">{{ __("4. Statut et Type ") }}</label> </br>
                <div class="alert alert-succes+s" role="alert">
          @foreach ($Statuts as $item)
                <input class="form-check-input" type="radio" name="Statut_Type" id="Statut_Type" value="{{$item->nom_Statut}}"> {{$item->nom_Statut}} </br>
                @endforeach
</div>
                
                <label for="email" class="col-form-label  text-md+-end">{{ __("5 - Point Focal en Mauritanie ") }}</label> </br>
                <input id="Point_focal" type="text" class="form-control  " name="Point_focal" value="" autofocus>
                
                <label for="email" class="col-form-label  text-md+-end">{{ __("6. Historique de coopération avec la mauritanie/MTNIMA") }}</label> </br>
                <input id="Hist_Coop" type="text" class="form-control  " name="Hist_Coop" value="" autofocus>
                
                <label for="email" class="col-form-label  text-md+-end">{{ __("6 - Siège ") }}</label> </br>
                <input id="Siege_PTFs" type="text" class="form-control  " name="Siege_PTFs" value="" autofocus>
                
                <label for="email" class="col-form-label  text-md+-end">{{ __("7 - Programmes *") }}</label> </br>
                <input id="programme" type="text" class="form-control  " name="programme" value="" autofocus>
                
                <label for="email" class="col-form-label  text-md+-end">{{ __("8 - Evénements *") }}</label> </br>
                <input id="Evenements" type="text" class="form-control  " name="Evenements" value="" autofocus>
                
                <label for="email" class="col-form-label  text-md+-end">{{ __("9 - Financements octroyés ou appuis *") }}</label> </br>
                <input id="Finnacements " type="text" class="form-control  " name="Finnacements" value="" autofocus>
                
                <label for="email" class="col-form-label  text-md+-end">{{ __("10 - Site Web ") }}</label> </br>
                <input id="Site_web_PTFs" type="text" class="form-control  " name="Site_web_PTFs" value="" autofocus> </br>
                
                <label for="email" class="col-form-label  text-md+-end">{{ __("11 - contacs ") }}</label>  </br>
                <input id="Contacts_PTFs" type="text" class="form-control  " name="Contacts_PTFs" value="" autofocus>  </br>
                
                <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary center">
                
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
  <path d="M11 2H9v3h2z"/>
  <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
</svg>

                                    {{ __('Enregistrer') }}
                                </button>
                                <button type="re" class="btn btn-outline-secondary center">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"/>
</svg>
                                    {{ __('Annuler') }}
                                </button>
</form> 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
