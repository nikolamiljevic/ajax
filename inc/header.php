<?php include('conn/conn.php')?>
<?//php include('classes/main.php')?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Album example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<script>
  
  $(document).ready(function(){
    var newsCount = 3;
  
    $("button").click(function(){
       newsCount = newsCount + 3;
      $(".row").load("load-content.php",{
       newsNewCount: newsCount
      });
    });
  });
</script>
  </head>

  <body>


   <nav class="site-header sticky-top py-1" style="background-color: rgb(85, 89, 92);">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
 
    <a class="py-2 d-none d-md-inline-block" href="home">Home</a>
    <a class="py-2 d-none d-md-inline-block" href="about">About</a>
    <a class="py-2 d-none d-md-inline-block" href="contact">Contact</a>
   
  </div>
</nav>
  
