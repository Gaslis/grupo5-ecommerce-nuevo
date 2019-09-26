<?php
function minimoCaracteres($valor,$numCaracteres){
  if(strlen($valor)>=$numCaracteres){
    return true;
  }
  else {
    return false;
  }
}

function estaVacio($dato){
  if(strlen($dato)===0){
    return true;
  }else {
    return false;
  }
}

function comparaInfo($primerDato,$segundoDato){
  if($primerDato===$segundoDato){
    return true;
  }else {
    return false;
  }
}

// Recibe el campo y numero de caracteres minimo se fija si esta vacio o si es menor a $numCaracter
// Si esta bien almacena el campo en usuarios
// Si esta mal informa el error mediante el $placeCampo
function validaCampoNomOapellido($Campo,$numCaracter){
  if(minimoCaracteres($_POST[$Campo],$numCaracter)&& estaVacio($_POST[$Campo])!=true){
    return $_POST[$Campo];
  }else{
    if(minimoCaracteres($_POST[$Campo],2)!=true){
      $placeCampo='El' . $Campo . 'es muy corto';
      return $placeCampo;
    }
    if(estaVacio($_POST[$Campo])){
      $placeCampo='El' . $Campo . 'esta vacio';
      return $placeCampo;
    }
  }
}

function validarPass(){
  if(estaVacio($_POST['password'])==false &&      estaVacio($_POST['confirmar'])==false && minimoCaracteres($_POST['password'],7) && comparaInfo($_POST['password'],$_POST['confirmar']))
  {
    return $_POST['password'];
  }else{
    if (estaVacio($_POST['password']))
    {
      $placePass = 'El campo esta vacio';
      return $placePass;
    }
    if (estaVacio($_POST['confirmar'])) {
      $placeConfirmar='El campo esta vacio';
      return $placeConfirmar;
    }
    if (minimoCaracteres($_POST['password'],7)) {
      $placePass='El password debe tener minimo 8 caracteres';
      return $placePass;
    }
    if(comparaInfo($_POST['password'],$_POST['confirmar'])!=false && estaVacio($_POST['password'])!=true && estaVacio($_POST['confirmar'])!=true){
      $placeConfirmar='No coincide';
      return $placeConfirmar;
    }
  }
}


function subirUsuario($usuarioFunc) {
$usuarioJson = file_get_contents("usuarios.json");
$usuarioJsonArray=json_decode($usuarioJson, true);
$usuarioJson[]=$usuarioFunc;
$usuariosFinal =json_encode($usuarioJsonArray, JSON_PRETTY_PRINT);
file_put_contents("usuarios.json",$usuariosFinal);
}
?>
