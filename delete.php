<?php
include "db.php";
$id = $_GET["id"];
$delete = "DELETE from user where rowid=$id";
if($db->exec($delete)){
echo "deleted . <a href='index.php'>go back</a>";
}else{
	echo "failed";
}

?>