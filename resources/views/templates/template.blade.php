<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Trabalhos Freela</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/style/style.css')}}"
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{url('assets/style/img/branding.png')}}" id="brand"></a>

          <div class="text-center mt-3 mb-4">
            <a href="{{url('freela/create')}}">
              <button type="button" class="btn btn-success">Cadastrar</button>
            </a>
          </div>
        </div>
    </nav>
    <br><br>
    @yield('content')
    <br><br>
    <footer class="footer navbar-fixed-bottom">
        <div class="text-center mt-3 mb-4">
            <p>Desenvolvido por Guilherme Manuel P. de Castro</p>
        </div>
    </footer>
</body>
</html>