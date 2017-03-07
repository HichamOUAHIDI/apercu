<?php 
session_start();
	if($_POST['adresse']=='33 Rue Voltaire, 75011 Paris' || $_POST['adresse']=='44 Rue Alexandre Dumas, 75011 Paris' || $_POST['adresse']=='36 Avenue Philippe-Auguste, 75011 Paris'){
		$_SESSION['erreur']='false';
		header('location:../categories.php');
	}
	else{
		header('location:../home.php');
		$_SESSION['erreur']='true';
	}
?>