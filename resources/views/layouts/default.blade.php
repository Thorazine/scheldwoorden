<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            #main {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <!-- Latest compiled and minified CSS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        @yield('head')
    </head>
    <body>
        <header>
          <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                  <h4 class="text-white">Over</h4>
                  <p class="text-muted">Deze website bevat resources in de vorm van scheldwoorden voor PHP en JavaScript. Gebruik ze vrij om snel een anti scheldwoorden systeem op te zetten.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                  <h4 class="text-white">Pagina's</h4>
                  <ul class="list-unstyled">
                    <li><a class="text-white" href="{{ URL::route('index') }}" title="Een willekeurig scheldwoord">Scheldwoord van de dag</a></li>
                    <li><a class="text-white" href="{{ URL::route('random') }}" title="Een willekeurig scheldwoord">Willekeurig</a></li>
                    <li><a class="text-white" href="{{ URL::route('array.php') }}" title="Scheldwoorden in een PHP array">Php array</a></li>
                    <li><a class="text-white" href="{{ URL::route('array.json') }}" title="Scheldwoorden in een JSON array">Json array</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
              <a href="{{ URL::route('index') }}" class="navbar-brand d-flex align-items-center">
                <strong>Scheldwoorden</strong>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </div>
        </header>

        <div id="main">
            @yield('body')
        </div>

        <footer class="footer">
            @yield('footer')
            <div class="container">
            	<p class="float-right">
            		<a href="" class="eml">Je hebt iets te melden?</a>
            	</p>
            </div>
        </footer>

    	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        @yield('foot')

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-56554048-1', 'auto');
		  ga('send', 'pageview');

		</script>
    </body>
</html>
