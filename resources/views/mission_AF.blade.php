@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-25">
<button id="print" onclick="DowPDF6()" class="btn btn-outline-primary center">Télécharger en PDF</button>
<div class="card" id="org5">
          <div class="card-body"> 
@foreach ($Missions as $item)
<!-- donne de base de donnee -->
<table class="table">
    <Thead class="table">
        <tr >
        <th scope="col"> <h6> {{ __("1. Evenement :") }} </h6>   </th>                                   </tr><tr>   <th scope="row">{{$item->Evenement}}  </th> </tr><tr>
        <th scope="col"> {{ __("2. Secteur d'activité") }}</th>                                         </tr><tr>   <th scope="row">{{$item->Secteur_mis}}  </th> </tr><tr>                     
        <th scope="col"> {{ __("3. Organisation ou l'initiative qui organise cet évenement") }}</th>    </tr><tr> <th scope="row"> {{$item->qui_Organise}}</th>  </tr><tr>
        <th scope="col"> {{ __("4. Lieu") }}</th>                                                        </tr><tr> <th scope="row"> {{$item->lieu_mis}}</th>  </tr><tr>
        <th scope="col"> {{ __("5. Date de début") }}</th>                                                </tr><tr>  <th scope="row">{{$item->date_d}}  </th>   </tr><tr>
        <th scope="col"> {{ __("6. Date de fin") }}</th>                                                   </tr><tr> <th scope="row">{{$item->date_f}}  </th> </tr><tr>
        <th scope="col"> {{ __("7.le théme de l'évenement") }}</th>                                      </tr><tr>  <th scope="row">{{$item->theme_evenement}}  </th> </tr><tr>
        <th scope="col"> {{ __("8. le ou les participants(noms et fonctions)") }}</th>                      </tr><tr> <th scope="row">{{$item->Participants}}  </th>  </tr><tr>
        <th scope="col"> {{ __("9. Nature de prise en charge ") }}</th>                                      </tr><tr>   <th scope="row">{{$item->Nature_prise_en_charge}}  </th> </tr><tr>
        <th scope="col"> {{ __("10. Ordre de mission") }}</th>                                           </tr><tr> <th scope="row"><a href="/Uploads/Mission/{{$item->Ordre_mission}}"> {{$item->Ordre_mission}} </a></th>  </tr><tr>
        <th scope="col"> {{ __("11. Résumé des idées retenus de cet évenement") }}</th>                         </tr><tr>  <th scope="row">{{$item->Resume_evenement}}  </th> </tr>
        <tr><th scope="col"> {{ __("12. pièce jointes") }}</th>                                                      </tr><tr>   <th scope="row">{{$item->Pieces_Joint}}  </th></tr>
        <tr><th scope="col"> {{ __("13. lieu prochain") }}</th>                                                      </tr><tr>   <th scope="row">{{$item->lieu_prochain}}  </th></tr>
        <tr><th scope="col"> {{ __("14. Date prochain") }}</th>                                                      </tr><tr>   <th scope="row">{{$item->Date_prochain}}  </th></tr>
        <tr>
        </tr>
    <Thead>
<tbody>

@endforeach
<tr><th scope="row" colspan=3>
 </th></tr>
</tbody>
</table>

<div class="container">
@foreach ($Missions as $item)
<!-- donne de base de donnee --> <div class="d-lg-block"></div>
<h5> {{ __("1. Evenement :") }} </h4>                                            <div class="alert alert-success ">                {{$item->Evenement}}  </div>
<h5> {{ __("2. Secteur d'activité") }}      </h5>                                <div class="alert alert-success  d-lg-block">                     {{$item->Secteur_mis}}            </div>       
<h5> {{ __("3. Organisation ou l'initiative qui organise cet évenement") }} </h5><div class="alert alert-success d-lg-block">   {{$item->qui_Organise}}   </div>
<h5> {{ __("4. Lieu") }}                                         </h5>           <div class="alert alert-success d-non+e d-lg-block">       {{$item->lieu_mis}}  </div>
<h5> {{ __("5. Date de début") }}                                </h5>           <div class="alert alert-success d-non+e d-lg-block">       {{$item->date_d}}  </div>
<h5> {{ __("6. Date de fin") }}                                  </h5>           <div class="alert alert-success d-non+e d-lg-block">      {{$item->date_f}} </div>
<h5> {{ __("7.le théme de l'évenement") }}                       </h5>           <div class="alert alert-success  d-lg-block">      {{$item->theme_evenement}} </div>
<h5> {{ __("8. le ou les participants(noms et fonctions)") }}    </h5>           <div class="alert alert-success  d-lg-block">    {{$item->Participants}} </div>
<h5> {{ __("9. Nature de prise en charge ") }}                   </h5>           <div class="alert alert-success  d-lg-block">     {{$item->Nature_prise_en_charge}}  </div>
<h5> {{ __("10. Ordre de mission") }}                            </h5>           <div class="alert alert-success  d-lg-block">   <a href="/Uploads/Mission/{{$item->Ordre_mission}}" download="/Uploads/Mission/{{$item->Ordre_mission}}"> {{$item->Ordre_mission}} </a> </div>
<h5> {{ __("11. Résumé des idées retenus de cet évenement") }}   </h5>           <div class="alert alert-success  d-lg-block">     {{$item->Resume_evenement}}  </div>
<h5> {{ __("12. pièce jointes") }}                               </h5>           <div class="alert alert-success  d-lg-block">    {{$item->Pieces_Joint}} </div>
<h5> {{ __("13. Date_prochain") }}                               </h5>           <div class="alert alert-success  d-lg-block">    {{$item->lieu_prochain}} </div>
<h5> {{ __("14. pièce jointes") }}                               </h5>           <div class="alert alert-success  d-lg-block">    {{$item->Date_prochain}} </div>
        
<div class="alert alert-light d-none d-lg-block"> </div>
</div>
</div>
@endforeach

<script>
document.getElementById('print').addEventListener('click', function (e) {
  e.preventDefault();

  var pdf = new jsPDF('p', 'pt', 'A4');
  //pdf.internal.scaleFactor = 1.55;
  pdf.addFont('Arial.ttf', 'Arial1', 'normal');
  // Charger la police
  pdf.setFont('Arial1');
  pdf.addHTML(document.getElementById('org5'),
    { allowTaint: true },
    function () { pdf.save('org5.pdf'); }
  );});
</script>
@endsection
