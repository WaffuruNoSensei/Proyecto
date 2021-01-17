<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Dental J&J</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        
        .row.content {
            height: 450px
        }
        /* Set gray background color and 100% height */
        
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }
        /* Set black background color, white text and some padding */
        
        footer {
            background-color: #4CE5D7;
            color: white;
            padding: 15px;
            text-align: left;
            position: fixed;
            left: 0px;
            bottom: 0px;
            right: 0px;
        }
        
        footer div {
            text-align: left;
        }
        
        #header {
            border: none;
            background-color: #4CE5D7;
            color: white;
        }
        
        #idA {
            color: white;
        }
        /* On small screens, set height to 'auto' for sidenav and grid */
        
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {
                height: auto;
            }
        }
        
        #idA:hover {
            color: #3474B0;
        }
        /* chat*/
        
        #wrapper,
        #loginform {
            margin: 0 auto;
            padding-bottom: 25px;
            background: #EBF4FB;
            width: 504px;
            border: 1px solid #ACD8F0;
        }
        
        #loginform {
            padding-top: 18px;
        }
        
        #loginform p {
            margin: 5px;
        }
        
        #chatbox {
            text-align: left;
            margin: 0 auto;
            margin-bottom: 25px;
            padding: 10px;
            background: #fff;
            height: 270px;
            width: 430px;
            border: 1px solid #ACD8F0;
            overflow: auto;
        }
        
        #usermsg {
            width: 395px;
            border: 1px solid #ACD8F0;
        }
        
        #submit {
            width: 60px;
        }
        
        .error {
            color: #ff0000;
        }
        
        #menu {
            padding: 12.5px 25px 12.5px 25px;
        }
        
        .welcome {
            float: left;
        }
        
        .logout {
            float: right;
        }
        
        .msgln {
            margin: 0 0 2px 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse" id="header">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            </div>
            <div class="container-fluid" id="myNavbar">
                <ul class="nav navbar-nav navbar-left">
                    <li><img src="img/Logo.png" width="40px" height="40px"></li>
                </ul>
                <ul class="nav navbar-nav text-right">
                    <li class="active"><a href="#" id="idA">Inicio</a></li>
                    <li><a href="#" id="idA">Contacto</a></li>
                    <li><a href="#" id="idA">Servicios y Tratamientos</a></li>
                    <li><a href="#" id="idA">CoVid-19</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2 sidenav">

            </div>
            <div class="col-sm-8 text-left">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>

                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/Denti1.jpg" alt="1" width="1280px" height="720px">
                        </div>

                        <div class="item">
                            <img src="img/Denti2.jpg" alt="2" width="1280px" height="720px">
                        </div>

                        <div class="item">
                            <img src="img/Denti3.jpg" alt="3" width="1280px" height="720px">
                        </div>
                        <div class="item">
                            <img src="img/Denti4.jpg" alt="4" width="1280px" height="720px">
                        </div>
                        <div class="item">
                            <img src="img/Dentifinal.jpg" alt="Final" width="1280px" height="720px">
                        </div>
                    </div>

                    <!-- Controles izq y derecha -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-2 sidenav">
                <!-- chat-->
                <div id="wrapper">
                    <div id="menu">
                        <p class="welcome">Welcome, <b></b></p>
                        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
                        <div style="clear:both"></div>
                    </div>

                    <div id="chatbox"></div>

                    <form name="message" action="">
                        <input name="usermsg" type="text" id="usermsg" size="63" />
                        <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
                    </form>
                </div>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
                <script type="text/javascript">
                    // jQuery Document
                    $(document).ready(function() {

                    });
                </script>
                <!-- Formulario de registro -->
                <? session_start();
 
             function loginForm(){
                 echo "<div id='loginform'>";
                 echo "<form action='index.php' method='post'>";
                 echo "    <label for='name'>Name:</label>";
                 echo "    <input type='text' name='name' id='name' />";
                 echo "    <input type='submit' name='enter' id='enter' value='Enter' />";
                 echo "</form>";
                 echo "</div>";
     
 }
 ?>
            </div>
        </div>
    </div>
        <footer class="container-fluid text-center">
            <div>
                José Antonio Pérez Tinajero & Jesús Rosado Pereira. J&J Dental.
                <span style="float:right">11408. Número de contacto: 611415763 / 651475634</span>
            </div>
        </footer>
</body>

</html>