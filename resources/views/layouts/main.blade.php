<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <title>@yield('title')</title>

        <style>
          body {
              font-family: Arial, sans-serif;
              margin: 0;
              padding: 0;
          }

          .header {
              background-color: #6e2a82;
              color: white;
          }

          .header-top {
              display: flex;
              justify-content: space-between;
              align-items: center;
              padding: 10px 20px;
          }

          .logo img {
              height: 50px;
          }

          .search-bar {
              display: flex;
              align-items: center;
          }

          .search-bar input {
              width: 400px;
              padding: 5px;
              border: none;
              border-radius: 3px;
          }

          .search-bar button {
              color: white;
              cursor: pointer;
          }

          .user-options a {
              color: white;
              margin-left: 20px;
              text-decoration: none;
          }

          .user-options a:hover {
              text-decoration: underline;
          }

          .nav-bar {
/*              background-color: #6e2a82;*/
              background-color: white;
              padding: 10px 20px;
          }

          .nav-bar ul {
              list-style: none;
              padding: 0;
              margin: 0;
              display: flex;
              justify-content: space-around;
          }

          .nav-bar ul li {
              display: inline;
          }

          .nav-bar ul li a {
              color: #6e2a82;
              text-decoration: none;
              padding: 10px 20px;
              display: block;
          }

          .nav-bar ul li a:hover {
              color: #5a206b;
          }
        </style>




    </head>
    <body class="">
      <header class="header">
        <div class="container">
          <div class="header-top">
              <div class="logo">
                  <a href="#"><img src="logo.png" alt="Logo"></a>
              </div>
              <div class="search-bar">
                  <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                  <button type="submit" class="btn border-light"><i class="fas fa-search"></i></button>
              </div>
              <div class="user-options">
                  <a href="#">Entrar ou Cadastrar</a>
                  <a href="#"><i class="fa fa-shopping-cart"></i></a>
              </div>
          </div>
        </div>

        <nav class="nav-bar">
            <ul>
                <li><a href="#">Todas as categorias</a></li>
                <li><a href="#">Coleção</a></li>
                
                <li><a href="#">Canecas com Foto</a></li>
                <li><a href="#">Presente</a></li>
                <li><a href="#">Canecas personalizadas</a></li>
                
            </ul>
        </nav>
    </header>

        <main class="">
          @yield('content')
        </main>   
      
    </body>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
