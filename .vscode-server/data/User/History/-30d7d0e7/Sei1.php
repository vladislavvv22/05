<form action="" method="GET">
	<input
		name="v1"
		value="<?php if (isset($_GET['v1'])) echo $_GET['v1'] ?>"
	>
	<input
		name="v2"
		value="<?php if (isset($_GET['v2'])) echo $_GET['v2'] ?>"
	>
	<input type="submit">
</form>

<?php
    if (empty($_GET['v1']) or empty($_GET['v2'])) {
        die ('Не хватает данных');
    }
    if (!is_numeric($_GET['v1']) or !is_numeric($_GET['v2'])){
        die('Не корректные данные');
    }
    if ($_GET['v2'] < $_GET['v1']){
        die ('2 число не может быть больше 1');
    }
    $z = rand($_GET['v1'], $_GET['v2']);
    echo $z;
?>