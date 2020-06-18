<?php 
	$title=$ingredients=$email='';
	$error = ['email'=>"",'title'=>"",'ingredients'=>""];

	if (isset($_POST['submit'])) {
		
		//check email 
		if (empty($_POST['email'])) {
			$error['email'] ="enter email adress <br />";
		}
		else{
			$email =$_POST['email'];
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$error['email']= "eamil must be valied addres"."<br />";
			}
		}
		// check title 

		if (empty($_POST['title'])) {
			$error['title']="enter title <br />";
		}
		else{
			$title =$_POST['title'];
			if (!preg_match("/^[a-zA-Z\s]+$/", $title)) {
					$error['title'] ="title must be latters and only space"."<br />";
				}		
		}

		// check ingredients
		if (empty($_POST['ingredients'])) {
			$error['ingredients'] = "enter ingredients <br />";
		}
		else{
			$ingredients =$_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
					$error['ingredients']= "ingredients must be comma separated";
				}
			}

	}
	if (!array_filter($error)) {
		// echo " it is true";
		header('Location: index.php');
	}

	// end of post check
 ?>

<!DOCTYPE html>
<html lang="en">
<?php include("templates/header.php"); ?>

<section class="container grey-text">
	<h4 class="center">Add a pizza</h4>
	<form action="add.php" method="POST" class="white">

		<label for="">Your e-mail:</label>
		<input type="text" name="email" value="<?php echo htmlspecialchars($email);
		?>">
		<div class="red-text">
			<p><?php echo $error['email']; ?></p>
		</div>

		<label for="">Pizza title</label>
		<input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
		<div class=" red-text">
			<p><?php echo $error['title']; ?></p>
		</div>
		
		<label for="">Ingredients</label>
		<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
		<div class="red-text">
			<p><?php echo $error['ingredients']; ?></p>
		</div>

		<div class="center">
			<input type="submit" name="submit" value="submit"
			class="btn brand z-depth-0">
		</div>
	</form>
</section>

<?php include("templates/footer.php"); ?>



</html>	
