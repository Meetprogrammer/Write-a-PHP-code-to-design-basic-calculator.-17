<!DOCTYPE html>
<html>
<head>
	<title>PHP Calculator</title>
</head>
<body>

<?php
if (isset($_POST['submit'])) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operator = $_POST['operator'];
	
	switch ($operator) {
		case 'add':
			$result = $num1 + $num2;
			break;
		case 'subtract':
			$result = $num1 - $num2;
			break;
		case 'multiply':
			$result = $num1 * $num2;
			break;
		case 'divide':
			if ($num2 == 0) {
				echo "Cannot divide by zero.";
				exit;
			}
			$result = $num1 / $num2;
			break;
		default:
			echo "Invalid operator.";
			exit;
	}
	
	echo "Result: $result";
}
?>

<form method="POST">
	<input type="number" name="num1" required>
	<select name="operator">
		<option value="add">+</option>
		<option value="subtract">-</option>
		<option value="multiply">*</option>
		<option value="divide">/</option>
	</select>
	<input type="number" name="num2" required>
	<input type="submit" name="submit" value="Calculate">
</form>

</body>
</html>
