@include("include.header")

<main id="main">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container">
      

       <div class="section-title" >
          <h2 ><strong> LISTE DES ETUDIANTS</strong></strong></h2> 
        </div>
         <a class="btn btn-primary" href="{{ route('carte.nouveau') }}">Ajouter une carte</a>
         <a class="btn btn-primary" href="{{ route('mail') }}"> Evoyer un Mail</a>

<div class="table responsive fcontainer">
<table class="table table-striped table-bordered table-over texte1" >
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
<td>{{$carte->ufrs_id}}</td>
<td>{{$carte->email}}</td>
<td><a href="{{route('carte.details',['carte'=>$carte->nom,'id'=>$carte->id])}}">Détail</a></td>
<td><a href="">Modifier</a></td>
<td><a href="{{route('carte.supprimer', ['id'=>$carte->id])}}">Supprimer</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>

</div>
  </section><!-- End Hero -->
  <hr>
     
    

  </main><!-- End #main -->

  
  @include("include.footer")
