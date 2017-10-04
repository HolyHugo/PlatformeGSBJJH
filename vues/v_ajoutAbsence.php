<?php
	echo "<body>
				<h3>Ajouter une nouvelle absence </h3>
<form method='POST' action='index.php?uc=gererAbsence&action=validerCreationAbsence'>
<table class='tabNonQuadrille'>
<tr>
	<td>Date de l'absence (jj/mois/aaaa)</td>
	<td>
		<input  type='text' name=nbJour size='30' maxlength='5'>
	</td>
</tr>
<tr>
	<td>Motif de l'absence</td>
	<td>
		<input  type='text' name=Motif  size='50' maxlength='100'>
	</td>
</tr>
<tr>
	<td>Montant engage</td>
	<td>
		<input  type='text' name=montant  size='30' maxlength='45'>
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

