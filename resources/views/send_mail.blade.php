
  @include("include.header")

         <main id="main">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container">
      

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
<link href="{{asset('assets/css/style.css') }}" rel="stylesheet">


<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>envoie mail</title>
</head>
<body> 
    <div class="container border mycard" >
       <h3>Envoyer un Mail</h3>
      <form method="post" action="{{route('sendMail')}} " >  
      @csrf
            <div class="row col-md-12"  >  
              <span>Envoyer A :</span>
              <input type="text" name="to" id="" placeholder="Ex:email@gmail.com" require>
            </div> <br>

            <div class="row col-md-12  mt-2 p-2 bg "  >  
               <span>titre:</span>
               
               <input type="text" name="title" id="" placeholder="Entrer titre">
            
              <textarea name="body"  id="" cols="34" rows="5"  placeholder="Entrer un message a envoyer"></textarea>
     
            </div>
     <button type="submit" >Envoyer</button>       
       </form>
</body>
</html>

</div>
  </section><!-- End Hero -->
  <hr>

  </main><!-- End #main -->

  
@include("include.footer")