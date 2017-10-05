<?php
include("vues/v_sommaire.php");
include("vues/v_ajoutAbsence.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];

switch($action){
	case 'creeNouvelleAbsence':{
			$refVisiteur = $idVisiteur;
			$DateDebut = $_REQUEST['DateDebut'];
			$refMotif = $_REQUEST['refMotif'];
			$nbjour = $_REQUEST['nbjour'];
	  	 	//$pdo->creeNouvelleAbsence($DateDebut,$refVisiteur,$nbjour,$refMotif);
	  	 	$bdd = new PDO('mysql:host=localhost;dbname=gsb_frais;charset=utf8', 'admin', 'admin');
	  	 	$requete1 = $bdd->prepare('INSERT into Absence(DateDebut,refVisiteur,nbjour,refMotif) VALUES(:datedebut,:refvisiteur,:nbjour,:refmotif)');
	  	 	$requete1->execute(array(
	  	 	'datedebut' => $DateDebut,
	  	 	'refvisiteur' => $refVisiteur,
	  	 	'nbjour' => $nbjour,
	  	 	'refmotif' => $refMotif
	  	 	));
	  	 	
	  	 	
		}
		break;
		
	case 'landing' : {
		echo"ok";
		}break;
}
//$pdo->creeNouvelleAbsence($idvisiteur,$mois)
