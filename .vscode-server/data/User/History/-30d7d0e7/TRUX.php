<form action="" method="GET">
<input type="checkbox" name="flag">
	<input
    type = "text"
		name="v1"
        value="<?php if (isset($_GET['v1'])) echo $_GET['v1'] ?>">
    <input
		name="v2"
	    type = "text"
        value="<?php if (isset($_GET['v2'])) echo $_GET['v2'] ?>">
	<input type="submit">
</form>

<?php
    if (empty($_GET['v1']) or empty($_GET['v2'])) {
        die (' ');
    }
    if (!is_numeric($_GET['v1']) or !is_numeric($_GET['v2'])){
        die('Не корректные данные');
    }
    if ($_GET['v2'] < $_GET['v1']){
        die ('2 число не может быть больше 1');
    }
    $z = rand($_GET['v1'], $_GET['v2']);
    if (!empty($_GET)) { 
		if (isset($_GET['flag'])) { 
			round( int|float $z / 10, int $precision = 0);
		} 
	}
    echo '<h1>'.$z;
?>