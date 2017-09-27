<?php
$file = "usersdb.json";
$db = file_get_contents($file);
$data = json_decode(file_get_contents($file),true);
$logininfo = 0;

foreach ($data as $key => $value) {
  foreach ($value as $key2 => $value2) {
    if ($key2 == "username" && $_POST["username"] == $value2){
       $logininfo = $value;
       break;
    }
  }
}
if ($logininfo == 0) {
  exit("el usuario o la contraseña son incorrectos");
}
if(password_verify($_POST["password"], $logininfo["password"])){
  echo "Bienvenido " . $logininfo["firstname"] ." " . $logininfo["lastname"] . "<br>";
  foreach ($logininfo as $key => $value) {
    if($key != "password"){
      echo "$key >>> $value <br>";
    }
  }
}else {
  exit("el usuario o la contraseña son incorrectos");
}
 ?>
