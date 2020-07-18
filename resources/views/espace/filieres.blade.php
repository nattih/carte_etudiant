 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Cars App</title>
</head>
</body>
<main id="main" >

<div class="section-title" >
          <h2 ><strong>liste des filieres</strong></strong></h2>
        </div>
        <a class="btn btn-danger" href="{{route('espace.nouveau')}}">retour </a>
<table class="table table-striped table-bordered table-over">
<thead>
<th>N°</th>
<th>Nom</th>
<th>Suprimer</th>
</thead>
<tbody>
<?php $i=0; ?>
@foreach($filieres as $filiere)
<?php $i++; ?>
<tr>
<td>{{$i}}</td>
<td>{{$filiere->nom}}</td>
<td><a href="{{route('filiere.supprimer', ['id'=>$filiere->id])}}">Supprimer</a></td>
</tr>
@endforeach
</tbody>
</table>
        </main><!-- End #main -->
        <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
        
