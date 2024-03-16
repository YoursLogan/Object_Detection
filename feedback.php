<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];

$mail=$_POST['mail'];
$comment=$_POST['commentfield'];
$conn = new mysqli('localhost', 'root', '', 'osp');
if($conn->connect_error){
die('Connection Failed: '.$conn->connect_error);
}
else{
$stmt=$conn->prepare("insert into 
feedback(firstname,lastname,mail,comment)
values(?,?,?,?,?)");
$stmt->bind_param("sssss", $firstname, $lastname, $mail, $comment
);
$stmt->execute();
echo"registration Successfully...";
$stmt->close();
$conn->close();
}
?>