<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/login1.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
      ]); ?>
    </script>
  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-if">
      <div class="container"> 
        <div class="navbar-header">
          <!-- <img class="logo-if" src="images/logo_atu.png" alt="logotipo do if">  -->      
        </div>   
      </div>
    </nav>  
    
    @yield('content')

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <p>© 2017 - Todos os direitos reservados</p>
            <p>Desenvolvido por
              <a href="https://www.facebook.com/marcio.diniz.5203" target="_blank">
                Márcio Rodrigues Diniz.
              </a>
            </p>
          </div>
        </div>
      </div>
    </footer>
  </body>
  </html>
