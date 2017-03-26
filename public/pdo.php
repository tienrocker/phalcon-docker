<?php

$dsn = 'mysql:dbname=docker;host=mysql';
$user = 'docker';
$password = 'secret';

try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

    $sql="SELECT * FROM test WHERE (id> 0)";
	$rows = $dbh->query($sql);
    if($rows){
        foreach ($rows as $row) {
           echo $row['id'] . "\n";
        }    
    } else {
		echo 'empty';
	}
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}