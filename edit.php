<?php
include "db.php";
$id = $_GET["id"];
$select = "SELECT rowid,* from user where rowid=$id";
$result = $db->query($select);
$row = $result->fetchArray();
$name = $row["name"];
$email = $row["email"];
if(isset($_POST["submit"])){
$name = $_POST["name"];
$email = $_POST["email"];
$update = "UPDATE user SET name='$name',email='$email' where rowid=$id";
if($db->exec($update)){
echo "updated. <a href='index.php'>go back</a>";
}else{
	echo "failed";
}
}
?>
<center>
	<h2>Edit user info</h2>
<form action="" method="post">
	<input type="text" name="name" value="<?php echo $name;?>" placeholder="name"> <br>
	<input type="text" name="email" value="<?php echo $email;?>" placeholder="email"> <br>
	<input type="submit" name="submit" value="save">
</form></center>