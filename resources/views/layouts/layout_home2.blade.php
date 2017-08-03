
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
          <div class="ui six item menu">
            <a href="/" class="item ">Acceuil</a>
            <a href="/formations" class="item ">Formations</a>
            <a href="/competences" class="item">Compétences</a>
            <a href="/experiences" class="item">Expériences </a>
            <a href="/loisirs" class="item">Loisirs </a>
            <a href="/contact" class="item">Contacts</a>
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