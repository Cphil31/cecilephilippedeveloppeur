
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>cecilephilippedeveloppeur @yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">
  <link rel="stylesheet" href="../css/app.css">
</head>
<body>
  @section('sidebar')
  <div class="ui grid">
    <div class="two wide column"></div>
    <div class="twelve wide column">
      <div class="nom">CECILE PHILIPPE</div>
      <hr>
      <hr>
      <h1>Developpeur web</h1>
      <hr>

      <div class="ui menu">
        <div class="ui dropdown item">
          Acceuil

          <div class="menu">
            <a class="item">Electronics</a>
            <a class="item">Automotive</a>
            <a class="item">Home</a>
          </div>
        </div>

        <div class="ui dropdown item">
          Formation

          <div class="menu">
          <div class="content item">
              <div class="formation" >
                2016-2017
                Formation de Web Développeur à l'école Simplon
               Toulouse
              </div>

              <div class="formation" >
                2007 - 2008
                Introduction au Droit Immobilier CNAM
                Guadeloupe
              </div>

              <div class="formation">
                2003
                Baccalaurréat STT
                Guadeloupe
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="container">
        @yield('content')
      </div>
    </div>
  </div>
  @show
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.js"></script>
  <script src="../js/app.js"></script>
</body>
</html>