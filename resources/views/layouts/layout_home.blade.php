
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
    <div class="ui four item menu">
    <a href="/formations" class="item">Formations</a>
    <a href="/competences" class="item">Compétences</a>
    <a href="/experiences" class="item">expériences professionnelles</a>
    <a href="/contact" class="item">contacts</a>
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