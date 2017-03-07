/**
 * Created by taps1913 on 02/03/2017.
 */

$(document).ready(function(){
var viandeCompteur= 1;

    function viewtext(id) {
        console.log("je suis la ");
        var idNom="viande"+viandeCompteur;
        document.getElementById(id).innerHTML+= "<button type='button' class='btn btn-info'  data-toggle='collapse' data-target='#"+idNom+
        "' onclick='javascript:viewtext('continere');' >"+
        "<span class='glyphicon glyphicon-plus' aria-hidden='true'></span>"+
        "</button>"+
        "<div id=_"+idNom+" class='collapse'>"+
        "<div class='row'>"+
        "<div class='col-xs-6 col-sm-1 col-md-1 col-lg-1'>"+
        "<img src='img/pain-sandwich' class='img-responsive'>"+
        "</div>"+
        "<div class='col-xs-3 col-sm-2 col-md-2 col-lg-2'>"+
        "<select>"+
        "<option>Select type de pain :</option>"+
        "<option>Pain complet</option>"+
        "<option>Pain aux céréales</option>"+
        "<option>Pain au seigle</option>"+
        "<option>Pain au levain</option>"+
        "<option>Pain aux épices</option>"+
        "<option>Pain aux figues</option>"+
        "</select>"+
        "</div>"+
        "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>"+
        "<input type='number' step='8' value='0' min='0' max='64' placeholder='largeur de pain :'>x cm"+
        "</div>"+
        "</div>"+
        "</div>";

    }





});