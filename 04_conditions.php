<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gestion des conditions - pise.info</title>
</head>
<body>
<h1>Exercice 3.2</h1>
<p><strong>Ennoncé</strong></p>
<p>Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si leur produit est négatif ou positif (on laisse de côté le cas où le produit est nul). Attention toutefois : on ne doit pas calculer le produit des deux nombres.</p>
<p><strong>Réponse</strong></p>
<?php
$n1=rand(-5,5);
$n2=rand(-5,5);
$resultat=$n1*$n2;
?>
<p>Le nombre 1 vaut : <?php echo $n1; ?></p>
<p>Le nombre 2 vaut : <?php echo $n2; ?></p>
<p>Le résultat est : <?php
if($resultat>=0) {echo"positif";} else {echo"négatif";}
?></p>
</body>
</html>