<p><a href="?test=info">info</a> / <a href="?test=mongo">mongo</a> / <a href="?test=mysql">mysql</a> / <a href="?test=redis">redis</a></p>

<?php

$page = isset($_GET['test']) ? $_GET['test'] : null;

switch ($page) {

    case 'mongo':
	    require_once './mongo.php';
	    break;

    case 'mysql':
	    require_once './mysql.php';
	    break;

    case 'redis':
	    require_once './redis.php';
	    break;

	default:
	    require_once '../info.php';
		break;
} 

