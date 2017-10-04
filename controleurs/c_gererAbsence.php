<?php
include("vues/v_sommaire.php");
include("vues/v_ajoutAbsence.php");
$idVisiteur = $_SESSION['idVisiteur'];
$aaaamm = getMois(date("d/m/Y"));
$numAnnee =substr( $aaaamm,0,4);
$numMois =substr( $aaaamm,4,2);
$mois=$numMois;
$action = $_REQUEST['action'];

switch($action){
	case 'creeNouvelleAbsence':{
	  	 	$pdo->creeNouvelleAbsence($idVisiteur,$mois,$refmotif,$nbjour);
		}



echo"Ici saisie des absences";
}
//$pdo->creeNouvelleAbsence($idvisiteur,$mois)
