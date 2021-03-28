
<!DOCTYPE html>
<html>
<head>
<Title>Table de multiplication</Title>
</Head>
<Body>
<h1><u>TABLE DE MULTIPLICATION</u></h1>
<i> J'AI PENSE A VOUS FAIRE UN OUTIL VOUS PERMETTANT DE FACILITER LA TACHE</i><br><br>
<img src="NOUVELLE IMAGE_Fernand MURIKUMWE .jpg" width="100" height="100" alt="photo du realisateur" border="4"><br><br>
<b><u> Ir MURIKUMWE FERNAND</u></b><br><br>
<b> VOICI LA TABLE DE MULTIPLICATION</b><br><br>
<b><font color="blue">METTEZ LE CHIFFRE QUE VOUS VOULEZ VOUS AVEZ LA TABLE</font><b><br><br>
<form method="POST" action="">
 Nombre : <input type="text" name="nbr"><p>
 <input type="submit" name="submit" value="Calculer">
 <input type="reset" name="reset" value="Annuler">
 </form>
</Body>
</html>
 <?php
 if (isset($_POST['submit'])) 
 {
 $Nombre = $_POST['nbr'];
 for ($i=0; $i <=10 ; $i++) 
 { 
 echo $Nombre;
 echo " * ";
 echo $i;
 echo " = ";
 echo $Nombre*$i;
 echo "<br>";
 }
 }
 ?>

