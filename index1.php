<?php
	require_once 'user.php';

	$users = [];
	$users[] = new User('Def', 'fox', 18);
	$users[] = new User('Tolja', 'GG', 18);
	$users[] = new User('Vlad', 'Goose', 18);

	foreach ($users as $user) {
		$user->show();
	}

?>
