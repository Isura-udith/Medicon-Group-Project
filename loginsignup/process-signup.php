<?php

if(empty($_POST["name"])){
    die("Name Cannot be empty");
}
if(! filter_var($_POST["Email"],FILTER_VALIDATE_EMAIL)){
    die("Enter Valid Email");
}
if(strlen($_POST["Password"])<8){
    die("Password must include 8 characters");
}
if(! preg_match("/[a-z]/i",$_POST["Password"])){
    die("Password must include at least one letter");
}
if(! preg_match("/[0-9]/",$_POST["Password"])){
    die("Password must include at least one number");
}

if(($_POST["Password"])!==$_POST["password_confirmation"]){
    die("Password must Match");
}
$password_hash=password_hash($_POST["Password"],PASSWORD_DEFAULT);

$mysqli=require __DIR__ ."/database.php";

$sql="INSERT INTO user (name,email,NIC,phoneNo,Gender,password_hash) VALUES (?,?,?,?,?,?)";
$stmt=$mysqli->stmt_init();
if(! $stmt->prepare($sql)){
    die("SQL error: ". $mysqli->error);
}

$stmt->bind_param("ssiiss",
                $_POST["name"],
                $_POST["Email"],
                $_POST["NIC"],
                $_POST["phoneNo"],
                $_POST["Gender"],
                $password_hash);

if ($stmt->execute()){

    header("Location: signup_success.html");
    exit;

echo "Sigup Succusesfull";
}
else {
    if($mysqli->errno === 1062){
        die("email is alradey taken");
    }else{
        die($mysqli->error . " " . $mysqli->errno);
    }
    
}