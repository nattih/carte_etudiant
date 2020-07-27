 
  <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Carte app</title>
</head>
  <body> 
    <section id="about-us" class="about-us">
        <div class="container-fluid" data-aos="fade-up">
        <div class="section-title"> <br>
        <div><a class="btn btn-primary" href="{{ route('carte.list') }}">Retour à la liste</a>
        </div> 
        </div> <br><br>
        <div id="partg" class="row justify-content-center">
        
          <div class="col-lg-3 align-items-center" data-aos="fade-left">
          <h3 style=" center;"><strong>{{$carte->nom}} {{$carte->prenom}}</strong></strong></h3><br>
                <img src=" {{$carte->photo}}" style="width:300px;height:300px;" class="bf5  rounded-circle"> 
          </div>
          <div class="col-lg-3 pt-4 pt-lg-4" data-aos="fade-right"><br><br>
          <h5><p class="card-text"><strong>Matricule        : </strong>{{$carte->matricule}}</p></h5>
          <h5><p class="card-text"><strong>UFR        : </strong>{{$carte->ufrs->nom}} </p></h5>
          <h5><p class="card-text"><strong>Filiere    : </strong>  {{$carte->filiere_us->nom}}</p></h5>
          <h5><p class="card-text"><strong>Classe     : </strong>{{$carte->niveaux->nom}}  </p></h5>
          <h5><p class="card-text"><strong>Année academique    : </strong> {{$carte->anne_academiques->nom}}</p></h5>
          <h5><p class="card-text"><strong>E-mail     : </strong>{{$carte->email}}</p></h5>
          <h5><p class="card-text"><strong>nationalite     : </strong>{{$carte->nationalites->nom}}  </p></h5>
          <h5><p class="card-text"><strong>Personne à contacter    : </strong> {{$carte->tuteur}}</p></h5><br>
          <a class="btn btn-danger " href="{{URL('carte/pdf',$carte)}}">IMPRIMER</a>
      </div> 
            <!-- // URL::to('/carte/pdf') -->
            </div>
             
    </section>
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> 
    </body>
            
  </html>

