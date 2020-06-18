<?php 
	// connec to database
	$conn = mysqli_connect('localhost', 'xoja', 'test1234', 'litter_pizza');
	// check connection
	if (!$conn) {
		echo "connection error". mysqli_connect_error();
	}
	// write qury for all pizzas
	$sql = 'SELECT title, ingredients,  FROM pizzas';


?>


<!DOCTYPE html>
<html lang="en">
<?php include("templates/header.php"); ?>

<?php include("templates/footer.php"); ?>

</html>