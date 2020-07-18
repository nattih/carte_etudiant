 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Cars App</title>
</head>
<body>

<div class="section-title" >
          <h2 ><strong> LISTE DES ETUDIANTS</strong></strong></h2> 
        </div>
         <a class="btn btn-primary" href="{{ route('carte.nouveau') }}">Ajouter une carte</a>
<div class="table responsive">
<table class="table table-striped table-bordered table-over" >
<thead>
<th>N°</th>
<th>Matricule</th>
<th>Nom/prenom</th>
<th>UFR</th>
<th>Email</th>
<th>Details</th>
<th>Modifier</th>
<th>Suprimer</th>
</thead>
<tbody>
<?php $i=0; ?>
@foreach($cartes as $carte)
<?php $i++; ?>
<tr>
<td>{{$i}}</td>
<td>{{$carte->matricule}}</td>
<td>{{$carte->nom}} {{$carte->prenom}}</td>
<td>{{$carte->ufrs->nom}}</td>
<td>{{$carte->email}}</td>
<td><a href="{{route('carte.details',['carte'=>$carte->nom,'id'=>$carte->id])}}">Détail</a></td>
<td><a href="">Modifier</a></td>
<td><a href="{{route('carte.supprimer', ['id'=>$carte->id])}}">Supprimer</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>

        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>       
  </body>