<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <!-- Fonte do google -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

  <!-- Fonte do booStrap -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Css de aplicação -->

  <link rel="stylesheet" href="/css/styles.css">

  <!-- aplicação do JavaScript  -->

  <script src="/js/script.js"></script>

</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          <img src="/img/img-event.jpeg" alt="hdcevents logo">
        </a>
        <section> 
          <h1 class="navbar-logo">HDCEVENTS</h1>
        </section> 
        <ul class="navbar-nav">
          <li class="nav-item">
           <a href="/" class="nav-link">Eventos</a>
          </li>
          <li class="nav-item">
           <a href="/events/create" class="nav-link">Criar eventos</a>
          </li>
          <li class="nav-item">
           <a href="/login" class="nav-link">Entrar</a>
          </li>
          <li class="n av-item">
           <a href="/" class="nav-link">Cadastrar</a>
          </li>
          <li class="nav-item">
           <a href="/produtos" class="nav-link">Produtos</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="container-fluid">
      <div class="row">
        @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
        @endif
        @yield('content')
      </div>
    </div>
  </main> 
  <footer>
    <p>HDC Events &copy; 2023</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>