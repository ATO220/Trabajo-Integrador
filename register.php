<?php
$file = "usersdb.json";
$db = file_get_contents($file);
$data = json_decode(file_get_contents($file),true);

foreach ($data as $key => $value) {
  foreach ($value as $key2 => $value2) {
    if($key2 == "username" && $value2 == $_POST["username"]){
      setcookie("useduser" , "notok", time() + 1);
      header("location:registro.php");
      exit();
    }
  }
}

foreach ($data as $key => $value) {
  foreach ($value as $key2 => $value2) {
    if($key2 == "email" && $value2 == $_POST["email"]){
      setcookie("usedemail" , "notok", time() + 1);
      header("location:registro.php");
      exit();
    }
  }
}

if ($_POST["password"] != $_POST["confirmpassword"]) {
  setcookie("dontmatch" , "notok", time() + 1);
  header("location:registro.php");
  exit();
}


$id = count($data);
$id++;
$info = [
  "id" => $id,
  "username"  => $_POST["username"],
  "firstname" => $_POST["firstname"],
  "lastname" => $_POST["lastname"],
  "age" => $_POST["age"],
  "email" => $_POST["email"],
  "password" =>password_hash($_POST["password"] , PASSWORD_DEFAULT)
];

array_push($data, $info);


file_put_contents($file, json_encode($data));

echo "el usuario se registro correctamente."
 ?>
