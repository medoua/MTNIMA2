<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">




<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>     {{ config('app.name', 'formuMTNIMA') }}</title>
    <link rel="icon" href="http://127.0.0.1:8000\img\N_S_M.svg">
    <!--
    
    <link rel="icon" href="http://127.0.0.1:8000\img\logo.png">
    -->
    <!-- Fonts 

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
-->
<style>
       /*src: url('{{ asset('/fonts/LouguiyaFR.ttf') }}') format('truetype'); */
    @font-face {font-family: 'LouguiyaFR';
    src: url('/fonts/LouguiyaFR.ttf') format('truetype');

        /* Autres styles de police */}
    .body { font-family: 'LouguiyaFR', sans-serif;}
</style>

<!-- Scripts -->

<style>.texte-rouge {
        color: red;}
</style>
<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  

-->


<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
@vite(['resources/sass/app.scss', 'resources/js/app.js']) 
-->

<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>  
<script src="/js/bootstrap.bundle.min.js"></script>  
<script src="/js/jspdf.umd.min.js"></script>  
<script src="/js/jspdf.min.js"></script> 
<script src="/js/html2pdf.bundle.min.js"></script> 
<script src="/js/svg.min.js"></script> 

</head>
<!--  
body {
    background-color: #f2f2f2; 
    background-repeat: no-repeat; 
    background-size: cover ; 
    background-size: 100% ; 
    background-position: center center; 
    background-attachment: fixed; 
}

-->
<head>
        <meta charset="UTF-8">
                <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">       
                <link rel="shortcut icon" href="/img/faveico.ico">
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
   

    <link href="/css/style.css" rel="stylesheet" media="screen">
<link href="/css/style2.css" rel="stylesheet" media="screen">
  
    <link href="/css/show_style.css" rel="stylesheet" media="screen"> 
    
    <link href="/css/bootstrap.min.css " rel="stylesheet">
   <link href="/css/icofont.min.css" rel="stylesheet" media="screen">
    <link href="/css/slick.css" rel="stylesheet" media="screen">
    <link href="/css/slick-theme.css" rel="stylesheet" media="screen">
<link href="/css/font-awesome.min.css" rel="stylesheet" media="screen">
<link href="/css/card_style.css" rel="stylesheet" media="screen">

-->

<link href="/css/bootstrap.min5.1.3.css " rel="stylesheet">  
<link href="/css/other-style.css" rel="stylesheet" media="screen"> 
<link href="/css/bootstrap.min.css " rel="stylesheet">    
    
   
  
    
                                                   
        <!-- Google tag (gtag.js) -->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-M4G601E1YS"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-M4G601E1YS');
        </script>
    </head>


<style>  

</style>


<body style="min-width:300px">
<!-- -->
<header class="hidden-print">
            	
<nav class="navbar navbar-expand-lg navigation" id="navbar">
<div class="container">
	
		<table>
			<tbody><tr>
				<td>
					<img id="_logo" src=" {{ url('/img/N_S_M.svg') }}" alt="" class="img-fluid" width="90px">
				</td>
				<td>
					<span style="color:#fff;font-size:25px ">République Islamique de Mauritanie</span>
					<h6 style="color:#fff;font-size:13px;margin-left:23% ;  ">Honneur - Fraternité - Justice</h6>
					<h3 style="color:#fff;text-align: center;font-size:15px">Minstère de la Transformation Numérique, de L'inovation </br> et de la Modernisation de L'Administration </h3>
				</td>
			</tr>
		</tbody>
  </table>
	</div>
	</nav>
        </header>
<!-- 

    <div id="app">
    <img src="" width=6%> 

-->
    
    <!-- <img src="https://mtnima.gov.mr/sites/default/files/inline-images/Header%20Mtnima%20AR.png" > 
<nav class="navbar navbar-expand-md bg-dark border-bottom border-body" data-bs-theme="dark">
  style="background-color: #e3f2fd;"     
-->
<nav  class="navbar  navbar-expand-md navbar-light bg-white shadow-sm" >
  <!-- Navbar content -->

            <div class="container" >

            
                <a  class="navbar-brand" href="{{ url('/home') }}"> {{ config('app.name', 'MTNIMA') }} </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav menu mod-list me-auto">
                    <a  class="navbar-brand btn-outline-" href="{{ url('/Organisation') }}"> {{ __('Organisation') }} </a>
                        <a class="navbar-brand item-117" href="{{ url('/Evenement') }}"> {{ __('Evénement') }} </a>
                        <a class="navbar-brand" href="{{ url('/Ptfs') }}"> {{ __('PTFs et coopération Bilatérale') }} </a>
                        <a class="navbar-brand" href="{{ url('/mission') }}"> {{ __('Mission') }} </a>

                        @if(auth()->check() && (auth()->user()->isAdmin() || auth()->user()->isSuperAdmin()))
                        <a class="navbar-brand" href="{{ url('/Administateur') }}"> {{ __('Administateur') }} </a>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                   
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))


                        
                                 
                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                   
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg>    

                                    {{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
</svg>    
                                    
                                    {{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                     <!--   <a  class="navbar-nav ms-auto" href="{{ url('#') }}">  -->
                      <!-- notification -->
                        <button type="button" class="btn btn+-primary" data-toggle="modal" data-target="#myModal">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901"/>
                    </svg>
                    
                    </button>
                         

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>

                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg>

                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                </div>
</div>



            </div>
        </nav>

        <main class="py-4">


<!-- Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"> 
        <h4 class="modal-title">  Notification  </h4> 
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
            <table class="table">
                <th>#</th> <th>name</th>  <th>date</th>
                <tr>
                <td>01</td> <td><p>Body Notification Body Notification</p> </td>  <td>2024-02-16 02:12:57</td> </tr>
                <td>02</td> <td><p>Body Notification Body Notification</p> </td>  <td>2024-02-16 02:12:57</td> </tr>
                <td>03</td> <td><p>Body Notification Body Notification</p> </td>  <td>2024-02-16 02:12:57</td> </tr>
                <td>04</td> <td><p>Body Notification Body Notification</p> </td>  <td>2024-02-16 02:12:57</td> </tr>
                <td>05</td> <td><p>Body Notification Body Notification</p> </td>  <td>2024-02-16 02:12:57</td> </tr>
                <td>06</td> <td><p>Body Notification Body Notification</p> </td>  <td>2024-02-16 02:12:57</td> </tr>
                <td>07</td> <td><p>Body Notification Body Notification</p> </td>  <td>2024-02-16 02:12:57</td> </tr>
                <td>08</td> <td><p>Body Notification Body Notification</p> </td>  <td>2024-02-16 02:12:57</td> </tr>
                <td>09</td> <td><p>Body Notification Body Notification</p> </td>  <td>2024-02-16 02:12:57</td> </tr>
                <td>10</td> <td><p>Body Notification Body Notification</p> </td>  <td>2024-02-16 02:12:57</td> </tr>

            </table>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Ferme</button>
      </div>

    </div>
  </div>
</div>
<script>
#myModal {
  position: absolute;
  top: 100%;
  left: 0;
  transform: translate(0, -100%);
  background-color: #fff;
  border: 1px solid #ccc;
  padding: 10px;
}


  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>


            @yield('content')
        </main>
        
    </div>
</body>
</html>
