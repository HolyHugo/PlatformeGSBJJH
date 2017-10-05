<?php
	echo "<body>
				<h3>Ajouter une nouvelle absence </h3>
<form method='POST' action='index.php?uc=gererAbsence&action=creeNouvelleAbsence'>
<table class='tabNonQuadrille'>
<tr>
	<td>Date de l'absence (aaaa-mm-jj)</td>
	<td>
		<input  type='date' name=DateDebut size='30' maxlength='50'>
	</td>
</tr>
<tr>
	<td>Motif de l'absence</td>
	<td>
		<input  type='text' name=refMotif  size='50' maxlength='100'>
	</td>
</tr>
<tr>
	<td>Nombre de jour</td>
	<td>
		<input  type='text' name=nbjour size='30' maxlength='45'>
	</td>
</tr>



<tr>
	<td>
		<input type='submit' value='Valider' name='valider'>
	</td>
</tr>
<tr>
	<td>
         <input type='reset' value='Annuler' name='annuler'>
	</td>
</tr>

</form>";

