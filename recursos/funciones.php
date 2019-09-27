<?php

function is_email($txt) {
  return !filter_var($txt, FILTER_VALIDATE_EMAIL);
}

function min_chars($txt, $num) {
  return strlen($txt) < $num;
}

function minimoCaracteres($valor, $numCaracteres){
  return strlen($valor) >= $numCaracteres;
}

function estaVacio($dato){
  return empty($dato);
}

function subirUsuario($usuarioFunc) {
  $usuarioJson = file_get_contents("recursos/usuarios.json");
  $usuarioJsonArray=json_decode($usuarioJson, true);
  $usuarioJsonArray['usuarios'][]=$usuarioFunc;
  $usuariosFinal =json_encode($usuarioJsonArray, JSON_PRETTY_PRINT);
  file_put_contents("recursos/usuarios.json",$usuariosFinal);
}

function verificaYcomparaJSON($txt,$pass) {
  $usuarios = file_get_contents("recursos/usuarios.json");
  $usuariosArray =json_decode($usuarios, true);
  foreach($usuariosArray['usuarios'] as $usuario){
    if($usuario['email'] == $txt && password_verify($pass ,$usuario['password'])){
      $_SESSION=$usuario;
      return true;
    }
  }
  return false;
}

function verificaYcomparaJSONemail($email) {
  $usuarios = file_get_contents("recursos/usuarios.json");
  $usuariosArray =json_decode($usuarios, true);
  foreach($usuariosArray['usuarios'] as $usuario){
    if($usuario['email'] == $email){
      $_SESSION=$usuario;
      return true;
    }
  }
  return false;
}

?>
