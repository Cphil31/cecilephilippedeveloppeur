
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cecilephilippedeveloppeur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    @section('sidebar')
    <div class="ui grid">
      <div class="two wide column"></div>
      <div class="twelve wide column">
          <h1 style="color:#0E6EB8;font-size:5em;">CECILE Philippe</h1>
          <hr>
          <hr>
          <h1 style="color:#0E6EB8;font-size:5em;">Developpeur Web</h1>
          <hr>
          <div class="ui blue six item inverted menu">
            <a href="/" class="item ">Acceuil</a>
            <a href="/formations" class="item ">Formations</a>
            <a href="/competences" class="item">Compétences</a>
            <a href="/experiences" class="item">Expériences </a>
            <a href="/loisirs" class="item">Loisirs </a>
            <a href="/contact" class="item">Contacts</a>
        </div>

      </div>
    </div>
@show

    <div class="container">
        @yield('content')
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.js"></script>
<script src="../js/app.js"></script>
</body>
</html>