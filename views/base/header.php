<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weltkind test album</title>

    <!-- Bootstrap -->
    <link href="/staticfiles/css/bootstrap.min.css" rel="stylesheet">
    <link href="/staticfiles/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-nb" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Weltkind</a>
          <p class="navbar-text">This is test album</p>
        </div>

        <div class="collapse navbar-collapse" id="collapse-nb">
        <ul class="nav navbar-nav navbar-right">
        <?php
        if (@$_SESSION['login'] == 'on') {
          echo '<li><a href="/admin">Админ-панель</a></li>';
          echo '<li><a href="/admin/logout">Выйти</a></li>';
        }else{
          echo '<li><a href="/admin/">Войти</a></li>';
        };?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>