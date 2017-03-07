<?php 
session_start();
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

<script type="text/javascript">
    var num1=1;
    var prixTotale=0;
    var eterationTab=0;
    function ajoutProduitDupli(val1,val2){
        var tableau = new Array();
        tableau[eterationTab]=new Array()
        tableau[eterationTab][0] = "sandwich";
        tableau[eterationTab][1] = prixTotale;
        eterationTab++;
         var element=document.getElementById('totale');
        element.parentNode.removeChild(element);
        document.getElementById('divtotale').innerHTML+= "<b id=\"totale\">0ana 7emare dh</b>";
    }
    function collarChange(value,idimage) {
       document.getElementById(idimage).src= "img/"+value+".jpg";
    }
    function viewallerte(id,text,idimage){
        collarChange(text,idimage);

        var min = Math.ceil(1);
       var  max = Math.floor(7);
        var prixDingrediant=Math.floor(Math.random() * (max - min)) + min;
        prixTotale+=prixDingrediant;

        var info1=document.getElementById(text+"sel1").value;
        var info2=document.getElementById(text+"sel2").value;
         var idd=text+num1;

        document.getElementById(id).innerHTML+=" <div class=\"alert alert-success\" role=\"alert\" id="+idd+">"+
        "<button type=\"button\" class=\"btn btn-danger\" value="+idd+"  onclick=\"javascript:supprimer(this,"+prixDingrediant+");\">"+
        "<span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>"+
        "</button>&nbsp;&nbsp;&nbsp;"+
        "<B>"+info1+"----------"+info2+"</B>"+
        "<span id=\"badge\" class=\"badge pull-right\"  >"+prixDingrediant+"DH</span>"+
        "</div>";
        document.getElementById(text+"sel1").selectedIndex="pain";
        document.getElementById(text+"sel2").value="largeur de pain" ;
        num1++;
    }
    function supprimer(value,prix){

        var element = document.getElementById(value.value);
        prixTotale-=prix;
        element.parentNode.removeChild(element);
    }
</script>
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
                    <a class="navbar-brand" href="home.php#page-top">
                        <table>
                            <tr>
                                <td><img src="img/small-logo.png" class="img-responsive"></td>
                                <td><span>foodnaak</span></td>
                            </tr>
                        </table>                      
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a class="page-scroll" href="home.php#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="home.php#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="home.php#services">Services</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="home.php#contact">Contact</a>
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
                            <form id="login-form">
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
                            <form id="lost-form" style="display:none;">
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
                            <form id="register-form" style="display:none;">
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
    <section class="section-categories">
        <div class="row commande">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="title">Foodnak Sandwich</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <span class="pull-right">Livraison : 33 Rue Voltaire, 75011 Paris</span>
                </div>
            </div><br>
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <h3>Construisez vous votre propre sandwich</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <img src="img/sandwich.jpg" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <h4>Ingrédients / pour 1 personne</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

            <h4>La recette :</h4>
                <div class="container">
                    <div id="paindiv">
                        <h2> le pain </h2>
                        <div id="jumbo" class="jumbotron">
                            <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        <img id="painImage" class="img-circle" src="img/pain.jpg" width="90" height="90">


                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                    <label for="painsel1">Select lingrediant  (select one):</label>
                                                <select class="form-control" id="painsel1" onchange="javascript:collarChange(this.value,'painImage');">
                                                    <option value="pain">Select type de pain :</option>
                                                    <option value="Pain-complet">Pain complet</option>
                                                    <option value="Pain-aux-céréales">Pain aux céréales</option>
                                                    <option value="Pain-au-seigle">Pain au seigle</option>
                                                    <option value="Pain-au-levain">Pain au levain</option>
                                                    <option value="Pain-aux-epices">Pain aux épices</option>
                                                    <option value="Pain-aux-figues">Pain aux figues</option>
                                                </select>
                                               </br>
                                    </div>
                               `    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        <label >portion de l'ingrediant en cm:</label>
                                        <input id="painsel2" type="number" step="8" class="form-control input-number"  min="0" max="64" placeholder="largeur de pain :">
                                   </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                                        <button type="button" class="btn btn-primary" onclick="javascript:viewallerte('pain','pain','painImage');">ajouter</button>

                                    </div>
                            </div>

                        </div>
                        <div id="pain" class="decale"></div>
                    </div>
                    <div id="viandediv">
                        <h2> la viande </h2>
                        <div id="jumbo" class="jumbotron">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <img id="viandeImage" class="img-circle" src="img/viande.jpg" width="90" height="90">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <label for="sel1">Select lingrediant  (select one):</label>
                                    <select class="form-control" id="viandesel1" onchange="javascript:collarChange(this.value,'viandeImage');">
                                        <option value="viande">Select type de viande :</option>
                                        <option value="viande-boeuf"> viande de boeuf</option>
                                        <option value="viande-dinde">viande de dinde</option>
                                        <option value="viande-poisson">viande de poisson</option>
                                        <option value="sosage">sosage</option>
                                    </select>
                                    </br>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <label >portion de l'ingrediant en g:</label>
                                    <input id="viandesel2" type="number" step="50" class="form-control input-number"  min="50" max="500" placeholder=" poids en gramme :">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    </br>
                                    <button type="button" class="btn btn-primary" onclick="javascript:viewallerte('viande','viande','viandeImage');">ajouter</button>

                                </div>
                            </div>

                        </div>
                        <div id="viande" class="decale"></div>
                    </div>
                    <div id="divtotale">
                   <b id="totale">0 dh</b>
                        <div>
                </div>
            <div>
                </br>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 " style="
    padding-top: 10px;
    padding-bottom: 10px;">
                    <button type="button" class="btn btn-success" onclick="javascript:ajoutProduitDupli('pain','viande');">Ajouter produit et dupliquer </button>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 " style="
    padding-top: 10px;
    padding-bottom: 10px;">
                    <button type="button" class="btn btn-success">Ajouter produit et en personnaliser un autre </button>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 " style="
    padding-top: 10px;
    padding-bottom: 10px;">
                    <a href="validcommande.php">
                <button type="button" class="btn btn-success">Ajouter produit et passer à l'étape suivante</button></a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-1 " style="
    padding-top: 10px;
    padding-bottom: 10px;">
                    <button type="button" class="btn btn-danger ">Annuler</button>
                </div>


            </div>
        </div>
    </section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/main-js.js"></script>

</body>

</html>
<?php }else{
    header('location:index.php');
} ?>