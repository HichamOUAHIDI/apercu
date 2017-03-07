<?php 
session_start();

if(empty($_SESSION['login'])){
    $_SESSION['login']=$_POST['login'];
    $_SESSION['pass']=$_POST['pass'];
}
if($_SESSION['login']=='admin' && $_SESSION['pass']=='zakaria@@'){
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FoodNak</title>
    <link rel="icon" type="image/png" href="img/small-logo.png" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom" role="navigation">
        <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#page-top">
                        <table>
                            <tr>
                                <td><img src="img/small-logo.png" class="img-responsive"></td>
                                <td><span>foodnak</span></td>
                            </tr>
                        </table>                      
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Services</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                        <li>
                            <a href="#" class="login" role="button" data-toggle="modal" data-target="#login-modal"><span>Login</span></a>
                        </li>
                        <li>
                            <a href="#"><img src="img/uk-icon.png"></a>
                        </li>
                    </ul>
                </div>        
            
        </div>
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" align="center">
                            <img class="img-circle" id="img_logo" src="img/small-logo.png">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                        </div>
                        
                        <!-- Begin # DIV Form -->
                        <div id="div-forms">
                        
                            <!-- Begin # Login Form -->
                            <form class="form" id="login-form">
                                <div class="modal-body">
                                    <div id="div-login-msg">
                                        <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                        <span id="text-login-msg">Nom d'utilisateur et mot de passe.</span>
                                    </div>
                                    <input id="login_username" class="form-control" type="text" placeholder="Login" required>
                                    <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Se souvenir de moi.
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Connexion</button>
                                    </div>
                                    <div>
                                        <button id="login_lost_btn" type="button" class="btn btn-link">Mot de passe oublié?</button>
                                        <button id="login_register_btn" type="button" class="btn btn-link">S'inscrire</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End # Login Form -->
                            
                            <!-- Begin | Lost Password Form -->
                            <form  class="form" id="lost-form" style="display:none;">
                                <div class="modal-body">
                                    <div id="div-lost-msg">
                                        <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                        <span id="text-lost-msg">Entrez votre adresse e-mail.</span>
                                    </div>
                                    <input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
                                </div>
                                <div class="modal-footer">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyer</button>
                                    </div>
                                    <div>
                                        <button id="lost_login_btn" type="button" class="btn btn-link">S'identifier</button>
                                        <button id="lost_register_btn" type="button" class="btn btn-link">S'inscrire</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End | Lost Password Form -->
                            
                            <!-- Begin | Register Form -->
                            <form class="form" id="register-form" style="display:none;">
                                <div class="modal-body">
                                    <div id="div-register-msg">
                                        <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                        <span id="text-register-msg">Créer un compte.</span>
                                    </div>
                                    <input id="register_username" class="form-control" type="text" placeholder="Login" required>
                                    <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                                    <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                                </div>
                                <div class="modal-footer">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">S'inscrire</button>
                                    </div>
                                    <div>
                                        <button id="register_login_btn" type="button" class="btn btn-link">S'identifier</button>
                                        <button id="register_lost_btn" type="button" class="btn btn-link">Mot de passe oublié?</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End | Register Form -->
                            
                        </div>
                        <!-- End # DIV Form -->
                        
                    </div>
                </div>
            </div>
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-block">
                        <h1>Composez vos plats selon vos envies</h1>
                        <span style="font-size:20px;" class="notopmargin">
                            Maîtrisez les Aliments et les Quantités
                        </span>
                    </div>
                    <form action="traitement/controle.php" method="POST">
                        <div class="tooltips">
                            <input type="text" id="adresse" name="adresse" class="form-control input-lg" placeholder="Entrez votre code adresse">    
                            <span>Une erreur s'est produite. Nous ne livrons pas à l'adresse saisie. Veuillez réessayer.</span>
                            <button type="submit" id="commander">Commander</button>
                        </div>
                        <!-- <div class="hidden-xs"><a class="btn btn-default page-scroll" href="#about">Cliquez pour défiler vers le bas!</a></div> -->
                    </form>
                    
                </div>
            </div>
        </div>
            <div class="video-overlay"></div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/main-js.js"></script>
       <?php 
            if($_SESSION['erreur']=='true'){
        ?>
            <script type="text/javascript">
                $( document ).ready(function() {
                    $(".tooltips span").css("visibility","visible");
                });
                $("#adresse").click(function(){
                        $(".tooltips span").css("visibility","hidden");
                });
                $("#adresse").focus(function(){
                        $(".tooltips span").css("visibility","hidden");
                });
            </script>
        <?php
            }
        ?>

</body>

</html>
<?php }else{
    header('location:index.php');
} ?>