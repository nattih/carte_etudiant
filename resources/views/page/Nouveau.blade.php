@include("include.header")

  
  

  <main id="main">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
     
<h1>PARTIE CARTE</h1>
     
<body>
 
 <div class="container-fluid">
 <div class="row justify-content-center">
 <div class="col-md-5">
 <div class="card">
                 <div class="card-header">Enregistrer une carte</div>
 
                 <div class="card-body">
                 <form  method="post" action="{{route('carte.store')}}" enctype="multipart/form-data">
                 @csrf
                     <div class="form-group">
                         
                             <label for="nom">Matricule :</label>
                             <input type="text" name="matricule" id="matricule" class="form-control">
                     </div>
                     
                     <div class="form-group">
                         
                             <label for="nom">Nom :</label>
                             <input type="text" name="nom" id="nom" class="form-control">
                        
                     </div>
                      
                     <div class="form-group">
                         
                             <label for="prenom">Prenom (s) :</label>
                             <input type="text" name="prenom" id="prenom" class="form-control">
                        
                     </div>
                     
                     <div class="form-group">
                     <label for="ufr">UFR :</label>
                             <select name="ufrs_id" class="form-control">
                             <option value="0" >Choisir l'UFR</option>
                             <?php $i=0; ?>
                            @foreach($ufrs as $ufr)
                            <?php $i++; ?>
                             
                             <option  value=" {{$ufr->id}}">{{$i}}. {{$ufr->nom}} </option>
                             @endforeach
                             </select>
                            
                     </div>
                 
                     <div class="form-group">
                         
                             <label for="filiere">Filiere :</label>
                             <select name="filiere_us_id" class="form-control">
                             <option value="0" >Choisir une filiere</option>
                             <?php $i=0; ?>
                            @foreach($filieres as $filiere)
                            <?php $i++; ?>
                             
                             <option  value=" {{$filiere->id}}">{{$i}}. {{$filiere->nom}} </option>
                             @endforeach
                             </select>
                        
                     </div>
                     
                     <div class="form-group">
                         
                             <label for="nom">Cycle :</label>
                             <select name="cycles_id" class="form-control">
                             <option value="0" >Choisir le cycle</option>
                             <?php $i=0; ?>
                             @foreach($cycles as $cycle)
                             <?php $i++; ?>
                              
                              <option  value=" {{$cycle->id}}">{{$i}}. {{$cycle->nom}} </option>
                              @endforeach
                              
                             </select>
                        
                        
                     </div>
                     <div class="form-group">
                         
                         <label for="nom">Niveau :</label>
                         <select name="niveaux_id" class="form-control">
                         <option value="0" >Choisir la classe</option>
                         <?php $i=0; ?>
                         @foreach($nivos as $nivo)
                         <?php $i++; ?>
                          
                          <option  value=" {{$nivo->id}}">{{$i}}. {{$nivo->nom}} </option>
                          @endforeach
                          
                         </select>
                    
                    
                 </div>
                 <div class="form-group">
                         
                         <label for="nom">Année academique :</label>
                         <select name="anne_academiques_id" class="form-control">
                         <option value="0" >Choisir l'année en cours</option>
                         <?php $i=0; ?>
                         @foreach($annes as $anne)
                         <?php $i++; ?>
                          
                          <option  value=" {{$anne->id}}">{{$i}}. {{$anne->nom}} </option>
                          @endforeach
                          
                         </select>
                    
                    
                 </div>
                 <div class="form-group">
                         
                         <label for="nom">Nationalité :</label>
                         <select name="nationalites_id" class="form-control">
                         <option value="0" >Choisir la classe</option>
                         <?php $i=0; ?>
                         @foreach($nations as $nation)
                         <?php $i++; ?>
                          
                          <option  value=" {{$nation->id}}">{{$i}}. {{$nation->nom}} </option>
                          @endforeach
                          
                         </select>
                 </div>
                 <div class="form-group">
                         
                         <label for="email">Email :</label>
                         <input type="email" name="email" id="email" class="form-control">
                    
                 </div>
                 <div class="form-group">
                         
                         <label for="tuteur">Tuteur :</label>
                         <input type="tuteur" name="tuteur"  id="tuteur" class="form-control">
                    
                 </div>
                 <div class="form-group">
                         
                         <div class="custom-file">
                             <input type="file" name="photo"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                             <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                         </div>
                     
                     </div>
                     <div class="form-group">
                          
                             <button type="submit" class="btn btn-success w-40 float-right">creer</button>
                          
                     </div>
                 </form>
             </div>
             </div>
             </div>
 </body>
  
    </div>
  </section><!-- End Hero -->
  <hr>
     
    

  </main><!-- End #main -->

  @include("include.footer")
