<?php
/**
 * db class
 */
class database extends sqlite3
{
	
	function __construct()
	{
		$this->open("mydata.db");
	}
}
$db = new database;
if (!$db) {
	die("Somethig went wrong");
}
//create a user table
$table = "CREATE TABLE IF NOT EXISTS user (name varchar(25), email varchar(30))";
$db->exec($table);
