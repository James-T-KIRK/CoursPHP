<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gestion des variables - pise.info</title>
</head>
<body>
<h1>Exercice 2.3</h1>
<p><strong>Ennoncé</strong></p>
<p>Ecrire un programme qui lit le prix HT d’un article, le nombre d’articles et le taux de TVA, et qui fournit le prix total TTC correspondant. Faire en sorte que des libellés apparaissent clairement.</p>
<p><strong>Réponse</strong></p>
<?php
$ht=rand(10,10000)."€";
$nb=round(rand(1,32)/10,1);
$tva=0.2;
$ttc=$nb*$ht*(1+$tva)."€";
?>
<p>Montant H.T : <?php echo $ht; ?></p>
<p>Quantité : <?php echo $nb; ?> article(s)</p>
<p>Taux de TVA : <?php echo $tva*100; ?>%</p>
<p>Total TTC : <?php echo $ttc; ?></p>
</body>
</html>