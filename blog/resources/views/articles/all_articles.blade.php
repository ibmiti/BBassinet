<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/main.scss') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a7bffd41d3.js"></script>
    <title>BabyBassinet - Blog {{ $article->title ?? '' }} </title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap');
    .col-lg  {
        /* font-family: 'Raleway', 'Roboto'; */
        font-family: 'Big Shoulders Stencil Display', cursive;
        font-size: 40px;
    }

    nav ul li {
        /* font-family: 'Raleway', 'Roboto'; */
        font-family: 'Big Shoulders Stencil Display', cursive;
        font-size: 40px;
    }

    .col-lg  {
        /* font-family: 'Raleway', 'Roboto'; */
        font-family: 'Big Shoulders Stencil Display', cursive;
        font-size: 40px;
    }

    .col-md {
      font-family: Verdana;
      font-size: 16px;
      color: #555555;
      line-height: 1.5;
      letter-spacing: .45px;
      /* margin: 20px 20px 20px 20px;
      padding: 20px 100px 20px 100px; */
    }

    .col-sm {
      font-family: Verdana;
      font-size: 16px;
      color: #555555;
      line-height: 1.5;
      letter-spacing: .45px;
      /* margin: 20px 20px 20px 20px;
      padding: 20px 100px 20px 100px; */
    }

    ul {
      list-style-type: none;
    }

  img {
    border-radius : 1%;
    /* -moz-border-radius:50%;
    -webkit-border-radius:50%; */
  }

  a {
  color: white;
  text-decoration: none;
}
  a:hover {
   color: teal;
  }

  a:link {
    text-decoration: none;
  }


  a:visited {
   text-decoration: none;
  }

</style>

<body>
<div class="container container-fluid">

<nav class="navbar navbar-light navbar">
<a id="logo" href="/">
        <img src="{{asset('images/bbLogo.png')}}" class="navbar-brand d-inline-block align-to waves-effect" width="60" height="80" style="padding-top:15px" /> 
</a>
<strong class="navbar-brand" 
                style="font-family: 'Big Shoulders Stencil Display', cursive; font-size: 40px; padding-top: 10px;"
                href="#">
                BB + BLOG + LIST ARTICLE {{ $list_article->id ?? '' }}
                </strong>   

  <button class="navbar-toggler" 
          type="button" 
          data-toggle="collapse"
          data-target="#navbarSupportedContent15"
          aria-controls="navbarSupportedContent15"
          aria-expanded="false" 
          aria-label="Toggle navigation"
          style="border: none;outline: none;"
          >
  <span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent15">
    <ul class="navbar-nav ml-auto">
        <?php     
            $uri = Request::getRequestUri();
            $article_id = $list_article->id; 
            if ($uri){
              echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');
              echo ('_____________');
              echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');
              echo ('_____________');
              echo ('<li class="nav-item active"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE </strong></a></li>');
              echo ('_____________');
              echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
            }
        ?>
   </ul> 
  </div>
</nav>

<div class="container container-fluid">
    <div style="margin-top: 50px;" class="row">
        <h1 style="padding-bottom: 15px;" class="col-lg text-center">{{ $list_article->title ?? ''}}</h1>
    </div>
</div>

<hr width="300">
<hr width="300">
<hr width="300">

<div class="container container-fluid">
  <div class="row mt-5">
   
  <div class="row justify-content-center mt-3">
    <div class="col-lg text-center">
        <button class="btn btn-lg btn-dark"><a href="/articles">BACK TO ARTICLES</a></button>
    </div>   
  </div>        
</div>

  <!-- Remove -->

    
<!-- <script src="{{ asset('js/main.js') }}"></script> -->

<!-- bootstrap related scripts -->

<!-- bootstrap related scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<x-footer />
</body>
</html>

