<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">EVENTOS GC</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="badges.html">HOME</a></li>
        <li><a href="collapsible.html">CADASTRAR UM EVENTO</a></li>
      </ul>
    </div>
  </nav>
  
  @yield('conteudo') 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>