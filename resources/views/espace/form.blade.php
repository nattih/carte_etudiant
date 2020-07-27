<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Cars App</title>
</head>
<body>
    <div class="container-fluid">
    <section>
        <div class="jumbotron jumbotron-fluid bg-warning p-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div><a class="btn btn-success" href="{{ route('home') }}">Retour à l'accueil</a></div>
                        <h3 class="display-1 test-white">ESPACE ADMINISTRATEUR</h3>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form  method="post" action="{{route('ufrs.store') }}">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-8">
                            <label for="nom">UFR :</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success w-40 float-right">ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <form action="{{route('filiere.store') }}" method="post">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-8">
                            <label for="nom">FILIERE :</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <label for="contact" >UFR :</label>
                            <select name="ufrs_id" class="form-control">
                            <option value="0" >Choisir l'UFR correspondante</option>
                            <?php $i=0; ?>
                           @foreach($ufrs as $ufr)
                           <?php $i++; ?>
                            <option  value="{{$ufr->id}}">{{$i}}. {{$ufr->nom}}</option>
                            @endforeach
                            </select>
                        </div>  
                    </div>
                    <div class="row form-group">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success w-40 float-right">ajouter</button>
                        </div>
                    </div>
                </form>
             
        </div>
        <div class="col-md-4">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>N°</th>
                        <th>ufr</th>
                        <th>SUPPRIMER</th>
                    </tr>
                    <?php $i=0; ?>
                    @foreach($ufrs as $ufr)
                    <?php $i++; ?>
                    <tr>
                        <td>{{$i}}</td>
                        <td><a  href="{{route('ufr.details',['ufr'=>$ufr->nom,'id'=>$ufr->id])}}">{{$ufr->nom}}</a</td>
                        <td><a href="{{route('ufrs.supprimer', ['id'=>$ufr->id])}}" class="btn btn-am btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            </section>
<section>

<!-- <div class="container"> -->
<div class="row">
            <div class="col-md-4">
                <form  method="post" action="{{route('cycle.store') }}">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-8">
                            <label for="nom">CYCLE :</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success w-40 float-right">ajouter</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <form action="{{route('niveau.store') }}" method="post">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-8">
                            <label for="nom">NIVEAU :</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>
                     
                    <div class="row form-group">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success w-40 float-right">ajouter</button>
                        </div>
                    </div>
                </form>
        </div>
</div>
 
</section>
<section>

<!-- <div class="container"> -->
<div class="row">
            <div class="col-md-4">
                <form  method="post" action=" {{route('anne.store') }}">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-8">
                            <label for="nom">ANNEE ACADEMIQUE :</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success w-40 float-right">ajouter</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <form  method="post" action="{{route('nation.store') }}">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-8">
                            <label for="nom">NATIONALITE :</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success w-40 float-right">ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
</div>
 
</section>
 
    </div>
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>