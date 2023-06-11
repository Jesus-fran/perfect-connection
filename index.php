<?php 
session_start();
if(isset($_SESSION['admin']['adminnakalogin']) == true) header("location:index.php"); // si el usuario ya inicio sesion, lo redirige a la pagina principal

 ?>

<?php 

include("pages/login.php"); // incluye el archivo de login


 ?>


<script type="text/javascript" src="js/jquery.js"></script> <!-- importa el archivo jquery -->
<script type="text/javascript" src="js/ajax.js"></script> <!-- importa el archivo ajax --> 
<script type="text/javascript" src="js/sweetalert.js"></script> <!-- importa el archivo sweetalert -->