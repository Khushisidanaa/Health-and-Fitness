<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Nav Bar</title>
</head>
<body>
    <header class = "header">
        <div class ="header_in">
            <div class="container-fluid px-lg-5">

            <nav id="mainNavbar" class="navbar navbar-default fixed-top navbar-expand-md navbar-fixed">
        <a href="#" class="navbar-brand">  <img src="images/logo.png" height="60px" width="140px"
         alt=""></a>
        <button class="navbar-toggler navbar-dark" data-toggle="collapse" data-target="#navLinks"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="main.php#about" onclick="scrollf()" class="nav-link">About</a>
                </li>
                <li class="nav-item ">
                    <a href="foodily.php" onclick="scrollf()" class="nav-link">Foodily </a>
                </li>
                <li class="nav-item">
                    <a href="bodily.php" class="nav-link">Bodily</a>
                </li>

                <button class="nav-button">
                    <a href="login.php">Sign Up</a>
                </button>
               
            </ul>
        </div>
    </nav>

            </div>
        </div>
    </header>

    <script type="text/javascript">
    $(function(){
      var navbar = $('.header-inner');
      $(window).scroll(function(){
        if($(window).scrollTop() <=40){
          navbar.removeClass('navbar-scroll');
        }else{
          navbar.addClass('navbar-scroll');
        }
      });
    });


  </script>
</body>
</html>