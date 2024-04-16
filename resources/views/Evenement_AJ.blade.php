@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Ajoute un Evenement') }}</div>
                <div class="card-body">
                <div class="alert alert-success" role="alert">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 

                    <form method="POST" action="{{ route('Evenement.store') }}">
                    @csrf
                    
<!--
                    <label for="email" class="col-md-8 col-form-label text-md-+end">{{ __('1. Evenement') }}</label>  </br>
 <input id="optionType2" type="radio" class="form-check-input " name="optionType" value="text" > Evenement independent
<input id="optionType" type="radio" class="form-check-input " name="optionType" value="select" > Evenement Lieu </br>
  -->

  <!--                                
  <select id="optionType" class="form-select " name="optionType"  required autofocus>
            <option  value="" >  </option> 
            <option  value="text" > Evenement independent </option> 
            <option value="select" > Evenement Liee </option> 
  </select>    

  
        <div id="option1Field" style="display :none;">
                    <label for="email" class="col-md-8 col-form-label text-md-+end ">{{ __('1. Evenement') }}</label>  </br>
                    <input id="option1" type="text" class="form-control col-md-+10" name="Evenement" value="" >
        </div>
        -->
        <div id="option2Field" style="">
            <label for="email" class="col-md-8 col-form-label text-md-+end">{{ __('1. Evenement') }}</label>  </br>
            <select id="option2"  class="form-select " name="Evenement"  >
                <option value="" class="form-control"> </option>
                    @foreach ($Evens as $item)
                    <option value="{{$item->nom_even}}" class="form-control"> {{$item->nom_even}}</option>
                    @endforeach
            </select>
        </div>

                    <label for="email" class="col-md-5 col-form-label text-md+-end">{{ __('2. Description de l’événement') }}</label> </br>
                    <input id="info_even0" type="text" class="form-control col-md-+10" name="Description" value="" > </br>
