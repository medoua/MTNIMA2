@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <button id="print" onclick="DowPDF()" class="btn btn-outline-primary center">Télécharger en PDF</button>
            <div class="card" id="org">
            <div class="card-body"> 
            <!--  <a href="{{ url('/Organisation.gen_pdf') }}" download="nom_du_fichier.pdf">Télécharger le fichier</a> -->
            
<div id="org0" class="card-body table-light+"> 
                <div class="ale+rt alert-succes+s" role="alert">
                
@foreach ($Organisations as $item)
<a href="{{ route('genpdf', $item->id) }}" >Télécharger le fichier</a>
<!-- donne de base de donnee -->
<table class=" table table-ligh+t">
  <!--  <Thead class="table-warning"> <tr> <th colspan="2" > Organisation  </th></tr> </Thead > -->
  <tr>               
        <th scope="col" width="80%" class="table-inf+o"> {{ __("1. Nom de l'organisation :") }}</th>  </tr><tr>     <th scope="row-md-5" class="alert alert-success">{{$item->Nom_Org}}  </th> </tr><tr>
        <th scope="col" class="table-inf+o">  {{ __("2. secteur d'activité :") }}</th>                 </tr><tr>    <th scope="row" class="alert alert-success">@foreach ($Qrg_sects as $item1)  {{$item1->nom_secteur}} </br> @endforeach</th>        </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("3. Mission:") }}</th>                             </tr><tr>     <th scope="row" class="alert alert-success"> {{$item->Mission_Org}}</th>        </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("4. Statut:") }}</th>                              </tr><tr>     <th scope="row" class="alert alert-success"> {{$item->Statut_Org}}</th>       </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("5. Date de création:") }}</th>                    </tr><tr>     <th scope="row" class="alert alert-success"> {{$item->Date_Org}}</th>       </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("6. Historique:") }}</th>                          </tr><tr>     <th scope="row" class="alert alert-success"> {{$item->Histo}}</th>   </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("7. Siège:") }}</th>                               </tr><tr>     <th scope="row" class="alert alert-success"> {{$item->Siege_Org}}</th>     </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("8. Date d'adhésion de la Mauritanie:") }}</th>    </tr><tr>     <th scope="row" class="alert alert-success"> {{$item->Date_adh_Mauri}}</th>     </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("9. cotisation:") }}</th>                          </tr><tr>     <th scope="row" class="alert alert-success"> {{$item->Cotisation}}</th>     </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("10. Montant de la cotisation:") }}</th>           </tr><tr>     <th scope="row" class="alert alert-success"> {{$item->Montant_coti}}</th>      </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("11. qui paie cette cotisation:") }}</th>          </tr><tr>     <th scope="row" class="alert alert-success">@foreach ($Qui_paie_orgs as $item2)  {{$item2->nom_qui_paie_coti}} </br> @endforeach</th>    </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("12. Etat de la cotisation:") }}</th>              </tr><tr>     <th scope="row" class="alert alert-success">@foreach ($Etat_orgs as $item3) {{$item3->nom_Etat_coti}} </br> @endforeach</th>    </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("13. Site Web:") }}</th>                           </tr><tr>     <th scope="row" class="alert alert-success"> {{$item->Sie_web_Org}}</th>      </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("14. Contacts:") }}</th>                           </tr><tr>     <th scope="row" class="alert alert-success"> {{$item->Contacts_Org}}</th>     </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("15. Existent-ils des postes occupés par des responsables mauritaniens:") }}</th>  </tr><tr>
           <th scope="row" class="alert alert-success"> {{$item->Postes_ocuup}}</th>    </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("16. Existe-t-il une oppotunité de candidature mauritanienne à des postes au niveau de cette organisation ou institution :") }}</th>  </tr><tr>
          <th scope="row" class="alert alert-success"> {{$item->Candid_Mau_Org}}</th>      </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("17. degrès d'importance de cette organisation ou institution:") }}</th>   </tr><tr>
          <th scope="row" class="alert alert-success"> {{$item->Degres_Org}}</th>     </tr><tr>
        <th scope="col" class="table-inf+o"> {{ __("18. Qui est le point focal au MTNIMA :") }}</th>   </tr><tr>
            <th scope="row" class="alert alert-success"> {{$item->PF_MTNIMA}}</th>    </tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="/js/jspdf.umd.min.js"></script> 
<script src="/js/jspdf.min.js"></script> 
<script>
        function DowPDF5() {
          const doc = new jsPDF();
            doc.text('Hello world!', 10, 10);
            doc.text('Hello world2!', 10, 20);
            doc.text('Hello world3!', 10, 40);
            doc.save('test2.pdf');
        }
    </script>
<script>
    function DowPDF1() {
        var divContenu = document.getElementById('org');
        var doc = new jsPDF();
        doc.fromHTML($('#org').html(), 7, 7, {
          'width': 200,
          //'elementHandlers': specialElementHandlers
        });
        //doc.fromHTML(element, 15, 15);
        doc.save('sample-file.pdf');
      };
/*
        doc.fromHTML(divContenu, {
            callback: function(pdf) {
                var nomFichier = 'contenu.pdf';
                pdf.save(nomFichier);
            }
        });
    } */
</script>
<script>
    // انتظر حتى يتم تحميل المحتوى
     function DowPDF() {
        // احضار عنصر HTML الذي تريد تحويله إلى PDF
        var element = document.getElementById('org');
        // خيارات تحويل PDF
        var options = {
            margin: 0.1,
            filename: 'organ89.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
        };
        // استخدام html2pdf لتحويل العنصر إلى PDF وتنزيله
        html2pdf().from(element).set(options).save();
    };
</script>
<script>
document.getElementById('print').addEventListener('click', function (e) {
  e.preventDefault();

  var pdf = new jsPDF();
  //pdf.internal.scaleFactor = 1.55;
  pdf.addFont('Arial.ttf', 'Arial1', 'normal');
  // Charger la police
  pdf.setFont('Arial1');
  pdf.addHTML(document.getElementById('org'),
    { allowTaint: true },
    function () { pdf.save('org.pdf'); }
  );});
</script>

<button id="generate-pdf" onclick="generatePDF()">Generate PDF</button>

    <script>
        // Function to generate PDF from HTML content
        function generatePDF() {
            // Create new jsPDF instance
            const doc = new jsPDF();

            // Get HTML content to be converted to PDF
            const htmlContent = document.body.innerHTML;

            // Generate PDF from HTML content
            doc.addHTML(htmlContent, {
                callback: function (doc) {
                    // Save the PDF
                    doc.save('generated-pdf.pdf');
                }
            });
        }

        // Add click event listener to the button
        document.getElementById('org').addEventListener('click', generatePDF);
    </script>

@endsection
