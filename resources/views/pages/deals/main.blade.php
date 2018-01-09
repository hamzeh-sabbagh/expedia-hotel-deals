<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Deals On Hotels</title>
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- main css style -->
    <link rel="stylesheet" type="text/css" href="/css/main.css" >
    <!-- Custom styles for this template -->
    <!-- <link href="album.css" rel="stylesheet"> -->
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Expedia hotel deals exercise.</p>
              <p>Hamzeh Sabbagh</p>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand">Expedia</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <p class="lead text-muted">Search over a million flights, hotels, packages, and more.</p>
          <p>
            <form action="deals" method="GET">
              <div class="form-group">
                      <input type="text" class="form-control" id="destinationCity" name="destinationCity" required="" autocomplete="off">
                      <span class="form-highlight"></span>
                      <span class="form-bar"></span>
                      <label class="float-label" for="destinationCity">Destination</label>
              </div>
              <div class="form-group">
                      <input type="text" class="form-control" id="lengthOfStay" name="lengthOfStay" required="" autocomplete="off">
                      <span class="form-highlight"></span>
                      <span class="form-bar"></span>
                      <label class="float-label" for="lengthOfStay">Length Of Stay</label>
              </div>

              <div class="form-group star-container">
                <label for="minStarRating" class="star-rate-label">Min rating</label>
                <div class="min star-wrapper">
                  <input class="star star5" name="minStarRating" id="minRadio5" type="radio" name="rating" value="5">
                  <label class="star star5" for="minRadio5"></label>

                  <input class="star star4" name="minStarRating" id="minRadio4" type="radio" name="rating" value="4">
                  <label class="star star4" for="minRadio4"></label>

                  <input class="star star3" name="minStarRating" id="minRadio3" type="radio" name="rating" value="3">
                  <label class="star star3" for="minRadio3"></label>

                  <input class="star star2" name="minStarRating" id="minRadio2" type="radio" name="rating" value="2">
                  <label class="star star2" for="minRadio2"></label>

                  <input class="star star1" name="minStarRating" id="minRadio1" type="radio" name="rating" value="1">
                  <label class="star star1" for="minRadio1"></label>
                </div>
              </div>

              <div class="form-group star-container">
                <label for="maxStarRating" class="star-rate-label">Max rating</label>
                <div class="max star-wrapper">
                  <input class="star star5" name="maxStarRating" id="maxRadio5" type="radio" name="rating" value="5">
                  <label class="star star5" for="maxRadio5"></label>

                  <input class="star star4" name="maxStarRating" id="maxRadio4" type="radio" name="rating" value="4">
                  <label class="star star4" for="maxRadio4"></label>

                  <input class="star star3" name="maxStarRating" id="maxRadio3" type="radio" name="rating" value="3">
                  <label class="star star3" for="maxRadio3"></label>

                  <input class="star star2" name="maxStarRating" id="maxRadio2" type="radio" name="rating" value="2">
                  <label class="star star2" for="maxRadio2"></label>

                  <input class="star star1" name="maxStarRating" id="maxRadio1" type="radio" name="rating" value="1">
                  <label class="star star1" for="maxRadio1"></label>
                </div>
              </div>
              <input type="submit" value="Search" id="search" class="btn btn-primary">
            </form>
          </p>
        </div>
      </section>

      <div class="album text-muted">
        <div class="container">
          @yield('deal-content')
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <script type="text/javascript">
      (function(){
        'use strict'
        
            var items = document.getElementsByTagName('li')

          function doSetTimeout(i) {
            //console.log(items)
            var t = items[i]
              setTimeout(function(){ 
                t.className = 'slideInLeft'; 
              }, (i+1) * 150);
          }

          for (var i = 0; i < items.length; ++i)
            doSetTimeout(i);
        
      })()
    </script>

  </body>
</html>
