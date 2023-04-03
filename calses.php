<?php
$clase =$_POST['clase'];

switch ($clase) {
	case 'leche':
		header("location:leche.php");
		break;
	case 'queso':
		header("location:queso.php");
		break;
	case 'cuajada':
		header("location:cuajada.php");
		break;
}
 ?>