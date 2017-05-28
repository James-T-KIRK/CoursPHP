<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conditions IF</title>
</head>
<body>
<h1>Structure conditionnelle</h1>
<p>Vous avez : 
<?php
$age=rand(1,40);//Initialisation de la variable
echo $age;
?> an<?php if($age>1) {echo"s";} ?></p>
<p>Vous êtes 
<?php
if($age<18) {
	echo"mineur";
} else {
	echo"majeur";
}
?>
</p>
</body>
</html>