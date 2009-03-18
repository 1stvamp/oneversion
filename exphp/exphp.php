<?php
class ExPHP_SqlAccessor {
	function __get($name) {
		$command = substr($name, 0, 6);
		switch (strtoupper($command)) {
			case 'SELECT':
				echo 'selecting data..';
				break;
			case 'INSERT':
				echo 'inserting data..';
				break;
			case 'UPDATE':
				echo 'updating data..';
				break;
			case 'WHERE ':
				echo '..with a WHERE clause..';
				break;
		}
		return $this;
	}
}

$db = new ExPHP_SqlAccessor();
$db->{'SELECT * from user'}->{'WHERE 1=1'};
?>
