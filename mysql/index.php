<!-- <!-- mysqli - pdo -> php database object -->
<?php


// $database_config = include __DIR__ . "/config/database.php";

// $connct = mysqli_connect($database_config["servername"], $database_config["username"], $database_config["password"], $database_config["database"]);
// // var_dump($connct->connect_errno);
// if (!$connct) {
//   die("connction failed" . mysqli_connect_error());
// }
// // mysqli_query($connct, "CREATE DATABASE project");
// $sql = "INSERT INTO user (name,email , password , mobile) VALUE ('mohamed' , 'mohamed@yahoo.com', '123456789' ,'01144356727') ";
// $query = mysqli_query($connct, $sql);
// $last_id = mysqli_insert_id($connct);
// // $multi_insert  = mysqli_multi_query($connct, $query);
// var_dump($last_id);
// var_dump($query);
// mysqli_close($connct);


// var_dump($database_config);


$database_Config = include __DIR__ . "/config/database.php";
$connct = mysqli_connect($database_Config["servername"], $database_Config["username"], $database_Config["password"], $database_Config["database"]);
if (!$connct) {
  die("conntection failed" . mysqli_connect_error());
}
// $sql = "SELECT name , email from user";
$sql = "select * from user where id = 1";
$query = mysqli_query($connct, $sql);
$num = mysqli_num_rows($query);
if ($num > 0) {
  while ($row = mysqli_fetch_assoc($query)) {
    echo $row["name"] . "--" . $row["email"] . "<br>";
  }
}
mysqli_close($connct);

// var_dump($database_Config);
// var_dump($connct);
