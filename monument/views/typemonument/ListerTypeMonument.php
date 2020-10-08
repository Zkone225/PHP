<!DOCTYPE HTML>
<head>
	<?php
		require_once("typemonumentlister.php");
		$listeTypemonument = typeMonument_findAll();
	?>
</head>
<html>  
<body>

<table>
	<thead>
		<tr>
			<th>Libellé</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($listeTypemonument as $ligne ) {?>	
		<tr>
			<td><?php echo $ligne['Libelle_TYPE_Monument'];?></td>
			<td><a href="typemonumentvoir.php?idtypemonument=<?php echo $ligne['ID_TYPE_Monument'] ?>">Voir</a>&nbsp;&nbsp;<a href="typemonumentchercher.php?idtypemonument=<?php echo $ligne['ID_TYPE_Monument'] ?>">Modifier</a>&nbsp;&nbsp;<a href="typemonumentsupprimer.php?idtypemonument=<?php echo $ligne['ID_TYPE_Monument'] ?>">Supprimer</a></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>

</body>
</html>