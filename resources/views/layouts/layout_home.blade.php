
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
    <div class="ui three item menu">
      <a class="active item">Editorials</a>
      <a class="item">Reviews</a>
      <a class="item">Upcoming Events</a>
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