<!-- af info Ajax 
<div id="infoField" style="display: none;"> 
        <label for="info">Info 8:</label> <span id="info_even"> </span></div>
         -->
                    <label for="email" class="col-md-4 col-form-label text-md+-end">{{ __('3. Qui organise cet événement') }}</label> </br>
                    <div class="alert alert-succes+s" role="alert">
                    @foreach ($Qui_orgs as $item)
                    <input id="qui_Orgqnise" type="radio" class="form-check-input " name="qui_Orgqnise" value="{{$item->nom_qui_org}}" > {{$item->nom_qui_org}} </br>
                    @endforeach
                    </div>
                    <label for="email" class="col-md-4 col-form-label text-md-+end">{{ __('4.Information sur les organisateurs') }}</label> </br>
                    <input id="Inf_even" type="text" class="form-control col-md-+10" name="Inf_even" value="" > </br>
                    
                    <label for="email" class="col-md-4 col-form-label text-md+-end">{{ __('5. Périodicité') }}</label> </br>
                    <div class="alert alert-succes+s" role="alert">
                    @foreach ($Periodicites as $item)
                    <input id="Periodicite" type="radio" class="form-check-input" name="Periodicite" value="{{$item->nom_Perio}}" >  {{$item->nom_Perio}} </br>
                    @endforeach
                    </div>
                    <label for="email" class="col-md-4 col-form-label text-md+-end">{{ __("6. Lieu de l'évenement") }}</label>  </br>
                    <input id="lieu_even" type="text" class="form-control col-md-+10" name="lieu_even" value="7" required autocomplete="email" autofocus> </br>

                    <label for="email" class="col-md-4 col-form-label text-md+-end">{{ __("7. Date de l'évenement") }}</label> </br>
                    <input id="date_even" type="Date" class="form-control col-md-+10" name="date_even" value="" required autocomplete="email" autofocus> </br>

                    <label for="email" class="col-md-4 col-form-label text-md+-end">{{ __('8. Thème du dernier évenement') }}</label> </br>
                    <input id="theme_derier" type="text" class="form-control col-md-+10" name="theme_derier" value="" required autocomplete="email" autofocus> </br>

                    <label for="email" class="col-md-+4 col-form-label text-md+-end">{{ __('9. Participation du MTNIMA au dernier évenement') }}</label> </br>
                    <div class="alert alert-succes+s" role="alert">
                    @foreach ($Paticipations as $item)
                    <input id="Participation_MTNIMA" type="radio" class="form-check-input" name="Participation_MTNIMA" value="{{$item->nom_Patici}}" >  {{$item->nom_Patici}} </br>
                    @endforeach
                    </div>
                    <label for="email" class="col-md-30 col-form-label text-md+-end">{{ __('10. Lieu du prochain évenement') }}</label>  </br>
                    <input id="lieu_prochain" type="text" class="form-control col-md-+10" name="lieu_prochain" value="" required autocomplete="email" autofocus> </br>

                    <label for="email" class="col-md-4 col-form-label text-md+-end">{{ __('11. Date du prochain évenement') }}</label> </br>
                    <input id="Date_prochain" type="date" class="form-control" name="Date_prochain" value="" required autocomplete="email" autofocus> </br>

                    <label for="email" class="col-md-30 col-form-label text-md+-end">{{ __("12. degrès d'importance du prochaine évenement") }}</label> </br>
                    <div class="alert alert-succes+s" role="alert">
                    @foreach ($Degres_impo_org_insts as $item)
                    <input id="Degres_imp" type="radio" class="form-check-input" name="Degres_imp" value="{{$item->nom_Degres}}" required > {{$item->nom_Degres}}</br>
                    @endforeach
                    </div>
                    <label for="email" class="col-md-10 col-form-label text-md+-end">{{ __('13. Niveau de participation requis pour le prochain évenement') }}</label> </br>
                    <div class="alert alert-succes+s" role="alert">
                    <input id="Niveau_imp" type="radio" class="form-check-input" name="Niveau_imp" value="Ministre" > Ministre </br>
                    <input id="Niveau_imp" type="radio" class="form-check-input" name="Niveau_imp" value="Haut cadre" > Haut cadre</br>
                    <input id="Niveau_imp" type="radio" class="form-check-input" name="Niveau_imp" value="expert" > expert </br>
                    <input id="Niveau_imp" type="radio" class="form-check-input" name="Niveau_imp" value="Autre" > Autre </br>
                    </div>

                    <label for="email" class="col-md-4 col-form-label text-md+-end">{{ __('14. format du prochaine évenement') }}</label>  </br>
                    <div class="alert alert-succes+s" role="alert">
                    <input id="Format_prochain" type="radio" class="form-check-input" name="Format_prochain" value="En ligne" > En ligne </br>
                    <input id="Format_prochain" type="radio" class="form-check-input" name="Format_prochain" value="Présentiel"> Présentiel </br>
                    <input id="Format_prochain" type="radio" class="form-check-input" name="Format_prochain" value="Hybride" > Hybride  </br>
                    </div>

                    <label for="email" class="col-md-4 col-form-label text-md+-end">{{ __("15. site web de l'évenement") }}</label>  </br>
                    <input id="Site_web_even" type="text" class="form-control" name="Site_web_even" value="" required autocomplete="email" autofocus> </br> 
                   
                    <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-outline-primary center"> 

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
  <path d="M11 2H9v3h2z"/>
  <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
</svg>
                                    {{ __('Enregistrer') }}
                                </button>
                                
                                <button type="res" class="btn btn-outline-secondary center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"/>
</svg>
                                    {{ __('Annuler') }}
                                </button>

           
        <script> 
                    $(document).ready(function() {
                     $('#optionType').change(function() {
                      var selectedOption = $(this).val(); 
                      if (selectedOption === 'text')  {
                      $('#option1Field').show(); 
                      $('#option2Field').hide();
                      $('#option2').removeAttr('name'); } 
                      else if (selectedOption === 'select') {
                       $('#option1Field').hide(); 
                       $('#option2Field').show(); 
                       $('#option1').removeAttr('name');
                       } 
                       }); 
                       }); 
        </script>
<script>
        $(document).ready(function() {
            $('#option2').change(function() {
                //var selectedEven = $(this).val();
                var selectedEven = { Evenement: $('#option2').val(),
                _token: $('input[name=_token]').val()};
                // "info" url:'/getInfo' + selectedEven,
                $.ajax({
                    type: 'GET',
                    //data: { Evenement: $('#Evenement').val()},
                    url:'/getInfo',
                    data: selectedEven,
                    success: function(response) {
                        $('#info_even').text(response.info_even24);
                        $('#info_even0').val(response.info_even24);
                        $('#infoField').show();
                    },
                   /* error: function() {
                        console.error('Error retrieving info');
                    } */
                });
            });
        });
    </script>
                  </div>
    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
