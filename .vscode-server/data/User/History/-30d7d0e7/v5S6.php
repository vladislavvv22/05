<form action="" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>

<?php
	echo $_GET['test1'] + $_GET['test2'];
?>