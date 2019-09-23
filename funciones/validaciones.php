<?php

function validarPass()
{
if(strlen($_POST["password"])==0 && strlen($_POST["confirmar"])==0)
{
  $resultado="Los dos campos de contraseña estan vacios";
}
  if(strlen($_POST["password"])==0 && strlen($_POST["confirmar"])!=0)
{
  $resultado="La contraseña esta vacia";
}
  if(strlen($_POST["password"])!=0 && strlen($_POST["confirmar"])==0)
{
  $resultado="Falta la confirmacion de contraseña";
}
  if(($_POST["password"]) != ($_POST["confirmar"]) && strlen($_POST["password"])!=0 && strlen($_POST["confirmar"])!=0)
{
  $resultado="Las contraseñas no verifican";
}
  if(($_POST["password"]) == ($_POST["confirmar"]) && strlen($_POST["password"])!=0 && strlen($_POST["confirmar"])!=0)
{
  $resultado="Correcto";
}
  return $resultado;
}

function subirUsuario($usuario) {
$usuarioJson = file_get_contents("usuarios.json");
$usuarioJsonArray=json_decode($usuarioJson, true);
$usuarioJson[]=$usuario;
$usuariosFinal =json_encode($usuarioJsonArray, JSON_PRETTY_PRINT);
file_put_contents("usuarios.json",$usuariosFinal);
}
?>
