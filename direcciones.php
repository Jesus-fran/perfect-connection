<?php
session_start(); // Iniciar sesión
if(!isset($_SESSION['admin']['adminnakalogin']) == true) header("location:index.php"); // Si no existe una sesión iniciada, redireccionar a index.php

?>


<?php include("conn.php"); ?>
<!-- incluir el archivo conn.php -->

<?php include("includes/header.php"); ?>
<!-- incluir el archivo header.php -->
<?php 
  include("query/selectData.php"); //incluye el archivo de consultas a la base de datos
 ?>


<?php
   @$page = $_GET['page']; //obtener la pagina actual

  if($page != '') 
  {

    //carpeta agregar
     if($page == "zona") //si la pagina actual es zona
    {
     include("pages/agregar/zona.php"); //incluir el archivo zona.php
    }
    //zona
    else if($page == "sector"){
      include("pages/agregar/sector/newSector.php");
    }
    //allSector
    else if($page == "allSector"){
      include("pages/agregar/sector/allSector.php");
    }
    //Aps
    else if($page == "newrb"){
      include("pages/agregar/routerBoard/newrb.php");
    }
          else if($page == "versiones"){
            include("pages/agregar/routerBoard/versiones.php");
          }
          //allRouter
          else if($page == "allRouter"){
            include("pages/agregar/routerBoard/allRouter.php");
          }

    


    else if($page == "newap"){ //si la pagina actual es newap
      include("pages/agregar/aps/newap.php");
    }
    else if($page == "allap"){
      include("pages/agregar/aps/allap.php")  ;
    }

    //productos
    else if($page == "producto"){
      include("pages/agregar/productos/newproducto.php");
    }

    //cliente
    elseif ($page == "cliente") {
      include("pages/clientes/newcliente.php");
    }
    //prospecto
    if($page == "prospecto"){
      include("pages/clientes/prospecto.php");
    }

    else if($page == "servicios"){
      include("pages/agregar/servicios.php");
    }
    else if($page == "newempleado"){
      include("pages/agregar/newempleado.php");
    }
    else if($page == "insumos"){
      include("pages/agregar/insumos.php");
    }

    elseif ($page == "allcliente") {
      include ("pages/clientes/allcliente.php");
    }


    elseif ($page == "contratacion") {
      include ("pages/cobranza/contratacion.php");
    }

    elseif ($page == "configuracion") {
      include ("pages/confperfil/configuracion.php");
    }
    //foto de perfil
    elseif ($page == "perfil") {
      include ("pages/confperfil/perfil.php");
    }
    elseif ($page == "prosxcliente") {
      include ("pages/clientes/prosxcliente.php");
    }
    elseif ($page == "instalaciones") {
      include ("pages/operatividad/instalaciones.php");
    }
    elseif ($page == "mensualidades") {
      include ("pages/cobranza/mensualidad.php");
    }
    elseif ($page == "gastosd") {
      include ("pages/egresos/gastosd.php");
    }
  }
   else //si no hay pagina actual
  {
     include("pages/home.php"); //incluir el archivo home.php
  }

?>


<?php include("includes/footer.php"); ?>
<!-- incluir el archivo footer.php -->